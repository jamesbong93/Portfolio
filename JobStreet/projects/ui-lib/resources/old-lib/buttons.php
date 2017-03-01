<?php include("includes/config.php");?>
<!DOCTYPE html>
<html lang="en">
<head>
<title><?php echo $ProjectName?> - Buttons</title>
<?php include("includes/meta.php");?>
</head>
<body>
<div id="wrap">
<?php
$para="ui->buttons";
include("includes/navbar.php");
?>
<div class="container">
	<div class="panel page-header">
		<div class="panel-body">
			<h3>Buttons</h3>
		</div>
	</div>
	
	<h4>Buttons</h4>
	<div class="panel panel-clean card">
		<div class="panel-body">
		
		<h5><code>.btn</code></h5>		
		<p>
			<a href="javascript:;" class="btn btn-default">Button</a>
			<a href="javascript:;" class="btn btn-primary">Button</a>
			<a href="javascript:;" class="btn btn-success">Button</a>
			<a href="javascript:;" class="btn btn-info">Button</a>
			<a href="javascript:;" class="btn btn-link">Button</a>
		</p>
		
		<pre class="well">&lt;a href=<span class="text-warning">&quot;...&quot;</span> type=<span class="text-warning">&quot;button&quot;</span> class=<span class="text-warning">&quot;btn btn-default&quot;</span>&gt;Button&lt;/a&gt;
