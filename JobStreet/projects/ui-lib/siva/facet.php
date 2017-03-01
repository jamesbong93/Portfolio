<?php
include("../includes/theme-data.php");
$theme="siva";
$com="Facet";

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
				<div class="panel-title"><strong>Structure of facet</strong></div>
			</div>
			<div class="panel-body">
				<blockquote class="alert-default" role="alert">
					Facet usually comes with top bar and used to filter items. It will be shown vertically when the screen is large and horizontally when the screen is smaller. However, it will be hidden in mobile view.
				</blockquote>

				<div class="well clearfix">
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
									<input type="checkbox" field="expected_salary" value="[* TO 2000,MYR]" id="location10">
									<label for="facet10">&lt; MYR2000 (4888)</label>
								</div>
								<div>
									<input type="checkbox" field="expected_salary" value="[2001,MYR TO 4000,MYR]" id="location11">
									<label for="facet11">MYR2000 - MYR4000 (16088)</label>
								</div>
								<div>
									<input type="checkbox" field="expected_salary" value="[4001,MYR TO *]" id="location12">
									<label for="facet12">&gt; MYR4000 (14689)</label>
								</div>
							</div>
							<div class="panel-body col-sm-3 col-md-3 col-lg-12 hidden-sm hidden-md">
								<div class="title">Years of Experience</div>
								<div>
									<input type="checkbox" field="years_of_experience" value="" id="location13">
									<label for="facet13">&lt; 1 year (1424)</label>
								</div>
								<div>
									<input type="checkbox" field="years_of_experience" value="" id="location14">
									<label for="facet14">1 - 3 years (4987)</label>
								</div>
								<div>
									<input type="checkbox" field="years_of_experience" value="" id="location15">
									<label for="facet15">&gt; 3 years (29788)</label>
								</div>
							</div>
						</div>
						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-9 panel-results">

						</div>
						<div class="clearfix"></div>
					</div>
				</div>

				<blockquote class="alert-default" role="alert">
					The code structure for facet is as shown below:
				</blockquote>


				<pre class="well prettyprint"><input class="btn btn-info btnCopy" type="button" value="Copy" data-trigger="hover" data-toggle="tooltip" data-original-title="Copy to clipboard" data-placement="top"/><div class="code_content">
&lt;!--// TOP BAR //--&gt;
&lt;div class=&quot;panel topbar&quot;&gt;
  ..
&lt;/div&gt;
&lt;!--// TOP BAR END //--&gt;
&lt;div class=&quot;clearfix&quot;&gt;&lt;/div&gt;
&lt;div id=&quot;loadContent&quot;&gt;
  &lt;!--Loading screen--&gt;
  &lt;div class=&quot;loader-wrap&quot;&gt;
    ..
  &lt;/div&gt;
  &lt;!--Loading screen end--&gt;
  &lt;!--Facet Panel--&gt;
  &lt;div class=&quot;panel hidden-xs hidden-sm hidden-md col-sm-12 col-md-12 col-lg-3 panel-facet&quot;&gt;
    ..
  &lt;/div&gt;
  &lt;!--Facet Panel end--&gt;
  &lt;!--Result Panel--&gt;
  &lt;div class=&quot;col-xs-12 col-sm-12 col-md-12 col-lg-9 panel-results&quot;&gt;
    ..
  &lt;/div&gt;
  &lt;!--Result Panel end--&gt;
  &lt;div class=&quot;clearfix&quot;&gt;&lt;/div&gt;
&lt;/div&gt;
				</div></pre>

				<blockquote class="alert-warning" role="alert">
					The facet basically consists of a <code>topbar</code> and <code>#loadContent</code>. <br>
					Inside <code>#loadContent</code>, it consists of <code>loader-wrap</code>, <code>panel-facet</code> and <code>panel-results</code>
					<br>
					<ul>
						<li><code>loader-wrap</code> is to show the loading screen when user tick on the checkbox</li>
						<li><code>panel-facet</code> is the panel that consists of filtering criteria</li>
						<li><code>panel-results</code> is the place where we put the cards.</li>
					</ul>
				</blockquote>

			</div>
		</div>

		<div class="panel panel-default">
			<div class="panel-heading">
				<div class="panel-title"><strong>The Facet Panel</strong></div>
			</div>
			<div class="panel-body">
				<blockquote class="alert-default" role="alert">
					Below is a simple example of what is inside the <code>panel-facet</code>
				</blockquote>
				<div class="panel col-sm-12 col-md-12 col-lg-3 panel-facet">
				  <div class="panel-body col-sm-3 col-md-3 col-lg-12">
					<div class="title">Company</div>
					<div>
					  <input type="checkbox" field="c1_company_name" value="RHB Bank Berhad" id="facet16">
					  <label for="facet16">Hewlett-Packard (M) Sdn Bhd (80)</label>
					</div>
					<div>
					  <input type="checkbox" field="c1_company_name" value="Hong Leong Bank Berhad" id="facet17">
					  <label for="facet17">RHB Bank Berhad (67)</label>
					</div>
				  </div>
				  <div class="panel-body col-sm-3 col-md-3 col-lg-12">
					<div class="title">Industry</div>
					<div>
					  <input type="checkbox" field="c1_industry_name" value="Manufacturing / Production" id="facet18">
					  <label for="facet18">Manufacturing / Production (4778)</label>
					</div>
					<div>
					  <input type="checkbox" field="c1_industry_name" value="" id="facet19">
					  <label for="facet19">Computer/ Information Technology (2786)</label>
					</div>
					<div>
					  <input type="checkbox" field="c1_industry_name" value="Banking / Financial Services" id="facet20">
					  <label for="facet20">Banking / Financial Services (1558)</label>
					</div>
				  </div>
				  <div class="panel-body col-sm-3 col-md-3 col-lg-12">
					..
				  </div>
				  <div class="panel-body col-sm-3 col-md-3 col-lg-12">
					..
				  </div>
				</div>


				<pre class="well prettyprint"><input class="btn btn-info btnCopy" type="button" value="Copy" data-trigger="hover" data-toggle="tooltip" data-original-title="Copy to clipboard" data-placement="top"/><div class="code_content">
