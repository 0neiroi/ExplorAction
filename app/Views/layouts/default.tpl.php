<?php
if(empty($_SESSION['dejaFait'])) {
	$_SESSION['dejaFait'] = 1;
}
if(empty($_SESSION['numSem'])) {
	$_SESSION['numSem'];
}

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" /> 
	<meta name="keywords" content="orientation, éducation, métier, avenir, exploraction" />
	<script type="text/javascript" src="/assets/javascripts/jq.js"></script>
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	
	<link rel="Stylesheet" type="text/css" href="/assets/stylesheets/xo.css" />


	<link rel="stylesheet" type="text/css" href="/assets/stylesheets/modal.css">
	<!--<script type="text/javascript" src="scripts/jquery-1.3.2.min.js"></script>-->
	<script type="text/javascript" src="/assets/javascripts/jquery.backgroundPosition.js" ></script>

	<script type="text/javascript" src="/assets/javascripts/parallax/parallax.min.js"></script>
	<script type="text/javascript" src="/assets/javascripts/parallax/index.js"></script>
	<script type="text/javascript" src="/assets/javascripts/parallax/examples.js"></script>
	<!--Pure CSS-->
	<link rel="stylesheet" href="https://unpkg.com/purecss@0.6.2/build/pure-min.css" integrity="sha384-UQiGfs9ICog+LwheBSRCt1o5cbyKIHbwjWscjemyBMT9YCUMZffs6UqUTd0hObXD" crossorigin="anonymous">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!---->
	<script type="text/javascript" src="/assets/javascripts/script.js"></script>
	<script type="text/javascript" src="/assets/javascripts/keywords-animation.js"></script>

	<link rel="Stylesheet" type="text/css" href="/assets/stylesheets/index.css" />
	<link rel="stylesheet" type="text/css" href="/assets/stylesheets/presentation.css" />

	<link rel="stylesheet" type="text/css" href="/assets/stylesheets/animation.css" />

	<script src="js/modernizr.custom.js"></script>


	<!-- Autocomplete search -->
	<!-- ATTENTION IL FAUT CHANGER L'IMPORT DE JQUERY PLUS HAUT QUI NE FONCTIONNE PAS
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  	<link rel="stylesheet" href="/resources/demos/style.css"-->
  	<script src="http://code.jquery.com/ui/1.9.2/jquery-ui.js"></script>
  	<script type="text/javascript" src="/assets/javascripts/autocompletion.js"></script>


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
	<link rel="Stylesheet" type="text/css" href="/assets/stylesheets/w3.css" />

</head>
	<body>
		<div id="background">
			<div id="midground_1">
				<div id="foreground_1">
					<?php $this->yields('default');?>
				</div>
			</div>
		</div>
	</body>
</html>
