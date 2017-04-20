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
				<div id='description'>
				<!--Description complète-->
				<div class='description'>Missions</div> 
				<p>  
					<?php $tasks = split(';',$metier->tasks); 
						foreach ($tasks as $id => $value) {
							?>
							<ul>
								<li> <?= $value ?> </li>
							</ul>	
					<?php } 
					?> 
				</p>
				<div class='description'>Compétences</div> 				
				<p>
					<?php $skills = split(';',$metier->skills);
						foreach ($skills as $id => $value) {?>
							<ul>
								<li> <?= $value ?> </li>
							</ul>
					<?php }
					?>		
				</p>
					<!--<?= $metier->tasks; ?> -->
				<div class='description'>Avantages</div> 
				<p>
					<?php $advantages = split(';',$metier->advantages);
						foreach ($advantages as $id => $value) {?>
							<ul>
								<li> <?= $value ?> </li>
							</ul>
					<?php }
					?>		
				</p>
				<div class='description'>Inconvénients</div> 
				<p>
					<?php $disadvantages = split(';',$metier->disadvantages);
						foreach ($disadvantages as $id => $value) {?>
							<ul>
								<li> <?= $value ?> </li>
							</ul>
					<?php }
					?>		
				</p>
				<div class='description'>Catégorie thématique</div>
					<p> <?= $metier->theme; ?> </p>

				<div class='description'>Lieux d'exercice</div> 
				<p>
					<?php $place = split(';',$metier->place);
						foreach ($place as $id => $value) {?>
							<ul>
								<li> <?= $value ?> </li>
							</ul>
					<?php }
					?>		
				</p>
				<div class='description'>Niveau de motivation</div> 
					<p> <?= $metier->motivation_level; ?> </p>
				</div>
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