&lt;div class=&quot;panel hidden-xs hidden-sm hidden-md col-sm-12 col-md-12 col-lg-3 panel-facet&quot;&gt;
  &lt;div class=&quot;panel-body col-sm-3 col-md-3 col-lg-12&quot;&gt;
    &lt;div class=&quot;title&quot;&gt;Company&lt;/div&gt;
    &lt;div&gt;
      &lt;input type=&quot;checkbox&quot; field=&quot;c1_company_name&quot; value=&quot;RHB Bank Berhad&quot; id=&quot;location1&quot;&gt;
      &lt;label for=&quot;location1&quot;&gt;Hewlett-Packard (M) Sdn Bhd (80)&lt;/label&gt;
    &lt;/div&gt;
    &lt;div&gt;
      &lt;input type=&quot;checkbox&quot; field=&quot;c1_company_name&quot; value=&quot;Hong Leong Bank Berhad&quot; id=&quot;facet2&quot;&gt;
      &lt;label for=&quot;facet2&quot;&gt;RHB Bank Berhad (67)&lt;/label&gt;
    &lt;/div&gt;
  &lt;/div&gt;
  &lt;div class=&quot;panel-body col-sm-3 col-md-3 col-lg-12&quot;&gt;
    &lt;div class=&quot;title&quot;&gt;Industry&lt;/div&gt;
    &lt;div&gt;
      &lt;input type=&quot;checkbox&quot; field=&quot;c1_industry_name&quot; value=&quot;Manufacturing / Production&quot; id=&quot;facet4&quot;&gt;
      &lt;label for=&quot;facet4&quot;&gt;Manufacturing / Production (4778)&lt;/label&gt;
    &lt;/div&gt;
    &lt;div&gt;
      &lt;input type=&quot;checkbox&quot; field=&quot;c1_industry_name&quot; value=&quot;&quot; id=&quot;facet4b&quot;&gt;
      &lt;label for=&quot;facet4b&quot;&gt;Computer/ Information Technology (2786)&lt;/label&gt;
    &lt;/div&gt;
    &lt;div&gt;
      &lt;input type=&quot;checkbox&quot; field=&quot;c1_industry_name&quot; value=&quot;Banking / Financial Services&quot; id=&quot;facet5&quot;&gt;
      &lt;label for=&quot;facet5&quot;&gt;Banking / Financial Services (1558)&lt;/label&gt;
    &lt;/div&gt;
  &lt;/div&gt;
  &lt;div class=&quot;panel-body col-sm-3 col-md-3 col-lg-12&quot;&gt;
    ..
  &lt;/div&gt;
  &lt;div class=&quot;panel-body col-sm-3 col-md-3 col-lg-12&quot;&gt;
    ..
  &lt;/div&gt;
&lt;/div&gt;
				</div></pre>

			</div>
		</div>

		<blockquote class="alert-success" role="alert">
			For guide on using top bar with facet, kindly refer to <a href="../siva/navigation.php#facet">here</a>.
			<br>
			For guide on using cards, kindly refer to <a href="../siva/cards.php">here</a>.
		</blockquote>

		<blockquote class="alert-success" role="alert">
			<h4>Demo File</h4>
			<p>Demo and source code of the facet can be download here.</p>
			<p><a class="btn btn-success" href="../examples/siva/top-bar-for-application-with-facet.html" download>Download</a></p>
		</blockquote>
		<a name="accordion-facet"></a>
		<div class="panel panel-default">
			<div class="panel-heading">
				<div class="panel-title"><strong>Structure of Accordion Facet</strong></div>
			</div>
			<div class="panel-body">
				<blockquote class="alert-default" role="alert">
					Click on the add icon or "Add" text to add new filter to the facet panel.
				</blockquote>

				<div class="well clearfix">
					<!--// TOP BAR //-->
					<div class="panel topbar">
						<div class="panel-body">
							<div class="topbar-heading">
								<div class="topbar-title" style="margin-top:6px">
									<h1 class="hidden-xs">Talent Search</h1>
								</div>
							</div>
							<div class="search-wrap">
							  <div class="col-sm-5 col-sm-offset-1 suggest-panel">
								<input type="text" placeholder="Type position title, skills or keywords and select from dropdown..." class="select2-search" tabindex="-1" style="position: absolute; left: 2px; box-shadow: none; height: 35px; background: none 0% 0% / auto repeat scroll padding-box border-box rgb(255, 255, 255);width:100%;">
							  </div>
							  <div class="pull-left">
								<button id="search" type="submit" class="btn btn-primary">Search</button>
							  </div>
							</div>
							<ul class="nav nav-pills nav-folders nav-2 pull-right">
								<li class="active visible-xs"><a href="result-expand-2.html">Search Results</a></li>
								<li><a href="retrieve-resume-2.html">Retrieved Resumes</a></li>
							</ul>
						</div>
					</div>
					<!--// TOP BAR END //-->
					<div id="loadContent">

					<div class="panel hidden-xs hidden-sm hidden-md col-sm-12 col-md-12 col-lg-3 accordion-facet">
			<div class="panel-body">
