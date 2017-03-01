<?php include("includes/config.php");?>
<!DOCTYPE html>
<html lang="en">
<head>
<title><?php echo $ProjectName?> - Get Started</title>
<?php include("includes/meta.php");?>
</head>
<body data-spy="scroll" data-offset="0" data-target="#sidebar-wrapper">
<div id="wrapper">
	<?php
	$pg="started";
	include ("sidebar.php");
	?>
	<div id="page-content-wrapper">
		<div class="container-fluid">
			<div class="row">

				<nav class="header-menu">
					<div class="clearfix">
						<h2 class="pull-left">Get Started</h2>
						<a href="javascript:;" role="button" class="btn btn-link pull-right visible-xs" id="menu-toggle"><span class="icon-menu"></span></a>
					</div>
				</nav>
				
				<!--// CDN //-->
				<a name="about" id="about">&nbsp;</a>
				<h3 class="sub-title">About</h3>
				<div class="panel">
					<div class="panel-body">
						<p>Project Product Identity, or Project Pi, a revolution of JobStreet Product Design Guideline, introduced in June 2013.</p>
						<p>The project started in November 2013, based on twitter bootstrap framework. The objective of this project is to create mobile first front-end that identify JobStreet's products easier and faster; meanwhile, drive cost efficiencies as well as the effectiveness of communications is our goal.</p>
					</div>
				</div>

				<!--// CDN //-->
				<a name="cdn" id="cdn">&nbsp;</a>
				<h3 class="sub-title">CDN</h3>
				<div class="panel">
					<div class="panel-body">
						<dl class="dl-horizontal">
							<dt>Version</dt>
							<dd><?php echo $ProjectVersion;?></dd>
							<dt>Date Released</dt>
							<dd><?php echo $ProjectLastUpdate;?></dd>
						</dl>
						<pre class="well"><span class="text-success">&lt;!-- UI Library --&gt;</span>
&lt;link rel=<span class="text-warning">&quot;stylesheet&quot;</span> href=<span class="text-warning">&quot;<?php echo $ProjectCDN;?>&quot;</span>&gt;
<span class="text-success">&lt;!-- Bootstrap js --&gt;</span>
&lt;script src=<span class="text-warning">&quot;<?php echo $ProjectCDNHost;?>/js/bootstrap.js&quot;</span>&gt;&lt;/script&gt;</pre>
						
						<blockquote class="alert-info" role="alert">
							All JavaScript plugins require jQuery to be included, as shown in the <a href="#template">starter template</a>.
						</blockquote>

					</div>
				</div>

				<!--// Template //-->
				<a name="template" id="template">&nbsp;</a>
				<h3 class="sub-title">Basic Template</h3>
				<div class="panel">
					<div class="panel-body">
						Copy the HTML below to begin working with a minimal Pi document.
						<pre class="well">&lt;!DOCTYPE html&gt;
&lt;html lang=<span class="text-warning">&quot;en&quot;</span>&gt;
&lt;head&gt;
&lt;title&gt;Basic Template&lt;/title&gt;
&lt;meta name=<span class="text-warning">&quot;viewport&quot;</span> content=<span class="text-warning">&quot;width=device-width,initial-scale=1.0&quot;</span>&gt;
&lt;link href=<span class="text-warning">&quot;<?php echo $ProjectCDN;?>&quot;</span> rel=<span class="text-warning">&quot;stylesheet&quot;</span>&gt;
&lt;/head&gt;
&lt;body&gt;
&lt;div class=&quot;container&quot;&gt;
  &lt;h1&gt;Basic Template&lt;/h1&gt;
&lt;/div&gt;

