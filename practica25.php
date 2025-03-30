<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PRACTICA 25</title>
</head>
<body>
    <header>
        <h1> DOBLE Y TRIPLE</h1>
</header>
<main>
    <section>
<form action="" method="POST">
    <label for="num">ingresa un numero</label>
    <input type="number" name="num" id="num">
    <button type="submit">Enviar</button>
</form>
<?php
    if($_SERVER['REQUEST_METHOD'] =='POST'){
     $numero=$_POST['num'];
    if($numero  % 2 != 0){
    $mensaje="el doble del numero". $numero."es:".($numero *2);
}else{
    $mensaje="el triple del numero". $numero."es:".($numero *3); 
}
     echo$mensaje;
     }
     ?><br><br><br>
    <a href="practica26.php">siguiente practica</a>
    </section>
        </main>
        <footer>Maria Fernanda Gonzalez Pineda</footer>
</body>
</html>