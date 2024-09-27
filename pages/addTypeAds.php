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

        <title>Dashboard - Add TypeAds</title>

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
                $page ="addTypeAds";
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
                        <!-- Basic Layout -->
                        <div class="col-xxl">
                            <div class="card mb-6">
                                <div class="card-header d-flex align-items-center justify-content-between">
                                    <div>
                                        <h5 class="mb-0 text-primary">Advertising Type Managemen</h5>
                                        <small class="text-muted float-start">Ajouter un type d'avertising</small>
                                    </div>

                                    <div>
                                        <ul>
                                        <li> <a href="./postAds.php">Ajouter un advertising</a></li>
                                        <li> <a href="./addTypeAds.php">Type d'advertising</a></li>
                                        <li> <a href="./listingCompanies.php">Les compagnies</a></li>
                                        </ul>
                                    </div>
                                
                                
                                </div>
                                <div class="card-body">
                                    <form>
                                        <div class="row mb-4">
                                            <label class="col-sm-2 col-form-label" for="basic-default-name">Type :</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="basic-default-name" placeholder="Type" />
                                            </div>
                                        </div>

                                        <div class="row mb-4">
                                            <label class="col-sm-2 col-form-label" for="basic-default-name">Dimensions :</label>
                                            <div class="col-sm-10 d-flex">
                                                <input type="text" class="form-control" id="basic-default-name" placeholder="Largeur" />
                                                <div> X </div>
                                                <input type="text" class="form-control" id="basic-default-name" placeholder="Hauteur" />
                                            </div>
                                        </div>

                                        <div class="row mb-4">
                                            <label class="col-sm-2 col-form-label" for="basic-default-name">Coût par mois :</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="basic-default-name" placeholder="(USD)" />
                                            </div>
                                        </div>

                                        <div class="row mb-4">
                                            <label class="col-sm-2 col-form-label" for="basic-default-name">Taille maximum :</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="basic-default-name" placeholder="(KB)" />
                                            </div>
                                        </div>     
                                        
                                        <div class="row mb-4">
                                            <label for="exampleFormControlTextarea1" class=" col-sm-2 col-form-label">Remarque :</label>
                                            <div class="col-sm-10">
                                                <textarea
                                                class="form-control h-px-100"
                                                id="exampleFormControlTextarea1"
                                                placeholder="Comments here..."></textarea>
                                            </div>
                                        </div>
                                        <div class="row mb-4">
                                            <label for="smallSelect" class=" col-sm-2 col-form-label">Actif :</label>
                                            <div class="col-sm-10">
                                                <select id="smallSelect" class="form-select ">
                                                    <option>Oui</option>
                                                    <option value="1">One</option>
                                                    <option value="2">Two</option>
                                                    <option value="3">Three</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="row justify-content-end">
                                            <div class="col-sm-10">
                                                <button type="submit" class="btn btn-primary">Ajouter type</button>
                                            </div>
                                        </div>

                                    </form>

                                </div>

                            </div>
                        </div>
                    </div>


                    <div class="row">
                        <div class="col-xxl">
                            <div class="card mb-6">
                                <div class="card-body">
                                    <div class="table-responsive text-nowrap">
                                        <table class="table table-bordered">
                                            <thead>
                                                <tr>
                                                    <th>ID</th>
                                                    <th>Type</th>
                                                    <th>Largeur</th>
                                                    <th>Hauteur</th>
                                                    <th>Coût/Mois (USD)</th>
                                                    <th>Taille Max (KB)</th>
                                                    <th>Remarque</th>
                                                    <th>Actif</th>
                                                </tr>
                                            </thead>
                                            
                                            <tbody>
                                                <tr>
                                                    <td>9</td>
                                                    <td>Petite Annonce</td>
                                                    <td>75 caractères</td>
                                                    <td>X incluant les espaces</td>
                                                    <td>300-100</td>
                                                    <td></td>
                                                    <td>E-mail ou site non inclus</td>
                                                    <td>non</td>
                                                </tr>
                                                <tr>
                                                    <td>8</td>
                                                    <td>Carré Authentification</td>
                                                    <td>259</td>
                                                    <td>165</td>
                                                    <td>1000</td>
                                                    <td>15</td>
                                                    <td>Animation : 15 secondes</td>
                                                    <td>non</td>
                                                </tr>
                                                <tr>
                                                    <td>7</td>
                                                    <td>Bouton Gauche</td>
                                                    <td>192</td>
                                                    <td>100</td>
                                                    <td>500</td>
                                                    <td>15</td>
                                                    <td>Animation : 15 secondes</td>
                                                    <td>non</td>
                                                </tr>
                                                <tr>
                                                    <td>6</td>
                                                    <td>Bouton Droite</td>
                                                    <td>144</td>
                                                    <td>144</td>
                                                    <td>500-1250</td>
                                                    <td>15</td>
                                                    <td>Animation : 20 secondes</td>
                                                    <td>non</td>
                                                </tr>
                                                <tr>
                                                    <td>5</td>
                                                    <td>Bouton Haut de Page</td>
                                                    <td>175</td>
                                                    <td>60</td>
                                                    <td>750-1500</td>
                                                    <td>30</td>
                                                    <td>Animation : 20 secondes</td>
                                                    <td>non</td>
                                                </tr>
                                                <tr>
                                                    <td>4</td>
                                                    <td>Bannière Bas de Page</td>
                                                    <td>574</td>
                                                    <td>75</td>
                                                    <td>800-1000</td>
                                                    <td>30</td>
                                                    <td>Animation : 20 secondes</td>
                                                    <td>non</td>
                                                </tr>
                                                <tr>
                                                    <td>3</td>
                                                    <td>Bannière principale</td>
                                                    <td>1000</td>
                                                    <td>183</td>
                                                    <td>800-1500</td>
                                                    <td>30</td>
                                                    <td>Animation : 20 secondes</td>
                                                    <td>oui</td>
                                                </tr>
                                                <tr>
                                                    <td>2</td>
                                                    <td>Bannière Verticale</td>
                                                    <td>140</td>
                                                    <td>600</td>
                                                    <td>800-1500</td>
                                                    <td>30</td>
                                                    <td>Animation : 20 secondes</td>
                                                    <td>non</td>
                                                </tr>
                                                <tr>
                                                    <td>1</td>
                                                    <td>Bannière d'Accueil</td>
                                                    <td>290</td>
                                                    <td>250</td>
                                                    <td>2000</td>
                                                    <td>30</td>
                                                    <td>Animation : 20 secondes</td>
                                                    <td>non</td>
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
