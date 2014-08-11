	$('.show-join').click(function(){
		$('p.summary').show('fast');

		$('.details').hide('fast');
		
		$('.details#join').show('slow');

		return false;
	});

	$('.show-adopt').click(function(){
		$('.details').hide('fast');
		$('p.summary').hide('fast');

		$('.details#adopt').show('slow');
		
		return false;
	});

	$('.show-collaborate').click(function(){
		$('.details').hide('fast');
		$('p.summary').hide('fast');

		$('.details#collaborate').show('slow');
		
		return false;
	});

	$('.show-establish').click(function(){
		$('.details').hide('fast');
		$('p.summary').hide('fast');

		$('.details#establish').show('slow');
		
		return false;
	});

	$('.show-box').click(function(){
		$('#messagebox').modal({
			backdrop : true,
			keyboard : true,
			show	 : true
		});		
	});

	$('.post-message').click(function(){
		var $this = $(this);
		$this.addClass('disabled');
		var email = $('input.box-email').val();
		var message = $('textarea.box-message').val();
		
		if ($.trim(message) === '') {
			$('textarea.box-message').effect('shake', 'slow');
			$this.removeClass('disabled');
			return false;
		}

		$.ajax({
			url: '/api/message_box',
			type: 'POST',
			data: {	email : email,
					message : message
				},
			success: function(response) {
				if( response === 'invalid_email' ){
					$('input.box-email').effect('shake', 'slow');
					$this.removeClass('disabled');

				} else if ( response === 'invalid_message' ) {
					$('textarea.box-message').effect('shake', 'slow');
					$this.removeClass('disabled');
					
				} else if( response === 'success' ){
					//disable the report bug button on this page.
					$('button.show-box').addClass('disabled').prop('disabled', true).html('Message sent ٩(●̮̃•)۶');

					//clear the values inside the modal
					$('input.box-email').val('');
					$('textarea.box-message').val('');
					$this.removeClass('disabled');
					
					//hide the modal
					$('#messagebox').modal('hide');

				} else {
					alert('Failed to submit message. Please try again.');
					//re-enabled the posting button
					$this.removeClass('disabled');
				}
				return false;
			}, 
			error: function() {
				alert('Fail: API could not be reached.');
				$this.removeClass('disabled');
			}
		});
	});

	$('.mailing-list#submit').click(function(){
		$('.mailing-list').addClass('disabled').prop('disabled', true);
		var email = $('.mailing-list#email').val();
		
		if ($.trim(email) === '') {
			$('.mailing-list#email').effect('bounce', 'slow');
			$('.mailing-list').removeClass('disabled').prop('disabled', false);
			return false;
		}

		$.ajax({
			url: '/api/mailing_list',
			type: 'POST',
			data: {	email : email },
			success: function( response ) {
				
				if( response === 'success' ){
					//change form into success message
					$('div.mailing-list').html('<div class="alert alert-success text-center"><strong>Thank you</strong> for joining our mailing list.<br>You will receive some amazing updates from us soon. Exciting!</div>');
				
				} else if ( response === 'signed_up_before' ) {
					//easyyyy now.
					$('div.mailing-list').html('<div class="alert alert-success text-center"><strong>Thank you</strong> for signing up on our mailing list again!<br>٩(●̮̃•)۶    ٩(●̮̃•)۶    ٩(●̮̃•)۶    ٩(●̮̃•)۶    ٩(●̮̃•)۶</div>');
				
				} else {
					$('.mailing-list#email').effect('bounce', 'slow');	
					$('.mailing-list').removeClass('disabled').prop('disabled', false);
				}
				return false;
			},
			error: function() {
				$('.mailing-list#email').effect('bounce', 'slow');
				$('.mailing-list').removeClass('disabled').prop('disabled', false);
			}
		});
	});