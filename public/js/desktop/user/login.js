$(window).ready(function(){
	
	setpagefinished(show);
});

function show(){
	$("#container").css("visibility","visible");
}
function setpagefinished(callback){
	setcontainerminheight();
	callback();
}
function setcontainerminheight(){
	var h = $(window).height();
	var header = $("#header").outerHeight();
	var footer = $("#footer").outerHeight();
	$("#body").css("min-height",h-header-footer);
}

