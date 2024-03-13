<!DOCTYPE html>
<html>
<head>
    <title>Tipo número</title>
    <link rel='stylesheet' type='text/css' media='screen' href='style.css'>
</head>
<body>
    <h1>Par ou Ímpar?</h1>
    <form method="post">
     <label for="num">número:</label>
     <input type="number" step="0.01" name="num" />
     <input type="submit" name="submit" value="Calcular" />
    </form>
 
    <?php
    $num = $_POST["num"];
 
    if($num % 2 == 0){
        echo "O número informado é par.";
    }else{
        echo "O número informado é ímpar.";
 }
    ?>
</body>
</html>