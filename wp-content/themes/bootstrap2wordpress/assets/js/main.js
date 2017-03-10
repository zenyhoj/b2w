// Parallax Effect
$(function () {
    //cache the window object
    var $window = $(window);

    $('section[data-type="background"]').each(function () {

        var $bgobj = $(this); // assigning the object

        $(window).scroll(function () {

            //scroll the window at var speed
            //the yPos is negative because we're scrolling it up

            var yPos = -($window.scrollTop() / $bgobj.data('speed'));
            // Put together our final background position
            var coords = '50% ' + yPos + 'px';

            // Move the background
            $bgobj.css({ backgroundPosition: coords });

        });

    });

});//End of Parallax


