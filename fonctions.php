<?php
session_start();

include('variables.php');


function connectionDb($dbName, $userName, $pwd) { 
    try {
        $db = new PDO('mysql:host=localhost;dbname='. $dbName .';charset=utf8', $userName, $pwd, array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
    }
    catch(Exception $e) {
        die('Erreur : '.$e->getMessage());
    }
    return $db;
}


function drinkSelection() {
    global $drinkList;

    foreach ($drinkList as $element => $value) {
        echo $value['name'].' ';
    } 
}


function makeDrink($boisson, $sugarNb) {
    global $drinkRecipes;

    echo '<u>La recette du '. $boisson . '</u><br />';
    foreach ($drinkRecipes as $key => $value) {
        if ($key == $boisson) {
            foreach ($value as $key1 => $value1) {
                echo $key1. ' : ' .$value1.' <br /> ';
            }
        }
    }
    if ($sugarNb == 1) {
        echo 'sucre : '. $sugarNb;

    } else if ($sugarNb > 1) {
        echo 'sucres : '. $sugarNb;
    }
    echo '<br /><br /><button class="btn btn-default center-block">Récupérer votre boisson</button>';
}


function drinksListed() {
    global $bdd;
    $reponse = $bdd->query('SELECT drinks.name FROM drinks ORDER BY drinks.name ASC');
    while ($donnees = $reponse->fetch()) {
        echo $donnees['name'] . ' ';
    }    
    $reponse->closeCursor();
}


function drinkschoices() {
    global $bdd, $increment;

    $increment = 0;
    $reponse = $bdd->query('SELECT drinks.name FROM drinks ORDER BY drinks.name ASC');

    while ($donnees = $reponse->fetch()) {
        switch ($increment) {
            case 0:
            case 1:
            case 2:
            case 3:
            echo ' <p class="radioSelect"><label><input type="radio" name="drink" value="' . $donnees["name"] .  '"/> '  . $donnees["name"] . '</label></p>';
            $increment ++;
            break;
            case 4:
            echo ' <br /><p class="radioSelect"><label><input type="radio" name="drink" value="' . $donnees["name"] .  '"/> '  . $donnees["name"] . '</label></p>';
            $increment ++;
            break;
            case 5:
            case 6:
            case 7:
            echo ' <p class="radioSelect"><label><input type="radio" name="drink" value="' . $donnees["name"] .  '"/> '  . $donnees["name"] . '</label></p>';
            $increment ++;
            break;
            case 8:
            echo ' <br /><p class="radioSelect"><label><input type="radio" name="drink" value="' . $donnees["name"] .  '"/> '  . $donnees["name"] . '</label></p>';
            $increment ++;
            case 9:
            case 10:
            case 11:
            break;        
        }
    }    
    $reponse->closeCursor();  
}


function showRecipe() {
    global $bdd;
    $i = 0;

    if (isset($_POST["drink"])) {

        $ingredientsList = $bdd -> prepare("
            SELECT recipes.recipeqty AS 'qty', ingredients.name AS 'ing', drinks.name AS 'name', drinks.price AS 'price'
            FROM `recipes` 
            INNER JOIN drinks ON drinks.code = recipes.drinks_code 
            INNER JOIN ingredients ON ingredients.id = recipes.ingredients_id
            WHERE drinks.name = :drinkSelected 
            ");

        $ingredientsList -> execute(array('drinkSelected' => $_POST["drink"]));
        
        while ($makeRecipe = $ingredientsList -> fetch()) {
        
            if ($i == 0) { 
                $i = 1;
                echo "<b>" . $makeRecipe["name"] . "</b><br>";
                echo '<b> ' . ($makeRecipe['price'] / 100) . ' €uros</b><br><br>';
            }            
            echo $makeRecipe["ing"] . " : " . $makeRecipe["qty"] . "<br>"   ;
        }

    } else {
        echo 'En attente...';
    }

    $ingredientsList -> closeCursor();
}
 
?>

