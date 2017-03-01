<?php
include("../includes/theme-data.php");
$theme="siva";
$com="Components";

include("../includes/theme-header.php");?>

<aside>
	<div class="theme-brand">
		<?php echo $theme;?>
	</div>
	<div class="component-list">
		<ul class="list-unstyled">
			<?php BuildMenu('list',$theme,$com);?>
		</ul>
	</div>
</aside>

<section>
	<div class="container-fluid">
		<div class="panel">
			<div class="panel-body">
				<h3 class="pull-left"><?php echo $com;?></h3>
			</div>
		</div>
		
		<div class="panel panel-default">
			<div class="panel-heading">
				<div class="panel-title"><strong>Button</strong></div>
			</div>
			<div class="panel-body">
				<h5>Examples:</h5>
				<div class="col-xs-6 col-sm-4 col-md-2">
					<h5><code>btn-default</code></h5>
					<button class="btn btn-default">Button</button>
				</div>
				<div class="col-xs-6 col-sm-4 col-md-2">
					<h5><code>btn-primary</code></h5>
					<button class="btn btn-primary">Button</button>
				</div>
				<div class="col-xs-6 col-sm-4 col-md-2">
					<h5><code>btn-pale</code></h5>
					<button class="btn btn-pale">Button</button>
				</div>
				<div class="col-xs-6 col-sm-4 col-md-2">
					<h5><code>btn-link</code></h5>
					<button class="btn btn-link">Button</button>
				</div>
				<div class="col-xs-6 col-sm-4 col-md-2">
					<h5><code>btn-default</code><code>disabled</code></h5>
					<button class="btn btn-default disabled">Button</button>
				</div>
				<div class="clearfix"></div>
				<br>
				<h5>There are 3 ways to use a button including <code>&lt;a&gt;</code>, <code>&lt;button&gt;</code> and <code>&lt;input&gt;</code>. Below are the sample code: </h5>

				<pre class="well prettyprint"><input class="btn btn-info btnCopy" type="button" value="Copy" data-trigger="hover" data-toggle="tooltip" data-original-title="Copy to clipboard" data-placement="top"/><div class="code_content">
&lt;a role=&quot;button&quot; class=&quot;btn btn-info&quot;&gt;Button&lt;/a&gt;
&lt;button role=&quot;button&quot; class=&quot;btn btn-info&quot;&gt;Button&lt;/button&gt;
&lt;input type=&quot;button&quot; class=&quot;btn btn-info&quot; value=&quot;Button&quot;&gt;
&lt;-- Disabled --&gt;
&lt;a role=&quot;button&quot; class=&quot;btn btn-default disabled&quot;&gt;Button&lt;/a&gt;
				</div></pre>
			</div>
		</div>
		
		<div class="panel panel-default">
			<div class="panel-heading">
				<div class="panel-title"><strong>Toggle</strong></div>
			</div>
			<div class="panel-body">
				<blockquote class="alert-default">
					Example of toggle for "On/Off" options.
				</blockquote>
				<div class="col-xs-6 col-sm-4 col-md-4">
					<label class="switch-light switch-android">
						<input type="checkbox">
						<span>
							<span>No</span>
							<span>Yes</span>
						</span>
						<a></a>
					</label>
				</div>
				<div class="clearfix"></div>
				<br>
				<blockquote class="alert-default">
					Add <code>switch-light</code> and <code>switch-android</code> to convert checkboxes into toggles.
				</blockquote>
				<pre class="well prettyprint"><input class="btn btn-info btnCopy" type="button" value="Copy" data-trigger="hover" data-toggle="tooltip" data-original-title="Copy to clipboard" data-placement="top"/><div class="code_content">
&lt;label class=&quot;switch-light switch-android&quot;&gt;
  &lt;input type=&quot;checkbox&quot;&gt;
    &lt;span&gt;
      &lt;span&gt;No&lt;/span&gt;
      &lt;span&gt;Yes&lt;/span&gt;
    &lt;/span&gt;
  &lt;a&gt;&lt;/a&gt;
