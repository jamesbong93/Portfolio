<?php include("includes/config.php");?>
<!DOCTYPE html>
<html lang="en">
<head>
<title><?php echo $ProjectName?> - Home</title>
<?php include("includes/meta.php");?>
</head>
<body class="cover-page">
<div id="wrap">
<?php
$para="home";
include("includes/navbar.php");
?>
	<div class="backdrop">
		<div class="container index">
			<div class="panel card">
				<div class="panel-body">
					<span class="jslogo"></span>
					<div class="clearfix x2"></div>
					<h2>Project Product Identity</h2>
					<p>Get the lowdown on the key pieces of Bootstrap's infrastructure, including our approach to better, faster, stronger web development.</p>
					<div class="text-center">
						<a class="btn btn-primary btn-lg" role="button" href="get-started.php">Get started</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<script src="js/jquery-2.1.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>