<div class="panel-default">
					<a type="button" class="btn btn-pale btn-block filter-clear"><span class="icon-close-disc"></span>CLEAR FILTERS</a>
				</div>
				<div class="panel-default">

					<div class="panel-heading"  data-toggle="collapse" href="#collapse1" aria-expanded="true">
						<h5>
							<strong>Location</strong>
							<span class="icon-caret-up pull-right"></span>
						</h5>
					</div>
					<div id="collapse1" class="panel-collapse collapse in" aria-expanded="true">
						<div class="panel-body">
							
							<div class="label-container">
								<span class="facet-count">(100)</span>
								<input type="checkbox" id="location1">
								<span class="facet-checkbox"></span>
								<label for="location1">
									<div class="ellipsis" title="Kuala Lumpur">
								       Kuala Lumpur
								    </div>
							    </label>
							</div>

							<div class="label-container">
								<span class="facet-count">(543)</span>
								<input type="checkbox" id="location2">
								<span class="facet-checkbox"></span>
								<label for="location2">
									<div class="ellipsis" title="Anywhere in Malsyaia">
								       Anywhere in Malaysia
								    </div>
							    </label>
							</div>

							<div class="label-container">
								<span class="facet-count">(231)</span>
								<input type="checkbox" id="location3">
								<span class="facet-checkbox"></span>
								<label for="location3">
									<div class="ellipsis" title="Anywhere in Singapore">
								       Anywhere in Singapore
								    </div>
							    </label>
							</div>

							<div class="label-container">
								<span class="facet-count">(34)</span>
								<input type="checkbox" id="location4">
								<span class="facet-checkbox"></span>
								<label for="location4">
									<div class="ellipsis" title="Putrajaya">
								       Putrajaya 
								    </div>
							    </label>
							</div>

							<form class="form-inline facet-filter">
								<input type="text" class="filter form-control">
								<a href="javascript:;" class="add-item">
									<span class="icon-positive-disc add-filter"></span>
									<span class="add-filter">Add</span>
								</a>
							</form>
						</div>
					</div>
				</div>

				<div class="panel-default">
					<div class="panel-heading"  data-toggle="collapse"  href="#collapse2" aria-expanded="true">
						<h5>
							<strong>Industry</strong>
							<span class="icon-caret-up pull-right"></span>
						</h5>
					</div>
					<div id="collapse2" class="panel-collapse collapse in" aria-expanded="true">
						<div class="panel-body">

							<div class="label-container">
								<span class="facet-count">(10)</span>
								<input type="checkbox" id="industry1">
								<span class="facet-checkbox"></span>
								<label for="industry1">
									<div class="ellipsis" title="Engineering (Electrical)">
								       Engineering (Electrical)
								    </div>
							    </label>
							</div>

							<div class="label-container">
								<span class="facet-count">(210)</span>
								<input type="checkbox" id="industry2">
								<span class="facet-checkbox"></span>
								<label for="industry2">
									<div class="ellipsis" title="Computer / Information Technology (Software)">
								       Computer / Information Technology (Software)
								    </div>
							    </label>
							</div>

							<div class="label-container">
								<span class="facet-count">(41)</span>
								<input type="checkbox" id="industry3">
								<span class="facet-checkbox"></span>
								<label for="industry3">
									<div class="ellipsis" title="Advertising / Marketing / Promotion / PR">
								       Advertising / Marketing / Promotion / PR
								    </div>
							    </label>
							</div>

							<div class="label-container">
								<span class="facet-count">(25)</span>
								<input type="checkbox" id="industry4">
								<span class="facet-checkbox"></span>
								<label for="industry4">
									<div class="ellipsis" title="Consulting (IT, Science, Engineering & Technician)">
								       Consulting (IT, Science, Engineering & Technician)
								    </div>
							    </label>
							</div>

							<div class="label-container">
								<span class="facet-count">(2)</span>
								<input type="checkbox" id="industry5">
								<span class="facet-checkbox"></span>
								<label for="industry5">
									<div class="ellipsis" title="Construction / Building / Engineering">
								       Construction / Building / Engineering
								    </div>
							    </label>
							</div>

							<form class="form-inline facet-filter">
								<input type="text" class="filter form-control">
								<a href="javascript:;" class="add-item">
									<span class="icon-positive-disc add-filter"></span>
									<span class="add-filter">Add</span>
								</a>
							</form>
						</div>
					</div>
				</div>

				<div class="panel-default">
					<div class="panel-heading"  data-toggle="collapse" href="#collapse3" aria-expanded="true">
						<h5>
							<strong>Salary</strong>
							<span class="icon-caret-up pull-right"></span>
						</h5>
					</div>
					<div id="collapse3" class="panel-collapse collapse in" aria-expanded="true">
						<div class="panel-body">
							<div class="label-container">
								<div class="col-sm-12 well well-sm currency-well">
									<div class="col-sm-5">
										<span class="text">Currency</span>
									</div>
									<div class="col-sm-7">
										<select class="form-control" name="salary_currency_code" id="salary_currency_code" tabindex="-1" data-placeholder="Currency">
											<option value=""></option>
											<option value="1" selected="selected">MYR</option>
											<option value="2">SGD</option>
											<option value="3">PHP</option>
											<option value="4">USD</option>
											<option value="5">INR</option>
											<option value="6">AUD</option>
											<option value="7">IDR</option>
											<option value="8">THB</option>
											<option value="9">HKD</option>
										</select>
									</div>
								</div>
								<form>
									<div class="row text-center">
										<div class="col-sm-6" style="padding-right:0px;">
											<span class="control-label">Min.</span>
											<input id="minSalary" type="number" class="form-control" placeholder="1000">
										</div>
										<div class="col-sm-6" style="padding-left:0px;">
											<span class="control-label">Max.</span>
											<input id="maxSalary" type="number" class="form-control" placeholder="2000">
										</div>
									</div>
									<p>
										<span id="inputErrorSalary" class="sr-only">(error)</span>
										<span class="text-danger error-status">Please enter salary</span>
									</p>
									<a id="applySalary" class="btn btn-pale btn-block">Apply</a>
								</form>
							</div>
						</div>
					</div>
				</div>

				<div class="panel-default">
					<div class="panel-heading"  data-toggle="collapse"  href="#collapse4" aria-expanded="true">
						<h5>
							<strong>Company</strong>
							<span class="icon-caret-up pull-right"></span>
						</h5>
					</div>
					<div id="collapse4" class="panel-collapse collapse in" aria-expanded="true">
						<div class="panel-body">

							<div class="label-container">
								<span class="facet-count">(30)</span>
								<input type="checkbox" id="company1">
								<span class="facet-checkbox"></span>
								<label for="company1">
									<div class="ellipsis" title="Seek Asia .Inc">
								      Seek Asia .Inc
								    </div>
							    </label>
							</div>

							<div class="label-container">
								<span class="facet-count">(3)</span>
								<input type="checkbox" id="company2">
								<span class="facet-checkbox"></span>
								<label for="company2">
									<div class="ellipsis" title="Appandus Sdn Bhd">
								      Appandus Sdn Bhd
								    </div>
							    </label>
							</div>

							<div class="label-container">
								<span class="facet-count">(14)</span>
								<input type="checkbox" id="company3">
								<span class="facet-checkbox"></span>
								<label for="company3">
									<div class="ellipsis" title="Fusionex">
								      Fusionex
								    </div>
							    </label>
							</div>

							<div class="label-container">
								<span class="facet-count">(21)</span>
								<input type="checkbox" id="company4">
								<span class="facet-checkbox"></span>
								<label for="company4">
									<div class="ellipsis" title="Jabil Circuit">
								      Jabil Circuit
								    </div>
							    </label>
							</div>

							<div class="label-container">
								<span class="facet-count">(2)</span>
								<input type="checkbox" id="company5">
								<span class="facet-checkbox"></span>
								<label for="company5">
									<div class="ellipsis" title="Logistics Consulting Asia">
								      Logistics Consulting Asia
								    </div>
							    </label>
							</div>

							<form class="form-inline facet-filter">
								<input type="text" class="filter form-control">
								<a href="javascript:;" class="add-item">
									<span class="icon-positive-disc add-filter"></span>
									<span class="add-filter">Add</span>
								</a>
							</form>
						</div>
					</div>
				</div>

				<div class="panel-default">
					<div class="panel-heading"  data-toggle="collapse"  href="#collapse5" aria-expanded="true">
						<h5>
							<strong>Nationality</strong>
							<span class="icon-caret-up pull-right"></span>
						</h5>
					</div>
					<div id="collapse5" class="panel-collapse collapse in" aria-expanded="true">
						<div class="panel-body">

							<div class="label-container">
								<span class="facet-count">(67)</span>
								<input type="checkbox" id="nation1">
								<span class="facet-checkbox"></span>
								<label for="nation1">
									<div class="ellipsis" title="Singapore">
								      Singapore
								    </div>
							    </label>
							</div>

							<div class="label-container content-highlight">
								<span class="facet-count">(74)</span>
								<input type="checkbox" id="nation2" checked="checked">
								<span class="facet-checkbox"></span>
								<label for="nation2">
									<div class="ellipsis pre-selected" title="Malaysia">
								      Malaysia 
								      <div class="info">
								      	(Pre-selected option)
								      </div>
								    </div>
							    </label>
							</div>
						
							<div class="label-container">
								<span class="facet-count">(21)</span>
								<input type="checkbox" id="nation3">
								<span class="facet-checkbox"></span>
								<label for="nation3">
									<div class="ellipsis" title="Philippina">
								      Philippina
								    </div>
							    </label>
							</div>

							<div class="label-container">
								<span class="facet-count">(32)</span>
								<input type="checkbox" id="nation4">
								<span class="facet-checkbox"></span>
								<label for="nation4">
									<div class="ellipsis" title="Vietnam">
								      Vietnam
								    </div>
							    </label>
							</div>

							<div class="label-container">
								<span class="facet-count">(123)</span>
								<input type="checkbox" id="nation5">
								<span class="facet-checkbox"></span>
								<label for="nation5">
									<div class="ellipsis" title="Indonesia">
								      Indonesia
								    </div>
							    </label>
							</div>

							<form class="form-inline facet-filter">
								<input type="text" class="filter form-control">
								<a href="javascript:;" class="add-item">
									<span class="icon-positive-disc add-filter"></span>
									<span class="add-filter">Add</span>
								</a>
							</form>
						</div>
					</div>
				</div>

				<div class="panel-default">
					<div class="panel-heading collapsed" data-toggle="collapse" href="#collapse6" aria-expanded="false">	<h5>
							<strong>Language</strong>
							<span class="icon-caret-up pull-right"></span>
						</h5>
					</div>
					<div id="collapse6" class="panel-collapse collapse" aria-expanded="false">
						<div class="panel-body">

							<div class="label-container">
								<span class="facet-count">(1024)</span>
								<input type="checkbox" id="language1">
								<span class="facet-checkbox"></span>
								<label for="language1">
									<div class="ellipsis" title="English">
								      English
								    </div>
							    </label>
							</div>

							<div class="label-container">
								<span class="facet-count">(256)</span>
								<input type="checkbox" id="language2">
								<span class="facet-checkbox"></span>
								<label for="language2">
									<div class="ellipsis" title="Mandarin">
								      Mandarin
								    </div>
							    </label>
							</div>

							<div class="label-container">
								<span class="facet-count">(128)</span>
								<input type="checkbox" id="language3">
								<span class="facet-checkbox"></span>
								<label for="language3">
									<div class="ellipsis" title="Malay">
								      Malay
								    </div>
							    </label>
							</div>

							<div class="label-container">
								<span class="facet-count">(64)</span>
								<input type="checkbox" id="language4">
								<span class="facet-checkbox"></span>
								<label for="language4">
									<div class="ellipsis" title="Cantonese">
								      Cantonese
								    </div>
							    </label>
							</div>

							<form class="form-inline facet-filter">
								<input type="text" class="filter form-control">
								<a href="javascript:;" class="add-item">
									<span class="icon-positive-disc add-filter"></span>
									<span class="add-filter">Add</span>
								</a>
							</form>
						</div>
					</div>
				</div>

				<div class="panel-default">
					<div class="panel-heading collapsed" data-toggle="collapse" href="#collapse7" aria-expanded="false">	<h5>
							<strong>Years of Experience</strong>
							<span class="icon-caret-up pull-right"></span>
						</h5>
					</div>
					<div id="collapse7" class="panel-collapse collapse" aria-expanded="false">
						<div class="panel-body">
							<div class="label-container">
								<form>
									<div class="row text-center">
										<div class="col-sm-6" style="padding-right:0px;">
											<span class="control-label">Min.</span>
											<input id="minExp" type="number" class="form-control" placeholder="1">
										</div>
										<div class="col-sm-6" style="padding-left:0px;">
											<span class="control-label">Max.</span>
											<input id="maxExp" type="number" class="form-control" placeholder="2">
										</div>
									</div>
									<p>
										<span id="inputErrorExperience" class="sr-only">(error)</span>
										<span class="text-danger error-status">Please enter experience</span>
									</p>
									<a id="applyYOE" class="btn btn-pale btn-block">Apply</a>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-9 panel-results">
			</div>
				</div>

				<pre class="well prettyprint"><input class="btn btn-info btnCopy" type="button" value="Copy" data-trigger="hover" data-toggle="tooltip" data-original-title="Copy to clipboard" data-placement="top"/><div class="code_content">
