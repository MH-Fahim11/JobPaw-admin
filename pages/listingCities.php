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

        <title>Dashboard - Listing Cities</title>

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
                  $page ="";
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
                                <h5 class="mb-0 text-primary">Liste de ville (208)</h5>
                                <small class=" text-primary"><a href="">Ajouter une ville</a></small>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive text-nowrap">
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Pays</th>
                                                <th>Ville</th>
                                                <th>Supprimer</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>212</td>
                                                <td>Afrique du Sud</td>
                                                <td>Pretoria</td>
                                                <td><button class="text-danger border-none"><i class="ri-delete-bin-7-fill"></i></button></td>
                                            </tr>
                                            <tr>
                                                <td>208</td>
                                                <td>Allemagne</td>
                                                <td>Berlin</td>
                                                <td><button class="text-danger border-none"><i class="ri-delete-bin-7-fill"></i></button></td>
                                            </tr>
                                            <tr>
                                                <td>37</td>
                                                <td>Angleterre</td>
                                                <td>Glasgow</td>
                                                <td><button class="text-danger border-none"><i class="ri-delete-bin-7-fill"></i></button></td>
                                            </tr>
                                            <tr>
                                                <td>36</td>
                                                <td>Angleterre</td>
                                                <td>Londres</td>
                                                <td><button class="text-danger border-none"><i class="ri-delete-bin-7-fill"></i></button></td>
                                            </tr>
                                            <tr>
                                                <td>38</td>
                                                <td>Argentine</td>
                                                <td>Buenos Aires</td>
                                                <td><button class="text-danger border-none"><i class="ri-delete-bin-7-fill"></i></button></td>
                                            </tr>
                                            <tr>
                                                <td>39</td>
                                                <td>Belgique</td>
                                                <td>Bruxelles</td>
                                                <td><button class="text-danger border-none"><i class="ri-delete-bin-7-fill"></i></button></td>
                                            </tr>
                                            <tr>
                                                <td>40</td>
                                                <td>Bénin</td>
                                                <td>Cotonou</td>
                                                <td><button class="text-danger border-none"><i class="ri-delete-bin-7-fill"></i></button></td>
                                            </tr>
                                            <tr>
                                                <td>202</td>
                                                <td>Cameroun</td>
                                                <td>Foumban</td>
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
