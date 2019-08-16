$(function() {

    var $cloud_layer           = $("#cloud__layer");
    var $house_layer           = $("#houses__layer");
    var $coming_soon_container = $("#coming-soon__container");

    var $content_layer         = $("#content__layer");
    var $info_btn_container    = $("#info__button-container");
    var $subsribe_container    = $("#subscribe__container");
    var $thank_you_container   = $("#thank-you__container");

    function isMobile() {
        return /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent)
    }

    // is less than screen width
    function isLessThan( width ) {
        return $(window).width() < width;
    }

    setTimeout(function() {
        $cloud_layer.addClass("intro");
        $house_layer.addClass("intro");
        $coming_soon_container.removeAttr("style").css({ "visibility":"visible", "display":"block" });
        
        var timer = isMobile() ? 2000 : 5000;
        setTimeout(function() {
            $house_layer.removeClass("intro").addClass("down");
            
            var comingSoon = isMobile() ? 2000 : 1000 ;
            setTimeout(function(){
                $content_layer.removeClass("hd").addClass("up");
                $coming_soon_container.addClass("down");
            }, comingSoon);

        }, timer);

    }, 2000);


    // be the first 
    $("#info__button").on("click", function(e){
        e.preventDefault();

        if( isMobile() && isLessThan( 500 ) ) {
            $("#info__text-icon").addClass("down");
            $info_btn_container.addClass("down").css("min-height", "156px");
            setTimeout(function() {
                $subsribe_container.removeClass("hd");
            }, 300);
            setTimeout(function(){
                $("left-container").addClass("hd");
            }, 3000);
        }else{
            $subsribe_container.removeClass("hd");
            $info_btn_container.fadeOut(100);
        }

        setTimeout(function() {
            $subsribe_container.removeClass("up down").addClass("up");
        }, isMobile() ? 350 : 0);
        
        if ( $subsribe_container.hasClass("up") || $subsribe_container.hasClass("down")) {
            $cloud_layer.removeClass("up down").addClass("up");
            $house_layer.removeClass("up down").addClass("up");
        }else{
            $cloud_layer.removeClass("intro").addClass("up");
            $house_layer.removeClass("intro").addClass("down");
        }

    });

    // contactform7
    var wpcf7Elm      = document.querySelector( '.wpcf7' );
    var subscribe_btn = $("#subscribe__button");

    wpcf7Elm.addEventListener( 'wpcf7submit', function(e) {
        var status = e.detail.apiResponse.status;
        subscribe_btn.attr("disabled");

        switch ( status ) {
            case 'validation_failed' :
                subscribe_btn.removeAttr("disabled");
            break;

            case 'mail_sent' :
                subscribe_btn.removeAttr("disabled");
                $subsribe_container.addClass("down");
                $cloud_layer.removeClass("up").addClass("down");
                $house_layer.removeClass("down").addClass("up");

                setTimeout(function() {
                    $thank_you_container.hide();

                    if( isMobile() && isLessThan( 500 ) ) {
                        $("#info__text-icon").removeClass("hd").removeAttr("style");
                        // $content_layer.removeClass("up").addClass("up");
                        $("#info__text-icon").removeClass("down");
                        $info_btn_container.removeClass("down");
                        $subsribe_container.removeClass("up down").addClass("hd");
                    }
                    $info_btn_container.removeAttr("style");
                }, 2000);

                // fadeIn Thank You
                $thank_you_container.show();
            break;

        };
    
    });

});