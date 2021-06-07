$(".menu>li").mouseover(function () {
	$(".submenu").stop().slideDown();
})
$(".submenu").mouseleave(function () {
	$(".submenu").stop().slideUp();
})