<?php
include("../includes/theme-data.php");
$theme="myjs";
$com="Edit Resume";

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
		<!--==================================== Edit Resume ===================================================-->

			<a name="resume-preview" id="resume-preview">&nbsp;</a>
			<h3 class="sub-title">Edit Resume (Content)</h3>
			
			<div class="panel panel-default">
				<div class="panel-heading">
					<div class="panel-title"><strong>Structure</strong></div>
				</div>
				<div class="panel-body">
					<blockquote class="alert-default">
						<h5>The structure of edit resume is similar with resume preview which using <code>panel-group</code> and <code>panel-basic</code>. However, user can edit their resume here. </h5>
					</blockquote>	
					
					<div class="row">
						<div class="col-md-9 col-xs-12">
						<div class="well clearfix">
						<div class="panel-group resume">
					<div class="panel panel-basic">
						<div class="panel-header">
							<h1 class="page-header">
								<span class="icon-briefcase"></span>
								<span>Experience</span>
							</h1>
						</div>
						<div class="panel-body">
						
							<div class="row resume-item">
								<div class="col-xs-12">
									<div class="info-table">
										<div class="row">
											<label class="col-xs-12 col-sm-3">Experience Level</label>
											<div class="col-xs-10 col-sm-7 info">I have been working since Nov 2014</div>
											<div class="col-xs-2 col-sm-2 text-right">
												<a href="javascript:;" title="Edit Experience Level" class="action-link"><span class="icon-edit"></span></a>
											</div>
										</div>
									</div>
								</div>
							</div>
							
							<!------------------------------------------------------------------------------------------------->
							
							<div class="row resume-form">
								<form class="form-horizontal">					
									<div class="form-group">
										<label class="col-sm-3 required control-label" id="lbl_edit_form_experience_level" aria-required="true">Experience Level</label>
										<div class="col-sm-9">
											<div class="row">
												<div class="col-sm-12">
													<div class="row">
														<div class="col-xs-12 col-sm-6 col-md-5 col-lg-4">
															<div class="radio">
																<label>
																<input id="worker" name="experience_level_code" type="radio" value="1" checked="">
																I have been working since
																</label>
															</div>
														</div>
														<div class="col-xs-6 col-sm-3 col-md-3 col-lg-2">
															<select class="" id="years_of_exp" name="start_work_year" data-placeholder="Year" tabindex="-1">
																<option value=""></option>
																<option value="2015">2015</option>
																<option value="2014" selected="selected">2014</option>
																<option value="2013">2013</option>
																<option value="2012">2012</option>
																<option value="2011">2011</option>
																<option value="2010">2010</option>
																<option value="2009">2009</option>
																<option value="2008">2008</option>
																<option value="2007">2007</option>
																<option value="2006">2006</option>
																<option value="2005">2005</option>
																<option value="2004">2004</option>
																<option value="2003">2003</option>
																<option value="2002">2002</option>
																<option value="2001">2001</option>
																<option value="2000">2000</option>
																<option value="1999">1999</option>
																<option value="1998">1998</option>
																<option value="1997">1997</option>
																<option value="1996">1996</option>
																<option value="1995">1995</option>
																<option value="1994">1994</option>
																<option value="1993">1993</option>
																<option value="1992">1992</option>
																<option value="1991">1991</option>
																<option value="1990">1990</option>
																<option value="1989">1989</option>
																<option value="1988">1988</option>
																<option value="1987">1987</option>
																<option value="1986">1986</option>
																<option value="1985">1985</option>
																<option value="1984">1984</option>
																<option value="1983">1983</option>
																<option value="1982">1982</option>
																<option value="1981">1981</option>
																<option value="1980">1980</option>
																<option value="1979">1979</option>
																<option value="1978">1978</option>
																<option value="1977">1977</option>
																<option value="1976">1976</option>
																<option value="1975">1975</option>
																<option value="1974">1974</option>
																<option value="1973">1973</option>
																<option value="1972">1972</option>
																<option value="1971">1971</option>
																<option value="1970">1970</option>
																<option value="1969">1969</option>
																<option value="1968">1968</option>
																<option value="1967">1967</option>
																<option value="1966">1966</option>
																<option value="1965">1965</option>
																<option value="1964">1964</option>
																<option value="1963">1963</option>
																<option value="1962">1962</option>
																<option value="1961">1961</option>
																<option value="1960">1960</option>
																<option value="1959">1959</option>
																<option value="1958">1958</option>
																<option value="1957">1957</option>
																<option value="1956">1956</option>
																<option value="1955">1955</option>
																<option value="1954">1954</option>
																<option value="1953">1953</option>
																<option value="1952">1952</option>
																<option value="1951">1951</option>
																<option value="1950">1950</option>
																<option value="1949">1949</option>
																<option value="1948">1948</option>
																<option value="1947">1947</option>
																<option value="1946">1946</option>
																<option value="1945">1945</option>
															</select>
														</div>
														<div class="col-xs-6 col-sm-3 col-md-3 col-lg-2">
															<select class="hide" id="months_of_exp" name="start_work_month" data-placeholder="Month" tabindex="-1">
																<option value=""></option>
																<option value="1">Jan</option>
																<option value="2">Feb</option>
																<option value="3">Mar</option>
																<option value="4">Apr</option>
																<option value="5">May</option>
																<option value="6">Jun</option>
																<option value="7">Jul</option>
																<option value="8">Aug</option>
																<option value="9">Sep</option>
																<option value="10">Oct</option>
																<option value="11" selected="">Nov</option>
																<option value="12">Dec</option>
															</select>
														</div>
													</div>
												</div>
												<div class="col-sm-12">
													<div class="radio">
														<label>
														<input id="fresh" name="experience_level_code" type="radio" value="2">
														I am a fresh graduate seeking my first job
														</label>
													</div>
												</div>
												<div class="col-sm-12">
													<div class="radio">
														<label>
														<input id="intern" name="experience_level_code" type="radio" value="3">
														I am a student seeking internship or part-time jobs
														</label>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="clearfix x2"></div>
									<div class="form-group">
										<div class="col-sm-offset-3 col-sm-9">
											<button class="btn btn-primary btn-mobile-block" id="btn_edit" name="btn_edit">Save</button>
											<a class="btn btn-default btn-mobile-block" id="btn_cancel" name="btn_cancel" href="javascript:;" role="button">Cancel</a>
										</div>
									</div>
								</form>
							</div>
							
							<!------------------------------------------------------------------------------------------------->
							
							
						</div>
					</div>
					<div class="panel panel-basic">
						<div class="panel-body">
							<div class="row resume-item">
								<div class="col-xs-12 text-right">
									<a href="javascript:;" title="Add Experience" class="action-link add-link"><span class="icon-positive"></span>Add</a>
								</div>
							</div>
							
							<!-------------------------------------------------------------------------------------------------------------->
							
							<div class="row resume-form">
								<form class="form-horizontal">
									<div class="form-group">
										<label class="col-sm-3 required control-label" for="position_title" aria-required="true">Position Title</label>
										<div class="col-sm-7">
											<input class="form-control ac_input" name="position_title" id="position_title" type="text" maxlength="80" value="" autocomplete="off">
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-sm-3 required" for="company_name" aria-required="true">Company Name</label>
										<div class="col-sm-7">
											<input class="form-control ac_input" id="company_name" name="company_name" type="text" maxlength="50" value="" autocomplete="off">
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-sm-3 required " id="lbl_join_duration" aria-required="true">Joined Duration</label>
										<div class="col-sm-9">
											<div class="row">
												<div class="col-xs-6 col-sm-4 col-md-3">
													<select class="form-control" name="join_date_month" id="join-month" tabindex="-1" data-placeholder="Month">
														<option value=""></option>
														<option value="1">Jan</option>
														<option value="2">Feb</option>
														<option value="3">Mar</option>
														<option value="4">Apr</option>
														<option value="5">May</option>
														<option value="6">Jun</option>
														<option value="7">Jul</option>
														<option value="8">Aug</option>
														<option value="9">Sep</option>
														<option value="10">Oct</option>
														<option value="11">Nov</option>
														<option value="12">Dec</option>
													</select>
												</div>
												<div class="col-xs-5 col-sm-4 col-md-3">
													<input class="form-control " id="join_date_year" name="join_date_year" type="number" pattern="[0-9]*" min="0" value="" placeholder="Year" maxlength="4">
												</div>
												<div class="col-xs-1 col-sm-1 col-md-1 custom-control-label"><label class="control-label">To</label></div>
												<div class="col-xs-12 col-sm-12 col-md-12" id="joined_date_error_container">
												</div>
											</div>
											<div class="row">
												<div class="col-xs-6 col-sm-4 col-md-3">
													<select class="form-control" id="left-month" name="left_date_month" tabindex="-1" data-placeholder="Month">
														<option value=""></option>
														<option value="1">Jan</option>
														<option value="2">Feb</option>
														<option value="3">Mar</option>
														<option value="4">Apr</option>
														<option value="5">May</option>
														<option value="6">Jun</option>
														<option value="7">Jul</option>
														<option value="8">Aug</option>
														<option value="9">Sep</option>
														<option value="10">Oct</option>
														<option value="11">Nov</option>
														<option value="12">Dec</option>
													</select>
													<input type="hidden" name="left_date_month" id="left_date_month_text" value="99">
												</div>
												<div class="col-xs-5 col-sm-4 col-md-3">
													<input class="form-control " id="left_date_year" name="left_date_year" type="number" pattern="[0-9]*" min="0" value="" placeholder="Year" maxlength="4">
												</div>
												<div class="col-xs-12 col-sm-12 col-md-2 nowrap">
													<div class="checkbox-inline">
														<label>
														<input id="chkPresent" name="chkPresent" type="checkbox">
														Present
														</label>
													</div>
												</div>
												<div class="col-xs-12 col-sm-12 col-md-12" id="left_date_error_container">
												</div>
											</div>
										</div>
									</div>
									<div class="form-group ">
										<label class="control-label col-sm-3 required" id="lbl_specialization" aria-required="true">Specialization</label>
										<div class="col-sm-7">
											<div class="row">
												<div class="col-xs-11">
													<select class="form-control" name="specialization_code" id="specialization_code" data-placeholder="Specialization" tabindex="-1" data-placeholder="Select Specialization">
														<option value=""></option>
														<option title="Actuarial Science/Statistics" value="103"> Actuarial Science/Statistics </option>
														<option title="Advertising/Media Planning" value="100"> Advertising/Media Planning </option>
														<option title="Agriculture/Forestry/Fisheries" value="102"> Agriculture/Forestry/Fisheries </option>
														<option title="Architecture/Interior Design" value="180"> Architecture/Interior Design </option>
														<option title="Arts/Creative/Graphics Design" value="101"> Arts/Creative/Graphics Design </option>
														<option title="Aviation/Aircraft Maintenance" value="181"> Aviation/Aircraft Maintenance </option>
														<option title="Banking/Financial Services" value="135"> Banking/Financial Services </option>
														<option title="Biotechnology" value="182"> Biotechnology </option>
														<option title="Chemistry" value="183"> Chemistry </option>
														<option title="Clerical/Administrative Support" value="133"> Clerical/Administrative Support </option>
														<option title="Corporate Strategy/Top Management" value="148"> Corporate Strategy/Top Management </option>
														<option title="Customer Service" value="134"> Customer Service </option>
														<option title="Education" value="105"> Education </option>
														<option title="Engineering - Chemical" value="185"> Engineering - Chemical </option>
														<option title="Engineering - Civil/Construction/Structural" value="184"> Engineering - Civil/Construction/Structural </option>
														<option title="Engineering - Electrical" value="187"> Engineering - Electrical </option>
														<option title="Engineering - Electronics/Communication" value="186"> Engineering - Electronics/Communication </option>
														<option title="Engineering - Environmental/Health/Safety" value="189"> Engineering - Environmental/Health/Safety </option>
														<option title="Engineering - Industrial" value="200"> Engineering - Industrial </option>
														<option title="Engineering - Mechanical/Automotive" value="195"> Engineering - Mechanical/Automotive </option>
														<option title="Engineering - Oil/Gas" value="190"> Engineering - Oil/Gas </option>
														<option title="Engineering - Others" value="188"> Engineering - Others </option>
														<option title="Entertainment/Performing Arts" value="106"> Entertainment/Performing Arts </option>
														<option title="Finance - Audit/Taxation" value="130"> Finance - Audit/Taxation </option>
														<option title="Finance - Corporate Finance/Investment/Merchant Banking" value="132"> Finance - Corporate Finance/Investment/Merchant Banking </option>
														<option title="Finance - General/Cost Accounting " value="131"> Finance - General/Cost Accounting  </option>
														<option title="Food Technology/Nutritionist" value="108"> Food Technology/Nutritionist </option>
														<option title="Food/Beverage/Restaurant Service" value="107"> Food/Beverage/Restaurant Service </option>
														<option title="General Work (Housekeeper, Driver, Dispatch, Messenger, etc)" value="110"> General Work (Housekeeper, Driver, Dispatch, Messenger, etc) </option>
														<option title="Geology/Geophysics" value="109"> Geology/Geophysics </option>
														<option title="Healthcare - Doctor/Diagnosis" value="113"> Healthcare - Doctor/Diagnosis </option>
														<option title="Healthcare - Nurse/Medical Support &amp; Assistant" value="111"> Healthcare - Nurse/Medical Support &amp; Assistant </option>
														<option title="Healthcare - Pharmacy" value="112"> Healthcare - Pharmacy </option>
														<option title="Hotel Management/Tourism Services" value="114"> Hotel Management/Tourism Services </option>
														<option title="Human Resources" value="137"> Human Resources </option>
														<option title="IT/Computer - Hardware" value="192"> IT/Computer - Hardware </option>
														<option title="IT/Computer - Network/System/Database Admin" value="193"> IT/Computer - Network/System/Database Admin </option>
														<option title="IT/Computer - Software" value="191"> IT/Computer - Software </option>
														<option title="Journalist/Editor" value="104"> Journalist/Editor </option>
														<option title="Law/Legal Services" value="138"> Law/Legal Services </option>
														<option title="Logistics/Supply Chain" value="147"> Logistics/Supply Chain </option>
														<option title="Maintenance/Repair (Facilities &amp; Machinery)" value="115"> Maintenance/Repair (Facilities &amp; Machinery) </option>
														<option title="Manufacturing/Production Operations" value="194"> Manufacturing/Production Operations </option>
														<option title="Marketing/Business Development" value="139"> Marketing/Business Development </option>
														<option title="Merchandising" value="149"> Merchandising </option>
														<option title="Personal Care/Beauty/Fitness Service" value="118"> Personal Care/Beauty/Fitness Service </option>
														<option title="Process Design &amp; Control/Instrumentation" value="196"> Process Design &amp; Control/Instrumentation </option>
														<option title="Property/Real Estate" value="150"> Property/Real Estate </option>
														<option title="Public Relations/Communications" value="141"> Public Relations/Communications </option>
														<option title="Publishing/Printing" value="117"> Publishing/Printing </option>
														<option title="Purchasing/Inventory/Material &amp; Warehouse Management" value="140"> Purchasing/Inventory/Material &amp; Warehouse Management </option>
														<option title="Quality Control/Assurance" value="197"> Quality Control/Assurance </option>
														<option title="Quantity Surveying" value="198"> Quantity Surveying </option>
														<option title="Sales - Corporate" value="142"> Sales - Corporate </option>
														<option title="Sales - Engineering/Technical/IT" value="143"> Sales - Engineering/Technical/IT </option>
														<option title="Sales - Financial Services (Insurance, Unit Trust, etc)" value="144"> Sales - Financial Services (Insurance, Unit Trust, etc) </option>
														<option title="Sales - Retail/General" value="145"> Sales - Retail/General </option>
														<option title="Sales - Telesales/Telemarketing" value="151"> Sales - Telesales/Telemarketing </option>
														<option title="Science &amp; Technology/Laboratory" value="199"> Science &amp; Technology/Laboratory </option>
														<option title="Secretarial/Executive &amp; Personal Assistant" value="146"> Secretarial/Executive &amp; Personal Assistant </option>
														<option title="Security/Armed Forces/Protective Services" value="119"> Security/Armed Forces/Protective Services </option>
														<option title="Social &amp; Counselling Service" value="120"> Social &amp; Counselling Service </option>
														<option title="Technical &amp; Helpdesk Support" value="152"> Technical &amp; Helpdesk Support </option>
														<option title="Training &amp; Development" value="121"> Training &amp; Development </option>
														<option value="116">Others</option>
													</select>
												</div>
												<div class="col-xs-1">
													<a href="javascript:;">
														<span class="icon-question-mark" id="specialization_tip" tabindex="0" role="button" data-html="true" data-container="body" data-toggle="popover" data-placement="left" data-content="Type of work you do. <br/>E.g. If you are an Accountant working with an IT company, your <b>specialization</b> is <b>Finance/General Accounting</b>." data-trigger="hover" data-original-title="" title=""></span>
													</a>
												</div>
											</div>
										</div>
									</div>
									<div class="form-group ">
										<label class="control-label col-sm-3 required" aria-required="true">Role</label>
										<div class="col-sm-7">
											<select class="form-control" name="primary_role" id="primary_role" tabindex="-1" data-placeholder="Select Role">
												<option value=""></option>
												<option value="1220">Architect</option>
												<option value="1222">Draughtsman/Design Drafter</option>
												<option value="1221">Interior Designer</option>
												<option value="1224">Management</option>
												<option value="1223">Town Planner</option>
												<option value="1225">Others</option>
											</select>
										</div>
									</div>
									<div class="form-group ">
										<label class="control-label col-sm-3">Country</label>
										<div class="col-sm-7">
											<select class="form-control" name="company_country_code" id="company_country_code" tabindex="-1" data-placeholder="Select Country">
												<option value=""></option>
												<option value="3">Afghanistan</option>
												<option value="6">Albania</option>
												<option value="59">Algeria</option>
												<option value="12">American Samoa</option>
												<option value="1">Andorra</option>
												<option value="9">Angola</option>
												<option value="5">Anguilla</option>
												<option value="10">Antarctica</option>
												<option value="4">Antigua and Barbuda</option>
												<option value="11">Argentina</option>
												<option value="7">Armenia</option>
												<option value="15">Aruba</option>
												<option value="14">Australia</option>
												<option value="13">Austria</option>
												<option value="16">Azerbaijan</option>
												<option value="30">Bahamas</option>
												<option value="23">Bahrain</option>
												<option value="19">Bangladesh</option>
												<option value="18">Barbados</option>
												<option value="34">Belarus</option>
												<option value="20">Belgium</option>
												<option value="35">Belize</option>
												<option value="25">Benin</option>
												<option value="26">Bermuda</option>
												<option value="31">Bhutan</option>
												<option value="28">Bolivia</option>
												<option value="17">Bosnia Hercegovina</option>
												<option value="33">Botswana</option>
												<option value="32">Bouvet Island</option>
												<option value="29">Brazil</option>
												<option value="101">British Indian Ocean Territory</option>
												<option value="27">Brunei Darussalam</option>
												<option value="22">Bulgaria</option>
												<option value="21">Burkina Faso</option>
												<option value="24">Burundi</option>
												<option value="111">Cambodia</option>
												<option value="45">Cameroon</option>
												<option value="36">Canada</option>
												<option value="50">Cape Verde</option>
												<option value="118">Cayman Islands</option>
												<option value="39">Central African Republic</option>
												<option value="205">Chad</option>
												<option value="44">Chile</option>
												<option value="46">China</option>
												<option value="51">Christmas Island</option>
												<option value="37">Cocos (Keeling) Islands</option>
												<option value="47">Colombia</option>
												<option value="113">Comoros</option>
												<option value="40">Congo</option>
												<option value="43">Cook Islands</option>
												<option value="48">Costa Rica</option>
												<option value="42">Cote D'ivoire</option>
												<option value="94">Croatia</option>
												<option value="49">Cuba</option>
												<option value="52">Cyprus</option>
												<option value="53">Czech Republic</option>
												<option value="56">Denmark</option>
												<option value="55">Djibouti</option>
												<option value="57">Dominica</option>
												<option value="58">Dominican Republic</option>
												<option value="214">East Timor</option>
												<option value="60">Ecuador</option>
												<option value="62">Egypt</option>
												<option value="201">EL Salvador</option>
												<option value="84">Equatorial Guinea</option>
												<option value="64">Eritrea</option>
												<option value="61">Estonia</option>
												<option value="66">Ethiopia</option>
												<option value="69">Falkland Islands (Malvinas)</option>
												<option value="71">Faroe Islands</option>
												<option value="68">Fiji</option>
												<option value="67">Finland</option>
												<option value="72">France</option>
												<option value="77">French Guiana</option>
												<option value="168">French Polynesia</option>
												<option value="206">French Southern Territories</option>
												<option value="73">Gabon</option>
												<option value="81">Gambia</option>
												<option value="76">Georgia</option>
												<option value="54">Germany</option>
												<option value="78">Ghana</option>
												<option value="79">Gibraltar</option>
												<option value="85">Greece</option>
												<option value="80">Greenland</option>
												<option value="75">Grenada</option>
												<option value="83">Guadeloupe</option>
												<option value="88">Guam</option>
												<option value="87">Guatemala</option>
												<option value="82">Guinea</option>
												<option value="89">Guinea-Bissau</option>
												<option value="90">Guyana</option>
												<option value="95">Haiti</option>
												<option value="92">Heard and Mc Donald Islands</option>
												<option value="93">Honduras</option>
												<option value="91">Hong Kong</option>
												<option value="96">Hungary</option>
												<option value="104">Iceland</option>
												<option value="100">India</option>
												<option value="97">Indonesia</option>
												<option value="103">Iran</option>
												<option value="102">Iraq</option>
												<option value="98">Ireland</option>
												<option value="99">Israel</option>
												<option value="105">Italy</option>
												<option value="106">Jamaica</option>
												<option value="108">Japan</option>
												<option value="107">Jordan</option>
												<option value="119">Kazakhstan</option>
												<option value="109">Kenya</option>
												<option value="112">Kiribati</option>
												<option value="115">Korea (North)</option>
												<option value="116">Korea (South)</option>
												<option value="117">Kuwait</option>
												<option value="110">Kyrgyzstan</option>
												<option value="120">Laos</option>
												<option value="129">Latvia</option>
												<option value="121">Lebanon</option>
												<option value="126">Lesotho</option>
												<option value="125">Liberia</option>
												<option value="130">Libyan Arab Jamahiriya</option>
												<option value="123">Liechtenstein</option>
												<option value="127">Lithuania</option>
												<option value="128">Luxembourg</option>
												<option value="140">Macau</option>
												<option value="136">Macedonia</option>
												<option value="134">Madagascar</option>
												<option value="148">Malawi</option>
												<option value="150">Malaysia</option>
												<option value="147">Maldives</option>
												<option value="137">Mali</option>
												<option value="145">Malta</option>
												<option value="135">Marshall Islands</option>
												<option value="142">Martinique</option>
												<option value="143">Mauritania</option>
												<option value="146">Mauritius</option>
												<option value="236">Mayotte</option>
												<option value="149">Mexico</option>
												<option value="70">Micronesia</option>
												<option value="132">Monaco</option>
												<option value="139">Mongolia</option>
												<option value="144">Montserrat</option>
												<option value="131">Morocco</option>
												<option value="151">Mozambique</option>
												<option value="138">Myanmar</option>
												<option value="152">Nambia</option>
												<option value="161">Nauru</option>
												<option value="160">Nepal</option>
												<option value="158">Netherlands</option>
												<option value="8">Netherlands Antilles</option>
												<option value="153">New Caledonia</option>
												<option value="163">New Zealand</option>
												<option value="157">Nicaragua</option>
												<option value="154">Niger</option>
												<option value="156">Nigeria</option>
												<option value="162">Niue</option>
												<option value="155">Norfolk Island</option>
												<option value="141">Northern Mariana Islands</option>
												<option value="159">Norway</option>
												<option value="164">Oman</option>
												<option value="165">Others</option>
												<option value="171">Pakistan</option>
												<option value="178">Palau</option>
												<option value="176">Palestinian Territory, Occupied</option>
												<option value="166">Panama</option>
												<option value="169">Papua New Guinea</option>
												<option value="179">Paraguay</option>
												<option value="167">Peru</option>
												<option value="170">Philippines</option>
												<option value="174">Pitcairn</option>
												<option value="172">Poland</option>
												<option value="177">Portugal</option>
												<option value="175">Puerto Rico</option>
												<option value="180">Qatar</option>
												<option value="133">Republic Of Moldova</option>
												<option value="181">Reunion</option>
												<option value="182">Romania</option>
												<option value="183">Russia</option>
												<option value="184">Rwanda</option>
												<option value="114">Saint Kitts And Nevis</option>
												<option value="122">Saint Lucia</option>
												<option value="227">Saint Vincent and The Grenadines</option>
												<option value="234">Samoa</option>
												<option value="196">San Marino</option>
												<option value="200">Sao Tome and Principe</option>
												<option value="185">Saudi Arabia</option>
												<option value="197">Senegal</option>
												<option value="187">Seychelles</option>
												<option value="195">Sierra Leone</option>
												<option value="190">Singapore</option>
												<option value="194">Slovakia</option>
												<option value="192">Slovenia</option>
												<option value="186">Solomon Islands</option>
												<option value="198">Somalia</option>
												<option value="238">South Africa</option>
												<option value="86">South Georgia And South Sandwich Islands</option>
												<option value="65">Spain</option>
												<option value="124">Sri Lanka</option>
												<option value="191">St. Helena</option>
												<option value="173">St. Pierre and Miquelon</option>
												<option value="188">Sudan</option>
												<option value="199">Suriname</option>
												<option value="193">Svalbard and Jan Mayen Islands</option>
												<option value="203">Swaziland</option>
												<option value="189">Sweden</option>
												<option value="41">Switzerland</option>
												<option value="202">Syrian Arab Republic</option>
												<option value="218">Taiwan</option>
												<option value="209">Tajikistan</option>
												<option value="219">Tanzania</option>
												<option value="208">Thailand</option>
												<option value="207">TOGO</option>
												<option value="210">Tokelau</option>
												<option value="213">Tonga</option>
												<option value="216">Trinidad and Tobago</option>
												<option value="212">Tunisia</option>
												<option value="215">Turkey</option>
												<option value="211">Turkmenistan</option>
												<option value="204">Turks and Caicos Islands</option>
												<option value="217">Tuvalu</option>
												<option value="221">Uganda</option>
												<option value="220">Ukraine</option>
												<option value="2">United Arab Emirates</option>
												<option value="74">United Kingdom</option>
												<option value="223">United States</option>
												<option value="222">United States Minor Outlying Islands</option>
												<option value="224">Uruguay</option>
												<option value="225">Uzbekistan</option>
												<option value="232">Vanuatu</option>
												<option value="226">Vatican City State (Holy See)</option>
												<option value="228">Venezuela</option>
												<option value="231">Vietnam</option>
												<option value="229">Virgin Islands (British)</option>
												<option value="230">Virgin Islands (U.S.)</option>
												<option value="233">Wallis and Futuna Islands</option>
												<option value="63">Western Sahara</option>
												<option value="235">Yemen</option>
												<option value="237">Yugoslavia</option>
												<option value="38">Zaire</option>
												<option value="239">Zambia</option>
												<option value="240">Zimbabwe</option>
											</select>
										</div>
									</div>
									<div class="form-group ">
										<label class="control-label col-sm-3 required" id="lbl_industry" aria-required="true">Industry</label>
										<div class="col-sm-7">
											<select class="form-control" name="industry_code" id="industry_code" data-placeholder="Select Industry" tabindex="-1" >
												<option value=""></option>
												<option title="Accounting / Audit / Tax Services" value="60"> Accounting / Audit / Tax Services </option>
												<option title="Advertising / Marketing / Promotion / PR" value="3"> Advertising / Marketing / Promotion / PR </option>
												<option title="Aerospace / Aviation / Airline" value="1"> Aerospace / Aviation / Airline </option>
												<option title="Agricultural / Plantation / Poultry / Fisheries" value="4"> Agricultural / Plantation / Poultry / Fisheries </option>
												<option title="Apparel" value="5"> Apparel </option>
												<option title="Architectural Services / Interior Designing" value="61"> Architectural Services / Interior Designing </option>
												<option title="Arts / Design / Fashion" value="2"> Arts / Design / Fashion </option>
												<option title="Automobile / Automotive Ancillary / Vehicle" value="6"> Automobile / Automotive Ancillary / Vehicle </option>
												<option title="Banking / Financial Services" value="7"> Banking / Financial Services </option>
												<option title="BioTechnology / Pharmaceutical / Clinical research" value="39"> BioTechnology / Pharmaceutical / Clinical research </option>
												<option title="Call Center / IT-Enabled Services / BPO" value="58"> Call Center / IT-Enabled Services / BPO </option>
												<option title="Chemical / Fertilizers / Pesticides" value="8"> Chemical / Fertilizers / Pesticides </option>
												<option title="Computer / Information Technology (Hardware)" value="9"> Computer / Information Technology (Hardware) </option>
												<option title="Computer / Information Technology (Software)" value="10"> Computer / Information Technology (Software) </option>
												<option title="Construction / Building / Engineering" value="11"> Construction / Building / Engineering </option>
												<option title="Consulting (Business &amp; Management)" value="12"> Consulting (Business &amp; Management) </option>
												<option title="Consulting (IT, Science, Engineering &amp; Technical)" value="13"> Consulting (IT, Science, Engineering &amp; Technical) </option>
												<option title="Consumer Products / FMCG" value="15"> Consumer Products / FMCG </option>
												<option title="Education" value="16"> Education </option>
												<option title="Electrical &amp; Electronics" value="17"> Electrical &amp; Electronics </option>
												<option title="Entertainment / Media" value="18"> Entertainment / Media </option>
												<option title="Environment / Health / Safety" value="19"> Environment / Health / Safety </option>
												<option title="Exhibitions / Event management / MICE" value="62"> Exhibitions / Event management / MICE </option>
												<option title="Food &amp; Beverage / Catering / Restaurant" value="20"> Food &amp; Beverage / Catering / Restaurant </option>
												<option title="Gems / Jewellery" value="63"> Gems / Jewellery </option>
												<option title="General &amp; Wholesale Trading" value="23"> General &amp; Wholesale Trading </option>
												<option title="Government / Defence" value="21"> Government / Defence </option>
												<option title="Grooming / Beauty / Fitness" value="22"> Grooming / Beauty / Fitness </option>
												<option title="Healthcare / Medical" value="24"> Healthcare / Medical </option>
												<option title="Heavy Industrial / Machinery / Equipment" value="25"> Heavy Industrial / Machinery / Equipment </option>
												<option title="Hotel / Hospitality" value="26"> Hotel / Hospitality </option>
												<option title="Human Resources Management / Consulting" value="27"> Human Resources Management / Consulting </option>
												<option title="Insurance" value="28"> Insurance </option>
												<option title="Journalism" value="29"> Journalism </option>
												<option title="Law / Legal" value="30"> Law / Legal </option>
												<option title="Library / Museum" value="31"> Library / Museum </option>
												<option title="Manufacturing / Production" value="35"> Manufacturing / Production </option>
												<option title="Marine / Aquaculture" value="33"> Marine / Aquaculture </option>
												<option title="Mining" value="34"> Mining </option>
												<option title="Non-Profit Organisation / Social Services / NGO" value="36"> Non-Profit Organisation / Social Services / NGO </option>
												<option title="Oil / Gas / Petroleum" value="37"> Oil / Gas / Petroleum </option>
												<option title="Polymer / Plastic / Rubber / Tyres" value="41"> Polymer / Plastic / Rubber / Tyres </option>
												<option title="Printing / Publishing" value="42"> Printing / Publishing </option>
												<option title="Property / Real Estate" value="43"> Property / Real Estate </option>
												<option title="R&amp;D" value="45"> R&amp;D </option>
												<option title="Repair &amp; Maintenance Services" value="64"> Repair &amp; Maintenance Services </option>
												<option title="Retail / Merchandise" value="46"> Retail / Merchandise </option>
												<option title="Science &amp; Technology" value="47"> Science &amp; Technology </option>
												<option title="Security / Law Enforcement" value="65"> Security / Law Enforcement </option>
												<option title="Semiconductor/Wafer Fabrication" value="59"> Semiconductor/Wafer Fabrication </option>
												<option title="Sports" value="49"> Sports </option>
												<option title="Stockbroking / Securities" value="50"> Stockbroking / Securities </option>
												<option title="Telecommunication" value="51"> Telecommunication </option>
												<option title="Textiles / Garment" value="52"> Textiles / Garment </option>
												<option title="Tobacco" value="53"> Tobacco </option>
												<option title="Transportation / Logistics" value="54"> Transportation / Logistics </option>
												<option title="Travel / Tourism" value="55"> Travel / Tourism </option>
												<option title="Utilities / Power" value="56"> Utilities / Power </option>
												<option title="Wood / Fibre / Paper" value="57"> Wood / Fibre / Paper </option>
												<option value="38">Others</option>
											</select>
										</div>
									</div>
									<div class="form-group ">
										<label class="control-label col-sm-3 required" aria-required="true">Position Level</label>
										<div class="col-sm-7">
											<select class="form-control" name="position_level_code" id="position_level_code" data-placeholder="Select Position Level" tabindex="-1">
												<option value=""></option>
												<option title="Senior Manager" value="1"> Senior Manager </option>
												<option title="Manager" value="2"> Manager </option>
												<option title="Senior Executive" value="3"> Senior Executive </option>
												<option title="Junior Executive" value="4"> Junior Executive </option>
												<option title="Fresh / Entry Level" value="5"> Fresh / Entry Level </option>
												<option title="Non-Executive" value="6"> Non-Executive </option>
											</select>
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-3 control-label" id="lbl_salary">Monthly Salary</label>
										<div class="col-sm-7">
											<div class="row">
												<div class="col-xs-6 col-sm-4">
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
														<option value="10">EUR</option>
														<option value="11">CNY</option>
														<option value="12">JPY</option>
														<option value="13">GBP</option>
														<option value="14">VND</option>
														<option value="15">BDT</option>
														<option value="16">NZD</option>
													</select>
												</div>
												<div class="col-xs-6 col-sm-8">
													<input class="form-control" name="salary" id="salary" value="" type="number" pattern="[0-9]*" maxlength="15">
												</div>
												<div class="col-xs-12 col-sm-12 col-md-12" id="salary_error_container">
												</div>
											</div>
										</div>
									</div>
									<div class="form-group ">
										<label class="col-sm-3 control-label">Experience Description</label>
										<div class="col-sm-9">
											<textarea class="form-control" name="work_description" id="work_description" rows="20" placeholder="Describe your job responsibilities and achievements..."></textarea>
											<div class="col-sm-12">
												<div class="text-right"><span id="char_count">793</span>&nbsp;/ 3500 characters</div>
											</div>
										</div>
									</div>
									<div class="form-group">
										<div class="col-sm-offset-3 col-sm-9">
											<button class="btn btn-primary btn-mobile-block" id="btn_edit" name="btn_edit">Save</button>
											<a class="btn btn-default btn-mobile-block" id="btn_cancel" name="btn_cancel" href="javascript:;" role="button">Cancel</a>
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>
					</div>
					</div>
					</div>
					</div>
					<blockquote class="alert-default">
						<h5>When user click on <span class="icon-positive"></span> or <span class="icon-edit"></span> icon, <code>panel-group</code> will be added <code>edit-mode</code> class to make the background turn grey and any icon with <code>action-link</code> will be hidden.</h5>
						<h5>At the same time, <code>resume-item</code> will be added <code>editing</code> to make the part that user requested to edit become hidden and visible the <code>resume-form</code>. </h5>
					</blockquote>	
						
					<pre class="well prettyprint">
						<input class="btn btn-info btnCopy" type="button" value="Copy" data-trigger="hover" data-toggle="tooltip" data-original-title="Copy to clipboard" data-placement="top"/><div class="code_content">
