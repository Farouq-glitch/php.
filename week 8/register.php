<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registratieformulier</title>
</head>
<body>

<h2>Registratieformulier</h2>

<form action="form_process.php" method="POST">
    <label for="LuserName">Gebruikersnaam (3-15 tekens):</label><br>
    <input type="text" id="LuserName" name="LuserName" required><br><br>

    <label for="Lemail">E-mailadres:</label><br>
    <input type="email" id="Lemail" name="Lemail" required><br><br>

    <label for="Lpassword">Wachtwoord (minimaal 6 tekens):</label><br>
    <input type="password" id="Lpassword" name="Lpassword" required><br><br>

    <label>Geslacht:</label><br>
    <input type="radio" id="Lman" name="gender" value="Lman">
    <label for="Lman">Man</label><br>
    <input type="radio" id="Lvrouw" name="gender" value="Lvrouw">
    <label for="Lvrouw">Vrouw</label><br><br>

    <label for="Lcountry">Land:</label><br>
    <select id="Lcountry" name="Lcountry" required>
        <option value="">Kies een land</option>
        <option value="Nederland">Nederland</option>
        <option value="Turkije">Turkije</option>
        <option value="Duitsland">Duitsland</option>
        <option value="Frankrijk">Frankrijk</option>
    </select><br><br>

    <input type="submit" value="Registreren">
</form>

</body>
</html>