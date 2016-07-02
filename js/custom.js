//actives the typewriter on first page
$(document).ready(function(){
	$(".typed").typewriter({
				speed: 60
	});
	var toggle = 0;
	$('#button-menu').click(function(){
		if(localStorage.getItem('currentUrl')=="#intro"){
			if(toggle==0){
				$('.navbar-fixed-top').css({
							'background-color':'rgba(67,64,65,1)'
				});
						toggle = 1;
			}else{
				$('.navbar-fixed-top').css({
					'background-color':'rgba(67,64,65,0.4)'
				});
				toggle = 0;
			}
		}
	});
})
