<?php
include("../includes/theme-data.php");
$theme="siva";
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

		<div class="clearfix"></div>
		<div class="panel panel-default">
			<div class="panel-heading">
				<div class="panel-title"><strong>Basic Card</strong></div>
			</div>
			<div class="panel-body">
				<blockquote class="alert-default">
					A Card consists of few sections including <code>card-checkbox</code>, <code>card-body</code> and <code>nav-action-menu</code>(optional).
					<br>
					Inside <code>card-body</code>, there are also <code>card-primary</code>, <code>card-secondary</code> and <code>card-tertiary</code> as shown in the figure below:
				</blockquote>	
				
				<blockquote class="alert-default">
				Example of card with 2 columns:
				</blockquote>
				
				<div class="well clearfix">
					<div class="cards x2">
						<div class="col-xs-12 col-sm-6 card">
							<div class="panel">
								<div class="panel-body">
									<div class="card-checkbox">
										<input type="checkbox" class="multi-select">
									</div>
									<div class="card-body">
										<div class="clearfix">
											<div class="card-primary">
												<h2 class="card-title">Muhammad Hafiz</h2>
												<span class="info"><span class="text">Software Engineer - Internship</span><span class="fig">(1 yr)</span></span>
												<span class="info no-fig"><span class="text">Media Prima Sdn Bhd</span></span>
											</div>
											<div class="card-secondary">
												<span class="info no-fig"><span class="text">Multimedia Design</span></span>
												<span class="info no-fig"><span class="text">Politeknik Tuanku Syed Sirajuddin</span></span>
											</div>
											<div class="card-tertiary">
												<span class="info no-fig"><span class="icon-dollar-sign"></span><span class="text">MYR 4,300</span></span>
												<span class="info no-fig">
													<span class="icon-education"></span>
													<span class="text">Master</span>
													<span title="Graduating" data-placement="top" data-toggle="tooltip" data-container="body">(Jan 2015)</span>
												</span>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-xs-12 col-sm-6 card">
							<div class="panel">
								<div class="panel-body">
									<div class="card-checkbox">
										<input type="checkbox" class="multi-select">
									</div>
									<div class="card-body">
										<div class="clearfix">
											<div class="card-primary">
												<h2 class="card-title"></h2>
												<code>card-primary</code> <code>card-title</code><br><code>info</code> <code>info</code>
											</div>
											<div class="card-secondary">
												<code>card-secondary</code> <code>info</code><br><code>info</code>
											</div>
											<div class="card-tertiary">
												<code>card-tertiary</code>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>			
				</div>
				
				<blockquote class="alert-default">
				Below is the sample code for card on the left:
				</blockquote>

			
				<pre class="well prettyprint"><input class="btn btn-info btnCopy" type="button" value="Copy" data-trigger="hover" data-toggle="tooltip" data-original-title="Copy to clipboard" data-placement="top"/><div class="code_content">
