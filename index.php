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

// $lista = usuario::getList();    // como � estatica pode ser chamada direta sem instanciar

// echo json_encode($lista);



//-------------- Carrega uma lista onde existe a ocorrencia da letra � no login -------------

// $search = usuario::search("e");

// echo json_encode($search);



//-------------- Exibe dados quando a senha bate ocm o usuario --------------------------------

$usuario = new usuario();

$usuario->login("user", "12345");

echo $usuario;


?>