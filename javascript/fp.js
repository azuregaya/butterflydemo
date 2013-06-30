(function($){
    //幻灯片
    (function(){
        var isStopAutoPlay;         //是否停止自动播放

        var $element = $('#flip');

        var $slides = $('div.slide', $element);
        var activeSlideCls = 'slide-active';
        var $activeSlide = $slides.filter('.' + activeSlideCls);

        var $triggers = $('div.trigger span', $element);
        var activeTriggerCls = 'active';
        var $activeTrigger = $triggers.filter('.' + activeTriggerCls);

        $element.mouseenter(function(){
            isStopAutoPlay = true;
        }).mouseleave(function(){
            isStopAutoPlay = false;
            autoplay();
        });

        /**
         * 切换到指定张
         */
        var isSwitching = false;
        function switchTo(idx, then){
            if(isSwitching){ return; }
            isSwitching = true;

            //trigger控制
            $activeTrigger.removeClass(activeTriggerCls);
            $activeTrigger = $triggers.filter('[data-index="' + idx + '"]').addClass(activeTriggerCls);

            $activeSlide.fadeOut(1800, function(){
                //幻灯片控制
                $activeSlide.removeClass(activeSlideCls).css({
                    opacity: 1,
                    display: 'block'
                });
                $activeSlide = $slides.eq(idx).addClass(activeSlideCls);

                if(then){
                    then();
                }

                isSwitching = false;
            });
        }

        /**
         * 自动播放
         */
        function autoplay(){
            setTimeout(function(){
                if(isStopAutoPlay){ return; }

                var $next = $activeSlide.next('div.slide');
                return switchTo($next.length ? ($next.attr('data-index') - 0) : 0, autoplay);
            }, 5000);
        }

        //启动自动播放
        autoplay();

        $triggers.click(function(){
            $this = $(this);

            if($this.hasClass(activeTriggerCls)){
                return;
            }

            switchTo($this.attr('data-index') - 0);
        });

    })();
})(jQuery);
