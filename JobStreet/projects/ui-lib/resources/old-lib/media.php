<?php include("includes/config.php");?>
<!DOCTYPE html>
<html lang="en">
<head>
<title><?php echo $ProjectName?> - Media</title>
<?php include("includes/meta.php");?>
</head>
<body>
<div id="wrap">
<?php
$para="ui->media";
include("includes/navbar.php");
?>
<div class="container">
	<div class="panel page-header">
		<div class="panel-body">
			<h3>Media</h3>
		</div>
	</div>

	<h4>Media Object</h4>
	<div class="panel panel-clean card">
		<div class="panel-body">

		<h5><code>.media-object</code></h5>
		<div class="media">
			<a href="javascript:;" class="pull-left"><img src="data:image/jpg;base64" data-src="holder.js/80x80/auto/#fc0:#333/text:.pull-left" class="media-object"></a>
			<div class="media-content">
				<h3 class="media-header">Header</h3>
				<p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus. Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.</p>
			</div>
		</div>

		<div class="media">
			<a href="javascript:;" class="pull-right"><img src="data:image/jpg;base64" data-src="holder.js/80x80/auto/#098:#fff/text:.pull-right" class="media-object"></a>
			<div class="media-content">
				<h3 class="media-header">Header</h3>
				<p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.</p>
			</div>
		</div>

		<pre class="well">&lt;div class=<span class="text-warning">&quot;media&quot;</span>&gt;
  &lt;a href=<span class="text-warning">&quot;...&quot;</span> class=<span class="text-warning">&quot;pull-left&quot;</span>&gt;
    &lt;img src=<span class="text-warning">&quot;data:image/jpg;base64&quot;</span> data-src=<span class="text-warning">&quot;holder.js/80x80/auto&quot;</span> class=<span class="text-warning">&quot;media-object&quot;</span>&gt;
  &lt;/a&gt;
  &lt;div class=<span class="text-warning">&quot;media-content&quot;</span>&gt;
    &lt;h3 class=<span class="text-warning">&quot;media-header&quot;</span>&gt;Header&lt;/h3&gt;
    &lt;p&gt;Some Content.&lt;/p&gt;
  &lt;/div&gt;
&lt;/div&gt;</pre>

		<h5><code>.media-list</code></h5>
		<ul class="media-list">
			<li class="media">
			<a href="javascript:;" class="pull-left"><img src="data:image/jpg;base64" data-src="holder.js/80x80/auto/#eee:#666" class="media-object"></a>
			<div class="media-content">
				<h3 class="media-header">Header</h3>
				Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus. 
			</div>
			</li>
			<li class="media">
			<a href="javascript:;" class="pull-left"><img src="data:image/jpg;base64" data-src="holder.js/80x80/auto/#eee:#666" class="media-object"></a>
			<div class="media-content">
				<h3 class="media-header">Header</h3>
				Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus. 
			</div>
			</li>
		</ul>

		<pre class="well">&lt;ul class=<span class="text-warning">&quot;media-list&quot;</span>&gt;
  &lt;li class=<span class="text-warning">&quot;media&quot;</span>&gt;
    &lt;a href=<span class="text-warning">&quot;...&quot;</span> class=<span class="text-warning">&quot;pull-left&quot;</span>&gt;
      &lt;img src=<span class="text-warning">&quot;data:image/jpg;base64&quot;</span> data-src=<span class="text-warning">&quot;holder.js/80x80/auto&quot;</span> class=<span class="text-warning">&quot;media-object&quot;</span>&gt;
    &lt;/a&gt;
    &lt;div class=<span class="text-warning">&quot;media-content&quot;</span>&gt;
      &lt;h3 class=<span class="text-warning">&quot;media-header&quot;</span>&gt;Header&lt;/h3&gt;
      &lt;p&gt;Some Content&lt;/p&gt;
    &lt;/div&gt;
  &lt;/li&gt;
&lt;/ul&gt;</pre>

		</div>
	</div>

	<h4>Jumbotron</h4>
	<div class="panel panel-clean card">
		<div class="panel-body">
		<h5><code>.jumbotron</code></h5>
		<div class="jumbotron">
			<div class="container">
			<h1>Key Features</h1>
			<p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.</p>
			<p><a href="javascript:;" class="btn btn-success btn-lg">Enroll now!</a></p>
			</div>
		</div>

		<pre class="well">&lt;div class=<span class="text-warning">&quot;jumbotron&quot;</span>&gt;
  &lt;div class=<span class="text-warning">&quot;container&quot;</span>&gt;
    &lt;h1&gt;Key Features&lt;/h1&gt;
    &lt;p&gt;Some Content&lt;/p&gt;
    &lt;p&gt;&lt;a href=<span class="text-warning">&quot;...&quot;</span> class=<span class="text-warning">&quot;btn btn-success&quot;</span>&gt;Read More&lt;/a&gt;&lt;/p&gt;
  &lt;/div&gt;
&lt;/div&gt;</pre>
		</div>
	</div>

</div>
</div>
<?php include("includes/footer.php");?>
<script src="js/holder.js"></script>
</body>
</html>