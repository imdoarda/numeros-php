<!DOCTYPE html>
<html>
<head>
    <title>Tipo número</title>
    <link rel='stylesheet' type='text/css' media='screen' href='style.css'>
</head>
<body>
    <h1>Positivo, Negativo ou Neutro?</h1>
    <form method="post">
     <label for="num">número:</label>
     <input type="number" step="0.01" name="numero" />
     <input type="submit" name="submit" value="Calcular" />
    </form>
 
    <?php
     $num = filter_input(INPUT_POST, "numero");
 
    if ($num > 0)
        {
            echo "O número informado é positivo";
        }elseif($num < 0)
        {
            echo "O número informado é negativo";
        }else{
            echo "O número informado é neutro";
        }

    ?>
</body>
</html>