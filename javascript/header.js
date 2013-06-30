(function($){
    //微信hover
    (function(){
       $('#J_WX').click(function(){
            $(this).next().fadeIn();
       });

       $('#J_WXX').click(function(){
            $(this).parent().fadeOut();
       });

       var navHover = (function(){
            var subTop = $('.menu-item'),subbottom = $('.site-menu-sub .sub');


            function showSubmenu(classname){
                subbottom.each(function(){
                    if($(this).hasClass(classname)){
                        $(this).fadeIn();
                    }else{
                        $(this).hide();
                    }
                });
            }

            $('.header').mouseleave(function(){
                subbottom.each(function(){
                    $(this).hide();
                });
            });

            subTop.mouseenter(function(e){
                var name = $(this).attr('tab');
                showSubmenu(name);
            });
       })();

    })();
})(jQuery);
