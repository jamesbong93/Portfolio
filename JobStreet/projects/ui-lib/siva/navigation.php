<?php
include("../includes/theme-data.php");
$theme="siva";
$com="Navigation";

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
				<div class="panel-title"><strong>Basic Top Bar</strong></div>
			</div>
			<div class="panel-body">
				<!--// TOP BAR //-->
				<div class="panel topbar">
					<div class="panel-body">
						<div class="topbar-heading">
							<div class="topbar-title">
								<h1>Page Title</h1> <a class="btn btn-link" role="button"><span class="icon-search"></span></a>
							</div>
							<div class="topbar-search">
								<form class="form-group">
									<span class="icon-search"></span>
									<span class="icon-close"></span>
									<input type="text" class="form-control" placeholder="Search for job ads...">
								</form>
							</div>
						</div>

						<ul class="nav nav-pills pull-right">
							<li class="active"><a href="#">Menu Item <span class="fig">10</span></a></li>
							<li><a href="#">Menu Item <span class="fig">2</span></a></li>
							<li><a href="#">Menu Item <span class="fig">13</span></a></li>
						</ul>
					</div>
				</div>
				<!--// TOP BAR END //-->
				<pre class="well prettyprint"><input class="btn btn-info btnCopy" type="button" value="Copy" data-trigger="hover" data-toggle="tooltip" data-original-title="Copy to clipboard" data-placement="top"/><div class="code_content">
&lt;!--// TOP BAR //--&gt;
&lt;div class=&quot;panel topbar&quot;&gt;
  &lt;div class=&quot;panel-body&quot;&gt;
    &lt;div class=&quot;topbar-heading&quot;&gt;
      &lt;div class=&quot;topbar-title&quot;&gt;
        &lt;h1&gt;Page Title&lt;/h1&gt;
        &lt;a class=&quot;btn btn-link&quot; role=&quot;button&quot;&gt;&lt;span class=&quot;icon-search&quot;&gt;&lt;/span&gt;&lt;/a&gt;
      &lt;/div&gt;
      &lt;div class=&quot;topbar-search&quot;&gt;
        &lt;form class=&quot;form-group&quot;&gt;
          &lt;span class=&quot;icon-search&quot;&gt;&lt;/span&gt;
          &lt;span class=&quot;icon-close&quot;&gt;&lt;/span&gt;
          &lt;input type=&quot;text&quot; class=&quot;form-control&quot; placeholder=&quot;Search for job ads...&quot;&gt;
        &lt;/form&gt;
      &lt;/div&gt;
    &lt;/div&gt;
    &lt;ul class=&quot;nav nav-pills pull-right&quot;&gt;
      &lt;li class=&quot;active&quot;&gt;&lt;a href=&quot;#&quot;&gt;Menu Item &lt;span class=&quot;fig&quot;&gt;10&lt;/span&gt;&lt;/a&gt;&lt;/li&gt;
      &lt;li&gt;&lt;a href=&quot;#&quot;&gt;Menu Item &lt;span class=&quot;fig&quot;&gt;2&lt;/span&gt;&lt;/a&gt;&lt;/li&gt;
      &lt;li&gt;&lt;a href=&quot;#&quot;&gt;Menu Item &lt;span class=&quot;fig&quot;&gt;13&lt;/span&gt;&lt;/a&gt;&lt;/li&gt;
    &lt;/ul&gt;
  &lt;/div&gt;
