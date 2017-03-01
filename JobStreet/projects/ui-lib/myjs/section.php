<?php
include("../includes/theme-data.php");
$theme="myjs";
$com="Section";

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
		
		<!--==================================== Panel Basic and Group ===================================================-->
		<div class="row" style="padding-left:5px">
			<div class="panel-group col-md-4">
				<div class="panel panel-basic">
					<div class="panel-header">
						<h4>Announcement</h4>
					</div>
					<div class="panel-body">
						<a href="#">16th MCTF'14 (Malaysia Career & Training Fair)</a>
						<div>Malaysia's No. 1 Career Fair is Back! 29-31 Mar 2014, 10am - 7pm Mid Valley Exhibition Centre Kuala Lumpur</div>

						<div class="paging-wrap text-center">
							<a class="paging-prev"><span class="icon-angle-left"></span></a>
							<a class="paging-node active" rel="toppage1"></a>
							<a class="paging-node" rel="toppage2"></a>
							<a class="paging-node" rel="toppage3"></a>
							<a class="paging-next"><span class="icon-angle-right"></span></a>
						</div>
					</div>
				</div>
				
				<div class="panel panel-basic">
					<div class="panel-header">
						<h4>Top Employers</h4>
					</div>
					<div class="panel-body">
						<div class="row">
							<center>
							<div>
								<div class="col-md-4">
									<figure><img class="logo-group" src="http://placehold.it/72x42"></figure>
								</div>
								<div class="col-md-4">
									<figure><img class="logo-group" src="http://placehold.it/72x42"></figure>
								</div>
								<div class="col-md-4">
									<figure><img class="logo-group" src="http://placehold.it/72x42"></figure>
								</div>
							</div>
							</center>
						</div>
						<div class="paging-wrap text-center">
							<a class="paging-prev"><span class="icon-angle-left"></span></a>
							<a class="paging-node active" rel="toppage1"></a>
							<a class="paging-node" rel="toppage2"></a>
							<a class="paging-node" rel="toppage3"></a>
							<a class="paging-next"><span class="icon-angle-right"></span></a>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-8"></div>
		</div>
		<div class="panel">
			<div class="panel-body">
				<blockquote class="alert-default">
					<h5>Use <code>panel-group</code> to group multiple <code>panel-basic</code> together at the side section. </h5>
					<h5>This section will be hidden in mobile view.</h5>
				</blockquote>
				<pre class="well prettyprint">
					<input class="btn btn-info btnCopy" type="button" value="Copy" data-trigger="hover" data-toggle="tooltip" data-original-title="Copy to clipboard" data-placement="top"/><div class="code_content">
&lt;div class=&quot;hidden-xs hidden-sm col-md-4&quot;&gt;
  &lt;div class=&quot;panel-group&quot;&gt;
    &lt;!-- panel-basic 1 --&gt;
    &lt;div class=&quot;panel panel-basic&quot;&gt;
      &lt;div class=&quot;panel-header&quot;&gt;
        &lt;h4&gt;...&lt;/h4&gt;
      &lt;/div&gt;
      &lt;div class=&quot;panel-body&quot;&gt;
        &lt;a href=&quot;#&quot;&gt;...&lt;/a&gt;
      &lt;/div&gt;
    &lt;/div&gt;
    &lt;!-- panel-basic 2 --&gt;
    &lt;div class=&quot;panel panel-basic&quot;&gt;
      &lt;div class=&quot;panel-header&quot;&gt;
        &lt;h4&gt;...&lt;/h4&gt;
      &lt;/div&gt;
      &lt;div class=&quot;panel-body&quot;&gt;
        &lt;div class=&quot;row&quot;&gt;
          &lt;center&gt;
            &lt;div&gt;
              &lt;div class=&quot;col-md-4&quot;&gt;
                &lt;figure&gt;&lt;img class=&quot;logo-group&quot; src=&quot;...&quot;&gt;&lt;/figure&gt;
              &lt;/div&gt;
              &lt;div class=&quot;col-md-4&quot;&gt;
                &lt;figure&gt;&lt;img class=&quot;logo-group&quot; src=&quot;...&quot;&gt;&lt;/figure&gt;
              &lt;/div&gt;
              &lt;div class=&quot;col-md-4&quot;&gt;
                &lt;figure&gt;&lt;img class=&quot;logo-group&quot; src=&quot;...&quot;&gt;&lt;/figure&gt;
              &lt;/div&gt;
            &lt;/div&gt;
          &lt;/center&gt;
        &lt;/div&gt;
        &lt;div class=&quot;paging-wrap text-center&quot;&gt;
          &lt;a class=&quot;paging-prev&quot;&gt;&lt;span class=&quot;icon-angle-left&quot;&gt;&lt;/span&gt;&lt;/a&gt;
          &lt;a class=&quot;paging-node active&quot; rel=&quot;toppage1&quot;&gt;&lt;/a&gt;
          &lt;a class=&quot;paging-node&quot; rel=&quot;toppage2&quot;&gt;&lt;/a&gt;
          &lt;a class=&quot;paging-node&quot; rel=&quot;toppage3&quot;&gt;&lt;/a&gt;
          &lt;a class=&quot;paging-next&quot;&gt;&lt;span class=&quot;icon-angle-right&quot;&gt;&lt;/span&gt;&lt;/a&gt;
        &lt;/div&gt;
      &lt;/div&gt;
    &lt;/div&gt;
  &lt;/div&gt;
&lt;/div&gt;</div></pre>
			<blockquote class="alert-success" role="alert">
				<h4 class="text-success">Source Code</h4>
				<p>Source code for section can be download here.</p>
				<p><a href="myjs/source-code/side-section.html" class="btn btn-success" download>Download</a></p>
			</blockquote>	
			</div>
		</div>
		
	</div>
</section>

<?php include("../includes/script.php");?>
</body>
</html>