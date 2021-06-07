$(".menu>li").mouseover(function () {
	$(this).children(".submenu").stop().slideDown();
});
$(".menu>li").mouseleave(function () {
	$(this).children(".submenu").stop().slideUp();
});

$(".btn_prev").addClass("off");
$(".btn_next").click(function () {
	if(!$(".slides li").last().is(":visible")){
        $(".slides li:visible").hide().next("li").fadeIn("slow");
        $(".btn_prev").removeClass("off");
   		}
   	if($(".slides li").last().is(":visible")){
    	$(".btn_next").addClass("off");
   }
})

$(".btn_prev").click(function () {
	if(!$(".slides li").first().is(":visible")){
        $(".slides li:visible").hide().prev("li").fadeIn("slow");
        $(".btn_next").removeClass("off");
  	 }
  	if($(".slides li").first().is(":visible")){
   	 $(".btn_prev").addClass("off");
   }
})

$("#partner").click(function () {
	$("#partner_up").addClass("active");
})

$("#partner_up .btnClose").click(function () {
	$("#partner_up").removeClass("active");
})