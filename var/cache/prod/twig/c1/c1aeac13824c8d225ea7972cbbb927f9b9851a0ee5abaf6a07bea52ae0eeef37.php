<?php

/* __string_template__77cf24c2ee57e2bea5643d1d68394a695a54038ad19e5aabb187369e6acfd1c3 */
class __TwigTemplate_21b5dbacbdfb5138716e8529502d4ab881e53fe026c99cdc29a6e6acbacb0313 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'extra_stylesheets' => array($this, 'block_extra_stylesheets'),
            'content_header' => array($this, 'block_content_header'),
            'content' => array($this, 'block_content'),
            'content_footer' => array($this, 'block_content_footer'),
            'sidebar_right' => array($this, 'block_sidebar_right'),
            'javascripts' => array($this, 'block_javascripts'),
            'extra_javascripts' => array($this, 'block_extra_javascripts'),
            'translate_javascripts' => array($this, 'block_translate_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"fr\">
<head>
  <meta charset=\"utf-8\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=0.75, maximum-scale=0.75, user-scalable=0\">
<meta name=\"apple-mobile-web-app-capable\" content=\"yes\">
<meta name=\"robots\" content=\"NOFOLLOW, NOINDEX\">

<link rel=\"icon\" type=\"image/x-icon\" href=\"/Boucherie/prestashop/img/favicon.ico\" />
<link rel=\"apple-touch-icon\" href=\"/Boucherie/prestashop/img/app_icon.png\" />

<title>Performances • Boucherie Outrebon</title>

  <script type=\"text/javascript\">
    var help_class_name = 'AdminPerformance';
    var iso_user = 'fr';
    var lang_is_rtl = '0';
    var full_language_code = 'fr';
    var full_cldr_language_code = 'fr-FR';
    var country_iso_code = 'FR';
    var _PS_VERSION_ = '1.7.4.4';
    var roundMode = 2;
    var youEditFieldFor = '';
        var new_order_msg = 'Une nouvelle commande a été passée sur votre boutique.';
    var order_number_msg = 'Numéro de commande : ';
    var total_msg = 'Total : ';
    var from_msg = 'Du ';
    var see_order_msg = 'Afficher cette commande';
    var new_customer_msg = 'Un nouveau client s\\\\\\'est inscrit sur votre boutique';
    var customer_name_msg = 'Nom du client : ';
    var new_msg = 'Un nouveau message a été posté sur votre boutique.';
    var see_msg = 'Lire le message';
    var token = '5d9162558763afb2e959ece910804885';
    var token_admin_orders = '4a4e3880f1a95fe2f2f423e4432b554c';
    var token_admin_customers = 'd24e84f31060a83fe84be9c0205860b2';
    var token_admin_customer_threads = '64e7e8db7290ef4164e53bb3a523eff9';
    var currentIndex = 'index.php?controller=AdminPerformance';
    var employee_token = '0a3239bd078902d58f8ffc219d9de55a';
    var choose_language_translate = 'Choisissez la langue';
    var default_language = '1';
    var admin_modules_link = '/Boucherie/prestashop/admin085cxiqye/index.php/module/catalog/recommended?route=admin_module_catalog_post&_token=z8CvJ-cdX5u8RBC3tQDkLYNOnPWNUcGfGygZg4UFElU';
    var tab_modules_list = 'a2hosting,oneandonehosting';
    var update_success_msg = 'Mise à jour réussie';
    var errorLogin = 'PrestaShop n\\\\\\'a pas pu se connecter à Addons. Veuillez vérifier vos identifiants et votre connexion Internet.';
    var search_product_msg = 'Rechercher un produit';
  </script>

      <link href=\"/Boucherie/prestashop/modules/gamification/views/css/gamification.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/Boucherie/prestashop/admin085cxiqye/themes/new-theme/public/theme.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/Boucherie/prestashop/js/jquery/plugins/fancybox/jquery.fancybox.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/Boucherie/prestashop/js/jquery/plugins/chosen/jquery.chosen.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/Boucherie/prestashop/admin085cxiqye/themes/default/css/vendor/nv.d3.css\" rel=\"stylesheet\" type=\"text/css\"/>
  
  <script type=\"text/javascript\">
var baseAdminDir = \"\\/Boucherie\\/prestashop\\/admin085cxiqye\\/\";
var baseDir = \"\\/Boucherie\\/prestashop\\/\";
var currency = {\"iso_code\":\"EUR\",\"sign\":\"\\u20ac\",\"name\":\"euro\",\"format\":\"#,##0.00\\u00a0\\u00a4\"};
var host_mode = false;
var show_new_customers = \"1\";
var show_new_messages = false;
var show_new_orders = \"1\";
</script>
<script type=\"text/javascript\" src=\"/Boucherie/prestashop/js/jquery/jquery-1.11.0.min.js\"></script>
<script type=\"text/javascript\" src=\"/Boucherie/prestashop/js/jquery/jquery-migrate-1.2.1.min.js\"></script>
<script type=\"text/javascript\" src=\"/Boucherie/prestashop/modules/gamification/views/js/gamification_bt.js\"></script>
<script type=\"text/javascript\" src=\"/Boucherie/prestashop/js/jquery/plugins/fancybox/jquery.fancybox.js\"></script>
<script type=\"text/javascript\" src=\"/Boucherie/prestashop/admin085cxiqye/themes/new-theme/public/main.bundle.js\"></script>
<script type=\"text/javascript\" src=\"/Boucherie/prestashop/js/jquery/plugins/jquery.chosen.js\"></script>
<script type=\"text/javascript\" src=\"/Boucherie/prestashop/js/admin.js?v=1.7.4.4\"></script>
<script type=\"text/javascript\" src=\"/Boucherie/prestashop/js/cldr.js\"></script>
<script type=\"text/javascript\" src=\"/Boucherie/prestashop/js/tools.js?v=1.7.4.4\"></script>
<script type=\"text/javascript\" src=\"/Boucherie/prestashop/admin085cxiqye/public/bundle.js\"></script>
<script type=\"text/javascript\" src=\"/Boucherie/prestashop/js/vendor/d3.v3.min.js\"></script>
<script type=\"text/javascript\" src=\"/Boucherie/prestashop/admin085cxiqye/themes/default/js/vendor/nv.d3.min.js\"></script>

  <script>
\t\t\t\tvar ids_ps_advice = new Array();
\t\t\t\tvar admin_gamification_ajax_url = 'http://localhost/Boucherie/prestashop/admin085cxiqye/index.php?controller=AdminGamification&token=2987a71f92d3b35c76ebe005c78c5e4a';
\t\t\t\tvar current_id_tab = 101;
\t\t\t</script>

";
        // line 82
        $this->displayBlock('stylesheets', $context, $blocks);
        $this->displayBlock('extra_stylesheets', $context, $blocks);
        echo "</head>
<body class=\"lang-fr adminperformance\">


<header id=\"header\">
  <nav id=\"header_infos\" class=\"main-header\">

    <button class=\"btn btn-primary-reverse onclick btn-lg unbind ajax-spinner\"></button>

        
        <i class=\"material-icons js-mobile-menu\">menu</i>
    <a id=\"header_logo\" class=\"logo float-left\" href=\"http://localhost/Boucherie/prestashop/admin085cxiqye/index.php?controller=AdminDashboard&amp;token=efb50c56c7e13ba2bc226d2687ee54ee\"></a>
    <span id=\"shop_version\">1.7.4.4</span>

    <div class=\"component\" id=\"quick-access-container\">
      <div class=\"dropdown quick-accesses\">
  <button class=\"btn btn-link btn-sm dropdown-toggle\" type=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\" id=\"quick_select\">
    Accès rapide
  </button>
  <div class=\"dropdown-menu\">
          <a class=\"dropdown-item\"
         href=\"http://localhost/Boucherie/prestashop/admin085cxiqye/index.php?controller=AdminOrders&amp;token=4a4e3880f1a95fe2f2f423e4432b554c\"
                 data-item=\"Commandes\"
      >Commandes</a>
          <a class=\"dropdown-item\"
         href=\"http://localhost/Boucherie/prestashop/admin085cxiqye/index.php?controller=AdminStats&amp;module=statscheckup&amp;token=7b9125915d7db2860e6f32eb91d3fcb2\"
                 data-item=\"Évaluation du catalogue\"
      >Évaluation du catalogue</a>
          <a class=\"dropdown-item\"
         href=\"http://localhost/Boucherie/prestashop/admin085cxiqye/index.php/module/manage?token=6c8e1c5f2af5ccb4fd5161b49259f072\"
                 data-item=\"Modules installés\"
      >Modules installés</a>
          <a class=\"dropdown-item\"
         href=\"http://localhost/Boucherie/prestashop/admin085cxiqye/index.php?controller=AdminCartRules&amp;addcart_rule&amp;token=4b48d4ccc4d4a5140bf43b1d38653453\"
                 data-item=\"Nouveau bon de réduction\"
      >Nouveau bon de réduction</a>
          <a class=\"dropdown-item\"
         href=\"http://localhost/Boucherie/prestashop/admin085cxiqye/index.php/product/new?token=6c8e1c5f2af5ccb4fd5161b49259f072\"
                 data-item=\"Nouveau produit\"
      >Nouveau produit</a>
          <a class=\"dropdown-item\"
         href=\"http://localhost/Boucherie/prestashop/admin085cxiqye/index.php?controller=AdminCategories&amp;addcategory&amp;token=568bdce82c0536ec9dfa7fb8bb63744d\"
                 data-item=\"Nouvelle catégorie\"
      >Nouvelle catégorie</a>
        <div class=\"dropdown-divider\"></div>
          <a
        class=\"dropdown-item js-quick-link\"
        href=\"#\"
        data-rand=\"170\"
        data-icon=\"icon-AdminAdvancedParameters\"
        data-method=\"add\"
        data-url=\"index.php/configure/advanced/performance?-cdX5u8RBC3tQDkLYNOnPWNUcGfGygZg4UFElU\"
        data-post-link=\"http://localhost/Boucherie/prestashop/admin085cxiqye/index.php?controller=AdminQuickAccesses&token=8e5156fc70f4bd043658d81e136cc791\"
        data-prompt-text=\"Veuillez nommer ce raccourci :\"
        data-link=\"Performances - Liste\"
      >
        <i class=\"material-icons\">add_circle</i>
        Ajouter cette page à l'Accès Rapide
      </a>
        <a class=\"dropdown-item\" href=\"http://localhost/Boucherie/prestashop/admin085cxiqye/index.php?controller=AdminQuickAccesses&token=8e5156fc70f4bd043658d81e136cc791\">
      <i class=\"material-icons\">settings</i>
      Gérer les accès rapides
    </a>
  </div>
</div>
    </div>
    <div class=\"component\" id=\"header-search-container\">
      <form id=\"header_search\"
      class=\"bo_search_form dropdown-form js-dropdown-form collapsed\"
      method=\"post\"
      action=\"/Boucherie/prestashop/admin085cxiqye/index.php?controller=AdminSearch&amp;token=ee8f904927fadcecdb32aac9a25cc47a\"
      role=\"search\">
  <input type=\"hidden\" name=\"bo_search_type\" id=\"bo_search_type\" class=\"js-search-type\" />
    <div class=\"input-group\">
    <input type=\"text\" class=\"form-control js-form-search\" id=\"bo_query\" name=\"bo_query\" value=\"\" placeholder=\"Rechercher (ex. : référence produit, nom du client, etc.)\">
    <div class=\"input-group-append\">
      <button type=\"button\" class=\"btn btn-outline-secondary dropdown-toggle js-dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
        Partout
      </button>
      <div class=\"dropdown-menu js-items-list\">
        <a class=\"dropdown-item\" data-item=\"Partout\" href=\"#\" data-value=\"0\" data-placeholder=\"Que souhaitez-vous trouver ?\" data-icon=\"icon-search\"><i class=\"material-icons\">search</i> Partout</a>
        <div class=\"dropdown-divider\"></div>
        <a class=\"dropdown-item\" data-item=\"Catalogue\" href=\"#\" data-value=\"1\" data-placeholder=\"Nom du produit, unité de gestion des stocks (SKU), référence...\" data-icon=\"icon-book\"><i class=\"material-icons\">store_mall_directory</i> Catalogue</a>
        <a class=\"dropdown-item\" data-item=\"Clients par nom\" href=\"#\" data-value=\"2\" data-placeholder=\"E-mail, nom...\" data-icon=\"icon-group\"><i class=\"material-icons\">group</i> Clients par nom</a>
        <a class=\"dropdown-item\" data-item=\"Clients par adresse IP\" href=\"#\" data-value=\"6\" data-placeholder=\"123.45.67.89\" data-icon=\"icon-desktop\"><i class=\"material-icons\">desktop_mac</i> Clients par adresse IP</a>
        <a class=\"dropdown-item\" data-item=\"Commandes\" href=\"#\" data-value=\"3\" data-placeholder=\"ID commande\" data-icon=\"icon-credit-card\"><i class=\"material-icons\">shopping_basket</i> Commandes</a>
        <a class=\"dropdown-item\" data-item=\"Factures\" href=\"#\" data-value=\"4\" data-placeholder=\"Numéro de facture\" data-icon=\"icon-book\"><i class=\"material-icons\">book</i></i> Factures</a>
        <a class=\"dropdown-item\" data-item=\"Paniers\" href=\"#\" data-value=\"5\" data-placeholder=\"ID panier\" data-icon=\"icon-shopping-cart\"><i class=\"material-icons\">shopping_cart</i> Paniers</a>
        <a class=\"dropdown-item\" data-item=\"Modules\" href=\"#\" data-value=\"7\" data-placeholder=\"Nom du module\" data-icon=\"icon-puzzle-piece\"><i class=\"material-icons\">extension</i> Modules</a>
      </div>
      <button class=\"btn btn-primary\" type=\"submit\"><span class=\"d-none\">RECHERCHE</span><i class=\"material-icons\">search</i></button>
    </div>
  </div>
</form>

<script type=\"text/javascript\">
 \$(document).ready(function(){
    \$('#bo_query').one('click', function() {
    \$(this).closest('form').removeClass('collapsed');
  });
});
</script>
    </div>

            <div class=\"component\" id=\"header-shop-list-container\">
        <div class=\"shop-list\">
    <a class=\"link\" id=\"header_shopname\" href=\"http://localhost/Boucherie/prestashop/\" target= \"_blank\">
      <i class=\"material-icons\">visibility</i>
      Voir ma boutique
    </a>
  </div>
    </div>
          <div class=\"component header-right-component\" id=\"header-notifications-container\">
        <div id=\"notif\" class=\"notification-center dropdown dropdown-clickable\">
  <button class=\"btn notification js-notification dropdown-toggle\" data-toggle=\"dropdown\">
    <i class=\"material-icons\">notifications_none</i>
    <span id=\"notifications-total\" class=\"count hide\">0</span>
  </button>
  <div class=\"dropdown-menu dropdown-menu-right js-notifs_dropdown\">
    <div class=\"notifications\">
      <ul class=\"nav nav-tabs\" role=\"tablist\">
                          <li class=\"nav-item\">
            <a
              class=\"nav-link active\"
              id=\"orders-tab\"
              data-toggle=\"tab\"
              data-type=\"order\"
              href=\"#orders-notifications\"
              role=\"tab\"
            >
              Commandes<span id=\"_nb_new_orders_\"></span>
            </a>
          </li>
                                    <li class=\"nav-item\">
            <a
              class=\"nav-link \"
              id=\"customers-tab\"
              data-toggle=\"tab\"
              data-type=\"customer\"
              href=\"#customers-notifications\"
              role=\"tab\"
            >
              Clients<span id=\"_nb_new_customers_\"></span>
            </a>
          </li>
                                    <li class=\"nav-item\">
            <a
              class=\"nav-link \"
              id=\"messages-tab\"
              data-toggle=\"tab\"
              data-type=\"customer_message\"
              href=\"#messages-notifications\"
              role=\"tab\"
            >
              Messages<span id=\"_nb_new_messages_\"></span>
            </a>
          </li>
                        </ul>

      <!-- Tab panes -->
      <div class=\"tab-content\">
                          <div class=\"tab-pane active empty\" id=\"orders-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              Pas de nouvelle commande pour le moment :(<br>
              Avez-vous consulté vos <strong><a href=\"http://localhost/Boucherie/prestashop/admin085cxiqye/index.php?controller=AdminCarts&token=370df36a7d52b1636e59056242263662&action=filterOnlyAbandonedCarts\">paniers abandonnés</a></strong> ?<br> Votre prochaine commande s'y trouve peut-être !
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                                    <div class=\"tab-pane  empty\" id=\"customers-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              Aucun nouveau client pour l'instant :(<br>
              Êtes-vous actifs sur les réseaux sociaux en ce moment ?
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                                    <div class=\"tab-pane  empty\" id=\"messages-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              Pas de nouveau message pour l'instant.<br>
              Pas de nouvelle, bonne nouvelle, n'est-ce pas ?
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                        </div>
    </div>
  </div>
</div>

  <script type=\"text/html\" id=\"order-notification-template\">
    <a class=\"notif\" href='order_url'>
      #_id_order_ -
      de <strong>_customer_name_</strong> (_iso_code_)_carrier_
      <strong class=\"float-sm-right\">_total_paid_</strong>
    </a>
  </script>

  <script type=\"text/html\" id=\"customer-notification-template\">
    <a class=\"notif\" href='customer_url'>
      #_id_customer_ - <strong>_customer_name_</strong>_company_ - enregistré le <strong>_date_add_</strong>
    </a>
  </script>

  <script type=\"text/html\" id=\"message-notification-template\">
    <a class=\"notif\" href='message_url'>
    <span class=\"message-notification-status _status_\">
      <i class=\"material-icons\">fiber_manual_record</i> _status_
    </span>
      - <strong>_customer_name_</strong> (_company_) - <i class=\"material-icons\">access_time</i> _date_add_
    </a>
  </script>
      </div>
        <div class=\"component\" id=\"header-employee-container\">
      <div class=\"dropdown employee-dropdown\">
  <div class=\"rounded-circle person\" data-toggle=\"dropdown\">
    <i class=\"material-icons\">account_circle</i>
  </div>
  <div class=\"dropdown-menu dropdown-menu-right\">
    <div class=\"text-center employee_avatar\">
      <img class=\"avatar rounded-circle\" src=\"http://profile.prestashop.com/simon.cordier%40isen.yncrea.fr.jpg\" />
      <span>Simon Cordier</span>
    </div>
    <a class=\"dropdown-item employee-link profile-link\" href=\"http://localhost/Boucherie/prestashop/admin085cxiqye/index.php?controller=AdminEmployees&amp;token=0a3239bd078902d58f8ffc219d9de55a&amp;id_employee=1&amp;updateemployee\">
      <i class=\"material-icons\">settings_applications</i>
      Votre profil
    </a>
    <a class=\"dropdown-item employee-link\" id=\"header_logout\" href=\"http://localhost/Boucherie/prestashop/admin085cxiqye/index.php?controller=AdminLogin&amp;token=4603849fcfacd7ed1861adb69e29fb64&amp;logout\">
      <i class=\"material-icons\">power_settings_new</i>
      <span>Déconnexion</span>
    </a>
  </div>
</div>
    </div>

      </nav>
  </header>

<nav class=\"nav-bar d-none d-md-block\">
  <span class=\"menu-collapse\">
    <i class=\"material-icons\">chevron_left</i>
    <i class=\"material-icons\">chevron_left</i>
  </span>

  <ul class=\"main-menu\">

          
                
                
        
          <li class=\"link-levelone \" data-submenu=\"1\" id=\"tab-AdminDashboard\">
            <a href=\"http://localhost/Boucherie/prestashop/admin085cxiqye/index.php?controller=AdminDashboard&amp;token=efb50c56c7e13ba2bc226d2687ee54ee\" class=\"link\" >
              <i class=\"material-icons\">trending_up</i> <span>Tableau de bord</span>
            </a>
          </li>

        
                
                                  
                
        
          <li class=\"category-title \" data-submenu=\"2\" id=\"tab-SELL\">
              <span class=\"title\">Vendre</span>
          </li>

                          
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"3\" id=\"subtab-AdminParentOrders\">
                  <a href=\"http://localhost/Boucherie/prestashop/admin085cxiqye/index.php?controller=AdminOrders&amp;token=4a4e3880f1a95fe2f2f423e4432b554c\" class=\"link\">
                    <i class=\"material-icons mi-shopping_basket\">shopping_basket</i>
                    <span>
                    Commandes
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-3\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"4\" id=\"subtab-AdminOrders\">
                              <a href=\"http://localhost/Boucherie/prestashop/admin085cxiqye/index.php?controller=AdminOrders&amp;token=4a4e3880f1a95fe2f2f423e4432b554c\" class=\"link\"> Commandes
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"5\" id=\"subtab-AdminInvoices\">
                              <a href=\"http://localhost/Boucherie/prestashop/admin085cxiqye/index.php?controller=AdminInvoices&amp;token=95d344c67231641a9d41584a6102de55\" class=\"link\"> Factures
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"6\" id=\"subtab-AdminSlip\">
                              <a href=\"http://localhost/Boucherie/prestashop/admin085cxiqye/index.php?controller=AdminSlip&amp;token=4e5625294b5b615b8ba23bde090dbe05\" class=\"link\"> Avoirs
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"7\" id=\"subtab-AdminDeliverySlip\">
                              <a href=\"http://localhost/Boucherie/prestashop/admin085cxiqye/index.php?controller=AdminDeliverySlip&amp;token=5649dad38b6128798f3adeb159088f48\" class=\"link\"> Bons de livraison
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"8\" id=\"subtab-AdminCarts\">
                              <a href=\"http://localhost/Boucherie/prestashop/admin085cxiqye/index.php?controller=AdminCarts&amp;token=370df36a7d52b1636e59056242263662\" class=\"link\"> Paniers
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"9\" id=\"subtab-AdminCatalog\">
                  <a href=\"/Boucherie/prestashop/admin085cxiqye/index.php/product/catalog?_token=z8CvJ-cdX5u8RBC3tQDkLYNOnPWNUcGfGygZg4UFElU\" class=\"link\">
                    <i class=\"material-icons mi-store\">store</i>
                    <span>
                    Catalogue
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-9\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"10\" id=\"subtab-AdminProducts\">
                              <a href=\"/Boucherie/prestashop/admin085cxiqye/index.php/product/catalog?_token=z8CvJ-cdX5u8RBC3tQDkLYNOnPWNUcGfGygZg4UFElU\" class=\"link\"> Produits
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"11\" id=\"subtab-AdminCategories\">
                              <a href=\"http://localhost/Boucherie/prestashop/admin085cxiqye/index.php?controller=AdminCategories&amp;token=568bdce82c0536ec9dfa7fb8bb63744d\" class=\"link\"> Catégories
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"12\" id=\"subtab-AdminTracking\">
                              <a href=\"http://localhost/Boucherie/prestashop/admin085cxiqye/index.php?controller=AdminTracking&amp;token=280998e2af793121c8ff98d24a0679d4\" class=\"link\"> Suivi
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"13\" id=\"subtab-AdminParentAttributesGroups\">
                              <a href=\"http://localhost/Boucherie/prestashop/admin085cxiqye/index.php?controller=AdminAttributesGroups&amp;token=de73e227bf3b3dee4095eaee515c18e4\" class=\"link\"> Attributs &amp; caractéristiques
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"16\" id=\"subtab-AdminParentManufacturers\">
                              <a href=\"http://localhost/Boucherie/prestashop/admin085cxiqye/index.php?controller=AdminManufacturers&amp;token=33122149f71388f6de8d1605560fe2e4\" class=\"link\"> Marques et fournisseurs
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"19\" id=\"subtab-AdminAttachments\">
                              <a href=\"http://localhost/Boucherie/prestashop/admin085cxiqye/index.php?controller=AdminAttachments&amp;token=2829e2ca852180166ae6ffaa2129b631\" class=\"link\"> Fichiers
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"20\" id=\"subtab-AdminParentCartRules\">
                              <a href=\"http://localhost/Boucherie/prestashop/admin085cxiqye/index.php?controller=AdminCartRules&amp;token=4b48d4ccc4d4a5140bf43b1d38653453\" class=\"link\"> Promotions
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"23\" id=\"subtab-AdminStockManagement\">
                              <a href=\"/Boucherie/prestashop/admin085cxiqye/index.php/stock/?_token=z8CvJ-cdX5u8RBC3tQDkLYNOnPWNUcGfGygZg4UFElU\" class=\"link\"> Stocks
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"24\" id=\"subtab-AdminParentCustomer\">
                  <a href=\"http://localhost/Boucherie/prestashop/admin085cxiqye/index.php?controller=AdminCustomers&amp;token=d24e84f31060a83fe84be9c0205860b2\" class=\"link\">
                    <i class=\"material-icons mi-account_circle\">account_circle</i>
                    <span>
                    Clients
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-24\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"25\" id=\"subtab-AdminCustomers\">
                              <a href=\"http://localhost/Boucherie/prestashop/admin085cxiqye/index.php?controller=AdminCustomers&amp;token=d24e84f31060a83fe84be9c0205860b2\" class=\"link\"> Clients
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"26\" id=\"subtab-AdminAddresses\">
                              <a href=\"http://localhost/Boucherie/prestashop/admin085cxiqye/index.php?controller=AdminAddresses&amp;token=859b75c08f9e2e6018b90443879fbccc\" class=\"link\"> Adresses
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"27\" id=\"subtab-AdminOutstanding\">
                              <a href=\"http://localhost/Boucherie/prestashop/admin085cxiqye/index.php?controller=AdminOutstanding&amp;token=4ada403cf7139a36c547567e01f223dd\" class=\"link\"> Encours autorisés
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"28\" id=\"subtab-AdminParentCustomerThreads\">
                  <a href=\"http://localhost/Boucherie/prestashop/admin085cxiqye/index.php?controller=AdminCustomerThreads&amp;token=64e7e8db7290ef4164e53bb3a523eff9\" class=\"link\">
                    <i class=\"material-icons mi-chat\">chat</i>
                    <span>
                    SAV
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-28\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"29\" id=\"subtab-AdminCustomerThreads\">
                              <a href=\"http://localhost/Boucherie/prestashop/admin085cxiqye/index.php?controller=AdminCustomerThreads&amp;token=64e7e8db7290ef4164e53bb3a523eff9\" class=\"link\"> SAV
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"30\" id=\"subtab-AdminOrderMessage\">
                              <a href=\"http://localhost/Boucherie/prestashop/admin085cxiqye/index.php?controller=AdminOrderMessage&amp;token=d5cd5ff82c95559d74b70a8622d44f42\" class=\"link\"> Messages prédéfinis
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"31\" id=\"subtab-AdminReturn\">
                              <a href=\"http://localhost/Boucherie/prestashop/admin085cxiqye/index.php?controller=AdminReturn&amp;token=37c0367c5d73a5a12ddf5ca5f480d7e0\" class=\"link\"> Retours produits
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                                
                
                <li class=\"link-levelone\" data-submenu=\"32\" id=\"subtab-AdminStats\">
                  <a href=\"http://localhost/Boucherie/prestashop/admin085cxiqye/index.php?controller=AdminStats&amp;token=7b9125915d7db2860e6f32eb91d3fcb2\" class=\"link\">
                    <i class=\"material-icons mi-assessment\">assessment</i>
                    <span>
                    Statistiques
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                    </li>
                          
        
                
                                  
                
        
          <li class=\"category-title \" data-submenu=\"42\" id=\"tab-IMPROVE\">
              <span class=\"title\">Personnaliser</span>
          </li>

                          
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"43\" id=\"subtab-AdminParentModulesSf\">
                  <a href=\"/Boucherie/prestashop/admin085cxiqye/index.php/module/manage?_token=z8CvJ-cdX5u8RBC3tQDkLYNOnPWNUcGfGygZg4UFElU\" class=\"link\">
                    <i class=\"material-icons mi-extension\">extension</i>
                    <span>
                    Modules
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-43\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"44\" id=\"subtab-AdminModulesSf\">
                              <a href=\"/Boucherie/prestashop/admin085cxiqye/index.php/module/manage?_token=z8CvJ-cdX5u8RBC3tQDkLYNOnPWNUcGfGygZg4UFElU\" class=\"link\"> Modules et services
                              </a>
                            </li>

                                                                                                                              
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"49\" id=\"subtab-AdminAddonsCatalog\">
                              <a href=\"/Boucherie/prestashop/admin085cxiqye/index.php/module/addons-store?_token=z8CvJ-cdX5u8RBC3tQDkLYNOnPWNUcGfGygZg4UFElU\" class=\"link\"> Catalogue de modules
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"50\" id=\"subtab-AdminParentThemes\">
                  <a href=\"http://localhost/Boucherie/prestashop/admin085cxiqye/index.php?controller=AdminThemes&amp;token=6068a5d3dd5c3d4d5d816d877ec8409b\" class=\"link\">
                    <i class=\"material-icons mi-desktop_mac\">desktop_mac</i>
                    <span>
                    Apparence
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-50\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"121\" id=\"subtab-AdminThemesParent\">
                              <a href=\"http://localhost/Boucherie/prestashop/admin085cxiqye/index.php?controller=AdminThemes&amp;token=6068a5d3dd5c3d4d5d816d877ec8409b\" class=\"link\"> Thème et logo
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"52\" id=\"subtab-AdminThemesCatalog\">
                              <a href=\"http://localhost/Boucherie/prestashop/admin085cxiqye/index.php?controller=AdminThemesCatalog&amp;token=92adbc9d3b32453aafc5a8aae87cfd4a\" class=\"link\"> Catalogue de thèmes
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"53\" id=\"subtab-AdminCmsContent\">
                              <a href=\"http://localhost/Boucherie/prestashop/admin085cxiqye/index.php?controller=AdminCmsContent&amp;token=c81cf04db5595279f2e867cdd5a79446\" class=\"link\"> Pages
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"54\" id=\"subtab-AdminModulesPositions\">
                              <a href=\"http://localhost/Boucherie/prestashop/admin085cxiqye/index.php?controller=AdminModulesPositions&amp;token=d7b4ed08898479f29d4e0e703a4753b6\" class=\"link\"> Positions
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"55\" id=\"subtab-AdminImages\">
                              <a href=\"http://localhost/Boucherie/prestashop/admin085cxiqye/index.php?controller=AdminImages&amp;token=246c3e7ac5c98d3da946612b0159cfb5\" class=\"link\"> Images
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"120\" id=\"subtab-AdminLinkWidget\">
                              <a href=\"http://localhost/Boucherie/prestashop/admin085cxiqye/index.php?controller=AdminLinkWidget&amp;token=7d4174734b2fc4ea46c2282619a40c4f\" class=\"link\"> Link Widget
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"56\" id=\"subtab-AdminParentShipping\">
                  <a href=\"http://localhost/Boucherie/prestashop/admin085cxiqye/index.php?controller=AdminCarriers&amp;token=58f8bf4f9bd72f406ddca253b8877029\" class=\"link\">
                    <i class=\"material-icons mi-local_shipping\">local_shipping</i>
                    <span>
                    Livraison
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-56\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"57\" id=\"subtab-AdminCarriers\">
                              <a href=\"http://localhost/Boucherie/prestashop/admin085cxiqye/index.php?controller=AdminCarriers&amp;token=58f8bf4f9bd72f406ddca253b8877029\" class=\"link\"> Transporteurs
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"58\" id=\"subtab-AdminShipping\">
                              <a href=\"http://localhost/Boucherie/prestashop/admin085cxiqye/index.php?controller=AdminShipping&amp;token=60a16e39d5561ed7672a5aefcce7c05b\" class=\"link\"> Préférences
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"59\" id=\"subtab-AdminParentPayment\">
                  <a href=\"http://localhost/Boucherie/prestashop/admin085cxiqye/index.php?controller=AdminPayment&amp;token=b9134d5ad664d0fc1136b65c8d1d1b1d\" class=\"link\">
                    <i class=\"material-icons mi-payment\">payment</i>
                    <span>
                    Paiement
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-59\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"60\" id=\"subtab-AdminPayment\">
                              <a href=\"http://localhost/Boucherie/prestashop/admin085cxiqye/index.php?controller=AdminPayment&amp;token=b9134d5ad664d0fc1136b65c8d1d1b1d\" class=\"link\"> Modes de paiement
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"61\" id=\"subtab-AdminPaymentPreferences\">
                              <a href=\"http://localhost/Boucherie/prestashop/admin085cxiqye/index.php?controller=AdminPaymentPreferences&amp;token=f7d6154b03d9e2d5486de1ea0898561e\" class=\"link\"> Préférences
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"62\" id=\"subtab-AdminInternational\">
                  <a href=\"http://localhost/Boucherie/prestashop/admin085cxiqye/index.php?controller=AdminLocalization&amp;token=c0e6b47d21495db6cbca9279e6ef23ec\" class=\"link\">
                    <i class=\"material-icons mi-language\">language</i>
                    <span>
                    International
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-62\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"63\" id=\"subtab-AdminParentLocalization\">
                              <a href=\"http://localhost/Boucherie/prestashop/admin085cxiqye/index.php?controller=AdminLocalization&amp;token=c0e6b47d21495db6cbca9279e6ef23ec\" class=\"link\"> Localisation
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"68\" id=\"subtab-AdminParentCountries\">
                              <a href=\"http://localhost/Boucherie/prestashop/admin085cxiqye/index.php?controller=AdminZones&amp;token=fc5811834e6e74dc8385497b605b3953\" class=\"link\"> Zones géographiques
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"72\" id=\"subtab-AdminParentTaxes\">
                              <a href=\"http://localhost/Boucherie/prestashop/admin085cxiqye/index.php?controller=AdminTaxes&amp;token=27b961a0ba9180d93a2c1b0fb1e0c2e2\" class=\"link\"> Taxes
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"75\" id=\"subtab-AdminTranslations\">
                              <a href=\"http://localhost/Boucherie/prestashop/admin085cxiqye/index.php?controller=AdminTranslations&amp;token=9d856d73d96f4f659f9c81294bc6e58e\" class=\"link\"> Traductions
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                          
        
                
                                  
                
        
          <li class=\"category-title -active\" data-submenu=\"76\" id=\"tab-CONFIGURE\">
              <span class=\"title\">Configurer</span>
          </li>

                          
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"77\" id=\"subtab-ShopParameters\">
                  <a href=\"/Boucherie/prestashop/admin085cxiqye/index.php/configure/shop/preferences?_token=z8CvJ-cdX5u8RBC3tQDkLYNOnPWNUcGfGygZg4UFElU\" class=\"link\">
                    <i class=\"material-icons mi-settings\">settings</i>
                    <span>
                    Paramètres de la boutique
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-77\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"78\" id=\"subtab-AdminParentPreferences\">
                              <a href=\"/Boucherie/prestashop/admin085cxiqye/index.php/configure/shop/preferences?_token=z8CvJ-cdX5u8RBC3tQDkLYNOnPWNUcGfGygZg4UFElU\" class=\"link\"> Paramètres généraux
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"81\" id=\"subtab-AdminParentOrderPreferences\">
                              <a href=\"http://localhost/Boucherie/prestashop/admin085cxiqye/index.php?controller=AdminOrderPreferences&amp;token=7f44a64361a1484cccb21802d7affb33\" class=\"link\"> Commandes
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"84\" id=\"subtab-AdminPPreferences\">
                              <a href=\"/Boucherie/prestashop/admin085cxiqye/index.php/configure/shop/product_preferences?_token=z8CvJ-cdX5u8RBC3tQDkLYNOnPWNUcGfGygZg4UFElU\" class=\"link\"> Produits
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"85\" id=\"subtab-AdminParentCustomerPreferences\">
                              <a href=\"/Boucherie/prestashop/admin085cxiqye/index.php/configure/shop/customer_preferences?_token=z8CvJ-cdX5u8RBC3tQDkLYNOnPWNUcGfGygZg4UFElU\" class=\"link\"> Clients
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"89\" id=\"subtab-AdminParentStores\">
                              <a href=\"http://localhost/Boucherie/prestashop/admin085cxiqye/index.php?controller=AdminContacts&amp;token=c915f977394dd8a5ff80ad3f993ff802\" class=\"link\"> Contact
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"92\" id=\"subtab-AdminParentMeta\">
                              <a href=\"http://localhost/Boucherie/prestashop/admin085cxiqye/index.php?controller=AdminMeta&amp;token=d6a800a943a91b24d4c87513081610ed\" class=\"link\"> Trafic et SEO
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"96\" id=\"subtab-AdminParentSearchConf\">
                              <a href=\"http://localhost/Boucherie/prestashop/admin085cxiqye/index.php?controller=AdminSearchConf&amp;token=87f6a79e13421ecd7c7cffa6ad0404ac\" class=\"link\"> Rechercher
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"125\" id=\"subtab-AdminGamification\">
                              <a href=\"http://localhost/Boucherie/prestashop/admin085cxiqye/index.php?controller=AdminGamification&amp;token=2987a71f92d3b35c76ebe005c78c5e4a\" class=\"link\"> Merchant Expertise
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                                
                                                    
                <li class=\"link-levelone has_submenu -active open ul-open\" data-submenu=\"99\" id=\"subtab-AdminAdvancedParameters\">
                  <a href=\"/Boucherie/prestashop/admin085cxiqye/index.php/configure/advanced/system_information?_token=z8CvJ-cdX5u8RBC3tQDkLYNOnPWNUcGfGygZg4UFElU\" class=\"link\">
                    <i class=\"material-icons mi-settings_applications\">settings_applications</i>
                    <span>
                    Paramètres avancés
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_up
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-99\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"100\" id=\"subtab-AdminInformation\">
                              <a href=\"/Boucherie/prestashop/admin085cxiqye/index.php/configure/advanced/system_information?_token=z8CvJ-cdX5u8RBC3tQDkLYNOnPWNUcGfGygZg4UFElU\" class=\"link\"> Informations
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo -active\" data-submenu=\"101\" id=\"subtab-AdminPerformance\">
                              <a href=\"/Boucherie/prestashop/admin085cxiqye/index.php/configure/advanced/performance?_token=z8CvJ-cdX5u8RBC3tQDkLYNOnPWNUcGfGygZg4UFElU\" class=\"link\"> Performances
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"102\" id=\"subtab-AdminAdminPreferences\">
                              <a href=\"/Boucherie/prestashop/admin085cxiqye/index.php/configure/advanced/administration?_token=z8CvJ-cdX5u8RBC3tQDkLYNOnPWNUcGfGygZg4UFElU\" class=\"link\"> Administration
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"103\" id=\"subtab-AdminEmails\">
                              <a href=\"http://localhost/Boucherie/prestashop/admin085cxiqye/index.php?controller=AdminEmails&amp;token=ee8b9a6b9617f9e8017c124190193107\" class=\"link\"> Email
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"104\" id=\"subtab-AdminImport\">
                              <a href=\"/Boucherie/prestashop/admin085cxiqye/index.php/configure/advanced/import?_token=z8CvJ-cdX5u8RBC3tQDkLYNOnPWNUcGfGygZg4UFElU\" class=\"link\"> Importer
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"105\" id=\"subtab-AdminParentEmployees\">
                              <a href=\"http://localhost/Boucherie/prestashop/admin085cxiqye/index.php?controller=AdminEmployees&amp;token=0a3239bd078902d58f8ffc219d9de55a\" class=\"link\"> Équipe
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"109\" id=\"subtab-AdminParentRequestSql\">
                              <a href=\"http://localhost/Boucherie/prestashop/admin085cxiqye/index.php?controller=AdminRequestSql&amp;token=8d29e2fa283fe4a98de3a7a5ac72e4fc\" class=\"link\"> Base de données
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"112\" id=\"subtab-AdminLogs\">
                              <a href=\"http://localhost/Boucherie/prestashop/admin085cxiqye/index.php?controller=AdminLogs&amp;token=81aa07978358601d4f7922505b076f8c\" class=\"link\"> Logs
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"113\" id=\"subtab-AdminWebservice\">
                              <a href=\"http://localhost/Boucherie/prestashop/admin085cxiqye/index.php?controller=AdminWebservice&amp;token=ebc83dc3f85d885e8b72cf7bbccab972\" class=\"link\"> Webservice
                              </a>
                            </li>

                                                                                                                                                                            </ul>
                                    </li>
                          
        
            </ul>
  
</nav>

<div id=\"main-div\">

  
    
<div class=\"header-toolbar\">
  <div class=\"container-fluid\">

    
      <nav aria-label=\"Breadcrumb\">
        <ol class=\"breadcrumb\">
                      <li class=\"breadcrumb-item\">Paramètres avancés</li>
          
                      <li class=\"breadcrumb-item active\">
              <a href=\"/Boucherie/prestashop/admin085cxiqye/index.php/configure/advanced/performance?_token=z8CvJ-cdX5u8RBC3tQDkLYNOnPWNUcGfGygZg4UFElU\" aria-current=\"page\">Performances</a>
            </li>
                  </ol>
      </nav>
    

    <div class=\"title-row\">
      
          <h1 class=\"title\">
            Performances          </h1>
      

      
        <div class=\"toolbar-icons\">
          <div class=\"wrapper\">
            
                                                                                    <a
                  class=\"btn btn-primary  pointer\"                  id=\"page-header-desc-configuration-clear_cache\"
                  href=\"/Boucherie/prestashop/admin085cxiqye/index.php/configure/advanced/clear_cache?_token=z8CvJ-cdX5u8RBC3tQDkLYNOnPWNUcGfGygZg4UFElU\"                  title=\"Vider le cache\"                >
                  <i class=\"material-icons\">delete</i>
                  Vider le cache
                </a>
                                                                  <a
                class=\"btn btn-outline-secondary \"
                id=\"page-header-desc-configuration-modules-list\"
                href=\"/Boucherie/prestashop/admin085cxiqye/index.php/module/catalog?_token=z8CvJ-cdX5u8RBC3tQDkLYNOnPWNUcGfGygZg4UFElU\"                title=\"Modules recommandés\"
                              >
                Modules recommandés
              </a>
                        
                              <a class=\"btn btn-outline-secondary btn-help btn-sidebar\" href=\"#\"
                   title=\"Aide\"
                   data-toggle=\"sidebar\"
                   data-target=\"#right-sidebar\"
                   data-url=\"/Boucherie/prestashop/admin085cxiqye/index.php/common/sidebar/https%253A%252F%252Fhelp.prestashop.com%252Ffr%252Fdoc%252FAdminPerformance%253Fversion%253D1.7.4.4%2526country%253Dfr/Aide?_token=z8CvJ-cdX5u8RBC3tQDkLYNOnPWNUcGfGygZg4UFElU\"
                   id=\"product_form_open_help\"
                >
                  Aide
                </a>
                                    </div>
        </div>
      
    </div>
  </div>

  
    
</div>
    <div class=\"modal fade\" id=\"modal_addons_connect\" tabindex=\"-1\">
\t<div class=\"modal-dialog modal-md\">
\t\t<div class=\"modal-content\">
\t\t\t\t\t\t<div class=\"modal-header\">
\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
\t\t\t\t<h4 class=\"modal-title\"><i class=\"icon-puzzle-piece\"></i> <a target=\"_blank\" href=\"https://addons.prestashop.com/?utm_source=back-office&utm_medium=modules&utm_campaign=back-office-FR&utm_content=download\">PrestaShop Addons</a></h4>
\t\t\t</div>
\t\t\t
\t\t\t<div class=\"modal-body\">
\t\t\t\t\t\t<!--start addons login-->
\t\t\t<form id=\"addons_login_form\" method=\"post\" >
\t\t\t\t<div>
\t\t\t\t\t<a href=\"https://addons.prestashop.com/fr/login?email=simon.cordier%40isen.yncrea.fr&amp;firstname=Simon&amp;lastname=Cordier&amp;website=http%3A%2F%2Flocalhost%2FBoucherie%2Fprestashop%2F&amp;utm_source=back-office&amp;utm_medium=connect-to-addons&amp;utm_campaign=back-office-FR&amp;utm_content=download#createnow\"><img class=\"img-responsive center-block\" src=\"/Boucherie/prestashop/admin085cxiqye/themes/default/img/prestashop-addons-logo.png\" alt=\"Logo PrestaShop Addons\"/></a>
\t\t\t\t\t<h3 class=\"text-center\">Connectez-vous à la place de marché de PrestaShop afin d'importer automatiquement tous vos achats.</h3>
\t\t\t\t\t<hr />
\t\t\t\t</div>
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<h4>Vous n'avez pas de compte ?</h4>
\t\t\t\t\t\t<p class='text-justify'>Les clés pour réussir votre boutique sont sur PrestaShop Addons ! Découvrez sur la place de marché officielle de PrestaShop plus de 3 500 modules et thèmes pour augmenter votre trafic, optimiser vos conversions, fidéliser vos clients et vous faciliter l’e-commerce.</p>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<h4>Connectez-vous à PrestaShop Addons</h4>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t<div class=\"input-group-prepend\">
\t\t\t\t\t\t\t\t\t<span class=\"input-group-text\"><i class=\"icon-user\"></i></span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<input id=\"username_addons\" name=\"username_addons\" type=\"text\" value=\"\" autocomplete=\"off\" class=\"form-control ac_input\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t<div class=\"input-group-prepend\">
\t\t\t\t\t\t\t\t\t<span class=\"input-group-text\"><i class=\"icon-key\"></i></span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<input id=\"password_addons\" name=\"password_addons\" type=\"password\" value=\"\" autocomplete=\"off\" class=\"form-control ac_input\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<a class=\"btn btn-link float-right _blank\" href=\"//addons.prestashop.com/fr/forgot-your-password\">Mot de passe oublié</a>
\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"row row-padding-top\">
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<a class=\"btn btn-default btn-block btn-lg _blank\" href=\"https://addons.prestashop.com/fr/login?email=simon.cordier%40isen.yncrea.fr&amp;firstname=Simon&amp;lastname=Cordier&amp;website=http%3A%2F%2Flocalhost%2FBoucherie%2Fprestashop%2F&amp;utm_source=back-office&amp;utm_medium=connect-to-addons&amp;utm_campaign=back-office-FR&amp;utm_content=download#createnow\">
\t\t\t\t\t\t\t\tCréer un compte
\t\t\t\t\t\t\t\t<i class=\"icon-external-link\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<button id=\"addons_login_button\" class=\"btn btn-primary btn-block btn-lg\" type=\"submit\">
\t\t\t\t\t\t\t\t<i class=\"icon-unlock\"></i> Connexion
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div id=\"addons_loading\" class=\"help-block\"></div>

\t\t\t</form>
\t\t\t<!--end addons login-->
\t\t\t</div>


\t\t\t\t\t</div>
\t</div>
</div>

    <div class=\"content-div  \">

      

      
                        
      <div class=\"row \">
        <div class=\"col-sm-12\">
          <div id=\"ajax_confirmation\" class=\"alert alert-success\" style=\"display: none;\"></div>


  ";
        // line 1133
        $this->displayBlock('content_header', $context, $blocks);
        // line 1134
        echo "                 ";
        $this->displayBlock('content', $context, $blocks);
        // line 1135
        echo "                 ";
        $this->displayBlock('content_footer', $context, $blocks);
        // line 1136
        echo "                 ";
        $this->displayBlock('sidebar_right', $context, $blocks);
        // line 1137
        echo "
          
        </div>
      </div>

    </div>

  
</div>

<div id=\"non-responsive\" class=\"js-non-responsive\">
  <h1>Oh non !</h1>
  <p class=\"mt-3\">
    La version mobile de cette page n'est pas encore disponible.
  </p>
  <p class=\"mt-2\">
    En attendant que cette page soit adaptée au mobile, vous êtes invité à la consulter sur ordinateur.
  </p>
  <p class=\"mt-2\">
    Merci.
  </p>
  <a href=\"http://localhost/Boucherie/prestashop/admin085cxiqye/index.php?controller=AdminDashboard&amp;token=efb50c56c7e13ba2bc226d2687ee54ee\" class=\"btn btn-primary py-1 mt-3\">
    <i class=\"material-icons\">arrow_back</i>
    Précédent
  </a>
</div>
<div class=\"mobile-layer\"></div>

  <div id=\"footer\" class=\"bootstrap\">
    
</div>


  <div class=\"bootstrap\">
    <div class=\"modal fade\" id=\"modal_addons_connect\" tabindex=\"-1\">
\t<div class=\"modal-dialog modal-md\">
\t\t<div class=\"modal-content\">
\t\t\t\t\t\t<div class=\"modal-header\">
\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
\t\t\t\t<h4 class=\"modal-title\"><i class=\"icon-puzzle-piece\"></i> <a target=\"_blank\" href=\"https://addons.prestashop.com/?utm_source=back-office&utm_medium=modules&utm_campaign=back-office-FR&utm_content=download\">PrestaShop Addons</a></h4>
\t\t\t</div>
\t\t\t
\t\t\t<div class=\"modal-body\">
\t\t\t\t\t\t<!--start addons login-->
\t\t\t<form id=\"addons_login_form\" method=\"post\" >
\t\t\t\t<div>
\t\t\t\t\t<a href=\"https://addons.prestashop.com/fr/login?email=simon.cordier%40isen.yncrea.fr&amp;firstname=Simon&amp;lastname=Cordier&amp;website=http%3A%2F%2Flocalhost%2FBoucherie%2Fprestashop%2F&amp;utm_source=back-office&amp;utm_medium=connect-to-addons&amp;utm_campaign=back-office-FR&amp;utm_content=download#createnow\"><img class=\"img-responsive center-block\" src=\"/Boucherie/prestashop/admin085cxiqye/themes/default/img/prestashop-addons-logo.png\" alt=\"Logo PrestaShop Addons\"/></a>
\t\t\t\t\t<h3 class=\"text-center\">Connectez-vous à la place de marché de PrestaShop afin d'importer automatiquement tous vos achats.</h3>
\t\t\t\t\t<hr />
\t\t\t\t</div>
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<h4>Vous n'avez pas de compte ?</h4>
\t\t\t\t\t\t<p class='text-justify'>Les clés pour réussir votre boutique sont sur PrestaShop Addons ! Découvrez sur la place de marché officielle de PrestaShop plus de 3 500 modules et thèmes pour augmenter votre trafic, optimiser vos conversions, fidéliser vos clients et vous faciliter l’e-commerce.</p>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<h4>Connectez-vous à PrestaShop Addons</h4>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t<div class=\"input-group-prepend\">
\t\t\t\t\t\t\t\t\t<span class=\"input-group-text\"><i class=\"icon-user\"></i></span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<input id=\"username_addons\" name=\"username_addons\" type=\"text\" value=\"\" autocomplete=\"off\" class=\"form-control ac_input\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t<div class=\"input-group-prepend\">
\t\t\t\t\t\t\t\t\t<span class=\"input-group-text\"><i class=\"icon-key\"></i></span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<input id=\"password_addons\" name=\"password_addons\" type=\"password\" value=\"\" autocomplete=\"off\" class=\"form-control ac_input\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<a class=\"btn btn-link float-right _blank\" href=\"//addons.prestashop.com/fr/forgot-your-password\">Mot de passe oublié</a>
\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"row row-padding-top\">
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<a class=\"btn btn-default btn-block btn-lg _blank\" href=\"https://addons.prestashop.com/fr/login?email=simon.cordier%40isen.yncrea.fr&amp;firstname=Simon&amp;lastname=Cordier&amp;website=http%3A%2F%2Flocalhost%2FBoucherie%2Fprestashop%2F&amp;utm_source=back-office&amp;utm_medium=connect-to-addons&amp;utm_campaign=back-office-FR&amp;utm_content=download#createnow\">
\t\t\t\t\t\t\t\tCréer un compte
\t\t\t\t\t\t\t\t<i class=\"icon-external-link\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<button id=\"addons_login_button\" class=\"btn btn-primary btn-block btn-lg\" type=\"submit\">
\t\t\t\t\t\t\t\t<i class=\"icon-unlock\"></i> Connexion
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div id=\"addons_loading\" class=\"help-block\"></div>

\t\t\t</form>
\t\t\t<!--end addons login-->
\t\t\t</div>


\t\t\t\t\t</div>
\t</div>
</div>

  </div>

";
        // line 1246
        $this->displayBlock('javascripts', $context, $blocks);
        $this->displayBlock('extra_javascripts', $context, $blocks);
        $this->displayBlock('translate_javascripts', $context, $blocks);
        echo "</body>
</html>";
    }

    // line 82
    public function block_stylesheets($context, array $blocks = array())
    {
    }

    public function block_extra_stylesheets($context, array $blocks = array())
    {
    }

    // line 1133
    public function block_content_header($context, array $blocks = array())
    {
    }

    // line 1134
    public function block_content($context, array $blocks = array())
    {
    }

    // line 1135
    public function block_content_footer($context, array $blocks = array())
    {
    }

    // line 1136
    public function block_sidebar_right($context, array $blocks = array())
    {
    }

    // line 1246
    public function block_javascripts($context, array $blocks = array())
    {
    }

    public function block_extra_javascripts($context, array $blocks = array())
    {
    }

    public function block_translate_javascripts($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "__string_template__77cf24c2ee57e2bea5643d1d68394a695a54038ad19e5aabb187369e6acfd1c3";
    }

    public function getDebugInfo()
    {
        return array (  1325 => 1246,  1320 => 1136,  1315 => 1135,  1310 => 1134,  1305 => 1133,  1296 => 82,  1288 => 1246,  1177 => 1137,  1174 => 1136,  1171 => 1135,  1168 => 1134,  1166 => 1133,  111 => 82,  28 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "__string_template__77cf24c2ee57e2bea5643d1d68394a695a54038ad19e5aabb187369e6acfd1c3", "");
    }
}
