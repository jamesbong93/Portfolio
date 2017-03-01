<?php include("includes/config.php");?>
<!DOCTYPE html>
<html lang="en">
<head>
<title><?php echo $ProjectName?> - Form Control</title>
<?php include("includes/meta.php");?>
</head>
<body>
<div id="wrap">
<?php
$para="ui->form-control";
include("includes/navbar.php");
?>
<div class="container">
	<div class="panel page-header">
		<div class="panel-body">
			<h3>Form Control</h3>
		</div>
	</div>
	
	<h4>Input Fields</h4>
	<div class="panel panel-clean card">
		<div class="panel-body">
			
			<div class="form-group">
				<label for="Text">Text</label>
				<input type="text" class="form-control">
			</div>
			<div class="form-group">
				<label for="Disabled">Disabled</label>
				<input type="text" placeholder="Disabled" class="form-control" disabled>
			</div>

			<pre class="well">&lt;div class=<span class="text-warning">&quot;form-group&quot;</span>&gt;
  &lt;label for=<span class="text-warning">&quot;Text&quot;</span>&gt;Text&lt;/label&gt;
  &lt;input type=<span class="text-warning">&quot;text&quot;</span> class=<span class="text-warning">&quot;form-control&quot;</span> disabled&gt;
&lt;/div&gt;</pre>

			<div class="form-group">
				<input type="file"><p class="help-block">Upload your photo (Max. 1MB)</p>
			</div>
			
			<pre class="well">&lt;div class=<span class="text-warning">&quot;form-group&quot;</span>&gt;
  &lt;input type=<span class="text-warning">&quot;file&quot;</span>&gt;&lt;p class=<span class="text-warning">&quot;help-block&quot;</span>&gt;Upload your photo (Max. 1MB)&lt;/p&gt;
&lt;/div&gt;</pre>

			<div class="checkbox">
				<label><input type="checkbox">Checkbox</label>
			</div>

			<fieldset>
				<legend>Fieldset</legend>
				
				<div class="radio">
					<label><input type="radio" name="radio" value="1">Radio Box 1</label>
				</div>
				<div class="radio">
					<label><input type="radio" name="radio" value="2">Radio Box 2</label>
				</div>
			</fieldset>
			
			<pre class="well">&lt;div class=<span class="text-warning">&quot;checkbox&quot;</span>&gt;
  &lt;label&gt;&lt;input type=<span class="text-warning">&quot;checkbox&quot;</span>&gt;Checkbox&lt;/label&gt;
&lt;/div&gt;

&lt;fieldset&gt;
  &lt;legend&gt;Fieldset&lt;/legend&gt;
  &lt;div class=<span class="text-warning">&quot;radio&quot;</span>&gt;
    &lt;label&gt;&lt;input type=<span class="text-warning">&quot;radio&quot;</span> name=<span class="text-warning">&quot;radio&quot;</span> value=<span class="text-warning">&quot;1&quot;</span>&gt;Radio 1&lt;/label&gt;
  &lt;/div&gt;
  &lt;div class=<span class="text-warning">&quot;radio&quot;</span>&gt;
    &lt;label&gt;&lt;input type=<span class="text-warning">&quot;radio&quot;</span> name=<span class="text-warning">&quot;radio&quot;</span> value=<span class="text-warning">&quot;2&quot;</span>&gt;Radio 2&lt;/label&gt;
  &lt;/div&gt;
&lt;/fieldset&gt;</pre>

			<div class="form-group">
				<label>Select</label>
				<select class="form-control">
				<?php
				for($g=65;$g<=70;$g++){
					echo "<optgroup label=\"Group &#".$g.";\">";
					for($i=1;$i<=5;$i++){echo "<option>Item ".$i."</option>";}
					echo "</optgroup>";
				}
				?>
				</select>
			</div>

			<div class="form-group">
				<label>Multi Select</label>
				<select multiple class="form-control">
				<?php
				for($g=65;$g<=70;$g++){
					echo "<optgroup label=\"Group &#".$g.";\">";
					for($i=1;$i<=5;$i++){echo "<option>Item ".$i."</option>";}
					echo "</optgroup>";
				}
				?>
				</select>
			</div>
			
			<pre class="well">&lt;div class=<span class="text-warning">&quot;form-group&quot;</span>&gt;
  &lt;select class=<span class="text-warning">&quot;form-control&quot;</span>&gt;
    &lt;optgroup label=<span class="text-warning">&quot;Group&quot;</span>&gt;
      &lt;option&gt;Item&lt;/option&gt;
    &lt;/optgroup&gt;
  &lt;/select&gt;
