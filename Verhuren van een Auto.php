<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Rent a Car - Verhuur Auto</title>
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

    echo "<h2>Auto verhuurd:</h2>";
    echo "<p>Klantnaam: " . $_POST['customer_name'] . "</p>";
    echo "<p>Auto-informatie: " . $_POST['car_info'] . "</p>";
    echo "<p>Huurperiode: " . $_POST['rental_period'] . " dagen</p>";
    echo "<p>Kosten: $" . ($_POST['rental_period'] * 50) . "</p>";
}
?>    
</div>
</body>
</html>
