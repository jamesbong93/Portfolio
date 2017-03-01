<?php include("includes/config.php");?>
<!DOCTYPE html>
<html lang="en">
<head>
<title><?php echo $ProjectName?> - Organize</title>
<?php include("includes/meta.php");?>
</head>
<body>
<div id="wrap">
<?php
$para="ui->organize";
include("includes/navbar.php");
?>
<div class="container">
	<div class="panel page-header">
		<div class="panel-body">
			<h3>Organize</h3>
		</div>
	</div>

	<h4>List Group</h4>
	<div class="panel panel-clean card">
		<div class="panel-body">
		<h5><code>.list-group</code></h5>
		<ul class="list-group">
			<li class="list-group-item">Cras justo odio</li>
			<li class="list-group-item"><span class="badge">New</span>Dapibus ac facilisis in</li>
			<li class="list-group-item">Morbi leo risus</li>
			<li class="list-group-item">Porta ac consectetur ac</li>
			<li class="list-group-item">Vestibulum at eros</li>
		</ul>
		<pre class="well">&lt;ul class=<span class="text-warning">&quot;list-group&quot;</span>&gt;
  &lt;li class=<span class="text-warning">&quot;list-group-item&quot;</span>&gt;...&lt;/li&gt;
  &lt;li class=<span class="text-warning">&quot;list-group-item&quot;</span>&gt;&lt;span class=<span class="text-warning">&quot;badge&quot;</span>&gt;New&lt;/span&gt;...&lt;/li&gt;
  &lt;li class=<span class="text-warning">&quot;list-group-item&quot;</span>&gt;...&lt;/li&gt;
&lt;/ul&gt;</pre>
		
		<h5><code>a.list-group-item</code></h5>
		<div class="list-group">
			<a href="javascript:;" class="list-group-item">Cras justo odio</a>
			<a href="javascript:;" class="list-group-item">
				<h4 class="list-group-item-header">List group header</h4>
				<p class="list-group-item-text">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
			</a>
			<a href="javascript:;" class="list-group-item active"><span class="badge">5</span>Morbi leo risus</a>
			<a href="javascript:;" class="list-group-item">Porta ac consectetur ac</a>
			<a href="javascript:;" class="list-group-item">Vestibulum at eros</a>
		</div>
		<pre class="well">&lt;div class=<span class="text-warning">&quot;list-group&quot;</span>&gt;
  &lt;a href=<span class="text-warning">&quot;javascript:;&quot;</span> class=<span class="text-warning">&quot;list-group-item&quot;</span>&gt;
    &lt;h4 class=<span class="text-warning">&quot;list-group-item-header&quot;</span>&gt;List group header&lt;/h4&gt;
    &lt;p class=<span class="text-warning">&quot;list-group-item-text&quot;</span>&gt;...&lt;/p&gt;
  &lt;/a&gt;
  &lt;a href=<span class="text-warning">&quot;javascript:;&quot;</span> class=<span class="text-warning">&quot;list-group-item active&quot;</span>&gt;&lt;span class=<span class="text-warning">&quot;badge&quot;</span>&gt;5&lt;/span&gt;Morbi leo risus&lt;/a&gt;