&lt;/div&gt;</pre>

			<div class="form-group">
				<label>Textarea</label>
				<textarea class="form-control" placeholder="Enter less than 100 words"></textarea>
			</div>
			
			<pre class="well">&lt;div class=<span class="text-warning">&quot;form-group&quot;</span>&gt;
  &lt;textarea class=<span class="text-warning">&quot;form-control&quot;</span> placeholder=<span class="text-warning">&quot;Enter less than 100 words&quot;</span>&gt;&lt;/textarea&gt;
&lt;/div&gt;</pre>

		</div>
	</div>
	
	<h4>Inline Form</h4>
	<div class="panel panel-clean card">
		<div class="panel-body">
		<h5><code>.form-inline</code></h5>
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

		<pre class="well">&lt;form class=<span class="text-warning">&quot;form-inline&quot;</span>&gt;
&lt;div class=<span class="text-warning">&quot;form-group&quot;</span>&gt;
  &lt;label class=<span class="text-warning">&quot;sr-only&quot;</span> for=<span class="text-warning">&quot;Email Address&quot;</span>&gt;Email Address&lt;/label&gt;
  &lt;input type=<span class="text-warning">&quot;email&quot;</span> class=<span class="text-warning">&quot;form-control&quot;</span> placeholder=<span class="text-warning">&quot;Email Address&quot;</span>&gt;
&lt;/div&gt;
&lt;div class=<span class="text-warning">&quot;form-group&quot;</span>&gt;
  &lt;label class=<span class="text-warning">&quot;sr-only&quot;</span> for=<span class="text-warning">&quot;Password&quot;</span>&gt;Password&lt;/label&gt;
  &lt;input type=<span class="text-warning">&quot;password&quot;</span> class=<span class="text-warning">&quot;form-control&quot;</span> placeholder=<span class="text-warning">&quot;Password&quot;</span>&gt;
&lt;/div&gt;
&lt;button type=<span class="text-warning">&quot;submit&quot;</span> class=<span class="text-warning">&quot;btn btn-primary&quot;</span>&gt;Login&lt;/button&gt;
&lt;/form&gt;</pre>
		</div>
	</div>

	<h4>Inline Checkbox & Radiobox</h4>
	<div class="panel panel-clean card">
		<div class="panel-body">
		<h5><code>.checkbox-inline</code></h5>
		<fieldset disabled>
			<legend>Disabled</legend>
			<div class="checkbox-inline">
				<label><input type="checkbox">Checkbox 1</label>
			</div>
			<div class="checkbox-inline">
				<label><input type="checkbox">Checkbox 2</label>
			</div>
		</fieldset>

		<h5><code>.radio-inline</code></h5>
		<div class="radio-inline">
			<label><input type="radio" name="radio" value="1" disabled>Radio 1</label>
		</div>
		<div class="radio-inline">
			<label><input type="radio" name="radio" value="2">Radio 2</label>
		</div>

		<pre class="well">&lt;div class=<span class="text-warning">&quot;radio-inline&quot;</span>&gt;
  &lt;label&gt;&lt;input type=<span class="text-warning">&quot;radio&quot;</span> name=<span class="text-warning">&quot;radio&quot;</span> value=<span class="text-warning">&quot;1&quot;</span> disabled&gt;Radio 1&lt;/label&gt;
&lt;/div&gt;
&lt;div class=<span class="text-warning">&quot;radio-inline&quot;</span>&gt;  
  &lt;label&gt;&lt;input type=<span class="text-warning">&quot;radio&quot;</span> name=<span class="text-warning">&quot;radio&quot;</span> value=<span class="text-warning">&quot;2&quot;</span>&gt;Radio 2&lt;/label&gt;
