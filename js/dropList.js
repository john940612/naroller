$(document).ready(function(){
	var show = false
	$("#product").mouseenter(function(){
		$("#productSub").slideDown("fast");
	});
	$(".Sub").mouseenter(function(){
		show = true;
	});
	$(".Sub").mouseleave(function(){
		show = false;
	});
	setTimeout(function(){
		$("#product").mouseleave(function(){
			if(show == false){
				$("#productSub").slideUp("fast");
			}
		});
	}
	, 1000);
/*	$("#product").mouseleave(function(){
		setTimeout(null,5000);
		if(show == false){
			$("#productSub").slideUp("fast");
		}
	});*/
})