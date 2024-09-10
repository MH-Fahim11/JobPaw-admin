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

        <title>Dashboard - Details Tenders</title>

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
                    <h5 class="card-header text-primary">Appel d'Offre : pour recrutement Institution de</h5>
                    <div class="card-body">
                      <p>Actif : non</p>
                      <p>- Mettre l'appel d'offre au top</p>
                      <p> - Réinitialiser les positions des appels d'offres</p>
                    </div>
                  </div>
                </div>

                <!-- Default -->
                <div class="col-md">
                  <div class="card">
                    
                    <div class="card-body ">
                        
                        <div class="row">
                            <div class="col text-primary">Publier AO-1 </div>
                            <div class="col text-primary">Publier AO-2 </div>
                        </div>
                        
                        <div class="row">
                            <div class="col text-primary">Publier AO-3 </div>
                            <div class="col text-primary">Publier AO-4 </div>
                        </div>
                        
                        <div class="row">
                            <div class="col text-primary">Publier AO-5 </div>
                            <div class="col text-primary">Publier AO-6 </div>
                        </div>
                        
                        <div class="row">
                            <div class="col text-primary">Publier AO-7 </div>
                            <div class="col text-primary">Publier AO-8 </div>
                        </div>
                        
                        <div class="row">
                            <div class="col text-primary">Publier AO-9 </div>
                            <div class="col text-primary">Publier AO-10 </div>
                        </div>
                        
                        <div class="row">
                            <div class="col text-primary">Publier AO-11 </div>
                            <div class="col text-primary">Publier AO-12 </div>
                        </div>
                        <div class="row">
                            <div class="col text-primary">Publier AO-13 </div>
                            <div class="col text-primary">Publier AO-12 </div>
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
                                            <th><b>Secteur</b></th>
                                            <td>Facilitatrice</td>
                                        </tr>
                                        <tr>
                                            <th><b>Appel d'offre </b></th>
                                            <td>Santé et Professions médicales</td>
                                        </tr>
                                        <tr>
                                            <th><b>Numero </b></th>
                                            <td class=""> Médecine communautaire</td>
                                        </tr>
                                        <tr>
                                            <th><b>Prêt</b></th>
                                            <td>7</td>
                                        </tr>
                                        <tr>
                                            <th><b>Date Limite</b></th>
                                            <td>30 Aout 2024</td>
                                        </tr>
                                        
                                        <tr>
                                            <th><b>Pays d'execution</b></th>
                                            <td>Haiti</td>
                                        </tr>
                                        <tr>
                                            <th><b>Ville</b></th>
                                            <td>Cap-Haitien</td>
                                        </tr>
                                        <tr>
                                            <th><b>Zone(s) d'execution</b></th>
                                            <td>Cap-Haitien</td>
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
                                        une organisation humanitaire non gouvernementale dont la mission est de sauver des vies, vaincre la pauvreté et parvenir à la justice sociale. Ainsi, CARE s’engagent auprès
                                        des personnes en situation de pauvreté et d’injustice sociale, surtout les femmes, et les filles pour contribuer à la recherche et mise en œuvre des solutions visant à créer un monde
                                        d’espoir, d’inclusion et de justice sociale où la pauvreté a été vaincue et tout le monde vit en dignité et sécurité.
                                    </div>

                                    <div class="card-header d-flex align-items-center justify-content-center">
                                        <h5 class="mb-0 text-primary">Description de Taches</h5>
                                    </div>

                                    <div class=" mb-4">
                                        <p>D- Description du marché</p>
                                        <ul>
                                            <li>
                                                Accord Cadre pour la distribution de cash au niveau national comme indiqué ci-dessus. Dans le cadre de ses programmes humanitaires en Haiti, CARE souhaite recruter un prestataire
                                                de services des paiement transferts mobile (cash en enveloppe) pour soutenir nos interventions de transferts monétaires à travers le pays. Pour le marché cité ci-dessus.
                                            </li>
                                            <li>
                                                La nature de nos activités ne nous permet pas de formaliser un accord sur un volume de commande ferme. Nous ne nous engagerons pas non plus sur un montant financier estimatif.
                                            </li>
                                            <li>
                                                Au terme du processus de sélection, CARE mettra en place des contrats annuels avec les prestataires retenus.
                                            </li>
                                            <li>
                                                Le fournisseur s’engage à fournir aux bénéficiaires CARE du cash selon la modalité de transfert définie par CASH.
                                            </li>
                                            
                                        </ul>
                                    </div>

                                    <div class="card-header d-flex align-items-center justify-content-center">
                                        <h5 class="mb-0 text-primary">Profil de la firme ou du groupe de consultant</h5>
                                    </div>
                                    <div class="mb-4">
                                        <p>Pour que son offre puisse être étudiée, l’institution financière fournira OBLIGATOIREMENT les éléments suivants :</p>
                                        <ul>
                                            <li>
                                            Un narratif décrivant la compréhension du mandat et les responsabilités, incluant l’expérience de l’institution dans le domaine des transferts monétaires de montants similaires sous
                                            forme de cash et la capacité logistique et financière à mener à bien les exigences du programme ;
                                            </li>
                                            <li>La description de la capacité opérationnelle et financière de l’institution pour conduire le processus</li>
                                            <li>Les références de clients ayant reçu des services similaires de l’institution durant les deux dernières années ;</li>
                                            <li>
                                            Une proposition financière détaillant les différents coûts associés totalisant les frais de services ;
                                            </li>
                                            <li>
                                            Délais des différentes étapes de transfert de fonds
                                            </li>
                                            <li>
                                            Avoir un compte en banque en monnaie locale HTG
                                            </li>
                                            <li>
                                            Des copies de la Patente et du Quitus à jour ;
                                            </li>
                                            <li>
                                            Document d’identité d’un représentant
                                            </li>
                                        </ul>
                                    </div>


                                    <div class="divider">
                                        <div class="divider-text">
                                        <i class="ri-star-line"></i>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-xxl">
                                            <div class="card mb-6">
                                                <div class="card-body">
                                                    <div class="table-responsive ">
                                                        <table class="table table-bordered">
                                                            <tr>
                                                                <th><b>Coût du dossier :</b></th>
                                                                <td>HTG</td>
                                                            </tr>
                                                            <tr>
                                                                <th><b>Payable par :</b></th>
                                                                <td>Chèque de Direction</td>
                                                            </tr>
                                                            <tr>
                                                                <th><b>Payé à : </b></th>
                                                                <td class=""> Haiti</td>
                                                            </tr>
                                                            <tr>
                                                                <th><b>Envoyer le pli à :</b></th>
                                                                <td>Veuillez déposer votre offre sous plis cacheté au local de la Care-Haïti, #92, Rue Grégoire au plutard le 5 juillet 2024 avant 4Hres PM</td>
                                                            </tr>
                                                            <tr>
                                                                <th><b>Dossier d'appel d'offres</b></th>
                                                                <td><a href="">Cliquer ici pour télécharger le dossier complet d'appel d'offres</a></td>
                                                            </tr>
                                                            
                                                            <tr>
                                                                <th><b>Remarques Contact :</b></th>
                                                                <td>Pour toute autre information supplémentaire veuillez envoyer un email à l’adresse électronique ivenert.amelus@care.org .</td>
                                                            </tr>
                                                            <tr>
                                                                <th><b>Ouverture de Pli :</b></th>
                                                                <td>00/00/0000 à 00:00</td>
                                                            </tr>
                                                            <tr>
                                                                <th><b>Autres Remarques :</b></th>
                                                                <td></td>
                                                            </tr>
                                                            <tr>
                                                                <th><b>Actif :</b></th>
                                                                <td>non</td>
                                                            </tr>
                                                    
                                                    
                                                        </table>
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
