<?php

/* backend.html.twig */
class __TwigTemplate_74271b0fff475e602bcaee0212f22d7983306e2a3233bdcae632762203174cd4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "backend.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "backend.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">

<head>
    <!-- Required meta tags-->
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <meta name=\"description\" content=\"au theme template\">
    <meta name=\"author\" content=\"Hau Nguyen\">
    <meta name=\"keywords\" content=\"au theme template\">

    <!-- Title Page-->
    <title>Dashboard</title>
";
        // line 14
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 33
        echo "

</head>
<body class=\"animsition\">
<div class=\"page-wrapper\">
    <!-- HEADER MOBILE-->
    <header class=\"header-mobile d-block d-lg-none\">
        <div class=\"header-mobile__bar\">
            <div class=\"container-fluid\">
                <div class=\"header-mobile-inner\">
                    <a class=\"logo\" href=\"index.html\">
                        <img src=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/icon/logo.png"), "html", null, true);
        echo "\" alt=\"CoolAdmin\" />
                    </a>
                    <button class=\"hamburger hamburger--slider\" type=\"button\">
                            <span class=\"hamburger-box\">
                                <span class=\"hamburger-inner\"></span>
                            </span>
                    </button>
                </div>
            </div>
        </div>
        <nav class=\"navbar-mobile\">
            <div class=\"container-fluid\">
                <ul class=\"navbar-mobile__list list-unstyled\">
                    <li class=\"has-sub\">
                        <a class=\"js-arrow\" href=\"#\">
                            <i class=\"fas fa-tachometer-alt\"></i>Dashboard</a>
                        <ul class=\"navbar-mobile-sub__list list-unstyled js-sub-list\">
                            <li>
                                <a href=\"index.html\">Dashboard 1</a>
                            </li>
                            <li>
                                <a href=\"index2.html\">Dashboard 2</a>
                            </li>
                            <li>
                                <a href=\"index3.html\">Dashboard 3</a>
                            </li>
                            <li>
                                <a href=\"index4.html\">Dashboard 4</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href=\"chart.html\">
                            <i class=\"fas fa-chart-bar\"></i>Charts</a>
                    </li>
                    <li>
                        <a href=\"table.html\">
                            <i class=\"fas fa-table\"></i>Tables</a>
                    </li>
                    <li>
                        <a href=\"form.html\">
                            <i class=\"far fa-check-square\"></i>Forms</a>
                    </li>
                    <li>
                        <a href=\"#\">
                            <i class=\"fas fa-calendar-alt\"></i>Calendar</a>
                    </li>
                    <li>
                        <a href=\"map.html\">
                            <i class=\"fas fa-map-marker-alt\"></i>Maps</a>
                    </li>
                    <li class=\"has-sub\">
                        <a class=\"js-arrow\" href=\"#\">
                            <i class=\"fas fa-copy\"></i>Pages</a>
                        <ul class=\"navbar-mobile-sub__list list-unstyled js-sub-list\">
                            <li>
                                <a href=\"login.html\">Login</a>
                            </li>
                            <li>
                                <a href=\"register.html\">Register</a>
                            </li>
                            <li>
                                <a href=\"forget-pass.html\">Forget Password</a>
                            </li>
                        </ul>
                    </li>
                    <li class=\"has-sub\">
                        <a class=\"js-arrow\" href=\"#\">
                            <i class=\"fas fa-desktop\"></i>UI Elements</a>
                        <ul class=\"navbar-mobile-sub__list list-unstyled js-sub-list\">
                            <li>
                                <a href=\"button.html\">Button</a>
                            </li>
                            <li>
                                <a href=\"badge.html\">Badges</a>
                            </li>
                            <li>
                                <a href=\"tab.html\">Tabs</a>
                            </li>
                            <li>
                                <a href=\"card.html\">Cards</a>
                            </li>
                            <li>
                                <a href=\"alert.html\">Alerts</a>
                            </li>
                            <li>
                                <a href=\"progress-bar.html\">Progress Bars</a>
                            </li>
                            <li>
                                <a href=\"modal.html\">Modals</a>
                            </li>
                            <li>
                                <a href=\"switch.html\">Switchs</a>
                            </li>
                            <li>
                                <a href=\"grid.html\">Grids</a>
                            </li>
                            <li>
                                <a href=\"fontawesome.html\">Fontawesome Icon</a>
                            </li>
                            <li>
                                <a href=\"typo.html\">Typography</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    <!-- END HEADER MOBILE-->

    <!-- MENU SIDEBAR-->


    <aside class=\"menu-sidebar d-none d-lg-block\">
        <div class=\"logo\">
            <a href=\"#\">
                <img src=\"";
        // line 161
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/icon/logo.png"), "html", null, true);
        echo "\" alt=\"Cool Admin\" />
            </a>
        </div>
        <div class=\"menu-sidebar__content js-scrollbar1\">
            <nav class=\"navbar-sidebar\">
                <ul class=\"list-unstyled navbar__list\">
                    <li class=\"active has-sub\">
                        <a class=\"js-arrow\" href=\"#\">
                            <i class=\"fas fa-tachometer-alt\"></i>Dashboard</a>
                        <ul class=\"list-unstyled navbar__sub-list js-sub-list\">
                            <li>
                                <a href=\"index.html\">Dashboard 1</a>
                            </li>
                            <li>
                                <a href=\"index2.html\">Dashboard 2</a>
                            </li>
                            <li>
                                <a href=\"index3.html\">Dashboard 3</a>
                            </li>
                            <li>
                                <a href=\"index4.html\">Dashboard 4</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href=\"chart.html\">
                            <i class=\"fas fa-chart-bar\"></i>Charts</a>
                    </li>
                    <li>
                        <a href=\"table.html\">
                            <i class=\"fas fa-table\"></i>Tables</a>
                    </li>
                    <li>
                        <a href=\"form.html\">
                            <i class=\"far fa-check-square\"></i>Forms</a>
                    </li>
                    <li>
                        <a href=\"#\">
                            <i class=\"fas fa-calendar-alt\"></i>Calendar</a>
                    </li>
                    <li>
                        <a href=\"map.html\">
                            <i class=\"fas fa-map-marker-alt\"></i>Maps</a>
                    </li>
                    <li class=\"has-sub\">
                        <a class=\"js-arrow\" href=\"#\">
                            <i class=\"fas fa-copy\"></i>Pages</a>
                        <ul class=\"list-unstyled navbar__sub-list js-sub-list\">
                            <li>
                                <a href=\"login.html\">Login</a>
                            </li>
                            <li>
                                <a href=\"register.html\">Register</a>
                            </li>
                            <li>
                                <a href=\"forget-pass.html\">Forget Password</a>
                            </li>
                        </ul>
                    </li>
                    <li class=\"has-sub\">
                        <a class=\"js-arrow\" href=\"#\">
                            <i class=\"fas fa-desktop\"></i>UI Elements</a>
                        <ul class=\"list-unstyled navbar__sub-list js-sub-list\">
                            <li>
                                <a href=\"button.html\">Button</a>
                            </li>
                            <li>
                                <a href=\"badge.html\">Badges</a>
                            </li>
                            <li>
                                <a href=\"tab.html\">Tabs</a>
                            </li>
                            <li>
                                <a href=\"card.html\">Cards</a>
                            </li>
                            <li>
                                <a href=\"alert.html\">Alerts</a>
                            </li>
                            <li>
                                <a href=\"progress-bar.html\">Progress Bars</a>
                            </li>
                            <li>
                                <a href=\"modal.html\">Modals</a>
                            </li>
                            <li>
                                <a href=\"switch.html\">Switchs</a>
                            </li>
                            <li>
                                <a href=\"grid.html\">Grids</a>
                            </li>
                            <li>
                                <a href=\"fontawesome.html\">Fontawesome Icon</a>
                            </li>
                            <li>
                                <a href=\"typo.html\">Typography</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </nav>
        </div>
    </aside>
    <!-- END MENU SIDEBAR-->

    <!-- PAGE CONTAINER-->
    <div class=\"page-container\">
        <!-- HEADER DESKTOP-->
        <header class=\"header-desktop\">
            <div class=\"section__content section__content--p30\">
                <div class=\"container-fluid\">
                    <div class=\"header-wrap\">
                        <form class=\"form-header\" action=\"\" method=\"POST\">
                            <input class=\"au-input au-input--xl\" type=\"text\" name=\"search\" placeholder=\"Search for datas &amp; reports...\" />
                            <button class=\"au-btn--submit\" type=\"submit\">
                                <i class=\"zmdi zmdi-search\"></i>
                            </button>
                        </form>
                        <div class=\"header-button\">
                            <div class=\"noti-wrap\">
                                <div class=\"noti__item js-item-menu\">
                                    <i class=\"zmdi zmdi-comment-more\"></i>
                                    <span class=\"quantity\">1</span>
                                    <div class=\"mess-dropdown js-dropdown\">
                                        <div class=\"mess__title\">
                                            <p>You have 2 news message</p>
                                        </div>
                                        <div class=\"mess__item\">
                                            <div class=\"image img-cir img-40\">
                                                <img src=\"";
        // line 289
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/icon/avatar-06.jpg"), "html", null, true);
        echo "\" alt=\"Michelle Moreno\" />
                                            </div>
                                            <div class=\"content\">
                                                <h6>Michelle Moreno</h6>
                                                <p>Have sent a photo</p>
                                                <span class=\"time\">3 min ago</span>
                                            </div>
                                        </div>
                                        <div class=\"mess__item\">
                                            <div class=\"image img-cir img-40\">
                                                <img src=\"";
        // line 299
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/icon/avatar-04.jpg"), "html", null, true);
        echo "\" alt=\"Diane Myers\" />
                                            </div>
                                            <div class=\"content\">
                                                <h6>Diane Myers</h6>
                                                <p>You are now connected on message</p>
                                                <span class=\"time\">Yesterday</span>
                                            </div>
                                        </div>
                                        <div class=\"mess__footer\">
                                            <a href=\"#\">View all messages</a>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"noti__item js-item-menu\">
                                    <i class=\"zmdi zmdi-email\"></i>
                                    <span class=\"quantity\">1</span>
                                    <div class=\"email-dropdown js-dropdown\">
                                        <div class=\"email__title\">
                                            <p>You have 3 New Emails</p>
                                        </div>
                                        <div class=\"email__item\">
                                            <div class=\"image img-cir img-40\">
                                                <img src=\"";
        // line 321
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/icon/avatar-06.jpg"), "html", null, true);
        echo "\" alt=\"Cynthia Harvey\" />
                                            </div>
                                            <div class=\"content\">
                                                <p>Meeting about new dashboard...</p>
                                                <span>Cynthia Harvey, 3 min ago</span>
                                            </div>
                                        </div>
                                        <div class=\"email__item\">
                                            <div class=\"image img-cir img-40\">
                                                <img src=\"";
        // line 330
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/icon/avatar-05.jpg"), "html", null, true);
        echo "\" alt=\"Cynthia Harvey\" />
                                            </div>
                                            <div class=\"content\">
                                                <p>Meeting about new dashboard...</p>
                                                <span>Cynthia Harvey, Yesterday</span>
                                            </div>
                                        </div>
                                        <div class=\"email__item\">
                                            <div class=\"image img-cir img-40\">
                                                <img src=\"";
        // line 339
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/icon/avatar-04.jpg"), "html", null, true);
        echo "\" alt=\"Cynthia Harvey\" />
                                            </div>
                                            <div class=\"content\">
                                                <p>Meeting about new dashboard...</p>
                                                <span>Cynthia Harvey, April 12,,2018</span>
                                            </div>
                                        </div>
                                        <div class=\"email__footer\">
                                            <a href=\"#\">See all emails</a>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"noti__item js-item-menu\">
                                    <i class=\"zmdi zmdi-notifications\"></i>
                                    <span class=\"quantity\">3</span>
                                    <div class=\"notifi-dropdown js-dropdown\">
                                        <div class=\"notifi__title\">
                                            <p>You have 3 Notifications</p>
                                        </div>
                                        <div class=\"notifi__item\">
                                            <div class=\"bg-c1 img-cir img-40\">
                                                <i class=\"zmdi zmdi-email-open\"></i>
                                            </div>
                                            <div class=\"content\">
                                                <p>You got a email notification</p>
                                                <span class=\"date\">April 12, 2018 06:50</span>
                                            </div>
                                        </div>
                                        <div class=\"notifi__item\">
                                            <div class=\"bg-c2 img-cir img-40\">
                                                <i class=\"zmdi zmdi-account-box\"></i>
                                            </div>
                                            <div class=\"content\">
                                                <p>Your account has been blocked</p>
                                                <span class=\"date\">April 12, 2018 06:50</span>
                                            </div>
                                        </div>
                                        <div class=\"notifi__item\">
                                            <div class=\"bg-c3 img-cir img-40\">
                                                <i class=\"zmdi zmdi-file-text\"></i>
                                            </div>
                                            <div class=\"content\">
                                                <p>You got a new file</p>
                                                <span class=\"date\">April 12, 2018 06:50</span>
                                            </div>
                                        </div>
                                        <div class=\"notifi__footer\">
                                            <a href=\"#\">All notifications</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=\"account-wrap\">
                                <div class=\"account-item clearfix js-item-menu\">
                                    <div class=\"image\">
                                        <img src=\"";
        // line 394
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/icon/avatar-01.jpg"), "html", null, true);
        echo "\" alt=\"John Doe\" />
                                    </div>
                                    <div class=\"content\">
                                        <a class=\"js-acc-btn\" href=\"#\">john doe</a>
                                    </div>
                                    <div class=\"account-dropdown js-dropdown\">
                                        <div class=\"info clearfix\">
                                            <div class=\"image\">
                                                <a href=\"#\">
                                                    <img src=\"";
        // line 403
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/icon/avatar-01.jpg"), "html", null, true);
        echo "\" alt=\"John Doe\" />
                                                </a>
                                            </div>
                                            <div class=\"content\">
                                                <h5 class=\"name\">
                                                    <a href=\"#\">john doe</a>
                                                </h5>
                                                <span class=\"email\">johndoe@example.com</span>
                                            </div>
                                        </div>
                                        <div class=\"account-dropdown__body\">
                                            <div class=\"account-dropdown__item\">
                                                <a href=\"#\">
                                                    <i class=\"zmdi zmdi-account\"></i>Account</a>
                                            </div>
                                            <div class=\"account-dropdown__item\">
                                                <a href=\"#\">
                                                    <i class=\"zmdi zmdi-settings\"></i>Setting</a>
                                            </div>
                                            <div class=\"account-dropdown__item\">
                                                <a href=\"#\">
                                                    <i class=\"zmdi zmdi-money-box\"></i>Billing</a>
                                            </div>
                                        </div>
                                        <div class=\"account-dropdown__footer\">
                                            <a href=\"#\">
                                                <i class=\"zmdi zmdi-power\"></i>Logout</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- HEADER DESKTOP-->
        ";
        // line 440
        $this->displayBlock('body', $context, $blocks);
        // line 1014
        echo "</html>
