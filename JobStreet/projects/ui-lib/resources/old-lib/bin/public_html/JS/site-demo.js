$(function(){$("#gotop").click(function(){$("html,body").animate({scrollTop:0},800)});$("#cover-btn").click(function(){window.location="./documentation.php"});getViewPortWidth();$(window).resize(getViewPortWidth);function getViewPortWidth(){$("#px").text($(window).width())}$("#loading-example-btn").click(function(){var btn=$(this);btn.button("loading"),setTimeout(function(){btn.button("complete")},2000)});$("#demo-navbar").addClass("navbar-default");$("#demo-navbar .dropdown-menu a").click(function(){var currentClass="navbar-"+$(this).attr("rel");$("#demo-navbar").removeClass().addClass(currentClass);$("#demo-code").find($("code")).text("."+currentClass)})});