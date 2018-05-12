'use strict';

var $ = window.jQuery;

//ON DOCUMENT READY
$(document).ready(function() {

    //sticky footer trick
    var bumpIt = function() {
        $('body').css('padding-bottom', $('.footer-main').outerHeight());
    },
    didResize = false;

    bumpIt();

    $(window).resize(function() {
        didResize = true;
    });
    setInterval(function() {
        if(didResize) {
          didResize = false;
          bumpIt();
        }
    }, 250);

    //trigger menu nav
    $('.header-main__nav-trigger').on('click', function(){
        $('body').toggleClass('has-active-nav');
    });

    //accordion
    $('.accordion h4').on('click', function(){
      $(this).next('.accordion__hidden').slideToggle().parent().toggleClass('is-active');
    });

    //testimonial slider
    $('.testimonial-slider').owlCarousel({
        nav: false,
        dots: true,
        center: false,
        loop: true,
        margin: 40,
        autoHeight: true,
        responsive : {
            // breakpoint from 0 up
            320 : {
                items: 1,
                center: true
            },
            768 : {
                items: 2,
                center: false
            }
        }
    });

    //scroll to element
    $(".button-continue").click(function(event) {
        event.preventDefault();
        var anchor = $(this).attr('href');
        $('html,body').animate({
            scrollTop: $(anchor).offset().top
        }, 500);
    });

    //initialize autosize script for textarea
    autosize($('.input--textarea'));

    //init watermark
    function initWatermark() {
      $.watermark.options = {
        className: 'input--placeholder',
        useNative: false
      };

      //INPUT PLACEHOLDER
      $("[placeholder]").each(function() {
          $(this).watermark($(this).attr("placeholder"));
      });
      $("[type=password]").blur();
    }

    //select box (http://vst.mn/selectordie/)
    $("select").selectOrDie({

    });

    // check if numeber input
    $('.input--number').bind('keypress', function (event) {
        var regex = new RegExp("^[0-9\b]+$");
        var key = String.fromCharCode(!event.charCode ? event.which : event.charCode);
        if (!regex.test(key)) {
           event.preventDefault();
           return false;
        }
    });

    //datepicker
    $(".datepicker").attr("placeholder", "DD-MM-YYYY").datepicker();

    //masked card number number
    $(".input--card").mask("9999 9999 9999 9999");

    //masked cvc number
    $(".input--cvc").mask("9999");

    //masked date
    $(".input--date").mask("99/9999");
});


//WINDOW ONLOAD
$(window).load(function() {

  // WINDOW RESIZE
  $(window).on('resize', function() {

    $('body').removeClass('has-active-nav');

    //calculate width of subheader element
    var page_width = $(window).width();
    if(page_width>768) {
        var container_half = $('.spread-page .header-main .container').width()/2;
        $('.spread-page .subheader__content').css('width', container_half);
    }

  }).trigger('resize');
  
   $(".scrolltosubscribe").click(function () {
            $('html, body').animate({
                scrollTop: $("footer .widget_wysija_cont").offset().top
            }, 1000);
        });

});
