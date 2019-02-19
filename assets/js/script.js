

// scroll down 

$(document).ready(function() {


    $(".down").click(function() {
         $('html, body').animate({
             scrollTop: $(".up").offset().top
         }, 1000);
     });


    $(".up").click(function() {
         $('html, body').animate({
             scrollTop: $(".down").offset().top
         }, 1000);
     });
    // });


    ///  Desactiver le bouton apres un clik



        $("#formABC").submit(function (e) {

            //stop submitting the form to see the disabled button effect
            e.preventDefault();

            //disable the submit button
            $("#btnSubmit").attr("disabled", true);


            return true;

        });


});
