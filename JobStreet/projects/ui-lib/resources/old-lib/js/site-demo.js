$(function(){
	// Scroll to top
	$("#gotop").click(function(){
		$("html,body").animate({scrollTop:0}, 800);
	});

	// Coverpage button
	$("#cover-btn").click(function(){
		window.location="./documentation.php";
	});
	
	// Get the width of current viewport on load
	getViewPortWidth();
	$(window).resize(getViewPortWidth);

	function getViewPortWidth(){
		$("#px").text($(window).width());
	}

	// Custom scrollbars
	/*$("pre.well").mCustomScrollbar({
		theme:"light-thin",
		scrollInertia:800,
		autoHideScrollbar:true,
		scrollButtons:{
			enable:true
		}
	});*/

	// Change stat in button
	$("#loading-example-btn").click(function(){
		var btn=$(this)
		btn.button("loading"),setTimeout(function(){btn.button("complete")},2000)
	});
});