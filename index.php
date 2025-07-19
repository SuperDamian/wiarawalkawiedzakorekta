<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>dodawanie i korekta artykułów</h1>
    <div id="dodawanie">
        <form action="" method="post">
        <h2>dodawanie:</h2>
        tytuł: <input type="text"><br>
        autor(imię i nazwisko): <input type="text"><br>
        treść: <textarea></textarea><br>
        <button onclick="dodaj()">dodaj</button>
        </form>
    </div>
    <div id="artykuly">

    </div>
</body>
</html>

<?php
$artykuly = fopen('artykuly.txt', 'w');
fwrite($artykuly, 'probna linijka');
?>
