
<div id="background">
<div id="midground_1">
<div id="foreground_1">

	<div class="container">

				

		<div id="index" class="leaguegothic white page">
			<div id="oModal" class="oModal black">
				  <div>
				    <header>
				      <a href="#fermer" title="Fermer la fenêtre" class="droite">X</a>
				       <h2>Bienvenue Utilisateur</h2>
				     </header>
				     <section>
				     <!--?php include '/RIASEC/RIASEC_accueil.php' ?-->
						<iframe width="420" height="315"
							src="https://www.youtube.com/embed/XGSy3_Czz8k?controls=0">
						</iframe>
				     </section>
				     <footer class="cf">
				      <a href="#fermer" class="btn droite" title="Fermer la fenêtre">Fermer</a>
				     </footer>
				  </div>
				</div>

			<?php $this->partial($this->getTemplatePath('pages/accueil.tpl.php'));?>
		</div>

		<div id="description" class="wrapper">
			<?php $this->partial($this->getTemplatePath('pages/description.tpl.php'));?>
		</div>


		<div id="recherche" class="leaguegothic white page f2">
			<?php $this->partial($this->getTemplatePath('pages/recherche.tpl.php'));?>
		</div>

		<div id="sandbox" class="leaguegothic white page">
			<?php $this->partial($this->getTemplatePath('pages/tool.tpl.php'));?>
		</div>

		<div id="profil" class="leaguegothic white page">
			<?php $this->partial($this->getTemplatePath('pages/profil.tpl.php'));?>
		</div>

	</div>


	<div id="leftControl" class="control">
		<img id="leftArrow" class="arrow left" style="width:60px" src="/assets/images/parallax/arrowleft2.png"></img>
		<div id="leftText" class="dirText" style="float:right"> Test</div>
	</div>

	<div id="rightControl" class="control">
		<img id="rightArrow" class="arrow right" style="width:60px" src="/assets/images/parallax/arrowright2.png"></img>
		<div id="rightText" class="dirText" style="float:left"> Test</div>
	</div>

	<div id="topControl" class="control center" style="width:145px;left:45%;">
		<img id="topArrow" class="arrow left" style="height:60px" src="/assets/images/parallax/arrowtop2.png"></img>
		<div id="topText" class="dirText txtcenter" > Test</div>
	</div>

	<div id="bottomControl" class="control center" style="width:145px;left:45%;bottom:0px;">
		<div id="bottomText" class="dirText txtcenter"> Test</div>
		<img id="bottomArrow" class="arrow left" style="height:60px" src="/assets/images/parallax/arrowbottom2.png"></img>
	</div>
	

	
</div>
</div>
</div>


