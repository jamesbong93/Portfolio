<?php include("includes/config.php");?>
<!DOCTYPE html>
<html lang="en">
<head>
<title><?php echo $ProjectName?> - Navigation</title>
<?php include("includes/meta.php");?>
</head>
<body>
<div id="wrap">
<?php
$para="ui->navigation";
include("includes/navbar.php");
?>
<div class="container">
	<div class="panel page-header">
		<div class="panel-body">
			<h3>Navigation</h3>
		</div>
	</div>

	<h4>Navbar</h4>
	<h5 id="demo-code"><code>.navbar-default</code></h5>
	<div class="navbar navbar-default">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-demo-collapse">
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			</button>
		</div>
		<div class="navbar-collapse collapse">
			<ul class="nav navbar-nav">
				<li><a href="#">Home</a></li>
				<li><a href="#">Navbar</a></li>
				<li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
					<ul class="dropdown-menu">
						<li><a href="#">Menu Item 1</a></li>
						<li><a href="#">Menu Item 2</a></li>
					</ul>
				</li>
			</ul>
		</div>
	</div>
	
	<h5 id="demo-code"><code>.navbar-inverse</code></h5>
	<div class="navbar navbar-inverse">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-demo-collapse">
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			</button>
		</div>
		<div class="navbar-collapse collapse">
			<ul class="nav navbar-nav">
				<li><a href="#">Home</a></li>
				<li><a href="#">Navbar</a></li>
				<li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
					<ul class="dropdown-menu">
						<li><a href="#">Menu Item 1</a></li>
						<li><a href="#">Menu Item 2</a></li>
					</ul>
				</li>
			</ul>
		</div>
	</div>

	<div class="clearfix x3"></div>

	<h4>Tabs</h4>
	<div class="panel panel-clean card">
		<div class="panel-body">
		<h5><code>.nav-tabs</code></h5>
		<ul class="nav nav-tabs" id="myTab">
			<li class="active"><a href="#home" data-toggle="tab">Home</a></li>
			<li><a href="#profile" data-toggle="tab">Profile</a></li>
			<li class="disabled"><a href="javascript:;">Disabled</a></li>
			<li class="dropdown">
				<a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown">Dropdown <span class="caret"></span></a>
				<ul class="dropdown-menu">
					<li><a href="#settings" data-toggle="tab">Settings</a></li>
					<li><a href="#messages" data-toggle="tab">About</a></li>
				</ul>
			</li>
		</ul>
		<div class="tab-content">
			<div class="tab-pane fade in active" id="home">
				<p>Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica. Reprehenderit butcher retro keffiyeh dreamcatcher synth. Cosby sweater eu banh mi, qui irure terry richardson ex squid. Aliquip placeat salvia cillum iphone. Seitan aliquip quis cardigan american apparel, butcher voluptate nisi qui.</p>
			</div>
			<div class="tab-pane fade" id="profile">
				<p>Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid. Exercitation +1 labore velit, blog sartorial PBR leggings next level wes anderson artisan four loko farm-to-table craft beer twee. Qui photo booth letterpress, commodo enim craft beer mlkshk aliquip jean shorts ullamco ad vinyl cillum PBR.</p>
			</div>
			<div class="tab-pane fade" id="messages">
				<p>Homo nostrud organic, assumenda labore aesthetic magna delectus mollit. Keytar helvetica VHS salvia yr, vero magna velit sapiente labore stumptown. Vegan fanny pack odio cillum wes anderson 8-bit, sustainable jean shorts beard ut DIY ethical culpa terry richardson biodiesel. Art party scenester stumptown, tumblr butcher vero sint qui sapiente accusamus tattooed echo park.</p>
			</div>
			<div class="tab-pane fade" id="settings">
				<p>Etsy mixtape wayfarers, ethical wes anderson tofu before they sold out mcsweeney's organic lomo retro fanny pack lo-fi farm-to-table readymade. Messenger bag gentrify pitchfork tattooed craft beer, iphone skateboard locavore carles etsy salvia banksy hoodie helvetica. DIY synth PBR banksy irony. Leggings gentrify squid 8-bit cred pitchfork. Williamsburg banh mi whatever gluten-free, carles pitchfork biodiesel fixie etsy retro mlkshk vice blog. Scenester cred you probably haven't heard of them, vinyl craft beer blog stumptown. Pitchfork sustainable tofu synth chambray yr.</p>
			</div>
		</div>
		<pre class="well">&lt;ul class=<span class="text-warning">&quot;nav nav-tabs&quot;</span> id=<span class="text-warning">&quot;myTab&quot;</span>&gt;
  &lt;li class=<span class="text-warning">&quot;active&quot;</span>&gt;&lt;a href=<span class="text-warning">&quot;#home&quot;</span> data-toggle=<span class="text-warning">&quot;tab&quot;</span>&gt;Home&lt;/a&gt;&lt;/li&gt;
  &lt;li&gt;&lt;a href=<span class="text-warning">&quot;#profile&quot;</span> data-toggle=<span class="text-warning">&quot;tab&quot;</span>&gt;Profile&lt;/a&gt;&lt;/li&gt;
  &lt;li class=<span class="text-warning">&quot;disabled&quot;</span>&gt;&lt;a href=<span class="text-warning">&quot;javascript:void(0);&quot;</span>&gt;Disabled&lt;/a&gt;&lt;/li&gt;
  &lt;li class=<span class="text-warning">&quot;dropdown&quot;</span>&gt;
    &lt;a href=<span class="text-warning">&quot;javascript:void(0);&quot;</span> class=<span class="text-warning">&quot;dropdown-toggle&quot;</span> data-toggle=<span class="text-warning">&quot;dropdown&quot;</span>&gt;
    Dropdown &lt;span class=<span class="text-warning">&quot;caret&quot;</span>&gt;&lt;/span&gt;
  &lt;/a&gt;
  &lt;ul class=<span class="text-warning">&quot;dropdown-menu&quot;</span>&gt;
    &lt;li&gt;&lt;a href=<span class="text-warning">&quot;#settings&quot;</span>&gt;Settings&lt;/a&gt;&lt;/li&gt;
    &lt;li&gt;&lt;a href=<span class="text-warning">&quot;#messages&quot;</span>&gt;About&lt;/a&gt;&lt;/li&gt;
  &lt;/ul&gt;
  &lt;/li&gt;
