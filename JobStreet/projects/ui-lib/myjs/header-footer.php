<?php
include("../includes/theme-data.php");
$theme="myjs";
$com="Header & Footer";

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
		
		<a name="full-header" id="full-header">&nbsp;</a>
		<h3 class="sub-title">Get Started</h3>
		<div class="panel">
			<div class="panel-body">
				<blockquote class="alert-default">
					<h5>Include <code>body-mobile-align</code> class into <code>body</code> tag. </5>
					<h5>Doing this will create a top-margin for the body so that the page content doesn't stack behind navigation bar.</h5> 
				</blockquote>
				<pre class="well prettyprint">
&lt;body class=&quot;body-mobile-align&quot;&gt;
&lt;/body&gt;</pre>
			</div>
		</div>
		
		
		<a name="full-header" id="full-header">&nbsp;</a>
		<h3 class="sub-title">Header</h3>
		<div class="navbar navbar-inverse navbar-static">
			<div class="container">
				<div class="navbar-header">
					<button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse" data-canvas="body" type="button" onclick="$('#mobile_search_bar').removeClass('active');">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<span class="jslogo jslogo-mobile visible-xs"></span>
					<!--Mobile View Search Bar toggle button-->
					<div class="search-toggle">
						<a href="javascript:;"><span class="icon-search visible-xs"></span></a>
					</div>
					<div class="navbar-search toggle">
						<div class="container visible-xs">
							<div class="col-xs-12">
								<form id="frmSearch_mobile" name="frmSearch-mobile" action="http://job-search-dev.jobstreet.com.my/malaysia/job-opening.php" method="get">
									<div class="input-group">
										<input class="form-control" id="search_box_keyword_mobile" name="key" type="text" placeholder="Search Jobs By Title, Skills or Keywords...">               
										<span class="input-group-btn">
										<a class="btn btn-default" id="header_searchbox_btn_mobile" type="button">Search</a>
										</span>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
				<div class="navbar-collapse navbar-collapse-align collapse" aria-expanded="false" style="height: 1px;">
					<ul class="nav navbar-nav">
						<li class="active"><a href="http://www.jobstreet.com.my" title="Leading Job Site in Malaysia - Find Jobs in Malaysia">Home</a></li>
						<li><a id="header-job-link" href="http://job-search-dev.jobstreet.com.my/malaysia/job-opening.php" title="Search Jobs @ Job Search JobStreet.com Malaysia">Search Jobs</a></li>
						<li><a href="http://www.jobstreet.com.my/en/companies" title="company profiles">Company Profiles</a></li>
						<li class="dropdown">
							<a class="dropdown-toggle" data-toggle="dropdown" href="javascript:;" aria-expanded="false">MyJobStreet&nbsp;<b class="caret"></b></a>		
							<ul class="dropdown-menu">
								<li class="dropdown-header hidden-xs">My Resume</li>
								<li class="hidden-xs"><a href="http://myjobstreet-dev.jobstreet.com.my/resume/preview-resume.php?x=a2p6dkp4hosoojv84nsr44ecp4">Preview Resume</a></li>
								<li class="hidden-xs"><a href="http://myjobstreet-dev.jobstreet.com.my/resume/edit-work-experience.php?x=a2p6dkp4hosoojv84nsr44ecp4">Edit Resume</a></li>
								<li class="divider hidden-xs"></li>
								<li class="dropdown-header">My Applications</li>
								<li><a href="http://myjobstreet-dev.jobstreet.com.my/application/application-status.php?view=0&amp;x=a2p6dkp4hosoojv84nsr44ecp4">Online Applications</a></li>
								<li><a href="http://myjobstreet-dev.jobstreet.com.my/application/interview-request.php?view=latest&amp;x=a2p6dkp4hosoojv84nsr44ecp4">Interview Requests</a></li>
								<li class="hidden-xs"><a id="header_emp_request_link" href="http://myjobstreet-dev.jobstreet.com.my/application/employer-request.php?x=a2p6dkp4hosoojv84nsr44ecp4">Resume Requests</a></li>
								<li class="divider hidden-xs"></li>
								<li class="dropdown-header hidden-xs">Career Enhancers</li>
								<li class="hidden-xs"><a href="http://myjobstreet-dev.jobstreet.com.my/career-enhancer/pa-summary.php?x=a2p6dkp4hosoojv84nsr44ecp4">Priority Application</a></li>
								<li class="hidden-xs"><a href="http://myjobstreet-dev.jobstreet.com.my/career-enhancer/salary-report.php?x=a2p6dkp4hosoojv84nsr44ecp4">Salary Report</a></li>
								<li class="hidden-xs"><a href="javascript: popup_win8('http://myjobstreet-dev.jobstreet.com.my/career-enhancer/assessment.php?x=a2p6dkp4hosoojv84nsr44ecp4', 1000,700,'JELA');">English Assessment</a></li>
								<li class="hidden-xs">
									<a class="hidden-xs" href="javascript: popup_win8('http://www.jobstreet.com.my/career-resources/', 1000,700,'JELA');">
									Career Resources</a>
								</li>
							</ul>
						</li>
						<li class="dropdown hidden-xs">
							<a data-toggle="dropdown" class="dropdown-toggle" href="#" aria-expanded="false">Learning&nbsp;<b class="caret"></b></a>
							<ul class="dropdown-menu">
								<li><a href="http://www.jobstreet.com.my/learning/">View Course</a></li>
								<li><a href="http://myjobstreet-dev.jobstreet.com.my/learning/learning-profile.php?x=g8q1cqbllnaoieol1h0ulno8h2">Edit Learning Profile</a></li>
							</ul>
						</li>
						<li class="dropdown hidden-xs">
							<a class="dropdown-toggle" data-toggle="dropdown" href="javascript:;" aria-expanded="false">More&nbsp;<b class="caret"></b></a>
							<ul class="dropdown-menu">
								<li><a href="http://job-search-dev.jobstreet.com.my/malaysia/browse/oversea.html">Overseas Jobs</a></li>
								<li><a href="http://www.jobstreet.com.my/campus/">Fresh Grad Jobs</a></li>
								<li><a href="http://job-search-dev.jobstreet.com.my/malaysia/job-classified.php">Classified Jobs</a></li>
							</ul>
						</li>
					</ul>
					<ul class="nav navbar-nav navbar-right">
						<li class="dropdown" style="display: list-item;">
							<a class="dropdown-toggle" data-toggle="dropdown" href="javascript:;" aria-expanded="false">
							<span class="-hide">
							<span class="display-name">Lucas Lee</span>&nbsp;
							<span><b class="caret"></b></span>
							</span>
							</a>
							<ul class="dropdown-menu">
								<li><a href="http://myjobstreet-dev.jobstreet.com.my/home/logout.php?x=g8q1cqbllnaoieol1h0ulno8h2">Logout</a></li>
								<li class="hidden-xs"><a href="http://myjobstreet-dev.jobstreet.com.my/home/help.php?x=g8q1cqbllnaoieol1h0ulno8h2&amp;site=my">Help</a></li>
								<li class="hidden-xs"><a class="language-separator" href="http://myjobstreet-dev.jobstreet.com.my/registration/update-account.php?x=g8q1cqbllnaoieol1h0ulno8h2">My Account</a></li>
							</ul>
						</li>
						<li style="display: none;"> 
							<a href="https://myjobstreet-dev.jobstreet.com.my/home/login.php?site=my&amp;language_code=3">Log In</a>
						</li>
						<li class="hidden-xs" style="display: none;"> <span>|</span> </li>
						<li style="display: none;">
							<a href="https://myjobstreet-dev.jobstreet.com.my/registration/simple-signup.php?site=my&amp;language_code=3">Sign Up</a>
						</li>
						<ul></ul>
					</ul>
				</div>
				<!--/.nav-collapse -->
			</div>
			<div class="navbar-lower-deck hidden-xs">
				<div class="container">
					<div class="col-lg-3 col-md-3 col-sm-4 hidden-xs">
						<a class="jslogo my" id="header-logo-link" href="http://www.jobstreet.com.my" title="Leading Job Site in Malaysia - Find Jobs, Advertise Jobs in Malaysia"></a>
					</div>
					<div class="col-lg-5 col-md-5 col-sm-6">
						<div class="search-area">
							<form id="frmSearch" name="frmSearch" action="http://job-search-dev.jobstreet.com.my/malaysia/job-opening.php" method="get">
								<div class="input-group">
									<input class="form-control" name="key" type="text" placeholder="Search Jobs By Title, Skills or Keywords...">					
									<span class="input-group-btn"><a class="btn btn-default" type="button"><span class="icon-search"></span></a></span>
								</div>
							</form>
						</div>
					</div>
					<div class="col-lg-2 col-md-2 hidden-sm hidden-xs">
						<a class="btn btn-link" href="http://job-search-dev.jobstreet.com.my/malaysia/advance-job-search.php?area=1&amp;option=1&amp;job-source=1%2C64&amp;classified=1&amp;job-posted=0&amp;sort=1&amp;order=0" title="Advanced Job Search @ JobStreet.com ">Advanced</a>
					</div>
					<div class="col-lg-2 col-md-2 col-sm-2 hidden-xs text-right">
						<a class="btn btn-link employer-link" id="header-employer-link" href="http://www.jobstreet.com.my/employers/" title="Post a Job Ad: +603-­2176 0333">Employers</a>
					</div>
				</div>
			</div>
		</div>

		<div class="panel">
			<div class="panel-body">
				The header consists of 2 parts - navigation bar and search bar.<br>
				<h4>Navigation Bar</h4>
				<pre class="well prettyprint">
				<input class="btn btn-info btnCopy" type="button" value="Copy" data-trigger="hover" data-toggle="tooltip" data-original-title="Copy to clipboard" data-placement="top"/><div class="code_content">
