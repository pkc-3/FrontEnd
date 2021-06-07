var news=4;
var now=0;
start();
function start() {
	$(".newsframe>p").eq(0).css("top","0px");
	$(".newsframe>p").eq(1).css("top","50px");
	$(".newsframe>p").eq(2).css("top","100px");
	$(".newsframe>p").eq(3).css("top","150px");
	$(".newsframe>p").eq(4).css("top","-50px");
	setInterval(function () {slide();},2000);
}

function slide() {
	if(news==now){
		now=0;
	}
	else{
		now++;
	}
	if(now==1){
		$(".newsframe>p").eq(1).css("top","0px");
		$(".newsframe>p").eq(2).css("top","50px");
		$(".newsframe>p").eq(3).css("top","100px");
		$(".newsframe>p").eq(4).css("top","150px");
		$(".newsframe>p").eq(0).css("top","-50px");
	}
	else if(now==2){
		$(".newsframe>p").eq(2).css("top","0px");
		$(".newsframe>p").eq(3).css("top","50px");
		$(".newsframe>p").eq(4).css("top","100px");
		$(".newsframe>p").eq(0).css("top","150px");
		$(".newsframe>p").eq(1).css("top","-50px");
	}
	else if(now==3){
		$(".newsframe>p").eq(3).css("top","0px");
		$(".newsframe>p").eq(4).css("top","50px");
		$(".newsframe>p").eq(0).css("top","100px");
		$(".newsframe>p").eq(1).css("top","150px");
		$(".newsframe>p").eq(2).css("top","-50px");
	}
	else if(now==4){
		$(".newsframe>p").eq(4).css("top","0px");
		$(".newsframe>p").eq(0).css("top","50px");
		$(".newsframe>p").eq(1).css("top","100px");
		$(".newsframe>p").eq(2).css("top","150px");
		$(".newsframe>p").eq(3).css("top","-50px");
	}
	else{
		$(".newsframe>p").eq(0).css("top","0px");
		$(".newsframe>p").eq(1).css("top","50px");
		$(".newsframe>p").eq(2).css("top","100px");
		$(".newsframe>p").eq(3).css("top","150px");
		$(".newsframe>p").eq(4).css("top","-50px");
	}
}