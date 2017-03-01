<?php
include("../includes/theme-data.php");
$theme="myjs";
$com="Cards";

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
		<!--==================================== Panel Card ===================================================-->
		<a name="panel-card" id="panel-card">&nbsp;</a>
		<h3 class="sub-title">Card with footer</h3>
		
		<div class="row">
			<div class="col-md-8 col-sm-14">
				<div class="panel panel-card hidden-xs">
					<div class="panel-body card-body">
						<div class="row">
							<div class="media">
								<div class="media-left">
									<div class="thumbnail-md thumbnail-no-photo"></div>
								</div>
								<div class="media-body">
									<div class="col-sm-7 col-lg-8">
										<div class="card-primary">
											<a href="#"><h4 class="card-title">Lucas Lee Choon Hoe</h4></a>
											<div class="info"><span class="text">Senior Software Engineer</span><span class="fig">(5 years)</span></div>
											<div class="info no-fig"><span class="text">JobStreet.com Sdn Bhd</span></div>
										</div>
									</div>
									<div class="col-sm-5 col-lg-4">
										<button type="button" class="btn btn-primary pull-right">Update My Resume</button>
										<div class="sub-info pull-right">Last Updated: 19 Jan 2014</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="card-footer">
						<div class="row">
							<div class="col-xs-4">
								<a class="btn btn-link" style="color:#666;" href="#" target="_blank"><span class="icon-envelope"></span><span class="hidden-xs">Interview Invitation</span><span class="badge">2</span></a>
							</div>
							<div class="col-xs-4">
								<a class="btn btn-link" style="color:#666;" href="#" target="_blank"><span class="icon-calendar"></span><span class="hidden-xs">Upcoming Interview</span><span class="badge">1</span></a>
							</div>
							<div class="col-xs-4">
								<a class="btn btn-link" style="color:#666;" href="#" target="_blank"><span class="icon-copy"></span><span class="hidden-xs">Application</span><span class="badge badge-default">5</span></a>
							</div>
						</div>
					</div>
				</div>
				<!--Hidden Panel Card in mobile size-->
				<div class="panel visible-xs">
					<div class="panel-body">
						<p>Panel Card will be hidden in mobile view.</p>
					</div>
				</div>
			</div>
		</div>
	
		<div class="panel">
			<div class="panel-body">
				<blockquote class="alert-default">
					<h5><code>card-body</code> Body of the panel card.</h5> 
					<h5><code>card-footer</code> Footer of the panel card.</h5>
					<h5>Panel Card will be hidden in mobile view.</h5>
				</blockquote>
				<pre class="well prettyprint">
					<input class="btn btn-info btnCopy" type="button" value="Copy" data-trigger="hover" data-toggle="tooltip" data-original-title="Copy to clipboard" data-placement="top"/><div class="code_content">
&lt;div class=&quot;panel panel-card hidden-xs&quot;&gt;

  &lt;!--Card Body--&gt;
  &lt;div class=&quot;panel-body card-body&quot;&gt;
    &lt;div class=&quot;media&quot;&gt;
      &lt;div class=&quot;media-left&quot;&gt;
        &lt;div class=&quot;thumbnail-md thumbnail-no-photo&quot;&gt;&lt;/div&gt;
      &lt;/div&gt;
      &lt;div class=&quot;media-body&quot;&gt;
        &lt;div class=&quot;card-primary&quot;&gt;
          &lt;a href=&quot;javascript:;&quot;&gt;
            &lt;h4 class=&quot;card-title&quot;&gt;Lucas Lee Choon Hoe&lt;/h4&gt;
          &lt;/a&gt;
          &lt;div class=&quot;info&quot;&gt;
            &lt;span class=&quot;text&quot;&gt;Senior Software Engineer (5 years)&lt;/span&gt;
          &lt;/div&gt;
        &lt;/div&gt;
      &lt;/div&gt;
    &lt;/div&gt;
	
    &lt;!--Card Footer--&gt;
    &lt;div class=&quot;card-footer&quot;&gt;
      &lt;a class=&quot;btn btn-link&quot; href=&quot;javascript:;&quot;&gt;
        &lt;span class=&quot;icon-envelope&quot;&gt;&lt;/span&gt;Interview Invitation
        &lt;span class=&quot;badge&quot;&gt;2&lt;/span&gt;
      &lt;/a&gt;
    &lt;/div&gt;
  &lt;/div&gt;
