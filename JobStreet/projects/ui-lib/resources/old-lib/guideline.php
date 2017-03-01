<?php include("includes/config.php");?>
<!DOCTYPE html>
<html lang="en">
<head>
<title><?php echo $ProjectName?> - Guideline</title>
<?php include("includes/meta.php");?>
</head>
<body>
<div id="wrap">
<?php
$para="resources->guideline";
include("includes/navbar.php");
?>
<div class="container">
	<div class="panel page-header">
		<div class="panel-body">
			<h3>Guideline</h3>
		</div>
	</div>

	<h4>Buttons</h4>
	<div class="panel panel-clean card">
		<div class="panel-body">
			<div class="col-xs-3 text-center">
				<h5>Primary</h5>
				<p><a href="javascript:;" role="button" class="btn btn-primary">Login</a></p>
			</div>
			
			<div class="col-xs-3 text-center">
				<h5>Default</h5>
				<p><input type="reset" class="btn btn-default" value="Cancel"></p>
			</div>
			<div class="clearfix x2"></div>
			<pre class="well">&lt;a href=<span class="text-warning">&quot;...&quot;</span> role=<span class="text-warning">&quot;button&quot;</span> class=<span class="text-warning">&quot;btn btn-primary&quot;</span>&gt;Login&lt;/button&gt;
&lt;a href=<span class="text-warning">&quot;...&quot;</span> role=<span class="text-warning">&quot;button&quot;</span> class=<span class="text-warning">&quot;btn btn-default&quot;</span>&gt;Cancel&lt;/button&gt;</pre>
		</div>
	</div>
	
	<h4>Form</h4>
	<div class="panel panel-clean card">
		<div class="panel-body">
			<p><strong>Normal</strong></p>
			<form class="form-horizontal">
			<div class="form-group">
				<label class="col-sm-2 control-label" for="Username">Username</label>
				<div class="col-sm-5">
					<input type="text" class="form-control" placeholder="Username">
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2 control-label" for="Password">Password</label>
				<div class="col-sm-5">
					<input type="password" class="form-control" placeholder="Password">
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-offset-2 col-sm-10">
					<div class="checkbox">
						<label><input type="checkbox">Remember Me</label>
					</div>
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-offset-2 col-sm-10">
					<button type="submit" class="btn btn-primary">Login</button> <button type="submit" class="btn btn-default">Cancel</button>
				</div>
			</div>
			</form>
			<div class="clearfix x2"></div>
			<pre class="well">&lt;form class=<span class="text-warning">&quot;form-horizontal&quot;</span>&gt;
&lt;div class=<span class="text-warning">&quot;form-group&quot;</span>&gt;
  &lt;label class=<span class="text-warning">&quot;col-sm-2 control-label&quot;</span> for=<span class="text-warning">&quot;Username&quot;</span>&gt;Username&lt;/label&gt;
    &lt;div class=<span class="text-warning">&quot;col-sm-5&quot;</span>&gt;
      &lt;input type=<span class="text-warning">&quot;text&quot;</span> class=<span class="text-warning">&quot;form-control&quot;</span> placeholder=<span class="text-warning">&quot;Username&quot;</span>&gt;
    &lt;/div&gt;
&lt;/div&gt;
&lt;div class=<span class="text-warning">&quot;form-group&quot;</span>&gt;
  &lt;label class=<span class="text-warning">&quot;col-sm-2 control-label&quot;</span> for=<span class="text-warning">&quot;Password&quot;</span>&gt;Password&lt;/label&gt;
  &lt;div class=<span class="text-warning">&quot;col-sm-5&quot;</span>&gt;
    &lt;input type=<span class="text-warning">&quot;password&quot;</span> class=<span class="text-warning">&quot;form-control&quot;</span> placeholder=<span class="text-warning">&quot;Password&quot;</span>&gt;
  &lt;/div&gt;
&lt;/div&gt;
&lt;div class=<span class="text-warning">&quot;form-group&quot;</span>&gt;
  &lt;div class=<span class="text-warning">&quot;col-sm-offset-2 col-sm-10&quot;</span>&gt;
    &lt;div class=<span class="text-warning">&quot;checkbox&quot;</span>&gt;
      &lt;label&gt;&lt;input type=<span class="text-warning">&quot;checkbox&quot;</span>&gt;Remember Me&lt;/label&gt;
    &lt;/div&gt;
  &lt;/div&gt;
&lt;/div&gt;
&lt;div class=<span class="text-warning">&quot;form-group&quot;</span>&gt;
  &lt;div class=<span class="text-warning">&quot;col-sm-offset-2 col-sm-10&quot;</span>&gt;
    &lt;button type=<span class="text-warning">&quot;submit&quot;</span> class=<span class="text-warning">&quot;btn btn-primary&quot;</span>&gt;Login&lt;/button&gt;
    &lt;button type=<span class="text-warning">&quot;submit&quot;</span> class=<span class="text-warning">&quot;btn btn-default&quot;</span>&gt;Cancel&lt;/button&gt;
  &lt;/div&gt;
