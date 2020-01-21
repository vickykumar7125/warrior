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

/* select_student.twig */
class __TwigTemplate_4d517c5bd157691061d0982faea96f3cb8c6b8c8df7caf223f485188a43b1969 extends Template
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
        $this->parent = $this->loadTemplate("layout.twig", "select_student.twig", 1);
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
                <h4 class=\"page-title\">Select Student to issue certificate</h4>
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
                            <th>Reg.</th>
                            <th>Name</th>
                            <th>Father Name</th>
                            <th>Course</th>
                            <th>DOA</th>
                            <th>Fees</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        ";
        // line 31
        $context["count"] = 1;
        // line 32
        echo "                        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["student_list"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["student"]) {
            // line 33
            echo "                            <tr>
                                <td>";
            // line 34
            echo twig_escape_filter($this->env, ($context["count"] ?? null), "html", null, true);
            echo "</td>
                                <td>";
            // line 35
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["student"], "reg_id", [], "any", false, false, false, 35), "html", null, true);
            echo "</td>
                                <td>";
            // line 36
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["student"], "name", [], "any", false, false, false, 36), "html", null, true);
            echo "</td>
                                <td>";
            // line 37
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["student"], "father_name", [], "any", false, false, false, 37), "html", null, true);
            echo "</td>
                                <td>";
            // line 38
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["student"], "course_detail", [], "any", false, false, false, 38), "course_name", [], "any", false, false, false, 38), "html", null, true);
            echo "</td>
                                <td>";
            // line 39
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["student"], "doa", [], "any", false, false, false, 39), "html", null, true);
            echo "</td>
                                <td>";
            // line 40
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["student"], "course_fee", [], "any", false, false, false, 40), "html", null, true);
            echo "</td>
                                <td><a href=\"/admin/new_certificate.php?id=";
            // line 41
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["student"], "id", [], "any", false, false, false, 41), "html", null, true);
            echo "\"><button class=\"btn btn-sm btn-outline-success\" title=\"Issues certificate\"><i class=\"fas fa-user-graduate\"></i>&nbsp;Issue</button></a></td>
                            </tr>
                            ";
            // line 43
            $context["count"] = (($context["count"] ?? null) + 1);
            // line 44
            echo "                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['student'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
        echo "                        </tbody>
                    </table>

                </div>
            </div>
        </div> <!-- end col -->
    </div> <!-- end row -->
";
    }

    public function getTemplateName()
    {
        return "select_student.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  130 => 45,  124 => 44,  122 => 43,  117 => 41,  113 => 40,  109 => 39,  105 => 38,  101 => 37,  97 => 36,  93 => 35,  89 => 34,  86 => 33,  81 => 32,  79 => 31,  50 => 4,  46 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"layout.twig\" %}

{% block main_content %}
    <div class=\"row\">
        <div class=\"col-sm-12\">
            <div class=\"page-title-box\">
                <h4 class=\"page-title\">Select Student to issue certificate</h4>
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
                            <th>Reg.</th>
                            <th>Name</th>
                            <th>Father Name</th>
                            <th>Course</th>
                            <th>DOA</th>
                            <th>Fees</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        {% set count = 1 %}
                        {% for student in student_list %}
                            <tr>
                                <td>{{ count }}</td>
                                <td>{{ student.reg_id }}</td>
                                <td>{{ student.name }}</td>
                                <td>{{ student.father_name }}</td>
                                <td>{{ student.course_detail.course_name }}</td>
                                <td>{{ student.doa }}</td>
                                <td>{{ student.course_fee }}</td>
                                <td><a href=\"/admin/new_certificate.php?id={{ student.id }}\"><button class=\"btn btn-sm btn-outline-success\" title=\"Issues certificate\"><i class=\"fas fa-user-graduate\"></i>&nbsp;Issue</button></a></td>
                            </tr>
                            {% set count = count + 1 %}
                        {% endfor %}
                        </tbody>
                    </table>

                </div>
            </div>
        </div> <!-- end col -->
    </div> <!-- end row -->
{% endblock %}", "select_student.twig", "/home/lue/vicky_work/new_w/website/template/admin/select_student.twig");
    }
}
