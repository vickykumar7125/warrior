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

/* login.twig */
class __TwigTemplate_9330ac79292ffe91b08a44faa2c326a78895757291b8cba864f16e1af30409ae extends Template
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
    <title>Admin Login | Computer Warriors Education Pvt. Ltd.</title>
    <meta content=\"Admin Dashboard\" name=\"description\" />
    <meta content=\"Vicky Kumar\" name=\"author\" />
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
                <img src=\"/upload/admin-logo.jpg\" alt=\"logo\">
            </div>

            <div class=\"px-3 pb-3\">
                <form class=\"form-horizontal m-t-20\" method=\"post\">

                    ";
        // line 37
        if (0 !== twig_compare(($context["status"] ?? null), 200)) {
            // line 38
            echo "
                    <div class=\"form-group row\">
                        <div class=\"col-12\">
                            <input class=\"form-control\" type=\"text\" name=\"username\" required=\"\" placeholder=\"Username\">
                        </div>
                    </div>

                    <div class=\"form-group row\">
                        <div class=\"col-12\">
                            <input class=\"form-control\" type=\"password\" required=\"\" name=\"password\" placeholder=\"Password\">
                        </div>
                    </div>

                    <div class=\"form-group text-center row m-t-20\">
                        <div class=\"col-12\">
                            <button class=\"btn btn-success waves-effect waves-light\" type=\"submit\"><i class=\"fas fa-sign-in-alt\"></i>&nbsp;Log In</button>
                        </div>
                    </div>
                    ";
        }
        // line 57
        echo "                </form>
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
<script>
    ";
        // line 79
        if (0 === twig_compare(($context["status"] ?? null), 200)) {
            // line 80
            echo "    window.alert(\"Login Successfully.\");
    window.location.href = '/admin/dashboard.php';
    ";
        }
        // line 83
        echo "    ";
        if (0 === twig_compare(($context["status"] ?? null), 404)) {
            // line 84
            echo "    window.alert(\"Please enter valid login ud & password.\");
    ";
        }
        // line 86
        echo "</script>
</body>
</html>";
    }

    public function getTemplateName()
    {
        return "login.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  136 => 86,  132 => 84,  129 => 83,  124 => 80,  122 => 79,  98 => 57,  77 => 38,  75 => 37,  37 => 1,);
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
    <title>Admin Login | Computer Warriors Education Pvt. Ltd.</title>
    <meta content=\"Admin Dashboard\" name=\"description\" />
    <meta content=\"Vicky Kumar\" name=\"author\" />
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
                <img src=\"/upload/admin-logo.jpg\" alt=\"logo\">
            </div>

            <div class=\"px-3 pb-3\">
                <form class=\"form-horizontal m-t-20\" method=\"post\">

                    {% if status != 200 %}

                    <div class=\"form-group row\">
                        <div class=\"col-12\">
                            <input class=\"form-control\" type=\"text\" name=\"username\" required=\"\" placeholder=\"Username\">
                        </div>
                    </div>

                    <div class=\"form-group row\">
                        <div class=\"col-12\">
                            <input class=\"form-control\" type=\"password\" required=\"\" name=\"password\" placeholder=\"Password\">
                        </div>
                    </div>

                    <div class=\"form-group text-center row m-t-20\">
                        <div class=\"col-12\">
                            <button class=\"btn btn-success waves-effect waves-light\" type=\"submit\"><i class=\"fas fa-sign-in-alt\"></i>&nbsp;Log In</button>
                        </div>
                    </div>
                    {% endif %}
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
<script>
    {% if status == 200 %}
    window.alert(\"Login Successfully.\");
    window.location.href = '/admin/dashboard.php';
    {% endif %}
    {% if status == 404 %}
    window.alert(\"Please enter valid login ud & password.\");
    {% endif %}
</script>
</body>
</html>", "login.twig", "/home/lue/vicky_work/new_w/website/template/auth/login.twig");
    }
}
