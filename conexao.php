<?php 

//parametros para a conexao
$svr = "localhost"; //servidor
$user = "root"; //usuario
$pswd = ""; //senha
$db = "green_it"; //banco

//abrindo conexao
try{
    $conn = new PDO("mysql:host=".$svr.";dbname=".$db, $user, $pswd);
}

catch (PDOException $ex){
    //Mensagem de erro
    echo "Erro: ".$ex->getMessage();
}

?>