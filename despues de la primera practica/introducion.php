<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Intro</title>
</head>
<body>
    <form action=""method="POST">
        <label>Nombre</label><br>
        <input type="text" name="nombre"><br><br>
        <label>Apellidos</label><br>
        <input type="text" name="apellidos"><br><br>
        <label>Edad</label><br>
        <input type="number" name="edad"><br><br>

        <input type="number" name="num1"><br><br>
        <input type="number" name="num2"><br><br>

        <input type="submit" value="Enviar">
    </form>
        
    <?php
        if($_SERVER["REQUEST_METHOD"]== "POST"){
            $nombre = $_POST["nombre"];
            $apellidos = $_POST["apellidos"];

            $edad = (int) $_POST["edad"];
            $num1 = (int) $_POST["num1"];
            $num2 = (int) $_POST["num2"];

            echo "<h2>".$num1+$num2."</h2>";
        }
    ?>

<form action=""method="POST">
        <label>Número 1</label><br>
        <input type="number" name="num1"><br><br>
        <label>Nùmero 2</label><br>
        <input type="number" name="num2"><br><br>
        <input type="submit" value="Enviar"><br><br>
</form>

    <?php
        if($_SERVER["REQUEST_METHOD"]== "POST"){
            $num1 = (int)$_POST["num1"];
            $num2 = (int)$_POST["num2"];

            if($num1<$num2){
                echo $num1." <= es más pequeño que => ".$num2; 
            }else{
                echo $num2." <= es más pequeño que => ".$num1; 

            }
        }
    ?>



</body>
</html>