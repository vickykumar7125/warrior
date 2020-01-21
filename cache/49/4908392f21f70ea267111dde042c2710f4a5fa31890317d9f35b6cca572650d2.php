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

/* course_list.twig */
class __TwigTemplate_c735a3d6a4d6f6058c5371f0855b42f7b64889a544a1cee646733061937f0512 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'main_content' => [$this, 'block_main_content'],
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
        $this->parent = $this->loadTemplate("layout.twig", "course_list.twig", 1);
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
                <h4 class=\"page-title\">Course List</h4>
            </div>
        </div>
        <div class=\"clearfix\"></div>
    </div>
    <!-- end page title end breadcrumb -->
    <div class=\"row\">
        <div class=\"col-12\">
            <div class=\"card\">
                <div class=\"card-body\">
                    <table id=\"datatable-buttons\" class=\"table table-striped table-bordered w-100\">
                        <thead>
                        <tr>
                            <th>Sl. No</th>
                            <th>Name</th>
                            <th>Detail Name</th>
                            <th>Duration</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        ";
        // line 27
        $context["count"] = 1;
        // line 28
        echo "                        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["course_list"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["course"]) {
            // line 29
            echo "                            <tr>
                                <td>";
            // line 30
            echo twig_escape_filter($this->env, ($context["count"] ?? null), "html", null, true);
            echo "</td>
                                <td>";
            // line 31
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["course"], "course_name", [], "any", false, false, false, 31), "html", null, true);
            echo "</td>
                                <td>";
            // line 32
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["course"], "full_name", [], "any", false, false, false, 32), "html", null, true);
            echo "</td>
                                <td>";
            // line 33
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["course"], "duration", [], "any", false, false, false, 33), "html", null, true);
            echo "</td>
                                <td class=\"text-center\"><a href=\"/admin/edit_course.php?id=";
            // line 34
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["course"], "id", [], "any", false, false, false, 34), "html", null, true);
            echo "\"><button class=\"btn btn-sm btn-outline-warning\" title=\"Edit/View Course\"><i class=\"fas fa-edit\"></i>&nbsp;Edit</button></a></td>
                            </tr>
                            ";
            // line 36
            $context["count"] = (($context["count"] ?? null) + 1);
            // line 37
            echo "                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['course'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        echo "                        <tbody>
                        </tbody>
                    </table>

                </div>
            </div>
        </div> <!-- end col -->
    </div> <!-- end row -->
";
    }

    public function getTemplateName()
    {
        return "course_list.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  114 => 38,  108 => 37,  106 => 36,  101 => 34,  97 => 33,  93 => 32,  89 => 31,  85 => 30,  82 => 29,  77 => 28,  75 => 27,  50 => 4,  46 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"layout.twig\" %}

{% block main_content %}
    <div class=\"row\">
        <div class=\"col-sm-12\">
            <div class=\"page-title-box\">
                <h4 class=\"page-title\">Course List</h4>
            </div>
        </div>
        <div class=\"clearfix\"></div>
    </div>
    <!-- end page title end breadcrumb -->
    <div class=\"row\">
        <div class=\"col-12\">
            <div class=\"card\">
                <div class=\"card-body\">
                    <table id=\"datatable-buttons\" class=\"table table-striped table-bordered w-100\">
                        <thead>
                        <tr>
                            <th>Sl. No</th>
                            <th>Name</th>
                            <th>Detail Name</th>
                            <th>Duration</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        {% set count = 1 %}
                        {% for course in course_list %}
                            <tr>
                                <td>{{ count }}</td>
                                <td>{{ course.course_name }}</td>
                                <td>{{ course.full_name }}</td>
                                <td>{{ course.duration }}</td>
                                <td class=\"text-center\"><a href=\"/admin/edit_course.php?id={{ course.id }}\"><button class=\"btn btn-sm btn-outline-warning\" title=\"Edit/View Course\"><i class=\"fas fa-edit\"></i>&nbsp;Edit</button></a></td>
                            </tr>
                            {% set count = count + 1 %}
                        {% endfor %}
                        <tbody>
                        </tbody>
                    </table>

                </div>
            </div>
        </div> <!-- end col -->
    </div> <!-- end row -->
{% endblock %}", "course_list.twig", "/home/lue/vicky_work/new_w/website/template/admin/course_list.twig");
    }
}
