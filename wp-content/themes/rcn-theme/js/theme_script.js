(function ($) {
    $(document).ready(function () {
        console.log("test");
        $('.counter').counterUp({
            delay: 1,
            time: 2000
        });
        $('.counter').addClass('animated fadeInDownBig');
        $('p').addClass('animated fadeIn');
    });
})