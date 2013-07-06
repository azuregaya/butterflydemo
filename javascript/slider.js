/*
 * 网易阅读 Slider based on jQuery
 * 
 * Authored by liyan
 * Or say hello on mail: liam.yan.li@gmail.com
 * Free for all to use, abuse and improve under the MIT license.
 * http://www.opensource.org/licenses/mit-license.php
 * 
 * January  2012(the end of the world:)
 */
(function($){
	$.fn.goSlider = function(options){
		var settings = {};
		
		var defaults = {
			sliderWrap : 'ul.j-slider',
			sliderItem : 'ul.j-slider li',
			animation	:	'fade',
			animationDuration : 400,
			autoDuration : 5000,
			automatic : true,
			hoverPause : true,
			showControl : true,
			controlWrap : 'ol.j-control',
			controlItem : 'ol.j-control li',
			controlLeft : '.j-cl',
			controlRight : '.j-cr',
			orientation : 'horizontal',
			multipleShow : false
		};
		
		settings = $.extend({},defaults,options);
		
		var container = this,
			sliderWrap = this.find(settings.sliderWrap),  //轮播ul容器
			sliderItem = this.find(settings.sliderItem), //轮播的每一项
			sliderCount = sliderItem.length,			//轮播项的数目
			sliderWidth = sliderItem.outerWidth(),
			sliderHeight = sliderItem.outerHeight(),
			animating = false,						//是否动画进行
			paused = false,							//是否暂停
			crtNum = 0,								//当前高亮
			nextNum = 0,
			position = 1,
			active = sliderItem.eq(0),
			nextItem,
			forward = 'forward',
			backward = 'backward',
			controlWrap = this.find(settings.controlWrap),
			controlItem = controlWrap.children(),
			controlLeft = this.find(settings.controlLeft),
			controlRight = this.find(settings.controlRight),
			goInterval;
		
			//console.log('next=======:',nextNum);
			//return;
		var styleSetting = function(){
			if(sliderCount <= 1) return;
			if(settings.animation === 'fade'){
				sliderItem.not(':first').hide();
				sliderItem.css({'position':'absolute','top':'0','left':0});
			}else if(settings.animation === 'slide'){
				var firstItem = sliderItem.eq(0), lastItem = sliderItem.eq(sliderCount-1);
				firstItem.clone().addClass('clone').appendTo(sliderWrap);
				lastItem.clone().addClass('clone').prependTo(sliderWrap);
				
				if(settings.multipleShow){
					var additionItem = sliderItem.eq(sliderCount-2);
					additionItem.clone().addClass('clone').prependTo(sliderWrap);
				}
				
				sliderItem = sliderWrap.children();
				sliderCount = sliderItem.length;
				
				if(settings.orientation === 'horizontal'){
					sliderWrap.css({
						'width' : sliderWidth * sliderCount,
						'left'  : -sliderWidth
					});
					
					sliderItem.css({
						'float' : 'left',
						'position' : 'relative',
						'display'  : 'inline'
					});
				}
				
				if(settings.orientation === 'vertical'){
					sliderWrap.css({
						'top'  : -sliderHeight
					});
					
					sliderItem.css({
						'position' : 'relative',
						'display'  : 'block'
					});
					
				}
			}
			
			if(controlItem.length > 0 && settings.showControl){
				controlItem.eq(0).addClass('j-crt');
			};
		};
		
		
		var checkPos = function(dir){
			if(settings.animation === 'fade'){
				if(dir === forward){
					active.next().length ? nextNum ++ : nextNum = 0;
				}else if(dir === backward){
					active.prev().length ? nextNum -- : nextNum = sliderCount-1;
				}
			}
			if(settings.animation === 'slide'){
				if(dir === forward){
					nextNum = position + 1;
				}else if(dir === backward){
					nextNum = position -1;
				}
			}
			
			return nextNum;
		};
		
		var autoRun = function(){
			goInterval = setInterval(function(){goMove(forward)},settings.autoDuration);
		};
		
		var hoverControl = function(){
			if(settings.hoverPause && settings.automatic){
				container.hover(function(){
					if(!paused){
						clearInterval(goInterval);
						paused = true;
					}
				},function(){
					if(paused){
						goInterval = setInterval(function(){goMove(forward)},settings.autoDuration);
						paused = false;
					}
				});
			}
		};
		
		var setControl = function(){
			if(controlItem.length > 0 && settings.showControl){
				controlItem.hover(function(){
					if(!$(this).hasClass('j-crt') && !animating){
						var crtKey = $(this).find('span').text()*1;
						goMove(false,crtKey);
					}
				},function(){
					
				});
			}
			if(controlLeft.length > 0 || controlRight.length > 0){
				controlLeft.click(function(e){
					e.preventDefault();
					if(!animating) goMove(backward,false);
				});
				controlRight.click(function(e){
					e.preventDefault();
					if(!animating) goMove(forward,false);
				});
			}
		};
		
		var goMove = function(dir,pos){
			if(!animating){
				
				if(dir){
					nextNum = checkPos(dir);
				}else if(pos && settings.animation == 'fade'){
					nextNum = pos -1;
				}else{
					nextNum = pos;
				}
				animating = true;
				//console.log('nextNum is :',nextNum,'position is :',position);
				
				if(settings.animation === 'fade'){
					if(controlItem.length > 0 && settings.showControl){
						controlItem.eq(crtNum).removeClass('j-crt');
						controlItem.eq(nextNum).addClass('j-crt');
					}
					
					nextItem = sliderItem.eq(nextNum);
					
					active.fadeOut(settings.animationDuration);
					nextItem.fadeIn(settings.animationDuration,function(){
						active.hide();
						crtNum = nextNum;
						active = nextItem;
						animating = false;
					});
				}else if(settings.animation === 'slide'){
					if(controlItem.length > 0 && settings.showControl){
						controlItem.eq(position - 1).removeClass('j-crt');
						if(nextNum === sliderCount -1){
							controlItem.eq(0).addClass('j-crt');
						}else if(nextNum === 0){
							controlItem.eq(sliderCount -3).addClass('j-crt');
						}else{
							controlItem.eq(nextNum -1).addClass('j-crt');
						}
					}
					
					if(settings.orientation === 'horizontal') {
						sliderWrap.animate({'left': -nextNum * sliderWidth},settings.animationDuration,function(){
							if(nextNum === 0){
								position = sliderCount -2;
								sliderWrap.css({'left': -position * sliderWidth});
							}else if(nextNum === sliderCount-1){
								position = 1;
								sliderWrap.css({'left': -sliderWidth});
							}else{
								position = nextNum;
							}
							animating = false;
						});
					}else if(settings.orientation === 'vertical' && !settings.multipleShow){
						sliderWrap.animate({'top': -nextNum * sliderHeight},settings.animationDuration,function(){
							if(nextNum === 0){
								position = sliderCount -2;
								sliderWrap.css({'top': -position * sliderHeight});
							}else if(nextNum === sliderCount-1){
								position = 1;
								sliderWrap.css({'top': -sliderHeight});
							}else{
								position = nextNum;
							}
							animating = false;
						});
					}else if(settings.orientation === 'vertical' && settings.multipleShow){
						sliderWrap.animate({'top' : -nextNum* sliderHeight},settings.animationDuration,function(){
							if(nextNum === 0){
								position = sliderCount-2;
								sliderWrap.css({'top': -position * sliderHeight});
							}else if(nextNum === sliderCount -3){
								position = 0;
								sliderWrap.css({'top': 0});
							}else{
								position = nextNum;
							}
							animating = false;
						});
					};
				}
			}
		};
		
		var init = function(){
			styleSetting();
			autoRun();
			hoverControl();
			setControl();
		};
		
		init();
		
		return this;
	};
})(jQuery);