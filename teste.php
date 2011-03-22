<?php

session_start();

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="pt-br">
<head>
	<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
	<title>Skitter - Slideshow for anytime!</title>
	
	<meta name="description" content="Slideshow for jQuery" />
	<meta name="keywords" content="slides, slide, slideshow, gallery, images, effects, easing, transitions, jquery, plugin" />
	<meta name="author" content="Thiago S.F. - http://thiagosf.net" />
	
	<link rel="shortcut icon" href="images/favicon.ico">
	<link href="css/styles.css" type="text/css" media="all" rel="stylesheet" />
	<link href="css/skitter.styles.css" type="text/css" media="all" rel="stylesheet" />
	<link href="css/highlight.black.css" type="text/css" media="all" rel="stylesheet" />
	<link href="css/sexy-bookmarks-style.css" type="text/css" media="all" rel="stylesheet" />
	
	<script src="js/jquery.min.js"></script>
	<script src="js/jquery-ui.min.js"></script>
	<script src="js/jquery.skitter.min.js"></script>
	<script src="js/highlight.js"></script>
	<script src="js/sexy-bookmarks-public.js"></script>
	
	<script>
	$(document).ready(function(){
		
		// // Skitter
		$('.box_skitter_large').skitter({
			animation: 'cubeSpread',
			//navigation: false,
			label: false,
			numbers: false
		});
		
		// // Exaple custom:
		// $('.box_skitter_small').skitter({interval:2000, navigation:false, label:false, numbers:false, animation:'directionRight'});
		
		// Highlight
		$('pre.code').highlight({source:1, zebra:1, indent:'space', list:'ol'});
		
	});
	</script>
