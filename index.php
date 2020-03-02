<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>Decompiled - A Tech Podcast!</title>
		<link href="assets/css/bootstrap.min.css" rel="stylesheet" />
		<link href="assets/css/mediaelementplayer.min.css" rel="stylesheet" />
		<link href="assets/css/magnific-popup.css" rel="stylesheet" />
		<link href="assets/css/style.css" rel="stylesheet" />
		<link href='//fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
		<link href='//fonts.googleapis.com/css?family=Open+Sans:400,600,700,300' rel='stylesheet' type='text/css'>
		<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" rel="stylesheet" />
		<meta name="theme-color" content="#fff" />
		<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" />
		<meta name="author" content="CronByte" />
		<meta name="keywords" content="Podcast,Tech,Best Podcast,Tech Podcast,Decompiled" />
		<meta name="description" content="Decompiled! Indigenous Podcast for Engineers, students makers & entrepreneurs. Tune In, listen real life experiences & stay on edge with evolving technology world." />
		<meta property="og:locale" content="en" />
		<meta property="og:type" content="website" />
		<meta property="og:title" content="Decompiled - A Tech Podcast" />
		<meta property="og:description" content="Decompiled! Indigenous Podcast for Engineers, students makers & entrepreneurs. Tune In, listen real life experiences & stay on edge with evolving technology world." />
		<meta property="og:url" content="https://www.decompiled.in/" />
		<meta property="og:site_name" content="Decompiled" />
		<meta property="og:image" content="http://beta.decompiled.in/assets/img/logo/xlogo.png.pagespeed.ic._oIgWkuu4L.png" />
		<meta name="twitter:card" content="summary_large_image" />
		<meta name="twitter:site" content="decompiled_pod" />
		<meta name="twitter:creator" content="decompiled_pod" />
		<meta name="twitter:title" content="Decompiled - A Tech Podcast" />
		<meta name="twitter:description" content="Decompiled! Indigenous Podcast for Engineers, students makers & entrepreneurs. Tune In, listen real life experiences & stay on edge with evolving technology world." />
		<meta name="twitter:domain" content="https://www.decompiled.in/" />
		<meta name="twitter:image" content="http://beta.decompiled.in/assets/img/logo/xlogo.png.pagespeed.ic._oIgWkuu4L.png" />
		<link rel="icon" href="assets/img/logo/logo.png" />
		<link rel="shortcut icon" href="assets/img/logo/logo.png" />
	</head><body>

<header class="header absolute">
			<div class="container">
				<!-- LOGOOOOOOOOOOOO -->
				<h1 class="logo"><a href="index.html"><img itemprop="logo" src="assets/img/logo/logo.png" title="Decompiled! Indigenous Podcast for Engineers, students makers & entrepreneurs. Tune In, listen real life experiences & stay on edge with evolving technology world. " alt="Decompiled!" /></a></h1>
				<nav class="navigation">
					<ul class="menu">
						<li class="menuitem active"><a href="index.html">Home</a></li>
						<li class="menuitem"><a href="contact.html">Contact</a></li>
					</ul>
					<a href="index.html#" class="btn-hamburguer-menu"><i class="fa fa-bars"></i></a>
				</nav>
			</div>
		</header>




<?php
############################################################
# PODCAST GENERATOR
#
# Created by Alberto Betella and Emil Engler
# http://www.podcastgenerator.net
# 
# This is Free Software released under the GNU/GPL License.
############################################################
session_start();
require 'core/include.php';



generateRSS();
$episodes = getEpisodes(null);
// Backwards comp
//$link = str_replace('?', '', $config['link']);
//$link = str_replace('=', '', $link);
//$link = str_replace('$url', '', $link);



// Some translation strings
$more = _('More');
$download = _('Download');
$editdelete = _('Edit/Delete (Admin)');
$categories = _('Categories');

$buttons = getButtons('./');
require $config['theme_path']."index.php";
?>