&lt;/div&gt;
&lt;!--// TOP BAR END //--&gt;				
				</div></pre>
				<blockquote class="alert-warning" role="alert">
					<p>For the <span class="icon-search"></span> icon to work, kindly include the <code>siva.js</code> in your page.</p>
					
				</blockquote>

			</div>
		</div>
				
		<div class="panel panel-default">
			<div class="panel-heading">
				<div class="panel-title"><strong>Top Bar with multiple menu items</strong></div>
			</div>
			<div class="panel-body">		
				<blockquote class="alert-default" role="alert">
				Multiple menu items in the top bar will display as dropdown menu when in mobile view
				</blockquote>
				
				<!--// TOP BAR //-->
				<div class="panel topbar">
					<div class="panel-body">
						<div class="topbar-heading">
							<div class="topbar-title">
								<h1>Page Title</h1><a class="btn btn-link" role="button"><span class="icon-search"></span></a>
							</div>
							<div class="topbar-search">
								<form class="form-group">
									<span class="icon-search"></span>
									<span class="icon-close"></span>
									<input type="text" class="form-control" placeholder="Search for job ads...">
								</form>
							</div>
						</div>
						<ul class="nav nav-pills pull-right">
							<li class="active"><a href="#">Menu Item <span class="fig">10</span></a></li>
							<li><a href="#">Menu Item <span class="fig">2</span></a></li>
							<li><a href="#">Menu Item <span class="fig">13</span></a></li>
							<li><a href="#">Menu Item <span class="fig">0</span></a></li>
							<span class="icon-ellipsis-v more visible-xs"></span>
						</ul>
					</div>
				</div>
				<!--// TOP BAR END //-->
								
				<blockquote class="alert-default" role="alert">
					To show the <span class="icon-ellipsis-v"></span> icon when in mobile view, just add the extra line of code into your <code>&lt;ul&gt;</code> tag
				</blockquote>
				<pre class="well prettyprint"><input class="btn btn-info btnCopy" type="button" value="Copy" data-trigger="hover" data-toggle="tooltip" data-original-title="Copy to clipboard" data-placement="top"/><div class="code_content">
&lt;span class=&quot;icon-ellipsis-v more visible-xs&quot;&gt;&lt;/span&gt;
				</div></pre>
				
				<blockquote class="alert-default" role="alert">
					The result is as shown below:
				</blockquote>
				<pre class="well prettyprint"><input class="btn btn-info btnCopy" type="button" value="Copy" data-trigger="hover" data-toggle="tooltip" data-original-title="Copy to clipboard" data-placement="top"/><div class="code_content">
&lt;ul class=&quot;nav nav-pills pull-right&quot;&gt;
  &lt;li class=&quot;active&quot;&gt;&lt;a href=&quot;#&quot;&gt;Menu Item &lt;span class=&quot;fig&quot;&gt;10&lt;/span&gt;&lt;/a&gt;&lt;/li&gt;
  &lt;li&gt;&lt;a href=&quot;#&quot;&gt;Menu Item &lt;span class=&quot;fig&quot;&gt;2&lt;/span&gt;&lt;/a&gt;&lt;/li&gt;
  &lt;li&gt;&lt;a href=&quot;#&quot;&gt;Menu Item &lt;span class=&quot;fig&quot;&gt;13&lt;/span&gt;&lt;/a&gt;&lt;/li&gt;
  &lt;li&gt;&lt;a href=&quot;#&quot;&gt;Menu Item &lt;span class=&quot;fig&quot;&gt;0&lt;/span&gt;&lt;/a&gt;&lt;/li&gt;
  &lt;span class=&quot;icon-ellipsis-v more visible-xs&quot;&gt;&lt;/span&gt;
&lt;/ul&gt;			
				</div></pre>
				<blockquote class="alert-warning" role="alert">
					<p>For the <span class="icon-ellipsis-v"></span> icon to work, kindly include the <code>siva.js</code> in your page.</p>
					
				</blockquote>
			</div>
		</div>
		
		<div class="panel panel-default">
			<div class="panel-heading">
				<div class="panel-title"><strong>Top Bar with back button</strong></div>
			</div>
			<div class="panel-body">
				<blockquote class="alert-default" role="alert">
					Back button appears only in mobile view
				</blockquote>
				
				<!--// TOP BAR //-->
				<div class="panel topbar">
					<div class="panel-body">
						<div class="topbar-heading">
							<div class="topbar-title">
								<a href="" class="back visible-xs"><span class="icon-angle-left"></span></a>
								<h1>Page Title</h1> <a class="btn btn-link" role="button"><span class="icon-search"></span></a>
							</div>
							<div class="topbar-search">
								<form class="form-group">
									<span class="icon-search"></span>
									<span class="icon-close"></span>
									<input type="text" class="form-control" placeholder="Search for job ads...">
								</form>
							</div>
						</div>
						<ul class="nav nav-pills pull-right">
							<li class="active"><a href="#">Menu Item <span class="fig">10</span></a></li>
							<li><a href="#">Menu Item <span class="fig">2</span></a></li>
							<li><a href="#">Menu Item <span class="fig">13</span></a></li>
						</ul>
					</div>
				</div>
				<!--// TOP BAR END //-->
				<blockquote class="alert-default" role="alert">
					Add the following line of code into <code>topbar-title</code> just before the <code>&lt;h1&gt;</code> tag
				</blockquote>
				<pre class="well prettyprint"><input class="btn btn-info btnCopy" type="button" value="Copy" data-trigger="hover" data-toggle="tooltip" data-original-title="Copy to clipboard" data-placement="top"/><div class="code_content">
