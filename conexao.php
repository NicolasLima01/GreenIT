<?php 

//parametros para a conexao
$srvr = "localhost"; //servidor
$user = "root"; //usuario
$pswd = ""; //senha
$dtbs = "green_it"; //banco

//abrindo conexao
$conn = new mysqli($srvr, $user, $pswd, $dtbs);

//verificando a conexao
if ($conn->connect_error){
    die ("Falha na conexão".$conn->connect_error);
}


?>