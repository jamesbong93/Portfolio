$(function(){	
	//===========================Header Search Toggle===================================
	$(".search-toggle").click(function(){
		$(".navbar-collapse").removeClass("in");
		$(".search-toggle").not(this).parent().removeClass("active");
		$(this).parent().toggleClass("active");
	});
	
	$(".navbar-toggle").click(function(){
		$(".search-toggle").parent().removeClass("active");
	});
	
	//===========================Select2 Dropdown===================================
	$("select").select2({
		placeholder: "Select",
		minimumResultsForSearch: 5
	});
	
	//===========================Perpectual for Panel===================================
	var initialHideFlag = false;
	if($(".perpectual").hasClass("initial-hide")){
		initialHideFlag = true;
	}
	var perpectualEvent = function () {  
		var offset = $(document).scrollTop();
		var $el = $(".perpectual").parent();
		var changeOffset;
		
		if($(".perpectual").length > 0){
			if($(".perpectual").attr("data-offset") == "top"){
				changeOffset = $el.offset().top + 10;
			}else if ($(".perpectual").attr("data-offset") == "bottom"){
				changeOffset = $el.offset().top + $el.height() + 10;
			}else if ($(".perpectual").attr("data-offset").length > 0){
				changeOffset = $(".perpectual").attr("data-offset");
			}else {
				changeOffset = $el.offset().top + 10;
			}
			
			if(offset <= changeOffset){
				if($(".perpectual").hasClass("default-hidden")){
					$(".perpectual").removeClass("stay").hide();
				}else{
					$(".perpectual").removeClass("stay");
				}
				
				if(initialHideFlag) {
					$(".perpectual").addClass("initial-hide");
				}
			}else{ 
				$(".perpectual").addClass("stay").show();
				$(".perpectual").removeClass("initial-hide");
			}
		}
	}
	$(window).bind("scroll.perpectual", perpectualEvent);
	
	//===========================Side MEnu Click on Button Action===================================
	$('.panel-sidenav .btn-action').click(function(){
		if($('ul.edit-menu').css('display') == 'none'){
			$('ul.edit-menu').show();
		}else{
			$('ul.edit-menu').hide();
		}
	});
	
	
	//===========================Go Top button===================================
	$(window).scroll(function() {
		if ($(this).scrollTop() > 200) {
			$('.btn-top').fadeIn(200);
		} else {
			$('.btn-top').fadeOut(200);
		}
	});
	
	$('.btn-top').click(function(){
		$('html,body').animate({ scrollTop: 0 }, 100);
	});

	//===========================Get Current Year===================================
	var currentYear = (new Date).getFullYear();
	$("#year").text(currentYear);
	
	//===========================Resume Editor===================================
	$(".icon-edit, .add-link").click(function(){
		$(this).parents(".resume-item").addClass("editing").next(".resume-form").show();
		$(".panel-group.resume").addClass("edit-mode");
		$("#btn_save,#btn_cancel").click(function(){
			$(".resume-item").removeClass("editing");
			$(".resume-form").hide();
			$(".panel-group.resume").removeClass("edit-mode");
		});
	});
});