# ExplorAction

## Outils

### Pragma-Framework

Nous utilisons le framework php Pragma de Cyril Rouyer. Ce framework n'a pas de documentation exhaustive. Nous nous sommes donc permis de documenter les parties qui nous intéressaient 

Cette installation n'est utile que pour tester les fonctionnalités du projet. Le framework est déjà incorporé au projet.

#### Installation

##### Windows

1. Assurer-vous d'avoir installé les pré-requis:
  * [WampServer](http://www.wampserver.com/en/ "WampServer's Homepage")
  * [Github](https://desktop.github.com "Github desktop app")
  * [Composer](https://getcomposer.org/download/ "Download composer-setup.exe")
2. Cloner le github du framework Pragma : 
  * Utiliser Git Shell pour vous déplacer dans l'arborescence de fichiers avec la commande : "cd C:\wamp64\www\"
  * Copier le dépôt du projet : "git clone https://github.com/pragma-framework/framework.git"
3. Depuis l'explorateur de fichiers Windows déplacer vous dans le dossier du dépôt et ouvrer une invite de commande : 
  * CTRL+MAJ+clique droit
  * Cliquer sur "Ouvrir une fenêtre de commande ici"
4. Installer votre framework :
  * (Vous pouvez vérifier l'installation de votre composer depuis l'invite de commande grâce à la commande "composer -v")
  * Depuis la fenêtre de commande dans le dossier framework taper la commande "composer install"
  * Vérifier dans l'explorateur de fichiers que le dossier vendor a été créé. 
5. Configurer l'accès à la base de données : 
  * Copier et renommer le fichier config.default.php du dossier config en config.php
  * Remplacer les variables "db-" par vos propres variables de connexions
  ![alt text](./doc/img/configPhp.png "capture d'écran du fichier config.php après modification")
6. Enjoy ! 

##### Linux

1. Assurer-vous d'avoir installé les pré-requis: 
  * [serveur lamp](https://doc.ubuntu-fr.org/lamp "tuto d'installation lamp")
  * [git](https://git-scm.com/download/linux "tuto d'installation git")
  * make "sudo apt-get install build-essential"
2. Cloner le github du framework Pragma : 
  * Depuis un terminal placer vous dans le dossier www "cd /var/www"
  * Copier le dépôt du projet : "git clone https://github.com/pragma-framework/framework.git"
3. Installer votre framework :
  * Entrer dans le dossier framework "cd framework"
  * Taper la commande "php composer.phar install"
  * (Si erreur copier les lignes suivantes dans le terminale :
  > php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"

  > php -r "if (hash_file('SHA384', 'composer-setup.php') === '669656bab3166a7aff8a7506b8cb2d1c292f042046c5a994c43155c0be6190fa0355160742ab2e1c88d40d5be660b410') { echo 'Installer verified'; } else { echo 'Installer corrupt'; unlink('composer-setup.php'); } echo PHP_EOL;"

  > php composer-setup.php
  
  * puis retaper la commande "php composer.phar install" et taper la commande
  
  >php -r "unlink('composer-setup.php');"
  
  )
  * Vérifier dans l'explorateur de fichiers que le dossier vendor a été créé."
4. Configurer l'accès à la base de données : 
  * Copier et renommer le fichier config.default.php du dossier config en config.php
  * Remplacer les variables "db-" par vos propres variables de connexions
  ![alt text](./doc/img/configPhp.png "capture d'écran du fichier config.php après modification")
  * Toujours depuis le terminal dans le dossier framework taper "make config/config.php"
5. Enjoy ! 