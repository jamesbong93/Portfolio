<?php include("includes/config.php");?>
<!DOCTYPE html>
<html lang="en">
<head>
<title><?php echo $ProjectName?> - Get Started</title>
<?php include("includes/meta.php");?>
</head>
<body>
<div id="wrap">
<?php
$para="resources->get-started";
include("includes/navbar.php");
?>
<div class="container">
	<div class="panel page-header">
		<div class="panel-body">
			<h3>Get Started</h3>
		</div>
	</div>
	
	<h4>CDN</h4>
	<div class="panel panel-clean card">
		<div class="panel-body pi-cdn">
			<dl class="dl-horizontal">
				<dt>Version</dt>
				<dd><?php echo $ProjectVersion;?></dd>
				<dt>Last updated</dt>
				<dd>24 November 2014</dd>
			</dl>
			
			<!--<blockquote class="info">
			<h4>CDN migration</h4>
			For those users who using old CDN http://img.jsstatic.com/project-pi/1.0.x/css/pi.css are advised to use new CDN
			</blockquote>-->

			<pre class="well"><span class="text-success">&lt;!-- UI Library --&gt;</span>
&lt;link rel=<span class="text-warning">&quot;stylesheet&quot;</span> href=<span class="text-warning">&quot;<?php echo $ProjectCDN;?>&quot;</span>&gt;
<span class="text-success">&lt;!-- Bootstrap js --&gt;</span>
&lt;script src=<span class="text-warning">&quot;https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js&quot;</span>&gt;&lt;/script&gt;</pre>

			<blockquote class="important">
			<h4>jQuery required</h4>
			Please note that all JavaScript plugins require jQuery to be included, as shown in the starter template.
			</blockquote>
		</div>
	</div>
	
	<!--<a name="js-fix"></a>
	<h4>Bootstrap js Fix</h4>
	<div class="panel panel-clean card">
		<div class="panel-body">
			<dl class="dl-horizontal">
				<dt>Version</dt>
				<dd><?php echo $PiFixVersion;?></dd>
				<dt>Last updated</dt>
				<dd>3 April 2014</dd>
				<dt>Fix Log</dt>
				<dd><a href="documentation.php#js-fix-log">Click here to view</a></dd>
			</dl>
			<pre class="well"><span class="text-success">&lt;!-- Bootstrap js fix --&gt;</span>
&lt;script src=<span class="text-warning">&quot;<?php echo $PiFixCDN;?>&quot;</span>&gt;&lt;/script&gt;</div>
	</div>-->

	<h4>Basic Template</h4>
	<div class="panel panel-clean card">
		<div class="panel-body">
		<p>Copy the HTML below to begin working with a minimal Pi document.</p>
		<pre class="well">&lt;!DOCTYPE html&gt;
