$(document).ready(function() {

    $('#portfolio_grid').mixItUp();

    let toggle_mnu = $('.toggle_mnu'),
        header = $('.header').innerHeight(),
        scroll = $(window).scrollTop();

    checkScroll(scroll);


    $(window).on('scroll', function() {
        scroll = $(this).scrollTop();

        checkScroll(scroll);
    });

    function checkScroll(scroll) {
        if(scroll >= header) {
            toggle_mnu.addClass('fixed')
        } else {
            toggle_mnu.removeClass('fixed')
        };
    };


    $('[data-scroll]').on('click', function(event) {
        event.preventDefault();

        let $this = $(this),
            blockId = $this.data('scroll'),
            blockOfSet = $(blockId).offset().top;

        $('html, body').animate({
            scrollTop: blockOfSet
        }, 1000)
    });


    function heightAdapt() {
        $('.header').css('height', $(window).height());
    }

    heightAdapt();
    $(window).resize(function() {
        heightAdapt();
    });

    //-------section animate------//


    $('.animation_left').animated('fadeInLeft', 'fadeOutLeft');
    $('.animation_center').animated('zoomIn', 'zoomOut');
    $('.animation_right').animated('fadeInRight', 'fadeOutRight');

    $('.left').animated('fadeInLeft', 'fadeOutLeft');
    $('.right').animated('fadeInRight', 'fadeOutRight');


    //-------portfolio-------//

    $('.popup_content').click(function() {

        var items = [];
        $( $(this).attr('href') ).find('.slide').each(function() {
            items.push( {
                src: $(this)
            } );
        });

        $.magnificPopup.open({
            items:items,
            gallery: {
                enabled: true
            }
        });



        var IMG_WIDTH = 500;
        var currentImg = 0;
        var maxImages = 3;
        var speed = 600;
        var imgs;
        var swipeOptions = {
            triggerOnTouchEnd: true,
            swipeStatus: swipeStatus,
            allowPageScroll: "vertical",
            threshold: 100
        };
        $(function () {
            imgs = $(".slide");
            imgs.swipe(swipeOptions);
        });
        /**
         * Catch each phase of the swipe.
         * move : we drag the div
         * cancel : we animate back to where we were
         * end : we animate to the next image
         */
        function swipeStatus(event, phase, direction, distance) {
            //If we are moving before swipe, and we are going L or R in X mode, or U or D in Y mode then drag.
            if (phase == "move" && (direction == "left" || direction == "right")) {
                var duration = 0;
                if (direction == "left") {
                    scrollImages((IMG_WIDTH * currentImg) + distance, duration);

                } else if (direction == "right") {
                    scrollImages((IMG_WIDTH * currentImg) - distance, duration);

                }
            } else if (phase == "cancel") {
                scrollImages(IMG_WIDTH * currentImg, speed);
            } else if (phase == "end") {
                if (direction == "right") {

                    previousImage();
                    $(".mfp-arrow-right").magnificPopup("next");


                } else if (direction == "left") {

                    previousImage();
                    $(".mfp-arrow-left").magnificPopup("prev");
                }
            }
        }
        function previousImage() {
            currentImg = Math.max(currentImg - 1, 0);
            scrollImages(IMG_WIDTH * currentImg, speed);

        }
        function nextImage() {
            currentImg = Math.min(currentImg + 1, maxImages - 1);
            scrollImages(IMG_WIDTH * currentImg, speed);

        }
        /**
         * Manually update the position of the imgs on drag
         */
        function scrollImages(distance, duration) {
            imgs.css("transition-duration", (duration / 1000).toFixed(1) + "s");
            //inverse the number we set in the css
            var value = (distance < 0 ? "" : "-") + Math.abs(distance).toString();
            imgs.css("transform", "translate(" + value + "px,0)");
        }


    });



    $('.s-portfolio li').click(function() {
        $('.s-portfolio li').removeClass('active');
        $(this).addClass('active');
    })

    //------popup------//
    $(".popup").magnificPopup({
        type: "image"
    });

    //-----portfolio-id-function------//
    $('.portfolio_item').each(function(i) {
        $(this).find('a').attr('href', '#work_' + i);
        $(this).find('.work_description').attr('id', 'work_' + i);
        $(this).find('.car_site').attr('href', 'https://www.онлайн-автоюрист.рф');
        $(this).find('.hp_site').attr('href', 'https://www.хочу-поесть.рф');
        $(this).find('.beaty_site').attr('href', 'https://www.бьютископ.рф/');
        $(this).find('.vr_site').attr('href', 'https://vr-traveling.com/');
    });

    $(".toggle_mnu").click(function() {
        $(".sandwich").toggleClass("active");
    });

    $(".top_mnu ul a").click(function() {
        $(".top_mnu").fadeOut(50);
        $(".sandwich").toggleClass("active");
        $(".top_text").css("opacity", "1");
    }).append("<span>");

    $(".toggle_mnu").click(function() {
        if ($(".top_mnu").is(":visible")) {
            $(".top_text").css("opacity", "1");
            $("#svg2").css("opacity", "1");
            $(".top_mnu").fadeOut(50);
            $(".top_mnu li a").removeClass("fadeInUp animated");
        } else {
            $(".top_text").css("opacity", ".1");
            $("#svg2").css("opacity", ".2");
            $(".top_mnu").fadeIn(50);
            $(".top_mnu li a").addClass("fadeInUp animated");
        };
    });

});

let close_btn = document.getElementById('close_btn');

close_btn.addEventListener('click', function() {
    document.querySelector('.container_preloader').classList.add('fade');    
    setTimeout(function() {
        document.querySelector('.container_preloader').classList.add('complete');
    }, 1000)
})

window.addEventListener('load', function() {
    document.querySelector('.container_preloader').classList.add('fade');
    setTimeout(function() {
        document.querySelector('.container_preloader').classList.add('complete');
    }, 1000)
})

setTimeout(function() {
    document.querySelector('.container_preloader').classList.add('fade');
}, 10000)
setTimeout(function() {
    document.querySelector('.container_preloader').classList.add('complete');
}, 11000)