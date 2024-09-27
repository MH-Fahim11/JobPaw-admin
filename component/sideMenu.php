<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
          <div class="app-brand demo">
            <a href="/" class="app-brand-link">
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
            

            <li class="menu-item <?php if($page==""){echo 'active';} ?>">
              <a href="/" class="menu-link">
              <i class="menu-icon tf-icons ri-home-smile-line"></i>
                <div data-i18n="Icons">Dashboards</div>
              </a>
            </li>

            

           
          
            <!-- Components -->
            <li class="menu-header mt-7"><span class="menu-header-text">Components</span></li>
            <!-- Cards -->

            <li class="menu-item <?php if($mainpage=="asvertising"){echo 'open';} ?>">
              <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon ri-advertisement-line"></i>
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
                <li class="menu-item <?php if($page=="addTypeAds"){echo 'active';} ?>">
                  <a href="/pages/addTypeAds.php" class="menu-link">
                    <div data-i18n="Without menu">Add Type Ads</div>
                  </a>
                </li>
                <li class="menu-item <?php if($page=="listingAds"){echo 'active';} ?>">
                  <a href="/pages/listingAds.php" class="menu-link">
                    <div data-i18n="Without menu">Listing Ads</div>
                  </a>
                </li>
                <li class="menu-item <?php if($page=="postAds"){echo 'active';} ?>">
                  <a href="/pages/postAds.php" class="menu-link">
                    <div data-i18n="Without menu">Post Ads</div>
                  </a>
                </li>
               
              </ul>
            </li>
            
            <li class="menu-item <?php if($page=="listingMessages"){echo 'active';} ?>">
              <a href="/pages/listingMessages.php" class="menu-link">
              <i class="menu-icon ri-message-3-line"></i>
                <div data-i18n="Icons">Message</div>
              </a>
            </li>

            <li class="menu-item <?php if($page=="listingUsers"){echo 'active';} ?>">
              <a href="/pages/listingUsers.php" class="menu-link">
                <i class="menu-icon ri-user-3-line"></i>
                <div data-i18n="Icons">Utilisateur</div>
              </a>
            </li>

            
            <li class="menu-item <?php if($mainpage=="Testimonies"){echo 'open';} ?>">
              <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon ri-pass-valid-line"></i>
                <div data-i18n="Layouts">Témoignage</div>
              </a>

              <ul class="menu-sub">
                <li class="menu-item <?php if($page=="listingTestimonies"){echo 'active';} ?>">
                  <a href="/pages/listingTestimonies.php" class="menu-link">
                    <div data-i18n="Without menu">All Témoignage</div>
                  </a>
                </li>
                <li class="menu-item <?php if($page=="modifyTestimonies"){echo 'active';} ?>">
                  <a href="/pages/modifyTestimonies.php" class="menu-link">
                    <div data-i18n="Without menu">Modify Témoignage</div>
                  </a>
                </li>
              </ul>
            </li>

            <li class="menu-item <?php if($mainpage=="Strategies"){echo 'open';} ?>">
              <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon ri-global-line"></i>
                <div data-i18n="Layouts">Strategies de Pays</div>
              </a>

              <ul class="menu-sub">
                <li class="menu-item <?php if($page=="postStrategies"){echo 'active';} ?>">
                  <a href="/pages/postStrategies.php" class="menu-link">
                    <div data-i18n="Without menu">Add Strategies</div>
                  </a>
                </li>
                <li class="menu-item <?php if($page=="listingStrategies"){echo 'active';} ?>">
                  <a href="/pages/listingStrategies.php" class="menu-link">
                    <div data-i18n="Without menu">All Strategies</div>
                  </a>
                </li>
                <li class="menu-item <?php if($page=="modifyStrategies"){echo 'active';} ?>">
                  <a href="/pages/modifyStrategies.php" class="menu-link">
                    <div data-i18n="Without menu">Modify Strategies</div>
                  </a>
                </li>
              </ul>
            </li>


            <li class="menu-item <?php if($page=="compagnie"){echo 'active';} ?>">
              <a href="/pages/listingCompanies.php" class="menu-link">
                <i class="menu-icon ri-building-4-line"></i>
                <div data-i18n="Icons">Compagnie</div>
              </a>
            </li>
            

            <li class="menu-item <?php if($mainpage=="Tenders"){echo 'open';} ?>">
              <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon ri-pantone-line"></i>
                <div data-i18n="Layouts">Appel d'offres</div>
              </a>

              <ul class="menu-sub">
                <li class="menu-item <?php if($page=="postTenders"){echo 'active';} ?>">
                  <a href="/pages/postTenders.php" class="menu-link">
                    <div data-i18n="Without menu">Add Tenders</div>
                  </a>
                </li>
                <li class="menu-item <?php if($page=="listingTenders"){echo 'active';} ?>">
                  <a href="/pages/listingTenders.php" class="menu-link">
                    <div data-i18n="Without menu">All Tenders</div>
                  </a>
                </li>
              </ul>
            </li>
          




            <li class="menu-item <?php if($mainpage=="Job"){echo 'open';} ?>">
              <a href="javascript:void(0);" class="menu-link menu-toggle">
              <i class="menu-icon ri-shopping-bag-fill"></i>
                <div data-i18n="Layouts">Offre d'emploi</div>
              </a>

              <ul class="menu-sub">
                <li class="menu-item <?php if($page=="postJobs"){echo 'active';} ?>">
                  <a href="/pages/postJobs.php" class="menu-link">
                    <div data-i18n="Without menu">Add d'emploi</div>
                  </a>
                </li>
                <li class="menu-item <?php if($page=="listingJobs"){echo 'active';} ?>">
                  <a href="/pages/listingJobs.php" class="menu-link">
                    <div data-i18n="Without menu">All d'emploi</div>
                  </a>
                </li>
              </ul>
            </li>


            <li class="menu-item <?php if($mainpage=="x"){echo 'open';} ?>">
              <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon ri-megaphone-line"></i>
                <div data-i18n="Layouts">Abonnements</div>
              </a>

              <ul class="menu-sub">
                <li class="menu-item <?php if($page=="x"){echo 'active';} ?>">
                  <a href="/pages/demo.php" class="menu-link">
                    <div data-i18n="Without menu">Demo</div>
                  </a>
                </li>
              </ul>
            </li>


            <li class="menu-item <?php if($mainpage=="Training"){echo 'open';} ?>">
              <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon ri-slideshow-line"></i>
                <div data-i18n="Layouts">Séminaires</div>
              </a>

              <ul class="menu-sub">
                <li class="menu-item <?php if($page=="postTraining"){echo 'active';} ?>">
                  <a href="/pages/postTraining.php" class="menu-link">
                    <div data-i18n="Without menu">Add Séminaires</div>
                  </a>
                </li>
                <li class="menu-item <?php if($page=="listingTraining"){echo 'active';} ?>">
                  <a href="/pages/listingTraining.php" class="menu-link">
                    <div data-i18n="Without menu">All Séminaires</div>
                  </a>
                </li>
                <li class="menu-item <?php if($page=="modifyTraining"){echo 'active';} ?>">
                  <a href="/pages/modifyTraining.php" class="menu-link">
                    <div data-i18n="Without menu">Modify Séminaires</div>
                  </a>
                </li>
              </ul>
            </li>



            <li class="menu-item <?php if($mainpage=="x"){echo 'open';} ?>">
              <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon ri-news-line"></i>
                <div data-i18n="Layouts">News</div>
              </a>

              <ul class="menu-sub">
                <li class="menu-item <?php if($page=="x"){echo 'active';} ?>">
                  <a href="/pages/demo.php" class="menu-link">
                    <div data-i18n="Without menu">Demo</div>
                  </a>
                </li>
              </ul>
            </li>


            <li class="menu-item <?php if($mainpage=="Scholarships"){echo 'open';} ?>">
              <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon ri-store-line"></i>
                <div data-i18n="Layouts">Bourses d'etudes</div>
              </a>

              <ul class="menu-sub">
                <li class="menu-item <?php if($page=="postScholarships"){echo 'active';} ?>">
                  <a href="/pages/postScholarships.php" class="menu-link">
                    <div data-i18n="Without menu">Add Scholarships</div>
                  </a>
                </li>
                <li class="menu-item <?php if($page=="listingScholarships"){echo 'active';} ?>">
                  <a href="/pages/listingScholarships.php" class="menu-link">
                    <div data-i18n="Without menu">All Scholarships</div>
                  </a>
                </li>
              </ul>
            </li>

            <li class="menu-item <?php if($mainpage=="Domaines"){echo 'open';} ?>">
              <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon ri-dice-line"></i>
                <div data-i18n="Layouts">Domaine</div>
              </a>

              <ul class="menu-sub">
                <li class="menu-item <?php if($page=="addDomaines"){echo 'active';} ?>">
                  <a href="/pages/addDomaines.php" class="menu-link">
                    <div data-i18n="Without menu">Add Domaine</div>
                  </a>
                </li>
                <li class="menu-item <?php if($page=="listingDomaines"){echo 'active';} ?>">
                  <a href="/pages/listingDomaines.php" class="menu-link">
                    <div data-i18n="Without menu">All Domaine</div>
                  </a>
                </li>
                <li class="menu-item <?php if($page=="modifyDomaines"){echo 'active';} ?>">
                  <a href="/pages/modifyDomaines.php" class="menu-link">
                    <div data-i18n="Without menu">Modify Domaine</div>
                  </a>
                </li>
              </ul>
            </li>

            <li class="menu-item <?php if($mainpage=="Specialities"){echo 'open';} ?>">
              <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon ri-command-line"></i>
                <div data-i18n="Layouts">Spécialité</div>
              </a>

              <ul class="menu-sub">
                <li class="menu-item <?php if($page=="addSpecialities"){echo 'active';} ?>">
                  <a href="/pages/addSpecialities.php" class="menu-link">
                    <div data-i18n="Without menu">Add Spécialité</div>
                  </a>
                </li>
                <li class="menu-item <?php if($page=="listingSpecialities"){echo 'active';} ?>">
                  <a href="/pages/listingSpecialities.php" class="menu-link">
                    <div data-i18n="Without menu">All Spécialité</div>
                  </a>
                </li>
                <li class="menu-item <?php if($page=="modifySpecialities"){echo 'active';} ?>">
                  <a href="/pages/modifySpecialities.php" class="menu-link">
                    <div data-i18n="Without menu">Modify Spécialité</div>
                  </a>
                </li>
              </ul>
            </li>


  
            <li class="menu-item <?php if($mainpage=="Pays"){echo 'open';} ?>">
              <a href="javascript:void(0);" class="menu-link menu-toggle">
              <i class="menu-icon ri-earth-line"></i>
                <div data-i18n="Layouts">Pays</div>
              </a>

              <ul class="menu-sub">
                <li class="menu-item <?php if($page=="addPyas"){echo 'active';} ?>">
                  <a href="/pages/addPays.php" class="menu-link">
                    <div data-i18n="Without menu">Add Pays</div>
                  </a>
                </li>
                <li class="menu-item <?php if($page=="listingPays"){echo 'active';} ?>">
                  <a href="/pages/listingPays.php" class="menu-link">
                    <div data-i18n="Without menu">All Pays</div>
                  </a>
                </li>
              </ul>
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
            

            <li class="menu-item <?php if($mainpage=="Etablissement"){echo 'open';} ?>">
              <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon ri-community-line"></i>
                <div data-i18n="Layouts">Etablissement</div>
              </a>

              <ul class="menu-sub">
                <li class="menu-item <?php if($page=="addLogoUniversities"){echo 'active';} ?>">
                  <a href="/pages/addLogoUniversities.php" class="menu-link">
                    <div data-i18n="Without menu">Add Etablissement</div>
                  </a>
                </li>
                <li class="menu-item <?php if($page=="listingUniversities"){echo 'active';} ?>">
                  <a href="/pages/listingUniversities.php" class="menu-link">
                    <div data-i18n="Without menu">All Etablissement</div>
                  </a>
                </li>
                <li class="menu-item <?php if($page=="modifyUniversities"){echo 'active';} ?>">
                  <a href="/pages/modifyUniversities.php" class="menu-link">
                    <div data-i18n="Without menu">Modify Etablissement</div>
                  </a>
                </li>
              </ul>
            </li>

            <li class="menu-item <?php if($mainpage=="Articles"){echo 'open';} ?>">
              <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon ri-article-line"></i>
                <div data-i18n="Layouts">Article</div>
              </a>

              <ul class="menu-sub">
                <li class="menu-item <?php if($page=="listingArticles"){echo 'active';} ?>">
                  <a href="/pages/listingArticles.php" class="menu-link">
                    <div data-i18n="Without menu">All Article</div>
                  </a>
                </li>
                <li class="menu-item <?php if($page=="modifyArticles"){echo 'active';} ?>">
                  <a href="/pages/modifyArticles.php" class="menu-link">
                    <div data-i18n="Without menu">Modify Article</div>
                  </a>
                </li>
              </ul>
            </li>

            <li class="menu-item <?php if($mainpage==""){echo 'open';} ?>">
              <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon ri-treasure-map-line"></i>
                <div data-i18n="Layouts">Petite Annonce</div>
              </a>

              <ul class="menu-sub">
                <li class="menu-item <?php if($page=="rr"){echo 'active';} ?>">
                  <a href="/pages/demo.php" class="menu-link">
                    <div data-i18n="Without menu">Demo</div>
                  </a>
                </li>
              </ul>
            </li>


            <li class="menu-item <?php if($mainpage=="FAQ"){echo 'open';} ?>">
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
                <li class="menu-item <?php if($page=="listingFAQ"){echo 'active';} ?>">
                  <a href="/pages/listingFAQ.php" class="menu-link">
                    <div data-i18n="Without menu">All FAQ</div>
                  </a>
                </li>
              </ul>
            </li>


           

            
            
          </ul>
        </aside>