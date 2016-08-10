<?php 
session_start();
$login = $_POST['login'];
$senha = $_POST['senha'];
$con = mysql_connect("localhost", "root", "");
$select = mysql_select_db("test");

$result = mysql_query("SELECT * FROM `usuarios` WHERE `usuario` = '$login' AND `senha`= '$senha'");

if(mysql_num_rows ($result) > 0 ){

$_SESSION['login'] = $login;
$_SESSION['senha'] = $senha;
header('location:pag2.php');

}else{
unset ($_SESSION['login']);
unset ($_SESSION['senha']);
header('location:index.php');
    
}

?>