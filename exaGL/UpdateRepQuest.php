<?php 
    //session_start(); 
    include('php/verificationAcces.php');
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>exaGL</title>
    <!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <!-- MORRIS CHART STYLES-->
    <link href="assets/js/morris/morris-0.4.3.min.css" rel="stylesheet" />
    <!-- CUSTOM STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
    <!-- GOOGLE FONTS-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>

<body>
    <div id="" style="width: 100%; background:#02428B;" >
        <nav class="navbar  " role="navigation" style="margin-bottom: 0">
            <div class="navbar-header navbar-default navbar-cls-top">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only"> </span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

            </div>
            <form role="form" action="php/verificationAcces" method="POST">
                <div style="color: white;padding: 5px 5px 5px 40px;font-size: 16px;" class="col-md-12"> &nbsp;
                   <button  value="Deconnecter" name="btnDeconnecter" type="submit" style="border-radius: 20px;float: right;" class="btn btn-danger">Se déconnecter</button>
                </div>
            </form>
        </nav>
        <!-- /. NAV TOP  -->
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
                    <li class="text-center">
                        <img src="assets/img/images.jpeg" class=" img-responsive" />
                    </li>
                    <li>
                        <a  href="accueil"><i class="fa fa-dashboard fa-2x"></i> Tableau de
                            bord</a>
                    </li>
                    <li>
                        <a class="active-menu" href="" ><i class="fa fa-edit fa-2x"></i> Eléments <span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="province">Provinces</a>
                            </li>
                            <li>
                                <a href="actualite">Actualité</a>
                            </li>
                            <li>
                                <a href="protection">Protection</a>
                            </li>
                            <li>
                                <a href="conseil">Conseils aux Voyageurs</a>
                            </li>
                            <li>
                                <a href="repQuest">Réponses aux questions</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="conversation"><i class="fa fa-comments-o fa-2x"></i>Conversation</a>
                    </li>
                    <li>
                        <a href=""><i class="fa fa-chevron-down fa-2x"></i>Nouveau<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="agent">Agent</a>
                            </li>
                            <li>
                                <a href="utilisateur">Utilisateur</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>

        </nav>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper">
            <div id="page-inner" style="border-radius: 30px">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="main-text" style="color: red">Réponses aux questions</h1>
                    </div>
                </div>
                <!-- /. ROW  -->

                <!--province et liste-->
                <div class="panel-body">
                    <ul class="nav nav-tabs">
                        <li class="active"><a href="#Province" data-toggle="tab">Province</a>
                        </li>
                        <li class=""><a href="#liste" data-toggle="tab">Liste</a>
                    </ul>

                    <div class="tab-content">
                        <div class="tab-pane fade active in" id="Province">
                            <br />
                            <div class="row">
                                <div class="col-md-12 col-sm-6">
                                    <div class="panel panel-default" style="border-radius: 30px">
                                        <div class="panel-heading" style="border-radius: 30px">Formulaire</div>
                                        <form role="form" action="php/addRepQuest" method="POST">
                                            <div class="col-md-12">
                                                <div class="col-md-3 "></div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <br />
                                                        <?php
                                                            include('php/connexion.php');
                                                            $sql1='select * from q_r where ID_Q_R='.$_GET['ID_Q_R'];
                                                            $stmt=$connect->query($sql1) ;
                                                            while ($rs = $stmt->fetch()) 
                                                            {
                                                            
                                                            
                                                        ?>
                                                        <label>Code</label>
                                                        <input value="<?php echo $rs['ID_Q_R']; ?>" name="txt_code_rq" class="form-control" style="border-radius: 30px"
                                                            placeholder="Code à obtenir du système" />
                                                    </div>
                                                    <hr />
                                                    <div class="form-group">
                                                        <label>Question*</label>
                                                        <textarea value="<?php echo $rs['QUESTION']; ?>" name="txt_question_rq" class="form-control" style="border-radius: 30px"
                                                            placeholder="Saisissez la question"><?php echo $rs['QUESTION']; ?></textarea>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Réponse*</label>
                                                        <textarea value="<?php echo $rs['REPONSE']; ?>" name="txt_reponse_rq" class="form-control" style="border-radius: 30px"
                                                            placeholder="Saisissez la réponse"><?php echo $rs['REPONSE'];}$stmt->closeCursor(); ?></textarea>
                                                    </div>
                                                    </div>
                                                <!--  <textarea name="" id="" cols="30" rows="10"></textarea> -->
                                                <div class="col-md-3"></div>
                                            </div>
                                            <br />
                                            <div class="col-md-12">
                                                <div class="col-md-7">
                                                    <div style="color: white;padding: 5px 0px 5px 40px;font-size: 16px;" class="col-md-12"> &nbsp;
                                                        <button value="Modifier" name="btnEnregistrerQR" type="submit" style="border-radius: 20px;float: right;" class="btn btn-danger">Modifier</button>
                                                    </div>
                                                </div>
                                            </div>
                                            <br />
                                            <label><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /></label>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="liste">
                            <br />
                            <div class="row">
                                <div class="col-md-12 col-sm-6">
                                    <div class="panel panel-default" style="border-radius: 30px">
                                        <div class="panel-heading" style="border-radius: 30px">Liste des Réponses et questions</div>
                                        <div class="panel-body">
                                            <div class="table-responsive">
                                            <table class="table table-striped table-bordered table-hover"
                                                    id="dataTables-example">
                                                    <thead>
                                                        <tr>
                                                            <th>Code</th>
                                                            <th>Question</th>
                                                            <th>Reponse</th>
                                                            <th>Date</th>
                                                            <th>Agent</th>
                                                            <th>Priorité</th>
                                                            <th style="color:green">La une</th>
                                                            <th style="color:blue">Edit.</th>
                                                            <th style="color:red">Supp.</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        
                                                        <?php
                                                            try{
                                                            include('php/connexion.php');
                                                            $sql="select * from q_r ORDER BY PRIORITE DESC";
                                                            $stmt=$connect->query($sql) ;
                                                            while ($rs = $stmt->fetch()) 
                                                            {
                                                        echo'
                                                        <tr class="even gradeA">
                                                            <td>'. $rs['ID_Q_R']. '</td>
                                                            <td>'. $rs['QUESTION'].'</td>
                                                            <td>'. $rs['REPONSE'].'</td>
                                                            <td>'. $rs['DATE_Q_R'].'</td>
                                                            <td>'. $rs['AGENT_ID'].'</td>
                                                            <td>'. $rs['PRIORITE'].'</td>
                                                            <td class="text-center"><a href="php/PrioriteRepQuest.php?ID_Q_R='. $rs['ID_Q_R'].'"><img src="assets/img/LINE_24px.png"></a></td>
                                                            <td class="text-center"><a href="UpdateRepQuest?ID_Q_R='. $rs['ID_Q_R'].'"><img src="assets/img/Edit_24px.png"></a></td>
                                                            <td class="text-center"><a href="php/addRepQuest?ID_Q_R='. $rs['ID_Q_R'].'"><img src="assets/img/Trash Can_24px.png"></a></td>
                                                        </tr>';  
                                                        
                                                            }
                                                        }catch (Exception $e){
                                                            die('Erreur: '.$e->getMessage());
                                                            }
                                                        ?>    
                                                    </tbody>
                                                </table>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="row">

                </div>

                <!-- /. ROW  -->

                <!-- /. PAGE INNER  -->
            </div>
            <!-- /. PAGE WRAPPER  -->
        </div>
        <!-- /. WRAPPER  -->
        <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
        <!-- JQUERY SCRIPTS -->
        <script src="assets/js/jquery-1.10.2.js"></script>
        <!-- BOOTSTRAP SCRIPTS -->
        <script src="assets/js/bootstrap.min.js"></script>
        <!-- METISMENU SCRIPTS -->
        <script src="assets/js/jquery.metisMenu.js"></script>
        <!-- DATA TABLE SCRIPTS -->
        <script src="assets/js/dataTables/jquery.dataTables.js"></script>
        <script src="assets/js/dataTables/dataTables.bootstrap.js"></script>
        <script>
            $(document).ready(function () {
                $('#dataTables-example').dataTable();
            });
        </script>
        <!-- CUSTOM SCRIPTS -->
        <script src="assets/js/custom.js"></script>

</body>

</html>