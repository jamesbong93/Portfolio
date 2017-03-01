<?php include("includes/config.php");?>
<!DOCTYPE html>
<html lang="en">
<head>
<title><?php echo $ProjectName?> - Components</title>
<?php include("includes/meta.php");?>
<link rel="stylesheet" href="http://dna.jsstatic.com/select2/select2.css">
</head>
<body data-spy="scroll" data-offset="0" data-target="#sidebar-wrapper">
<div id="wrapper">
	<?php
	$pg="components";
	include ("sidebar.php");
	?>
	<div id="page-content-wrapper">
		<div class="container-fluid">
			<div class="row">
				
				<nav class="header-menu">
					<div class="clearfix">
						<h2 class="pull-left">Components</h2>
						<a href="javascript:;" role="button" class="btn btn-link pull-right visible-xs" id="menu-toggle"><span class="icon-menu"></span></a>
					</div>
				</nav>

				<!--// Buttons //-->
				<a name="buttons" id="buttons">&nbsp;</a>
				<h3 class="sub-title">Buttons</h3>
				<div class="panel">
					<div class="panel-body">
						<div class="row clearfix">
							<div class="col-md-2">
								<h5><code>btn-default</code></h5>
								<a href="javascript:;" class="btn btn-default">Button</a>
							</div>
							<div class="col-md-2">
								<h5><code>btn-primary</code></h5>
								<a href="javascript:;" class="btn btn-primary">Button</a>
							</div>
							<div class="col-md-2">
								<h5><code>btn-success</code></h5>
								<a href="javascript:;" class="btn btn-success">Button</a>
							</div>
							<div class="col-md-2">
								<h5><code>btn-info</code></h5>
								<a href="javascript:;" class="btn btn-info">Button</a>
							</div>
							<div class="col-md-2">
								<h5><code>btn-link</code></h5>
								<a href="javascript:;" class="btn btn-link">Button</a>
							</div>
							<div class="col-md-2">
								<h5><code>disabled</code></h5>
								<a href="javascript:;" class="btn btn-default disabled">Button</a>
							</div>
						</div>
						<pre class="well">&lt;a role=<span class="text-warning">&quot;button&quot;</span> class=<span class="text-warning">&quot;btn btn-default&quot;</span>&gt;Button&lt;/a&gt;
<span class="text-success">&lt;-- Disabled --&gt;</span>
&lt;a role=<span class="text-warning">&quot;button&quot;</span> class=<span class="text-warning">&quot;btn btn-default disabled&quot;</span>&gt;Button&lt;/a&gt;</pre>
					</div>
				</div>

				<div class="panel panel-default">
					<div class="panel-heading">
						<div class="panel-title">Display block in mobile view (768px)</div>
					</div>
					<div class="panel-body">
						<h5><code>btn-mobile-block</code></h5>
						<a href="javascript:;" class="btn btn-primary btn-mobile-block">Button</a>
					</div>
				</div>

				<div class="panel panel-default">
					<div class="panel-heading">
						<div class="panel-title">Sizing</div>
					</div>
					<div class="panel-body">
						<div class="row clearfix">
							<div class="col-md-2">
								<h5><code>btn-lg</code></h5>
								<a href="javascript:;" class="btn btn-info btn-lg">Button</a>
							</div>
							<div class="col-md-2">
								<h5><code>btn-sm</code></h5>
								<a href="javascript:;" class="btn btn-info btn-sm">Button</a>
							</div>
							<div class="col-md-2">
								<h5><code>btn-xs</code></h5>
								<a href="javascript:;" class="btn btn-info btn-xs">Button</a>
							</div>
						</div>
						<pre class="well">&lt;a role=<span class="text-warning">&quot;button&quot;</span> class=<span class="text-warning">&quot;btn btn-info btn-lg&quot;</span>&gt;Button&lt;/a&gt;</pre>
					</div>
				</div>
				
				<div class="panel panel-default">
					<div class="panel-heading">
						<div class="panel-title">Buttons group with dropdown menu</div>
					</div>
					<div class="panel-body">
						<h5><code>btn-group</code></h5>
						<div class="btn-group">
							<button class="btn btn-default">File</button>
							<button class="btn btn-default">Edit</button>
							<div class="btn-group">
								<button type="button" class="btn btn-primary">Download</button>
								<button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown"><span class="caret"></span></button>
								<ul class="dropdown-menu">
									<li><a href="javascript:;">Dropdown link</a></li>
									<li><a href="javascript:;">Dropdown link</a></li>
								</ul>
							</div>
							<button type="button" class="btn btn-default">Options</button>
						</div>
						<pre class="well">&lt;div class=<span class="text-warning">&quot;btn-group&quot;</span>&gt;
  &lt;button class=<span class="text-warning">&quot;btn btn-default&quot;</span>&gt;File&lt;/button&gt;
  &lt;button class=<span class="text-warning">&quot;btn btn-default&quot;</span>&gt;Edit&lt;/button&gt;
  &lt;div class=<span class="text-warning">&quot;btn-group&quot;</span>&gt;
    &lt;button class=<span class="text-warning">&quot;btn btn-primary&quot;</span>&gt;Download&lt;/button&gt;
    &lt;button class=<span class="text-warning">&quot;btn btn-primary dropdown-toggle&quot;</span> data-toggle=<span class="text-warning">&quot;dropdown&quot;</span>&gt;
	  &lt;span class=<span class="text-warning">&quot;caret&quot;</span>&gt;&lt;/span&gt;
    &lt;/button&gt;
    &lt;ul class=<span class="text-warning">&quot;dropdown-menu&quot;</span>&gt;
      &lt;li&gt;&lt;a href=<span class="text-warning">&quot;javascript:;&quot;</span>&gt;Dropdown link&lt;/a&gt;&lt;/li&gt;
      &lt;li&gt;&lt;a href=<span class="text-warning">&quot;javascript:;&quot;</span>&gt;Dropdown link&lt;/a&gt;&lt;/li&gt;
    &lt;/ul&gt;
  &lt;/div&gt;
  &lt;button class=<span class="text-warning">&quot;btn btn-default&quot;</span>&gt;Options&lt;/button&gt;
&lt;/div&gt;</pre>
					</div>
				</div>
				
				<div class="panel panel-default">
					<div class="panel-heading">
						<div class="panel-title">Justified buttons group</div>
					</div>
					<div class="panel-body">
						<h5><code>btn-group-justified</code></h5>
						<div class="btn-group btn-group-justified">
							<a class="btn btn-info" role="button">Left</a>
							<a class="btn btn-default" role="button">Middle</a>
							<a class="btn btn-default" role="button">Right</a>
						</div>
						<pre class="well">&lt;div class=<span class="text-warning">&quot;btn-group btn-group-justified&quot;</span>&gt;
  &lt;a class=<span class="text-warning">&quot;btn btn-info&quot;</span> role=<span class="text-warning">&quot;button&quot;</span>&gt;Left&lt;/a&gt;
  &lt;a class=<span class="text-warning">&quot;btn btn-default&quot;</span> role=<span class="text-warning">&quot;button&quot;</span>&gt;Middle&lt;/a&gt;
  &lt;a class=<span class="text-warning">&quot;btn btn-default&quot;</span> role=<span class="text-warning">&quot;button&quot;</span>&gt;Right&lt;/a&gt;