&lt;a href=<span class="text-warning">&quot;...&quot;</span> type=<span class="text-warning">&quot;button&quot;</span> class=<span class="text-warning">&quot;btn btn-primary&quot;</span>&gt;Button&lt;/a&gt;
&lt;a href=<span class="text-warning">&quot;...&quot;</span> type=<span class="text-warning">&quot;button&quot;</span> class=<span class="text-warning">&quot;btn btn-success&quot;</span>&gt;Button&lt;/a&gt;
&lt;a href=<span class="text-warning">&quot;...&quot;</span> type=<span class="text-warning">&quot;button&quot;</span> class=<span class="text-warning">&quot;btn btn-info&quot;</span>&gt;Button&lt;/a&gt;
&lt;a href=<span class="text-warning">&quot;...&quot;</span> type=<span class="text-warning">&quot;button&quot;</span> class=<span class="text-warning">&quot;btn btn-link&quot;</span>&gt;Button&lt;/a&gt;</pre>
		
		<h5><code>.btn-lg</code></h5>
		<p>
			<a href="javascript:;" class="btn btn-default btn-lg">Button</a>
			<a href="javascript:;" class="btn btn-primary btn-lg">Button</a>
			<a href="javascript:;" class="btn btn-success btn-lg">Button</a>
			<a href="javascript:;" class="btn btn-info btn-lg">Button</a>
			<a href="javascript:;" class="btn btn-link btn-lg">Button</a>
		</p>
		
		<pre class="well">&lt;a href=<span class="text-warning">&quot;...&quot;</span> type=<span class="text-warning">&quot;button&quot;</span> class=<span class="text-warning">&quot;btn btn-primary btn-lg&quot;</span>&gt;Button&lt;/a&gt;</pre>
		
		<h5><code>.btn-sm</code></h5>		
		<p>
			<a href="javascript:;" class="btn btn-default btn-sm">Button</a>
			<a href="javascript:;" class="btn btn-primary btn-sm">Button</a>
			<a href="javascript:;" class="btn btn-success btn-sm">Button</a>
			<a href="javascript:;" class="btn btn-info btn-sm">Button</a>
			<a href="javascript:;" class="btn btn-link btn-sm">Button</a>
		</p>
		
		<pre class="well">&lt;a href=<span class="text-warning">&quot;...&quot;</span> type=<span class="text-warning">&quot;button&quot;</span> class=<span class="text-warning">&quot;btn btn-primary btn-sm&quot;</span>&gt;Button&lt;/a&gt;</pre>
		
		<h5><code>.btn-xs</code></h5>
		<p>
			<a href="javascript:;" class="btn btn-default btn-xs">Button</a>
			<a href="javascript:;" class="btn btn-primary btn-xs">Button</a>
			<a href="javascript:;" class="btn btn-success btn-xs">Button</a>
			<a href="javascript:;" class="btn btn-info btn-xs">Button</a>
			<a href="javascript:;" class="btn btn-link btn-xs">Button</a>
		</p>
		
		<pre class="well">&lt;a href=<span class="text-warning">&quot;...&quot;</span> type=<span class="text-warning">&quot;button&quot;</span> class=<span class="text-warning">&quot;btn btn-primary btn-xs&quot;</span>&gt;Button&lt;/a&gt;</pre>
		
		<h5><code>.btn-block</code></h5>
		<p><a href="javascript:;" class="btn btn-default btn-block">.btn-block</a><a href="javascript:;" class="btn btn-primary btn-block">.btn-block</a><a href="javascript:;" class="btn btn-success btn-block">.btn-block</a><a href="javascript:;" class="btn btn-info btn-block">.btn-block</a><a href="javascript:;" class="btn btn-link btn-block">.btn-block</a></p>
		
		<pre class="well">&lt;a href=<span class="text-warning">&quot;...&quot;</span> type=<span class="text-warning">&quot;button&quot;</span> class=<span class="text-warning">&quot;btn btn-primary btn-block&quot;</span>&gt;Button&lt;/a&gt;</pre>		
		
		<h5><code>.disabled</code></h5>
		<p><a href="javascript:;" class="btn btn-default disabled">.disabled</a> <a href="javascript:;" class="btn btn-primary disabled">.disabled</a> <a href="javascript:;" class="btn btn-success disabled">.disabled</a> <a href="javascript:;" class="btn btn-info disabled">.disabled</a> <a href="javascript:;" class="btn btn-link disabled">.disabled</a></p>
		
		<pre class="well">&lt;a href=<span class="text-warning">&quot;...&quot;</span> type=<span class="text-warning">&quot;button&quot;</span> class=<span class="text-warning">&quot;btn btn-primary disabled&quot;</span>&gt;Button&lt;/a&gt;</pre>
		
		</div>
	</div>

	<h4>Buttons Group with Dropdown / Dropup</h4>
	<div class="panel panel-clean card">
		<div class="panel-body">
		<h5><code>.btn-group</code></h5>
			<div class="btn-group">
				<button class="btn btn-default">File</button>
				<button class="btn btn-default">Edit</button>
				<div class="btn-group">
					<button type="button" class="btn btn-primary">Download</button>
					<button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown"><i class="caret"></i></button>
					<ul class="dropdown-menu">
						<li><a href="javascript:;">Dropdown link</a></li>
						<li><a href="javascript:;">Dropdown link</a></li>
					</ul>
				</div>
				<button type="button" class="btn btn-default">Options</button>
			</div>
				
			<pre class="well">&lt;div class=<span class="text-warning">&quot;btn-group&quot;</span>&gt;
  &lt;button class=<span class="text-warning">&quot;btn btn-default&quot;</span>&gt;File&lt;/button&gt;
  &lt;button class=<span class="text-warning">&quot;btn btn-default&quot;</span>&gt;Edit&lt;/button&gt;
  &lt;div class=<span class="text-warning">&quot;btn-group&quot;</span>&gt;
    &lt;button type=<span class="text-warning">&quot;button&quot;</span> class=<span class="text-warning">&quot;btn btn-primary&quot;</span>&gt;Download&lt;/button&gt;
    &lt;button type=<span class="text-warning">&quot;button&quot;</span> class=<span class="text-warning">&quot;btn btn-primary dropdown-toggle&quot;</span> data-toggle=<span class="text-warning">&quot;dropdown&quot;</span>&gt;
	  &lt;i class=<span class="text-warning">&quot;caret&quot;</span>&gt;&lt;/i&gt;
    &lt;/button&gt;
    &lt;ul class=<span class="text-warning">&quot;dropdown-menu&quot;</span>&gt;
      &lt;li&gt;&lt;a href=<span class="text-warning">&quot;javascript:;&quot;</span>&gt;Dropdown link&lt;/a&gt;&lt;/li&gt;
      &lt;li&gt;&lt;a href=<span class="text-warning">&quot;javascript:;&quot;</span>&gt;Dropdown link&lt;/a&gt;&lt;/li&gt;
    &lt;/ul&gt;
  &lt;/div&gt;
  &lt;button type=<span class="text-warning">&quot;button&quot;</span> class=<span class="text-warning">&quot;btn btn-default&quot;</span>&gt;Options&lt;/button&gt;
&lt;/div&gt;</pre>

		<h5><code>.btn-group-justified</code></h5>
		<h4>With <code>&lt;a&gt;</code> elements</h4>
		<div class="btn-group btn-group-justified">
			<a class="btn btn-info" role="button">Left</a>
			<a class="btn btn-default" role="button">Middle</a>
			<a class="btn btn-default" role="button">Right</a>
		</div>

		<pre class="well">&lt;div class=<span class="text-warning">&quot;btn-group btn-group-justified&quot;</span>&gt;
  &lt;a class=<span class="text-warning">&quot;btn btn-default&quot;</span> role=<span class="text-warning">&quot;button&quot;</span>&gt;Left&lt;/a&gt;
  &lt;a class=<span class="text-warning">&quot;btn btn-default&quot;</span> role=<span class="text-warning">&quot;button&quot;</span>&gt;Middle&lt;/a&gt;
  &lt;a class=<span class="text-warning">&quot;btn btn-default&quot;</span> role=<span class="text-warning">&quot;button&quot;</span>&gt;Right&lt;/a&gt;