&lt;div class=&quot;mobile-navbar-fixed-top&quot;&gt;
  &lt;div class=&quot;navbar navbar-inverse navbar-static&quot;&gt;
    &lt;div class=&quot;container&quot;&gt;
      &lt;!--Mobile View NavBar--&gt;
      &lt;div class=&quot;navbar-header&quot;&gt;
        &lt;button class=&quot;navbar-toggle&quot; data-toggle=&quot;collapse&quot; data-target=&quot;.navbar-collapse&quot;&gt;
          &lt;span class=&quot;icon-bar&quot;&gt;&lt;/span&gt;
          &lt;span class=&quot;icon-bar&quot;&gt;&lt;/span&gt;
          &lt;span class=&quot;icon-bar&quot;&gt;&lt;/span&gt;
        &lt;/button&gt;
        &lt;span class=&quot;jslogo jslogo-mobile visible-xs&quot;&gt;&lt;/span&gt;
        &lt;!--Mobile View Search Bar toggle button--&gt;
        &lt;div class=&quot;search-toggle&quot;&gt;
          &lt;a href=&quot;javascript:;&quot;&gt;&lt;span class=&quot;icon-search visible-xs&quot;&gt;&lt;/span&gt;&lt;/a&gt;
        &lt;/div&gt;
        &lt;div class=&quot;navbar-search toggle&quot;&gt;
          &lt;div class=&quot;container visible-xs&quot;&gt;
            &lt;form&gt;
              &lt;div class=&quot;input-group&quot;&gt;
                &lt;input class=&quot;form-control&quot;&gt;               
                &lt;span class=&quot;input-group-btn&quot;&gt;
                  &lt;a class=&quot;btn btn-default&quot; type=&quot;button&quot;&gt;Search&lt;/a&gt;
                &lt;/span&gt;
              &lt;/div&gt;
            &lt;/form&gt;
          &lt;/div&gt;
        &lt;/div&gt;
      &lt;/div&gt;
      &lt;!--Navbar Collapses Into Mobile View--&gt;
      &lt;div class=&quot;navbar-collapse collapse&quot;&gt;
        &lt;ul class=&quot;nav navbar-nav&quot;&gt;
          &lt;li class=&quot;active&quot;&gt;&lt;a href=&quot;javascript:;&quot;&gt;Home&lt;/a&gt;&lt;/li&gt;
          &lt;li class=&quot;dropdown&quot;&gt;
            &lt;a class=&quot;dropdown-toggle&quot; data-toggle=&quot;dropdown&quot; href=&quot;javascript:;&quot;&gt;MyJobStreet
              &lt;span&gt;&lt;b class=&quot;caret&quot;&gt;&lt;/b&gt;&lt;/span&gt;
            &lt;/a&gt;		
            &lt;ul class=&quot;dropdown-menu&quot;&gt;
              &lt;li class=&quot;dropdown-header&quot;&gt;My Resume&lt;/li&gt;
              &lt;li class=&quot;divider&quot;&gt;&lt;/li&gt;
              &lt;li&gt;&lt;a href=&quot;javascript:;&quot;&gt;Edit Resume&lt;/a&gt;&lt;/li&gt;
            &lt;/ul&gt;
          &lt;/li&gt;
        &lt;/ul&gt;
        &lt;ul class=&quot;nav navbar-nav navbar-right&quot;&gt;
          &lt;li class=&quot;dropdown&quot;&gt;
            &lt;a href=&quot;javascript:;&quot;&gt;Lucas Lee&lt;/a&gt;
          &lt;/li&gt;
        &lt;/ul&gt;
      &lt;/div&gt;&lt;!-- /.navbar-collapse --&gt;
    &lt;/div&gt;&lt;!-- /.container-fluid --&gt;
    &lt;!--Search Bar Here --&gt;
  &lt;/div&gt;