</head>
<body>
	<div id="header">
		<h1>Skitter</h1>
		<p>Slideshow for anytime!</p>
	</div>
	
	<div id="content">
		<div class="border_box">
			<div class="box_skitter box_skitter_large">
				<ul>
					<li>
						<a href="#showBars"><img src="images/001.jpg" class="showBars" /></a>
						<div class="label_text">
							<p>showBars</p>
						</div>
					</li>
					<li>
						<a href="#cube"><img src="images/002.jpg" class="cube" /></a>
						<div class="label_text">
							<p>cube</p>
						</div>
					</li>
					<li>
						<a href="#showBarsRandom"><img src="images/003.jpg" class="showBarsRandom" /></a>
						<div class="label_text">
							<p>showBarsRandom</p>
						</div>
					</li>
					<li>
						<a href="#tube"><img src="images/004.jpg" class="tube" /></a>
						<div class="label_text">
							<p>tube</p>
						</div>
					</li>
					<li>
						<a href="#block"><img src="images/005.jpg" class="block" /></a>
						<div class="label_text">
							<p>block</p>
						</div>
					</li>
					<li>
						<a href="#cubeStop"><img src="images/006.jpg" class="cubeStop" /></a>
						<div class="label_text">
							<p>cubeStop</p>
						</div>
					</li>
					<li>
						<a href="#cubeHide"><img src="images/007.jpg" class="cubeHide" /></a>
						<div class="label_text">
							<p>cubeHide</p>
						</div>
					</li>
					<li>
						<a href="#cubeSize"><img src="images/008.jpg" class="cubeSize" /></a>
						<div class="label_text">
							<p>cubeSize</p>
						</div>
					</li>
					<li>
						<a href="#horizontal"><img src="images/009.jpg" class="horizontal" /></a>
						<div class="label_text">
							<p>horizontal</p>
						</div>
					</li>
					<li>
						<a href="#cubeRandom"><img src="images/010.jpg" class="cubeRandom" /></a>
						<div class="label_text">
							<p>cubeRandom</p>
						</div>
					</li>
					<li>
						<a href="#fade"><img src="images/011.jpg" class="fade" /></a>
						<div class="label_text">
							<p>fade</p>
						</div>
					</li>
					<li>
						<a href="#fadeFour"><img src="images/012.jpg" class="fadeFour" /></a>
						<div class="label_text">
							<p>fadeFour</p>
						</div>
					</li>
					<li>
						<a href="#paralell"><img src="images/013.jpg" class="paralell" /></a>
						<div class="label_text">
							<p>paralell</p>
						</div>
					</li>
					<li>
						<a href="#blind"><img src="images/014.jpg" class="blind" /></a>
						<div class="label_text">
							<p>blind</p>
						</div>
					</li>
					<li>
						<a href="#blindHeight"><img src="images/015.jpg" class="blindHeight" /></a>
						<div class="label_text">
							<p>blindHeight</p>
						</div>
					</li>
					<li>
						<a href="#directionTop"><img src="images/016.jpg" class="directionTop" /></a>
						<div class="label_text">
							<p>directionTop</p>
						</div>
					</li>
					<li>
						<a href="#directionLeft"><img src="images/018.jpg" class="directionLeft" /></a>
						<div class="label_text">
							<p>directionLeft</p>
						</div>
					</li>
					<li>
						<a href="#directionBottom"><img src="images/017.jpg" class="directionBottom" /></a>
						<div class="label_text">
							<p>directionBottom</p>
						</div>
					</li>
					<li>
						<a href="#directionRight"><img src="images/019.jpg" class="directionRight" /></a>
						<div class="label_text">
							<p>directionRight</p>
						</div>
					</li>
					<li>
						<a href="#cubeStopRandom"><img src="images/019.jpg" class="cubeStopRandom" /></a>
						<div class="label_text">
							<p>cubeStopRandom</p>
						</div>
					</li>
				</ul>
			</div>
		</div>
		
		<div id="examples-animations">
			<div>
				<?php
				
				$class = (!isset($_GET['animation'])) ? 'selected' : '';
				echo sprintf('<a href="?" class="%s">all</a>', $class);
				
				foreach($animations as $animation) {
					$class = (isset($_GET['animation']) && $_GET['animation'] == $animation) ? 'selected' : '';
					echo sprintf('<a href="?animation=%s" class="%s">%s</a>', $animation, $class, $animation);
				}
				
				?>
			</div>
		</div>
		
		<div style="clear:both"></div>
		
		
		<div id="styles_navigation">
			<h2>Types of navigation</h2>
			<ul>
				<?php
				
				$types = array(
					array('label' => 'Numbers', 'type' => 'numbers'),
					array('label' => 'Thumbs', 'type' => 'thumbs', 'options' => '<span class="update">update!</span>'),
				);
				
				foreach($types as $type) {
					$options = (isset($type['options'])) ? $type['options'] : '';
					$class = isset($_SESSION['type_navigation']) && $_SESSION['type_navigation'] == $type['type'] ? 'selected' : '';
					echo sprintf('<li><a href="?type_navigation=%s" class="%s">%s</a>%s</li>', $type['type'], $class, $type['label'], $options);
					
				}
				
				?>
			</ul>
		</div>
		
		<div id="styles_navigation">
			<h2>Other options</h2>
			<ul>
				<?php
				
				$types = array(
					array('label' => 'Normal', 'type' => 'normal'),
					array('label' => 'HideTools', 'type' => 'hideTools', 'options' => '<span class="new">new!</span>'),
				);
				
				foreach($types as $type) {
					$options = (isset($type['options'])) ? $type['options'] : '';
					$class = isset($_SESSION['other_options']) && $_SESSION['other_options'] == $type['type'] ? 'selected' : '';
					echo sprintf('<li><a href="?other_options=%s" class="%s">%s</a>%s</li>', $type['type'], $class, $type['label'], $options);
					
				}
				
				?>
			</ul>
		</div>
		
		<div id="download">
			<a href="source/jquery.skitter.3.1.zip" id="botao_download"><img src="images/download-button.png" /></a>
			<?php
			/*
			<div id="donate">
				<form action="https://www.paypal.com/cgi-bin/webscr" method="post">
					<input type="hidden" name="cmd" value="_s-xclick">
					<input type="hidden" name="encrypted" value="-----BEGIN PKCS7-----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-----END PKCS7-----
					">
					<input type="image" src="images/donate-button.png" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
					<img alt="" border="0" src="https://www.paypal.com/en_US/i/scr/pixel.gif" width="1" height="1">
				</form>
			</div>
			*/
			?>
		</div>
		
		<div class="sexy-bookmarks sexy-bookmarks-expand sexy-bookmarks-center sexy-bookmarks-bg-sexy">
			<ul class="socials">
				<li class="sexy-delicious"><a href="http://del.icio.us/post" rel="nofollow" class="external" title="Share this on del.icio.us">Share this on del.icio.us</a></li>
				<li class="sexy-facebook"><a href="http://www.facebook.com/share.php" rel="nofollow" class="external" title="Share this on Facebook">Share this on Facebook</a></li>
				<li class="sexy-digg"><a href="http://digg.com/submit" rel="nofollow" class="external" title="Digg this!">Digg this!</a></li>
				<li class="sexy-twitter"><a href="http://twitter.com/home" rel="nofollow" class="external" title="Tweet This!">Tweet This!</a></li>
				<li class="sexy-twittley"><a href="http://twittley.com/submit/" rel="nofollow" class="external" title="Submit this to Twittley">Submit this to Twittley</a></li>
				
				<li class="sexy-yahoobuzz"><a href="http://buzz.yahoo.com/submit/" rel="nofollow" class="external" title="Buzz up!">Buzz up!</a></li>
				<li class="sexy-myspace"><a href="http://www.myspace.com/Modules/PostTo/Pages/" rel="nofollow" class="external" title="Post this to MySpace">Post this to MySpace</a></li>
				<li class="sexy-google"><a href="http://www.google.com/bookmarks/mark" rel="nofollow" class="external" title="Add this to Google Bookmarks">Add this to Google Bookmarks</a></li>

				<li class="sexy-scriptstyle"><a href="http://scriptandstyle.com/submit" rel="nofollow" class="external" title="Submit this to Script &amp; Style">Submit this to Script &amp; Style</a></li>
				<li class="sexy-reddit"><a href="http://reddit.com/submit" rel="nofollow" class="external" title="Share this on Reddit">Share this on Reddit</a></li>
				<li class="sexy-stumbleupon"><a href="http://www.stumbleupon.com/submit" rel="nofollow" class="external" title="Stumble upon something good? Share it on StumbleUpon">Stumble upon something good? Share it on StumbleUpon</a></li>
				<li class="sexy-mixx"><a href="http://www.mixx.com/submit" rel="nofollow" class="external" title="Share this on Mixx">Share this on Mixx</a></li>

				<li class="sexy-technorati"><a href="http://technorati.com/faves" rel="nofollow" class="external" title="Share this on Technorati">Share this on Technorati</a></li>
				<li class="sexy-blinklist"><a href="http://www.blinklist.com/index.php" rel="nofollow" class="external" title="Share this on Blinklist">Share this on Blinklist</a></li>
				<li class="sexy-diigo"><a href="http://www.diigo.com/post">Post this on Diigo</a></li>
				
				<li class="sexy-designfloat"><a href="http://www.designfloat.com/submit.php" rel="nofollow" class="external" title="Submit this to DesignFloat">Submit this to DesignFloat</a></li>
				<li class="sexy-newsvine"><a href="http://www.newsvine.com/_tools/seed&amp;save" rel="nofollow" class="external" title="Seed this on Newsvine">Seed this on Newsvine</a></li>
				
			</ul>
		</div>
		
		<h2>Updatelog</h2>
		<div id="updatelog">
			<dl>
				<dt>09/01/2011</dt>
					<dd>- Added new effects: cubeStopRandom</dd>
				<dt>04/01/2011</dt>
					<dd>- Update thumbnail browsing. Now the position of the mouse will move the thumbnails</dd>
					<dd>- Fix the problem with the effects: cubeStop, cubeHide, cubSize.</dd>
				<dt>09/10/2010</dt>
					<dd>- Added the type of thumbnail browsing.</dd>
				<dt>04/08/2010</dt>
					<dd>- Creation of Skitter Slideshow!</dd>
			</dl>
		</div>
		
		
		<h2>Javascript</h2>
		<pre class="code" lang="js">
