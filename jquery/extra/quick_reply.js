//jq - Lets you reply, quickly. Uses the based jQuery Form Plugin.
$(document).ready(function() { jq.quick_reply.init(); });
try { jq; } catch(a) { jq = {}; }
jq.quick_reply = {
	init: function() {
		this.config = {
			enabled: jq.suite_settings && !!jq_jsuite_getCookie("jq_quick_reply_enabled") ? jq_jsuite_getCookie("jq_quick_reply_enabled") === "true" : true,
			persist: jq.suite_settings && !!jq_jsuite_getCookie("jq_quick_reply_persist") ? jq_jsuite_getCookie("jq_quick_reply_persist") === "true" : false,
			autoreload: jq.suite_settings && !!jq_jsuite_getCookie("jq_quick_reply_autoreload") ? jq_jsuite_getCookie("jq_quick_reply_autoreload") === "true" : false,	
			op: ($("span.op_post > a[title='Quote']").length == 1) ? parseInt($("span.op_post > a[title='Quote']").text()) : false
		}
		this.details = { baseurl: "", qrbasetitle: "", basename: "", baseemail: "" }
		if (jq.suite_settings) {
			//jq.suite_settings.info.push({menu:{category:'Цитирование и ответ',read:this.config.enabled,variable:'jq_quick_reply_enabled',label:'Быстрый ответ',hover:'Инлайновая форма постинга'}});
			jq.suite_settings.info.push({menu:{category:'Цитирование и ответ',read:this.config.persist,variable:'jq_quick_reply_persist',label:'Оставлять плавающую форму после постинга',hover:'Keep quick reply window open after posting'}});
			jq.suite_settings.info.push({menu:{category:'Цитирование и ответ',read:this.config.autoreload,variable:'jq_quick_reply_autoreload',label:'Автообновление по постингу',hover:'Auto-reload the page after posting if thread updater is not enabled'}});
		}

			$(document).on("click", "a.qu[title='Quote']", function(e) {
				e.preventDefault();
				if ($("div#jq_jquery_quick_reply_container").length > 0) {
					insertAtCaret("jq_jquery_quick_reply_textarea",">>"+$(this).text()+"\n");
				} else {	
					jq.quick_reply.spawn_window($(this).text());
				}
			});

	},


	spawn_window: function(input) {
		var input = (input) ? ">>"+input+"\n" : ""; var op = this.config.op; 
		var qreply_clone = $("div.postarea > form").clone();
		qreply_clone.find("form").attr({"id":"jq_jquick_reply_form"});
		qreply_clone.find("td").css({"padding":"0px","margin":"0px"})
		qreply_clone.find("div.rules").parent().parent().remove();
		qreply_clone.find("input").each(function() {
			$(this).attr("placeholder",$(this).parent().prev("td").text()).removeAttr("size");
			if ($(this).attr('type') !== 'submit') { $(this).css("width","300px"); }
			if ($(this).attr('type') == 'password') { $(this).css("width","70px"); }
			if ($(this).attr('type') == 'text' && $(this).attr("name") == "sub") { $(this).css("width","210px"); }
			if ($(this).attr('name') == 'num') {
				$(this).css({"width":"140px","margin-left":"2px"}).attr("placeholder","Капча");
				var captcha = $(this).parent().prev("td").find("img").clone();
				jq.quick_reply.details.baseurl = captcha.attr("src");
				captcha.attr({"src":jq.quick_reply.details.baseurl+"?"+new Date().getTime(),"id":"qr_captcha"}).css({"cursor":"pointer","vertical-align":"middle","margin-left":"2px"});
				$(this).parent().prev("td").remove();
				$(this).before(captcha);
			} else {
				$(this).parent().prev("td").remove();
			}
		});
		jq.quick_reply.details.qrbasetitle = "Ответ";
		qreply_clone.find("textarea").attr("id","jq_jquery_quick_reply_textarea").removeAttr("cols").css({"width":"300px","min-width":"300px"}).parent().prev("td").remove();
		$("div#jq_jquery_quick_reply_container").remove();
		$("body").append("<div style='max-width:310px;position:fixed;left:59%;top:22%' id='jq_jquery_quick_reply_container' class='reply'><div id='jq_jquery_quick_reply_container_title' class='theader' style='text-align:center;width:100%;cursor:move'><small><strong>"+jq.quick_reply.details.qrbasetitle+"</strong></small><img id='r_qr_close' style='float:right;cursor:pointer;position:relative;right:5px;font-size:small' src='jquery/close.png' title='Закрыть' alt='[X]'></div></div>")
		$("div#jq_jquery_quick_reply_container").append("<span style='max-width:300px' id='jq_jquery_quick_reply_window'></span>");
		$("span#jq_jquery_quick_reply_window").append(qreply_clone);
		$("img#qr_captcha").on("click", function() { $(this).attr("src",jq.quick_reply.details.baseurl+"?"+new Date().getTime()); });	
		$("#jq_jquery_quick_reply_container_title > img#r_qr_close").on("click", function() { $("div#jq_jquery_quick_reply_container").remove(); });
		if (jQuery.ui) { $("div#jq_jquery_quick_reply_container").draggable({ handle:'div#jq_jquery_quick_reply_container_title'}); } //Bind jQuery UI draggable function.
		else { $("#jq_jquery_quick_reply_container").css({"right":"0px","bottom":"100px","top":""}); } //If we don't have jQuery UI, just stick in in the bottom-right corner.
		insertAtCaret("jq_jquery_quick_reply_textarea",input);
		var options = { success: jq.quick_reply.callbacks.reply_success, resetForm: true, uploadProgress: jq.quick_reply.callbacks.upload_progress, beforeSubmit:jq.quick_reply.callbacks.beforeSubmit};
		$('#jq_jquery_quick_reply_window > form').ajaxForm(options); 
	},
	callbacks: {
		reply_success: function() {
			if (jq.quick_reply.config.persist !== true) {
				$("div#jq_jquery_quick_reply_container").remove();
				if (typeof jq.thread_updater.load_thread_url == "function") {
					jq.thread_updater.load_thread_url();
				} else {
					jq.quick_reply.config.autoreload && location.reload(); 
				}
			} 
			else {
				jq.thread_updater.load_thread_url();
				$("#jq_jquery_quick_reply_container_title > small > strong").text(jq.quick_reply.details.qrbasetitle);
				jq.quick_reply.details.basename && $("#jq_jquery_quick_reply_container").find("input[name=name]").val(jq.quick_reply.details.basename);
				jq.quick_reply.details.baseemail && $("#jq_jquery_quick_reply_container").find("input[name=email]").val(jq.quick_reply.details.baseemail);
				$("#jq_jquery_quick_reply_container").find("input[type=submit]").removeAttr("disabled");
			}
		},
		upload_progress: function(e, pos, total, pC) {
			$("#jq_jquery_quick_reply_container").find("input[type= ]").attr("disabled","disabled");
			$("#jq_jquery_quick_reply_container_title > small > strong").text("Отправка... "+pC+"%");
		},
		beforeSubmit: function(arr, $form, options) {
			jq.quick_reply.details.basename = $("#jq_jquery_quick_reply_container").find("input[name=name]").val();
			jq.quick_reply.details.baseemail = $("#jq_jquery_quick_reply_container").find("input[name=email]").val();
		}
		
	}
}

