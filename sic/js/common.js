/*! Copyright 2010 Enideo. Released under dual MIT and GPL licenses. */
(function(a){a.event.special.focusenter={setup:function(){a(this).bind("focusin.focusenter",a.event.special.focusenter.handler)},teardown:function(){a(this).unbind("focusin.focusenter",a.event.special.focusenter.handler)},handler:function(c){var b=a(c.currentTarget);clearTimeout(b.data("focusleaveTimeout"));b.removeData("focusleaveTimeout");if(!b.data("focusentered")){b.data("focusentered",true);c.type="focusenter";a.event.dispatch.apply(this,arguments)}}};a.event.special.focusleave={setup:function(){a(this).bind("focusout.focusleave",a.event.special.focusleave.handler)},teardown:function(){a(this).unbind("focusout.focusleave",a.event.special.focusleave.handler)},handler:function(c){var b=c.currentTarget,d=this,e=arguments,f=setTimeout(function(){c.type="focusleave";a.event.dispatch.apply(d,e);a(b).removeData("focusentered")},100);a(b).data("focusleaveTimeout",f)}};a.event.special.enter={setup:function(){a(this).bind("mouseenter.enter focusenter.enter",a.event.special.enter.handler)},teardown:function(){a(this).unbind("mouseenter.enter focusenter.enter",a.event.special.enter.handler)},handler:function(c){var b=a(c.currentTarget),d=c.type;if(!b.data("hasmouseenter")&&!b.data("hasfocusenter")){c.type="enter";c.originalEventType=d;a.event.dispatch.apply(this,arguments)}d=="mouseenter"?b.data("hasmouseenter",true):b.data("hasfocusenter",true)}};a.event.special.leave={setup:function(){a(this).bind("mouseleave.leave focusleave.leave",a.event.special.leave.handler)},teardown:function(){a(this).unbind("mouseleave.leave focusleave.leave",a.event.special.leave.handler)},handler:function(c){var b=a(c.currentTarget);c.type=="mouseleave"?b.data("hasmouseenter",false):b.data("hasfocusenter",false);if(!b.data("hasmouseenter")&&!b.data("hasfocusenter")){c.originalEventType=c.type;c.type="leave";a.event.dispatch.apply(this,arguments)}}}})(jQuery);


function bTab(t, a) {
	$('div.bd_frame').hide(0);
	$('ul.bd_tab > li > a').removeClass('active');
	$(a).addClass('active');
	$('div.bd_frame-' + t).show(0);
}

function DTab(t, a) {
	$('div.d-tab-box').hide(0);
	$('ul.d-tab > li > a').removeClass('active');
	$(a).addClass('active');
	$('div.d-tab-' + t).show(0);
}

	

    


