<?php 
//dados do banco no servidor local
//$banco = 'ufnprojetoacad';
//$host = 'localhost';
//$usuario = 'root';
//$senha = '';

$banco = 'ufnprojetoacad';
$host = 'ufnprojetoacad.mysql.dbaas.com.br';
$usuario = 'ufnprojetoacad';
$senha = 'Sgutec0sk!';
try {

	$link = new PDO("mysql:dbname=$banco;host=$host", "$usuario", "$senha");
	
} catch (Exception $e) {
	echo 'Erro ao conectar com o banco!! '. $e;
}

 ?>
	
	
	


	
	
	

	