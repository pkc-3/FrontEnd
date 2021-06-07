$(".menu>li").mouseover(function () {
	$(this).children(".submenu").stop().slideDown();

})
$(".menu>li").mouseleave(function () {
	$(this).children(".submenu").stop().slideUp();

})