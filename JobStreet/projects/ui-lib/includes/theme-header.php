<!DOCTYPE html>
<html lang="en">
<head>
<title><?php echo strtoupper($theme)." - ".$com;?></title>

<?php
	include("../includes/config.php");
	if($theme == "siva"){
		$version = $SIVAVersion;
	}elseif ($theme == "myjs") {
		$version = $MYJSVersion;
	}
?>
<?php include("../includes/meta.php");?>
<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Lobster">
<link rel="stylesheet" href="http://dna.jsstatic.com/<?php echo $theme;?>/<?php echo $theme."-".$version;?>.css">
<link rel="stylesheet" href="http://dna.jsstatic.com/select2/select2.css">
<link rel="stylesheet" href="<?php echo $HostURL ?>css/style.css">
<link rel="stylesheet" href="<?php echo $HostURL ?>css/prettify.css" />
</head>
<body class="theme-preview">
<base href="<?php echo $HostURL ?>">

<header>
<nav class="navbar navbar-default navbar-fixed-top">
	<div class="container-fluid">
		<div class="clearfix">
			<ul class="nav nav-pills pull-left">
				<li><a href="./theme.php" class="btn btn-link"><span class="icon-angle-left"></span> Back to Pi</a></li>
			</ul>

			<div class="pull-right">
				<ul class="nav nav-pills">
					<li class="dropdown pull-right">
						<a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown">Theme <span class="caret"></span></a>
						<ul class="dropdown-menu theme-switch">
							<li><a href="#" id="siva"><strong>SiVA</strong><img src="images/examples/siva.png" class="img-responsive thumbnail"></a></li>
							<li><a href="#" id="myjs"><strong>MYJS</strong><img src="images/examples/myjs.png" class="img-responsive thumbnail"></a></li>
						</ul>
					</li>
				</ul>
			</div>
		</div>

		<div class="conventional-menu">
			<select class="form-control">
			<?php
			echo "<option>Menu</option>";
			BuildMenu('default',$theme,$com);
			?>
			</select>
		</div>
	</div>
	</nav>
</header>