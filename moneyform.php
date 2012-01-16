<?php
var_dump($_POST);
?><!DOCTYPE HTML>
<html>
<head>
	<meta charset="utf-8">
	<title>Forms</title>
</head>

<body>

<form action="moneyform.php" method="post">
	<label for="number1">Number 1</label>
	<input id="number1" name="number1">
	
	<label for="number2">Number 2</label>
	<input id="number2" name="number2">
	
	<label for="function">Function</label>
	<select id="function" name="function">
		<option value="add">+</option>
		<option value="subtract">-</option>
		<option value="multiply">*</option>
		<option value="divide">/</option>
	</select>
		
	<button type="submit">Calculate</button>
</form>
	
	

<?php if ($_POST['function'] == 'add') : ?>
	<?php $addtotal = $_POST['number1'] + $_POST['number2']; ?>
	
	<?php elseif ($_POST['function'] == 'subtract') : ?>
		<?php $mintotal = $_POST['number1'] - $_POST['number2']; ?>
	<?php elseif ($_POST['function'] == 'multiply') : ?>	
		<?php $timestotal = $_POST['number1'] * $_POST['number2']; ?>
		
	<?php else : ?>
		<?php $divtotal = $_POST['number1'] / $_POST['number2']; ?>

<?php endif; ?>

<p>Your Total: $<?php echo $addtotal; ?><?php echo $mintotal; ?><?php echo $timestotal; ?><?php echo $divtotal; ?> </p>



</body>
</html>