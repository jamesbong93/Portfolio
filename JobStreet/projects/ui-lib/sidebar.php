<?php
if(isset($pg)){
	$current=$pg;
}else{$current="";}
?>
<nav id="sidebar-wrapper" role="navigation">
	<a href="javascript:;" id="menu-toggle-close" class="close visible-xs"><span class="icon-angle-left"></span></a>
	<ul class="nav sidebar-nav">
		<li class="sidebar-brand"><a href="./"><img src="ico/favicon.png"></a></li>
		<li<?php if($current=="started"){echo " class=\"open\"";}?>>
			<a href="get-started.php">Get Started</a>
			<ul class="nav-child">
				<li><a href="#about">About</a></li>
				<li><a href="#cdn">CDN</a></li>
				<li><a href="#template">Basic Template</a></li>
				<li><a href="#examples">Examples</a></li>
				<li><a href="#customize">Customization</a></li>
				<!--<li><a href="#change-log">Change Log</a></li>-->
			</ul>
		</li>
		<li<?php if($current=="style"){echo " class=\"open\"";}?>>
			<a href="style.php" id="style">Style</a>
			<ul class="nav-child">
				<li><a href="#color">Color</a></li>
				<li><a href="#icons">Icons</a></li>
				<li><a href="#image">Image</a></li>
				<li><a href="#grid">Grid system</a></li>
				<li><a href="#typo">Typography</a></li>
			</ul>
		</li>
		<li<?php if($current=="components"){echo " class=\"open\"";}?>>
			<a href="components.php" id="components">Components</a>
			<ul class="nav-child">
				<li><a href="#buttons">Buttons</a></li>
				<!--<li><a href="#cards">Cards</a></li>-->
				<li><a href="#grids">Grids</a></li>
				<li><a href="#tabs">Tabs</a></li>
				<li><a href="#navigation">Navigation</a></li>
				<li><a href="#navigation-bar">Navigation Bar</a></li>
				<li><a href="#form">Form</a></li>
				<li><a href="#tooltips">Tooltips / Popover</a></li>
				<li><a href="#panel">Panel</a></li>
				<li><a href="#list">List</a></li>
				<li><a href="#table">Table</a></li>
				<li><a href="#modal">Modal</a></li>
				<li><a href="#progressbar">Progress Bar</a></li>
				<li><a href="#alertbox">Alert Box</a></li>
				<li><a href="#label">Label & Badge</a></li>
			</ul>
		</li>
		<li<?php if($current=="patterns"){echo " class=\"open\"";}?>>
			<a href="patterns.php">Patterns</a>
			<ul class="nav-child">
				<li><a href="#data-formats">Data Formats</a></li>
				<li><a href="#errors">Errors</a></li>
				<li><a href="#notifications">Notifications</a></li>
			</ul>
		</li>
		<li<?php if($current=="theme"){echo " class=\"open\"";}?>>
			<a href="theme.php">Theme</a>
		</li>
	</ul>
</nav>