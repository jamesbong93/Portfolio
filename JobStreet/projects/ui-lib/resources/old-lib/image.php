<?php include("includes/config.php");?>
<!DOCTYPE html>
<html lang="en">
<head>
<title><?php echo $ProjectName?> - Image</title>
<?php include("includes/meta.php");?>
</head>
<body>
<div id="wrap">
<?php
$para="image";
include("includes/navbar.php");
?>
<div class="container">
	<div class="panel page-header">
		<div class="panel-body">
			<h3>Image</h3>
		</div>
	</div>

	<a name="logo"></a>
	<h4>Logo</h4>
	<div class="panel panel-clean card">
		<div class="panel-body">
			<div class="col-md-4">
				<h5><code>jslogo my</code></h5>
				<span class="jslogo my"></span>
			</div>
			<div class="col-md-4">
				<h5><code>jslogo sg</code></h5>
				<span class="jslogo sg"></span>
			</div>
			<div class="col-md-4">
				<h5><code>jslogo id</code></h5>
				<span class="jslogo id"></span>
			</div>
			
			<div class="clearfix x2"></div>

			<div class="col-md-4">
				<h5><code>jslogo ph</code></h5>
				<span class="jslogo ph"></span>
			</div>
			<div class="col-md-4">
				<h5><code>jslogo vn</code></h5>
				<span class="jslogo vn"></span>
			</div>
			<div class="col-md-4">
				<h5><code>jslogo</code></h5>
				<span class="jslogo"></span>
			</div>

			<div class="clearfix x2"></div>

			<pre class="well">&lt;span class=<span class="text-warning">&quot;jslogo my&quot;</span>&gt;&lt/span&gt;</pre>
		</div>
	</div>

	<h4>Stickers</h4>
	<div class="panel panel-clean card">
		<div class="panel-body">
			<div class="col-md-4 col-sm-4 col-xs-4">
			<figure>
				<img src="http://siva-my.jsstatic.com/_ads/_static/img/ssm-logo.png">
				<figcaption>SSM Verified</figcaption>
			</figure>
			</div>

			<div class="col-md-4 col-sm-4 col-xs-4">
			<figure>
				<img src="http://img.jsstatic.com/project-pi/img/mom-logo.gif">
				<figcaption>MOM</figcaption>
			</figure>
			</div>
			
			<div class="col-md-4 col-sm-4 col-xs-4">
			<figure>
				<img src="http://img.jsstatic.com/project-pi/img/poea-logo.gif">
				<figcaption>POEA</figcaption>
			</figure>
			</div>
		</div>
	</div>

	<h4>Responsive Image</h4>
	<div class="panel panel-clean card">
		<div class="panel-body">
		<h5><code>.img-responsive</code></h5>
		<div class="row">
			<div class="col-xs-6 img-holder">
				<figure><img src="images/dummy-image.jpg" class="img-responsive"></figure>
			</div>
			<div class="col-xs-6 img-holder">
				<figure><img src="images/landing2.jpg" class="img-responsive"></figure>
			</div>
		</div>
		<pre class="well">&lt;img src=<span class="text-warning">&quot;images/dummy-image.jpg&quot;</span> class=<span class="text-warning">&quot;img-responsive&quot;</span>&gt;</pre>
		</div>
	</div>

	<h4>Circle Image</h4>
	<div class="panel panel-clean card">
		<div class="panel-body">
		<h5><code>.img-circle</code></h5>
		<div class="row">
			<div class="col-sm-4 img-holder">
				<figure><img src="data:image/jpg;base64" data-src="holder.js/100x100/auto/#fc9098:#fff" class="img-circle"></figure>
			</div>
			<div class="col-sm-4 img-holder">
				<figure><img src="data:image/jpg;base64" data-src="holder.js/100x100/auto/#91cf90:#fff" class="img-circle"></figure>
			</div>
			<div class="col-sm-4 img-holder">
				<figure><img src="data:image/jpg;base64" data-src="holder.js/100x100/auto/#900:#fff" class="img-circle"></figure>
			</div>
		</div>
		<pre class="well">&lt;img src=<span class="text-warning">&quot;data:image/jpg;base64&quot;</span> data-src=<span class="text-warning">&quot;holder.js/100x100/#000:#fff&quot;</span> class=<span class="text-warning">&quot;img-circle&quot;</span>&gt;</pre>
		</div>
	</div>
	
	<h4>Thumbnail</h4>	
	<div class="panel panel-clean card">
		<div class="panel-body">
		<h5><code>a.thumbnail</code></h5>
		<div class="row">
			<div class="col-sm-6">
				<a href="javascript:;" class="thumbnail"><figure><img src="data:image/jpg;base64" data-src="holder.js/100%x150/auto/#decf98:#fff"></figure></a>
			</div>
			<div class="col-sm-6">
				<a href="javascript:;" class="thumbnail"><figure><img src="data:image/jpg;base64" data-src="holder.js/100%x150/auto/#8ef900:#fff"></figure></a>
			</div>
		</div>
		
		<div class="clearfix x2"></div>

		<pre class="well">&lt;a href=<span class="text-warning">&quot;...&quot;</span> class=<span class="text-warning">&quot;thumbnail&quot;</span>&gt;&lt;img src=<span class="text-warning">&quot;...&quot;</span>&gt;&lt;/a&gt;</pre>
		
		<h5><code>.thumbnail</code></h5>
		<div class="row">
			<div class="col-sm-6">
				<div class="thumbnail">
					<figure><img src="data:image/jpg;base64" data-src="holder.js/100%x150/auto/#f39:#fff"></figure>
					<div class="caption">
						<h3>Caption in Thumbnail</h3>
						<code>.caption</code>
					</div>
				</div>
				
				<pre class="well">&lt;div class=<span class="text-warning">&quot;thumbnail&quot;</span>&gt;
  &lt;div class=<span class="text-warning">&quot;caption&quot;</span>&gt;Some Caption&lt;/div&gt;
&lt;/div&gt;</pre>

			</div>
			<div class="col-sm-6">
				<div class="thumbnail">
					<figure>
						<img src="data:image/jpg;base64" data-src="holder.js/100%x150/auto/#29d:#fff">
						<figcaption>
						<h3>HTML 5 elements</h3>
						<code>&lt;figcaption&gt;</code>
						</figcaption>
					</figure>
				</div>
				
				<pre class="well">&lt;div class=<span class="text-warning">&quot;thumbnail&quot;</span>&gt;
  &lt;figure&gt;
    &lt;figcaption&gt;Some Caption&lt;/figcaption&gt;
  &lt;/figure&gt;
&lt;/div&gt;</pre>

			</div>
		</div>		

		</div>
	</div>
	
	<h4>Generic Placeholder Image</h4>	
	<div class="panel panel-clean card">
		<div class="panel-body">
			<figure><img src="data:image/jpg;base64" data-src="holder.js/100%x100/#ddd:#999/text:Placeholder"></figure>
			<div class="clearfix x2"></div>
			<pre class="well">&lt;img src=<span class="text-warning">&quot;data:image/jpg;base64&quot;</span> data-src=<span class="text-warning">&quot;holder.js/100%x100/#ddd:#999/text:Placeholder&quot;</span>&gt;</pre>

			<p><a href="download/holder.zip" class="btn btn-info">Download holder.js</a></p>
		</div>
	</div>

</div>
</div>
<?php include("includes/footer.php");?>
<script src="js/holder.js"></script>
</body>
</html>