&lt;script src=<span class="text-warning">&quot;<?php echo $ProjectCDNHost;?>/js/jquery.js&quot;</span>&gt;&lt;/script&gt;
&lt;script src=<span class="text-warning">&quot;<?php echo $ProjectCDNHost;?>/js/bootstrap.js&quot;</span>&gt;&lt;/script&gt;
&lt;/body&gt;
&lt;/html&gt;</pre>
					</div>
				</div>
				
				<!--// Examples //-->
				<a name="examples" id="examples">&nbsp;</a>
				<h3 class="sub-title">Examples</h3>
				<div class="panel">
					<div class="panel-body">
						<p>Build on the working examples with UI library components. See also <a href="#customize">Customization</a> for tips on maintaining your own variants.</p>
						<div class="row clearfix">
							<div class="col-md-3">
								<figure class="thumbnail">
									<a href="examples/starter-template/index.html" target="_blank"><img src="images/examples/starter-template.png" class="img-responsive"></a>
									<figcaption>Starter template</figcaption>
								</figure>
							</div>
							<div class="col-md-3 hide">
								<figure class="thumbnail">
									<a href="examples/jumbotron/index.html" target="_blank"><img src="images/examples/jumbotron.png" class="img-responsive"></a>
									<figcaption>Jumbotron</figcaption>
								</figure>
							</div>			
							<div class="col-md-3 hide">
								<figure class="thumbnail">
									<a href="examples/sign-in/index.html" target="_blank"><img src="images/examples/sign-in.png" class="img-responsive"></a>
									<figcaption>Sign in</figcaption>
								</figure>
							</div>
							<div class="col-md-3 hide">
								<figure class="thumbnail">
									<a href="examples/dashboard/index.html" target="_blank"><img src="images/examples/dashboard.png" class="img-responsive"></a>
									<figcaption>Dashboard</figcaption>
								</figure>
							</div>
							<div class="col-md-3">
								<figure class="thumbnail">
									<a href="examples/navbar/index.html" target="_blank"><img src="images/examples/navbar.png" class="img-responsive"></a>
									<figcaption>Navbar</figcaption>
								</figure>
							</div>
							<div class="col-md-3">
								<figure class="thumbnail">
									<a href="examples/navbar-static-top/index.html" target="_blank"><img src="images/examples/static-navbar.png" class="img-responsive"></a>
									<figcaption>Static top navbar</figcaption>
								</figure>
							</div>
							<div class="col-md-3">
								<figure class="thumbnail">
									<a href="examples/navbar-fixed-top/index.html" target="_blank"><img src="images/examples/fixed-navbar.png" class="img-responsive"></a>
									<figcaption>Fixed navbar</figcaption>
								</figure>
							</div>
							<div class="col-md-3">
								<figure class="thumbnail">
									<a href="examples/sticky-footer/index.html" target="_blank"><img src="images/examples/sticky-footer.png" class="img-responsive"></a>
									<figcaption>Sticky footer</figcaption>
								</figure>
							</div>
							<div class="col-md-3">
								<figure class="thumbnail">
									<a href="examples/sticky-footer-navbar/index.html" target="_blank"><img src="images/examples/sticky-footer-navbar.png" class="img-responsive"></a>
									<figcaption>Sticky footer with navbar</figcaption>
								</figure>
							</div>
							<div class="col-md-3">
								<figure class="thumbnail">
									<a href="examples/carousel/index.html" target="_blank"><img src="images/examples/carousel.png" class="img-responsive"></a>
									<figcaption>Carousel</figcaption>
								</figure>
							</div>
						</div>
					</div>
				</div>

				<!--// Customization //-->
				<a name="customize" id="customize">&nbsp;</a>
				<h3 class="sub-title">Customization</h3>
				<div class="panel">
					<div class="panel-body">
						<p>You can customize components to varying degrees. The stock buttons require just one class, <code>btn</code>, to start. Here we extend the <code>btn</code> style with a new modifier class, <code>btn-special</code>, that we will create. This gives us a distinct custom look with minimal effort.</p>
						<p>A customized button will be coded like this:</p>
						<pre class="well">&lt;button type=<span class="text-warning">&quot;button&quot;</span> class=<span class="text-warning">&quot;btn btn-special&quot;</span>&gt;Special Request&lt;/button&gt;</pre>
						<p>Note how <code>btn-special</code> is added to the standard <code>btn</code> class. To implement this, in the custom stylesheet, add the following CSS:</p>
						<pre class="well"><span class="text-success">/* Special Button */</span>
