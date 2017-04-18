<?php
$user=$this->get('users');

$f=new Pragma\Forms\Form([
	'name' => 'userForm',
	'object'=>$user,
	'action'=>Pragma\Router\Router::url_for('users-index')
]);

$f2=new Pragma\Forms\Form([
	'name' => 'userCForm',
	'object'=>$user,
	'action'=>Pragma\Router\Router::url_for('users-index')
]);


?>
<?= $f->get_header(); ?>
<?= $f2->get_header(); ?>

	<?=$f->hidden_field(['name'=>'_METHOD','value'=>'POST']);?>
	<?=$f2->hidden_field(['name'=>'_METHOD','value'=>'POST']);?>

			<!--div id="content" class="black whitebg calibri f0 center w750 pad">
				<h1>What is Parallax.js?</h1-->
				

			<!--div class="black pure-g right wauto">
				<div class="pure-u-3-4 greybg">
					<!-- Modal content -->					
				<!--/div>
				<div class="pure-u-1-4">
					<div class="pure-g">
						<div class="pure-u-1 rounded greybg trim"><a href="#oModal"><h2>Qui es tu ?</h2></a></div>
						<div class="pure-u-1 rounded greybg trim"><h2>Ma salle de classe</h2></div>
						<div class="pure-u-1 rounded greybg trim"><h2>Mes cartes à jouer</h2></div>
						<div class="pure-u-1 rounded greybg trim"><h2>Mes paramètres</h2></div>
					</div>

				</div>
			w3-animate-right

			</div-->


			<div class="w3-sidebar w3-light-grey w3-card-4 " style="width:200px" id="mySidebar">
				  <div class="w3-bar w3-dark-grey">
				  <span class="w3-bar-item w3-padding-16"><a href="#oModal-SignIn"><img src="/assets/images/Log_In.png" class="img-icon-profil" alt="Sign in"></a><a href="#oModal-SignUp"><img src="/assets/images/Sign_up.png" class="img-icon-profil" alt="Sign up"></a></span>
				  <button onclick="w3_close()"
				  class="w3-bar-item w3-button w3-right w3-padding-16" title="close Sidebar">&times;</button>
				  </div>
				  <div class="w3-bar-block">
					  <a class="w3-bar-item w3-button" href="#oModal">Qui es tu ?</a>
					  <a class="w3-bar-item w3-button" href="#oModal-2">Ma salle de classe</a>
					  <a class="w3-bar-item w3-button" href="javascript:void(0)">Mes cartes à jouer</a>
					  <a class="w3-bar-item w3-button" href="javascript:void(0)">Mes paramètres</a>
				  </div>
			</div>

			<!--div id="main" style="margin-left:200px">

				<div class="w3-container w3-display-container">
				  <span title="open Sidebar" style="display:none" id="openNav" class="w3-button w3-transparent w3-display-topleft w3-xlarge" onclick="w3_open()">&#9776;</span>
				  <h3 class="h3" style="position:fixed;top:36px;">My Page</h3>
				</div>

			</div>

			<script>
			function w3_open() {
			  document.getElementById("main").style.marginLeft = "180px";
			  document.getElementById("mySidebar").style.width = "180px";
			  document.getElementById("mySidebar").style.display = "block";
			  document.getElementById("openNav").style.display = 'none';
			}
			function w3_close() {
			  document.getElementById("main").style.marginLeft = "0";
			  document.getElementById("mySidebar").style.display = "none";
			  document.getElementById("openNav").style.display = "inline-block";
			}
			</script-->

				<div id="oModal" class="oModal black">
				  <div>
				    <header>
				      <a href="#fermer" title="Fermer la fenêtre" class="droite">X</a>
				       <h2>Bienvenue Utilisateur</h2>
				     </header>
				     <section>
				      <p>Suite à l'étude de ton profil, nous pouvons te dire blablablablablablablablablablablabla blablablablablabla blablablablablabla </p>
				     </section>
				     <footer class="cf">
				      <a href="#fermer" class="btn droite" title="Fermer la fenêtre">Fermer</a>
				     </footer>
				  </div>
				</div>
		 		<div id="oModal-2" class="oModal black">
				  <div>
				    <header>
				      <a href="#fermer" title="Fermer la fenêtre" class="droite">X</a>
				       <h2>La Salle de Classe</h2>
				     </header>
				     <section>
				      <p>Voici ta salle de classe, ici tu trouveras tout ce qui est en lien avec les activités proposées en cours </p>
				     </section>
				     <footer class="cf">
				      <a href="#fermer" class="btn droite" title="Fermer la fenêtre">Fermer</a>
				     </footer>
				  </div>
				</div>

				<div id="oModal-SignUp" class="oModal black">
				  <div>
				    <header>
				      <a href="#fermer" title="Fermer la fenêtre" class="droite">X</a>
				       <h2>Bienvenue utilisateur</h2>
				     </header>
				     <section>
						<div class="panel">
							<div id="credentials">
								<div class="black">
									<label for="username">Nom d'utilisateur</label> 
									<?=$f->text_field(['name'=>'users[username]','db_field'=>'username','id'=>'username']);?>
								</div>
								<div class="black">
									<label for="password">Mot de passe</label> 
									<?=$f->password_field(['name'=>'users[password]','db_field'=>'password','id'=>'password']);?>
								</div>
								<div class="black">
									<label for="password2">Confirmation</label> 
									<?=$f->password_field(['name'=>'users[password2]','db_field'=>'password2','id'=>'password2']);?>
								</div>
								<div class="black">
									<label for="email">e-mail</label> 
									<?=$f->text_field(['name'=>'users[email]','db_field'=>'email','id'=>'email']);?>
								</div>
							</div>
							<div class="black">
								<?=$f->submit_field(['value'=>'S\'inscrire']);?>
							</div>
							<?= $f->close(); ?>
						</div>
				     </section>
				     <footer class="cf">
				      <a href="#fermer" class="btn droite" title="Fermer la fenêtre">Fermer</a>
				     </footer>
				  </div>
				</div>

				<div id="oModal-SignIn" class="oModal black">
				  <div>
				    <header>
				      <a href="#fermer" title="Fermer la fenêtre" class="droite">X</a>
				       <h2>Bienvenue <?php if(isset($user)){echo $user->username;}else{echo 'utilisateur';}?></h2>
				     </header>
				     <section>
						<div class="panel">
							<div id="credentials">
								<div class="black">
									<label for="username">Nom d'utilisateur</label> 
										<?=$f->text_field(['name'=>'users[username]','db_field'=>'username','id'=>'username']);?>
								</div>
								<div class="black">
									<label for="password">Mot de passe</label> 
									<?=$f->password_field(['name'=>'users[password]','db_field'=>'password','id'=>'password']);?>
								</div>
		  					</div>
							<div class="black">
								<?=$f->submit_field(['value'=>'Se connecter']);?>
							</div>
							<?= $f->close(); ?>
						</div>
				     </section>
				     <footer class="cf">
				      <a href="#fermer" class="btn droite" title="Fermer la fenêtre">Fermer</a>
				     </footer>
				  </div>
				</div>
				


			<!--/div-->
