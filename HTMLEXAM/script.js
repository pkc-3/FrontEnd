$(".menu>li").mouseover(function (){
	$(this).children(".submenu").stop().slideDown();
})
$(".menu>li").mouseleave(function(){
	$(this).children(".submenu").stop().slideUp();
})

var imgs=9;
var now=0;
start();

function start() {
	$(".imgframe>img").eq(0).css("display","block");
	$(".imgframe>img").eq(1).css("display","none");
	$(".imgframe>img").eq(2).css("display","none");
	$(".imgframe>img").eq(3).css("display","none");
	$(".imgframe>img").eq(4).css("display","none");
	$(".imgframe>img").eq(5).css("display","none");
	$(".imgframe>img").eq(6).css("display","none");
	$(".imgframe>img").eq(7).css("display","none");
	$(".imgframe>img").eq(8).css("display","none");
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
		$(".imgframe>img").eq(1).css("display","block");
		$(".imgframe>img").eq(2).css("display","none");
		$(".imgframe>img").eq(3).css("display","none");
		$(".imgframe>img").eq(4).css("display","none");
		$(".imgframe>img").eq(5).css("display","none");
		$(".imgframe>img").eq(6).css("display","none");
		$(".imgframe>img").eq(7).css("display","none");
		$(".imgframe>img").eq(8).css("display","none");
		$(".imgframe>img").eq(0).css("display","none");
	}
	else if(now==2){
		$(".imgframe>img").eq(2).css("display","block");
		$(".imgframe>img").eq(3).css("display","none");
		$(".imgframe>img").eq(4).css("display","none");
		$(".imgframe>img").eq(5).css("display","none");
		$(".imgframe>img").eq(6).css("display","none");
		$(".imgframe>img").eq(7).css("display","none");
		$(".imgframe>img").eq(8).css("display","none");
		$(".imgframe>img").eq(0).css("display","none");
		$(".imgframe>img").eq(1).css("display","none");
	}
	else if(now==3){
		$(".imgframe>img").eq(3).css("display","block");
		$(".imgframe>img").eq(4).css("display","none");
		$(".imgframe>img").eq(5).css("display","none");
		$(".imgframe>img").eq(6).css("display","none");
		$(".imgframe>img").eq(7).css("display","none");
		$(".imgframe>img").eq(8).css("display","none");
		$(".imgframe>img").eq(0).css("display","none");
		$(".imgframe>img").eq(1).css("display","none");
		$(".imgframe>img").eq(2).css("display","none");
	}
	else if(now==4){
		$(".imgframe>img").eq(4).css("display","block");
		$(".imgframe>img").eq(5).css("display","none");
		$(".imgframe>img").eq(6).css("display","none");
		$(".imgframe>img").eq(7).css("display","none");
		$(".imgframe>img").eq(8).css("display","none");
		$(".imgframe>img").eq(0).css("display","none");
		$(".imgframe>img").eq(1).css("display","none");
		$(".imgframe>img").eq(2).css("display","none");
		$(".imgframe>img").eq(3).css("display","none");
	}
	else if(now==5){
		$(".imgframe>img").eq(5).css("display","block");
		$(".imgframe>img").eq(6).css("display","none");
		$(".imgframe>img").eq(7).css("display","none");
		$(".imgframe>img").eq(8).css("display","none");
		$(".imgframe>img").eq(0).css("display","none");
		$(".imgframe>img").eq(1).css("display","none");
		$(".imgframe>img").eq(2).css("display","none");
		$(".imgframe>img").eq(3).css("display","none");
		$(".imgframe>img").eq(4).css("display","none");
	}
	else if(now==6){
		$(".imgframe>img").eq(6).css("display","block");
		$(".imgframe>img").eq(7).css("display","none");
		$(".imgframe>img").eq(8).css("display","none");
		$(".imgframe>img").eq(0).css("display","none");
		$(".imgframe>img").eq(1).css("display","none");
		$(".imgframe>img").eq(2).css("display","none");
		$(".imgframe>img").eq(3).css("display","none");
		$(".imgframe>img").eq(4).css("display","none");
		$(".imgframe>img").eq(5).css("display","none");
	}
	else if(now==7){
		$(".imgframe>img").eq(7).css("display","block");
		$(".imgframe>img").eq(8).css("display","none");
		$(".imgframe>img").eq(0).css("display","none");
		$(".imgframe>img").eq(1).css("display","none");
		$(".imgframe>img").eq(2).css("display","none");
		$(".imgframe>img").eq(3).css("display","none");
		$(".imgframe>img").eq(4).css("display","none");
		$(".imgframe>img").eq(5).css("display","none");
		$(".imgframe>img").eq(6).css("display","none");
	}
	else{
		$(".imgframe>img").eq(8).css("display","block");
		$(".imgframe>img").eq(0).css("display","none");
		$(".imgframe>img").eq(1).css("display","none");
		$(".imgframe>img").eq(2).css("display","none");
		$(".imgframe>img").eq(3).css("display","none");
		$(".imgframe>img").eq(4).css("display","none");
		$(".imgframe>img").eq(5).css("display","none");
		$(".imgframe>img").eq(6).css("display","none");
		$(".imgframe>img").eq(7).css("display","none");
	}
}
