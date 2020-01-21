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

/* new_user.twig */
class __TwigTemplate_0240ef944c294232fd5a8d4bcbc9d6948b5e25aa9b4ed6eba55a1fa7019afaf9 extends Template
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
        $this->parent = $this->loadTemplate("layout.twig", "new_user.twig", 1);
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
                <h4 class=\"page-title\">New User</h4>
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
                            <label for=\"user_name\" class=\"col-sm-4 col-form-label text-left\">User Name</label>
                            <div class=\"col-sm-8\">
                                <input class=\"form-control\" type=\"text\" required name=\"user_name\" id=\"user_name\">
                            </div>
                        </div>
                        <div class=\"form-group row\">
                            <label for=\"password\" class=\"col-sm-4 col-form-label text-left\">Password</label>
                            <div class=\"col-sm-8\">
                                <input class=\"form-control\" type=\"password\" required name=\"password\" id=\"password\">
                            </div>
                        </div>
                        <div class=\"form-group row\">
                            <label for=\"conf_password\" class=\"col-sm-4 col-form-label text-left\">Conf. Password</label>
                            <div class=\"col-sm-8\">
                                <input class=\"form-control\" type=\"password\" required name=\"conf_password\" id=\"conf_password\">
                            </div>
                        </div>
                        <button type=\"submit\" class=\"btn btn-success\"><i class=\"fas fa-plus-square\"></i>&nbsp;Add</button>
                    </form>
                </div>
            </div>
        </div> <!-- end col -->
    </div> <!-- end row -->
";
    }

    // line 45
    public function block_script($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 46
        echo "    <script>
        ";
        // line 47
        if (0 === twig_compare(($context["status"] ?? null), 301)) {
            // line 48
            echo "        window.alert('Password & Confirm Password Does not match.');
        ";
        }
        // line 50
        echo "        ";
        if (0 === twig_compare(($context["status"] ?? null), 400)) {
            // line 51
            echo "        window.alert('User Already exist.');
        ";
        }
        // line 53
        echo "        ";
        if (0 === twig_compare(($context["status"] ?? null), 200)) {
            // line 54
            echo "        window.alert('User Added successfully.');
        window.location.href = '/admin/user_list.php';
        ";
        }
        // line 57
        echo "        ";
        if (0 === twig_compare(($context["status"] ?? null), 404)) {
            // line 58
            echo "        window.alert('Error, Please try again.');
        ";
        }
        // line 60
        echo "    </script>
";
    }

    public function getTemplateName()
    {
        return "new_user.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  128 => 60,  124 => 58,  121 => 57,  116 => 54,  113 => 53,  109 => 51,  106 => 50,  102 => 48,  100 => 47,  97 => 46,  93 => 45,  51 => 4,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"layout.twig\" %}

{% block main_content %}
    <div class=\"row\">
        <div class=\"col-sm-12\">
            <div class=\"page-title-box\">
                <h4 class=\"page-title\">New User</h4>
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
                            <label for=\"user_name\" class=\"col-sm-4 col-form-label text-left\">User Name</label>
                            <div class=\"col-sm-8\">
                                <input class=\"form-control\" type=\"text\" required name=\"user_name\" id=\"user_name\">
                            </div>
                        </div>
                        <div class=\"form-group row\">
                            <label for=\"password\" class=\"col-sm-4 col-form-label text-left\">Password</label>
                            <div class=\"col-sm-8\">
                                <input class=\"form-control\" type=\"password\" required name=\"password\" id=\"password\">
                            </div>
                        </div>
                        <div class=\"form-group row\">
                            <label for=\"conf_password\" class=\"col-sm-4 col-form-label text-left\">Conf. Password</label>
                            <div class=\"col-sm-8\">
                                <input class=\"form-control\" type=\"password\" required name=\"conf_password\" id=\"conf_password\">
                            </div>
                        </div>
                        <button type=\"submit\" class=\"btn btn-success\"><i class=\"fas fa-plus-square\"></i>&nbsp;Add</button>
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
        {% if status == 400 %}
        window.alert('User Already exist.');
        {% endif %}
        {% if status == 200 %}
        window.alert('User Added successfully.');
        window.location.href = '/admin/user_list.php';
        {% endif %}
        {% if status == 404 %}
        window.alert('Error, Please try again.');
        {% endif %}
    </script>
{% endblock %}", "new_user.twig", "/home/lue/vicky_work/new_w/website/template/admin/new_user.twig");
    }
}
