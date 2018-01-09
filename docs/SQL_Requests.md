
## Liste des boissons
````
SELECT name FROM drinks;
````


## Liste des ingrédients en manque (dont la quantité est nulle)
````
SELECT name FROM ingredients WHERE quantity=0;
````


## Liste des boissons dont le libellé contient le mot « café » ("Expresso dans le cas de notre BdD")
````
SELECT name FROM drinks WHERE name LIKE %expresso%;
````


## Liste des boissons dont le prix est entre 0.40 et 0.70 euros
````
SELECT name FROM drinks WHERE price BETWEEN 40 AND 70;
````


## Liste des ventes d’aujourd’hui classées par n° décroissant
````
SELECT name 
FROM `drinks`
INNER JOIN `sales`
ON drinks.code = sales.drinks_code
WHERE drinks.code IN (
    SELECT drinks_code
    FROM sales
    WHERE DATE(date)=CURRENT_DATE)
ORDER BY name DESC;
````


## Liste des ingrédients (nom et qte nécesssaire) d’une boisson donnée
````
SELECT name, recipeqty
FROM `recipes`
INNER JOIN `ingredients`
ON recipes.ingredients_id=ingredients.id
WHERE drinks_code='exp';
````

## Liste des boissons disponibles (pour lesquelles les ingrédients sont dispo)
````
SELECT drinks.name FROM drinks
WHERE drinks.name NOT IN (
    SELECT drinks.name FROM drinks
	INNER JOIN recipes ON drinks.code = recipes.drinks_code
	INNER JOIN ingredients ON recipes.ingredients_id = ingredients.id
	WHERE recipes.recipeqty > ingredients.ingredients_stock) 


															***	***	***	***	***	***	***	***	***	***	***
																			ALTERNATIVE						
SELECT drinks.name																						
FROM drinks, recipes, ingredients 																			SELECT drinks.name FROM drinks 
WHERE drinks.code = recipes.drinks_code 																	INNER JOIN recipes ON drinks.code = recipes.drinks_code
AND recipes.ingredients_id = ingredients.id 																INNER JOIN ingredients ON recipes.ingredients_id = ingredients.id
GROUP BY drinks.name 																						GROUP BY drinks.name
HAVING MIN(recipes.recipeqty <= ingredients.ingredients_stock)!= 0											HAVING MIN(recipes.recipeqty <= ingredients.ingredients_stock)!= 0								

````

## Liste des boissons vendues aujourd’hui
````
SELECT name FROM `drinks`
INNER JOIN sales ON drinks.code = sales.drinks_code
WHERE drinks.code IN (
    SELECT drinks_code
    FROM sales
    WHERE DATE(date)=CURRENT_DATE);
````

## Prix de la derniere boisson vendue
````
SELECT price FROM drinks
INNER JOIN sales ON drinks.code = sales.drinks_code
WHERE drinks.code IN (
    SELECT drinks_code
    FROM sales
    WHERE DATE(date)=CURRENT_DATE)									// Prend toutes les ventes de la date
ORDER BY price DESC LIMIT 1;										// Limite l'affichage au dernier row


															***	***	***	***	***	***	***	***	***	***	***
																			ALTERNATIVE
SELECT name, price, date											
FROM drinks
INNER JOIN sales
ON drinks.code = sales.drinks_code
WHERE date=(
    SELECT MAX(date)
    FROM sales)
````

## Nombre de ventes de la boisson « CaféLong » ("Double Expresso" en l'occurence)
````																	Pour une date définie
SELECT COUNT(drinks_code)
FROM sales
WHERE sales.drinks_code='dbl' AND DATE(date)='2018-01-05'; 			


															***	***	***	***	***	***	***	***	***	***	***
																		Pour la date du jour
SELECT COUNT(drinks_code)
FROM sales
WHERE sales.drinks_code='dbl' AND DATE(date)=CURRENT_DATE 			 
````

## Rajouter la boisson « Café au lait »
````
INSERT INTO drinks
VALUES ('lat', 'Latte', 70);
````

## Rajouter 100 à la quantité en stock de l’ingrédient « sucre »
````
UPDATE ingredients
SET quantity = quantity + 100
WHERE ingredients.name = 'sugar';
````

## Augmenter de 0.10 euros le prix de toutes les boissons
````
UPDATE drinks
SET price = price + 10;
````

## Créer une nouvelle vente d’expresso avec 2 sucres
````
INSERT INTO sales
VALUES ('exp', '6', NULL, '2', CURRENT_DATE);
````

## Supprimer cette vente
````
DELETE FROM `sales` 
WHERE `sales`.`drinks_code` = \'dbl\' 
AND `sales`.`ingredients_id` = 6 
AND `sales`.`id` = 10;
````
