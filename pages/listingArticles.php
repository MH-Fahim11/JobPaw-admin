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

        <title>Dashboard - List Articles</title>

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
                    <h5 class="card-header text-primary">Les articles (881)</h5>
                    <div class="card-body">
                      <p><a href="">Afficher toutes les articles</a></p>
                      <p><a href="">Réinitialiser tous les articles de la page d'accueil </a></p>       
                    </div>
                  </div>
                </div>

                <!-- Default -->
                <div class="col-md">
                  <div class="card">
                    
                    <div class="card-body ">
                        <div class="mb-4">
                            <label for="defaultInput" class="form-label">Trouver un article</label>
                            <input id="defaultInput" class="form-control" type="text" placeholder="Trouver un article" />
                        </div>
                        <div class="row">
                          <div class="col-sm-10">
                            <button type="submit" class="btn btn-primary">Trouver</button>
                          </div>
                        </div>
                      <div>
                    </div>
                  </div>
                </div>
              </div>
              </div>

                <div class="divider divider-primary">
                    <div class="divider-text"> </div>
                </div>

                
                <div class="row">
                    <div class="col-xxl">
                        <div class="card mb-6">
                            <div class="card-header d-flex align-items-center justify-content-between">
                                <!-- <h5 class="mb-0 text-primary">Liste de Ads</h5> -->
                                <!-- <button class="text-danger border-none"><i class="ri-delete-bin-7-fill"></i></button> -->
                            </div>
                            <div class="card-body">
                                <div class="table-responsive ">
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                
                                                <th>Page Accueil</th>
                                                <th>Article</th>
                                                <th>Publié pa</th>
                                                <th>Date</th>
                                                <th>Actif</th>
                                                <th>Supprimer</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                   <a href="">1</a> <br/>
                                                   <a href="">2</a> <br/>
                                                   <a href="">3</a>
                                                </td>
                                                <td><span class="text-primary">La meilleure choix de resau en 2024</span> <p>En 2024 le resau est devenu un espace ou les peuvent s'enrichir ou du
                                                moins trouver leurs confors pour se divertir , cet article vous permetra de
                                                savoir les divers facons pour utiliser les resaux pour...</p> 
                                                </td>
                                                <td>Bannière principale <br/> duvernayoulmine@gmail.com </td>
                                                <td>16 Aout 2024</td>
                                                <td>Activer</td>
                                                <td><button class="text-danger border-none"><i class="ri-delete-bin-7-fill"></i></button></td>
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
