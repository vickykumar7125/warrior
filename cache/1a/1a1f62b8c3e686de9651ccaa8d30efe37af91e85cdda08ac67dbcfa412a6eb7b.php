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

/* password.twig */
class __TwigTemplate_40666fd2f93db8238065d9e10debd525af985da4aec3040ece1e2c1726895359 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'main_content' => [$this, 'block_main_content'],
            'script' => [$this, 'block_script'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "layout.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("layout.twig", "password.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_main_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "    <div class=\"row\">
        <div class=\"col-sm-12\">
            <div class=\"page-title-box\">
                <h4 class=\"page-title\">Change Password</h4>
            </div>
        </div>
        <div class=\"clearfix\"></div>
    </div>
    <!-- end page title end breadcrumb -->
    <div class=\"row\">
        <div class=\"col-lg-6\">
            <div class=\"card\">
                <div class=\"card-body text-center\">
                    <form method=\"post\">
                        <div class=\"form-group row\">
                            <label for=\"password\" class=\"col-sm-4 col-form-label text-left\">Password</label>
                            <div class=\"col-sm-8\">
                                <input class=\"form-control\" type=\"password\" name=\"password\" id=\"password\">
                            </div>
                        </div>
                        <div class=\"form-group row\">
                            <label for=\"conf_password\" class=\"col-sm-4 col-form-label text-left\">Conf. Password</label>
                            <div class=\"col-sm-8\">
                                <input class=\"form-control\" type=\"password\" name=\"conf_password\" id=\"conf_password\">
                            </div>
                        </div>
                        <button type=\"submit\" class=\"btn btn-success\"><i class=\"fas fa-edit\"></i>&nbsp;Edit</button>
                    </form>
                </div>
            </div>
        </div> <!-- end col -->
    </div> <!-- end row -->
";
    }

    // line 39
    public function block_script($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 40
        echo "    <script>
        ";
        // line 41
        if (0 === twig_compare(($context["status"] ?? null), 301)) {
            // line 42
            echo "        window.alert('Password & Confirm Password Does not match.');
        ";
        }
        // line 44
        echo "        ";
        if (0 === twig_compare(($context["status"] ?? null), 200)) {
            // line 45
            echo "        window.alert('Password Changed successfully.');
        ";
        }
        // line 47
        echo "        ";
        if (0 === twig_compare(($context["status"] ?? null), 404)) {
            // line 48
            echo "        window.alert('Error, Please try again.');
        ";
        }
        // line 50
        echo "    </script>
";
    }

    public function getTemplateName()
    {
        return "password.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  114 => 50,  110 => 48,  107 => 47,  103 => 45,  100 => 44,  96 => 42,  94 => 41,  91 => 40,  87 => 39,  51 => 4,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"layout.twig\" %}

{% block main_content %}
    <div class=\"row\">
        <div class=\"col-sm-12\">
            <div class=\"page-title-box\">
                <h4 class=\"page-title\">Change Password</h4>
            </div>
        </div>
        <div class=\"clearfix\"></div>
    </div>
    <!-- end page title end breadcrumb -->
    <div class=\"row\">
        <div class=\"col-lg-6\">
            <div class=\"card\">
                <div class=\"card-body text-center\">
                    <form method=\"post\">
                        <div class=\"form-group row\">
                            <label for=\"password\" class=\"col-sm-4 col-form-label text-left\">Password</label>
                            <div class=\"col-sm-8\">
                                <input class=\"form-control\" type=\"password\" name=\"password\" id=\"password\">
                            </div>
                        </div>
                        <div class=\"form-group row\">
                            <label for=\"conf_password\" class=\"col-sm-4 col-form-label text-left\">Conf. Password</label>
                            <div class=\"col-sm-8\">
                                <input class=\"form-control\" type=\"password\" name=\"conf_password\" id=\"conf_password\">
                            </div>
                        </div>
                        <button type=\"submit\" class=\"btn btn-success\"><i class=\"fas fa-edit\"></i>&nbsp;Edit</button>
                    </form>
                </div>
            </div>
        </div> <!-- end col -->
    </div> <!-- end row -->
{% endblock %}


{% block script %}
    <script>
        {% if status == 301 %}
        window.alert('Password & Confirm Password Does not match.');
        {% endif %}
        {% if status == 200 %}
        window.alert('Password Changed successfully.');
        {% endif %}
        {% if status == 404 %}
        window.alert('Error, Please try again.');
        {% endif %}
    </script>
{% endblock %}", "password.twig", "/home/lue/vicky_work/new_w/website/template/admin/password.twig");
    }
}
