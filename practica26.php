<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PRACTICA 26</title>
</head>
<body>
    <header>
        <h1> devolver el orden ascendente</h1>
</header>
<main>
    <section>
        <form action="" method="POST">
            <label for="num1">ingresa el pimer numero</label><br><br>
            <input type="number" id="num1" name="num1"><br><br>
            <label for="num2">ingresa el segundo numero</label><br><br>
            <input type="number" id="num2" name="num2"><br><br>
            <label for="num3">ingresa el tercer numero</label><br><br>
            <input type="number" id="num3" name="num3"><br><br>
            <button type="submit">Enviar</button>
        </form>
        <?php
        if($_SERVER['REQUEST_METHOD'] =='POST'){
            $n1=$_POST['num1'];
            $n2=$_POST['num2'];
            $n3=$_POST['num3'];

            if($n1<$n2 && $n1<$n3){
                $menor=$n1;
            }else if($n2<$n1 && $n2<$n3){
                $menor=$n2;
            }else{
                $menor=$n3; 
            }

            if($n1>$n2 && $n1>$n3){
                $mayor=$n1;
            }else if($n2>$n1 && $n2>$n3){
                $mayor=$n2;
            }else{
                $mayor=$n3; 
            }
            $intermedio=($n1+$n2+$n3)-($mayor+$menor);
            echo"los numeros serian, numero mayor: ".$mayor." <br><br>"."el numero intermedio:".$intermedio."<br><br>"."el numero menor:".$menor."<br><br>";
            }
            ?><br><br><br>
             <a href="practica27.php">siguiente practica</a>
    </section>
        </main>
        <footer>Maria Fernanda Gonzalez Pineda</footer>
</body>
</html>