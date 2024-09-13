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

        <title>Dashboard - Modify Articles</title>

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
                    <h5 class="card-header text-primary">Introduction à l’intégrale Stochastique : Intégrale d’Itô</h5>
                    <div class="card-body">
                      <p>Rubrique : Mémoire/Travaux</p>
                      <p>- Auteur :</p>
                      <p>- Publié le : 11 Juil 2024</p>
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
                    <div class="divider-text">Effacer tous les commentaires de cet article </div>
                </div>
                <div class="row">
                    <div class="col-xxl">
                            <div class="card mb-6">
                            <div class="card-body">
                                <div class="table-responsive ">
                                    <table class="table table-bordered">
                                        <tr>
                                            <th><b>Rubrique</b></th>
                                            <td>Mémoire/Travaux</td>
                                        </tr>
                                        <tr>
                                            <th><b>Thème</b></th>
                                            <td>Introduction à l’intégrale Stochastique : Intégrale d’Itô</td>
                                        </tr>
                                        <tr>
                                            <th><b>Résumé</b></th>
                                            <td class=""> L’intégrale d’Itô est une extension de l'intégrale classique adaptée aux processus stochastiques, utilisée pour modéliser des systèmes soumis à des
                                                influences aléatoires. Développée par Kiyoshi Itô, elle est essentielle en finance mathématique, particulièrement pour la modélisation des prix
                                                d’actifs. Contrairement à l'intégrale de Riemann, elle prend en compte les variations imprévisibles des processus aléatoires. L'intégrale d'Itô joue un
                                                rôle central dans les équations différentielles stochastiques (EDS), permettant de décrire l'évolution de systèmes dynamiques soumis à des bruits
                                                aléatoires.
                                            </td>
                                        </tr>
                                        <tr>
                                            <th><b>Article</b></th>
                                            <td>Memoire</td>
                                        </tr>
                                        <tr>
                                            <th><b>Fichier</b></th>
                                            <td><a href=""><i class="ri-file-text-line"></i>Cliquer ici pour le visualiser</a></td>
                                        </tr>
                                        <tr>
                                            <th><b>Publié par</b></th>
                                            <td>
                                                <p>kenson</p>
                                                <p>xyz@gmail.com</p>
                                            </td>
                                        </tr>
                                    
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="divider divider-primary">
                    <div class="divider-text"> Remonter en Haut</div>
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
