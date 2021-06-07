var imgs=4;
var now=0;
var play;
var sp=screen.width/2-300;
var prevIndex;
//멈춤모드인지 플레이모드인지 판별하는 변수필요.
//play모드이면 true로 인식 멈춤모드이면 false로 인식하게 만듦.
var mode=true;
start();

$(".btn_play").click(function(){
	clearInterval(play);
	$(this).css("display","none");
	$(".btn_stop").css("display","block");
	mode=false;
})
$(".btn_stop").click(function(){
	play=setInterval(function(){slide();},1500);
	$(this).css("display","none");
	$(".btn_play").css("display","block");
	mode=true;
})

$(".btn_next a").click(function(){
	if(imgs==now){
		now=0;
	}
	else{
		now++;
	}
	clearInterval(play);
	curr_slide(now);
	if(mode==true){
		play=setInterval(function(){slide();},1500);
	}
	prevIndex=now;
})

$(".btn_prev a").click(function(){
	if(now==0){
		now=4;
	}
	else{
		now--;
	}
	clearInterval(play);
	curr_slide(now);
	if(mode==true){
		play=setInterval(function(){slide();},1500);
	}
	prevIndex=now;
})

$("#btn_dot .dot").click(function(){
	now=$(this).index();
	clearInterval(play);
	curr_slide(now);
	if(mode==true){
		play=setInterval(function(){slide();},1500);
	}
	
	prevIndex=now;
});
function start(){
	$(".btn_play").css({"display":"block"});
	$(".dot").eq(0).css({"background-color":"purple"});
	$(".imgs>img").eq(0).css({"left":-1220+sp});
	$(".imgs>img").eq(1).css({"left":-610+sp});
	$(".imgs>img").eq(2).css({"left":0+sp});
	$(".imgs>img").eq(3).css({"left":610+sp});
	$(".imgs>img").eq(4).css({"left":1220+sp});
	prevIndex=0;
	play=setInterval(function(){slide();},1500);
}
function slide(){
	if(imgs==now){
		now=0;
	}
	else{
		now++;
	}
	curr_slide(now);
}
function curr_slide(e){
	if(e==1){
		$(".imgs>img").eq(1).css({"left":-1220+sp});
		$(".imgs>img").eq(2).css({"left":-610+sp});
		$(".imgs>img").eq(3).css({"left":0+sp});
		$(".imgs>img").eq(4).css({"left":610+sp});
		$(".imgs>img").eq(0).css({"left":1220+sp});

		$(".dot").eq(prevIndex).css("background-color","#aaa");
		$(".dot").eq(1).css({"background-color":"purple"});
		prevIndex=1;
	}
	else if(e==2){
		$(".imgs>img").eq(2).css({"left":-1220+sp});
		$(".imgs>img").eq(3).css({"left":-610+sp});
		$(".imgs>img").eq(4).css({"left":0+sp});
		$(".imgs>img").eq(0).css({"left":610+sp});
		$(".imgs>img").eq(1).css({"left":1220+sp});

		$(".dot").eq(2).css({"background-color":"purple"});
		$(".dot").eq(prevIndex).css("background-color","#aaa");
		prevIndex=2;
	}
	else if(e==3){
		$(".imgs>img").eq(3).css({"left":-1220+sp});
		$(".imgs>img").eq(4).css({"left":-610+sp});
		$(".imgs>img").eq(0).css({"left":0+sp});
		$(".imgs>img").eq(1).css({"left":610+sp});
		$(".imgs>img").eq(2).css({"left":1220+sp});

		$(".dot").eq(3).css({"background-color":"purple"});
		$(".dot").eq(prevIndex).css("background-color","#aaa");
		prevIndex=3;
	}
	else if(e==4){
		$(".imgs>img").eq(4).css({"left":-1220+sp});
		$(".imgs>img").eq(0).css({"left":-610+sp});
		$(".imgs>img").eq(1).css({"left":0+sp});
		$(".imgs>img").eq(2).css({"left":610+sp});
		$(".imgs>img").eq(3).css({"left":1220+sp});

		$(".dot").eq(4).css({"background-color":"purple"});
		$(".dot").eq(prevIndex).css("background-color","#aaa");
		prevIndex=4;
	}
	else if(e==0){
		$(".imgs>img").eq(0).css({"left":-1220+sp});
		$(".imgs>img").eq(1).css({"left":-610+sp});
		$(".imgs>img").eq(2).css({"left":0+sp});
		$(".imgs>img").eq(3).css({"left":610+sp});
		$(".imgs>img").eq(4).css({"left":1220+sp});

		$(".dot").eq(0).css({"background-color":"purple"});
		$(".dot").eq(prevIndex).css("background-color","#aaa");
		prevIndex=0;
	}
}