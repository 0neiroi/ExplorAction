<?php
$metiers = $this->get('metiers');
?>



<div id="background">
<div id="midground_1">
<div id="foreground_1">

	<div class="container">

				

		<div id="index" class="leaguegothic white page">
			<?php $this->partial($this->getTemplatePath('metiers/create.tpl.php'));?>
		</div>


		<div id="recherche" class="leaguegothic white page f2">
			<?php $this->partial($this->getTemplatePath('pages/recherche.tpl.php'));?>
		</div>

		<div id="sandbox" class="leaguegothic white page">
			<?php $this->partial($this->getTemplatePath('pages/tool.tpl.php'));?>
		</div>

		<div id="boo" class="leaguegothic white page clickable">
			<div class="center w400 " style="margin-top:20%;">
				<div class="lh0" style="font-size:300px;">BOO!</div>
				<div style="font-size:47px">Click anywhere to head back.</div>
			</div>
		</div>

		<div id="profil" class="leaguegothic white page">
			<?php $this->partial($this->getTemplatePath('metiers/edit.tpl.php'));?>
		</div>

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