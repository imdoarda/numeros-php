<!DOCTYPE html>
<html>
<head>
    <title>Tipo número</title>
    <link rel='stylesheet' type='text/css' media='screen' href='style.css'>
</head>
<body>
    <h1>Redondo ou não?</h1>
    <form method="post">
     <label for="num">número:</label>
     <input type="number" step="0.01" name="num" />
     <input type="submit" name="submit" value="Calcular" />
    </form>
 
    <?php
     $num = $_POST["num"];
 
    if ($num % 10 == 0)
        {
            echo "O número informado é redondo";
        } else
        {
            echo "O número informado não é redondo";
        }
    ?>
</body>
</html>