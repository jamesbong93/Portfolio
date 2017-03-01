<?php
include("../includes/theme-data.php");
$theme="myjs";
$com="Side Navigation";

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
		<!--==================================== Side Navigation ===================================================-->
		
		<div class="col-xs-12 col-lg-3">
			<div class="panel panel-basic panel-sidenav fixed-top perpectual perpectual-lg-2 initial-hide" data-offset="120">
				<div class="panel-body">
					<ul class="side-menu preview-menu">
						<li>
							<a id="preview_resume_nav" href="#" class="active" style="margin-bottom: 12px;">
								<div class="media" style="height: 40px">
									<div class="media-left">
										<div class="thumbnail thumbnail-sm thumbnail-no-photo"></div>
									</div>
									<div class="media-body">
										Lucas Lee
										<div class="sub-info">View your resume</div>
									</div>
								</div>
							</a>
							<a role="button" class="btn btn-default btn-action hidden-lg">Edit&nbsp;<span class="caret"></span></a>
						</li>
					</ul>
					<ul class="side-menu edit-menu">
						<li>
							<a id="nav_experience" href="#"><span class="icon-briefcase" id="icon-briefcase"></span><span id="nav-lbl-experience">Experience</span></a>
						</li>
						<li>
							<a id="nav_education" href="#" ><span class="icon-education" id="icon-education"></span><span id="nav-lbl-education">Education</span></a>
						</li>
						<li>
							<a id="nav_skills" href="#"><span class="icon-math-compass" id="icon-math-compass"></span><span id="nav-lbl-skill">Skills</span></a>
						</li>
						<li>
							<a id="nav_languages" href="#"><span class="icon-comments-o" id="icon-comments-o"></span><span id="nav-lbl-language">Languages</span></a>
						</li>
						<li>
							<a id="nav_add_info" href="#"><span class="icon-menu" id="icon-menu"></span><span id="nav-lbl-additional">Additional Info</span></a>
						</li>
						<li>
							<a id="nav_about_me" href="#"><span class="icon-user" id="icon-user"></span><span id="nav-lbl-about">About Me</span></a>
						</li>
						<li>
							<a id="nav_upload" href="#"><span class="icon-paper-clip" id="icon-paper-clip"></span><span id="nav-lbl-upload">Upload Resume</span></a>
						</li>
						<li>
							<a id="nav_privacy" href="#"><span class="icon-vcard" id="icon-vcard"></span><span id="nav-lbl-privacy">Resume Privacy</span></a>
						</li>
					</ul>		
				</div>
			</div>
		</div>
		<div class="col-xs-12 col-lg-9">	
			<div class="panel">
				<div class="panel-body hidden-lg">
					The side menu will <br class="visible-xs"> collapse and pull to right before scroll down.
				</div>
			</div>
			<div class="panel">
				<div class="panel-body">
					<blockquote class="alert-default">
						<h5>Side Navigation will fix on the top-left corner when the page scroll down.</h5>
						<h5>Drag the screen to smaller size to see different effect.</h5>
					</blockquote>
					<pre class="well prettyprint">
						<input class="btn btn-info btnCopy" type="button" value="Copy" data-trigger="hover" data-toggle="tooltip" data-original-title="Copy to clipboard" data-placement="top"/><div class="code_content">
&lt;div class=&quot;panel panel-basic panel-sidenav fixed-top perpectual perpectual-lg-3 initial-hide&quot; data-offset=&quot;120&quot;&gt;
  &lt;div class=&quot;panel-body&quot;&gt;
    &lt;ul class=&quot;side-menu preview-menu&quot;&gt;
      &lt;li&gt;
        &lt;a id=&quot;preview_resume_nav&quot; href=&quot;#&quot; class=&quot;active&quot;&gt;
          &lt;div class=&quot;media&quot;&gt;
            &lt;div class=&quot;media-left&quot;&gt;
              &lt;div class=&quot;thumbnail thumbnail-sm thumbnail-no-photo&quot;&gt;&lt;/div&gt;
            &lt;/div&gt;
            &lt;div class=&quot;media-body&quot;&gt;
              Lucas Lee
              &lt;div class=&quot;sub-info&quot;&gt;View your resume&lt;/div&gt;
            &lt;/div&gt;
          &lt;/div&gt;
        &lt;/a&gt;
        &lt;a role=&quot;button&quot; class=&quot;btn btn-default btn-action hidden-lg&quot;&gt;Edit&lt;span class=&quot;caret&quot;&gt;&lt;/span&gt;&lt;/a&gt;
      &lt;/li&gt;
    &lt;/ul&gt;
    &lt;ul class=&quot;side-menu edit-menu&quot;&gt;
      &lt;li&gt;
        &lt;a href=&quot;#&quot;&gt;&lt;span class=&quot;icon-briefcase&quot;&gt;&lt;/span&gt;Experience&lt;/a&gt;
      &lt;/li&gt;
      &lt;li&gt;
        &lt;a href=&quot;#&quot; &gt;&lt;span class=&quot;icon-education&quot;&gt;&lt;/span&gt;Education&lt;/a&gt;
      &lt;/li&gt;
    &lt;/ul&gt;
  &lt;/div&gt;
&lt;/div&gt;</div></pre>
					<blockquote class="alert-default">
						<h5><code>initial-hide</code> is use in this side menu to hide the user image and text when in mobile view. </h5>
					</blockquote>
						
<blockquote class="alert-danger" role="alert">
						<h4 class="text-danger">Requires JQuery plug-in</h4>
						<p>If JQuery plug-in is not included, it will be impossible to show the collapse menu.</p>
						<pre class="well prettyprint">
//===========================Side Menu Click on Button Action===================================
$('.panel-sidenav .btn-action').click(function(){
	if($('ul.edit-menu').css('display') == 'none'){
		$('ul.edit-menu').show();
	}else{
		$('ul.edit-menu').hide();
	}
});</pre>
						<p>Here is the CDN link for the JQuery Plug-in.</p>
						<pre class="well prettyprint">
&lt;script src=&quot;http://dna.jsstatic.com/js/myjs.js&quot;&gt;&lt;/script&gt;
</pre>
					</blockquote>
					<blockquote class="alert-warning" role="alert">
						<h4 class="text-warning">Select2</h4>
						<p>Select2 is require for the side menu button to function.</p>
						<p>To use Select2, you must include the JavaScript and CSS file. Here's the CDN for the both files.</p>
						<pre class="well prettyprint">
&lt;link rel=&quot;stylesheet&quot; href=&quot;http://dna.jsstatic.com/select2/select2.css&quot;&gt;
&lt;script src=&quot;http://dna.jsstatic.com/select2/select2.js&quot;&gt;&lt;/script&gt;</pre>
					</blockquote>	
					<blockquote class="alert-success" role="alert">
						<h4 class="text-success">Source Code</h4>
						<p>Source code of side menu for resume preview can be download here.</p>
						<p><a href="myjs/source-code/resume-prev-side.html" class="btn btn-success" download>Download</a></p>
					</blockquote>					
				</div>
			</div><!--End Panel-->
	</div>
</section>

<?php include("../includes/script.php");?>
<style>
	/*For side-navigation use only*/
	@media screen and (min-width: 1200px){
		.perpectual-lg-2 {width: 235px; }
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