<?php include("includes/config.php");?>
<!DOCTYPE html>
<html lang="en">
<head>
<title><?php echo $ProjectName?> - Style</title>
<?php include("includes/meta.php");?>
</head>
<body data-spy="scroll" data-offset="0" data-target="#sidebar-wrapper">
<div id="wrapper">
	<?php
	$pg="style";
	include ("sidebar.php");
	?>
	<div id="page-content-wrapper">
		<div class="container-fluid">
			<div class="row">
				
				<nav class="header-menu">
					<div class="clearfix">
						<h2 class="pull-left">Style</h2>
						<a href="javascript:;" role="button" class="btn btn-link pull-right visible-xs" id="menu-toggle"><span class="icon-menu"></span></a>
					</div>
				</nav>

				<!--// Color //-->
				<a name="color" id="color">&nbsp;</a>
				<h3 class="sub-title">Color</h3>
				<div class="panel">
					<div class="panel-body">
						<div class="col-md-6">
							<table class="table">
							<tbody>
							<tr><td style="background-color:#1c3f94;color:#fff;">#1C3F94</td></tr>
							<tr><td style="background-color:#fff200;">#FFF200</td></tr>
							<tr><td>&nbsp;</td></tr>
							<tr><td style="background-color:#ef645f;color:#fff;">#EF645F</td></tr>
							<tr><td style="background-color:#f58b4f;color:#fff;">#F58B4F</td></tr>
							<tr><td style="background-color:#18ca6c;color:#fff;">#18CA6C</td></tr>
							<tr><td style="background-color:#428bca;color:#fff;">#428BCA</td></tr>
							</tbody>
							</table>
						</div>
						<div class="col-md-6">
							<table class="table">
							<tbody>
							<tr><td style="background-color:#222;color:#fff;">#222222</td></tr>
							<tr><td style="background-color:#333;color:#fff;">#333333</td></tr>
							<tr><td style="background-color:#555;color:#fff;">#555555</td></tr>
							<tr><td style="background-color:#777;color:#fff;">#777777</td></tr>
							<tr><td style="background-color:#999;color:#fff;">#999999</td></tr>
							<tr><td style="background-color:#ccc;">#CCCCCC</td></tr>
							<tr><td style="background-color:#ddd;">#DDDDDD</td></tr>
							<tr><td style="background-color:#e5e5e5;">#E5E5E5</td></tr>
							<tr><td style="background-color:#eee;">#EEEEEE</td></tr>
							<tr><td style="background-color:#f9f9f9;">#F9F9F9</td></tr>
							</tbody>
							</table>
						</div>
					</div>
				</div>
				
				<!--// Icons //-->
				<a name="icons" id="icons">&nbsp;</a>
				<h3 class="sub-title">Icons</h3>
				<div class="panel icons-showcase">
					<div class="panel-body">
				
						<pre class="well"><span class="text-success">&lt;!-- Icon Font CDN --&gt;</span>