&lt;/div&gt;</pre>

		</div>
	</div>

	<h4>Table</h4>
	<div class="panel panel-clean card">
		<div class="panel-body">
		<h4>Default</h4>
		<h5><code>.table</code></h5>
		<table class="table">
		<thead>
		<tr>
			<th>Richard</th><th>McClintock</th><th>Latin professor</th><th>Hampden-Sydney</th>
		</tr>
		</thead>
		<tbody>
		<tr>
			<td>Looked up one of the more obscure Latin words</td><td>Consectetur, from a Lorem Ipsum passage</td><td>Lorem Ipsum comes from sections 1.10.32 and 1.10.33. The first line of Lorem Ipsum "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.</td><td>"de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero</td>
		</tr>
		<tr>
			<td>Looked up one of the more obscure Latin words</td><td>Consectetur, from a Lorem Ipsum passage</td><td>Lorem Ipsum comes from sections 1.10.32 and 1.10.33. The first line of Lorem Ipsum "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.</td><td>"de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero</td>
		</tr>
		<tr>
			<td>Looked up one of the more obscure Latin words</td><td>Consectetur, from a Lorem Ipsum passage</td><td>Lorem Ipsum comes from sections 1.10.32 and 1.10.33. The first line of Lorem Ipsum "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.</td><td>"de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero</td>
		</tr>
		</tbody>
		</table>

		<pre class="well">&lt;table class=<span class="text-warning">&quot;table&quot;</span>&gt;</pre>
		
		<h4>Stripped</h4>
		<h5><code>.table &plus; .table-striped</code></h5>
		<table class="table table-striped">
		<thead>
		<tr>
			<th>Richard</th><th>McClintock</th><th>Latin professor</th><th>Hampden-Sydney</th>
		</tr>
		</thead>
		<tbody>
		<tr>
			<td>Looked up one of the more obscure Latin words</td><td>Consectetur, from a Lorem Ipsum passage</td><td>Lorem Ipsum comes from sections 1.10.32 and 1.10.33. The first line of Lorem Ipsum "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.</td><td>"de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero</td>
		</tr>
		<tr>
			<td>Looked up one of the more obscure Latin words</td><td>Consectetur, from a Lorem Ipsum passage</td><td>Lorem Ipsum comes from sections 1.10.32 and 1.10.33. The first line of Lorem Ipsum "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.</td><td>"de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero</td>
		</tr>
		<tr>
			<td>Looked up one of the more obscure Latin words</td><td>Consectetur, from a Lorem Ipsum passage</td><td>Lorem Ipsum comes from sections 1.10.32 and 1.10.33. The first line of Lorem Ipsum "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.</td><td>"de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero</td>
		</tr>
		</tbody>
		</table>
		
		<pre class="well">&lt;table class=<span class="text-warning">&quot;table table-striped&quot;</span>&gt;</pre>

		<h4>Bordered and hover effect</h4>
		<h5><code>.table-bordered &plus; .table-hover</code></h5>
		<table class="table table-bordered table-hover">
		<thead>
		<tr>
			<th>Richard</th><th>McClintock</th><th>Latin professor</th><th>Hampden-Sydney</th>
		</tr>
		</thead>
		<tbody>
		<tr>
			<td>Looked up one of the more obscure Latin words</td><td>Consectetur, from a Lorem Ipsum passage</td><td>Lorem Ipsum comes from sections 1.10.32 and 1.10.33. The first line of Lorem Ipsum "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.</td><td>"de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero</td>
		</tr>
		<tr>
			<td class="success">Looked up one of the more obscure Latin words</td><td>Consectetur, from a Lorem Ipsum passage</td><td class="danger">Lorem Ipsum comes from sections 1.10.32 and 1.10.33. The first line of Lorem Ipsum "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.</td><td>"de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero</td>
		</tr>
		<tr>
			<td>Looked up one of the more obscure Latin words</td><td>Consectetur, from a Lorem Ipsum passage</td><td>Lorem Ipsum comes from sections 1.10.32 and 1.10.33. The first line of Lorem Ipsum "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.</td><td class="warning">"de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero</td>
		</tr>
		</tbody>
		</table>

		<pre class="well">&lt;table class=<span class="text-warning">&quot;table-bordered table-hover&quot;</span>&gt;</pre>
		
		<h4>With contextual background color</h4>
		<table class="table">
		<thead>
		<tr>
			<th><h5><code>.success</code></h5></th><th><h5><code>.danger</code></h5></th><th><h5><code>.warning</code></h5></th><th><h5><code>.info</code></h5></th>
		</tr>
		</thead>
		<tbody>
		<tr>
			<td class="success">Looked up one of the more obscure Latin words</td><td class="danger">Consectetur, from a Lorem Ipsum passage</td><td class="warning">Lorem Ipsum comes from sections 1.10.32 and 1.10.33. The first line of Lorem Ipsum "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.</td><td class="info">Consectetur, from a Lorem Ipsum passage</td>
		</tr>
		</table>

		<pre class="well">&lt;td class=<span class="text-warning">&quot;success&quot;</span>&gt;...&lt;/td&gt;</pre>
		</div>
	</div>

	<a name="panel"></a>
	<h4>Panels</h4>
	<div class="panel panel-clean card">
		<div class="panel-body">
			<div class="row">				
				<div class="col-md-4">
					<h5><code>.panel-default</code></h5>
					<div class="panel panel-default">
						<div class="panel-heading">
							<h3 class="panel-title">Title</h3>
						</div>
						<div class="panel-body">Some Content</div>
					</div>
				</div>
				
				<div class="col-md-4">
					<h5><code>.panel-success</code></h5>
					<div class="panel panel-success">
						<div class="panel-heading">
							<h3 class="panel-title">Title</h3>
						</div>
						<div class="panel-body">Some Content</div>
					</div>
				</div>
				
				<div class="col-md-4">
					<h5><code>.panel-warning</code></h5>
					<div class="panel panel-warning">
						<div class="panel-heading">
							<h3 class="panel-title">Title</h3>
						</div>
						<div class="panel-body">Some Content</div>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-md-4">
					<h5><code>.panel-info</code></h5>
					<div class="panel panel-info">
						<div class="panel-heading">
							<h3 class="panel-title">Title</h3>
						</div>
						<div class="panel-body">Some Content</div>
					</div>
				</div>

				<div class="col-md-4">
					<h5><code>.panel-danger</code></h5>
					<div class="panel panel-danger">
						<div class="panel-heading">
							<h3 class="panel-title">Title</h3>
						</div>
						<div class="panel-body">Some Content</div>
					</div>
				</div>
				
				<div class="col-md-4">
					&nbsp;
				</div>
			</div>

			<pre class="well">&lt;div class=<span class="text-warning">&quot;panel panel-default&quot;</span>&gt;
  &lt;div class=<span class="text-warning">&quot;panel-heading&quot;</span>&gt;
     &lt;h3 class=<span class="text-warning">&quot;panel-title&quot;</span>&gt;Title&lt;/h3&gt;
  &lt;/div&gt;
  &lt;div class=<span class="text-warning">&quot;panel-body&quot;</span>&gt;Some Content&lt;/div&gt;
