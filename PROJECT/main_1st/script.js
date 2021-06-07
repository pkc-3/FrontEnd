//이미지 슬라이드
var imgs=4;
var now=0;
start();
function start() {
	$(".imgs>img").eq(0).siblings().css("display","none");
	setInterval(function(){slide();},2000);
}
function slide() {
	if(imgs==now){
		now=0;
	}else{
		now++;
	}
	$(".imgs>img").eq(now-1).css("display","none");
	$(".imgs>img").eq(now).css("display","block");
}
//웹 메뉴
$(".menu>li").mouseover(function(){
	$(this).children(".submenu").stop().slideDown();
});
$(".menu>li").mouseleave(function(){
	$(this).children(".submenu").stop().slideUp();
});

//팝업창
$(".partner>img").click(function() {
	$(".partner_up").addClass("active")
})
$(".part_close").click(function () {
	$(".partner_up").removeClass("active")
})
//모바일 메뉴 버튼
var dispmenu=false;
$(".gnb_menu").click(function(){
	if(dispmenu==false){
		$("nav").css("display","block");
		dispmenu=true;
	}else{
		$("nav").css("display","none");
		dispmenu=false;
	}
})

$(".menu>li").mouseover(function(){
	$(this).children(".submenu").stop().slideDown();

});
$(".menu>li").mouseleave(function(){
	$(this).children(".submenu").stop().slideUp();
});




