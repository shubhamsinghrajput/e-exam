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

//    $(document).click(function () {
//        $('.que-viewport').animate({
//            "left": "100%",
//        }, function () {
//            $(this).css({
//                "left": "100%"
//            });
//        });
//    });
    $('.que-viewport').click(function (event) {
        event.stopPropagation();
    });
    $(".btn-slide").click(function () {
//        $('.que-viewport').css({
//            "left": "auto",
//            "right": "0"
//        });
        /*-------------------------------*/
        var x = $(".que-viewport").offset().left;
        alert(x)
        if (x < $(window).width()) {
            
//            function (event) {
//                event.stopPropagation();
//            }
        }
    });
});