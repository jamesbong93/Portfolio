<?php include("includes/config.php");?>
<!DOCTYPE html>
<html lang="en">
<head>
<title><?php echo $ProjectName?> - Utilities</title>
<?php include("includes/meta.php");?>
</head>
<body>
<div id="wrap">
<?php
$para="utilities";
include("includes/navbar.php");
?>
<div class="container">
	<div class="panel page-header">
		<div class="panel-body">
			<h3>Utilities</h3>
		</div>
	</div>

	<h4>Visible & Hidden</h4>
	<div class="panel panel-clean card">
		<div class="panel-body">
			<p class="text-danger text-center">
				<span class="icon-expand-2"></span> Resize your browser or load on different devices to test the responsive utility classes.
			</p>			

			<div class="visible-xs">
				<div class="panel panel-success">
					<div class="panel-heading">
						<h4 class="media-content text-center"><span class="icon-mobile circle-icon"></span> Visible on extra small devices (Phone &lt;768px)</h4>
					</div>
					<div class="panel-body"><code>.visible-xs</code></div>
				</div>
			</div>
			<div class="visible-sm">
				<div class="panel panel-info">
					<div class="panel-heading">
						<h4 class="media-content text-center"><span class="icon-tablet circle-icon"></span> Visible on small devices (Tablets &gt;768px)</h4>
					</div>
					<div class="panel-body"><code>.visible-sm</code></div>
				</div>
			</div>
			<div class="visible-md">
				<div class="panel panel-warning">
					<div class="panel-heading">
						<h4 class="media-content text-center"><span class="icon-desktop"></span> Visible on medium devices (Desktop &gt;992px)</h4>
					</div>
					<div class="panel-body"><code>.visible-md</code></div>
				</div>
			</div>
			<div class="visible-lg">
				<div class="panel panel-danger">
					<div class="panel-heading">
						<h4 class="media-content text-center"><span class="icon-desktop"></span> Visible on large devices (Desktop &gt;1200px)</h4>
					</div>
					<div class="panel-body"><code>.visible-lg</code></div>
				</div>
			</div>
			
			<div class="clearfix"></div>
			
			<div class="col-sm-4 hidden-xs">
				<div class="panel panel-success">
					<div class="panel-heading"><span class="panel-title"><span class="icon-mobile"></span> Phone &lt;768px</span></div>
					<div class="panel-body">Hidden on extra small devices<h5><code>.hidden-xs</code></h5></div>
				</div>
			</div>
			<div class="col-sm-4 hidden-sm">
				<div class="panel panel-info">
					<div class="panel-heading"><span class="panel-title"><span class="icon-tablet"></span> Tablets &gt;768px</span></div>
					<div class="panel-body">Hidden on small devices<h5><code>.hidden-sm</code></h5></div>
				</div>
			</div>
			<div class="col-sm-4 hidden-md">
				<div class="panel panel-warning">
					<div class="panel-heading"><span class="panel-title"><span class="icon-desktop"></span> Desktop &gt;992px</span></div>
					<div class="panel-body">Hidden on medium devices<h5><code>.hidden-md</code></h5></div>
				</div>
			</div>
			<div class="col-sm-4 hidden-lg">
				<div class="panel panel-default">
					<div class="panel-heading"><span class="panel-title"><span class="icon-desktop"></span> Desktop &gt;1200px</span></div>
					<div class="panel-body">Hidden on large devices<h5><code>.hidden-lg</code></h5></div>
				</div>
			</div>

			<div class="clearfix"></div>

			<h4 class="text-info">Current viewport width: <span id="px"></span>px</h4>
		</div>
	</div>

	<h4>Clearfix</h4>
	<div class="panel panel-clean card">
		<div class="panel-body">
		<h5><code>.clearfix</code></h5>
		<p>Clear floating elements on both side</p>
		<pre class="well">&lt;div class=<span class="text-warning">&quot;clearfix&quot;</span>&gt;&lt;/div&gt;</pre>

		<p>Combine with &times; value to increase bottom margin</p>
		<ul class="list-unstyled">
			<li><code>.x2</code> 0.5em</li>
			<li><code>.x3</code> 1em</li>
		</ul>
		<pre class="well">&lt;div class=<span class="text-warning">&quot;clearfix x3&quot;</span>&gt;&lt;/div&gt;</pre>

		</div>
	</div>
	
	<h4>Pull Left & Right</h4>
	<div class="panel panel-clean card">
		<div class="panel-body">
			<div class="col-xs-6">
				<h5><code>.pull-left</code></h5>
				<button type="button" class="btn btn-info pull-left">Signup</button>
			</div>

			<div class="col-xs-6">
				<h5 class="text-right"><code>.pull-right</code></h5>
				<button type="button" class="btn btn-info pull-right">Signup</button>
			</div>

			<div class="clearfix"></div>

		</div>
	</div>
	
	<h4>Hide, Show & Invisible</h4>
	<div class="panel panel-clean card">
		<div class="panel-body">
			<div class="col-xs-3">
				<h5><code>.hide</code></h5>
				<p>Hide element</p>
			</div>
			<div class="col-xs-3">
				<h5><code>.show</code></h5>
				<p>Show element</p>
			</div>
			<div class="col-xs-3">
				<h5><code>.invisible</code></h5>
				<p>Make element invisible</p>
			</div>
		</div>
	</div>
	
	<h4>Caret</h4>
	<div class="panel panel-clean card">
		<div class="panel-body">
			<h5><code>.caret</code></h5>
			<div class="caret caret-invert"></div>
			<div class="clearfix x2"></div>
			<pre class="well">&lt;div class=<span class="text-warning">&quot;caret&quot;</span>&gt;&lt;/div&gt;</pre>
		</div>
	</div>
	
	<h4>Close Button</h4>
	<div class="panel panel-clean card">
		<div class="panel-body">
			<h5><code>.close</code></h5>
			<button type="button" class="close pull-left">&times;</button>
			<div class="clearfix x2"></div>
			<pre class="well">&lt;button type=<span class="text-warning">&quot;button&quot;</span> class=<span class="text-warning">&quot;close&quot;</span>&gt;&lt;/button&gt;</pre>
		</div>
	</div>
	
	<h4>Screen Reader</h4>
	<div class="panel panel-clean card">
		<div class="panel-body">
		<h5><code>.sr-only</code></h5>
		<p>Hide an element to all devices except screen readers. Necessary for following <a href="http://getbootstrap.com/getting-started#accessibility" target="_blank">accessibility best practices</a>.</p>
		<pre class="well">&lt;a class=<span class="text-warning">&quot;sr-only&quot;</span> href=<span class="text-warning">&quot;#content&quot;</span>&gt;Skip to main content&lt;/a&gt;</pre>
		</div>
	</div>
	
	<!--<blockquote>
		<p>tiny and hide from surface, but done a great job</p>
		<small>Project Pi</small>
	</blockquote>-->

</div>
</div>
<?php include("includes/footer.php");?>
</body>
</html>