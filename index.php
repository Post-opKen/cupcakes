<!--
Ean Daus
1/4/19
index.php
Cupcake order form
-->
<?php
$flavors = array(
    'grasshopper' => 'The Grasshopper',
    'maple' => 'Whiskey Maple Bacon',
    'carrot' => 'Carrot Walnut',
    'caramel' => 'Salted Caramel Cupcake',
    'velvet' => 'Red Velvet',
    'lemon' => 'Lemon Drop',
    'tiramisu' => 'Tiramisu'
);
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cupcakes</title>
</head>
<body>
<!--form with name, flavor checkboxes and order button-->
<form>
    <h2>Cupcake order form</h2>
    <label> Name:
        <input type="text" name="name" id="name">
    </label>
    <?php

    ?>
    <button type="submit">Submit</button>
</form>
</body>
</html>