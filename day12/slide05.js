var imgs=4;
var now=0;
start();
function start() {
	$("#news>p").eq(0).css("top","0px");
	$("#news>p").eq(1).css("top","35px");
	$("#news>p").eq(2).css("top","70px");
	$("#news>p").eq(3).css("top","105px");
	$("#news>p").eq(4).css("top","-35px");
	setInterval(function (){slide()},2000);
}
function slide() {
	if(imgs==now){
		now=0;
	}
	else{
		now++;
	}
	if(now==1){
		$("#news>p").eq(1).css("top","0px");
		$("#news>p").eq(2).css({"display":"block","top":"35px"});
		$("#news>p").eq(3).css("top","70px");
		$("#news>p").eq(4).css({"display":"none","top":"105px"});
		$("#news>p").eq(0).css("top","-35px");
	}
	else if(now==2){
		$("#news>p").eq(2).css("top","0px");
		$("#news>p").eq(3).css({"display":"block","top":"35px"});
		$("#news>p").eq(4).css("top","70px");
		$("#news>p").eq(0).css({"display":"none","top":"105px"});
		$("#news>p").eq(1).css("top","-35px");
	}
	else if(now==3){
		$("#news>p").eq(3).css("top","0px");
		$("#news>p").eq(4).css({"display":"block","top":"35px"});
		$("#news>p").eq(0).css("top","70px");
		$("#news>p").eq(1).css({"display":"none","top":"105px"});
		$("#news>p").eq(2).css("top","-35px");
	}
	else if(now==4){
		$("#news>p").eq(4).css("top","0px");
		$("#news>p").eq(0).css({"display":"block","top":"35px"});
		$("#news>p").eq(1).css("top","70px");
		$("#news>p").eq(2).css({"display":"none","top":"105px"});
		$("#news>p").eq(3).css("top","-35px");
	}
	else{
		$("#news>p").eq(0).css("top","0px");
		$("#news>p").eq(1).css({"display":"block","top":"35px"});
		$("#news>p").eq(2).css("top","70px");
		$("#news>p").eq(3).css({"display":"none","top":"105px"});
		$("#news>p").eq(4).css("top","-35px");
	}
}
