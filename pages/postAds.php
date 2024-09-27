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

    <title>Dashboard - Post Ads </title>

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
            $page ="postAds";
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
                                <h5 class="mb-0 text-primary">Ajouter un Advertising</h5>
                            
                            <!-- <small class="text-muted float-end">Default label</small> -->
                            </div>
                            <div class="card-body">
                                <form>
                                    <div class="row mb-4">
                                        <label class=" col-sm-2 col-form-label" for="dropdown">Type</label>
                                        <div class="col-sm-10">
                                        <select id="dropdown" class="form-select ">
                                                <option value="">- - Choisir - -</option>
                                                <option value="Continent">1</option>
                                            </select> 
                                        </div>
                                        
                                    </div>

                                    <div class="row mb-4">
                                        <label class="col-sm-2 col-form-label" for="basic-default-name">Maquette</label>
                                        <div class="col-sm-10">
                                            <input class="form-control" type="file" id="formFile" />
                                            <small>1- LES PETITES ANNONCES N'ONT PAS DE MAQUETTE</small> <br/>
                                            <small>2- Les maquettes au format image (.jpg, .gif, .png) sont les seules à être acceptées</small>
                                        </div>
                                    </div>


                                    <div class="row mb-4">
                                        <!-- Input field and label that will change dynamically -->
                                        <label id="inputLabel" for="inputField" class=" col-sm-2 col-form-label">Compagnie</label>
                                        
                                        <div class="col-sm-10">
                                            <select id="smallSelect" class="form-select ">
                                                <option>- - Choisissez - -</option>
                                                <option value="1">One</option>
                                                <option value="2">Two</option>
                                                <option value="3">Three</option>
                                            </select>
                                            <a href="./addCompanyAds.php">Ajouter une compagnie</a>
                                        </div>
                                        
                                    </div>
                                    <div class="row mb-4">
                                        <!-- Input field and label that will change dynamically -->
                                        <label id="inputLabel" for="inputField" class=" col-sm-2 col-form-label">Page</label>
                                        
                                        <div class="col-sm-10">
                                            <select id="smallSelect" class="form-select ">
                                                <option>- - Choisissez - -</option>
                                                <option value="1">One</option>
                                                <option value="2">Two</option>
                                                <option value="3">Three</option>
                                            </select>
                                            <a href="./addPageAds.php">Ajouter une page</a>
                                        </div>
                                    </div>
                                    <div class="row mb-4">
                                        <label class="col-sm-2 col-form-label" for="basic-default-name">Thème</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="basic-default-name" placeholder="Thème" />
                                            <small>N.B. Pour les petites annonces, il est mieux de ne pas depasser 35 caractères incluant les espaces</small>
                                        </div>
                                    </div>
                                    <div class="row mb-4">
                                        <label class="col-sm-2 col-form-label" for="basic-default-name">Montant payé/mois</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="basic-default-name" placeholder="USD" />
                                        </div>
                                    </div>
                                    <div class="row mb-4">
                                        <label class="col-sm-2 col-form-label" for="basic-default-company">Date début <span class=" text-danger">*</span> </label>
                                        <div class="form-floating form-floating-outline col-sm-10">
                                            <input class="form-control" type="datetime-local" id="html5-datetime-local-input" />
                                            <label for="html5-datetime-local-input">Date and time</label>
                                        </div>
                                    </div>
                                    <div class="row mb-4">
                                        <label class="col-sm-2 col-form-label" for="basic-default-company">Date de fin
                                            (Par défaut 1 an)<span class=" text-danger">*</span> </label>
                                        <div class="form-floating form-floating-outline col-sm-10">
                                            <input class="form-control" type="datetime-local" id="html5-datetime-local-input" />
                                            <label for="html5-datetime-local-input">Date and time</label>
                                        </div>
                                    </div>
                                    <div class="row mb-4">
                                        <label for="smallSelect" class=" col-sm-2 col-form-label">Renouvelable</label>
                                        <div class="col-sm-10">
                                            <select id="smallSelect" class="form-select ">
                                                <option>Technique</option>
                                                <option value="1">Oui</option>
                                                <option value="2">Two</option>
                                                <option value="3">Three</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row mb-4">
                                        <label for="smallSelect" class=" col-sm-2 col-form-label">Lien vers </label>
                                        <div class="col-sm-10">
                                            <select id="smallSelect" class="form-select ">
                                                <option>Technique</option>
                                                <option value="1">Oui</option>
                                                <option value="2">Two</option>
                                                <option value="3">Three</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="divider divider-primary">
                                        <div class="divider-text">
                                            Référence
                                        </div>
                                    </div>

                                    <div class="row mb-4">
                                    <label class="col-sm-2 col-form-label" for="basic-default-company">Lien</label>
                                    <div class="col-sm-10">
                                        <input
                                        type="text"
                                        class="form-control"
                                        id="basic-default-company"
                                        placeholder="" />
                                        <div class="form-text">Pour les sites externes, il faut ajouter : http://</div>
                                    </div>
                                    </div>


                                    <div class="row mb-4">
                                    <label class="col-sm-2 col-form-label" for="basic-default-email">E-mail</label>
                                    <div class="col-sm-10">
                                        <div class="input-group input-group-merge">
                                        <input
                                            type="text"
                                            id="basic-default-email"
                                            class="form-control"
                                            placeholder="john.doe"
                                            aria-describedby="basic-default-email2" />
                                        </div>
                                    </div>
                                    </div>

                                    
                                    <div class="row mb-4">
                                        <div class="input-group">
                                            <label class="col-sm-2 col-form-label" for="basic-default-name">Document</label>

                                            
                                            <input class="form-control" type="file" id="formFile" />
                                        </div>
                                        
                                    </div>

                                    <div class="divider divider-primary">
                                        <div class="divider-text">
                                        <i class="ri-star-line"></i>
                                        </div>
                                    </div>                                
                                    <div class="row mb-4">
                                        <label for="exampleFormControlTextarea1" class=" col-sm-2 col-form-label">Remarque /
                                        Description :</label>
                                        <div class="col-sm-10">
                                            <textarea
                                            class="form-control h-px-100"
                                            id="exampleFormControlTextarea1"
                                            placeholder="Comments here..."></textarea>
                                            <small>N.B. Pour les petites annonces, le texte ne doit pas depasser 75 caractères incluant les espaces</small>
                                        </div>
                                    </div>




                                    <div class="row mb-4">
                                        <label class="col-sm-2 col-form-label" for="basic-default-name">Numero d'ordre</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="basic-default-name" placeholder="Numero d'ordre" />
                                            <small>Un numero d'ordre permet d'afficher certains Advertising dans un ordre bien specifique. Plus le chiffre est
                                            élevé, plus l'advertising aura une place supérieur.</small>
                                        </div>
                                    </div>
                                    
                                    

                                    <div class="row mb-4">
                                        <label for="smallSelect" class=" col-sm-2 col-form-label">Actif</label>
                                        <div class="col-sm-10">
                                            <select id="smallSelect" class="form-select ">
                                
                                                <option value="1">Oui</option>
                                                <option value="2">Two</option>
                                                <option value="3">Three</option>
                                            </select>
                                        </div>
                                    </div>

                                    
                                   

                                    <div class="row justify-content-end">
                                        <div class="col-sm-10">
                                            <button type="submit" class="btn btn-primary">Ajouter un advertising</button>
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
