<?php

session_start();

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !==true)
{
    header("location: index.php");
}


?>
<!DOCTYPE HTML>
<html>

<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
<title>Game zone: Place to get PC games for free</title>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- jQuery (necessary JavaScript plugins) -->
<script src="js/bootstrap.js"></script>
<!-- Custom Theme files -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<!-- Custom Theme files -->
<!--//theme-style-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Adventure Gaming  Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>

<script src="js/jquery.min.js"></script>

</head>
<body>
<script src="../../../../../../../m.servedby-buysellads.com/monetization.js" type="text/javascript"></script>
<script>
(function(){
	if(typeof _bsa !== 'undefined' && _bsa) {
  		// format, zoneKey, segment:value, options
  		_bsa.init('flexbar', 'CKYI627U', 'placement:w3layoutscom');
  	}
})();
</script>
<script>
(function(){
if(typeof _bsa !== 'undefined' && _bsa) {
	// format, zoneKey, segment:value, options
	_bsa.init('fancybar', 'CKYDL2JN', 'placement:demo');
}
})();
</script>
<script>
(function(){
	if(typeof _bsa !== 'undefined' && _bsa) {
  		// format, zoneKey, segment:value, options
  		_bsa.init('stickybox', 'CKYI653J', 'placement:w3layoutscom');
  	}
})();
</script>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src='https://www.googletagmanager.com/gtag/js?id=UA-149859901-1'></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-149859901-1');
</script>

<script>
     window.ga=window.ga||function(){(ga.q=ga.q||[]).push(arguments)};ga.l=+new Date;
     ga('create', 'UA-149859901-1', 'demo.w3layouts.com');
     ga('require', 'eventTracker');
     ga('require', 'outboundLinkTracker');
     ga('require', 'urlChangeTracker');
     ga('send', 'pageview');
   </script>
<script async src='../../../../../../js/autotrack.js'></script>

<meta name="robots" content="noindex">
<body><link rel="stylesheet" href="../../../../../../assests/css/font-awesome.min.css">
<!-- New toolbar-->
<style>
* {
  box-sizing: border-box;
  font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Oxygen-Sans, Ubuntu, Cantarell, "Helvetica Neue", sans-serif;
}


#w3lDemoBar.w3l-demo-bar {
  top: 0;
  right: 0;
  bottom: 0;
  z-index: 9999;
  padding: 40px 5px;
  padding-top:70px;
  margin-bottom: 70px;
  background: #0D1326;
  border-top-left-radius: 9px;
  border-bottom-left-radius: 9px;
}

#w3lDemoBar.w3l-demo-bar a {
  display: block;
  color: #e6ebff;
  text-decoration: none;
  line-height: 24px;
  opacity: .6;
  margin-bottom: 20px;
  text-align: center;
}

#w3lDemoBar.w3l-demo-bar span.w3l-icon {
  display: block;
}

#w3lDemoBar.w3l-demo-bar a:hover {
  opacity: 1;
}

#w3lDemoBar.w3l-demo-bar .w3l-icon svg {
  color: #e6ebff;
}
#w3lDemoBar.w3l-demo-bar .responsive-icons {
  margin-top: 30px;
  border-top: 1px solid #41414d;
  padding-top: 40px;
}
#w3lDemoBar.w3l-demo-bar .demo-btns {
  border-top: 1px solid #41414d;
  padding-top: 30px;
}
#w3lDemoBar.w3l-demo-bar .responsive-icons a span.fa {
  font-size: 26px;
}
#w3lDemoBar.w3l-demo-bar .no-margin-bottom{
  margin-bottom:0;
}
.toggle-right-sidebar span {
  background: #0D1326;
  width: 50px;
  height: 50px;
  line-height: 50px;
  text-align: center;
  color: #e6ebff;
  border-radius: 50px;
  font-size: 26px;
  cursor: pointer;
  opacity: .5;
}
.pull-right {
  float: right;
  position: fixed;
  right: 0px;
  top: 70px;
  width: 90px;
  z-index: 99999;
  text-align: center;
}



</style>