&lt;div class=&quot;cards x2&quot;&gt;
  &lt;div class=&quot;col-xs-12 col-sm-6 card&quot;&gt;
    &lt;div class=&quot;panel&quot;&gt;
      &lt;div class=&quot;panel-body&quot;&gt;
        &lt;div class=&quot;card-checkbox&quot;&gt;
          &lt;input type=&quot;checkbox&quot; class=&quot;multi-select&quot;&gt;
        &lt;/div&gt;
        &lt;div class=&quot;card-body&quot;&gt;
          &lt;div class=&quot;clearfix&quot;&gt;
            &lt;div class=&quot;card-primary&quot;&gt;
              &lt;h2 class=&quot;card-title&quot;&gt;Muhammad Hafiz&lt;/h2&gt;
              &lt;span class=&quot;info&quot;&gt;&lt;span class=&quot;text&quot;&gt;Software Engineer - Internship&lt;/span&gt;&lt;span class=&quot;fig&quot;&gt;(1 yr)&lt;/span&gt;&lt;/span&gt;
              &lt;span class=&quot;info no-fig&quot;&gt;&lt;span class=&quot;text&quot;&gt;Media Prima Sdn Bhd&lt;/span&gt;&lt;/span&gt;
            &lt;/div&gt;
            &lt;div class=&quot;card-secondary&quot;&gt;
              &lt;span class=&quot;info no-fig&quot;&gt;&lt;span class=&quot;text&quot;&gt;Multimedia Design&lt;/span&gt;&lt;/span&gt;
              &lt;span class=&quot;info no-fig&quot;&gt;&lt;span class=&quot;text&quot;&gt;Politeknik Tuanku Syed Sirajuddin&lt;/span&gt;&lt;/span&gt;
            &lt;/div&gt;
            &lt;div class=&quot;card-tertiary&quot;&gt;
              &lt;span class=&quot;info no-fig&quot;&gt;&lt;span class=&quot;icon-dollar-sign&quot;&gt;&lt;/span&gt;&lt;span class=&quot;text&quot;&gt;MYR 4,300&lt;/span&gt;&lt;/span&gt;
              &lt;span class=&quot;info no-fig&quot;&gt;
              &lt;span class=&quot;icon-education&quot;&gt;&lt;/span&gt;
              &lt;span class=&quot;text&quot;&gt;Master&lt;/span&gt;
              &lt;span title=&quot;Graduating&quot; data-placement=&quot;top&quot; data-toggle=&quot;tooltip&quot; data-container=&quot;body&quot;&gt;(Jan 2015)&lt;/span&gt;
              &lt;/span&gt;
            &lt;/div&gt;
          &lt;/div&gt;
        &lt;/div&gt;
      &lt;/div&gt;
    &lt;/div&gt;
  &lt;/div&gt;
&lt;/div&gt;		
				</div></pre>
				
				<blockquote class="alert-default">
				Example of card with 3 columns:
				</blockquote>

				<div class="well clearfix">
					<div class="cards x3">
						<div class="col-xs-12 col-sm-6 col-md-4 card">
							<div class="panel">
								<div class="panel-body">
									<div class="card-checkbox">
										<input type="checkbox" class="multi-select">
									</div>
									<div class="card-body">
										<div class="clearfix">
											<div class="card-primary">
												<h2 class="card-title x2"><span class="text">Senior Software Engineer/ Web Developer</span><span class="fig">(2 yrs)</span></h2>
												<span class="info x2 no-fig"><span class="text">Mastek MSC Information Technology (Malaysia) SDN BHD</span></span>
											</div>
											<div class="card-secondary">
												<span class="info"><span class="text">Software Engineer - End of position title text will fade off but year still remain</span><span class="fig">(1 yr)</span></span>
												<span class="info no-fig"><span class="text">Mastek Limited</span></span>
											</div>
											<div class="card-tertiary">
												<span class="info no-fig"><span class="icon-dollar-sign"></span><span class="text">MYR 4,500</span></span>
												<span class="info">
													<span class="icon-education"></span><span class="text">Master</span>
													
												</span>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						
						<div class="col-xs-12 col-sm-6 col-md-4 card">
							<div class="panel">
								<div class="panel-body">
									<div class="card-checkbox">
										<input type="checkbox" class="multi-select">
									</div>
									<div class="card-body">
										<div class="clearfix">
											<div class="card-primary">
												<h2 class="card-title x2"><span class="text">Software Engineer</span><span class="fig">(3 yrs)</span></h2>
												<span class="info x2 no-fig"><span class="text">Yahoo! Malaysia</span></span>
											</div>
											<div class="card-secondary">
												<span class="info"><span class="text">Software Engineer for Application</span><span class="fig">(1 yr)</span></span>
												<span class="info no-fig"><span class="text">U Mobile</span></span>
											</div>
											<div class="card-tertiary">
												<span class="info no-fig"><span class="icon-dollar-sign"></span><span class="text">MYR 3,600</span></span>
												<span class="info no-fig"><span class="icon-education"></span><span class="text">Degree</span></span>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						
						<div class="col-xs-12 col-sm-6 col-md-4 card">
							<div class="panel">
								<div class="panel-body">
									<div class="card-checkbox">
										<input type="checkbox" class="multi-select">
									</div>
									<div class="card-body">
										<div class="clearfix">
											<div class="card-primary">
												<h2 class="card-title x2"><span class="text">Mobile App Engineer</span><span class="fig">(5 yrs)</span></h2>
												<span class="info x2 no-fig"><span class="text">Nexus Professional & Consulting (Malaysia) Sdn Bhd</span></span>
											</div>
											<div class="card-secondary">
												<span class="info"><span class="text">Software Engineer for Application</span><span class="fig">(1 yr)</span></span>
												<span class="info no-fig"><span class="text">U Mobile</span></span>
											</div>
											<div class="card-tertiary">
												<span class="info no-fig"><span class="icon-dollar-sign"></span><span class="text">MYR 3,600</span></span>
												<span class="info">
													<span class="icon-education"></span><span class="text">Degree</span>
													<span class="fig" title="Graduating" data-placement="top" data-toggle="tooltip" data-container="body">(Jan 2015)</span>
												</span>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			
				<blockquote class="alert-warning" role="alert">
					For 3 columns of card, use <code>cards</code> <code>x3</code> and <code>col-xs-12 col-sm-6 col-md-4 card</code> as shown below.
				</blockquote>
			
				<pre class="well prettyprint"><input class="btn btn-info btnCopy" type="button" value="Copy" data-trigger="hover" data-toggle="tooltip" data-original-title="Copy to clipboard" data-placement="top"/><div class="code_content">