&lt;/div&gt;</pre>

		<h4>With <code>&lt;button&gt;</code> elements</h4>
		<div class="btn-group btn-group-justified">
			<div class="btn-group">
				<button class="btn btn-default">Left</button>
			</div>
			<div class="btn-group">
				<button class="btn btn-success">Middle</button>
			</div>
			<div class="btn-group">
				<button class="btn btn-default">Right</button>
			</div>
		</div>
			
			<pre class="well">&lt;div class=<span class="text-warning">&quot;btn-group btn-group-justified&quot;</span>&gt;
  &lt;div class=<span class="text-warning">&quot;btn-group&quot;</span>&gt;
    &lt;button class=<span class="text-warning">&quot;btn btn-default&quot;</span>&gt;Left&lt;/button&gt;
  &lt;/div&gt;
  &lt;div class=<span class="text-warning">&quot;btn-group&quot;</span>&gt;
    &lt;button class=<span class="text-warning">&quot;btn btn-default&quot;</span>&gt;Middle&lt;/button&gt;
  &lt;/div&gt;
  &lt;div class=<span class="text-warning">&quot;btn-group&quot;</span>&gt;
    &lt;button class=<span class="text-warning">&quot;btn btn-default&quot;</span>&gt;Right&lt;/button&gt;
  &lt;/div&gt;
&lt;/div&gt;</pre>

		</div>
	</div>

	<h4>Buttons Toolbar</h4>
	<div class="panel panel-clean card">
		<div class="panel-body">
			<h5><code>.btn-toolbar</code></h5>
			<div class="btn-toolbar" role="toolbar">
				<div class="btn-group">
					<a class="btn btn-default" href="javascript:;">1</a>
					<a class="btn btn-default" href="javascript:;">2</a>
					<a class="btn btn-default" href="javascript:;">3</a>
				</div>

				<div class="btn-group">
					<a class="btn btn-primary" href="javascript:;">1</a>
					<a class="btn btn-primary" href="javascript:;">2</a>
					<a class="btn btn-primary" href="javascript:;">3</a>
					<a class="btn btn-primary" href="javascript:;">4</a>
				</div>
			</div>
			
			<pre class="well">&lt;div class=<span class="text-warning">&quot;btn-toolbar&quot;</span> role=<span class="text-warning">&quot;toolbar&quot;</span>&gt;
  &lt;div class=<span class="text-warning">&quot;btn-group&quot;</span>&gt;
    &lt;a class=<span class="text-warning">&quot;btn btn-default&quot;</span> href=<span class="text-warning">&quot;javascript:;&quot;</span>&gt;1&lt;/a&gt;
    &lt;a class=<span class="text-warning">&quot;btn btn-default&quot;</span> href=<span class="text-warning">&quot;javascript:;&quot;</span>&gt;2&lt;/a&gt;
    &lt;a class=<span class="text-warning">&quot;btn btn-default&quot;</span> href=<span class="text-warning">&quot;javascript:;&quot;</span>&gt;3&lt;/a&gt;
  &lt;/div&gt;

  &lt;div class=<span class="text-warning">&quot;btn-group&quot;</span>&gt;
    &lt;a class=<span class="text-warning">&quot;btn btn-primary&quot;</span> href=<span class="text-warning">&quot;javascript:;&quot;</span>&gt;1&lt;/a&gt;
    &lt;a class=<span class="text-warning">&quot;btn btn-primary&quot;</span> href=<span class="text-warning">&quot;javascript:;&quot;</span>&gt;2&lt;/a&gt;
    &lt;a class=<span class="text-warning">&quot;btn btn-primary&quot;</span> href=<span class="text-warning">&quot;javascript:;&quot;</span>&gt;3&lt;/a&gt;
    &lt;a class=<span class="text-warning">&quot;btn btn-primary&quot;</span> href=<span class="text-warning">&quot;javascript:;&quot;</span>&gt;4&lt;/a&gt;
  &lt;/div&gt;
&lt;/div&gt;</pre>
		</div>
	</div>

</div>
</div>
<?php include("includes/footer.php");?>
</body>
</html>