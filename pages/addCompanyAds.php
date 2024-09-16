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

    <title>Dashboard - Add Company Ads</title>

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
            $page ="addCompanyAds";
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
          
            <div class="col-md-12">
             <div class="card">
               <h5 class="card-header">Advertising Company Management</h5>
               <small></small>
                <div class="card-body">

                    <div>
                        <label for="smallInput" class="form-label">Compagnie:</label>
                        <input id="smallInput" class="form-control form-control-sm" type="text" placeholder="Compagnie" />
                    </div>
                    <div>
                        <label for="smallInput" class="form-label">Téléphone Compagnie :</label>
                        <input id="smallInput" class="form-control form-control-sm" type="text" placeholder="Téléphone Compagnie" />
                    </div>
                    <div>
                        <label for="smallInput" class="form-label">E-mail Compagnie:</label>
                        <input id="smallInput" class="form-control form-control-sm" type="email" placeholder="E-mail Compagnie" />
                    </div>
                    <div>
                        <label for="smallInput" class="form-label">Fax Compagnie:</label>
                        <input id="smallInput" class="form-control form-control-sm" type="text" placeholder="Fax Compagnie" />
                    </div>
                    <div>
                        <label for="smallInput" class="form-label">Prénom Représentant:</label>
                        <input id="smallInput" class="form-control form-control-sm" type="text" placeholder="Prénom Représentant" />
                    </div>
                    <div>
                        <label for="smallInput" class="form-label">Nom Représentant:</label>
                        <input id="smallInput" class="form-control form-control-sm" type="text" placeholder="Nom Représentant" />
                    </div>
                    <div>
                        <label for="smallInput" class="form-label">Téléphone Représentant:</label>
                        <input id="smallInput" class="form-control form-control-sm" type="text" placeholder="Téléphone Représentant" />
                    </div>
                    <div>
                        <label for="smallInput" class="form-label">E-mail Représentant:</label>
                        <input id="smallInput" class="form-control form-control-sm" type="email" placeholder="E-mail Représentant" />
                    </div>
                    <div>
                        <label for="smallInput" class="form-label">Fax Représentant:</label>
                        <input id="smallInput" class="form-control form-control-sm" type="text" placeholder="Fax Représentant" />
                    </div>




                    <div>
                        <label for="smallSelect" class="form-label">Compagnie lié</label>
                        <select id="smallSelect" class="form-select form-select-sm">
                          <option>Aucune correspondance</option>
                          <option value="1">One</option>
                          <option value="2">Two</option>
                          <option value="3">Three</option>
                        </select>
                    </div>
                    <div>
                        <label for="smallSelect" class="form-label">Actif</label>
                        <select id="smallSelect" class="form-select form-select-sm">
                          <option>Oui</option>
                          <option value="1">One</option>
                          <option value="2">Two</option>
                          <option value="3">Three</option>
                        </select>
                    </div>
                 
    

                  <div class="demo-inline-spacing">
                    <button type="button" class="btn btn-primary">Ajouter une compagnie</button> 
                  </div>
                </div>
              </div>
            </div>
          

            <hr>

            <!-- Basic Bootstrap Table -->
            <div class="card">
                <h5 class="card-header">Pour modifier une compagnie cliquer sur sond ID (Exemple : 1, 2 ...)</h5>
                <div class="table-responsive text-nowrap">
                  <table class="table">
                    <thead>
                      <tr>
                        <th>Modifier</th>
                        <th>Compagnie</th>
                        <th>Representant</th>
                        <th>Actif</th>
                      </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                      <tr>
                        <td><span>44</span></td>
                        <td> <span class="text-danger">Agro G</span><br> 000 0000 <br> xyz@gmail.com <br> Compagnie lié : <span class="text-primary">Agro G</span></td>
                        <td> <b>XYZ</b> <br> xyz@gmail.com</td>

                        <td>
                          <div class="dropdown">
                            <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                              <i class="ri-more-2-line"></i>
                            </button>
                            <div class="dropdown-menu">
                              <a class="dropdown-item" href="javascript:void(0);"
                                ><i class="ri-pencil-line me-1"></i> Edit</a
                              >
                              <a class="dropdown-item" href="javascript:void(0);"
                                ><i class="ri-delete-bin-6-line me-1"></i> Delete</a
                              >
                            </div>
                          </div>
                        </td>
                      </tr>
                      
                      <tr>
                        <td><span>44</span></td>
                        <td> <span class="text-danger">Agro G</span><br> 000 0000 <br> xyz@gmail.com <br> Compagnie lié : <span class="text-primary">Agro G</span></td>
                        <td> <b>XYZ</b> <br> xyz@gmail.com</td>

                        <td>
                          <div class="dropdown">
                            <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                              <i class="ri-more-2-line"></i>
                            </button>
                            <div class="dropdown-menu">
                              <a class="dropdown-item" href="javascript:void(0);"
                                ><i class="ri-pencil-line me-1"></i> Edit</a
                              >
                              <a class="dropdown-item" href="javascript:void(0);"
                                ><i class="ri-delete-bin-6-line me-1"></i> Delete</a
                              >
                            </div>
                          </div>
                        </td>
                      </tr>
                      
                      <tr>
                        <td><span>44</span></td>
                        <td> <span class="text-danger">Agro G</span><br> 000 0000 <br> xyz@gmail.com <br> Compagnie lié : <span class="text-primary">Agro G</span></td>
                        <td> <b>XYZ</b> <br> xyz@gmail.com</td>

                        <td>
                          <div class="dropdown">
                            <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                              <i class="ri-more-2-line"></i>
                            </button>
                            <div class="dropdown-menu">
                              <a class="dropdown-item" href="javascript:void(0);"
                                ><i class="ri-pencil-line me-1"></i> Edit</a
                              >
                              <a class="dropdown-item" href="javascript:void(0);"
                                ><i class="ri-delete-bin-6-line me-1"></i> Delete</a
                              >
                            </div>
                          </div>
                        </td>
                      </tr>
                      
                      
                    </tbody>
                  </table>
                </div>
              </div>
              <!--/ Basic Bootstrap Table -->

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
