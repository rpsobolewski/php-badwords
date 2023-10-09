<!DOCTYPE html>
<html>

<head>
    <title>Form PHP</title>
</head>

<body>
    <h1>Inserisci il paragrafo e la parola da censurare:</h1>
    <form action="script.php" method="post">

        <textarea name="paragrafo" id="paragrafo" placeholder="paragrafo"></textarea><br>

        <input type="text" name="parola" id="parola" placeholder="parola da censurare"><br><br>
        <input type="submit" value="Invia">
    </form>
</body>

</html>