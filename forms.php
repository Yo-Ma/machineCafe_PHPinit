
<form action="machineCafe.php" method="POST">

	<h2><u>Choisissez votre boisson</u></h2>
<!-- 	<p class="radioSelect"><label><input type="radio" name="drink" value="expresso" /> Expresso</label></p>
<p class="radioSelect"><label><input type="radio" name="drink" value="double expresso" /> Double expresso</label></p>
<p class="radioSelect"><label><input type="radio" name="drink" value="latte" /> Latte</label></p>
<br />
<p class="radioSelect"><label><input type="radio" name="drink" value="chocolat" /> Chocolat</label></p>
<p class="radioSelect"><label><input type="radio" name="drink" value="thé" /> Thé</label></p>
<br /> -->



	<?php 
		drinksChoices(); 
	?>

	<h2><u>Quantité de sucre</u></h2>
	<p class="radioSelect"><label><input type="radio" name="sugarNb" value="0" /> 0</label></p>
	<p class="radioSelect"><label><input type="radio" name="sugarNb" value="1" /> 1</label></p>
	<p class="radioSelect"><label><input type="radio" name="sugarNb" value="2" /> 2</label></p>
	<p class="radioSelect"><label><input type="radio" name="sugarNb" value="3" /> 3</label></p>
	<p class="radioSelect"><label><input type="radio" name="sugarNb" value="4" /> 4</label></p>
	<p class="radioSelect"><label><input type="radio" name="sugarNb" value="5" /> 5</label></p>
	
	<p class="sendbtn"><input type="submit" /></p><br /> 

</form>



