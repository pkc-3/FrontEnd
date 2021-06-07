$(".btn_prev").addClass("off");//첫장에선 이전 없음
//정방향 가는 버튼
$(".btn_next").click(function () {
   if(!$("#slides li").last().is(":visible")){
    //현재 보이는 그림숨기고 다음거로 이동해라.
        $("#slides li:visible").hide().next("li").fadeIn("slow");
        $(".btn_prev").removeClass("off");//이전으로 이동하는 버튼 활성화
   }
   if($("#slides li").last().is(":visible")){
    $(".btn_next").addClass("off");//맨 마지막장에서 다음버튼 비활성화
   }
})

//역순으로 가는 버튼
$(".btn_prev").click(function () {
   if(!$("#slides li").first().is(":visible")){
    //현재 보이는 그림숨기고 다음거로 이동해라.
        $("#slides li:visible").hide().prev("li").fadeIn("slow");
        $(".btn_next").removeClass("off");
   }
   if($("#slides li").first().is(":visible")){
    $(".btn_prev").addClass("off");
   }
})