<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PRACTICA 27</title>
</head>
<body>
    <header>
        <h1>ECUACION DE PRIMER GRADO</h1>
    </header>
    <main>
    <section>
<form action="" method="POST">
<label for="a">ingresa el valor de a</label>
<input type="number" name="a" id="a">
<label for="b">ingresa el valor de b</label>
<input type="number" name="b" id="b">
<button type="submit">Enviar</button>
</form>
<?php
if($_SERVER['REQUEST_METHOD']=='POST'){
    $a = $_POST['a'];
    $b = $_POST['b'];
    if($a == 0){
    $mensaje = "El valor de a no puede ser 0";
    }else{
    $x = -$b / $a;
    $mensaje = "El valor de x es:$x";
    }
    echo $mensaje;
}
?>
<a href="practica28.php">Siguiente Practica</a>
</section>
</main>
<footer>
    <p>Maria Fernanda Gonzalez Pineda</p>
</footer>
</body>
</html>