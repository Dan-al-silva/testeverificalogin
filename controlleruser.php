<?php

include_once("./conexao.php");
include_once("./Cadastromodel.php");

extract($_REQUEST,EXTR_OVERWRITE);

  if(inserirUsuario($conn,$nomeuser,$emailuser)){
echo("Os dados foram cadastrados com sucesso");

  }else{
echo("Não foi possível cadastrar seu sdados. Por favor revise seus dados");
  }

$id = $pdo->lastInsertId();
$md5 = md5($id);

$assunto = "confirme seu cadastro";
$lik = "http://localhost/testeconfirmaemail/confirma.php?h=".$md5;
$mensagem = "clique para ser confirmado".$link;
$header = "From:Danilo";

mail($emailuser,$assunto,$mensagem,$header);
?>