&lt;a href=&quot;&quot; class=&quot;back visible-xs&quot;&gt;&lt;span class=&quot;icon-angle-left&quot;&gt;&lt;/span&gt;&lt;/a&gt;
				</div></pre>
				
				<blockquote class="alert-default" role="alert">
					The result is as shown below:
				</blockquote>
				<pre class="well prettyprint"><input class="btn btn-info btnCopy" type="button" value="Copy" data-trigger="hover" data-toggle="tooltip" data-original-title="Copy to clipboard" data-placement="top"/><div class="code_content">
&lt;div class=&quot;topbar-title&quot;&gt;
  &lt;a href=&quot;&quot; class=&quot;back visible-xs&quot;&gt;&lt;span class=&quot;icon-angle-left&quot;&gt;&lt;/span&gt;&lt;/a&gt;
  &lt;h1&gt;Page Title&lt;/h1&gt;
  &lt;a class=&quot;btn btn-link&quot; role=&quot;button&quot;&gt;&lt;span class=&quot;icon-search&quot;&gt;&lt;/span&gt;&lt;/a&gt;
&lt;/div&gt;
				</div></pre>
			</div>
		</div>
		
		<div class="panel panel-default">
			<div class="panel-heading">
				<div class="panel-title"><strong>Top Bar with action button</strong></div>
			</div>
			<div class="panel-body">
				<!--// TOP BAR //-->
				<div class="panel topbar">
					<div class="panel-body">
						<div class="topbar-heading">
							<div class="topbar-title">
								<h1>Page Title</h1> <a href="#" class="btn btn-link" role="button"><span class="icon-search"></span></a>
							</div>
							<div class="topbar-search">
								<form class="form-group">
									<span class="icon-search"></span>
									<span class="icon-close"></span>
									<input type="text" class="form-control" placeholder="Search for job ads...">
								</form>
							</div>
						</div>
						<div class="topbar-action pull-right">
							<a href="#" class="btn btn-primary">Primary</a>
						</div>	
						<ul class="nav nav-pills pull-right">
							<li class="active"><a href="#">Menu Item <span class="fig">10</span></a></li>
							<li><a href="#">Menu Item <span class="fig">2</span></a></li>
							<li><a href="#">Menu Item <span class="fig">13</span></a></li>
						</ul>
					</div>
				</div>
				<!--// TOP BAR END //-->
				
				<blockquote class="alert-default" role="alert">
					Add the following code in between <code>topbar-heading</code> and <code>&lt;ul&gt;</code> tag
				</blockquote>
				<pre class="well prettyprint"><input class="btn btn-info btnCopy" type="button" value="Copy" data-trigger="hover" data-toggle="tooltip" data-original-title="Copy to clipboard" data-placement="top"/><div class="code_content">
&lt;div class=&quot;topbar-action pull-right&quot;&gt;
  &lt;a href=&quot;#&quot; class=&quot;btn btn-primary&quot;&gt;Primary&lt;/a&gt;
&lt;/div&gt;
				</div></pre>
				
				<blockquote class="alert-default" role="alert">
					The result is as shown below:
				</blockquote>
				<pre class="well prettyprint"><input class="btn btn-info btnCopy" type="button" value="Copy" data-trigger="hover" data-toggle="tooltip" data-original-title="Copy to clipboard" data-placement="top"/><div class="code_content">
