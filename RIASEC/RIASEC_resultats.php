<!DOCTYPE html>

	<html>
		<head>
    			<title>RIASEC</title>
			<charset="utf-8"/>
			<link rel="stylesheet" href="styles/style.css" />
		</head>

		<body>
  
			<?php
				// Traitement des résultats Phase 3 : 
				session_start();
				$R_score=$_SESSION['R']; 
				$I_score=$_SESSION['I']; 
				$A_score=$_SESSION['A']; 
				$S_score=$_SESSION['S']; 
				$E_score=$_SESSION['E']; 
				$C_score=$_SESSION['C'];
 

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

				// Expression du score sur 20 : 
				$R_score=$R_score+4; 
				$I_score=$I_score+4; 
				$A_score=$A_score+4; 
				$S_score=$S_score+4; 
				$E_score=$E_score+4; 
				$C_score=$C_score+4;

				// Génération d'un code RIASEC (à améliorer cependant car ne renvoie que la première valeur max du tableau)
				$max = max($R_score,$I_score,$A_score,$S_score,$E_score,$C_score);
				$min = min($R_score,$I_score,$A_score,$S_score,$E_score,$C_score);
				
				$score_grades = array ("R" => $R_score, "I" => $I_score, "A" => $A_score, "S" => $S_score, "E" => $E_score, "C" => $C_score);
				$top_dim = array_search(max($score_grades),$score_grades);
				$min_dim = array_search(min($score_grades),$score_grades);
			?>

 			<div id='contener'>

				<header>
					<h1> Résultats RIASEC </h1>
            				<img src="img/sat.png" alt="Une image d'en-tête" />

				</header>

				<div id="introduction"> 

				<p>Bravo ! Tu es allé, jusqu'au bout. Tu es impressionnant ! Laisse moi maintenant te donner ton code. Il te permettra de recevoir des recommandations de métiers dans ton carnet de bord. Garde-le soigneusement !</p>

				</div>

				<div id="consigne_bis">
					<p> Code : </p>
					
					<ul> 
						<li><?php echo "Ton score sur la dimension <b>réaliste</b> est de : <b>".$R_score."</b>/20. </li>
						<li> Ton score sur la dimension <b>investigateur</b> est de : <b>".$I_score."</b>/20. </li>
						<li> Ton score sur la dimension <b>artiste</b> est de : <b>".$A_score."</b>/20. </li>
						<li> Ton score sur la dimension <b>sociale</b> est de : <b>".$S_score."</b>/20. </li>
						<li>Ton score sur la dimension <b>entreprenant</b> est de : <b>".$E_score."</b>/20. </li>
						<li>Ton score sur la dimension <b>conventionnel</b> est de : <b>".$C_score."</b>/20. </li>
					</ul>"; 
			
					echo "<span class='code_R'>Ton code personnel : </span><span class='code_R2'>".$top_dim.$max.$min_dim.$min."</span>"; 
?>

				</div> 

			
				<div id="introduction_2">
					<p>  Représentation de ton positionnement sur l'espace des intérêt : </p> 
				 

					<?php  //content="text/plain; charset=utf-8"
						require_once('jpgraph/jpgraph.php');
						require_once('jpgraph/jpgraph_radar.php');
						require_once('jpgraph/jpgraph_iconplot.php');
 
						// Some data to plot
						$data = array(55,80,46,71,95);
 
						// Create the graph and the plot
						$graph = new RadarGraph(250,200);
						$plot = new RadarPlot($data);
 
						// Add the plot and display the graph
						$graph->Add($plot);
						$graph->Stroke('./graph.png');

						echo "<img src='./graph.png' />";
					?>
				</div>

				<div id="profil">
					<p> Tu es le roi des bricoleurs ? Un athlète ? Ou un Monsieur/une Madame, « toujours le nez dehors » ? Oui, c'est bien de toi dont on parle ! Alors toi, tu es le boss des activités manuelles. Les trucs cassés n'ont pas de secret pour toi et tel un mage de la résurrection, tu leur offres une seconde vie. On peut dire que tu n'as pas froid aux yeux et aucun outil ne te résiste ! Habile, endurant et assez courageux pour braver les situations extrêmes de travail, on peut dire que tu en as dans la boîte à outils ! Autrement dit, mon radar l'atteste, tu es un Réaliste. Félicitations ! </p>

				<h2> Tes principales qualités pour un futur métier : </h2>

				<ul> 
						<li> Ton truc c'est le terrain ! Tu es un(e) fonceur/euse qui a besoin avant tout, d'agir et tout le monde t'admire pour ton efficacité et ton grand sens de l'action. </li>
						<li> Tu es endurant(e) et robuste et tout ça sans manger d'épinard, petit(e) veinard(e) ! </li>
						<li> Tu es super habile de tes mains et tu communiques comme jamais avec les machines. Les robots en mon genre n'ont pas de secret pour toi et le petit secret c'est qu'ils t'adorent tout autant ! </li>
						
				</ul>

				<h2> Tes principales faiblesses (on en a tous) : </h2>
				
				<ul> 
						<li> Tu n'es pas un grand bavard et il est possible que tu sois confronté(e) à des personnes qui elles aiment beaucoup (beaucoup) discuter. Petit conseil : si tu n'aimes pas parler ce n'est pas si grave, le vrai secret c'est de savoir écouter ! Entendu ? </li>
						<li> Tu es très attaché aux choses que tu connais et c'est normal mais n'oublie pas d'aller voir ailleurs, si elles n'y sont pas aussi. Le monde regorge d'objets très pratiques que tu n'as encore jamais utilisé. En avant pour la découverte ! </li>
					
						
				</ul>


					<?php if($R_score==3&&$I_score==17&&$A_score==12&&$S_score==15&&$E_score==4&&$C_score==3){
					echo "<h2> Tu es des nôtres ! </h2>
						<img src='img/alien.jpg' alt='Aliens' />
						<p> Bravo ! Grâce à ta collaboration et à ta personnalité détonnante, mon champ de détection a repéré un vaisseau extra-terrestre !!! Pour recevoir ta carte <b>'Devenir un Alien'</b>, utilise ton code personnel dans ton carnet de bord.</p>"; 

					}?>

					<h2> Et mais attends, ce n'est pas fini ! </h2>
					<p>Il y a un métier pour toi dans mon champ de détection ! <a href="page.php">Partant ?</a> Pour en recevoir d'autres, rentre le code que je viens te donner dans la cartouche de ton espace personnel, je te ferais plein d'autres recommandations, tu verras. Par contre, il va falloir faire un petit effort de mémorisation ... Je plaisante, bien-sûr ! Je vais le stocker soigneusement dans ton carnet de bord. </p> 

					<h2> Tu ne te reconnais pas dans ce que j'écris ? </h2> 
					<p> Pas de panique, tu n'es pas un alien ! D'abord, ce n'est qu'une description assez générale de ta personnalité et de tes centres d'intérêt. Tu n'es pas obligé d'être exactement ce que je décris et heureusement ! </p>
					<p> Toutefois, il arrive que je perde les boulons, beaucoup d'enfants me sollicitent et il m'arrive parfois de me tromper. Tu me pardonnes ? </p>
					<p>Je t'invite à refaire le test. C'est la 3e fois que tu le fais ? Vraiment ? Dans ce cas, mille excuses mais tu es une énigme pour moi ! En dernier recours, n'hésite pas à m'écrire un message personnel <a href="page.php">ici</a>. Essaye de m'expliquer ce qui ne va pas et j'essayerai de m'améliorer. </p>
				</div>
			</div>

		</body>
	</html>



