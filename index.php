<!--
Ean Daus
1/4/19
index.php
Cupcake order form
-->
<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);
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
<form method="get" action="">
    <h2>Cupcake order form</h2>
    <label> Name:
        <input type="text" name="name" id="name" <?php if(isset($_GET['name'])){echo "value='$_GET[name]'";}?>>
    </label>
    <p>Cupcake Flavors</p>
    <?php
        foreach ($flavors as $key => $val)
        {
            echo
            "<label>
                <input type='checkbox' name = 'cupcakes[]' value='$key' id='$key'";
            if(!isset($_GET["cupcakes"]))
            {
                $_GET["cupcakes"] = array();
            }
            if(in_array($key, $_GET['cupcakes']))
            {
                echo "checked='checked'";
            }
            echo "> $val <br>
            </label>";
        }
    ?>
    <button type="submit">Submit</button>
</form>
</body>
</html>