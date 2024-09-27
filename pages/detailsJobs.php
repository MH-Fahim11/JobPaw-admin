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

        <title>Dashboard - Details Jobs</title>

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
                    <h5 class="card-header text-primary">Facilitatrice Communautaire</h5>
                    <div class="card-body">
                      <p>Compagnie  : Mémoire/Travaux</p>
                      <ul>
                        <li><a href="">Mettre le job au top</a></li>
                        <li><a href="">Réinitialiser les positions de job</a></li>
                      </ul>
                      
                      
                    </div>
                  </div>
                </div>

                <!-- Default -->
                <div class="col-md">
                  <div class="card">
                    
                    <div class="card-body ">
                        <div class="row">
                            <a href="./modifyJobs.php" class="col text-primary">Modifier OE-1 </a>
                            <a href="./modifyJobs.php" class="col text-primary">Modifier OE-2 </a>
                        </div>
                        <div class="row">
                            <a href="./modifyJobs.php" class="col text-primary">Modifier OE-3 </a>
                            <a href="./modifyJobs.php" class="col text-primary">Modifier OE-4 </a>
                        </div>
                        
                        
                        
                      
                  </div>
                </div>
              </div>
              </div>

                <div class="divider divider-primary">
                    <div class="divider-text"> </div>
                </div>

                <div class="row">
                    <div class="col-xxl">
                            <div class="card mb-6">
                            <div class="card-body">
                                <div class="table-responsive ">
                                    <table class="table table-bordered">
                                        <tr>
                                            <th><b>Titre du Poste</b></th>
                                            <td>Facilitatrice</td>
                                        </tr>
                                        <tr>
                                            <th><b>Domaine</b></th>
                                            <td>Santé et Professions médicales</td>
                                        </tr>
                                        <tr>
                                            <th><b>Specialite</b></th>
                                            <td class=""> Médecine communautaire</td>
                                        </tr>
                                        <tr>
                                            <th><b>Nombre Candidats</b></th>
                                            <td>7</td>
                                        </tr>
                                        <tr>
                                            <th><b>Date limite de réception</b></th>
                                            <td>30 Aout 2024</td>
                                        </tr>
                                        <tr>
                                            <th><b>Afficher Compagnie</b></th>
                                            <td>Centres</td>
                                        </tr>
                                        <tr>
                                            <th><b>Pays</b></th>
                                            <td>Haiti</td>
                                        </tr>
                                        <tr>
                                            <th><b>Ville</b></th>
                                            <td>Cap-Haitien</td>
                                        </tr>
                                        <tr>
                                            <th><b>Zone</b></th>
                                            <td>Cap-Haitien</td>
                                        </tr>
                                        <tr>
                                            <th><b>Durée</b></th>
                                            <td>Déterminée avec possibilité de renouvellement</td>
                                        </tr>
                                    
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

        

                <div class="row">
                    <div class="col-xxl">
                            <div class="card mb-6">
                                <div class="card-body">

                                    <div class="card-header d-flex align-items-center justify-content-center">
                                        <h5 class="mb-0 text-primary">Introduction</h5>
                                    </div>

                                    <div class=" mb-4">
                                        Les recherchent deux (2) infirmières spécialistes en Santé Communautaire pour superviser les interventions communautaires d’un
                                        réseau d’établissements constitués d’ONG et d’institutions publiques.
                                    </div>

                                    <div class="card-header d-flex align-items-center justify-content-center">
                                        <h5 class="mb-0 text-primary">Fonction</h5>
                                    </div>

                                    <div class=" mb-4">
                                        <p>La facilitatrice communautaire se charge de</p>
                                        <ul>
                                            <li>Travailler en synergie avec les cadres des Directions Départementales en vue de maximiser une étroite collaboration et garantir la mise en œuvre du projet ;</li>
                                            <li>Fournir l'encadrement technique nécessaire pour le développement et la mise en place des stratégies visant à renforcer le programme de santé communautaire au niveau des
                                            structures sanitaires</li>
                                            <li>
                                            S'assurer de la disponibilité du plan opérationnel / Accompagner le personnel dans la préparation du plan opérationnel avec assignation des objectifs programmatiques ; Préparer
                                            mensuellement le plan d'activités et veiller à son exécution ;
                                            </li>
                                            <li>
                                            Assister et aider d'une manière générale à l'organisation des activités communautaires (rencontres- visites domiciliaires- supervision-campagne) - planification des activités et la
                                            mise en œuvre
                                            </li>
                                            <li>
                                            Représenter l’Organisation dans les réunions techniques organisées par le projet, le MSPP et autres réunions.
                                            </li>
                                            <li>
                                            Réaliser des visites de supervision de routine au niveau institutionnel et communautaire ;
                                            </li>
                                            <li>
                                            Identifier les besoins en formation des infirmières, auxiliaires et agents de santé ;
                                            </li>
                                            <li>
                                            Surveiller et contrôler les aspects généraux des structures sanitaires pour suivi : aspect physique du bâtiment, disponibilité de l'eau courante, de l'éclairage des salles, gestion des
                                            déchets et système de stérilisation du matériel, Wash)
                                            </li>
                                            <li>
                                            Veiller à établir le planning de toutes les interventions du mois (Calendrier IEC institutionnel et communautaire – PR/PF- Supervision- calendrier de travail de I'ASCP Rapport
                                            d'activités de I'ASCP- Tableau de Bord des indicateurs du site et celui de I 'ASCP- Calendrier de travail des superviseurs de terrain)
                                            </li>
                                        </ul>
                                    </div>

                                    <div class="card-header d-flex align-items-center justify-content-center">
                                        <h5 class="mb-0 text-primary">Qualifications Requises</h5>
                                    </div>
                                    <div class="mb-4">
                                        <ul>
                                            <li>Être titulaire d'un diplôme d'infirmière en Santé communautaire dans une école reconnue</li>
                                            <li>Avoir 5 à 7 années d’expérience dans la Coordination et la Supervision des activités de santé communautaire</li>
                                            <li>Atout: Connaissance des logiciels informatiques tels que Word, Powerpoint et Excel</li>
                                        </ul>
                                    </div>



                                    <div class="card-header d-flex align-items-center justify-content-center">
                                        <h5 class="mb-0 text-primary">Conditions particulières</h5>
                                    </div>
                                    <div class="mb-4">
                                        <ul>
                                            <li>Aptitudes à travailler en équipe – Sens de responsabilité – Sens de l’organisation et</li>
                                            <li>bonne méthode de travail</li>
                                            <li>Bonne éthique professionnelle</li>
                                        </ul>
                                    </div>


                                    <div class="card-header d-flex align-items-center justify-content-center">
                                        <h5 class="mb-0 text-primary">Conditions de travail</h5>
                                    </div>
                                    <div class="mb-4">
                                        <p>Être Capable de travailler dans des situations sociales difficiles</p>
                                    </div>

                                    <div class="card-header d-flex align-items-center justify-content-center">
                                        <h5 class="mb-0 text-primary">Dossier de candidature doit avoir ...</h5>
                                    </div>
                                    <div class="mb-4">
                                        <ul>
                                            <li>Une lettre de motivation</li>
                                            <li>Le curriculum vitae de l’appliquant</li>
                                            <li>Copies des diplômes et certificats</li>
                                        </ul>
                                    </div>

                                    <div class="card-header d-flex align-items-center justify-content-center">
                                        <h5 class="mb-0 text-primary">Envoyer le dossier à</h5>
                                    </div>
                                    <div class="mb-4">
                                        
                                    </div>
                                    <div class="card-header d-flex align-items-center justify-content-center">
                                        <h5 class="mb-0 text-primary">Remarques Contact</h5>
                                    </div>
                                    <div class="mb-4">
                                        
                                    </div>
                                    <div class="card-header d-flex align-items-center justify-content-center">
                                        <h5 class="mb-0 text-primary">Autres remarques</h5>
                                    </div>
                                    <div class="mb-4">
                                        <p>La date limite pour la soumission des dossiers de candidature est le Vendredi 30 Août 2024 à 12:00 PM.</p>
                                    </div>

                                    <div class="card-header d-flex align-items-center justify-content-center">
                                        <h5 class="mb-0 text-primary">Candidature online acceptée via</h5>
                                    </div>
                                    <div class="mb-4">
                                        <p>l'e-mail :</p>
                                    </div>
                                    <div class="card-header d-flex align-items-center justify-content-center">
                                        <h5 class="mb-0 text-primary">Actif</h5>
                                    </div>
                                    <div class="mb-4">
                                        <p>archv</p>
                                    </div>




                                </div>
                            
                            </div>
                    </div>
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
