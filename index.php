<html>
<head>
	<meta charset="utf-8" /> 
	<meta name="keywords" content="orientation, éducation, métier, avenir, exploraction" />
	<!--<script type="text/javascript" src="scripts/jq.js"></script>-->
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<link rel="Stylesheet" type="text/css" href="styles/xo.css" />

	<!--<script type="text/javascript" src="scripts/jquery-1.3.2.min.js"></script>-->
	<script type="text/javascript" src="scripts/jquery.backgroundPosition.js" ></script>

	<script type="text/javascript" src="scripts/parallax/parallax.min.js"></script>
	<script type="text/javascript" src="scripts/parallax/index.js"></script>
	<script type="text/javascript" src="scripts/parallax/examples.js"></script>

	<script type="text/javascript" src="scripts/script.js"></script>
	<link rel="Stylesheet" type="text/css" href="styles/index.css" />
	<link rel="stylesheet" type="text/css" href="styles/presentation.css" />

	<link rel="stylesheet" type="text/css" href="styles/test.css" />

	<script src="js/modernizr.custom.js"></script>


	<!-- Autocomplete search -->
	<!-- ATTENTION IL FAUT CHANGER L'IMPORT DE JQUERY PLUS HAUT QUI NE FONCTIONNE PAS-->
	<!--<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  	<link rel="stylesheet" href="/resources/demos/style.css">-->
  	<script src="http://code.jquery.com/ui/1.9.2/jquery-ui.js"></script>
  	<script type="text/javascript" src="scripts/autocompletion.js"></script>


	<script type="text/javascript">

	  var _gaq = _gaq || [];
	  _gaq.push(['_setAccount', 'UA-34546066-1']);
	  _gaq.push(['_trackPageview']);

	  (function() {
	    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
	    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
	    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
	  })();

	</script>
</head>
<body>
				<div id="background">
				<div id="midground_1">
				<div id="foreground_1">

	<div class="container">


		<div id="index" class="leaguegothic white page">
			<div id="titlebox" class="f2 lghtgrey">
				<div class="f5 white">Exploraction</div>
				<span>Votre futur vous attend dès à présent ! Exploraction : un vent de fraicheur dans l'orientation. N'attendez plus, inscrivez-vous maintenant.</span>

			</div>
		</div>

		<?php include 'pages/description.php'; ?>

		<?php include 'pages/recherche.php'; ?>

		<?php include 'pages/presentation.php'; ?>

		<?php include 'pages/profil.php'; ?>

	</div>


	<div id="leftControl" class="control">
		<img id="leftArrow" class="arrow left" style="width:60px" src="img/parallax/arrowleft2.png"></img>
		<div id="leftText" class="dirText" style="float:right"> Test</div>
	</div>

	<div id="rightControl" class="control">
		<img id="rightArrow" class="arrow right" style="width:60px" src="img/parallax/arrowright2.png"></img>
		<div id="rightText" class="dirText" style="float:left"> Test</div>
	</div>

	<div id="topControl" class="control center" style="width:145px;left:45%;">
		<img id="topArrow" class="arrow left" style="height:60px" src="img/parallax/arrowtop2.png"></img>
		<div id="topText" class="dirText txtcenter" > Test</div>
	</div>

	<div id="bottomControl" class="control center" style="width:145px;left:45%;bottom:0px;">
		<div id="bottomText" class="dirText txtcenter"> Test</div>
		<img id="bottomArrow" class="arrow left" style="height:60px" src="img/parallax/arrowbottom2.png"></img>

	</div>

	
</div>
</div>
</div>


</body>
</html>
