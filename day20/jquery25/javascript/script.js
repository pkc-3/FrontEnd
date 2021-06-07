$(document).ready(function(){
	
	$(".btn_prev").addClass("off");
	
	$(".menu>li").mouseover(function(){
		$(this).children(".submenu").stop().slideDown();
	});
	
	$(".menu>li").mouseleave(function(){
		$(this).children(".submenu").stop().slideUp();
	});	
	
});

var cnt=0;

$(".btn_next").click(function(){	
    if(!$("#slides li").last().is(":visible")){		
        $("#slides li:visible").hide().next("li").fadeIn("slow");
        $(".btn_prev").removeClass("off");
    }
    if($("#slides li").last().is(":visible")){
        $(".btn_next").addClass("off");
    }
    return false;
});

$(".btn_prev").click(function(){
    if(!$("#slides li").first().is(":visible")){
        $("#slides li:visible").hide().prev("li").fadeIn("slow");
        $(".btn_next").removeClass("off");
    }
    if($("#slides li").first().is(":visible")){
        $(".btn_prev").addClass("off");
    }
    return false;
});


$(".partner img").click(function(){
	$("#modal").addClass("active");
});

$("#modal button").click(function(){
	$("#modal").removeClass("active");
});

var dispMenu=false;
$(".gnb_menu").click(function(){
    if(dispMenu==false){
        $("nav").css("display","block");
        dispMenu=true;
    }
    else{
        $("nav").css("display","none");
        dispMenu=false;
    }
})