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
    //    function queChart() {
    //        
    //        $('.que-viewport').click(function (event) {
    //            event.stopPropagation();
    //        });
    //        $(".btn-slide").click(function () {
    //            var x = $(".que-viewport").offset().left;
    //
    //            if (x >= $(window).width()) {
    //                $('.que-viewport').animate({
    //                     "right": "0"
    //                });
    //            }
    //        });
    //        $(document).click(function () {
    //            var x = $(".que-viewport").offset().left;
    //            if ($(this).hasClass("btn-slide")) { 
    //               
    //            }
    //            
    //        });
    //    }
    //    queChart();



    /*-----------------------------------------------*/
        window.addEventListener('mouseup', function (event) {
            var pol = document.getElementById('pol');
             if (event.target != pol && event.target.parentNode != pol) {
                pol.style.right = '-100%';
            }
        });
//    window.addEventListener('mouseup', function (event) {
//        var pol = document.getElementById('pol');
//        if (event.target != pol && event.target.childNodes != pol) {
//            $(".que-viewport").css("right","-100%");
//        }
//    });
    $(".btn-slide").click(function () {
        var x = $(".que-viewport").offset().left;
        if (x >= $(window).width()) {
            $('.que-viewport').css({
                "right": "0"
            });
        }
    });
    /*------------------------------------*/
});