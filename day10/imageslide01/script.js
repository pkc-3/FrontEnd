$(".menu>li").mouseover(function(){
	$(this).children(".submenu").stop().slideDown();
});

$(".menu>li").mouseleave(function(){
	$(this).children(".submenu").stop().slideUp();
});



var imgs=4;//최대값 설정
var now=0;
start();
function start() {
	$(".imgs>img").eq(0).siblings().css("display","none");
	setInterval(function(){slide();},2000);
}
function slide() {
	if(imgs==now){
		now=0;
	}
	else{
		now++;
	}
	$(".imgs>img").eq(now-1).css("display","none");
	$(".imgs>img").eq(now).css("display","block");
}

