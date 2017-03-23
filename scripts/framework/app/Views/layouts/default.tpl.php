<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" /> 
		<script type="text/javascript" src="/scripts/jq.js"></script>
		<link rel="Stylesheet" type="text/css" href="/styles/xo.css" />

		<script type="text/javascript" src="/js/autocompletion.js"></script>

		<script type="text/javascript" src="/scripts/jquery-1.3.2.min.js"></script>
		<script type="text/javascript" src="/scripts/jquery.backgroundPosition.js" ></script>

		<script type="text/javascript" src="/scripts/parallax/parallax.min.js"></script>
		<script type="text/javascript" src="/scripts/parallax/index.js"></script>
		<script type="text/javascript" src="/scripts/parallax/examples.js"></script>
		<link rel="Stylesheet" type="text/css" href="/styles/index.css" />

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
					<?php $this->yields('default');?>
				</div>
			</div>
		</div>
	</body>
</html>