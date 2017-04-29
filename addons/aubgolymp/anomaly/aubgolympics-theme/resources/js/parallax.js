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


    $('select').select2();
    $('#semester').select2({
        placeholder: "Select a semester"
    });
    $('#events_select').select2({
        placeholder: "Select an event"
    });
    $('#sports').select2({
        placeholder: "Select a sport"
    });

    jQuery('.tp-banner').show().revolution(
        {
            dottedOverlay:"none",
            delay:10000,
            startwidth:1140,
            startheight:700,
            hideThumbs:200,

            thumbWidth:100,
            thumbHeight:50,
            thumbAmount:5,

            navigationType:"bullet",
            navigationArrows:"none",

            touchenabled:"on",
            onHoverStop:"off",

            swipe_velocity: 0.7,
            swipe_min_touches: 1,
            swipe_max_touches: 1,
            drag_block_vertical: false,

            parallax:"mouse",
            parallaxBgFreeze:"on",
            parallaxLevels:[7,4,3,2,5,4,3,2,1,0],

            keyboardNavigation:"off",

            navigationHAlign:"center",
            navigationVAlign:"bottom",
            navigationHOffset:0,
            navigationVOffset:40,

            shadow:0,

            spinner:"spinner4",

            stopLoop:"off",
            stopAfterLoops:-1,
            stopAtSlide:-1,

            shuffle:"off",

            autoHeight:"off",
            forceFullWidth:"off",



            hideThumbsOnMobile:"off",
            hideNavDelayOnMobile:1500,
            hideBulletsOnMobile:"off",
            hideArrowsOnMobile:"off",
            hideThumbsUnderResolution:0,

            hideSliderAtLimit:0,
            hideCaptionAtLimit:0,
            hideAllCaptionAtLilmit:0,
            startWithSlide:0,
            fullScreenOffsetContainer: ".header"
        });
    /*$.ajax({
     type: "POST",
     url: './submit/fillSemester',
     cache: false,
     contentType: false,
     processData: false,
     success: function(data){
         window.alert(data);
     },
     error: function (error) {
     $('#result').append("We have encountered an" +
     " error while submitting your article!")
     }
     });*/

    $("#semester").change(function() {
        // $.ajaxSetup({
        //     headers: {
        //         'X-CSRF-TOKEN': $('meta[name="csrf-token"]')
        //             .attr('content')
        //     }
        // });
        /*var semester = $('#semester').val();
        window.alert(semester);*/
        $.ajax({
         type: "POST",
         url: './submit/fillSemester',
         cache: false,
         contentType: false,
         processData: false,
         success: function(response){
         if(response == "Success!"){
         $('#result').append("You have successfully" +
         " submitted your article!");
         }
         },
         error: function (error) {
         $('#result').append("We have encountered an" +
         " error while submitting your article!")
         }
         });
        return false;

    });

    $('#register').on('click', function(){
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
            type: "POST",
            url: './register',
            cache: false,
            success: function(){
                location.href = "http://www.dev.aubgolympics.com/register"
            },
            error: function (error) {
            }
        });
        return false;
    });

    $('#logmein').on('click', function(){
        // $.ajaxSetup({
        //     headers: {
        //         'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        //     }
        // });
        // $.ajax({
        //     type: "POST",
        //     url: './login',
        //     cache: false,
        //     success: function(){
        //         location.href = "http://www.dev.aubgolympics.com/login"
        //     },
        //     error: function (error) {
        //     }
        // });
        // return false;
        login();
    });


});


function showResults(){
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]')
                .attr('content')
        }
    });
    var formData = $('form')[0];
    var dataObj = new FormData(formData);
    window.alert(dataObj);
    // var specifications = [];
    // specifications['semester'] = $('#semester').val();
    // specifications['event'] = $('#events_select').val();
    // specifications['sport'] = $('#sports').val();
    $.ajax({
        type: "POST",
        url: './champions/show_results',
        data: dataObj,
        cache: false,
        contentType: false,
        processData: false,
        success: function(response){{
            $('#championsScores').append(response);
            // $('#championsScores').append(response[0]['name']);
        }
        },
        error: function (error) {
            $('#result').append("We have encountered an" +
                " error while submitting your article!")
        }
    });
    return false;

}
/*
$("#show_results").on('click',function() {
});*/
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
