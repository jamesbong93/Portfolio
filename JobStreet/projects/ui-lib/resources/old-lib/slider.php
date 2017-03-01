<?php include("includes/config.php");?>
<!DOCTYPE html>
<html lang="en">
<head>
<title><?php echo $ProjectName?> - Slider</title>
<?php include("includes/meta.php");?>
<link rel="stylesheet" type="text/css" href="plugin/slider/slider.css">
</head>
<body>
<div id="wrap">
<?php
$para="plugins->slider";
include("includes/navbar.php");
?>
<div class="container">
	<div class="panel page-header">
		<div class="panel-body">
			<h3>Slider</h3>
		</div>
	</div>

	<div class="panel panel-clean card">
		<div class="panel-body">
			<input id="slider" type="text">
			<span class="badge" id="sliderval" style="margin-left:20px;">5</span>
			<pre class="well">&lt;input id=<span class="text-warning">&quot;slider&quot;</span> type=<span class="text-warning">&quot;text&quot;</span>&gt;
&lt;span class=<span class="text-warning">&quot;badge&quot;</span> id=<span class="text-warning">&quot;sliderval&quot;</span>&gt;5&lt;/span&gt;

$(<span class="text-success">&quot;#slider&quot;</span>).slider({
  tooltip:<span class="text-warning">&quot;hide&quot;</span>
});
$(<span class="text-success">&quot;#slider&quot;</span>).on(<span class="text-success">&quot;slide&quot;</span>,<span class="text-info">function</span>(e){
  $(<span class="text-success">&quot;#sliderval&quot;</span>).text(e.value);
});</pre>
		<p>Download slider plugin</p>
		<p><a href="download.php?f=slider.zip" role="button" class="btn btn-info">Download</a></p>
		</div>
	</div>
	
	<h4>Slider with Range</h4>
	<div class="panel panel-clean card">
		<div class="panel-body">
			<input id="range-slider" type="text" data-slider-id="RangeSlider" data-slider-min="10" data-slider-max="1000" data-slider-step="5" data-slider-value="[220,560]">

			<pre class="well"><span class="text-info">#RangeSlider .slider-selection</span>{<span class="text-muted">background:</span>#ccc;}

&lt;input id=<span class="text-warning">&quot;range-slider&quot;</span> type=<span class="text-warning">&quot;text&quot;</span> data-slider-id=<span class="text-warning">&quot;RangeSlider&quot;</span> data-slider-min=<span class="text-warning">&quot;10&quot;</span> data-slider-max=<span class="text-warning">&quot;1000&quot;</span> data-slider-step=<span class="text-warning">&quot;5&quot;</span> data-slider-value=<span class="text-warning">&quot;[220,560]&quot;</span>&gt;

$(<span class="text-success">"#range-slider"</span>).slider();</pre>
		</div>
	</div>
	
	<h4>Vertical Slider</h4>
	<div class="panel panel-clean card">
		<div class="panel-body">
			<div class="col-md-3 col-sm-5">
				<input id="vertical-slider" type="text" data-slider-min="-10" data-slider-max="10" data-slider-step="1" data-slider-value="5" data-slider-orientation="vertical">
			</div>
			<div class="col-md-9 col-sm-7">
				<pre class="well">&lt;input id=<span class="text-warning">&quot;vertical-slider&quot;</span> type=<span class="text-warning">&quot;text&quot;</span> data-slider-min=<span class="text-warning">&quot;-10&quot;</span> data-slider-max=<span class="text-warning">&quot;10&quot;</span> data-slider-step=<span class="text-warning">&quot;1&quot;</span> data-slider-value=<span class="text-warning">&quot;5&quot;</span> data-slider-orientation=<span class="text-warning">&quot;vertical&quot;</span>&gt;
				
$(<span class="text-success">"#vertical-slider"</span>).slider({
  formater:<span class="text-info">function</span>(value){
    return <span class="text-warning">&quot;Current Value: &quot;</span>+value;
  },
  reversed:true,
  tooltip:<span class="text-warning">&quot;always&quot;</span>
});</pre>
			</div>
		</div>
	</div>
	
	<h4>Disabled and Enabled</h4>
	<div class="panel panel-clean card">
		<div class="panel-body">
			<input id="toggle-slider" type="text" data-slider-enabled="false" data-slider-tooltip="hide"> <input type="checkbox" id="slider-switch" style="margin-left:20px;"><span id="txt">Enabled</span>
			<pre class="well">&lt;input id=<span class="text-warning">&quot;toggle-slider&quot;</span> type=<span class="text-warning">&quot;text&quot;</span> data-slider-enabled=<span class="text-warning">&quot;false&quot;</span> data-slider-tooltip=<span class="text-warning">&quot;hide&quot;</span>&gt; &lt;input type=<span class="text-warning">&quot;checkbox&quot;</span> id=<span class="text-warning">&quot;slider-switch&quot;</span>&gt;&lt;span id=<span class="text-warning">&quot;txt&quot;</span>&gt;Enabled&lt;/span&gt;

$(<span class="text-success">&quot;#toggle-slider&quot;</span>).slider();
$(<span class="text-success">&quot;#slider-switch&quot;</span>).click(<span class="text-info">function</span>(){
  if(this.checked){
    $(<span class="text-success">&quot;#toggle-slider&quot;</span>).slider(<span class="text-success">&quot;enable&quot;</span>);
  }
  else{
    $(<span class="text-success">&quot;#toggle-slider&quot;</span>).slider(<span class="text-success">&quot;disable&quot;</span>);
  }
});</pre>
		</div>
	</div>

</div>
</div>
<?php include("includes/footer.php");?>
<script src="plugin/slider/slider.js"></script>
<script src="js/modernizr.js"></script>
<script>
$("#slider").slider({
	tooltip:"hide"
});
$("#slider").on("slide",function(e){
	$("#sliderval").text(e.value);
});

$("#range-slider").slider();

$("#vertical-slider").slider({
	formater:function(value){
		return "Current Value: "+value;
	},
	reversed:true,
	tooltip:"always"
});

$("#toggle-slider").slider();
$("#slider-switch").click(function(){
	if(this.checked){
		$("#toggle-slider").slider("enable");
		$("#txt").css("color","green");
	}
	else{
		$("#toggle-slider").slider("disable");
		$("#txt").css("color","#000")
	}
});
</script>
</body>
</html>