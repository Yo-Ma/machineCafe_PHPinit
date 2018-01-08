<h1>Glossaire SQL</h1>
<hr>
<table>
<thead>
<tr>
<th>Notions SQL (ou BDD en général)</th>
<th>Définition</th>
</tr>
</thead>
<tbody>
<tr>
<td><strong>Banque de données</strong></td>
<td>Collection de bases de données</td>
</tr>
<tr>
<td><strong>Base de données</strong></td>
<td>Collection de tables de données</td>
</tr>
<tr>
<td><strong>Table</strong></td>
<td>Collection de lignes d'enregistrement</td>
</tr>
<tr>
<td><strong>Ligne d'enregistrement</strong></td>
<td>Collection de données associées (exemple dans une table "client", une ligne peut contenir nom, prénom et adresse du client, dans des "cases" correspondantes)</td>
</tr>
<tr>
<td><strong>SGBD</strong></td>
<td>Système de Gestion de Base de Données</td>
</tr>
<tr>
<td><strong>Moteur SQL</strong></td>
<td>Programme qui manipule les fichiers de la BDD, et retranscrit les informations stockées de manière "lisible"</td>
</tr>
<tr>
<td><strong>Catalogue</strong></td>
<td>Description de la BDD ++ informations "subsidiaires" (typiquement les droits d'accès à la base de données)</td>
</tr>
<tr>
<td><strong>Requête</strong></td>
<td>Demande envoyée à la BDD, qui va renvoyer</td>
</tr>
<tr>
<td><strong>Langage de requête</strong></td>
<td>Langage informatique dans lequel sera codé les requêtes envoyés au SGBD</td>
</tr>
<tr>
<td><strong>Processeur de requête</strong></td>
<td>Programme d'interprétation de la requête</td>
</tr>
<tr>
<td><strong>Plan d'éxécution</strong></td>
<td>Liste des opérations à réaliser sur la BDD. pour une requête écrite dans le langage de requête, le processeur de requête détermine un plan d'éxécution. Après avoir vérifier que toutes les opérations nécessaires au plan d'éxécution sont autorisées à l'utilisateur (vérification dans le catalogue), le plan est envoyé au moteur SQL, qui renvoie le résultat de la requête</td>
</tr>
<tr>
<td>--</td>
<td>--</td>
</tr>
<tr>
<td><strong>Langage de définition de données (LDD/DDL)</strong></td>
<td>Architecture de la BDD</td>
</tr>
<tr>
<td><strong>CREATE</strong></td>
<td>mot-clé pour créer un élément (<strong>DATABASE</strong>,<strong>TABLE</strong>,<strong>VIEW</strong>, <strong>INDEX</strong>)</td>
</tr>
<tr>
<td><strong>ALTER</strong></td>
<td>mot-clé pour modifier (altérer) un élément</td>
</tr>
<tr>
<td><strong>DROP</strong></td>
<td>mot-clé pour supprimer un élément</td>
</tr>
<tr>
<td><strong>Collation</strong></td>
<td>Table de conversion des caractères spéciaux, par exemple pour les tris</td>
</tr>
<tr>
<td><strong>COLLATE</strong></td>
<td>mot-clé définissant la collation à utiliser pour la table. ex. <strong>COLLATE utf8_general_ci;</strong></td>
</tr>
<tr>
<td>--------------------</td>
<td>-------------------</td>
</tr>
<tr>
<td><strong>Langage de manipulation de données (LMD/DML)</strong></td>
<td>Requête, tri, filtre etc</td>
</tr>
<tr>
<td>--</td>
<td>--</td>
</tr>
<tr>
<td><strong>INSERT</strong></td>
<td>Insertion (création) de données dans une table</td>
</tr>
<tr>
<td><strong>SELECT</strong></td>
<td>Sélection (lecture) de données dans une table</td>
</tr>
<tr>
<td><strong>UPDATE</strong></td>
<td>Mise à jour (réécriture) de données dans une table</td>
</tr>
<tr>
<td><strong>DELETE</strong></td>
<td>Suppression de données dans une table</td>
</tr>
<tr>
<td>-------------------</td>
<td>--------------------------</td>
</tr>
<tr>
<td><strong>Langage de contrôle de données (LCD)</strong></td>
<td>Vérification des droits</td>
</tr>
<tr>
<td>---------------</td>
<td>---------------------------</td>
</tr>
<tr>
<td><strong>Langage de contrôle des transactions(LCT/TCL)</strong></td>
<td></td>
</tr>
<tr>
<td>----------------------------</td>
<td>---------------------</td>
</tr></tbody></table>
<p>/!\ Les colonnes en SQL sont typées et dépendent du SGBD/!\</p>
<table>
<thead>
<tr>
<th>Notions SQL</th>
<th>Définition</th>
</tr>
</thead>
<tbody>
<tr>
<td><strong>TINYINT</strong></td>
<td>Entier encodé sur 1 octet (0-255 non signé ou -128-127 signé)</td>
</tr>
<tr>
<td><strong>SMALLINT</strong></td>
<td>Entier encodé sur 2 octet (0-2^16 non signé ou -2^15-2^15-1 signé)</td>
</tr>
<tr>
<td><strong>MEDIUMINT</strong></td>
<td>Entier encodé sur 3 octet (0-2^24 non signé ou 2^23-2^23-1 signé)</td>
</tr>
<tr>
<td><strong>INT</strong></td>
<td>Entier encodé sur 4 octet (0-2^32 non signé ou -2^31-2^31-1 signé)</td>
</tr>
<tr>
<td><strong>BIGINT</strong></td>
<td>Entier encodé sur 8 octet (0-2^64 non signé ou -2^63-2^63-1 signé)</td>
</tr>
<tr>
<td>---------------------------</td>
<td>---------------------</td>
</tr>
<tr>
<td><strong>DECIMAL</strong>/<strong>NUMERIC</strong>(p,s)</td>
<td>définition d'une variable réelle de précision (nombre de chiffres) p et de scale (nombre de chiffres après la virgule) s. max p = 65, max s = 30</td>
</tr>
<tr>
<td><strong>FLOAT</strong></td>
<td>Nombre à virgule flottante, de scale 23</td>
</tr>
<tr>
<td><strong>DOUBLE</strong></td>
<td></td>
</tr></tbody></table>