&lt;div class=&quot;topbar-heading&quot;&gt;
  ...
&lt;/div&gt;
&lt;div class=&quot;topbar-action pull-right&quot;&gt;
  &lt;a href=&quot;#&quot; class=&quot;btn btn-primary&quot;&gt;Primary&lt;/a&gt;
&lt;/div&gt;
&lt;ul class=&quot;nav nav-pills pull-right&quot;&gt;
  ...
&lt;/ul&gt;
				</div></pre>				
			</div>
		</div>
		
		<div class="panel panel-default">
			<div class="panel-heading">
				<div class="panel-title"><strong>Top Bar without counter</strong></div>
			</div>
			<div class="panel-body">
				<!--// TOP BAR //-->
				<div class="panel topbar">
					<div class="panel-body">
						<div class="topbar-heading">
							<div class="topbar-title">
								<h1>Page Title</h1> <a href="#" class="btn btn-link" role="button"><span class="icon-search"></span></a>
							</div>
							<div class="topbar-search">
								<form class="form-group">
									<span class="icon-search"></span>
									<span class="icon-close"></span>
									<input type="text" class="form-control" placeholder="Search for job ads...">
								</form>
							</div>
						</div>
						<ul class="nav nav-pills pull-right">
							<li class="active"><a href="#">Menu Item</a></li>
							<li><a href="#">Menu Item</a></li>
							<li><a href="#">Menu Item</a></li>
						</ul>
					</div>
				</div>
				<!--// TOP BAR END //-->
				<blockquote class="alert-default" role="alert">
					To display menu items without counter, just remove the <code>&lt;span&gt;</code> inside list item <code>li</code>
				</blockquote>
				<pre class="well prettyprint"><input class="btn btn-info btnCopy" type="button" value="Copy" data-trigger="hover" data-toggle="tooltip" data-original-title="Copy to clipboard" data-placement="top"/><div class="code_content">
&lt;span class=&quot;fig&quot;&gt;0&lt;/span&gt;
				</div></pre>
				
				<blockquote class="alert-default" role="alert">
					The result is as shown below:
				</blockquote>
				<pre class="well prettyprint"><input class="btn btn-info btnCopy" type="button" value="Copy" data-trigger="hover" data-toggle="tooltip" data-original-title="Copy to clipboard" data-placement="top"/><div class="code_content">
&lt;ul class=&quot;nav nav-pills pull-right&quot;&gt;
  &lt;li class=&quot;active&quot;&gt;&lt;a href=&quot;#&quot;&gt;Menu Item&lt;/a&gt;&lt;/li&gt;
  &lt;li&gt;&lt;a href=&quot;#&quot;&gt;Menu Item&lt;/a&gt;&lt;/li&gt;
  &lt;li&gt;&lt;a href=&quot;#&quot;&gt;Menu Item&lt;/a&gt;&lt;/li&gt;
