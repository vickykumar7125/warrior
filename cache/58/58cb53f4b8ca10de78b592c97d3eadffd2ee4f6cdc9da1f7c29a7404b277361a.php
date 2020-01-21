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
class __TwigTemplate_6fb9fe983f9b2add34ec6bd9fd6851d77025603dae09fe7bfa1e655cb5933560 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'css' => [$this, 'block_css'],
            'main_content' => [$this, 'block_main_content'],
            'script' => [$this, 'block_script'],
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



    <!-- DataTables -->
    <link href=\"/assets/app/plugins/datatables/dataTables.bootstrap4.min.css\" rel=\"stylesheet\" type=\"text/css\" />
    <link href=\"/assets/app/plugins/datatables/buttons.bootstrap4.min.css\" rel=\"stylesheet\" type=\"text/css\" />
    <!-- Responsive datatable examples -->
    <link href=\"/assets/app/plugins/datatables/responsive.bootstrap4.min.css\" rel=\"stylesheet\" type=\"text/css\" />

    <link href=\"/assets/app/plugins/timepicker/tempusdominus-bootstrap-4.css\" rel=\"stylesheet\" />
    <link href=\"/assets/app/plugins/timepicker/bootstrap-material-datetimepicker.css\" rel=\"stylesheet\">
    <link href=\"/assets/app/plugins/clockpicker/jquery-clockpicker.min.css\" rel=\"stylesheet\" />
    <link href=\"/assets/app/plugins/colorpicker/asColorPicker.min.css\" rel=\"stylesheet\" type=\"text/css\" />
    <link href=\"/assets/app/plugins/select2/select2.min.css\" rel=\"stylesheet\" type=\"text/css\" />

    <link href=\"/assets/app/plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css\" rel=\"stylesheet\">
    <link href=\"/assets/app/plugins/bootstrap-datepicker/css/bootstrap-datepicker.min.css\" rel=\"stylesheet\">
    <link href=\"/assets/app/plugins/bootstrap-touchspin/css/jquery.bootstrap-touchspin.min.css\" rel=\"stylesheet\" />
    <link href=\"/assets/app/plugins/dropzone/dist/dropzone.css\" rel=\"stylesheet\" type=\"text/css\">
    <link href=\"/assets/app/plugins/dropify/css/dropify.min.css\" rel=\"stylesheet\">

    <link href=\"/assets/app/css/bootstrap.min.css\" rel=\"stylesheet\" type=\"text/css\">
    <link href=\"/assets/app/css/icons.css\" rel=\"stylesheet\" type=\"text/css\">
    <link href=\"/assets/app/css/style.css\" rel=\"stylesheet\" type=\"text/css\">

    ";
        // line 45
        $this->displayBlock('css', $context, $blocks);
        // line 46
        echo "
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
                            <li><a href=\"/admin/new_user.php\">New User</a></li>
                            <li><a href=\"/admin/user_list.php\">User List</a></li>
                        </ul>
                    </li>


                    <li class=\"has_sub\">
                        <a href=\"javascript:void(0);\" class=\"waves-effect\"><i class=\"fas fa-book\"></i> <span> Course </span> <span class=\"float-right\"><i class=\"mdi mdi-chevron-right\"></i></span></a>
                        <ul class=\"list-unstyled\">
                            <li><a href=\"/admin/new_course.php\">New Course</a></li>
                            <li><a href=\"/admin/course_list.php\">Course List</a></li>
                        </ul>
                    </li>

                    <li class=\"has_sub\">
                        <a href=\"javascript:void(0);\" class=\"waves-effect\"><i class=\"fas fa-users-cog\"></i> <span> Student </span> <span class=\"float-right\"><i class=\"mdi mdi-chevron-right\"></i></span></a>
                        <ul class=\"list-unstyled\">
                            <li><a href=\"/admin/new_student.php\">New Student</a></li>
                            <li><a href=\"/admin/student_list.php\">Student List</a></li>
                        </ul>
                    </li>


                    <li class=\"has_sub\">
                        <a href=\"javascript:void(0);\" class=\"waves-effect\"><i class=\"fas fa-graduation-cap\"></i> <span> Certificate </span> <span class=\"float-right\"><i class=\"mdi mdi-chevron-right\"></i></span></a>
                        <ul class=\"list-unstyled\">
                            <li><a href=\"/admin/select_student.php\">New Certificate</a></li>
                            <li><a href=\"/admin/certificate_list.php\">Certificate List</a></li>
                        </ul>
                    </li>

                    <li>
                        <a href=\"/admin/password.php\" class=\"waves-effect\">
                            <i class=\"fas fa-key\"></i>
                            <span>Change Password</span>
                        </a>
                    </li>
                    <li>
                        <a href=\"/auth/logout.php\" class=\"waves-effect\">
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
                                <a class=\"dropdown-item\" href=\"/admin/password.php\"><i class=\"fas fa-key m-r-5 text-muted\"></i>Change Passwd</a>
                                <div class=\"dropdown-divider\"></div>
                                <a class=\"dropdown-item\" href=\"/admin/lock.php\"><i class=\"mdi mdi-lock-open-outline m-r-5 text-muted\"></i>Lock screen</a>
                                <div class=\"dropdown-divider\"></div>
                                <a class=\"dropdown-item\" href=\"/auth/logout.php\"><i class=\"mdi mdi-logout m-r-5 text-muted\"></i>Logout</a>
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
        // line 197
        $this->displayBlock('main_content', $context, $blocks);
        // line 198
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