&lt;/div&gt;</pre>
					</div>
				</div>

				<!--// Cards //-->
				<!--<a name="cards" id="cards">&nbsp;</a>
				<h3 class="sub-title">Cards</h3>
				
				<div class="panel">
					<div class="panel-body">
						<p>Content Inside Card</p>
					</div>
				</div>-->
				
				<!--// Grids //-->
				<a name="grids" id="grids">&nbsp;</a>
				<h3 class="sub-title">Grids</h3>
				<div class="panel grids-demo">
					<div class="panel-body">
						Standard 4-4-4 layout
						<div class="row clearfix x2">
							<div class="col-md-4">
								<code>col-md-4</code>
							</div>
							<div class="col-md-4">
								<code>col-md-4</code>
							</div>
							<div class="col-md-4">
								<code>col-md-4</code>
							</div>
						</div>
						
						Combination
						<div class="row clearfix x2">
							<div class="col-lg-5 col-md-4">
								<code>col-lg-5 col-md-4</code>
							</div>
							<div class="col-lg-4 col-md-4">
								<code>col-lg-4 col-md-4</code>
							</div>
							<div class="col-lg-3 col-md-4">
								<code>col-lg-3 col-md-4</code>
							</div>
						</div>

						Offset
						<div class="row clearfix">
							<div class="col-md-offset-3 col-md-9">
								<code>col-md-offset-3 col-md-9</code>
							</div>
						</div>
				<pre class="well">&lt;div class=<span class="text-warning">&quot;row clearfix&quot;</span>&gt;
  &lt;div class=<span class="text-warning">&quot;col-md-4&quot;</span>&gt;...&lt;/div&gt;
&lt;/div&gt;</pre></div>
				</div>

				<!--// Tabs //-->
				<a name="tabs" id="tabs">&nbsp;</a>
				<h3 class="sub-title">Tabs</h3>
				<div class="panel">
					<div class="panel-body">
						<h5><code>nav-tabs</code></h5>
						<ul class="nav nav-tabs" id="myTab">
							<li><a href="#home" data-toggle="tab">Home</a></li>
							<li><a href="#profile" data-toggle="tab">Profile</a></li>
							<li><a href="#messages" data-toggle="tab">Messages</a></li>
							<li class="dropdown">
								<a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown">Dropdown <span class="caret"></span></a>
								<ul class="dropdown-menu">
									<li><a href="#settings" data-toggle="tab">Settings</a></li>
									<li><a href="#profile" data-toggle="tab">About</a></li>
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
  &lt;li&gt;&lt;a href=<span class="text-warning">&quot;#tab1&quot;</span> data-toggle=<span class="text-warning">&quot;tab&quot;</span>&gt;Tab 1&lt;/a&gt;&lt;/li&gt;
  &lt;li&gt;&lt;a href=<span class="text-warning">&quot;#tab2&quot;</span> data-toggle=<span class="text-warning">&quot;tab&quot;</span>&gt;Tab 2&lt;/a&gt;&lt;/li&gt;
  &lt;li&gt;&lt;a href=<span class="text-warning">&quot;javascript:;&quot;</span> class=<span class="text-warning">&quot;dropdown-toggle&quot;</span> data-toggle=<span class="text-warning">&quot;dropdown&quot;</span>&gt;Dropdown &lt;span class=<span class="text-warning">&quot;caret&quot;</span>&gt;&lt;/span&gt;&lt;/a&gt;
    &lt;ul class=<span class="text-warning">&quot;dropdown-menu&quot;</span>&gt;
      &lt;li&gt;&lt;a href=<span class="text-warning">&quot;#tab3&quot;</span> data-toggle=<span class="text-warning">&quot;tab&quot;</span>&gt;Tab 3&lt;/a&gt;&lt;/li&gt;
      &lt;li&gt;&lt;a href=<span class="text-warning">&quot;#tab4&quot;</span> data-toggle=<span class="text-warning">&quot;tab&quot;</span>&gt;Tab 4&lt;/a&gt;&lt;/li&gt;
    &lt;/ul&gt;
  &lt;/li&gt;
&lt;/ul&gt;
&lt;div class=<span class="text-warning">&quot;tab-content&quot;</span>&gt;
  &lt;div class=<span class="text-warning">&quot;tab-pane fade in active&quot;</span> id=<span class="text-warning">&quot;tab1&quot;</span>&gt;Tab 1&lt;/div&gt;
  &lt;div class=<span class="text-warning">&quot;tab-pane fade&quot;</span> id=<span class="text-warning">&quot;tab2&quot;</span>&gt;Tab 2&lt;/div&gt;
  &lt;div class=<span class="text-warning">&quot;tab-pane fade&quot;</span> id=<span class="text-warning">&quot;tab3&quot;</span>&gt;Tab 3&lt;/div&gt;
  &lt;div class=<span class="text-warning">&quot;tab-pane fade&quot;</span> id=<span class="text-warning">&quot;tab4&quot;</span>&gt;Tab 4&lt;/div&gt;
&lt;/div&gt;

