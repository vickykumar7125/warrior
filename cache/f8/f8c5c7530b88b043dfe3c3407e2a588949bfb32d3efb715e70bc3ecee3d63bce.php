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

/* edit_user.twig */
class __TwigTemplate_a78c4ec799e3aa4b5b9a2cf44fad86a08df0709f9909261acc7a20607d396b19 extends Template
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
        $this->parent = $this->loadTemplate("layout.twig", "edit_user.twig", 1);
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
                <h4 class=\"page-title\">Edit User</h4>
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
                                <input class=\"form-control\" type=\"text\" required readonly name=\"user_name\" value=\"";
        // line 21
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["detail"] ?? null), "user_id", [], "any", false, false, false, 21), "html", null, true);
        echo "\" id=\"user_name\">
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
                        <button type=\"submit\" class=\"btn btn-success\"><i class=\"fas fa-edit\"></i>&nbsp;Edit</button>
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
        if (0 === twig_compare(($context["status"] ?? null), 200)) {
            // line 51
            echo "        window.alert('User updated successfully.');
        window.location.href = '/admin/user_list.php';
        ";
        }
        // line 54
        echo "        ";
        if (0 === twig_compare(($context["status"] ?? null), 404)) {
            // line 55
            echo "        window.alert('Error, Please try again.');
        ";
        }
        // line 57
        echo "    </script>
";
    }

    public function getTemplateName()
    {
        return "edit_user.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  124 => 57,  120 => 55,  117 => 54,  112 => 51,  109 => 50,  105 => 48,  103 => 47,  100 => 46,  96 => 45,  70 => 21,  51 => 4,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"layout.twig\" %}

{% block main_content %}
    <div class=\"row\">
        <div class=\"col-sm-12\">
            <div class=\"page-title-box\">
                <h4 class=\"page-title\">Edit User</h4>
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
                                <input class=\"form-control\" type=\"text\" required readonly name=\"user_name\" value=\"{{ detail.user_id }}\" id=\"user_name\">
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
        window.alert('User updated successfully.');
        window.location.href = '/admin/user_list.php';
        {% endif %}
        {% if status == 404 %}
        window.alert('Error, Please try again.');
        {% endif %}
    </script>
{% endblock %}", "edit_user.twig", "/home/lue/vicky_work/new_w/website/template/admin/edit_user.twig");
    }
}
