<?php 
  include("conexao.php");

  $id = $_POST['idEquipamento'];
  $nome = $_POST['nome_equipamento'];
  $funcao = $_POST['funcao_equipamento'];
  
	 
  try {
	
	$link->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	 
	$stmt = $link->prepare('UPDATE equipamento SET nome = :nome, funcao = :funcao WHERE idEquipamento = :idEquipamento');
	$stmt->execute(array(
	  ':idEquipamento'   => $id,
	  ':nome' => $_POST['nome_equipamento'],
	  ':funcao' => $_POST['funcao_equipamento']
	));
	   
	if($stmt->rowCount()>=0){
		echo"<script language='javascript' type='text/javascript'>alert('Equipamento Alterado!');window.location.href='listar_equipamento.php';</script>";
	  }else{
		echo"<script language='javascript' type='text/javascript'>alert('Não foi possivel executar esta ação');window.location.href='listar_equipamento.php';</script>";
	  }

  } catch(PDOException $e) {
	echo 'Error: ' . $e->getMessage();
  }
  ?>
	
	
	

	