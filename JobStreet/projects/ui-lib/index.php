<?php include("includes/config.php");?>
<!DOCTYPE html>
<html lang="en">
<head>
<title><?php echo $ProjectName?> - Home</title>
<?php include("includes/meta.php");?>
</head>
<body>
<div id="wrapper">
	<div class="backdrop"></div>
	<?php include ("sidebar.php");?>
	<div id="page-content-wrapper">
		<div class="container-fluid">
			<div class="jumbotron cover">
				<div class="container">
					<h2>Project Pi - Product Identity</h2>
					<p>Get the lowdown on the key pieces of Bootstrap's infrastructure, including our approach to better, faster, stronger web development.</p>
					<!--<a href="#menu-toggle" class="btn btn-link hide" id="menu-toggle">Toggle Menu</a>-->
					<div class="text-center"><a href="get-started.php" class="btn btn-primary btn-lg">Get Started</a></div>
				</div>
			</div>
		</div>
	</div>
</div>
<?php include ("includes/script.php");?>
</body>
</html>