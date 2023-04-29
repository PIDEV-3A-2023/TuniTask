(function($) {
    "use strict";




    /*
    -------------------
    Ticker
    -------------------*/
    if ($('#webticker-dark-icons1').length) {
        
        $("#webticker-dark-icons1").webTicker({
            height: 'auto',
            duplicate: true,
            startEmpty: false,
            rssfrequency: 4,
            // startEmpty: true
        });
    };


    /*
    -------------------
    Ticker
    -------------------*/
    if ($('#webticker-wout-icons1').length) {

        $("#webticker-wout-icons1").webTicker({
                height: 'auto',
                duplicate: true,
                startEmpty: false,
                rssfrequency: 5,
                // startEmpty: true
            });
    };


    /*
    -------------------
    Ticker
    -------------------*/
    if ($('#webticker-big').length) {

        $("#webticker-big").webTicker({
                height: 'auto',
                duplicate: true,
                startEmpty: false,
                rssfrequency: 5,
                // startEmpty: true
            });
    };





})(jQuery);