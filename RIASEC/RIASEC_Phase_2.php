<!DOCTYPE html>

	<html>
		<head>
    			<title>RIASEC</title>
			<charset="utf-8"/>
			<link rel="stylesheet" href="styles/style2.css" />
		</head>

		<body>


			<?php
			// traitement des résultats Phase 1 
			$R_score=0;
			$I_score=0;
			$A_score=0;
			$S_score=0;
			$E_score=0;
			$C_score=0;
 

			for($i = 0; $i < 2; $i++){
				$R = $_POST['realistic'.$i];
				$I = $_POST['investigative'.$i];
				$A = $_POST['artistic'.$i];
				$S = $_POST['social'.$i];
				$E = $_POST['enterprising'.$i];
				$C = $_POST['conventional'.$i];	

				if($R=="Oui"){
					$R_score++;
				}
	
				if($R=="Non"){
					$R_score--;
				}
	
				if($I=="Oui"){
					$I_score++;
				}
	
				if($I=="Non"){
					$I_score--;
				}

				if($A=="Oui"){
					$A_score++;
				}
	
				if($A=="Non"){
					$A_score--;
				}

				if($S=="Oui"){
					$S_score++;
				}
	
				if($S=="Non"){
					$S_score--;
				}
	
				if($E=="Oui"){
					$E_score++;
				}
	
				if($E=="Non"){
					$E_score--;
				}

				if($C=="Oui"){
					$C_score++;
				}
	
				if($C=="Non"){
					$C_score--;
				}

			}

			session_start();
			
			$_SESSION['R'] = $R_score;
			$_SESSION['I'] = $I_score;
			$_SESSION['A'] = $A_score;
			$_SESSION['S'] = $S_score;
			$_SESSION['E'] = $E_score;
			$_SESSION['C'] = $C_score;

			?>

 			<div id='contener'>

				<header>
					<h1> Phase 2 : Image-In </h1>
            				<img src="img/sat.png" alt="Une image d'en-tête" />

				</header>

				<div id="introduction"> 

  
					<p> Bravo, tu as terminé la première étape ! Tu as été drôlement vite dis-donc ! </p>
					<p> Prêt(e) pour la seconde ? J'espère bien, car c'est celle que je préfère ! C'est parti !!! </p> </br>

				</div>

				<div id="introduction_p">

					<p> Voici quelques clichés que j'ai pris en me baladant au dessus de ta merveilleuse planète ... <b>Sélectionne ceux que tu préfères </b> mais attention, n'en choisis ni trop, ni pas assez ! </p>

				</div>


 				<div class='formulaire'> 

					<!-- Form for the quizz -->
					<form action="RIASEC_Phase_3.php" method="post">
						
						<?php for($i = 0; $i < 12; $i++){				
	  
							//Input type Realistic
				
								echo '<span> <label><input type="checkbox" name="realistic'.$i.'" value="R" /><img src="img/realistic/'.$i.'.jpg" alt="Image Réaliste" /> </label> </span>';

				

							//Input type Investigative
		
								echo '<span> <label><input type="checkbox" name="investigative'.$i.'" value="I" /><img src="img/investigative/'.$i.'.jpg" alt="Image Investigateur" /> </label> </span>'; 



							//Input type Artistic
								echo '<span> <label><input type="checkbox" name="artistic'.$i.'" value="A" /><img src="img/artistic/'.$i.'.jpg" alt="Image Artiste" /> </label> </span>'; 


							//Input type Social

								echo '<span> <label><input type="checkbox" name="social'.$i.'" value="S" /><img src="img/social1/'.$i.'.jpg" alt="Image Social" /> </label> </span>';

							//Input type Enterprising

								echo '<span> <label><input type="checkbox" name="enterprising'.$i.'" value="E" /><img src="img/enterprising/'.$i.'.jpg" alt="Image Entreprenant" /> </label> </span>';


							//Input type Conventional 
							
								echo '<span> <label><input type="checkbox" name="conventional'.$i.'" value="C" /><img src="img/conventional/'.$i.'.jpg" alt="Image Conventionnel" /> </label> </span>';
		

						}//loop ending 
?>
	
						
						<!-- Validation button -->
						<p class='button'> <input type="submit" value="Passer à l'étape suivante"/> </p>
					</form>

				</div> 
			</div> 


		</body>
	
	</html>
