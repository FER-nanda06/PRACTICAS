<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PRACTICA 23</title>
</head>
<body>
  <header>  
    <h1>MULTIPLO DE 3 Y 5</h1>
</header>
<main>
    <section>
        <form action="" method="POST"></form>
        <label for="num">ingresa un numero</label>
        <input type="number" id="num" name="num">
        <button type="bumbit>">Enviar</button>
</form>
<?php
if($_SERVER['REQUEST_METHOD'] =='POST'){
    $numero=$_POST['num'];

    if($numero % 3 == 0 && $numero % 5 == 0){
        $mensaje = "el numero". $numero. "es multiplo 3 y 5";
    }else{
        $mensaje = "el numero". $numero. "es multiplo 3 y 5";
    }
    echo $mensaje;
}
?>
<a href="practica24.php">siguiente practica</a>
    </section>
</main>
<footer>
    <p>Maria Fernanda Gonzalez Pineda</p>
</body>
</html>