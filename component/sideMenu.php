<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
          <div class="app-brand demo">
            <a href="index.html" class="app-brand-link">
              <span class="app-brand-logo demo me-1">
                <span style="color: var(--bs-primary)">
                  <img src=<?php echo  $logo?> alt="Jobpaw Logo">
                </span>
              </span>
              
            </a>

            <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto">
              <i class="menu-toggle-icon d-xl-block align-middle"></i>
            </a>
          </div>

          <div class="menu-inner-shadow"></div>

          <ul class="menu-inner py-1">
            <!-- Dashboards -->
            <li class="menu-item active open">
              <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons ri-home-smile-line"></i>
                <div data-i18n="Dashboards">Dashboards</div>
                <!-- <div class="badge bg-danger rounded-pill ms-auto">5</div> -->
              </a>
              <!-- <ul class="menu-sub">
                <li class="menu-item">
                  <a
                    href="https://demos.themeselection.com/materio-bootstrap-html-admin-template/html/vertical-menu-template/dashboards-crm.html"
                    target="_blank"
                    class="menu-link">
                    <div data-i18n="CRM">CRM</div>
                    <div class="badge bg-label-primary fs-tiny rounded-pill ms-auto">Pro</div>
                  </a>
                </li>
                <li class="menu-item active">
                  <a href="index.html" class="menu-link">
                    <div data-i18n="Analytics">Analytics</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a
                    href="https://demos.themeselection.com/materio-bootstrap-html-admin-template/html/vertical-menu-template/app-ecommerce-dashboard.html"
                    target="_blank"
                    class="menu-link">
                    <div data-i18n="eCommerce">eCommerce</div>
                    <div class="badge bg-label-primary fs-tiny rounded-pill ms-auto">Pro</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a
                    href="https://demos.themeselection.com/materio-bootstrap-html-admin-template/html/vertical-menu-template/app-logistics-dashboard.html"
                    target="_blank"
                    class="menu-link">
                    <div data-i18n="Logistics">Logistics</div>
                    <div class="badge bg-label-primary fs-tiny rounded-pill ms-auto">Pro</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a
                    href="https://demos.themeselection.com/materio-bootstrap-html-admin-template/html/vertical-menu-template/app-academy-dashboard.html"
                    target="_blank"
                    class="menu-link">
                    <div data-i18n="Academy">Academy</div>
                    <div class="badge bg-label-primary fs-tiny rounded-pill ms-auto">Pro</div>
                  </a>
                </li>
              </ul> -->
            </li>

            

           
          
            <!-- Components -->
            <li class="menu-header mt-7"><span class="menu-header-text">Components</span></li>
            <!-- Cards -->

            <li class="menu-item <?php if($mainpage=="asvertising"){echo 'open';} ?>">
              <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon ri-flag-2-line"></i>
                <div data-i18n="Layouts">Asvertising</div>
              </a>

              <ul class="menu-sub">
                <li class="menu-item <?php if($page=="addPageAds"){echo 'active';} ?>">
                  <a href="/pages/addPageAds.php" class="menu-link">
                    <div data-i18n="Without menu">Add Page Ads</div>
                  </a>
                </li>
                <li class="menu-item <?php if($page=="addCompanyAds"){echo 'active';} ?>">
                  <a href="/pages/addCompanyAds.php" class="menu-link">
                    <div data-i18n="Without menu">Add Company Ads</div>
                  </a>
                </li>
                <li class="menu-item <?php if($page=="detailsAds"){echo 'active';} ?>">
                  <a href="detailsAds.php" class="menu-link">
                    <div data-i18n="Without navbar">Details Ads</div>
                  </a>
                </li>
                
              </ul>
            </li>
            

            <!-- Icons -->
            <li class="menu-item <?php if($page=="addCompanyAds"){echo 'active';} ?>">
              <a href="/pages/addCompanyAds.php" class="menu-link">
                <i class="menu-icon tf-icons ri-remixicon-line"></i>
                <div data-i18n="Icons">Message</div>
              </a>
            </li>
            <li class="menu-item">
              <a href="icons-ri.html" class="menu-link">
                <i class="menu-icon tf-icons ri-remixicon-line"></i>
                <div data-i18n="Icons">Utilisateur</div>
              </a>
            </li>
            <li class="menu-item">
              <a href="icons-ri.html" class="menu-link">
                <i class="menu-icon tf-icons ri-remixicon-line"></i>
                <div data-i18n="Icons">Témoignage</div>
              </a>
            </li>
            <li class="menu-item">
              <a href="icons-ri.html" class="menu-link">
                <i class="menu-icon tf-icons ri-remixicon-line"></i>
                <div data-i18n="Icons">Strategies de Pays</div>
              </a>
            </li>
            <li class="menu-item">
              <a href="icons-ri.html" class="menu-link">
                <i class="menu-icon tf-icons ri-remixicon-line"></i>
                <div data-i18n="Icons">Compagnie</div>
              </a>
            </li>
            <li class="menu-item">
              <a href="icons-ri.html" class="menu-link">
                <i class="menu-icon tf-icons ri-remixicon-line"></i>
                <div data-i18n="Icons">Appel d'offres</div>
              </a>
            </li>
            <li class="menu-item">
              <a href="icons-ri.html" class="menu-link">
                <i class="menu-icon tf-icons ri-remixicon-line"></i>
                <div data-i18n="Icons">Offre d'emploi</div>
              </a>
            </li>
            <li class="menu-item">
              <a href="icons-ri.html" class="menu-link">
                <i class="menu-icon tf-icons ri-remixicon-line"></i>
                <div data-i18n="Icons">Abonnements</div>
              </a>
            </li>
            <li class="menu-item">
              <a href="icons-ri.html" class="menu-link">
                <i class="menu-icon tf-icons ri-remixicon-line"></i>
                <div data-i18n="Icons">Séminaires</div>
              </a>
            </li>
            <li class="menu-item">
              <a href="icons-ri.html" class="menu-link">
                <i class="menu-icon tf-icons ri-remixicon-line"></i>
                <div data-i18n="Icons">News</div>
              </a>
            </li>
            <li class="menu-item">
              <a href="icons-ri.html" class="menu-link">
                <i class="menu-icon tf-icons ri-remixicon-line"></i>
                <div data-i18n="Icons">Bourses d'etudes</div>
              </a>
            </li>
            <li class="menu-item">
              <a href="icons-ri.html" class="menu-link">
                <i class="menu-icon tf-icons ri-remixicon-line"></i>
                <div data-i18n="Icons">Domaine</div>
              </a>
            </li>
            <li class="menu-item">
              <a href="icons-ri.html" class="menu-link">
                <i class="menu-icon tf-icons ri-remixicon-line"></i>
                <div data-i18n="Icons">Spécialité</div>
              </a>
            </li>
            <li class="menu-item">
              <a href="icons-ri.html" class="menu-link">
                <i class="menu-icon tf-icons ri-remixicon-line"></i>
                <div data-i18n="Icons">Pays</div>
              </a>
            </li>


            <li class="menu-item <?php if($mainpage=="ville"){echo 'open';} ?>">
              <a href="javascript:void(0);" class="menu-link menu-toggle">
              <i class="menu-icon ri-building-line"></i>
                <div data-i18n="Layouts">Ville</div>
              </a>

              <ul class="menu-sub">
                <li class="menu-item <?php if($page=="addCities"){echo 'active';} ?>">
                  <a href="/pages/addCities.php" class="menu-link">
                    <div data-i18n="Without menu">Add Ville</div>
                  </a>
                </li>
                <li class="menu-item <?php if($page=="listingCities"){echo 'active';} ?>">
                  <a href="/pages/listingCities.php" class="menu-link">
                    <div data-i18n="Without menu">Listing Ville</div>
                  </a>
                </li>
                <li class="menu-item <?php if($page=="modifyCities"){echo 'active';} ?>">
                  <a href="/pages/modifyCities.php" class="menu-link">
                    <div data-i18n="Without menu">Modify Ville</div>
                  </a>
                </li>
                
                
              </ul>
            </li>
            






            <li class="menu-item">
              <a href="icons-ri.html" class="menu-link">
                <i class="menu-icon tf-icons ri-remixicon-line"></i>
                <div data-i18n="Icons">Etablissement</div>
              </a>
            </li>
            <li class="menu-item">
              <a href="icons-ri.html" class="menu-link">
                <i class="menu-icon tf-icons ri-remixicon-line"></i>
                <div data-i18n="Icons">Article</div>
              </a>
            </li>
            <li class="menu-item">
              <a href="icons-ri.html" class="menu-link">
                <i class="menu-icon tf-icons ri-remixicon-line"></i>
                <div data-i18n="Icons">Petite Annonce</div>
              </a>
            </li>
            <li class="menu-item">
              <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon ri-questionnaire-fill"></i>
                <div data-i18n="Layouts">FAQ</div>
              </a>

              <ul class="menu-sub">
                <li class="menu-item <?php if($page=="addFAQ"){echo 'active';} ?>">
                  <a href="/pages/addFAQ.php" class="menu-link">
                    <div data-i18n="Without menu">Add FAQ</div>
                  </a>
                </li>
                <li class="menu-item <?php if($page=="istingFAQ"){echo 'active';} ?>">
                  <a href="listingFAQ.php" class="menu-link">
                    <div data-i18n="Without navbar">List FAQ</div>
                  </a>
                </li>
                
              </ul>
            </li>

            
            
          </ul>
        </aside>