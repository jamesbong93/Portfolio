<?php
$Page="".$para."";
//$NavOpt="".$para[1]."";
// Check if this is submenu
if(preg_match("/->/",$Page)){
	$ls=explode("->",$Page);
	$Parent=$ls[0];
	$Child=$ls[1];
}
else{$Parent=$Page;$Child=null;}
?>
<!--// Nav Bar // -->
<div class="navbar navbar-default">
	<div class="container">
		<div class="navbar-header">
		<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		</button>
		<a class="navbar-brand" href="./" title="Home - Project Pi"></a>
		</div>

		<div class="navbar-collapse collapse">
			<a class="navmenu-brand" href="./" title="Home - Project Pi"></a>
			<ul class="nav navbar-nav">
				<li<?php if($Parent=="grid"){echo " class=\"active\"";}?>><a href="grid.php">Grid</a></li>
				<li<?php if($Parent=="typo"){echo " class=\"active\"";}?>><a href="typo.php">Typography</a></li>
				<li class="dropdown<?php if($Parent=="ui"){echo " active";}?>">
					<a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown">UI <span class="caret"></span></a>
					<ul class="dropdown-menu">
						<li<?php if($Child=="buttons"){echo " class=\"active\"";}?>><a href="buttons.php">Buttons</a></li>
						<li<?php if($Child=="form-control"){echo " class=\"active\"";}?>><a href="form-control.php">Form Control</a></li>
						<li<?php if($Child=="navigation"){echo " class=\"active\"";}?>><a href="navigation.php">Navigation</a></li>
						<li<?php if($Child=="notification"){echo " class=\"active\"";}?>><a href="notification.php">Notification</a></li>
						<li<?php if($Child=="media"){echo " class=\"active\"";}?>><a href="media.php">Media</a></li>
						<li<?php if($Child=="organize"){echo " class=\"active\"";}?>><a href="organize.php">Organize</a></li>
					</ul>
				</li>
				<li<?php if($Parent=="icons"){echo " class=\"active\"";}?>><a href="icons.php">Icons</a></li>
				<li<?php if($Parent=="image"){echo " class=\"active\"";}?>><a href="image.php">Image</a></li>
				<li class="dropdown<?php if($Parent=="plugins"){echo " active";}?>">
					<a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown">Plugins <span class="caret"></span></a>
					<ul class="dropdown-menu">
						<li<?php if($Child=="site-tour"){echo " class=\"active\"";}?>><a href="site-tour.php">Site Tour</a></li>
						<li<?php if($Child=="slider"){echo " class=\"active\"";}?>><a href="slider.php">Slider</a></li>
					</ul>
				</li>
				<li<?php if($Parent=="utilities"){echo " class=\" active\"";}?>><a href="utilities.php">Utilities</a></li>
				<li class="dropdown<?php if($Parent=="resources"){echo " active";}?>">
					<a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown">Resources <i class="caret"></i></a>
					<ul class="dropdown-menu">
						<li<?php if($Child=="documentation"){echo " class=\"active\"";}?>><a href="documentation.php">Documentation</a><li>
						<li<?php if($Child=="get-started"){echo " class=\"active\"";}?>><a href="get-started.php">Get Started</a><li>
						<li<?php if($Child=="guideline"){echo " class=\"active\"";}?>><a href="guideline.php">Guideline</a></li>
					</ul>
				</li>
			</ul>
		</div>
	</div>
</div>