$(function(){
	$('.box_skitter box_skitter_large').skitter();
});</pre>

		<h2>HTML</h2>
		<pre class="code" lang="html">
<div class="box_skitter">
	<ul>
		<li>
			<a href="http://codecanyon.net"><img src="images/01.jpg" class="block" /></a>
			<div class="label_text">
				<p>Label</p>
			</div>
		</li>
		<li>
			<a href="http://activeden.net"><img src="images/02.jpg" class="cube" /></a>
			<div class="label_text">
				<p>Label</p>
			</div>
		</li>
		<li>
			<a href="http://themeforest.net"><img src="images/03.jpg" class="default" /></a>
			<div class="label_text">
				<p>Label</p>
			</div>
		</li>
	</ul>
</div>
</pre>

		<div id="options">
			<h2>Extend</h2>
			<h3>Options</h3>
			
			
			<table> 
				<thead> 
					<tr> 
						<th>option</th> 
						<th>description</th> 
						<th>default</th> 
						<th>example</th> 
					</tr> 
				</thead> 
				<tbody> 
					<?php
					
					$data = array(
						array('velocity', 'Velocity of animation', '1', "$('.box_skitter box_skitter_large').skitter({velocity: 2});"),
						array('interval', 'Interval between transitions', '2500', "$('.box_skitter box_skitter_large').skitter({interval: 3000});"),
						array('animation', 'Default animation', 'null or defined in &lt;li&gt; class', "$('.box_skitter box_skitter_large').skitter({animation: 'fade'});"),
						array('numbers', 'Numbers display', 'true', "$('.box_skitter box_skitter_large').skitter({numbers: false});"),
						array('navigation', 'Navigation display', 'true', "$('.box_skitter box_skitter_large').skitter({navigation: false});"),
						array('label', 'Label display', 'true', "$('.box_skitter box_skitter_large').skitter({label: false});"),
						array('easing_default', 'Easing default', 'null', "$('.box_skitter box_skitter_large').skitter({easing_default: 'easeOutBack'});"),
						array('animateNumberOut', 'Animation/style number', "{backgroundColor:'#333', color:'#fff'}", "$('.box_skitter box_skitter_large').skitter({animateNumberOut: {backgroundColor:'#000', color:'#ccc'}});"),
						array('animateNumberOver', 'Animation/style hover number', "{backgroundColor:'#000', color:'#fff'}", "$('.box_skitter box_skitter_large').skitter({animateNumberOver: {backgroundColor:'#000', color:'#ccc'}});"),
						array('animateNumberActive', 'Animation/style active number', "{backgroundColor:'#cc3333', color:'#fff'}", "$('.box_skitter box_skitter_large').skitter({animateNumberActive: {backgroundColor:'#000', color:'#ccc'}});"),
						array('thumbs', 'Navigation with thumbs', "false", "$('.box_skitter box_skitter_large').skitter({thumbs: true});"),
						array('hideTools', 'Hide numbers and navigation', "false", "$('.box_skitter box_skitter_large').skitter({hideTools: true});"),
					);
					
					foreach($data as $linha) {
					
					?>
					<tr> 
						<td><?=$linha[0];?></td> 
						<td><?=$linha[1];?></td> 
						<td><?=$linha[2];?></td> 
						<td><span class="code"><?=$linha[3];?></span></td> 
					</tr>
					<?php
					
					}
					
					?>
				</tbody> 
			</table>
			
		</div>
	</div>
	
	<div id="footer">
		<p>Thiago S.F.</p>
		<p><a href="http://thiagosf.net">thiagosf.net</a></p>
	</div>
	
	<script type="text/javascript">

	  var _gaq = _gaq || [];
	  _gaq.push(['_setAccount', 'UA-1966000-13']);
	  _gaq.push(['_trackPageview']);

	  (function() {
		var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
		ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
		var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
	  })();

	</script>

	
</body>
</html>