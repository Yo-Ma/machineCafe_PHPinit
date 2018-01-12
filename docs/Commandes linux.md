
## Se connecter en SSH
````
ssh user@ip
````


## Modifier son mot de passe
````
pwd
````


## Créer un fichier
````
touch nom_du_fichier
````


## Créer un dossier
````
mkdir nom_du_dossier
````


## Déplacer un fichier ou dossier
````
mv nom_du_fichier nouvel_emplacement

Option :
-R Action sur dossier entier
````


## Renommer un fichier ou dossier
````
mv nom_du_fichier nouveau_nom
````


## Copier un fichier ou dossier
````
cp fichier_original copie_du_fichier

Copier dans un autre dossier :
cp fichier_original nom_du_dossier/copie_du_fichier
````


## Supprimer un fichier ou dossier
````
rm nom_du_fichier
rmdir nom_du_dossier 							(supprime un dossier seulement s’il est vide)

Option :
-f Force la suppression 						(écrase au besoin)
-i Demande confirmation
-r Supprimer un dossier
````


## Créer des liens
````
ln fichier1 fichier2							Crée un lien 'en dur'


ln -s fichier1 lien_vers_fichier1 				Crée un lien symbolique
````


## Connaître le nombre de caractères, lignes ou mots dans un fichier texte
````
wc -l test.rtf 									Retourne le nombre de lignes
wc -w test.rtf 									Retourne le nombre de mots
wc -m test.rtf 									Retourne le nombre de lettres
wc -c test.rtf 									Retourne la taille du fichier (en bits)
	

Nombre de fichiers/dossiers un dans répertoire : 
ls | wc 
````


## Trier un fichier texte
````
sort fichier.txt

Option :
-r			Tri inverse
-R			Tri aléatoire (shuffle)
-u			Eliminer les doublons
-o			Créer un nouveau fichier avec les résultats sort -o fichier_trié fichier_à_trier

````


## Couper dans un fichier texte
````
cut -c 2		Conservera les 2 premiers caractères

cut -c 2-4		Conservera 4 éléments à partir du 2ème 			
	'Exemple' 	cut -c 2-4 		retourne 'empl'

cut -d -f		Permet d'utiliser des délimiteurs
	'Numéro et état de la ligne : 31 en service' 		cut -d ":" -f2 		retourne '31 en service'
````


## Cherche 'value' dans le fichier Gianluigi-Buffon.player (case insensitive)
````
grep -iH "value" Gianluigi-Buffon.player
````


## Connaître sa version Linux
````
uname -a ; cat /etc/debian_version ; cat /etc/issue
````


