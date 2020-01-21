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

/* user_list.twig */
class __TwigTemplate_2fc3d1cd6779eb9c5b6ae1be44934aed8dcd0e040eb5819af62ceaf1a957de25 extends Template
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
        $this->parent = $this->loadTemplate("layout.twig", "user_list.twig", 1);
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
                <h4 class=\"page-title\">Admin User List</h4>
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
                            <th>User ID</th>
                            <th>Password</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        ";
        // line 26
        $context["count"] = 1;
        // line 27
        echo "                        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["user_list"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 28
            echo "                            <tr>
                                <td>";
            // line 29
            echo twig_escape_filter($this->env, ($context["count"] ?? null), "html", null, true);
            echo "</td>
                                <td>";
            // line 30
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "user_id", [], "any", false, false, false, 30), "html", null, true);
            echo "</td>
                                <td>";
            // line 31
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "password", [], "any", false, false, false, 31), "html", null, true);
            echo "</td>
                                <td><a href=\"/admin/edit_user.php?id=";
            // line 32
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 32), "html", null, true);
            echo "\"><button class=\"btn btn-sm btn-outline-warning\" title=\"Edit/View User\"><i class=\"fas fa-user-edit\"></i></button></a>&nbsp;<a href=\"/admin/delete_user.php?id=";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 32), "html", null, true);
            echo "\"><button class=\"btn btn-sm btn-outline-danger\" title=\"Delete User\"><i class=\"fas fa-trash-alt\"></i></button></a></td>
                            </tr>
                            ";
            // line 34
            $context["count"] = (($context["count"] ?? null) + 1);
            // line 35
            echo "                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
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
        return "user_list.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  111 => 36,  105 => 35,  103 => 34,  96 => 32,  92 => 31,  88 => 30,  84 => 29,  81 => 28,  76 => 27,  74 => 26,  50 => 4,  46 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"layout.twig\" %}

{% block main_content %}
    <div class=\"row\">
        <div class=\"col-sm-12\">
            <div class=\"page-title-box\">
                <h4 class=\"page-title\">Admin User List</h4>
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
                            <th>User ID</th>
                            <th>Password</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        {% set count = 1 %}
                        {% for user in user_list %}
                            <tr>
                                <td>{{ count }}</td>
                                <td>{{ user.user_id }}</td>
                                <td>{{ user.password }}</td>
                                <td><a href=\"/admin/edit_user.php?id={{ user.id }}\"><button class=\"btn btn-sm btn-outline-warning\" title=\"Edit/View User\"><i class=\"fas fa-user-edit\"></i></button></a>&nbsp;<a href=\"/admin/delete_user.php?id={{ user.id }}\"><button class=\"btn btn-sm btn-outline-danger\" title=\"Delete User\"><i class=\"fas fa-trash-alt\"></i></button></a></td>
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
{% endblock %}", "user_list.twig", "/home/lue/vicky_work/new_w/website/template/admin/user_list.twig");
    }
}
