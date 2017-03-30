<?php
use Pragma\Controller\BaseController;
use Pragma\Router\Router;
use App\Models\Metier;
	
	$metiers = $this->get('metiers');
	$metiersTab = $metiers[1];
	//var_dump($metiersTab->'fields');
	//var_dump($metiers['fields']);
	$tab = json_encode($metiers,JSON_UNESCAPED_SLASHES);
	//var_dump($tab);
	?>
	[
	<?php
	foreach($metiers as $id => $m){
		?>
			<?= $m->job_title; ?>,
		<?php
	}
	?>
	scheme]