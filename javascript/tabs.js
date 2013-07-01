/*
 * 网易阅读 Slider based on jQuery
 * 
 * Authored by liyan
 * Or say hello on mail: liam.yan.li@gmail.com
 * Free for all to use, abuse and improve under the MIT license.
 * http://www.opensource.org/licenses/mit-license.php
 * 
 * January  2013
 */
(function($){
	$.fn.goTabs = function(options){
		var settings = {};
		
		var defaults = {
			switchOps : 'click',
			ifFade : false,
			tabs : '.tabs ul li',
			contents : '.contents .tab-item',
			hoverDuring : 200,
			callBackEvent : function(){
				$.noop();
			}
		};
		
		settings = $.extend({},defaults,options);
		
		var container = this,
			index = 0,
			tabTop = this.find(settings.tabs),  //tabs头部
			tabContents = this.find(settings.contents); //tab内容
		

		var setDefault = function(){
			tabContents.each(function(idx){
				if(idx !== 0){
					tabContents.eq(idx).hide();
				}
			});
			tabTop.each(function(idx){
				if(idx === 0){
					tabTop.eq(idx).addClass('crt');
				}
			});
		};

		var switchFunc = function(ele){
			if($(ele).hasClass('crt')){
				return;
			}

			tabTop.each(function(idx){
			 	$(this).removeClass('crt');
			 	if(tabTop.eq(idx)[0] === ele){
			 		index = idx;
			 	}
			 });

			 $(ele).addClass('crt');
			 settings.callBackEvent && settings.callBackEvent();
			 
			 tabContents.each(function(idx){
			 	if(idx !== index){
			 		tabContents.eq(idx).hide();
			 	}else{
			 		tabContents.eq(idx).show();
			 	}
			 });
		}

		var tabClickEvent = function(){
			tabTop.click(function(){
				var that = this;
				switchFunc(that);
			});
		};

		var tabHoverEvent = function(){
			tabTop.hover(function(){
				var that = this;
				hoverTimer = setTimeout(function(){
					switchFunc(that);
				},200);
			},function(){
				clearTimeout(hoverTimer);
			});
		};
		
		var init = function(){
			setDefault();
			if(settings.switchOps === 'click'){
				tabClickEvent();
			}else if(settings.switchOps === 'hover'){
				tabHoverEvent();
			}
		};
		
		init();
		
		return this;
	};
})(jQuery);