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

    <title>Dashboard - Modify Strategies</title>

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
            $page ="modifyStrategies";
            $mainpage="Strategies";
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
                    <!-- Basic Layout -->
                    <div class="col-xxl">
                        <div class="card mb-6">
                            <div class="card-header d-flex align-items-center justify-content-between">
                                <div>
                                    <h5 class="mb-0 text-primary">Modifier une stratégie de pays</h5>
                                </div>
                            </div>

                            <div class="card-body">
                                <form>

                                    <div class="row mb-4">
                                        <label for="smallSelect" class=" col-sm-2 col-form-label">Rubrique</label>
                                        <div class="col-sm-10">
                                            <select id="smallSelect" class="form-select ">
                                                <option value="1">Gouvernement</option>
                                                <option value="2">one</option>
                                                <option value="3">Three</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="row mb-4">
                                        <label class="col-sm-2 col-form-label" for="basic-default-name">Stratégie de Pays <span class=" text-danger">*</span> </label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="basic-default-name" placeholder="Stratégie de Pays" />
                                        </div>
                                    </div>
                                    <div class="row mb-4">
                                        <label class="col-sm-2 col-form-label" for="basic-default-name">Source <span class=" text-danger">*</span> </label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="basic-default-name" placeholder="Lien" />
                                        </div>
                                    </div>
                                    <div class="row mb-4">
                                        <label class="col-sm-2 col-form-label" for="basic-default-message">Résumé</label>
                                        <div class="col-sm-10">
                                            <textarea
                                            id="basic-default-message"
                                            class="form-control"
                                            placeholder="..."
                                            aria-label="..."
                                            aria-describedby="basic-icon-default-message2"></textarea>
                                        </div>
                                    </div>
                                    
                                    <div class="row mb-4">
                                        <label class="col-sm-2 col-form-label" for="basic-default-company">Date<span class=" text-danger">*</span> </label>
                                        <div class="form-floating form-floating-outline col-sm-10">
                                            <input class="form-control" type="datetime-local" id="html5-datetime-local-input" />
                                            <label for="html5-datetime-local-input">Date and time</label>
                                        </div>
                                    </div>
                                    <div class="row mb-4">
                                        <label class="col-sm-2 col-form-label" for="basic-default-name">Lien vers le site  </label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="basic-default-name" placeholder="www.xyz.com" />
                                            <small>N'oubliez pas d'ajouter http://</small>
                                        </div>
                                    </div>
                                    <div class="row mb-4">
                                        <label class="col-sm-2 col-form-label" for="basic-default-name">Position  </label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="basic-default-name" placeholder="Position" />
                                            <small>Uniquement des nombres (Le classement est fait suivant cette position du plus grand au plus petit)</small>
                                        </div>
                                    </div>
                                   
                                    <div class="row mb-4">
                                        <label for="smallSelect" class=" col-sm-2 col-form-label">Actif</label>
                                        <div class="col-sm-10">
                                            <select id="smallSelect" class="form-select ">
                                                <option value="1">Oui</option>
                                                <option value="2">Non</option>
                                                <option value="3">Three</option>
                                            </select>
                                        </div>
                                    </div>
                                    

                                    

                                    <div class="row justify-content-end">
                                        <div class="col-sm-10">
                                            <button type="submit" class="btn btn-primary">Modifier la stratégie</button>
                                        </div>
                                    </div>

                                </form>

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