&lt;!--// TOP BAR //--&gt;
&lt;div class=&quot;panel topbar&quot;&gt;
  ..
&lt;/div&gt;
&lt;!--// TOP BAR END //--&gt;
&lt;div class=&quot;clearfix&quot;&gt;&lt;/div&gt;
&lt;div id=&quot;loadContent&quot;&gt;
  &lt;!--Loading screen--&gt;
  &lt;div class=&quot;loader-wrap&quot;&gt;
    ..
  &lt;/div&gt;
  &lt;!--Loading screen end--&gt;
  &lt;!--Facet Panel--&gt;
  &lt;div class=&quot;panel hidden-xs hidden-sm hidden-md col-sm-12 col-md-12 col-lg-3 accordion-facet&quot;&gt;
    ..
  &lt;/div&gt;
  &lt;!--Facet Panel end--&gt;
  &lt;!--Result Panel--&gt;
  &lt;div class=&quot;col-xs-12 col-sm-12 col-md-12 col-lg-9 panel-results&quot;&gt;
    ..
  &lt;/div&gt;
  &lt;!--Result Panel end--&gt;
  &lt;div class=&quot;clearfix&quot;&gt;&lt;/div&gt;
&lt;/div&gt;
				</div></pre>

				<blockquote class="alert-warning" role="alert">
					Accordion facet basically consists of a <code>topbar</code> and <code>#loadContent</code>. <br>
					Inside <code>#loadContent</code>, it consists of <code>loader-wrap</code>, <code>accordion-facet</code> and <code>panel-results</code>
					<br>
					<ul>
						<li><code>loader-wrap</code> is to show the loading screen when user tick on the checkbox</li>
						<li><code>panel-facet</code> is the panel that consists of filtering criteria</li>
						<li><code>panel-results</code> is the place where we put the Active Filter action bar and cards.</li>
					</ul>
				</blockquote>

			</div>
		</div>
	</div>
		<div class="panel panel-default">
			<div class="panel-heading">
				<div class="panel-title"><strong>The Accordion Facet Panel</strong></div>
			</div>
			<div class="panel-body">
				<blockquote class="alert-default" role="alert">
					Below is a simple example of what is inside the <code>accordion-facet</code>
				</blockquote>

				<div class="well clearfix">
					<!--// TOP BAR //-->
					<div class="panel topbar">

					</div>
					<!--// TOP BAR END //-->
					<div id="loadContent">

						<div class="panel hidden-xs hidden-sm hidden-md col-sm-12 col-md-12 col-lg-3 accordion-facet">
							<div class="panel-body">
								<div class="panel-default">
									<div class="panel-heading"  data-toggle="collapse" href="#collapse8" aria-expanded="true">
										<h5>
											<strong>Location</strong>
											<span class="icon-caret-up pull-right"></span>
										</h5>
									</div>
									<div id="collapse8" class="panel-collapse collapse in" aria-expanded="true">
										<div class="panel-body">
											<div class="label-container">
												<span class="facet-count">(23)</span>
												<input type="checkbox" id="location6"><span class="facet-checkbox" ></span>
												<label for="location6">
													<div class="ellipsis pre-selected" title="Kuala Lumpur">
												      Kuala Lumpur
												      <div class="info">
												      	(Pre-selected option)
												      </div>
												    </div>
											    </label>
											</div>
											<div class="label-container">
												<span class="facet-count">(16)</span>
												<input type="checkbox" id="location7"><span class="facet-checkbox"></span>
												<label for="location7">
													<div class="ellipsis" title="Anywhere in Malsyaia">
												       Anywhere in Malaysia
												    </div>
											    </label>
											</div>
											<form class="form-inline facet-filter">
												<input type="text" class="filter form-control">
												<a href="javascript:;" class="add-item">
													<span class="icon-positive-disc add-filter"></span>
													<span class="add-filter">Add</span>
												</a>
											</form>
										</div>
									</div>
								</div>
								<div class="panel-default">
									<div class="panel-heading"  data-toggle="collapse" href="#collapse9" aria-expanded="true">
										<h5>
											<strong>Salary</strong>
											<span class="icon-caret-up pull-right"></span>
										</h5>
									</div>
									<div id="collapse9" class="panel-collapse collapse in" aria-expanded="true">
										<div class="panel-body">
											<div class="label-container">
												<div class="col-sm-12 well well-sm currency-well">
													<div class="col-sm-5">
														<span class="text">Currency</span>
													</div>
													<div class="col-sm-7">
														<select class="form-control" name="salary_currency_code" id="salary_currency_code" tabindex="-1" data-placeholder="Currency">
															<option value=""></option>
															<option value="1" selected="selected">MYR</option>
															<option value="2">SGD</option>
															<option value="3">PHP</option>
															<option value="4">USD</option>
															<option value="5">INR</option>
															<option value="6">AUD</option>
															<option value="7">IDR</option>
															<option value="8">THB</option>
															<option value="9">HKD</option>
														</select>
													</div>
												</div>
												<form>
													<div class="row text-center">
														<div class="col-sm-6" style="padding-right:0px;">
															<span class="control-label">Min.</span>
															<input id="minSalary" type="number" class="form-control" placeholder="1000">
														</div>
														<div class="col-sm-6" style="padding-left:0px;">
															<span class="control-label">Max.</span>
															<input id="maxSalary" type="number" class="form-control" placeholder="2000">
														</div>
													</div>
													<p>
														<span id="inputErrorSalary" class="sr-only">(error)</span>
														<span class="text-danger error-status">Please enter salary</span>
													</p>
													<a id="applySalary" class="btn btn-pale btn-block">Apply</a>
												</form>
											</div>
										</div>
									</div>
								</div>
								<div class="panel-default">
									<div class="panel-heading collapsed" data-toggle="collapse" href="#collapse10" aria-expanded="false">
										<h5>
											<strong>Years of Experience</strong>
											<span class="icon-caret-up pull-right"></span>
										</h5>
									</div>
									<div id="collapse10" class="panel-collapse collapse" aria-expanded="false">
										<div class="panel-body">
											<div class="label-container">
												<form>
													<div class="row text-center">
														<div class="col-sm-6" style="padding-right:0px;">
															<span class="control-label">Min.</span>
															<input id="minExp" type="number" class="form-control" placeholder="1">
														</div>
														<div class="col-sm-6" style="padding-left:0px;">
															<span class="control-label">Max.</span>
															<input id="maxExp" type="number" class="form-control" placeholder="2">
														</div>
													</div>
													<p>
														<span id="inputErrorExperience" class="sr-only">(error)</span>
														<span class="text-danger error-status">Please enter experience</span>
													</p>
													<a id="applyYOE" class="btn btn-pale btn-block">Apply</a>
												</form>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!--Panel result-->
						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-9 panel-results">
							<!--Action Btn-->
							<div class="panel-action">

							</div>
							<!--Action Btn End-->
						</div>
						<!--Panel Result End-->
					</div>
				</div>

				<blockquote class="alert-default" role="alert">
					Below is an example of what is inside the <code>accordion-facet</code> (checkbox)
				</blockquote>

				<pre class="well prettyprint"><input class="btn btn-info btnCopy" type="button" value="Copy" data-trigger="hover" data-toggle="tooltip" data-original-title="Copy to clipboard" data-placement="top"/><div class="code_content">
