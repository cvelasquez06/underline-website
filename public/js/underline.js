$document.ready(function () {
	$('.btn-send-mail').on('click',function(e){
		e.preventDefault();
		fields = $('#contact-form').serialize();
		$.post('messages', fields
		).done(function(response){
			$('#mail-status').html("<div class='alert alert-dismissible alert-"+ response.status +"' role='alert'><button class='close' type='button' data-dismiss='alert' aria-label='Close'><span class='mdi mdi-close' aria-hidden='true'></span></button><p class='offset-top-0'>"+response.msg + "</p></div>");
			$('#contact-form')[0].reset();
		}).fail(function(response){
			$('#mail-status').html("<div class='alert alert-dismissible alert-danger' role='alert'><button class='close' type='button' data-dismiss='alert' aria-label='Close'><span class='mdi mdi-close' aria-hidden='true'></span></button><p class='offset-top-0'>"+response.msg+"</p></div>");
		});
	})
});