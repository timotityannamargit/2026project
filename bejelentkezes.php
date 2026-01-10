<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <title>RideXspot - Bejelentkezés</title>
    <link rel="stylesheet" href="bejelentkezes.css">
</head>
<body>
    <?php include("menu.php"); ?>

    <h1>Bejelentkezés</h1>
    <form action="bejelentkezes.php" method="POST">
        <input type="text" name="username" placeholder="Felhasználónév:" required>
        <input type="email" name="email" placeholder="E-mail:" required>
        <input type="password" name="password" placeholder="Jelszó:" required>
        <button type="submit" name ="login">Belépés</button>
    </form>

    <?php 
        if(isset($_POST['login'])){
            $username = $_POST['username'];
            $email = $_POST['email'];
            $password = $_POST['password'];

            $correct_username = "";
            $correct_email = "";
            $correct_password = "";

            if($username === $correct_username && $email === $correct_email && $password === $correct_password){
                echo "<p style='color: green;'>Sikeres bejelentkezés! Átírányíás a főoldalra...</p>";
                header("refresh:2; url=index.php");
                exit();
            }else{
                echo "<p style='color: red;'>Hibás felhasználónév, e-mail vagy jelszó!</p>";
            }
        }
    ?>

    <footer>
        <p>&copy; 2025 RideXspot | Adatvédelem | Impresszum</p>
    </footer>
</body>
</html>