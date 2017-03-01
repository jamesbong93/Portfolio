<?php
include("../includes/theme-data.php");
$theme="siva";
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
		
		<div class="panel panel-default">
			<div class="panel-heading">
				<div class="panel-title"><strong>Header : Navigation Bar</strong></div>
			</div>
			<div class="panel-body">
				<h5>Example:</h5>	
				<div class="panel">
					<!--// NAVBAR //-->
					<div class="navbar navbar-default">
						<div class="navbar-header">
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
							<a class="navbar-brand" href="#">
								<span class="jslogo"></span>
							</a>
						</div>
						<div class="collapse navbar-collapse">
							<ul class="nav navbar-nav">
								<li class="active"><a href="#">Active</a></li>
								<li><a href="#">Normal</a></li>
							</ul>

							<ul class="nav navbar-nav navbar-right">
								<li class="dropdown">
									<a href="#" data-toggle="dropdown">
										<span>Right Handed<span class="text-muted">Additional Info</span></span> <span class="caret"></span>
									</a>
									<ul class="dropdown-menu">
										<li><a href="#">Menu Item A</a></li>
										<li><a href="#">Menu Item B</a></li>
										<li class="divider"></li>
										<li><a href="#">Menu Item C</a></li>
									</ul>
								</li>
							</ul>
						</div>
					</div>
					<!--// NAVBAR END //-->
				</div>
			
				<h5>Sample Code:</h5>	

				<pre class="well prettyprint"><input class="btn btn-info btnCopy" type="button" value="Copy" data-trigger="hover" data-toggle="tooltip" data-original-title="Copy to clipboard" data-placement="top"/><div class="code_content">
&lt;!--// NAVBAR //--&gt;
&lt;div class=&quot;navbar navbar-default navbar-static&quot;&gt;
  &lt;div class=&quot;container&quot;&gt;
    &lt;div class=&quot;navbar-header&quot;&gt;
      &lt;button type=&quot;button&quot; class=&quot;navbar-toggle&quot; data-toggle=&quot;collapse&quot; data-target=&quot;.navbar-collapse&quot;&gt;
        &lt;span class=&quot;icon-bar&quot;&gt;&lt;/span&gt;
        &lt;span class=&quot;icon-bar&quot;&gt;&lt;/span&gt;
        &lt;span class=&quot;icon-bar&quot;&gt;&lt;/span&gt;
      &lt;/button&gt;
      &lt;a class=&quot;navbar-brand&quot; href=&quot;#&quot;&gt;
        &lt;span class=&quot;jslogo&quot;&gt;&lt;/span&gt;
      &lt;/a&gt;
    &lt;/div&gt;
    &lt;div class=&quot;collapse navbar-collapse&quot;&gt;
      &lt;ul class=&quot;nav navbar-nav&quot;&gt;
        &lt;li class=&quot;active&quot;&gt;&lt;a href=&quot;#&quot;&gt;Active&lt;/a&gt;&lt;/li&gt;
        &lt;li&gt;&lt;a href=&quot;#&quot;&gt;Normal&lt;/a&gt;&lt;/li&gt;
      &lt;/ul&gt;
      &lt;ul class=&quot;nav navbar-nav navbar-right&quot;&gt;
        &lt;li class=&quot;dropdown&quot;&gt;
          &lt;a href=&quot;#&quot; data-toggle=&quot;dropdown&quot;&gt;
            &lt;span&gt;Right Handed&lt;span class=&quot;text-muted&quot;&gt;Additional Info&lt;/span&gt;&lt;/span&gt; &lt;span class=&quot;caret&quot;&gt;&lt;/span&gt;
          &lt;/a&gt;
          &lt;ul class=&quot;dropdown-menu&quot;&gt;
            &lt;li&gt;&lt;a href=&quot;#&quot;&gt;Menu Item A&lt;/a&gt;&lt;/li&gt;
            &lt;li&gt;&lt;a href=&quot;#&quot;&gt;Menu Item B&lt;/a&gt;&lt;/li&gt;
            &lt;li class=&quot;divider&quot;&gt;&lt;/li&gt;
            &lt;li&gt;&lt;a href=&quot;#&quot;&gt;Menu Item C&lt;/a&gt;&lt;/li&gt;
          &lt;/ul&gt;
        &lt;/li&gt;
      &lt;/ul&gt;
    &lt;/div&gt;
  &lt;/div&gt;
