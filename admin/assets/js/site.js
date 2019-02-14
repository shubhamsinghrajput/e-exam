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

    var navCount = $(".menu.navbar-nav").find(".nav-link").length;
    for(i = 1; i <= navCount ; i++){
        var a = $(".menu.navbar-nav .nav-item:nth-child("+i+")" ).find(".nav-link").attr('title');
         if($("body").hasClass(a)){
           $(".nav-link[title="+a+"]").addClass("active")
         };
    }
    /*------------------Add a toggle icon in card-header------------------*/
    
    $("#accordion .card-header .card-link")
        .append("<button class='fa fa-plus' style='position:absolute;right:25px;background:transparent;border:0 none; cursor:pointer;top:15px;'></button> ");
    
    /*------------------------------------*/
});