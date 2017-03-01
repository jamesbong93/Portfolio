<?php
include("../includes/theme-data.php");
$theme="myjs";
$com="Perpectual";

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
		<!--==================================== Perpectual ===================================================-->
		<a name="perpectual" id="perpectual">&nbsp;</a>
		<h3 class="sub-title">Perpectual (Job Search)</h3>
		
        <div class="col-xs-12 col-sm-12 col-md-3">
			<div class="panel panel-basic perpectual" style="top:70px" data-offset="bottom">
				<div class="panel-header">
					<h4 class="hidden-sm hidden-xs">Search Criteria</h4>
					<h4 class="visible-sm visible-xs collapsed" data-toggle="collapse" href="#collapse_search" aria-expanded="false" aria-controls="collapse_search">Search Criteria<span class="icon-caret-down pull-right"></span></h4>
				</div>
				<div class="panel-body collapse not-md not-lg" id="collapse_search" aria-expanded="false">
					<div id="qsCon">
						<form>
							<div>
								<div class="form-group">
									<input class="form-control" id="key" name="key" placeholder="Job Title or Keywords ..." type="text" value="" title="Enter job title, company name, skill, etc" maxlength="100" autocomplete="off" autosuggest="on">
								</div>
								<div class="form-group">
									<select name="location" id="location">
										<option value=""> </option>
										<option value="0">All Locations</option>
										<optgroup label="Malaysia">
											<option value="50100" class="opt-indent">Johor</option>
											<option value="50200" class="opt-indent">Kedah</option>
											<option value="50400" class="opt-indent">Kelantan</option>
											<option value="50300" class="opt-indent">Kuala Lumpur</option>
											<option value="51500" class="opt-indent">Labuan</option>
											<option value="50500" class="opt-indent">Melaka</option>
											<option value="50600" class="opt-indent">Negeri Sembilan</option>
											<option value="50800" class="opt-indent">Pahang</option>
											<option value="50700" class="opt-indent">Penang</option>
											<option value="50900" class="opt-indent">Perak</option>
											<option value="51000" class="opt-indent">Perlis</option>
											<option value="51600" class="opt-indent">Putrajaya</option>
											<option value="51100" class="opt-indent">Sabah</option>
											<option value="51300" class="opt-indent">Sarawak</option>
											<option value="51200" class="opt-indent">Selangor</option>
											<option value="51400" class="opt-indent">Terengganu</option>
										</optgroup>
										<optgroup label="Overseas">
											<option value="100000" class="opt-indent">China</option>
											<option value="20000" class="opt-indent">Hong Kong</option>
											<option value="40000" class="opt-indent">India</option>
											<option value="30000" class="opt-indent">Indonesia</option>
											<option value="150000" class="opt-indent">Japan</option>
											<option value="60000" class="opt-indent">Philippines</option>
											<option value="70000" class="opt-indent">Singapore</option>
											<option value="80000" class="opt-indent">Thailand</option>
											<option value="110000" class="opt-indent">Vietnam</option>
										</optgroup>
										<optgroup label="Other Work Locations">
											<option value="90100" class="opt-indent">All Other Work Locations</option>
											<option value="90110" class="opt-indent">Africa</option>
											<option value="90120" class="opt-indent">Asia - Middle East</option>
											<option value="90130" class="opt-indent">Asia - Others</option>
											<option value="90140" class="opt-indent">Australia &amp; New Zealand</option>
											<option value="90150" class="opt-indent">Europe</option>
											<option value="90160" class="opt-indent">North America</option>
											<option value="90170" class="opt-indent">South America</option>
										</optgroup>
									</select>
								</div>
								<div class="form-group">
									<select name="specialization" id="specialization">
										<option value=""> </option>
										<option value="0">All Specializations</option>
										<optgroup class="optgroup" label="Accounting/Finance">
											<option value="130,131,132,135" class="opt-indent">All Accounting/Finance</option>
											<option value="130" class="opt-indent">Audit &amp; Taxation</option>
											<option value="135" class="opt-indent">Banking/Financial</option>
											<option value="132" class="opt-indent">Finance/Investment</option>
											<option value="131" class="opt-indent">General/Cost Accounting</option>
										</optgroup>
										<optgroup class="optgroup" label="Admin/Human Resources">
											<option value="133,137,146,148" class="opt-indent">All Admin/Human Resources</option>
											<option value="133" class="opt-indent">Clerical/General Admin</option>
											<option value="137" class="opt-indent">Human Resources</option>
											<option value="146" class="opt-indent">Secretarial</option>
											<option value="148" class="opt-indent">Top Management</option>
										</optgroup>
										<optgroup class="optgroup" label="Arts/Media/Communications">
											<option value="100,101,106,141" class="opt-indent">All Arts/Media/Communications</option>
											<option value="100" class="opt-indent">Advertising</option>
											<option value="101" class="opt-indent">Arts/Creative Design</option>
											<option value="106" class="opt-indent">Entertainment</option>
											<option value="141" class="opt-indent">Public Relations</option>
										</optgroup>
										<optgroup class="optgroup" label="Building/Construction">
											<option value="150,180,184,198" class="opt-indent">All Building/Construction</option>
											<option value="180" class="opt-indent">Architect/Interior Design</option>
											<option value="184" class="opt-indent">Civil/Construction</option>
											<option value="150" class="opt-indent">Property/Real Estate</option>
											<option value="198" class="opt-indent">Quantity Surveying</option>
										</optgroup>
										<optgroup class="optgroup" label="Computer/Information Technology">
											<option value="191,192,193" class="opt-indent">All Computer/Information Technology</option>
											<option value="192" class="opt-indent">IT-Hardware</option>
											<option value="193" class="opt-indent">IT-Network/Sys/DB Admin</option>
											<option value="191" class="opt-indent">IT-Software</option>
										</optgroup>
										<optgroup class="optgroup" label="Education/Training">
											<option value="105,121" class="opt-indent">All Education/Training</option>
											<option value="105" class="opt-indent">Education</option>
											<option value="121" class="opt-indent">Training &amp; Dev.</option>
										</optgroup>
										<optgroup class="optgroup" label="Engineering">
											<option value="185,186,187,188,189,190,195,200" class="opt-indent">All Engineering</option>
											<option value="185" class="opt-indent">Chemical Engineering</option>
											<option value="187" class="opt-indent">Electrical</option>
											<option value="186" class="opt-indent">Electronics</option>
											<option value="189" class="opt-indent">Environmental</option>
											<option value="200" class="opt-indent">Industrial Engineering</option>
											<option value="195" class="opt-indent">Mechanical</option>
											<option value="190" class="opt-indent">Oil/Gas</option>
											<option value="188" class="opt-indent">Other Engineering</option>
										</optgroup>
										<optgroup class="optgroup" label="Healthcare">
											<option value="111,112,113" class="opt-indent">All Healthcare</option>
											<option value="113" class="opt-indent">Diagnosis/Others</option>
											<option value="112" class="opt-indent">Pharmacy</option>
											<option value="111" class="opt-indent">Practitioner/Medical Asst</option>
										</optgroup>
										<optgroup class="optgroup" label="Hotel/Restaurant">
											<option value="107,114" class="opt-indent">All Hotel/Restaurant</option>
											<option value="107" class="opt-indent">Food/Beverage/Restaurant</option>
											<option value="114" class="opt-indent">Hotel/Tourism</option>
										</optgroup>
										<optgroup class="optgroup" label="Manufacturing">
											<option value="115,140,194,196,197" class="opt-indent">All Manufacturing</option>
											<option value="115" class="opt-indent">Maintenance</option>
											<option value="194" class="opt-indent">Manufacturing</option>
											<option value="196" class="opt-indent">Process Control</option>
											<option value="140" class="opt-indent">Purchasing/Material Mgmt</option>
											<option value="197" class="opt-indent">Quality Assurance</option>
										</optgroup>
										<optgroup class="optgroup" label="Sales/Marketing">
											<option value="139,142,143,144,145,149,151" class="opt-indent">All Sales/Marketing</option>
											<option value="142" class="opt-indent">Sales - Corporate</option>
											<option value="139" class="opt-indent">Marketing/Business Dev</option>
											<option value="149" class="opt-indent">Merchandising</option>
											<option value="145" class="opt-indent">Retail Sales</option>
											<option value="143" class="opt-indent">Sales - Eng/Tech/IT</option>
											<option value="144" class="opt-indent">Sales - Financial Services</option>
											<option value="151" class="opt-indent">Telesales/Telemarketing</option>
										</optgroup>
										<optgroup class="optgroup" label="Sciences">
											<option value="102,103,108,109,181,182,183,199" class="opt-indent">All Sciences</option>
											<option value="103" class="opt-indent">Actuarial/Statistics</option>
											<option value="102" class="opt-indent">Agriculture</option>
											<option value="181" class="opt-indent">Aviation</option>
											<option value="182" class="opt-indent">Biotechnology</option>
											<option value="183" class="opt-indent">Chemistry</option>
											<option value="108" class="opt-indent">Food Tech/Nutritionist</option>
											<option value="109" class="opt-indent">Geology/Geophysics</option>
											<option value="199" class="opt-indent">Science &amp; Technology</option>
										</optgroup>
										<optgroup class="optgroup" label="Services">
											<option value="118,119,120,134,138,147,152" class="opt-indent">All Services</option>
											<option value="119" class="opt-indent">Armed Forces</option>
											<option value="134" class="opt-indent">Customer Service</option>
											<option value="147" class="opt-indent">Logistics/Supply Chain</option>
											<option value="138" class="opt-indent">Lawyer/Legal Asst</option>
											<option value="118" class="opt-indent">Personal Care</option>
											<option value="120" class="opt-indent">Social Services</option>
											<option value="152" class="opt-indent">Tech &amp; Helpdesk Support</option>
										</optgroup>
										<optgroup class="optgroup" label="Others">
											<option value="90,104,110,116,117" class="opt-indent">All Others</option>
											<option value="110" class="opt-indent">General Work</option>
											<option value="104" class="opt-indent">Journalist/Editors</option>
											<option value="117" class="opt-indent">Publishing</option>
											<option value="116" class="opt-indent">Others</option>
										</optgroup>
									</select>
								</div>
								<div class="form-group">
									<input class="form-control" id="salary" name="salary" autocomplete="off" type="text" maxlength="20" value="" placeholder="Minimum Salary (MYR)">
								</div>
								<div class="form-group">
									<button class="btn btn-primary btn-block" id="btnSubmit" type="submit" value="Search" title="Search Jobs Now"><strong>Search</strong></button>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
		<div class="col-xs-12 col-md-9">
			<div class="panel">
				<div class="panel-body">
					<blockquote class="alert-default">
						<h5>The Search Criteria panel will fixed on the top-left corner when the page scroll down.</h5>
						<h5></5>
					</blockquote>
					<pre class="well prettyprint">
						<input class="btn btn-info btnCopy" type="button" value="Copy" data-trigger="hover" data-toggle="tooltip" data-original-title="Copy to clipboard" data-placement="top"/><div class="code_content">
