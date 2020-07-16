<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Usuário</title>

    <!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <!--CUSTOM BASIC STYLES-->
    <link href="assets/css/basic.css" rel="stylesheet" />
    <!--CUSTOM MAIN STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
    <!-- GOOGLE FONTS-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
<?php include("conexao.php");

$id = $_POST['idEquipamento'];

$consulta = $link->query("SELECT idEquipamento, nome, funcao FROM equipamento where idEquipamento = ".$id.";");
                                                 
                                                  
while ($linha = $consulta->fetch(PDO::FETCH_ASSOC)) {
$nome = $linha["nome"];
$funcao = $linha["funcao"];
}




?>
</head>
<body>
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">Projeto Academico</a>
            </div>

            
        </nav>
        <!-- /. NAV TOP  -->
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
                    <li>
                        <div class="user-img-div">
                            <img src="assets/img/user.png" class="img-thumbnail" />

                            <div class="inner-text">
                                Samir G.
                            <br />
                                
                            </div>
                        </div>
                    </li>       
                             <li>
                                <a   href="cadastrar_equipamento.php"><i class="fa fa-desktop "></i>Cadastrar Equipamento </a>
                            </li>
                            <li>
                                <a   href="listar_equipamento.php"><i class="fa fa-desktop "></i>Listar Equipamento </a>
                            </li>
                </ul>
            </div>

        </nav>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper">
            
                
                <!-- /. ROW  -->


                <div class="row">
            <div class="col-md-12">
               <div class="panel panel-info">
                        <div class="panel-heading">
                           Alterar Equipamento
                        </div>
                        <div class="panel-body">
                            <form role="form" nome="formulario" method="POST" action="enviar_alterar_equipamento.php">
                            	<div class="col-md-12">

                                        <div class="form-group col-md-6">
                                            <input type='hidden' name='idEquipamento' value="<?php echo $id ?>" >
                                            <label>Nome</label>
                                            <input class="form-control" required="required" name="nome_equipamento" type="text" value="<?php echo $nome ?>">
                                               <label>Funcao</label>
                                            <input class="form-control col-md-6" required="required" name="funcao_equipamento" type="text" value="<?php echo $funcao ?>">

                                        </div>
                                </div>

                                <div class="form-group col-md-6">
                                            <button type="submit"  class="btn btn-info" >Atualizar </button>
                                            
                                </div>
                                 
                                        

                                    </form>
                            </div>
                        </div>
                            </div>

        </div>
             <!--/.ROW-->
           

            
            <!-- /. PAGE INNER  -->
        </div>
        <!-- /. PAGE WRAPPER  -->
    </div>
    <!-- /. WRAPPER  -->
    <div id="footer-sec">
        &copy; 2019 marianospaiva 
    </div>
    <!-- /. FOOTER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.10.2.js"></script>
    <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="assets/js/jquery.metisMenu.js"></script>
    <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>


</body>
</html>
