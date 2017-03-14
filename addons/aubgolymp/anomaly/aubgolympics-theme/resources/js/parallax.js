$(document).ready(function() {
 remove();

 $("#controls").on('click', 'span', function() {
     $("#slideshow .parallax img").removeClass("opaque");

     var newImage = $(this).index();
     $("#slideshow .parallax img").eq(newImage).addClass("opaque");

     $("#controls span").removeClass("selected");
     $(this).addClass("selected");
 });

    $('#media').carousel({
        pause: true,
        interval: false,
    });
});

function remove(){
    $('#parallax').css('background-image', function(){
        var pic = $(this).find('img:first').attr('src');
        $('#parallax img:first').css({'visibility':'hidden','width':'100%','height':'100%'});
        return 'url(' + pic + ')';
    })
    $('#something').css('background-image', function(){
        var pic1 = $(this).find('img:first').attr('src');
        $('#something img:first').css({'visibility':'hidden','width':'100%','height':'100%'});
        return 'url(' + pic1 + ')';
    })
    $('#charity_img').css('background-image', function(){
        var pic2 = $(this).find('img:first').attr('src');
        $('#charity_img img:first').css({'visibility':'hidden','width':'100%','height':'100%'});
        return 'url(' + pic2 + ')';
    })
}