&lt;/div&gt;</pre>

		</div>
	</div>

	<h4>Horizontal Form</h4>
	<div class="panel panel-clean card">
		<div class="panel-body">
		<h5><code>.form-horizontal</code></h5>
		<form class="form-horizontal">
		<div class="form-group">
			<label class="col-sm-2 control-label" for="Email Address">Email Address</label>
			<div class="col-sm-8">
				<input type="email" class="form-control" placeholder="Email Address">
			</div>
		</div>
		<div class="form-group">
			<label class="col-sm-2 control-label" for="Domain">Domain</label>
			<div class="col-sm-8">
				<p class="text-muted form-control-static">/JSKL <code>.form-control-static</code></p>
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
			<button type="submit" class="btn btn-primary">Login</button>
			</div>
		</div>
		</form>

		<pre class="well">&lt;form class=<span class="text-warning">&quot;form-horizontal&quot;</span>&gt;
&lt;div class=<span class="text-warning">&quot;form-group&quot;</span>&gt;
  &lt;label class=<span class="text-warning">&quot;col-sm-2 control-label&quot;</span> for=<span class="text-warning">&quot;Email Address&quot;</span>&gt;Email Address&lt;/label&gt;
  &lt;div class=<span class="text-warning">&quot;col-sm-8&quot;</span>&gt;
    &lt;input type=<span class="text-warning">&quot;email&quot;</span> class=<span class="text-warning">&quot;form-control&quot;</span> placeholder=<span class="text-warning">&quot;Email Address&quot;</span>&gt;
  &lt;/div&gt;
&lt;/div&gt;
&lt;div class=<span class="text-warning">&quot;form-group&quot;</span>&gt;
  &lt;label class=<span class="text-warning">&quot;col-sm-2 control-label&quot;</span> for=<span class="text-warning">&quot;Domain&quot;</span>&gt;Domain&lt;/label&gt;
  &lt;div class=<span class="text-warning">&quot;col-sm-8&quot;</span>&gt;
    &lt;p class=<span class="text-warning">&quot;text-muted form-control-static&quot;</span>&gt;/JSKL&lt;/p&gt;
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
  &lt;/div&gt;
