<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Equipamento</title>

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
                                <a   href="cadastrar_equipamento.php"><i class="fa fa-desktop "></i>Cadastrar Equipamento </a>
                            </li>
                            <li>
                                <a  class="active-menu" href="listar_equipamento.php"><i class="fa fa-desktop "></i>Listar Equipamento </a>
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
                        </div>
                        <div class="panel-body">
                            <h3>Equipamento Encontrados</h3>
                                    
                                    <table class="table">
                                    <thead>
                                        <tr>
                                            <th>Nome</th>
                                            <th>Função</th>
                                            <th></th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                            <?php
                                                
                                                $consulta = $link->query("SELECT idEquipamento, nome, funcao FROM equipamento;");
                                                 
                                                  
                                                while ($linha = $consulta->fetch(PDO::FETCH_ASSOC)) {
                                                echo "<tr><td>".$linha["nome"]."  </td>";
                                                echo "<td>".$linha["funcao"]."  </td>";
                                                echo "<td><form action='alterar_equipamento.php' method='POST'><input class='form-control' name='idEquipamento' type='hidden' value=".$editar = $linha["idEquipamento"]."> <button type='submit'  class='btn btn-info' value='editar'><span class='glyphicon glyphicon-pencil'></span></button> </form></td>";
                                                echo "<td><form action='enviar_excluir_equipamento.php' method='POST'><input class='form-control' name='idEquipamento' type='hidden' value=".$excluir = $linha["idEquipamento"]."> <button type='submit' class='btn btn-danger' value='excluir'><span class='glyphicon glyphicon-remove'></span></button> </form></td>";
                                                echo "</tr>";
                                                }
                                                ?>


                                    </tbody>
                                </table>
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