&lt;/div&gt;
&lt;/form&gt;</pre>

			<div class="clearfix x2"></div>

			<p><strong>Inline</strong></p>
			<form class="form-inline">
			<div class="form-group">
				<label class="sr-only" for="Email Address">Email Address</label>
				<input type="email" class="form-control" placeholder="Email Address">
			</div>
			<div class="form-group">
				<label class="sr-only" for="Password">Password</label>
				<input type="password" class="form-control" placeholder="Password">
			</div>
			<button type="submit" class="btn btn-primary">Login</button>
			</form>			
			<div class="clearfix x2"></div>
			<pre class="well">&lt;form class=<span class="text-warning">&quot;form-inline&quot;</span>&gt;
&lt;div class=<span class="text-warning">&quot;form-group&quot;</span>&gt;
  &lt;label class=<span class="text-warning">&quot;sr-only&quot;</span> for=<span class="text-warning">&quot;Email Address&quot;</span>&gt;Email Address&lt;/label&gt;
  &lt;input type=<span class="text-warning">&quot;email&quot;</span> class=<span class="text-warning">&quot;form-control&quot;</span> placeholder=<span class="text-warning">&quot;Email Address&quot;</span>&gt;
&lt;/div&gt;
&lt;div class=<span class="text-warning">&quot;form-group&quot;</span>&gt;
  &lt;label class=<span class="text-warning">&quot;sr-only&quot;</span> for=<span class="text-warning">&quot;Password&quot;</span>&gt;Password&lt;/label&gt;
  &lt;input type=<span class="text-warning">&quot;password&quot;</span> class=<span class="text-warning">&quot;form-control&quot;</span> placeholder=<span class="text-warning">&quot;Password&quot;</span>&gt;
&lt;/div&gt;
&lt;button type=<span class="text-warning">&quot;submit&quot;</span> class=<span class="text-warning">&quot;btn btn-info&quot;</span>&gt;Login&lt;/button&gt;
&lt;/form&gt;</pre>

			<div class="clearfix x2"></div>

			<p><strong>Search</strong></p>
			<div class="col-sm-6">
				<div class="input-group">
					<input type="text" placeholder="Search" class="form-control">
					<span class="input-group-btn"><a type="button" class="btn btn-default"><span class="icon-search"></span></a></span>
				</div>
			</div>
			<div class="clearfix x2"></div>
			<pre class="well">&lt;div class=<span class="text-warning">&quot;input-group&quot;</span>&gt;
  &lt;input type=<span class="text-warning">&quot;text&quot;</span> placeholder=<span class="text-warning">&quot;Search&quot;</span> class=<span class="text-warning">&quot;form-control&quot;</span>&gt;
  &lt;span class=<span class="text-warning">&quot;input-group-btn&quot;</span>&gt;&lt;a type=<span class="text-warning">&quot;button&quot;</span> class=<span class="text-warning">&quot;btn btn-success&quot;</span>&gt;&lt;span class=<span class="text-warning">&quot;icon-search&quot;</span>&gt;&lt;/span&gt;&lt;/a&gt;&lt;/span&gt;
&lt;/div&gt;</pre>

			<div class="clearfix x2"></div>

			<p><strong>Validation States</strong></p>
			<div class="col-sm-6">
				<div class="has-error">
					<input type="text" class="form-control">
					<label class="help-block">This field contains invalid value</label>
				</div>	
			</div>
			<div class="clearfix x2"></div>
			<pre class="well">&lt;div class=<span class="text-warning">&quot;has-error&quot;</span>&gt;
  &lt;input type=<span class="text-warning">&quot;text&quot;</span> class=<span class="text-warning">&quot;form-control&quot;</span>&gt;
  &lt;label class=<span class="text-warning">&quot;help-block&quot;</span>&gt;This field contains invalid value&lt;/label&gt;
&lt;/div&gt;</pre>			
			<div class="clearfix"></div>
		</div>
	</div>

	<h4>Modal & Popover</h4>
	<div class="panel panel-clean card">
		<div class="panel-body">
			<figure>
				<img src="images/modal-padding.jpg" class="thumbnail">
			</figure>
			
			<div class="clearfix x2"></div>

			<div class="col-md-6">
			<figure>
				<img src="images/modal-normal.jpg" class="thumbnail">
			</figure>
			</div>
			
			<div class="col-md-6">
			<figure>
				<img src="images/modal-long-title.jpg" class="thumbnail">
			</figure>
			</div>
			
			<div class="clearfix x3"></div>

			<h4>Popover</h4>
			<figure>
				<img src="images/popover-padding.jpg" class="thumbnail">
			</figure>
			
			<div class="clearfix x2"></div>
			
			<div class="col-md-6">
			<figure>
				<img src="images/popover-normal.jpg" class="thumbnail">
			</figure>
			</div>
			
			<div class="col-md-6">
			<figure>
				<img src="images/popover-long-title.jpg" class="thumbnail">
			</figure>
			</div>
			
			<div class="clearfix x2"></div>
		</div>
	</div>

</div>
</div>
<?php include("includes/footer.php");?>
</body>
</html>