&lt;/div&gt;</div></pre>	
				<h4>Search Bar</h4>
				<pre class="well prettyprint">
					<input class="btn btn-info btnCopy" type="button" value="Copy" data-trigger="hover" data-toggle="tooltip" data-original-title="Copy to clipboard" data-placement="top"/><div class="code_content">
  &lt;div class=&quot;navbar-lower-deck hidden-xs&quot;&gt;
    &lt;div class=&quot;container&quot;&gt;
      &lt;div class=&quot;col-lg-3 col-md-3 col-sm-4 hidden-xs&quot;&gt;
        &lt;a class=&quot;jslogo my&quot;&gt;&lt;/a&gt;
      &lt;/div&gt;
      &lt;div class=&quot;col-lg-5 col-md-5 col-sm-6&quot;&gt;
        &lt;div class=&quot;search-area&quot;&gt;
          &lt;form id=&quot;frmSearch&quot; name=&quot;frmSearch&quot; method=&quot;get&quot;&gt;
            &lt;div class=&quot;input-group&quot;&gt;
              &lt;input class=&quot;form-control&quot; name=&quot;key&quot; type=&quot;text&quot; placeholder=&quot;Search Jobs..&quot;&gt;					
              &lt;span class=&quot;input-group-btn&quot;&gt;
                &lt;a class=&quot;btn btn-default&quot; type=&quot;button&quot;&gt;
                  &lt;span class=&quot;icon-search&quot;&gt;&lt;/span&gt;
                &lt;/a&gt;
              &lt;/span&gt;
            &lt;/div&gt;
          &lt;/form&gt;
        &lt;/div&gt;
      &lt;/div&gt;
    &lt;/div&gt;
  &lt;/div&gt;</div></pre>	
				<blockquote class="alert-warning" role="alert">
					<h4 class="text-warning">Requires JQuery plug-in</h4>
					<p>
						If JQuery plug-in is not included, it will be impossible to click on the <span class="icon-search"></span> icon in mobile view. 
						<pre class="well prettyprint">
