<?php include("includes/config.php");?>
<!DOCTYPE html>
<html lang="en">
<head>
<title><?php echo $ProjectName?> - Patterns</title>
<?php include("includes/meta.php");?>
</head>
<body data-spy="scroll" data-offset="0" data-target="#sidebar-wrapper">
<div id="wrapper">
	<?php
	$pg="patterns";
	include ("sidebar.php");
	?>
	<div id="page-content-wrapper">
		<div class="container-fluid">
			<div class="row">
				
				<nav class="header-menu">
					<div class="clearfix">
						<h2 class="pull-left">Patterns</h2>
						<a href="javascript:;" role="button" class="btn btn-link pull-right visible-xs" id="menu-toggle"><span class="icon-menu"></span></a>
					</div>
				</nav>

				<!--// Data Formats //-->
				<a name="data-formats" id="data-formats">&nbsp;</a>
				<h3 class="sub-title">Data Formats</h3>
				<div class="panel">
					<div class="panel-body">
						<table class="table">
						<thead>
						<tr>
							<th>Data</th><th>Format</th>
						</tr>
						</thead>
						<tbody>
						<tr>
							<td>Uppercase AM or PM without periods, seperated from time with a space.</td>
							<td><?php echo date("h:i A");?></td>
						</tr>
						<tr>
							<td>To display as timestamp.</td>
							<td><?php echo date("h:i:s A");?></td>
						</tr>
						<tr>
							<td>If the date is in the past or future within the current calendar year, display the abbreviated date.</td>
							<td><?php echo date("d M");?></td>
						</tr>
						<tr>
							<td>If the date is in the past or future outside of the current calendar year, display the abbreviated date and year.</td>
							<td><?php echo date("d M Y");?></td>
						</tr>
						<tr>
							<td>If the date is a range of time, separate with an en-dash without a space on either side.</td>
							<td><?php
							$e=strtotime("+15 Hours 30 Minutes");
							echo date("h:i A") ." &dash; ".date("h:i A",$e);
							?></td>
						</tr>
						<tr>
							<td>When a range shares a common AM/PM, append only on the end of the range.</td>
							<td><?php
							$e=strtotime("5 Minutes");
							echo date("h:i") ." &dash; ".date("h:i A",$e);
							?></td>
						</tr>
						<tr>
							<td>If both dates in a range start and end in the current year, omit the year. Otherwise, show the year on both the start and end.</td>
							<td><?php
							$e=strtotime("13 Months");
							echo date("d M Y") ." &dash; ".date("d M Y",$e);
							?></td>
						</tr>
						<tr>
							<td>To confirm, proceed</td>
							<td>OK</td>
						<tr>
						<tr>
							<td>To discard</td>
							<td>Cancel</td>
						<tr>
						<tr>
							<td>To update changes</td>
							<td>Save</td>
						<tr>
						</tbody>
						</table>						
					</div>
				</div>
				
				<!--// Errors //-->
				<a name="errors" id="errors">&nbsp;</a>
				<h3 class="sub-title">Errors</h3>
				<div class="panel panel-default">
					<div class="panel-heading">
						<div class="panel-title">User input errors</div>
					</div>
					<div class="panel-body">
						<form class="form-horizontal">
						<code>has-error</code>
						<div class="form-group has-error">
							<label class="col-sm-1 control-label">Full Name</label>
							<div class="col-sm-6">
								<input type="text" class="form-control">
								<span class="help-block">Full name is required</span>
							</div>
						</div>
						<div class="form-group has-error">
							<label class="col-sm-1 control-label">Email</label>
							<div class="col-sm-6">
								<input type="email" value="username@@email.com" class="form-control">
								<span class="help-block">Email is not valid</span>
							</div>
						</div>
						</form>
					</div>
				</div>
				
				<div class="panel panel-default">
					<div class="panel-heading">
						<div class="panel-title">System errors</div>
					</div>
					<div class="panel-body">
						<h5><code>alert-warning</code></h5>
						<blockquote class="alert-warning" role="alert">
							Warning Message
						</blockquote>
						
						<h5><code>alert-danger</code></h5>
						<blockquote class="alert-danger" role="alert">
							Danger Message
						</blockquote>

						<pre class="well">&lt;blockquote class=<span class="text-warning">&quot;alert-warning&quot;</span> role=<span class="text-warning">&quot;alert&quot;</span>&gt;
  Warning Message
&lt;/blockquote&gt;</pre>

					</div>
				</div>
				
				<!--// Errors //-->
				<a name="notifications" id="notifications">&nbsp;</a>
				<h3>Notifications</h3>
				<div class="panel">
					<div class="panel-body">
						<h5><code>alert-info</code></h5>
						<blockquote class="alert-info" role="alert">
							Information
						</blockquote>
						
						<h5><code>alert-success</code></h5>
						<blockquote class="alert-success" role="alert">
							Success
						</blockquote>

						<pre class="well">&lt;blockquote class=<span class="text-warning">&quot;alert-success&quot;</span> role=<span class="text-warning">&quot;alert&quot;</span>&gt;
  Success
&lt;/blockquote&gt;</pre>
					</div>
				</div>

			</div>
		</div>
	</div>
</div>
<?php include ("includes/script.php");?>
</body>
</html>