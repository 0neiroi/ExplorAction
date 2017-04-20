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
				include 'Phase-3.php';

				// Traitement de la phase 2 : 

				session_start();
				$R_score=$_SESSION['R']; 
				$I_score=$_SESSION['I']; 
				$A_score=$_SESSION['A']; 
				$S_score=$_SESSION['S']; 
				$E_score=$_SESSION['E']; 
				$C_score=$_SESSION['C'];
 

				for($i = 0; $i < 12; $i++){
					$R = $_POST['realistic'.$i];
					$I = $_POST['investigative'.$i];
					$A = $_POST['artistic'.$i];
					$S = $_POST['social'.$i];
					$E = $_POST['enterprising'.$i];
					$C = $_POST['conventional'.$i];	

					if($R=="R"){
						$R_score++;
					}
	
					if($I=="I"){
						$I_score++;
					}

					if($A=="A"){
						$A_score++;
					}

					if($S=="S"){
						$S_score++;
					}
	
					if($E=="E"){
						$E_score++;
					}
	
					if($C=="C"){
						$C_score++;
					}

				}
			
			$_SESSION['R'] = $R_score;
			$_SESSION['I'] = $I_score;
			$_SESSION['A'] = $A_score;
			$_SESSION['S'] = $S_score;
			$_SESSION['E'] = $E_score;
			$_SESSION['C'] = $C_score;		
			?>

 			<div id='contener'>

				<header>
				<a href="http://exploraction/" title="Fermer la fenêtre" class="droite croix">X</a>
					<h1> Phase 3 : portrait-robot </h1>
            				<img src="img/sat.png" alt="Une image d'en-tête" />


				</header>

				<div id="introduction"> 

  
					<p>La deuxième étape est terminée, bravo ! Passons maintenant à la dernière ... Elle me permettra de mieux cerner ta personnalité. Prêt ? 	
					</p>

				</div>

				<div id="consigne">
					<p> Consignes : </p>
					
					<ul> 
						<li>Lorsque tu es d'accord, clique sur : <img src="img/1.jpg" alt="Image oui" />. </li>
						<li> Lorsque tu n'es pas d'accord, clique sur : <img src="img/2.jpg" alt="Image non" />. </li>
						<li> Enfin, quand tu ne sais pas ou que tu n'as pas envie de répondre à une question, tu peux cliquer sur : <img src="img/3.jpg" alt="Image je ne sais pas" /> </li>
						<li>Saches que plus tu donnes de réponses, meilleures seront mes analyses. </li>
						<li> Il n'y a pas de bonne ou de mauvaise réponse. </li>
					</ul>

				</div> 


				<div id="introduction_2">
					<p> Si je devais me décrire, je dirais que … </p> 
				</div>


 				<div class='formulaire'> 

					<!-- Form for the quizz -->
					<form action="RIASEC_resultats.php" method="post">
						
						<?php for($i = 0; $i < 2; $i++){

							$question_R3 = $Realiste_3[$i];

							echo "<p>$question_R3</p>";
				
	  
							// Radio input type Realistic
							echo '<div>';
				
								echo '<span> <label><input type="radio" name="realistic'.$i.'" value="Oui" /><img src="img/1.jpg" alt="Image oui" /> </label> </span>';
								echo '<span> <label><input type="radio" name="realistic'.$i.'" value="Non" /><img src="img/2.jpg" alt="Image non" /></label> </span>';
								echo '<span> <label><input type="radio" name="realistic'.$i.'" value="Je ne sais pas" /><img src="img/3.jpg" alt="Image je ne sais pas" /></label> </span>

							</div>';

				
							$question_I3=$Investigateur_3[$i];
							echo "<p>$question_I3</p>";

							//Radio input type Investigative
							echo '<div> 

									<span> <label><input type="radio" name="investigative'.$i.'" value="Oui" /> <img src="img/1.jpg" alt="Image oui" /> </label> </span>';
								echo '<span> <label><input type="radio" name="investigative'.$i.'" value="Non" /> <img src="img/2.jpg" alt="Image non" /></label> </span>';
								echo '<span> <label><input type="radio" name="investigative'.$i.'" value="Je ne sais pas" /><img src="img/3.jpg" alt="Image je ne sais pas" /></label> </span>
		
							</div>';

							$question_A3=$Artiste_3[$i];
							echo "<p>$question_A3</p>";

							//Radio input type Artistic
							echo '<div> 

									<span> <label><input type="radio" name="artistic'.$i.'" value="Oui" /> <img src="img/1.jpg" alt="Image oui" /> </label> </span>';
								echo '<span> <label><input type="radio" name="artistic'.$i.'" value="Non" /> <img src="img/2.jpg" alt="Image non" /></label> </span>';
								echo '<span> <label><input type="radio" name="artistic'.$i.'" value="Je ne sais pas" /> <img src="img/3.jpg" alt="Image je ne sais pas" /></label> </span>
								
							</div>';

				
							$question_S3=$Social_3[$i];
							echo "<p>$question_S3</p>";

							//Radio input type Social
							echo '<div> 

									<span> <label><input type="radio" name="social'.$i.'" value="Oui" /> <img src="img/1.jpg" alt="Image oui" /> </label> </span>';
								echo '<span> <label><input type="radio" name="social'.$i.'" value="Non" /> <img src="img/2.jpg" alt="Image non" /></label> </span>';
								echo '<span> <label><input type="radio" name="social'.$i.'" value="Je ne sais pas" /> <img src="img/3.jpg" alt="Image je ne sais pas" /></label> </span>
		
							</div>';

				
							$question_E3=$Entreprenant_3[$i];
							echo "<p>$question_E3</p>";

							//Radio input type Enterprising
							echo '<div> 
				
									<span> <label><input type="radio" name="enterprising'.$i.'" value="Oui" /> <img src="img/1.jpg" alt="Image oui" /> </label> </span>';
								echo '<span> <label><input type="radio" name="enterprising'.$i.'" value="Non" /> <img src="img/2.jpg" alt="Image non" /></label> </span>';
								echo '<span> <label><input type="radio" name="enterprising'.$i.'" value="Je ne sais pas" /> <img src="img/3.jpg" alt="Image je ne sais pas" /></label> </span> 
		
							</div>';

				
							$question_C3=$Conventionnel_3[$i];
							echo "<p>$question_C3</p>";

							//Radio input type Conventional 
							echo '<div> 
				
									<span> <label><input type="radio" name="conventional'.$i.'" value="Oui" /><img src="img/1.jpg" alt="Image oui" /> </label> </span>';
								echo '<span> <label><input type="radio" name="conventional'.$i.'" value="Non" /> <img src="img/2.jpg" alt="Image non" /></label> </span>';
								echo '<span> <label><input type="radio" name="conventional'.$i.'" value="Je ne sais pas" /><img src="img/3.jpg" alt="Image je ne sais pas" /></label> </span>
		
							</div>';

						}//loop ending  ?>
	
						
						<!-- Validation button -->
						<p class='button'> <input type="submit" value="Obtenir mes résultats"/> </p>
					</form>

				</div> 
			</div> 


		</body>
	
	</html>