<!-- header -->
<div class="top-banner">
	 <div class="header">
		 <div class="container">
			 <div class="headr-left">
				 <div class="social">							
						<a target="_blank" href="https://www.facebook.com/"><i class="facebook"></i></a>
						<a target="_blank" href="https://twitter.com/?lang=en"><i class="twitter"></i></a>
						<a target="_blank" href="https://www.instagram.com/?hl=en"><i class="pin"></i></a>	
						<a target="_blank" href="https://in.pinterest.com/"><i class="youtube"></i></a>	
				 </div>
				 <div class="clearfix"></div>
			 </div>
			 <div class="headr-right">
				 <div class="details">
					 <ul>
						 <li>&nbsp; &nbsp; &nbsp;&nbsp;  &nbsp; &nbsp; &nbsp; &nbsp;  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span class="glyphicon glyphicon-user" aria-hidden="true"></span>&nbsp;<?php echo "Welcome ". $_SESSION["name"]?></li>
						 <li><a href="logout.php">Logout</a></li>
					 </ul>
				 </div>
			 </div>
			 <div class="clearfix"></div>
		 </div>
	 </div>
	 </div>
	 <!--banner-info-->	
	 <div class="banner-info">
		  <div class="container">
		  <div class="logo">
					 <h1><a href="home.php">Game zone</a></h1>
			  </div>
			 <div class="top-menu">
				 <span class="menu"></span>
					<ul class="nav1">
						 <li class="active"><a href="home.php">Home</a></li>
						 <li><a href="about.php">About</a></li>
						 <li><a href="gallery.php">Wallpapers</a></li>
						 <li><a href="contact.php">Query</a></li>
			  </ul>
		 </div>	
	 <!-- script-for-menu -->
						<script>
							 $( "span.menu" ).click(function() {
							$( "ul.nav1" ).slideToggle( 300, function() {
							// Animation complete.
								});
								});
						</script>
					<!-- /script-for-menu -->
			 
			 <div class="clearfix"></div>
		 </div>
	 </div>
</div>
<!-- banner -->
	 <!-- Slider-starts-Here -->
	 <script src="js/responsiveslides.min.js"></script>
	 <script>
		$(function () {
		  $("#slider").responsiveSlides({
			auto:true,
			nav: false,
			speed: 500,
			namespace: "callbacks",
			pager:true,
		  });
		});
		
	   </script>
	 <div class="slider">
		  <div class="callbacks_container">
			  <ul class="rslides" id="slider">
				
					<div class="slid banner1">
						  <div class="caption">
								<h3>Halo: MCC - Master Chief Collection</h3>
								<p>Game based on human-alien war where the main character named masterchief saves the earth from the covenant forces. MCC consists of all the games in redefined way.</p>
						  </div>
					</div>
				
				
					 <div class="slid banner2">	
						  <div class="caption">
								<h3>God of war</h3>
								<p>An action pack game in which a Spartan warrior was sent by the Greek gods to kill Ares, the god of war. As the story progresses, Kratos is revealed to be Ares' former servant, who had been tricked into killing his own family and is haunted by terrible nightmares. </p>
						  </div>
					 </div>
				
				
					<div class="slid banner3">	
						<div class="caption">
							<h3>Battlefield 4 </h3>
							<p>It is the genre-defining action blockbuster made from moments that blur the line between game and glory. Battlefield grants you the freedom to do more and be more while playing to your strengths and carving your own path to victory.</p>
						</div>
					</div>
				
			  </ul>
		 </div>
	 </div>
<!---728x90--->