&lt;div class=&quot;cards x3&quot;&gt;
  &lt;div class=&quot;col-xs-12 col-sm-6 col-md-4 card&quot;&gt;
    &lt;div class=&quot;panel&quot;&gt;
      ..
    &lt;/div&gt;
  &lt;/div&gt;
  &lt;div class=&quot;col-xs-12 col-sm-6 col-md-4 card&quot;&gt;
    &lt;div class=&quot;panel&quot;&gt;
      ..
    &lt;/div&gt;
  &lt;/div&gt;
  &lt;div class=&quot;col-xs-12 col-sm-6 col-md-4 card&quot;&gt;
    &lt;div class=&quot;panel&quot;&gt;
      ..
    &lt;/div&gt;
  &lt;/div&gt;
&lt;/div&gt;
				</div></pre>
			</div>
		</div>
		

		<div class="panel panel-default">
			<div class="panel-heading">
				<div class="panel-title"><strong>Card with action menu</strong></div>
			</div>
			<div class="panel-body">
				<div class="well clearfix">
					<div class="cards x2">		
						<div class="col-xs-12 col-sm-6 card">
							<div class="panel">
								<div class="panel-body">
									<div class="card-checkbox">
										<input type="checkbox" class="multi-select">
									</div>
									<div class="card-body">
										<div class="clearfix">
											<div class="card-primary">
												<h2 class="card-title">Muhammad Hafiz</h2>
												<span class="info"><span class="text">Software Engineer - Internship</span><span class="fig">(1 yr)</span></span>
												<span class="info no-fig"><span class="text">Media Prima Sdn Bhd</span></span>
											</div>
											<div class="card-secondary">
												<span class="info no-fig"><span class="text">Multimedia Design</span></span>
												<span class="info no-fig"><span class="text">Politeknik Tuanku Syed Sirajuddin</span></span>
											</div>
											<div class="card-tertiary">
												<span class="info no-fig"><span class="icon-dollar-sign"></span><span class="text">MYR 4,300</span></span>
												<span class="info no-fig">
													<span class="icon-education"></span>
													<span class="text">Master</span>
													<span title="Graduating" data-placement="top" data-toggle="tooltip" data-container="body">(Jan 2015)</span>
												</span>
											</div>
										</div>
									</div>
									<!--// Action Menu //-->
									<ul class="nav nav-pills nav-action-menu">
										<li><a href="#">Shortlist</a></li>
										<li><a href="#">Interview</a></li>
										<li><a href="#">Not Suitable</a></li>
									</ul>
									<!--// Action Menu End //-->
								</div>
							</div>
						</div>
						<div class="col-xs-12 col-sm-6 card">
							<div class="panel">
								<div class="panel-body">
									<div class="card-checkbox">
										<input type="checkbox" class="multi-select">
									</div>
									<div class="card-body">
										<div class="clearfix">
											<div class="card-primary">
												<h2 class="card-title"></h2>
												<code>card-primary</code> <code>card-title</code><br><code>info</code> <code>info</code>
											</div>
											<div class="card-secondary">
												<code>card-secondary</code> <code>info</code><br><code>info</code>
											</div>
											<div class="card-tertiary">
												<code>card-tertiary</code>
											</div>
										</div>
									</div>
									<!--// Action Menu //-->
									<ul class="nav nav-pills nav-action-menu">
										<li><a href="#">nav-action-menu</a></li>
									</ul>
									<!--// Action Menu End //-->
								</div>
							</div>
						</div>
					</div>			
				</div>
				<blockquote class="alert-default">
					To add in the action menu, just add the following code after <code>card-body</code>
				</blockquote>					
				<pre class="well prettyprint"><input class="btn btn-info btnCopy" type="button" value="Copy" data-trigger="hover" data-toggle="tooltip" data-original-title="Copy to clipboard" data-placement="top"/><div class="code_content">
