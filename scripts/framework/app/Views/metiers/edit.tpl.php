<?php
$metier=$this->get('metier');

$f=new Pragma\Forms\Form([
	'name' => 'metierForm',
	'object'=>$metier,
	'action'=>$metier->is_new()?Pragma\Router\Router::url_for('metiers-create'):Pragma\Router\Router::url_for('metiers-update',['id'=>$metier->id])
	]);

?>
<?= $f->get_header(); ?>
<?php 
if(!$metier->is_new()){
?>	
	<?=$f->hidden_field(['name'=>'_METHOD','value'=>'PUT']);?>
<?php
}?>
<!--
	'name' => 'text_field',
	'id' =>  null,
	'db_field' => null,
	'value' =>  null,
	'classes' => '',
	'additional_attributes' => '',
	'dom_extension' =>  null
-->

<div>
	<label for="job_title">Nom du métier</label> 
	<?=$f->text_field(['name'=>'metier[job_title]','db_field'=>'job_title','id'=>'job_title']);?>
</div>
<div>
	<label for="keywords">Mot-clé (séparés par un ;)</label> 
	<?=$f->textarea_field(['name'=>'metier[keywords]','db_field'=>'keywords','id'=>'keywords']);?>
</div>
<div>
	<label for="description">Description</label> 
	<?=$f->text_field(['name'=>'metier[description]','db_field'=>'description','id'=>'description']);?>
</div>
<div>
	<label for="theme">Thème</label> 
	<?=$f->text_field(['name'=>'metier[theme]','db_field'=>'theme','id'=>'theme']);?>
</div>
<div>
	<label for="place">Lieux d'exercice (séparés par un ;)</label> 
	<?=$f->textarea_field(['name'=>'metier[place]','db_field'=>'place','id'=>'place']);?>
</div>
<div>
	<label for="motivation_level">Motivation (en pourcentage)</label> 
	<?=$f->text_field(['name'=>'metier[motivation_level]','db_field'=>'motivation_level','id'=>'motivation_level']);?>
</div>
<div>
	<label for="media_link">Média</label> 
	<?=$f->textarea_field(['name'=>'metier[media_link]','db_field'=>'media_link','id'=>'media_link']);?>
</div>
<div>
	<label for="img">Image</label> 
	<?=$f->textarea_field(['name'=>'metier[img]','db_field'=>'img','id'=>'img']);?>
</div>
<div>
	<label for="tasks">tâches (séparées par un ;)</label> 
	<?=$f->textarea_field(['name'=>'metier[tasks]','db_field'=>'tasks','id'=>'tasks']);?>
</div>
<div>
	<label for="school_type">Type d'école</label> 
	<?=$f->text_field(['name'=>'metier[school_type]','db_field'=>'school_type','id'=>'school_type']);?>
</div>
<div>
	<label for="subjects">matière (séparées par un ;)</label> 
	<?=$f->textarea_field(['name'=>'metier[subjects]','db_field'=>'subjects','id'=>'subjects']);?>
</div>
<div>
	<label for="skills">Compétences (séparées par un ;)</label> 
	<?=$f->textarea_field(['name'=>'metier[skills]','db_field'=>'skills','id'=>'skills']);?>
</div>
<div>
	<label for="advantages">Avantages (séparés par un ;)</label> 
	<?=$f->textarea_field(['name'=>'metier[advantages]','db_field'=>'advantages','id'=>'advantages']);?>
</div>
<div>
	<label for="disadvantages">Inconvéniants (séparés par un ;)</label> 
	<?=$f->textarea_field(['name'=>'metier[disadvantages]','db_field'=>'disadvantages','id'=>'disadvantages']);?>
</div>
<div>
	<label for="riasec">Riasec</label> 
	<?=$f->text_field(['name'=>'metier[riasec]','db_field'=>'riasec','id'=>'riasec']);?>
</div>
<div>
	<label for="access_diploma">Condition d'accès</label> 
	<?=$f->text_field(['name'=>'metier[access_diploma]','db_field'=>'access_diploma','id'=>'access_diploma']);?>
</div>
<div>
	<label for="salary">Salaire</label> 
	<?=$f->text_field(['name'=>'metier[salary]','db_field'=>'salary','id'=>'salary']);?>
</div>
<div>
	<label for="infography">Infographie</label> 
	<?=$f->textarea_field(['name'=>'metier[infography]','db_field'=>'infography','id'=>'infography']);?>
</div>
<div>
	<label for="similar_job">Métiers similaires</label> 
	<?=$f->text_field(['name'=>'metier[similar_job]','db_field'=>'similar_job','id'=>'similar_job']);?>
</div>
<div>
	<label for="useful_links">Liens utiles</label> 
	<?=$f->textarea_field(['name'=>'metier[useful_links]','db_field'=>'useful_links','id'=>'useful_links']);?>
</div>
<div>
	<?=$f->submit_field(['value'=>'Enregistrer']);?>
</div>
<?= $f->close(); ?>