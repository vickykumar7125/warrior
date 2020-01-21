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

/* auth/login.twig */
class __TwigTemplate_303ce09619e38ed041d2f2b053fe3e05deb2a163e2a083067f884dca020fd723 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
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
    <title>Zoter - Responsive Bootstrap 4 Admin Dashboard</title>
    <meta content=\"Admin Dashboard\" name=\"description\" />
    <meta content=\"Mannatthemes\" name=\"author\" />
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\" />

    <link rel=\"shortcut icon\" href=\"/assets/app/images/favicon.ico\">

    <link href=\"/assets/app/css/bootstrap.min.css\" rel=\"stylesheet\" type=\"text/css\">
    <link href=\"/assets/app/css/icons.css\" rel=\"stylesheet\" type=\"text/css\">
    <link href=\"/assets/app/css/style.css\" rel=\"stylesheet\" type=\"text/css\">

</head>
<body>


<!-- Begin page -->
<div class=\"accountbg\"></div>
<div class=\"wrapper-page\">

    <div class=\"card\">
        <div class=\"card-body\">

            <div class=\"text-center\">
                <a href=\"index.html\" class=\"logo logo-admin\"><img src=\"/assets/app/images/e-logo.png\" height=\"20\" alt=\"logo\"></a>
            </div>

            <div class=\"px-3 pb-3\">
                <form class=\"form-horizontal m-t-20\" action=\"index.html\">

                    <div class=\"form-group row\">
                        <div class=\"col-12\">
                            <input class=\"form-control\" type=\"text\" required=\"\" placeholder=\"Username\">
                        </div>
                    </div>

                    <div class=\"form-group row\">
                        <div class=\"col-12\">
                            <input class=\"form-control\" type=\"password\" required=\"\" placeholder=\"Password\">
                        </div>
                    </div>

                    <div class=\"form-group row\">
                        <div class=\"col-12\">
                            <div class=\"custom-control custom-checkbox\">
                                <input type=\"checkbox\" class=\"custom-control-input\" id=\"customCheck1\">
                                <label class=\"custom-control-label\" for=\"customCheck1\">Remember me</label>
                            </div>
                        </div>
                    </div>

                    <div class=\"form-group text-center row m-t-20\">
                        <div class=\"col-12\">
                            <button class=\"btn btn-danger btn-block waves-effect waves-light\" type=\"submit\">Log In</button>
                        </div>
                    </div>

                    <div class=\"form-group m-t-10 mb-0 row\">
                        <div class=\"col-sm-7 m-t-20\">
                            <a href=\"pages-recoverpw.html\" class=\"text-muted\"><i class=\"mdi mdi-lock\"></i> <small>Forgot your password ?</small></a>
                        </div>
                        <div class=\"col-sm-5 m-t-20\">
                            <a href=\"pages-register.html\" class=\"text-muted\"><i class=\"mdi mdi-account-circle\"></i> <small>Create an account ?</small></a>
                        </div>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>



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

<!-- App js -->
<script src=\"/assets/app/js/app.js\"></script>

</body>
</html>";
    }

    public function getTemplateName()
    {
        return "auth/login.twig";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
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
    <title>Zoter - Responsive Bootstrap 4 Admin Dashboard</title>
    <meta content=\"Admin Dashboard\" name=\"description\" />
    <meta content=\"Mannatthemes\" name=\"author\" />
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\" />

    <link rel=\"shortcut icon\" href=\"/assets/app/images/favicon.ico\">

    <link href=\"/assets/app/css/bootstrap.min.css\" rel=\"stylesheet\" type=\"text/css\">
    <link href=\"/assets/app/css/icons.css\" rel=\"stylesheet\" type=\"text/css\">
    <link href=\"/assets/app/css/style.css\" rel=\"stylesheet\" type=\"text/css\">

</head>
<body>


<!-- Begin page -->
<div class=\"accountbg\"></div>
<div class=\"wrapper-page\">

    <div class=\"card\">
        <div class=\"card-body\">

            <div class=\"text-center\">
                <a href=\"index.html\" class=\"logo logo-admin\"><img src=\"/assets/app/images/e-logo.png\" height=\"20\" alt=\"logo\"></a>
            </div>

            <div class=\"px-3 pb-3\">
                <form class=\"form-horizontal m-t-20\" action=\"index.html\">

                    <div class=\"form-group row\">
                        <div class=\"col-12\">
                            <input class=\"form-control\" type=\"text\" required=\"\" placeholder=\"Username\">
                        </div>
                    </div>

                    <div class=\"form-group row\">
                        <div class=\"col-12\">
                            <input class=\"form-control\" type=\"password\" required=\"\" placeholder=\"Password\">
                        </div>
                    </div>

                    <div class=\"form-group row\">
                        <div class=\"col-12\">
                            <div class=\"custom-control custom-checkbox\">
                                <input type=\"checkbox\" class=\"custom-control-input\" id=\"customCheck1\">
                                <label class=\"custom-control-label\" for=\"customCheck1\">Remember me</label>
                            </div>
                        </div>
                    </div>

                    <div class=\"form-group text-center row m-t-20\">
                        <div class=\"col-12\">
                            <button class=\"btn btn-danger btn-block waves-effect waves-light\" type=\"submit\">Log In</button>
                        </div>
                    </div>

                    <div class=\"form-group m-t-10 mb-0 row\">
                        <div class=\"col-sm-7 m-t-20\">
                            <a href=\"pages-recoverpw.html\" class=\"text-muted\"><i class=\"mdi mdi-lock\"></i> <small>Forgot your password ?</small></a>
                        </div>
                        <div class=\"col-sm-5 m-t-20\">
                            <a href=\"pages-register.html\" class=\"text-muted\"><i class=\"mdi mdi-account-circle\"></i> <small>Create an account ?</small></a>
                        </div>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>



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

<!-- App js -->
<script src=\"/assets/app/js/app.js\"></script>

</body>
</html>", "auth/login.twig", "F:\\website\\template\\auth\\login.twig");
    }
}