&lt;div class=&quot;panel-default&quot;&gt;
  &lt;div class=&quot;panel-heading&quot;  data-toggle=&quot;collapse&quot; href=&quot;#collapse1&quot; aria-expanded=&quot;true&quot;&gt;
    &lt;h5&gt;
      &lt;strong&gt;Location&lt;/strong&gt;
      &lt;span class=&quot;icon-caret-up pull-right&quot;&gt;&lt;/span&gt;
    &lt;/h5&gt;
  &lt;/div&gt;
  &lt;div id=&quot;collapse1&quot; class=&quot;panel-collapse collapse in&quot; aria-expanded=&quot;true&quot;&gt;
    &lt;div class=&quot;panel-body&quot;&gt;
      &lt;div class=&quot;label-container&quot;&gt;
        &lt;span class=&quot;facet-count&quot;&gt;(100)&lt;/span&gt;
        &lt;input type=&quot;checkbox&quot; id=&quot;facet1&quot;&gt;
        &lt;span class=&quot;facet-checkbox&quot;&gt;&lt;/span&gt;
        &lt;label for=&quot;facet1&quot;&gt;
          &lt;div class=&quot;ellipsis&quot; title=&quot;Kuala Lumpur&quot;&gt;
            Kuala Lumpur
          &lt;/div&gt;
        &lt;/label&gt;
      &lt;/div&gt;
      &lt;div class=&quot;label-container&quot;&gt;
        &lt;span class=&quot;facet-count&quot;&gt;(543)&lt;/span&gt;
        &lt;input type=&quot;checkbox&quot; id=&quot;facet2&quot;&gt;
        &lt;span class=&quot;facet-checkbox&quot;&gt;&lt;/span&gt;
        &lt;label for=&quot;facet2&quot;&gt;
          &lt;div class=&quot;ellipsis&quot; title=&quot;Anywhere in Malsyaia&quot;&gt;
            Anywhere in Malaysia
          &lt;/div&gt;
        &lt;/label&gt;
      &lt;/div&gt;
      &lt;form class=&quot;form-inline facet-filter&quot;&gt;
        &lt;input type=&quot;text&quot; class=&quot;filter form-control&quot;&gt;
        &lt;a href=&quot;#&quot; class=&quot;add-item&quot;&gt;
          &lt;span class=&quot;icon-positive-disc add-filter&quot;&gt;&lt;/span&gt;
          &lt;span class=&quot;add-filter&quot;&gt;Add&lt;/span&gt;
        &lt;/a&gt;
      &lt;/form&gt;
    &lt;/div&gt;
  &lt;/div&gt;
