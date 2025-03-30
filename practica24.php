<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PRACTICA 24</title>
</head>
<body>
    <header>
        <h1> es par o inpar</h1>
</header>
<main>
    <section>
<form action="" method="POST">
    <label for="num">ingresa un numero</label>
    <input type="number" id="num" name="num"><br>
    <button type="submit">Enviar</button>
</form>
<?php

if($_SERVER['REQUEST_METHOD'] =='POST'){
    $numero=$_POST['num'];

    if($numero % 2 == 0){
        $mensaje = "el numero". $numero. "es par";
    }else{
        $mensaje = "el numero". $numero. "es inpar";
    }
    echo $mensaje;
}
?><br><br><br>
    </section>
    <a href="practica25.php">siguiente practica</a>
</main>
<footer>
    <p>Maria Fernanda Gonzalez Pineda</p>
</footer>
</body>
</html>