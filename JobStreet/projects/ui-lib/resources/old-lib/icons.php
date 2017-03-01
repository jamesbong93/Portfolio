<?php include("includes/config.php");?>
<!DOCTYPE html>
<html lang="en">
<head>
<title><?php echo $ProjectName?> - Icons</title>
<?php include("includes/meta.php");?>
</head>
<body>
<div id="wrap">
<?php
$para="icons";
include("includes/navbar.php");
?>
<div class="container">
	<div class="panel page-header">
		<div class="panel-body">
			<h3>Icons</h3>
		</div>
	</div>
	
	<div class="panel panel-clean card">
		<div class="panel-body">
			<blockquote class="important">You need to include CDN in order to use these Icons</blockquote>
			<pre class="well"><span class="text-success">&lt;!-- Icon Font CDN --&gt;</span>
&lt;link rel=<span class="text-warning">&quot;stylesheet&quot;</span> href=<span class="text-warning">&quot;<?php echo $IconFontCDN;?>&quot;</span>&gt;</pre>

			<blockquote class="info">
				<h4>Pick 'n' Repack</h4>
				<div class="pull-left">
					<p>For developers wish to select and repack these icons, download the icon pack and use <a href="http://icomoon.io/app" target="_blank">Icomoon</a> to customize icons library.</p>
					<p>Icomoon also available at chrome web store, <a href="https://chrome.google.com/webstore/detail/icomoon/kppingdhhalimbaehfmhldppemnmlcjd?utm_source=chrome-ntp-icon" target="_blank">install</a> this extension for chrome browser.</p>
				</div>
				<div class="iconfont-download">
					<a href="download/iconfont.zip" class="btn btn-info">Download Icon Pack</a>
				</div>
				<div class="clearfix"></div>
			</blockquote>

			<h4>Sizing</h4>
			<div class="col-sm-2">
				<h5><code>default</code></h5>
				<span class="icon-sad-o"></span>
			</div>
			<div class="col-sm-2">
				<h5><code>x2</code></h5>
				<span class="icon-neutral-o x2"></span>
			</div>
			<div class="col-sm-2">
				<h5><code>x3</code></h5>
				<span class="icon-wondering-o x3"></span>
			</div>
			<div class="col-sm-2">
				<h5><code>x4</code></h5>
				<span class="icon-smiley-o x4"></span>
			</div>
			<div class="col-sm-2">
				<h5><code>x5</code></h5>
				<span class="icon-happy-o x5"></span>
			</div>
			
			<div class="clearfix x2"></div>

			<pre class="well"><span class="text-success">&lt;!-- // Sample // --&gt;</span>
