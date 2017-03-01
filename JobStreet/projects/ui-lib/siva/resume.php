<?php
include("../includes/theme-data.php");
$theme="siva";
$com="Resume";

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
		<!---- Primary Panel for Job Ads ----->
		<div class="panel panel-default">
			<div class="panel-heading">
				<div class="panel-title"><strong>Primary Panel for Job Ads</strong></div>
			</div>
			<div class="panel-body">
			
				<blockquote class="alert-default">
					<h5>The body of the resume is made of <code>panel-group</code> and <code>panel-basic</code>.</h5>
					<h5>The first <code>panel-basic</code> will include <code>resume-primary</code> to have a slightly different style than other <code>panel-basic</code>.</h5>
				</blockquote>			
			
				<div class="well clearfix">
					<div class="col-md-10 col-xs-12">
						<div class="cards x2">
							<div class="panel-group resume">
								<div class="panel panel-basic resume-primary">
									<div class="panel-body">
										<div class="btn-close"><span class="icon-close"></span></div>
										<div class="media">
											<div class="media-left">
												<div class="thumbnail thumbnail-no-photo"></div>
											</div>
											<div class="media-body">
												<div class="col-sm-5 col-md-6">
													<div class="primary">
														<h4 class="title">Muhammad Hafiz</h4>
														<div class="info"><span class="text">Software Engineer</span><span class="fig">(5 years)</span></div>
														<div class="info no-fig"><span class="text">JobStreet.com Sdn Bhd</span></div>
													</div>
												</div>
												<div class="col-xs-12 col-sm-7 col-md-6">
													<div class="panel-action pull-right">
														<div class="info text-right hidden-xs">
															<span><label>last updated:</label> 3 months</span>
															<span><label>last active:</label> 2 months</span>
														</div>
														<div class="btn-group hidden-xs">
															<a type="button" class="btn btn-sm btn-pale">Shortlist</a>
															<a type="button" class="btn btn-sm btn-pale">Interview</a>
															<a type="button" class="btn btn-sm btn-pale">Not Suitable</a>
															<a type="button" class="btn btn-sm btn-pale dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
																<span class="icon-ellipsis-v"></span>
																<span class="sr-only">Toggle Dropdown</span>
															</a>
															<ul class="dropdown-menu dropdown-menu-right" role="menu">
																<li><a href="#">Add Comments</a></li>
																<li><a href="#">Blacklist</a></li>
																<li class="divider"></li>
																<li><a href="#">Print</a></li>
																<li><a href="#">Download</a></li>
															</ul>
														</div>
													</div>
												</div>
												<div class="col-sm-12">
													<ul class="info-list list-inline hidden-xs">
														<li><span class="icon-phone"></span> (+60)12 5553344</li>
														<li><span class="icon-envelope"></span> longusernamedisplay@email.com</li>
														<li><span class="icon-dollar-sign"></span> 3,600</li>
														<li><span class="icon-location"></span> Petaling Jaya, Selangor </li>
													</ul>    
												</div>
											</div>
										</div>
									</div>
									<div class="btn-group btn-group-justified visible-xs">
										<a type="button" class="btn btn-pale">Shortlist</a>
										<a type="button" class="btn btn-pale">Interview</a>
										<a type="button" class="btn btn-pale">Not Suitable</a>
										<a type="button" class="btn btn-pale dropdown-toggle btn-last" data-toggle="dropdown" aria-expanded="false">
											<span class="caret"></span>
											<span class="sr-only">Toggle Dropdown</span>
										</a>
										<ul class="dropdown-menu dropdown-menu-right" role="menu">
											<li><a href="#">Add Comments</a></li>
											<li><a href="#">Blacklist</a></li>
											<li class="divider"></li>
											<li><a href="#">Print</a></li>
											<li><a href="#">Download</a></li>
										</ul>
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
&lt;div class=&quot;cards x2&quot;&gt;				
&lt;div class=&quot;panel-group resume&quot;&gt;
  &lt;!-- Start Primary Panel --&gt;
  &lt;div class=&quot;panel panel-basic resume-primary&quot;&gt;
    &lt;div class=&quot;panel-body&quot;&gt;
      &lt;div class=&quot;btn-close&quot;&gt;&lt;span class=&quot;icon-close&quot;&gt;&lt;/span&gt;&lt;/div&gt;
      &lt;div class=&quot;media&quot;&gt;
        &lt;div class=&quot;media-left&quot;&gt;
          &lt;div class=&quot;thumbnail thumbnail-no-photo&quot;&gt;&lt;/div&gt;
        &lt;/div&gt;
        &lt;div class=&quot;media-body&quot;&gt;
          &lt;div class=&quot;col-sm-5 col-md-6&quot;&gt;
            &lt;div class=&quot;primary&quot;&gt;
              &lt;h4 class=&quot;title&quot;&gt;Name&lt;/h4&gt;
              &lt;div class=&quot;info&quot;&gt;&lt;span class=&quot;text&quot;&gt;Title&lt;/span&gt;&lt;span class=&quot;fig&quot;&gt;(year)&lt;/span&gt;&lt;/div&gt;
              &lt;div class=&quot;info no-fig&quot;&gt;&lt;span class=&quot;text&quot;&gt;Company&lt;/span&gt;&lt;/div&gt;
            &lt;/div&gt;
          &lt;/div&gt;
          &lt;div class=&quot;col-xs-12 col-sm-7 col-md-6&quot;&gt;
            &lt;div class=&quot;panel-action pull-right&quot;&gt;
              &lt;div class=&quot;info text-right hidden-xs&quot;&gt;
                &lt;span&gt;&lt;label&gt;last updated:&lt;/label&gt; month&lt;/span&gt;
                &lt;span&gt;&lt;label&gt;last active:&lt;/label&gt; month&lt;/span&gt;
              &lt;/div&gt;
              &lt;div class=&quot;btn-group hidden-xs&quot;&gt;
                &lt;a type=&quot;button&quot; class=&quot;btn btn-sm btn-pale&quot;&gt;Shortlist&lt;/a&gt;
                &lt;a type=&quot;button&quot; class=&quot;btn btn-sm btn-pale&quot;&gt;Interview&lt;/a&gt;
                &lt;a type=&quot;button&quot; class=&quot;btn btn-sm btn-pale dropdown-toggle&quot; data-toggle=&quot;dropdown&quot; aria-expanded=&quot;false&quot;&gt;
                &lt;span class=&quot;icon-ellipsis-v&quot;&gt;&lt;/span&gt;
                &lt;span class=&quot;sr-only&quot;&gt;Toggle Dropdown&lt;/span&gt;
                &lt;/a&gt;
              &lt;/div&gt;
            &lt;/div&gt;
          &lt;/div&gt;
          &lt;div class=&quot;col-sm-12&quot;&gt;
            &lt;ul class=&quot;info-list list-inline hidden-xs&quot;&gt;
              &lt;li&gt;&lt;span class=&quot;icon-phone&quot;&gt;&lt;/span&gt;email&lt;/li&gt;
              &lt;li&gt;&lt;span class=&quot;icon-envelope&quot;&gt;&lt;/span&gt;phone&lt;/li&gt;
            &lt;/ul&gt;
          &lt;/div&gt;
        &lt;/div&gt;
      &lt;/div&gt;
    &lt;/div&gt;
    &lt;!-- Only visible in mobile view --&gt;
    &lt;div class=&quot;btn-group btn-group-justified visible-xs&quot;&gt;
      &lt;a type=&quot;button&quot; class=&quot;btn btn-pale&quot;&gt;...&lt;/a&gt;
      &lt;a type=&quot;button&quot; class=&quot;btn btn-pale&quot;&gt;...&lt;/a&gt;
      &lt;a type=&quot;button&quot; class=&quot;btn btn-pale dropdown-toggle btn-last&quot; data-toggle=&quot;dropdown&quot; aria-expanded=&quot;false&quot;&gt;
      &lt;span class=&quot;caret&quot;&gt;&lt;/span&gt;
      &lt;/a&gt;
    &lt;/div&gt;
  &lt;/div&gt;
  &lt;!-- End Primary Panel --&gt;
