jQuery(document).ready(function() {

	$('form#form_subscribe').validate({
		rules: {
			'subscriberEmail':{
				 required: true,
				 email: true
			}
		}
	});
});
