<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Rent a Car - Voeg Auto Toe</title>
    <style>
        body {
    font-family: Arial, sans-serif;
    background-color: #f4f4f4;
    margin: 0;
    padding: 0;
}

.container {
    max-width: 600px;
    margin: 20px auto;
    background-color: #fff;
    padding: 20px;
    border-radius: 5px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}
</style>

</head>
<body>
    <div class="container">
<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    echo "<h2>Nieuwe auto toegevoegd:</h2>";
    echo "<p>Merk: " . $_POST['brand'] . "</p>";
    echo "<p>Model: " . $_POST['model'] . "</p>";
    echo "<p>Kleur: " . $_POST['color'] . "</p>";
    echo "<p>Beschikbaarheid: " . $_POST['availability'] . "</p>";
}
?>
    </div>
</body>
</html>
