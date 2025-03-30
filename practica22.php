<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PRACTICA 22</title>
</head>
<body>
    <header>
<h1> ES VOCAL O NO ES VOCAL</h1>
</header>
<main>
<section>
    <form action="" method="POST">
        <label for="caracter">ingresa un caracter:</label>
        <input type="text" id="caracter" name="caracter" maxlength="1">
        <button type="submit">Enviar</button>
    </form>
    <?php
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $char=$_POST['caracter'];
        if($char == 'a' || $char == 'A'){
            $resultado='es vocal';
        }elseif ($char=='e' || $char == 'E'){
            $resultado='es vocal';
        }elseif ($char=='i' || $char == 'I'){
            $resultado='es vocal';
        }elseif ($char=='o' || $char == 'O'){
            $resultado='es vocal';
        }elseif ($char=='u' || $char == 'U'){
            $resultado='es vocal';
        }else{
$resultado = 'no es vocal';
        }
        echo"El caracter ingresado $resultado";
    }
    ?>
    <a href="practica23.php">siguiente practica</a>
</section>
</main>
<footer>
<p>Maria Fernanda Gonzalez Pineda</p>
</footer>
</body>
</html>