&lt;div class=&quot;panel panel-basic perpectual perpectual-md-3&quot; data-offset=&quot;bottom&quot;&gt;
  &lt;div class=&quot;panel-header&quot;&gt;
    &lt;h4 class=&quot;hidden-sm hidden-xs&quot;&gt;Search Criteria&lt;/h4&gt;
    &lt;h4 class=&quot;visible-sm visible-xs collapsed&quot; data-toggle=&quot;collapse&quot; href=&quot;#collapse_search&quot;&gt;Search Criteria
      &lt;span class=&quot;icon-caret-down pull-right&quot;&gt;&lt;/span&gt;&lt;/h4&gt;
  &lt;/div&gt;
  &lt;div class=&quot;panel-body collapse not-md not-lg&quot; id=&quot;collapse_search&quot;&gt;
    &lt;div id=&quot;qsCon&quot;&gt;
      &lt;form&gt;
        &lt;div class=&quot;form-group&quot;&gt;
          &lt;input class=&quot;form-control&quot; placeholder=&quot;Job Title or Keywords ...&quot;&gt;
        &lt;/div&gt;
        &lt;div class=&quot;form-group&quot;&gt;
          &lt;select name=&quot;location&quot; id=&quot;location&quot;&gt;
            &lt;option value=&quot;&quot;&gt; &lt;/option&gt;
            &lt;option value=&quot;0&quot;&gt;All Locations&lt;/option&gt;
            &lt;optgroup label=&quot;Malaysia&quot;&gt;
              &lt;option&gt;Johor&lt;/option&gt;
              &lt;option&gt;Kedah&lt;/option&gt;
            &lt;/optgroup&gt;
            &lt;optgroup label=&quot;Overseas&quot;&gt;
              &lt;option&gt;China&lt;/option&gt;
            &lt;/optgroup&gt;
          &lt;/select&gt;
        &lt;/div&gt;
        &lt;div class=&quot;form-group&quot;&gt;
          &lt;button class=&quot;btn btn-primary btn-block&quot;&gt;Search&lt;/button&gt;
        &lt;/div&gt;
      &lt;/form&gt;
    &lt;/div&gt;
  &lt;/div&gt;
