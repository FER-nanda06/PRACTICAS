<?php 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PRACTICA 29</title>
</head>
<body>
    <header>
        <h1>DOBLE Y TRIPLE</h1>
    </header>
    <main>
        <section>
<form action="" method="POST">
<label for="num">ingresa un numero</label>
<input type="number" name="num" id="num">
<button type="submit">Enviar</button>
</form>
<?php
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $numero = $_POST['num'];
    if($numero >0){
        $resultado =$numero * 2;
}else if($numero < 0){
    $resultado = $numero * 3;
}else{
    $resultado = 0;
}
echo "El resultado es: $resultado";
}
?>
<a href="practica30.php">Siguiente Practica</a>
</section>
</main>
    <footer>
        <p>Maria Fernanda Gonzalez Pineda</p>
    </footer>
</body>
</html