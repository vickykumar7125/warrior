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

/* edit_course.twig */
class __TwigTemplate_ce0cabde1854bdee452c8d60a4d83dc4e0d0ca5b8ee4ab30aca68aaf34fe768a extends Template
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
        $this->parent = $this->loadTemplate("layout.twig", "edit_course.twig", 1);
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
                <h4 class=\"page-title\">Edit Course</h4>
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
                            <label for=\"user_name\" class=\"col-sm-4 col-form-label text-left\">Course Name</label>
                            <div class=\"col-sm-8\">
                                <input class=\"form-control\" value=\"";
        // line 21
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["detail"] ?? null), "course_name", [], "any", false, false, false, 21), "html", null, true);
        echo "\" type=\"text\" required name=\"name\" placeholder=\"Enter Course Name\" id=\"user_name\">
                            </div>
                        </div>
                        <div class=\"form-group row\">
                            <label for=\"password\" class=\"col-sm-4 col-form-label text-left\">Full Name</label>
                            <div class=\"col-sm-8\">
                                <input class=\"form-control\" value=\"";
        // line 27
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["detail"] ?? null), "full_name", [], "any", false, false, false, 27), "html", null, true);
        echo "\" type=\"text\" required name=\"full_name\" placeholder=\"Enter course full name\" id=\"password\">
                            </div>
                        </div>
                        <div class=\"form-group row\">
                            <label for=\"conf_password\" class=\"col-sm-4 col-form-label text-left\">Duration</label>
                            <div class=\"col-sm-8\">
                                <input class=\"form-control\" type=\"text\" required value=\"";
        // line 33
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["detail"] ?? null), "duration", [], "any", false, false, false, 33), "html", null, true);
        echo "\" name=\"duration\" placeholder=\"Enter Course duration\" id=\"conf_password\">
                            </div>
                        </div>
                        <div class=\"form-group row\">
                            <label for=\"textarea\" class=\"col-sm-4 col-form-label text-left\">Description</label>
                            <div class=\"col-sm-8\">
                                <textarea id=\"textarea\" name=\"desc\" class=\"form-control\" maxlength=\"225\" rows=\"3\" placeholder=\"Enter the course description\">";
        // line 39
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["detail"] ?? null), "description", [], "any", false, false, false, 39), "html", null, true);
        echo "</textarea>
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

    // line 51
    public function block_script($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 52
        echo "    <script>
        ";
        // line 53
        if (0 === twig_compare(($context["status"] ?? null), 200)) {
            // line 54
            echo "        window.alert('Course updated successfully.');
        window.location.href = '/admin/course_list.php';
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
        return "edit_course.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  132 => 60,  128 => 58,  125 => 57,  120 => 54,  118 => 53,  115 => 52,  111 => 51,  97 => 39,  88 => 33,  79 => 27,  70 => 21,  51 => 4,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"layout.twig\" %}

{% block main_content %}
    <div class=\"row\">
        <div class=\"col-sm-12\">
            <div class=\"page-title-box\">
                <h4 class=\"page-title\">Edit Course</h4>
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
                            <label for=\"user_name\" class=\"col-sm-4 col-form-label text-left\">Course Name</label>
                            <div class=\"col-sm-8\">
                                <input class=\"form-control\" value=\"{{ detail.course_name }}\" type=\"text\" required name=\"name\" placeholder=\"Enter Course Name\" id=\"user_name\">
                            </div>
                        </div>
                        <div class=\"form-group row\">
                            <label for=\"password\" class=\"col-sm-4 col-form-label text-left\">Full Name</label>
                            <div class=\"col-sm-8\">
                                <input class=\"form-control\" value=\"{{ detail.full_name }}\" type=\"text\" required name=\"full_name\" placeholder=\"Enter course full name\" id=\"password\">
                            </div>
                        </div>
                        <div class=\"form-group row\">
                            <label for=\"conf_password\" class=\"col-sm-4 col-form-label text-left\">Duration</label>
                            <div class=\"col-sm-8\">
                                <input class=\"form-control\" type=\"text\" required value=\"{{ detail.duration }}\" name=\"duration\" placeholder=\"Enter Course duration\" id=\"conf_password\">
                            </div>
                        </div>
                        <div class=\"form-group row\">
                            <label for=\"textarea\" class=\"col-sm-4 col-form-label text-left\">Description</label>
                            <div class=\"col-sm-8\">
                                <textarea id=\"textarea\" name=\"desc\" class=\"form-control\" maxlength=\"225\" rows=\"3\" placeholder=\"Enter the course description\">{{ detail.description }}</textarea>
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
        {% if status == 200 %}
        window.alert('Course updated successfully.');
        window.location.href = '/admin/course_list.php';
        {% endif %}
        {% if status == 404 %}
        window.alert('Error, Please try again.');
        {% endif %}
    </script>
{% endblock %}", "edit_course.twig", "/home/lue/vicky_work/new_w/website/template/admin/edit_course.twig");
    }
}
