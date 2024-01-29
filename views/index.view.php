<?php
include "../partials/header.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1> bienvenue sur mon app en PHP </h1>
    <form action="chemin_vers_le_script_de_traitement" method="POST">
        <label for="email">Email:</label><br>
        <input type="email" id="email" name="email" required><br>

        <label for="subject">Sujet:</label><br>
        <input type="text" id="subject" name="subject" required><br>

        <label for="message">Message:</label><br>
        <textarea id="message" name="message" rows="4" cols="50" required></textarea><br>

        <input type="submit" value="Envoyer">
    </form>
    
</body>
</html>