&lt;/div&gt;
&lt;/form&gt;</pre>

		</div>
	</div>

	<h4>Input Group</h4>
	<div class="panel panel-clean card">
		<div class="panel-body">
			<h5><code>.input-group</code></h5>
			<div class="col-lg-5">
				<div class="input-group">
					<span class="input-group-addon"><span class="icon-user"></span></span>
					<input type="text" role="username" placeholder="Username" class="form-control">
				</div>
			</div>
			
			<div class="col-lg-5">
				<div class="input-group">
					<input type="text" placeholder="Search" class="form-control">
					<span class="input-group-btn"><a type="button" class="btn btn-info"><span class="icon-search"></span></a></span>
				</div>
			</div>

			<div class="clearfix x2"></div>

			<div class="col-lg-5">
				<div class="input-group">
					<div class="input-group-btn">
					<button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">Action <i class="caret"></i></button>
					<ul class="dropdown-menu">
						<li><a href="javascript:;">Search</a></li>
						<li><a href="javascript:;">Save</a></li>
						<li><a href="javascript:;">Forward</a></li>
						<li class="divider"></li>
						<li class="disabled"><a href="javascript:;">Delete</a></li>
					</ul>
					</div>
					<input type="text" class="form-control">
				</div>
			</div>

			<div class="col-lg-5">
				<div class="input-group">
					<input type="text" class="form-control">
					<div class="input-group-btn">
					<button type="button" class="btn btn-primary">Action</button>
					<button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown"><i class="caret"></i></button>
					<ul class="dropdown-menu pull-right">
						<li><a href="javascript:;">Search</a></li>
						<li><a href="javascript:;">Save</a></li>
						<li><a href="javascript:;">Forward</a></li>
						<li class="divider"></li>
						<li class="disabled"><a href="javascript:;">Delete</a></li>
					</ul>
					</div>
				</div>
			</div>
			
			<div class="clearfix x3"></div>

			<pre class="well">&lt;div class=<span class="text-warning">&quot;input-group&quot;</span>&gt;
  &lt;input type=<span class="text-warning">&quot;text&quot;</span> class=<span class="text-warning">&quot;form-control&quot;</span>&gt;
  &lt;div class=<span class="text-warning">&quot;input-group-btn&quot;</span>&gt;
    &lt;button type=<span class="text-warning">&quot;button&quot;</span> class=<span class="text-warning">&quot;btn btn-primary&quot;</span>&gt;Action&lt;/button&gt;
    &lt;button type=<span class="text-warning">&quot;button&quot;</span> class=<span class="text-warning">&quot;btn btn-primary dropdown-toggle&quot;</span> data-toggle=<span class="text-warning">&quot;dropdown&quot;</span>&gt;
      &lt;i class=<span class="text-warning">&quot;caret&quot;</span>&gt;&lt;/i&gt;
    &lt;/button&gt;
    &lt;ul class=<span class="text-warning">&quot;dropdown-menu pull-right&quot;</span>&gt;
      &lt;li&gt;&lt;a href=<span class="text-warning">&quot;...&quot;</span>&gt;Search&lt;/a&gt;&lt;/li&gt;
      &lt;li class=<span class="text-warning">&quot;divider&quot;</span>&gt;&lt;/li&gt;
      &lt;li class=<span class="text-warning">&quot;disabled&quot;</span>&gt;&lt;a href=<span class="text-warning">&quot;...&quot;</span>&gt;Delete&lt;/a&gt;&lt;/li&gt;
    &lt;/ul&gt;
  &lt;/div&gt;
&lt;/div&gt;</pre>
		</div>
	</div>

	<a name="validation-states"></a>
	<h4>Validation States</h4>
	<div class="panel panel-clean card">
		<div class="panel-body">
			<form class="form-horizontal">
			<code>.has-error</code>
			<div class="form-group has-error">
				<label class="col-sm-2 control-label">Error</label>
				<div class="col-sm-8">
					<input type="text" class="form-control">
					<span class="help-block">Help text for this field <code>.help-block</code></span>
				</div>
			</div>
			</form>

			<div class="clearfix x3"></div>

			<pre class="well">&lt;div class=<span class="text-warning">&quot;form-group has-error&quot;</span>&gt;
  &lt;label class=<span class="text-warning">&quot;col-sm-2 control-label&quot;</span>&gt;Error&lt;/label&gt;
  &lt;div class=<span class="text-warning">&quot;col-sm-8&quot;</span>&gt;
    &lt;input type=<span class="text-warning">&quot;text&quot;</span> class=<span class="text-warning">&quot;form-control&quot;</span>&gt;
    &lt;span class=<span class="text-warning">&quot;help-block&quot;</span>&gt;Help text&lt;/span&gt;
  &lt;/div&gt;
&lt;/div&gt;</pre>

		</div>
	</div>

	<h4>Advanced</h4>
	<div class="panel panel-clean card">
		<div class="panel-body">
			<p>Do more with buttons. Control button states or create groups of buttons for more components like toolbars.</p>
			
			<h4>Stateful</h4>
			<button type="button" id="loading-example-btn" data-loading-text="Processing..." data-complete-text="Completed" class="btn btn-primary">Loading state</button>
			<div class="clearfix x2"></div>
			<pre class="well">&lt;button type=<span class="text-warning">&quot;button&quot;</span> id=<span class="text-warning">&quot;loading-example-btn&quot;</span> data-loading-text=<span class="text-warning">&quot;Processing...&quot;</span> data-complete-text=<span class="text-warning">&quot;Completed&quot;</span> class=<span class="text-warning">&quot;btn btn-primary&quot;</span>&gt;Loading state&lt;/button&gt;
			