<!-- end document-->
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 14
    public function block_stylesheets($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 15
        echo "    ";
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "8025d47_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_8025d47_0") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/back/css/compiled/app_font-face_1.css");
            // line 30
            echo "        <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, ($context["asset_url"] ?? $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
    ";
            // asset "8025d47_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_8025d47_1") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/back/css/compiled/app_font-awesome.min_2.css");
            echo "        <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, ($context["asset_url"] ?? $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
    ";
            // asset "8025d47_2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_8025d47_2") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/back/css/compiled/app_fontawesome-all.min_3.css");
            echo "        <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, ($context["asset_url"] ?? $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
    ";
            // asset "8025d47_3"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_8025d47_3") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/back/css/compiled/app_material-design-iconic-font.min_4.css");
            echo "        <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, ($context["asset_url"] ?? $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
    ";
            // asset "8025d47_4"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_8025d47_4") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/back/css/compiled/app_bootstrap.min_5.css");
            echo "        <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, ($context["asset_url"] ?? $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
    ";
            // asset "8025d47_5"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_8025d47_5") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/back/css/compiled/app_animsition.min_6.css");
            echo "        <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, ($context["asset_url"] ?? $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
    ";
            // asset "8025d47_6"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_8025d47_6") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/back/css/compiled/app_bootstrap-progressbar-3.3.4.min_7.css");
            echo "        <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, ($context["asset_url"] ?? $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
    ";
            // asset "8025d47_7"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_8025d47_7") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/back/css/compiled/app_animate_8.css");
            echo "        <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, ($context["asset_url"] ?? $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
    ";
            // asset "8025d47_8"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_8025d47_8") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/back/css/compiled/app_hamburgers.min_9.css");
            echo "        <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, ($context["asset_url"] ?? $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
    ";
            // asset "8025d47_9"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_8025d47_9") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/back/css/compiled/app_slick_10.css");
            echo "        <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, ($context["asset_url"] ?? $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
    ";
            // asset "8025d47_10"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_8025d47_10") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/back/css/compiled/app_select2.min_11.css");
            echo "        <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, ($context["asset_url"] ?? $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
    ";
            // asset "8025d47_11"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_8025d47_11") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/back/css/compiled/app_perfect-scrollbar_12.css");
            echo "        <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, ($context["asset_url"] ?? $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
    ";
            // asset "8025d47_12"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_8025d47_12") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/back/css/compiled/app_theme_13.css");
            echo "        <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, ($context["asset_url"] ?? $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
    ";
        } else {
            // asset "8025d47"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_8025d47") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/back/css/compiled/app.css");
            echo "        <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, ($context["asset_url"] ?? $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
    ";
        }
        unset($context["asset_url"]);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 440
    public function block_body($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 441
        echo "        <!-- MAIN CONTENT-->
        <div class=\"main-content\">
            <div class=\"section__content section__content--p30\">
                <div class=\"container-fluid\">
                    <div class=\"row\">
                        <div class=\"col-md-12\">
                            <div class=\"overview-wrap\">
                                <h2 class=\"title-1\">overview</h2>
                                <button class=\"au-btn au-btn-icon au-btn--blue\">
                                    <i class=\"zmdi zmdi-plus\"></i>add item</button>
                            </div>
                        </div>
                    </div>
                    <div class=\"row m-t-25\">
                        <div class=\"col-sm-6 col-lg-3\">
                            <div class=\"overview-item overview-item--c1\">
                                <div class=\"overview__inner\">
                                    <div class=\"overview-box clearfix\">
                                        <div class=\"icon\">
                                            <i class=\"zmdi zmdi-account-o\"></i>
                                        </div>
                                        <div class=\"text\">
                                            <h2>10368</h2>
                                            <span>members online</span>
                                        </div>
                                    </div>
                                    <div class=\"overview-chart\">
                                        <canvas id=\"widgetChart1\"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-sm-6 col-lg-3\">
                            <div class=\"overview-item overview-item--c2\">
                                <div class=\"overview__inner\">
                                    <div class=\"overview-box clearfix\">
                                        <div class=\"icon\">
                                            <i class=\"zmdi zmdi-shopping-cart\"></i>
                                        </div>
                                        <div class=\"text\">
                                            <h2>388,688</h2>
                                            <span>items solid</span>
                                        </div>
                                    </div>
                                    <div class=\"overview-chart\">
                                        <canvas id=\"widgetChart2\"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-sm-6 col-lg-3\">
                            <div class=\"overview-item overview-item--c3\">
                                <div class=\"overview__inner\">
                                    <div class=\"overview-box clearfix\">
                                        <div class=\"icon\">
                                            <i class=\"zmdi zmdi-calendar-note\"></i>
                                        </div>
                                        <div class=\"text\">
                                            <h2>1,086</h2>
                                            <span>this week</span>
                                        </div>
                                    </div>
                                    <div class=\"overview-chart\">
                                        <canvas id=\"widgetChart3\"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-sm-6 col-lg-3\">
                            <div class=\"overview-item overview-item--c4\">
                                <div class=\"overview__inner\">
                                    <div class=\"overview-box clearfix\">
                                        <div class=\"icon\">
                                            <i class=\"zmdi zmdi-money\"></i>
                                        </div>
                                        <div class=\"text\">
                                            <h2>\$1,060,386</h2>
                                            <span>total earnings</span>
                                        </div>
                                    </div>
                                    <div class=\"overview-chart\">
                                        <canvas id=\"widgetChart4\"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"row\">
                        <div class=\"col-lg-6\">
                            <div class=\"au-card recent-report\">
                                <div class=\"au-card-inner\">
                                    <h3 class=\"title-2\">recent reports</h3>
                                    <div class=\"chart-info\">
                                        <div class=\"chart-info__left\">
                                            <div class=\"chart-note\">
                                                <span class=\"dot dot--blue\"></span>
                                                <span>products</span>
                                            </div>
                                            <div class=\"chart-note mr-0\">
                                                <span class=\"dot dot--green\"></span>
                                                <span>services</span>
                                            </div>
                                        </div>
                                        <div class=\"chart-info__right\">
                                            <div class=\"chart-statis\">
                                                    <span class=\"index incre\">
                                                        <i class=\"zmdi zmdi-long-arrow-up\"></i>25%</span>
                                                <span class=\"label\">products</span>
                                            </div>
                                            <div class=\"chart-statis mr-0\">
                                                    <span class=\"index decre\">
                                                        <i class=\"zmdi zmdi-long-arrow-down\"></i>10%</span>
                                                <span class=\"label\">services</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"recent-report__chart\">
                                        <canvas id=\"recent-rep-chart\"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-lg-6\">
                            <div class=\"au-card chart-percent-card\">
                                <div class=\"au-card-inner\">
                                    <h3 class=\"title-2 tm-b-5\">char by %</h3>
                                    <div class=\"row no-gutters\">
                                        <div class=\"col-xl-6\">
                                            <div class=\"chart-note-wrap\">
                                                <div class=\"chart-note mr-0 d-block\">
                                                    <span class=\"dot dot--blue\"></span>
                                                    <span>products</span>
                                                </div>
                                                <div class=\"chart-note mr-0 d-block\">
                                                    <span class=\"dot dot--red\"></span>
                                                    <span>services</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"col-xl-6\">
                                            <div class=\"percent-chart\">
                                                <canvas id=\"percent-chart\"></canvas>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"row\">
                        <div class=\"col-lg-9\">
                            <h2 class=\"title-1 m-b-25\">Earnings By Items</h2>
                            <div class=\"table-responsive table--no-card m-b-40\">
                                <table class=\"table table-borderless table-striped table-earning\">
                                    <thead>
                                    <tr>
                                        <th>date</th>
                                        <th>order ID</th>
                                        <th>name</th>
                                        <th class=\"text-right\">price</th>
                                        <th class=\"text-right\">quantity</th>
                                        <th class=\"text-right\">total</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>2018-09-29 05:57</td>
                                        <td>100398</td>
                                        <td>iPhone X 64Gb Grey</td>
                                        <td class=\"text-right\">\$999.00</td>
                                        <td class=\"text-right\">1</td>
                                        <td class=\"text-right\">\$999.00</td>
                                    </tr>
                                    <tr>
                                        <td>2018-09-28 01:22</td>
                                        <td>100397</td>
                                        <td>Samsung S8 Black</td>
                                        <td class=\"text-right\">\$756.00</td>
                                        <td class=\"text-right\">1</td>
                                        <td class=\"text-right\">\$756.00</td>
                                    </tr>
                                    <tr>
                                        <td>2018-09-27 02:12</td>
                                        <td>100396</td>
                                        <td>Game Console Controller</td>
                                        <td class=\"text-right\">\$22.00</td>
                                        <td class=\"text-right\">2</td>
                                        <td class=\"text-right\">\$44.00</td>
                                    </tr>
                                    <tr>
                                        <td>2018-09-26 23:06</td>
                                        <td>100395</td>
                                        <td>iPhone X 256Gb Black</td>
                                        <td class=\"text-right\">\$1199.00</td>
                                        <td class=\"text-right\">1</td>
                                        <td class=\"text-right\">\$1199.00</td>
                                    </tr>
                                    <tr>
                                        <td>2018-09-25 19:03</td>
                                        <td>100393</td>
                                        <td>USB 3.0 Cable</td>
                                        <td class=\"text-right\">\$10.00</td>
                                        <td class=\"text-right\">3</td>
                                        <td class=\"text-right\">\$30.00</td>
                                    </tr>
                                    <tr>
                                        <td>2018-09-29 05:57</td>
                                        <td>100392</td>
                                        <td>Smartwatch 4.0 LTE Wifi</td>
                                        <td class=\"text-right\">\$199.00</td>
                                        <td class=\"text-right\">6</td>
                                        <td class=\"text-right\">\$1494.00</td>
                                    </tr>
                                    <tr>
                                        <td>2018-09-24 19:10</td>
                                        <td>100391</td>
                                        <td>Camera C430W 4k</td>
                                        <td class=\"text-right\">\$699.00</td>
                                        <td class=\"text-right\">1</td>
                                        <td class=\"text-right\">\$699.00</td>
                                    </tr>
                                    <tr>
                                        <td>2018-09-22 00:43</td>
                                        <td>100393</td>
                                        <td>USB 3.0 Cable</td>
                                        <td class=\"text-right\">\$10.00</td>
                                        <td class=\"text-right\">3</td>
                                        <td class=\"text-right\">\$30.00</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class=\"col-lg-3\">
                            <h2 class=\"title-1 m-b-25\">Top countries</h2>
                            <div class=\"au-card au-card--bg-blue au-card-top-countries m-b-40\">
                                <div class=\"au-card-inner\">
                                    <div class=\"table-responsive\">
                                        <table class=\"table table-top-countries\">
                                            <tbody>
                                            <tr>
                                                <td>United States</td>
                                                <td class=\"text-right\">\$119,366.96</td>
                                            </tr>
                                            <tr>
                                                <td>Australia</td>
                                                <td class=\"text-right\">\$70,261.65</td>
                                            </tr>
                                            <tr>
                                                <td>United Kingdom</td>
                                                <td class=\"text-right\">\$46,399.22</td>
                                            </tr>
                                            <tr>
                                                <td>Turkey</td>
                                                <td class=\"text-right\">\$35,364.90</td>
                                            </tr>
                                            <tr>
                                                <td>Germany</td>
                                                <td class=\"text-right\">\$20,366.96</td>
                                            </tr>
                                            <tr>
                                                <td>France</td>
                                                <td class=\"text-right\">\$10,366.96</td>
                                            </tr>
                                            <tr>
                                                <td>Australia</td>
                                                <td class=\"text-right\">\$5,366.96</td>
                                            </tr>
                                            <tr>
                                                <td>Italy</td>
                                                <td class=\"text-right\">\$1639.32</td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"row\">
                        <div class=\"col-lg-6\">
                            <div class=\"au-card au-card--no-shadow au-card--no-pad m-b-40\">
                                <div class=\"au-card-title\" style=\"background-image:url('images/bg-title-01.jpg');\">
                                    <div class=\"bg-overlay bg-overlay--blue\"></div>
                                    <h3>
                                        <i class=\"zmdi zmdi-account-calendar\"></i>26 April, 2018</h3>
                                    <button class=\"au-btn-plus\">
                                        <i class=\"zmdi zmdi-plus\"></i>
                                    </button>
                                </div>
                                <div class=\"au-task js-list-load\">
                                    <div class=\"au-task__title\">
                                        <p>Tasks for John Doe</p>
                                    </div>
                                    <div class=\"au-task-list js-scrollbar3\">
                                        <div class=\"au-task__item au-task__item--danger\">
                                            <div class=\"au-task__item-inner\">
                                                <h5 class=\"task\">
                                                    <a href=\"#\">Meeting about plan for Admin Template 2018</a>
                                                </h5>
                                                <span class=\"time\">10:00 AM</span>
                                            </div>
                                        </div>
                                        <div class=\"au-task__item au-task__item--warning\">
                                            <div class=\"au-task__item-inner\">
                                                <h5 class=\"task\">
                                                    <a href=\"#\">Create new task for Dashboard</a>
                                                </h5>
                                                <span class=\"time\">11:00 AM</span>
                                            </div>
                                        </div>
                                        <div class=\"au-task__item au-task__item--primary\">
                                            <div class=\"au-task__item-inner\">
                                                <h5 class=\"task\">
                                                    <a href=\"#\">Meeting about plan for Admin Template 2018</a>
                                                </h5>
                                                <span class=\"time\">02:00 PM</span>
                                            </div>
                                        </div>
                                        <div class=\"au-task__item au-task__item--success\">
                                            <div class=\"au-task__item-inner\">
                                                <h5 class=\"task\">
                                                    <a href=\"#\">Create new task for Dashboard</a>
                                                </h5>
                                                <span class=\"time\">03:30 PM</span>
                                            </div>
                                        </div>
                                        <div class=\"au-task__item au-task__item--danger js-load-item\">
                                            <div class=\"au-task__item-inner\">
                                                <h5 class=\"task\">
                                                    <a href=\"#\">Meeting about plan for Admin Template 2018</a>
                                                </h5>
                                                <span class=\"time\">10:00 AM</span>
                                            </div>
                                        </div>
                                        <div class=\"au-task__item au-task__item--warning js-load-item\">
                                            <div class=\"au-task__item-inner\">
                                                <h5 class=\"task\">
                                                    <a href=\"#\">Create new task for Dashboard</a>
                                                </h5>
                                                <span class=\"time\">11:00 AM</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"au-task__footer\">
                                        <button class=\"au-btn au-btn-load js-load-btn\">load more</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-lg-6\">
                            <div class=\"au-card au-card--no-shadow au-card--no-pad m-b-40\">
                                <div class=\"au-card-title\" style=\"background-image:url('images/bg-title-02.jpg');\">
                                    <div class=\"bg-overlay bg-overlay--blue\"></div>
                                    <h3>
                                        <i class=\"zmdi zmdi-comment-text\"></i>New Messages</h3>
                                    <button class=\"au-btn-plus\">
                                        <i class=\"zmdi zmdi-plus\"></i>
                                    </button>
                                </div>
                                <div class=\"au-inbox-wrap js-inbox-wrap\">
                                    <div class=\"au-message js-list-load\">
                                        <div class=\"au-message__noti\">
                                            <p>You Have
                                                <span>2</span>

                                                new messages
                                            </p>
                                        </div>
                                        <div class=\"au-message-list\">
                                            <div class=\"au-message__item unread\">
                                                <div class=\"au-message__item-inner\">
                                                    <div class=\"au-message__item-text\">
                                                        <div class=\"avatar-wrap\">
                                                            <div class=\"avatar\">
                                                                <img src=\"";
        // line 816
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/icon/avatar-02.jpg"), "html", null, true);
        echo "\" alt=\"John Smith\">
                                                            </div>
                                                        </div>
                                                        <div class=\"text\">
                                                            <h5 class=\"name\">John Smith</h5>
                                                            <p>Have sent a photo</p>
                                                        </div>
                                                    </div>
                                                    <div class=\"au-message__item-time\">
                                                        <span>12 Min ago</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=\"au-message__item unread\">
                                                <div class=\"au-message__item-inner\">
                                                    <div class=\"au-message__item-text\">
                                                        <div class=\"avatar-wrap online\">
                                                            <div class=\"avatar\">
                                                                <img src=\"";
        // line 834
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/icon/avatar-03.jpg"), "html", null, true);
        echo "\" alt=\"Nicholas Martinez\">
                                                            </div>
                                                        </div>
                                                        <div class=\"text\">
                                                            <h5 class=\"name\">Nicholas Martinez</h5>
                                                            <p>You are now connected on message</p>
                                                        </div>
                                                    </div>
                                                    <div class=\"au-message__item-time\">
                                                        <span>11:00 PM</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=\"au-message__item\">
                                                <div class=\"au-message__item-inner\">
                                                    <div class=\"au-message__item-text\">
                                                        <div class=\"avatar-wrap online\">
                                                            <div class=\"avatar\">
                                                                <img src=\"";
        // line 852
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/icon/avatar-04.jpg"), "html", null, true);
        echo "\" alt=\"Michelle Sims\">
                                                            </div>
                                                        </div>
                                                        <div class=\"text\">
                                                            <h5 class=\"name\">Michelle Sims</h5>
                                                            <p>Lorem ipsum dolor sit amet</p>
                                                        </div>
                                                    </div>
                                                    <div class=\"au-message__item-time\">
                                                        <span>Yesterday</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=\"au-message__item\">
                                                <div class=\"au-message__item-inner\">
                                                    <div class=\"au-message__item-text\">
                                                        <div class=\"avatar-wrap\">
                                                            <div class=\"avatar\">
                                                                <img src=\"";
        // line 870
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/icon/avatar-05.jpg"), "html", null, true);
        echo "\" alt=\"Michelle Sims\">
                                                            </div>
                                                        </div>
                                                        <div class=\"text\">
                                                            <h5 class=\"name\">Michelle Sims</h5>
                                                            <p>Purus feugiat finibus</p>
                                                        </div>
                                                    </div>
                                                    <div class=\"au-message__item-time\">
                                                        <span>Sunday</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=\"au-message__item js-load-item\">
                                                <div class=\"au-message__item-inner\">
                                                    <div class=\"au-message__item-text\">
                                                        <div class=\"avatar-wrap online\">
                                                            <div class=\"avatar\">
                                                                <img src=\"";
        // line 888
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/icon/avatar-04.jpg"), "html", null, true);
        echo "\" alt=\"Michelle Sims\">
                                                            </div>
                                                        </div>
                                                        <div class=\"text\">
                                                            <h5 class=\"name\">Michelle Sims</h5>
                                                            <p>Lorem ipsum dolor sit amet</p>
                                                        </div>
                                                    </div>
                                                    <div class=\"au-message__item-time\">
                                                        <span>Yesterday</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=\"au-message__item js-load-item\">
                                                <div class=\"au-message__item-inner\">
                                                    <div class=\"au-message__item-text\">
                                                        <div class=\"avatar-wrap\">
                                                            <div class=\"avatar\">
                                                                <img src=\"";
        // line 906
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/icon/avatar-05.jpg"), "html", null, true);
        echo "\" alt=\"Michelle Sims\">
                                                            </div>
                                                        </div>
                                                        <div class=\"text\">
                                                            <h5 class=\"name\">Michelle Sims</h5>
                                                            <p>Purus feugiat finibus</p>
                                                        </div>
                                                    </div>
                                                    <div class=\"au-message__item-time\">
                                                        <span>Sunday</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"au-message__footer\">
                                            <button class=\"au-btn au-btn-load js-load-btn\">load more</button>
                                        </div>
                                    </div>
                                    <div class=\"au-chat\">
                                        <div class=\"au-chat__title\">
                                            <div class=\"au-chat-info\">
                                                <div class=\"avatar-wrap online\">
                                                    <div class=\"avatar avatar--small\">
                                                        <img src=\"";
        // line 929
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/icon/avatar-02.jpg"), "html", null, true);
        echo "\" alt=\"John Smith\">
                                                    </div>
                                                </div>
                                                <span class=\"nick\">
                                                        <a href=\"#\">John Smith</a>
                                                    </span>
                                            </div>
                                        </div>
                                        <div class=\"au-chat__content\">
                                            <div class=\"recei-mess-wrap\">
                                                <span class=\"mess-time\">12 Min ago</span>
                                                <div class=\"recei-mess__inner\">
                                                    <div class=\"avatar avatar--tiny\">
                                                        <img src=\"";
        // line 942
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/icon/avatar-02.jpg"), "html", null, true);
        echo "\" alt=\"John Smith\">
                                                    </div>
                                                    <div class=\"recei-mess-list\">
                                                        <div class=\"recei-mess\">Lorem ipsum dolor sit amet, consectetur adipiscing elit non iaculis</div>
                                                        <div class=\"recei-mess\">Donec tempor, sapien ac viverra</div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=\"send-mess-wrap\">
                                                <span class=\"mess-time\">30 Sec ago</span>
                                                <div class=\"send-mess__inner\">
                                                    <div class=\"send-mess-list\">
                                                        <div class=\"send-mess\">Lorem ipsum dolor sit amet, consectetur adipiscing elit non iaculis</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"au-chat-textfield\">
                                            <form class=\"au-form-icon\">
                                                <input class=\"au-input au-input--full au-input--h65\" type=\"text\" placeholder=\"Type a message\">
                                                <button class=\"au-input-icon\">
                                                    <i class=\"zmdi zmdi-camera\"></i>
                                                </button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"row\">
                        <div class=\"col-md-12\">
                            <div class=\"copyright\">
                                <p>Copyright © 2018 Colorlib. All rights reserved. Template by <a href=\"https://colorlib.com\">Colorlib</a>.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END MAIN CONTENT-->
        <!-- END PAGE CONTAINER-->
    </div>

</div>

<!-- Jquery JS-->
<script src=\"back/vendor/jquery-3.2.1.min.js\"></script>
<!-- Bootstrap JS-->
<script src=\"back/vendor/bootstrap-4.1/popper.min.js\"></script>
<script src=\"back/vendor/bootstrap-4.1/bootstrap.min.js\"></script>
<!-- Vendor JS       -->
<script src=\"back/vendor/slick/slick.min.js\">
</script>
<script src=\"back/vendor/wow/wow.min.js\"></script>
<script src=\"back/vendor/animsition/animsition.min.js\"></script>
<script src=\"back/vendor/bootstrap-progressbar/bootstrap-progressbar.min.js\">
</script>
<script src=\"back/vendor/counter-up/jquery.waypoints.min.js\"></script>
<script src=\"back/vendor/counter-up/jquery.counterup.min.js\">
</script>
<script src=\"back/vendor/circle-progress/circle-progress.min.js\"></script>
<script src=\"back/vendor/perfect-scrollbar/perfect-scrollbar.js\"></script>
<script src=\"back/vendor/chartjs/Chart.bundle.min.js\"></script>
<script src=\"back/vendor/select2/select2.min.js\">
</script>

<!-- Main JS-->
<script src=\"back/js/main.js\"></script>

</body>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "backend.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1135 => 942,  1119 => 929,  1093 => 906,  1072 => 888,  1051 => 870,  1030 => 852,  1009 => 834,  988 => 816,  611 => 441,  602 => 440,  508 => 30,  503 => 15,  494 => 14,  482 => 1014,  480 => 440,  440 => 403,  428 => 394,  370 => 339,  358 => 330,  346 => 321,  321 => 299,  308 => 289,  177 => 161,  57 => 44,  44 => 33,  42 => 14,  27 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html lang=\"en\">

<head>
    <!-- Required meta tags-->
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <meta name=\"description\" content=\"au theme template\">
    <meta name=\"author\" content=\"Hau Nguyen\">
    <meta name=\"keywords\" content=\"au theme template\">

    <!-- Title Page-->
    <title>Dashboard</title>
{% block stylesheets %}
    {% stylesheets
        'back/css/font-face.css'
        'back/vendor/font-awesome-4.7/css/font-awesome.min.css'
        'back/vendor/font-awesome-5/css/fontawesome-all.min.css'
        'back/vendor/mdi-font/css/material-design-iconic-font.min.css'
        'back/vendor/bootstrap-4.1/bootstrap.min.css'
        'back/vendor/animsition/animsition.min.css'
        'back/vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css'
        'back/vendor/wow/animate.css'
        'back/vendor/css-hamburgers/hamburgers.min.css'
        'back/vendor/slick/slick.css'
        'back/vendor/select2/select2.min.css'
        'back/vendor/perfect-scrollbar/perfect-scrollbar.css'
        'back/css/theme.css'
        filter='cssrewrite' output='back/css/compiled/app.css' %}
        <link rel=\"stylesheet\" href=\"{{ asset_url }}\" />
    {% endstylesheets %}
{% endblock %}


</head>
<body class=\"animsition\">
<div class=\"page-wrapper\">
    <!-- HEADER MOBILE-->
    <header class=\"header-mobile d-block d-lg-none\">
        <div class=\"header-mobile__bar\">
            <div class=\"container-fluid\">
                <div class=\"header-mobile-inner\">
                    <a class=\"logo\" href=\"index.html\">
                        <img src=\"{{ asset('images/icon/logo.png') }}\" alt=\"CoolAdmin\" />
                    </a>
                    <button class=\"hamburger hamburger--slider\" type=\"button\">
                            <span class=\"hamburger-box\">
                                <span class=\"hamburger-inner\"></span>
                            </span>
                    </button>
                </div>
            </div>
        </div>
        <nav class=\"navbar-mobile\">
            <div class=\"container-fluid\">
                <ul class=\"navbar-mobile__list list-unstyled\">
                    <li class=\"has-sub\">
                        <a class=\"js-arrow\" href=\"#\">
                            <i class=\"fas fa-tachometer-alt\"></i>Dashboard</a>
                        <ul class=\"navbar-mobile-sub__list list-unstyled js-sub-list\">
                            <li>
                                <a href=\"index.html\">Dashboard 1</a>
                            </li>
                            <li>
                                <a href=\"index2.html\">Dashboard 2</a>
                            </li>
                            <li>
                                <a href=\"index3.html\">Dashboard 3</a>
                            </li>
                            <li>
                                <a href=\"index4.html\">Dashboard 4</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href=\"chart.html\">
                            <i class=\"fas fa-chart-bar\"></i>Charts</a>
                    </li>
                    <li>
                        <a href=\"table.html\">
                            <i class=\"fas fa-table\"></i>Tables</a>
                    </li>
                    <li>
                        <a href=\"form.html\">
                            <i class=\"far fa-check-square\"></i>Forms</a>
                    </li>
                    <li>
                        <a href=\"#\">
                            <i class=\"fas fa-calendar-alt\"></i>Calendar</a>
                    </li>
                    <li>
                        <a href=\"map.html\">
                            <i class=\"fas fa-map-marker-alt\"></i>Maps</a>
                    </li>
                    <li class=\"has-sub\">
                        <a class=\"js-arrow\" href=\"#\">
                            <i class=\"fas fa-copy\"></i>Pages</a>
                        <ul class=\"navbar-mobile-sub__list list-unstyled js-sub-list\">
                            <li>
                                <a href=\"login.html\">Login</a>
                            </li>
                            <li>
                                <a href=\"register.html\">Register</a>
                            </li>
                            <li>
                                <a href=\"forget-pass.html\">Forget Password</a>
                            </li>
                        </ul>
                    </li>
                    <li class=\"has-sub\">
                        <a class=\"js-arrow\" href=\"#\">
                            <i class=\"fas fa-desktop\"></i>UI Elements</a>
                        <ul class=\"navbar-mobile-sub__list list-unstyled js-sub-list\">
                            <li>
                                <a href=\"button.html\">Button</a>
                            </li>
                            <li>
                                <a href=\"badge.html\">Badges</a>
                            </li>
                            <li>
                                <a href=\"tab.html\">Tabs</a>
                            </li>
                            <li>
                                <a href=\"card.html\">Cards</a>
                            </li>
                            <li>
                                <a href=\"alert.html\">Alerts</a>
                            </li>
                            <li>
                                <a href=\"progress-bar.html\">Progress Bars</a>
                            </li>
                            <li>
                                <a href=\"modal.html\">Modals</a>
                            </li>
                            <li>
                                <a href=\"switch.html\">Switchs</a>
                            </li>
                            <li>
                                <a href=\"grid.html\">Grids</a>
                            </li>
                            <li>
                                <a href=\"fontawesome.html\">Fontawesome Icon</a>
                            </li>
                            <li>
                                <a href=\"typo.html\">Typography</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    <!-- END HEADER MOBILE-->

    <!-- MENU SIDEBAR-->


    <aside class=\"menu-sidebar d-none d-lg-block\">
        <div class=\"logo\">
            <a href=\"#\">
                <img src=\"{{ asset('images/icon/logo.png') }}\" alt=\"Cool Admin\" />
            </a>
        </div>
        <div class=\"menu-sidebar__content js-scrollbar1\">
            <nav class=\"navbar-sidebar\">
                <ul class=\"list-unstyled navbar__list\">
                    <li class=\"active has-sub\">
                        <a class=\"js-arrow\" href=\"#\">
                            <i class=\"fas fa-tachometer-alt\"></i>Dashboard</a>
                        <ul class=\"list-unstyled navbar__sub-list js-sub-list\">
                            <li>
                                <a href=\"index.html\">Dashboard 1</a>
                            </li>
                            <li>
                                <a href=\"index2.html\">Dashboard 2</a>
                            </li>
                            <li>
                                <a href=\"index3.html\">Dashboard 3</a>
                            </li>
                            <li>
                                <a href=\"index4.html\">Dashboard 4</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href=\"chart.html\">
                            <i class=\"fas fa-chart-bar\"></i>Charts</a>
                    </li>
                    <li>
                        <a href=\"table.html\">
                            <i class=\"fas fa-table\"></i>Tables</a>
                    </li>
                    <li>
                        <a href=\"form.html\">
                            <i class=\"far fa-check-square\"></i>Forms</a>
                    </li>
                    <li>
                        <a href=\"#\">
                            <i class=\"fas fa-calendar-alt\"></i>Calendar</a>
                    </li>
                    <li>
                        <a href=\"map.html\">
                            <i class=\"fas fa-map-marker-alt\"></i>Maps</a>
                    </li>
                    <li class=\"has-sub\">
                        <a class=\"js-arrow\" href=\"#\">
                            <i class=\"fas fa-copy\"></i>Pages</a>
                        <ul class=\"list-unstyled navbar__sub-list js-sub-list\">
                            <li>
                                <a href=\"login.html\">Login</a>
                            </li>
                            <li>
                                <a href=\"register.html\">Register</a>
                            </li>
                            <li>
                                <a href=\"forget-pass.html\">Forget Password</a>
                            </li>
                        </ul>
                    </li>
                    <li class=\"has-sub\">
                        <a class=\"js-arrow\" href=\"#\">
                            <i class=\"fas fa-desktop\"></i>UI Elements</a>
                        <ul class=\"list-unstyled navbar__sub-list js-sub-list\">
                            <li>
                                <a href=\"button.html\">Button</a>
                            </li>
                            <li>
                                <a href=\"badge.html\">Badges</a>
                            </li>
                            <li>
                                <a href=\"tab.html\">Tabs</a>
                            </li>
                            <li>
                                <a href=\"card.html\">Cards</a>
                            </li>
                            <li>
                                <a href=\"alert.html\">Alerts</a>
                            </li>
                            <li>
                                <a href=\"progress-bar.html\">Progress Bars</a>
                            </li>
                            <li>
                                <a href=\"modal.html\">Modals</a>
                            </li>
                            <li>
                                <a href=\"switch.html\">Switchs</a>
                            </li>
                            <li>
                                <a href=\"grid.html\">Grids</a>
                            </li>
                            <li>
                                <a href=\"fontawesome.html\">Fontawesome Icon</a>
                            </li>
                            <li>
                                <a href=\"typo.html\">Typography</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </nav>
        </div>
    </aside>
    <!-- END MENU SIDEBAR-->

    <!-- PAGE CONTAINER-->
    <div class=\"page-container\">
        <!-- HEADER DESKTOP-->
        <header class=\"header-desktop\">
            <div class=\"section__content section__content--p30\">
                <div class=\"container-fluid\">
                    <div class=\"header-wrap\">
                        <form class=\"form-header\" action=\"\" method=\"POST\">
                            <input class=\"au-input au-input--xl\" type=\"text\" name=\"search\" placeholder=\"Search for datas &amp; reports...\" />
                            <button class=\"au-btn--submit\" type=\"submit\">
                                <i class=\"zmdi zmdi-search\"></i>
                            </button>
                        </form>
                        <div class=\"header-button\">
                            <div class=\"noti-wrap\">
                                <div class=\"noti__item js-item-menu\">
                                    <i class=\"zmdi zmdi-comment-more\"></i>
                                    <span class=\"quantity\">1</span>
                                    <div class=\"mess-dropdown js-dropdown\">
                                        <div class=\"mess__title\">
                                            <p>You have 2 news message</p>
                                        </div>
                                        <div class=\"mess__item\">
                                            <div class=\"image img-cir img-40\">
                                                <img src=\"{{ asset('images/icon/avatar-06.jpg') }}\" alt=\"Michelle Moreno\" />
                                            </div>
                                            <div class=\"content\">
                                                <h6>Michelle Moreno</h6>
                                                <p>Have sent a photo</p>
                                                <span class=\"time\">3 min ago</span>
                                            </div>
                                        </div>
                                        <div class=\"mess__item\">
                                            <div class=\"image img-cir img-40\">
                                                <img src=\"{{ asset('images/icon/avatar-04.jpg') }}\" alt=\"Diane Myers\" />
                                            </div>
                                            <div class=\"content\">
                                                <h6>Diane Myers</h6>
                                                <p>You are now connected on message</p>
                                                <span class=\"time\">Yesterday</span>
                                            </div>
                                        </div>
                                        <div class=\"mess__footer\">
                                            <a href=\"#\">View all messages</a>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"noti__item js-item-menu\">
                                    <i class=\"zmdi zmdi-email\"></i>
                                    <span class=\"quantity\">1</span>
                                    <div class=\"email-dropdown js-dropdown\">
                                        <div class=\"email__title\">
                                            <p>You have 3 New Emails</p>
                                        </div>
                                        <div class=\"email__item\">
                                            <div class=\"image img-cir img-40\">
                                                <img src=\"{{ asset('images/icon/avatar-06.jpg') }}\" alt=\"Cynthia Harvey\" />
                                            </div>
                                            <div class=\"content\">
                                                <p>Meeting about new dashboard...</p>
                                                <span>Cynthia Harvey, 3 min ago</span>
                                            </div>
                                        </div>
                                        <div class=\"email__item\">
                                            <div class=\"image img-cir img-40\">
                                                <img src=\"{{ asset('images/icon/avatar-05.jpg') }}\" alt=\"Cynthia Harvey\" />
                                            </div>
                                            <div class=\"content\">
                                                <p>Meeting about new dashboard...</p>
                                                <span>Cynthia Harvey, Yesterday</span>
                                            </div>
                                        </div>
                                        <div class=\"email__item\">
                                            <div class=\"image img-cir img-40\">
                                                <img src=\"{{ asset('images/icon/avatar-04.jpg') }}\" alt=\"Cynthia Harvey\" />
                                            </div>
                                            <div class=\"content\">
                                                <p>Meeting about new dashboard...</p>
                                                <span>Cynthia Harvey, April 12,,2018</span>
                                            </div>
                                        </div>
                                        <div class=\"email__footer\">
                                            <a href=\"#\">See all emails</a>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"noti__item js-item-menu\">
                                    <i class=\"zmdi zmdi-notifications\"></i>
                                    <span class=\"quantity\">3</span>
                                    <div class=\"notifi-dropdown js-dropdown\">
                                        <div class=\"notifi__title\">
                                            <p>You have 3 Notifications</p>
                                        </div>
                                        <div class=\"notifi__item\">
                                            <div class=\"bg-c1 img-cir img-40\">
                                                <i class=\"zmdi zmdi-email-open\"></i>
                                            </div>
                                            <div class=\"content\">
                                                <p>You got a email notification</p>
                                                <span class=\"date\">April 12, 2018 06:50</span>
                                            </div>
                                        </div>
                                        <div class=\"notifi__item\">
                                            <div class=\"bg-c2 img-cir img-40\">
                                                <i class=\"zmdi zmdi-account-box\"></i>
                                            </div>
                                            <div class=\"content\">
                                                <p>Your account has been blocked</p>
                                                <span class=\"date\">April 12, 2018 06:50</span>
                                            </div>
                                        </div>
                                        <div class=\"notifi__item\">
                                            <div class=\"bg-c3 img-cir img-40\">
                                                <i class=\"zmdi zmdi-file-text\"></i>
                                            </div>
                                            <div class=\"content\">
                                                <p>You got a new file</p>
                                                <span class=\"date\">April 12, 2018 06:50</span>
                                            </div>
                                        </div>
                                        <div class=\"notifi__footer\">
                                            <a href=\"#\">All notifications</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=\"account-wrap\">
                                <div class=\"account-item clearfix js-item-menu\">
                                    <div class=\"image\">
                                        <img src=\"{{ asset('images/icon/avatar-01.jpg') }}\" alt=\"John Doe\" />
                                    </div>
                                    <div class=\"content\">
                                        <a class=\"js-acc-btn\" href=\"#\">john doe</a>
                                    </div>
                                    <div class=\"account-dropdown js-dropdown\">
                                        <div class=\"info clearfix\">
                                            <div class=\"image\">
                                                <a href=\"#\">
                                                    <img src=\"{{ asset('images/icon/avatar-01.jpg') }}\" alt=\"John Doe\" />
                                                </a>
                                            </div>
                                            <div class=\"content\">
                                                <h5 class=\"name\">
                                                    <a href=\"#\">john doe</a>
                                                </h5>
                                                <span class=\"email\">johndoe@example.com</span>
                                            </div>
                                        </div>
                                        <div class=\"account-dropdown__body\">
                                            <div class=\"account-dropdown__item\">
                                                <a href=\"#\">
                                                    <i class=\"zmdi zmdi-account\"></i>Account</a>
                                            </div>
                                            <div class=\"account-dropdown__item\">
                                                <a href=\"#\">
                                                    <i class=\"zmdi zmdi-settings\"></i>Setting</a>
                                            </div>
                                            <div class=\"account-dropdown__item\">
                                                <a href=\"#\">
                                                    <i class=\"zmdi zmdi-money-box\"></i>Billing</a>
                                            </div>
                                        </div>
                                        <div class=\"account-dropdown__footer\">
                                            <a href=\"#\">
                                                <i class=\"zmdi zmdi-power\"></i>Logout</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- HEADER DESKTOP-->
        {% block body %}
        <!-- MAIN CONTENT-->
        <div class=\"main-content\">
            <div class=\"section__content section__content--p30\">
                <div class=\"container-fluid\">
                    <div class=\"row\">
                        <div class=\"col-md-12\">
                            <div class=\"overview-wrap\">
                                <h2 class=\"title-1\">overview</h2>
                                <button class=\"au-btn au-btn-icon au-btn--blue\">
                                    <i class=\"zmdi zmdi-plus\"></i>add item</button>
                            </div>
                        </div>
                    </div>
                    <div class=\"row m-t-25\">
                        <div class=\"col-sm-6 col-lg-3\">
                            <div class=\"overview-item overview-item--c1\">
                                <div class=\"overview__inner\">
                                    <div class=\"overview-box clearfix\">
                                        <div class=\"icon\">
                                            <i class=\"zmdi zmdi-account-o\"></i>
                                        </div>
                                        <div class=\"text\">
                                            <h2>10368</h2>
                                            <span>members online</span>
                                        </div>
                                    </div>
                                    <div class=\"overview-chart\">
                                        <canvas id=\"widgetChart1\"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-sm-6 col-lg-3\">
                            <div class=\"overview-item overview-item--c2\">
                                <div class=\"overview__inner\">
                                    <div class=\"overview-box clearfix\">
                                        <div class=\"icon\">
                                            <i class=\"zmdi zmdi-shopping-cart\"></i>
                                        </div>
                                        <div class=\"text\">
                                            <h2>388,688</h2>
                                            <span>items solid</span>
                                        </div>
                                    </div>
                                    <div class=\"overview-chart\">
                                        <canvas id=\"widgetChart2\"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-sm-6 col-lg-3\">
                            <div class=\"overview-item overview-item--c3\">
                                <div class=\"overview__inner\">
                                    <div class=\"overview-box clearfix\">
                                        <div class=\"icon\">
                                            <i class=\"zmdi zmdi-calendar-note\"></i>
                                        </div>
                                        <div class=\"text\">
                                            <h2>1,086</h2>
                                            <span>this week</span>
                                        </div>
                                    </div>
                                    <div class=\"overview-chart\">
                                        <canvas id=\"widgetChart3\"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-sm-6 col-lg-3\">
                            <div class=\"overview-item overview-item--c4\">
                                <div class=\"overview__inner\">
                                    <div class=\"overview-box clearfix\">
                                        <div class=\"icon\">
                                            <i class=\"zmdi zmdi-money\"></i>
                                        </div>
                                        <div class=\"text\">
                                            <h2>\$1,060,386</h2>
                                            <span>total earnings</span>
                                        </div>
                                    </div>
                                    <div class=\"overview-chart\">
                                        <canvas id=\"widgetChart4\"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"row\">
                        <div class=\"col-lg-6\">
                            <div class=\"au-card recent-report\">
                                <div class=\"au-card-inner\">
                                    <h3 class=\"title-2\">recent reports</h3>
                                    <div class=\"chart-info\">
                                        <div class=\"chart-info__left\">
                                            <div class=\"chart-note\">
                                                <span class=\"dot dot--blue\"></span>
                                                <span>products</span>
                                            </div>
                                            <div class=\"chart-note mr-0\">
                                                <span class=\"dot dot--green\"></span>
                                                <span>services</span>
                                            </div>
                                        </div>
                                        <div class=\"chart-info__right\">
                                            <div class=\"chart-statis\">
                                                    <span class=\"index incre\">
                                                        <i class=\"zmdi zmdi-long-arrow-up\"></i>25%</span>
                                                <span class=\"label\">products</span>
                                            </div>
                                            <div class=\"chart-statis mr-0\">
                                                    <span class=\"index decre\">
                                                        <i class=\"zmdi zmdi-long-arrow-down\"></i>10%</span>
                                                <span class=\"label\">services</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"recent-report__chart\">
                                        <canvas id=\"recent-rep-chart\"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-lg-6\">
                            <div class=\"au-card chart-percent-card\">
                                <div class=\"au-card-inner\">
                                    <h3 class=\"title-2 tm-b-5\">char by %</h3>
                                    <div class=\"row no-gutters\">
                                        <div class=\"col-xl-6\">
                                            <div class=\"chart-note-wrap\">
                                                <div class=\"chart-note mr-0 d-block\">
                                                    <span class=\"dot dot--blue\"></span>
                                                    <span>products</span>
                                                </div>
                                                <div class=\"chart-note mr-0 d-block\">
                                                    <span class=\"dot dot--red\"></span>
                                                    <span>services</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"col-xl-6\">
                                            <div class=\"percent-chart\">
                                                <canvas id=\"percent-chart\"></canvas>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"row\">
                        <div class=\"col-lg-9\">
                            <h2 class=\"title-1 m-b-25\">Earnings By Items</h2>
                            <div class=\"table-responsive table--no-card m-b-40\">
                                <table class=\"table table-borderless table-striped table-earning\">
                                    <thead>
                                    <tr>
                                        <th>date</th>
                                        <th>order ID</th>
                                        <th>name</th>
                                        <th class=\"text-right\">price</th>
                                        <th class=\"text-right\">quantity</th>
                                        <th class=\"text-right\">total</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>2018-09-29 05:57</td>
                                        <td>100398</td>
                                        <td>iPhone X 64Gb Grey</td>
                                        <td class=\"text-right\">\$999.00</td>
                                        <td class=\"text-right\">1</td>
                                        <td class=\"text-right\">\$999.00</td>
                                    </tr>
                                    <tr>
                                        <td>2018-09-28 01:22</td>
                                        <td>100397</td>
                                        <td>Samsung S8 Black</td>
                                        <td class=\"text-right\">\$756.00</td>
                                        <td class=\"text-right\">1</td>
                                        <td class=\"text-right\">\$756.00</td>
                                    </tr>
                                    <tr>
                                        <td>2018-09-27 02:12</td>
                                        <td>100396</td>
                                        <td>Game Console Controller</td>
                                        <td class=\"text-right\">\$22.00</td>
                                        <td class=\"text-right\">2</td>
                                        <td class=\"text-right\">\$44.00</td>
                                    </tr>
                                    <tr>
                                        <td>2018-09-26 23:06</td>
                                        <td>100395</td>
                                        <td>iPhone X 256Gb Black</td>
                                        <td class=\"text-right\">\$1199.00</td>
                                        <td class=\"text-right\">1</td>
                                        <td class=\"text-right\">\$1199.00</td>
                                    </tr>
                                    <tr>
                                        <td>2018-09-25 19:03</td>
                                        <td>100393</td>
                                        <td>USB 3.0 Cable</td>
                                        <td class=\"text-right\">\$10.00</td>
                                        <td class=\"text-right\">3</td>
                                        <td class=\"text-right\">\$30.00</td>
                                    </tr>
                                    <tr>
                                        <td>2018-09-29 05:57</td>
                                        <td>100392</td>
                                        <td>Smartwatch 4.0 LTE Wifi</td>
                                        <td class=\"text-right\">\$199.00</td>
                                        <td class=\"text-right\">6</td>
                                        <td class=\"text-right\">\$1494.00</td>
                                    </tr>
                                    <tr>
                                        <td>2018-09-24 19:10</td>
                                        <td>100391</td>
                                        <td>Camera C430W 4k</td>
                                        <td class=\"text-right\">\$699.00</td>
                                        <td class=\"text-right\">1</td>
                                        <td class=\"text-right\">\$699.00</td>
                                    </tr>
                                    <tr>
                                        <td>2018-09-22 00:43</td>
                                        <td>100393</td>
                                        <td>USB 3.0 Cable</td>
                                        <td class=\"text-right\">\$10.00</td>
                                        <td class=\"text-right\">3</td>
                                        <td class=\"text-right\">\$30.00</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class=\"col-lg-3\">
                            <h2 class=\"title-1 m-b-25\">Top countries</h2>
                            <div class=\"au-card au-card--bg-blue au-card-top-countries m-b-40\">
                                <div class=\"au-card-inner\">
                                    <div class=\"table-responsive\">
                                        <table class=\"table table-top-countries\">
                                            <tbody>
                                            <tr>
                                                <td>United States</td>
                                                <td class=\"text-right\">\$119,366.96</td>
                                            </tr>
                                            <tr>
                                                <td>Australia</td>
                                                <td class=\"text-right\">\$70,261.65</td>
                                            </tr>
                                            <tr>
                                                <td>United Kingdom</td>
                                                <td class=\"text-right\">\$46,399.22</td>
                                            </tr>
                                            <tr>
                                                <td>Turkey</td>
                                                <td class=\"text-right\">\$35,364.90</td>
                                            </tr>
                                            <tr>
                                                <td>Germany</td>
                                                <td class=\"text-right\">\$20,366.96</td>
                                            </tr>
                                            <tr>
                                                <td>France</td>
                                                <td class=\"text-right\">\$10,366.96</td>
                                            </tr>
                                            <tr>
                                                <td>Australia</td>
                                                <td class=\"text-right\">\$5,366.96</td>
                                            </tr>
                                            <tr>
                                                <td>Italy</td>
                                                <td class=\"text-right\">\$1639.32</td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"row\">
                        <div class=\"col-lg-6\">
                            <div class=\"au-card au-card--no-shadow au-card--no-pad m-b-40\">
                                <div class=\"au-card-title\" style=\"background-image:url('images/bg-title-01.jpg');\">
                                    <div class=\"bg-overlay bg-overlay--blue\"></div>
                                    <h3>
                                        <i class=\"zmdi zmdi-account-calendar\"></i>26 April, 2018</h3>
                                    <button class=\"au-btn-plus\">
                                        <i class=\"zmdi zmdi-plus\"></i>
                                    </button>
                                </div>
                                <div class=\"au-task js-list-load\">
                                    <div class=\"au-task__title\">
                                        <p>Tasks for John Doe</p>
                                    </div>
                                    <div class=\"au-task-list js-scrollbar3\">
                                        <div class=\"au-task__item au-task__item--danger\">
                                            <div class=\"au-task__item-inner\">
                                                <h5 class=\"task\">
                                                    <a href=\"#\">Meeting about plan for Admin Template 2018</a>
                                                </h5>
                                                <span class=\"time\">10:00 AM</span>
                                            </div>
                                        </div>
                                        <div class=\"au-task__item au-task__item--warning\">
                                            <div class=\"au-task__item-inner\">
                                                <h5 class=\"task\">
                                                    <a href=\"#\">Create new task for Dashboard</a>
                                                </h5>
                                                <span class=\"time\">11:00 AM</span>
                                            </div>
                                        </div>
                                        <div class=\"au-task__item au-task__item--primary\">
                                            <div class=\"au-task__item-inner\">
                                                <h5 class=\"task\">
                                                    <a href=\"#\">Meeting about plan for Admin Template 2018</a>
                                                </h5>
                                                <span class=\"time\">02:00 PM</span>
                                            </div>
                                        </div>
                                        <div class=\"au-task__item au-task__item--success\">
                                            <div class=\"au-task__item-inner\">
                                                <h5 class=\"task\">
                                                    <a href=\"#\">Create new task for Dashboard</a>
                                                </h5>
                                                <span class=\"time\">03:30 PM</span>
                                            </div>
                                        </div>
                                        <div class=\"au-task__item au-task__item--danger js-load-item\">
                                            <div class=\"au-task__item-inner\">
                                                <h5 class=\"task\">
                                                    <a href=\"#\">Meeting about plan for Admin Template 2018</a>
                                                </h5>
                                                <span class=\"time\">10:00 AM</span>
                                            </div>
                                        </div>
                                        <div class=\"au-task__item au-task__item--warning js-load-item\">
                                            <div class=\"au-task__item-inner\">
                                                <h5 class=\"task\">
                                                    <a href=\"#\">Create new task for Dashboard</a>
                                                </h5>
                                                <span class=\"time\">11:00 AM</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"au-task__footer\">
                                        <button class=\"au-btn au-btn-load js-load-btn\">load more</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-lg-6\">
                            <div class=\"au-card au-card--no-shadow au-card--no-pad m-b-40\">
                                <div class=\"au-card-title\" style=\"background-image:url('images/bg-title-02.jpg');\">
                                    <div class=\"bg-overlay bg-overlay--blue\"></div>
                                    <h3>
                                        <i class=\"zmdi zmdi-comment-text\"></i>New Messages</h3>
                                    <button class=\"au-btn-plus\">
                                        <i class=\"zmdi zmdi-plus\"></i>
                                    </button>
                                </div>
                                <div class=\"au-inbox-wrap js-inbox-wrap\">
                                    <div class=\"au-message js-list-load\">
                                        <div class=\"au-message__noti\">
                                            <p>You Have
                                                <span>2</span>

                                                new messages
                                            </p>
                                        </div>
                                        <div class=\"au-message-list\">
                                            <div class=\"au-message__item unread\">
                                                <div class=\"au-message__item-inner\">
                                                    <div class=\"au-message__item-text\">
                                                        <div class=\"avatar-wrap\">
                                                            <div class=\"avatar\">
                                                                <img src=\"{{ asset('images/icon/avatar-02.jpg') }}\" alt=\"John Smith\">
                                                            </div>
                                                        </div>
                                                        <div class=\"text\">
                                                            <h5 class=\"name\">John Smith</h5>
                                                            <p>Have sent a photo</p>
                                                        </div>
                                                    </div>
                                                    <div class=\"au-message__item-time\">
                                                        <span>12 Min ago</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=\"au-message__item unread\">
                                                <div class=\"au-message__item-inner\">
                                                    <div class=\"au-message__item-text\">
                                                        <div class=\"avatar-wrap online\">
                                                            <div class=\"avatar\">
                                                                <img src=\"{{ asset('images/icon/avatar-03.jpg') }}\" alt=\"Nicholas Martinez\">
                                                            </div>
                                                        </div>
                                                        <div class=\"text\">
                                                            <h5 class=\"name\">Nicholas Martinez</h5>
                                                            <p>You are now connected on message</p>
                                                        </div>
                                                    </div>
                                                    <div class=\"au-message__item-time\">
                                                        <span>11:00 PM</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=\"au-message__item\">
                                                <div class=\"au-message__item-inner\">
                                                    <div class=\"au-message__item-text\">
                                                        <div class=\"avatar-wrap online\">
                                                            <div class=\"avatar\">
                                                                <img src=\"{{ asset('images/icon/avatar-04.jpg') }}\" alt=\"Michelle Sims\">
                                                            </div>
                                                        </div>
                                                        <div class=\"text\">
                                                            <h5 class=\"name\">Michelle Sims</h5>
                                                            <p>Lorem ipsum dolor sit amet</p>
                                                        </div>
                                                    </div>
                                                    <div class=\"au-message__item-time\">
                                                        <span>Yesterday</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=\"au-message__item\">
                                                <div class=\"au-message__item-inner\">
                                                    <div class=\"au-message__item-text\">
                                                        <div class=\"avatar-wrap\">
                                                            <div class=\"avatar\">
                                                                <img src=\"{{ asset('images/icon/avatar-05.jpg') }}\" alt=\"Michelle Sims\">
                                                            </div>
                                                        </div>
                                                        <div class=\"text\">
                                                            <h5 class=\"name\">Michelle Sims</h5>
                                                            <p>Purus feugiat finibus</p>
                                                        </div>
                                                    </div>
                                                    <div class=\"au-message__item-time\">
                                                        <span>Sunday</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=\"au-message__item js-load-item\">
                                                <div class=\"au-message__item-inner\">
                                                    <div class=\"au-message__item-text\">
                                                        <div class=\"avatar-wrap online\">
                                                            <div class=\"avatar\">
                                                                <img src=\"{{ asset('images/icon/avatar-04.jpg') }}\" alt=\"Michelle Sims\">
                                                            </div>
                                                        </div>
                                                        <div class=\"text\">
                                                            <h5 class=\"name\">Michelle Sims</h5>
                                                            <p>Lorem ipsum dolor sit amet</p>
                                                        </div>
                                                    </div>
                                                    <div class=\"au-message__item-time\">
                                                        <span>Yesterday</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=\"au-message__item js-load-item\">
                                                <div class=\"au-message__item-inner\">
                                                    <div class=\"au-message__item-text\">
                                                        <div class=\"avatar-wrap\">
                                                            <div class=\"avatar\">
                                                                <img src=\"{{ asset('images/icon/avatar-05.jpg') }}\" alt=\"Michelle Sims\">
                                                            </div>
                                                        </div>
                                                        <div class=\"text\">
                                                            <h5 class=\"name\">Michelle Sims</h5>
                                                            <p>Purus feugiat finibus</p>
                                                        </div>
                                                    </div>
                                                    <div class=\"au-message__item-time\">
                                                        <span>Sunday</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"au-message__footer\">
                                            <button class=\"au-btn au-btn-load js-load-btn\">load more</button>
                                        </div>
                                    </div>
                                    <div class=\"au-chat\">
                                        <div class=\"au-chat__title\">
                                            <div class=\"au-chat-info\">
                                                <div class=\"avatar-wrap online\">
                                                    <div class=\"avatar avatar--small\">
                                                        <img src=\"{{ asset('images/icon/avatar-02.jpg') }}\" alt=\"John Smith\">
                                                    </div>
                                                </div>
                                                <span class=\"nick\">
                                                        <a href=\"#\">John Smith</a>
                                                    </span>
                                            </div>
                                        </div>
                                        <div class=\"au-chat__content\">
                                            <div class=\"recei-mess-wrap\">
                                                <span class=\"mess-time\">12 Min ago</span>
                                                <div class=\"recei-mess__inner\">
                                                    <div class=\"avatar avatar--tiny\">
                                                        <img src=\"{{ asset('images/icon/avatar-02.jpg') }}\" alt=\"John Smith\">
                                                    </div>
                                                    <div class=\"recei-mess-list\">
                                                        <div class=\"recei-mess\">Lorem ipsum dolor sit amet, consectetur adipiscing elit non iaculis</div>
                                                        <div class=\"recei-mess\">Donec tempor, sapien ac viverra</div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=\"send-mess-wrap\">
                                                <span class=\"mess-time\">30 Sec ago</span>
                                                <div class=\"send-mess__inner\">
                                                    <div class=\"send-mess-list\">
                                                        <div class=\"send-mess\">Lorem ipsum dolor sit amet, consectetur adipiscing elit non iaculis</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"au-chat-textfield\">
                                            <form class=\"au-form-icon\">
                                                <input class=\"au-input au-input--full au-input--h65\" type=\"text\" placeholder=\"Type a message\">
                                                <button class=\"au-input-icon\">
                                                    <i class=\"zmdi zmdi-camera\"></i>
                                                </button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"row\">
                        <div class=\"col-md-12\">
                            <div class=\"copyright\">
                                <p>Copyright © 2018 Colorlib. All rights reserved. Template by <a href=\"https://colorlib.com\">Colorlib</a>.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END MAIN CONTENT-->
        <!-- END PAGE CONTAINER-->
    </div>

</div>

<!-- Jquery JS-->
<script src=\"back/vendor/jquery-3.2.1.min.js\"></script>
<!-- Bootstrap JS-->
<script src=\"back/vendor/bootstrap-4.1/popper.min.js\"></script>
<script src=\"back/vendor/bootstrap-4.1/bootstrap.min.js\"></script>
<!-- Vendor JS       -->
<script src=\"back/vendor/slick/slick.min.js\">
</script>
<script src=\"back/vendor/wow/wow.min.js\"></script>
<script src=\"back/vendor/animsition/animsition.min.js\"></script>
<script src=\"back/vendor/bootstrap-progressbar/bootstrap-progressbar.min.js\">
</script>
<script src=\"back/vendor/counter-up/jquery.waypoints.min.js\"></script>
<script src=\"back/vendor/counter-up/jquery.counterup.min.js\">
</script>
<script src=\"back/vendor/circle-progress/circle-progress.min.js\"></script>
<script src=\"back/vendor/perfect-scrollbar/perfect-scrollbar.js\"></script>
<script src=\"back/vendor/chartjs/Chart.bundle.min.js\"></script>
<script src=\"back/vendor/select2/select2.min.js\">
</script>

<!-- Main JS-->
<script src=\"back/js/main.js\"></script>

</body>
{% endblock %}
</html>
<!-- end document-->
", "backend.html.twig", "C:\\wamp64\\www\\pi_dev\\app\\Resources\\views\\backend.html.twig");
    }
}
