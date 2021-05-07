jQuery.fn.disable = function() {
    return this.attr('disabled', true);
};

jQuery.fn.enable = function() {
    return this.attr('disabled', false);
};

jQuery.fn.toggleCssBetween = function(style, options) {
	let element = this;
      if (element.css(style) == options[0]) {
        element.css(style, options[1]);
      } else {
        element.css(style, options[0]);
      }
};

jQuery.fn.addLoader = function() {
    let spinner = `<div class="loader-spinner animated fadeIn" style="position: absolute;
                                top: 50%;
                                left: 50%;
                                -webkit-transform: transform: translate(-50%, -50%);
                                transform: translate(-50%, -50%);">
                        <div class="spinner-border opacity-8" style="width: 1rem; height: 1rem; border-width: .16em; margin-bottom: .1rem;"></div>
                    </div>`;
    
    $(this).prop('disabled', true).addClass('position-relative').contents().wrapAll('<div class="invisible"></div>');
    $(this).append(spinner);
};

jQuery.fn.removeLoader = function() {
    $(this).removeClass('position-relative').find('.invisible').removeClass('invisible');
    $(this).prop('disabled', false)
    $(this).find('.loader-spinner').remove();
};

jQuery.fn.shortCurrency = function() {
  $(this).each(function() {
    let value = $(this).attr('numeral-value');
    let format = $(this).attr('numeral-format');
    $(this).text(numeral(value).format(format).toUpperCase());    
  });
};

$.fn.reverseChildren = function() {
  return this.each(function(){
    var $this = $(this);
    $this.children().each(function(){ $this.prepend(this) });
  });
};

$.fn.isInViewport = function() {
var elementTop = $(this).offset().top;
var elementBottom = elementTop + $(this).outerHeight();
var viewportTop = $(window).scrollTop();
var viewportBottom = viewportTop + $(window).height();
return elementBottom > viewportTop && elementTop < viewportBottom;
};