&lt;!--// Action Menu //--&gt;
&lt;ul class=&quot;nav nav-pills nav-action-menu&quot;&gt;
  &lt;li&gt;&lt;a href=&quot;#&quot;&gt;Shortlist&lt;/a&gt;&lt;/li&gt;
  &lt;li&gt;&lt;a href=&quot;#&quot;&gt;Interview&lt;/a&gt;&lt;/li&gt;
  &lt;li&gt;&lt;a href=&quot;#&quot;&gt;Not Suitable&lt;/a&gt;&lt;/li&gt;
&lt;/ul&gt;
&lt;!--// Action Menu End //--&gt;
				</div></pre>
				
				<blockquote class="alert-default">
					The result is as shown below:
				</blockquote>
				<pre class="well prettyprint"><input class="btn btn-info btnCopy" type="button" value="Copy" data-trigger="hover" data-toggle="tooltip" data-original-title="Copy to clipboard" data-placement="top"/><div class="code_content">
&lt;div class=&quot;cards x2&quot;&gt;
  &lt;div class=&quot;col-xs-12 col-sm-6 card&quot;&gt;
    &lt;div class=&quot;panel&quot;&gt;
      &lt;div class=&quot;panel-body&quot;&gt;
        &lt;div class=&quot;card-checkbox&quot;&gt;
          ..
        &lt;/div&gt;
        &lt;div class=&quot;card-body&quot;&gt;
          ..
        &lt;/div&gt;
        &lt;!--// Action Menu //--&gt;
        &lt;ul class=&quot;nav nav-pills nav-action-menu&quot;&gt;
          &lt;li&gt;&lt;a href=&quot;#&quot;&gt;Shortlist&lt;/a&gt;&lt;/li&gt;
          &lt;li&gt;&lt;a href=&quot;#&quot;&gt;Interview&lt;/a&gt;&lt;/li&gt;
          &lt;li&gt;&lt;a href=&quot;#&quot;&gt;Not Suitable&lt;/a&gt;&lt;/li&gt;
        &lt;/ul&gt;
        &lt;!--// Action Menu End //--&gt;
      &lt;/div&gt;
    &lt;/div&gt;
  &lt;/div&gt;
&lt;/div&gt;
				</div></pre>
			</div>
		</div>
		
		<div class="panel panel-default">
			<div class="panel-heading">
				<div class="panel-title"><strong>Card with priority tag</strong></div>
			</div>
			<div class="panel-body">
				<div class="well clearfix">
					<div class="cards x2">
						<div class="col-xs-12 col-sm-6 card">
							<div class="panel">
								<div class="panel-body">
									<div class="card-checkbox">
										<input type="checkbox" class="multi-select">
									</div>
									<div class="card-body">
										<div class="clearfix">
											<div class="card-primary">
												<h2 class="card-title">Li Na Tan</h2>
												<span class="info"><span class="text">Senior Software Engineer/ Web Developer</span><span class="fig">(2 yrs)</span></span>
												<span class="info no-fig"><span class="text">Mastek MSC Information Technology (Malaysia) SDN BHD</span></span>
											</div>
											<div class="card-secondary">
												<span class="info"><span class="text">Software Engineer</span><span class="fig">(1 yr)</span></span>
												<span class="info no-fig"><span class="text">Mastek Limited</span></span>
											</div>
											<div class="card-tertiary">
												<span class="info no-fig"><span class="icon-dollar-sign"></span><span class="text">MYR 3,600</span></span>
												<span class="info no-fig"><span class="icon-education"></span><span class="text">Degree</span></span>
												<div class="badge tooltip-left" data-placement="top" data-toggle="tooltip" title="I am kind of person when working on particular task I won't compromise, and I keep learning and updating myself from almost everything...">Why hire me?</div>
											</div>
										</div>
									</div>
									<!--// Action Menu //-->
									<ul class="nav nav-pills nav-action-menu">
										<li><a href="#">Shortlist</a></li>
										<li><a href="#">Interview</a></li>
										<li><a href="#">Not Suitable</a></li>
									</ul>
									<!--// Action Menu End //-->
									<div class="priority-tag" title="Priority Candidate" data-placement="top" data-toggle="tooltip"></div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<blockquote class="alert-default">
					To add in the priority tag, just add the following code after <code>card-body</code> or after <code>nav-action-menu</code> (if any)
				</blockquote>	
				<pre class="well prettyprint"><input class="btn btn-info btnCopy" type="button" value="Copy" data-trigger="hover" data-toggle="tooltip" data-original-title="Copy to clipboard" data-placement="top"/><div class="code_content">