&lt;/div&gt;
						</div></pre>
					<blockquote class="alert-danger" role="alert">
						<h4 class="text-danger">Requires JQuery plug-in</h4>
						<p>If JQuery plug-in is not included, it will be impossible to fixed at the top-left corner.</p>
						<pre class="well prettyprint">
//===========================Perpectual for Panel===================================
var initialHideFlag = false;
if($(&quot;.perpectual&quot;).hasClass(&quot;initial-hide&quot;)){
	initialHideFlag = true;
}
var perpectualEvent = function () {  
	var offset = $(document).scrollTop();
	var $el = $(&quot;.perpectual&quot;).parent();
	var changeOffset;
	
	if($(&quot;.perpectual&quot;).length &gt; 0){
		if($(&quot;.perpectual&quot;).attr(&quot;data-offset&quot;) == &quot;top&quot;){
			changeOffset = $el.offset().top + 10;
		}else if ($(&quot;.perpectual&quot;).attr(&quot;data-offset&quot;) == &quot;bottom&quot;){
			changeOffset = $el.offset().top + $el.height() + 10;
		}else if ($(&quot;.perpectual&quot;).attr(&quot;data-offset&quot;).length &gt; 0){
			changeOffset = $(&quot;.perpectual&quot;).attr(&quot;data-offset&quot;);
		}else {
			changeOffset = $el.offset().top + 10;
		}
		if(offset &lt;= changeOffset){
			if($(&quot;.perpectual&quot;).hasClass(&quot;default-hidden&quot;)){
				$(&quot;.perpectual&quot;).removeClass(&quot;stay&quot;).hide();
			}else{
				$(&quot;.perpectual&quot;).removeClass(&quot;stay&quot;);
			}
			if(initialHideFlag) {
				$(&quot;.perpectual&quot;).addClass(&quot;initial-hide&quot;);
			}
		}else{ 
			$(&quot;.perpectual&quot;).addClass(&quot;stay&quot;).show();
			$(&quot;.perpectual&quot;).removeClass(&quot;initial-hide&quot;);
		}
	}
}
$(window).bind(&quot;scroll.perpectual&quot;, perpectualEvent);</pre>
						<p>Here is the CDN link for the JQuery Plug-in.</p>
						<pre class="well prettyprint">
&lt;script src=&quot;http://dna.jsstatic.com/js/myjs.js&quot;&gt;&lt;/script&gt;
</pre>
					</blockquote>
					<blockquote class="alert-warning" role="alert">
						<h4 class="text-warning">Select2</h4>
						<p>Select2 gives you a customizable select box with support for searching, tagging, remote data sets, infinite scrolling, and many other highly used options.</p>
						<p>To use Select2, you must include the JavaScript and CSS file. Here's the CDN for the both files.</p>
						<pre class="well prettyprint">
&lt;link rel=&quot;stylesheet&quot; href=&quot;http://dna.jsstatic.com/select2/select2.css&quot;&gt;
&lt;script src=&quot;http://dna.jsstatic.com/select2/select2.js&quot;&gt;&lt;/script&gt;</pre>
					</blockquote>
					<blockquote class="alert-success" role="alert">
						<h4 class="text-success">Source Code</h4>
						<p>Source code for perpectual can be download here.</p>
						<p><a href="myjs/source-code/perpectual.html" class="btn btn-success" download>Download</a></p>
					</blockquote>	
				</div>
			</div>
		</div>
	</div>
</section>

<?php include("../includes/script.php");?>
</body>
</html>