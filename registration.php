<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    <link rel="stylesheet" href="registration.css">
</head>

<body>
    <?php

$message = '';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);

    if (!empty($username) && !empty($password)) {
        // Jelszó hash-elése
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);

        // Felhasználó beszúrása
        $stmt = $conn->prepare("INSERT INTO users (username, password) VALUES (?, ?)");
        $stmt->bind_param("ss", $username, $hashed_password);

        if ($stmt->execute()) {
            $message = "Sikeres regisztráció!";
        } else {
            $message = "Hiba: " . $stmt->error;
        }

        $stmt->close();
    } else {
        $message = "Töltsd ki az összes mezőt!";
    }
}
?>
    <div class="form-tarolo">
        <div class="form-container">
            <h2>Register for RideXspot ZRT.</h2>
            <form method="post" action="">
        <label>Felhasználónév:</label><br>
        <input type="text" name="username" required><br><br>

        <label>Jelszó:</label><br>
        <input type="password" name="password" required><br><br>

        <button type="submit">Regisztráció</button>
    </form>
        </div>
    </div>
</body>

</html>