<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PRACTICA 28</title>
</head>
<body>
    <header>
        <h1>MAYOR O MENOR DE EDAD</h1>
    </header>
    <main>
<section>
<form action="" method="POST">
<label for="edad">ingresa tu edad</label>
<input type="number" name="edad" id="edad">
<button type="submit">Enviar</button>
</form>
<?php
if($_SERVER['REQUEST_METHOD']=='POST'){
    $edad = $_POST['edad'];
    if($edad >= 18){
        echo "Eres mayor de edad";
    }else{
        echo "Eres menor de edad";
    } 
}
?>  
<a href="practica29.php">siguiente Practica</a>
</section>
    </main>
    <footer><p>Maria Fernanda Gonzalez Pineda</p></footer>
</body>
</html>