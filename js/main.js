$('document').ready(function() {  
	
	$('.reveal-form').submit(function() {
        var form_data = $(this).serialize();
		var msg = '';
		
        $.ajax({
			type: "POST",
			url: "handler.php",
			data: form_data,
			success: function(response) { // Данные отправлены успешно
				msg = '<p>Данные отправлены успешно.</p>' + response;
				$('#msg').html(msg).css({'color':'green'}).fadeIn(500);
				// result = $.parseJSON(response);
			},
			error: function(response) {   // Данные не отправлены
				msg = '<p>Ошибка отправки данных</p>';
				$('#msg').html(msg).css({'color':'red'}).fadeIn(500);
			}
		});		
		
		setTimeout(function() {
			$('#msg').fadeOut(500);
		}, 10000);
		
		return false;
	});	
	
});