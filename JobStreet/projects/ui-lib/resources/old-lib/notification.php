<?php include("includes/config.php");?>
<!DOCTYPE html>
<html lang="en">
<head>
<title><?php echo $ProjectName?> - Notification</title>
<?php include("includes/meta.php");?>
</head>
<body>
<div id="wrap">
<?php
$para="ui->notification";
include("includes/navbar.php");
?>
<div class="container">
	<div class="panel page-header">
		<div class="panel-body">
			<h3>Notification</h3>
		</div>
	</div>
	
	<h4>Alerts</h4>
	<div class="panel panel-clean card">
		<div class="panel-body">
		
			<h5><code>.alert-success</code></h5>
			<div class="alert alert-success">
				<h1>Title (h1)</h1>
				<p>Contrary to popular belief, Lorem Ipsum is not simply random text. Contrary to popular belief, Lorem Ipsum is not simply random text.</p>
				<p><a href="javascript:;" class="alert-link">Click here</a></p>
			</div>
			
			<h5><code>.alert-danger</code></h5>
			<div class="alert alert-danger">
				<h2>Title (h2)</h2>
				<p>Contrary to popular belief, Lorem Ipsum is not simply random text. Contrary to popular belief, Lorem Ipsum is not simply random text.</p>
				<p><a href="javascript:;" class="alert-link">Click here</a></p>
			</div>
			
			<h5><code>.alert-info</code></h5>
			<div class="alert alert-info">
				<h3>Title (h3)</h3>
				<p>Contrary to popular belief, Lorem Ipsum is not simply random text. Contrary to popular belief, Lorem Ipsum is not simply random text.</p>
				<p><a href="javascript:;" class="alert-link">Click here</a></p>
			</div>
			
			<h5><code>.alert-warning</code></h5>
			<div class="alert alert-warning">
				<h4>Title (h4)</h4>
				<p>Contrary to popular belief, Lorem Ipsum is not simply random text. Contrary to popular belief, Lorem Ipsum is not simply random text.</p>
				<p><a href="javascript:;" class="alert-link">Click here</a></p>
			</div>

			<pre class="well">&lt;div class=<span class="text-warning">&quot;alert alert-warning&quot;</span>&gt;
  &lt;h4&gt;Title (h4)&lt;/h4&gt;&lt;hr&gt;
  &lt;p&gt;Content&lt;/p&gt;
  &lt;a href=<span class="text-warning">&quot;...&quot;</span> class=<span class="text-warning">&quot;alert-link&quot;</span>&gt;Link&lt;/a&gt;
&lt;/div&gt;</pre>

			<h4>Dismissible</h4>
			<div class="alert alert-success alert-dismissable" role="alert">
				<button type="button" class="close" data-dismiss="alert">&times;</button>
				<b>Success!</b> Contrary to popular belief, Lorem Ipsum is not simply random text.
			</div>
			
			<pre class="well">&lt;div class=<span class="text-warning">&quot;alert alert-success alert-dismissable&quot;</span> role=<span class="text-warning">&quot;alert&quot;</span>&gt;
  &lt;button type=<span class="text-warning">&quot;button&quot;</span> class=<span class="text-warning">&quot;close&quot;</span> data-dismiss=<span class="text-warning">&quot;alert&quot;</span>&gt;&lt;/button&gt;
  &lt;b&gt;Success!&lt;/b&gt; Contrary to popular belief, Lorem Ipsum is not simply random text.