&lt;/div&gt;
&lt;/div&gt;
				</div></pre>
				<blockquote class="alert-success" role="alert">
					<h4>Demo File</h4>
					<p>Demo and source code of the resume can be download here.</p>
					<p><a class="btn btn-success" href="../examples/siva/resume.html" download>Download</a></p>
				</blockquote>				
			</div>
		</div>
				
		<!---- Primary Panel for Talent Search ----->
		<div class="panel panel-default">
			<div class="panel-heading">
				<div class="panel-title"><strong>Primary Panel for Talent Search</strong></div>
			</div>
			<div class="panel-body">
			
				<div class="well clearfix">
					<div class="col-md-10 col-xs-12">
						<div class="cards x2">
							<div class="panel-group resume">
								<div class="panel panel-basic resume-primary">
									<div class="panel-body">
										<div class="btn-close"><span class="icon-close"></span></div>
										<div class="media no-photo">
											<div class="media-body">
												<div class="col-sm-5 col-md-6">
													<div class="primary">
														<h4 class="title">Software Engineer (3 yrs)</h4>
														<div class="info"><span class="text">Yahoo! Malaysia</span></div>
													</div>
												</div>
												<div class="col-xs-12 col-sm-7 col-md-6">
													<div class="panel-action pull-right">
														<div class="info text-right hidden-xs">
															<span><label>last updated:</label> 3 months</span>
															<span><label>last active:</label> 2 months</span>
														</div>
														<div class="btn-group pull-right hidden-xs">
															<a type="button" class="btn btn-sm btn-pale">Retrieve Resume</a>
															<a type="button" class="btn btn-sm btn-pale btn-spin btn-disabled"><span class="spinner"></span>Processing...</a>
															<a type="button" class="btn btn-sm btn-pale btn-disabled">Retrieve Resume</a>
														</div>
													</div>
												</div>
												<div class="col-sm-12">
													<ul class="info-list list-inline hidden-xs">
														<li><span class="icon-phone"></span> <img src="//dna.jsstatic.com/img/blur-text.png"></li>
														<li><span class="icon-envelope"></span> <img src="//dna.jsstatic.com/img/blur-text.png"></li>
														<li><span class="icon-dollar-sign"></span> 3,600</li>
														<li><span class="icon-location"></span> Petaling Jaya, Selangor </li>
													</ul>    
												</div>
											</div>
										</div>
									</div>
									<div class="btn-group btn-group-justified visible-xs">
										<a type="button" class="btn btn-sm btn-pale">Retrieve Resume</a>
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
&lt;div class=&quot;cards x2&quot;&gt;
&lt;div class=&quot;panel-group resume&quot;&gt;
  &lt;!-- Start Primary panel --&gt;
  &lt;div class=&quot;panel panel-basic resume-primary&quot;&gt;
    &lt;div class=&quot;panel-body&quot;&gt;
      &lt;div class=&quot;btn-close&quot; &gt;&lt;span class=&quot;icon-close&quot;&gt;&lt;/span&gt;&lt;/div&gt;
      &lt;div class=&quot;media no-photo&quot;&gt;
        &lt;div class=&quot;media-body&quot;&gt;
          &lt;div class=&quot;col-sm-5 col-md-6&quot;&gt;
            &lt;div class=&quot;primary&quot;&gt;
              &lt;h4 class=&quot;title&quot;&gt;Title (year)&lt;/h4&gt;
              &lt;div class=&quot;info&quot;&gt;&lt;span class=&quot;text&quot;&gt;Company&lt;/span&gt;&lt;/div&gt;
            &lt;/div&gt;
          &lt;/div&gt;
          &lt;div class=&quot;col-xs-12 col-sm-7 col-md-6&quot;&gt;
            &lt;div class=&quot;panel-action pull-right&quot;&gt;
              &lt;div class=&quot;info text-right hidden-xs&quot;&gt;
                &lt;span&gt;&lt;label&gt;last updated:&lt;/label&gt; month&lt;/span&gt;
                &lt;span&gt;&lt;label&gt;last active:&lt;/label&gt; month&lt;/span&gt;
              &lt;/div&gt;
              &lt;div class=&quot;btn-group pull-right hidden-xs&quot;&gt;
                &lt;a type=&quot;button&quot; class=&quot;btn btn-sm btn-pale&quot;&gt;Retrieve Resume&lt;/a&gt;
                &lt;a type=&quot;button&quot; class=&quot;btn btn-sm btn-pale btn-spin btn-disabled&quot;&gt;&lt;span class=&quot;spinner&quot;&gt;&lt;/span&gt;Processing...&lt;/a&gt;
              &lt;/div&gt;
            &lt;/div&gt;
          &lt;/div&gt;
          &lt;div class=&quot;col-sm-12&quot;&gt;
            &lt;ul class=&quot;info-list list-inline hidden-xs&quot;&gt;
              &lt;li&gt;&lt;span class=&quot;icon-phone&quot;&gt;&lt;/span&gt; &lt;img src=&quot;//dna.jsstatic.com/img/blur-text.png&quot;&gt;&lt;/li&gt;
              &lt;li&gt;&lt;span class=&quot;icon-dollar-sign&quot;&gt;&lt;/span&gt; salary&lt;/li&gt;
            &lt;/ul&gt;
          &lt;/div&gt;
        &lt;/div&gt;
      &lt;/div&gt;
    &lt;/div&gt;
    &lt;!-- Only visible in mobile view --&gt;
    &lt;div class=&quot;btn-group btn-group-justified visible-xs&quot;&gt;
      &lt;a type=&quot;button&quot; class=&quot;btn btn-sm btn-pale&quot;&gt;Retrieve Resume&lt;/a&gt;
    &lt;/div&gt;
  &lt;/div&gt;
  &lt;!-- End Primary panel --&gt;