&lt;/ul&gt;
&lt;div class=<span class="text-warning">&quot;tab-content&quot;</span>&gt;
  &lt;div class=<span class="text-warning">&quot;tab-pane fade in active&quot;</span> id=<span class="text-warning">&quot;home&quot;</span>&gt;&lt;p&gt;...&lt;/p&gt;&lt;/div&gt;
  &lt;div class=<span class="text-warning">&quot;tab-pane fade&quot;</span> id=<span class="text-warning">&quot;profile&quot;</span>&gt;&lt;p&gt;...&lt;/p&gt;&lt;/div&gt;
  &lt;div class=<span class="text-warning">&quot;tab-pane fade&quot;</span> id=<span class="text-warning">&quot;messages&quot;</span>&gt;&lt;p&gt;...&lt;/p&gt;&lt;/div&gt;
  &lt;div class=<span class="text-warning">&quot;tab-pane fade&quot;</span> id=<span class="text-warning">&quot;settings&quot;</span>&gt;&lt;p&gt;...&lt;/p&gt;&lt;/div&gt;
&lt;/div&gt;

&lt;script&gt;
$(<span class="text-info">function</span>(){
  $(<span class="text-success">&quot;#myTab a:last&quot;</span>).tab(<span class="text-success">&quot;show&quot;</span>);
})
&lt;/script&gt;</pre>
		</div>
	</div>
	
	<h4>Pills</h4>
	<div class="panel panel-clean card">
		<div class="panel-body">
		<h5><code>.nav-pills</code></h5>
		<ul class="nav nav-pills">
			<li class="active"><a href="javascript:;">Home</a></li>
			<li><a href="javascript:;">Product</a></li>
			<li><a href="javascript:;">Profile</a></li>
			<li class="dropdown">
				<a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown">Dropdown <span class="caret"></span></a>
				<ul class="dropdown-menu">
					<li><a href="javascript:;">Menu 1</a></li>
					<li><a href="javascript:;">Menu 2</a></li>
					<li class="divider"></li>
					<li><a href="javascript:;">Menu 3</a></li>
				</ul>
			</li>
			</ul>
			<pre class="well">&lt;ul class=<span class="text-warning">&quot;nav nav-pills&quot;</span>&gt;
  &lt;li&gt;...&lt;/li&gt;
&lt;/ul&gt;</pre>
		</div>
	</div>
	
	<!--<h4>Stacked</h4>
	<div class="panel panel-clean card">
		<div class="panel-body">
		<h5><code>.nav-pills &plus; .nav-stacked</code></h5>
		<ul class="nav nav-pills nav-stacked">
			<li class="active"><a href="javascript:;">Home</a></li>
			<li><a href="javascript:;">Product</a></li>
			<li><a href="javascript:;">Profile</a></li>
		</ul>
		<pre class="well">&lt;ul class=<span class="text-warning">&quot;nav nav-pills nav-stacked&quot;</span>&gt;
  &lt;li&gt;...&lt;/li&gt;
&lt;/ul&gt;</pre>
		</div>
	</div>
	
	<h4>Justified</h4>
	<div class="panel panel-clean card">
		<div class="panel-body">
		<h5><code>.nav-tabs &plus; .nav-justified</code></h5>
		<ul class="nav nav-tabs nav-justified" role="tablist">
			<li class="active"><a href="javascript:;">Home</a></li>
			<li><a href="javascript:;">Product</a></li>
			<li><a href="javascript:;">Profile</a></li>
			<li><a href="javascript:;">Settings</a></li>
		</ul>
		<h5><code>.nav-pills &plus; .nav-justified</code></h5>
		<ul class="nav nav-pills nav-justified">
			<li><a href="javascript:;">Home</a></li>
			<li><a href="javascript:;">Product</a></li>
			<li class="active"><a href="javascript:;">Profile</a></li>
			<li><a href="javascript:;">Settings</a></li>
		</ul>
		<pre class="well">&lt;ul class=<span class="text-warning">&quot;nav nav-pills nav-justified&quot;</span>&gt;
  &lt;li&gt;...&lt;/li&gt;
&lt;/ul&gt;</pre>
		</div>		
	</div>-->
	
	<h4>Breadcrumbs</h4>
	<div class="panel panel-clean card">
		<div class="panel-body">
		<h5><code>.breadcrumb</code></h5>
		<ul class="breadcrumb">
			<li><a href="javascript:;">Home</a></li>
			<li><a href="javascript:;">About the Project</a></li>
			<li class="active">Developer Blog</li>
		</ul>
		<pre class="well">&lt;ul class=<span class="text-warning">&quot;breadcrumb&quot;</span>&gt;
  &lt;li&gt;...&lt;/li&gt;
&lt;/ul&gt;</pre>
		</div>
	</div>
	
	<a name="pagination"></a>
	<h4>Pagination</h4>
	<div class="panel panel-clean card">
		<div class="panel-body">
		<h5><code>.pagination</code></h5>

		<ul class="pagination">
			<li><a href="javascript:;"><span class="addon prev"></span> Prev</a></li>
		</ul>
		<ul class="pagination">
			<li><a href="javascript:;">1</a></li>
			<li><a href="javascript:;">2</a></li>
			<li class="active"><a href="javascript:;">3</a></li>
			<li><a href="javascript:;">4</a></li>
			<li><a href="javascript:;">5</a></li>
			<li><a href="javascript:;">6</a></li>
		</ul>
		<ul class="pagination">
			<li><a href="javascript:;">Next <span class="addon next"></span></a></li>
		</ul>

		<pre class="well">&lt;ul class=<span class="text-warning">&quot;pagination&quot;</span>&gt;
  &lt;li&gt;&lt;a href=<span class="text-warning">&quot;...&quot;</span>&gt;&lt;span class=<span class="text-warning">&quot;addon prev&quot;</span>&gt; Prev&lt;/span&gt;&lt;/a&gt;&lt;/li&gt;
&lt;/ul&gt;
&lt;ul class=<span class="text-warning">&quot;pagination&quot;</span>&gt;
  &lt;li&gt;&lt;a href=<span class="text-warning">&quot;...&quot;</span>&gt;1&lt;/a&gt;&lt;/li&gt;
  &lt;li&gt;&lt;a href=<span class="text-warning">&quot;...&quot;</span>&gt;2&lt;/a&gt;&lt;/li&gt;
  &lt;li&gt;&lt;a href=<span class="text-warning">&quot;...&quot;</span>&gt;3&lt;/a&gt;&lt;/li&gt;
  &lt;li&gt;&lt;a href=<span class="text-warning">&quot;...&quot;</span>&gt;4&lt;/a&gt;&lt;/li&gt;
  &lt;li&gt;&lt;a href=<span class="text-warning">&quot;...&quot;</span>&gt;5&lt;/a&gt;&lt;/li&gt;
  &lt;li&gt;&lt;a href=<span class="text-warning">&quot;...&quot;</span>&gt;6&lt;/a&gt;&lt;/li&gt;
&lt;/ul&gt;
&lt;ul class=<span class="text-warning">&quot;pagination&quot;</span>&gt;
  &lt;li&gt;&lt;a href=<span class="text-warning">&quot;...&quot;</span>&gt;Next &lt;span class=<span class="text-warning">&quot;addon next&quot;</span>&gt;&lt;/span&gt;&lt;/a&gt;&lt;/li&gt;
&lt;/ul&gt;</pre>
		</div>
	</div>
	
	<!--<h4>Pager</h4>
	<div class="panel panel-clean card">
		<div class="panel-body">
		<h5><code>.pager</code></h5>
		<ul class="pager">
			<li><a href="javascript:;">&laquo; Prev</a></li>
			<li><a href="javascript:;">Next &raquo;</a></li>
		</ul>
		<pre class="well">&lt;ul class=<span class="text-warning">&quot;pager&quot;</span>&gt;
  &lt;li&gt;&lt;a href=<span class="text-warning">&quot;...&quot;</span>&gt;&amp;laquo; Prev&lt;/a&gt;&lt;/li&gt;
  &lt;li&gt;&lt;a href=<span class="text-warning">&quot;...&quot;</span>&gt;Next &amp;raquo;&lt;/a&gt;&lt;/li&gt;
&lt;/ul&gt;</pre>
		<ul class="pager">
			<li class="previous"><a href="javascript:;">&laquo; Prev</a></li>
			<li class="next"><a href="javascript:;">Next &raquo;</a></li>
		</ul>
		<pre class="well">&lt;ul class=<span class="text-warning">&quot;pager&quot;</span>&gt;
  &lt;li class=<span class="text-warning">&quot;previous&quot;</span>&gt;&lt;a href=<span class="text-warning">&quot;...&quot;</span>&gt;&amp;laquo; Prev&lt;/a&gt;&lt;/li&gt;
  &lt;li class=<span class="text-warning">&quot;next&quot;</span>&gt;&lt;a href=<span class="text-warning">&quot;...&quot;</span>&gt;Next &amp;raquo;&lt;/a&gt;&lt;/li&gt;
&lt;/ul&gt;</pre>
		</div>
	</div>-->
</div>
</div>
<?php include("includes/footer.php");?>
<script>
$(function(){
	$("#myTab a:first").tab("show");
})
</script>
</body>
</html>