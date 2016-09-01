//actives the typewriter on first page
$(document).ready(function(){
	var validateEmail = function(email) {
	    var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
	    return re.test(email);
	};
	var toast=function(target,msg,time){
		$(target).empty().append(msg).addClass('show');
		setTimeout(function(){
			$(target).removeClass('show');
		},
		time);
	};
	$(".typed").typewriter({
				speed: 60
	});
	$('#telefone').mask('(99)9-9999-9999');

	// validate form
	$('.validate-me').keypress(function(){
		if($(this).attr('type')=="tel" && $(this).val().length < 15){
			console.log('caiu aqui');
			$(this).removeClass('has-success');
			$(this).addClass('has-warning');
		}else if($(this).attr('type')=="email"){
			if(!validateEmail( $(this).val() )){
				$(this).removeClass('has-success');
				$(this).addClass('has-warning');
			}else{
				$(this).removeClass('has-warning');
				$(this).addClass('has-success');
			}
		}else{
			if( $.trim($(this).val())=="" ){
				$(this).removeClass('has-success');
				$(this).addClass('has-warning');
				console.log('inválido');
			}else{
				console.log('válido');
				$(this).removeClass('has-warning');
				$(this).addClass('has-success');
			}
		}
	});
	$('.validate-me').focusout(function(){
		if($(this).attr('type')=="tel" && $(this).val().length < 15){
			$(this).removeClass('has-success');
			$(this).addClass('has-warning');
		}else if($(this).attr('type')=="email"){
			if(!validateEmail( $(this).val() )){
				$(this).removeClass('has-success');
				$(this).addClass('has-warning');
			}else{
				$(this).removeClass('has-warning');
				$(this).addClass('has-success');
			}
		}else{
			if( $.trim($(this).val())=="" ){
				$(this).removeClass('has-success');
				$(this).addClass('has-warning');
			}else{
				$(this).removeClass('has-warning');
				$(this).addClass('has-success');
			}
		}
	});
	$('#btn_enviar').on('click',function(){
		//checando o campo nome
		var nome = $('#nome').val();
		var telefone = $('#telefone').val();
		var mensagem = $('#mensagem').val();
		var email = $('#email').val();
		if($.trim( nome ) !="" && validateEmail(email)==true && $.trim(telefone) !="" && telefone.length==15 && $.trim(mensagem) !="" ){
			$.ajax({
				method:"POST",
				url:'includes/mailer/sendmail.php',
				data:{
					nome : nome,
					telefone : telefone,
					email : email,
					mensagem : mensagem
				},
				beforeSend:function(){
					$('.center-div').show();
				},
				complete:function(){
					$('.center-div').hide();
				},
				success:function(e){
					if(e==true){
						toast('#msg_contact',nome+', Obrigado por nos contactar!',2000);
					}else{
						toast('#msg_contact',nome+', Obrigado por nos contactar!',2000);
					}
					$('.validate-me').val('').removeClass('has-success');

				}
			});
		}else{
			toast('#msg_contact','Verifique a validade dos campos!',2000);
		}
	});
})