$(function(){	
	$(".search-toggle").click(function(){
		$(".navbar-collapse").removeClass("in");
		$(".search-toggle").not(this).parent().removeClass("active");
		$(this).parent().toggleClass("active");
	});
	
	$(".navbar-toggle").click(function(){
		$(".search-toggle").parent().removeClass("active");
	});
});
						</pre>
						<p>Here is the CDN link for the JQuery Plug-in.</p>
						<pre class="well prettyprint">
&lt;script src=&quot;http://dna.jsstatic.com/js/myjs.js&quot;&gt;&lt;/script&gt;
						</pre>
					</p>
				</blockquote>
				<blockquote class="alert-success" role="alert">
					<h4 class="text-success">Source Code</h4>
					<p>Source code for full header can be download here.</p>
					<p><a href="myjs/source-code/full-header.html" class="btn btn-success" download>Download</a></p>
				</blockquote>
			</div>
		</div>
		<a name="footer" id="footer">&nbsp;</a>
		<h3 class="sub-title">Footer</h3>
	
		<div class="panel">
			<div class="panel-body">
				<footer>
					<ul class="list-inline">
						<li><a href="http://www.jobstreet.com.my/sitemap.htm" id="footer-sitemap">Site Map</a></li>
						<li><a href="http://www.jobstreet.com.my/aboutus/default.htm">About Us</a></li>
						<li><a href="http://job-search.jobstreet.com/CompanyProfile/company-profile.php?dm=http%3a%2f%2fsiva-my.jsstatic.com&amp;p=%2f_ads%2f_static%2fxml%2fMY%2f&amp;token=28b361b7dc8f5a797749c8397de04e59d5e14a2968d0b48e496e&amp;rnd=91859390#.UrjtWvQW1qV" id="footer_work_with_us">Work With Us</a></li>
						<li><a href="http://www.jobstreet.com.my/terms-of-use.htm" id="footer_term_use">Terms of Use</a> </li>
						<li><a href="http://www.jobstreet.com.my/privacy-policy.htm" id="footer_privacy_policy">Privacy Policy</a></li>
						<li><a href="http://www.jobstreet.com.my/safe-job-search-guide.htm" id="footer_safe_guide">Safe Job Search Guide</a></li>
						<li><a href="http://myjobstreet-dev.jobstreet.com.my/home/help.php?site=my" id="footer_help">Help</a></li>
						<li><a href="http://myjobstreet-dev.jobstreet.com.my/home/feedback.php?site=my&amp;sub=feedback" id="footer_feedback" target="_blank">Send Feedback</a></li>
					</ul>
					<p class="text-copyright">Copyright &copy; <span id="year"></span> JobStreet.com</p>
				</footer><br><br>
			</div>
		</div>
		<div class="panel">
			<div class="panel-body">
				This is the footer for Myjs page. Use <code>list-inline</code> to place all list items on a single line.
				<pre class="well prettyprint">
					<input class="btn btn-info btnCopy" type="button" value="Copy" data-trigger="hover" data-toggle="tooltip" data-original-title="Copy to clipboard" data-placement="top"/><div class="code_content">
