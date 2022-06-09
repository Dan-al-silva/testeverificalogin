<?php

function inserirUsuario($conn,$nomeuser,$emailuser){
    $query = "INSERT INTO `tb_user`(`id`,`nomeuser`,`emailuser`) VALUES (NULL,'{$nomeuser}','{$emailuser}');";
$dados = mysqli_query($conn,$query);
return $dados;
}

?>