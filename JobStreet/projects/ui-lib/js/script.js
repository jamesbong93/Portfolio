$(function(){
	//Code Prettify and copy code button
	prettyPrint();
	jQuery(".btnCopy").tooltip();
	jQuery(".btnCopy").mouseover(function(){
		$(this).attr('data-original-title', 'Copy to clipboard')
          .tooltip('fixTitle')
          .tooltip('show');
	});
	jQuery('.btnCopy').click(function() {
		var myText = $(this).closest('.well.prettyprint').find('.code_content');   //get the text of element
		var newContent = $('<textarea id="myCode">'+myText.text()+'</textarea>');
		myText.before(newContent);
		copyToClipboard();
		//newContent.remove();
		$(this).attr('data-original-title', 'Copied!')
          .tooltip('fixTitle')
          .tooltip('show');
	});	
	
	$(".conventional-menu select").change(function(){
		var url = $(this).val();
		if (url) {
			window.location = url;
		}
		return false;
	});

	// Sidebar Toggle
	$("#menu-toggle,#menu-toggle-close").click(function(e){
		e.preventDefault();
		$("#wrapper").toggleClass("toggled");
	});

	// Scrollspy
	$("body").scrollspy({target: '#sidebar-wrapper'});

	// Smooth Scrolling
	$(".nav-child a").on('click',function(e){
		e.preventDefault();
		var target=this.hash;
		var $target=$(target);
		$("html,body").stop().animate({
			'scrollTop': $target.offset().top
		},800,"swing");
	});

	// Fixed Header
	var nav = $('.header-menu');
	$(window).scroll(function (){
		if($(this).scrollTop() > 20){
			nav.addClass("affix");
		}else{
			nav.removeClass("affix");
		}
	});

	// Theme Switcher
	$(".theme-switch a").on('click',function(e){
		e.preventDefault();
		var id=$(this).attr("id");
		location.href=id+"/";
	})
    
    $(".thumbnail").hover(function(){
        $(this).find(".download-btn").css("opacity", "2.0");
        $(this).find(".preview-btn").css("opacity", "2.0");
        $(this).find("img").css("opacity", "0.8");
        $(this).find(".action-btn").css("opacity", "1.0");
    }, function(){
        $(this).find(".download-btn").css("opacity", "0");
        $(this).find(".preview-btn").css("opacity", "0");
        $(this).find("img").css("opacity", "1.0");
        $(this).find(".action-btn").css("opacity", "0");
    });
});

function copyToClipboard() {
	var content = document.getElementById('myCode');
    content.select()
    document.execCommand('Copy');
	content.remove();
}