&lt;link rel=<span class="text-warning">&quot;stylesheet&quot;</span> href=<span class="text-warning">&quot;<?php echo $IconFontCDN;?>&quot;</span>&gt;</pre>

						<blockquote class="alert-info" role="alert">
							<h4>Pick 'n' Repack</h4>
							<p>For developers wish to select and repack these icons, download the icon pack and use <a href="http://icomoon.io/app" target="_blank">Icomoon</a> to customize icons library.</p>
							<p>Icomoon also available at chrome web store, <a href="https://chrome.google.com/webstore/detail/icomoon/kppingdhhalimbaehfmhldppemnmlcjd?utm_source=chrome-ntp-icon" target="_blank">install</a> this extension for chrome browser.</p>
							<p><a href="download/iconfont.zip" class="btn btn-info">Download</a></p>
						</blockquote>

						<section>
							<h4>Web Application</h4>
							<div class="clearfix">
							<?php	$ico=array("user","user-group","user-add","quote","profile","layer","search","check-board","calculate","grid","list","picture","bookmark","sitemap","alpha-asc","alpha-desc","numeric-asc","numeric-desc","comment","comment-o","comments","comments-o","file","file-o","file-text","file-text-o","folder","folder-o","folder-open","folder-open-o","edit","copy","cut","paste","language","spell-check","random","direction-arrow","dollar-sign","signal","history","target","stats","menu","ellipsis-v","export","external-link","location","share","spinner","list-alt","edit-pencil","tasks");
							foreach($ico as $item){
								echo "<div class=\"col-md-3 col-xs-6\"><span class=\"icon-".$item."\"></span>".$item."</div>";
							}
							?>
							</div>
						</section>

						<section>
							<h4>Objects</h4>
							<div class="clearfix">
							<?php	$ico=array("arm-chair","newspaper","paper-clip","briefcase","floppy-disk","calendar","vcard","phone","envelope","envelope-o","tag","tags","pin","math-compass","pencil","paperplane","education","cert","seal","award","book","trophy","flag","megaphone","bell","bell-o","flask","cart","credit-card","wallet","shield","wrench","gear","meter","key","trash-bin","lifebuoy","gift","medical","wizard","chain","filter","lightbulb","umbrella");
							foreach($ico as $item){
								echo "<div class=\"col-md-3 col-xs-6\"><span class=\"icon-".$item."\"></span>".$item."</div>";
							}
							?>
							</div>
						</section>

						<section>
							<h4>Electronic Devices</h4>
							<div class="clearfix">
							<?php
							$ico=array("desktop","laptop","tablet","mobile","video","camera","tv","printer","alarm","clock","camera-retro");
							foreach($ico as $item){
								echo "<div class=\"col-md-3 col-xs-6\"><span class=\"icon-".$item."\"></span>".$item."</div>";
							}
							?>
							</div>
						</section>

						<section>
							<h4>City / Outdoor</h4>
							<div class="clearfix">
							<?php
							$ico=array("home","building","library","directions","road","trees","globe","compass","map","cloud","building-o");
							foreach($ico as $item){
								echo "<div class=\"col-md-3 col-xs-6\"><span class=\"icon-".$item."\"></span>".$item."</div>";
							}
							?>
							</div>
						</section>
						
						<section>
							<h4>Transportation</h4>
							<div class="clearfix">
							<?php
							$ico=array("aeroplane","train","train2","bus","car","truck","walking");
							foreach($ico as $item){
								echo "<div class=\"col-md-3 col-xs-6\"><span class=\"icon-".$item."\"></span>".$item."</div>";
							}
							?>
							</div>
						</section>
						
						<section>
							<h4>Brand</h4>
							<div class="clearfix">
							<?php
							$ico=array("facebook","twitter","google-plus","linkedin","youtube","apple","android","windows","skype","chrome","firefox","IE","opera","safari","rss");
							foreach($ico as $item){
								echo "<div class=\"col-md-3 col-xs-6\"><span class=\"icon-".$item."\"></span>".$item."</div>";
							}
							?>
							</div>
						</section>
						
						<section>
							<h4>Directional</h4>
							<div class="clearfix">
							<?php	$ico=array("arrow-nw","arrow-up","arrow-ne","arrow-right","arrow-se","arrow-down","arrow-sw","arrow-left","arrow-nw-bold","arrow-up-bold","arrow-ne-bold","arrow-right-bold","arrow-se-bold","arrow-down-bold","arrow-sw-bold","arrow-left-bold","arrow-top-left","arrow-top-right","arrow-down-left","arrow-down-right","arrow-left-disc","arrow-right-disc","arrow-up-disc","arrow-down-disc","arrow-nw-o","arrow-up-o","arrow-ne-o","arrow-right-o","arrow-se-o","arrow-down-o","arrow-sw-o","arrow-left-o","angle-left-disc","angle-right-disc","angle-up-disc","angle-down-disc","angle-left","angle-right","angle-up","angle-down","angle-double-left","angle-double-right","angle-double-up","angle-double-down","point-left","point-right","point-up","point-down","expand","contract","expand-2","contract-2","arrows-v","arrows-h","chevron-left","chevron-right");
							foreach($ico as $item){
								echo "<div class=\"col-md-3 col-xs-6\"><span class=\"icon-".$item."\"></span>".$item."</div>";
							}
							?>
							</div>
						</section>

						<section>
							<h4>Emotional</h4>
							<div class="clearfix">
							<?php
							$ico=array("sad","sad-o","confused","confused-o","neutral","neutral-o","wondering","wondering-o","shocked","shocked-o","smiley","smiley-o","happy","happy-o","star","star-o","love","love-o","love-broken");
							foreach($ico as $item){
								echo "<div class=\"col-md-3 col-xs-6\"><span class=\"icon-".$item."\"></span>".$item."</div>";
							}
							?>
							</div>
						</section>
						
						<section>
							<h4>Toggle</h4>
							<div class="clearfix">
							<?php
							$ico=array("upload","download","drawer-empty","drawer-full","cloud-upload","cloud-download","zoom-in","zoom-out","eye-opened","eye-blocked","door-open","door-closed","in","out","login","logout","locked","unlocked","like","dislike");
							foreach($ico as $item){
								echo "<div class=\"col-md-3 col-xs-6\"><span class=\"icon-".$item."\"></span>".$item."</div>";
							}
							?>
							</div>
						</section>

						<section>
							<h4>Helpers</h4>
							<div class="clearfix">
							<?php	$ico=array("info-sign","info-sign-o","question-mark","question-mark-o","warning","not-allowed","close-o","checkmark-o","close","checkmark","positive","negative","positive-square","negative-square","positive-disc","negative-disc","close-square","close-disc","erase","move","rotate","switch","return","retweet","loop","back","enter","level-up","level-down","unsorted","caret-left","caret-right","caret-up","caret-down","flip-vertical","flip-horizontal");
							foreach($ico as $item){
								echo "<div class=\"col-md-3 col-xs-6\"><span class=\"icon-".$item."\"></span>".$item."</div>";
							}
							?>
							</div>
						</section>
					</div>
				</div>

				<div class="panel panel-default">
					<div class="panel-heading">
						<div class="panel-title">Sizing</div>
					</div>
					<div class="panel-body">
						<div class="row clearfix x3">
							<div class="col-sm-2 col-xs-6">
								<h5><code>default</code></h5>
								<span class="icon-sad-o"></span>
							</div>
							<div class="col-sm-2 col-xs-6">
								<h5><code>x2</code></h5>
								<span class="icon-neutral-o x2"></span>
							</div>
							<div class="col-sm-2 col-xs-6">
								<h5><code>x3</code></h5>
								<span class="icon-wondering-o x3"></span>
							</div>
							<div class="col-sm-2 col-xs-6">
								<h5><code>x4</code></h5>
								<span class="icon-smiley-o x4"></span>
							</div>
							<div class="col-sm-2 col-xs-6">
								<h5><code>x5</code></h5>
								<span class="icon-happy-o x5"></span>
							</div>
						</div>						
						<pre class="well">&lt;span class=<span class="text-warning">&quot;icon-smiley x3&quot;</span>&gt;&lt;/span&gt;</pre>						
					</div>
				</div>

				<!--// Image //-->
				<a name="image" id="image">&nbsp;</a>
				<h3 class="sub-title">Image</h3>
				<div class="panel panel-default">
					<div class="panel-heading">
						<div class="panel-title">Logo</div>
					</div>
					<div class="panel-body">
						<div class="row clearfix x3">
							<div class="col-md-4">
								<h5><code>jslogo my</code></h5>
								<span class="jslogo my"></span>
							</div>
							<div class="col-md-4">
								<h5><code>jslogo sg</code></h5>
								<span class="jslogo sg"></span>
							</div>
							<div class="col-md-4">
								<h5><code>jslogo id</code></h5>
								<span class="jslogo id"></span>
							</div>
						</div>
						
						<div class="row clearfix x3">
							<div class="col-md-4">
								<h5><code>jslogo ph</code></h5>
								<span class="jslogo ph"></span>
							</div>
							<div class="col-md-4">
								<h5><code>jslogo vn</code></h5>
								<span class="jslogo vn"></span>
							</div>
							<div class="col-md-4">
								<h5><code>jslogo</code></h5>
								<span class="jslogo"></span>
							</div>
						</div>
						<pre class="well">&lt;span class=<span class="text-warning">&quot;jslogo my&quot;</span>&gt;&lt/span&gt;</pre>
					</div>
				</div>
				
				
				<div class="panel panel-default">
					<div class="panel-heading">
						<div class="panel-title">Thumbnail</div>
					</div>
					<div class="panel-body">
						<h5><code>thumbnail</code></h5>
						<div class="row clearfix">
							<div class="col-md-3">
								<div class="thumbnail">
									<figure><img src="images/sample1.jpg" class="img-responsive"></figure>
								</div>
								<pre class="well">&lt;div class=<span class="text-warning">&quot;thumbnail&quot;</span>&gt;&lt;/div&gt;</pre>
							</div>
							<div class="col-md-3">
								<a href="javascript:;" class="thumbnail"><figure><img src="images/sample2.jpg" class="img-responsive"></figure></a>
								<pre class="well">&lt;a class=<span class="text-warning">&quot;thumbnail&quot;</span>&gt;&lt;/a&gt;</pre>
							</div>
						</div>
					</div>
				</div>

				<!--// Grid Options //-->
				<a name="grid" id="grid">&nbsp;</a>
				<h3 class="sub-title">Grid system</h3>
				
				<div class="panel panel-default">
					<div class="panel-heading">
						<div class="panel-title">Media queries</div>
					</div>
					<div class="panel-body">
						<p>Use the following media queries in Less files to create the key breakpoints.</p>
						<pre class="well">/* Extra small devices (phones, less than 768px) */
