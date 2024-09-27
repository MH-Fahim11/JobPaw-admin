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
            $mainpage="FAQ";
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
            <h1>Questions fréquemment posées (69)</h1>

            <div class="row g-6 mb-6">
                <!-- Float label (Outline) -->
                <div class="col-md">
                <div class="card">
                    <h5 class="card-header">Ajouter une Question</h5>
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
                            <button type="button" class="btn btn-primary">Ajouter</button> 
                        </div>


                    </div>
                  </div>
                </div>

                <!-- Default -->
                <div class="col-md">
                  <div class="card">
                    <h5 class="card-header">Ajouter une rubrique</h5>
                    <div class="card-body">
                      <div>
                        <label for="defaultFormControlInput" class="form-label"><span class="text-danger">*</span>Rubrique</label>
                        <input
                          type="text"
                          class="form-control"
                          id="defaultFormControlInput"
                          placeholder="John Doe"
                          aria-describedby="defaultFormControlHelp" />
                      </div>
                        <div class="demo-inline-spacing">
                            <button type="button" class="btn btn-primary">Ajouter</button> 
                        </div>
                    </div>
                        
                  </div>
                </div>
              </div>

                <div class="divider divider-info">
                    <div class="divider-text">FAQ</div>
                </div>


                <div>
                    <p>
                        <b>Q:</b><span class="text-primary">Pourquoi créer un Profil sur JobPaw.com ?</span> [ Profil ]
                        <a href=""><i class="ri-delete-bin-2-line text-danger"></i></a> |
                        <a href="./modifyFAQ.php"><i class="ri-edit-2-fill "></i></a> |
                        <b > Actif : oui</b>
                    </p>

                    <p>
                        <b>R:</b>Si vous voulez utiliser nos services, que ce soit pour créer un CVPaw pro, de mettre une publicité via bannière web, de recruter des professionnels, d’acheter des
                        biens et services, de publier une offre d’emploi, un appel d'offres, un séminaire, un article, un mémoire, etc., il est indispensable de créer un profil sur JobPaw.com. <br>
                        Ce profil est personnel et hautement sécurisé. Personne, autre que vous, n’y a accès et toutes les informations sont confidentielles.
                    </p>
                </div>

                <div class="divider">
                    <div class="divider-text">
                        <i class="ri-star-line"></i>
                    </div>
                </div>
                
                <div>
                    <p>
                        <b>Q:</b><span class="text-primary">Comment créer un profil sur JobPaw.com?</span> [ Profil ]
                        <a href=""><i class="ri-delete-bin-2-line text-danger"></i></a> |
                        <a href="./modifyFAQ.php"><i class="ri-edit-2-fill "></i></a> |
                        <b > Actif : oui</b>
                    </p>

                    <p>
                        <b>R:</b>SPour créer un profil, cliquez sur Inscription au top de n’importe quelle page. Un menu déroulant automatique vous permettra de choisir le type de choisir le profil
                        qui vous convient. <br/>
                        1. Si vous êtes un professionnel et vous voulez créer un CVPaw pro, appliquer pour des offres d'emploi, publier des articles, etc.., choisissez «Professionnels». Vous
                        serez amené à remplir un formulaire avec 12 sections.
                        Vous ne pourrez pas appliquer pour un poste tant que les 10 sections obligatoires ne soient convenablement et complètement remplies.
                        Les deux sections « Informations personnelles » et « Disponibilités et préférences » permettent de modifier les informations saisies.
                        Les autres sections 2 à 12 vous obligent à effacer ce que vous avez déjà mis et de mettre de nouvelles informations.
                        <br/>2. Si vous êtes une université ou une école technique ou professionnelle, choisissez «Universités». Vous serez amené à remplir un formulaire qui donne l’option :
                        - Soit de mettre à jour vos informations de votre université ou une école technique ou professionnelle dans notre répertoire de toutes les formations universitaires et
                        techniques en Haïti
                        - Soit d’ajouter votre université ou une école technique ou professionnelle dans notre répertoire de toutes les formations universitaires et techniques en Haiti
                        <br/>3. Si vous êtes une entreprise ou une organisation, choisissez «Entreprises». Vous serez amené à remplir un formulaire avec 2 sections.
                        Votre profil compagnie vous permettra de mettre une publicité via bannière web, de recruter des professionnels, d’acheter des biens et services, de publier des
                        offres d’emplois, des appels d’offres, des séminaires et de les modifier, quand vous voulez.
                        Votre profil compagnie vous permet aussi de publier des séminaires, des articles.
                        Nous permettons d'avoir un seul profil par compagnie.
                        Si vous êtes nouveau dans la compagnie, vérifiez d'abord avec vos collègues si votre compagnie n'avait pas déjà créé un profil sur JobPaw.com avant d'essayer un
                        nouveau profil. Dans ce cas, vous pourriez actualiser un tel profil.<br/><br/>
                        Dans les trois cas, vous recevrez dans votre boite e-mail un message automatique de bienvenue de JobPaw.com sur les fonctionnalités de votre profil.<br/>
                        Si vous ne trouvez ledit message dans votre inbox, vérifiez votre boite spam.<br/>
                        Si vous le trouvez dans votre spam, transférez-le d'abord dans votre inbox.<br/>
                        Nous vous prions de vérifier que votre adresse e-mail est valide et active avant de créer votre profil.<br/>
                        Nous procédons à la suppression de tout profil dont les adresses e-mail ne sont pas valides et actives.<br/>
                        Ajoutez aussi info@jobpaw.com dans la liste de contacts de votre e-mail.<br/>
                    </p>
                </div>
                
                <div class="divider">
                    <div class="divider-text">
                        <i class="ri-star-line"></i>
                    </div>
                </div>

                <div>
                    <p>
                        <b>Q:</b><span class="text-primary">Comment me connecter sur mon profil?</span> [ Profil ]
                        <a href=""><i class="ri-delete-bin-2-line text-danger"></i></a> |
                        <a href="./modifyFAQ.php"><i class="ri-edit-2-fill "></i></a> |
                        <b > Actif : oui</b>
                    </p>

                    <p>
                        <b>R:</b>Cliquez sur le lien Connexion au top de n’importe quelle page. Puis, entrez votre adresse e-mail et votre mot de passe et cliquez sur le bouton « Connexion».
                        Une fois connecté sur votre profil, regardez dans le menu à gauche pour voir toutes les possibilités que vous offre votre profil. Si Si vous êtes un professionnel, vous
                        pourriez, par exemple, actualiser votre CV en y ajoutant d’autres expériences et d'autres formations, publier des articles, etc.
                        Si vous êtes une compagnie, vous pourriez, par exemple, publier des offres d’emploi, des appels d'offres, des séminaires, etc.
                    </p>
                </div>

                <div class="divider">
                    <div class="divider-text">
                        <i class="ri-star-line"></i>
                    </div>
                </div>

                <div>
                    <p>
                        <b>Q:</b><span class="text-primary">Comment mettre à jour mon Profil?</span> [ Profil ]
                        <a href=""><i class="ri-delete-bin-2-line text-danger"></i></a> |
                        <a href="./modifyFAQ.php"><i class="ri-edit-2-fill "></i></a> |
                        <b > Actif : oui</b>
                    </p>

                    <p>
                        <b>R:</b>Cliquer sur le bouton Connexion au top de n’importe quelle page et Connectez-vous à votre profil.
                        1. Si vous êtes une compagnie, allez dans le menu de gauche et cliquez sur les sections «Modifie Info Représentant Compagnie», «Modifier Info Compagnie» et
                    </p>
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
