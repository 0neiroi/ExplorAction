<!DOCTYPE html>

	<html>
		<head>
    			<title>RIASEC</title>
			<meta charset="utf-8"/>
			<link rel="stylesheet" href="styles/style.css" />
			<link rel="stylesheet" type="text/css" href="../assets/stylesheets/modal.css">
		</head>

		<body>
  
			<?php
				//Load items : 
				include 'Phase-1.php';
			?>

 			<div id='contener'>

				<header>
				<a href="http://exploraction/" title="Fermer la fenêtre" class="droite croix">X</a>
					<h1> Phase 1 : Occup'Action </h1>
            				<img src="img/sat.png" alt="Une image d'en-tête" />
            				

				</header>

				<div id="introduction"> 

  					<p class='intro_img'> <img src="img/sat2.png" alt="Une image d'en-tête" /> </p>
					<p> Salut jeune audacieux/se ! Je suis <b>EA1TRÉ 3D</b>, je vais te poser quelques questions pour t'aider à mieux cerner tes centres d'intérêt. Mon analyse se déroule en <b>trois étapes</b>, soit environ, une durée de <b> 22 minutes, 34 secondes et 47 microsecondes</b>. </br>Voici la première, l'étape <b>Occup'Action</b> ... elle sert à déterminer ce que tu aimes bien faire quotidiennement, dans ta petite vie de Terrien.	
					</p>

				</div>

				<div id="consigne">
					<p> Consignes : </p>
					
					<ul> 
						<li> Lorsque tu aimes faire cette activité, clique sur : <img src="img/1.jpg" alt="Image oui" />. </li>
						<li> Lorsque tu n'aimes pas faire cette activité, clique sur : <img src="img/2.jpg" alt="Image non" />. </li>
						<li> Enfin, quand tu ne sais pas ou que tu n'as pas envie de répondre à une question, tu peux cliquer sur : <img src="img/3.jpg" alt="Image je ne sais pas" /> </li>
						<li>Saches que plus tu donnes de réponses, meilleures seront mes analyses. </li>
						<li> Il n'y a pas de bonne ou de mauvaise réponse. </li>
					</ul>

				</div> 



 				<div class='formulaire'> 

					<!-- Form for the quizz -->
					<form action="RIASEC_Phase_2.php" method="post">
						
						<?php for($i = 0; $i < 2; $i++){

							$question_R = $Realiste[$i];

							echo "<p>$question_R</p>";
				
	  
							// Radio input type Realistic
							echo '<div>';
				
								echo '<span> <label><input type="radio" name="realistic'.$i.'" value="Oui" /><img src="img/1.jpg" alt="Image oui" /> </label> </span>';
								echo '<span> <label><input type="radio" name="realistic'.$i.'" value="Non" /><img src="img/2.jpg" alt="Image non" /></label> </span>';
								echo '<span> <label><input type="radio" name="realistic'.$i.'" value="Je ne sais pas" /><img src="img/3.jpg" alt="Image je ne sais pas" /></label> </span>

							</div>';

				
							$question_I=$Investigateur[$i];
							echo "<p>$question_I</p>";

							//Radio input type Investigative
							echo '<div> 

									<span> <label><input type="radio" name="investigative'.$i.'" value="Oui" /> <img src="img/1.jpg" alt="Image oui" /> </label> </span>';
								echo '<span> <label><input type="radio" name="investigative'.$i.'" value="Non" /> <img src="img/2.jpg" alt="Image non" /></label> </span>';
								echo '<span> <label><input type="radio" name="investigative'.$i.'" value="Je ne sais pas" /><img src="img/3.jpg" alt="Image je ne sais pas" /></label> </span>
		
							</div>';

							$question_A=$Artiste[$i];
							echo "<p>$question_A</p>";

							//Radio input type Artistic
							echo '<div> 

									<span> <label><input type="radio" name="artistic'.$i.'" value="Oui" /> <img src="img/1.jpg" alt="Image oui" /> </label> </span>';
								echo '<span> <label><input type="radio" name="artistic'.$i.'" value="Non" /> <img src="img/2.jpg" alt="Image non" /></label> </span>';
								echo '<span> <label><input type="radio" name="artistic'.$i.'" value="Je ne sais pas" /> <img src="img/3.jpg" alt="Image je ne sais pas" /></label> </span>
								
							</div>';

				
							$question_S=$Social[$i];
							echo "<p>$question_S</p>";

							//Radio input type Social
							echo '<div> 

									<span> <label><input type="radio" name="social'.$i.'" value="Oui" /> <img src="img/1.jpg" alt="Image oui" /> </label> </span>';
								echo '<span> <label><input type="radio" name="social'.$i.'" value="Non" /> <img src="img/2.jpg" alt="Image non" /></label> </span>';
								echo '<span> <label><input type="radio" name="social'.$i.'" value="Je ne sais pas" /> <img src="img/3.jpg" alt="Image je ne sais pas" /></label> </span>
		
							</div>';

				
							$question_E=$Entreprenant[$i];
							echo "<p>$question_E</p>";

							//Radio input type Enterprising
							echo '<div> 
				
									<span> <label><input type="radio" name="enterprising'.$i.'" value="Oui" /> <img src="img/1.jpg" alt="Image oui" /> </label> </span>';
								echo '<span> <label><input type="radio" name="enterprising'.$i.'" value="Non" /> <img src="img/2.jpg" alt="Image non" /></label> </span>';
								echo '<span> <label><input type="radio" name="enterprising'.$i.'" value="Je ne sais pas" /> <img src="img/3.jpg" alt="Image je ne sais pas" /></label> </span> 
		
							</div>';

				
							$question_C=$Conventionnel[$i];
							echo "<p>$question_C</p>";

							//Radio input type Conventional 
							echo '<div> 
				
									<span> <label><input type="radio" name="conventional'.$i.'" value="Oui" /><img src="img/1.jpg" alt="Image oui" /> </label> </span>';
								echo '<span> <label><input type="radio" name="conventional'.$i.'" value="Non" /> <img src="img/2.jpg" alt="Image non" /></label> </span>';
								echo '<span> <label><input type="radio" name="conventional'.$i.'" value="Je ne sais pas" /><img src="img/3.jpg" alt="Image je ne sais pas" /></label> </span>
		
							</div>';

						}//loop ending ?>
	
						
						<!-- Validation button -->
						<p class='button'> <input type="submit" value="Passer à l'étape suivante"/> </p>
					</form>

				</div> 
			</div> 


		</body>
	
	</html>
