<?php

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





?>