&lt;/div&gt;
				</div></pre>
			<blockquote class="alert-success" role="alert">
				<h4 class="text-success">Source Code</h4>
				<p>Source code for panel card can be download here.</p>
				<p><a href="myjs/source-code/panel-card.html" class="btn btn-success" download>Download</a></p>
			</blockquote>	
			</div>
		</div>
		
		<!--===================================== Jobs Card ===================================================-->
		<a name="jobs-card" id="jobs-card">&nbsp;</a>
		<h3 class="sub-title">Jobs Card</h3>
		<div class="panel panel-default">
			<div class="panel-heading">
				<div class="panel-title"><strong>Basic Job Card</strong></div>
			</div>
			<div class="panel-body">
				<blockquote class="alert-default">
					A basic Job Card is separate into few sections including <code>panel-card</code> and <code>card-body</code>. <br>
					Inside <code>card-body</code> there are also<code>card-primary</code>, <code>card-secondary</code>, <code>card-tertiary</code> and <code>sub-info</code> as shown in the figure below:
				</blockquote>	
				<div class="well clearfix">
					<div class="row">
						<div class="col-xs-12 col-sm-6">
							<div class="panel panel-card">
								<div class="panel-body card-body">
									<div class="card-primary">
										<a class="pull-right hidden-xs" href="#" title="View all jobs posted by F-Secure Corporation Sdn. Bhd.">
											<img src="http://placehold.it/150x150" />
										</a>
										<h4 class="card-title"><a href="#" title="View job details - Senior Web Development Engineer">Senior Web Development Engineer</a></h4>
										<div class="info no-fig xn"><a href="#" title="View all jobs posted by F-Secure Corporation Sdn. Bhd."><span class="text">F-Secure Corporation Sdn. Bhd.</span></a></div>
									</div>
									<div class="card-secondary">
										<span class="info no-fig xn"><span class="icon icon-location"></span><span class="text">Kuala Lumpur</span></span>
										<span class="info no-fig xn text-success"><span class="icon-dollar-sign"></span><span class="text">Around Expected Salary</span></span>
									</div>
									<div class="card-tertiary hidden-xs">
										<div class="info no-fig xn"><span class="text">Responsibilities - Generate new ways of thinking about all aspects of website/portal development by using cutting edge technologies to create that wow effect.</span></div>
									</div>
									<div class="sub-info">
										<a class="muted hidden-xs" href="#" title="IT - Software > Software Engineer/Programmer">IT - Software &gt; Software Engineer/Programmer</a>																		
										<span class="hidden-xs">&nbsp;|&nbsp;Industry:&nbsp;</span>
										<a class="muted hidden-xs" href="#" title="IT / Software in Malaysia">IT / Software</a>
										<span class="hidden-xs"> &nbsp;&bull;&nbsp;</span>
										<span>4 hours ago</span>
									</div>
								</div>
							</div>
						</div>
						<div class="col-xs-12 col-sm-6">
							<div class="panel panel-card">
								<div class="panel-body card-body">
									<div class="card-primary">
										<code>card-primary</code>
										<a class="pull-right hidden-xs">
											<code style="position:absolute;">pull-right</code>
											<img src="http://placehold.it/150x150" ></img>
										</a>
										<code>card-title</code>
										<div><code>info</code></div>
									</div>
									<div class="card-secondary">
										<code>card-secondary</code>
										<code>info</code>
										<div><code>info</code></div>
									</div>
									<div class="hidden-xs card-tertiary">
										<div><code>card-tertiary</code></div>
										<div><code>info</code></div>
										<div></div>
									</div>
									<div class="sub-info">
										<div><code>sub-info</code>
										<code>muted</code></div>
									</div>
								</div>
							</div>
						</div>
					</div>			
				</div><pre class="well prettyprint">
					<input class="btn btn-info btnCopy" type="button" value="Copy" data-trigger="hover" data-toggle="tooltip" data-original-title="Copy to clipboard" data-placement="top"/><div class="code_content">