&lt;html lang=<span class="text-warning">&quot;en&quot;</span>&gt;
&lt;head&gt;
&lt;title&gt;Project Pi Template&lt;/title&gt;
&lt;meta name=<span class="text-warning">&quot;viewport&quot;</span> content=<span class="text-warning">&quot;width=device-width,initial-scale=1.0&quot;</span>&gt;
<span class="text-success">&lt;!-- Pi Library --&gt;</span>
&lt;link href=<span class="text-warning">&quot;<?php echo $ProjectCDN;?>&quot;</span> rel=<span class="text-warning">&quot;stylesheet&quot;</span>&gt;
&lt;/head&gt;
&lt;body&gt;
&lt;h1&gt;Hellow JobStreet!&lt;/h1&gt;
<span class="text-success">&lt;!-- jQuery (necessary for Bootstrap&#39;s JavaScript plugins) --&gt;</span>
&lt;script src=<span class="text-warning">&quot;https://code.jquery.com/jquery.js&quot;</span>&gt;&lt;/script&gt;
&lt;script src=<span class="text-warning">&quot;https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js&quot;</span>&gt;&lt;/script&gt;
&lt;/body&gt;
&lt;/html&gt;
</pre>
		<p>or, download this html file</p>
		<p><a href="download/template.zip" class="btn btn-info">Download</a></p>
		</div>
	</div>

	<a name="balsamiq"></a>
	<h4>Balsamiq Mockups Template Library</h4>
	<div class="panel panel-clean card">
		<div class="panel-body">
			<div class="col-md-2 col-xs-4">
				<figure>
					<img src="images/balsamiq-logo.png" class="media-object">
				</figure>
			</div>
			<div class="col-md-10 col-xs-8 balsamiq-template-download">
				<dl class="dl-horizontal">
					<dt>Version</dt>
					<dd>1.2</dd>
					<dt>Last updated</dt>
					<dd>17 April 2014</dd>
				</dl>
				<a href="download/balsamiq-template-1-2.zip" class="btn btn-info pull-left">Download</a>
			</div>
		</div>
	</div>

	<a name="examples"></a>
	<h4>Examples</h4>
	<div class="examples">
		<p>Build on the working examples with Project Pi's components. See also <a href="#customizing-project-pi">Customizing Project Pi</a> for tips on maintaining your own variants.</p>
			<div class="col-md-2">
				<a href="examples/starter-template/index.html" class="thumbnail" target="_blank">
				<figure>
					<img src="examples/screenshots/starter-template.png" class="img-responsive">
					<figcaption>Starter template</figcaption>
				</figure>
				</a>
			</div>
			<div class="col-md-2">
				<a href="examples/carousel/index.html" class="thumbnail" target="_blank">
				<figure>
					<img src="examples/screenshots/carousel.png" class="img-responsive">
					<figcaption>Carousel</figcaption>
				</figure>
				</a>
			</div>
			<div class="col-md-2">
				<a href="examples/jumbotron/index.html" class="thumbnail" target="_blank">
				<figure>
					<img src="examples/screenshots/jumbotron.png" class="img-responsive">
					<figcaption>Jumbotron</figcaption>
				</figure>
				</a>
			</div>			
			<div class="col-md-2">
				<a href="examples/sign-in/index.html" class="thumbnail" target="_blank">
				<figure>
					<img src="examples/screenshots/sign-in.png" class="img-responsive">
					<figcaption>Sign in</figcaption>
				</figure>
				</a>
			</div>
			<div class="col-md-2">
				<a href="examples/dashboard/index.html" class="thumbnail" target="_blank">
				<figure>
					<img src="examples/screenshots/dashboard.png" class="img-responsive">
					<figcaption>Dashboard</figcaption>
				</figure>
				</a>
			</div>
			<div class="col-md-2">
				<a href="examples/page404/index.html" class="thumbnail" target="_blank">
				<figure>
					<img src="examples/screenshots/page404.png" class="img-responsive">
					<figcaption>Page 404</figcaption>
				</figure>
				</a>
			</div>
			
			<div class="clearfix x2"></div>

			<div class="col-md-2">
				<a href="examples/navbar/index.html" class="thumbnail" target="_blank">
				<figure>
					<img src="examples/screenshots/navbar.png" class="img-responsive">
					<figcaption>Navbar</figcaption>
				</figure>
				</a>
			</div>
			<div class="col-md-2">
				<a href="examples/navbar-static-top/index.html" class="thumbnail" target="_blank">
				<figure>
					<img src="examples/screenshots/static-navbar.png" class="img-responsive">
					<figcaption>Static top navbar</figcaption>
				</figure>
				</a>
			</div>
			<div class="col-md-2">
				<a href="examples/navbar-fixed-top/index.html" class="thumbnail" target="_blank">
				<figure>
					<img src="examples/screenshots/fixed-navbar.png" class="img-responsive">
					<figcaption>Fixed navbar</figcaption>
				</figure>
				</a>
			</div>
			<div class="col-md-2">
				<a href="examples/sticky-footer/index.html" class="thumbnail" target="_blank">
				<figure>
					<img src="examples/screenshots/sticky-footer.png" class="img-responsive">
					<figcaption>Sticky footer</figcaption>
				</figure>
				</a>
			</div>
			<div class="col-md-2">
				<a href="examples/sticky-footer-navbar/index.html" class="thumbnail" target="_blank">
				<figure>
					<img src="examples/screenshots/sticky-footer-navbar.png" class="img-responsive">
					<figcaption>Sticky footer with navbar</figcaption>
				</figure>
				</a>
			</div>
			<div class="col-md-3 hide">
				<a href="examples/justify-nav/index.html" class="thumbnail" target="_blank">
				<figure>
					<img src="examples/screenshots/justify-nav.png" class="img-responsive">
					<figcaption>Justify nav</figcaption>
				</figure>
				</a>
			</div>
			
			<div class="clearfix x2 hide"></div>
						
			<div class="col-md-3 hide">
				<a href="examples/offcanvas/index.html" class="thumbnail" target="_blank">
				<figure>
					<img src="examples/screenshots/offcanvas.png" class="img-responsive">
					<figcaption>Offcanvas</figcaption>
				</figure>
				</a>
			</div>
			
			<div class="clearfix x2"></div>

		<p><a href="download/examples.zip" class="btn btn-info">Download</a>
	</div>
	
	<a name="customizing-project-pi"></a>
	<h4>Customizing Project Pi</h4>
	<div class="panel panel-clean card">
		<div class="panel-body">
		<p>You can customize components to varying degrees. The stock buttons require just one class, <code>.btn</code>, to start. Here we extend the <code>.btn</code> style with a new modifier class, <code>.btn-special</code>, that we will create. This gives us a distinct custom look with minimal effort.</p>
		<p>A customized button will be coded like this:</p>

		<pre class="well">&lt;button type=<span class="text-warning">&quot;button&quot;</span> class=<span class="text-warning">&quot;btn btn-special&quot;</span>&gt;Special Request&lt;/button&gt;</pre>

		<p>Note how <code>.btn-special</code> is added to the standard <code>.btn</code> class.</p>
		<p>To implement this, in the custom stylesheet, add the following CSS:</p>
		<pre class="well"><span class="text-success">/* Special Button */
/* Override base .btn styles */</span><br>
<span class="text-info">.btn-special</span>{
   <span class="text-muted">font-weight:</span>bold;
   <span class="text-muted">background-color:</span>#007da7;
   <span class="text-muted">color:</span>#fff;
}
</pre>
		</div>
	</div>

	<h4>Get Current Screen Width</h4>
	<div class="panel panel-clean card">
		<div class="panel-body">
		<p>Use this script to show the width of current viewport</p>
		<pre class="well">&lt;script&gt;
$(<span class="text-info">function</span>(){
  getViewPortWidth();
  $(<span class="text-info">window</span>).resize(getViewPortWidth);
  
  function getViewPortWidth(){
    $(<span class="text-success">&quot;#px&quot;</span>).text($(<span class="text-info">window</span>).width());
  }
});
&lt;/script&gt;

&lt;p&gt;Current screen width: &lt;span id=<span class="text-warning">&quot;px&quot;</span>&gt;&lt;/span&gt;&lt;/p&gt;</pre>
		</div>
	</div>
	
	<h4>Disable Responsive</h4>
	<div class="panel panel-clean card">
		<div class="panel-body">
		<h4 class="text-info">Disable the responsiveness of Bootstrap by fixing the width of the container and using the first grid system tier.</h4>
		<p>Note the lack of the <code>&lt;meta name=&quot;viewport&quot; content=&quot;width=device-width,initial-scale=1&quot;&gt;</code>, which disables the zooming aspect of sites in mobile devices. In addition, we reset our container's width and are basically good to go.</p>
		<pre class="well"><span class="text-success">/* Responsive Disabled */</span><br>
<span class="text-info">.container</span>{
  <span class="text-muted">max-width:</span>none !important;
  <span class="text-muted">width:</span>1080px;
}</pre>
		</div>
	</div>

</div>
</div>
<?php include("includes/footer.php");?>
</script>
</body>
</html>