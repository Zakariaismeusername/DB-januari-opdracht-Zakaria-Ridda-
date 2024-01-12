<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Rent a Car - Admin Inloggen</title>
    <style>
        body {
    font-family: Arial, sans-serif;
    background-color: #f4f4f4;
    margin: 0;
    padding: 0;
}

.container {
    max-width: 400px;
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
session_start();

$adminUsers = [
    ['username' => 'admin', 'password' => password_hash('adminpassword', PASSWORD_DEFAULT)],
];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['login'])) {

        $username = $_POST['username'];
        $password = $_POST['password'];

        foreach ($adminUsers as $adminUser) {
            if ($adminUser['username'] === $username && password_verify($password, $adminUser['password'])) {
                $_SESSION['admin'] = $username;
                echo "Inloggen succesvol als admin. Welkom, $username!";
                break;
            }
        }

        if (!isset($_SESSION['admin'])) {
            echo "Ongeldige inloggegevens voor admin.";
        }
    }
}
?>      
    </div>
</body>
</html>
