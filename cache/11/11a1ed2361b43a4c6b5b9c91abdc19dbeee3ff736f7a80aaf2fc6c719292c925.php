<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* layout.twig */
class __TwigTemplate_180d29e0434c3f3eeb35559bf0c2afa4d9c53ba659ab3f568d77ce498ffc1729 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'main_content' => [$this, 'block_main_content'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "
<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"utf-8\" />
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui\">
    <title>";
        // line 8
        echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
        echo "</title>
    <meta content=\"Admin Dashboard\" name=\"description\" />
    <meta content=\"Mannatthemes\" name=\"author\" />
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\" />

    <link rel=\"shortcut icon\" href=\"/assets/app/images/favicon.ico\">

    <!-- jvectormap -->
    <link href=\"/assets/app/plugins/jvectormap/jquery-jvectormap-2.0.2.css\" rel=\"stylesheet\">
    <link href=\"/assets/app/plugins/fullcalendar/vanillaCalendar.css\" rel=\"stylesheet\" type=\"text/css\"  />

    <link href=\"/assets/app/plugins/morris/morris.css\" rel=\"stylesheet\">

    <link href=\"/assets/app/css/bootstrap.min.css\" rel=\"stylesheet\" type=\"text/css\">
    <link href=\"/assets/app/css/icons.css\" rel=\"stylesheet\" type=\"text/css\">
    <link href=\"/assets/app/css/style.css\" rel=\"stylesheet\" type=\"text/css\">

</head>


<body class=\"fixed-left\">

<!-- Loader -->
<div id=\"preloader\"><div id=\"status\"><div class=\"spinner\"></div></div></div>

<!-- Begin page -->
<div id=\"wrapper\">

    <!-- ========== Left Sidebar Start ========== -->
    <div class=\"left side-menu\">
        <button type=\"button\" class=\"button-menu-mobile button-menu-mobile-topbar open-left waves-effect\">
            <i class=\"ion-close\"></i>
        </button>

        <!-- LOGO -->
        <div class=\"topbar-left\">
            <div class=\"text-center\">
                <!--<a href=\"index.html\" class=\"logo\"><i class=\"mdi mdi-assistant\"></i>Zoter</a>-->
                <a href=\"index.html\" class=\"logo\">
                    <img src=\"/upload/admin-logo.jpg\" alt=\"\" class=\"logo-large\">
                </a>
            </div>
        </div>

        <div class=\"sidebar-inner niceScrollleft\">

            <div id=\"sidebar-menu\">
                <ul>

                    <li>
                        <a href=\"/admin/dashboard.php\" class=\"waves-effect\">
                            <i class=\"mdi mdi-airplay\"></i>
                            <span>Dashboard</span>
                        </a>
                    </li>

                    <li class=\"has_sub\">
                        <a href=\"javascript:void(0);\" class=\"waves-effect\"><i class=\"fas fa-user-alt\"></i> <span> Admin user </span> <span class=\"float-right\"><i class=\"mdi mdi-chevron-right\"></i></span></a>
                        <ul class=\"list-unstyled\">
                            <li><a href=\"#\">New User</a></li>
                            <li><a href=\"#\">User List</a></li>
                        </ul>
                    </li>


                    <li class=\"has_sub\">
                        <a href=\"javascript:void(0);\" class=\"waves-effect\"><i class=\"fas fa-users-cog\"></i> <span> Student </span> <span class=\"float-right\"><i class=\"mdi mdi-chevron-right\"></i></span></a>
                        <ul class=\"list-unstyled\">
                            <li><a href=\"#\">New Student</a></li>
                            <li><a href=\"#\">Student List</a></li>
                        </ul>
                    </li>


                    <li class=\"has_sub\">
                        <a href=\"javascript:void(0);\" class=\"waves-effect\"><i class=\"fas fa-graduation-cap\"></i> <span> Certificate </span> <span class=\"float-right\"><i class=\"mdi mdi-chevron-right\"></i></span></a>
                        <ul class=\"list-unstyled\">
                            <li><a href=\"#\">New Certificate</a></li>
                            <li><a href=\"#\">Certificate List</a></li>
                        </ul>
                    </li>

                    <li>
                        <a href=\"index.html\" class=\"waves-effect\">
                            <i class=\"fas fa-key\"></i>
                            <span>Change Password</span>
                        </a>
                    </li>
                    <li>
                        <a href=\"index.html\" class=\"waves-effect\">
                            <i class=\"fas fa-sign-out-alt\"></i>
                            <span>Logout</span>
                        </a>
                    </li>
                </ul>
            </div>
            <div class=\"clearfix\"></div>
        </div> <!-- end sidebarinner -->
    </div>
    <!-- Left Sidebar End -->

    <!-- Start right Content here -->

    <div class=\"content-page\">
        <!-- Start content -->
        <div class=\"content\">

            <!-- Top Bar Start -->
            <div class=\"topbar\">

                <nav class=\"navbar-custom\">

                    <ul class=\"list-inline float-right mb-0\">
                        <!-- language-->
                        <li class=\"list-inline-item hide-phone app-search\">
                            <form role=\"search\" class=\"\" action=\"/admin/student_summary.php\" method=\"get\">
                                <input type=\"text\" name=\"id\" placeholder=\"Search...\" class=\"form-control\">
                                <a href=\"\"><i class=\"fa fa-search\"></i></a>
                            </form>
                        </li>

                        <li class=\"list-inline-item dropdown notification-list\">
                            <a class=\"nav-link dropdown-toggle arrow-none waves-effect nav-user\" data-toggle=\"dropdown\" href=\"#\" role=\"button\"
                               aria-haspopup=\"false\" aria-expanded=\"false\">
                                <img src=\"/assets/app/images/users/avatar-1.jpg\" alt=\"user\" class=\"rounded-circle\">
                            </a>
                            <div class=\"dropdown-menu dropdown-menu-right profile-dropdown \">
                                <!-- item-->
                                <div class=\"dropdown-item noti-title\">
                                    <h5>Welcome</h5>
                                </div>
                                <a class=\"dropdown-item\" href=\"#\"><i class=\"mdi mdi-account-circle m-r-5 text-muted\"></i>Change Passwd</a>
                                <div class=\"dropdown-divider\"></div>
                                <a class=\"dropdown-item\" href=\"#\"><i class=\"mdi mdi-lock-open-outline m-r-5 text-muted\"></i>Lock screen</a>
                                <div class=\"dropdown-divider\"></div>
                                <a class=\"dropdown-item\" href=\"#\"><i class=\"mdi mdi-logout m-r-5 text-muted\"></i>Logout</a>
                            </div>
                        </li>

                    </ul>

                    <ul class=\"list-inline menu-left mb-0\">
                        <li class=\"float-left\">
                            <button class=\"button-menu-mobile open-left waves-light waves-effect\">
                                <i class=\"mdi mdi-menu\"></i>
                            </button>
                        </li>
                    </ul>

                    <div class=\"clearfix\"></div>

                </nav>

            </div>
            <!-- Top Bar End -->

            <div class=\"page-content-wrapper \">

                <div class=\"container-fluid\">
                    ";
        // line 167
        $this->displayBlock('main_content', $context, $blocks);
        // line 168
        echo "
                </div><!-- container -->

            </div> <!-- Page content Wrapper -->

        </div> <!-- content -->

        <footer class=\"footer\">
            © 2019 Computer Warriors Pvt. Ltd. & Maintained by <a target=\"_blank\" href=\"https://vicky-edf88.web.app/\">Vicky Kumar</a>.
        </footer>

    </div>
    <!-- End Right content here -->

</div>
<!-- END wrapper -->


<!-- jQuery  -->
<script src=\"/assets/app/js/jquery.min.js\"></script>
<script src=\"/assets/app/js/popper.min.js\"></script>
<script src=\"/assets/app/js/bootstrap.min.js\"></script>
<script src=\"/assets/app/js/modernizr.min.js\"></script>
<script src=\"/assets/app/js/detect.js\"></script>
<script src=\"/assets/app/js/fastclick.js\"></script>
<script src=\"/assets/app/js/jquery.blockUI.js\"></script>
<script src=\"/assets/app/js/waves.js\"></script>
<script src=\"/assets/app/js/jquery.nicescroll.js\"></script>

<script src=\"/assets/app/plugins/jvectormap/jquery-jvectormap-2.0.2.min.js\"></script>
<script src=\"/assets/app/plugins/jvectormap/jquery-jvectormap-world-mill-en.js\"></script>

<script src=\"/assets/app/plugins/skycons/skycons.min.js\"></script>
<script src=\"/assets/app/plugins/fullcalendar/vanillaCalendar.js\"></script>

<script src=\"/assets/app/plugins/raphael/raphael-min.js\"></script>
<script src=\"/assets/app/plugins/morris/morris.min.js\"></script>

<script src=\"/assets/app/pages/dashborad.js\"></script>

<!-- App js -->
<script src=\"/assets/app/js/app.js\"></script>

</body>
</html>";
    }

    // line 167
    public function block_main_content($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function getTemplateName()
    {
        return "layout.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  259 => 167,  211 => 168,  209 => 167,  47 => 8,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"utf-8\" />
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui\">
    <title>{{ title }}</title>
    <meta content=\"Admin Dashboard\" name=\"description\" />
    <meta content=\"Mannatthemes\" name=\"author\" />
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\" />

    <link rel=\"shortcut icon\" href=\"/assets/app/images/favicon.ico\">

    <!-- jvectormap -->
    <link href=\"/assets/app/plugins/jvectormap/jquery-jvectormap-2.0.2.css\" rel=\"stylesheet\">
    <link href=\"/assets/app/plugins/fullcalendar/vanillaCalendar.css\" rel=\"stylesheet\" type=\"text/css\"  />

    <link href=\"/assets/app/plugins/morris/morris.css\" rel=\"stylesheet\">

    <link href=\"/assets/app/css/bootstrap.min.css\" rel=\"stylesheet\" type=\"text/css\">
    <link href=\"/assets/app/css/icons.css\" rel=\"stylesheet\" type=\"text/css\">
    <link href=\"/assets/app/css/style.css\" rel=\"stylesheet\" type=\"text/css\">

</head>


<body class=\"fixed-left\">

<!-- Loader -->
<div id=\"preloader\"><div id=\"status\"><div class=\"spinner\"></div></div></div>

<!-- Begin page -->
<div id=\"wrapper\">

    <!-- ========== Left Sidebar Start ========== -->
    <div class=\"left side-menu\">
        <button type=\"button\" class=\"button-menu-mobile button-menu-mobile-topbar open-left waves-effect\">
            <i class=\"ion-close\"></i>
        </button>

        <!-- LOGO -->
        <div class=\"topbar-left\">
            <div class=\"text-center\">
                <!--<a href=\"index.html\" class=\"logo\"><i class=\"mdi mdi-assistant\"></i>Zoter</a>-->
                <a href=\"index.html\" class=\"logo\">
                    <img src=\"/upload/admin-logo.jpg\" alt=\"\" class=\"logo-large\">
                </a>
            </div>
        </div>

        <div class=\"sidebar-inner niceScrollleft\">

            <div id=\"sidebar-menu\">
                <ul>

                    <li>
                        <a href=\"/admin/dashboard.php\" class=\"waves-effect\">
                            <i class=\"mdi mdi-airplay\"></i>
                            <span>Dashboard</span>
                        </a>
                    </li>

                    <li class=\"has_sub\">
                        <a href=\"javascript:void(0);\" class=\"waves-effect\"><i class=\"fas fa-user-alt\"></i> <span> Admin user </span> <span class=\"float-right\"><i class=\"mdi mdi-chevron-right\"></i></span></a>
                        <ul class=\"list-unstyled\">
                            <li><a href=\"#\">New User</a></li>
                            <li><a href=\"#\">User List</a></li>
                        </ul>
                    </li>


                    <li class=\"has_sub\">
                        <a href=\"javascript:void(0);\" class=\"waves-effect\"><i class=\"fas fa-users-cog\"></i> <span> Student </span> <span class=\"float-right\"><i class=\"mdi mdi-chevron-right\"></i></span></a>
                        <ul class=\"list-unstyled\">
                            <li><a href=\"#\">New Student</a></li>
                            <li><a href=\"#\">Student List</a></li>
                        </ul>
                    </li>


                    <li class=\"has_sub\">
                        <a href=\"javascript:void(0);\" class=\"waves-effect\"><i class=\"fas fa-graduation-cap\"></i> <span> Certificate </span> <span class=\"float-right\"><i class=\"mdi mdi-chevron-right\"></i></span></a>
                        <ul class=\"list-unstyled\">
                            <li><a href=\"#\">New Certificate</a></li>
                            <li><a href=\"#\">Certificate List</a></li>
                        </ul>
                    </li>

                    <li>
                        <a href=\"index.html\" class=\"waves-effect\">
                            <i class=\"fas fa-key\"></i>
                            <span>Change Password</span>
                        </a>
                    </li>
                    <li>
                        <a href=\"index.html\" class=\"waves-effect\">
                            <i class=\"fas fa-sign-out-alt\"></i>
                            <span>Logout</span>
                        </a>
                    </li>
                </ul>
            </div>
            <div class=\"clearfix\"></div>
        </div> <!-- end sidebarinner -->
    </div>
    <!-- Left Sidebar End -->

    <!-- Start right Content here -->

    <div class=\"content-page\">
        <!-- Start content -->
        <div class=\"content\">

            <!-- Top Bar Start -->
            <div class=\"topbar\">

                <nav class=\"navbar-custom\">

                    <ul class=\"list-inline float-right mb-0\">
                        <!-- language-->
                        <li class=\"list-inline-item hide-phone app-search\">
                            <form role=\"search\" class=\"\" action=\"/admin/student_summary.php\" method=\"get\">
                                <input type=\"text\" name=\"id\" placeholder=\"Search...\" class=\"form-control\">
                                <a href=\"\"><i class=\"fa fa-search\"></i></a>
                            </form>
                        </li>

                        <li class=\"list-inline-item dropdown notification-list\">
                            <a class=\"nav-link dropdown-toggle arrow-none waves-effect nav-user\" data-toggle=\"dropdown\" href=\"#\" role=\"button\"
                               aria-haspopup=\"false\" aria-expanded=\"false\">
                                <img src=\"/assets/app/images/users/avatar-1.jpg\" alt=\"user\" class=\"rounded-circle\">
                            </a>
                            <div class=\"dropdown-menu dropdown-menu-right profile-dropdown \">
                                <!-- item-->
                                <div class=\"dropdown-item noti-title\">
                                    <h5>Welcome</h5>
                                </div>
                                <a class=\"dropdown-item\" href=\"#\"><i class=\"mdi mdi-account-circle m-r-5 text-muted\"></i>Change Passwd</a>
                                <div class=\"dropdown-divider\"></div>
                                <a class=\"dropdown-item\" href=\"#\"><i class=\"mdi mdi-lock-open-outline m-r-5 text-muted\"></i>Lock screen</a>
                                <div class=\"dropdown-divider\"></div>
                                <a class=\"dropdown-item\" href=\"#\"><i class=\"mdi mdi-logout m-r-5 text-muted\"></i>Logout</a>
                            </div>
                        </li>

                    </ul>

                    <ul class=\"list-inline menu-left mb-0\">
                        <li class=\"float-left\">
                            <button class=\"button-menu-mobile open-left waves-light waves-effect\">
                                <i class=\"mdi mdi-menu\"></i>
                            </button>
                        </li>
                    </ul>

                    <div class=\"clearfix\"></div>

                </nav>

            </div>
            <!-- Top Bar End -->

            <div class=\"page-content-wrapper \">

                <div class=\"container-fluid\">
                    {% block main_content %}{% endblock %}

                </div><!-- container -->

            </div> <!-- Page content Wrapper -->

        </div> <!-- content -->

        <footer class=\"footer\">
            © 2019 Computer Warriors Pvt. Ltd. & Maintained by <a target=\"_blank\" href=\"https://vicky-edf88.web.app/\">Vicky Kumar</a>.
        </footer>

    </div>
    <!-- End Right content here -->

</div>
<!-- END wrapper -->


<!-- jQuery  -->
<script src=\"/assets/app/js/jquery.min.js\"></script>
<script src=\"/assets/app/js/popper.min.js\"></script>
<script src=\"/assets/app/js/bootstrap.min.js\"></script>
<script src=\"/assets/app/js/modernizr.min.js\"></script>
<script src=\"/assets/app/js/detect.js\"></script>
<script src=\"/assets/app/js/fastclick.js\"></script>
<script src=\"/assets/app/js/jquery.blockUI.js\"></script>
<script src=\"/assets/app/js/waves.js\"></script>
<script src=\"/assets/app/js/jquery.nicescroll.js\"></script>

<script src=\"/assets/app/plugins/jvectormap/jquery-jvectormap-2.0.2.min.js\"></script>
<script src=\"/assets/app/plugins/jvectormap/jquery-jvectormap-world-mill-en.js\"></script>

<script src=\"/assets/app/plugins/skycons/skycons.min.js\"></script>
<script src=\"/assets/app/plugins/fullcalendar/vanillaCalendar.js\"></script>

<script src=\"/assets/app/plugins/raphael/raphael-min.js\"></script>
<script src=\"/assets/app/plugins/morris/morris.min.js\"></script>

<script src=\"/assets/app/pages/dashborad.js\"></script>

<!-- App js -->
<script src=\"/assets/app/js/app.js\"></script>

</body>
</html>", "layout.twig", "F:\\website\\template\\admin\\layout.twig");
    }
}
