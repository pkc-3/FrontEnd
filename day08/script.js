$("#btn1").click(function () {
	var left=parseInt(frm1.left.value);
	var top=parseInt(frm1.top.value);
	$(".square1").css("left",left);
	$(".square1").css("top",top);
});
$("#btn2").click(function () {
	// $(".square1").css("margin-left","-2000px");
	$(".square1").css("display","none");
})
	
$("#btn3").click(function () {
	// $(".square1").css("margin-left","0");
	$(".square1").css("display","block");
})
	
