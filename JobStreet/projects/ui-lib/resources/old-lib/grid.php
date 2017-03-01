<?php include("includes/config.php");?>
<!DOCTYPE html>
<html lang="en">
<head>
<title><?php echo $ProjectName?> - Grid</title>
<?php include("includes/meta.php");?>
</head>
<body>
<div id="wrap">
<?php
$para="grid";
include("includes/navbar.php");
?>
<div class="container">
	<div class="panel page-header">
		<div class="panel-body">
			<h3>Grid</h3>
		</div>
	</div>

	<p class="text-danger text-center">
		<span class="icon-expand-2"></span> Resize your browser or load on different devices to test responsive grid system.
	</p>
	
	<div class="row">
		<div class="col-lg-4">
			<div class="panel">
				<div class="panel-body"><code>.col-lg-4</code></div>
			</div>
		</div>
		<div class="col-lg-4">
			<div class="panel">
				<div class="panel-body"><code>.col-lg-4</code></div>
			</div>
		</div>
		<div class="col-lg-4">
			<div class="panel">
				<div class="panel-body"><code>.col-lg-4</code></div>
			</div>
		</div>
	</div>

	<div class="col-lg-5 col-md-4">
		<div class="panel panel-clean">
			<div class="panel-body">
			<code>.col-lg-5 .col-md-4</code>
			</div>
		</div>
	</div>
	<div class="col-lg-4 col-md-4">
		<div class="panel panel-clean">
			<div class="panel-body">
			<code>.col-lg-4 .col-md-4</code>
			</div>
		</div>
	</div>
	<div class="col-lg-3 col-md-4">
		<div class="panel panel-clean">
			<div class="panel-body">
			<code>.col-lg-3 .col-md-4</code>
			</div>
		</div>
	</div>
	
	<div class="clearfix"></div>

	<div class="col-sm-6">
		<div class="panel panel-clean">
			<div class="panel-body">
			<code>.col-sm-6</code>
			</div>
		</div>
	</div>
	<div class="col-sm-6">
		<div class="panel panel-clean">
			<div class="panel-body">
			<code>.col-sm-6</code>
			</div>
		</div>
	</div>
	
	<div class="clearfix"></div>
	
	<div class="col-xs-4">
		<div class="panel panel-clean">
			<div class="panel-body">
			<code>.col-xs-4</code>
			</div>
		</div>
	</div>
	<div class="col-xs-8">
		<div class="panel panel-clean">
			<div class="panel-body">
			<code>.col-xs-8</code>
			</div>
		</div>
	</div>
	
	<div class="clearfix"></div>
	
	<div class="col-md-offset-4 col-md-5">
		<div class="panel panel-clean">
			<div class="panel-body">
			<code>.col-md-offset-4 &plus; .col-md-5</code>
			</div>
		</div>
	</div>
	
	<div class="clearfix x2"></div>

	<pre class="well">&lt;div class=<span class="text-warning">&quot;row&quot;</span>&gt;
  &lt;div class=<span class="text-warning">&quot;col-lg-4&quot;</span>&gt;
    &lt;div class=<span class="text-warning">&quot;panel panel-clean&quot;</span>&gt;
      &lt;div class=<span class="text-warning">&quot;panel-body&quot;</span>&gt;left&lt;/div&gt;
    &lt;/div&gt;
  &lt;/div&gt;
  &lt;div class=<span class="text-warning">&quot;col-lg-4&quot;</span>&gt;
    &lt;div class=<span class="text-warning">&quot;panel panel-clean&quot;</span>&gt;
      &lt;div class=<span class="text-warning">&quot;panel-body&quot;</span>&gt;middle&lt;/div&gt;
    &lt;/div&gt;
  &lt;/div&gt;
  &lt;div class=<span class="text-warning">&quot;col-lg-4&quot;</span>&gt;
    &lt;div class=<span class="text-warning">&quot;panel panel-clean&quot;</span>&gt;
      &lt;div class=<span class="text-warning">&quot;panel-body&quot;</span>&gt;right&lt;/div&gt;
    &lt;/div&gt;
  &lt;/div&gt;
&lt;/div&gt;</pre>

</div>
</div>
<?php include("includes/footer.php");?>
</body>
</html>