<?php include("includes/config.php");?>
<!DOCTYPE html>
<html lang="en">
<head>
<title><?php echo $ProjectName?> - Site Tour</title>
<?php include("includes/meta.php");?>
<link rel="stylesheet" type="text/css" href="plugin/site-tour/site-tour.css">
</head>
<body>
<div id="wrap">
<?php
$para="plugins->site-tour";
include("includes/navbar.php");
?>
<div class="container">
	<div class="panel page-header">
		<div class="panel-body">
			<h3>Site Tour</h3>
		</div>
	</div>

	<div class="panel panel-clean card">
		<div class="panel-body">
			
			<div class="col-md-9 col-sm-7">
				<div id="step-1">
				<h2>Lorem ipsum dolor sit amet</h2>
				<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi.</p>
				</div>
				<p><span id="step-2"><a href="javascript:;">Sed fringilla mauris sit amet nibh</a></span></p>
					
				<div class="clearfix x3"></div>

				<h3>Sed fringilla mauris sit amet nibh</h3>					
				<div class="col-md-4">
					<figure>
						<img src="images/sample1.jpg" class="img-responsive thumbnail">
					</figure>
					<div class="clearfix x2"></div>
					<p>Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus.</p>
				</div>
				<div class="col-md-4">
					<figure>
						<img src="images/sample2.jpg" class="img-responsive thumbnail">
					</figure>
					<div class="clearfix x2"></div>
					<p>Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi.</p>
				</div>
				<div class="col-md-4" id="step-3">
					<figure>
						<img src="images/sample3.jpg" class="img-responsive thumbnail">
					</figure>
					<div class="clearfix x2"></div>
					<p>Etiam sit amet orci eget eros faucibus tincidunt. Duis leo.</p>
					<a href="javascript:;">Curabitur</a>
				</div>
				
			</div>
				<div class="col-md-3 col-sm-5">
				<h4>Lorem ipsum dolor sit amet</h4>
				<form>
					<div class="form-group">
						<label for="Text">Aenean commodo</label>
						<input type="text" class="form-control">
					</div>
					<div class="form-group">
						<label for="Text">Donec quam felis</label>
						<input type="text" class="form-control">
					</div>
					<button role="button" class="btn btn-primary btn-sm">Vivamus</button>
				</form>
				<div class="clearfix x3"></div>
				<div class="panel panel-info" id="step-0">
					<div class="panel-header">
						<h4 class="panel-title">Maecenas Tempus</h4>
					</div>
					<div class="panel-body">
						<p>Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim.</p>
					</div>
				</div>
			</div>

		</div>
	</div>

	<div class="panel panel-clean card">
		<div class="panel-body">
			<ol>
				<li>
					<p>Download site tour plugin. <a href="https://github.com/linkedin/hopscotch" target="_blank">Click here</a> to read full documentation.</p>
					<p><a href="download.php?f=site-tour.zip" class="btn btn-info">Download</a></p>
				</li>
				<li>
					Indicate steps in HTML, first step should start with 0.
					<pre class="well">&lt;div id=<span class="text-warning">&quot;step-0&quot;</span>&gt;</pre>
				</li>
				<li>
					Add backdrop inside &lt;body&gt;
					<pre class="well">&lt;div id=<span class="text-warning">&quot;backdrop&quot;</span>&gt;&lt;/div&gt;</pre>
				</li>
				<li>
					Open <code>config.js</code> to setup step
					<pre class="well"><span class="text-info">var</span> tour={
  id:<span class="text-success">'hello-hopscotch'</span>,
  steps:[
  {
    target:<span class="text-success">'step-0'</span>,
    title:<span class="text-success">'Title put here'</span>,
    content:<span class="text-success">'Content put here.'</span>,
    placement:<span class="text-success">'top'</span>,
    xOffset:<span class="text-success">'center'</span>,
    arrowOffset:<span class="text-success">'center'</span>
  }
  ],
  showPrevButton:<span class="text-success">true</span>,
  scrollTopMargin:<span class="text-success">100</span>
}</pre>
				</li>
			</ol>
		</div>
	</div>

	<div id="backdrop"></div>

</div>
</div>
<?php include("includes/footer.php");?>
<script src="plugin/site-tour/site-tour.js"></script>
<script src="plugin/site-tour/config.js"></script>
</body>
</html>