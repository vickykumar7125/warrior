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

/* student_list.twig */
class __TwigTemplate_3b08742ba92fd17ff004e05cc35e30591424b134280750ef63367558cc5c08dd extends Template
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
        $this->parent = $this->loadTemplate("layout.twig", "student_list.twig", 1);
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
                <h4 class=\"page-title\">Student List</h4>
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
                            <th>Created At</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        ";
        // line 32
        $context["count"] = 1;
        // line 33
        echo "                        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["student_list"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["student"]) {
            // line 34
            echo "                            <tr>
                                <td>";
            // line 35
            echo twig_escape_filter($this->env, ($context["count"] ?? null), "html", null, true);
            echo "</td>
                                <td>";
            // line 36
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["student"], "reg_id", [], "any", false, false, false, 36), "html", null, true);
            echo "</td>
                                <td>";
            // line 37
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["student"], "name", [], "any", false, false, false, 37), "html", null, true);
            echo "</td>
                                <td>";
            // line 38
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["student"], "father_name", [], "any", false, false, false, 38), "html", null, true);
            echo "</td>
                                <td>";
            // line 39
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["student"], "course_detail", [], "any", false, false, false, 39), "course_name", [], "any", false, false, false, 39), "html", null, true);
            echo "</td>
                                <td>";
            // line 40
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["student"], "doa", [], "any", false, false, false, 40), "html", null, true);
            echo "</td>
                                <td>";
            // line 41
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["student"], "course_fee", [], "any", false, false, false, 41), "html", null, true);
            echo "</td>
                                <td>";
            // line 42
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["student"], "created_at", [], "any", false, false, false, 42), "html", null, true);
            echo "</td>
                                <td><a href=\"/admin/edit_student.php?id=";
            // line 43
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["student"], "id", [], "any", false, false, false, 43), "html", null, true);
            echo "\"><button class=\"btn btn-sm btn-outline-warning\" title=\"Edit/View User\"><i class=\"fas fa-user-edit\"></i></button></a>&nbsp;<a href=\"/admin/delete_student.php?id=";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["student"], "id", [], "any", false, false, false, 43), "html", null, true);
            echo "\"><button class=\"btn btn-sm btn-outline-danger\" title=\"Delete Student\"><i class=\"fas fa-trash-alt\"></i></button></a></td>
                            </tr>
                            ";
            // line 45
            $context["count"] = (($context["count"] ?? null) + 1);
            // line 46
            echo "                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['student'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
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
        return "student_list.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 47,  131 => 46,  129 => 45,  122 => 43,  118 => 42,  114 => 41,  110 => 40,  106 => 39,  102 => 38,  98 => 37,  94 => 36,  90 => 35,  87 => 34,  82 => 33,  80 => 32,  50 => 4,  46 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"layout.twig\" %}

{% block main_content %}
    <div class=\"row\">
        <div class=\"col-sm-12\">
            <div class=\"page-title-box\">
                <h4 class=\"page-title\">Student List</h4>
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
                            <th>Created At</th>
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
                                <td>{{ student.created_at }}</td>
                                <td><a href=\"/admin/edit_student.php?id={{ student.id }}\"><button class=\"btn btn-sm btn-outline-warning\" title=\"Edit/View User\"><i class=\"fas fa-user-edit\"></i></button></a>&nbsp;<a href=\"/admin/delete_student.php?id={{ student.id }}\"><button class=\"btn btn-sm btn-outline-danger\" title=\"Delete Student\"><i class=\"fas fa-trash-alt\"></i></button></a></td>
                            </tr>
                            {% set count = count + 1 %}
                        {% endfor %}
                        </tbody>
                    </table>

                </div>
            </div>
        </div> <!-- end col -->
    </div> <!-- end row -->
{% endblock %}", "student_list.twig", "/home/lue/vicky_work/new_w/website/template/admin/student_list.twig");
    }
}
