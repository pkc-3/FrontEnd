$(".menubar").mouseover(function () {
	$(this).children(".submenu").stop().slideDown()
})
$(".submenu").mouseleave(function () {
	$(this).children(".submenu").stop().slideUp()
})

var imgs=4;
var now=0;
start();
function start() {
	$(".imgFrame_1>img").eq(0).siblings().css("margin-left","-2000px");
	setInterval(function(){slide();},2000);
}
function slide() {
	if(imgs==now){
		now=0;
	}
	else{
		now++;
	}
	$(".imgFrame_1>img").eq(now-1).css("margin-left","-2000px");
	$(".imgFrame_1>img").eq(now).css("margin-left","0px");
}

$("#partner").click(function () {
	$("#partner_up").addClass("active");
})

$("#partner_up .btnClose").click(function () {
	$("#partner_up").removeClass("active");
})