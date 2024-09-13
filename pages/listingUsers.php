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

        <title>Dashboard - Listing Users</title>

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
                                <div>
                                    <h5 class="mb-0 text-primary">La liste des utilisateurs (59089)</h5>
                                    <small>Afficher tous les utilisateurs</small> <br/>
                                    <small>Tableau de log</small>
                                </div>


                                <div>
                                    <small>!!! Les utilisateurs en rouge ont demandé
                                    la suppression de profil</small> <br/>
                                    <small>!!! CLIQUER ICI pour voir les utilisateurs
                                    ayant des problemes de CV</small>
                                </div>
                               
                            </div>
                            
                            <div class="card-body">
                                    <div class="divider">
                                        <div class="divider-text">
                                        TRIER
                                        </div>
                                    </div>

                                <div class="d-flex align-items-center justify-content-between">
                                    <div>
                                        <div class="mb-2">
                                            <select id="smallSelect" class="form-select form-select-sm">
                                            <option>Classer les CV par domaine</option>
                                            <option value="1">One</option>
                                            <option value="2">Two</option>
                                            <option value="3">Three</option>
                                            </select>
                                        </div>
                                        <div class="mb-2">
                                            <select id="smallSelect" class="form-select form-select-sm disabled">
                                            <option>-</option>
                                            <option value="1">One</option>
                                            <option value="2">Two</option>
                                            <option value="3">Three</option>
                                            </select>
                                        </div>
                                        <div class="mb-2">
                                            <select id="smallSelect" class="form-select form-select-sm disabled">
                                            <option>-</option>
                                            <option value="1">One</option>
                                            <option value="2">Two</option>
                                            <option value="3">Three</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="form-floating form-floating-outline mb-6 d-flex">
                                            <input class="form-control" type="search" placeholder="Search ..." id="html5-search-input" />
                                            <label for="html5-search-input">Search</label>
                                            <button type="button" class="btn btn-primary ms-2">Recherche</button>
                                        </div>
                                        <div class="mb-2">
                                            <select id="smallSelect" class="form-select form-select-sm">
                                            <option>Afficher tous les utilisateurs</option>
                                            <option value="1">One</option>
                                            <option value="2">Two</option>
                                            <option value="3">Three</option>
                                            </select>
                                        </div>
                                        <div class="mb-2">
                                            <select id="smallSelect" class="form-select form-select-sm disabled">
                                            <option>Haiti</option>
                                            <option value="1">One</option>
                                            <option value="2">Two</option>
                                            <option value="3">Three</option>
                                            </select>
                                        </div>
                                        <div class="mb-2">
                                            <select id="smallSelect" class="form-select form-select-sm disabled">
                                            <option>Afficher 25 utilisateurs par page</option>
                                            <option value="1">One</option>
                                            <option value="2">Two</option>
                                            <option value="3">Three</option>
                                            </select>
                                        </div>
                                    </div>

                                </div>

                            </div>
                        </div>
                    </div>
                </div>

                
                <div class="row">
                    <div class="col-xxl">
                        <div class="card">
                            <div class="table-responsive">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Nom</th>
                                            <th>Tél.</th>
                                            <th>E-mail</th>
                                            <th>Mot de Passe</th>
                                            <th>Etat</th>
                                            <th>Type</th>
                                            <th>Supprimer</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>
                                                <div class="d-flex justify-content-start align-items-center user-name">
                                                    <div class="avatar-wrapper">
                                                        <div class="avatar me-2">
                                                            <span class="avatar-initial rounded-circle bg-label-dark">GG</span>
                                                        </div>
                                                    </div>
                                                    <div class="d-flex flex-column">
                                                        <span class="emp_name text-truncate h6 mb-0">Glyn Giacoppo</span>
                                                        <small class="emp_post text-truncate">Software Test Engineer</small>
                                                    </div>
                                                </div>
                                            </td>
                                            <td></td>
                                            <td>informations@esih.edu</td>
                                            <td>$2y$10$0seOCPKtQj1wyNG862Zr</td>
                                            <td>Désactiver</td>
                                            <td>cv</td>
                                            <td><button class="text-danger border-none"><i class="ri-delete-bin-7-fill"></i></button></td>
                                        </tr>
                                        <tr>
                                            <td>1</td>
                                            <td>
                                                <div class="d-flex justify-content-start align-items-center user-name">
                                                    <div class="avatar-wrapper">
                                                        <div class="avatar me-2">
                                                            <img src="../../assets/img/avatars/5.png" alt="Avatar" class="rounded-circle">
                                                        </div>
                                                    </div>
                                                    <div class="d-flex flex-column">
                                                        <span class="emp_name text-truncate h6 mb-0">Evangelina Carnock</span>
                                                        <small class="emp_post text-truncate">Cost Accountant</small>
                                                    </div>
                                                </div>
                                            </td>
                                            <td></td>
                                            <td>informations@esih.edu</td>
                                            <td>$2y$10$0seOCPKtQj1wyNG862Zr</td>
                                            <td>Désactiver</td>
                                            <td>cv</td>
                                            <td><button class="text-danger border-none"><i class="ri-delete-bin-7-fill"></i></button></td>
                                        </tr>
                                          
                                            
                                           
                                            
                                    </tbody>
                                </table>
                                
                                <div class="row mt-4">
                                    <div class="col-sm-12 col-md-6">
                                        <div class="dataTables_info" id="DataTables_Table_0_info" role="status" aria-live="polite">
                                            Showing 1 to 7 of 100 entries
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-6">
                                        <div class="dataTables_paginate paging_simple_numbers" id="DataTables_Table_0_paginate">
                                            <ul class="pagination">
                                                <li class="paginate_button page-item previous disabled" id="DataTables_Table_0_previous">
                                                    <a aria-controls="DataTables_Table_0" aria-disabled="true" role="link" data-dt-idx="previous" tabindex="-1" class="page-link">Previous</a>
                                                </li>
                                                <li class="paginate_button page-item active">
                                                    <a href="#" aria-controls="DataTables_Table_0" role="link" aria-current="page" data-dt-idx="0" tabindex="0" class="page-link">1</a>
                                                </li>
                                                <li class="paginate_button page-item ">
                                                    <a href="#" aria-controls="DataTables_Table_0" role="link" data-dt-idx="1" tabindex="0" class="page-link">2</a>
                                                </li>
                                                <li class="paginate_button page-item ">
                                                    <a href="#" aria-controls="DataTables_Table_0" role="link" data-dt-idx="2" tabindex="0" class="page-link">3</a>
                                                </li>
                                                <li class="paginate_button page-item ">
                                                    <a href="#" aria-controls="DataTables_Table_0" role="link" data-dt-idx="3" tabindex="0" class="page-link">4</a>
                                                </li>
                                                <li class="paginate_button page-item ">
                                                    <a href="#" aria-controls="DataTables_Table_0" role="link" data-dt-idx="4" tabindex="0" class="page-link">5</a>
                                                </li>
                                                <li class="paginate_button page-item disabled" id="DataTables_Table_0_ellipsis">
                                                    <a aria-controls="DataTables_Table_0" aria-disabled="true" role="link" data-dt-idx="ellipsis" tabindex="-1" class="page-link">…</a>
                                                </li>
                                                <li class="paginate_button page-item ">
                                                    <a href="#" aria-controls="DataTables_Table_0" role="link" data-dt-idx="14" tabindex="0" class="page-link">15</a>
                                                </li>
                                                <li class="paginate_button page-item next" id="DataTables_Table_0_next">
                                                    <a href="#" aria-controls="DataTables_Table_0" role="link" data-dt-idx="next" tabindex="0" class="page-link">Next</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
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