&lt;/div&gt;
&lt;/div&gt;
				</div></pre>
				<blockquote class="alert-success" role="alert">
					<h4>Demo File</h4>
					<p>Demo and source code of the resume (Talent Search) can be download here.</p>
					<p><a class="btn btn-success" href="../examples/siva/resume-talent-search.html" download>Download</a></p>
				</blockquote>				
			</div>
		</div>
		
		<!---- Primary Panel for Talent Search (Retrieved)----->
		<div class="panel panel-default">
			<div class="panel-heading">
				<div class="panel-title"><strong>Primary Panel for Talent Search (Retrieved)</strong></div>
			</div>
			<div class="panel-body">
				<blockquote class="alert-default">
					<h5>The primary panel for talent search (Retrieved) included <code>retrieved</code> class. </h5>
					<h5>The first <code>panel-basic</code> will include <code>retrieved</code> class to have a slightly different style.</h5>
				</blockquote>		
				<div class="well clearfix">
					<div class="col-md-10 col-xs-12">
						<div class="cards x2">
							<div class="panel-group resume">
								<div class="panel panel-basic resume-primary retrieved">
									<div class="panel-body">
										<div class="btn-close"><span class="icon-close"></span></div>
										<div class="media">
											<div class="media-left">
												<div class="thumbnail thumbnail-no-photo"></div>
											</div>
											<div class="media-body">
												<div class="col-sm-5 col-md-6">
													<div class="primary">
														<h4 class="title">Muhammad Hafiz</h4>
														<div class="info"><span class="text">Software Engineer</span><span class="fig">(5 years)</span></div>
														<div class="info no-fig"><span class="text">JobStreet.com Sdn Bhd</span></div>
													</div>
												</div>
												<div class="col-xs-12 col-sm-7 col-md-6">
													<div class="panel-action pull-right">
														<div class="info text-right hidden-xs">
															<span><label>last updated:</label> 3 months</span>
															<span><label>last active:</label> 2 months</span>
														</div>
														<div class="info sub-info text-right hidden-xs">
															<div><span><label>Retrieved by Muhammad Nazwan</label></span></div>
															<span>03 Feb 2015 10:02AM</span>
														</div>
														<div class="btn-group pull-right hidden-xs">
															<a type="button" class="btn btn-pale">Download</a>
														</div>

													</div>
												</div>
												<div class="col-sm-10">
													<ul class="info-list list-inline hidden-xs">
														<li><span class="icon-phone"></span> (+60)12 5553344</li>
														<li><span class="icon-envelope"></span> longnamedisplay@email.com</li>
														<li><span class="icon-dollar-sign"></span> 3,600</li>
														<li><span class="icon-location"></span> Petaling Jaya, Selangor </li>
													</ul>    
												</div>
												<div class="btn-group btn-group-justified visible-xs">
													<a type="button" class="btn btn-sm btn-pale">Download</a>
												</div>
											</div>
										</div>
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
&lt;div class=&quot;cards x2&quot;&gt;
&lt;div class=&quot;panel-group resume&quot;&gt;
  &lt;div class=&quot;panel panel-basic resume-primary retrieved&quot;&gt;
    &lt;div class=&quot;panel-body&quot;&gt;
      &lt;div class=&quot;btn-close&quot; style=&quot;padding-right:23px&quot;&gt;&lt;span class=&quot;icon-close&quot;&gt;&lt;/span&gt;&lt;/div&gt;
      &lt;div class=&quot;media&quot;&gt;
        &lt;div class=&quot;media-left&quot;&gt;
          &lt;div class=&quot;thumbnail thumbnail-no-photo&quot;&gt;&lt;/div&gt;
        &lt;/div&gt;
        &lt;div class=&quot;media-body&quot;&gt;
          &lt;div class=&quot;col-sm-5 col-md-6&quot;&gt;
            &lt;div class=&quot;primary&quot;&gt;
              &lt;h4 class=&quot;title&quot;&gt;Name&lt;/h4&gt;
              &lt;div class=&quot;info&quot;&gt;&lt;span class=&quot;text&quot;&gt;Title&lt;/span&gt;&lt;span class=&quot;fig&quot;&gt;(year)&lt;/span&gt;&lt;/div&gt;
              &lt;div class=&quot;info no-fig&quot;&gt;&lt;span class=&quot;text&quot;&gt;Company&lt;/span&gt;&lt;/div&gt;
            &lt;/div&gt;
          &lt;/div&gt;
          &lt;div class=&quot;col-xs-12 col-sm-7 col-md-6&quot;&gt;
            &lt;div class=&quot;panel-action pull-right&quot;&gt;
              &lt;div class=&quot;info text-right hidden-xs&quot;&gt;
                &lt;span&gt;&lt;label&gt;last updated:&lt;/label&gt; month&lt;/span&gt;
                &lt;span&gt;&lt;label&gt;last active:&lt;/label&gt; month&lt;/span&gt;
              &lt;/div&gt;
              &lt;div class=&quot;info sub-info text-right hidden-xs&quot;&gt;
                &lt;div&gt;&lt;span&gt;&lt;label&gt;Retrieved by Employer Name&lt;/label&gt;&lt;/span&gt;&lt;/div&gt;
                &lt;span&gt;Date Time&lt;/span&gt;
              &lt;/div&gt;
              &lt;div class=&quot;btn-group pull-right hidden-xs&quot;&gt;
                &lt;a type=&quot;button&quot; class=&quot;btn btn-pale&quot;&gt;Download&lt;/a&gt;
              &lt;/div&gt;
            &lt;/div&gt;
          &lt;/div&gt;
          &lt;div class=&quot;col-sm-10&quot;&gt;
            &lt;ul class=&quot;info-list list-inline hidden-xs&quot;&gt;
              &lt;li&gt;&lt;span class=&quot;icon-phone&quot;&gt;&lt;/span&gt; phone&lt;/li&gt;
              &lt;li&gt;&lt;span class=&quot;icon-envelope&quot;&gt;&lt;/span&gt; email&lt;/li&gt;
            &lt;/ul&gt;
          &lt;/div&gt;
          &lt;div class=&quot;btn-group btn-group-justified visible-xs&quot;&gt;
            &lt;a type=&quot;button&quot; class=&quot;btn btn-sm btn-pale&quot;&gt;Download&lt;/a&gt;
          &lt;/div&gt;
        &lt;/div&gt;
      &lt;/div&gt;
    &lt;/div&gt;
  &lt;/div&gt;
