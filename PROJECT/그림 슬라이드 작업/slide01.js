$(".btn_dot a").click(function () {
	var imgLeft=$(this).attr("imgLeft");
	$(".imgs").animate({left:imgLeft},"fast");
})