&lt;/div&gt;</div></pre>

				<blockquote class="alert-default" role="alert">
					Below is an example of what is inside the <code>accordion-facet</code> (Apply button with well)
				</blockquote>

				<pre class="well prettyprint"><input class="btn btn-info btnCopy" type="button" value="Copy" data-trigger="hover" data-toggle="tooltip" data-original-title="Copy to clipboard" data-placement="top"/><div class="code_content">
&lt;div class=&quot;panel-default&quot;&gt;
  &lt;div class=&quot;panel-heading&quot;  data-toggle=&quot;collapse&quot; href=&quot;#collapse9&quot; aria-expanded=&quot;true&quot;&gt;
    &lt;h5&gt;
      &lt;strong&gt;Salary&lt;/strong&gt;
      &lt;span class=&quot;icon-caret-up pull-right&quot;&gt;&lt;/span&gt;
    &lt;/h5&gt;
  &lt;/div&gt;
  &lt;div id=&quot;collapse9&quot; class=&quot;panel-collapse collapse in&quot; aria-expanded=&quot;true&quot;&gt;
    &lt;div class=&quot;panel-body&quot;&gt;
     &lt;div class=&quot;label-container&quot;&gt;
      &lt;div class=&quot;col-sm-12 well well-sm currency-well&quot;&gt;
        &lt;div class=&quot;col-sm-5&quot;&gt;
          &lt;span class=&quot;text&quot;&gt;Currency&lt;/span&gt;
        &lt;/div&gt;
        &lt;div class=&quot;col-sm-7&quot;&gt;
          &lt;select class=&quot;form-control&quot; name=&quot;salary_currency_code&quot; id=&quot;salary_currency_code&quot; tabindex=&quot;-1&quot; data-placeholder=&quot;Currency&quot;&gt;
            &lt;option value=&quot;&quot;&gt;&lt;/option&gt;
            &lt;option value=&quot;1&quot; selected=&quot;selected&quot;&gt;MYR&lt;/option&gt;
            &lt;option value=&quot;2&quot;&gt;SGD&lt;/option&gt;
          &lt;/select&gt;
        &lt;/div&gt;
      &lt;/div&gt;
      &lt;form&gt;
        &lt;div class=&quot;row text-center&quot;&gt;
          &lt;div class=&quot;col-sm-6&quot; style=&quot;padding-right:0px;&quot;&gt;
            &lt;span class=&quot;control-label&quot;&gt;Min.&lt;/span&gt;
            &lt;input id=&quot;minSalary&quot; type=&quot;number&quot; class=&quot;form-control&quot; placeholder=&quot;1000&quot;&gt;
          &lt;/div&gt;
          &lt;div class=&quot;col-sm-6&quot; style=&quot;padding-left:0px;&quot;&gt;
            &lt;span class=&quot;control-label&quot;&gt;Max.&lt;/span&gt;
            &lt;input id=&quot;maxSalary&quot; type=&quot;number&quot; class=&quot;form-control&quot; placeholder=&quot;2000&quot;&gt;
          &lt;/div&gt;
        &lt;/div&gt;
        &lt;p&gt;
          &lt;span id=&quot;inputErrorSalary&quot; class=&quot;sr-only&quot;&gt;(error)&lt;/span&gt;
          &lt;span class=&quot;text-danger error-status&quot;&gt;Please enter salary&lt;/span&gt;
        &lt;/p&gt;
        &lt;a id=&quot;applySalary&quot; class=&quot;btn btn-pale btn-block&quot;&gt;Apply&lt;/a&gt;
      &lt;/form&gt;
    &lt;/div&gt;
   &lt;/div&gt;
  &lt;/div&gt;