&lt;div class=&quot;panel-group resume&quot;&gt;
  &lt;div class=&quot;panel panel-basic&quot;&gt;
    &lt;div class=&quot;panel-header&quot;&gt;
      &lt;h1 class=&quot;page-header&quot;&gt;
        &lt;span class=&quot;icon-briefcase&quot;&gt;&lt;/span&gt;
        &lt;span&gt;Experience&lt;/span&gt;
      &lt;/h1&gt;
    &lt;/div&gt;
    &lt;div class=&quot;panel-body&quot;&gt;
      &lt;!-- resume-item --&gt;
      &lt;div class=&quot;row resume-item&quot;&gt;
        &lt;div class=&quot;col-xs-12&quot;&gt;
          &lt;div class=&quot;info-table&quot;&gt;
            &lt;div class=&quot;row&quot;&gt;
              &lt;label class=&quot;col-xs-12 col-sm-3&quot;&gt;Experience Level&lt;/label&gt;
              &lt;div class=&quot;col-xs-10 col-sm-7 info&quot;&gt;I have been working since Nov 2014&lt;/div&gt;
              &lt;div class=&quot;col-xs-2 col-sm-2 text-right&quot;&gt;
                &lt;a href=&quot;javascript:;&quot; class=&quot;action-link&quot;&gt;&lt;span class=&quot;icon-edit&quot;&gt;&lt;/span&gt;&lt;/a&gt;
              &lt;/div&gt;
            &lt;/div&gt;
          &lt;/div&gt;
        &lt;/div&gt;
      &lt;/div&gt;
      &lt;!-- Form --&gt;
      &lt;div class=&quot;row resume-form&quot;&gt;
        &lt;form class=&quot;form-horizontal&quot;&gt;
          &lt;!-- Form Details Type Here --&gt;
        &lt;/form&gt;
      &lt;/div&gt;
    &lt;/div&gt;
  &lt;/div&gt;
