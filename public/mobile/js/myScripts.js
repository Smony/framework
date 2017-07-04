	$().ready(function() {
	
		$("#register").validate({
			rules: {
				nick: {
					required: true,
					minlength: 3,
					maxlength: 50
				},
				email: {
					required: true,
					email: true,
					
				},
				password: {
					required: true,
					minlength: 6
				},
				rep_password: {
					required: true,
					minlength: 6,
					equalTo: "#password"
				},	
				realname: {
					required: true,
					minlength: 10
				},
				phone: {
					required: true,
					minlength: 10			
				
				},
				b_date: {
					required: true,
					minlength: 8		
				},
				city: {
					required: true
				},
				agree: {
					required: true
				}
			},
			messages: {
				nick: {
					required: "Будь ласка, заповніть поле 'Псевдонім'",
					minlength: "Мінімальний розмір - 3 символи",
					maxlength: "Максимальний розмір - 50 символів"
				},
				email: {
					required: "Будь ласка, вкажіть Ваш email",
					email: "Невірний формат email"
				},
				password: {
					required: "Будь ласка, заповніть поле 'Пароль'",
					minlength: "Мінімальний розмір - 6 символи"
				},
				rep_password: {
					required: "Будь ласка, повторіть Ваш пароль",
					minlength: "Мінімальний розмір - 6 символи",
					equalTo: "Введені паролі не співпадають"
				},
				realname: {
					required: "Будь ласка, вкажіть Ваше повне ім'я",
					minlength: "Мінімальний розмір - 10 символів"
				},
				phone: {
					required: "Будь ласка, вкажіть Ваш телефон",
					minlength: "Мінімальний розмір - 10 символів"
				},				
				b_date: {
					required: "Будь ласка, вкажіть дату Вашого народження",
						minlength: "Ви невірно ввели дату народження"
				},
				city: {
					required: "Будь ласка, вкажіть місце Вашого проживання"
				},
				agree: {
					required: "Ви маєте погодитися із правила публікації та користування сайтом"
				}
			}
		});
		
		/*
		
		$(function() {
			$('#b_date').mask('00-00-0000');
			$('#phone').mask('(000) 000-00-00');
		});
		
		
		$(".get-match").bind('keyup', function(){
			
		$(this).parent().children('span').html('');
		});
		
		
	$(".get-match").bind('focusout', function(){	
			var name=$(this).attr('name');
			var value=$(this).val();
			var flag=1;
				if(name=='email' && (/^[0-9a-z-\.]+\@[0-9a-z-]{2,}\.[a-z.]{2,}$/i.test(value))==false){
				flag=0;
			}		
			
			if(($(this).val().length)>2 && flag==1){
				
				$.ajax({
					url: "../ajax/getMatchUser.php",
					type: "POST",
					data: {'name':name,
							'value':value},
					success:function(data) {          
						if(data==0){
						$('[name='+name+']').parent().children("span.valid").html("Користувач з таким "+name+" вже існує");
						$('[name='+name+']').parent().children("span.valid").css('color', 'red');
						}else {
							$('[name='+name+']').parent().children("span.valid").html("Цей  "+name+" вільний");
							$('[name='+name+']').parent().children("span.valid").css('color', 'green');
						}
						
					}				
				});
			}
			
			
			});
	
		*/
		
	});