<!-- content -->
<div class="content">
	 <div class="container">
		 <div class="top-games">
			 <h3>Top Genres</h3>
			 <span></span>
		 </div>
		 <div class="top-game-grids">
			 <ul id="flexiselDemo1">
				 <li>
					 <div class="game-grid">
						 <a target="_blank" href="https://oceansofgamess.com/action/">
						 <h4>Action Games</h4>
						 <p>Full of violence</p>
						 <img src="images/t1.jpg" class="img-responsive" alt=""/></a>
					 </div>	
				 </li>
				 <li>
					 <div class="game-grid">
						 <a target="_blank" href="https://oceansofgamess.com/racing/">
						 <h4>Racing Games</h4>
						 <p>Real life racing experience</p>
						 <img src="images/t3.jpg" class="img-responsive" alt=""/></a>
					 </div>
				 </li>
				 <li>
					 <div class="game-grid">
						 <a target="_blank" href="https://oceansofgamess.com/strategy/">
						 <h4>Strategy games</h4>
						 <p>Exercise your brain power</p>
						 <img src="images/t4.jpg" class="img-responsive" alt=""/></a>
					 </div>
				 </li>
				 <li>
					 <div class="game-grid">
						 <a target="_blank" href="https://oceansofgamess.com/simulation/">
						 <h4>Simulation games</h4>
						 <p>Games to give real-life experience</p>
						 <img src="images/t2.jpg" class="img-responsive" alt=""/></a>
					 </div>	
				 </li>	
				 <li>
					 <div class="game-grid">
						 <a target="_blank" href="https://oceansofgamess.com/rpg/">
						 <h4>RPG-Role playing games</h4>
						 <p>Play game with characters perspective</p>
						 <img src="images/t5.jpg" class="img-responsive" alt=""/></a>
					 </div>	
				 </li>
			 </ul>
			 
			 <script type="text/javascript">
			 $(window).load(function() {			
			  $("#flexiselDemo1").flexisel({
				visibleItems: 4,
				animationSpeed: 1000,
				autoPlay: true,
				autoPlaySpeed: 3000,    		
				pauseOnHover:true,
				enableResponsiveBreakpoints: true,
				responsiveBreakpoints: { 
					portrait: { 
						changePoint:480,
						visibleItems: 1
					}, 
					landscape: { 
						changePoint:640,
						visibleItems: 2
					},
					tablet: { 
						changePoint:768,
						visibleItems: 3
					}
				}
			});
			});
			</script>
			<script type="text/javascript" src="js/jquery.flexisel.js"></script>	
		 </div>
	 </div>
</div>
<!-- latest -->
<!---728x90--->

<div class="latest">
	 <div class="container">
		 <div class="latest-games">
			 <h3>Latest Games</h3>
			 <span></span>
		 </div>
		 <div class="latest-top">				
				<div class="col-md-5 trailer-text">
				   <div class="sub-trailer">
				       <div class="col-md-4 sub-img">
							<img src="images/v2.jpg" alt="img07"/>
					   </div>
					   <div class="col-md-8 sub-text">
					   		 <a target="_blank" href="https://oceansofgamess.com/crysis-remastered-free-download/">Crysis remastered</a>
							 <a target="_blank" href="https://oceansofgamess.com/crysis-remastered-free-download/">Click here to download</a>
					   </div>
					    <div class="clearfix"> </div>
				   </div>
				    <div class="sub-trailer">
				       <div class="col-md-4 sub-img">
							<img src="images/v1.jpg" alt="img07"/>
					   </div>
					   <div class="col-md-8 sub-text">
					   		 <a target="_blank" href="https://oceansofgamess.com/forza-horizon-4-ultimate-edition-free-download-2/"> Forza Horizon 4: UE</a>
							 <a target="_blank" href="https://oceansofgamess.com/forza-horizon-4-ultimate-edition-free-download-2/">Click here to download</a>
					   </div>
					    <div class="clearfix"> </div>
				   </div>
				    <div class="sub-trailer">
				       <div class="col-md-4 sub-img">
							<img src="images/v3.jpg" alt="img07"/>
					   </div>
					   <div class="col-md-8 sub-text">
					   		 <a target="_blank" href="https://oceansofgamess.com/cyberpunk-2077-free-download/">Cyberpunk 2077</a>
							 <a target="_blank" href="https://oceansofgamess.com/cyberpunk-2077-free-download/">Click here to download</a>
							
					   </div>
					    <div class="clearfix"> </div>
				   </div>
				</div>
				<div class="col-md-7 trailer">
				 <iframe frameborder="0" scrolling="no" marginheight="0" marginwidth="0"width="788.54" height="443" type="text/html" src="https://www.youtube.com/embed/qIQ3xNqkVC4?autoplay=0&fs=0&iv_load_policy=3&showinfo=0&rel=0&cc_load_policy=0&start=0&end=0&origin=http://youtubeembedcode.com"></iframe>
				</div>
				 <div class="clearfix"> </div>
			</div>
	 </div>
</div>
<!---728x90--->

<!-- poster -->
<div class="poster">
	 <div class="container">
		 <div class="poster-info">
			 <h3>Why is it safe to download these pyrated games from our website.</h3>
			 <p>Our website basically runs on the donation provided by our users. Many websites
			 use systems of their users as their revenue generator where they use their system's GPU for bitcoin
			 mining and earn their profit. This thing not change even if you uninstall game.....</p>
			  <a target="_blank" class="hvr-bounce-to-bottom" href="about.php">Read More</a>
		 </div>
	 </div>
