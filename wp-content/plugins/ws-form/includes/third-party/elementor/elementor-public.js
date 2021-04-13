(function($) {

	'use strict';

	$(document).on('elementor/popup/show', function(event, id, instance) {

		wsf_form_init(true, true, $('[data-elementor-id="' + id + '"]'));
	});

})(jQuery);