<section class="podcast-hero" style="background-image: url(./assets/img/ep/ep2.png)">
			<div class="podcast-hero-inner">
				<div class="container">
					<div class="podcast-hero-content">
						<h2 class="podcast-hero-title"><a href="episodes/season1/episode2.html">Episode 02 - Talking GSoC and Opensource <br><span style="font-size: 20px">With Prakhar and Vipul</span></a></h2>
						<span class="podcast-hero-date">April 1, 2019</span>
						<ul class="podcast-hero-meta">
							<li class="item"><i class="fa fa-clock-o"></i> 78 minutes</li>
							<li class="item"><a href="https://www.youtube.com/watch?v=CFAT_X84zJM" target="_blank" ><i class="fa fa-youtube-play"></i> Watch on Youtube</a></li>
							<!-- <li class="item"><a href="index.html#" ><i class="fa fa-spotify"></i> Listen on Spotify</a></li> -->
							<li class="item"><i class="fa fa-angle-down"></i> Click the play button</li>
						</ul>
					</div>
				</div>
				<div class="podcast-player">
					<iframe width="100%" height="166" scrolling="no" frameborder="no" allow="autoplay" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/598619754&color=%231d1925&auto_play=true&hide_related=false&show_comments=true&show_user=true&show_reposts=false&show_teaser=true"></iframe>
				</div>
			</div>
		</section>
		<main id="main" class="main">
			<section class="section-positive" style="background-color: #0c0a0f">
				<div class="container">
					<h2 class="title-default">Decompiled - A Tech Podcast</h2>
					<div class="row">
						<div class="col-sm-12 mb-100">
							<div class="podcast-card full">
							<figure class="podcast-image" style="background-color: #0c0a0f"><img src="./assets/img/logo/logo.png" style="width:270px; height: 210px;" /></figure>
							<div class="podcast-content" style="background-color: #0c0a0f">
								<h2 class="podcast-title"> Indigenous Podcast for Engineers, students makers & entrepreneurs. Tune In, listen real life experiences & stay on edge with evolving technology world.</h2>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- newsletter -->
		<section class="section-negative text-center">
			<div class="container">
				<h2 class="title-default">Signup for a newsletter!</h2>
				<p class="section-description">Never Miss Any Decompiled Podcast! ʕ•ᴥ•ʔﾉ♡</p>
				<form action="https://decompiled.us20.list-manage.com/subscribe/post?u=393cabcba1cdbcee2cceaf88f&amp;id=e0d75d823c" method="POST" target="_blank" class="form-newsletter validate">
					<fieldset class="row">
						<div class="col-md-9 nopadding">
							<input type="email" name="EMAIL" id="mce-EMAIL" class="form-control form-positive" id="email-newsletter" placeholder="(❍ᴥ❍ʋ) WOOF! Enter your E-Mail..." required />
						</div>
						<div class="col-md-3 nopadding">
							<button class="btn btn-success btn-lg btn-block" type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe"><i class="fa fa-paper-plane"></i></button>
						</div>
					</fieldset>
					<div id="mce-responses" class="clear">
						<div class="response" id="mce-error-response" style="display:none"></div>
						<div class="response" id="mce-success-response" style="display:none"></div>
						</div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
						<div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_393cabcba1cdbcee2cceaf88f_e0d75d823c" tabindex="-1" value=""></div>
					</form>
					<script type='text/javascript' src='//s3.amazonaws.com/downloads.mailchimp.com/js/mc-validate.js'></script>
					<script type='text/javascript'>(function($) {window.fnames = new Array(); window.ftypes = new Array();fnames[0]='EMAIL';ftypes[0]='email';fnames[3]='ADDRESS';ftypes[3]='address';fnames[4]='PHONE';ftypes[4]='phone';}(jQuery));var $mcj = jQuery.noConflict(true);</script>
				</div>
			</section>
			<!-- Episode section -->
			<section class="section-positive" style="background-color: #050407">
				<div class="container">
					<h2 class="title-default">All Episodes</h2>
					<div class="row">
						<div class="col-sm-6 mb-40">
