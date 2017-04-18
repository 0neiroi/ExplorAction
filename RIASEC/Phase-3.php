<?php

$type_R3 = array(
	"Je suis plutôt sage",
	"Je n'aime pas prendre la parole en classe",
	"Je suis un bricoleur/une bricoleuse",
	"Je suis habile",
	"Je préfère l'action à la réflexion",
	"Je préfère avoir quelques ami(e)s proches plutôt que d'avoir plein de copains/copines",
	"Je suis sportif/ve",
	"Je suis franche et direct(e)",
	"Je suis patient(e)",
	"Je suis minutieux/se",
	"Je suis proche de la nature et de l'environnement",
);

// Selectionne 2 questions du type réaliste
		$Realiste_3 = array();
		for($r = rand(0, sizeof($type_R3) - 1); sizeof($Realiste_3) != 2; $r = rand(0, sizeof($type_R3) - 1)){
			$s = $type_R3[$r];
			$found = false;
			for($i = 0; $i < sizeof($Realiste_3) && !$found; $i++){
				if ($s == $Realiste_3[$i]){
					$found = true;
				}
			}
			if (!$found){
				$Realiste_3[sizeof($Realiste_3)] = $s;
			}
		}


$type_I3 = array(
	"Je préfère la réflexion à l'action",
	"Je suis très curieux/curieuse",
	"Je suis plutôt consciencieux/consciencieuse",
	"Je suis plutôt méthodique dans la réalisation de mes devoirs scolaires",
	"Je m'intéresse à beaucoup de choses",
	"Je suis perfectionniste",
	"Je connais mes sujets d'intérêts dans les moindres détails",
	"J'ai plusieurs passions",
	"Je suis timide et réservé(e)",
	"Je réfléchis beaucoup avant de prendre une décision",
	"Je suis un peu \"intello\"",
	"Je suis un petit rat de bibliothèque",
	"Je suis rigoureux/se",
);

$Investigateur_3 = array();
		for($r = rand(0, sizeof($type_I3) - 1); sizeof($Investigateur_3) != 2; $r = rand(0, sizeof($type_I3) - 1)){
			$s = $type_I3[$r];
			$found = false;
			for($i = 0; $i < sizeof($Investigateur_3) && !$found; $i++){
				if ($s == $Investigateur_3[$i]){
					$found = true;
				}
			}
			if (!$found){
				$Investigateur_3[sizeof($Investigateur_3)] = $s;
			}
		}

$type_A3 = array(
	"Je suis assez désordonné(e) et ma chambre et mes affaires sont souvent en désordre",
	"Je dessine beaucoup sur mes cahiers ",
	"Je suis musicien(ne)",
	"Je suis sensible à mon environnement",
	"Je ressens des émotions de manière intense",
	"Je n'ai pas peur d'exprimer ma tristesse",
	"Je suis appliqué(e)",
	"Je n'ai pas peur d'exprimer des idées qui ne plairaient pas aux autres",
	"J'aime m'exprimer à travers la musique, les beaux-arts, la poésie ...",
	"J'aime passer du temps à ne rien faire",
	"Je suis discret/discète",
	"Je suis sensible aux belles choses",
	"Je suis créatif/ve",
	"J'aime exprimer mes singularités / mon originalité",
);

$Artiste_3 = array();
	for($r = rand(0, sizeof($type_A3) - 1); sizeof($Artiste_3) != 2; $r = rand(0, sizeof($type_A3) - 1)){
			$s = $type_A3[$r];
			$found = false;
			for($i = 0; $i < sizeof($Artiste_3) && !$found; $i++){
				if ($s == $Artiste_3[$i]){
					$found = true;
				}
			}
			if (!$found){
				$Artiste_3[sizeof($Artiste_3)] = $s;
			}
		}


$type_S3 = array(
	"Je suis très sociable et extraverti(e)",
	"Je suis capable de discuter avec des enfants que je ne connais pas ",
	"Je ne suis pas timide",
	"Je suis bavard(e)",
	"J'aime donner des conseils aux autres",
	"Je suis quelqu'un de généreux/se (exemple : je fais beaucoup de cadeaux aux autres)",
	"Je suis une oreille attentive",
	"Je parviens facilement à voir quand un(e) ami(e) est triste",
	"Je suis celui/celle qui réconforte les autres",
	"J'aime être entouré(e)",
	"Je suis un(e) fêtard(e)",
	"Je suis sincère et authentique",
	"Je suis sensible aux autres",
);
$Social_3 = array();
		for($r = rand(0, sizeof($type_S3) - 1); sizeof($Social_3) != 2; $r = rand(0, sizeof($type_S3) - 1)){
			$s = $type_S3[$r];
			$found = false;
			for($i = 0; $i < sizeof($Social_3) && !$found; $i++){
				if ($s == $Social_3[$i]){
					$found = true;
				}
			}
			if (!$found){
				$Social_3[sizeof($Social_3)] = $s;
			}
		}


$type_E3 = array(
	"Je suis un(e) fonceur/se",
	"Je suis très optimiste",
	"J'aime me lancer dans des activités difficiles",
	"J'aime parler avec beaucoup de monde",
	"J'aime défendre mon point de vue",
	"Je suis tenace et obstiné(e)",
	"J'aime être le/la chef et commander",
	"J'ai un fort caractère",
	"J'ai confiance en moi",
	"Je suis séducteur/séductrice",
	"Je suis entêté(e) et têtu(e)",
	"Je suis un challenger/une challengeuse",
	"Je suis très énergique et actif/ve",
	"Je suis audacieux/se",
);

$Entreprenant_3 = array();
		for($r = rand(0, sizeof($type_E3) - 1); sizeof($Entreprenant_3) != 2; $r = rand(0, sizeof($type_E3) - 1)){
			$s = $type_E3[$r];
			$found = false;
			for($i = 0; $i < sizeof($Entreprenant_3) && !$found; $i++){
				if ($s == $Entreprenant_3[$i]){
					$found = true;
				}
			}
			if (!$found){
				$Entreprenant_3[sizeof($Entreprenant_3)] = $s;
			}
		}

$type_C3 = array(
	"Je suis d'un naturel calme",
	"Je n'aime pas désobéir aux ordres et aux règles",
	"Il est impensable pour moi de ne pas faire mes devoirs scolaires",
	"Je suis très soigneux/se",
	"Je préfère les activités routinières / faire les mêmes choses tous les jours",
	"Je suis sensible à ce que les autres enfants peuvent penser de moi",
	"J'ai un grand besoin de justice",
	"Je suis méthodique et appliqué",
	"Je suis perfectionniste",
);

$Conventionnel_3 = array();
		for($r = rand(0, sizeof($type_C3) - 1); sizeof($Conventionnel_3) != 2; $r = rand(0, sizeof($type_C3) - 1)){
			$s = $type_C3[$r];
			$found = false;
			for($i = 0; $i < sizeof($Conventionnel_3) && !$found; $i++){
				if ($s == $Conventionnel_3[$i]){
					$found = true;
				}
			}
			if (!$found){
				$Conventionnel_3[sizeof($Conventionnel_3)] = $s;
			}
		}

?>
