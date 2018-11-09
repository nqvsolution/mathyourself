$(window).ready(function(){
	
	setpagefinished(show);
});

function setpagefinished(callback){
	getWidthOfItemschoice();
	callback();
}

$(window).resize(function(){
	getWidthOfItemschoice();
});

function getWidthOfItemschoice(){
	var width = $(".items-choice").width();
	$(".items-choice").height(width*1.5);
}
function show(){
	$("#items-content").css("visibility","visible");
}




