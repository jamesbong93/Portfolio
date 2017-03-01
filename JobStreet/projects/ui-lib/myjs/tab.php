<?php
include("../includes/theme-data.php");
$theme="myjs";
$com="Tab";

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
		
		<!--===================================== Tabs title on center ===================================================-->
		<a name="tab-title-center" id="-title-center">&nbsp;</a>
		<h3 class="sub-title">Tab Title on center</h3>
		<div class="row">
			<div class="col-xs-12 col-md-7">
				<div class="panel panel-basic visible-xs">
					<div class="panel-header">
						<h4 class="panel-body collapsed" data-toggle="collapse" href="#collapseSearch" aria-expanded="false" aria-controls="collapseSearch1">LiNa Daily Jobs <span class="icon-caret-down pull-right"></span></h4>
					</div>
				</div>
				<div class="collapse not-sm not-md not-lg" id="collapseSearch">
					<div class="panel-tabs">
						<ul class="nav nav-tabs nav-line">
						  <li class="active"><a href="#linamatches" data-target="#linamatches, #linamatches_else" data-toggle="tab" >LiNa Job Matches (35)</a></li>
						  <li><a href="#linasuggestion" data-target="#linasuggestion, #linasuggestion_else" data-toggle="tab">Suggestions (2)</a></li>
						  <li><a href="#savedjob" data-target="#savedjob, #savedjob_else" data-toggle="tab">My Saved Jobs (2)</a></li>
						</ul>
					</div>
					<div class="tab-content">
						<div class="tab-pane toolbar-pane fade in active" id="linamatches">
							<div class="row">
								<div class="col-xs-12 col-sm-3">									  
									<select class="form-control">
									  <option value="1">My LiNa Profile</option>
									  <option value="2">My LiNa Profile 2</option>
									  <option value="3">Create New...</option>
									</select>
								</div>
								<div class="col-xs-12 col-sm-9">                                     									
									<div class="text text-right text-left-xs">
										Based on your <a id="updateprofile" href="../www/lina-profile.html"><span class="icon-gear"></span>Preference</a>&nbsp;&nbsp;and&nbsp;&nbsp;<a id="updatesalary" href="#" data-toggle="modal" data-original-title="Update your Expected Salary" data-delay="5" data-target="#modal-update-salary" ><i class="icon-dollar-sign"></i>Expected Salary</a>
									</div>
								</div>
							</div>								
						</div>
						<div class="tab-pane toolbar-pane fade" id="linasuggestion">
							<div class="text">
								Additional jobs suggested based on your resume and browsing history...
							</div>
						</div>
						<div class="tab-pane toolbar-pane fade" id="savedjob">
							<div class="text">
								Jobs you have saved (Applied jobs/ closed jobs would be automatically removed from the list)
							</div>
						</div>
					</div>
				</div><br>
			</div>
		</div>
		<div class="panel">
			<div class="panel-body">
				<blockquote class="alert-default">
					<p>Show LiNa Daily Jobs dropdown button in Mobile view.</p>
				</blockquote>
				<pre class="well prettyprint">
					<input class="btn btn-info btnCopy" type="button" value="Copy" data-trigger="hover" data-toggle="tooltip" data-original-title="Copy to clipboard" data-placement="top"/><div class="code_content">
&lt;div class=&quot;panel panel-basic visible-xs&quot;&gt;
  &lt;div class=&quot;panel-header&quot;&gt;
    &lt;h4 class=&quot;panel-body collapsed&quot; data-toggle=&quot;collapse&quot; href=&quot;#collapseSearch&quot; aria-controls=&quot;collapseSearch&quot;&gt;LiNa Daily Jobs &lt;span class=&quot;icon-caret-down pull-right&quot;&gt;&lt;/span&gt;&lt;/h4&gt;
  &lt;/div&gt;
