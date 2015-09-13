//jq - Forces long posts to wrap at 75% of total page width instead of 100%.
$(document).ready(function() { jq.post_wrap.init(); });
try { jq; } catch(e) { jq = {}; }
jq.post_wrap = { 
	init: function() {
		jq.thread_updater && jq.thread_updater.callme.push(jq.post_wrap.update);
		jq.infinite_scroll && jq.infinite_scroll.callme.push(jq.post_wrap.update);
		this.config = {
			enabled: jq.suite_settings && !!jq_jsuite_getCookie("jq_force_post_wrap") ? jq_jsuite_getCookie("jq_force_post_wrap") === "true" : true,
			selector: ".reply"
		}
		jq.suite_settings && jq.suite_settings.info.push({menu:{category:'Прочее',read:this.config.enabled,variable:'jq_force_post_wrap',label:'Посты по размеру экрана',hover:'Длинные посты пережимаются на 75\% от размера экрана.'}});
		this.update();
	},
	update: function() {
		if (jq.post_wrap.config.enabled) {
			$(jq.post_wrap.config.selector).parent().parent().parent().css("max-width","75%");
		}
	}
};
