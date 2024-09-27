<!doctype html>

<html
      lang="en"
      class="light-style layout-menu-fixed layout-compact"
      dir="ltr"
      data-theme="theme-default"
      data-assets-path="../assets/"
      data-template="vertical-menu-template-free"
      data-style="light">
    <head>
        <meta charset="utf-8" />
        <meta
          name="viewport"
          content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

        <title>Dashboard - Details User Profile</title>

        <meta name="description" content="" />

        <!-- Favicon -->
        <link rel="icon" type="image/x-icon" href="../assets/img/logo/fav.svg" />

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com" />
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
        <link
          href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&ampdisplay=swap"
          rel="stylesheet" />

        <link rel="stylesheet" href="../assets/vendor/fonts/remixicon/remixicon.css" />

        <!-- Menu waves for no-customizer fix -->
        <link rel="stylesheet" href="../assets/vendor/libs/node-waves/node-waves.css" />

        <!-- Core CSS -->
        <link rel="stylesheet" href="../assets/vendor/css/core.css" class="template-customizer-core-css" />
        <link rel="stylesheet" href="../assets/vendor/css/theme-default.css" class="template-customizer-theme-css" />
        <link rel="stylesheet" href="../assets/css/demo.css" />

        <!-- Vendors CSS -->
        <link rel="stylesheet" href="../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />
        <link rel="stylesheet" href="../assets/vendor/libs/apex-charts/apex-charts.css" />

        <!-- Page CSS -->

        <!-- Helpers -->
        <script src="../assets/vendor/js/helpers.js"></script>
        <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
        <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
        <script src="../assets/js/config.js"></script>
    </head>

    <body>
      <!-- Layout wrapper -->
        <div class="layout-wrapper layout-content-navbar">
            <div class="layout-container">
            <!-- Menu -->

              <?php
                  $logo = "../assets/img/logo/logo.jpg";
                  $page ="#";
                  include_once('../component/sideMenu.php') ; 
              ?>
              <!-- / Menu -->

              <!-- Layout container -->
            <div class="layout-page">
              <!-- Navbar -->
              <?php
                include_once('../component/navBar.php') ; 
              ?>
              <!-- / Navbar -->

              <!-- Content wrapper -->
              <div class="container-xxl flex-grow-1 container-p-y">

              <div class="row g-6 mb-6">
                <!-- Float label (Outline) -->
                <div class="col-md">
                  <div class="card">
                    <h5 class="card-header text-primary">Profil de Diaha</h5>
                    <div class="card-body">
                      <p>- Mot de passe:$2y$10$SSaks9qunYhSu7mqlQO</p>
                      <p>- E-mail :</p>
                      <p>- Cellulaire :</p>
                      <p>- Telecharger fichier : <a href="">(Cliquer ici)</a></p>
                      <p>- Type : <a href="">Particulier</a></p>
                      <p>- Profil crée le : <a href=""></a></p>
                      <p>- Voir : <a href="">son log</a></p>
                    </div>
                  </div>
                </div>

                <!-- Default -->
                <div class="col-md">
                  <div class="card">
                    
                    <div class="card-body ">
                        <div class="row">
                          <div>
                            <ul>
                              <li><a href="">Accédér au profil de cet utilisateur</a></li>
                              <li><a href="./modifyMailUsers.php">Modifier le courriel</a></li>
                              <li><a href="">Mettre le CV au top</a></li>
                              <li><a href="">Réinitialiser les positions de CV</a></li>
                            </ul>
                             
                            
                          </div>
                        </div>
                      <div>
                    </div>
                  </div>
                </div>
              </div>
              </div>

                <div class="divider divider-primary">
                    <div class="divider-text">Informations professionnelles</div>
                </div>
                <div class="row">
                    <div class="col-xxl">
                            <div class="card mb-6">
                            <div class="card-body">
                                <div class="table-responsive ">
                                    <table class="table table-bordered">
                                        <tr>
                                            <th><b>E-mail :</b></th>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <th><b>Domaine d'activité :</b></th>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <th><b>Spécialité :</b></th>
                                            <td> </td>
                                        </tr>
                                        <tr>
                                            <th><b>Année d'experience :</b></th>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <th><b>Langue(s) maitrisée(s) :</b></th>
                                            <td></td>
                                        </tr>
                                                                            
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="divider divider-primary">
                    <div class="divider-text">Informations personnelles</div>
                </div>

                <div class="row">
                    <div class="col-xxl">
                            <div class="card mb-6">
                            <div class="card-body">
                                <div class="table-responsive ">
                                    <table class="table table-bordered">
                                        <tr>
                                            <th><b>Nom :</b></th>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <th><b>Prénom :</b></th>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <th><b>Sexe :</b></th>
                                            <td> </td>
                                        </tr>
                                        <tr>
                                            <th><b>Pays :</b></th>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <th><b>Date de Naissance :</b></th>
                                            <td></td>
                                        </tr>
                                                                            
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="divider divider-primary">
                    <div class="divider-text">Les compagnies suivantes ont consulté son CV</div>
                </div>

                <div class="row">

            <div class="col-xxl">
                  <div class="card mb-6">
                    
                    <div class="card-body">
                        <div class="table-responsive text-nowrap">
                            <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Compagnies</th>
                                    <th>Date/Heure</th>
                                    <th>Full Accès</th>
                                    
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                     
                                </tr>
                                

                            </tbody>
                            </table>
                        </div>
                    </div>
                  </div>
                </div>

            </div>

              <!-- Content wrapper -->

              </div>
              <!-- Footer -->
              <?php
                include_once('../component/footer.php'); 
                ?>
                <!-- / Footer -->
            </div>
            <!-- / Layout page -->
          </div>

          <!-- Overlay -->
          <div class="layout-overlay layout-menu-toggle"></div>
        </div>
        <!-- / Layout wrapper -->

      

        <!-- Core JS -->
        <!-- build:js assets/vendor/js/core.js -->
        <script src="../assets/vendor/libs/jquery/jquery.js"></script>
        <script src="../assets/vendor/libs/popper/popper.js"></script>
        <script src="../assets/vendor/js/bootstrap.js"></script>
        <script src="../assets/vendor/libs/node-waves/node-waves.js"></script>
        <script src="../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>
        <script src="../assets/vendor/js/menu.js"></script>

        <!-- endbuild -->

        <!-- Vendors JS -->
        <script src="../assets/vendor/libs/apex-charts/apexcharts.js"></script>

        <!-- Main JS -->
        <script src="../assets/js/main.js"></script>

        <!-- Page JS -->
        <script src="../assets/js/dashboards-analytics.js"></script>

        <!-- Place this tag before closing body tag for github widget button. -->
        <script async defer src="https://buttons.github.io/buttons.js"></script>
    </body>
</html>