&lt;footer&gt;
  &lt;div class=&quot;container&quot;&gt;
    &lt;ul class=&quot;list-inline&quot;&gt;
      &lt;li&gt;&lt;a href=&quot;javascript:;&quot;&gt;Site Map&lt;/a&gt;&lt;/li&gt;
	...
      &lt;li&gt;&lt;a href=&quot;javascript:;&quot;&gt;Send Feedback&lt;/a&gt;&lt;/li&gt;
    &lt;/ul&gt;
    &lt;p class=&quot;text-copyright&quot;&gt;Copyright &amp;copy; &lt;span id=&quot;year&quot;&gt;&lt;/span&gt; JobStreet.com&lt;/p&gt;
  &lt;/div&gt;
&lt;/footer&gt;
					</div></pre>
				<blockquote class="alert-success" role="alert">
					<h4 class="text-success">Source Code</h4>
					<p>Source code for footer can be download here.</p>
					<p><a href="myjs/source-code/footer.html" class="btn btn-success" download>Download</a></p>
				</blockquote>
			</div>
		</div>
		
		<!--==================================== Side Footer ===================================================-->
		<a name="side-footer" id="side-footer">&nbsp;</a>
		<h3 class="sub-title">Side Footer</h3>
		
		<div class="row">
			<div class="col-md-4">
				<div class="panel-group side-footer">
					<div class="panel panel-basic">
						<div class="panel-body">
							<iframe src="http://www.facebook.com/plugins/like.php?href=http%3A%2F%2Fwww.facebook.com%2Fjobstreetmalaysia&amp;send=false&amp;layout=standard&amp;width=300&amp;show_faces=false&amp;action=like&amp;colorscheme=light&amp;font&amp;height=35" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:260px; height:35px;" allowTransparency="true"></iframe>
						</div>
					</div>
					<div class="panel panel-basic">
						<div class="panel-body">
							<div class="row social-links">
								<div class="col-xs-6">
									<a href="#"><span class="social-app"></span><span class="text">Mobile Apps</span></a>
								</div>
								<div class="col-xs-6">
									<a href="#"><span class="social-facebook"></span><span class="text">Facebook</span></a>
								</div>
								<div class="col-xs-6">
									<a href="#"><span class="social-twitter"></span><span class="text">Twitter</span></a>
								</div>
								<div class="col-xs-6">
									<a href="#"><span class="social-forum"></span><span class="text">Career Resource</span></a>
								</div>
							</div>
						</div>
					</div>
					<div class="panel panel-basic">
						<div class="panel-body">
							<ul>
								<li><a href="#">About Us</a></li>
								<li><a href="#">Terms of Use</a></li>
								<li><a href="#">Privacy Policy</a></li>
								<li><a href="#">Employers</a></li>
								<li><a href="#">Testimonials</a></li>
								<li><a href="#">Help</a></li>
								<li><a href="#">Career Resources</a></li>
								<li><a href="#">Feedback</a></li>
								<li><a href="#">Sitemap</a></li>
							</ul>
						</div>
					</div>
				</div>		
			</div>
			<div class="col-md-8"></div>
		</div>
		<div class="panel">
			<div class="panel-body">
				<blockquote class="alert-default">
					<h5>Side footer use <code>panel-group</code> to group multiple <code>panel-basic</code> together. <code>side-footer</code> is use to disable the background color. </h5>
					<h5>This side footer will be hidden in mobile view.</h5>
				</blockquote>
				<blockquote class="alert-warning">
				<h4>Social Icons</h4>
					<h5>The following social icon can be display using <code>a</code> tag and <code>social-</code> within <code>social-links</code>. </h5>
					<div class="row">
						<div class="col-sm-8">
							<div class="row social-links">
								<div class="col-xs-6">
									<a href="#"><span class="social-app"></span><span class="text"><code>social-app</code></span></a>
								</div>
								<div class="col-xs-6">
									<a href="#"><span class="social-facebook"></span><span class="text"><code>social-facebook</code></span></a>
								</div>
								<div class="col-xs-6">
									<a href="#"><span class="social-twitter"></span><span class="text"><code>social-twitter</code></span></a>
								</div>
								<div class="col-xs-6">
									<a href="#"><span class="social-forum"></span><span class="text"><code>social-forum</code></span></a>
								</div>
							</div>
						</div>
					</div>
					<h5>Example:</h5>
					
					<pre class="well prettyprint">
					<input class="btn btn-info btnCopy" type="button" value="Copy" data-trigger="hover" data-toggle="tooltip" data-original-title="Copy to clipboard" data-placement="top"/><div class="code_content">