&lt;div class=&quot;priority-tag&quot; title=&quot;Priority Candidate&quot; data-placement=&quot;top&quot; data-toggle=&quot;tooltip&quot;&gt;&lt;/div&gt;
				</div></pre>
				
				<blockquote class="alert-default">
					The result is as shown below:
				</blockquote>
				<pre class="well prettyprint"><input class="btn btn-info btnCopy" type="button" value="Copy" data-trigger="hover" data-toggle="tooltip" data-original-title="Copy to clipboard" data-placement="top"/><div class="code_content">
&lt;div class=&quot;cards x2&quot;&gt;
  &lt;div class=&quot;col-xs-12 col-sm-6 card&quot;&gt;
    &lt;div class=&quot;panel&quot;&gt;
      &lt;div class=&quot;panel-body&quot;&gt;
        &lt;div class=&quot;card-checkbox&quot;&gt;
          ..
        &lt;/div&gt;
        &lt;div class=&quot;card-body&quot;&gt;
          ..
        &lt;/div&gt;
        &lt;!--// Action Menu //--&gt;
        &lt;ul class=&quot;nav nav-pills nav-action-menu&quot;&gt;
          ..
        &lt;/ul&gt;
        &lt;!--// Action Menu End //--&gt;
        &lt;div class=&quot;priority-tag&quot; title=&quot;Priority Candidate&quot; data-placement=&quot;top&quot; data-toggle=&quot;tooltip&quot;&gt;&lt;/div&gt;
      &lt;/div&gt;
    &lt;/div&gt;
  &lt;/div&gt;