&lt;/ul&gt;
				</div></pre>
			</div>
		</div>
		
		<div class="panel panel-default">
			<a name="facet"></a>
			<div class="panel-heading">
				<div class="panel-title"><strong>Top Bar with facet</strong></div>
			</div>
			<div class="panel-body">
				<!--// TOP BAR //-->
				<div class="panel topbar">
					<div class="panel-body">
						<div class="topbar-heading">
							<div class="topbar-title">
								<h1>Page Title</h1> <a class="btn btn-link" role="button"><span class="icon-search"></span></a>
							</div>
							<div class="topbar-search">
								<form class="form-group">
									<span class="icon-search"></span>
									<span class="icon-close"></span>
									<input type="text" class="form-control" placeholder="Search for job ads...">
								</form>
							</div>
						</div>
						<div title="Filter Candidates" class="btn btn-icon facet pull-right visible-sm visible-md">
							<span class="icon-filter pull-left"></span>
						</div>
						<ul class="nav nav-pills pull-right">
							<li class="active"><a href="#">Menu Item <span class="fig">10</span></a></li>
							<li><a href="#">Menu Item <span class="fig">2</span></a></li>
							<li><a href="#">Menu Item <span class="fig">13</span></a></li>
							<li><a href="#">Menu Item <span class="fig">0</span></a></li>
						</ul>
					</div>
				</div>
				<!--// TOP BAR END //-->
				<div id="loadContent">
					
					<!--Loading screen-->
					<div class="loader-wrap">
						<div class="loading-container">
						<div class="loading"></div>
						<div id="loading-text">Loading Candidates</div>
						</div>
					</div>
					<!--Loading screen end-->
				
					<div class="panel hidden-xs hidden-sm hidden-md col-sm-12 col-md-12 col-lg-3 panel-facet">
						<div class="panel-body col-sm-3 col-md-3 col-lg-12">
							<div class="title">Company</div>
							<div>
								<input type="checkbox" field="c1_company_name" value="RHB Bank Berhad" id="facet1">
								<label for="facet1">Hewlett-Packard (M) Sdn Bhd (80)</label>
							</div>
							<div>
								<input type="checkbox" field="c1_company_name" value="Hong Leong Bank Berhad" id="facet2">
								<label for="facet2">RHB Bank Berhad (67)</label>
							</div>
						</div>
						<div class="panel-body col-sm-3 col-md-3 col-lg-12">
							<div class="title">Industry</div>
							<div>
								<input type="checkbox" field="c1_industry_name" value="Manufacturing / Production" id="facet4">
								<label for="facet4">Manufacturing / Production (4778)</label>
							</div>
							<div>
								<input type="checkbox" field="c1_industry_name" value="" id="facet4b">
								<label for="facet4b">Computer/ Information Technology (2786)</label>
							</div>
							<div>
								<input type="checkbox" field="c1_industry_name" value="Banking / Financial Services" id="facet5">
								<label for="facet5">Banking / Financial Services (1558)</label>
							</div>
						</div>
						<div class="panel-body col-sm-3 col-md-3 col-lg-12">
							<div class="title">Position Level</div>
							<div>
								<input type="checkbox" field="c1_position_level_name" value="Junior Executive" id="facet7">
								<label for="facet7">Junior Executive (10610)</label>
							</div>
							<div>
								<input type="checkbox" field="c1_position_level_name" value="Senior Executive" id="facet8">
								<label for="facet8">Senior Executive (10129)</label>
							</div>
							<div>
								<input type="checkbox" field="c1_position_level_name" value="Fresh / Entry Level" id="facet9">
								<label for="facet9">Fresh / Entry Level (5636)</label>
							</div>
						</div>
						<div class="panel-body col-sm-3 col-md-3 col-lg-12">
							<div class="title">Expected Salary</div>
							<div>
								<input type="checkbox" field="expected_salary" value="[* TO 2000,MYR]" id="facet10">
								<label for="facet10">&lt; MYR2000 (4888)</label>
							</div>
							<div>
								<input type="checkbox" field="expected_salary" value="[2001,MYR TO 4000,MYR]" id="facet11">
								<label for="facet11">MYR2000 - MYR4000 (16088)</label>
							</div>
							<div>
								<input type="checkbox" field="expected_salary" value="[4001,MYR TO *]" id="facet12">
								<label for="facet12">&gt; MYR4000 (14689)</label>
							</div>
						</div>
						<div class="panel-body col-sm-3 col-md-3 col-lg-12 hidden-sm hidden-md">
							<div class="title">Years of Experience</div>
							<div>
								<input type="checkbox" field="years_of_experience" value="" id="facet13">
								<label for="facet13">&lt; 1 year (1424)</label>
							</div>
							<div>
								<input type="checkbox" field="years_of_experience" value="" id="facet14">
								<label for="facet14">1 - 3 years (4987)</label>
							</div>
							<div>
								<input type="checkbox" field="years_of_experience" value="" id="facet15">
								<label for="facet15">&gt; 3 years (29788)</label>
							</div>
						</div>
					</div>
					  
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-9 panel-results">
					
					</div>
					<div class="clearfix"></div>
				</div>
				<blockquote class="alert-default" role="alert">
					Add the following code in between <code>topbar-heading</code> and <code>&lt;ul&gt;</code> tag
				</blockquote>
				<pre class="well prettyprint"><input class="btn btn-info btnCopy" type="button" value="Copy" data-trigger="hover" data-toggle="tooltip" data-original-title="Copy to clipboard" data-placement="top"/><div class="code_content">
