<?php
$metier=$this->get('metier');
?>
<div class="pure-g">
	<div class="pure-u-1-3">
		<h1><?= $metier->job_title; ?></h1>
	</div>
	<div class="pure-u-1-3"></div>
	<div class="pure-u-1-3"></div>
	<div class="pure-u-1">
		<div class="pure-g">
			<div class="pure-u-1">
				<p><?= $metier->description; ?></p>
			</div>
			

			<!--image section-->

			<div class="pure-u-1-10"></div>
			<div class="pure-u-2-10">
			<!--
			<?php
				$images = split(';',$metier->img);
			
			?>
				<img src=<?php echo "\"".$images[1]."\"";
				 ?>-->			
			</div>
			<div class="pure-u-1-10"></div>
			<div class="pure-u-2-10">
				<img src="">			
			</div>
			<div class="pure-u-1-10"></div>
			<div class="pure-u-2-10">
				<img src="">			
			</div>
			<div class="pure-u-1-10"></div>


			<!--RIASEC section-->
			<div class="pure-u-1-10"></div>
			<div class="pure-u-4-10">
			</div>
			<div class="pure-u-1-10"></div>
			<div class="pure-u-3-10">
				
			</div>
			<div class="pure-u-1-10"></div>

			<div class="pure-u-1">
				<!--Description complète-->
				<p>Missions</p> 
				<p>  
					<?php $tasks = split(';',$metier->tasks); 
						foreach ($tasks as $id => $value) {
							?>
							<div>
								<p> <?= $value ?> </p>
							</div>	
					<?php } 
					?> 
				</p>
				<p>Compétences</p>
					<!--<?= $metier->tasks; ?> -->
				<p>Avantages</p>
				<p>Inconvénients</p>
				<p>Description du métier</p>
				<p>Catégorie thématique</p>
				<p>Lieux d'exercices</p>
				<p>Longueur de la formation</p>
			</div>

			<div class="pure-u-1-13"></div>
			<div class="pure-u-3-13">
				

			</div>
			<div class="pure-u-1-13"></div>
			<div class="pure-u-3-13">
				

			</div>
			<div class="pure-u-1-13"></div>
			<div class="pure-u-3-13">
				

			</div>
			<div class="pure-u-1-13"></div>
		</div>		
	</div>
	<div class="pure-u-2-5"> </div>
	<div class="pure-u-1-5"><p> Up Arrow<p></div>
	<div class="pure-u-2-5"></div>

</div>