&lt;/div&gt;</pre>

		</div>
	</div>

	<h4>Label</h4>
	<div class="panel panel-clean card">
		<div class="panel-body">

		<div class="col-sm-2">
		<h5><code>.label-primary</code></h5>
		<span href="javascript:;" class="label label-primary">Primary</span>
		</div>

		<div class="col-sm-2">
		<h5><code>.label-success</code></h5>
		<span href="javascript:;" class="label label-success">Success</span>
		</div>

		<div class="col-sm-2">
		<h5><code>.label-warning</code></h5>
		<span href="javascript:;" class="label label-warning">Warning</span>
		</div>

		<div class="col-sm-2">
		<h5><code>.label-info</code></h5>
		<span href="javascript:;" class="label label-info">Info</span>
		</div>

		<div class="col-sm-2">
		<h5><code>.label-danger</code></h5>
		<span href="javascript:;" class="label label-danger">Danger</span>
		</div>

		<div class="clearfix x2"></div>
		<pre class="well">&lt;span class=<span class="text-warning">&quot;label label-success&quot;</span>&gt;...&lt;/span&gt;</pre>

		</div>
	</div>

	<a name="badges"></a>
	<h4>Badges</h4>
	<div class="panel panel-clean card">
		<div class="panel-body">

		<div class="col-sm-2">
		<h5><code>.badge</code></h5>
		<a href="javascript:;" class="badge">10</a>
		</div>
		
		<div class="clearfix x2"></div>
		<pre class="well">&lt;a href=<span class="text-warning">&quot;...&quot;</span> class=<span class="text-warning">&quot;badge badge-warning&quot;</span>&gt;...&lt;/a&gt;</pre>

		</div>
	</div>

	<h4>Progress Bar</h4>
	<div class="panel panel-clean card">
		<div class="panel-body">
			<blockquote class="important">
				<h4>Cross-browser compatibility</h4>
				Progress bars use CSS3 transitions and animations to achieve some of their effects. These features are not supported in Internet Explorer 9 and below or older versions of Firefox. Opera 12 does not support animations.
			</blockquote>

			<h4>Basic example</h4>
			<div class="progress">
				<div class="progress-bar" role="progress-bar" style="width:60%;">60%</div>
			</div>
			<pre class="well">&lt;div class=<span class="text-warning">&quot;progress&quot;</span>&gt;
  &lt;div class=<span class="text-warning">&quot;progress-bar&quot;</span> role=<span class="text-warning">&quot;progress-bar&quot;</span> style=<span class="text-warning">&quot;width:60%;&quot;</span>&gt;60%&lt;/div&gt;
&lt;/div&gt;</pre>
			
			<h4>Animated striped</h4>
			<p>Add <code>.active</code> to <code>.progress-striped</code> to animate the stripes right to left. Not available in IE9 and below.</p>
			<div class="progress progress-striped active">
				<div class="progress-bar" role="progress-bar" style="width:40%;">40%</div>
			</div>
			<pre class="well">&lt;div class=<span class="text-warning">&quot;progress progress-striped active&quot;</span>&gt;
  &lt;div class=<span class="text-warning">&quot;progress-bar&quot;</span> role=<span class="text-warning">&quot;progress-bar&quot;</span> style=<span class="text-warning">&quot;width:40%;&quot;</span>&gt;40%&lt;/div&gt;
&lt;/div&gt;</pre>
			
			<h4>Stacked</h4>
			<div class="progress">
				<div class="progress-bar progress-bar-info" style="width:30%;">
					<span class="sr-only">30% (Distinction)</span>
				</div>
				<div class="progress-bar progress-bar-warning" style="width:15%;">
					<span class="sr-only">15% (Passed)</span>
				</div>
				<div class="progress-bar progress-bar-success" style="width:10%;">
					<span class="sr-only">10% (Failed)</span>
				</div>
			</div>
			<pre class="well">&lt;div class=<span class="text-warning">&quot;progress&quot;</span>&gt;
  &lt;div class=<span class="text-warning">&quot;progress-bar progress-bar-success&quot;</span> style=<span class="text-warning">&quot;width:30%;&quot;</span>&gt;
    &lt;span class=<span class="text-warning">&quot;sr-only&quot;</span>&gt;30% (Distinction)&lt;/span&gt;
  &lt;/div&gt;
  &lt;div class=<span class="text-warning">&quot;progress-bar progress-bar-warning&quot;</span> style=<span class="text-warning">&quot;width:15%;&quot;</span>&gt;
    &lt;span class=<span class="text-warning">&quot;sr-only&quot;</span>&gt;15% (Passed)&lt;/span&gt;
  &lt;/div&gt;
  &lt;div class=<span class="text-warning">&quot;progress-bar progress-bar-danger&quot;</span> style=<span class="text-warning">&quot;width:10%;&quot;</span>&gt;
    &lt;span class=<span class="text-warning">&quot;sr-only&quot;</span>&gt;10% (Failed)&lt;/span&gt;
  &lt;/div&gt;
