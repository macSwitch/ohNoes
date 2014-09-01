// Conditionizr v4.1.0 Config

conditionizr.add('chrome', [], function () {
  return !!window.chrome && /google/i.test(navigator.vendor);
});

conditionizr.add('safari', [], function () {
  return /constructor/i.test(window.HTMLElement);
});

conditionizr.add('firefox', [], function () {
  return typeof InstallTrigger !== 'undefined';
});

conditionizr.add('ie10', [], function () {
  var version = false;
  /*@cc_on
    if (/^10/.test(@_jscript_version) && /MSIE 10\.0(?!.*IEMobile)/i.test(navigator.userAgent))
    version = true
  @*/
  return version;
});

conditionizr.add('ie9', [], function () {
  var version = false;
  /*@cc_on
    if (/^9/.test(@_jscript_version) && /MSIE 9\.0(?!.*IEMobile)/i.test(navigator.userAgent))
    version = true
  @*/
  return version;
});

conditionizr.add('ie8', [], function () {
  var version = false;
  /*@cc_on
    if (@_jscript_version > 5.7 && !/^(9|10)/.test(@_jscript_version))
    version = true
  @*/
  return version;
});

conditionizr.add('touch', [], function () {
  return !!'ontouchstart' in window || !!navigator.msMaxTouchPoints;
});


conditionizr.config({
  assets: '/assets/js/',
  tests: {
    'safari': ['class'],
    'chrome': ['class'],
    'firefox': ['class'],
    'ie8': ['class'],
    'ie9': ['class'],
    'ie10': ['class'],
    'touch': ['class']
  }
});

// Scroll to Top

$(window).scroll(function() {
    if ($(this).scrollTop()) {
        $('#to-top:hidden').stop(true, true).fadeIn();
    } else {
        $('#to-top').stop(true, true).fadeOut();
    }
});

// Equal Heights
$.fn.equalizeHeights = function() {
    var maxHeight = this.map(function(i,e) {
        return $(e).height();
    }).get();

    return this.height( Math.max.apply(this, maxHeight) );
};

$(window).on('load', function(e) {
  $('.equal-height').equalizeHeights();
});

$(window).on('resize', function(e) {
    $('.equal-height').equalizeHeights();
});

jQuery(document).ready(function($) {

  // Scroll to Top Activation
  $('#to-top').fadeOut();

  $('#to-top').click(function(){
    $('html, body').animate({
      scrollTop: $( $.attr(this, 'href') ).offset().top
    }, 500);
    return false;
  });

  // Scroll to Section on Page
  $('.scroll').click(function(){
      $('html, body').animate({
          scrollTop: $( $.attr(this, 'href') ).offset().top
      }, 500);
      return false;
  });

  // Show/Hide Comments
  $('.blogComment').on('click', function(){
    $('.commentsDisplay').toggle();
  });

  //Countdown timer Date
  $('.countdown').countdown( { date: '12 September 2014 09:00:00' } );

});