&lt;/div&gt;
&lt;!--// NAVBAR END //--&gt;
				</div></pre>

			</div>
		</div>	
		
		<div class="panel panel-default">
			<div class="panel-heading">
				<div class="panel-title"><strong>Header : Navigation Bar with Notification</strong></div>
			</div>
			<div class="panel-body">
				<h5>Example:</h5>	
				<div class="panel">
					<!--// NAVBAR //-->
					<div class="navbar navbar-default">
						<div class="navbar-header">
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
							<a class="navbar-brand" href="#">
								<span class="jslogo"></span>
							</a>
						</div>
						<div class="collapse navbar-collapse">
							<ul class="nav navbar-nav">
								<li class="active"><a href="#">Active</a></li>
								<li><a href="#">Normal</a></li>
							</ul>

							<ul class="nav navbar-nav navbar-right">
								<li class="dropdown bell">
									<a class="bell" href="" data-toggle="dropdown">
										<i class="icon-bell alert"></i>
									</a>
									<div class="dropdown-menu notifications">
										<div class="title">Notifications <a href="javascript:;" id="clearNotification" class="small pull-right">Clear All</a></div>
										<ul class="notification-content">
											<li><h5>Scheduled server maintenance &#183; 1hr ago</h5>
												<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis metus lacus, fringilla sed tristique ac, aliquet quis nibh. In interdum, leo ac dapibus faucibus, libero mi interdum eros, quis dignissim massa purus at neque. Morbi ut mi ut nisl egestas hendrerit et porttitor lectus.</p>
											</li>
										</ul>
										<div class="notification-empty" style="display:none">
											<span><i class="icon-bell-o x2"></i><br>Nothing new right now</span>
										</div>
									</div>
								</li>
								<li class="dropdown">
									<a href="#" data-toggle="dropdown">
										<span>Right Handed<span class="text-muted">Additional Info</span></span> <span class="caret"></span>
									</a>
									<ul class="dropdown-menu">
										<li><a href="#">Menu Item A</a></li>
										<li><a href="#">Menu Item B</a></li>
										<li class="divider"></li>
										<li><a href="#">Menu Item C</a></li>
									</ul>
								</li>
							</ul>
						</div>
					</div>
					<!--// NAVBAR END //-->
				</div>
			
				<h5>Sample Code:</h5>	

				<pre class="well prettyprint"><input class="btn btn-info btnCopy" type="button" value="Copy" data-trigger="hover" data-toggle="tooltip" data-original-title="Copy to clipboard" data-placement="top"/><div class="code_content">
&lt;!--// NAVBAR //--&gt;
&lt;div class=&quot;navbar navbar-default&quot;&gt;
   &lt;div class=&quot;navbar-header&quot;&gt;
      ...
   &lt;/div&gt;
   &lt;div class=&quot;collapse navbar-collapse&quot;&gt;
      &lt;ul class=&quot;nav navbar-nav&quot;&gt;
         ...
      &lt;/ul&gt;
      &lt;ul class=&quot;nav navbar-nav navbar-right&quot;&gt;
         &lt;!--Similar with previous structure, just add in below &lt;li&gt; --&gt;
         &lt;li class=&quot;dropdown bell&quot;&gt;
            &lt;a class=&quot;bell&quot; href=&quot;&quot; data-toggle=&quot;dropdown&quot;&gt;
              &lt;i class=&quot;icon-bell alert&quot;&gt;&lt;/i&gt;
            &lt;/a&gt;
            &lt;div class=&quot;dropdown-menu notifications&quot;&gt;
               &lt;div class=&quot;title&quot;&gt;Notifications &lt;a href=&quot;javascript:;&quot; id=&quot;clearNotification&quot; class=&quot;small pull-right&quot;&gt;Clear All&lt;/a&gt;&lt;/div&gt;
               &lt;ul class=&quot;notification-content&quot;&gt;
                  &lt;li&gt;
                     &lt;h5&gt;Scheduled server maintenance &amp;#183; 1hr ago&lt;/h5&gt;
                     &lt;p&gt;Lorem ...&lt;/p&gt;
                  &lt;/li&gt;
               &lt;/ul&gt;
               &lt;div class=&quot;notification-empty&quot; style=&quot;display:none&quot;&gt;
                  &lt;span&gt;&lt;i class=&quot;icon-bell-o x2&quot;&gt;&lt;/i&gt;&lt;br&gt;Nothing new right now&lt;/span&gt;
               &lt;/div&gt;
            &lt;/div&gt;
         &lt;/li&gt;
         &lt;!--End Notification--&gt;
         &lt;li class=&quot;dropdown&quot;&gt;
            ...
         &lt;/li&gt;
      &lt;/ul&gt;
   &lt;/div&gt;