&lt;/label&gt;
				</div></pre>
			</div>
			<div class="panel-body">
			<blockquote class="alert-default">
				Example of toggle for multiple options.
				</blockquote>
				
					<div class="col-xs-12">
						<div class="col-xs-6 col-sm-4 col-md-2">
							<div class="form-group switch-flexi">
								<label class="switch-android switch-toggle ">
								  <input id="my" name="view" type="radio" checked>
								  <label for="my" onclick="">Malaysia</label>
								  <input id="th" name="view" type="radio">
								  <label for="th" onclick="">Thailand</label>
								  <a></a>
								</label>
							</div>
						</div>
					</div>
					
					<div class="clearfix"></div>
					<blockquote class="alert-default">
					Add <code>form-group</code> and <code>switch-flexi</code> to make label text visible.
					
				</blockquote>
				<pre class="well prettyprint"><input class="btn btn-info btnCopy" type="button" value="Copy" data-trigger="hover" data-toggle="tooltip" data-original-title="Copy to clipboard" data-placement="top"/><div class="code_content">
&lt;div class=&quot;form-group switch-flexi&quot;&gt;
  &lt;label class=&quot;switch-android switch-toggle&quot;&gt;
    &lt;input id=&quot;sg&quot; name=&quot;view1&quot; type=&quot;radio&quot; checked&gt;
    &lt;label for=&quot;sg&quot; onclick=&quot;&quot;&gt;Singapore&lt;/label&gt;
    &lt;input id=&quot;ph&quot; name=&quot;view1&quot; type=&quot;radio&quot;&gt;
    &lt;label for=&quot;ph&quot; onclick=&quot;&quot;&gt;Philippines&lt;/label&gt;
    &lt;a&gt;&lt;/a&gt;
  &lt;/label&gt;
&lt;/div&gt;
				</div></pre>
				
					<div class="col-xs-12">
						<div class="col-xs-6 col-sm-4 col-md-3">
							<div class="form-group switch-flexi">
							  <label class="switch-android switch-toggle switch-3">
								  <input id="sg" name="view1" type="radio" checked>
								  <label for="sg" onclick="">Singapore</label>
								  <input id="ph" name="view1" type="radio">
								  <label for="ph" onclick="">Philippines</label>
								  <input id="vn" name="view1" type="radio">
								  <label for="vn" onclick="">Vietnam</label>
								  <a></a>
							  </label>
							</div>
						</div>
					</div>
			
				<div class="clearfix"></div>
				
				<blockquote class="alert-default">
					
					You can add up to 5 items by using the <code>switch-3</code>, <code>switch-4</code> and <code>switch-5</code> classes.
				</blockquote>
				<pre class="well prettyprint"><input class="btn btn-info btnCopy" type="button" value="Copy" data-trigger="hover" data-toggle="tooltip" data-original-title="Copy to clipboard" data-placement="top"/><div class="code_content">
&lt;div class=&quot;form-group switch-flexi&quot;&gt;
  &lt;label class=&quot;switch-android switch-toggle switch-3&quot;&gt;
    ...
  &lt;/label&gt;
&lt;/div&gt;
				</div></pre>
			</div>
		</div>

		<div class="panel panel-default">
			<div class="panel-heading">
				<div class="panel-title"><strong>Fieldset</strong></div>
			</div>
			<div class="panel-body">
				<h5>Examples:</h5>
				<div class="col-xs-12 col-sm-7">
					<fieldset class="fieldset-pale">
	    				<legend>Discriminatory Policies &amp; Practices </legend>
	   					<div class="control-group">
				           <p>JobStreet.com does not accept job advertisements that discriminate against race, religion, age, gender, family status or disability. It is against the law in some countries* and your company may have internal policies against such practices.
						   JobStreet.com will not bear any responsibility for any consequences that may arise from the inappropriateness of such job postings.
	                       </p>
	                       <p>
						   	<strong>*For Singapore job postings, refer to the guidelines <a href="#">here</a></strong>.
	                       </p>
				    	</div>
					</fieldset>
				</div>
				<div class="clearfix"></div>
				<br>
				<pre class="well prettyprint"><input class="btn btn-info btnCopy" type="button" value="Copy" data-trigger="hover" data-toggle="tooltip" data-original-title="Copy to clipboard" data-placement="top"/><div class="code_content">
&lt;fieldset class=&quot;fieldset-pale&quot;&gt;
  &lt;legend&gt;Discriminatory Policies &amp;amp; Practices&lt;/legend&gt;
  &lt;div class=&quot;control-group&quot;&gt;
    &lt;p&gt;
      JobStreet.com ...
    &lt;/p&gt;
    &lt;p&gt;
      &lt;strong&gt;*For Singapore job...&lt;a href=&quot;#&quot;&gt;here&lt;/a&gt;&lt;/strong&gt;.
    &lt;/p&gt;
  &lt;/div&gt;
&lt;/fieldset&gt;
				</div></pre>
			</div>
		</div>

	</div>
</section>

<?php include("../includes/script.php");?>
</body>
</html>
