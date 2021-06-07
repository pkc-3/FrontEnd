$(".menu").mouseover(function () {
	$(".submenu>li").stop().slideDown()
})
$(".menu").mouseleave(function () {
	$(".submenu>li").stop().slideUp()
})