&lt;/div&gt;
&lt;/div&gt;
				</div></pre>	
				<blockquote class="alert-success" role="alert">
					<h4>Demo File</h4>
					<p>Demo and source code of the resume for retrieved  (Talent Search) can be download here.</p>
					<p><a class="btn btn-success" href="../examples/siva/resume-for-retrieved-talent-search.html" download>Download</a></p>
				</blockquote>	
			</div>
		</div>
		
		<!---- Sub Panel ----->
		<div class="panel panel-default">
			<div class="panel-heading">
				<div class="panel-title"><strong>Sub Panel</strong></div>
			</div>
			<div class="panel-body">
				<blockquote class="alert-default">
					<h5>The info list of the candidate will display here instead of in primary panel when in mobile view. </h5>
					<h5>Use <code>cards</code> as root and <code>panel-group</code> to group multiple <code>panel-basic</code> together.</h5>
				</blockquote>		
				<div class="well clearfix">
					<div class="col-md-10 col-xs-12">
						<div class="cards x2">
							<div class="panel-group resume">
								<div class="resume-content">
								<a href="javascript:;" class="btn-attached hidden-xs">
									<i class="icon-paper-clip"></i><small>Uploaded Resume</small>
								</a>	
								<div class="panel panel-basic visible-xs">
									<div class="panel-body">
										<ul class="info-list">
											<li><span class="icon-phone"></span> (+60)12 5553344</li>
											<li><span class="icon-envelope"></span> longusernamedisplay@email.com</li>
											<li><span class="icon-dollar-sign"></span> 3,600</li>
											<li><span class="icon-location"></span> Petaling Jaya, Selangor </li>
										</ul>    
									</div>
								</div>
								
								<div class="panel panel-basic">
									<div class="panel-header">
										<h4>
											<span class="icon-briefcase"></span>
											<span>Experience</span>
										</h4>
									</div>
									<div class="panel-body">
										<div class="row">
											<h5 class="col-sm-12">5 years of total experience</h5>
										</div>
										<div class="row resume-item">
											<div class="col-xs-12 col-sm-3 hidden-xs">
												<div>Jan 2013 - Present </div>
												<div class="fig">1 year 10 months</div>
											</div>
											<div class="col-xs-12 col-sm-9">
												<h4 class="title">
													Senior Software Engineer
												</h4>
												<div class="key-info">
													<span>Mastek MSC SDN BHD</span>
													<span>| </span>
													<span>Ang Mo Kio, Singapore</span>
												</div>
												<div class="info visible-xs">Jan 2013 - Present <span class="fig">(1 year 10 months)</span></div>
												<div class="info-table">
													<div class="row">
														<label class="col-xs-4 col-sm-3">Industry</label>
														<span class="info">Aerospace / Aviation / Airline</span>
													</div>
													<div class="row">
														<label class="col-xs-4 col-sm-3">Specialization</label>
														<span class="info">Arts/Creative/Graphics Design</span>
													</div>
													<div class="row">
														<label class="col-xs-4 col-sm-3">Role</label>
														<span class="info">Desktop Publishing Artist</span>
													</div>
													<div class="row">
														<label class="col-xs-4 col-sm-3">Position Level</label>
														<span class="info">Senior Executive</span>
													</div>
													<div class="row">
														<label class="col-xs-4 col-sm-3">Monthly Salary</label>
														<span class="info">MYR 3,200</span>
													</div>
													
												</div>
												<div class="sub-info">
													Training Modules Design and Development. Currently working on the development of Entrepreneur Graduate Career Accelerated Programme modules.<br>
													Contributed in the development of corporate training modules for SMECorp.
												</div>
											</div>
										</div>
									</div>
								</div>
								
								<div class="panel panel-basic">
									<div class="panel-header">
										<h4>
											<span class="icon-education"></span>
											<span>Education</span>
										</h4>
									</div>
									<div class="panel-body">
										<div class="row resume-item">
											<div class="col-xs-12 col-sm-3 hidden-xs">
												<div>May 2013</div>
											</div>
											<div class="col-xs-12 col-sm-9">
												<h4 class="title">
													Universiti Kebangsaan Malaysia (UKM)
												</h4>
												<div class="key-info">
													<span>Bachelor's Degree in Finance/Accountancy/Banking</span>
													<span>| </span>
													<span>Malaysia</span>
												</div>
												<div class="info visible-xs">May 2013</div>
												<div class="info-table">
													<div class="row">
														<label class="col-xs-4 col-sm-2">Major</label>
														<div class="info">Finance</div>
													</div>
													<div class="row">
														<label class="col-xs-4 col-sm-2">Grade</label>
														<div class="info">1st Class</div>
													</div>
												</div>
												<div class="sub-info">
													Education in its general sense is a form of learning in which the knowledge, skills, values, beliefs and habits of a group of people are transferred from one generation to the next through storytelling.
												</div>
											</div>
										</div>
									
									</div>
								</div>
								
								<div class="panel panel-basic">
									<div class="panel-header">
										<h4>
											<span class="icon-math-compass"></span>
											<span>Skills</span>
										</h4>
									</div>
									<div class="panel-body">
										<div class="row">
											<div class="col-xs-12">
												<div class="info-table">
													<div class="row x2">
														<label class="col-xs-12 col-sm-3">Advanced</label>
														<div class="col-xs-12 col-sm-9 info">Adobe Photoshop, Adobe Dreamweaver, CorelDRAW, Project Management</div>
													</div>
													<div class="row x2">
														<label class="col-xs-12 col-sm-3">Intermediate</label>
														<div class="col-xs-12 col-sm-9 info">Auto CAD, Auto Desk 3D MAX</div>
													</div>
													<div class="row">
														<label class="col-xs-12 col-sm-3">Beginner</label>
														<div class="col-xs-12 col-sm-9 info">Vegas Pro</div>
													</div>
												</div>
											</div>
										</div>
									</div>
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
&lt;div class=&quot;cards x2&quot;&gt;
  &lt;div class=&quot;panel-group resume&quot;&gt;
    &lt;div class=&quot;resume-content&quot;&gt;
      &lt;!-- Show or hidden in top right --&gt;
      &lt;a href=&quot;javascript:;&quot; class=&quot;btn-attached hidden-xs&quot;&gt;
      &lt;i class=&quot;icon-paper-clip&quot;&gt;&lt;/i&gt;&lt;small&gt;Uploaded Resume&lt;/small&gt;
      &lt;/a&gt;
      &lt;!-- Show candidate info when in mobile view --&gt;
      &lt;div class=&quot;panel panel-basic visible-xs&quot;&gt;
        &lt;div class=&quot;panel-body&quot;&gt;
          &lt;ul class=&quot;info-list&quot;&gt;
            &lt;li&gt;&lt;span class=&quot;icon-phone&quot;&gt;&lt;/span&gt; phone&lt;/li&gt;
            &lt;li&gt;&lt;span class=&quot;icon-envelope&quot;&gt;&lt;/span&gt; email&lt;/li&gt;
          &lt;/ul&gt;
        &lt;/div&gt;
      &lt;/div&gt;
      &lt;div class=&quot;panel panel-basic&quot;&gt;
        &lt;div class=&quot;panel-header&quot;&gt;
          &lt;h4&gt;
            &lt;span class=&quot;icon-briefcase&quot;&gt;&lt;/span&gt;
            &lt;span&gt;Experience&lt;/span&gt;
          &lt;/h4&gt;
        &lt;/div&gt;
        &lt;div class=&quot;panel-body&quot;&gt;
          &lt;div class=&quot;row&quot;&gt;
            &lt;h5 class=&quot;col-sm-12&quot;&gt;experience years&lt;/h5&gt;
          &lt;/div&gt;
          &lt;div class=&quot;row resume-item&quot;&gt;
            &lt;div class=&quot;col-xs-12 col-sm-3 hidden-xs&quot;&gt;
              &lt;div&gt;Duration &lt;/div&gt;
              &lt;div class=&quot;fig&quot;&gt;duration&lt;/div&gt;
            &lt;/div&gt;
            &lt;div class=&quot;col-xs-12 col-sm-9&quot;&gt;
              &lt;h4 class=&quot;title&quot;&gt;
                Title
              &lt;/h4&gt;
              &lt;div class=&quot;key-info&quot;&gt;
                &lt;span&gt;Company&lt;/span&gt;
              &lt;/div&gt;
              &lt;div class=&quot;info visible-xs&quot;&gt;Duration &lt;span class=&quot;fig&quot;&gt;duration&lt;/span&gt;&lt;/div&gt;
              &lt;div class=&quot;info-table&quot;&gt;
                &lt;div class=&quot;row&quot;&gt;
                  &lt;label class=&quot;col-xs-4 col-sm-3&quot;&gt;Industry&lt;/label&gt;
                  &lt;span class=&quot;info&quot;&gt;Aerospace&lt;/span&gt;
                &lt;/div&gt;
              &lt;/div&gt;
              &lt;div class=&quot;sub-info&quot;&gt;
                info
              &lt;/div&gt;
            &lt;/div&gt;
          &lt;/div&gt;
        &lt;/div&gt;
      &lt;/div&gt;
      &lt;div class=&quot;panel panel-basic&quot;&gt;
        ...
      &lt;/div&gt;
    &lt;/div&gt;
  &lt;/div&gt;
&lt;/div&gt;
				</div></pre>	
			</div>
		</div>
	
	</div>
</section>

<?php include("../includes/script.php");?>
</body>
</html>