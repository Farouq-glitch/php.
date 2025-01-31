<?php
session_start();

$username = trim($_POST['LuserName']);
$email = trim($_POST['Lemail']);
$password = trim($_POST['Lpassword']);
$gender = isset($_POST['gender']) ? $_POST['gender'] : null;
$country = isset($_POST['Lcountry']) ? $_POST['Lcountry'] : null;

function is_valid_email($email) {
return filter_var($email, FILTER_VALIDATE_EMAIL) !== false;
}

function is_valid_password($password) {
return strlen($password) >= 6;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
$errors = [];

if (strlen($username) < 3 || strlen($username) > 15) {
$errors[] = "Gebruikersnaam moet tussen de 5 en 20 tekens zijn.";
}

if (!is_valid_email($email)) {
$errors[] = "Voer een geldig e-mailadres in.";
}

if (!is_valid_password($password)) {
$errors[] = "Wachtwoord moet minimaal 6 tekens zijn.";
}

if (!$gender) {
$errors[] = "Selecteer een geslacht.";
}

if (!$country) {
$errors[] = "Selecteer een land.";
}

if (count($errors) > 0) {
foreach ($errors as $error) {
    echo "<p>" . $error . "</p>";
}
    echo "<a href='index.php'>Probeer het opnieuw</a>";
} else {
$_SESSION['username'] = $username;

header("Location: register.php");
exit;
}
}
?>