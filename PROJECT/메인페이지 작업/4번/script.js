$(".menu>li").mouseover(function() {
	$(this).children(".submenu").stop().slideDown();
});
$(".menu>li").mouseleave(function() {
	$(this).children(".submenu").stop().slideUp();
});


$(".btn_dot a").click(function () {
	var imgLeft=$(this).attr("imgLeft");
	$(".imgs").animate({left:imgLeft},1000);
})


$(".partner img").click(function () {
	$(".partner_up").fadeIn(1000);
})
$(".partner_up img").click(function () {
	$(".partner_up").fadeOut(1000);
})



$(document).ready(function () {
	if($.cookie("sayno") != "Y")
	{
		$("#pop01").show();
	}
	else{
		$("#pop01").hide();
	}
	
})
$(function(){
	$("#close01").click(function () {
		if(document.frmpopup.pop_ck.checked){
			$.cookie("sayno","Y",{expires:0});
		}
		$("#pop01").hide();
	})
})