&lt;/div&gt;</pre>

			<div class="panel panel-default">
				<div class="panel-heading">
				<h3 class="panel-title">Table inside panel</h3>
				</div>
				<div class="panel-body">
					<table class="table">
					<thead>
					<tr><th>#</th><th>First Name</th><th>Last Name</th><th>Username</th></tr>
					</thead>
					<tbody>
					<tr><td>1</td><td>Mark</td><td>Otto</td><td>@mdo</td></tr>
					<tr><td>2</td><td>Jacob</td><td>Thornton</td><td>@fat</td></tr>
					<tr><td>3</td><td>Larry</td><td>the Bird</td><td>@twitter</td></tr>
					</tbody>
					</table>
				</div>
			</div>
			
			<pre class="well">&lt;div class=<span class="text-warning">&quot;panel panel-default&quot;</span>&gt;
  &lt;div class=<span class="text-warning">&quot;panel-heading&quot;</span>&gt;
    &lt;h3 class=<span class="text-warning">&quot;panel-title&quot;</span>&gt;Title&lt;/h3&gt;
  &lt;/div&gt;
  &lt;div class=<span class="text-warning">&quot;panel-body&quot;</span>&gt;
    &lt;table class=<span class="text-warning">&quot;table&quot;</span>&gt;
    &lt;thead&gt;
    &lt;tr&gt;&lt;th&gt;...&lt;/th&gt;&lt;/tr&gt;
    &lt;/thead&gt;
    &lt;tbody&gt;
    &lt;tr&gt;&lt;td&gt;...&lt;/td&gt;&lt;/tr&gt;
    &lt;/tbody&gt;
    &lt;/table&gt;
  &lt;/div&gt;