&lt;div title=&quot;Filter Candidates&quot; class=&quot;btn btn-icon facet pull-right visible-sm visible-md&quot;&gt;
  &lt;span class=&quot;icon-filter pull-left&quot;&gt;&lt;/span&gt;
&lt;/div&gt;
				</div></pre>
				
				<blockquote class="alert-default" role="alert">
					The result is as shown below:
				</blockquote>
				<pre class="well prettyprint"><input class="btn btn-info btnCopy" type="button" value="Copy" data-trigger="hover" data-toggle="tooltip" data-original-title="Copy to clipboard" data-placement="top"/><div class="code_content">
&lt;div class=&quot;topbar-heading&quot;&gt;
  ...
&lt;/div&gt;
&lt;div title=&quot;Filter Candidates&quot; class=&quot;btn btn-icon facet pull-right visible-sm visible-md&quot;&gt;
  &lt;span class=&quot;icon-filter pull-left&quot;&gt;&lt;/span&gt;
&lt;/div&gt;
&lt;ul class=&quot;nav nav-pills pull-right&quot;&gt;
  ...
&lt;/ul&gt;
				</div></pre>
				<blockquote class="alert-warning" role="alert">
					<p>For the <span class="icon-filter"></span> to work, kindly include the <code>siva.js</code> in your page.</p>
					
				</blockquote>
			</div>
		</div>
		
		<div class="panel panel-default">
			<div class="panel-heading">
				<div class="panel-title"><strong>Top Bar with back button (Always Visible)</strong></div>
			</div>
			<div class="panel-body">

			<!--// TOP BAR //-->
			<div class="panel topbar">
				<div class="panel-body empty-menu">
					<div class="topbar-heading">
						<div class="topbar-title">
						  <a href="" class="back-page"><span class="icon-chevron-left"></span></a>
						  <h1>Page Title</h1>
						  <a class="btn btn-link" role="button"><span class="icon-search"></span></a>
						</div>
						<div class="topbar-search">
							<form class="form-group">
								<span class="icon-search"></span>
								<span class="icon-close"></span>
								<input type="text" class="form-control" placeholder="Search retrieved resumes...">
							</form>
						</div>
					</div>
					<ul class="nav nav-pills pull-right" >
					</ul>
				</div>
			</div>
			<!--// TOP BAR END //-->
				<blockquote class="alert-default" role="alert">
					<code>empty-menu</code> is to adjust the top bar when there is no menus <br>
					Add the following line of code into <code>topbar-title</code> just before the <code>&lt;h1&gt;</code> tag
				</blockquote>
				<pre class="well prettyprint"><input class="btn btn-info btnCopy" type="button" value="Copy" data-trigger="hover" data-toggle="tooltip" data-original-title="Copy to clipboard" data-placement="top"/><div class="code_content">
 &lt;a href=&quot;&quot; class=&quot;back-page&quot;&gt;&lt;span class=&quot;icon-chevron-left&quot;&gt;&lt;/span&gt;&lt;/a&gt;
				</div></pre>
				
				<blockquote class="alert-default" role="alert">
					The result is as shown below:
				</blockquote>
				<pre class="well prettyprint"><input class="btn btn-info btnCopy" type="button" value="Copy" data-trigger="hover" data-toggle="tooltip" data-original-title="Copy to clipboard" data-placement="top"/><div class="code_content">
