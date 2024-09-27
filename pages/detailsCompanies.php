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

        <title>Dashboard - Details Companies</title>

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
                  $page ="detailsAds";
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
                
                <div class="row">
                    <div class="col-xxl">
                        <div class="card mb-6">
                            <div class="card-body">
                                <h5 class=" text-primary">Pam</h5>
                                <p>- Full Acces au CV : <b>non</b></p>
                                <p>- Username : <b>xyz@gmail.com</b></p>
                                <p>- Mot de passe : <b>$2y$10$Xc2CA4oI</b></p>
                                <p>-<a href="/pages/modifyCompanies.php">Acceder à son profil</a></p>
                            </div>
                            
                        </div>
                    </div>
                </div>
                <div class="divider divider-primary">
                    <div class="divider-text">Activer le Full Accès au CV </div>
                </div>

                <div class="row">
                    <div class="col-xxl">
                            <div class="card mb-6">
                            <div class="card-body">
                                <div class="table-responsive ">
                                    <table class="table table-bordered">
                                        <tr>
                                            <th><b>Couleur des textes de la compagnie</b></th>
                                            <td>Pas encore définie</td>
                                        </tr>
                                        <tr>
                                            <th><b>Afficher au public dans la liste des job</b></th>
                                            <td>non</td>
                                        </tr>
                                        <tr>
                                            <th><b>Sigle</b></th>
                                            <td class="">
                                            Ong
                                            </td>
                                        </tr>
                                        <tr>
                                            <th><b>Secteur</b></th>
                                            <td>prive</td>
                                        </tr>
                                        <tr>
                                            <th><b>Nombre d'employés</b></th>
                                            <td>2147483647</td>
                                        </tr>
                                        <tr>
                                            <th><b>Adresse</b></th>
                                            <td>Gattro Ruelle Valira</td>
                                        </tr>
                                        <tr>
                                            <th><b>Adresse postale</b></th>
                                            <td>1</td>
                                        </tr>
                                        <tr>
                                            <th><b>Telephone</b></th>
                                            <td>327908273</td>
                                        </tr>
                                        <tr>
                                            <th><b>Fax</b></th>
                                            <td>Gonaives (Artibonite)</td>
                                        </tr>
                                        <tr>
                                            <th><b>E-mail</b></th>
                                            <td>xyz@gmail.com</td>
                                        </tr>
                                        <tr>
                                            <th><b>Site</b></th>
                                            <td>Jobpaw</td>
                                        </tr>
                                    
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="divider divider-primary">
                    <div class="divider-text">Informations personnelles sur le représentant de la compagnie | Voir le profil complet </div>
                </div>

                <div class="row">
                    <div class="col-xxl">
                            <div class="card mb-6">
                            <div class="card-body">
                                <div class="table-responsive ">
                                    <table class="table table-bordered">
                                        <tr>
                                            <th><b>Nom</b></th>
                                            <td>Jean</td>
                                        </tr>
                                        <tr>
                                            <th><b>Prénom</b></th>
                                            <td>Doodleyh</td>
                                        </tr>
                                        <tr>
                                            <th><b>Pays</b></th>
                                            <td class=""> Haiti</td>
                                        </tr>
                                        <tr>
                                            <th><b>Ville</b></th>
                                            <td>Gonaives (Artibonite)</td>
                                        </tr>
                                        <tr>
                                            <th><b>Date de Naissance </b></th>
                                            <td>05/03/24</td>
                                        </tr>
                                        <tr>
                                            <th><b>Cellulaire</b></th>
                                            <td>765756765</td>
                                        </tr>
                                        <tr>
                                            <th><b>Telephone domicie</b></th>
                                            <td>45546</td>
                                        </tr>
                                        <tr>
                                            <th><b>Telephone bureau</b></th>
                                            <td>555654645</td>
                                        </tr>
                                        <tr>
                                            <th><b>Remarques</b></th>
                                            <td></td>
                                        </tr>
                                    
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>



                <div class="divider divider-primary">
                    <div class="divider-text">Afficher toutes les compagnies </div>
                </div>
              
              </div>
              <!-- Content wrapper -->


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