<span class="text-info">.btn-special</span>{
   <span class="text-muted">font-weight:</span> bold;
   <span class="text-muted">background-color:</span> #007da7;
   <span class="text-muted">color:</span> #fff;
}
</pre>
					</div>
				</div>
				
				<!--// Change Log //-->
				<!--<a name="change-log" id="change-log">&nbsp;</a>
				<h3 class="sub-title">Change Log</h3>
				<div class="panel">
					<div class="panel-body">
						<table class="table">
						<thead>
						<tr>
							<th>Version</th>
							<th>Changes Details</th>
						</tr>
						</thead>
						<tbody>
						<tr>
							<td>1.0.7</td>
							<td><ul><li>Compiled based on Bootstrap LESS version 3.3</li>
							<li>Remove <code>panel-clean</code></li>
							<li>Remove Offcanvas menu</li>
							<li>Remove JS fix</li>
							<li>Additional style for blockquote to use as alert and notice message</li></ul></td>
						</tr>
						<tr>
							<td>1.0.6</td>
							<td><ul><li>Restore progress bar</li>
							<li>Restore inverse navbar</li>
							<li>Add shadow on dropdown menu</li>
							<li>Dropdown menu mouse over effect</li>
							<li>Added site tour plugin</li>
							<li>Added slider plugin</li>
							<li>Redefine color for <code>btn</code> and set 3px round border</li>
							<li>Redefine color for contextual color: danger, warning, success & info</li>
							<li>Offcanvas menu ready</li>
							<li>Update JS fix to version 1.2</li>
							<Li>Remove @media print definition</li>
							<li>Remove <code>p</code></li>
							<li>Remove <code>text-primary</code></li>
							<li>Drop Font Jobstreet and repack icons from different sources</li>
							<li>Simplify Validation States</li>
							<li>Refinement on <code>pagination</code></li>
							<li>Refinement on <code>table</code></li>
							<li>Make <code>close</code> darker for more visible</li>
							<li>Make <pre class="htag">&lt;body&gt;</pre> background color draker gray</li>
							<li>Sharpen text display for <code>badge</code></li>
							<li>Added <code>container-fluid</code> to create full width container</li>
							<li>Added <code>jslogo</code></li></ul></td>
						</tr>
						<tr>
							<td>1.0.5</td>
							<td><ul><li>Reduce left and right padding to 5px for grids</li>
							<li>Increase left and right margin from -15px to -10px in <code>row</code></li>
							<li>Increase left and right margin from -15px to -10px in <code>navbar-header</code></li>
							<li>Increase padding for <code>panel-clean</code> to 20px</li>
							<li>Tab Menu</li>
							<li>Check box and radio box in button style</li>
							<li>Combined all module into pi.css and minified</li>
							<li>Increase padding to 20px in <code>alert</code></li>
							<li>Fixed issue of backdrop overlay not transparent when open modal</li>
							<li>Redefine width of container in three viewport:
								<ul><li>Min viewport width 1000px, container max width 1080px</li>
								<li>Min viewport width 769px, container max width 992px</li>
								<li>Min viewport width 480px, container max width 750px</li></ul>
							</li>
							<li>Separate Font Awesome and Font JobStreet from pi.css</li>
							<li>Minimum modification to <code>dl-horizontal</code>:
								<ul><li>Reduce width of <pre class="htag">&lt;dt&gt;</pre> to 120px</li>
								<li>Align text to left</li></ul>
							</li>
							<li>Introduce JS fix to overcome issue of content move to right when open modal due to hidden browser scrollbar</li></ul></td>
						</tr>
						<tr>
							<td>1.0.4</td>
							<td><ul><li>Redesign UI library</li>
							<li>Provide code examples and templates</li>
							<li>Redefine color scheme for <code>alert-danger</code>, <code>alert-warning</code>, <code>alert-info</code> and <code>alert-success</code></li>
							<li>Implement pi.css and Font JobStreet CDN</li>
							<li>Font Awesome CDN</li></ul></td>
						</tr>
						<tr>
							<td>1.0.3</td>
							<td><ul><li>Host UI library at ui.jobstreet.com</li>
							<li>Re-introduce <code>btn-info</code></li>
							<li>Introduce <code>badge-success</code>, <code>badge-warning</code> and <code>badge-info</code></li></ul></td>
						</tr>
						<tr>
							<td>1.0.2</td>
							<td><ul><li>Include carousel into UI library</li>
							<li>Rename <code>heading</code> to <code>header</code>, <code>justified</code> to <code>justify</code></li>
							<li>Introduce <code>p</code> to create 40px height blank paragraph</li>
							<li>Adjustable margin at the bottom for <code>clearfix</code> by adding <code>x2</code> and <code>x3</code></li>
							<li>Modify generic close icon by using <code>close</code> without additional icon</li></ul></td>
						</tr>
						<tr>
							<td>1.0.1</td>
							<td>
								<ul><li>Startup with bootstrap framework and modify to flat UI</li>
								<li>Grouping elements into 14 modules for easy manage</li>
								<li>Create online UI library for demonstration on project Pi</li>
								<li>Introduce <code>.panel-clean</code></li>
								<li>Include Font JobStreet & Font Awesome</li>
								<li>The following elements has been removed from the library:
									<ul><li>Glyphicons</li>
									<li><code>btn-info</code>, <code>btn-warning</code> and <code>btn-danger</code></li>
									<li><code>label-default</code></li>
									<li><code>panel-primary</code></li>
									<li><code>img-rounded</code></li>
									<li>progress bar</li>
									<li>inverse navbar</li></ul>
								</li></ul>
							</td>
						</tr>
						</tbody>
						</table>
					</div>
				</div>-->

			</div>
		</div>
	</div>
</div>
<?php include ("includes/script.php");?>
</body>
</html>