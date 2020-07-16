<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Cadastro de Equipamento</title>

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
<?php include("conexao.php");?>
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
                <a class="navbar-brand" href="#">Academia</a>
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
                                Samir Gutecoski.
                            <br />
                                
                            </div>
                        </div>
                    </li>       
                             <li>
                                <a  class="active-menu" href="cadastrar_equipamento.php"><i class="fa fa-desktop "></i>Cadastrar Equipamento </a>
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
                           Equipamento
                        </div>
                        <div class="panel-body">
                        <form role="form" nome="formulario" method="POST" action="enviar_cadastrar_equipamento.php">
                            	<div class="col-md-12">

                                        <div class="form-group col-md-6">
                                            <label>Nome do Equipamento</label>
                                            <input class="form-control" required="required" name="nome_equipamento" type="text">
                                               <label>Função do Equipamento</label>
                                               <input class="form-control" required="required" name="funcao_equipamento" type="text">
                                        </div>
                                </div>
                                  		<div class="form-group col-md-6">
                                            <button type="submit"  class="btn btn-info" onclick="return validar()">Cadastrar </button>
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
    <div class="row">
            <div class="col-md-4">
                l1c1
                 </div> <div class="col-md-4">
                l1c2
                 </div> <div class="col-md-4">
                l1c3
                 </div><div class="col-md-4">
                l1c4
                 </div><div class="col-md-4">
                l1c5
                 </div>
               
               </div>
                   <div class="row">
            <div class="col-md-4">
                l2c1
                 </div> <div class="col-md-4">
                l2c2
                 </div> <div class="col-md-4">
                l2c3
                 </div>
               
               </div>
           
    <!-- /. WRAPPER  -->
    <div id="footer-sec">
        &copy; sgutecoski
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
