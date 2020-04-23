$(function(){
    //Menu-mobile

    $('.menu-mobile').click(function(){
        if($('.menu-mobile ul').is(':hidden') == true){
            $('.menu-mobile ul').slideToggle();
            $('.menu-mobile').css('background-image','url("/web-projects/project-2/images/fechar.png")');
        }else{
            $('.menu-mobile ul').slideToggle();
            $('.menu-mobile').css('background-image','url("/web-projects/project-2/images/open-menu.png")');
        }
            
    });

});