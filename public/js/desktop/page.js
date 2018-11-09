$(window).ready(function(){
	
	setpagefinished(show);
});

function show(){
	$("#container").css("visibility","visible");
}
function setpagefinished(callback){
	showPageList();
	callback();
}
function showPageList(){
	var header_height = $("#header").outerHeight();
	var page_menu_height = $("#page-menu").outerHeight();
	var h = $(window).height()-header_height-page_menu_height;
	$("#page-menu-view-list").click(function(){
		if($("#page-list-content").outerHeight()==0){
			$("#page-list-content").outerHeight(h);
		}else{
			$("#page-list-content").outerHeight(0);
		}
	});
}