&lt;div class=&quot;tab-content jobs&quot;&gt;
  &lt;div class=&quot;tab-pane fade in active&quot; id=&quot;linasuggestion_else&quot;&gt;
    &lt;div class=&quot;panel panel-card&quot;&gt;
      &lt;div class=&quot;panel-body card-body&quot;&gt;
        &lt;div class=&quot;card-primary&quot;&gt;
          &lt;a class=&quot;pull-right hidden-xs&quot; href=&quot;#&quot;&gt;
          &lt;img src=&quot;...&quot; /&gt;
          &lt;/a&gt;
          &lt;h4 class=&quot;card-title&quot;&gt;...&lt;/h4&gt;
          &lt;div class=&quot;info xn&quot;&gt;...&lt;/div&gt;
        &lt;/div&gt;
        &lt;div class=&quot;card-secondary&quot;&gt;
          &lt;span class=&quot;info xn&quot;&gt;...&lt;/span&gt;
          &lt;span class=&quot;info xn&quot;&gt;...&lt;/span&gt;
        &lt;/div&gt;
        &lt;div class=&quot;card-tertiary hidden-xs&quot;&gt;
          &lt;div class=&quot;info xn&quot;&gt;...&lt;/div&gt;
        &lt;/div&gt;
        &lt;div class=&quot;sub-info&quot;&gt;
          &lt;a class=&quot;muted hidden-xs&quot;&gt;...&lt;/a&gt;																		
        &lt;/div&gt;
      &lt;/div&gt;
    &lt;/div&gt;
  &lt;/div&gt;
&lt;/div&gt;</div></pre>
			</div>
		</div>
		<div class="panel panel-default">
			<div class="panel-heading">
				<div class="panel-title"><strong>Job Card with standout</strong></div>
			</div>
			<div class="panel-body">
				<blockquote class="alert-default">
					A Job Card (standout) is with a light blue background. Add <code>standout</code> in same level with <code>panel-card</code>.<br>
					Furthermore, unordered list will be use within a grid system along with <code>card-tertiary</code> and <code>sub-info</code>.
				</blockquote>	
				<div class="well clearfix">
					<div class="row">
						<div class="col-xs-12 col-sm-6">
							<div class="tab-content jobs">
								<div class="tab-pane fade in active" id="linasuggestion_else">
									<div class="panel panel-card standout">
										<div class="panel-body card-body">
											<div class="card-primary">
												<a class="pull-right hidden-xs" href="#" title="View all jobs posted by F-Secure Corporation Sdn. Bhd.">
													<img src="http://placehold.it/150x150" />
												</a>
												<h4 class="card-title"><a href="#" title="View job details - Software Engineer">Software Engineer</a></h4>
												<div class="info no-fig xn"><a href="#" title="View all jobs posted by Manulife Technology & Services Sdn Bhd"><span class="text">Manulife Technology & Services Sdn Bhd</span></a></div>
											</div>
											<div class="card-secondary">
												<span class="info no-fig xn"><span class="icon icon-location"></span><span class="text">Kuala Lumpur</span></span>
												<span class="info no-fig xn text-success"><span class="icon-dollar-sign"></span><span class="text">Around Expected Salary</span></span>
											</div>
											<div class="row">
												<div class="col-xs-12 col-sm-7">
													<ul>
														<li>Flexi working hour</li>
														<li>Opportunity to work with multi-national teams</li>
														<li>Variety of software development technologies and training will be provided</li>
													</ul>
													<div class="card-tertiary hidden-xs">
														<div class="info no-fig xn"><span class="text">Candidate must possess at least a Bachelor's Degree, Post Graduate Diploma, Professional Degree, Engineering (Mechanical) or equivalent. At least...</span></div>
													</div>
													<div class="sub-info">
														<a class="muted hidden-xs" href="#" title="IT - Software > Software Engineer/Programmer">IT - Software &gt; Software Engineer/Programmer</a>																		
														<span class="hidden-xs">&nbsp;|&nbsp;Industry:&nbsp;</span>
														<a class="muted hidden-xs" href="#" title="IT / Software in Malaysia">IT / Software</a>
														<span class="hidden-xs"> &nbsp;&bull;&nbsp;</span>
														<span>8 hours ago</span>
													</div>
												</div>
												<div class="col-xs-12 col-sm-5">
													<img class="pic" src="http://placehold.it/300x225" />
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-xs-12 col-sm-6">
							<div class="tab-content jobs">
								<div class="tab-pane fade in active" id="linasuggestion_else">
									<div class="panel panel-card">
										<div class="panel-body card-body">
											<div class="card-primary">
												<code>card-primary</code>
												<a class="pull-right hidden-xs">	
													<code style="position:absolute;">pull-right</code>
													<img src="http://placehold.it/150x150"></img>
												</a>
												<code>card-title</code>
												<div><code>info</code></div>
											</div>
											<div class="card-secondary">
												<code>card-secondary</code>
												<code>info</code><br>
												<div><code>info</code></div><br>
											</div>
											<div class="row">
												<div class="col-xs-12 col-sm-7">
													<code>row</code>
													<code>col-sm-7</code>
													<code>ul</code><br>
													<code>li</code><br>
													<code>li</code><br>
													<code>li</code><br>
												
													<div class="card-tertiary hidden-xs">
														<div><code>card-tertiary</code></div>
														<div><code>info</code></div>
													</div>
													<div class="sub-info">
														<code>sub-info</code><code>muted</code>
													</div>
												</div>
												
												<div class="col-xs-12 col-sm-5">
													<br><code style="position:absolute;">col-sm-5</code>
													<img src="http://placehold.it/300x225" class="img-responsive"></img>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>	
						</div>
					</div>			
				</div><pre class="well prettyprint">
					<input class="btn btn-info btnCopy" type="button" value="Copy" data-trigger="hover" data-toggle="tooltip" data-original-title="Copy to clipboard" data-placement="top"/><div class="code_content">