&lt;/div&gt;
&lt;!--// NAVBAR END //--&gt;
				</div></pre>
				<blockquote class="alert-danger" role="alert">
					<h4>Requires jQuery plug-in</h4>
					<p>If the following code is not included, it will be impossible to clear notification message.</p>
					<pre class="well prettyprint">
$(&quot;.dropdown-menu&quot;).click(function(event){
	event.stopPropagation();
});
	
$(&quot;#clearNotification&quot;).click(function(){
    $(&quot;.notification-content&quot;).slideUp(200);
    $(&quot;.notification-empty&quot;).fadeIn(200);
    $(&quot;.bell .alert&quot;).removeClass();
    $(&quot;.bell i&quot;).addClass(&quot;icon-bell&quot;);
});</pre>
				</blockquote>
			</div>		
		</div>	

		<div class="panel panel-default">
			<div class="panel-heading">
				<div class="panel-title"><strong>Footer</strong></div>
			</div>
			<div class="panel-body">
				<h5>Example:</h5>
				<!--// FOOTER //-->
				<div id="footer">
				    <div class="container">
				        <div class="col-md-9 col-xs-12">
				            <ul class="list-inline">
				                <li><a href="#" data-toggle="modal" data-target="#contactUsModal">Contact Us</a></li>|
				                <li>03 2176 0333 (Kuala Lumpur)</li>
				                <li>04 644 5912 (Penang)</li>
				                <li>07 861 1045 (Johor Bahru)</li>
				                <li>082 255 688 (Kuching)</li>
				            </ul>
				        </div>
				        <div class="col-md-3 col-xs-12">
				            <div class="text-left">
				            	Copyright © Jobstreet |
				            	<a id="linkTermOfUse" href="http://www.jobstreet.com.my/employers/terms_use.htm" target="_blank">Terms of Use</a>
				            </div>
				            <div class="clearfix"></div>
				        </div>
				    </div>
				</div>
				<!--// FOOTER END //-->
				
				<h5>Sample Code:</h5>
				<pre class="well prettyprint"><input class="btn btn-info btnCopy" type="button" value="Copy" data-trigger="hover" data-toggle="tooltip" data-original-title="Copy to clipboard" data-placement="top"/><div class="code_content">
&lt;!--// FOOTER //--&gt;
&lt;div id=&quot;footer&quot;&gt;
   &lt;div class=&quot;container&quot;&gt;
      &lt;div class=&quot;col-md-9 col-xs-12&quot;&gt;
         &lt;ul class=&quot;list-inline&quot;&gt;
            &lt;li&gt;&lt;a href=&quot;#&quot; data-toggle=&quot;modal&quot; data-target=&quot;#contactUsModal&quot;&gt;Contact Us&lt;/a&gt;&lt;/li&gt;
            |
            &lt;li&gt;03 2176 0333 (Kuala Lumpur)&lt;/li&gt;
            &lt;li&gt;04 644 5912 (Penang)&lt;/li&gt;
            &lt;li&gt;07 861 1045 (Johor Bahru)&lt;/li&gt;
            &lt;li&gt;082 255 688 (Kuching)&lt;/li&gt;
         &lt;/ul&gt;
      &lt;/div&gt;
      &lt;div class=&quot;col-md-3 col-xs-12&quot;&gt;
         &lt;div class=&quot;text-left&quot;&gt;
            Copyright &copy; Jobstreet |
            &lt;a id=&quot;linkTermOfUse&quot; href=&quot;http://www.jobstreet.com.my/employers/terms_use.htm&quot; target=&quot;_blank&quot;&gt;Terms of Use&lt;/a&gt;
         &lt;/div&gt;
         &lt;div class=&quot;clearfix&quot;&gt;&lt;/div&gt;
      &lt;/div&gt;
   &lt;/div&gt;
