
$(document).ready(function() {
    $(".down").click(function() {
         $('html, body').animate({
             scrollTop: $(".up").offset().top
         }, 1000);
     });
    });
    
    $(document).ready(function() {
    $(".up").click(function() {
         $('html, body').animate({
             scrollTop: $(".down").offset().top
         }, 1000);
     });
    });