&lt;script&gt;
$(<span class="text-info">function</span>(){
  $(<span class="text-success">&quot;#myTab a:first&quot;</span>).tab(<span class="text-success">&quot;show&quot;</span>);
})
&lt;/script&gt;</pre>
					</div>
				</div>

				<!--// Navigation //-->
				<a name="navigation" id="navigation">&nbsp;</a>
				<h3 class="sub-title">Navigation</h3>
				<div class="panel panel-default">
					<div class="panel-heading">
						<div class="panel-title">Pills</div>
					</div>
					<div class="panel-body">
						<h5><code>nav-pills</code></h5>
						<ul class="nav nav-pills">
							<li class="active"><a href="javascript:;">Home</a></li>
							<li><a href="javascript:;">Profile</a></li>
							<li><a href="javascript:;">Message</a></li>
							<li class="dropdown">
								<a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown">Dropdown <span class="caret"></span></a>
								<ul class="dropdown-menu">
									<li><a href="javascript:;">Settings</a></li>
									<li><a href="javascript:;">About</a></li>
								</ul>
							</li>
						</ul>
						<pre class="well">&lt;ul class=<span class="text-warning">&quot;nav nav-pills&quot;</span>&gt;
  &lt;li&gt;Home&lt;/li&gt;
  &lt;li&gt;Profile&lt;/li&gt;
  &lt;li&gt;Message&lt;/li&gt;
  &lt;li class=<span class="text-warning">&quot;dropdown&quot;</span>&gt;
    &lt;a href=<span class="text-warning">&quot;javascript:;&quot;</span> class=<span class="text-warning">&quot;dropdown-toggle&quot;</span> data-toggle=<span class="text-warning">&quot;dropdown&quot;</span>&gt;Dropdown &lt;span class=<span class="text-warning">&quot;caret&quot;</span>&gt;&lt;/span&gt;&lt;/a&gt;
    &lt;ul class=<span class="text-warning">&quot;dropdown-menu&quot;</span>&gt;
      &lt;li&gt;&lt;a href=<span class="text-warning">&quot;javascript:;&quot;</span>&gt;Settings&lt;/a&gt;&lt;/li&gt;
      &lt;li&gt;&lt;a href=<span class="text-warning">&quot;javascript:;&quot;</span>&gt;About&lt;/a&gt;&lt;/li&gt;
    &lt;/ul&gt;
  &lt;/li&gt;
&lt;/ul&gt;</pre>
					</div>
				</div>

				<div class="panel panel-default">
					<div class="panel-heading">
						<div class="panel-title">Breadcrumbs</div>
					</div>
					<div class="panel-body">
						<h5><code>breadcrumb</code></h5>
						<ul class="breadcrumb">
							<li><a href="javascript:;">Home</a></li>
							<li><a href="javascript:;">About the Project</a></li>
							<li class="active">Developer Blog</li>
						</ul>
						<pre class="well">&lt;ul class=<span class="text-warning">&quot;breadcrumb&quot;</span>&gt;
  &lt;li&gt;&lt;a href=<span class="text-warning">&quot;javascript:;&quot;</span>&gt;Home&lt;/a&gt;&lt;/li&gt;
  &lt;li&gt;&lt;a href=<span class="text-warning">&quot;javascript:;&quot;</span>&gt;About the Project&lt;/a&gt;&lt;/li&gt;
  &lt;li class=<span class="text-warning">&quot;active&quot;</span>&gt;Developer Blog&lt;/li&gt;
&lt;/ul&gt;</pre>
					</div>
				</div>

				<div class="panel panel-default">
					<div class="panel-heading">
						<div class="panel-title">Pagination</div>
					</div>
					<div class="panel-body">
						<h5><code>pagination</code></h5>
						<ul class="pagination">
							<li class="disabled"><a href="#"><span class="icon-angle-left"></span></a></li>
							<li><a href="#">1</a></li>
							<li><a href="#">2</a></li>
							<li class="active"><a href="#">3</a></li>
							<li><a href="#">4</a></li>
							<li><a href="#">5</a></li>
							<li><a href="#">6</a></li>
							<li><a href="#"><span class="icon-angle-right"></span></a></li>
						</ul>
						<pre class="well">
&lt;ul class=<span class="text-warning">&quot;pagination&quot;</span>&gt;
  &lt;li class=<span class="text-warning">&quot;disabled&quot;</span>&gt;&lt;a href=<span class="text-warning">&quot;#&quot;</span>&gt;&lt;span class=<span class="text-warning">&quot;icon-angle-left&quot;</span>&gt;&lt;/span&gt;&lt;/a&gt;&lt;/li&gt;
  &lt;li&gt;&lt;a href=<span class="text-warning">&quot;#&quot;</span>&gt;1&lt;/a&gt;&lt;/li&gt;
  &lt;li&gt;&lt;a href=<span class="text-warning">&quot;#&quot;</span>&gt;2&lt;/a&gt;&lt;/li&gt;
  &lt;li class=<span class="text-warning">&quot;active&quot;</span>&gt;&lt;a href=<span class="text-warning">&quot;#&quot;</span>&gt;3&lt;/a&gt;&lt;/li&gt;
  &lt;li&gt;&lt;a href=<span class="text-warning">&quot;#&quot;</span>&gt;4&lt;/a&gt;&lt;/li&gt;
  &lt;li&gt;&lt;a href=<span class="text-warning">&quot;#&quot;</span>&gt;5&lt;/a&gt;&lt;/li&gt;
  &lt;li&gt;&lt;a href=<span class="text-warning">&quot;#&quot;</span>&gt;6&lt;/a&gt;&lt;/li&gt;
  &lt;li&gt;&lt;a href=<span class="text-warning">&quot;#&quot;</span>&gt;&lt;span class=<span class="text-warning">&quot;icon-angle-right&quot;</span>&gt;&lt;/a&gt;&lt;/li&gt;
&lt;/ul&gt;</pre>
					</div>
				</div>

				<!--// Navigation Bar //-->
				<a name="navigation-bar" id="navigation-bar">&nbsp;</a>
				<h3 class="sub-title">Navigation Bar</h3>
				
				<h5><code>navbar-default</code></h5>
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
							<li><a href="javascript:;">Home</a></li>
							<li><a href="javascript:;">Navbar</a></li>
							<li class="dropdown"><a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown">Dropdown <span class="caret"></span></a>
								<ul class="dropdown-menu">
									<li><a href="javascript:;">Menu Item 1</a></li>
									<li><a href="javascript:;">Menu Item 2</a></li>
								</ul>
							</li>
						</ul>
					</div>
				</div>
				
				<h5><code>navbar-inverse</code></h5>
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
							<li><a href="javascript:;">Home</a></li>
							<li><a href="javascript:;">Navbar</a></li>
							<li class="dropdown"><a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown">Dropdown <span class="caret"></span></a>
								<ul class="dropdown-menu">
									<li><a href="javascript:;">Menu Item 1</a></li>
									<li><a href="javascript:;">Menu Item 2</a></li>
								</ul>
							</li>
						</ul>
					</div>
				</div>
				
				<div class="panel">
					<div class="panel-body">
						<pre class="well">&lt;div class=<span class="text-warning">&quot;navbar navbar-default&quot;</span>&gt;
  &lt;div class=<span class="text-warning">&quot;navbar-header&quot;</span>&gt;
    &lt;button type=<span class="text-warning">&quot;button&quot;</span> class=<span class="text-warning">&quot;navbar-toggle&quot;</span> data-toggle=<span class="text-warning">&quot;collapse&quot;</span> data-target=<span class="text-warning">&quot;.navbar-collapse&quot;</span>&gt;
      &lt;span class=<span class="text-warning">&quot;icon-bar&quot;</span>&gt;&lt;/span&gt;
      &lt;span class=<span class="text-warning">&quot;icon-bar&quot;</span>&gt;&lt;/span&gt;
      &lt;span class=<span class="text-warning">&quot;icon-bar&quot;</span>&gt;&lt;/span&gt;
    &lt;/button&gt;    
  &lt;/div&gt;
  &lt;div class=<span class="text-warning">&quot;navbar-collapse collapse&quot;</span>&gt;
    &lt;ul class=<span class="text-warning">&quot;nav navbar-nav&quot;</span>&gt;
      &lt;li&gt;&lt;a href=<span class="text-warning">&quot;javascript:;&quot;</span>&gt;Home&lt;/a&gt;&lt;/li&gt;
      &lt;li&gt;&lt;a href=<span class="text-warning">&quot;javascript:;&quot;</span>&gt;Navbar&lt;/a&gt;&lt;/li&gt;
      &lt;li class=<span class="text-warning">&quot;dropdown&quot;</span>&gt;&lt;a href=<span class="text-warning">&quot;javascript:;&quot;</span> class=<span class="text-warning">&quot;dropdown-toggle&quot; </span>data-toggle=<span class="text-warning">&quot;dropdown&quot;</span>&gt;Dropdown &lt;span class=<span class="text-warning">&quot;caret&quot;</span>&gt;&lt;/span&gt;&lt;/a&gt;
         &lt;ul class=<span class="text-warning">&quot;dropdown-menu&quot;</span>&gt;
           &lt;li&gt;&lt;a href=<span class="text-warning">&quot;javascript:;&quot;</span>&gt;Menu Item 1&lt;/a&gt;&lt;/li&gt;
           &lt;li&gt;&lt;a href=<span class="text-warning">&quot;javascript:;&quot;</span>&gt;Menu Item 2&lt;/a&gt;&lt;/li&gt;
         &lt;/ul&gt;
       &lt;/li&gt;
    &lt;/ul&gt;
  &lt;/div&gt;
&lt;/div&gt;</pre></div>
				</div>

				<!--// Form //-->
				<a name="form" id="form">&nbsp;</a>
				<h3 class="sub-title">Form</h3>
				<div class="panel">
					<div class="panel-body">
						<h5><code>form-horizontal</code></h5>
						<form class="form-horizontal">
						<div class="form-group">
							<label class="col-sm-2 control-label">Text Field</label>
							<div class="col-sm-6">
								<input type="text" class="form-control" placeholder="Full Name">
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-2 control-label">Disabled</label>
							<div class="col-sm-6">
								<input type="email" class="form-control" disabled placeholder="Disabled">
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-2 control-label">Select</label>
							<div class="col-sm-6">
								<select class="form-control">
									<?php
									for($i=1;$i<=3;$i++){echo "<option value=\"".$i."\">Item ".$i."</option>";}
									?>
								</select>
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-2 control-label">Multiple Select</label>
							<div class="col-sm-6">
								<select class="form-control" multiple>
									<?php
									for($i=1;$i<=3;$i++){echo "<option value=\"".$i."\">Item ".$i."</option>";}
									?>
								</select>
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-2 control-label">Textarea</label>
							<div class="col-sm-6">
								<textarea class="form-control"></textarea>
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-2 control-label">Static</label>
							<div class="col-sm-6">
								<div class="text-muted form-control-static">Static content</div>
							</div>
						</div>
						<div class="form-group">
							<div class="col-sm-offset-2 col-sm-10">
								<div class="checkbox-inline">
									<label><input type="checkbox">Checkbox</label>
								</div>
								<div class="checkbox-inline">
									<label><input type="checkbox" disabled>Disabled Checkbox</label>
								</div>
							</div>
						</div>
						<div class="form-group">
							<div class="col-sm-offset-2 col-sm-10">
								<div class="radio-inline">
									<label><input type="radio">Radio</label>
								</div>
								<div class="radio-inline">
									<label><input type="radio" disabled>Disabled Radio</label>
								</div>
							</div>
						</div>
						<div class="form-group">
							<div class="col-sm-offset-2 col-sm-10">
								<button class="btn btn-primary">OK</button> <button class="btn btn-default">Cancel</button>
							</div>
						</div>
						</form>
						<pre class="well">&lt;link rel=<span class="text-warning">&quot;stylesheet&quot;</span> href=<span class="text-warning">&quot;<?php echo $ProjectCDNHost;?>/select2/select2.css&quot;</span>&gt;

&lt;form class=<span class="text-warning">&quot;form-horizontal&quot;</span>&gt;
&lt;div class=<span class="text-warning">&quot;form-group&quot;</span>&gt;
  &lt;label class=<span class="text-warning">&quot;col-sm-2 control-label&quot;</span>&gt;Text Field&lt;/label&gt;
  &lt;div class=<span class="text-warning">&quot;col-sm-6&quot;</span>&gt;
    &lt;input type=<span class="text-warning">&quot;text&quot;</span> class=<span class="text-warning">&quot;form-control&quot;</span> placeholder=<span class="text-warning">&quot;Full Name&quot;</span>&gt;
  &lt;/div&gt;
&lt;/div&gt;
&lt;div class=<span class="text-warning">&quot;form-group&quot;</span>&gt;
  &lt;label class=<span class="text-warning">&quot;col-sm-2 control-label&quot;</span>&gt;Disabled&lt;/label&gt;
  &lt;div class=<span class="text-warning">&quot;col-sm-6&quot;</span>&gt;
    &lt;input type=<span class="text-warning">&quot;text&quot;</span> class=<span class="text-warning">&quot;form-control&quot;</span> disabled placeholder=<span class="text-warning">&quot;Disabled&quot;</span>&gt;
  &lt;/div&gt;
&lt;/div&gt;
&lt;div class=<span class="text-warning">&quot;form-group&quot;</span>&gt;
  &lt;label class=<span class="text-warning">&quot;col-sm-2 control-label&quot;</span>&gt;Select&lt;/label&gt;
  &lt;div class=<span class="text-warning">&quot;col-sm-6&quot;</span>&gt;
    &lt;select class=<span class="text-warning">&quot;form-control&quot;</span>&gt;
      &lt;option value=<span class="text-warning">&quot;1&quot;</span>&gt;Item 1&lt;/option&gt;
      &lt;option value=<span class="text-warning">&quot;2&quot;</span>&gt;Item 2&lt;/option&gt;
      &lt;option value=<span class="text-warning">&quot;3&quot;</span>&gt;Item 3&lt;/option&gt;
    &lt;/select&gt;
  &lt;/div&gt;
&lt;/div&gt;
&lt;div class=<span class="text-warning">&quot;form-group&quot;</span>&gt;
  &lt;label class=<span class="text-warning">&quot;col-sm-2 control-label&quot;</span>&gt;Multiple Select&lt;/label&gt;
  &lt;div class=<span class="text-warning">&quot;col-sm-6&quot;</span>&gt;
    &lt;select class=<span class="text-warning">&quot;form-control&quot;</span> multiple&gt;
      &lt;option value=<span class="text-warning">&quot;1&quot;</span>&gt;Item 1&lt;/option&gt;
      &lt;option value=<span class="text-warning">&quot;2&quot;</span>&gt;Item 2&lt;/option&gt;
      &lt;option value=<span class="text-warning">&quot;3&quot;</span>&gt;Item 3&lt;/option&gt;
    &lt;/select&gt;
  &lt;/div&gt;
&lt;/div&gt;
&lt;div class=<span class="text-warning">&quot;form-group&quot;</span>&gt;
  &lt;label class=<span class="text-warning">&quot;col-sm-2 control-label&quot;</span>&gt;Textarea&lt;/label&gt;
  &lt;div class=<span class="text-warning">&quot;col-sm-6&quot;</span>&gt;
    &lt;textarea class=<span class="text-warning">&quot;form-control&quot;</span>&gt;&lt;/textarea&gt;
  &lt;/div&gt;
&lt;/div&gt;
&lt;div class=<span class="text-warning">&quot;form-group&quot;</span>&gt;
  &lt;label class=<span class="text-warning">&quot;col-sm-2 control-label&quot;</span>&gt;Static&lt;/label&gt;
  &lt;div class=<span class="text-warning">&quot;col-sm-6&quot;</span>&gt;
    &lt;div class=<span class="text-warning">&quot;text-muted form-control-static&quot;</span>&gt;Static content&lt;/div&gt;
  &lt;/div&gt;
&lt;/div&gt;
&lt;div class=<span class="text-warning">&quot;form-group&quot;</span>&gt;
  &lt;div class=<span class="text-warning">&quot;col-sm-offset-2 col-sm-10&quot;</span>&gt;
    &lt;div class=<span class="text-warning">&quot;checkbox-inline&quot;</span>&gt;
      &lt;label&gt;&lt;input type=<span class="text-warning">&quot;checkbox&quot;</span>&gt;Checkbox&lt;/label&gt;
    &lt;/div&gt;
    &lt;div class=<span class="text-warning">&quot;checkbox-inline&quot;</span>&gt;
      &lt;label&gt;&lt;input type=<span class="text-warning">&quot;checkbox&quot;</span> disabled&gt;Disabled Checkbox&lt;/label&gt;
    &lt;/div&gt;
  &lt;/div&gt;
&lt;/div&gt;
&lt;div class=<span class="text-warning">&quot;form-group&quot;</span>&gt;
  &lt;div class=<span class="text-warning">&quot;col-sm-offset-2 col-sm-10&quot;</span>&gt;
    &lt;div class=<span class="text-warning">&quot;radio-inline&quot;</span>&gt;
      &lt;label&gt;&lt;input type=<span class="text-warning">&quot;radio&quot;</span>&gt;Radio&lt;/label&gt;
    &lt;/div&gt;
    &lt;div class=<span class="text-warning">&quot;radio-inline&quot;</span>&gt;
      &lt;label&gt;&lt;input type=<span class="text-warning">&quot;radio&quot;</span> disabled&gt;Disabled Radio&lt;/label&gt;
    &lt;/div&gt;
  &lt;/div&gt;
&lt;/div&gt;
&lt;div class=<span class="text-warning">&quot;form-group&quot;</span>&gt;
  &lt;div class=<span class="text-warning">&quot;col-sm-offset-2 col-sm-10&quot;</span>&gt;
    &lt;button class=<span class="text-warning">&quot;btn btn-primary&quot;</span>&gt;OK&lt;/button&gt; &lt;button class=<span class="text-warning">&quot;btn btn-default&quot;</span>&gt;Cancel&lt;/button&gt;
  &lt;/div&gt;
&lt;/div&gt;
&lt;/form&gt;

&lt;script src=<span class="text-warning">&quot;<?php echo $ProjectCDNHost;?>/js/jquery.js&quot;</span>&gt;&lt;/script&gt;
&lt;script src=<span class="text-warning">&quot;<?php echo $ProjectCDNHost;?>/select2/select2.js&quot;</span>&gt;&lt;/script&gt;
&lt;script&gt;
$(<span class="text-info">function</span>(){
  $(<span class="text-success">&quot;select&quot;</span>).select2({
    placeholder: &quot;Select&quot;
  });
});
&lt;/script&gt;</pre>
					</div>
				</div>

				<div class="panel panel-default">
					<div class="panel-heading">
						<div class="panel-title">Inline Form</div>
					</div>
					<div class="panel-body">
						<h5><code>form-inline</code></h5>
		<form class="form-inline">
		<div class="form-group">
			<label class="sr-only" for="Email Address">Email Address</label>
			<input type="email" class="form-control" placeholder="Email Address">
		</div>
		<div class="form-group">
			<label class="sr-only" for="Password">Password</label>
			<input type="password" class="form-control" placeholder="Password">
		</div>
		<button class="btn btn-primary">Login</button>		
		</form>

		<pre class="well">&lt;form class=<span class="text-warning">&quot;form-inline&quot;</span>&gt;
&lt;div class=<span class="text-warning">&quot;form-group&quot;</span>&gt;
  &lt;label class=<span class="text-warning">&quot;sr-only&quot;</span> for=<span class="text-warning">&quot;Email Address&quot;</span>&gt;Email Address&lt;/label&gt;
  &lt;input type=<span class="text-warning">&quot;email&quot;</span> class=<span class="text-warning">&quot;form-control&quot;</span> placeholder=<span class="text-warning">&quot;Email Address&quot;</span>&gt;
&lt;/div&gt;
&lt;div class=<span class="text-warning">&quot;form-group&quot;</span>&gt;
  &lt;label class=<span class="text-warning">&quot;sr-only&quot;</span> for=<span class="text-warning">&quot;Password&quot;</span>&gt;Password&lt;/label&gt;
  &lt;input type=<span class="text-warning">&quot;password&quot;</span> class=<span class="text-warning">&quot;form-control&quot;</span> placeholder=<span class="text-warning">&quot;Password&quot;</span>&gt;
&lt;/div&gt;
&lt;button class=<span class="text-warning">&quot;btn btn-primary&quot;</span>&gt;Login&lt;/button&gt;
&lt;/form&gt;</pre>
					</div>
				</div>
				
				<div class="panel panel-default">
					<div class="panel-heading">
						<div class="panel-title">Input Group</div>
					</div>
					<div class="panel-body">
						<h5><code>input-group</code></h5>
						<div class="row clearfix">
							<div class="col-lg-5">
								<div class="input-group">
									<input type="text" placeholder="Search" class="form-control">
									<span class="input-group-btn"><a type="button" class="btn btn-info"><span class="icon-search"></span></a></span>
								</div>
							</div>
						</div><pre class="well">&lt;div class=<span class="text-warning">&quot;input-group&quot;</span>&gt;
  &lt;input type=<span class="text-warning">&quot;text&quot;</span> placeholder=<span class="text-warning">&quot;Search&quot;</span> class=<span class="text-warning">&quot;form-control&quot;</span>&gt;
  &lt;span class=<span class="text-warning">&quot;input-group-btn&quot;</span>&gt;
    &lt;a type=<span class="text-warning">&quot;button&quot;</span> class=<span class="text-warning">&quot;btn btn-info&quot;</span>&gt;
      &lt;span class=<span class="text-warning">&quot;icon-search&quot;</span>&gt;&lt;/span&gt;
    &lt;/a&gt;
  &lt;/span&gt;
&lt;/div&gt;</pre>
						<div class="row clearfix">
							<div class="col-lg-5">
								<div class="input-group">
									<input type="text" class="form-control">
									<div class="input-group-btn">
									<button type="button" class="btn btn-primary">Search</button>
									<button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown"><span class="caret"></span></button>
									<ul class="dropdown-menu pull-right">
										<li><a href="javascript:;">Save</a></li>
										<li><a href="javascript:;">Forward</a></li>
										<li class="divider"></li>
										<li><a href="javascript:;">Remove</a></li>
									</ul>
									</div>
								</div>
							</div>
						</div><pre class="well">&lt;div class=<span class="text-warning">&quot;input-group&quot;</span>&gt;
  &lt;input type=<span class="text-warning">&quot;text&quot;</span> class=<span class="text-warning">&quot;form-control&quot;</span>&gt;
    &lt;div class=<span class="text-warning">&quot;input-group-btn&quot;</span>&gt;
      &lt;button type=<span class="text-warning">&quot;button&quot;</span> class=<span class="text-warning">&quot;btn btn-primary&quot;</span>&gt;Search&lt;/button&gt;
      &lt;button type=<span class="text-warning">&quot;button&quot;</span> class=<span class="text-warning">&quot;btn btn-primary dropdown-toggle&quot;</span> data-toggle=<span class="text-warning">&quot;dropdown&quot;</span>&gt;
        &lt;span class=<span class="text-warning">&quot;caret&quot;</span>&gt;&lt;/span&gt;
      &lt;/button&gt;
      &lt;ul class=<span class="text-warning">&quot;dropdown-menu pull-right&quot;</span>&gt;
        &lt;li&gt;&lt;a href=<span class="text-warning">&quot;javascript:;&quot;</span>&gt;Save&lt;/a&gt;&lt;/li&gt;
        &lt;li&gt;&lt;a href=<span class="text-warning">&quot;javascript:;&quot;</span>&gt;Forward&lt;/a&gt;&lt;/li&gt;
        &lt;li class=<span class="text-warning">&quot;divider&quot;</span>&gt;&lt;/li&gt;
        &lt;li&gt;&lt;a href=<span class="text-warning">&quot;javascript:;&quot;</span>&gt;Remove&lt;/a&gt;&lt;/li&gt;
      &lt;/ul&gt;
  &lt;/div&gt;
&lt;/div&gt;</pre>
					</div>
				</div>
				<!--// Tooltips & Popover //-->
				<a name="tooltips" id="tooltips">&nbsp;</a>
				<h3 class="sub-title">Tooltips / Popover</h3>
				<div class="panel panel-default">
					<div class="panel-heading">
						<div class="panel-title">Tooltips</div>
					</div>
					<div class="panel-body">
						<button role="button" class="btn btn-primary" id="tooltip" data-trigger="hover" data-placement="right" data-toggle="tooltip" data-original-title="Hi there!" data-delay="5">Point me</button>
						<pre class="well">&lt;button role=<span class="text-warning">&quot;button&quot;</span> class=<span class="text-warning">&quot;btn btn-primary&quot;</span> id=<span class="text-warning">&quot;tooltip&quot;</span> data-trigger=<span class="text-warning">&quot;hover&quot;</span> data-placement=<span class="text-warning">&quot;right&quot;</span> data-toggle=<span class="text-warning">&quot;tooltip&quot;</span> data-original-title=<span class="text-warning">&quot;Hi there!&quot;</span> data-delay=<span class="text-warning">&quot;5&quot;</span>&gt;
  Point me
&lt;/button&gt;

$(<span class="text-info">function</span>(){
  $(<span class="text-success">&quot;#tooltip&quot;</span>).tooltip();
})</pre>
					</div>
				</div>
				<div class="panel panel-default">
					<div class="panel-heading">
						<div class="panel-title">Popover</div>
					</div>
					<div class="panel-body">
						<button role="button" class="btn btn-primary" id="popover" data-trigger="hover" data-placement="right" data-original-title="This is popover" data-content="Hi there!" data-delay="5">Point me</button>
						<pre class="well">&lt;button role=<span class="text-warning">&quot;button&quot;</span> class=<span class="text-warning">&quot;btn btn-primary&quot;</span> id=<span class="text-warning">&quot;popover&quot;</span> data-trigger=<span class="text-warning">&quot;hover&quot;</span> data-placement=<span class="text-warning">&quot;right&quot;</span> data-original-title=<span class="text-warning">&quot;This is popover&quot;</span> data-content=<span class="text-warning">&quot;Hi there!&quot;</span> data-delay=<span class="text-warning">&quot;5&quot;</span>&gt;
  Point me
&lt;/button&gt;

$(<span class="text-info">function</span>(){
  $(<span class="text-success">&quot;#popover&quot;</span>).popover();
})</pre>
						<p>HTML formating inside popover.</p>
						<button role="button" class="btn btn-primary" data-trigger="click" data-placement="right" data-toggle="popover" data-html-content="#popover-html">Hit me</button>
						<div id="popover-html" class="hide">
							<div class="popover-heading">HTML Styling Support</div>
							<div class="popover-body">
								<p>Support <span class="text-info"><strong>complex</strong></span> content</p>
								<div class="input-group">
									<input type="text" class="form-control">
									<span class="input-group-btn">
										<a type="button" class="btn btn-info">OK</a>
									</span>
								</div>
							</div>
						</div>
						<pre class="well">&lt;button role=<span class="text-danger">&quot;button&quot;</span> class=<span class="text-danger">&quot;btn btn-primary&quot;</span> data-trigger=<span class="text-danger">&quot;click&quot;</span> data-placement=<span class="text-danger">&quot;right&quot;</span> data-toggle=<span class="text-danger">&quot;popover&quot;</span> data-html-content=<span class="text-danger">&quot;#popover-html&quot;</span>&gt;Hit me&lt;/button&gt;
&lt;div id=<span class="text-danger">&quot;popover-html&quot;</span> class=<span class="text-danger">&quot;hide&quot;</span>&gt;
  &lt;div class=<span class="text-danger">&quot;popover-heading&quot;</span>&gt;HTML Styling Support&lt;/div&gt;
    &lt;div class=<span class="text-danger">&quot;popover-body&quot;</span>&gt;
      &lt;p&gt;Support &lt;span class=<span class="text-danger">&quot;text-info&quot;</span>&gt;&lt;strong&gt;complex&lt;/strong&gt;&lt;/span&gt; content&lt;/p&gt;
      &lt;div class=<span class="text-danger">&quot;input-group&quot;</span>&gt;
        &lt;input type=<span class="text-danger">&quot;text&quot;</span> class=<span class="text-danger">&quot;form-control&quot;</span>&gt;
        &lt;span class=<span class="text-danger">&quot;input-group-btn&quot;</span>&gt;
          &lt;a type=<span class="text-danger">&quot;button&quot;</span> class=<span class="text-danger">&quot;btn btn-info&quot;</span>&gt;OK&lt;/a&gt;
        &lt;/span&gt;
      &lt;/div&gt;
    &lt;/div&gt;
&lt;/div&gt;

$(<span class="text-info">function</span>(){
  $(<span class="text-success">"[data-toggle=popover]"</span>).popover({
    html: true,
    content: function(){
      var content = $(this).attr(<span class="text-success">"data-html-content"</span>);
      return $(content).children(<span class="text-success">".popover-body"</span>).html();
    },
    title: function(){
      var title = $(this).attr(<span class="text-success">"data-html-content"</span>);
      return $(title).children(<span class="text-success">".popover-heading"</span>).html();
    }
  });
})</pre>
					</div>
				</div>
				
				<!--// Panel //-->
				<a name="panel" id="panel">&nbsp;</a>
				<h3 class="sub-title">Panel</h3>
				<div class="panel">
					<div class="panel-body">
						<div class="row clearfix">				
							<div class="col-md-2 col-xs-6">
								<h5><code>panel-default</code></h5>
								<div class="panel panel-default">
									<div class="panel-heading">
										<h3 class="panel-title">Etsy mixtape wayfarers</h3>
									</div>
									<div class="panel-body">Ethical wes anderson tofu before they sold out mcsweeney's organic lomo retro fanny pack lo-fi farm-to-table readymade.</div>
								</div>
							</div>
							
							<div class="col-md-2 col-xs-6">
								<h5><code>panel-danger</code></h5>
								<div class="panel panel-danger">
									<div class="panel-heading">
										<h3 class="panel-title">Etsy mixtape wayfarers</h3>
									</div>
									<div class="panel-body">Ethical wes anderson tofu before they sold out mcsweeney's organic lomo retro fanny pack lo-fi farm-to-table readymade.</div>
								</div>
							</div>
							
							<div class="col-md-2 col-xs-6">
								<h5><code>panel-warning</code></h5>
								<div class="panel panel-warning">
									<div class="panel-heading">
										<h3 class="panel-title">Etsy mixtape wayfarers</h3>
									</div>
									<div class="panel-body">Ethical wes anderson tofu before they sold out mcsweeney's organic lomo retro fanny pack lo-fi farm-to-table readymade.</div>
								</div>
							</div>
							
							<div class="col-md-2 col-xs-6">
								<h5><code>panel-success</code></h5>
								<div class="panel panel-success">
									<div class="panel-heading">
										<h3 class="panel-title">Etsy mixtape wayfarers</h3>
									</div>
									<div class="panel-body">Ethical wes anderson tofu before they sold out mcsweeney's organic lomo retro fanny pack lo-fi farm-to-table readymade.</div>
								</div>
							</div>
						
							<div class="col-md-2 col-xs-6">
								<h5><code>panel-info</code></h5>
								<div class="panel panel-info">
									<div class="panel-heading">
										<h3 class="panel-title">Etsy mixtape wayfarers</h3>
									</div>
									<div class="panel-body">Ethical wes anderson tofu before they sold out mcsweeney's organic lomo retro fanny pack lo-fi farm-to-table readymade.</div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="panel panel-default">
					<div class="panel-heading">
						<div class="panel-title">Accordion Panels</div>
					</div>
					<div class="panel-body">
						<div class="panel-group" id="accordion">
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title"><a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">Group A</a></h4>
								</div>
								<div id="collapseOne" class="panel-collapse collapse">
									<div class="panel-body">
									Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
									</div>
								</div>
							</div>
							
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title"><a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">Group B</a></h4>
								</div>
								<div id="collapseTwo" class="panel-collapse collapse in">
									<div class="panel-body">
									Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
									</div>
								</div>
							</div>

							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title"><a data-toggle="collapse" data-parent="#accordion" href="#collapseThree">Group C</a></h4>
								</div>
								<div id="collapseThree" class="panel-collapse collapse">
									<div class="panel-body">
									Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<!--// List //-->
				<a name="list" id="list">&nbsp;</a>
				<h3 class="sub-title">List</h3>
				<div class="panel">
					<div class="panel-body">
						<div class="row clearfix">
							<div class="col-md-3">
								<div class="panel panel-default">
									<div class="list-group">
										<a href="javascript:;" class="list-group-item">Cras justo odio</a>
										<a href="javascript:;" class="list-group-item">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</a>
										<a href="javascript:;" class="list-group-item"><span class="badge">new</span>Morbi leo risus</a>
										<a href="javascript:;" class="list-group-item">Porta ac consectetur ac</a>
										<a href="javascript:;" class="list-group-item">Vestibulum at eros</a>
									</div>
								</div>
							</div>
						</div>
						<pre class="well">&lt;div class=<span class="text-warning">&quot;panel panel-default&quot;</span>&gt;
  &lt;div class=<span class="text-warning">&quot;list-group&quot;</span>&gt;
      &lt;a class=<span class="text-warning">&quot;list-group-item&quot;</span>&gt;Cras justo odio&lt;/a&gt;
      &lt;a class=<span class="text-warning">&quot;list-group-item&quot;</span>&gt;&lt;span class=<span class="text-warning">&quot;badge&quot;</span>&gt;new&lt;/span&gt;Morbi leo risus&lt;/a&gt;
  &lt;/div&gt;
&lt;/div&gt;</pre>
					</div>
				</div>
				
				<!--// Table //-->
				<a name="table" id="table">&nbsp;</a>
				<h3 class="sub-title">Table</h3>
				<div class="panel">
					<div class="panel-body">
						<h5><code>table</code></h5>
						<table class="table">
						<thead>
						<tr><th>Header</th><th>Header</th><th>Header</th><th>Header</th></tr>
						</thead>
						<tbody>
						<tr>
							<td>Looked up one of the more obscure Latin words</td><td>Consectetur, from a Lorem Ipsum passage</td><td>Lorem Ipsum comes from sections 1.10.32 and 1.10.33. The first line of Lorem Ipsum Lorem ipsum dolor sit amet, comes from a line in section 1.10.32.</td><td>de Finibus Bonorum et Malorum (The Extremes of Good and Evil) by Cicero</td>
						</tr>
						<tr>
							<td>Looked up one of the more obscure Latin words</td><td>Consectetur, from a Lorem Ipsum passage</td><td>Lorem Ipsum comes from sections 1.10.32 and 1.10.33. The first line of Lorem Ipsum Lorem ipsum dolor sit amet, comes from a line in section 1.10.32.</td><td>de Finibus Bonorum et Malorum (The Extremes of Good and Evil) by Cicero</td>
						</tr>
						<tr>
							<td>Looked up one of the more obscure Latin words</td><td>Consectetur, from a Lorem Ipsum passage</td><td>Lorem Ipsum comes from sections 1.10.32 and 1.10.33. The first line of Lorem Ipsum Lorem ipsum dolor sit amet, comes from a line in section 1.10.32.</td><td>de Finibus Bonorum et Malorum (The Extremes of Good and Evil) by Cicero</td>
						</tr>
						</tbody>
						</table>
						<pre class="well">&lt;table class=<span class="text-warning">&quot;table&quot;</span>&gt;</pre>
					</div>
				</div>
				
				<div class="panel panel-default">
					<div class="panel-heading">
						<div class="panel-title">Stripped</div>
					</div>
					<div class="panel-body">
						<h5><code>table-striped</code></h5>
						<table class="table table-striped">
						<thead>
						<tr><th>Header</th><th>Header</th><th>Header</th><th>Header</th></tr>
						</thead>
						<tbody>
						<tr>
							<td>Looked up one of the more obscure Latin words</td><td>Consectetur, from a Lorem Ipsum passage</td><td>Lorem Ipsum comes from sections 1.10.32 and 1.10.33. The first line of Lorem Ipsum Lorem ipsum dolor sit amet, comes from a line in section 1.10.32.</td><td>de Finibus Bonorum et Malorum (The Extremes of Good and Evil) by Cicero</td>
						</tr>
						<tr>
							<td>Looked up one of the more obscure Latin words</td><td>Consectetur, from a Lorem Ipsum passage</td><td>Lorem Ipsum comes from sections 1.10.32 and 1.10.33. The first line of Lorem Ipsum Lorem ipsum dolor sit amet, comes from a line in section 1.10.32.</td><td>de Finibus Bonorum et Malorum (The Extremes of Good and Evil) by Cicero</td>
						</tr>
						<tr>
							<td>Looked up one of the more obscure Latin words</td><td>Consectetur, from a Lorem Ipsum passage</td><td>Lorem Ipsum comes from sections 1.10.32 and 1.10.33. The first line of Lorem Ipsum Lorem ipsum dolor sit amet, comes from a line in section 1.10.32.</td><td>de Finibus Bonorum et Malorum (The Extremes of Good and Evil) by Cicero</td>
						</tr>
						</tbody>
						</table>
						<pre class="well">&lt;table class=<span class="text-warning">&quot;table table-striped&quot;</span>&gt;</pre>
					</div>
				</div>
				
				<div class="panel panel-default">
					<div class="panel-heading">
						<div class="panel-title">Bordered and hover effect</div>
					</div>
					<div class="panel-body">
						<h5><code>table-hover</code></h5>
						<table class="table table-bordered table-hover">
						<thead>
						<tr><th>Header</th><th>Header</th><th>Header</th><th>Header</th></tr>
						</thead>
						<tbody>
						<tr>
							<td>Looked up one of the more obscure Latin words</td><td>Consectetur, from a Lorem Ipsum passage</td><td>Lorem Ipsum comes from sections 1.10.32 and 1.10.33. The first line of Lorem Ipsum Lorem ipsum dolor sit amet, comes from a line in section 1.10.32.</td><td>de Finibus Bonorum et Malorum (The Extremes of Good and Evil) by Cicero</td>
						</tr>
						<tr>
							<td>Looked up one of the more obscure Latin words</td><td>Consectetur, from a Lorem Ipsum passage</td><td>Lorem Ipsum comes from sections 1.10.32 and 1.10.33. The first line of Lorem Ipsum Lorem ipsum dolor sit amet, comes from a line in section 1.10.32.</td><td>de Finibus Bonorum et Malorum (The Extremes of Good and Evil) by Cicero</td>
						</tr>
						<tr>
							<td>Looked up one of the more obscure Latin words</td><td>Consectetur, from a Lorem Ipsum passage</td><td>Lorem Ipsum comes from sections 1.10.32 and 1.10.33. The first line of Lorem Ipsum Lorem ipsum dolor sit amet, comes from a line in section 1.10.32.</td><td>de Finibus Bonorum et Malorum (The Extremes of Good and Evil) by Cicero</td>
						</tr>
						</tbody>
						</table>
						<pre class="well">&lt;table class=<span class="text-warning">&quot;table table-bordered table-hover&quot;</span>&gt;</pre>
					</div>
				</div>
				
				<!--// Modal //-->
				<a name="modal" id="modal">&nbsp;</a>
				<h3 class="sub-title">Modal</h3>
				<div class="panel">
					<div class="panel-body">
						<button class="btn btn-info" data-toggle="modal" data-target="#myModal">Open modal</button>
												
						<div class="modal fade" tabindex="-1" id="myModal" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
							<div class="modal-dialog sample-dialog">
								<div class="modal-content">
									<div class="modal-header">
										<button type="button" class="close" data-dismiss="modal" aria-hidden="true" title="Close"></button>
										<h2 class="modal-title">Modal Title</h2>
									</div>
									<div class="modal-body">
										<p>Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text.</p>
									</div>
									<div class="modal-footer">
										<button type="button" class="btn btn-primary" data-dismiss="modal" aria-hidden="true">Done</button>
									</div>
								</div>
							</div>
						</div>

						<pre class="well"><span class="text-success">&lt;-- button to triggle modal --&gt;</span>
&lt;button type=<span class="text-warning">&quot;button&quot;</span> class=<span class="text-warning">&quot;btn btn-info&quot;</span> data-toggle=<span class="text-warning">&quot;modal&quot;</span> data-target=<span class="text-warning">&quot;#modal&quot;</span>&gt;Open Modal&lt;/button&gt;

<span class="text-success">&lt;-- structure of modal --&gt;</span>
&lt;div class=<span class="text-warning">&quot;modal fade&quot;</span> id=<span class="text-warning">&quot;modal&quot;</span> role=<span class="text-warning">&quot;dialog&quot;</span> aria-labelledby=<span class="text-warning">&quot;myModalLabel&quot;</span> aria-hidden=<span class="text-warning">&quot;true&quot;</span>&gt;
  &lt;div class=<span class="text-warning">&quot;modal-dialog&quot;</span>&gt;
    &lt;div class=<span class="text-warning">&quot;modal-content&quot;</span>&gt;
      &lt;div class=<span class="text-warning">&quot;modal-header&quot;</span>&gt;
        &lt;button type=<span class="text-warning">&quot;button&quot;</span> class=<span class="text-warning">&quot;close&quot;</span> data-dismiss=<span class="text-warning">&quot;modal&quot;</span> aria-hidden=<span class="text-warning">&quot;true&quot;</span> title=<span class="text-warning">&quot;Close&quot;</span>&gt;&lt;/button&gt;
        &lt;h2 class=<span class="text-warning">&quot;modal-title&quot;</span>&gt;Modal Title&lt;/h2&gt;
      &lt;/div&gt;
      &lt;div class=<span class="text-warning">&quot;modal-body&quot;</span>&gt;content inside the model&lt;/div&gt;
      &lt;div class=<span class="text-warning">&quot;modal-footer&quot;</span>&gt;
        &lt;button type=<span class="text-warning">&quot;button&quot;</span> class=<span class="text-warning">&quot;btn btn-primary&quot;</span> data-dismiss=<span class="text-warning">&quot;modal&quot;</span> aria-hidden=<span class="text-warning">&quot;true&quot;</span>&gt;Done&lt;/button&gt;
      &lt;/div&gt;
    &lt;/div&gt;
  &lt;/div&gt;
&lt;/div&gt;</pre>
					</div>
				</div>
				
				<!--// Progress Bar //-->				
				<a name="progressbar" id="progressbar">&nbsp;</a>
				<h3 class="sub-title">Progress Bar</h3>
				<div class="panel">
					<div class="panel-body">
						<blockquote class="alert-warning" role="alert">
							Progress bars use CSS3 transitions and animations to achieve some of their effects. These features are not supported in Internet Explorer 9 and below or older versions of Firefox. Opera 12 does not support animations.
						</blockquote>
						<div class="progress">
							<div class="progress-bar" role="progress-bar" style="width:60%;">60%</div>
						</div>
						<pre class="well">&lt;div class=<span class="text-warning">&quot;progress&quot;</span>&gt;
  &lt;div class=<span class="text-warning">&quot;progress-bar&quot;</span> role=<span class="text-warning">&quot;progress-bar&quot;</span> style=<span class="text-warning">&quot;width:60%;&quot;</span>&gt;60%&lt;/div&gt;
&lt;/div&gt;</pre>
					</div>
				</div>

				<div class="panel panel-default">
					<div class="panel-heading">
						<div class="panel-title">Animated striped</div>
					</div>
					<div class="panel-body">
						<h5><code>active</code> <code>progress-striped</code></h5>
						<div class="progress progress-striped active">
							<div class="progress-bar" role="progress-bar" style="width:40%;">40%</div>
						</div>
						<pre class="well">&lt;div class=<span class="text-warning">&quot;progress progress-striped active&quot;</span>&gt;
  &lt;div class=<span class="text-warning">&quot;progress-bar&quot;</span> role=<span class="text-warning">&quot;progress-bar&quot;</span> style=<span class="text-warning">&quot;width:40%;&quot;</span>&gt;40%&lt;/div&gt;
&lt;/div&gt;</pre>
					</div>
				</div>

				<!--// Alert Box //-->
				<a name="alertbox" id="alertbox">&nbsp;</a>
				<h3 class="sub-title">Alert Box</h3>
				<div class="panel">
					<div class="panel-body">
						<div class="row clearfix">
							<div class="col-md-6">
								<h5><code>alert-success</code></h5>
								<div class="alert alert-success">
									<h1>Success</h1>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
									<a href="#" class="btn btn-alert">OK</a>
								</div>
							</div>
							<div class="col-md-6">
								<h5><code>alert-warning</code></h5>
								<div class="alert alert-warning">
									<h1>Warning</h1>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
									<a href="#" class="btn btn-alert">OK</a>
								</div>
							</div>
						</div>
						<div class="row clearfix">
							<div class="col-md-6">
								<h5><code>alert-info</code></h5>
								<div class="alert alert-info">
									<h1>Info</h1>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
									<a href="#" class="btn btn-alert">OK</a>
								</div>
							</div>
							<div class="col-md-6">
								<h5><code>alert-danger</code></h5>
								<div class="alert alert-danger">
									<h1>Danger</h1>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
									<a href="#" class="btn btn-alert">OK</a>
								</div>
							</div>
						</div>
						<pre class="well">&lt;div class=<span class="text-warning">&quot;alert alert-success&quot;</span>&gt;
  &lt;h2&gt;Success&lt;/h2&gt;
  &lt;p&gt;Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.&lt;/p&gt;
  &lt;a href=<span class="text-warning">&quot;#&quot;</span> class=<span class="text-warning">&quot;btn&quot;</span>&gt;OK&lt;/a&gt;
&lt;/div&gt;</pre>
					</div>
				</div>
				<div class="panel panel-default">
					<div class="panel-heading">
						<div class="panel-title">Dismissible</div>
					</div>
					<div class="panel-body">
						<div class="alert alert-success alert-dismissible">
							<button type="button" class="close" data-dismiss="alert">&times;</button>
							Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
						</div>
						<pre class="well">&lt;div class=<span class="text-warning">&quot;alert alert-success alert-dismissible&quot;</span>&gt;
  &lt;button type=<span class="text-warning">&quot;button&quot;</span> class=<span class="text-warning">&quot;close&quot;</span> data-dismiss=<span class="text-warning">&quot;alert&quot;</span>&gt;&amp;times;&lt;/button&gt;
  Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
&lt;/div&gt;</pre>
					</div>
				</div>
				
				<!--// Label & Badge //-->
				<a name="label" id="label">&nbsp;</a>
				<h3 class="sub-title">Label / Badges</h3>
				<div class="panel panel-default">
					<div class="panel-heading">
						<div class="panel-title">Label</div>
					</div>
					<div class="panel-body">
						<div class="row clearfix">
							<div class="col-md-2 col-xs-6">
								<h5><code>label-primary</code></h5>
								<span class="label label-primary">Primary</span>
							</div>

							<div class="col-md-2 col-xs-6">
								<h5><code>label-success</code></h5>
								<span class="label label-success">Success</span>
							</div>

							<div class="col-md-2 col-xs-6">
								<h5><code>label-warning</code></h5>
								<span class="label label-warning">Warning</span>
							</div>

							<div class="col-md-2 col-xs-6">
								<h5><code>label-info</code></h5>
								<span class="label label-info">Info</span>
							</div>

							<div class="col-md-2 col-xs-6">
								<h5><code>label-danger</code></h5>
								<span class="label label-danger">Danger</span>
							</div>
							
							<div class="col-md-2 col-xs-6">
								<h5><code>label-classifieds</code></h5>
								<span class="label label-classifieds">Classifieds</span>
							</div>
						</div>
						<pre class="well">&lt;span class=<span class="text-warning">&quot;label label-success&quot;</span>&gt;&lt;/span&gt;</pre>
					</div>
				</div>
				
				<div class="panel panel-default">
					<div class="panel-heading">
						<div class="panel-title">Badge</div>
					</div>
					<div class="panel-body">
						<div class="row clearfix">
							<div class="col-md-2 col-xs-6">
								<h5><code>badge</code></h5>
								<span class="badge">badge</span>
							</div>
							<div class="col-md-2 col-xs-6">
								<h5><code>badge-success</code></h5>
								<span class="badge badge-success">Success</span>
							</div>
							<div class="col-md-2 col-xs-6">
								<h5><code>badge-warning</code></h5>
								<span class="badge badge-warning">Warning</span>
							</div>
							<div class="col-md-2 col-xs-6">
								<h5><code>badge-info</code></h5>
								<span class="badge badge-info">Info</span>
							</div>
							<div class="col-md-2 col-xs-6">
								<h5><code>badge-default</code></h5>
								<span class="badge badge-default">Default</span>
							</div>
						</div>
						<pre class="well">&lt;span class=<span class="text-warning">&quot;badge badge-success&quot;</span>&gt;&lt;/span&gt;</pre>
					</div>
				</div>

			</div>
		</div>
	</div>
</div>
<?php include ("includes/script.php");?>
<script src="http://dna.jsstatic.com/select2/select2.js"></script>
<script>
$(function(){
	// Tabs
	$("#myTab a:first").tab("show");

	// Tooltips & popover
	$("#tooltip").tooltip();
	$("#popover").popover();

	// HTML popover
	$("[data-toggle=popover]").popover({
		html: true,
		content: function(){
			var content = $(this).attr("data-html-content");
			return $(content).children(".popover-body").html();
		},
		title: function(){
			var title = $(this).attr("data-html-content");
			return $(title).children(".popover-heading").html();
		}
	});

	// Select2
	$("select").select2({
		placeholder: "Select"
	});
});
</script>
</body>
</html>