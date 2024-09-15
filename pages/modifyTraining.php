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

    <title>Dashboard - Modify Testimonies </title>

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
                <div class="row">
                    <!-- Basic Layout -->
                    <div class="col-xxl">
                        <div class="card mb-6">
                            <div class="card-header d-flex align-items-center justify-content-between">
                                <div>
                                    <h5 class="mb-0 text-primary">Modifier un seminaire</h5>
                                    <small>Vous pouvez modifier un séminaire à partir de cette interface.</small> <br/>
                                    <samll><b>A NOTER : Quand vous modifiez les données dans les champs, ne laissez les "&lt;br /&gt;" que si vous voulez vraiment aller à la ligne.</b></samll>
                                </div>
                            </div>

                            <div class="card-body">
                                <form>
                                    
                                    <div class="row mb-4">
                                        <label class="col-sm-2 col-form-label" for="basic-default-name">Publié par <span class=" text-danger">*</span> </label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="basic-default-name" placeholder="Publié par" />
                                        </div>
                                    </div>
                                    <div class="row mb-4">
                                        <label class="col-sm-2 col-form-label" for="basic-default-name">Publié le <span class=" text-danger">*</span> </label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="basic-default-name" disabled placeholder="2024-08-18" />
                                        </div>
                                    </div>
                                    <div class="row mb-4">
                                        <label class="col-sm-2 col-form-label" for="basic-default-name">Thème <span class=" text-danger">*</span> </label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="basic-default-name" placeholder="Thème" />
                                        </div>
                                    </div>

                                    <div class="row mb-4">
                                        <label class="col-sm-2 col-form-label" for="basic-default-name">Date <span class=" text-danger">*</span> </label>
                                        <div class="col-sm-10">
                                            <input class="form-control" type="date" id="html5-date-input" />
                                            <label for="html5-date-input">Date</label>
                                        </div>
                                    </div>
                                    <div class="row mb-4">
                                        <label class="col-sm-2 col-form-label" for="basic-default-name">Heure <span class=" text-danger">*</span> </label>
                                        <div class="col-sm-10">
                                            <input class="form-control" type="time" id="html5-time-input" />
                                            <label for="html5-time-input">Time</label>
                                        </div>
                                    </div>

                                    <div class="row mb-4">
                                        <label for="smallSelect" class=" col-sm-2 col-form-label">Ville</label>
                                        <div class="col-sm-10">
                                            <select id="smallSelect" class="form-select ">
                                                <option value="1">One</option>
                                                <option value="2">Non</option>
                                                <option value="3">Three</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="row mb-4">
                                        <label class="col-sm-2 col-form-label" for="basic-default-name">Adresse <span class=" text-danger">*</span> </label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="basic-default-name" placeholder="Adresse" />
                                        </div>
                                    </div>
                                    <div class="row mb-4">
                                        <label class="col-sm-2 col-form-label" for="basic-default-name">Cout <span class=" text-danger">*</span> </label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="basic-default-name" placeholder="Cout" />
                                        </div>
                                    </div>

                                    <div class="row mb-4">
                                        <label class="col-sm-2 col-form-label" for="basic-default-message">Public
                                        Cible</label>
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
                                        <label for="smallSelect" class=" col-sm-2 col-form-label">Domaine d'activité</label>
                                        <div class="col-sm-10">
                                        <label for="smallSelect" class=" col-sm-2 col-form-label"> Actuel: Communication et Journalisme</label>
                                            <select id="smallSelect" class="form-select ">
                                                <option value="1">- - Choisissez un domaine - -</option>
                                                <option value="2">Non</option>
                                                <option value="3">Three</option>
                                            </select>
                                            <small>Pour changer choisisse</small>
                                        </div>
                                    </div>
                                    <div class="row mb-4">
                                        <label for="smallSelect" class=" col-sm-2 col-form-label">Spécialité</label>
                                        <div class="col-sm-10">
                                        <label for="smallSelect" class=" col-sm-2 col-form-label"> Actuel: Communication</label>
                                            <select id="smallSelect" class="form-select ">
                                                <option value="1">- - Choisissez un domaine - -</option>
                                                <option value="2">Non</option>
                                                <option value="3">Three</option>
                                            </select>
                                            <small>Pour changer choisissez</small>
                                        </div>
                                    </div>

                                    <div class="row mb-4">
                                        <label class="col-sm-2 col-form-label" for="basic-default-message">Description</label>
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
                                        <label for="smallSelect" class=" col-sm-2 col-form-label">PUBLIER</label>
                                        <div class="col-sm-10">
                                            <select id="smallSelect" class="form-select ">
                                                <option value="1">Oui</option>
                                                <option value="2">Non</option>
                                                <option value="3">Three</option>
                                            </select>
                                        </div>
                                    </div>
                                    
                                    <div class="row mb-4">
                                        <label for="smallSelect" class=" col-sm-2 col-form-label">Envoyer un email aux abonnés?</label>
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
                                            <button type="submit" class="btn btn-primary">Modifier</button>
                                           
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
                            <div class="card-header d-flex align-items-center justify-content-between">
                                <h5 class="mb-0 text-primary">Liste des abonnés aux alertes d'emploi de la spécialité: Communication</h5>
                            </div>
                            
                            <div class="card-body">
                                <div class="table-responsive text-nowrap">
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th>Nom</th>
                                                <th>Prénom</th>
                                                <th>Courriel</th>
                                              
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>JULES</td>
                                                <td>Linda</td>
                                                <td>linda82jules@yahoo.f</td>
                                            </tr>
                                            <tr>
                                                <td>Guerisma</td>
                                                <td>Jyminor</td>
                                                <td>jyminorg@yaho</td>
                                            </tr>
                                            <tr>
                                                <td>JULES</td>
                                                <td>Linda</td>
                                                <td>linda82jules@yahoo.f</td>
                                            </tr>
                                            <tr>
                                                <td>Guerisma</td>
                                                <td>Jyminor</td>
                                                <td>jyminorg@yaho</td>
                                            </tr>
                                            <tr>
                                                <td>JULES</td>
                                                <td>Linda</td>
                                                <td>linda82jules@yahoo.f</td>
                                            </tr>
                                            <tr>
                                                <td>Guerisma</td>
                                                <td>Jyminor</td>
                                                <td>jyminorg@yaho</td>
                                            </tr>
                                            <tr>
                                                <td>JULES</td>
                                                <td>Linda</td>
                                                <td>linda82jules@yahoo.f</td>
                                            </tr>
                                            <tr>
                                                <td>Guerisma</td>
                                                <td>Jyminor</td>
                                                <td>jyminorg@yaho</td>
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
