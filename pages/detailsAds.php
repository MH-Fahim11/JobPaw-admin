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

        <title>Dashboard - Details Ads</title>

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
                  $mainpage="asvertising";
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
                            <div class="card-header d-flex align-items-center justify-content-between">
                                <div>
                                    <h5 class="mb-0 text-primary">Advertising details</h5>
                                    <a href="./modifyAds.php"><i class="ri-edit-2-line"></i>Modifier cet advertising</a>
                                </div>
                                <ul>
                                    <li><a href="./postAds.php">Ajouter un advertising</a></li>
                                    <li><a href="./addTypeAds.php">Type d'advertising</a></li>
                                    <li><a href="./addPageAds.php">Les pages</a></li>
                                    <li><a href="./listingCompanies.php">Les compagnies</a></li>
                                </ul>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive text-nowrap">
                                    <table class="table table-bordered">
                                        <tr>
                                            <th><b>ID advertising</b></th>
                                            <td>2705</td>
                                        </tr>
                                        <tr>
                                            <th><b>Compagnie :</b></th>
                                            <td>Agro G</td>
                                        </tr>
                                        <tr>
                                            <th><b>Page :</b></th>
                                            <td class="text-primary">./index.php</td>
                                        </tr>
                                        <tr>
                                            <th><b>Type :</b></th>
                                            <td>RBannière principale</td>
                                        </tr>
                                        <tr>
                                            <th><b>Thème :</b></th>
                                            <td>Test</td>
                                        </tr>
                                        <tr>
                                            <th><b>Montant payé/mois (USD) :</b></th>
                                            <td>0 / Montant officiel</td>
                                        </tr>
                                        <tr>
                                            <th><b>Date début :</b></th>
                                            <td>02/07/2024 à 17:00</td>
                                        </tr>
                                        <tr>
                                            <th><b>Date de fin :</b></th>
                                            <td>20/07/2024 à 17:00</td>
                                        </tr>
                                        <tr>
                                            <th><b>Renouvelable :</b></th>
                                            <td>non</td>
                                        </tr>
                                        <tr>
                                            <th><b>Maquette :</b></th>
                                            <td>4img2705.jpg</td>
                                        </tr>
                                        <tr>
                                            <th><b>Lien vers :</b></th>
                                            <td>aucun</td>
                                        </tr>
                                        <tr>
                                            <th><b>Référence Lien:</b></th>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <th><b>Référence E-mail :</b></th>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <th><b>Référence doc</b></th>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <th><b>Remarque :</b></th>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <th><b>Numéro d'ordre</b></th>
                                            <td>2</td>
                                        </tr>
                                        <tr>
                                            <th><b>Actif :</b></th>
                                            <td>non</td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="row">
                    <div class="col-xxl">
                        <div class="card mb-6">
                            <div class="card-header d-flex align-items-center justify-content-between">
                            <h5 class="mb-0 text-primary">Advertising de la même page (67) | Afficher tous les advertising</h5>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive text-nowrap">
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th>Advertising</th>
                                                <th></th>
                                                <th>Actif</th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <h6 class="text-primary">CARE</h6>
                                                    <p><b>Type : </b>Bannière principale</p>
                                                    <p><b>Montant payé/mois (USD) : </b>250</p>
                                                    <p><b>Montant officiel : </b>B800-1500</p>
                                                </td>
                                                <td>
                                                    <p><b>Page : </b> <span class="text-primary">../index.php</span></p>
                                                    <p><b>Date début : </b>28/06/2024 à 08:00</p>
                                                    <p><b>Date de fin : </b>05/07/2024 à 16:00</p>
                                                    <p><b>Renouvelable : </b>non</p>
                                                </td>
                                                <td>oui</td>
                                                
                                                <td><button class="text-danger border-none"><i class="ri-delete-bin-7-fill"></i></button></td>
                                            </tr>
                                            
                                            <tr>
                                                <td>
                                                    <h6 class="text-primary">CARE</h6>
                                                    <p><b>Type : </b>Bannière principale</p>
                                                    <p><b>Montant payé/mois (USD) : </b>250</p>
                                                    <p><b>Montant officiel : </b>B800-1500</p>
                                                </td>
                                                <td>
                                                    <p><b>Page : </b> <span class="text-primary">../index.php</span></p>
                                                    <p><b>Date début : </b>28/06/2024 à 08:00</p>
                                                    <p><b>Date de fin : </b>05/07/2024 à 16:00</p>
                                                    <p><b>Renouvelable : </b>non</p>
                                                </td>
                                                <td>oui</td>
                                                
                                                <td><button class="text-danger border-none"><i class="ri-delete-bin-7-fill"></i></button></td>
                                            </tr>
                                            
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
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
