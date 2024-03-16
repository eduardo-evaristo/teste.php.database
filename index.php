<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <div class=container>
        <form action="index.php" method=post>
            <label for="led1">Ligar/Desligar LED</label>
            <input type="text" name="led" class=input>
            <input type="submit" value="Enviar" name="submit" class= submit>
        </form>
    </div>
</body>
</html>

<?php
    include("database.php");
    $led = $_POST["led"];
    echo "Resultado: {$led}";


    if (isset($led)) {
        if ($led == 1) {
            $sql = "INSERT INTO ag_dados (led)
            VALUEs (1)";
            mysqli_query($connection, $sql);
        }
        if ($led == 0) {
            $sql = "INSERT INTO ag_dados (led)
            VALUEs (0)";
            mysqli_query($connection, $sql);
        }
    }

    //mysqli_query($connection, $sql);

    mysqli_close($connection);
?>