&lt;div class=&quot;tab-content jobs&quot;&gt;
  &lt;div class=&quot;tab-pane fade in active&quot; id=&quot;linamatches_else&quot;&gt;
    &lt;div class=&quot;panel panel-card standout&quot;&gt;
      &lt;div class=&quot;panel-body card-body&quot;&gt;
        &lt;div class=&quot;card-primary&quot;&gt;
          &lt;a class=&quot;pull-right hidden-xs&quot;&gt;
            &lt;img src=&quot;...&quot; /&gt;
          &lt;/a&gt;
          &lt;h4 class=&quot;card-title&quot;&gt;...&lt;/h4&gt;
          &lt;div class=&quot;info xn&quot;&gt;...&lt;/div&gt;
        &lt;/div&gt;
        &lt;div class=&quot;card-secondary&quot;&gt;
          &lt;span class=&quot;info xn&quot;&gt;...&lt;/span&gt;
          &lt;span class=&quot;info xn&quot;&gt;...&lt;/span&gt;
        &lt;/div&gt;
        &lt;div class=&quot;row&quot;&gt;
          &lt;div class=&quot;col-xs-12 col-sm-7&quot;&gt;
            &lt;ul&gt;
              &lt;li&gt;...&lt;/li&gt;
              &lt;li&gt;...&lt;/li&gt;
            &lt;/ul&gt;
            &lt;div class=&quot;card-tertiary hidden-xs&quot;&gt;
              &lt;div class=&quot;info xn&quot;&gt;...&lt;/div&gt;
            &lt;/div&gt;
            &lt;div class=&quot;sub-info&quot;&gt;
              &lt;a class=&quot;muted hidden-xs&quot;&gt;...&lt;/a&gt;																		
            &lt;/div&gt;
          &lt;/div&gt;
          &lt;div class=&quot;col-xs-12 col-sm-5&quot;&gt;
            &lt;img class=&quot;pic&quot; src=&quot;...&quot; /&gt;
          &lt;/div&gt;
        &lt;/div&gt;
      &lt;/div&gt;
    &lt;/div&gt;
  &lt;/div&gt;
