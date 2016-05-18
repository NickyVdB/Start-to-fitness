/*!
 * Start Bootstrap - Agency Bootstrap Theme (http://startbootstrap.com)
 * Code licensed under the Apache License v2.0.
 * For details, see http://www.apache.org/licenses/LICENSE-2.0.
 */

// jQuery for page scrolling feature - requires jQuery Easing plugin
$(function() {
    $('a.page-scroll').bind('click', function(event) {
        var $anchor = $(this);
        $('html, body').stop().animate({
            scrollTop: $($anchor.attr('href')).offset().top
        }, 1500, 'easeInOutExpo');
        event.preventDefault();
    });
});

// Highlight the top nav as scrolling occurs
$('body').scrollspy({
    target: '.navbar-fixed-top'
})

// Closes the Responsive Menu on Menu Item Click
$('.navbar-collapse ul li a').click(function() {
    $('.navbar-toggle:visible').click();
});

//distorted button
var bt = document.querySelectorAll('.distortedbutton')[0];
var turbVal = { val: 0.0001 };
var turb = document.querySelectorAll('#filter feTurbulence')[0];
var btTl = new TimelineLite({ paused: true, onUpdate: function() {
  turb.setAttribute('baseFrequency', '0 ' + turbVal.val);
} });

btTl.to(turbVal, 0.2, { val: 0.3 });
btTl.to(turbVal, 0.2, { val: 0.001 });

bt.addEventListener('click', function() {
  btTl.restart();
  });

