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

/* new_course.twig */
class __TwigTemplate_a9fc6edece1056aebcabd203c2ec05253136af5d6621bef9a40be7a84cce6cd8 extends Template
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
        $this->parent = $this->loadTemplate("layout.twig", "new_course.twig", 1);
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
                <h4 class=\"page-title\">New Course</h4>
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
                                <input class=\"form-control\" type=\"text\" required name=\"name\" placeholder=\"Enter Course Name\" id=\"user_name\">
                            </div>
                        </div>
                        <div class=\"form-group row\">
                            <label for=\"password\" class=\"col-sm-4 col-form-label text-left\">Full Name</label>
                            <div class=\"col-sm-8\">
                                <input class=\"form-control\" type=\"text\" required name=\"full_name\" placeholder=\"Enter course full name\" id=\"password\">
                            </div>
                        </div>
                        <div class=\"form-group row\">
                            <label for=\"conf_password\" class=\"col-sm-4 col-form-label text-left\">Duration</label>
                            <div class=\"col-sm-8\">
                                <input class=\"form-control\" type=\"text\" required name=\"duration\" placeholder=\"Enter Course duration\" id=\"conf_password\">
                            </div>
                        </div>
                        <div class=\"form-group row\">
                            <label for=\"textarea\" class=\"col-sm-4 col-form-label text-left\">Description</label>
                            <div class=\"col-sm-8\">
                                <textarea id=\"textarea\" name=\"desc\" class=\"form-control\" maxlength=\"225\" rows=\"3\" placeholder=\"Enter the course description\"></textarea>
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

    // line 51
    public function block_script($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 52
        echo "    <script>
        ";
        // line 53
        if (0 === twig_compare(($context["status"] ?? null), 400)) {
            // line 54
            echo "        window.alert('Course Already exist.');
        ";
        }
        // line 56
        echo "        ";
        if (0 === twig_compare(($context["status"] ?? null), 200)) {
            // line 57
            echo "        window.alert('Course Added successfully.');
        window.location.href = '/admin/course_list.php';
        ";
        }
        // line 60
        echo "        ";
        if (0 === twig_compare(($context["status"] ?? null), 404)) {
            // line 61
            echo "        window.alert('Error, Please try again.');
        ";
        }
        // line 63
        echo "    </script>
";
    }

    public function getTemplateName()
    {
        return "new_course.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  127 => 63,  123 => 61,  120 => 60,  115 => 57,  112 => 56,  108 => 54,  106 => 53,  103 => 52,  99 => 51,  51 => 4,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"layout.twig\" %}

{% block main_content %}
    <div class=\"row\">
        <div class=\"col-sm-12\">
            <div class=\"page-title-box\">
                <h4 class=\"page-title\">New Course</h4>
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
                                <input class=\"form-control\" type=\"text\" required name=\"name\" placeholder=\"Enter Course Name\" id=\"user_name\">
                            </div>
                        </div>
                        <div class=\"form-group row\">
                            <label for=\"password\" class=\"col-sm-4 col-form-label text-left\">Full Name</label>
                            <div class=\"col-sm-8\">
                                <input class=\"form-control\" type=\"text\" required name=\"full_name\" placeholder=\"Enter course full name\" id=\"password\">
                            </div>
                        </div>
                        <div class=\"form-group row\">
                            <label for=\"conf_password\" class=\"col-sm-4 col-form-label text-left\">Duration</label>
                            <div class=\"col-sm-8\">
                                <input class=\"form-control\" type=\"text\" required name=\"duration\" placeholder=\"Enter Course duration\" id=\"conf_password\">
                            </div>
                        </div>
                        <div class=\"form-group row\">
                            <label for=\"textarea\" class=\"col-sm-4 col-form-label text-left\">Description</label>
                            <div class=\"col-sm-8\">
                                <textarea id=\"textarea\" name=\"desc\" class=\"form-control\" maxlength=\"225\" rows=\"3\" placeholder=\"Enter the course description\"></textarea>
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
        {% if status == 400 %}
        window.alert('Course Already exist.');
        {% endif %}
        {% if status == 200 %}
        window.alert('Course Added successfully.');
        window.location.href = '/admin/course_list.php';
        {% endif %}
        {% if status == 404 %}
        window.alert('Error, Please try again.');
        {% endif %}
    </script>
{% endblock %}", "new_course.twig", "/home/lue/vicky_work/new_w/website/template/admin/new_course.twig");
    }
}
