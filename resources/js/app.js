require('./bootstrap');
require('./helpers/extensions');
require('./helpers/numbers');
require('./helpers/string');
require('./helpers/cookies');
require('./helpers/arrays');
require('./helpers/colors');

$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': app.csrfToken
    }
});

$(document).ready(function() {
	$('[data-toggle="fixed-panel"]').on('click', function() {
		let $link = $(this);
		let $panel = $($link.attr('data-target'));
		
		$('.hamburger-icon').addClass('open');
		$link.removeClass('active');
		$panel.fadeToggle();
		$('body').toggleCssBetween('overflow', ['hidden', 'auto']);
		$panel.find('.panel-content').css('right', 0);
	});

	$('button[data-dismiss="fixed-panel"], .fixed-panel .panel-overlay').on('click', function() {
		let $panel = $(this).closest('.fixed-panel');
		$panel.find('.panel-content').css('right', '-100%');
		$panel.fadeToggle();
		$('body').toggleCssBetween('overflow', ['hidden', 'auto']);
		$('.hamburger-icon').removeClass('open');
	});

    $('.modal[autoshow]').modal('show');
});
