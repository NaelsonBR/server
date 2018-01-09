//

$(function () {
     $('#chevron_left').bind('click',function () {
         if($('.list-menu').css('width','55px').css('transition','1s') &&
             $('.menu-left').css('width','55px').css('transition','1s')){

             $('.letters-all-menu').css('visibility','hidden');

         }

     });

    $('#chevron_right').bind('click',function () {
        if($('.list-menu').css('width','15%').css('transition','0s') &&
            $('.menu-left').css('width','15%').css('transition','0s')){
            
            $('.letters-all-menu').css('visibility','visible');

        }

    });
});