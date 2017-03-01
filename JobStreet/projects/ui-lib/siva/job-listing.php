<?php
include("../includes/theme-data.php");
$theme="siva";
$com="Job Listing";

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
				<div class="panel-title"><strong>Active Job Listing Panel</strong></div>
			</div>
			<div class="panel-body">
			
				<blockquote class="alert-default">
					Example:
				</blockquote>			
			
				<div class="well clearfix">
					<!--// JOB LISTING //-->
					<div class="panel job-listing">
						<div class="panel-body">
							<div class="col-md-4 col-sm-4">
								<h4><a href="#">Software Engineer</a></h4>
								<ul class="list-unstyled">
									<li>28 Candidates</li>
									<li>Post ended 02 Dec 2015</li>
								</ul>
								<!--// Action Menu //-->
								<ul class="nav nav-pills nav-action-menu">
									<li><a href="#">View</a></li>
									<li><a href="#">Edit</a></li>
									<li><a href="#">Deactivate</a></li>
								</ul>
								<!--// Action Menu End //-->
							</div>
							<div class="col-md-8 col-sm-8 hidden-xs">
								<!--// Job Applicants Info Menu //-->
								<ul class="nav nav-pills nav-apps-menu">
									<li><a href="#"><span class="fig">10</span> Unprocessed<span class="badge">5</span></a></li>
									<li><a href="#"><span class="fig">8</span> Shortlisted</a></li>
									<li><a href="#"><span class="fig">2</span> Interview</a></li>
								</ul>
								<!--// Job Applicants Info Menu End //-->
							</div>
						</div>
					</div>
					<!--// JOB LISTING END //-->				
				</div>
				<blockquote class="alert-default">
					Sample Code:
				</blockquote>		
				<pre class="well prettyprint"><input class="btn btn-info btnCopy" type="button" value="Copy" data-trigger="hover" data-toggle="tooltip" data-original-title="Copy to clipboard" data-placement="top"/><div class="code_content">
&lt;!--// JOB LISTING //--&gt;
&lt;div class=&quot;panel job-listing&quot;&gt;
  &lt;div class=&quot;panel-body&quot;&gt;
    &lt;div class=&quot;col-md-6 col-sm-4&quot;&gt;
      &lt;h4&gt;&lt;a href=&quot;#&quot;&gt;Software Engineer&lt;/a&gt;&lt;/h4&gt;
      &lt;ul class=&quot;list-unstyled&quot;&gt;
        &lt;li&gt;28 Candidates&lt;/li&gt;
        &lt;li&gt;Post ended 02 Dec 2015&lt;/li&gt;
      &lt;/ul&gt;
      &lt;!--// Action Menu //--&gt;
      &lt;ul class=&quot;nav nav-pills nav-action-menu&quot;&gt;
        &lt;li&gt;&lt;a href=&quot;#&quot;&gt;View&lt;/a&gt;&lt;/li&gt;
        &lt;li&gt;&lt;a href=&quot;#&quot;&gt;Edit&lt;/a&gt;&lt;/li&gt;
        &lt;li&gt;&lt;a href=&quot;#&quot;&gt;Deactivate&lt;/a&gt;&lt;/li&gt;
      &lt;/ul&gt;
      &lt;!--// Action Menu End //--&gt;
    &lt;/div&gt;
    &lt;div class=&quot;col-md-6 col-sm-8 hidden-xs&quot;&gt;
      &lt;!--// Job Applicants Info Menu //--&gt;
      &lt;ul class=&quot;nav nav-pills nav-apps-menu&quot;&gt;
        &lt;li&gt;&lt;a href=&quot;#&quot;&gt;&lt;span class=&quot;fig&quot;&gt;10&lt;/span&gt; Unprocessed&lt;span class=&quot;badge&quot;&gt;5&lt;/span&gt;&lt;/a&gt;&lt;/li&gt;
        &lt;li&gt;&lt;a href=&quot;#&quot;&gt;&lt;span class=&quot;fig&quot;&gt;8&lt;/span&gt; Shortlisted&lt;/a&gt;&lt;/li&gt;
        &lt;li&gt;&lt;a href=&quot;#&quot;&gt;&lt;span class=&quot;fig&quot;&gt;2&lt;/span&gt; Interview&lt;/a&gt;&lt;/li&gt;
      &lt;/ul&gt;
      &lt;!--// Job Applicants Info Menu End //--&gt;
    &lt;/div&gt;
  &lt;/div&gt;