$(<span class="text-info">&quot;#loading-example-btn&quot;</span>).click(function(){
  var btn=$(this)
  btn.button(<span class="text-success">'loading'</span>),setTimeout(function(){btn.button(<span class="text-success">'complete'</span>)},2000)
});</pre>
				
			<h4>Single toggle</h4>
			<button type="button" class="btn btn-success" data-toggle="button">Toggle</button>
			<div class="clearfix x2"></div>
			<pre class="well">&lt;button type=<span class="text-warning">&quot;button&quot;</span> class=<span class="text-warning">&quot;btn btn-primary&quot;</span> data-toggle=<span class="text-warning">&quot;button&quot;</span>&gt;Toggle&lt;/button&gt;</pre>
			
			
			<h4>Checkbox</h4>
			<div class="btn-group" data-toggle="buttons">
				<label class="btn btn-primary"><input type="checkbox" name="option" id="1">Option 1</label>
				<label class="btn btn-primary"><input type="checkbox" name="option" id="2">Option 2</label>
				<label class="btn btn-primary"><input type="checkbox" name="option" id="3">Option 3</label>
			</div>
			<div class="clearfix x2"></div>
			<pre class="well">&lt;div class=<span class="text-warning">&quot;btn-group&quot;</span> data-toggle=<span class="text-warning">&quot;buttons&quot;</span>&gt;
  &lt;label class=<span class="text-warning">&quot;btn btn-primary&quot;</span>&gt;&lt;input type=<span class="text-warning">&quot;checkbox&quot;</span> name=<span class="text-warning">&quot;option&quot;</span> id=<span class="text-warning">&quot;1&quot;</span>&gt;Option 1&lt;/label&gt;
  &lt;label class=<span class="text-warning">&quot;btn btn-primary&quot;</span>&gt;&lt;input type=<span class="text-warning">&quot;checkbox&quot;</span> name=<span class="text-warning">&quot;option&quot;</span> id=<span class="text-warning">&quot;2&quot;</span>&gt;Option 2&lt;/label&gt;
  &lt;label class=<span class="text-warning">&quot;btn btn-primary&quot;</span>&gt;&lt;input type=<span class="text-warning">&quot;checkbox&quot;</span> name=<span class="text-warning">&quot;option&quot;</span> id=<span class="text-warning">&quot;3&quot;</span>&gt;Option 3&lt;/label&gt;
&lt;/div&gt;</pre>
			
			<h4>Radio</h4>
			<div class="btn-group" data-toggle="buttons">
				<label class="btn btn-info"><input type="radio" name="option" id="1">Option 1</label>
				<label class="btn btn-info"><input type="radio" name="option" id="2">Option 2</label>
				<label class="btn btn-info"><input type="radio" name="option" id="3">Option 3</label>			
			</div>
			<div class="clearfix x2"></div>
			<pre class="well">&lt;div class=<span class="text-warning">&quot;btn-group&quot;</span> data-toggle=<span class="text-warning">&quot;buttons&quot;</span>&gt;
  &lt;label class=<span class="text-warning">&quot;btn btn-primary&quot;</span>&gt;&lt;input type=<span class="text-warning">&quot;radio&quot;</span> name=<span class="text-warning">&quot;option&quot;</span> id=<span class="text-warning">&quot;1&quot;</span>&gt;Option 1&lt;/label&gt;
  &lt;label class=<span class="text-warning">&quot;btn btn-primary&quot;</span>&gt;&lt;input type=<span class="text-warning">&quot;radio&quot;</span> name=<span class="text-warning">&quot;option&quot;</span> id=<span class="text-warning">&quot;2&quot;</span>&gt;Option 2&lt;/label&gt;
  &lt;label class=<span class="text-warning">&quot;btn btn-primary&quot;</span>&gt;&lt;input type=<span class="text-warning">&quot;radio&quot;</span> name=<span class="text-warning">&quot;option&quot;</span> id=<span class="text-warning">&quot;3&quot;</span>&gt;Option 3&lt;/label&gt;
&lt;/div&gt;</pre>

		</div>
	</div>

</div>
</div>
<?php include("includes/footer.php");?>
</body>
</html>