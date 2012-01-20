<?php
var_dump($_POST);
?><!DOCTYPE HTML>
<html>
<head>
	<meta charset="utf-8">
	<title>Forms</title>
	<link href="css/general.css" rel="stylesheet">
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
	
	
	
<?php if (!empty($_POST['number1']) && !empty($_POST['number2'])) : ?>
	<?php if ($_POST['function'] == 'add') : ?>
        <?php $subtotal = $_POST['number1'] + $_POST['number2']; ?>
        
        <?php elseif ($_POST['function'] == 'subtract') : ?>
            <?php $subtotal = $_POST['number1'] - $_POST['number2']; ?>
        <?php elseif ($_POST['function'] == 'multiply') : ?>	
            <?php $subtotal = $_POST['number1'] * $_POST['number2']; ?>
            
        <?php else : ?>
        <?php $subtotal = $_POST['number1'] / $_POST['number2']; ?>
    
    <?php endif; ?>
    
<?php endif; ?>

<?php
	$taxes = ($subtotal * 0.13) + $subtotal;
	$total = number_format($taxes, 2, '.', '');
?>

<p><strong>Your Total:</strong> $<?php echo round($total, 2); ?></p>



</body>
</html>