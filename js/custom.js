//actives the typewriter on first page
$(document).ready(function(){
	$(".typed").typewriter({
				speed: 60
	});
	$("body").scroll(function(e){ e.preventDefault()});
	// $('#button-menu').click(function(){
	// 	if(localStorage.getItem('currentUrl')=="#intro"){
	// 		if(localStorage.getItem('toggle')==0){
	// 			$('.navbar-fixed-top').css({
	// 						'background-color':'rgba(67,64,65,1)'
	// 			});
	// 					localStorage.setItem('toggle', 1);
	// 		}else{
	// 			console.log(localStorage.getItem('currentUrl'));
	// 			$('.navbar-fixed-top').css({
	// 				'background-color':'rgba(67,64,65,0.4)'
	// 			});
	// 			localStorage.setItem('toggle', 0);
	// 		}
	// 	}
	// });
})
