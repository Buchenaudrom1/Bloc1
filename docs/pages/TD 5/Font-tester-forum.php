<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Font Tester avec Formulaire</title>
    <style>
        .message-container {
            margin: 20px;
            text-align: center;
        }
    </style>
</head>
<body>

<h1>Testeur de Polices avec Formulaire</h1>

<?php
$message = "Aucun message fourni";
$size = 12;
$color = "black";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $message = !empty($_POST['message']) ? $_POST['message'] : $message;
    $size = !empty($_POST['size']) ? (int)$_POST['size'] : $size;
    $color = !empty($_POST['color']) ? $_POST['color'] : $color;

    if ($size <= 0) {
        $size = 12;
    }
}

echo "<div class='message-container' style='font-size: {$size}px; color: {$color};'>{$message}</div>";
?>

<form method="POST" action="font-tester-forum.php">
    <label for="message">Message :</label><br>
    <textarea name="message" id="message" rows="4" cols="50" placeholder="Entrez votre message ici..."><?php echo htmlspecialchars($message); ?></textarea><br>

    <label for="size">Taille :</label>
    <input type="number" name="size" id="size" value="<?php echo $size; ?>"><br>

    <label for="color">Couleur :</label>
    <input type="color" name="color" id="color" value="<?php echo $color; ?>"><br>

    <input type="submit" value="Afficher le message">
</form>

</body>
<!-- </html> -->