&lt;!--// TOP BAR //--&gt;
&lt;div class=&quot;panel topbar&quot;&gt;
   &lt;div class=&quot;panel-body empty-menu&quot;&gt;
      &lt;div class=&quot;topbar-heading&quot;&gt;
         &lt;div class=&quot;topbar-title&quot;&gt;
            &lt;a href=&quot;&quot; class=&quot;back-page&quot;&gt;&lt;span class=&quot;icon-chevron-left&quot;&gt;&lt;/span&gt;&lt;/a&gt;
            &lt;h1&gt;Page Title&lt;/h1&gt;
            &lt;a class=&quot;btn btn-link&quot; role=&quot;button&quot;&gt;&lt;span class=&quot;icon-search&quot;&gt;&lt;/span&gt;&lt;/a&gt;
         &lt;/div&gt;
         &lt;div class=&quot;topbar-search&quot;&gt;
            ...
         &lt;/div&gt;
      &lt;/div&gt;
   &lt;/div&gt;
&lt;/div&gt;
&lt;!--// TOP BAR END //--&gt;
				</div></pre>
			</div>
		</div>
		
		<div class="panel panel-default">
			<div class="panel-heading">
				<div class="panel-title"><strong>Top Bar with progress bar</strong></div>
			</div>
			<div class="panel-body">

			<!--// TOP BAR //-->
			<div class="panel topbar">
				<div class="panel-body empty-menu">
					<div class="topbar-heading">
						<div class="topbar-title">	 
						  <h1>Page Title</h1>
						</div>
					</div>
					<div class="pull-right">
						<div class="progress progress-cp">
						  <div class="progress-bar" role="progress-bar" style="width:90%;"></div>
						</div>
						<span class="progress-cp-text text-right">
							90% Complete
							<span class="icon-question-mark" data-trigger="hover" data-placement="bottom" data-toggle="tooltip" data-html="true" data-original-title='<ul class="text-left"><li>Provide a website / Facebook page <span class="blue-bold-text">5%</span></li><li>Upload company logo <span class="blue-bold-text">5%</span></li></ul>' data-delay="5"></span>
						</span>
					</div>
				</div>
			</div>
			<!--// TOP BAR END //-->
				<blockquote class="alert-default" role="alert">
					Add the following code into <code>panel-body</code> just after the <code>topbar-heading</code> class
				</blockquote>
				<pre class="well prettyprint"><input class="btn btn-info btnCopy" type="button" value="Copy" data-trigger="hover" data-toggle="tooltip" data-original-title="Copy to clipboard" data-placement="top"/><div class="code_content">
&lt;div class=&quot;pull-right&quot;&gt;
   &lt;div class=&quot;progress progress-cp&quot;&gt;
      &lt;div class=&quot;progress-bar&quot; role=&quot;progress-bar&quot; style=&quot;width:90%;&quot;&gt;&lt;/div&gt;
   &lt;/div&gt;
   &lt;span class=&quot;progress-cp-text text-right&quot;&gt;
   90% Complete
   &lt;span class=&quot;icon-question-mark&quot; data-trigger=&quot;hover&quot; data-placement=&quot;bottom&quot; data-toggle=&quot;tooltip&quot; data-html=&quot;true&quot; data-original-title='&lt;ul class=&quot;text-left&quot;&gt;&lt;li&gt;Provide a website / Facebook page &lt;span class=&quot;blue-bold-text&quot;&gt;5%&lt;/span&gt;&lt;/li&gt;&lt;li&gt;Upload company logo &lt;span class=&quot;blue-bold-text&quot;&gt;5%&lt;/span&gt;&lt;/li&gt;&lt;/ul&gt;' data-delay=&quot;5&quot;&gt;&lt;/span&gt;
   &lt;/span&gt;
&lt;/div&gt;
				</div></pre>
				
				<blockquote class="alert-default" role="alert">
					The result is as shown below:
				</blockquote>
				<pre class="well prettyprint"><input class="btn btn-info btnCopy" type="button" value="Copy" data-trigger="hover" data-toggle="tooltip" data-original-title="Copy to clipboard" data-placement="top"/><div class="code_content">
