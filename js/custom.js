$(document).ready(function () {
    $(window).on("scroll", function () {
        const top = $(window).scrollTop();
        if (top >= 40) {
            $(".header_area").addClass("navbar_fixed");
        } else {
            $(".header_area").removeClass("navbar_fixed");
        }
    });
});