&lt;/div&gt;
				</div></pre>				
			</div>
		</div>
		
		<div class="panel panel-default">
			<div class="panel-heading">
				<div class="panel-title"><strong>Card with status</strong></div>
			</div>
			<div class="panel-body">
				<div class="well clearfix">
					<div class="cards x3">
						<div class="col-xs-12 col-sm-6 col-md-4 card new">
							<div class="panel">
								<div class="panel-body">
									<div class="card-checkbox">
										<input type="checkbox" class="multi-select">
									</div>
									<div class="card-body">
										<div class="clearfix">
											<div class="card-primary">
												<h2 class="card-title">Li Na Tan</h2>
												<span class="info"><span class="text">Senior Software Engineer/ Web Developer</span><span class="fig">(2 yrs)</span></span>
												<span class="info no-fig"><span class="text">Mastek MSC Information Technology (Malaysia) SDN BHD</span></span>
											</div>
											<div class="card-secondary">
												<span class="info"><span class="text">Software Engineer</span><span class="fig">(1 yr)</span></span>
												<span class="info no-fig"><span class="text">Mastek Limited</span></span>
											</div>
											<div class="card-tertiary">
												<span class="info no-fig"><span class="icon-dollar-sign"></span><span class="text">MYR 3,600</span></span>
												<span class="info no-fig"><span class="icon-education"></span><span class="text">Degree</span></span>
												<div class="badge tooltip-left" data-placement="top" data-toggle="tooltip" title="I am kind of person when working on particular task I won't compromise, and I keep learning and updating myself from almost everything...">Why hire me?</div>
											</div>
										</div>
									</div>
									<!--// Action Menu //-->
									<ul class="nav nav-pills nav-action-menu">
										<li><a href="#">Shortlist</a></li>
										<li><a href="#">Interview</a></li>
										<li><a href="#">Not Suitable</a></li>
									</ul>
									<!--// Action Menu End //-->
								</div>
							</div>
						</div>
						
						<div class="col-xs-12 col-sm-6 col-md-4 card selected">
							<div class="panel">
								<div class="panel-body">
									<div class="card-checkbox">
										<input type="checkbox" class="multi-select" checked>
									</div>
									<div class="card-body">
										<div class="clearfix">
											<div class="card-primary">
												<h2 class="card-title">Li Na Tan</h2>
												<span class="info"><span class="text">Senior Software Engineer/ Web Developer</span><span class="fig">(2 yrs)</span></span>
												<span class="info no-fig"><span class="text">Mastek MSC Information Technology (Malaysia) SDN BHD</span></span>
											</div>
											<div class="card-secondary">
												<span class="info"><span class="text">Software Engineer</span><span class="fig">(1 yr)</span></span>
												<span class="info no-fig"><span class="text">Mastek Limited</span></span>
											</div>
											<div class="card-tertiary">
												<span class="info no-fig"><span class="icon-dollar-sign"></span><span class="text">MYR 3,600</span></span>
												<span class="info no-fig"><span class="icon-education"></span><span class="text">Degree</span></span>
											</div>
										</div>
									</div>
									<!--// Action Menu //-->
									<ul class="nav nav-pills nav-action-menu">
										<li><a href="#">Shortlist</a></li>
										<li><a href="#">Interview</a></li>
										<li><a href="#">Not Suitable</a></li>
									</ul>
									<!--// Action Menu End //-->
								</div>
							</div>
						</div>
						
						<div class="col-xs-12 col-sm-6 col-md-4 card active">
							<div class="panel">
								<div class="panel-body">
									<div class="card-checkbox">
										<input type="checkbox" class="multi-select">
									</div>
									<div class="card-body">
										<div class="clearfix">
											<div class="card-primary">
												<h2 class="card-title">Muhammad Hafiz</h2>
												<span class="info"><span class="text">Software Engineer - Internship</span><span class="fig">(1 yr)</span></span>
												<span class="info no-fig"><span class="text">Media Prima Sdn Bhd</span></span>
											</div>
											<div class="card-secondary">
												<span class="info no-fig"><span class="text">Multimedia Design</span></span>
												<span class="info no-fig"><span class="text">Politeknik Tuanku Syed Sirajuddin</span></span>
											</div>
											<div class="card-tertiary">
												<span class="info no-fig"><span class="icon-dollar-sign"></span><span class="text">MYR 4,300</span></span>
												<span class="info no-fig">
													<span class="icon-education"></span>
													<span class="text">Master</span>
													<span data-toggle="tooltip" data-placement="top" title="Graduated" data-container="body">(Jan 2015)</span>
												</span>
											</div>
										</div>
									</div>
									<!--// Action Menu //-->
									<ul class="nav nav-pills nav-action-menu">
										<li><a href="#">Shortlist</a></li>
										<li><a href="#">Interview</a></li>
										<li><a href="#">Not Suitable</a></li>
									</ul>
									<!--// Action Menu End //-->
								</div>
							</div>
						</div>
						
						<div class="col-xs-12 col-sm-6 col-md-4 text-center"><code>new</code></div>
						<div class="col-xs-12 col-sm-6 col-md-4 text-center"><code>selected</code></div>
						<div class="col-xs-12 col-sm-6 col-md-4 text-center"><code>active</code></div>
					</div>
				</div>
				
				<blockquote class="alert-default">
					To show different status on card, just use the class <code>new</code>, <code>selected</code> and <code>active</code> as shown below:
				</blockquote>	
				
				<pre class="well prettyprint"><input class="btn btn-info btnCopy" type="button" value="Copy" data-trigger="hover" data-toggle="tooltip" data-original-title="Copy to clipboard" data-placement="top"/><div class="code_content">