&lt;!--// TOP BAR //--&gt;
&lt;div class=&quot;panel topbar&quot;&gt;
   &lt;div class=&quot;panel-body empty-menu&quot;&gt;
      &lt;div class=&quot;topbar-heading&quot;&gt;
         &lt;div class=&quot;topbar-title&quot;&gt;
            &lt;h1&gt;Page Title&lt;/h1&gt;
         &lt;/div&gt;
      &lt;/div&gt;
      &lt;div class=&quot;pull-right&quot;&gt;
         &lt;div class=&quot;progress progress-cp&quot;&gt;
            &lt;div class=&quot;progress-bar&quot; role=&quot;progress-bar&quot; style=&quot;width:90%;&quot;&gt;&lt;/div&gt;
         &lt;/div&gt;
         &lt;span class=&quot;progress-cp-text text-right&quot;&gt;
         90% Complete
         &lt;span class=&quot;icon-question-mark&quot; data-trigger=&quot;hover&quot; data-placement=&quot;bottom&quot; data-toggle=&quot;tooltip&quot; data-html=&quot;true&quot; data-original-title='&lt;ul class=&quot;text-left&quot;&gt;&lt;li&gt;Provide a website / Facebook page &lt;span class=&quot;blue-bold-text&quot;&gt;5%&lt;/span&gt;&lt;/li&gt;&lt;li&gt;Upload company logo &lt;span class=&quot;blue-bold-text&quot;&gt;5%&lt;/span&gt;&lt;/li&gt;&lt;/ul&gt;' data-delay=&quot;5&quot;&gt;&lt;/span&gt;
         &lt;/span&gt;
      &lt;/div&gt;
   &lt;/div&gt;
&lt;/div&gt;
&lt;!--// TOP BAR END //--&gt;</div></pre>
			</div>
		</div>
		
		<blockquote class="alert-success" role="alert">
			<h4>Demo</h4>
			<p>Demo pages for the top bar can be view in template section</p>
			<p><a class="btn btn-success" href="../siva/templates.php">Templates</a></p>
		</blockquote>
		
		<div class="panel panel-default">
			<div class="panel-heading">
				<div class="panel-title"><strong>Pagination</strong></div>
			</div>
			<div class="panel-body">
				<h5>Example: </h5>
				<!--// PAGINATION //-->
				<ul class="pagination pull-left">
					<li class="active"><a href="#">1</a></li>
					<li><a href="#">2</a></li>
					<li><a href="#">3</a></li>
					<li><a href="#">4</a></li>
					<li><a href="#">5</a></li>
					<li><a href="#">Next <span class="icon-angle-right"></span></a></li>
				</ul>
				<!--// PAGINATION END //-->
				
				<div class="clearfix"></div>
				<h5>Sample Code:</h5>
				
				<pre class="well prettyprint"><input class="btn btn-info btnCopy" type="button" value="Copy" data-trigger="hover" data-toggle="tooltip" data-original-title="Copy to clipboard" data-placement="top"/><div class="code_content">
&lt;!--// PAGINATION //--&gt;
&lt;ul class=&quot;pagination pull-left&quot;&gt;
  &lt;li class=&quot;active&quot;&gt;&lt;a href=&quot;#&quot;&gt;1&lt;/a&gt;&lt;/li&gt;
  &lt;li&gt;&lt;a href=&quot;#&quot;&gt;2&lt;/a&gt;&lt;/li&gt;
  &lt;li&gt;&lt;a href=&quot;#&quot;&gt;3&lt;/a&gt;&lt;/li&gt;
  &lt;li&gt;&lt;a href=&quot;#&quot;&gt;4&lt;/a&gt;&lt;/li&gt;
  &lt;li&gt;&lt;a href=&quot;#&quot;&gt;5&lt;/a&gt;&lt;/li&gt;
  &lt;li&gt;&lt;a href=&quot;#&quot;&gt;Next &lt;span class=&quot;icon-angle-right&quot;&gt;&lt;/span&gt;&lt;/a&gt;&lt;/li&gt;
&lt;/ul&gt;
&lt;!--// PAGINATION END //--&gt;
				</div></pre>
			</div>
		</div>
	</div>
</section>

<?php include("../includes/script.php");?>

</body>
</html>