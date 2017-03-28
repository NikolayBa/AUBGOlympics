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
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]')
                    .attr('content')
            }
        });
        /*var semester = $('#semester').valueOf();
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

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]')
                    .attr('content')
            }
        });
        $.ajax({
         type: "POST",
         url: './submit/fillSemester',
         cache: false,
         success: function(response){
         },
         error: function (error) {
         }
         });
        return false;

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
