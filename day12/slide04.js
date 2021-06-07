var imgs=4;
var now=0;
start();
function start() {
	$(".imgs>img").eq(0).css("left","0px");
	$(".imgs>img").eq(1).css("left","1000px");
	$(".imgs>img").eq(2).css("left","2000px");
	$(".imgs>img").eq(3).css("left","3000px");
	$(".imgs>img").eq(4).css("left","-1000px");
	setInterval(function () {slide();},2000);
}
function slide() {
	if(imgs==now){
		now=0;
	}
	else{now++;}
	if(now==1){
		$(".imgs>img").eq(1).css("left","0px");
		$(".imgs>img").eq(2).css({"display":"block","left":"1000px"});//맨마지막 공백 뜨기전에 이동 시킴 이어지도록
		$(".imgs>img").eq(3).css("left","2000px");
		$(".imgs>img").eq(4).css({"display":"none","left":"3000px"});//그림앞에 슥 지나가는거 제어
		$(".imgs>img").eq(0).css("left","-1000px");
	}
	else if(now==2){
		$(".imgs>img").eq(2).css("left","0px");
		$(".imgs>img").eq(3).css({"display":"block","left":"1000px"});
		$(".imgs>img").eq(4).css("left","2000px");
		$(".imgs>img").eq(0).css({"display":"none","left":"3000px"});
		$(".imgs>img").eq(1).css("left","-1000px");
	}
	else if(now==3){
		$(".imgs>img").eq(3).css("left","0px");
		$(".imgs>img").eq(4).css({"display":"block","left":"1000px"});
		$(".imgs>img").eq(0).css("left","2000px");
		$(".imgs>img").eq(1).css({"display":"none","left":"3000px"});
		$(".imgs>img").eq(2).css("left","-1000px");
	}
	else if(now==4){
		$(".imgs>img").eq(4).css("left","0px");
		$(".imgs>img").eq(0).css({"display":"block","left":"1000px"});
		$(".imgs>img").eq(1).css("left","2000px");
		$(".imgs>img").eq(2).css({"display":"none","left":"3000px"});
		$(".imgs>img").eq(3).css("left","-1000px");
	}
	else{
		$(".imgs>img").eq(0).css("left","0px");
		$(".imgs>img").eq(1).css({"display":"block","left":"1000px"});
		$(".imgs>img").eq(2).css("left","2000px");
		$(".imgs>img").eq(3).css({"display":"none","left":"3000px"});
		$(".imgs>img").eq(4).css("left","-1000px");
	}
}