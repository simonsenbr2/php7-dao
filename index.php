<?php

require_once("config.php");

// $sql = new Sql();

// $usuarios = $sql->select("SELECT * FROM tb_usuarios");

$root = new usuario();

$root->loadById(1);

echo $root;

?>