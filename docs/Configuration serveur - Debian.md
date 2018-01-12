###### Installer LAMP Stack sur une Debian (versions 8 'Jessie' ou 9 'Stretch') #######




## Installer Apache ##

````
apt-get install apache2
````


# Tester Apache #

Se rendre sur http://localhost/ ou http://server-ip-address/ depuis un navigateur web
Lorsque tout fonctionne, s'affiche la page 'Debian Logo Apache2 Debian Default Page'





## Installer MySQL ##

````
apt-get install mysql-server mysql-client
````

Durant l'installation, il sera demandé de configurer le mot de passe pour l'utilisateur MySQL “root”.
Le renseigner, puis le confirmer.


# Tester MySQL #

Afficher le status de MySQL :
````
systemctl status mysql
````

Cela doit retourner quelque chose comme cela :
````
mysql.service - LSB: Start and stop the mysql database server daemon
   Loaded: loaded (/etc/init.d/mysql)
   Active: active (running) since Tue 2015-06-23 17:02:44 IST; 20s ago
   CGroup: /system.slice/mysql.service
           ├─4605 /bin/sh /usr/bin/mysqld_safe
           └─4952 /usr/sbin/mysqld --basedir=/usr --datadir=/var/lib/mysql --...

Jun 23 17:02:46 debian /etc/mysql/debian-start[5011]: mysql.help_keyword     ...
````





## Installer PHP ##

````
apt-get install php7.0
````


# Tester PHP #

Créer une page de test “testphp.php”, par exemple, dans le dossier root Apache. (/var/www/html/)
````
nano /var/www/html/testphp.php
````

Ajouter les lignes suivante :
````
<?php

phpinfo();

?>
````

Redémarrer le service Apache2 :
````
systemctl restart apache2
````

Il est possible, pour diverses raisons et éviter d'éventuels conflits, que PHP ne soit pas activé à la fin de l'installation. En ce cas, il faudra l'activer ainsi :
````
a2enconf php7.0-fpm 						(A vérifier, le module peut changer)
````






## (OPTIONNEL) Installer phpMyAdmin ##

````
apt-get install phpmyadmin
````

Durant l'installation, il est demandé de sélectionner le serveur HTTP qui sera utlisé. ('Apache2' ou 'Lighttp')
Sélectionner ‘Yes’ pour configurer la base de données pour phpmyadmin avec dbconfig-common.
Entrer le mot de passe de l'admin de la base de données.

Si PhpMyAdmin ne fonctionne pas, il faut modifier le fichier de configuration d'Apache :
````
nano /etc/apache2/apache2.conf
````

Renseigner cette ligne à la fin du fichier ouvert :
````
Include /etc/phpmyadmin/apache.conf
````

Redémarrer Apache2 :
````
systemctl restart apache2
````


# Tester phpMyAdmin #

Se rendre sur http://server-ip-address/phpmyadmin/






## Mettre le serveur à jour ##

````
apt-get update && apt-get upgrade
````





## Accéder aux fichiers de log afin de dépanner ##
````
/var/log/...
````