<?php 
if(strtolower($config['max_recent']) != 'all') {
    $episodes = array_slice($episodes, 0, $config['max_recent']);
}

$splitted_episodes = array_chunk($episodes, intval($config['episodeperpage']));
$episode_chunk = null;
if(isset($_GET['page'])) {
    $episode_chunk = $splitted_episodes[intval(($_GET['page']) - 1)];
}
else {
    $episode_chunk = $splitted_episodes[0];
}

?>
							<div class="podcast-card boxed">
								<figure class="podcast-image"><a href="https://www.youtube.com/watch?v=JhJkrFcNiY4" target="_blank"><img src="./assets/img/ep/ep1-thumb.jpg" /></a></figure>
								<div class="podcast-content">
									<span class="podcast-date">March 25, 2019</span>
									<h2 class="podcast-title"><a href="episodes/season1/episode1.html" target="_blank">Episode 01 - Why this is the best time to get into tech?</a></h2>
									<p class="podcast-excerpt"><a href="episodes/season1/episode1.html" target="_blank">With Girish Sarwal</a></p>
									<ul class="podcast-meta">
										<li class="item"><i class="fa fa-clock-o"></i> 45 minutes</li>
										<li class="item"><a href="https://www.youtube.com/watch?v=JhJkrFcNiY4" target="_blank" class="podcast-play"><i class="fa fa-youtube-play"></i> YouTube</a></li>
										<!-- <li class="item"><a href="" class="podcast-play"><i class="fa fa-spotify"></i> Spotify</a></li> -->
									</ul>
								</div>
							</div>
						</div>
						<div class="col-sm-6 mb-40">
							<div class="podcast-card boxed">
								<figure class="podcast-image"><a href="https://www.youtube.com/watch?v=CFAT_X84zJM" target="_blank"><img src="./assets/img/ep/thumbnail_2.png" /></a></figure>
								<div class="podcast-content">
									<span class="podcast-date">April 1, 2019</span>
									<h2 class="podcast-title"><a href="episodes/season1/episode2.html" target="_blank">Episode 02 - Talking GSoC and Opensource </a></h2>
									<p class="podcast-excerpt"><a href="episodes/season1/episode2.html" target="_blank">With Prakhar and Vipul</a></p>
									<ul class="podcast-meta">
										<li class="item"><i class="fa fa-clock-o"></i> 78 minutes</li>
										<li class="item"><a href="https://www.youtube.com/watch?v=CFAT_X84zJM" target="_blank" class="podcast-play"><i class="fa fa-youtube-play"></i> YouTube</a></li>
										<!-- <li class="item"><a href="" class="podcast-play"><i class="fa fa-spotify"></i> Spotify</a></li> -->
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<section id="about-us" class="section-negative" style="background-color: #fff">
				<div class="container">
					<h2 class="title-default text-center">Meet our guests</h2>
					<div class="row mb-30">
						<div class="col-lg-4 col-lg-offset-0 col-md-8 col-md-offset-2 col-sm-12 mb-40">
							<div class="team-card">
							<figure class="team-card-image"><img src="assets/img/ep/thumbnail_1.png" alt="Girish Sarwal" title="Girish Sarwal"  /></figure>
							<div class="team-card-content">
								<h2 class="team-card-title">Mr. Girish Sarwal</h2>
								<p class="team-card-job"><a href="./episodes/season1/episode1.html" target="_blank"><i class="fa fa-link"></i> S01E01</a></p>
								<p class="team-card-description">Game developer, embedded systems engineer and RC aeromodeller with over 13 years of industry experience.</p>
								<ul class="team-card-social">
									<li class="social-item"><a href="https://twitter.com/girishsarwal" target="_blank"><i class="fa fa-twitter"></i></a></li>
									<li class="social-item"><a href="https://www.linkedin.com/in/girishsarwal" target="_blank"><i class="fa fa-linkedin"></i></a></li>
									<li class="social-item"><a href="http://www.girishsarwal.me" target="_blank"><i class="fa fa-link"></i></a></li>
								</ul>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-lg-offset-0 col-md-8 col-md-offset-2 col-sm-12 mb-40">
						<div class="team-card">
						<figure class="team-card-image"><img src="http://prsr.me/assets/images/profile.jpg" alt="Prakhar Srivastava" title="Prakhar Srivastava"  /></figure>
						<div class="team-card-content">
							<h2 class="team-card-title">Mr. Prakhar Srivastava</h2>
							<p class="team-card-job"><a href="./episodes/season1/episode2.html" target="_blank"><i class="fa fa-link"></i> S01E02</a></p>
							<p class="team-card-description">Click the links below to know more about him.</p>
							<ul class="team-card-social">
								<li class="social-item"><a href="https://twitter.com/prakharcode" target="_blank"><i class="fa fa-twitter"></i></a></li>
								<li class="social-item"><a href="http://prsr.me/" target="_blank"><i class="fa fa-link"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-lg-offset-0 col-md-8 col-md-offset-2 col-sm-12 mb-40">
					<div class="team-card">
					<figure class="team-card-image"><img src="assets/img/ep/vipul.png" alt="Vipul Gupta" title="Vipul Gupta"  /></figure>
					<div class="team-card-content">
						<h2 class="team-card-title">Mr. Vipul Gupta</h2>
						<p class="team-card-job"><a href="./episodes/season1/episode2.html" target="_blank"><i class="fa fa-link"></i> S01E02</a></p>
						<p class="team-card-description">Click the links below to know more about him.</p>
						<ul class="team-card-social">
							<li class="social-item"><a href="https://twitter.com/vipulgupta2048" target="_blank"><i class="fa fa-twitter"></i></a></li>
							<li class="social-item"><a href="http://www.mixstersite.wordpress.com" target="_blank"><i class="fa fa-link"></i></a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<section id="about-us" class="section-negative" style="background-color: #3abeff; ">
	<div class="container">
		<h2 class="title-default text-center">Huge thanks to our sponsors! (๑✪ᆺ✪๑)</h2>
		<div class="row mb-30">
			<div class="col-lg-4 col-lg-offset-0 col-md-8 col-md-offset-2 col-sm-12 mb-40">
			</div>
			<div class="col-lg-4 col-lg-offset-0 col-md-8 col-md-offset-2 col-sm-12 mb-40">
				<div class="team-card">
					<a href="https://www.91springboard.com" target="_blank"><img src="assets/img/sponsors/91sb.png" alt="91springboard" title="91springboard" style="background-color: #3abeff;" /></a>
				</div>
			</div>
		</div>
	</section>
	<section id="about-us" class="section-negative" style="background-color: #fff">
		<div class="container">
			<h2 class="title-default text-center">The Host</h2>
			<div class="row mb-30">
				<div class="col-lg-4 col-lg-offset-0 col-md-8 col-md-offset-2 col-sm-12 mb-40">
				</div>
				<div class="col-lg-4 col-lg-offset-0 col-md-8 col-md-offset-2 col-sm-12 mb-40">
					<div class="team-card">
					<figure class="team-card-image"><img src="assets/img/team/ayan.jpeg" alt="Ayan Pahwa" title="Ayan Pahwa" /></figure>
					<div class="team-card-content">
						<h2 class="team-card-title">Ayan Pahwa</h2>
						<p class="team-card-job">Host and Production</p>
						<p class="team-card-description">Content creator, maker, RC hobbyist and an embedded software engineer. <br><br>Know more about him by clicking the links below!</p>
						<ul class="team-card-social">
							<li class="social-item"><a href="https://twitter.com/iAyanPahwa" target="_blank"><i class="fa fa-twitter"></i></a></li>
							<li class="social-item"><a href="https://instagram.com/iAyanPahwa" target="_blank"><i class="fa fa-instagram"></i></a></li>
							<li class="social-item"><a href="http://linkedin.com/in/iayanpahwa" target="_blank"><i class="fa fa-linkedin"></i></a></li>
							<li class="social-item"><a href="https://youtube.com/in/iayanpahwa" target="_blank"><i class="fa fa-youtube-play"></i></a></li>
							<li class="social-item"><a href="http://iayanpahwa.github.io" target="_blank"><i class="fa fa-link"></i></a></li>
						</ul>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-lg-offset-0 col-md-8 col-md-offset-2 col-sm-12 mb-40">
			</div>
		</div>
	</section>
