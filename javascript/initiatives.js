$(document).ready(function () {

var count = 2;

$(function () {
    $('.slides div:first').addClass('top');
    var change = function () {

        /*$("#tuk-tuk-1").animate({
            "font-size": "2px"
        }, 200);
        $("#tuk-tuk-2").animate({
            "font-size": "2px"
        }, 200);
        $("#tuk-tuk-3").animate({
            "font-size": "2px"
        }, 200);
        $("#tuk-tuk-4").animate({
            "font-size": "2px"
        }, 200);

        $("#fake-tuk-tuk-1").animate({
            "font-size": "2px",
            "opacity": 0
        }, 200);
        $("#fake-tuk-tuk-2").animate({
            "font-size": "2px",
            "opacity": 0
        }, 200);
        $("#fake-tuk-tuk-3").animate({
            "font-size": "2px",
            "opacity": 0
        }, 200);
        $("#fake-tuk-tuk-4").animate({
            "font-size": "2px",
            "opacity": 0
        }, 200);

        $("#tuk-tuk-" + count).animate({
            "font-size": "5px",
            "backgroundColor": "#FEC840"
        }, 200);

        $("#fake-tuk-tuk-" + count).animate({
            "font-size": "5px",
            "opacity": 1
        }, 200);

        $(".slide-text").animate({
            "opacity": 0
        }, 200, function () {
            $(this).css({
                "top": "40%",
            });
        });

        $("#slide-text-" + count).animate({
            "opacity": 1,
            "top": "50%"
        });*/



        var curr = $('.slides div.top');
        var next = curr.next();
        if (!next.length) {

            next = $('.slides div:first');
            next.addClass('top');

            curr.animate({opacity: 0.0}, 1000, function () {
                curr.removeClass('top');
                curr.css({
                    opacity: 1.0
                });
            });

        } else {
            next.css({opacity: 0.0})
                    .addClass('top')
                    .animate({
                        opacity: 1.0

                    }, 1000, function () {
                        curr.removeClass('top');
                    });
        }
        count++;
        if (count > 4)
            count = 1;
    };
    setInterval(change, 5000);

});






    $('#menu-drawer').click(function () {
        $("body").css("overflow-y", "hidden");
        $('#ad-menu-wrapper').animate({
            'left': '0%'
        }, 400);
        $('#body-wrapper').animate({left: '30%'}, 400);
        $('#menu-drawer').fadeOut('normal');
        
    });

    $('#menu-withdrawer').click(function () {
        $("body").css("overflow-y", "scroll");
        $('#ad-menu-wrapper').animate({left: '-30%'}, 400);
        $('#body-wrapper').animate({left: '0%'}, 400);
        $('#menu-drawer').fadeIn('normal');
    });
    
    
});