&lt;span class=<span class="text-warning">&quot;icon-smiley x3&quot;</span>&gt;&lt;/span&gt;</pre>
						
			<div class="icons-showcase">
				<h3>Web Application</h3>
				<div class="col-sm-3"><span class="icon-user"></span>user</div>
				<div class="col-sm-3"><span class="icon-user-group"></span>user-group</div>
				<div class="col-sm-3"><span class="icon-user-add"></span>user-add</div>
				<div class="col-sm-3"><span class="icon-profile"></span>profile</div>
				<div class="col-sm-3"><span class="icon-layer"></span>layer</div>
				<div class="col-sm-3"><span class="icon-search"></span>search</div>
				<div class="col-sm-3"><span class="icon-checked"></span>checked</div>
				<div class="col-sm-3"><span class="icon-calculate"></span>calculate</div>
				<div class="col-sm-3"><span class="icon-list"></span>list</div>
				<div class="col-sm-3"><span class="icon-picture"></span>picture</div>
				<div class="col-sm-3"><span class="icon-bookmark"></span>bookmark</div>
				<div class="col-sm-3"><span class="icon-sitemap"></span>sitemap</div>
				<div class="col-sm-3"><span class="icon-undo"></span>undo</div>
				<div class="col-sm-3"><span class="icon-redo"></span>redo</div>
				<div class="col-sm-3"><span class="icon-forward"></span>forward</div>
				<div class="col-sm-3"><span class="icon-reply"></span>reply</div>
				<div class="col-sm-3"><span class="icon-sort-alpha-asc"></span>sort-alpha-asc</div>
				<div class="col-sm-3"><span class="icon-sort-alpha-desc"></span>sort-alpha-desc</div>
				<div class="col-sm-3"><span class="icon-sort-numeric-asc"></span>sort-numeric-asc</div>
				<div class="col-sm-3"><span class="icon-sort-numeric-desc"></span>sort-numeric-desc</div>
				<div class="col-sm-3"><span class="icon-comment"></span>comment</div>
				<div class="col-sm-3"><span class="icon-comment-o"></span>comment-o</div>
				<div class="col-sm-3"><span class="icon-comments"></span>comments</div>
				<div class="col-sm-3"><span class="icon-comments-o"></span>comments-o</div>
				<div class="col-sm-3"><span class="icon-file"></span>file</div>
				<div class="col-sm-3"><span class="icon-file-o"></span>file-o</div>
				<div class="col-sm-3"><span class="icon-file-text"></span>file-text</div>
				<div class="col-sm-3"><span class="icon-file-text-o"></span>file-text-o</div>
				<div class="col-sm-3"><span class="icon-folder"></span>folder</div>
				<div class="col-sm-3"><span class="icon-folder-o"></span>folder-o</div>
				<div class="col-sm-3"><span class="icon-folder-open"></span>folder-open</div>
				<div class="col-sm-3"><span class="icon-folder-open-o"></span>folder-open-o</div>
				<div class="col-sm-3"><span class="icon-edit"></span>edit</div>
				<div class="col-sm-3"><span class="icon-copy"></span>copy</div>
				<div class="col-sm-3"><span class="icon-paste"></span>paste</div>
				<div class="col-sm-3"><span class="icon-language"></span>language</div>
				<div class="col-sm-3"><span class="icon-spell-check"></span>spell-check</div>
				<div class="col-sm-3"><span class="icon-random"></span>random</div>
				<div class="col-sm-3"><span class="icon-direction-arrow"></span>direction-arrow</div>
				<div class="col-sm-3"><span class="icon-dollar-sign"></span>dollar-sign</div>
				<div class="col-sm-3"><span class="icon-signal"></span>signal</div>
				<div class="col-sm-3"><span class="icon-history"></span>history</div>
				<div class="col-sm-3"><span class="icon-target"></span>target</div>
				<div class="col-sm-3"><span class="icon-stats"></span>stats</div>
				<div class="col-sm-3"><span class="icon-menu"></span>menu</div>
				<div class="col-sm-3"><span class="icon-ellipsis-v"></span>ellipsis-v</div>
				<div class="col-sm-3"><span class="icon-export"></span>export</div>
				<div class="col-sm-3"><span class="icon-external-link"></span>external-link</div>
				<div class="col-sm-3"><span class="icon-location"></span>location</div>
				<div class="col-sm-3"><span class="icon-share"></span>share</div>				
				<div class="col-sm-3"><span class="icon-spinner"></span>spinner</div>
				<div class="clearfix x3"></div>

				<h3>Brand</h3>
				<div class="col-sm-3"><span class="icon-facebook"></span>facebook</div>
				<div class="col-sm-3"><span class="icon-twitter"></span>twitter</div>
				<div class="col-sm-3"><span class="icon-googleplus"></span>googleplus</div>
				<div class="col-sm-3"><span class="icon-linkedin"></span>linkedin</div>
				<div class="col-sm-3"><span class="icon-youtube"></span>youtube</div>
				<div class="col-sm-3"><span class="icon-apple"></span>apple</div>
				<div class="col-sm-3"><span class="icon-android"></span>android</div>
				<div class="col-sm-3"><span class="icon-windows"></span>windows</div>
				<div class="col-sm-3"><span class="icon-skype"></span>skype</div>
				<div class="col-sm-3"><span class="icon-chrome"></span>chrome</div>
				<div class="col-sm-3"><span class="icon-firefox"></span>firefox</div>
				<div class="col-sm-3"><span class="icon-IE"></span>IE</div>
				<div class="col-sm-3"><span class="icon-opera"></span>opera</div>
				<div class="col-sm-3"><span class="icon-safari"></span>safari</div>
				<div class="col-sm-3"><span class="icon-rss"></span>rss</div>
				<div class="clearfix x3"></div>

				<h3>Objects</h3>
				<div class="col-sm-3"><span class="icon-arm-chair"></span>arm-chair</div>
				<div class="col-sm-3"><span class="icon-newspaper"></span>newspaper</div>
				<div class="col-sm-3"><span class="icon-attachment"></span>attachment</div>
				<div class="col-sm-3"><span class="icon-briefcase"></span>briefcase</div>
				<div class="col-sm-3"><span class="icon-floppy-disk"></span>floppy-disk</div>
				<div class="col-sm-3"><span class="icon-calendar"></span>calendar</div>
				<div class="col-sm-3"><span class="icon-vcard"></span>vcard</div>
				<div class="col-sm-3"><span class="icon-phone"></span>phone</div>
				<div class="col-sm-3"><span class="icon-envelope"></span>envelope</div>
				<div class="col-sm-3"><span class="icon-envelope-o"></span>envelope-o</div>
				<div class="col-sm-3"><span class="icon-tag"></span>tag</div>
				<div class="col-sm-3"><span class="icon-tags"></span>tags</div>				
				<div class="col-sm-3"><span class="icon-pin"></span>pin</div>
				<div class="col-sm-3"><span class="icon-math-compass"></span>math-compass</div>
				<div class="col-sm-3"><span class="icon-pencil"></span>pencil</div>
				<div class="col-sm-3"><span class="icon-paperplane"></span>paperplane</div>
				<div class="col-sm-3"><span class="icon-graduation"></span>graduation</div>
				<div class="col-sm-3"><span class="icon-cert"></span>cert</div>
				<div class="col-sm-3"><span class="icon-seal"></span>seal</div>
				<div class="col-sm-3"><span class="icon-award"></span>award</div>
				<div class="col-sm-3"><span class="icon-book"></span>book</div>
				<div class="col-sm-3"><span class="icon-trophy"></span>trophy</div>
				<div class="col-sm-3"><span class="icon-flag"></span>flag</div>
				<div class="col-sm-3"><span class="icon-megaphone"></span>megaphone</div>
				<div class="col-sm-3"><span class="icon-bell"></span>bell</div>
				<div class="col-sm-3"><span class="icon-bell-o"></span>bell-o</div>
				<div class="col-sm-3"><span class="icon-flask"></span>flask</div>
				<div class="col-sm-3"><span class="icon-cart"></span>cart</div>
				<div class="col-sm-3"><span class="icon-credit-card"></span>credit-card</div>
				<div class="col-sm-3"><span class="icon-wallet"></span>wallet</div>
				<div class="col-sm-3"><span class="icon-shield"></span>shield</div>
				<div class="col-sm-3"><span class="icon-wrench"></span>wrench</div>
				<div class="col-sm-3"><span class="icon-gear"></span>gear</div>
				<div class="col-sm-3"><span class="icon-meter"></span>meter</div>
				<div class="col-sm-3"><span class="icon-key"></span>key</div>
				<div class="col-sm-3"><span class="icon-trash-bin"></span>trash-bin</div>
				<div class="col-sm-3"><span class="icon-lifebuoy"></span>lifebuoy</div>
				<div class="col-sm-3"><span class="icon-gift"></span>gift</div>
				<div class="col-sm-3"><span class="icon-medical"></span>medical</div>
				<div class="col-sm-3"><span class="icon-wizard"></span>wizard</div>
				<div class="col-sm-3"><span class="icon-link"></span>link</div>
				<div class="col-sm-3"><span class="icon-cut"></span>cut</div>
				<div class="col-sm-3"><span class="icon-filter"></span>filter</div>
				<div class="col-sm-3"><span class="icon-lightbulb"></span>lightbulb</div>
				<div class="col-sm-3"><span class="icon-umbrella"></span>umbrella</div>
				<div class="clearfix x3"></div>
				
				<h3>Electronic Devices</h3>
				<div class="col-sm-3"><span class="icon-desktop"></span>desktop</div>
				<div class="col-sm-3"><span class="icon-laptop"></span>laptop</div>
				<div class="col-sm-3"><span class="icon-tablet"></span>tablet</div>
				<div class="col-sm-3"><span class="icon-mobile"></span>mobile</div>
				<div class="col-sm-3"><span class="icon-video"></span>video</div>
				<div class="col-sm-3"><span class="icon-camera"></span>camera</div>
				<div class="col-sm-3"><span class="icon-tv"></span>tv</div>
				<div class="col-sm-3"><span class="icon-printer"></span>printer</div>
				<div class="col-sm-3"><span class="icon-alarm"></span>alarm</div>
				<div class="col-sm-3"><span class="icon-clock"></span>clock</div>
				<div class="clearfix x3"></div>

				<h3>City / Outdoor</h3>
				<div class="col-sm-3"><span class="icon-home"></span>home</div>
				<div class="col-sm-3"><span class="icon-building"></span>building</div>
				<div class="col-sm-3"><span class="icon-library"></span>library</div>
				<div class="col-sm-3"><span class="icon-directions"></span>directions</div>
				<div class="col-sm-3"><span class="icon-road"></span>road</div>
				<div class="col-sm-3"><span class="icon-trees"></span>trees</div>
				<div class="col-sm-3"><span class="icon-globe"></span>globe</div>
				<div class="col-sm-3"><span class="icon-compass"></span>compass</div>
				<div class="col-sm-3"><span class="icon-map"></span>map</div>
				<div class="col-sm-3"><span class="icon-cloud"></span>cloud</div>
				<div class="clearfix x3"></div>

				<h3>Transportation</h3>
				<div class="col-sm-3"><span class="icon-aeroplane"></span>aeroplane</div>
				<div class="col-sm-3"><span class="icon-train"></span>train</div>
				<div class="col-sm-3"><span class="icon-bus"></span>bus</div>
				<div class="col-sm-3"><span class="icon-car"></span>car</div>
				<div class="col-sm-3"><span class="icon-truck"></span>truck</div>
				<div class="col-sm-3"><span class="icon-walking"></span>walking</div>
				<div class="clearfix x3"></div>

				<h3>Directional</h3>
				<div class="col-sm-3"><span class="icon-arrow-nw"></span>arrow-nw</div>
				<div class="col-sm-3"><span class="icon-arrow-up"></span>arrow-up</div>
				<div class="col-sm-3"><span class="icon-arrow-ne"></span>arrow-ne</div>
				<div class="col-sm-3"><span class="icon-arrow-right"></span>arrow-right</div>
				<div class="col-sm-3"><span class="icon-arrow-se"></span>arrow-se</div>
				<div class="col-sm-3"><span class="icon-arrow-down"></span>arrow-down</div>
				<div class="col-sm-3"><span class="icon-arrow-sw"></span>arrow-sw</div>
				<div class="col-sm-3"><span class="icon-arrow-left"></span>arrow-left</div>
				<div class="col-sm-3"><span class="icon-arrow-nw-bold"></span>arrow-nw-bold</div>
				<div class="col-sm-3"><span class="icon-arrow-up-bold"></span>arrow-up-bold</div>
				<div class="col-sm-3"><span class="icon-arrow-ne-bold"></span>arrow-ne-bold</div>
				<div class="col-sm-3"><span class="icon-arrow-right-bold"></span>arrow-right-bold</div>
				<div class="col-sm-3"><span class="icon-arrow-se-bold"></span>arrow-se-bold</div>
				<div class="col-sm-3"><span class="icon-arrow-down-bold"></span>arrow-down-bold</div>
				<div class="col-sm-3"><span class="icon-arrow-sw-bold"></span>arrow-sw-bold</div>
				<div class="col-sm-3"><span class="icon-arrow-left-bold"></span>arrow-left-bold</div>
				<div class="col-sm-3"><span class="icon-arrow-left-circle"></span>arrow-left-circle</div>
				<div class="col-sm-3"><span class="icon-arrow-right-circle"></span>arrow-right-circle</div>
				<div class="col-sm-3"><span class="icon-arrow-up-circle"></span>arrow-up-circle</div>
				<div class="col-sm-3"><span class="icon-arrow-down-circle"></span>arrow-down-circle</div>
				<div class="col-sm-3"><span class="icon-arrow-nw-o"></span>arrow-nw-o</div>
				<div class="col-sm-3"><span class="icon-arrow-up-o"></span>arrow-up-o</div>
				<div class="col-sm-3"><span class="icon-arrow-ne-o"></span>arrow-ne-o</div>
				<div class="col-sm-3"><span class="icon-arrow-right-o"></span>arrow-right-o</div>
				<div class="col-sm-3"><span class="icon-arrow-se-o"></span>arrow-se-o</div>
				<div class="col-sm-3"><span class="icon-arrow-down-o"></span>arrow-down-o</div>
				<div class="col-sm-3"><span class="icon-arrow-sw-o"></span>arrow-sw-o</div>
				<div class="col-sm-3"><span class="icon-arrow-left-o"></span>arrow-left-o</div>
				<div class="col-sm-3"><span class="icon-angle-left-circle"></span>angle-left-circle</div>
				<div class="col-sm-3"><span class="icon-angle-right-circle"></span>angle-right-circle</div>
				<div class="col-sm-3"><span class="icon-angle-up-circle"></span>angle-up-circle</div>
				<div class="col-sm-3"><span class="icon-angle-down-circle"></span>angle-down-circle</div>
				<div class="col-sm-3"><span class="icon-angle-left"></span>angle-left</div>
				<div class="col-sm-3"><span class="icon-angle-right"></span>angle-right</div>
				<div class="col-sm-3"><span class="icon-angle-up"></span>angle-up</div>
				<div class="col-sm-3"><span class="icon-angle-down"></span>angle-down</div>
				<div class="col-sm-3"><span class="icon-angle-double-left"></span>angle-double-left</div>
				<div class="col-sm-3"><span class="icon-angle-double-right"></span>angle-double-right</div>
				<div class="col-sm-3"><span class="icon-angle-double-up"></span>angle-double-up</div>
				<div class="col-sm-3"><span class="icon-angle-double-down"></span>angle-double-down</div>
				<div class="col-sm-3"><span class="icon-hand-left"></span>hand-left</div>
				<div class="col-sm-3"><span class="icon-hand-right"></span>hand-right</div>
				<div class="col-sm-3"><span class="icon-hand-up"></span>hand-up</div>
				<div class="col-sm-3"><span class="icon-hand-down"></span>hand-down</div>
				<div class="col-sm-3"><span class="icon-expand"></span>expand</div>
				<div class="col-sm-3"><span class="icon-contract"></span>contract</div>
				<div class="col-sm-3"><span class="icon-expand-2"></span>expand-2</div>
				<div class="col-sm-3"><span class="icon-contract-2"></span>contract-2</div>
				<div class="col-sm-3"><span class="icon-arrows-v"></span>arrows-v</div>
				<div class="col-sm-3"><span class="icon-arrows-h"></span>arrows-h</div>
				<div class="clearfix x3"></div>

				<h3>Emotional</h3>
				<div class="col-sm-3"><span class="icon-sad"></span>sad</div>
				<div class="col-sm-3"><span class="icon-sad-o"></span>sad-o</div>
				<div class="col-sm-3"><span class="icon-confused"></span>confused</div>
				<div class="col-sm-3"><span class="icon-confused-o"></span>confused-o</div>
				<div class="col-sm-3"><span class="icon-neutral"></span>neutral</div>
				<div class="col-sm-3"><span class="icon-neutral-o"></span>neutral-o</div>
				<div class="col-sm-3"><span class="icon-wondering"></span>wondering</div>
				<div class="col-sm-3"><span class="icon-wondering-o"></span>wondering-o</div>
				<div class="col-sm-3"><span class="icon-shocked"></span>shocked</div>
				<div class="col-sm-3"><span class="icon-shocked-o"></span>shocked-o</div>
				<div class="col-sm-3"><span class="icon-smiley"></span>smiley</div>
				<div class="col-sm-3"><span class="icon-smiley-o"></span>smiley-o</div>
				<div class="col-sm-3"><span class="icon-happy"></span>happy</div>
				<div class="col-sm-3"><span class="icon-happy-o"></span>happy-o</div>
				<div class="col-sm-3"><span class="icon-star"></span>star</div>
				<div class="col-sm-3"><span class="icon-star-o"></span>star-o</div>
				<div class="col-sm-3"><span class="icon-heart"></span>heart</div>
				<div class="col-sm-3"><span class="icon-heart-o"></span>heart-o</div>
				<div class="col-sm-3"><span class="icon-heart-broken"></span>heart-broken</div>
				<div class="clearfix x3"></div>
				
				<h3>Toggle</h3>				
				<div class="col-sm-3"><span class="icon-upload"></span>upload</div>
				<div class="col-sm-3"><span class="icon-download"></span>download</div>
				<div class="col-sm-3"><span class="icon-drawer-empty"></span>drawer-empty</div>
				<div class="col-sm-3"><span class="icon-drawer-full"></span>drawer-full</div>
				<div class="col-sm-3"><span class="icon-cloud-upload"></span>cloud-upload</div>
				<div class="col-sm-3"><span class="icon-cloud-download"></span>cloud-download</div>
				<div class="col-sm-3"><span class="icon-zoom-in"></span>zoom-in</div>
				<div class="col-sm-3"><span class="icon-zoom-out"></span>zoom-out</div>
				<div class="col-sm-3"><span class="icon-eye"></span>eye</div>
				<div class="col-sm-3"><span class="icon-eye-blocked"></span>eye-blocked</div>
				<div class="col-sm-3"><span class="icon-door-open"></span>door-open</div>
				<div class="col-sm-3"><span class="icon-door-closed"></span>door-closed</div>
				<div class="col-sm-3"><span class="icon-in"></span>in</div>
				<div class="col-sm-3"><span class="icon-out"></span>out</div>
				<div class="col-sm-3"><span class="icon-login"></span>logoin</div>
				<div class="col-sm-3"><span class="icon-logout"></span>logout</div>
				<div class="col-sm-3"><span class="icon-lock"></span>lock</div>
				<div class="col-sm-3"><span class="icon-unlocked"></span>unlocked</div>
				<div class="col-sm-3"><span class="icon-like"></span>like</div>
				<div class="col-sm-3"><span class="icon-dislike"></span>dislike</div>
				<div class="clearfix x3"></div>
				
				<h3>Helpers</h3>
				<div class="col-sm-3"><span class="icon-info-circle"></span>info-circle</div>
				<div class="col-sm-3"><span class="icon-info-circle-o"></span>info-circle-o</div>
				<div class="col-sm-3"><span class="icon-question-circle"></span>question-circle</div>
				<div class="col-sm-3"><span class="icon-question-circle-o"></span>question-circle-o</div>
				<div class="col-sm-3"><span class="icon-warning"></span>warning</div>
				<div class="col-sm-3"><span class="icon-not-allowed"></span>not-allowed</div>
				<div class="col-sm-3"><span class="icon-cross-circle-o"></span>cross-circle-o</div>
				<div class="col-sm-3"><span class="icon-check-circle-o"></span>check-circle-o</div>
				<div class="col-sm-3"><span class="icon-close"></span>close</div>
				<div class="col-sm-3"><span class="icon-checkmark"></span>checkmark</div>
				<div class="col-sm-3"><span class="icon-plus"></span>plus</div>
				<div class="col-sm-3"><span class="icon-minus"></span>minus</div>
				<div class="col-sm-3"><span class="icon-plus-square"></span>plus-square</div>
				<div class="col-sm-3"><span class="icon-minus-square"></span>minus-square</div>
				<div class="col-sm-3"><span class="icon-plus-circle"></span>plus-circle</div>
				<div class="col-sm-3"><span class="icon-minus-circle"></span>minus-circle</div>
				<div class="col-sm-3"><span class="icon-cross-square"></span>cross-square</div>
				<div class="col-sm-3"><span class="icon-cross-circle"></span>cross-circle</div>
				<div class="col-sm-3"><span class="icon-erase"></span>erase</div>
				<div class="col-sm-3"><span class="icon-move"></span>move</div>
				<div class="col-sm-3"><span class="icon-rotate"></span>rotate</div>
				<div class="col-sm-3"><span class="icon-switch"></span>switch</div>
				<div class="col-sm-3"><span class="icon-return"></span>return</div>
				<div class="col-sm-3"><span class="icon-retweet"></span>retweet</div>
				<div class="col-sm-3"><span class="icon-loop"></span>loop</div>
				<div class="col-sm-3"><span class="icon-back"></span>back</div>
				<div class="col-sm-3"><span class="icon-enter"></span>enter</div>
				<div class="col-sm-3"><span class="icon-level-up"></span>level-up</div>
				<div class="col-sm-3"><span class="icon-level-down"></span>level-down</div>
				<div class="col-sm-3"><span class="icon-unsorted"></span>unsorted</div>
				<div class="col-sm-3"><span class="icon-caret-left"></span>caret-left</div>
				<div class="col-sm-3"><span class="icon-caret-right"></span>caret-right</div>
				<div class="col-sm-3"><span class="icon-caret-up"></span>caret-up</div>
				<div class="col-sm-3"><span class="icon-caret-down"></span>caret-down</div>
				<div class="col-sm-3"><span class="icon-flip-vertical"></span>flip-vertical</div>
				<div class="col-sm-3"><span class="icon-flip-horizontal"></span>flip-horizontal</div>
				<div class="clearfix x3"></div>
			</div>

		</div>
	</div>

</div>
</div>
<?php include("includes/footer.php");?>
</body>
</html>