&lt;/div&gt;</div></pre>
					<blockquote class="alert-danger" role="alert">
						<h4 class="text-danger">Requires JQuery plug-in</h4>
						<p>If JQuery plug-in is not included, it will be impossible to add and remove classes that requires.</p>
						<pre class="well prettyprint">
//===========================Resume Editor===================================
$(&quot;.icon-edit, .add-link&quot;).click(function(){
	$(this).parents(&quot;.resume-item&quot;).addClass(&quot;editing&quot;).next(&quot;.resume-form&quot;).show();
	$(&quot;.panel-group.resume&quot;).addClass(&quot;edit-mode&quot;);
	$(&quot;#btn_save,#btn_cancel&quot;).click(function(){
		$(&quot;.resume-item&quot;).removeClass(&quot;editing&quot;);
		$(&quot;.resume-form&quot;).hide();
		$(&quot;.panel-group.resume&quot;).removeClass(&quot;edit-mode&quot;);
	});
});</pre>
						<p>Here is the CDN link for the JQuery Plug-in.</p>
						<pre class="well prettyprint">
&lt;script src=&quot;http://dna.jsstatic.com/js/myjs.js&quot;&gt;&lt;/script&gt;
</pre>
					</blockquote>
					<blockquote class="alert-success" role="alert">
						<h4 class="text-success">Source Code</h4>
						<p>Source code of content for edit resume can be download here. (Include form template)</p>
						<p><a href="myjs/source-code/resume-edit-content.html" class="btn btn-success" download>Download</a></p>
					</blockquote>
				</div>
			</div>
			
			<div class="panel panel-default">
				<div class="panel-heading">
					<div class="panel-title"><strong>Form Template</strong></div>
				</div>
				<div class="panel-body">
					<blockquote class="alert-default">
						<h5>Here is the sample form template to follow.</h5>
					</blockquote>	
					<div class="row">
						<div class="col-md-9 col-xs-12">
					<div class="well clearfix">
						<div class="row resume-form">
							<form class="form-horizontal">
								<div class="form-group">
									<label class="col-sm-3 required control-label" for="position_title" aria-required="true">Position Title</label>
									<div class="col-sm-7">
										<input class="form-control ac_input" name="position_title" id="position_title" type="text" maxlength="80" value="" autocomplete="off">
									</div>
								</div>
								<div class="form-group">
									<label class="control-label col-sm-3 required" for="company_name" aria-required="true">Company Name</label>
									<div class="col-sm-7">
										<input class="form-control ac_input" id="company_name" name="company_name" type="text" maxlength="50" value="" autocomplete="off">
									</div>
								</div>
								<div class="form-group">
									<label class="control-label col-sm-3 required " id="lbl_join_duration" aria-required="true">Joined Duration</label>
									<div class="col-sm-9">
										<div class="row">
											<div class="col-xs-6 col-sm-4 col-md-3">
												<select class="form-control" name="join_date_month" id="join-month" tabindex="-1" data-placeholder="Month">
													<option value=""></option>
													<option value="1">Jan</option>
													<option value="2">Feb</option>
													<option value="3">Mar</option>
													<option value="4">Apr</option>
													<option value="5">May</option>
													<option value="6">Jun</option>
													<option value="7">Jul</option>
													<option value="8">Aug</option>
													<option value="9">Sep</option>
													<option value="10">Oct</option>
													<option value="11">Nov</option>
													<option value="12">Dec</option>
												</select>
											</div>
											<div class="col-xs-5 col-sm-4 col-md-3">
												<input class="form-control " id="join_date_year" name="join_date_year" type="number" pattern="[0-9]*" min="0" value="" placeholder="Year" maxlength="4">
											</div>
											<div class="col-xs-1 col-sm-1 col-md-1 custom-control-label"><label class="control-label">To</label></div>
											<div class="col-xs-12 col-sm-12 col-md-12" id="joined_date_error_container">
											</div>
										</div>
										<div class="row">
											<div class="col-xs-6 col-sm-4 col-md-3">
												<select class="form-control" id="left-month" name="left_date_month" tabindex="-1" data-placeholder="Month">
													<option value=""></option>
													<option value="1">Jan</option>
													<option value="2">Feb</option>
													<option value="3">Mar</option>
													<option value="4">Apr</option>
													<option value="5">May</option>
													<option value="6">Jun</option>
													<option value="7">Jul</option>
													<option value="8">Aug</option>
													<option value="9">Sep</option>
													<option value="10">Oct</option>
													<option value="11">Nov</option>
													<option value="12">Dec</option>
												</select>
												<input type="hidden" name="left_date_month" id="left_date_month_text" value="99">
											</div>
											<div class="col-xs-5 col-sm-4 col-md-3">
												<input class="form-control " id="left_date_year" name="left_date_year" type="number" pattern="[0-9]*" min="0" value="" placeholder="Year" maxlength="4">
											</div>
											<div class="col-xs-12 col-sm-12 col-md-2 nowrap">
												<div class="checkbox-inline">
													<label>
													<input id="chkPresent" name="chkPresent" type="checkbox">
													Present
													</label>
												</div>
											</div>
											<div class="col-xs-12 col-sm-12 col-md-12" id="left_date_error_container">
											</div>
										</div>
									</div>
								</div>
								<div class="form-group ">
									<label class="control-label col-sm-3 required" id="lbl_specialization" aria-required="true">Specialization</label>
									<div class="col-sm-7">
										<div class="row">
											<div class="col-xs-11">
												<select class="form-control" name="specialization_code" id="specialization_code" data-placeholder="Specialization" tabindex="-1" data-placeholder="Select Specialization">
													<option value=""></option>
													<option title="Actuarial Science/Statistics" value="103"> Actuarial Science/Statistics </option>
													<option title="Advertising/Media Planning" value="100"> Advertising/Media Planning </option>
													<option title="Agriculture/Forestry/Fisheries" value="102"> Agriculture/Forestry/Fisheries </option>
													<option title="Architecture/Interior Design" value="180"> Architecture/Interior Design </option>
													<option title="Arts/Creative/Graphics Design" value="101"> Arts/Creative/Graphics Design </option>
													<option title="Aviation/Aircraft Maintenance" value="181"> Aviation/Aircraft Maintenance </option>
													<option title="Banking/Financial Services" value="135"> Banking/Financial Services </option>
													<option title="Biotechnology" value="182"> Biotechnology </option>
													<option title="Chemistry" value="183"> Chemistry </option>
													<option title="Clerical/Administrative Support" value="133"> Clerical/Administrative Support </option>
													<option title="Corporate Strategy/Top Management" value="148"> Corporate Strategy/Top Management </option>
													<option title="Customer Service" value="134"> Customer Service </option>
													<option title="Education" value="105"> Education </option>
													<option title="Engineering - Chemical" value="185"> Engineering - Chemical </option>
													<option title="Engineering - Civil/Construction/Structural" value="184"> Engineering - Civil/Construction/Structural </option>
													<option title="Engineering - Electrical" value="187"> Engineering - Electrical </option>
													<option title="Engineering - Electronics/Communication" value="186"> Engineering - Electronics/Communication </option>
													<option title="Engineering - Environmental/Health/Safety" value="189"> Engineering - Environmental/Health/Safety </option>
													<option title="Engineering - Industrial" value="200"> Engineering - Industrial </option>
													<option title="Engineering - Mechanical/Automotive" value="195"> Engineering - Mechanical/Automotive </option>
													<option title="Engineering - Oil/Gas" value="190"> Engineering - Oil/Gas </option>
													<option title="Engineering - Others" value="188"> Engineering - Others </option>
													<option title="Entertainment/Performing Arts" value="106"> Entertainment/Performing Arts </option>
													<option title="Finance - Audit/Taxation" value="130"> Finance - Audit/Taxation </option>
													<option title="Finance - Corporate Finance/Investment/Merchant Banking" value="132"> Finance - Corporate Finance/Investment/Merchant Banking </option>
													<option title="Finance - General/Cost Accounting " value="131"> Finance - General/Cost Accounting  </option>
													<option title="Food Technology/Nutritionist" value="108"> Food Technology/Nutritionist </option>
													<option title="Food/Beverage/Restaurant Service" value="107"> Food/Beverage/Restaurant Service </option>
													<option title="General Work (Housekeeper, Driver, Dispatch, Messenger, etc)" value="110"> General Work (Housekeeper, Driver, Dispatch, Messenger, etc) </option>
													<option title="Geology/Geophysics" value="109"> Geology/Geophysics </option>
													<option title="Healthcare - Doctor/Diagnosis" value="113"> Healthcare - Doctor/Diagnosis </option>
													<option title="Healthcare - Nurse/Medical Support &amp; Assistant" value="111"> Healthcare - Nurse/Medical Support &amp; Assistant </option>
													<option title="Healthcare - Pharmacy" value="112"> Healthcare - Pharmacy </option>
													<option title="Hotel Management/Tourism Services" value="114"> Hotel Management/Tourism Services </option>
													<option title="Human Resources" value="137"> Human Resources </option>
													<option title="IT/Computer - Hardware" value="192"> IT/Computer - Hardware </option>
													<option title="IT/Computer - Network/System/Database Admin" value="193"> IT/Computer - Network/System/Database Admin </option>
													<option title="IT/Computer - Software" value="191"> IT/Computer - Software </option>
													<option title="Journalist/Editor" value="104"> Journalist/Editor </option>
													<option title="Law/Legal Services" value="138"> Law/Legal Services </option>
													<option title="Logistics/Supply Chain" value="147"> Logistics/Supply Chain </option>
													<option title="Maintenance/Repair (Facilities &amp; Machinery)" value="115"> Maintenance/Repair (Facilities &amp; Machinery) </option>
													<option title="Manufacturing/Production Operations" value="194"> Manufacturing/Production Operations </option>
													<option title="Marketing/Business Development" value="139"> Marketing/Business Development </option>
													<option title="Merchandising" value="149"> Merchandising </option>
													<option title="Personal Care/Beauty/Fitness Service" value="118"> Personal Care/Beauty/Fitness Service </option>
													<option title="Process Design &amp; Control/Instrumentation" value="196"> Process Design &amp; Control/Instrumentation </option>
													<option title="Property/Real Estate" value="150"> Property/Real Estate </option>
													<option title="Public Relations/Communications" value="141"> Public Relations/Communications </option>
													<option title="Publishing/Printing" value="117"> Publishing/Printing </option>
													<option title="Purchasing/Inventory/Material &amp; Warehouse Management" value="140"> Purchasing/Inventory/Material &amp; Warehouse Management </option>
													<option title="Quality Control/Assurance" value="197"> Quality Control/Assurance </option>
													<option title="Quantity Surveying" value="198"> Quantity Surveying </option>
													<option title="Sales - Corporate" value="142"> Sales - Corporate </option>
													<option title="Sales - Engineering/Technical/IT" value="143"> Sales - Engineering/Technical/IT </option>
													<option title="Sales - Financial Services (Insurance, Unit Trust, etc)" value="144"> Sales - Financial Services (Insurance, Unit Trust, etc) </option>
													<option title="Sales - Retail/General" value="145"> Sales - Retail/General </option>
													<option title="Sales - Telesales/Telemarketing" value="151"> Sales - Telesales/Telemarketing </option>
													<option title="Science &amp; Technology/Laboratory" value="199"> Science &amp; Technology/Laboratory </option>
													<option title="Secretarial/Executive &amp; Personal Assistant" value="146"> Secretarial/Executive &amp; Personal Assistant </option>
													<option title="Security/Armed Forces/Protective Services" value="119"> Security/Armed Forces/Protective Services </option>
													<option title="Social &amp; Counselling Service" value="120"> Social &amp; Counselling Service </option>
													<option title="Technical &amp; Helpdesk Support" value="152"> Technical &amp; Helpdesk Support </option>
													<option title="Training &amp; Development" value="121"> Training &amp; Development </option>
													<option value="116">Others</option>
												</select>
											</div>
											<div class="col-xs-1">
												<a href="javascript:;">
													<span class="icon-question-mark" id="specialization_tip" tabindex="0" role="button" data-html="true" data-container="body" data-toggle="popover" data-placement="left" data-content="Type of work you do. <br/>E.g. If you are an Accountant working with an IT company, your <b>specialization</b> is <b>Finance/General Accounting</b>." data-trigger="hover" data-original-title="" title=""></span>
												</a>
											</div>
										</div>
									</div>
								</div>
								<div class="form-group ">
									<label class="control-label col-sm-3 required" aria-required="true">Role</label>
									<div class="col-sm-7">
										<select class="form-control" name="primary_role" id="primary_role" tabindex="-1" data-placeholder="Select Role">
											<option value=""></option>
											<option value="1220">Architect</option>
											<option value="1222">Draughtsman/Design Drafter</option>
											<option value="1221">Interior Designer</option>
											<option value="1224">Management</option>
											<option value="1223">Town Planner</option>
											<option value="1225">Others</option>
										</select>
									</div>
								</div>
								<div class="form-group ">
									<label class="control-label col-sm-3">Country</label>
									<div class="col-sm-7">
										<select class="form-control" name="company_country_code" id="company_country_code" tabindex="-1" data-placeholder="Select Country">
											<option value=""></option>
											<option value="3">Afghanistan</option>
											<option value="6">Albania</option>
											<option value="59">Algeria</option>
											<option value="12">American Samoa</option>
											<option value="1">Andorra</option>
											<option value="9">Angola</option>
											<option value="5">Anguilla</option>
											<option value="10">Antarctica</option>
											<option value="4">Antigua and Barbuda</option>
											<option value="11">Argentina</option>
											<option value="7">Armenia</option>
											<option value="15">Aruba</option>
											<option value="14">Australia</option>
											<option value="13">Austria</option>
											<option value="16">Azerbaijan</option>
											<option value="30">Bahamas</option>
											<option value="23">Bahrain</option>
											<option value="19">Bangladesh</option>
											<option value="18">Barbados</option>
											<option value="34">Belarus</option>
											<option value="20">Belgium</option>
											<option value="35">Belize</option>
											<option value="25">Benin</option>
											<option value="26">Bermuda</option>
											<option value="31">Bhutan</option>
											<option value="28">Bolivia</option>
											<option value="17">Bosnia Hercegovina</option>
											<option value="33">Botswana</option>
											<option value="32">Bouvet Island</option>
											<option value="29">Brazil</option>
											<option value="101">British Indian Ocean Territory</option>
											<option value="27">Brunei Darussalam</option>
											<option value="22">Bulgaria</option>
											<option value="21">Burkina Faso</option>
											<option value="24">Burundi</option>
											<option value="111">Cambodia</option>
											<option value="45">Cameroon</option>
											<option value="36">Canada</option>
											<option value="50">Cape Verde</option>
											<option value="118">Cayman Islands</option>
											<option value="39">Central African Republic</option>
											<option value="205">Chad</option>
											<option value="44">Chile</option>
											<option value="46">China</option>
											<option value="51">Christmas Island</option>
											<option value="37">Cocos (Keeling) Islands</option>
											<option value="47">Colombia</option>
											<option value="113">Comoros</option>
											<option value="40">Congo</option>
											<option value="43">Cook Islands</option>
											<option value="48">Costa Rica</option>
											<option value="42">Cote D'ivoire</option>
											<option value="94">Croatia</option>
											<option value="49">Cuba</option>
											<option value="52">Cyprus</option>
											<option value="53">Czech Republic</option>
											<option value="56">Denmark</option>
											<option value="55">Djibouti</option>
											<option value="57">Dominica</option>
											<option value="58">Dominican Republic</option>
											<option value="214">East Timor</option>
											<option value="60">Ecuador</option>
											<option value="62">Egypt</option>
											<option value="201">EL Salvador</option>
											<option value="84">Equatorial Guinea</option>
											<option value="64">Eritrea</option>
											<option value="61">Estonia</option>
											<option value="66">Ethiopia</option>
											<option value="69">Falkland Islands (Malvinas)</option>
											<option value="71">Faroe Islands</option>
											<option value="68">Fiji</option>
											<option value="67">Finland</option>
											<option value="72">France</option>
											<option value="77">French Guiana</option>
											<option value="168">French Polynesia</option>
											<option value="206">French Southern Territories</option>
											<option value="73">Gabon</option>
											<option value="81">Gambia</option>
											<option value="76">Georgia</option>
											<option value="54">Germany</option>
											<option value="78">Ghana</option>
											<option value="79">Gibraltar</option>
											<option value="85">Greece</option>
											<option value="80">Greenland</option>
											<option value="75">Grenada</option>
											<option value="83">Guadeloupe</option>
											<option value="88">Guam</option>
											<option value="87">Guatemala</option>
											<option value="82">Guinea</option>
											<option value="89">Guinea-Bissau</option>
											<option value="90">Guyana</option>
											<option value="95">Haiti</option>
											<option value="92">Heard and Mc Donald Islands</option>
											<option value="93">Honduras</option>
											<option value="91">Hong Kong</option>
											<option value="96">Hungary</option>
											<option value="104">Iceland</option>
											<option value="100">India</option>
											<option value="97">Indonesia</option>
											<option value="103">Iran</option>
											<option value="102">Iraq</option>
											<option value="98">Ireland</option>
											<option value="99">Israel</option>
											<option value="105">Italy</option>
											<option value="106">Jamaica</option>
											<option value="108">Japan</option>
											<option value="107">Jordan</option>
											<option value="119">Kazakhstan</option>
											<option value="109">Kenya</option>
											<option value="112">Kiribati</option>
											<option value="115">Korea (North)</option>
											<option value="116">Korea (South)</option>
											<option value="117">Kuwait</option>
											<option value="110">Kyrgyzstan</option>
											<option value="120">Laos</option>
											<option value="129">Latvia</option>
											<option value="121">Lebanon</option>
											<option value="126">Lesotho</option>
											<option value="125">Liberia</option>
											<option value="130">Libyan Arab Jamahiriya</option>
											<option value="123">Liechtenstein</option>
											<option value="127">Lithuania</option>
											<option value="128">Luxembourg</option>
											<option value="140">Macau</option>
											<option value="136">Macedonia</option>
											<option value="134">Madagascar</option>
											<option value="148">Malawi</option>
											<option value="150">Malaysia</option>
											<option value="147">Maldives</option>
											<option value="137">Mali</option>
											<option value="145">Malta</option>
											<option value="135">Marshall Islands</option>
											<option value="142">Martinique</option>
											<option value="143">Mauritania</option>
											<option value="146">Mauritius</option>
											<option value="236">Mayotte</option>
											<option value="149">Mexico</option>
											<option value="70">Micronesia</option>
											<option value="132">Monaco</option>
											<option value="139">Mongolia</option>
											<option value="144">Montserrat</option>
											<option value="131">Morocco</option>
											<option value="151">Mozambique</option>
											<option value="138">Myanmar</option>
											<option value="152">Nambia</option>
											<option value="161">Nauru</option>
											<option value="160">Nepal</option>
											<option value="158">Netherlands</option>
											<option value="8">Netherlands Antilles</option>
											<option value="153">New Caledonia</option>
											<option value="163">New Zealand</option>
											<option value="157">Nicaragua</option>
											<option value="154">Niger</option>
											<option value="156">Nigeria</option>
											<option value="162">Niue</option>
											<option value="155">Norfolk Island</option>
											<option value="141">Northern Mariana Islands</option>
											<option value="159">Norway</option>
											<option value="164">Oman</option>
											<option value="165">Others</option>
											<option value="171">Pakistan</option>
											<option value="178">Palau</option>
											<option value="176">Palestinian Territory, Occupied</option>
											<option value="166">Panama</option>
											<option value="169">Papua New Guinea</option>
											<option value="179">Paraguay</option>
											<option value="167">Peru</option>
											<option value="170">Philippines</option>
											<option value="174">Pitcairn</option>
											<option value="172">Poland</option>
											<option value="177">Portugal</option>
											<option value="175">Puerto Rico</option>
											<option value="180">Qatar</option>
											<option value="133">Republic Of Moldova</option>
											<option value="181">Reunion</option>
											<option value="182">Romania</option>
											<option value="183">Russia</option>
											<option value="184">Rwanda</option>
											<option value="114">Saint Kitts And Nevis</option>
											<option value="122">Saint Lucia</option>
											<option value="227">Saint Vincent and The Grenadines</option>
											<option value="234">Samoa</option>
											<option value="196">San Marino</option>
											<option value="200">Sao Tome and Principe</option>
											<option value="185">Saudi Arabia</option>
											<option value="197">Senegal</option>
											<option value="187">Seychelles</option>
											<option value="195">Sierra Leone</option>
											<option value="190">Singapore</option>
											<option value="194">Slovakia</option>
											<option value="192">Slovenia</option>
											<option value="186">Solomon Islands</option>
											<option value="198">Somalia</option>
											<option value="238">South Africa</option>
											<option value="86">South Georgia And South Sandwich Islands</option>
											<option value="65">Spain</option>
											<option value="124">Sri Lanka</option>
											<option value="191">St. Helena</option>
											<option value="173">St. Pierre and Miquelon</option>
											<option value="188">Sudan</option>
											<option value="199">Suriname</option>
											<option value="193">Svalbard and Jan Mayen Islands</option>
											<option value="203">Swaziland</option>
											<option value="189">Sweden</option>
											<option value="41">Switzerland</option>
											<option value="202">Syrian Arab Republic</option>
											<option value="218">Taiwan</option>
											<option value="209">Tajikistan</option>
											<option value="219">Tanzania</option>
											<option value="208">Thailand</option>
											<option value="207">TOGO</option>
											<option value="210">Tokelau</option>
											<option value="213">Tonga</option>
											<option value="216">Trinidad and Tobago</option>
											<option value="212">Tunisia</option>
											<option value="215">Turkey</option>
											<option value="211">Turkmenistan</option>
											<option value="204">Turks and Caicos Islands</option>
											<option value="217">Tuvalu</option>
											<option value="221">Uganda</option>
											<option value="220">Ukraine</option>
											<option value="2">United Arab Emirates</option>
											<option value="74">United Kingdom</option>
											<option value="223">United States</option>
											<option value="222">United States Minor Outlying Islands</option>
											<option value="224">Uruguay</option>
											<option value="225">Uzbekistan</option>
											<option value="232">Vanuatu</option>
											<option value="226">Vatican City State (Holy See)</option>
											<option value="228">Venezuela</option>
											<option value="231">Vietnam</option>
											<option value="229">Virgin Islands (British)</option>
											<option value="230">Virgin Islands (U.S.)</option>
											<option value="233">Wallis and Futuna Islands</option>
											<option value="63">Western Sahara</option>
											<option value="235">Yemen</option>
											<option value="237">Yugoslavia</option>
											<option value="38">Zaire</option>
											<option value="239">Zambia</option>
											<option value="240">Zimbabwe</option>
										</select>
									</div>
								</div>
								<div class="form-group ">
									<label class="control-label col-sm-3 required" id="lbl_industry" aria-required="true">Industry</label>
									<div class="col-sm-7">
										<select class="form-control" name="industry_code" id="industry_code" data-placeholder="Select Industry" tabindex="-1" >
											<option value=""></option>
											<option title="Accounting / Audit / Tax Services" value="60"> Accounting / Audit / Tax Services </option>
											<option title="Advertising / Marketing / Promotion / PR" value="3"> Advertising / Marketing / Promotion / PR </option>
											<option title="Aerospace / Aviation / Airline" value="1"> Aerospace / Aviation / Airline </option>
											<option title="Agricultural / Plantation / Poultry / Fisheries" value="4"> Agricultural / Plantation / Poultry / Fisheries </option>
											<option title="Apparel" value="5"> Apparel </option>
											<option title="Architectural Services / Interior Designing" value="61"> Architectural Services / Interior Designing </option>
											<option title="Arts / Design / Fashion" value="2"> Arts / Design / Fashion </option>
											<option title="Automobile / Automotive Ancillary / Vehicle" value="6"> Automobile / Automotive Ancillary / Vehicle </option>
											<option title="Banking / Financial Services" value="7"> Banking / Financial Services </option>
											<option title="BioTechnology / Pharmaceutical / Clinical research" value="39"> BioTechnology / Pharmaceutical / Clinical research </option>
											<option title="Call Center / IT-Enabled Services / BPO" value="58"> Call Center / IT-Enabled Services / BPO </option>
											<option title="Chemical / Fertilizers / Pesticides" value="8"> Chemical / Fertilizers / Pesticides </option>
											<option title="Computer / Information Technology (Hardware)" value="9"> Computer / Information Technology (Hardware) </option>
											<option title="Computer / Information Technology (Software)" value="10"> Computer / Information Technology (Software) </option>
											<option title="Construction / Building / Engineering" value="11"> Construction / Building / Engineering </option>
											<option title="Consulting (Business &amp; Management)" value="12"> Consulting (Business &amp; Management) </option>
											<option title="Consulting (IT, Science, Engineering &amp; Technical)" value="13"> Consulting (IT, Science, Engineering &amp; Technical) </option>
											<option title="Consumer Products / FMCG" value="15"> Consumer Products / FMCG </option>
											<option title="Education" value="16"> Education </option>
											<option title="Electrical &amp; Electronics" value="17"> Electrical &amp; Electronics </option>
											<option title="Entertainment / Media" value="18"> Entertainment / Media </option>
											<option title="Environment / Health / Safety" value="19"> Environment / Health / Safety </option>
											<option title="Exhibitions / Event management / MICE" value="62"> Exhibitions / Event management / MICE </option>
											<option title="Food &amp; Beverage / Catering / Restaurant" value="20"> Food &amp; Beverage / Catering / Restaurant </option>
											<option title="Gems / Jewellery" value="63"> Gems / Jewellery </option>
											<option title="General &amp; Wholesale Trading" value="23"> General &amp; Wholesale Trading </option>
											<option title="Government / Defence" value="21"> Government / Defence </option>
											<option title="Grooming / Beauty / Fitness" value="22"> Grooming / Beauty / Fitness </option>
											<option title="Healthcare / Medical" value="24"> Healthcare / Medical </option>
											<option title="Heavy Industrial / Machinery / Equipment" value="25"> Heavy Industrial / Machinery / Equipment </option>
											<option title="Hotel / Hospitality" value="26"> Hotel / Hospitality </option>
											<option title="Human Resources Management / Consulting" value="27"> Human Resources Management / Consulting </option>
											<option title="Insurance" value="28"> Insurance </option>
											<option title="Journalism" value="29"> Journalism </option>
											<option title="Law / Legal" value="30"> Law / Legal </option>
											<option title="Library / Museum" value="31"> Library / Museum </option>
											<option title="Manufacturing / Production" value="35"> Manufacturing / Production </option>
											<option title="Marine / Aquaculture" value="33"> Marine / Aquaculture </option>
											<option title="Mining" value="34"> Mining </option>
											<option title="Non-Profit Organisation / Social Services / NGO" value="36"> Non-Profit Organisation / Social Services / NGO </option>
											<option title="Oil / Gas / Petroleum" value="37"> Oil / Gas / Petroleum </option>
											<option title="Polymer / Plastic / Rubber / Tyres" value="41"> Polymer / Plastic / Rubber / Tyres </option>
											<option title="Printing / Publishing" value="42"> Printing / Publishing </option>
											<option title="Property / Real Estate" value="43"> Property / Real Estate </option>
											<option title="R&amp;D" value="45"> R&amp;D </option>
											<option title="Repair &amp; Maintenance Services" value="64"> Repair &amp; Maintenance Services </option>
											<option title="Retail / Merchandise" value="46"> Retail / Merchandise </option>
											<option title="Science &amp; Technology" value="47"> Science &amp; Technology </option>
											<option title="Security / Law Enforcement" value="65"> Security / Law Enforcement </option>
											<option title="Semiconductor/Wafer Fabrication" value="59"> Semiconductor/Wafer Fabrication </option>
											<option title="Sports" value="49"> Sports </option>
											<option title="Stockbroking / Securities" value="50"> Stockbroking / Securities </option>
											<option title="Telecommunication" value="51"> Telecommunication </option>
											<option title="Textiles / Garment" value="52"> Textiles / Garment </option>
											<option title="Tobacco" value="53"> Tobacco </option>
											<option title="Transportation / Logistics" value="54"> Transportation / Logistics </option>
											<option title="Travel / Tourism" value="55"> Travel / Tourism </option>
											<option title="Utilities / Power" value="56"> Utilities / Power </option>
											<option title="Wood / Fibre / Paper" value="57"> Wood / Fibre / Paper </option>
											<option value="38">Others</option>
										</select>
									</div>
								</div>
								<div class="form-group ">
									<label class="control-label col-sm-3 required" aria-required="true">Position Level</label>
									<div class="col-sm-7">
										<select class="form-control" name="position_level_code" id="position_level_code" data-placeholder="Select Position Level" tabindex="-1">
											<option value=""></option>
											<option title="Senior Manager" value="1"> Senior Manager </option>
											<option title="Manager" value="2"> Manager </option>
											<option title="Senior Executive" value="3"> Senior Executive </option>
											<option title="Junior Executive" value="4"> Junior Executive </option>
											<option title="Fresh / Entry Level" value="5"> Fresh / Entry Level </option>
											<option title="Non-Executive" value="6"> Non-Executive </option>
										</select>
									</div>
								</div>
								<div class="form-group">
									<label class="col-sm-3 control-label" id="lbl_salary">Monthly Salary</label>
									<div class="col-sm-7">
										<div class="row">
											<div class="col-xs-6 col-sm-4">
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
													<option value="10">EUR</option>
													<option value="11">CNY</option>
													<option value="12">JPY</option>
													<option value="13">GBP</option>
													<option value="14">VND</option>
													<option value="15">BDT</option>
													<option value="16">NZD</option>
												</select>
											</div>
											<div class="col-xs-6 col-sm-8">
												<input class="form-control" name="salary" id="salary" value="" type="number" pattern="[0-9]*" maxlength="15">
											</div>
											<div class="col-xs-12 col-sm-12 col-md-12" id="salary_error_container">
											</div>
										</div>
									</div>
								</div>
								<div class="form-group ">
									<label class="col-sm-3 control-label">Experience Description</label>
									<div class="col-sm-9">
										<textarea class="form-control" name="work_description" id="work_description" rows="20" placeholder="Describe your job responsibilities and achievements..."></textarea>
										<div class="col-sm-12">
											<div class="text-right"><span id="char_count">793</span>&nbsp;/ 3500 characters</div>
										</div>
									</div>
								</div>
								<div class="form-group">
									<div class="col-sm-offset-3 col-sm-9">
										<a class="btn btn-primary btn-mobile-block" id="btn_edit" name="btn_edit" href="javascript:;" role="button">Save</a>
										<a class="btn btn-default btn-mobile-block" id="btn_cancel" name="btn_cancel" href="javascript:;" role="button">Cancel</a>
									</div>
								</div>
							</form>
						</div>
					</div>
					</div>
				</div>
				<blockquote class="alert-success" role="alert">
					<h4 class="text-success">Source Code</h4>
					<p>Source code of form template can be download here.</p>
					<p><a href="myjs/source-code/resume-form-template.html" class="btn btn-success" download>Download</a></p>
				</blockquote>
				</div>
			</div>
		</div>
	</div>
</section>

<?php include("../includes/script.php");?>
<style>
	/*For edit-reusme use only */
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