/* No media query since this is the default in Bootstrap */

/* Small devices (tablets, 768px and up) */
@media (min-width: @screen-sm-min) { ... }

/* Medium devices (desktops, 992px and up) */
@media (min-width: @screen-md-min) { ... }

/* Large devices (large desktops, 1200px and up) */
@media (min-width: @screen-lg-min) { ... }</pre>	
					</div>
				</div>

				<!--// Typography //-->
				<a name="typo" id="typo">&nbsp;</a>
				<h3 class="sub-title">Typography</h3>
				
				<div class="panel panel-default">
					<div class="panel-heading">
						<div class="panel-title">Body text</div>
					</div>
					<div class="panel-body">
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
						<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?</p>
						<dl class="dl-horizontal">
							<dt>Font Family:</dt>
							<dd>Helvetica Neue, Helvetica, Arial, sans-serif</dd>
							<dt>Font Size:</dt>
							<dd>14px</dd>
						</dl>
					</div>
				</div>
				
				<div class="panel panel-default">
					<div class="panel-heading">
						<div class="panel-title">Headline</div>
					</div>
					<div class="panel-body">
						<h1>h1, .h1 - 36px</h1>
						<h2>h2, .h2 - 30px</h2>
						<h3>h3, .h3 - 24px</h3>
						<h4>h4, .h4 - 18px</h4>
						<h5>h5, .h5 - 14px</h5>
						<h6>h6, .h6 - 12px</h6>
					</div>
				</div>

				<div class="panel panel-default">
					<div class="panel-heading">
						<div class="panel-title">Page header</div>
					</div>
					<div class="panel-body">
						<h5><code>page-header</code></h5>
						<h1 class="page-header">Page Header</h1>
						<pre class="well">&lt;h1 class=<span class="text-warning">&quot;page-header&quot;</span>&gt;Page Header&lt;/h1&gt;</pre>
					</div>
				</div>
				
				<div class="panel panel-default">
					<div class="panel-heading">
						<div class="panel-title">Lead paragraph</div>
					</div>
					<div class="panel-body">
						<h5><code>lead</code></h5>
						<p class="lead">Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>
						<pre class="well">&lt;p class=<span class="text-warning">&quot;lead&quot;</span>&gt;&lt;/p&gt;</pre>
					</div>
				</div>
				
				<div class="panel panel-default">
					<div class="panel-heading">
						<div class="panel-title">Alignment</div>
					</div>
					<div class="panel-body">
						<h5><code>text-left</code></h5>
						<p class="text-left">Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>			
						<pre class="well">&lt;p class=<span class="text-warning">&quot;text-left&quot;</span>&gt;&lt;/p&gt;</pre>
						
						<h5><code>text-right</code></h5>
						<p class="text-right">Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>						
						<pre class="well">&lt;p class=<span class="text-warning">&quot;text-right&quot;</span>&gt;&lt;/p&gt;</pre>
						
						<h5><code>text-center</code></h5>
						<p class="text-center">Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>						
						<pre class="well">&lt;p class=<span class="text-warning">&quot;text-center&quot;</span>&gt;&lt;/p&gt;</pre>
					</div>
				</div>
				
				<div class="panel panel-default">
					<div class="panel-heading">
						<div class="panel-title">Emphasis classes</div>
					</div>
					<div class="panel-body">
						<h5><code>text-muted</code></h5>
						<p class="text-muted">Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>

						<h5><code>text-success</code></h5>
						<p class="text-success">Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>

						<h5><code>text-danger</code></h5>
						<p class="text-danger">Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>

						<h5><code>text-info</code></h5>
						<p class="text-info">Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>

						<h5><code>text-warning</code></h5>
						<p class="text-warning">Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>
						<pre class="well">&lt;p class=<span class="text-warning">&quot;text-info&quot;</span>&gt;&lt;/p&gt;</pre>
					</div>
				</div>
				
				<div class="panel panel-default">
					<div class="panel-heading">
						<div class="panel-title">Block quote</div>
					</div>
					<div class="panel-body">
						<blockquote>
							<p>Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>
							<small>By Someone</small>
						</blockquote>
						<pre class="well">&lt;blockquote&gt;
  &lt;p&gt;Quote text&lt;/p&gt;
  &lt;small&gt;By Someone&lt;/small&gt;
