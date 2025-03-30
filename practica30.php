<? 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PRACTICA 30</title>
</head>
<body>
    <header><h1>3 MEJORES NOTAS</h1></header>
    <main>
        <form action="practica30.php" method="POST">
<label for="NOTA1">NOTA 1</label>
<input type="number" name="NOTA1" id="NOTA1" required><br>
<label for="NOTA2">NOTA 2</label>
<input type="number" name="NOTA2" id="NOTA2" required><br>
<label for="NOTA3">NOTA 3</label>
<input type="number" name="NOTA3" id="NOTA3" required><br>
<label for="NOTA4">NOTA 4</label>
<input type="number" name="NOTA4" id="NOTA4" required><br>
<input type="submit" value="Calcular">
        </form>
        <?php
if($_SERVER['REQUEST_METHOD'] == 'POST'){
$nota1 = $_POST['NOTA1'];
$nota2 = $_POST['NOTA2'];
$nota3 = $_POST['NOTA3'];
$nota4 = $_POST['NOTA4'];

     $notas = array($nota1, $nota2, $nota3, $nota4);
    rsort($notas); 
    $promedio = ($notas[0] + $notas[1] + $notas[2]) / 3;

            
 echo "<p>El promedio de las 3 mejores notas es:" . number_format($promedio, 2) . "</p>"; 
            if($promedio >= 6){
echo "<p>APROBADO</p>";
            } else {
echo "<p>REPROBADO</p>";
            }
        }
        ?>
    
</main>
<footer>
        <p>Maria Fernanda Gonzalez Pineda</p>
</footer>
</body>
</html>