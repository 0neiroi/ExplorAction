<?php

use Phinx\Seed\AbstractSeed;

class RiasecSeeder extends AbstractSeed
{
    /**
     * Run Method.
     *
     * Write your database seeder using this method.
     *
     * More information on writing seeders is available here:
     * http://docs.phinx.org/en/latest/seeding.html
     */
    public function run()
    {
		 $data = array(
            array(
                'type'    => 'Réaliste',
                'description' => 'Tu es le roi des bricoleurs ? Un athlète ? Ou un Monsieur/une Madame, « toujours le nez dehors » ? Oui, c\'est bien de toi dont on parle ! Alors toi, tu es le boss des activités manuelles. Les trucs cassés n\'ont pas de secret pour toi et tel un mage de la résurrection, tu leur offres une seconde vie. On peut dire que tu n\'as pas froid aux yeux et aucun outil ne te résiste ! Habile, endurant et assez courageux pour braver les situations extrêmes de travail, on peut dire que tu en as dans la boîte à outils !Autrement dit, mon radar l\'atteste, tu es un Réaliste. Félicitations !',
                'qualites1'=> 'Ton truc c\'est le terrain ! Tu es un(e) fonceur/euse qui a besoin avant tout, d\'agir et tout le monde t\'admire pour ton efficacité et ton grand sens de l\'action.',
                'qualites2'=> 'Tu es endurant(e) et robuste et tout ça sans manger d\'épinard, petit(e) veinard(e) !',
                'qualites3'=> 'Tu es super habile de tes mains et tu communiques comme jamais avec les machines. Les robots en mon genre n\'ont pas de secret pour toi et le petit secret c\'est qu\'ils t\'adorent tout autant !',
                'faiblesses1'=> 'Tu n\'es pas un grand bavard et il est possible que tu sois confronté(e) à des personnes qui – elles -   aiment beaucoup (beaucoup) discuter. Petit conseil : si tu n\'aimes pas parler ce n\'est pas si grave, le vrai secret c\'est de savoir écouter ! Entendu ?',
                'faiblesses2'=>'Tu es très attaché aux choses que tu connais et c\'est normal mais n\'oublie pas d\'aller voir ailleurs, si elles n\'y sont pas aussi. Le monde regorge d\'objets très pratiques que tu n\'as encore jamais utilisés. En avant pour la découverte !',
            ),
            array(
                'type'    => 'Investigateur',
                'description' => 'Hey toi, tu connais l\'ADN ? Parce que ton code génétique m\'a soufflé que tu étais un(e) curieux/se né(e). Lève un peu le nez de tes bouquins et lis ce qui va suivre car cela te concerne. Alors toi visiblement tu n\'as pas assez de tes dix doigts pour compter tout ce qui t\'intéresse et pas assez de 24 heures pour en découvrir encore ! Il paraîtrait même que les problèmes n\'en sont pas vraiment pour toi, petit(e) veinard(e) ! Apprendre plein de trucs c\'est clairement ton truc mais mieux encore tu te poses plein de questions … et tu as donc tout compris car sans question, évidemment pas de réponse ! Réfléchi et ouvert, le prochain Einstein c\'est peut-être bien toi. Autrement dit, mon radar l\'atteste, tu es un Investigateur. Félicitations !',
                'qualites1'=> 'Il paraît que tu as un œil de lynx, rien ne t\'échappe. Tu es donc un(e) fin(e) observateur/rice. Petit conseil : n\'oublie pas de faire le poirier de temps en temps pour regarder les choses différemment !',
                'qualites2'=> 'Tu es un indépendant, c\'est-à-dire que tu sais mener ta barque seul(e) peu importe où elle te mène.',
                'qualites3'=> 'Tu es original et non conformiste … idéal pour tester un tas de nouvelles idées ou inventer de nouvelles choses ! L\'avenir a besoin de ton ingéniosité et de tes petites astuces donc continue à te secouer les méninges.',
                'faiblesses1'=> 'La vie grégaire/en groupe, ce n\'est pas forcément ton truc mais n\'oublie pas que l\'union fait la force et qu\'on résout mieux les problèmes les plus tenaces à plusieurs … C\'est prouvé scientifiquement !',
                'faiblesses2'=>'Tu es un vrai moteur à idées et tu tournes dans ta tête à plein régime (d\'ailleurs, c\'est toi qui fait tout ce bruit ?) mais n\'oublie pas que les idées sont le moteur de l\'action ! D\'ailleurs Explor\'Action, ça te parle ?Attention, il paraît que des lutins cherchent des cerveaux dans le même genre que le tien pour y faire des nœuds ! Remède anti-lutin : mettre ta musique préférée à fond les ballons et sauter sur ton lit ! ',
            ),
            array(
                'type' => 'Artiste',
                'description' => 'Wahhh !!!! c\'est beau ce que tu nous as fait là ! Je suis ébahie et pourtant je ne suis qu\'une machine ! Toi, tu as du talent, c\'est sûr ! Tu aimes écrire, dessiner, peindre, jouer de la musique, danser, décorer des objets, faire du théâtre … Tu débordes de créativité, de sensibilité et ça se voit ! Ce que tu fais c\'est tout sauf du bricolage, c\'est tellement sérieux que le frigo de ta cuisine est une exposition à lui tout seul ! Le Picasso de demain c\'est peut-être bien toi. Autrement dit, mon radar l\'atteste, tu es un Artiste. Félicitations !',
                'qualites1'=> 'Tu es original et anticonformiste, autrement dit de l\'or pour nous sortir de l\'ordinaire ! Prêt à dépoussiérer le monde de la patine de l\'habitude ?',
                'qualites2'=> 'Tu as du goût, tu aimes le beau (ps : en langage d\'humains, on dira même que tu es un esthète). Les autres auront besoin de toi pour sublimer leur quotidien !',
                'qualites3'=> 'Engagé, tu défendras des causes à travers tes œuvres et crois-moi le monde – peut-être même l\'univers - en a bien besoin ! Crois-le ou non tes idées et tes pinceaux sont des armes, fais en bon usage.',
                'faiblesses1'=> 'Tu n\'aimes pas la routine et les environnements contraignants. Même les tableaux ont des cadres, tu sais ! Décore ta montre, ton agenda et sublime les petites contraintes du quotidien avec tes talents d\'artiste et tu verras, tout coulera comme une goutte de peinture sur un tableau.',
                'faiblesses2'=>'Tu n\'entends rien ? Ta mère te somme de ranger ta chambre et elle en a marre que tu la prennes pour un perroquet ! Certes, il n\'y a pas d\'art sans désordre mais il faut pouvoir circuler jusqu\'à ton bureau, tout de même ! ; Attention !! il paraît que des pigeons voyageurs volent des poèmes typiquement comme les tiens, tu es prévenu …',
            ),
            array(
                'type'    => 'Social',
                'description' =>'Excuse moi, je te dérange ? Je sens que tu es très entouré. Pas étonnant, d\'après mes analyses, tu es un aimant à humains ! Doué pour le contact, tu es toujours partant pour aider, conseiller, informer et faire marrer tes copains/copines ! C\'est une sacré qualité tu sais ! Comme moi, tu es très intéressé(e) par les comportements humains. D\'ailleurs, tu ne voudrais pas me donner quelques conseils ? Tu es tellement chaleureux qu\'une légende raconte que tu aurais rendu les fossiles inutiles ! C\'est vrai ? Intuitif, tu es guidé par tes émotions et tes impressions pour prendre soin des autres et interagir avec eux. Autrement dit, mon radar l\'atteste, tu es un Social. Félicitations !',
                'qualites1'=> 'Tu es une oreille attentive, ce qui fait de toi l\'interlocuteur privilégié pour régler les conflits ou coordonner une équipe. ',
                'qualites2'=> 'Tu es très ouvert et c\'est une des raisons pour lesquelles les autres t\'enrichissent à ce point ! Tu acceptes ceux qui t\'entourent tels qu\'ils sont alors que c\'est parfois loin d\'être facile. Bravo ! ',
                'qualites3'=> 'Tu seras particulièrement doué pour transmettre des connaissances aux autres, aider les personnes en difficultés, les soigner ou simplement leur apporter du réconfort.',
                'faiblesses1'=> 'J\'ai écrit tout à l\'heure, que tu étais un « aimant » à personne. Tout le problème avec les aimants, c\'est que ce sont des objets soumis à une force d\'attraction tellement puissante qu\'ils se retrouvent comme collés l\'un à l\'autre. Si je peux te donner un bon conseil, ne laisse pas les autres se coller à toi 24h sur 24, 7 jours sur 7, d\'autant que certains n\'ont pas toujours une hygiène irréprochable, si tu vois ce que je veux dire ... Tu as le droit de revendiquer ton espace rien qu\'à toi alors ne te laisse pas envahir !',
                'faiblesses2'=>'Es-tu parfois tiraillé entre la volonté d\'être sincère et la peur de faire du mal à tes ami(e)s ? Ne t\'inquiètes pas, cela arrive à tout le monde mais particulièrement à toi car tu es très soucieux des autres. Petit conseil : souvent leur dire la vérité, même si elle est blessante, peut beaucoup les aider, alors prends ton courage à deux mains et fonce ! ; On sait que tu aimes les animaux autant que les humains mais crois-tu qu\'avoir 6 chats, 3 chiens, une tortue, 4 perruches et 2 tarentules de compagnie, soit vraiment nécessaire ? Toi et tes copains, vous formez déjà une ménagerie à vous tout seul, crois moi sur parole !',
            ),
            array(
                'type'    => 'Entreprenant',
                'description' => 'Mais dis donc toi, qu\'est-ce que tu fais encore là ? Il paraît que tu es un hyperactif et un débrouillard, tu n\'as donc pas besoin de moi ! Infatigable, dynamique, créatif, vif, audacieux … Attendez ? On parle bien d\'un humain là ? Il semblerait que oui et précisément on parle de toi ! Mais ce qui fait ta force, ce n\'est pas juste toi tout seul mais l\'influence que tu exerces sur les autres. Certains se contentent d\'être des chefs, là où toi, tu t\'imposes comme un véritable leader. Ton sens du contact et ton habilité à communiquer ton enthousiasme seront une force pour mener des projets à leurs termes. Tu as tout ce qu\'il faut pour savoir mener ta barque et te lancer dans des missions risquées. Les deux pieds sur Terre et la tête dans les étoiles, tu es peut-être le Steve Jobs de demain. Autrement dit, mon radar l\'atteste, tu es un Entreprenant. Félicitations !',
                'qualites1'=> 'Tu sauras convaincre les autres de te suivre même dans tes idées les plus folles ou d\'acheter tout un tas de gadgets - même les plus inutiles. D\'ailleurs, si tu pouvais convaincre ton maître ou ta maîtresse, d\'utiliser Explor\'Action, ce serait vraiment de la dynamite ! ',
                'qualites2'=> 'Tu es tenace, perfectionniste et heureusement, parce que tes objectifs sont souvent élevés. De toute façon viser la lune, c\'est juste prendre le risque d’atterrir dans les étoiles.',
                'qualites3'=> 'Tu es un visionnaire, autrement dit, tu mets ton action au service de ta vision du monde tel qu\'il est et tel qu\'il sera grâce à toi ! Et tu as raison, car agir pour simplement agir est tout sauf une bonne idée.',
                'faiblesses1'=> 'Aïe ! je le vois bien tu trouves mes analyses très grossières et c\'est sûrement parce que tu es très exigeant, autant avec toi-même qu\'avec les autres. Il faut parfois accepter de revoir à la baisse certaines de tes attentes pour ne pas être déçu. Tout le monde ne vit pas à 100 à l\'heure, tu sais. Moi, par exemple, il me suffit d\'un méga de RAM et tout roule comme sur des roulettes.',
                'faiblesses2'=>'Compétiteur, il t\'arrive parfois de perdre et ça t\'énerve, pas vrai ? Mais sais-tu combien d\'échecs il faut surmonter pour atteindre la « perfection » ? Je suis basé sur 112 erreurs de code, je te laisse donc faire le calcul. ; Entrepenant veut parfois dire intrépide, gare aux bobos ! ',
            ),
            array(
                'type'    => 'Conventionnel',
                'description' => 'BBBjknejcoiejfojevije …!!??^*^iiiioiooohhfdrtdtdfyug !!! Non non, je ne débloque pas du code, j\'étais simplement en train de tester ta capacité à supporter le désordre. Même si je ne suis qu\'une machine, il m\'arrive d\'être taquin, haha. Tu me pardonnes ? Donc, si je devais te décrire, je dirais que tu es méthodique, organisé, ponctuel et soigneux. Ton lit est toujours fait au millimètre, le sol luisant de ta chambre éblouit et effraye les petites bestioles. Ça tombe bien, l\'antenne de mon altimètre aurait besoin d\'un petit coup de chiffon. 
D\'ailleurs, tout le monde t\'apprécie pour ta réserve, ton calme, ton authenticité et ta douceur. Tu es quelqu\'un de mesuré qui aide les autres à faire la part des choses. Prudent et prévisible, tu es un atout pour mettre de l\'ordre ou accomplir des tâches de manière précise et efficace. Roi/Reine du calcul et du classement, aucun dossier ne te résiste ! Autrement dit, mon radar l\'atteste, tu es un Conventionnel. Félicitations !  ',
                'qualites1'=> 'Tu es soucieux de suivre les règles et respectueux du cadre établi. Savoir accepter facilement la contrainte et loin d\'être facile pour l\'individu lambda mais pas pour toi ! C\'est un sacré atout pour s\'adapter à des situations diverses, fais en bon usage ! ',
                'qualites2'=> 'La routine ne te fait pas peur : on peut te donner mille fois la même tâche, tu l\'accompliras à chaque fois à la perfection ! C\'est une sacré qualité !',
                'qualites3'=> 'Ta ponctualité, ta rigueur et ton sens de la discrétion sont des atouts majeurs pour des métiers à responsabilité.',
                'faiblesses1'=> 'Je sens que tu rougis ! Il faut absolument que tu te fasses confiance car tes qualités sont indéniables.',
                'faiblesses2'=>'Attention !!!!!!!!!! Au dessus de toi ! Une météorite !!! ….. C\'était encore une des mes blagues, évidemment mais elle va me permettre de t\'expliquer quelque chose de très sérieux : la vie est faite d\'imprévus. Et oui, si toi et moi nous sommes là, c\'est grâce et en même temps, à cause du hasard. Certes, le hasard fait parfois des trucs chouettes, la preuve tu existes mais parfois, il nous met dans des situations inconfortables, particulièrement pour toi qui n\'aime pas l\'imprévu. Allons, allons, il ne faut pas se laisser marcher dessus aussi facilement ! Prêt à le défier ?',
            ),
        );
        $posts = $this->table('posts');
        $posts->insert($data)
            ->save();

    }

}
