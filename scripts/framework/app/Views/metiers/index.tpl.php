<?php
$metiers = $this->get('metiers');
?>
<h2> Liste des métiers </h2>
<a href="<?= Pragma\Router\Router::url_for('metiers-new');?>">Ajouter un metier</a>
<div>
	<?php
	foreach($metiers as $id => $m){
		?>
		<div>
			<p>
				<?= $m->job_title; ?>
			</p>
		</div>
		<?php
	}
	?>
</div>