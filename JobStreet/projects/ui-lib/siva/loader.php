<?php
include("../includes/theme-data.php");
$theme="siva";
$com="Loader";

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
				<div class="panel-title"><strong>Loading Screen</strong></div>
			</div>
			<div class="panel-body">
				<blockquote class="alert-default" role="alert">
					To show loading screen when tick on checkbox, use the <code>loader-wrap</code>:
				</blockquote>
				
				<div id="loadContent">
					<!--// Loading Screen //-->
					<div class="loader-wrap">
					  <div class="loading-container">
						<div class="loading"></div>
						<div id="loading-text">Loading Candidates</div>
					  </div>
					</div>
					<!--// Loading Screen End //-->
					
					<div class="panel col-sm-12 col-md-12 col-lg-3 panel-facet">
						<div class="panel-body col-sm-3 col-md-3 col-lg-12">
							  <input type="checkbox" field="c1_company_name" value="RHB Bank Berhad" id="facet1">
							  <label for="facet1">Click Me</label>
						</div>				
					</div>				
				</div>
				
				<div class="clearfix"></div>
				
				<blockquote class="alert-default" role="alert">
						The code is as shown below :
				</blockquote>
				
				<pre class="well prettyprint"><input class="btn btn-info btnCopy" type="button" value="Copy" data-trigger="hover" data-toggle="tooltip" data-original-title="Copy to clipboard" data-placement="top"/><div class="code_content">
&lt;!--// Loading Screen //--&gt;
&lt;div class=&quot;loader-wrap&quot;&gt;
  &lt;div class=&quot;loading-container&quot;&gt;
    &lt;div class=&quot;loading&quot;&gt;&lt;/div&gt;
    &lt;div id=&quot;loading-text&quot;&gt;Loading Candidates&lt;/div&gt;
  &lt;/div&gt;
&lt;/div&gt;
&lt;!--// Loading Screen End //--&gt;
				</div></pre>
							
			</div>
		</div>

	</div>
</section>

<?php include("../includes/script.php");?>
</body>
</html>