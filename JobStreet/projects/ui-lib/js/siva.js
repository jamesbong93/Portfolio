$(function(){
	//======================Topbar====================================
	//topbar-search
	$(".icon-search").click(function(){
		$(".topbar").addClass("search-active");
		$(".topbar-search input").focus();
	});
	$(".icon-close").click(function(){
		$(".topbar").removeClass("search-active");
	});
	
	//topbar navigation click more
	$(".topbar .more").click(function(){
		if($(".topbar").hasClass("more-active")){
			$(".topbar").removeClass("more-active");
		} else {
			$(".topbar").addClass("more-active");
		}
	});
	
	//=======================Facet====================================
	$(".facet").click(function(){
		if($(".panel-facet").hasClass("facet-active")){
			$(".panel-facet").removeClass("facet-active");
		} else {
			$(".panel-facet").addClass("facet-active");
		}
	});
	
	//=======================Loader====================================
	$(".panel-facet input[type='checkbox']").click(function(){
		$(".loader-wrap").show(1,function(){
			$(this).fadeOut(1000);
			$(this).hide(900);
		});
	});
	
	//======================Select All================================
	$('#selectAll').click(function () {
		if ($(this).is(':checked')) {
			$('.panel-action .nav > li.dropdown').addClass('action-active');
		}else{
			$('.panel-action .nav > li.dropdown').removeClass('action-active');
		};
	});
	
	//======================Tooltips================================
	$(".tooltip-left").tooltip({
	  template: '<div class="tooltip text-left"><div class="tooltip-arrow"></div><div class="tooltip-inner"></div></div>'
	});
	$('[data-toggle="tooltip"]').tooltip();
	
	$(".card .info .text").each(function(){
		if ($(this).text().length > 35) {
			$(this).attr("title", $(this).text());
		}
	});
	//=======================Utilities================================
	//Display year
	var currentYear = (new Date).getFullYear();
	$("#year").text(currentYear);
	
	//===================Sticky Resume Header=========================
	// grab the initial top offset of the navigation
	var perpectualOffset = 0;
	var perpectualOffsetbtm = 0;
	
	//+++++++++++++Add to Expand Card Functon+++++++++++++++++++++++++
	var $profile = $(".resume");
	if($profile.length > 0){
		perpectualOffset = $profile.offset().top;
		perpectualOffsetbtm = $profile.offset().top + $profile.height() - 110;
		//++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
		
		// our function that decides weather the navigation bar should have "fixed" css position or not.
		var stickyBar = function(){
			var scroll_top = $(window).scrollTop(); // our current vertical position from the top
			 
			// if we've scrolled more than the bar, change its position to fixed to stick to top,
			// otherwise change it back to relative
			if (scroll_top > perpectualOffsetbtm) {
				$('.resume-primary').removeClass('perpectual');
				$('.resume-content').css('margin-top', 0);
			}else if (scroll_top > perpectualOffset) {
				$('.resume-primary').addClass('perpectual');
				$('.resume-content').css('margin-top', 132);
			} else {
				$('.resume-primary').removeClass('perpectual');
				$('.resume-content').css('margin-top', 0);
			}

			if (scroll_top > (perpectualOffsetbtm - 250)) {
				$('.resume-control').css({top:'100px', position:'absolute'});	
			}else if (scroll_top > perpectualOffset - 100) {
				$('.resume-control').css({top:'50%', position:'fixed'});	
			} else {
				$('.resume-control').css({top:'100px', position:'absolute'});	
			}
		};
		 
		// and run it again every time you scroll
		$(window).scroll(function() {
			 stickyBar();
		});
	}
	
	//=======================Notifications============================
	$(".dropdown-menu").click(function(event){
			event.stopPropagation();
	});
	
	$("#clearNotification").click(function(){
        $(".notification-content").slideUp(200);
        $(".notification-empty").fadeIn(200);
        $(".bell .alert").removeClass();
        $(".bell i").addClass("icon-bell");
    });

	//=======================Accordion Facet============================
    $(document).on('click', ".accordion-facet input[type='checkbox'],.accordion-facet .facet-checkbox, #applySalary, #applyYOE, .active-filter .icon-close, .active-filter .filter-reset", function() {
	      loader_wrap();
	});

	function loader_wrap(){
		$(".loader-wrap").show(1,function(){
		 $(this).fadeOut(1000);
		 $(this).hide(900);
	  });
	}

   //Keyboard click enter to add new criteria
   $('.facet-filter input').keypress(function (e) {
	  var filter_container = $(this).parent();

	  if(e.which == 13) {
		addFilter(filter_container);
		return false;
      }
   });

   //Click add icon to add new criteria
 	$('.add-item').click(function(){

      var filter_container = $(this).parent();
	  var new_filter = filter_container.find('input');

	  if(new_filter.width() < 100){
	   filter_container.addClass("expand");
	   new_filter.focus();
	   $(this).find('.add-filter').css('display','none');
	  }
	  //Focus out on input
      new_filter.focusout(function() {
	   addFilter(filter_container);
	   filter_container.removeClass("expand");
	   $('.add-item .add-filter').css('display','inline');
      });
   });

   //Add filter on action bar (function)
   function addFilter(filter_container){
	  var new_filter = filter_container.find('input');

      if(!(new_filter.val())==''){
		var totalFacet = $('.label-container').length + 1 ;
		//Generate random number for facet count (Testing)
		var adjustedHigh = (parseFloat(40) - parseFloat(1)) ;
		var numRand = Math.floor(Math.random()*adjustedHigh) + parseFloat(1);
		//Finish (Testing)
		filter_container.removeClass("expand");
		$('<div class="label-container content-highlight"><span class="facet-count">('+numRand+')</span><input type="checkbox" id="facet'+totalFacet+'" checked><span class="facet-checkbox"></span><label for="facet'+totalFacet+'"><div class="ellipsis" title="'+new_filter.val()+'">'+new_filter.val()+'</div></label></div>').insertBefore(filter_container);
		new_filter.val("");
	   }
	}

   //Add filter on action bar when clicked on label or checkbox
    $(document).on('click', '.accordion-facet .label-container .facet-checkbox,.accordion-facet .label-container label', function() {
	 var filter_parent = $(this).parent();
	 var facet_chkbox = filter_parent.find('input');
	 var chkbox_status = !(facet_chkbox.is(':checked'));

	 if($(this).is(".facet-checkbox")){
		facet_chkbox.prop('checked', chkbox_status);
	 }

	 if(chkbox_status){
	  add_highlight(filter_parent);
	 }else{
	  remove_highlight(filter_parent);
	 }
	});

   //Click on apply for Salary range
   $('#applySalary').click(function(){
    var salary_parent = $(this).parent();
	var min_salary = $('#minSalary').val();
	var max_salary = $('#maxSalary').val();

	salary_parent.removeClass("has-error").find('.error-status').hide();

	//Salary validation
	if(min_salary == "" && max_salary == ""){
	  salary_parent.addClass('has-error').find('.error-status').show();
	}else{
	  add_highlight(salary_parent.parent());
	}
   });

   //Click on apply for Years of Experience
   $('#applyYOE').click(function(){
    var exp_parent = $(this).parent();
    var min_exp = $('#minExp').val();
	var max_exp = $('#maxExp').val();

	exp_parent.removeClass("has-error").find('.error-status').hide();

	//YOE validation
	if(min_exp == "" && max_exp == ""){
	  exp_parent.addClass("has-error").find('.error-status').show();
	}else{
	  add_highlight(exp_parent.parent());	
	}
   });

   //Clear Filters
   $('.accordion-facet .filter-clear').click(function(){
		$('.accordion-facet .label-container input').prop('checked', false);
		$('.accordion-facet .panel-default .content-highlight').removeClass('content-highlight');
		$('.accordion-facet input').val("");
		$("#salary_currency_code").select2("val", "1"); //set the value to Malaysia

		//Add default filter when reset (Malaysia)
		var default_filter = $('#facet17').parent();
		add_highlight(default_filter);
		$('#facet17').prop('checked', true);
		$('.filter-clear').parent().css("display", "none");
		loader_wrap();
   });

   //Add active filter (function)
   function add_highlight(highlight_container){
		highlight_container.addClass('content-highlight');
		$('.filter-clear').parent().css("display", "block");
   }

   //Remove active filter (function)
   function remove_highlight(highlight_container){
		highlight_container.removeClass('content-highlight');
   }

    //======================= Click on Contact Us ============================
	$('#contactUs .modal-footer > button').click(function(){
		$('#contactUs').hide();
		$('#contactUsRating').show();
	});

	$('#contactUsRating .star-rating span').click(function(){
		$('#contactUsRating').hide();
		$('#contactUsThank').show();
	});

	//Star Rating
	$('.star-rating li span').hover(
	    function() {
	        $(this).parent().addClass('selected').prevAll().addClass('selected');
	    },
	    function(e) {
	      $(this).parent().parent().find('li').removeClass('selected');
	    }
	);
});