&lt;div class=&quot;social-links&quot;&gt;
  &lt;a href=&quot;#&quot;&gt;
   &lt;span class=&quot;social-app&quot;&gt;&lt;/span&gt;
   &lt;span class=&quot;text&quot;&gt;JobStreet App&lt;/span&gt;
  &lt;/a&gt;
&lt;/div&gt;</div></pre>
				</blockquote>
				<pre class="well prettyprint">
					<input class="btn btn-info btnCopy" type="button" value="Copy" data-trigger="hover" data-toggle="tooltip" data-original-title="Copy to clipboard" data-placement="top"/><div class="code_content">
&lt;div class=&quot;panel-group side-footer&quot;&gt;
  &lt;!-- panel-basic 1 --&gt;
  &lt;div class=&quot;panel panel-basic&quot;&gt;
    &lt;div class=&quot;panel-body&quot;&gt;
      ...
    &lt;/div&gt;
  &lt;/div&gt;
  &lt;!-- panel-basic 2 --&gt;
  &lt;div class=&quot;panel panel-basic&quot;&gt;
    &lt;div class=&quot;panel-body&quot;&gt;
      &lt;div class=&quot;row social-links&quot;&gt;
        &lt;div class=&quot;col-xs-6&quot;&gt;
          &lt;a href=&quot;#&quot;&gt;&lt;span class=&quot;social-app&quot;&gt;&lt;/span&gt;&lt;span class=&quot;text&quot;&gt;Mobile Apps&lt;/span&gt;&lt;/a&gt;
        &lt;/div&gt;
        &lt;div class=&quot;col-xs-6&quot;&gt;
          &lt;a href=&quot;#&quot;&gt;&lt;span class=&quot;social-facebook&quot;&gt;&lt;/span&gt;&lt;span class=&quot;text&quot;&gt;Facebook&lt;/span&gt;&lt;/a&gt;
        &lt;/div&gt;
      &lt;/div&gt;
    &lt;/div&gt;
  &lt;/div&gt;
  &lt;!-- panel-basic 3 --&gt;
  &lt;div class=&quot;panel panel-basic&quot;&gt;
    &lt;div class=&quot;panel-body&quot;&gt;
      &lt;ul&gt;
        &lt;li&gt;&lt;a href=&quot;#&quot;&gt;About Us&lt;/a&gt;&lt;/li&gt;
        ...
        &lt;li&gt;&lt;a href=&quot;#&quot;&gt;Sitemap&lt;/a&gt;&lt;/li&gt;
      &lt;/ul&gt;
    &lt;/div&gt;
  &lt;/div&gt;
&lt;/div&gt;</div></pre>
				<blockquote class="alert-success" role="alert">
					<h4 class="text-success">Source Code</h4>
					<p>Source code for side footer can be download here.</p>
					<p><a href="myjs/source-code/side-footer.html" class="btn btn-success" download>Download</a></p>
				</blockquote>	
			</div>
		</div>	
	</div>
</section>

<?php include("../includes/script.php");?>
<style>
	/*For MyJS Header & Footer use only*/
	@media screen and (min-width:1201px) and (max-width: 1449px) {
		.container {width: 940px !important;}
	}

	@media screen and (min-width:993px) and (max-width: 1200px){
		.container {width: 730px !important;}
	}

	@media screen and (min-width:750px) and (max-width: 992px){
		.container {width: 590px !important;}
	}
</style>
</body>
</html>