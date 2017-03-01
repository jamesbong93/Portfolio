<?php include("includes/config.php");?>
<!DOCTYPE html>
<html lang="en">
<head>
<title><?php echo $ProjectName?> - Typography</title>
<?php include("includes/meta.php");?>
</head>
<body>
<div id="wrap">
<?php
$para="typo";
include("includes/navbar.php");
?>
<div class="container">
	<div class="panel page-header">
		<div class="panel-body">
			<h3>Typography</h3>
		</div>
	</div>

	<h4>Normal Text</h4>
	<div class="panel panel-clean card">
		<div class="panel-body">
		<p>Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>
		<p>Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>
		<dl class="dl-horizontal">
			<dt>Font Family:</dt>
			<dd>Helvetica Neue, Helvetica, Arial, sans-serif</dd>
			<dt>Font Size:</dt>
			<dd>14px</dd>
		</dl>
		</div>
	</div>

	<h4>Headline</h4>
	<div class="panel panel-clean card">
		<div class="panel-body">		
			<h1>h1, .h1 - 36px</h1>
			<h2>h2, .h2 - 30px</h2>
			<h3>h3, .h3 - 24px</h3>
			<h4>h4, .h4 - 18px</h4>
			<h5>h5, .h5 - 14px</h5>
			<h6>h6, .h6 - 12px</h6>
		</div>
	</div>

	<h4>Page Header</h4>
	<div class="panel panel-clean card">
		<div class="panel-body">
		<h5><code>.page-header</code></h5>
		<h1 class="page-header">News Headline</h1>
		<pre class="well">&lt;h1 class=<span class="text-warning">&quot;page-header&quot;</span>&gt;News Headline&lt;/h1&gt;</pre>
		</div>
	</div>
	
	<h4>Lead Paragraph</h4>
	<div class="panel panel-clean card">
		<div class="panel-body">
		<code>.lead</code>
		<p class="lead">Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>
		<pre class="well">&lt;p class=<span class="text-warning">&quot;lead&quot;</span>&gt;Some Important Content Here&lt;/p&gt;</pre>
		</div>
	</div>

	<h4>Text Alignment</h4>
	<div class="panel panel-clean card">
		<div class="panel-body">
			<div class="text-left"><h5><code>.text-left</code></h5>Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</div>
			
			<pre class="well">&lt;p class=<span class="text-warning">&quot;text-left&quot;</span>&gt;...&lt;/p&gt;</pre>

			<div class="text-right"><h5><code>.text-right</code></h5>Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</div>
			
			<pre class="well">&lt;p class=<span class="text-warning">&quot;text-right&quot;</span>&gt;...&lt;/p&gt;</pre>

			<div class="text-center"><h5><code>.text-center</code></h5>Many desktop <abbr title="Publishing Packages">publishing packages</abbr> and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</div>
			
			<pre class="well">&lt;p class=<span class="text-warning">&quot;text-center&quot;</span>&gt;...&lt;/p&gt;</pre>
		</div>
	</div>
	
	<h4>Emphasis Classes</h4>
	<div class="panel panel-clean card">
		<div class="panel-body">
			<div class="text-muted"><h5><code>.text-muted</code></h5>Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</div>			

			<div class="text-success"><h5><code>.text-success</code></h5>Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</div>

			<div class="text-danger"><h5><code>.text-danger</code></h5>Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</div>

			<div class="text-info"><h5><code>.text-info</code></h5>Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</div>

			<div class="text-warning"><h5>.<code>text-warning</code></h5>Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</div>

			<pre class="well">&lt;p class=<span class="text-warning">&quot;text-info&quot;</span>&gt;...&lt;/p&gt;</pre>
		</div>
	</div>

	<h4>Block Quote</h4>
	<div class="panel panel-clean card">
		<div class="panel-body">
		<blockquote>
		<p>Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>
		<p>Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>
		<small>By Someone</small>
		</blockquote>
		<pre class="well">&lt;blockquote&gt;
  &lt;p&gt;...&lt;/p&gt;
  &lt;small&gt;By Someone&lt;/small&gt;
&lt;/blockquote&gt;</pre>
	
		<blockquote class="pull-right">
		<code>.pull-right</code>
		<p>Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>
		<p>Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>
		<small>By Someone</small>
		</blockquote>
		<pre class="well">&lt;blockquote class=<span class="text-warning">&quot;pull-right&quot;</span>&gt;
  &lt;p&gt;...&lt;/p&gt;
  &lt;small&gt;By Someone&lt;/small&gt;
&lt;/blockquote&gt;</pre>
		</div>
	</div>

	<h4>Description</h4>
	<div class="panel panel-clean card">
		<div class="panel-body">
		<dl>
			<dt>Many desktop publishing packages and web page</dt>
			<dd>Use Lorem Ipsum as their default model text</dd>
		</dl>

		<code>.dl-horizontal</code>
		<dl class="dl-horizontal">
			<dt>Item 1</dt>
			<dd>Description for item 1</dd>
			<dt>Longer text will be hidden</dt>
			<dd>Description for item 2</dd>
		</dl>
		<pre class="well">&lt;dl class=<span class="text-warning">&quot;dl-horizontal&quot;</span>&gt;
  &lt;dt&gt;...&lt;/dt&gt;
  &lt;dd&gt;...&lt;/dd&gt;
&lt;/dl&gt;</pre>
		</div>
	</div>

	<h4>List</h4>
	<div class="panel panel-clean card">
		<div class="panel-body">
		<h5><code>.list-unstyled</code></h5>
		<ul class="list-unstyled">
			<li>Contrary to popular belief, Lorem Ipsum is not simply random text</li>
			<li>It has roots in a piece of classical Latin literature from 45 BC
			<li>Making it over 2000 years old</li>
		</ul>
		<pre class="well">&lt;ul class=<span class="text-warning">&quot;list-unstyled&quot;</span>&gt;
  &lt;li&gt;...&lt;/li&gt;
&lt;/ul&gt;</pre>
		<blockquote class="important">This only applies to immediate children list items.</blockquote>
		
		<h5><code>.list-inline</code></h5>
		<ul class="list-inline">
			<li>Richard McClintock</li>
			<li>Looked up one of the more obscure Latin words</li>
			<li>This book is a treatise on the theory of ethics</li>
			<li>Very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.</li>
		</ul>
		<pre class="well">&lt;ul class=<span class="text-warning">&quot;list-inline&quot;</span>&gt;
  &lt;li&gt;...&lt;/li&gt;
&lt;/ul&gt;</pre>
		</div>
	</div>

	<h4>Code</h4>
	<div class="panel panel-clean card">
		<div class="panel-body">
		<code>Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy.</code>

		<pre class="well">&lt;code&gt;...&lt;/code&gt;</pre>
		</div>
	</div>

	<h4>Pre</h4>
	<div class="panel panel-clean card">
		<div class="panel-body">
		<pre>Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy.</pre>

		<pre class="well">&lt;pre&gt;...&lt;/pre&gt;</pre>
		</div>
	</div>

</div>
</div>
<?php include("includes/footer.php");?>
</body>
</html>