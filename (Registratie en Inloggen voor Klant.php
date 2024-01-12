<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Rent a Car - Registratie/Inloggen</title>
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
        
        $users = [
            ['username' => 'klant1', 'password' => password_hash('wachtwoord1', PASSWORD_DEFAULT)],
            ['username' => 'klant2', 'password' => password_hash('wachtwoord2', PASSWORD_DEFAULT)],
        ];
        
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            if (isset($_POST['register'])) {

                $newUser = ['username' => $_POST['username'], 'password' => password_hash($_POST['password'], PASSWORD_DEFAULT)];
                $users[] = $newUser;
                echo "Registratie succesvol. U kunt nu inloggen.";
            } elseif (isset($_POST['login'])) {

                $username = $_POST['username'];
                $password = $_POST['password'];
        
                foreach ($users as $user) {
                    if ($user['username'] === $username && password_verify($password, $user['password'])) {
                        $_SESSION['username'] = $username;
                        echo "Inloggen succesvol. Welkom, $username!";
                        break;
                    }
                }
        
                if (!isset($_SESSION['username'])) {
                    echo "Ongeldige inloggegevens.";
                }
            }
        }
        ?>
    </div>
</body>
</html>