&lt;/blockquote&gt;</pre>
					</div>
				</div>
				
				<div class="panel panel-default">
					<div class="panel-heading">
						<div class="panel-title">List</div>
					</div>
					<div class="panel-body">
						<h5><code>list-unstyled</code></h5>
						<ul class="list-unstyled">
							<li>Contrary to popular belief, Lorem Ipsum is not simply random text</li>
							<li>It has roots in a piece of classical Latin literature from 45 BC</li>
							<li>Making it over 2000 years old</li>
						</ul>
						<pre class="well">&lt;ul class=<span class="text-warning">&quot;list-unstyled&quot;</span>&gt;
  &lt;li&gt;&lt;/li&gt;
&lt;/ul&gt;</pre>
						<blockquote class="alert-warning" role="alert">This only applies to immediate children list items.</blockquote>

						<h5><code>list-inline</code></h5>
						<ul class="list-inline">
							<li>Richard McClintock</li>
							<li>Looked up one of the more obscure Latin words</li>
							<li>This book is a treatise on the theory of ethics</li>
							<li>Very popular during the Renaissance</li>
						</ul>
						<pre class="well">&lt;ul class=<span class="text-warning">&quot;list-inline&quot;</span>&gt;
  &lt;li&gt;&lt;/li&gt;
&lt;/ul&gt;</pre>
					</div>
				</div>
				
				<div class="panel panel-default">
					<div class="panel-heading">
						<div class="panel-title">Description</div>
					</div>
					<div class="panel-body">
						<code>dl-horizontal</code>
						<dl class="dl-horizontal">
							<dt>Item 1</dt>
							<dd>Description for item 1</dd>
							<dt>Longer text will be hidden</dt>
							<dd>Description for item 2</dd>
						</dl>
						<pre class="well">&lt;dl class=<span class="text-warning">&quot;dl-horizontal&quot;</span>&gt;
  &lt;dt&gt;&lt;/dt&gt;
  &lt;dd&gt;&lt;/dd&gt;
&lt;/dl&gt;</pre>
					</div>
				</div>

			</div>
		</div>
	</div>
</div>
<?php include ("includes/script.php");?>
<script>
$(function(){
	$("#icons-tab a:first").tab("show");
});
</script>
</body>
</html>