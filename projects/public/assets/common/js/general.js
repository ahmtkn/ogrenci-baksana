$(document).on('click', '[data-toggle=\'basic\']', function(e) {
	var element = this;
	$('#loader').remove();
	$('#modal-basic').remove();
	$.ajax({
		url: $(this).attr('data-action'),
		dataType: 'html',
		beforeSend: function() {
			$('body').append('<div id="loader" class="ajaxLoader"><div class="lds-ripple"><div></div><div></div></div></div>');
		},
		complete: function() {
			$('#loader').remove();
		},
		success: function(html) {
            console.log(html)
			$('#loader').remove();
			$('body').append(html);
			$('#modal-basic').modal('show');
		}
	});
});


