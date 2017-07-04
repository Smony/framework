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
					required: "���� �����, �������� ���� '��������'",
					minlength: "̳�������� ����� - 3 �������",
					maxlength: "������������ ����� - 50 �������"
				},
				email: {
					required: "���� �����, ������ ��� email",
					email: "������� ������ email"
				},
				password: {
					required: "���� �����, �������� ���� '������'",
					minlength: "̳�������� ����� - 6 �������"
				},
				rep_password: {
					required: "���� �����, �������� ��� ������",
					minlength: "̳�������� ����� - 6 �������",
					equalTo: "������ ����� �� ����������"
				},
				realname: {
					required: "���� �����, ������ ���� ����� ��'�",
					minlength: "̳�������� ����� - 10 �������"
				},
				phone: {
					required: "���� �����, ������ ��� �������",
					minlength: "̳�������� ����� - 10 �������"
				},				
				b_date: {
					required: "���� �����, ������ ���� ������ ����������",
						minlength: "�� ������ ����� ���� ����������"
				},
				city: {
					required: "���� �����, ������ ���� ������ ����������"
				},
				agree: {
					required: "�� ���� ���������� �� ������� ��������� �� ������������ ������"
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
						$('[name='+name+']').parent().children("span.valid").html("���������� � ����� "+name+" ��� ����");
						$('[name='+name+']').parent().children("span.valid").css('color', 'red');
						}else {
							$('[name='+name+']').parent().children("span.valid").html("���  "+name+" ������");
							$('[name='+name+']').parent().children("span.valid").css('color', 'green');
						}
						
					}				
				});
			}
			
			
			});
	
		*/
		
	});
