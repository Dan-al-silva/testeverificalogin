<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    include_once("./conexao.php");
    $h = $_GET['h'];

    if(!empty($h)) {
        $pdo->query("UPDATE testeverifica SET  status='1' where MD5(id) = '$h'");
        echo("cadastro confirmado com sucesso");
    }


    ?>
</body>
</html>