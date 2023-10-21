<?php 
require_once('conexxion.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>Dashboard</title>

    <!-- Fontfaces CSS-->
    <link href="css/font-face.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/theme.css" rel="stylesheet" media="all">

</head>

<body class="animsition">
    <div class="page-wrapper">
        <!-- HEADER MOBILE-->
        <header class="header-mobile d-block d-lg-none">
            <div class="header-mobile__bar">
                <div class="container-fluid">
                    <div class="header-mobile-inner">
                        <a class="logo" href="index.html">
                            <img src="images/icon/logo.png" alt="CoolAdmin" />
                        </a>
                        <button class="hamburger hamburger--slider" type="button">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
            <nav class="navbar-mobile">
                <div class="container-fluid">
                    <ul class="navbar-mobile__list list-unstyled">
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-tachometer-alt"></i>Dashboard</a>
                            <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                                <li>
                                    <a href="index.php">Dashboard 1</a>
                                </li>
                                <li class="active has-sub">
                                <a class="js-arrow" href="Ajouter.php">
                                <i class="fas fa-tachometer-alt"></i>Filiere</a>
                          </li>
                                </ul>
                </div>
            </nav>
        </header>
        <!-- END HEADER MOBILE-->

        <!-- MENU SIDEBAR-->
        <aside class="menu-sidebar d-none d-lg-block">
            <div class="logo">
                <a href="#">
                    <img src="images/icon/logo.png" alt="Cool Admin" />
                </a>
            </div>
            <div class="menu-sidebar__content js-scrollbar1">
                <nav class="navbar-sidebar">
                   
                        <li class="active has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-tachometer-alt"></i>Home</a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li>
                                    <a href="index.php">Dashboard 1</a>
                                </li>
                           </ul>
                                <li class="active has-sub">
                                <a class="js-arrow" href="Ajouter.php">
                                <i class="fas fa-tachometer-alt"></i>Filiere</a>
                          </li>

                          
                        </li>
                   
                </nav>
            </div>
        </aside>
        <!-- END MENU SIDEBAR-->

        <!-- PAGE CONTAINER-->
        <div class="page-container">
            <!-- HEADER DESKTOP-->
            <header class="header-desktop">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="header-wrap">
                            <form class="form-header" action="" method="POST">
                                <input class="au-input au-input--xl" type="text" name="search" placeholder="Search for datas &amp; reports..." />
                                <button class="au-btn--submit" type="submit">
                                    <i class="zmdi zmdi-search"></i>
                                </button> 
                            </form>

                           
                            <div class="header-button">
                                <div class="noti-wrap">
                                    <div class="noti__item js-item-menu">
                                        <i class="zmdi zmdi-comment-more"></i>
                                        <span class="quantity">1</span>
                                        <div class="mess-dropdown js-dropdown">
</div>
</div> 
                                    <div class="noti__item js-item-menu">
                                        <i class="zmdi zmdi-email"></i>
                                        <span class="quantity">1</span>
                                        <div class="email-dropdown js-dropdown">
</div>
</div>    
                                    <div class="noti__item js-item-menu">
                                        <i class="zmdi zmdi-notifications"></i>
                                        <span class="quantity">3</span>
                                        <div class="notifi-dropdown js-dropdown">
                                </div>
                              </div>
                                <div class="account-wrap">
                                    <div class="account-item clearfix js-item-menu">
                                        <div class="image">
                                            <img src="images/icon/avatar-01.jpg" alt="ALAMI ahmed" />
                                        </div>
                                        <div class="content">
                                            <a class="js-acc-btn" href="#">ALAMI Ahmed</a>
                                        </div>
                                        <div class="account-dropdown js-dropdown">
                                            <div class="info clearfix">
                                                <div class="image">
                                                    <a href="#">
                                                        <img src="images/icon/avatar-01.jpg" alt="ALAMI Ahmed" />
                                                    </a>
                                                </div>
                                                <div class="content">
                                                    <h5 class="name">
                                                        <a href="#">ALAMI Ahmed</a>
                                                    </h5>
                                                    <span class="email">Alami@gmail.com</span>
                                                </div>
                                            </div>
                                            <div class="account-dropdown__body">
                                                <div class="account-dropdown__item">
                                                    <a href="login.php">
                                                        <i class="zmdi zmdi-account"></i>Account</a>
                                                </div>
                                               
                                            </div>
                                            <div class="account-dropdown__footer">
                                                <a href="deconnexion.php">
                                                    <i class="zmdi zmdi-power"></i>Logout</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <!-- HEADER DESKTOP-->

            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="overview-wrap">
                                    <h2 class="title-1">Les filieres</h2>
                                </div>
                            </div>
                        </div>
                        <div class="row m-t-25">
                            <div class="col-sm-6 col-lg-3">
                                <div class="overview-item overview-item--c1">
                                    <div class="overview__inner">
                                        <div class="overview-box clearfix">
                                            <div class="icon">
                                                <i class="zmdi zmdi-account-o"></i>
                                            </div>
                                            <div class="text">
                                                <h2>120</h2>
                                                <span>GI</span>
                                            </div>
                                        </div>
                                        <div class="overview-chart">
                                            <canvas id="widgetChart1"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-3">
                                <div class="overview-item overview-item--c2">
                                    <div class="overview__inner">
                                        <div class="overview-box clearfix">
                                            <div class="icon">
                                                <i class="zmdi zmdi-account-o"></i>
                                            </div>
                                            <div class="text">
                                                <h2>120</h2>
                                                <span>TM</span>
                                            </div>
                                        </div>
                                        <div class="overview-chart">
                                            <canvas id="widgetChart2"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-3">
                                <div class="overview-item overview-item--c3">
                                    <div class="overview__inner">
                                        <div class="overview-box clearfix">
                                            <div class="icon">
                                                <i class="zmdi zmdi-account-o"></i>
                                            </div>
                                            <div class="text">
                                                <h2>125</h2>
                                                <span>TIMQ</span>
                                            </div>
                                        </div>
                                        <div class="overview-chart">
                                            <canvas id="widgetChart3"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-3">
                                <div class="overview-item overview-item--c4">
                                    <div class="overview__inner">
                                        <div class="overview-box clearfix">
                                            <div class="icon">
                                                <i class="zmdi zmdi-account-o"></i>
                                            </div>
                                            <div class="text">
                                                <h2>129</h2>
                                                <span>GIM</span>
                                            </div>
                                        </div>
                                        <div class="overview-chart">
                                            <canvas id="widgetChart4"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-9">
                                <h2 class="title-1 m-b-25">Les inscrits</h2>
                                <div class="table-responsive table--no-card m-b-40">
                                    <?php
                                  
                                    $reqselect="select * from etudiant";
                                    $resultat=mysqli_query($cn,$reqselect);
                                    $nbr=mysqli_num_rows($resultat);
                                    echo "<p> total<b>".$nbr."</b> Etudiants</p>";
                                    ?>
                             
                            <div class="contrainer">
                            <p><a href="ajouter.php"><ion-icon name="add"></ion-icon>  </a></p>
                            <table class="table table-borderless table-striped table-earning" width="100%">
                                      
                                        <thead>
                                        <tr>
                                                <th>Nom</th>
                                                <th>Prenom</th>
                                                <th>Sexe</th>
                                                <th>Tel</th>
                                                <th>Adresse</th>
                                                <th>CIN</th>
                                                <th>CNE</th>
                                                <th>Email</th>
                                                <th>DateNaissance</th>
                                                 <th>photo</th>
                                                <th>Scan_CIN</th>
                                                <th>Annee_Bac</th>
                                                <th>Type_Bac</th>
                                                <th>Option_Bac</th>
                                                <th>Lycee_Origine</th>
                                                <th>Moyenne_national</th>
                                                <th>Moyenne_regional</th>
                                                <th>Mention</th>
                                                <th>Academie</th>
                                                <th>Province</th>
                                                <th>choix1</th>
                                                 <th>choix2</th>
                                                 <th>choix3</th>
                                                <th>Bac</th>
                                                <th>Releve_national</th>
                                                <th>Releve_regional</th>
                                                
                                            </tr>
                                            <?php
                                            while ($ligne=mysqli_fetch_assoc($resultat))
                                            {
                                                ?>
                                                <tr>
                                        <td><?php echo $ligne['Nom'];?></td>
                                        <td><?php echo $ligne['Prenom'];?></td>
                                        <td><?php echo $ligne['Sexe'];?></td>
                                        <td><?php echo $ligne['tel'];?></td>
                                         <td><?php echo $ligne['Adresse'];?></td>
                                         <td><?php echo $ligne['CIN'];?></td>
                                         <td><?php echo $ligne['CNE'];?></td>
                                         <td><?php echo $ligne['Email'];?></td>
                                         <td><?php echo $ligne['DateNaissance'];?></td>
                                         <td><img src='<?php echo $ligne['photo'];?>' classe=""></td>
                                         <td><img src='<?php echo $ligne['Scan_CIN'];?>' classe=""></td>
                                         <td><?php echo $ligne['Annee_Bac'];?></td>
                                        <td><?php echo $ligne['Type_Bac'];?></td>
                                        <td><?php echo $ligne['Option_Bac'];?></td>
                                        <td><?php echo $ligne['Lycee_Origine'];?></td>
                                         <td><?php echo $ligne['Moy_national'];?></td>
                                         <td><?php echo $ligne['Moy_regional'];?></td>
                                         <td><?php echo $ligne['Mention'];?></td>
                                         <td><?php echo $ligne['Academie'];?></td>
                                         <td><?php echo $ligne['Province'];?></td>
                                         <td><?php echo $ligne['choix1'];?></td>
                                         <td><?php echo $ligne['choix2'];?></td>
                                         <td><?php echo $ligne['choix3'];?></td>
                                         <td><img src='<?php echo $ligne['Bac'];?>' classe=""></td>
                                         <td><img src='<?php echo $ligne['Releve_Bac'];?>' classe=""></td>
                                         <td><img src='<?php echo $ligne['Releve_Reg'];?>' classe=""></td>
                                            </tr>
                                            <?php
                                             }
                                            ?>
                                        </thead>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                            
                        <div class="row">
                            <div class="col-lg-9">
                                <h2 class="title-1 m-b-25">Les options du bac </h2>
                               
                                <table class="table table-borderless table-striped table-earning" width="100%">
                                                <tbody>
                                                    <tr>
                                                        <td>SM</td>
                                                        <td class="text-right">40%</td>
                                                    </tr>
                                                    <tr>
                                                        <td>PC</td>
                                                        <td class="text-right">30%</td>
                                                    </tr>
                                                    <tr>
                                                        <td>SVT</td>
                                                        <td class="text-right">10%</td>
                                                    </tr>
                                                    <tr>
                                                        <td>ECONOMIE</td>
                                                        <td class="text-right">20%</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                            </div>
                         </div>
                </div>
                                
            <br>
            <br>
            <br>
                       <div class="row">
                            <div class="col-lg-6">
                                <!-- USER DATA-->
                                <div class="user-data m-b-30">
                                    <h3 class="title-3 m-b-30">
                                        <i class="zmdi zmdi-account-calendar"></i>user data</h3>
                                    <div class="table-responsive table-data">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <td>
                                                        <label class="au-checkbox">
                                                            <input type="checkbox">
                                                            <span class="au-checkmark"></span>
                                                        </label>
                                                    </td>
                                                    <td>name</td>
                                                    <td>role</td>
                                                    <td>type</td>
                                                    <td></td>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <label class="au-checkbox">
                                                            <input type="checkbox">
                                                            <span class="au-checkmark"></span>
                                                        </label>
                                                    </td>
                                                    <td>
                                                        <div class="table-data__info">
                                                            <h6>ALAMI Ahmed</h6>
                                                            <span>
                                                                <a href="#">Alami@gmail.com</a>
                                                            </span>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <span class="role admin">admin</span>
                                                    </td>
                                                    <td>
                                                        <div class="rs-select2--trans rs-select2--sm">
                                                            <select class="js-select2" name="property">
                                                                <option selected="selected">Full Control</option>
                                                                <option value="">Watch</option>
                                                                <option value="">Ajouter Filiere</option>
                                                            </select>
                                                            <div class="dropDownSelect2"></div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <span class="more">
                                                            <i class="zmdi zmdi-more"></i>
                                                        </span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <label class="au-checkbox">
                                                            <input type="checkbox" checked="checked">
                                                            <span class="au-checkmark"></span>
                                                        </label>
                                                    </td>
                                                    <td>
                                                        <div class="table-data__info">
                                                            <h6>Etudiants</h6>
                                                            
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <span class="role member">member</span>
                                                    </td>
                                                    <td>
                                                        <div class="rs-select2--trans rs-select2--sm">
                                                            <select class="js-select2" name="property">
                                                                <option selected="selected">Full Control</option>
                                                                <option value="">Add</option>
                                                                <option value="">Update</option>
                                                                <option value="">Watch</option>
                                                            </select>
                                                            <div class="dropDownSelect2"></div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <span class="more">
                                                            <i class="zmdi zmdi-more"></i>
                                                        </span>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <!-- END USER DATA-->
                            </div>
            <!-- END MAIN CONTENT-->
            <!-- END PAGE CONTAINER-->
        </div>

    </div>
    <!-- Jquery JS-->
    <script src="vendor/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap JS-->
    <script src="vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <!-- Vendor JS       -->
    <script src="vendor/slick/slick.min.js">
    </script>
    <script src="vendor/wow/wow.min.js"></script>
    <script src="vendor/animsition/animsition.min.js"></script>
    <script src="vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
    </script>
    <script src="vendor/counter-up/jquery.waypoints.min.js"></script>
    <script src="vendor/counter-up/jquery.counterup.min.js">
    </script>
    <script src="vendor/circle-progress/circle-progress.min.js"></script>
    <script src="vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="vendor/chartjs/Chart.bundle.min.js"></script>
    <script src="vendor/select2/select2.min.js">
    </script>

    <!-- Main JS-->
    <script src="js/main.js"></script>

</body>

</html>
<!-- end document-->
