// Naelson.g.saraiva@gmail.com

$(function () {
     $('#chevron_left').bind('click',function () {
         if($('.list-menu').css('width','55px').css('transition','1s') && $('.menu-left').css('width','55px').css('transition','1s')

         && $('.list-menu-dashboard').css('width','55px').css('transition','1s') && $('.menu-left-dashboard').css('width','55px').css('transition','1s')){
             $('.letters-all-menu').css('visibility','hidden');

         }
         $('.letters-all-menu-dashboard').css('visibility','hidden');
         $('.dashboard-list').addClass('dashboard-list-javascript');

         $('.dashboard-list-javascript').hover(function () {
             $('.letters-all-menu-dashboard').css('visibility','visible');

         })

     });

    $('#chevron_right').bind('click',function () {

        var n = 0;
        if($('.list-menu').css('width','15%').css('transition','0s') && $('.menu-left').css('width','15%').css('transition','0s')

            && $('.list-menu-dashboard').css('width','15%').css('transition','0s') && $('.menu-left-dashboard').css('width','15%').css('transition','0s')){
            $('.letters-all-menu').css('visibility','visible');
        }

        $('.letters-all-menu-dashboard').css('visibility','visible');
        $('.dashboard-list').removeClass('dashboard-list-javascript').addClass('dashboard-list');

    });


});


var num = 0; //Global
$(function () {

    $('#btn-dashboard-id').bind('click',function () {
        num = num +1;
        if(num === 1)
       $('.div-dashboard-list').css('height','98px');

        if (num === 2){
            $('.div-dashboard-list').css('height','0.1px');
            num = 0;
        }

    });

});


/* Shapes forma */
$(function () {
    $('#admin-config').bind('click',function () {

        num = num +1;
        if(num === 1){
            $('.bg-config').show();
        }

        if(num === 2){
            $('.bg-config').css('display','none');
            num = 0;
        }
    });

});

//hide scroll mouse area configuration
$(function () {
    $(window).scroll(function () {
        $('.bg-config').css('display','none');
    })


});