&lt;/div&gt;</pre>

			<div class="panel panel-info">
				<div class="panel-heading"><h3 class="panel-title">List group inside panel</h3></div>
				<div class="panel-body">Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.</div>
				<div class="list-group">
					<a href="javascript:;" class="list-group-item">Cras justo odio</a>
					<a href="javascript:;" class="list-group-item">
						<h4 class="list-group-item-header">List group header</h4>
						<p class="list-group-item-text">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
					</a>
					<a href="javascript:;" class="list-group-item"><span class="badge">55</span>Morbi leo risus</a>
					<a href="javascript:;" class="list-group-item">Porta ac consectetur ac</a>
					<a href="javascript:;" class="list-group-item">Vestibulum at eros</a>
				</div>
				<div class="panel-footer text-right"><span class="text-muted">panel footer</span></div>
			</div>
			
			<pre class="well">&lt;div class=<span class="text-warning">&quot;panel panel-info&quot;</span>&gt;
  &lt;div class=<span class="text-warning">&quot;panel-heading&quot;</span>&gt;
    &lt;h3 class=<span class="text-warning">&quot;panel-title&quot;</span>&gt;Title&lt;/h3&gt;
  &lt;/div&gt;
  &lt;div class=<span class="text-warning">&quot;panel-body&quot;</span>&gt;Some Content&lt;/div&gt;
  &lt;div class=<span class="text-warning">&quot;list-group&quot;</span>&gt;
      &lt;a href=<span class="text-warning">&quot;...&quot;</span> class=<span class="text-warning">&quot;list-group-item&quot;</span>&gt;Cras justo odio&lt;/a&gt;
  &lt;/div&gt;
  &lt;div class=<span class="text-warning">&quot;panel-footer text-right&quot;</span>&gt;&lt;span class=<span class="text-warning">&quot;text-muted&quot;</span>&gt;Footer&lt;/span&gt;&lt;/div&gt;
&lt;/div&gt;</pre>

		</div>
	</div>

	<h4>Collapse Panels</h4>
	<div class="panel panel-clean card">
		<div class="panel-body">
			<div class="panel-group" id="accordion">
				<div class="panel panel-default">
					<div class="panel-heading">
						<h4 class="panel-title"><span class="icon-angle-left"></span><a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">Group A</a></h4>
					</div>
					<div id="collapseOne" class="panel-collapse collapse">
						<div class="panel-body">
						Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
						</div>
					</div>
				</div>
				
				<div class="panel panel-default">
					<div class="panel-heading">
						<h4 class="panel-title"><span class="icon-angle-left"></span><a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">Group B</a></h4>
					</div>
					<div id="collapseTwo" class="panel-collapse collapse in">
						<div class="panel-body">
						Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
						</div>
					</div>
				</div>

				<div class="panel panel-default">
					<div class="panel-heading">
						<h4 class="panel-title"><span class="icon-angle-left"></span><a data-toggle="collapse" data-parent="#accordion" href="#collapseThree">Group C</a></h4>
					</div>
					<div id="collapseThree" class="panel-collapse collapse">
						<div class="panel-body">
						Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
						</div>
					</div>
				</div>
			</div>

			<pre class="well">&lt;div class=<span class="text-warning">&quot;panel-group&quot;</span> id=<span class="text-warning">&quot;accordion&quot;</span>&gt;
  &lt;div class=<span class="text-warning">&quot;panel panel-default&quot;</span>&gt;
    &lt;div class=<span class="text-warning">&quot;panel-heading&quot;</span>&gt;
      &lt;h4 class=<span class="text-warning">&quot;panel-title&quot;</span>&gt;
        &lt;span class=<span class="text-warning">&quot;icon-angle-left&quot;</span>&gt;&lt;/span&gt;
        &lt;a data-toggle=<span class="text-warning">&quot;collapse&quot;</span> data-parent=<span class="text-warning">&quot;#accordion&quot;</span> href=<span class="text-warning">&quot;#collapseOne&quot;</span>&gt;Title&lt;/a&gt;
      &lt;/h4&gt;
    &lt;/div&gt;
    &lt;div id=<span class="text-warning">&quot;collapseOne&quot;</span> class=<span class="text-warning">&quot;panel-collapse collapse&quot;</span>&gt;
      &lt;div class=<span class="text-warning">&quot;panel-body&quot;</span>&gt;Some content here&lt;/div&gt;
    &lt;/div&gt;
  &lt;/div&gt;
&lt;/div&gt;</pre>
		</div>
	</div>

	<h4>Well</h4>
	<div class="panel panel-clean card">
		<div class="panel-body">
		<h5><code>.well</code></h5>
			<div class="well">
			<blockquote>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo.</blockquote>
			</div>
			<pre class="well">&lt;div class=<span class="text-warning">&quot;well&quot;</span>&gt;
  &lt;blockquote&gt;...&lt;/blockquote&gt;
&lt;/div&gt;</pre>
		</div>
	</div>

</div>
</div>
<?php include("includes/footer.php");?>
</body>
</html>