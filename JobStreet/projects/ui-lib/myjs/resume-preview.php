<?php
include("../includes/theme-data.php");
$theme="myjs";
$com="Resume Preview";

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
		
		<!--==================================== Resume Preview===================================================-->
		<a name="resume-preview" id="resume-preview">&nbsp;</a>
		<h3 class="sub-title">Resume Preview (Content)</h3>
		
		<div class="panel panel-default">
			<div class="panel-heading">
				<div class="panel-title"><strong>Primary Panel</strong></div>
			</div>
			<div class="panel-body">
				<blockquote class="alert-default">
					<h5>The body of the resume preview is made of <code>panel-group</code> and <code>panel-basic</code>.</h5>
					<h5>The first <code>panel-basic</code> will include <code>resume-primary</code> to have a slightly different style than other <code>panel-basic</code>.</h5>
				</blockquote>	
				<div class="row">
					<div class="col-md-8 col-xs-12">
						<div class="well clearfix">
							<div class="panel-group resume">
								<div class="panel panel-basic resume-primary">
									<div class="panel-body">
										<div class="media">
											<div class="media-left">
												<div class="thumbnail thumbnail-no-photo"></div>
											</div>
											<div class="media-body">
												<div class="col-sm-9">
													<div class="primary">
														<h4 class="title">Lucas Lee Choon Hoe</h4>
														<div class="info"><span class="text">Senior Software Engineer</span><span class="fig">(5 years)</span></div>
														<div class="info no-fig"><span class="text">JobStreet.com Sdn Bhd</span></div>
													</div>
												</div>
												<div class="col-sm-3 visible-lg">
													<ul class="list-inline pull-right">
														<li>
															<a href="#" title="Download Resume"><span class="icon-download"></span></a>
														</li>
														<li>
															<a href="#" title="Print Resume"><span class="icon-printer"></span></a>
														</li>
													</ul>
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
								</div>
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
							</div>
						</div>
					</div>
				</div>
				<pre class="well prettyprint">
					<input class="btn btn-info btnCopy" type="button" value="Copy" data-trigger="hover" data-toggle="tooltip" data-original-title="Copy to clipboard" data-placement="top"/><div class="code_content">
&lt;div class=&quot;panel-group resume&quot;&gt;
  &lt;div class=&quot;panel panel-basic resume-primary&quot;&gt;
    &lt;div class=&quot;panel-body&quot;&gt;
      &lt;div class=&quot;media&quot;&gt;
        &lt;div class=&quot;media-left&quot;&gt;
          &lt;div class=&quot;thumbnail thumbnail-no-photo&quot;&gt;&lt;/div&gt;
        &lt;/div&gt;
        &lt;div class=&quot;media-body&quot;&gt;
          &lt;div class=&quot;col-sm-9&quot;&gt;
            &lt;div class=&quot;primary&quot;&gt;
              &lt;h4 class=&quot;title&quot;&gt;Lucas Lee Choon Hoe&lt;/h4&gt;
              &lt;div class=&quot;info&quot;&gt;&lt;span class=&quot;text&quot;&gt;Senior Software Engineer&lt;/span&gt;&lt;span class=&quot;fig&quot;&gt;(5 years)&lt;/span&gt;&lt;/div&gt;
            &lt;/div&gt;
          &lt;/div&gt;
          &lt;div class=&quot;col-sm-3 visible-lg&quot;&gt;
            &lt;ul class=&quot;list-inline pull-right&quot;&gt;
              &lt;li&gt;
                &lt;a href=&quot;#&quot; &gt;&lt;span class=&quot;icon-download&quot;&gt;&lt;/span&gt;&lt;/a&gt;
              &lt;/li&gt;
              &lt;li&gt;
                &lt;a href=&quot;#&quot; &gt;&lt;span class=&quot;icon-printer&quot;&gt;&lt;/span&gt;&lt;/a&gt;
              &lt;/li&gt;
            &lt;/ul&gt;
          &lt;/div&gt;
          &lt;div class=&quot;col-sm-12&quot;&gt;
            &lt;ul class=&quot;info-list list-inline hidden-xs&quot;&gt;
              &lt;li&gt;&lt;span class=&quot;icon-phone&quot;&gt;&lt;/span&gt; (+60)12 5553344&lt;/li&gt;
              &lt;li&gt;&lt;span class=&quot;icon-envelope&quot;&gt;&lt;/span&gt; longusernamedisplay@email.com&lt;/li&gt;
            &lt;/ul&gt;
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
				<div class="panel-title"><strong>Sub Panel</strong></div>
			</div>
			<div class="panel-body">
				<div class="row">
					<div class="col-md-8 col-xs-12">
						<div class="well clearfix">
							<div class="panel-group resume">
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
													Education in its general sense is a form of learning in which the knowledge, skills, values, beliefs and habits of a group of people are transferred from one generation to the next through storytelling, discussion, teaching, training, and or research. Education may also include informal transmission of such information from one human being to another. Education frequently takes place under the guidance of others, but learners may also educate themselve. Any experience that has a formative effect on the way one thinks, feels, or acts may be considered educational.
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
				<blockquote class="alert-default">
					<h5>Use <code>row</code> <code>x2</code> class to sets the bottom margin of the row and <code>label</code> tag create a grey text.</h5>
				</blockquote>	
				<pre class="well prettyprint">
					<input class="btn btn-info btnCopy" type="button" value="Copy" data-trigger="hover" data-toggle="tooltip" data-original-title="Copy to clipboard" data-placement="top"/><div class="code_content">
