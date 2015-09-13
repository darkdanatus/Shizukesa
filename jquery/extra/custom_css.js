//jq - Allows user to inject custom CSS rules.
$(document).ready(function() { jq.custom_css.init(); });
try { jq; } catch(a) { jq = {}; }
jq.custom_css = {
	init: function() {
		this.config = {
			enabled: jq.suite_settings && jq_jsuite_getCookie("custom_css_enabled") ? jq_jsuite_getCookie("custom_css_enabled") === "true" : false
		}
		jq.suite_settings && jq.suite_settings.info.push({menu:{category:'Прочее',read:this.config.enabled,variable:'custom_css_enabled',label:'Пользовательский CSS',hover:'Include your own CSS rules'},popup:{label:'[Изменить]',title:'Пользовательский CSS',type:'textarea',variable:'custom_css_defined',placeholder:'Вставьте кастомный CSS сюда.'}});
		if (jq.custom_css.config.enabled) {
			$("<style type='text/css'>"+jq_jsuite_getCookie("custom_css_defined")+"</style>").appendTo("head");
		}
	}
