$(".menu>li").mouseover(function() {
	$(this).children(".submenu").stop().slideDown();
});
$(".menu>li").mouseleave(function() {
	$(this).children(".submenu").stop().slideUp();
});

$("#btn1").click(function () {
	$(".imgFrame>img").eq(0).siblings().css("display","none");
	$(".imgFrame>img").eq(0).css("display","block");
	$("#btn1").css("width","35px");
	$("#btn1").css("border-radius","10px");
	$("#btn1").css("background-color","#7b919e");
	$("#btn1").siblings().css("width","15px");
	$("#btn1").siblings().css("border-radius","100%");
	$("#btn1").siblings().css("background-color","black");
})
$("#btn2").click(function () {
	$(".imgFrame>img").eq(1).siblings().css("display","none");
	$(".imgFrame>img").eq(1).css("display","block");
	$("#btn2").css("width","35px");
	$("#btn2").css("border-radius","10px");
	$("#btn2").css("background-color","#7b919e");
	$("#btn2").siblings().css("width","15px");
	$("#btn2").siblings().css("border-radius","100%");
	$("#btn2").siblings().css("background-color","black");
})
$("#btn3").click(function () {
	$(".imgFrame>img").eq(2).siblings().css("display","none");
	$(".imgFrame>img").eq(2).css("display","block");
	$("#btn3").css("width","35px");
	$("#btn3").css("border-radius","10px");
	$("#btn3").css("background-color","#7b919e");
	$("#btn3").siblings().css("width","15px");
	$("#btn3").siblings().css("border-radius","100%");
	$("#btn3").siblings().css("background-color","black");
})
$("#btn4").click(function () {
	$(".imgFrame>img").eq(3).siblings().css("display","none");
	$(".imgFrame>img").eq(3).css("display","block");
	$("#btn4").css("width","35px");
	$("#btn4").css("border-radius","10px");
	$("#btn4").css("background-color","#7b919e");
	$("#btn4").siblings().css("width","15px");
	$("#btn4").siblings().css("border-radius","100%");
	$("#btn4").siblings().css("background-color","black"); 
})
$("#btn5").click(function () {
	$(".imgFrame>img").eq(4).siblings().css("display","none");
	$(".imgFrame>img").eq(4).css("display","block");
	$("#btn5").css("width","35px");
	$("#btn5").css("border-radius","10px");
	$("#btn5").css("background-color","#7b919e");
	$("#btn5").siblings().css("width","15px");
	$("#btn5").siblings().css("border-radius","100%");
	$("#btn5").siblings().css("background-color","black");
})


