//jq - When browsing the index and having reached the bottom, loads the next page. Requires cached page extension to be ".html" or configured below.
$(document).ready(function() { jq.infinite_scroll.init(); });
try { jq; } catch(a) { jq = {}; }
jq.infinite_scroll = {
	init: function() {
		this.config = {
			enabled: jq.suite_settings && !!jq_jsuite_getCookie("jq_infinite_scroll") ? jq_jsuite_getCookie("jq_infinite_scroll") === "true" : false,
			page_ext: ".html",
			can_load: true,
			sensitivity: 500,
			page_num: 0,
			max_page_num: 0,
			last_thread_count: 0
		}
		jq.suite_settings && jq.suite_settings.info.push({menu:{category:'Навигация',read:this.config.enabled,variable:'jq_infinite_scroll',label:'Бесконечная прокрутка',hover:'Догружает посты по достижению конца страницы'}});
		this.update();
	},
	update: function() {
		if (this.config.enabled) {
			var page_num = $("table.pages > tbody > tr > td:eq(1)").clone();
			var max_page_num = page_num.clone();
			page_num.find('a').remove();
			jq.infinite_scroll.config.page_num = parseInt(page_num.text().replace(/\D/g,''));
			jq.infinite_scroll.config.max_page_num = parseInt(max_page_num.find('a').last().text().replace(/\D/g,''));
			jq.infinite_scroll.config.last_thread_count = $('span.thread').length;
			function getDocHeight() {
				var D = document;
				return Math.max(
					Math.max(D.body.scrollHeight, D.documentElement.scrollHeight),
					Math.max(D.body.offsetHeight, D.documentElement.offsetHeight),
					Math.max(D.body.clientHeight, D.documentElement.clientHeight)
				);
			}

			$(window).scroll(function() {
				if($(window).scrollTop() + $(window).height() + jq.infinite_scroll.config.sensitivity >= getDocHeight() && jq.infinite_scroll.config.can_load) {
					//Load the next page.
					jq.infinite_scroll.config.can_load = false;
					if (jq.infinite_scroll.config.page_num < jq.infinite_scroll.config.max_page_num) {
						jq.infinite_scroll.config.page_num++;
						jq.infinite_scroll.load_page_url(jq.infinite_scroll.config.page_num+jq.infinite_scroll.config.page_ext);
					}
				}
			});
		}
	},
	load_page_url: function(url) {
		$.ajax({url:url,success:function(result){
			$(result).find('span.thread').each(function(){ $('span.thread').last().after($(this)).after("<br clear='left' /><hr />"); });
			$('span.thread:eq('+(jq.infinite_scroll.config.last_thread_count)+')').prepend("<span style='position:absolute; right:3px;'>[Page "+jq.infinite_scroll.config.page_num+"]</span>");
			jq.infinite_scroll.config.last_thread_count = $('span.thread').length;
			jq.infinite_scroll.callme.bind();
			jq.infinite_scroll.config.can_load = true;
		}});
	},
	callme: {
		cache: [],
		push: function(a) { this.cache.push(a); },
		bind: function(input) {
			$.each(jq.infinite_scroll.callme.cache, function(a,b) { b(); });	
		}
	}
};
