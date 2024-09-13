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

    <title>Dashboard - Add FAQ</title>

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
            $page ="addFAQ";
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
            <h1>Questions fréquemment posées (1)</h1>

            <div class="row g-6 mb-6">
                <!-- Float label (Outline) -->
                <div class="col-md">
                <div class="card">
                    <h5 class="card-header text-primary">Modifier une Question</h5>
                    <div class="card-body">
                        <div>
                            <label for="smallSelect" class="form-label"> <span class="text-danger">*</span>Rubrique</label>
                            <select id="smallSelect" class="form-select form-select-sm">
                            <option>Small select</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                            </select>
                        </div>

                        
                      <div class="mt-5">
                        <label for="defaultFormControlInput" class="form-label"><span class="text-danger">*</span>Question</label>
                        <textarea
                          class="form-control h-px-100"
                          id="exampleFormControlTextarea1"
                          placeholder="Comments here..."></textarea>
                      </div>
                      <div class="mt-5">
                        <label for="defaultFormControlInput" class="form-label"><span class="text-danger">*</span>Réponse</label>
                        <textarea
                          class="form-control h-px-100"
                          id="exampleFormControlTextarea1"
                          placeholder="Comments here..."></textarea>
                      </div>

                      <div class="mb-6">
                        <label for="smallInput" class="form-label">Date de publication</label>
                        <input id="smallInput" class="form-control form-control-sm" type="text" placeholder="Compagnie" />
                    </div>


                        <div class="mt-5">
                            <label for="smallSelect" class="form-label">Actif</label>
                            <select id="smallSelect" class="form-select form-select-sm">
                            <option>Small select</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                            </select>
                        </div>


                        <div class="form-check form-switch mt-5 mb-2">
                            <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault" />
                            <label class="form-check-label" for="flexSwitchCheckDefault">Questions actives</label>
                        </div>
                        <div id="defaultFormControlHelp" class="form-text">
                          <p> <b>Note :</b> Pour mettre un lien sur un texte, il faut l'entourer des codes (en rouge) suivants:
                          <span class="text-danger">&lt;a href="</span>adresse du lien<span class="text-danger">"&gt;</span>votre texte<span class="text-danger">&lt;/a&gt;</span></p>
                          <p>Exemple : Si vous voulez mettre un lien sur le texte <a href="">connectez-vous</a> pour aller vers la page qui est à l'adresse <a href="">http://www.jobpaw.com/public/login.php</a>, vous devez faire ainsi :</p>
                          <strong>&lt;a href="http://www.jobpaw.com/public/login.php"&gt;connectez-vous&lt;/a&gt;</strong>
                        </div>


                        <div class="demo-inline-spacing">
                            <button type="button" class="btn btn-primary">Modifier</button> 
                        </div>


                    </div>
                  </div>
                </div>

                <!-- Default -->
                

                

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
