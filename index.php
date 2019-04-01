<?php

require_once("config.php");

//-------------Carrega todos os usuarios ------------------------

// $sql = new Sql();

// $usuarios = $sql->select("SELECT * FROM tb_usuarios");


//--------------- carrega um usuario ----------------------------

// $root = new usuario();
// $root->loadById(1);
// echo $root;


//------------- Carrega uma lista de usuarios -------------------

// $lista = usuario::getList();    // como é estatica pode ser chamada direta sem instanciar

// echo json_encode($lista);



//-------------- Carrega uma lista onde existe a ocorrencia da letra é no login -------------

// $search = usuario::search("e");

// echo json_encode($search);



//-------------- Exibe dados quando a senha bate ocm o usuario --------------------------------

// $usuario = new usuario();

// $usuario->login("user", "12345");

// echo $usuario;


//-------------- Insert de um usuario novo -------------------------------

// $aluno = new usuario("root", "1234");

// $aluno->insert();

// echo $aluno;



/* Alterando um usuario na tabela

$usuario =  new usuario();

$usuario->loadById(8);

$usuario->update("professor", "senha");

echo $usuario;
*/


//   Apagando um usuario do banco


$usuario =  new usuario();

$usuario->loadById(5);

$usuario->delete();

echo $usuario;


?>