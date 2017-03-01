      $(".icon-edit").click(function() {
      	$(".resume-content-form").show();
      	$(".resume-section-content").hide();
      });
      $("#btn_save,#btn_cancel").click(function() {
      	$(".resume-content-form").hide();
      	$(".resume-section-content").show();
      });
      $('#nav_edit').click(function() {
      	var objNavMobile = $('#nav_edit_mobile');
      	if (objNavMobile.hasClass("c-hide")) {
      		objNavMobile.show(250);
      		objNavMobile.removeClass('c-hide').addClass('show');
      	}
      	else {
      		objNavMobile.hide(250);
      		objNavMobile.removeClass('show').addClass('c-hide');
      	}
      });
      $('[data-toggle="tooltip"]').tooltip();
      $(".follow-status").click(function() {
      	if ($(this).find(".follow-icon").hasClass("icon-checkmark")) {
      		$(this).find(".follow-icon").removeClass("icon-checkmark");
      		$(this).find(".follow-icon").addClass("icon-positive");
      		$(this).find(".follow-text").text("Follow");
      	}
      	else {
      		$(this).find(".follow-icon").removeClass("icon-positive");
      		$(this).find(".follow-icon").addClass("icon-checkmark");
      		$(this).find(".follow-text").text("Following");
      	}
      });
      $(".btn-pref .btn").click(function() {
      	$(".btn-pref .btn").removeClass("btn-info").addClass("btn-default");
      	// $(".tab").addClass("active"); // instead of this do the below 
      	$(this).removeClass("btn-default").addClass("btn-info");
      });

      $("#comfirm_unlink").click(function() {
      	$(".Fb-linked").hide();
      	$(".Fb-unlink").show();
      });
      $(".Fb-unlink img").click(function() {
      	$(".Fb-linked").show();
      	$(".Fb-unlink").hide();
          
      });

      $(".sort_type_1").click(function() {
         
      	$(".sort_type").find(".text").text($(this).find(".text").text());
      });

      $(".sort_type_2").click(function() {
       $(".sort_type").find(".text").text($(this).find(".text").text());
      });


     $('[data-toggle="popover"]').popover(); 

     /* company link all open in new tab*/
    $(".company").find("a").attr("target","_blank");



    /* company alert initial toogle*/
      if ($("#company-alert").is(':checked')) {
      	$('.company-alert-checkbox').find("[type=checkbox]").attr("disabled", false);
         
            $(".company-alert-checkbox").each(function(){
                if ($(this).find("[type=checkbox]").is(':checked')) {
                    $(this).parents(".company").css("opacity", "1.0");
                 }
                else{
                     $(this).parents(".company").css("opacity", "0.5");
                } 
            });
               
      }
      else {
      	$('.company-alert-checkbox').find("[type=checkbox]").attr("disabled", true);
        $('.company-alert-checkbox').parents(".company").css("opacity", "0.5");
      }


    /* company alert change toogle*/
      $('#company-alert').click(function() {
      	if ($("#company-alert").is(':checked')) {
      		$('.company-alert-checkbox').find("[type=checkbox]").attr("disabled", false);
            
                $(".company-alert-checkbox").each(function(){
                    if ($(this).find("[type=checkbox]").is(':checked')) {
                        $(this).parents(".company").css("opacity", "1.0");
                     }
                    else{
                         $(this).parents(".company").css("opacity", "0.5");
                    } 
            });
      	}
      	else {
      		$('.company-alert-checkbox').find("[type=checkbox]").attr("disabled", true).css("cursor", "not-allowed");
            $('.company-alert-checkbox').parents(".company").css("opacity", "0.5");
           
      	}
      });


   /* company alert checkbox change toogle*/
    $(".company-alert-checkbox").click(function(){
       if ($("#company-alert").is(':checked')){
           
            if ($(this).find("[type=checkbox]").is(':checked')) {
            $(this).parents(".company").css("opacity", "1.0");
            }
            else{
                $(this).parents(".company").css("opacity", "0.5");
            }  
       }
        else{
            
        }   
    });
    
    /* learning alert change toogle*/
      if ($("#learning-alert").is(':checked')) {
      	$("#learning-form :input").attr("disabled", false);
      }
      else {
      	$("#learning-form :input").attr("disabled", true);
        $(".btn-default").attr('disabled', false); 
        $(".btn-primary").attr('disabled', false);
      }

      $('#learning-alert').click(function() {
      	if ($("#learning-alert").is(':checked')) {
      		$("#learning-form :input").attr("disabled", false);
      	}
      	else {
      		$("#learning-form :input").attr("disabled", true);
            $(".btn-default").attr('disabled', false); 
            $(".btn-primary").attr('disabled', false);  
      	}
      });


       /* job alert change toogle */
         $(".job-alert").each(function(){
                var lina_target = $(this).parents("tr");
                if ($(this).is(':checked')) {

                   lina_target.css("opacity", "1.0");
      		        lina_target.children().find("a").attr("onclick", "return true").css("cursor","pointer");
                }
                else {
                    
                    lina_target.css("opacity", "0.5");
                    lina_target.find(".edit-btn").attr("onclick", "return false").css("cursor","not-allowed");
                    lina_target.find(".a-icon").attr("onclick", "return false").css("cursor","not-allowed");
                    lina_target.find(".lina-index").attr("onclick", "return false").css("cursor","not-allowed");
                   
                    
                   
                }
         });


      $(".job-alert").click(function() {
        var lina_target = $(this).parents("tr");
      	if ($(this).is(':checked')) {
            lina_target.css("opacity", "1.0");
      		lina_target.children().find("a").attr("onclick", "return true").css("cursor","pointer");
           
      	}
      	else {
            
            lina_target.css("opacity", "0.5");
            lina_target.find(".edit-btn").attr("onclick", "return false").css("cursor","not-allowed");
            lina_target.find(".a-icon").attr("onclick", "return false").css("cursor","not-allowed");
            lina_target.find(".lina-index").attr("onclick", "return false").css("cursor","not-allowed");
            
            
           
      	}
      });


    /* lina alert 1 disabled toogle */
      if ($("#lina-alert-1").is(':checked')) {
      	$(".lina-form-1 :input").attr("disabled", false);
      }
      else {
      	$(".lina-form-1 :input").attr("disabled", true);
        $(".btn-default").attr('disabled', false);  
        $(".btn-primary").attr('disabled', false);  
      }

      $('#lina-alert-1').click(function() {
      	if ($("#lina-alert-1").is(':checked')) {
      		$(".lina-form-1 :input").attr("disabled", false);
      	}
      	else {
      		$(".lina-form-1 :input").attr("disabled", true);
            $(".btn-default").attr('disabled', false);  
            $(".btn-primary").attr('disabled', false);  
      	}
      });

     /* lina alert 2 disabled toogle */
      if ($("#lina-alert-2").is(':checked')) {
      	$(".lina-form-2 :input").attr("disabled", false);
      }
      else {
      	$(".lina-form-2 :input").attr("disabled", true);
        $(".btn-default").attr('disabled', false);  
        $(".btn-primary").attr('disabled', false);  
      }

      $('#lina-alert-2').click(function() {
      	if ($("#lina-alert-2").is(':checked')) {
      		$(".lina-form-2 :input").attr("disabled", false);
      	}
      	else {
      		$(".lina-form-2 :input").attr("disabled", true);
             $(".btn-default").attr('disabled', false); 
             $(".btn-primary").attr('disabled', false);  
      	}
      });

  
/*
    $(".best-interview").popover({ trigger: "manual" , html: true, animation:false})
    .on("mouseenter", function () {
        var _this = this;
        $(this).popover("show");
        $(".popover").on("mouseleave", function () {
            $(_this).popover('hide');
        });
    }).on("mouseleave", function () {
        var _this = this;
        setTimeout(function () {
            if (!$(".popover:hover").length) {
                $(_this).popover("hide");
            }
        }, 100);
        
    });
    */
    