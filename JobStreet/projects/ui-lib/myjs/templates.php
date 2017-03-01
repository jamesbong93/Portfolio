<?php
include("../includes/theme-data.php");
$theme="myjs";
$com="Templates";

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
				<div class="panel-title"><strong>Examples of templates</strong></div>
			</div>
			<div class="panel-body">
				<div class="clearfix">
					<?php
						BuildTemplates($theme,$com);
					?>
				</div>		

			</div>
		</div>
	</div>
</section>

<?php include("../includes/script.php");?>
</body>
</html>