&lt;/div&gt;</div></pre>
				<h5><code>panel-tabs</code> Align tab bar to center.  </h5>
				<h5><code>nav-line</code> Add a bottom border to the tab content.</h5>
				<pre class="well prettyprint">
					<input class="btn btn-info btnCopy" type="button" value="Copy" data-trigger="hover" data-toggle="tooltip" data-original-title="Copy to clipboard" data-placement="top"/><div class="code_content">
&lt;div class=&quot;collapse not-sm not-md not-lg&quot; id=&quot;collapseSearch&quot;&gt;
  &lt;div class=&quot;panel-tabs&quot;&gt;
    &lt;ul class=&quot;nav nav-tabs nav-line&quot;&gt;
      &lt;li class=&quot;active&quot;&gt;&lt;a href=&quot;#linasuggestion&quot; data-target=&quot;#linasuggestion,#linasuggestion_else&quot; data-toggle=&quot;tab&quot;&gt;Suggestions (2)&lt;/a&gt;&lt;/li&gt;
      &lt;li&gt;&lt;a href=&quot;#savedjob&quot; data-toggle=&quot;tab&quot;&gt;My Saved Jobs (2)&lt;/a&gt;&lt;/li&gt;
    &lt;/ul&gt;
  &lt;/div&gt;
  &lt;div class=&quot;tab-content&quot;&gt;
    &lt;div class=&quot;tab-pane toolbar-pane fade in active&quot; id=&quot;linasuggestion&quot;&gt;
      &lt;div class=&quot;text&quot;&gt;
        Additional jobs suggested based on your resume and browsing history...
      &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class=&quot;tab-pane toolbar-pane fade&quot; id=&quot;savedjob&quot;&gt;
      &lt;div class=&quot;text&quot;&gt;
        Jobs you have saved (Applied jobs/ closed jobs would be automatically removed from the list)
      &lt;/div&gt;
    &lt;/div&gt;
  &lt;/div&gt;
&lt;/div&gt;</div></pre>
				<blockquote class="alert-success" role="alert">
					<h4 class="text-success">Source Code</h4>
					<p>Source code for tab title on center can be download here.</p>
					<p><a href="myjs/source-code/tab-title-center.html" class="btn btn-success" download>Download</a></p>
				</blockquote>	
			</div>
		</div>
		<a name="tab-title-left" id="tab-title-left">&nbsp;</a>
		<h3 class="sub-title">Tab Title on left</h3>
			<!--======================================Tabs title on left====================================================-->
			<div class="row">
				<div class="col-xs-12 col-md-7">
					<div class="panel-tabs text-left hidden-xs">
						<div class="col-sm-10">
							<ul class="nav nav-tabs nav-line">
							  <li class="active"><a href="#"  data-toggle="tab" >All Jobs</a></li>
							  <li><a href="#" data-toggle="tab">Direct Employers</a></li>
							  <li><a href="#" data-toggle="tab">Recruitment Firms</a></li>
							</ul>
							<div class="pull-right">
								<a href="http://job-search-dev.jobstreet.com.my/malaysia/job-opening.php?area=1&amp;option=1&amp;job-source=1%2C64&amp;classified=1&amp;job-posted=0&amp;src=46&amp;pg=1&amp;sort=1&amp;order=1&amp;srcr=1" title="Change sort order" rel="nofollow"><span class="icon-alpha-desc"></span></a>	   
							</div>
						</div>
						<div class="col-sm-2 pull-right">                            
							<select class="form-control" id="sort_result" onchange="window.location=this.value">
								<option value="http://job-search-dev.jobstreet.com.my/malaysia/job-opening.php?area=1&amp;option=1&amp;job-source=1%2C64&amp;classified=1&amp;job-posted=0&amp;src=46&amp;pg=1&amp;sort=1&amp;order=1&amp;srcr=1" selected="selected">Date</option>
								<option value="http://job-search-dev.jobstreet.com.my/malaysia/job-opening.php?area=1&amp;option=1&amp;job-source=1%2C64&amp;classified=1&amp;job-posted=0&amp;src=46&amp;pg=1&amp;sort=3&amp;order=1&amp;srcr=1">Job Title</option>
								<option value="http://job-search-dev.jobstreet.com.my/malaysia/job-opening.php?area=1&amp;option=1&amp;job-source=1%2C64&amp;classified=1&amp;job-posted=0&amp;src=46&amp;pg=1&amp;sort=4&amp;order=1&amp;srcr=1">Company</option>
								<option value="http://job-search-dev.jobstreet.com.my/malaysia/job-opening.php?area=1&amp;option=1&amp;job-source=1%2C64&amp;classified=1&amp;job-posted=0&amp;src=46&amp;pg=1&amp;sort=6&amp;order=0&amp;srcr=1">Salary</option>
								<option value="http://job-search-dev.jobstreet.com.my/malaysia/job-opening.php?area=1&amp;option=1&amp;job-source=1%2C64&amp;classified=1&amp;job-posted=0&amp;src=46&amp;pg=1&amp;sort=7&amp;order=1&amp;srcr=1">Location</option>
							</select>
						</div>
					</div>
				</div>
			</div><br>
			<div class="panel">
				<div class="panel-body">
					<blockquote class="alert-default">
						<p>This tab will be hidden in Mobile view.</p>
					</blockquote>
				<h5><code>nav-line</code> Add a bottom border to the tab content.</h5>
				<pre class="well prettyprint">
					<input class="btn btn-info btnCopy" type="button" value="Copy" data-trigger="hover" data-toggle="tooltip" data-original-title="Copy to clipboard" data-placement="top"/><div class="code_content">
