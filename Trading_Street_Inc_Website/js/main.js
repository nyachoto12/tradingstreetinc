$(function() {
    $('.your-slider').carouselLineArrow({
        lineDur: 6000, //duration of line-time animation (ms), default is 5000
        slideDur: 600, //duration of toggle slide animation (ms), default is 500
        heightIsProportional: true, // height of slider is proportional to the width when resized, defaultl is true
        linePosition: 'top', // position of line-time: 'bottom' or 'top', default is 'bottom'
        lineHeight: '3px', // height of line-time (px, em, rem, %), default is '5px';
        lineColor: ' #17A2B8' // color of line-time, default is 'red'
    });
})