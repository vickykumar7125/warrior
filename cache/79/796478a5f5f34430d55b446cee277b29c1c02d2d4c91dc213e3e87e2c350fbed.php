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

/* dashboard.twig */
class __TwigTemplate_73498cbf9ac29f94e26bc3c731ea162975346e185e1da93c27231890e4d81852 extends Template
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
        $this->parent = $this->loadTemplate("layout.twig", "dashboard.twig", 1);
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
                <h4 class=\"page-title\">Dashboard</h4>
            </div>
        </div>
        <div class=\"clearfix\"></div>
    </div>
    <!-- end page title end breadcrumb -->
    <div class=\"row\">
        <div class=\"col-xl-12\">
            <div class=\"row\">

                <div class=\"col-lg-4\">
                    <div class=\"card\">
                        <div class=\"card-body\">
                            <div class=\"d-flex flex-row\">
                                <div class=\"col-3 align-self-center\">
                                    <div class=\"round\">
                                        <i class=\"fas fa-user-cog\"></i>
                                    </div>
                                </div>
                                <div class=\"col-9 text-right align-self-center\">
                                    <div class=\"m-l-10 \">
                                        <h5 class=\"mt-0\">";
        // line 28
        echo twig_escape_filter($this->env, ($context["total_stu"] ?? null), "html", null, true);
        echo "</h5>
                                        <p class=\"mb-0 text-muted\">Total Student</p>
                                    </div>
                                </div>
                            </div>
                        </div><!--end card-body-->
                    </div><!--end card-->
                </div><!--end col-->
                <div class=\"col-lg-4\">
                    <div class=\"card\">
                        <div class=\"card-body\">
                            <div class=\"d-flex flex-row\">
                                <div class=\"col-3 align-self-center\">
                                    <div class=\"round\">
                                        <i class=\"fas fa-graduation-cap\"></i>
                                    </div>
                                </div>
                                <div class=\"col-9 align-self-center text-right\">
                                    <div class=\"m-l-10\">
                                        <h5 class=\"mt-0\">";
        // line 47
        echo twig_escape_filter($this->env, ($context["issue_cert"] ?? null), "html", null, true);
        echo "</h5>
                                        <p class=\"mb-0 text-muted\">Issued Certificate</p>
                                    </div>
                                </div>
                            </div>
                        </div><!--end card-body-->
                    </div><!--end card-->
                </div><!--end col-->
                <div class=\"col-lg-4\">
                    <div class=\"card\">
                        <div class=\"card-body\">
                            <div class=\"search-type-arrow\"></div>
                            <div class=\"d-flex flex-row\">
                                <div class=\"col-3 align-self-center\">
                                    <div class=\"round \">
                                        <i class=\"fas fa-user-alt-slash\"></i>
                                    </div>
                                </div>
                                <div class=\"col-9 align-self-center text-right\">
                                    <div class=\"m-l-10 \">
                                        <h5 class=\"mt-0\">";
        // line 67
        echo twig_escape_filter($this->env, ($context["pen_cert"] ?? null), "html", null, true);
        echo "</h5>
                                        <p class=\"mb-0 text-muted\">Pending Certificate</p>
                                    </div>
                                </div>
                            </div>
                        </div><!--end card-body-->
                    </div><!--end card-->
                </div><!--end col-->
            </div><!--end row-->
        </div><!--end col-->
    </div><!--end row-->
";
    }

    public function getTemplateName()
    {
        return "dashboard.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  121 => 67,  98 => 47,  76 => 28,  50 => 4,  46 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"layout.twig\" %}

{% block main_content %}
    <div class=\"row\">
        <div class=\"col-sm-12\">
            <div class=\"page-title-box\">
                <h4 class=\"page-title\">Dashboard</h4>
            </div>
        </div>
        <div class=\"clearfix\"></div>
    </div>
    <!-- end page title end breadcrumb -->
    <div class=\"row\">
        <div class=\"col-xl-12\">
            <div class=\"row\">

                <div class=\"col-lg-4\">
                    <div class=\"card\">
                        <div class=\"card-body\">
                            <div class=\"d-flex flex-row\">
                                <div class=\"col-3 align-self-center\">
                                    <div class=\"round\">
                                        <i class=\"fas fa-user-cog\"></i>
                                    </div>
                                </div>
                                <div class=\"col-9 text-right align-self-center\">
                                    <div class=\"m-l-10 \">
                                        <h5 class=\"mt-0\">{{ total_stu }}</h5>
                                        <p class=\"mb-0 text-muted\">Total Student</p>
                                    </div>
                                </div>
                            </div>
                        </div><!--end card-body-->
                    </div><!--end card-->
                </div><!--end col-->
                <div class=\"col-lg-4\">
                    <div class=\"card\">
                        <div class=\"card-body\">
                            <div class=\"d-flex flex-row\">
                                <div class=\"col-3 align-self-center\">
                                    <div class=\"round\">
                                        <i class=\"fas fa-graduation-cap\"></i>
                                    </div>
                                </div>
                                <div class=\"col-9 align-self-center text-right\">
                                    <div class=\"m-l-10\">
                                        <h5 class=\"mt-0\">{{ issue_cert }}</h5>
                                        <p class=\"mb-0 text-muted\">Issued Certificate</p>
                                    </div>
                                </div>
                            </div>
                        </div><!--end card-body-->
                    </div><!--end card-->
                </div><!--end col-->
                <div class=\"col-lg-4\">
                    <div class=\"card\">
                        <div class=\"card-body\">
                            <div class=\"search-type-arrow\"></div>
                            <div class=\"d-flex flex-row\">
                                <div class=\"col-3 align-self-center\">
                                    <div class=\"round \">
                                        <i class=\"fas fa-user-alt-slash\"></i>
                                    </div>
                                </div>
                                <div class=\"col-9 align-self-center text-right\">
                                    <div class=\"m-l-10 \">
                                        <h5 class=\"mt-0\">{{ pen_cert }}</h5>
                                        <p class=\"mb-0 text-muted\">Pending Certificate</p>
                                    </div>
                                </div>
                            </div>
                        </div><!--end card-body-->
                    </div><!--end card-->
                </div><!--end col-->
            </div><!--end row-->
        </div><!--end col-->
    </div><!--end row-->
{% endblock %}", "dashboard.twig", "/home/lue/vicky_work/new_w/website/template/admin/dashboard.twig");
    }
}
