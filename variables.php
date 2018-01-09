<?php


$drinkList = [
    "coffee" => [ 
        'name'   => 'Café',
        'led'    => false,
        'price'  => 50,
    ],

    "latte" => [ 
        'name'   => 'Latte',
        'led'    => false,
        'price'  => 60,
    ],

    "cocoa" => [ 
        'name'   => 'Chocolat',
        'led'    => false,
        'price'  => 80,
    ],

    "tea" => [
        'name'   => 'Thé',
        'led'    => false,
        'price'  => 70,
    ]
];

$drinkRecipes = [
    'café' => [
        'coffee'=> 1, 
        'water'=> 2, 
        'tea'=> 0, 
        'milk'=> 0, 
        'cocoa'=> 0
    ],

    'latte' => [
        'coffee'=> 1, 
        'water'=> 1, 
        'tea'=> 0, 
        'milk'=> 1, 
        'cocoa'=> 0
    ],

    'chocolat' => [
        'coffee'=> 0, 
        'water'=> 1, 
        'tea'=> 0, 
        'milk'=> 1, 
        'cocoa'=> 1
    ],

    'thé' => [
        'coffee'=> 0, 
        'water'=> 2, 
        'tea'=> 1, 
        'milk'=> 0, 
        'cocoa'=> 0
    ]
];

$coinType = [200, 100, 50, 20, 10, 5];
$coinStock = [50, 50, 50, 50, 50, 50];

$hour = date("H:i");

$coinInserted = 0;
$sugarNb = null;
$drinkSelected = NULL;
$increment = 0;
$bdd = connectionDb('coffee_machine', 'cm', 'cm!');


?>