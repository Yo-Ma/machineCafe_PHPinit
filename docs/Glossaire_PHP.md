<h1>Glossaire PHP</h1>
<hr>
<table>
<thead>
<tr>
<th>Fonction PHP</th>
<th>Rôle</th>
</tr>
</thead>
<tbody>
<tr>
<td><strong>date</strong>(string $format, [int $timestamp])</td>
<td>Renvoie une string de la date $timestamp (par défaut la date actuelle) reformatée selon les règles dans $format</td>
</tr>
<tr>
<td><strong>getdate</strong>([int $timestamp])</td>
<td>Renvoie un tableau associatif (clés =&gt; valeurs) contenant les informations de $timestamp (par défaut la date actuelle)</td>
</tr>
<tr>
<td><strong>time</strong>(void)</td>
<td>Renvoie le timestamp actuel</td>
</tr>
<tr>
<td><strong>trim</strong>($string [, $character_mask])</td>
<td>supprime de $string les caractères de la chaine $character_mask, par défaut les espaces</td>
</tr>
<tr>
<td><strong>ltrim</strong>($string [, $character_mask])</td>
<td>même comportement que trim() appliqué uniquement au début de la $string (left trim)</td>
</tr>
<tr>
<td><strong>rtrim</strong>($string [, $character_mask])</td>
<td>même comportement que trim() appliqué uniquement à la fin de la $string (right trim)</td>
</tr>
<tr>
<td><strong>strlen</strong>($string)</td>
<td>renvoie la longueur de la $string</td>
</tr>
<tr>
<td><strong>strtoupper</strong>($string)</td>
<td>renvoie la conversion en majuscules de la $string</td>
</tr>
<tr>
<td><strong>ucfirst</strong>($string)</td>
<td>met en majuscule le premier caractère de la $string et renvoie la chaîne créée</td>
</tr>
<tr>
<td><strong>substr</strong>($string, int $start [, int $length])</td>
<td>renvoie le segment de $string à partir $start de longueur $length (par défaut jusqu'à la fin de $string). Si $start est négatif, le segment commencera à compter à partir de la fin</td>
</tr>
<tr>
<td><strong>strpos</strong>($string, $toFind [, $offset])</td>
<td>Renvoie la position de l'élément $toFind dans $string. $offset permet de définir à partir d'où $string sera parcouru</td>
</tr>
<tr>
<td><strong>explode</strong>($separateur, $string [, $limit])</td>
<td>revoie le tableau des sous-chaînes de $string, séparée par $separateur. Si $limit est défini, renvoie $limit éléments, le dernier étant le reste de la chaîne</td>
</tr>
<tr>
<td><strong>hmlspecialchars</strong>($string)</td>
<td>convertit les caractères spéciaux dde $string en entités HTML</td>
</tr>
<tr>
<td><strong>urlencode</strong>($string)</td>
<td>renvoie une version encodée de $string insérable dans une URL (plus d'espace, etc)</td>
</tr>
<tr>
<td><strong>isset</strong>($var[,$var2 ...])</td>
<td>renvoie TRUE si toutes les variables passées en paramètres sont définies et différentes de NULL</td>
</tr>
<tr>
<td><strong>empty</strong>($var)</td>
<td>renvoie FALSE si $var est définie et non vide</td>
</tr>
<tr>
<td><strong>$_GET</strong></td>
<td>Tableau associatif (clé =&gt; valeur) passé par l'URL (méthode GET). exemple:</td>
</tr>
<tr>
<td><code>echo htmlspecialchars($_GET["name"]);</code></td>
<td>renvoie <code>Geraud</code> si l'URL était <code>http://example.com/?name=Geraud</code></td>
</tr>
<tr>
<td><strong>$_POST</strong></td>
<td>Tableau associatif passé au script par la méthode POST (voir <strong>$_GET</strong>)</td>
</tr>
<tr>
<td><strong>$_REQUEST</strong></td>
<td>Un tableau associatif qui contient par défaut le contenu des variables $_GET, $_POST et $_COOKIE.</td>
</tr>
<tr>
<td><strong>$_SERVER</strong></td>
<td>Tableau associatif des informations du serveur <strong>(à préciser)</strong></td>
</tr>
<tr>
<td><strong>$_SESSION</strong></td>
<td>Tableau associatif des valeurs stockées dans la session. La session s'ouvre dès l'entrée sur le site du visiteur, et se ferme dès sa sortie, au bout d'un temps d'inactivité (timeout) ou la déconnexion via session_destroy(). $_SESSION nécessite l'appel de la fonction <strong>start_session</strong>() <strong>AVANT TOUT CODE HTML ET SUR CHAQUE PAGE L'UTILISANT</strong> pour pouvoir être utilisé</td>
</tr>
<tr>
<td><strong>$_COOKIE</strong></td>
<td>Un tableau associatif de variables, passé au script courant, via des cookies HTTP.</td>
</tr>
<tr>
<td><strong>include</strong>($string)</td>
<td>Inclut au script actuel le fichier spécifié par le chemin $string. (exemple un autre script php)</td>
</tr>
<tr>
<td><strong>require</strong>($string)</td>
<td>Comportement analogue à include() mais renvoie une erreur fatale (et donc arrête le script) si l'inclusion renvoie une erreur (include n'émet qu'une alerte <strong>E_WARNING</strong> le cas échéant</td>
</tr>
<tr>
<td><strong>include_once</strong>($string)</td>
<td>idem include(), mais si le fichier a déjà été inclus, ne le réinclut pas et renvoie TRUE</td>
</tr>
<tr>
<td><strong>require_once</strong>($string)</td>
<td>idem include_once(), pour require()</td>
</tr>
<tr>
<td><strong>key_exists</strong>($key, $array)</td>
<td>alias de <strong>array_key_exists</strong>(), vérifie si la clé $key existe dnas $array. renvoie le booléen TRUE si vrai, FALSE sinon</td>
</tr>
<tr>
<td><strong>in_array</strong>($toFind, $array)</td>
<td>renvoie TRUE si $toFind est dans $array, FALSE sinon</td>
</tr>
<tr>
<td><strong>array_search</strong>($toFind, $array)</td>
<td>renvoie la clé associé à $toFind s'il se trouve dans $array, FALSE sinon</td>
</tr>
<tr>
<td><strong>array_keys</strong>($array [,$search_value])</td>
<td>renvoie un tableau des clés de $array. Si $search_value est spécifié, ne renvoie que les clés contenant la valeur de $search_value</td>
</tr>
<tr>
<td><strong>array_values</strong>($array)</td>
<td>renvoie toutes les valeurs d'un tableau associatif indexé de façon numérique</td>
</tr>
<tr>
<td><strong>is_array</strong>($var)</td>
<td>renvoie TRUE si $var est un tableau, FALSE sinon</td>
</tr>
<tr>
<td><strong>sort</strong>($array)</td>
<td>trie le tableau $array dans l'ordre croissant <strong>(à préciser)</strong></td>
</tr>
<tr>
<td><strong>ksort</strong>($array)</td>
<td>trie le tableau $array suivant ses clés</td>
</tr>
<tr>
<td><strong>asort</strong>($array)</td>
<td>trie le tableau $array en conservant l'association clé =&gt; valeur</td>
</tr>
<tr>
<td><strong>each</strong>($array)</td>
<td>renvoie chaque paire clé/valeur d'un tableau</td>
</tr>
<tr>
<td><strong>print_r</strong>($var)</td>
<td>Affiche des informations lisibles pour une variable</td>
</tr></tbody></table>