$(document).ready(function () {
    $(".font-inc").click(function () {
        var fz = $(".que-content").css("font-size");
        var fzNo = parseInt(fz.substr(-4, 2));
        if (fzNo < 35) {
            fzNo += 1;
            $(".que-content").css("font-size", fzNo + "px");
        }
    });
    $(".font-dec").click(function () {
        var fz = $(".que-content").css("font-size");
        var fzNo = parseInt(fz.substr(-4, 2));
        if (fzNo >= 11) {
            fzNo += -1;
            $(".que-content").css("font-size", fzNo + "px");
        }
    });
    /*---------------------------------------*/
    var ht = $(".top-right").html();
    $(".que-viewport").prepend("<div class='top-right mb-top-right clearfix'> </div>").find(".top-right").prepend(ht);
    /*---------------------------------------*/
 

    /*-----------------------------------------------*/
    $(".btn-slide").click(function () {
        var x = $(".que-viewport").offset().left;
        if (x >= $(window).width()) {
            $('.que-viewport').animate({
                "right": "0"
            });
        }
    });
    $(".btn-slide-close").click(function () {
        $('.que-viewport').animate({
            "right": "-105%"
        });

    });
    /*------------------------------------*/
    $("a.nav-link").click(function(){
        var x = $(this).attr("title");
        alert(x);
    }); 
    /*------------------------------------*/
});