&lt;/div&gt;
&lt;!--// JOB LISTING END //--&gt;
				</div></pre>	
			</div>
		</div>
				
		<div class="panel panel-default">
			<div class="panel-heading">
				<div class="panel-title"><strong>Inactive Job Listing Panel</strong></div>
			</div>
			<div class="panel-body">				
				<blockquote class="alert-default">
					Example:
				</blockquote>			
			
			
				<div class="panel panel-default">
					<div class="panel-body">
					<!--// JOB LISTING (Inactive) //-->
					<div class="panel job-listing inactive">
						<div class="panel-body">
							<div class="col-md-4 col-sm-4">
								<h4><a href="#">Technical Support</a> <small>- Expired</small></h4>
								<ul class="list-unstyled">
									<li>10 Candidates</li>
									<li>Post ended 10 Jan 2015</li>
								</ul>
								<!--// Action Menu //-->
								<ul class="nav nav-pills nav-action-menu">
									<li><a href="#">View</a></li>
									<li><a href="#">Repost</a></li>
								</ul>
								<!--// Action Menu End //-->
							</div>
							<div class="col-md-8 col-sm-8 hidden-xs">
								<!--// Job Applicants Info Menu //-->
								<ul class="nav nav-pills nav-apps-menu">
									<li><a href="#"><span class="fig">6</span> Unprocessed<span class="badge">5</span></a></li>
									<li><a href="#"><span class="fig">3</span> Shortlisted</a></li>
									<li><a href="#"><span class="fig">1</span> Interview</a></li>
								</ul>
								<!--// Job Applicants Info Menu End //-->
							</div>
						</div>
					</div>
					<!--// JOB LISTING END //-->	
					</div>
				</div>
				
				<blockquote class="alert-default">
					Sample Code:
				</blockquote>		
				<pre class="well prettyprint"><input class="btn btn-info btnCopy" type="button" value="Copy" data-trigger="hover" data-toggle="tooltip" data-original-title="Copy to clipboard" data-placement="top"/><div class="code_content">
&lt;!--// JOB LISTING (Inactive) //--&gt;
&lt;div class=&quot;panel job-listing inactive&quot;&gt;
  &lt;div class=&quot;panel-body&quot;&gt;
    &lt;div class=&quot;col-md-6 col-sm-4&quot;&gt;
      &lt;h4&gt;&lt;a href=&quot;#&quot;&gt;Technical Support&lt;/a&gt; &lt;small&gt;- Expired&lt;/small&gt;&lt;/h4&gt;
      &lt;ul class=&quot;list-unstyled&quot;&gt;
        &lt;li&gt;10 Candidates&lt;/li&gt;
        &lt;li&gt;Post ended 10 Jan 2015&lt;/li&gt;
      &lt;/ul&gt;
      &lt;!--// Action Menu //--&gt;
      &lt;ul class=&quot;nav nav-pills nav-action-menu&quot;&gt;
        &lt;li&gt;&lt;a href=&quot;#&quot;&gt;View&lt;/a&gt;&lt;/li&gt;
        &lt;li&gt;&lt;a href=&quot;#&quot;&gt;Repost&lt;/a&gt;&lt;/li&gt;
      &lt;/ul&gt;
      &lt;!--// Action Menu End //--&gt;
    &lt;/div&gt;
    &lt;div class=&quot;col-md-6 col-sm-8 hidden-xs&quot;&gt;
      &lt;!--// Job Applicants Info Menu //--&gt;
      &lt;ul class=&quot;nav nav-pills nav-apps-menu&quot;&gt;
        &lt;li&gt;&lt;a href=&quot;#&quot;&gt;&lt;span class=&quot;fig&quot;&gt;6&lt;/span&gt; Unprocessed&lt;span class=&quot;badge&quot;&gt;5&lt;/span&gt;&lt;/a&gt;&lt;/li&gt;
        &lt;li&gt;&lt;a href=&quot;#&quot;&gt;&lt;span class=&quot;fig&quot;&gt;3&lt;/span&gt; Shortlisted&lt;/a&gt;&lt;/li&gt;
        &lt;li&gt;&lt;a href=&quot;#&quot;&gt;&lt;span class=&quot;fig&quot;&gt;1&lt;/span&gt; Interview&lt;/a&gt;&lt;/li&gt;
      &lt;/ul&gt;
      &lt;!--// Job Applicants Info Menu End //--&gt;
    &lt;/div&gt;
  &lt;/div&gt;
&lt;/div&gt;
&lt;!--// JOB LISTING END //--&gt;
				</div></pre>
			</div>
		</div>
	
		<blockquote class="alert-success" role="alert">
			<h4>Demo</h4>
			<p>Demo page for the job-listing can be view in template section</p>
			<p><a class="btn btn-success" href="../siva/templates.php">Templates</a></p>
		</blockquote>
	</div>
</section>

<?php include("../includes/script.php");?>
</body>
</html>