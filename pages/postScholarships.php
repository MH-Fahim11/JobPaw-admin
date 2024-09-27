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

    <title>Dashboard - Post Scholarships </title>

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
            $page ="postScholarships";
            $mainpage="Scholarships";
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
                                <h5 class="mb-0 text-primary">Ajouter une bourse</h5>
                            
                            <!-- <small class="text-muted float-end">Default label</small> -->
                            </div>
                            <div class="card-body">
                                <form>
                                    <div class="row mb-4">
                                        <label class=" col-sm-2 col-form-label" for="dropdown">Bourse offerte par</label>
                                        <div class="col-sm-10">
                                        <select id="dropdown" class="form-select ">
                                                <option value="Pays">Pays</option>
                                                <option value="Continent">Continent</option>
                                                <option value="Organisation">Organisation Internationale</option>
                                                <option value="Ambassade">Ambassade</option>
                                            </select> 
                                            
                                        </div>
                                       
                                        
                                    </div>

                                    <div class="row mb-4">
                                         <!-- Input field and label that will change dynamically -->
                                        <label id="inputLabel" for="inputField" class=" col-sm-2 col-form-label">Pays</label>
                                        
                                        <div class="col-sm-10">
                                            <select id="smallSelect" class="form-select ">
                                                <option>- - Choisissez - -</option>
                                                <option value="1">One</option>
                                                <option value="2">Two</option>
                                                <option value="3">Three</option>
                                            </select>
                                            <a id="link" href="./addPays.php">Ajouter un pays</a> 
                                        </div>
                                    </div>


                                    <div class="row mb-4">
                                        <label class="col-sm-2 col-form-label" for="basic-default-name">Bourse</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="basic-default-name" placeholder="Bourse" />
                                        </div>
                                    </div>
                                    <div class="row mb-4">
                                        <label class="col-sm-2 col-form-label" for="basic-default-name">Lien</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="basic-default-name" placeholder="Lien" />
                                        </div>
                                    </div>
                                    <div class="row mb-4">
                                        <label for="exampleFormControlTextarea1" class=" col-sm-2 col-form-label">Description :</label>
                                        <div class="col-sm-10">
                                            <textarea
                                            class="form-control h-px-100"
                                            id="exampleFormControlTextarea1"
                                            placeholder="Comments here..."></textarea>
                                        </div>
                                    </div>
                                    <div class="row mb-4">
                                        <label class="col-sm-2 col-form-label" for="basic-default-name">Position</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="basic-default-name" placeholder="Position" />
                                            <small>Uniquement des nombres (Le classement est fait suivant cette position du plus grand au plus petit)</small>
                                        </div>
                                    </div>
                                    <div class="row mb-4">
                                        <label class="col-sm-2 col-form-label" for="basic-default-name">Date de publication <span class=" text-danger">*</span> </label>
                                        <div class="col-sm-10">
                                            <input class="form-control" type="date" id="html5-date-input" />
                                            <label for="html5-date-input">Date</label>
                                        </div>
                                    </div>

                                    <div class="row mb-4">
                                        <label for="smallSelect" class=" col-sm-2 col-form-label">Actif</label>
                                        <div class="col-sm-10">
                                            <select id="smallSelect" class="form-select ">
                                                <option>Technique</option>
                                                <option value="1">Oui</option>
                                                <option value="2">Two</option>
                                                <option value="3">Three</option>
                                            </select>
                                        </div>
                                    </div>

                                    
                                   

                                    <div class="row justify-content-end">
                                        <div class="col-sm-10">
                                            <button type="submit" class="btn btn-primary">Ajouter une bourse</button>
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
    <script>
        // Get references to dropdown, input field, and label
        const dropdown = document.getElementById('dropdown');
        const link = document.getElementById('link');
        const inputLabel = document.getElementById('inputLabel');

        // Add event listener for dropdown selection changes
        dropdown.addEventListener('change', function() {
            const selectedOption = this.value;

        
            inputLabel.textContent =  selectedOption;

            if(selectedOption=="Organisation"){
                // console.log(link);
                link.textContent=" Ajouter une "+selectedOption;
                link.href ="addOrganisations.php";
            }else if(selectedOption=="Pays"){
                link.textContent=" Ajouter une "+selectedOption;
                link.href ="addPays.php";
            }
            else if(selectedOption=="Ambassade"){
                link.textContent=" Ajouter une "+selectedOption;
                link.href ="addEmbassies.php";
            }
            else if(selectedOption=="Continent"){
                link.textContent="   ";
                link.href =" ";
                
            }
        });
    </script>
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