</main>

<!-- FOOOOOOOOOOOOOOTER -->
<footer class="footer">
	<section class="section-positive">
		<div class="container">
			<div class="row mt-70 mb-30">
				<div class="col-sm-4 mb-40">
					<h2 class="title-separator white">Lastest Episodes</h2>
					<ul class="footer-complement">
						<li>
							<a href="/episodes/season1/episode2.html">Episode 02 - Talking GSoC and Opensource <span><br> With Prakhar and Vipul</span></a>
						</li>
						<li>
							<a href="./episodes/season1/episode1.html">Episode 01 - Why this is the best time to get into tech? <span><br> With Girish Sarwal</span></a>
						</li>
					</ul>
				</div>
				<div class="col-sm-4 mb-40">
					<h2 class="title-separator white">Donate Us</h2>
					<ul class="footer-complement">
						<li>
							<a href="">Soon.</a>
						</li>
					</ul>
				</div>
				<div class="col-sm-4 mb-40">
					<h2 class="title-separator white">We are social</h2>
					<ul class="social-list">
						<li class="social-item"><a href="https://www.twitter.com/decompiled_pod" target="_blank"><i class="fa fa-twitter"></i></a></li>
						<li class="social-item"><a href="https://www.instagram.com/decompiled_pod" target="_blank"><i class="fa fa-instagram"></i></a></li>
						<li class="social-item"><a href="https://www.facebook.com/groups/decompiled.pod" target="_blank"><i class="fa fa-facebook"></i></a></li>
						<li class="social-item"><a href="https://feeds.buzzsprout.com/257871.rss" target="_blank"><i class="fa fa-rss"></i></a></li>
						<li class="social-item"><a href="https://soundcloud.com/user-607028135" target="_blank"><i class="fa fa-soundcloud"></i></a></li>
						<li class="social-item"><a href="index.html#" target="_blank"><i class="fa fa-music"></i></a></li>
						<li class="social-item"><a href="https://www.youtube.com/channel/UC-aGua5oA3n-XQXN-teKYKA" target="_blank"><i class="fa fa-youtube"></i></a></li>
						<li class="social-item"><a href="https://open.spotify.com/episode/0qnDwHvUlz45mYWcCx4PH4?si=ny7T_waDQ0yMFurcFF7exw" target="_blank"><i class="fa fa-spotify"></i></a></li>
					</ul>
				</div>
			</div>
		</div>
	</section>
	<section class="footer-credits">
		<div class="container">
			<div class="row">
				<div class="col-sm-6 footer-logo">
					<h1 class="logo_footer"><a href="index.html"><img itemprop="logo" src="assets/img/logo/logo.png" title="Decompiled! Indigenous Podcast for Engineers, students makers & entrepreneurs. Tune In, listen real life experiences & stay on edge with evolving technology world. " alt="Decompiled!" /></a></h1>
				</div>
				<div class="col-sm-6 text-right">
					<br>
					CronByte &copy; 2019 All rights reserved.
				</div>
			</div>
		</div>
	</section>
</footer>
<script src="assets/js/jquery-1.11.min.js"></script>
<script src="assets/js/modernizr.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/mediaelement-and-player.min.js"></script>
<script src="assets/js/magnific-popup.min.js"></script>
<script src="assets/js/validate.min.js"></script>
<script src="assets/js/placeholder.min.js"></script>
<script src="assets/js/main.js"></script>
</body>
</html>

