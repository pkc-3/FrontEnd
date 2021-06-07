$(".menu>li").mouseover(function () {
	$(this).children(".submenu").stop().slideDown()
})
$(".menu>li").mouseleave(function () {
	$(this).children(".submenu").stop().slideUp()
})

var imgs=2;
var now=0;
start();

function start() {
	$(".imgframe>img").eq(0).css("left","0px");
	$(".imgframe>img").eq(1).css("left","1000px");
	$(".imgframe>img").eq(2).css("left","-1000px");
	setInterval(function () {slide();},2000)
}

function slide() {
	if(imgs==now){
		now=0;
	}
	else{
		now++;
	}
	if(now==1){
		$(".imgframe>img").eq(1).css("left","0px")
		$(".imgframe>img").eq(2).css("left","1000px")
		$(".imgframe>img").eq(0).css("left","2000px")
	}
	else if(now==2){
		$(".imgframe>img").eq(2).css("left","0px")
		$(".imgframe>img").eq(0).css("left","1000px")
		$(".imgframe>img").eq(1).css("left","2000px")
	}
	else{
		$(".imgframe>img").eq(0).css("left","0px")
		$(".imgframe>img").eq(1).css("left","1000px")
		$(".imgframe>img").eq(2).css("left","2000px")
	}
}

$("#partner").click(function(){
	$("#partner_up").fadeIn(1000);
})
$("#partner_up").click(function(){
	$("#partner_up").fadeOut(1000);
})

$(document).ready(function(){
	if($.cookie("sayno") !="Y"){
		$(".pop_box").show();
	}
	else{
		$(".pop_box").hide();
	}
})


$(function(){
		$("#btn_close").click(function() {
			if (document.frm1.popup.checked){			
				$.cookie("sayno","Y",{expires:1});
			}
			$(".pop_box").hide();
		});		
	});