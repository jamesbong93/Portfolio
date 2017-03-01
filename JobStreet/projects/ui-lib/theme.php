<?php include("includes/config.php");?>
<!DOCTYPE html>
<html lang="en">
<head>
<title><?php echo $ProjectName?> - Theme</title>
<?php include("includes/meta.php");?>
</head>
<body data-spy="scroll" data-offset="0" data-target="#sidebar-wrapper">
<div id="wrapper">
	<?php
	$pg="theme";
	include ("sidebar.php");
	?>
	<div id="page-content-wrapper">
		<div class="container-fluid">
			<div class="row">

				<nav class="header-menu">
					<div class="clearfix">
						<h2 class="pull-left">Theme</h2>
						<a href="javascript:;" role="button" class="btn btn-link pull-right visible-xs" id="menu-toggle"><span class="icon-menu"></span></a>
					</div>
				</nav>

				<div class="panel">
					<div class="panel-body">
						<div class="clearfix">
							<div class="col-md-3">
								<figure class="thumbnail">
									<a href="siva"><img src="images/examples/siva.png" title="SIVA"></a>
									<figcaption>SIVA - <?php echo $SIVAVersion;?></figcaption>
								</figure>
							</div>
							<div class="col-md-3">
								<figure class="thumbnail">
									<a href="myjs"><img src="images/examples/myjs.png" title="MYJS"></a>
									<figcaption>MYJS - <?php echo $MYJSVersion;?></figcaption>
								</figure>
							</div>
							<div class="col-md-3">
								<figure class="thumbnail">
									<a href="#"><img src="images/examples/email.png" title="EMAIL"></a>
									<figcaption>Email</figcaption>
								</figure>
							</div>
						</div>
					</div>
				</div>

				<div class="panel">
					<div class="panel-body text-center">
						<img src="images/ui-library.png" class="img-responsive center-block"/>
					</div>
				</div>

			</div>
		</div>
	</div>
</div>
<?php include ("includes/script.php");?>
</body>
</html>
