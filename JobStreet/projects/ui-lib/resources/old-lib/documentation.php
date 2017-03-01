<?php include("includes/config.php");?>
<!DOCTYPE html>
<html lang="en">
<head>
<title><?php echo $ProjectName?> - Documentation</title>
<?php include("includes/meta.php");?>
</head>
<body>
<div id="wrap">
<?php
$para="resources->documentation";
include("includes/navbar.php");
?>
<div class="container">
	<div class="panel page-header">
		<div class="panel-body">
			<h3>Documentation</h3>
		</div>
	</div>

	<h4>Project pie?!</h4>
	<div class="panel panel-clean card">
		<div class="panel-body">
			<div class="col-md-10 col-sm-10">
				<div class="visible-xs pi-logo"></div>
				<p><strong class="text-info">Project Product Identity</strong>, we call it <strong class="text-info">Project Pi</strong> is a revolution of JobStreet Product Design Guideline, introduced in June 2013.</p>
				<p>Project Pi started in November 2013, based on latest version of twitter bootstrap framework. The objective of this project is to create mobile first front-end that identify JobStreet's products easier and faster; meanwhile, drive cost efficiencies as well as the effectiveness of communications is our goal.</p>
			</div>
			<div class="col-md-2 col-sm-2 hidden-xs">
				<figure class="pull-right"><img src="ico/touch-icon-iphone-retina.png" class="thumbnail img-responsive" title="Project Pi"></figure>
			</div>
		</div>
	</div>	
	
	<!--<h4>Add-on Components</h4>
	<div class="panel panel-clean card">
		<div class="panel-body">
		<p>Several add-on components has make Project Pi more complete.</p>
		<ol>
			<li><a href="icons.php">Icons pack</a></li>
			<li><a href="organize.php#panel">Clean Panel</a></li>
			<li><a href="notification.php#badges">Badges: success, warning and info</a></li>
			<li><a href="image.php#logo">JobStreet Logo for multiple countries</a></li>
		</ol>
		</div>
	</div>
	
	<h4>Consistency of Classes</h4>
	<div class="panel panel-clean card">
		<div class="panel-body">
		<p>Classes are being renamed to avoid confuse. Below is the list of corrections:</p>
		<table class="table">
		<thead>
		<tr><th>Bootstrap</th><th>Project Pi</th></tr>
		</thead>
		<tbody>
		<tr><td><code>.heading</code></td><td><code>.header</code></td></tr>
		<tr><td><code>.alert</code></td><td><code>.danger</code></td></tr>
		<tr><td><code>.justified</code></td><td><code>.justify</code></td></tr>
		</tbody>
		</table>
		</div>
	</div>-->
	
	<h4>Change Log</h4>
	<div class="panel panel-clean card">
		<div class="panel-body">
			<table class="table">
			<tr>
				<th>Version</th>
				<th>Changes Details</th>
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
						<li><code>.btn-info</code>, <code>.btn-warning</code> and <code>.btn-danger</code></li>
						<li><code>.label-default</code></li>
						<li><code>.panel-primary</code></li>
						<li><code>.img-rounded</code></li>
						<li>progress bar</li>
						<li>inverted navbar</li></ul>
					</li></ul>
				</td>
			</tr>
			<tr>
				<td>1.0.2</td>
				<td><ul><li>Include carousel into UI library</li>
				<li>Rename <code>.heading</code> to <code>.header</code>, <code>.justified</code> to <code>.justify</code></li>
				<li>Introduce <code>.p</code> to create 40px height blank paragraph</li>
				<li>Adjustable margin at the bottom for <code>.clearfix</code> by adding <code>.x2</code> and <code>.x3</code></li>
				<li>Modify generic close icon by using <code>.close</code> without additional icon</li></ul></td>
			</tr>
			<tr>
				<td>1.0.3</td>
				<td><ul><li>Host UI library at ui.jobstreet.com</li>
				<li>Re-introduce <code>.btn-info</code></li>
				<li>Introduce <code>.badge-success</code>, <code>.badge-warning</code> and <code>.badge-info</code></li></ul></td>
			</tr>
			<tr>
				<td>1.0.4</td>
				<td><ul><li>Redesign UI library</li>
				<li>Provide code examples and templates</li>
				<li>Redefine color scheme for <code>.alert-danger</code>, <code>.alert-warning</code>, <code>info</code> and <code>success</code></li>
				<li>Implement pi.css and Font JobStreet CDN</li>
				<li>Font Awesome CDN</li></ul></td>
			</tr>
			<tr>
				<td>1.0.5</td>
				<td><ul><li>Reduce left and right padding to 5px for grids</li>
				<li>Increase left and right margin from -15px to -10px in <code>.row</code></li>
				<li>Increase left and right margin from -15px to -10px in <code>.navbar-header</code></li>
				<li>Increase padding for <code>.panel-clean</code> to 20px</li>
				<li>Tab Menu</li>
				<li>Check box and radio box in button style</li>
				<li>Combined all module into pi.css and minified</li>
				<li>Increase padding to 20px in <code>.alert</code></li>
				<li>Fixed issue of backdrop overlay not transparent when open modal</li>
				<li>Redefine width of container in three viewport:
					<ul><li>Min viewport width 1000px, container max width 1080px</li>
					<li>Min viewport width 769px, container max width 992px</li>
					<li>Min viewport width 480px, container max width 750px</li></ul>
				</li>
				<li>Separate Font Awesome and Font JobStreet from pi.css</li>
				<li>Minimum modification to <code>.dl-horizontal</code>:
					<ul><li>Reduce width of <pre class="htag">&lt;dt&gt;</pre> to 120px</li>
					<li>Align text to left</li></ul>
				</li>
				<li>Introduce JS fix to overcome issue of content move to right when open modal due to hidden browser scrollbar</li></ul></td>
			</tr>
			<tr>
				<td>1.0.6</td>
				<td><ul><li>Restore progress bar</li>
				<li>Restore inverse navbar</li>
				<li>Add shadow on dropdown menu</li>
				<li>Dropdown menu mouse over effect</li>
				<li>Added site tour plugin</li>
				<li>Added slider plugin</li>
				<li>Redefine color for <code>.btn</code> and set 3px round border</li>
				<li>Redefine color for contextual color: danger, warning, success & info</li>
				<li>Offcanvas menu ready</li>
				<li>Update JS fix to version 1.2</li>
				<Li>Remove @media print definition</li>
				<li>Remove <code>.p</code></li>
				<li>Remove <code>.text-primary</code></li>
				<li>Drop Font Jobstreet and repack icons from different sources</li>
				<li>Simplify <a href="form-control.php#validation-states">Validation States</a></li>
				<li>Refinement on <a href="navigation.php#pagination">pagination</a></li>
				<li>Refinement on <code>.table</code></li>
				<li>Make <code>.close</code> darker for more visible</li>
				<li>Make <pre class="htag">&lt;body&gt;</pre> background color draker gray</li>
				<li>Sharpen text display for <code>.badge</code></li>
				<li>Added <code>.container-fluid</code> to create full width container</li>
				<li>Added <code>.jslogo</code></li></ul></td>
			</tr>
			<tr>
				<td>1.0.7</td>
				<td><ul><li>Compiled based on Bootstrap LESS version 3.3</li>
				<li>Remove Offcanvas menu</li>
				<li>Remove JS fix</li></ul></td>
			</tr>
			</table>
		</div>
	</div>
	
	<!--<a name="js-fix-log"></a>
	<h4>Bootstrap JS Fix Log</h4>
	<div class="panel panel-clean card">
		<div class="panel-body">
			<table class="table fix-log">
			<tr>
				<th>1 April 2014</th>
				<td>Prevent background content move to right when <a href="notification.php#modal">open modal</a> due to hidden browser scrollbar.</td>
			</tr>
			<tr>
				<th>3 April 2014</th>
				<td>Added offcanvas push menu, replacing bootstrap collapse menu</td>
			</tr>
			</table>
			<a role="button" class="btn btn-info" href="getting-started.php#js-fix">Apply</a>
		</div>
	</div>-->

</div>
</div>
<?php include("includes/footer.php");?>
</body>
</html>