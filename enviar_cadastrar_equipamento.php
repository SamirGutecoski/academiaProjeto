<?php  

include("conexao.php");

$nome_equipamento = $_POST['nome_equipamento'];
$funcao_equipamento = $_POST['funcao_equipamento'];

try {
  
  $link->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   
  $stmt = $link->prepare('INSERT INTO equipamento (nome, funcao) VALUES(:nome, :funcao)');
  $stmt->execute(array(
	':nome' => $_POST['nome_equipamento'],
	':funcao' => $_POST['funcao_equipamento']
  ));
  
   
  if($stmt->rowCount()>=0){
	echo"<script language='javascript' type='text/javascript'>alert('Sucesso!');window.location.href='cadastrar_equipamento.php';</script>";
  }else{
	echo"<script language='javascript' type='text/javascript'>alert('Não foi possivel executar esta ação');window.location.href='cadastrar_equipamento.php';</script>";
  }
  
} catch(PDOException $e) {
  echo 'Error: ' . $e->getMessage();
}
?>