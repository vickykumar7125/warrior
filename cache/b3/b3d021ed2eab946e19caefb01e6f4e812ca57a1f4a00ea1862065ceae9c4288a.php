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

/* new_student.twig */
class __TwigTemplate_a3611fbe0c68ff6466cef10799c5ec37d270850b90613e273de250884d9c82d2 extends Template
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
        $this->parent = $this->loadTemplate("layout.twig", "new_student.twig", 1);
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
                            <label for=\"image\" class=\"col-sm-4 col-form-label text-left\">Profile image</label>
                            <div class=\"col-sm-8\">
                                <input class=\"form-control dropify\" type=\"file\" name=\"profile\" id=\"input-file-now\">
                            </div>
                        </div>
                        <div class=\"form-group row\">
                            <label for=\"Reg.ID\" class=\"col-sm-4 col-form-label text-left\">Reg. No.</label>
                            <div class=\"col-sm-8\">
                                <input class=\"form-control\" type=\"text\" name=\"reg_id\" required value=\"";
        // line 27
        echo twig_escape_filter($this->env, ($context["reg"] ?? null), "html", null, true);
        echo "\" id=\"Reg.ID\">
                            </div>
                        </div>
                        <div class=\"form-group row\">
                            <label for=\"name\" class=\"col-sm-4 col-form-label text-left\">Name</label>
                            <div class=\"col-sm-8\">
                                <input class=\"form-control\" type=\"text\" name=\"name\" required id=\"name\">
                            </div>
                        </div>
                        <div class=\"form-group row\">
                            <label for=\"fname\" class=\"col-sm-4 col-form-label text-left\">Father Name</label>
                            <div class=\"col-sm-8\">
                                <input class=\"form-control\" type=\"text\" name=\"fname\" id=\"fname\">
                            </div>
                        </div>
                        <div class=\"form-group row\">
                            <label for=\"mname\" class=\"col-sm-4 col-form-label text-left\">Mother Name</label>
                            <div class=\"col-sm-8\">
                                <input class=\"form-control\" type=\"text\" name=\"mname\" id=\"mname\">
                            </div>
                        </div>
                        <div class=\"form-group row\">
                            <label for=\"mobile\" class=\"col-sm-4 col-form-label text-left\">Mobile</label>
                            <div class=\"col-sm-8\">
                                <input class=\"form-control\" type=\"number\" name=\"mobile\" required id=\"mobile\">
                            </div>
                        </div>
                        <div class=\"form-group row\">
                            <label for=\"Email\" class=\"col-sm-4 col-form-label text-left\">Email</label>
                            <div class=\"col-sm-8\">
                                <input class=\"form-control\" type=\"email\" name=\"email\" id=\"email\">
                            </div>
                        </div>
                        <div class=\"form-group row\">
                            <label for=\"address\" class=\"col-sm-4 col-form-label text-left\">Address</label>
                            <div class=\"col-sm-8\">
                                <textarea id=\"textarea\" name=\"address\" class=\"form-control\" required maxlength=\"225\" rows=\"3\"></textarea>
                            </div>
                        </div>
                        <div class=\"form-group row\">
                            <label for=\"doa\" class=\"col-sm-4 col-form-label text-left\">DOA</label>
                            <div class=\"col-sm-8\">
                                <input type=\"text\" class=\"form-control\" name=\"doa\" placeholder=\"mm/dd/yyyy\"  required id=\"doa\">
                            </div>
                        </div>
                        <div class=\"form-group row\">
                            <label for=\"dob\" class=\"col-sm-4 col-form-label text-left\">DOB</label>
                            <div class=\"col-sm-8\">
                                <input type=\"text\" class=\"form-control\" name=\"dob\" placeholder=\"mm/dd/yyyy\"  required id=\"dob\">
                            </div>
                        </div>
                        <div class=\"form-group row\">
                            <label for=\"course\" class=\"col-sm-4 col-form-label text-left\">Course</label>
                            <div class=\"col-sm-8\">
                                <select name=\"course_id\" class=\"select2 required form-control mb-3 custom-select\">
                                    <option value=\"0\">Select</option>
                                    ";
        // line 83
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["course_list"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["course"]) {
            // line 84
            echo "                                        <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["course"], "id", [], "any", false, false, false, 84), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["course"], "course_name", [], "any", false, false, false, 84), "html", null, true);
            echo " (";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["course"], "duration", [], "any", false, false, false, 84), "html", null, true);
            echo ")</option>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['course'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 86
        echo "                                </select>

                            </div>
                        </div>
                        <div class=\"form-group row\">
                            <label for=\"reg_fee\" class=\"col-sm-4 col-form-label text-left\">reg_fee</label>
                            <div class=\"col-sm-8\">
                                <input class=\"form-control\" type=\"number\" name=\"reg_fee\" required id=\"reg_fee\">
                            </div>
                        </div>
                        <div class=\"form-group row\">
                            <label for=\"course_fee\" class=\"col-sm-4 col-form-label text-left\">Course Fee</label>
                            <div class=\"col-sm-8\">
                                <input class=\"form-control\" type=\"number\" name=\"course_fee\"  required id=\"course_fee\">
                            </div>
                        </div>
                        <div class=\"form-group row\">
                            <label for=\"qualification\" class=\"col-sm-4 col-form-label text-left\">Qualification</label>
                            <div class=\"col-sm-8\">
                                <select name=\"qualification\" class=\"select2 form-control mb-3  required custom-select\">
                                    <option>Select</option>
                                    <option value=\"1\">10th</option>
                                    <option value=\"2\">12th</option>
                                    <option value=\"3\">Graduate</option>
                                    <option value=\"4\">Post Graduate</option>
                                    <option value=\"5\">Any Other</option>
                                </select>
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

    // line 124
    public function block_script($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 125
        echo "    <script>
        jQuery('#dob').datepicker();
        jQuery('#doa').datepicker();
        ";
        // line 128
        if (0 === twig_compare(($context["status"] ?? null), 200)) {
            // line 129
            echo "        window.alert('User Added successfully.');
        window.location.href = '/admin/student_list.php';
        ";
        }
        // line 132
        echo "        ";
        if (0 === twig_compare(($context["status"] ?? null), 404)) {
            // line 133
            echo "        window.alert('Error, Please try again.');
        ";
        }
        // line 135
        echo "    </script>
";
    }

    public function getTemplateName()
    {
        return "new_student.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  214 => 135,  210 => 133,  207 => 132,  202 => 129,  200 => 128,  195 => 125,  191 => 124,  152 => 86,  139 => 84,  135 => 83,  76 => 27,  51 => 4,  47 => 3,  36 => 1,);
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
                            <label for=\"image\" class=\"col-sm-4 col-form-label text-left\">Profile image</label>
                            <div class=\"col-sm-8\">
                                <input class=\"form-control dropify\" type=\"file\" name=\"profile\" id=\"input-file-now\">
                            </div>
                        </div>
                        <div class=\"form-group row\">
                            <label for=\"Reg.ID\" class=\"col-sm-4 col-form-label text-left\">Reg. No.</label>
                            <div class=\"col-sm-8\">
                                <input class=\"form-control\" type=\"text\" name=\"reg_id\" required value=\"{{ reg }}\" id=\"Reg.ID\">
                            </div>
                        </div>
                        <div class=\"form-group row\">
                            <label for=\"name\" class=\"col-sm-4 col-form-label text-left\">Name</label>
                            <div class=\"col-sm-8\">
                                <input class=\"form-control\" type=\"text\" name=\"name\" required id=\"name\">
                            </div>
                        </div>
                        <div class=\"form-group row\">
                            <label for=\"fname\" class=\"col-sm-4 col-form-label text-left\">Father Name</label>
                            <div class=\"col-sm-8\">
                                <input class=\"form-control\" type=\"text\" name=\"fname\" id=\"fname\">
                            </div>
                        </div>
                        <div class=\"form-group row\">
                            <label for=\"mname\" class=\"col-sm-4 col-form-label text-left\">Mother Name</label>
                            <div class=\"col-sm-8\">
                                <input class=\"form-control\" type=\"text\" name=\"mname\" id=\"mname\">
                            </div>
                        </div>
                        <div class=\"form-group row\">
                            <label for=\"mobile\" class=\"col-sm-4 col-form-label text-left\">Mobile</label>
                            <div class=\"col-sm-8\">
                                <input class=\"form-control\" type=\"number\" name=\"mobile\" required id=\"mobile\">
                            </div>
                        </div>
                        <div class=\"form-group row\">
                            <label for=\"Email\" class=\"col-sm-4 col-form-label text-left\">Email</label>
                            <div class=\"col-sm-8\">
                                <input class=\"form-control\" type=\"email\" name=\"email\" id=\"email\">
                            </div>
                        </div>
                        <div class=\"form-group row\">
                            <label for=\"address\" class=\"col-sm-4 col-form-label text-left\">Address</label>
                            <div class=\"col-sm-8\">
                                <textarea id=\"textarea\" name=\"address\" class=\"form-control\" required maxlength=\"225\" rows=\"3\"></textarea>
                            </div>
                        </div>
                        <div class=\"form-group row\">
                            <label for=\"doa\" class=\"col-sm-4 col-form-label text-left\">DOA</label>
                            <div class=\"col-sm-8\">
                                <input type=\"text\" class=\"form-control\" name=\"doa\" placeholder=\"mm/dd/yyyy\"  required id=\"doa\">
                            </div>
                        </div>
                        <div class=\"form-group row\">
                            <label for=\"dob\" class=\"col-sm-4 col-form-label text-left\">DOB</label>
                            <div class=\"col-sm-8\">
                                <input type=\"text\" class=\"form-control\" name=\"dob\" placeholder=\"mm/dd/yyyy\"  required id=\"dob\">
                            </div>
                        </div>
                        <div class=\"form-group row\">
                            <label for=\"course\" class=\"col-sm-4 col-form-label text-left\">Course</label>
                            <div class=\"col-sm-8\">
                                <select name=\"course_id\" class=\"select2 required form-control mb-3 custom-select\">
                                    <option value=\"0\">Select</option>
                                    {% for course in course_list %}
                                        <option value=\"{{ course.id }}\">{{ course.course_name }} ({{ course.duration }})</option>
                                    {% endfor %}
                                </select>

                            </div>
                        </div>
                        <div class=\"form-group row\">
                            <label for=\"reg_fee\" class=\"col-sm-4 col-form-label text-left\">reg_fee</label>
                            <div class=\"col-sm-8\">
                                <input class=\"form-control\" type=\"number\" name=\"reg_fee\" required id=\"reg_fee\">
                            </div>
                        </div>
                        <div class=\"form-group row\">
                            <label for=\"course_fee\" class=\"col-sm-4 col-form-label text-left\">Course Fee</label>
                            <div class=\"col-sm-8\">
                                <input class=\"form-control\" type=\"number\" name=\"course_fee\"  required id=\"course_fee\">
                            </div>
                        </div>
                        <div class=\"form-group row\">
                            <label for=\"qualification\" class=\"col-sm-4 col-form-label text-left\">Qualification</label>
                            <div class=\"col-sm-8\">
                                <select name=\"qualification\" class=\"select2 form-control mb-3  required custom-select\">
                                    <option>Select</option>
                                    <option value=\"1\">10th</option>
                                    <option value=\"2\">12th</option>
                                    <option value=\"3\">Graduate</option>
                                    <option value=\"4\">Post Graduate</option>
                                    <option value=\"5\">Any Other</option>
                                </select>
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
        window.location.href = '/admin/student_list.php';
        {% endif %}
        {% if status == 404 %}
        window.alert('Error, Please try again.');
        {% endif %}
    </script>
{% endblock %}", "new_student.twig", "/home/lue/vicky_work/new_w/website/template/admin/new_student.twig");
    }
}