&lt;div class=&quot;cards x3&quot;&gt;
  &lt;div class=&quot;col-xs-12 col-sm-6 col-md-4 card new&quot;&gt;
    ..
  &lt;/div&gt;
  &lt;div class=&quot;col-xs-12 col-sm-6 col-md-4 card selected&quot;&gt;
    ..
  &lt;/div&gt;
  &lt;div class=&quot;col-xs-12 col-sm-6 col-md-4 card active&quot;&gt;
    ..
  &lt;/div&gt;
&lt;/div&gt;
				</div></pre>
			</div>
		</div>
		
		
		<div class="panel panel-default">
			<div class="panel-heading">
				<div class="panel-title"><strong>Card which folded</strong></div>
			</div>
			<div class="panel-body">
				<div class="well clearfix">
					<div class="cards x3">
						<div class="col-xs-12 col-sm-6 col-md-4 card">
							<div class="panel">
								<div class="panel-body">
									<div class="card-checkbox">
										<input type="checkbox" class="multi-select">
									</div>
									<div class="card-body">
										<div class="clearfix">
											<div class="card-primary">
												<h2 class="card-title">Li Na Tan</h2>
												<span class="info"><span class="text">Senior Software Engineer/ Web Developer</span><span class="fig">(2 yrs)</span></span>
												<span class="info no-fig"><span class="text">Mastek MSC Information Technology (Malaysia) SDN BHD</span></span>
											</div>
											<div class="card-secondary">
												<span class="info"><span class="text">Software Engineer</span><span class="fig">(1 yr)</span></span>
												<span class="info no-fig"><span class="text">Mastek Limited</span></span>
											</div>
											<div class="card-tertiary">
												<span class="info no-fig"><span class="icon-dollar-sign"></span><span class="text">MYR 3,600</span></span>
												<span class="info no-fig"><span class="icon-education"></span><span class="text">Degree</span></span>
											</div>
										</div>
									</div>
									<a class="folded" data-placement="top" data-toggle="tooltip" title="Retrieved by Muhammad Nazwan"></a>
								</div>
							</div>
						</div>				
					</div>
				</div>
				
				<blockquote class="alert-default">
					To show the folded card, just add the following code after <code>card-body</code>
				</blockquote>		
				<pre class="well prettyprint"><input class="btn btn-info btnCopy" type="button" value="Copy" data-trigger="hover" data-toggle="tooltip" data-original-title="Copy to clipboard" data-placement="top"/><div class="code_content">
&lt;a class=&quot;folded&quot; data-placement=&quot;top&quot; data-toggle=&quot;tooltip&quot; title=&quot;Retrieved by Muhammad Nazwan&quot;&gt;&lt;/a&gt;				
				</div></pre>
				
				<blockquote class="alert-default">
					The result is as shown below:
				</blockquote>
				<pre class="well prettyprint"><input class="btn btn-info btnCopy" type="button" value="Copy" data-trigger="hover" data-toggle="tooltip" data-original-title="Copy to clipboard" data-placement="top"/><div class="code_content">
&lt;div class=&quot;cards x3&quot;&gt;
  &lt;div class=&quot;col-xs-12 col-sm-6 col-md-4 card&quot;&gt;
    &lt;div class=&quot;panel&quot;&gt;
      &lt;div class=&quot;panel-body&quot;&gt;
        &lt;div class=&quot;card-checkbox&quot;&gt;
          ..
        &lt;/div&gt;
        &lt;div class=&quot;card-body&quot;&gt;
          ..
        &lt;/div&gt;
        &lt;a class=&quot;folded&quot; data-placement=&quot;top&quot; data-toggle=&quot;tooltip&quot; title=&quot;Retrieved by Muhammad Nazwan&quot;&gt;&lt;/a&gt;
      &lt;/div&gt;
    &lt;/div&gt;
  &lt;/div&gt;
&lt;/div&gt;
				</div></pre>
			</div>
		</div>
		
		<blockquote class="alert-success" role="alert">
			<h4>Demo</h4>
			<p>Demo pages for cards can be view in template section</p>
			<p><a class="btn btn-success" href="../siva/templates.php">Templates</a></p>
		</blockquote>
	</div>
</section>

<?php include("../includes/script.php");?>
</body>
</html>
