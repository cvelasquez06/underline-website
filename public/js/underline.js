$document.ready(function () {
	$('.btn-send-mail').on('click',function(e){
		e.preventDefault();
		fields = $('#contact-form').serialize();
		$.post('messages', fields
		).done(function(payload){
			console.log(payload.status);
			$('#mail-status').html("<div class='alert alert-dismissible alert-"+ payload.status +"' role='alert'><button class='close' type='button' data-dismiss='alert' aria-label='Close'><span class='mdi mdi-close' aria-hidden='true'></span></button><p class='offset-top-0'>"+payload.msg + "</p></div>");
			$('#contact-form')[0].reset();
		}).fail(function(payload){
			console.log(payload);
			$('#mail-status').html("<div class='alert alert-dismissible alert-"+ payload['responseJSON'].status +"' role='alert'><button class='close' type='button' data-dismiss='alert' aria-label='Close'><span class='mdi mdi-close' aria-hidden='true'></span></button><p class='offset-top-0'>"+payload['responseJSON'].msg+"</p></div>");
		});
	})
});