&lt;/div&gt;</div></pre>

				<blockquote class="alert-default" role="alert">
					Below is an example of what is inside the <code>accordion-facet</code> (Apply button without well)
				</blockquote>

				<pre class="well prettyprint"><input class="btn btn-info btnCopy" type="button" value="Copy" data-trigger="hover" data-toggle="tooltip" data-original-title="Copy to clipboard" data-placement="top"/><div class="code_content">
&lt;div class=&quot;panel-default&quot;&gt;
  &lt;div class=&quot;panel-heading collapsed&quot; data-toggle=&quot;collapse&quot; href=&quot;#collapse10&quot; aria-expanded=&quot;false&quot;&gt;
    &lt;h5&gt;
      &lt;strong&gt;Years of Experience&lt;/strong&gt;
      &lt;span class=&quot;icon-caret-up pull-right&quot;&gt;&lt;/span&gt;
    &lt;/h5&gt;
  &lt;/div&gt;
  &lt;div id=&quot;collapse10&quot; class=&quot;panel-collapse collapse&quot; aria-expanded=&quot;false&quot;&gt;
    &lt;div class=&quot;panel-body&quot;&gt;
     &lt;div class=&quot;label-container&quot;&gt;
      &lt;form&gt;
        &lt;div class=&quot;row text-center&quot;&gt;
          &lt;div class=&quot;col-sm-6&quot; style=&quot;padding-right:0px;&quot;&gt;
            &lt;span class=&quot;control-label&quot;&gt;Min.&lt;/span&gt;
            &lt;input id=&quot;minExp&quot; type=&quot;number&quot; class=&quot;form-control&quot; placeholder=&quot;1&quot;&gt;
          &lt;/div&gt;
          &lt;div class=&quot;col-sm-6&quot; style=&quot;padding-left:0px;&quot;&gt;
            &lt;span class=&quot;control-label&quot;&gt;Max.&lt;/span&gt;
            &lt;input id=&quot;maxExp&quot; type=&quot;number&quot; class=&quot;form-control&quot; placeholder=&quot;2&quot;&gt;
          &lt;/div&gt;
        &lt;/div&gt;
        &lt;p&gt;
          &lt;span id=&quot;inputErrorExperience&quot; class=&quot;sr-only&quot;&gt;(error)&lt;/span&gt;
          &lt;span class=&quot;text-danger error-status&quot;&gt;Please enter experience&lt;/span&gt;
        &lt;/p&gt;
        &lt;a id=&quot;applyYOE&quot; class=&quot;btn btn-pale btn-block&quot;&gt;Apply&lt;/a&gt;
      &lt;/form&gt;
     &lt;/div&gt;
    &lt;/div&gt;
  &lt;/div&gt;
&lt;/div&gt;</div></pre>

			</div>
		</div>
		<blockquote class="alert-danger" role="alert">
			<h4>Requires jQuery plug-in</h4>
			<p>If jQuery plug-in (accordion-facet.js) is not included, it will be impossible to add new filter and checked filter to action bar.</p>
			<pre class="well prettyprint">
&lt;script src=&quot;http://ui.jobstreet.com/js/siva.js&quot;&gt;&lt;/script&gt;</pre>
		</blockquote>

		<blockquote class="alert-success" role="alert">
			<h4>Demo File</h4>
			<p>Demo and source code of the accordion facet can be download here.</p>
			<p><a class="btn btn-success" href="../examples/siva/facet-criteria.html" download>Download</a></p>
		</blockquote>
	</div>
</div>
</section>

<?php include("../includes/script.php");?>
<script type="text/javascript">
  $('select').select2();
</script>
</body>
</html>