//http://stackoverflow.com/a/1064139
function insertAtCaret(areaId,text) {
    var txtarea = document.getElementById(areaId);
    var scrollPos = txtarea.scrollTop;
    var strPos = 0;
    var br = ((txtarea.selectionStart || txtarea.selectionStart == '0') ? 
    	"ff" : (document.selection ? "ie" : false ) );
    if (br == "ie") { 
    	txtarea.focus();
    	var range = document.selection.createRange();
    	range.moveStart ('character', -txtarea.value.length);
    	strPos = range.text.length;
    }
    else if (br == "ff") strPos = txtarea.selectionStart;

    var front = (txtarea.value).substring(0,strPos);  
    var back = (txtarea.value).substring(strPos,txtarea.value.length); 
    txtarea.value=front+text+back;
    strPos = strPos + text.length;
    if (br == "ie") { 
    	txtarea.focus();
    	var range = document.selection.createRange();
    	range.moveStart ('character', -txtarea.value.length);
    	range.moveStart ('character', strPos);
    	range.moveEnd ('character', 0);
    	range.select();
    }
    else if (br == "ff") {
    	txtarea.selectionStart = strPos;
    	txtarea.selectionEnd = strPos;
    	txtarea.focus();
    }
    txtarea.scrollTop = scrollPos;
}
