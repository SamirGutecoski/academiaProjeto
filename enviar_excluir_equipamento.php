<?php
include("conexao.php");

$id = $_POST['idEquipamento']; 
   
try {
  
  $link->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   
  $stmt = $link->prepare('DELETE FROM equipamento WHERE idEquipamento = :idEquipamento');
  $stmt->bindParam(':idEquipamento', $id); 
  $stmt->execute();
     
  if($stmt->rowCount()>=0){
	echo"<script language='javascript' type='text/javascript'>alert('Equipamento Excluido!');window.location.href='listar_equipamento.php';</script>";
  }else{
	echo"<script language='javascript' type='text/javascript'>alert('Não foi possivel executar esta ação');window.location.href='listar_equipamento.php';</script>";
  }
} catch(PDOException $e) {
  echo 'Error: ' . $e->getMessage();
}
?>
	

	