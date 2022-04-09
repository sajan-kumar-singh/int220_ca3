<?php

session_start();

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !==true)
{
    header("location: index.php");
}


?>

<!DOCTYPE HTML>
<html>

<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
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
						<li>&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span class="glyphicon glyphicon-user" aria-hidden="true"></span>&nbsp;<?php echo "Welcome ". $_SESSION["name"]?></li>
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
<!-- banner -->
<div class="banner">		  			
		<div class="bnr2">						  
	   </div>			 
</div>
<!---728x90--->


<!-- About -->
<div class="about">
	 <div class="container">
		 <h2>About</h2>
		 <div class="about-info-grids">
			 <div class="col-md-5 abt-pic">
				 <img src="images/abt.jpg" class="img-responsive" alt=""/>
			 </div>
			 <div class="col-md-7 abt-info-pic">
				 <h3>Sajan Kumar Singh</h3>
				 <p>Fonder of this company game zone where we provide the crack version
				 of games for pc and free games for playstation and xbox as well. 
				 We started this initiative to connect everyone with the world of
				 gaming and we do this on the donation provided by our users and we
				 don't harm system or misuse users data.</p>
				 <p>   </p>
				 <h4>Our objectives</h4>
				 <ul>
					 <li>No misuse of personal data.</li>
					 <li>Provide optimised game.</li>
					 <li>Make game available for everyone.</li>
					 <li>Keep everything free.</li>
					 <li>Provide genuine game.</li>
				 </ul>
			 </div>
			 <div class="clearfix"></div>
		 </div>
		   <div class="team">
			  <h3>Our Team</h3>	  
			  <div class="grid_4">
				<div class="team-grid">
						   <img src="images/a1.jpg" alt="">
						   <h4>Professor</h4>
						  <p>Mastermind in making plans and see that it executes properly. </p>
					  </div>
			  </div>
			  <div class="grid_4">
				 <div class="team-grid">
						   <img src="images/a2.jpg" alt="">
						   <h4>Joker</h4>
						  <p>HR of the company to provide all the things needed. </p>
					  </div>
			  </div>
			  <div class="grid_4 span66">
				<div class="team-grid">
						   <img src="images/a3.jpg" alt="">
						   <h4>Tony Stark</h4>
						  <p>CTO of the company to handle technical part. </p>
					  </div>
			  </div>      
			  <div class="grid_4">				 
					  <div class="team-grid">
						   <img src="images/a4.jpg" alt="">
						   <h4>John Wick</h4>
						  <p>COO of the company to look at each task. </p>
					  </div>					  
			 </div>
			 <div class="clearfix"></div> 
		  </div>
	 </div>
</div>
<!---728x90--->

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