jQuery(window).on('load resize', function () {

});

jQuery(document).ready(function () {
    jQuery('.scroll-horizontal').mousewheel(function (e, delta) {
        console.log('ok');
        this.scrollLeft -= (delta * 40);
        e.preventDefault();
    });
    jQuery(document).scrollsnap({
        snaps: '.scroll-snap',
        direction: 'x',
        proximity: 30,
        easing: 'easeOutBack'
    });
});