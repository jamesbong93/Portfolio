<?php
include("../includes/theme-data.php");
$theme="siva";
$com="Action Bar";

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
				<div class="panel-title"><strong>Retrieved Resume</strong></div>
			</div>
			<div class="panel-body">
				<blockquote class="alert-default">
					Example:
				</blockquote>
				<div class="row">
					<div class="col-md-10 col-xs-12 ">
						<div class="well clearfix">
							<div class="panel-action">
								<div class="clearfix">
									<ul class="nav nav-pills pull-left">
										<li>
											<div class="btn btn-default">
												<input type="checkbox" id="selectAll">
												<label for="selectAll">Select All</label>
											</div>
										</li>
									</ul>
									<div class="form-inline retriever pull-right">
									   <label><span class="hidden-xs">Filter by</span>
										   <select class="form-control">
												<option>This month</option>
												<option>Jun 2015</option>
												<option>May 2015</option>
												<option>Apr 2015</option>
												<option>Mar 2015</option>
												<option>Feb 2015</option>
												<option>Jan 2015</option>
										   </select>
									   </label>
									   <label for="retriever-id" class="hidden-xs">Retrieved by:
										  <select class="form-control" id="retriever-id">
											  <option value="1">All</option>
											  <option value="2">Awesome Name</option>
											  <option value="3">Ivan Ong</option>
											  <option value="6">Muhammad Nazwan Bin Noor Azam</option>
										  </select>
										</label>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<blockquote class="alert-default">
					Sample Code:
				</blockquote>
				<pre class="well prettyprint"><input class="btn btn-info btnCopy" type="button" value="Copy" data-trigger="hover" data-toggle="tooltip" data-original-title="Copy to clipboard" data-placement="top"/><div class="code_content">
&lt;div class=&quot;panel-action&quot;&gt;
  &lt;div class=&quot;clearfix&quot;&gt;
    &lt;ul class=&quot;nav nav-pills pull-left&quot;&gt;
      &lt;li&gt;
        &lt;div class=&quot;btn btn-default&quot;&gt;
          &lt;input type=&quot;checkbox&quot;&gt;
          &lt;label&gt;Select All&lt;/label&gt;
        &lt;/div&gt;
      &lt;/li&gt;
    &lt;/ul&gt;
    &lt;div class=&quot;form-inline retriever pull-right&quot;&gt;
      &lt;label&gt;
        &lt;span class=&quot;hidden-xs&quot;&gt;Filter by&lt;/span&gt;
        &lt;select class=&quot;form-control&quot;&gt;
          &lt;option&gt;Option&lt;/option&gt;
        &lt;/select&gt;
      &lt;/label&gt;
      &lt;label class=&quot;hidden-xs&quot;&gt;
        Retrieved by:
        &lt;select class=&quot;form-control&quot;&gt;
          &lt;option value=&quot;1&quot;&gt;Name&lt;/option&gt;
        &lt;/select&gt;
      &lt;/label&gt;
    &lt;/div&gt;
  &lt;/div&gt;
&lt;/div&gt;
				</div></pre>
			</div>
		</div>

		<blockquote class="alert-success" role="alert">
			<h4>Demo File</h4>
			<p>Demo and source code of the action bar for retrieved resume can be download here.</p>
			<a class="btn btn-success" href="../examples/siva/top-bar-with-action-bar.html" download="">Download</a>
		</blockquote>

		<a name="active-filter"></a>
		<div class="panel panel-default">
			<div class="panel-heading">
				<div class="panel-title"><strong>Active filter</strong></div>
			</div>
			<div class="panel-body">
				<div class="row">
					<div class="col-md-10 col-xs-12 ">
						<div class="well clearfix">
							<div class="panel-action">
								<div class="clearfix">
									<ul class="nav nav-pills active-filter">
										<label>Active Filters:</label>
										<li for="facet20" class="filter"><span class="icon-tag" style="color:#42A5F5"></span><label>English</label><span class="icon-close"></span></li><li for="facet1" class="filter"><span class="icon-tag" style="color:#0D47A1"></span><label>Kuala Lumpur</label><span class="icon-close"></span></li><li class="filter-reset"><div class="btn btn-link"><strong>Reset All</strong></div></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
				<blockquote class="alert-default">
					Sample Code:
				</blockquote>
				<pre class="well prettyprint"><input class="btn btn-info btnCopy" type="button" value="Copy" data-trigger="hover" data-toggle="tooltip" data-original-title="Copy to clipboard" data-placement="top"/><div class="code_content">
&lt;div class=&quot;panel-action&quot;&gt;
  &lt;div class=&quot;clearfix&quot;&gt;
    &lt;ul class=&quot;nav nav-pills active-filter&quot;&gt;
      &lt;label&gt;Active Filters:&lt;/label&gt;
      &lt;li for=&quot;facet1&quot; class=&quot;filter&quot;&gt;&lt;span class=&quot;icon-tag&quot; style=&quot;color:#0D47A1&quot;&gt;&lt;/span&gt;&lt;label&gt;Kuala Lumpur&lt;/label&gt;&lt;span class=&quot;icon-close&quot;&gt;&lt;/span&gt;&lt;/li&gt;
      &lt;li class=&quot;filter-reset&quot;&gt;
        &lt;div class=&quot;btn btn-link&quot;&gt;&lt;strong&gt;Reset All&lt;/strong&gt;&lt;/div&gt;
      &lt;/li&gt;
    &lt;/ul&gt;
  &lt;/div&gt;
&lt;/div&gt;</div></pre>
			</div>
		</div>
	</div>
</section>

<?php include("../includes/script.php");?>

</body>
</html>