<!-- Required datatable js -->
<script src=\"/assets/app/plugins/datatables/jquery.dataTables.min.js\"></script>
<script src=\"/assets/app/plugins/datatables/dataTables.bootstrap4.min.js\"></script>
<!-- Buttons examples -->
<script src=\"/assets/app/plugins/datatables/dataTables.buttons.min.js\"></script>
<script src=\"/assets/app/plugins/datatables/buttons.bootstrap4.min.js\"></script>
<script src=\"/assets/app/plugins/datatables/jszip.min.js\"></script>
<script src=\"/assets/app/plugins/datatables/pdfmake.min.js\"></script>
<script src=\"/assets/app/plugins/datatables/vfs_fonts.js\"></script>
<script src=\"/assets/app/plugins/datatables/buttons.html5.min.js\"></script>
<script src=\"/assets/app/plugins/datatables/buttons.print.min.js\"></script>
<script src=\"/assets/app/plugins/datatables/buttons.colVis.min.js\"></script>
<!-- Responsive examples -->
<script src=\"/assets/app/plugins/datatables/dataTables.responsive.min.js\"></script>
<script src=\"/assets/app/plugins/datatables/responsive.bootstrap4.min.js\"></script>

<script src=\"/assets/app/plugins/timepicker/moment.js\"></script>
<script src=\"/assets/app/plugins/timepicker/tempusdominus-bootstrap-4.js\"></script>
<script src=\"/assets/app/plugins/timepicker/bootstrap-material-datetimepicker.js\"></script>
<script src=\"/assets/app/plugins/clockpicker/jquery-clockpicker.min.js\"></script>
<script src=\"/assets/app/plugins/colorpicker/jquery-asColor.js\" type=\"text/javascript\"></script>
<script src=\"/assets/app/plugins/colorpicker/jquery-asGradient.js\" type=\"text/javascript\"></script>
<script src=\"/assets/app/plugins/colorpicker/jquery-asColorPicker.min.js\" type=\"text/javascript\"></script>
<script src=\"/assets/app/plugins/select2/select2.min.js\" type=\"text/javascript\"></script>

<script src=\"/assets/app/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js\"></script>
<script src=\"/assets/app/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js\"></script>
<script src=\"/assets/app/plugins/bootstrap-maxlength/bootstrap-maxlength.min.js\" type=\"text/javascript\"></script>
<script src=\"/assets/app/plugins/bootstrap-touchspin/js/jquery.bootstrap-touchspin.min.js\" type=\"text/javascript\"></script>
<script src=\"/assets/app/plugins/dropzone/dist/dropzone.js\"></script>
<script src=\"/assets/app/plugins/dropify/js/dropify.min.js\"></script>
<script src=\"/assets/app/pages/upload.init.js\"></script>

<!-- Plugins Init js -->
<script src=\"/assets/app/pages/form-advanced.js\"></script>

<!-- Datatable init js -->
<script src=\"/assets/app/pages/datatables.init.js\"></script>

<script src=\"/assets/app/pages/dashborad.js\"></script>

