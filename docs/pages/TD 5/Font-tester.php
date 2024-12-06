<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Font Tester</title>
    <style>
        .message-container {
            margin: 20px;
            text-align: center;
        }
    </style>
</head>
<body>

<h1>Testeur de Polices</h1>

<?php
$message = isset($_GET['message']) ? $_GET['message'] : "Aucun message fourni.";
$size = isset($_GET['size']) ? (int)$_GET['size'] : 12;
$color = isset($_GET['color']) ? $_GET['color'] : "black";

if ($size <= 0) {
    $size = 12;
}

echo "<div class='message-container' style='font-size: {$size}px; color: {$color};'>{$message}</div>";
?>

<a href="?message=Salut&size=15&color=red">Message Rouge, Taille 15</a><br>
<a href="?message=Bonjour&size=30&color=green">Message Vert, Taille 30</a><br>
<a href="?message=Hello&size=50&color=blue">Message Bleu, Taille 50</a><br>

<hr>

<form method="GET" action="font-tester.php">
    <label for="message">Message :</label>
    <input type="text" name="message" id="message" value="<?php echo htmlspecialchars($message); ?>"><br>

    <label for="size">Taille :</label>
    <input type="number" name="size" id="size" value="<?php echo $size; ?>"><br>

    <label for="color">Couleur :</label>
    <input type="color" name="color" id="color" value="<?php echo $color; ?>"><br>

    <input type="submit" value="Afficher le message">
</form>

<form method="GET" action="font-tester.php">
    <input type="hidden" name="message" value="<?php echo htmlspecialchars($message); ?>">
    <input type="hidden" name="color" value="<?php echo htmlspecialchars($color); ?>">
    <input type="hidden" name="size" value="<?php echo $size + 5; ?>">
    <button type="submit">Augmenter Taille (+5)</button>
</form>

<form method="GET" action="font-tester.php">
    <input type="hidden" name="message" value="<?php echo htmlspecialchars($message); ?>">
    <input type="hidden" name="color" value="<?php echo htmlspecialchars($color); ?>">
    <input type="hidden" name="size" value="<?php echo max($size - 5, 1); ?>">
    <button type="submit">Diminuer Taille (-5)</button>
</form>

</body>
</html>