&lt;div class=&quot;panel-group resume&quot;&gt;
  &lt;div class=&quot;panel panel-basic&quot;&gt;
    &lt;div class=&quot;panel-header&quot;&gt;
      &lt;h4&gt;
        &lt;span class=&quot;icon-briefcase&quot;&gt;&lt;/span&gt;
        &lt;span&gt;Experience&lt;/span&gt;
      &lt;/h4&gt;
    &lt;/div&gt;
    &lt;div class=&quot;panel-body&quot;&gt;
      &lt;div class=&quot;row&quot;&gt;
        &lt;h5 class=&quot;col-sm-12&quot;&gt;5 years of total experience&lt;/h5&gt;
      &lt;/div&gt;
      &lt;div class=&quot;row resume-item&quot;&gt;
        &lt;div class=&quot;col-xs-12 col-sm-3 hidden-xs&quot;&gt;
          &lt;div&gt;Jan 2013 - Present &lt;/div&gt;
          &lt;div class=&quot;fig&quot;&gt;1 year 10 months&lt;/div&gt;
        &lt;/div&gt;
        &lt;div class=&quot;col-xs-12 col-sm-9&quot;&gt;
          &lt;h4 class=&quot;title&quot;&gt;
            Senior Software Engineer
          &lt;/h4&gt;
          &lt;div class=&quot;key-info&quot;&gt;
            &lt;span&gt;Mastek MSC SDN BHD&lt;/span&gt;
          &lt;/div&gt;
          &lt;div class=&quot;info visible-xs&quot;&gt;Jan 2013 - Present &lt;span class=&quot;fig&quot;&gt;(1 year 10 months)&lt;/span&gt;&lt;/div&gt;
          &lt;div class=&quot;info-table&quot;&gt;
            &lt;div class=&quot;row&quot;&gt;
              &lt;label class=&quot;col-xs-4 col-sm-3&quot;&gt;Industry&lt;/label&gt;
              &lt;span class=&quot;info&quot;&gt;Aerospace / Aviation / Airline&lt;/span&gt;
            &lt;/div&gt;
          &lt;/div&gt;
          &lt;div class=&quot;sub-info&quot;&gt;
            Training Modules Design and Development.
          &lt;/div&gt;
        &lt;/div&gt;
      &lt;/div&gt;
    &lt;/div&gt;
  &lt;/div&gt;
&lt;/div&gt;</div></pre>
				<blockquote class="alert-success" role="alert">
					<h4 class="text-success">Source Code</h4>
					<p>Source code of content for resume preview can be download here.</p>
					<p><a href="myjs/source-code/resume-prev-content.html" class="btn btn-success" download>Download</a></p>
				</blockquote>
			</div>
		</div>
	</div>
</section>

<?php include("../includes/script.php");?>
<style>
	/*For resume-preview use only*/
	@media screen and (min-width: 1200px){
		.perpectual-lg-2{width: 235px; }
		.col-xs-12.col-lg-3 > div {margin-top: 50px; }
	}
	@media screen and (max-width: 1199px){
		.col-xs-12.col-lg-3 > div {margin-top: 50px; }
	}
	@media screen and (max-width: 767px){
		.col-xs-12.col-lg-3 > div {margin-top: 40px; }
	}
</style>
</body>
</html>