&lt;/div&gt;
&lt;!--// FOOTER END //--&gt;
				</div></pre>
				<blockquote class="alert-warning" role="alert">
					<p>To display year, kindly include the <code>siva.js</code> in your page.</p>
				</blockquote>
			</div>
		</div>
		
		<div class="panel panel-default">
			<div class="panel-heading">
				<div class="panel-title"><strong>Footer with links</strong></div>
			</div>
			<div class="panel-body">
				<h5>Example:</h5>
				<!--// FOOTER //-->
				<footer>
				  <div class="container">
					<div class="row">
					  <div class="col-sm-6 text-left">Any questions?
					  Call our account manager at +603-21760333 Ext: 011
					  </div>
					  <div class="col-sm-6 text-right hidden-xs">
					  <a>Contact Us</a> | <a>FAQs</a>
					  </div>
					</div>
					<div class="row visible-xs">
						<div class="col-xs-12"><a>Contact Us</a> | <a>FAQs</a> | <a>Privacy Policy</a> | <a>Terms &amp; Conditions</a></div>
					</div>
					<div class="row">
					  <div class="col-sm-6 text-left hidden-xs"><a>Privacy Policy</a> | <a>Terms &amp; Conditions</a></div>
					  <div class="col-sm-6 text-right">Copyright &copy; 2015 JobStreet.com</div>
					</div>
				  </div>
				</footer>		
				<!--// FOOTER END //-->

				<div class="clearfix x2"></div>
				<h5>Sample Code:</h5>
				<pre class="well prettyprint"><input class="btn btn-info btnCopy" type="button" value="Copy" data-trigger="hover" data-toggle="tooltip" data-original-title="Copy to clipboard" data-placement="top"/><div class="code_content">
&lt;!--// FOOTER //--&gt;
&lt;footer&gt;
   &lt;div class=&quot;container&quot;&gt;
      &lt;div class=&quot;row&quot;&gt;
         &lt;div class=&quot;col-sm-6 text-left&quot;&gt;Any questions?
            Call our account manager at +603-21760333 Ext: 011
         &lt;/div&gt;
         &lt;div class=&quot;col-sm-6 text-right hidden-xs&quot;&gt;
            &lt;a&gt;Contact Us&lt;/a&gt; | &lt;a&gt;FAQs&lt;/a&gt;
         &lt;/div&gt;
      &lt;/div&gt;
      &lt;div class=&quot;row visible-xs&quot;&gt;
         &lt;div class=&quot;col-xs-12&quot;&gt;&lt;a&gt;Contact Us&lt;/a&gt; | &lt;a&gt;FAQs&lt;/a&gt; | &lt;a&gt;Privacy Policy&lt;/a&gt; | &lt;a&gt;Terms &amp;amp; Conditions&lt;/a&gt;&lt;/div&gt;
      &lt;/div&gt;
      &lt;div class=&quot;row&quot;&gt;
         &lt;div class=&quot;col-sm-6 text-left hidden-xs&quot;&gt;&lt;a&gt;Privacy Policy&lt;/a&gt; | &lt;a&gt;Terms &amp;amp; Conditions&lt;/a&gt;&lt;/div&gt;
         &lt;div class=&quot;col-sm-6 text-right&quot;&gt;Copyright &amp;copy; &lt;span id=&quot;year&quot;&gt;&lt;/span&gt; JobStreet.com&lt;/div&gt;
      &lt;/div&gt;
   &lt;/div&gt;
&lt;/footer&gt;
&lt;!--// FOOTER END //--&gt;
				</div></pre>
				<blockquote class="alert-warning" role="alert">
					<p>To display year, kindly include the <code>siva.js</code> in your page.</p>
				</blockquote>
			</div>
		</div>
		
		<blockquote class="alert-success" role="alert">
			<h4>Demo File</h4>
			<p>Demo of the navbar can be download here. (Note: Footer also included)</p>
			<p><a class="btn btn-success" href="../siva/sample/navbar.html" download>Download</a></p>
		</blockquote>
		
	</div>
</section>

<?php include("../includes/script.php");?>
</body>
</html>