</div>
<!-- x-box -->
<div class="x-box">
	 <div class="container">	
		 <div class="x-box_sec">
			 <div class="col-md-7 x-box-left">
				 <h2>Playstation 5</h2>
				 <h3>A flagship product from Sony Interactive Entertainment</h3>
				 <p>The PlayStation 5 (PS5) is a home video game console developed by Sony Interactive Entertainment.
				 Announced in 2019 as the successor to the PlayStation 4, the PS5 was released on November 12, 2020, in Australia,
				 Japan, and South Korea, with worldwide release following a week later.....</p>
				 <a target="_blank" class="hvr-bounce-to-top" href="https://www.playstation.com/en-in/ps5/">Read More</a>
			 </div>
			 <div class="col-md-5 x-box-right">
				 <img src="images/ps5.jpg" class="img-responsive" alt=""/>
			 </div>
			 <div class="clearfix"></div>
		 </div>
	 </div>
</div>
<!-- footer -->
<div class="footer">
	 <div class="container">
		 <div class="footer-grids">
			 <div class="col-md-3 ftr-info">
				 <h3>About Us</h3>
				 <p>We have started this initiative to provide everyone with games which they can play for 
				 free without having fear to get any technical issue. </p>
			 </div>
			 <div class="col-md-3 ftr-grid">
				 <h3>Categories</h3>
				 <ul class="ftr-list">
					 <li><a target="_blank" href="https://oceansofgamess.com/action/" >Action</a></li>
					 <li><a target="_blank" href="https://oceansofgamess.com/racing/" >Racing</a></li>
					 <li><a target="_blank" href="https://oceansofgamess.com/strategy/" >Strategy</a></li>
					 <li><a target="_blank" href="https://oceansofgamess.com/simulation/">Simulation</a></li>
					 <li><a target="_blank" href="https://oceansofgamess.com/rpg/"	>RPG</a></li>
				 </ul>				 
			 </div>
			 <div class="col-md-3 ftr-grid">
				 <h3>Platform</h3>
				 <ul class="ftr-list">
					 <li><a target="_blank" href="https://oceansofgamess.com/" >Pc</a></li>
					 <li><a target="_blank" href="https://store.playstation.com/en-in/pages/latest/?emcid=pa-co-422254&gclid=CjwKCAjwoP6LBhBlEiwAvCcthObMcur7LiDA6PoTPjfCMLLihl7QJIGL4-_aL50L08kbmdf7_FbaUhoC00kQAvD_BwE&gclsrc=aw.ds" >Ps4</a></li>
					 <li><a target="_blank" href="https://www.microsoft.com/en-in/store/top-paid/games/xbox?icid=IN_UHF_Xbox_2020" >XBOX 360</a></li>					 
					 <li><a target="_blank" href="https://www.microsoft.com/en-in/store/top-paid/games/xbox?icid=IN_UHF_Xbox_2020" >XBOX ONE</a></li>
					 <li><a target="_blank" href="https://store.playstation.com/en-in/pages/latest/?emcid=pa-co-422254&gclid=CjwKCAjwoP6LBhBlEiwAvCcthObMcur7LiDA6PoTPjfCMLLihl7QJIGL4-_aL50L08kbmdf7_FbaUhoC00kQAvD_BwE&gclsrc=aw.ds" >PSP</a></li>
				 </ul>				 
			 </div>
			 <div class="col-md-3 ftr-grid">
				 <h3>Information</h3>
				 <ul class="ftr-list">	
					 <li><a target="_blank" href="contact.php">Contact Us</a></li>
					 <li><a target="_blank" href="https://www.disclaimergenerator.net/live.php?token=8JE9fWf7Hfi7uox33cWSErJhI53plFl2">Disclaimer</a></li>
					 <li><a target="_blank" href="https://www.privacypolicygenerator.info/live.php?token=P75HbwOU0VfwvkracCdZTgEuu7jFOkVZ">Privacy Policy</a></li>
					 <li><a target="_blank" href="https://www.termsandconditionsgenerator.com/live.php?token=tSkDlfiyy2Tn8hqvs6ui1WMDpPvAhFOj">Terms & Conditions</a></li>					 
				 </ul>				 
			 </div>		
			 <div class="clearfix"></div>
		 </div>
	 </div>
</div>
<!---->
<div class="copywrite">
	 <div class="container">
		 <p> © 2021 Game zone. All rights reserved | Design by <a href="about.php">Sajan Kumar Singh</a></p>
	 </div>
</div>
<!---->


	</body>


</html>