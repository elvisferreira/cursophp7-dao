<?php 

require_once("config.php");

/*
$sql = new Sql();
$usuarios = $sql->select("SELECT * FROM tb_usuarios");
echo json_encode($usuarios);*/

/*
$root = new Usuario();
$root->loadbyID(3);
echo $root;
*/


/*$lista = Usuario::getList();
echo json_encode($lista);*/


/*$search = Usuario::search("jo");
echo json_encode($search);*/


/*$usuario = new Usuario();
$usuario->login("user", "12345");
echo $usuario;*/


/*$aluno = new Usuario("aluno", "@alun0");
$aluno->insert();
echo $aluno;*/


/*$usuario = new Usuario();
$usuario->loadById(9);
$usuario->update("professor", "!@#$%¨&*");
echo $usuario;*/

$usuario = new Usuario();
$usuario->loadByID(9);
$usuario->delete();
echo $usuario;

 ?>