<!-- App js -->
<script src=\"/assets/app/js/app.js\"></script>
";
        // line 281
        $this->displayBlock('script', $context, $blocks);
        // line 282
        echo "</body>
</html>";
    }

    // line 45
    public function block_css($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 197
    public function block_main_content($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 281
    public function block_script($context, array $blocks = [])
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
        return array (  350 => 281,  344 => 197,  338 => 45,  333 => 282,  331 => 281,  246 => 198,  244 => 197,  91 => 46,  89 => 45,  49 => 8,  40 => 1,);
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



    <!-- DataTables -->
    <link href=\"/assets/app/plugins/datatables/dataTables.bootstrap4.min.css\" rel=\"stylesheet\" type=\"text/css\" />
    <link href=\"/assets/app/plugins/datatables/buttons.bootstrap4.min.css\" rel=\"stylesheet\" type=\"text/css\" />
    <!-- Responsive datatable examples -->
    <link href=\"/assets/app/plugins/datatables/responsive.bootstrap4.min.css\" rel=\"stylesheet\" type=\"text/css\" />

    <link href=\"/assets/app/plugins/timepicker/tempusdominus-bootstrap-4.css\" rel=\"stylesheet\" />
    <link href=\"/assets/app/plugins/timepicker/bootstrap-material-datetimepicker.css\" rel=\"stylesheet\">
    <link href=\"/assets/app/plugins/clockpicker/jquery-clockpicker.min.css\" rel=\"stylesheet\" />
    <link href=\"/assets/app/plugins/colorpicker/asColorPicker.min.css\" rel=\"stylesheet\" type=\"text/css\" />
    <link href=\"/assets/app/plugins/select2/select2.min.css\" rel=\"stylesheet\" type=\"text/css\" />

    <link href=\"/assets/app/plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css\" rel=\"stylesheet\">
    <link href=\"/assets/app/plugins/bootstrap-datepicker/css/bootstrap-datepicker.min.css\" rel=\"stylesheet\">
    <link href=\"/assets/app/plugins/bootstrap-touchspin/css/jquery.bootstrap-touchspin.min.css\" rel=\"stylesheet\" />
    <link href=\"/assets/app/plugins/dropzone/dist/dropzone.css\" rel=\"stylesheet\" type=\"text/css\">
    <link href=\"/assets/app/plugins/dropify/css/dropify.min.css\" rel=\"stylesheet\">

    <link href=\"/assets/app/css/bootstrap.min.css\" rel=\"stylesheet\" type=\"text/css\">
    <link href=\"/assets/app/css/icons.css\" rel=\"stylesheet\" type=\"text/css\">
    <link href=\"/assets/app/css/style.css\" rel=\"stylesheet\" type=\"text/css\">

    {% block css %}{% endblock %}

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
                            <li><a href=\"/admin/new_user.php\">New User</a></li>
                            <li><a href=\"/admin/user_list.php\">User List</a></li>
                        </ul>
                    </li>


                    <li class=\"has_sub\">
                        <a href=\"javascript:void(0);\" class=\"waves-effect\"><i class=\"fas fa-book\"></i> <span> Course </span> <span class=\"float-right\"><i class=\"mdi mdi-chevron-right\"></i></span></a>
                        <ul class=\"list-unstyled\">
                            <li><a href=\"/admin/new_course.php\">New Course</a></li>
                            <li><a href=\"/admin/course_list.php\">Course List</a></li>
                        </ul>
                    </li>

                    <li class=\"has_sub\">
                        <a href=\"javascript:void(0);\" class=\"waves-effect\"><i class=\"fas fa-users-cog\"></i> <span> Student </span> <span class=\"float-right\"><i class=\"mdi mdi-chevron-right\"></i></span></a>
                        <ul class=\"list-unstyled\">
                            <li><a href=\"/admin/new_student.php\">New Student</a></li>
                            <li><a href=\"/admin/student_list.php\">Student List</a></li>
                        </ul>
                    </li>


                    <li class=\"has_sub\">
                        <a href=\"javascript:void(0);\" class=\"waves-effect\"><i class=\"fas fa-graduation-cap\"></i> <span> Certificate </span> <span class=\"float-right\"><i class=\"mdi mdi-chevron-right\"></i></span></a>
                        <ul class=\"list-unstyled\">
                            <li><a href=\"/admin/select_student.php\">New Certificate</a></li>
                            <li><a href=\"/admin/certificate_list.php\">Certificate List</a></li>
                        </ul>
                    </li>

                    <li>
                        <a href=\"/admin/password.php\" class=\"waves-effect\">
                            <i class=\"fas fa-key\"></i>
                            <span>Change Password</span>
                        </a>
                    </li>
                    <li>
                        <a href=\"/auth/logout.php\" class=\"waves-effect\">
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
                                <a class=\"dropdown-item\" href=\"/admin/password.php\"><i class=\"fas fa-key m-r-5 text-muted\"></i>Change Passwd</a>
                                <div class=\"dropdown-divider\"></div>
                                <a class=\"dropdown-item\" href=\"/admin/lock.php\"><i class=\"mdi mdi-lock-open-outline m-r-5 text-muted\"></i>Lock screen</a>
                                <div class=\"dropdown-divider\"></div>
                                <a class=\"dropdown-item\" href=\"/auth/logout.php\"><i class=\"mdi mdi-logout m-r-5 text-muted\"></i>Logout</a>
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



<!-- Required datatable js -->
<script src=\"/assets/app/plugins/datatables/jquery.dataTables.min.js\"></script>
<script src=\"/assets/app/plugins/datatables/dataTables.bootstrap4.min.js\"></script>
<!-- Buttons examples -->
<script src=\"/assets/app/plugins/datatables/dataTables.buttons.min.js\"></script>
<script src=\"/assets/app/plugins/datatables/buttons.bootstrap4.min.js\"></script>
<script src=\"/assets/app/plugins/datatables/jszip.min.js\"></script>
<script src=\"/assets/app/plugins/datatables/pdfmake.min.js\"></script>
<script src=\"/assets/app/plugins/datatables/vfs_fonts.js\"></script>
<script src=\"/assets/app/plugins/datatables/buttons.html5.min.js\"></script>
<script src=\"/assets/app/plugins/datatables/buttons.print.min.js\"></script>
<script src=\"/assets/app/plugins/datatables/buttons.colVis.min.js\"></script>
<!-- Responsive examples -->
<script src=\"/assets/app/plugins/datatables/dataTables.responsive.min.js\"></script>
<script src=\"/assets/app/plugins/datatables/responsive.bootstrap4.min.js\"></script>

<script src=\"/assets/app/plugins/timepicker/moment.js\"></script>
<script src=\"/assets/app/plugins/timepicker/tempusdominus-bootstrap-4.js\"></script>
<script src=\"/assets/app/plugins/timepicker/bootstrap-material-datetimepicker.js\"></script>
<script src=\"/assets/app/plugins/clockpicker/jquery-clockpicker.min.js\"></script>
<script src=\"/assets/app/plugins/colorpicker/jquery-asColor.js\" type=\"text/javascript\"></script>
<script src=\"/assets/app/plugins/colorpicker/jquery-asGradient.js\" type=\"text/javascript\"></script>
<script src=\"/assets/app/plugins/colorpicker/jquery-asColorPicker.min.js\" type=\"text/javascript\"></script>
<script src=\"/assets/app/plugins/select2/select2.min.js\" type=\"text/javascript\"></script>

<script src=\"/assets/app/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js\"></script>
<script src=\"/assets/app/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js\"></script>
<script src=\"/assets/app/plugins/bootstrap-maxlength/bootstrap-maxlength.min.js\" type=\"text/javascript\"></script>
<script src=\"/assets/app/plugins/bootstrap-touchspin/js/jquery.bootstrap-touchspin.min.js\" type=\"text/javascript\"></script>
<script src=\"/assets/app/plugins/dropzone/dist/dropzone.js\"></script>
<script src=\"/assets/app/plugins/dropify/js/dropify.min.js\"></script>
<script src=\"/assets/app/pages/upload.init.js\"></script>

<!-- Plugins Init js -->
<script src=\"/assets/app/pages/form-advanced.js\"></script>

<!-- Datatable init js -->
<script src=\"/assets/app/pages/datatables.init.js\"></script>

<script src=\"/assets/app/pages/dashborad.js\"></script>

<!-- App js -->
<script src=\"/assets/app/js/app.js\"></script>
{% block script %}{% endblock %}
</body>
</html>", "layout.twig", "/home/lue/vicky_work/new_w/website/template/admin/layout.twig");
    }
}
