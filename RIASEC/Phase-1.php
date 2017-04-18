<?php
$type_R1 = array(
	"Construire des objets en legos",
	"Réparer des objets ",
	"S'occuper du jardin ",
	"Faire des gâteaux",
	"Faire des bouquets de fleurs",
	"Fabriquer des cadeaux",
	"Faire des cabanes",
	"Faire des maquettes",
	"Faire des colliers de perles",
	"Faire des activités à l'extérieur",
	"Faire du vélos",
	"Fabriquer des machines/des robots",
	"Faire du sport",
);

// Selectionne 2 questions du type réaliste
		$Realiste = array();
		for($r = rand(0, sizeof($type_R1) - 1); sizeof($Realiste) != 2; $r = rand(0, sizeof($type_R1) - 1)){
			$s = $type_R1[$r];
			$found = false;
			for($i = 0; $i < sizeof($Realiste) && !$found; $i++){
				if ($s == $Realiste[$i]){
					$found = true;
				}
			}
			if (!$found){
				$Realiste[sizeof($Realiste)] = $s;
			}
		}

$type_I1 = array("Jouer au savant/chimiste/inventeur",
	"Lire des livres",
	"Aller à des expositions",
	"Observer des insectes",
	"S'intéresser aux animaux",
	"Jouer à Minecraft",
	"Chercher des informations sur wikipedia",
	"Faire des exposés",
	"Résoudre des énigmes",
	"Faire des activités à l'extérieur",
	"Faire des chasses au trésor",
	"Résoudre des énigmes",
	"Lire des romans policiers",
	"Regarder des émissions scientifiques",
	"Inventer de nouveaux objets",
	"Résoudre des casses-têtes",
	"Conduire des expériences scienfiques",
	"Apprendre le fonctionnement du corps humain",
);

$Investigateur = array();
		for($r = rand(0, sizeof($type_I1) - 1); sizeof($Investigateur) != 2; $r = rand(0, sizeof($type_I1) - 1)){
			$s = $type_I1[$r];
			$found = false;
			for($i = 0; $i < sizeof($Investigateur) && !$found; $i++){
				if ($s == $Investigateur[$i]){
					$found = true;
				}
			}
			if (!$found){
				$Investigateur[sizeof($Investigateur)] = $s;
			}
		}

$type_A1 = array("Ecouter de la musique",
	"Danser",
	"Jouer un instrument de musique",
	"Faire de la peinture",
	"Fabriquer de la décoration pour ta chambre",
	"Aller au musée",
	"Ecrire des poèmes",
	"Prendre des photos",
	"Décorer/personnaliser tes affaires",
	"Faire des sculptures",
	"Retoucher des images sur l'ordinateur",
	"Faire des arts plastiques",
	"Réaliser des montages vidéos",
	"Faire du théâtre",
	"Aller voir des spectacles",
	"Faire des montages sonores sur l'ordinateur",
	"Ecrire des histoires",
);

$Artiste = array();
		for($r = rand(0, sizeof($type_A1) - 1); sizeof($Artiste) != 2; $r = rand(0, sizeof($type_A1) - 1)){
			$s = $type_A1[$r];
			$found = false;
			for($i = 0; $i < sizeof($Artiste) && !$found; $i++){
				if ($s == $Artiste[$i]){
					$found = true;
				}
			}
			if (!$found){
				$Artiste[sizeof($Artiste)] = $s;
			}
		}

$type_S1 = array("Jouer dehors avec tes copains/copines",
	"Réconforter tes ami(e)s",
	"Papoter avec tes ami(e)s",
	"Jouer à des jeux de société",
	"Ecrire sur des forums/chats",
	"Donner des conseils",
	"Ecouter les autres raconter des histoires",
	"Jouer au basket ou au foot",
	"Jouer en ligne, à des jeux en équipe",
	"Partager des confidences",
	"Aller à des goûters d'anniversaire",
	"Rendre service à ton entourage",
	"Inviter des ami(e)s à la maison",
	"Jouer au médecin",
);

$Social = array();
		for($r = rand(0, sizeof($type_S1) - 1); sizeof($Social) != 2; $r = rand(0, sizeof($type_S1) - 1)){
			$s = $type_S1[$r];
			$found = false;
			for($i = 0; $i < sizeof($Social) && !$found; $i++){
				if ($s == $Social[$i]){
					$found = true;
				}
			}
			if (!$found){
				$Social[sizeof($Social)] = $s;
			}
		}

$type_E1 = array("Réciter des poésies",
	"Raconter des histoires",
	"Faire la course contre des copains",
	"Pratiquer des sports de combats (lutte, judo ...)",
	"Prendre la parole en classe",
	"Jouer à la marchande",
	"Faire du théâtre",
	"Suivre la mode",
	"Etre chef d'équipe (sport, jeu ...)",
	"Etre délégué(e) de classe",
	"Organiser des fêtes ou des goûters d'anniversaire",
);

$Entreprenant = array();
		for($r = rand(0, sizeof($type_E1) - 1); sizeof($Entreprenant) != 2; $r = rand(0, sizeof($type_E1) - 1)){
			$s = $type_E1[$r];
			$found = false;
			for($i = 0; $i < sizeof($Entreprenant) && !$found; $i++){
				if ($s == $Entreprenant[$i]){
					$found = true;
				}
			}
			if (!$found){
				$Entreprenant[sizeof($Entreprenant)] = $s;
			}
		}

$type_C1=array("Ranger des objets par couleur",
	"Ecrire des listes de choses à faire",
	"Trier tes affaires personnelles",
	"Ranger ta chambre",
	"Compter les objets qui t'entourent",
	"Faire ses devoirs",
	"Inventer ou réinventer des règles pour un jeu",
	"Surveiller un enfant plus jeune que toi (frère, soeur ...)",
	"Faire des mathématiques",
	"Gérer ton argent de poche",
	"Mettre en page des documents sur l'ordinateur",
	"Appeler des copains/copines/membres de ta famille au téléphone",
);

$Conventionnel = array();
		for($r = rand(0, sizeof($type_C1) - 1); sizeof($Conventionnel) != 2; $r = rand(0, sizeof($type_C1) - 1)){
			$s = $type_C1[$r];
			$found = false;
			for($i = 0; $i < sizeof($Conventionnel) && !$found; $i++){
				if ($s == $Conventionnel[$i]){
					$found = true;
				}
			}
			if (!$found){
				$Conventionnel[sizeof($Conventionnel)] = $s;
			}
		}

?>
