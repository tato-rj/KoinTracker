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
