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

/* new_certificate.twig */
class __TwigTemplate_ca2943bd872892d869c4629bfe03da600536bb840ba00c3aa4f4ac17d40ac9bb extends Template
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
        $this->parent = $this->loadTemplate("layout.twig", "new_certificate.twig", 1);
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
                <h4 class=\"page-title\">New Student</h4>
            </div>
        </div>
        <div class=\"clearfix\"></div>
    </div>
    <!-- end page title end breadcrumb -->
    <div class=\"row\">
        <div class=\"col-lg-6\">
            <div class=\"card\">
                <div class=\"card-body text-center\">
                    <form method=\"post\" enctype=\"multipart/form-data\">
                        <div class=\"form-group row\">
                            <label for=\"Reg.ID\" class=\"col-sm-4 col-form-label text-left\">Reg. No.</label>
                            <div class=\"col-sm-8\">
                                <select name=\"stu_id\" class=\"select2 required form-control mb-3 custom-select\">
                                    <option value=\"0\">Select</option>
                                    ";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["student_list"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["student"]) {
            // line 24
            echo "                                        <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["student"], "id", [], "any", false, false, false, 24), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["student"], "reg_id", [], "any", false, false, false, 24), "html", null, true);
            echo "</option>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['student'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo "                                </select>
                            </div>
                        </div>
                        <div class=\"form-group row\">
                            <label for=\"name\" class=\"col-sm-4 col-form-label text-left\">Name</label>
                            <div class=\"col-sm-8\">
                                <input class=\"form-control\" type=\"text\" name=\"name\" required readonly id=\"name\">
                            </div>
                        </div>
                        <div class=\"form-group row\">
                            <label for=\"Mother Name\" class=\"col-sm-4 col-form-label text-left\">Mother Name</label>
                            <div class=\"col-sm-8\">
                                <input class=\"form-control\" type=\"text\" name=\"mname\" required readonly id=\"mname\">
                            </div>
                        </div>
                        <div class=\"form-group row\">
                            <label for=\"fname\" class=\"col-sm-4 col-form-label text-left\">Father Name</label>
                            <div class=\"col-sm-8\">
                                <input class=\"form-control\" type=\"text\" name=\"\" required readonly id=\"fname\">
                            </div>
                        </div>
                        <div class=\"form-group row\">
                            <label for=\"\" class=\"col-sm-4 col-form-label text-left\"></label>
                            <div class=\"col-sm-8\">
                                <input class=\"form-control\" type=\"text\" name=\"\" required readonly id=\"\">
                            </div>
                        </div>
                        <div class=\"form-group row\">
                            <label for=\"\" class=\"col-sm-4 col-form-label text-left\"></label>
                            <div class=\"col-sm-8\">
                                <input class=\"form-control\" type=\"text\" name=\"\" required readonly id=\"\">
                            </div>
                        </div>
                        <div class=\"form-group row\">
                            <label for=\"\" class=\"col-sm-4 col-form-label text-left\"></label>
                            <div class=\"col-sm-8\">
                                <input class=\"form-control\" type=\"text\" name=\"\" required readonly id=\"\">
                            </div>
                        </div>
                        <div class=\"form-group row\">
                            <label for=\"\" class=\"col-sm-4 col-form-label text-left\"></label>
                            <div class=\"col-sm-8\">
                                <input class=\"form-control\" type=\"text\" name=\"\" required readonly id=\"\">
                            </div>
                        </div>
                        <div class=\"form-group row\">
                            <label for=\"\" class=\"col-sm-4 col-form-label text-left\"></label>
                            <div class=\"col-sm-8\">
                                <input class=\"form-control\" type=\"text\" name=\"\" required readonly id=\"\">
                            </div>
                        </div>
                        <div class=\"form-group row\">
                            <label for=\"\" class=\"col-sm-4 col-form-label text-left\"></label>
                            <div class=\"col-sm-8\">
                                <input class=\"form-control\" type=\"text\" name=\"\" required readonly id=\"\">
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

    // line 92
    public function block_script($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 93
        echo "    <script>
        jQuery('#dob').datepicker();
        jQuery('#doa').datepicker();
        ";
        // line 96
        if (0 === twig_compare(($context["status"] ?? null), 200)) {
            // line 97
            echo "        window.alert('User Added successfully.');
        window.location.href = '/admin/user_list.php';
        ";
        }
        // line 100
        echo "        ";
        if (0 === twig_compare(($context["status"] ?? null), 404)) {
            // line 101
            echo "        window.alert('Error, Please try again.');
        ";
        }
        // line 103
        echo "    </script>
";
    }

    public function getTemplateName()
    {
        return "new_certificate.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  177 => 103,  173 => 101,  170 => 100,  165 => 97,  163 => 96,  158 => 93,  154 => 92,  87 => 26,  76 => 24,  72 => 23,  51 => 4,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"layout.twig\" %}

{% block main_content %}
    <div class=\"row\">
        <div class=\"col-sm-12\">
            <div class=\"page-title-box\">
                <h4 class=\"page-title\">New Student</h4>
            </div>
        </div>
        <div class=\"clearfix\"></div>
    </div>
    <!-- end page title end breadcrumb -->
    <div class=\"row\">
        <div class=\"col-lg-6\">
            <div class=\"card\">
                <div class=\"card-body text-center\">
                    <form method=\"post\" enctype=\"multipart/form-data\">
                        <div class=\"form-group row\">
                            <label for=\"Reg.ID\" class=\"col-sm-4 col-form-label text-left\">Reg. No.</label>
                            <div class=\"col-sm-8\">
                                <select name=\"stu_id\" class=\"select2 required form-control mb-3 custom-select\">
                                    <option value=\"0\">Select</option>
                                    {% for student in student_list %}
                                        <option value=\"{{ student.id }}\">{{ student.reg_id }}</option>
                                    {% endfor %}
                                </select>
                            </div>
                        </div>
                        <div class=\"form-group row\">
                            <label for=\"name\" class=\"col-sm-4 col-form-label text-left\">Name</label>
                            <div class=\"col-sm-8\">
                                <input class=\"form-control\" type=\"text\" name=\"name\" required readonly id=\"name\">
                            </div>
                        </div>
                        <div class=\"form-group row\">
                            <label for=\"Mother Name\" class=\"col-sm-4 col-form-label text-left\">Mother Name</label>
                            <div class=\"col-sm-8\">
                                <input class=\"form-control\" type=\"text\" name=\"mname\" required readonly id=\"mname\">
                            </div>
                        </div>
                        <div class=\"form-group row\">
                            <label for=\"fname\" class=\"col-sm-4 col-form-label text-left\">Father Name</label>
                            <div class=\"col-sm-8\">
                                <input class=\"form-control\" type=\"text\" name=\"\" required readonly id=\"fname\">
                            </div>
                        </div>
                        <div class=\"form-group row\">
                            <label for=\"\" class=\"col-sm-4 col-form-label text-left\"></label>
                            <div class=\"col-sm-8\">
                                <input class=\"form-control\" type=\"text\" name=\"\" required readonly id=\"\">
                            </div>
                        </div>
                        <div class=\"form-group row\">
                            <label for=\"\" class=\"col-sm-4 col-form-label text-left\"></label>
                            <div class=\"col-sm-8\">
                                <input class=\"form-control\" type=\"text\" name=\"\" required readonly id=\"\">
                            </div>
                        </div>
                        <div class=\"form-group row\">
                            <label for=\"\" class=\"col-sm-4 col-form-label text-left\"></label>
                            <div class=\"col-sm-8\">
                                <input class=\"form-control\" type=\"text\" name=\"\" required readonly id=\"\">
                            </div>
                        </div>
                        <div class=\"form-group row\">
                            <label for=\"\" class=\"col-sm-4 col-form-label text-left\"></label>
                            <div class=\"col-sm-8\">
                                <input class=\"form-control\" type=\"text\" name=\"\" required readonly id=\"\">
                            </div>
                        </div>
                        <div class=\"form-group row\">
                            <label for=\"\" class=\"col-sm-4 col-form-label text-left\"></label>
                            <div class=\"col-sm-8\">
                                <input class=\"form-control\" type=\"text\" name=\"\" required readonly id=\"\">
                            </div>
                        </div>
                        <div class=\"form-group row\">
                            <label for=\"\" class=\"col-sm-4 col-form-label text-left\"></label>
                            <div class=\"col-sm-8\">
                                <input class=\"form-control\" type=\"text\" name=\"\" required readonly id=\"\">
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
        jQuery('#dob').datepicker();
        jQuery('#doa').datepicker();
        {% if status == 200 %}
        window.alert('User Added successfully.');
        window.location.href = '/admin/user_list.php';
        {% endif %}
        {% if status == 404 %}
        window.alert('Error, Please try again.');
        {% endif %}
    </script>
{% endblock %}", "new_certificate.twig", "/home/lue/vicky_work/new_w/website/template/admin/new_certificate.twig");
    }
}
