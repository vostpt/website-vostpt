//switch navbar theme depending on scroll position
$(window).scroll(function() {
    let scrollPos = $(window).scrollTop();

    if (scrollPos >= 1) {
        $(".navbar-laravel").removeClass("navbar-dark");
        $(".navbar-laravel").addClass("navbar-light");
    } else {
        if (!$(".navbar-collapse.show").length) {
            $(".navbar-laravel").removeClass("navbar-light");
            $(".navbar-laravel").addClass("navbar-dark");
        }
    }
});

//handle mobile collapible colors
$(".navbar-laravel").on("show.bs.collapse", function(e) {
    $(".navbar-laravel").removeClass("navbar-dark");
    $(".navbar-laravel").addClass("navbar-light");
});

$(".navbar-dark").on("hide.bs.collapse", function(e) {
    let scrollPos = $(window).scrollTop();

    if (scrollPos >= 1) {
        $(".navbar-laravel").removeClass("navbar-dark");
        $(".navbar-laravel").addClass("navbar-light");
    } else {
        $(".navbar-laravel").removeClass("navbar-light");
        $(".navbar-laravel").addClass("navbar-dark");
    }
});
