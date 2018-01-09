<!-- <!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://use.fontawesome.com/33a4e2f325.js"></script>
    <script type="text/javascript" src="script.js"></script>


    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link type='text/css' rel='stylesheet' href='style.css'/>

    <title>PHP - Session 1</title>
</head>
-->
<form action="machineCafe.php" method="POST">

	<h2><u>Choisissez votre boisson</u></h2>
<!-- 	<p class="radioSelect"><label><input type="radio" name="drink" value="expresso" /> Expresso</label></p>
<p class="radioSelect"><label><input type="radio" name="drink" value="double expresso" /> Double expresso</label></p>
<p class="radioSelect"><label><input type="radio" name="drink" value="latte" /> Latte</label></p>
<br />
<p class="radioSelect"><label><input type="radio" name="drink" value="chocolat" /> Chocolat</label></p>
<p class="radioSelect"><label><input type="radio" name="drink" value="thé" /> Thé</label></p>
<br /> -->
	<?php drinksChoices($bdd); ?>



	<h2><u>Quantité de sucre</u></h2>
	<p class="radioSelect"><label><input type="radio" name="sugarNb" value="0" /> 0</label></p>
	<p class="radioSelect"><label><input type="radio" name="sugarNb" value="1" /> 1</label></p>
	<p class="radioSelect"><label><input type="radio" name="sugarNb" value="2" /> 2</label></p>
	<p class="radioSelect"><label><input type="radio" name="sugarNb" value="3" /> 3</label></p>
	<p class="radioSelect"><label><input type="radio" name="sugarNb" value="4" /> 4</label></p>
	<p class="radioSelect"><label><input type="radio" name="sugarNb" value="5" /> 5</label></p>

	<p class="sendbtn"><input type="submit" /></p><br /> 

</form>

<?php

/*	function boissonSelected() {
		if (isset($_POST['drink'])) {

			foreach ($_POST['drink'] as $drinkSelected) {

				if (isset($_POST['sugarNb'])) {

					foreach ($_POST['sugarNb'] as $sugarNb) {

						switch ($sugarNb) {
							case 1:
							echo '<h2> Vous avez sélectionné un '.$drinkSelected. ' avec ' .$sugarNb .' sucre</h2>';
							break;
							case 2:
							case 3:
							case 4:
							case 5:
							echo '<h2> Vous avez sélectionné un '.$drinkSelected. ' avec ' .$sugarNb .' sucres</h2>';
							break;
							default:
							echo '<h2>Vous avez sélectionné un '.$drinkSelected. ' sans sucre</h2>';
							break;
						}
					}

				} else {
					echo '<h2>Vous avez sélectionné un '.$drinkSelected. ' sans sucre</h2>';
				}
			}

		} else {
			echo '<h2>Merci de sélectionner une boisson dans la liste</h2>';
		}

		return makeDrink($drinkSelected, $sugarNb);
	}*/


	?>