&lt;div class=&quot;panel-tabs text-left hidden-xs&quot;&gt;
  &lt;div class=&quot;col-sm-10&quot;&gt;
    &lt;ul class=&quot;nav nav-tabs nav-line&quot;&gt;
      &lt;li class=&quot;active&quot;&gt;&lt;a href=&quot;#&quot;  data-toggle=&quot;tab&quot; &gt;All Jobs&lt;/a&gt;&lt;/li&gt;
      &lt;li&gt;&lt;a href=&quot;#&quot; data-toggle=&quot;tab&quot;&gt;Direct Employers&lt;/a&gt;&lt;/li&gt;
      &lt;li&gt;&lt;a href=&quot;#&quot; data-toggle=&quot;tab&quot;&gt;Recruitment Firms&lt;/a&gt;&lt;/li&gt;
    &lt;/ul&gt;
    &lt;div class=&quot;pull-right&quot;&gt;
      &lt;a href=&quot;...&quot; title=&quot;Change sort order&quot; rel=&quot;nofollow&quot;&gt;&lt;span class=&quot;icon-alpha-desc&quot;&gt;&lt;/span&gt;&lt;/a&gt;	   
    &lt;/div&gt;
  &lt;/div&gt;
  &lt;div class=&quot;col-sm-2 pull-right&quot;&gt;
    &lt;select class=&quot;form-control&quot; onchange=&quot;window.location=this.value&quot;&gt;
      &lt;option value=&quot;...&quot; selected=&quot;selected&quot;&gt;Date&lt;/option&gt;
      &lt;option value=&quot;...&quot;&gt;Job Title&lt;/option&gt;
      &lt;option value=&quot;...&quot;&gt;Company&lt;/option&gt;
      &lt;option value=&quot;....&quot;&gt;Salary&lt;/option&gt;
      &lt;option value=....&quot;&gt;Location&lt;/option&gt;
    &lt;/select&gt;
  &lt;/div&gt;
&lt;/div&gt;</pre>
					<blockquote class="alert-success" role="alert">
						<h4 class="text-success">Source Code</h4>
						<p>Source code for tab title on left can be download here.</p>
						<p><a href="myjs/source-code/tab-title-left.html" class="btn btn-success" download>Download</a></p>
					</blockquote>	
				</div>
			</div>
		</div>
</section>

<?php include("../includes/script.php");?>
</body>
</html>