$(function (){
    $(window).scroll(function(){
        if ($(this).scrollTop() > ($("#carousel1").height()-150))
        {
            $('.navbar').addClass("bg-color");
            // $('.navbar').removeClass("container");
        }
        else
        {
            $(".navbar").removeClass("bg-color");
            // $(".navbar").addClass("container");
        }
    });
});
