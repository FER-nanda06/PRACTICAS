<? //DESPUES DE INGRESAR 4 NOTAS, OBTENER EL PROMEDIO DE LAS 3 
//MEJORES NOTAS Y EL MENSAJE DE APROBADO SI 
//EL PROMEDIO ES MAYOR O IGUAL A 6, CASO CONTRARIO QUE NOS DIGA REPROBADO. 
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
            <label for="nota1">Nota 1:</label>
            <input type="number" name="nota1" id="nota1" required>
            <br>
            <label for="nota2">Nota 2:</label>
            <input type="number" name="nota2" id="nota2" required>
            <br>
            <label for="nota3">Nota 3:</label>
            <input type="number" name="nota3" id="nota3" required>
            <br>
            <label for="nota4">Nota 4:</label>
            <input type="number" name="nota4" id="nota4" required>
            <br>
            <input type="submit" value="Calcular">
        </form>
        <?php
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            $nota1 = $_POST['nota1'];
            $nota2 = $_POST['nota2'];
            $nota3 = $_POST['nota3'];
            $nota4 = $_POST['nota4'];

            // Ordenar las notas de mayor a menor
            $notas = array($nota1, $nota2, $nota3, $nota4);
            rsort($notas); // Ordenar de mayor a menor

            // Calcular el promedio de las 3 mejores notas
            $promedio = ($notas[0] + $notas[1] + $notas[2]) / 3;

            // Mostrar el resultado
            echo "<p>El promedio de las 3 mejores notas es:
             " . number_format($promedio, 2) . "</p>"; // Formatear a 2 decimales
            
            // Mensaje de aprobado o reprobado
            if($promedio >= 6){
                        echo "<p>APROBADO</p>";
            } else {
                echo "<p>REPROBADO</p>";
            }
        }
        ?>
    
    </main>
    <footer><p>Maria Fernanda Gonzalez Pineda</p></footer>
</body>
</html>