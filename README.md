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

#### Utilisation 

##### Hello World !

Il ne faut pas sous-estimer l'importance de cette étape : l'implémentation d'un "Hello World !" est on-ne-peut-plus symbolique en information et est le gage d'une première réutilise. C'est partie.
Pragma-Framework comme son nom l'indique ... est pragmatique il va à l'essential. Si l'url lui indique cela, il fera cela. Point. Mais il faut que l'url lui indique quelque chose de précis pour qu'il le comprenne.
Comme pour la gestion de projet, la phase de préparation est importante et doit être rigureusement appliquée.
Le but de cette manipulation est faire croire à notre navigateur que le projet est un vrai site internet. Pour illustrer ce que nous allons faire, prenons l'exemple de google.fr. Lorsque tu tapes google.fr le navigateur le traduit en 216.58.198.195 mais pour nous humain la lecture est plus agréable si on traite une information lisible.
Pragma utilise le même niveau de lecture que l'utilisateur et c'est logique. Un framework est là pour simplifier la vie des développeurs. Ils sont généralement de plus haut niveau que les langages sur lesquels ils sont basés. Ainsi un framework ne fera pas plus mais plus simplement. Bon fini le blabla passons au manipulation

Sauf exception la racine des chemins sera toujours framework.

###### Windows

1. Préparation du Hello World !
  * Ecrire 'echo "Hello World !";' dans la section DO SOMETHING HERE du fichier index.php se trouvant dans /framework/public
    * (Vous pouvez le tester dans votre navigateur avec l'adresse localhost/framework/public ... bien sûr ça ne fonctionnera pas ce serait trop simple.)
2. Création d'un VirtualHost
  * Pour éviter polluer les fichiers de base de wamp vous allez créer un nouveau fichier exploraction.conf dans le dossier C:\wamp64\bin\apache\apache2.X.XX\conf\extra
  * Ecrire le contenu suivant dans le fichier créé :
  
  `  <VirtualHost *:80>
  
      ServerName exploraction
  
      DocumentRoot C:\wamp64\www\framework\public
  
      CustomLog  C:\wamp64\logs\exploraction_access.log combined
  
      ErrorLog  C:\wamp64\logs\exploraction_error.log
  
      <Directory C:\wamp64\www\framework\public>
  
        Options Indexes FollowSymLinks
  
        AllowOverride None
  
        Require all granted
  
        </Directory>
  
    </VirtualHost> `
  
3. Autorisation de VirtualHost
  * Ajouter la ligne "Include conf/extra/exploraction.conf" dans la section VirtualHost du fichier httpd.conf du dossier C:\wamp64\bin\apache\apache2.X.XX\conf\
  * Vérifier que la ligne "LoadModule vhost_alias_module modules/mod_vhost_alias.so" de ce même fichier soit décommentée.
4. Modifier les hosts
  * Ajouter à la fin du fichier hosts du dossier C:\Windows\System32\drivers\etc la ligne "127.0.0.1 exploraction"
5. Redémarrer les services wamp

  ![alt text](./doc/img/wamp.png "capture d'écran de la fonction rédemarrer les services de wamp")
6. Taper dans votre navigateur exploraction/ 

  ![alt text](./doc/img/hello.png "capture d'écran du navigateur une fois que tout fonctionne") 
7. Enjoy

###### Linux

1. Préparation du Hello World !
  * Ecrire 'echo "Hello World !";' dans la section DO SOMETHING HERE du fichier index.php se trouvant dans /framework/public
    * (Vous pouvez le tester dans votre navigateur avec l'adresse localhost/framework/public ... bien sûr ça ne fonctionnera pas ce serait trop simple.)
2. Création d'un VirtualHost
  * Pour éviter polluer les fichiers de base de apache vous allez créer un nouveau fichier exploraction.conf dans le dossier /etc/apache2/sites-enabled
  * Ecrire le contenu suivant dans le fichier créé :
  
  >  <VirtualHost *:80>
  
  >    ServerName exploraction
  
  >    DocumentRoot /var/www/framework/public
  
  >    CustomLog  /var/log/apache2/exploraction_access.log combined
  
  >    ErrorLog  /var/log/apache2/exploraction_error.log
  
  >    <Directory /var/www/framework/public>
  
  >      Options Indexes FollowSymLinks
  
  >      AllowOverride None
  
  >      Require all granted
  
  >    </Directory>
  
  >  </VirtualHost>
  
3. Autorisation de VirtualHost
  * Taper la commande a2ensite exploraction.conf dans votre terminale
  * Vérifier que le module rewrite soit activé avec la commande a2enmod rewrite
4. Modifier les hosts
  * Ajouter à la fin du fichier hosts du dossier /etc/hosts la ligne "127.0.0.1 exploraction"
5. Redémarrer le service apache
6. Taper dans votre navigateur exploraction/ 	
  ![alt text](./doc/img/hello.png "capture d'écran du navigateur une fois que tout fonctionne")
7. Enjoy

![alt text](https://media.giphy.com/media/yiYJLX05aQ0FO/200.gif "Yes")
  