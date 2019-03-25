/*
 Template Name: FoodEpik
 File Name: custom.js
 Author Name: ThemeVault
 Author URI: http://www.themevault.net/
 License URI: http://www.themevault.net/license/
 */

$(window).load(function () {
    // Animate loader off screen
    $("#loader-wrapper").fadeOut("slow");
    ;
});

$(document).ready(function () {
    $(window).scroll(function () {
        if ($(this).scrollTop() > 100) {
            $('#back-to-top').fadeIn();
        } else {
            $('#back-to-top').fadeOut();
        }
    });
    $('#back-to-top').click(function () {
        $("html, body").animate({scrollTop: 0}, 600);
        return false;
    });

});
$(document).ready(function () {
    jQuery(".hover").mouseleave(
            function () {
                jQuery(this).removeClass("hover");
            }
    );
});