&lt;/div&gt;</pre>
		</div>
	</div>

	<a name="modal"></a>
	<h4>Modal</h4>
	<div class="panel panel-clean card">
		<div class="panel-body">

			<p><a href="javascript:;" data-toggle="modal" data-target="#myModal" class="btn btn-info">See demo</a></p>

			<!--Modal-->
			<div class="modal fade" tabindex="-1" id="myModal" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
				<div class="modal-dialog sample-dialog">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-hidden="true" title="Close"></button>
							<h2 class="modal-title">Modal Title</h2>
						</div>
						<div class="modal-body">
							<p>Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text.</p>
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-primary" data-dismiss="modal" aria-hidden="true">Done</button>
						</div>
					</div>
				</div>
			</div>

			<hr>
			
			<h4>Create the modal</h4>
			<pre class="well">&lt;div class=<span class="text-warning">&quot;modal fade&quot;</span> id=<span class="text-warning">&quot;modal&quot;</span> role=<span class="text-warning">&quot;dialog&quot;</span> aria-labelledby=<span class="text-warning">&quot;myModalLabel&quot;</span> aria-hidden=<span class="text-warning">&quot;true&quot;</span>&gt;
  &lt;div class=<span class="text-warning">&quot;modal-dialog&quot;</span>&gt;
    &lt;div class=<span class="text-warning">&quot;modal-content&quot;</span>&gt;
      &lt;div class=<span class="text-warning">&quot;modal-header&quot;</span>&gt;
        &lt;button type=<span class="text-warning">&quot;button&quot;</span> class=<span class="text-warning">&quot;close&quot;</span> data-dismiss=<span class="text-warning">&quot;modal&quot;</span> aria-hidden=<span class="text-warning">&quot;true&quot;</span> title=<span class="text-warning">&quot;Close&quot;</span>&gt;&lt;/button&gt;
        &lt;h2 class=<span class="text-warning">&quot;modal-title&quot;</span>&gt;Modal Title&lt;/h2&gt;
      &lt;/div&gt;
      &lt;div class=<span class="text-warning">&quot;modal-body&quot;</span>&gt;content inside the model&lt;/div&gt;
      &lt;div class=<span class="text-warning">&quot;modal-footer&quot;</span>&gt;
        &lt;button type=<span class="text-warning">&quot;button&quot;</span> class=<span class="text-warning">&quot;btn btn-primary&quot;</span> data-dismiss=<span class="text-warning">&quot;modal&quot;</span> aria-hidden=<span class="text-warning">&quot;true&quot;</span>&gt;Done&lt;/button&gt;
      &lt;/div&gt;
    &lt;/div&gt;
  &lt;/div&gt;
&lt;/div&gt;</pre>

		<h4>Create the trigger button</h4>
		<pre class="well">&lt;button type=<span class="text-warning">&quot;button&quot;</span> class=<span class="text-warning">&quot;btn btn-info&quot;</span> data-toggle=<span class="text-warning">&quot;modal&quot;</span> data-target=<span class="text-warning">&quot;#modal&quot;</span>&gt;Open Modal&lt;/button&gt;</pre>

		</div>
	</div>

	<h4>Tooltip</h4>
	<div class="panel panel-clean card">
		<div class="panel-body">

		<p class="text-danger text-center">Mouse over green button and hyperlink</p>

		<p><button type="button" class="btn btn-success" id="btn-tooltip" title="" data-placement="right" data-toggle="tooltip" data-original-title="Hey! This is tooltips" data-delay="5">Submit</button></p>
		
		<p>Many desktop publishing packages and web page editors now use <a href="javascript:;" id="link-tooltip" title="Lorem Ipsum is a dummy text" data-placement="top" data-delay="300">Lorem Ipsum</a> as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>

		<pre class="well">&lt;a href=<span class="text-warning">&quot;...&quot;</span> id=<span class="text-warning">&quot;link-tooltip&quot;</span>&gt;Show me the tooltip&lt;/a&gt;

$(<span class="text-info">function</span>(){
  $(<span class="text-success">&quot;#link-tooltip&quot;</span>).tooltip();
})</pre>
		
		</div>
	</div>

	<h4>Popover</h4>
	<div class="panel panel-clean card">
		<div class="panel-body">
		
		<p class="text-danger text-center">Mouse over green button and hyperlink</p>
		
		<p><button type="button" class="btn btn-success" id="btn-popover" title="" data-trigger="hover" data-placement="right" data-original-title="Popover Title" data-content="Hey! This is popover" data-delay="5">Submit</button></p>

		<p>Many desktop publishing packages and web page editors now use <a href="javascript:;" id="link-popover" data-original-title="Popover Title" data-content="Lorem Ipsum is a dummy text" data-trigger="hover" data-placement="top" data-delay="100">Lorem Ipsum</a> as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>
		
		<pre class="well">&lt;a href=<span class="text-warning">&quot;...&quot;</span> id=<span class="text-warning">&quot;link-popover&quot;</span>&gt;Show me the popover&lt;/a&gt;

$(<span class="text-info">function</span>(){
  $(<span class="text-success">&quot;#link-popover&quot;</span>).popover();
})</pre>
		
		</div>
	</div>

</div>
</div>
<?php include("includes/footer.php");?>
<script>
$(function(){
	$("#btn-tooltip,#link-tooltip").tooltip();
	$("#btn-popover,#link-popover").popover();
});
</script>
</body>
</html>