&lt;/div&gt;</div></pre>
			</div>
		</div>
		<div class="panel panel-default">
			<div class="panel-heading">
				<div class="panel-title"><strong>Job Card with column</strong></div>
			</div>
			<div class="panel-body">
				<blockquote class="alert-default">
					Job Card with column use grid system to seperate into 4 different columns.
				</blockquote>	
				<div class="well clearfix">
					<div class="row">
						<div class="col-xs-12">
							<div class="tab-pane fade in active" id="savedjob_else">
								<div class="panel panel-card">
									<div class="panel-body card-body">
										<div class="row">
											<div class="col-xs-12 col-sm-2">
												<span class="info no-fig xn"><span class="text">27 Mar 2015</span></span>
											</div>
											<div class="col-xs-12 col-sm-5">
												<h4 class="card-title"><a href="#" title="View job details - Solution Archietect">Solution Architect</a></h4>
												<div class="info no-fig xn"><a href="#" title="View all jobs posted by Dell Global Business Center Sdn Bhd"><span class="text">Dell Global Business Center Sdn Bhd</span></a></div>
												<div class="sub-info">
													Closing Date: 19 Apr 2015
												</div>
											</div>
											<div class="col-xs-12 col-sm-3">
												<span class="info no-fig xn"><span class="icon icon-location"></span><span class="text">Kuala Lumpur</span></span>
												<span class="info no-fig xn text-success"><span class="icon-dollar-sign"></span><span class="text">Around Expected Salary</span></span>
											</div>
											<div class="col-xs-12 col-sm-2">
												<a href="#" class="pull-right">Remove</a>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-xs-12">
							<div class="panel panel-card">
								<div class="panel-body card-body">
									<div class="row">
										<div class="col-xs-12 col-sm-2">
											<div><code>col-sm-2</code></div>
											<div><code>info</code></div>
										</div>
										<div class="col-xs-12 col-sm-5">
											<div><code>col-sm-5</code></div>
											<div><code>card-title</code></div>
											<div><code>info</code></div>
											<div><code>sub-info</code></div>
										</div>
										<div class="col-xs-12 col-sm-3">
										<div><code>col-sm-3</code></div>
											<div><code>info</code></div>
											<div><code>info</code></div>
										</div>
										<div class="col-xs-12 col-sm-2">
											<div class="pull-right"><code>col-sm-2</code></div><br>
											<div class="pull-right"><code>pull-right</code></div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>			
				</div><pre class="well prettyprint">
					<input class="btn btn-info btnCopy" type="button" value="Copy" data-trigger="hover" data-toggle="tooltip" data-original-title="Copy to clipboard" data-placement="top"/><div class="code_content">
&lt;div class=&quot;tab-pane fade in active&quot; id=&quot;savedjob_else&quot;&gt;
  &lt;div class=&quot;panel panel-card&quot;&gt;
    &lt;div class=&quot;panel-body card-body&quot;&gt;
      &lt;div class=&quot;row&quot;&gt;
        &lt;div class=&quot;col-xs-12 col-sm-2&quot;&gt;
          &lt;span class=&quot;info xn&quot;&gt;...&lt;/span&gt;
        &lt;/div&gt;
        &lt;div class=&quot;col-xs-12 col-sm-5&quot;&gt;
          &lt;h4 class=&quot;card-title&quot;&gt;...&lt;/h4&gt;
          &lt;div class=&quot;info xn&quot;&gt;...&lt;/div&gt;
          &lt;div class=&quot;sub-info&quot;&gt;...&lt;/div&gt;
        &lt;/div&gt;
        &lt;div class=&quot;col-xs-12 col-sm-3&quot;&gt;
          &lt;span class=&quot;info xn&quot;&gt;...&lt;/span&gt;
          &lt;span class=&quot;info xn&quot;&gt;...&lt;/span&gt;
        &lt;/div&gt;
        &lt;div class=&quot;col-xs-12 col-sm-2&quot;&gt;
          &lt;a class=&quot;pull-right&quot;&gt;...&lt;/a&gt;
        &lt;/div&gt;
      &lt;/div&gt;
    &lt;/div&gt;
  &lt;/div&gt;
&lt;/div&gt;</div></pre>
			</div>
		</div>
		<blockquote class="alert-success" role="alert">
			<h4 class="text-success">Source Code</h4>
			<p>Source code for job cards can be download here.</p>
			<p><a href="myjs/source-code/job-card.html" class="btn btn-success" download>Download</a></p>
		</blockquote>	
		
	</div>
</section>

<?php include("../includes/script.php");?>
</body>
</html>