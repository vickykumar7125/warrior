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

/* layout.twig */
class __TwigTemplate_f5784c78d632680fbf00770bff49ba6e7e6d5d7e0919d54a1f086bec05a42c54 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'css' => [$this, 'block_css'],
            'main_content' => [$this, 'block_main_content'],
            'script' => [$this, 'block_script'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!DOCTYPE html>
<!--[if IE 8 ]><html class=\"ie\" xmlns=\"http://www.w3.org/1999/xhtml\" xml:lang=\"en-US\" lang=\"en-US\"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html xmlns=\"http://www.w3.org/1999/xhtml\" xml:lang=\"en-US\" lang=\"en-US\">
<!--<![endif]-->
<head>
    <!-- Basic Page Needs -->
    <meta charset=\"utf-8\">
    <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
    <title>";
        // line 10
        echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
        echo "</title>

    <meta name=\"author\" content=\"Vicky Kumar\">

    <meta name=\"author:url\" content=\"https://vicky-edf88.web.app/\">

    <!-- Mobile Specific Metas -->
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, maximum-scale=1\">

    <!-- Bootstrap  -->
    <link rel=\"stylesheet\" type=\"text/css\" href=\"/assets/web/stylesheets/bootstrap.css\" >

    <!-- Theme Style -->
    <link rel=\"stylesheet\" type=\"text/css\" href=\"/assets/web/stylesheets/style.css\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"/assets/web/stylesheets/responsive.css\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"/assets/web/stylesheets/colors/color1.css\" id=\"colors\">

    <!-- REVOLUTION LAYERS STYLES -->
    <link rel=\"stylesheet\" type=\"text/css\" href=\"/assets/web/revolution/css/layers.css\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"/assets/web/revolution/css/settings.css\">

    <link rel=\"shortcut icon\" href=\"/assets/web/images/favicon.png\">
    <link rel=\"apple-touch-icon-precomposed\" href=\"/assets/web/images/favicon-apple.png\">

    ";
        // line 34
        $this->displayBlock('css', $context, $blocks);
        // line 35
        echo "
</head>
<body class=\"bg-body3\">
<div class=\"boxed\">
    <div class=\"top border-bt-d1d1ff style2\">
        <div class=\"overlay\"></div>
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-4 col-md-12\">
                    <div class=\"flat-info\">
                        <ul>
                            <li class=\"phone\"><a href=\"tel:9973431530\">9973431530</a></li>
                            <li class=\"phone\"><a href=\"tel:9835283873\">9835283873</a></li>
                            <li class=\"mail\"><a href=\"mailto:cwepatna@gmail.com\">cwepatna@gmail.com</a></li>
                        </ul>
                    </div>
                </div> <!-- /.col-md-3 -->
                <div class=\"col-lg-8 col-md-12 pd-left-0\">
                    <div class=\"flat-adds flat-text-right\">
                        <p><span class=\"font-Hall font-weight-700 letter-spaceing-top\">भारत सरकार द्वारा मान्यता प्राप्त एक विश्वसनीय संस्थान</span> </p>
                    </div> <!-- /.flat-adds -->
                    <div class=\"flat-action flat-text-right style1\">
                        <ul>
                            <li><a href=\"/auth/login\">LOGIN</a></li>
                        </ul>
                    </div> <!-- /.flat-action -->
                </div> <!-- /.col-md-9 -->
            </div> <!-- /.row -->
        </div> <!-- /.container -->
    </div> <!-- /.top -->

    <div id=\"header\" class=\"bg-fff style1\">
        <div class=\"container\">
            <div class=\"header-wrap clearfix\">
                <div id=\"logo\">
                    <a href=\"/\"><img src=\"/store/main_logo.jpeg\" alt=\"Computer Warrior Education Pvt. Ltd.\" style=\"\"></a>
                </div>
                <div class=\"nav-wrap flat-text-right\">
                    <nav id=\"main-nav\">
                        <ul class=\"menu\" >
                            <li>
                                <a href=\"/home.php\">HOME</a>
                            </li>
                            <li>
                                <a href=\"#\">ABOUT US</a>
                                <ul class=\"submenu\">
                                    <li><a href=\"/about.php\">About CWE</a></li>
                                    <li><a href=\"/mission_vision.php\">Mission & Vision</a></li>
                                    <li><a href=\"/incorp_cert.php\">Incorporation Certificate</a></li>
                                    <li><a href=\"/teacher.php\">Our Faculty</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href=\"#\">COURSES</a>
                                <ul class=\"submenu\">
                                    ";
        // line 90
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["course_data"] ?? null));
        foreach ($context['_seq'] as $context["key"] => $context["course_list"]) {
            // line 91
            echo "                                        <li class=\"item-has-child\">
                                            <a href=\"#\">";
            // line 92
            echo twig_escape_filter($this->env, $context["key"], "html", null, true);
            echo "</a>
                                            <ul class=\"submenu\" style=\"width: 200%\">
                                                ";
            // line 94
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["course_list"]);
            foreach ($context['_seq'] as $context["url"] => $context["course"]) {
                // line 95
                echo "                                                    <li style=\"width: 200%\"><a href=\"/course.php?id=";
                echo twig_escape_filter($this->env, $context["url"], "html", null, true);
                echo "\"></a>";
                echo twig_escape_filter($this->env, $context["course"], "html", null, true);
                echo "</li>
                                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['url'], $context['course'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 97
            echo "                                            </ul>
                                        </li>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['course_list'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 100
        echo "                                </ul>
                            </li>
                            <li>
                                <a href=\"#\">STUDENT SUPPORT</a>
                                <ul class=\"submenu\">
                                    <li><a href=\"/id_verification.php\">Admission Verify</a></li>
                                    <li><a href=\"/certificate_verification.php\">Certificate Verify</a></li>
                                </ul>
                            </li>
                            <li><a href=\"/contact.php\">CONTACT US</a></li>
                        </ul>
                    </nav>
                </div>
                <div class=\"extra-menu flat-text-right clearfix\">
                    <div class=\"wrap-search-header\">
                        <div class=\"search-header\">
                            <form>
                                <input type=\"search\" name=\"key\" placeholder=\"Search Courses\">
                                <button class=\"btn-search\"><span class=\"icon-search\"></span></button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class=\"mobile-button\">
                    <span></span>
                </div>
            </div>
        </div>
    </div> <!-- #header -->
    ";
        // line 129
        $this->displayBlock('main_content', $context, $blocks);
        // line 130
        echo "    <footer id=\"footer\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-6\">
                    <div class=\"widget-about\">
                        <div id=\"logo-ft\">
                            <a href=\"/\"><img src=\"/store/main_logo.jpeg\" alt=\"Computer Warrior Pvt. Ltd.\"  width=\"157\" height=\"29\" data-retina=\"images/logo/logo-ft@2x.png\" data-width=\"157\" data-height=\"29\"></a>
                        </div>
                        <p class=\"description\">भारत सरकार द्वारा मान्यता प्राप्त एक विश्वससनिया  संसथान</p>
                        <p class=\"description\">Learn today for better tommorow</p>
                        <div class=\"list-info\">
                            <ul>
                                <li class=\"address\"><a href=\"#\">1/10, Vivekanand Marg, North S.K Puri, Boring Road, Patna - 800013</a></li>
                                <li class=\"phone\"><a href=\"tel:9973431530\">9973431530</a></li>
                                <li class=\"phone\"><a href=\"tel:9835283873\">9835283873</a></li>
                                <li class=\"mail\"><a href=\"mailto:cwepatna@gmail.com\">cwepatna@gmail.com</a></li>
                            </ul>
                        </div>
                        <div class=\"socails\">
                            <ul class=\"list\">
                                <li><a href=\"https://twitter.com/WarriorPvt\"><span class=\"fa fa-twitter\"></span></a></li>
                                <li><a href=\"#\"><span class=\"fa fa-linkedin-square\"></span></a></li>
                                <li><a href=\"#\"><span class=\"fa fa-facebook-official\"></span></a></li>
                                <li><a href=\"https://wa.me/919973431530\"><span class=\"fa fa-whatsapp-square\"></span></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class=\"col-md-6\">
                    <div class=\"widget-link widget-ft\">
                        <h6 class=\"widget-title text-black-50\">USEFUL LINK</h6>
                        <div class=\"list-wrap clearfix\">
                            <ul class=\"one-of-two\">
                                <li><a href=\"/about.php\">About CWE</a></li>
                                <li><a href=\"/trade_mark.php\">Trade Mark</a></li>
                                <li><a href=\"/teacher.php\">Our Faculty</a></li>
                            </ul>
                            <ul class=\"one-of-two\">
                                <li><a href=\"/id_verification.php\">Admission Verification</a></li>
                                <li><a href=\"/certificate_verification.php\">Certificate Verification</a></li>
                                <li><a href=\"/contact.php\">Contact Us</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer> <!-- #footer -->

    <div class=\"bottom bg-15222e\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"  col-md-6\">
                    <div class=\"copyright flat-text-left\">
                        <p>© Copyright 2019 <a href=\"/\">Computer Warrior Education Pvt. Ltd.</a>. All Rights Reserved.</p>
                    </div>
                </div>
                <div class=\"  col-md-6\">
                    <div class=\"widget flat-text-right no-border\">
                        <ul class=\"list\">
                            <li><a href=\"#\">Terms & Condition</a></li>
                            <li>Designed & Maintained By <a target=\"_blank\" href=\"https://vicky-edf88.web.app/\">Vicky Kumar</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- /.bottom -->

    <a id=\"scroll-top\"></a>
</div>


<script src=\"/assets/web/javascript/jquery.min.js\"></script>
<script src=\"/assets/web/javascript/parallax.js\"></script>
<script src=\"/assets/web/javascript/owl.carousel.min.js\"></script>
<script src=\"/assets/web/javascript/jquery-fancybox.js\"></script>
<script src=\"/assets/web/javascript/imagesloaded.min.js\"></script>
<script src=\"/assets/web/javascript/jquery-isotope.js\"></script>
<script src=\"/assets/web/javascript/waypoints.min.js\"></script>
<script src=\"/assets/web/javascript/jquery.easing.js\"></script>
<script src=\"/assets/web/javascript/jquery.cookie.js\"></script>
<script src=\"/assets/web/javascript/smoothscroll.js\"></script>

<script src=\"/assets/web/javascript/main.js\"></script>

<!-- Revolution Slider -->
<script src=\"/assets/web/revolution/js/jquery.themepunch.tools.min.js\"></script>
<script src=\"/assets/web/revolution/js/jquery.themepunch.revolution.min.js\"></script>
<script src=\"/assets/web/revolution/js/slider.js\"></script>

<!-- SLIDER REVOLUTION 5.0 EXTENSIONS  (Load Extensions only on Local File Systems !  The following part can be removed on Server for On Demand Loading) -->
<script src=\"/assets/web/revolution/js/extensions/revolution.extension.actions.min.js\"></script>
<script src=\"/assets/web/revolution/js/extensions/revolution.extension.carousel.min.js\"></script>
<script src=\"/assets/web/revolution/js/extensions/revolution.extension.kenburn.min.js\"></script>
<script src=\"/assets/web/revolution/js/extensions/revolution.extension.layeranimation.min.js\"></script>
<script src=\"/assets/web/revolution/js/extensions/revolution.extension.migration.min.js\"></script>
<script src=\"/assets/web/revolution/js/extensions/revolution.extension.navigation.min.js\"></script>
<script src=\"/assets/web/revolution/js/extensions/revolution.extension.parallax.min.js\"></script>
<script src=\"/assets/web/revolution/js/extensions/revolution.extension.slideanims.min.js\"></script>
<script src=\"/assets/web/revolution/js/extensions/revolution.extension.video.min.js\"></script>
";
        // line 231
        $this->displayBlock('script', $context, $blocks);
        // line 232
        echo "</body>
</html>";
    }

    // line 34
    public function block_css($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 129
    public function block_main_content($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 231
    public function block_script($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function getTemplateName()
    {
        return "layout.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  327 => 231,  321 => 129,  315 => 34,  310 => 232,  308 => 231,  205 => 130,  203 => 129,  172 => 100,  164 => 97,  153 => 95,  149 => 94,  144 => 92,  141 => 91,  137 => 90,  80 => 35,  78 => 34,  51 => 10,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<!--[if IE 8 ]><html class=\"ie\" xmlns=\"http://www.w3.org/1999/xhtml\" xml:lang=\"en-US\" lang=\"en-US\"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html xmlns=\"http://www.w3.org/1999/xhtml\" xml:lang=\"en-US\" lang=\"en-US\">
<!--<![endif]-->
<head>
    <!-- Basic Page Needs -->
    <meta charset=\"utf-8\">
    <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
    <title>{{ title }}</title>

    <meta name=\"author\" content=\"Vicky Kumar\">

    <meta name=\"author:url\" content=\"https://vicky-edf88.web.app/\">

    <!-- Mobile Specific Metas -->
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, maximum-scale=1\">

    <!-- Bootstrap  -->
    <link rel=\"stylesheet\" type=\"text/css\" href=\"/assets/web/stylesheets/bootstrap.css\" >

    <!-- Theme Style -->
    <link rel=\"stylesheet\" type=\"text/css\" href=\"/assets/web/stylesheets/style.css\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"/assets/web/stylesheets/responsive.css\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"/assets/web/stylesheets/colors/color1.css\" id=\"colors\">

    <!-- REVOLUTION LAYERS STYLES -->
    <link rel=\"stylesheet\" type=\"text/css\" href=\"/assets/web/revolution/css/layers.css\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"/assets/web/revolution/css/settings.css\">

    <link rel=\"shortcut icon\" href=\"/assets/web/images/favicon.png\">
    <link rel=\"apple-touch-icon-precomposed\" href=\"/assets/web/images/favicon-apple.png\">

    {% block css %}{% endblock %}

</head>
<body class=\"bg-body3\">
<div class=\"boxed\">
    <div class=\"top border-bt-d1d1ff style2\">
        <div class=\"overlay\"></div>
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-4 col-md-12\">
                    <div class=\"flat-info\">
                        <ul>
                            <li class=\"phone\"><a href=\"tel:9973431530\">9973431530</a></li>
                            <li class=\"phone\"><a href=\"tel:9835283873\">9835283873</a></li>
                            <li class=\"mail\"><a href=\"mailto:cwepatna@gmail.com\">cwepatna@gmail.com</a></li>
                        </ul>
                    </div>
                </div> <!-- /.col-md-3 -->
                <div class=\"col-lg-8 col-md-12 pd-left-0\">
                    <div class=\"flat-adds flat-text-right\">
                        <p><span class=\"font-Hall font-weight-700 letter-spaceing-top\">भारत सरकार द्वारा मान्यता प्राप्त एक विश्वसनीय संस्थान</span> </p>
                    </div> <!-- /.flat-adds -->
                    <div class=\"flat-action flat-text-right style1\">
                        <ul>
                            <li><a href=\"/auth/login\">LOGIN</a></li>
                        </ul>
                    </div> <!-- /.flat-action -->
                </div> <!-- /.col-md-9 -->
            </div> <!-- /.row -->
        </div> <!-- /.container -->
    </div> <!-- /.top -->

    <div id=\"header\" class=\"bg-fff style1\">
        <div class=\"container\">
            <div class=\"header-wrap clearfix\">
                <div id=\"logo\">
                    <a href=\"/\"><img src=\"/store/main_logo.jpeg\" alt=\"Computer Warrior Education Pvt. Ltd.\" style=\"\"></a>
                </div>
                <div class=\"nav-wrap flat-text-right\">
                    <nav id=\"main-nav\">
                        <ul class=\"menu\" >
                            <li>
                                <a href=\"/home.php\">HOME</a>
                            </li>
                            <li>
                                <a href=\"#\">ABOUT US</a>
                                <ul class=\"submenu\">
                                    <li><a href=\"/about.php\">About CWE</a></li>
                                    <li><a href=\"/mission_vision.php\">Mission & Vision</a></li>
                                    <li><a href=\"/incorp_cert.php\">Incorporation Certificate</a></li>
                                    <li><a href=\"/teacher.php\">Our Faculty</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href=\"#\">COURSES</a>
                                <ul class=\"submenu\">
                                    {% for key, course_list in course_data %}
                                        <li class=\"item-has-child\">
                                            <a href=\"#\">{{ key }}</a>
                                            <ul class=\"submenu\" style=\"width: 200%\">
                                                {% for url, course in course_list %}
                                                    <li style=\"width: 200%\"><a href=\"/course.php?id={{ url }}\"></a>{{ course }}</li>
                                                {% endfor %}
                                            </ul>
                                        </li>
                                    {% endfor %}
                                </ul>
                            </li>
                            <li>
                                <a href=\"#\">STUDENT SUPPORT</a>
                                <ul class=\"submenu\">
                                    <li><a href=\"/id_verification.php\">Admission Verify</a></li>
                                    <li><a href=\"/certificate_verification.php\">Certificate Verify</a></li>
                                </ul>
                            </li>
                            <li><a href=\"/contact.php\">CONTACT US</a></li>
                        </ul>
                    </nav>
                </div>
                <div class=\"extra-menu flat-text-right clearfix\">
                    <div class=\"wrap-search-header\">
                        <div class=\"search-header\">
                            <form>
                                <input type=\"search\" name=\"key\" placeholder=\"Search Courses\">
                                <button class=\"btn-search\"><span class=\"icon-search\"></span></button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class=\"mobile-button\">
                    <span></span>
                </div>
            </div>
        </div>
    </div> <!-- #header -->
    {% block main_content %}{% endblock %}
    <footer id=\"footer\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-6\">
                    <div class=\"widget-about\">
                        <div id=\"logo-ft\">
                            <a href=\"/\"><img src=\"/store/main_logo.jpeg\" alt=\"Computer Warrior Pvt. Ltd.\"  width=\"157\" height=\"29\" data-retina=\"images/logo/logo-ft@2x.png\" data-width=\"157\" data-height=\"29\"></a>
                        </div>
                        <p class=\"description\">भारत सरकार द्वारा मान्यता प्राप्त एक विश्वससनिया  संसथान</p>
                        <p class=\"description\">Learn today for better tommorow</p>
                        <div class=\"list-info\">
                            <ul>
                                <li class=\"address\"><a href=\"#\">1/10, Vivekanand Marg, North S.K Puri, Boring Road, Patna - 800013</a></li>
                                <li class=\"phone\"><a href=\"tel:9973431530\">9973431530</a></li>
                                <li class=\"phone\"><a href=\"tel:9835283873\">9835283873</a></li>
                                <li class=\"mail\"><a href=\"mailto:cwepatna@gmail.com\">cwepatna@gmail.com</a></li>
                            </ul>
                        </div>
                        <div class=\"socails\">
                            <ul class=\"list\">
                                <li><a href=\"https://twitter.com/WarriorPvt\"><span class=\"fa fa-twitter\"></span></a></li>
                                <li><a href=\"#\"><span class=\"fa fa-linkedin-square\"></span></a></li>
                                <li><a href=\"#\"><span class=\"fa fa-facebook-official\"></span></a></li>
                                <li><a href=\"https://wa.me/919973431530\"><span class=\"fa fa-whatsapp-square\"></span></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class=\"col-md-6\">
                    <div class=\"widget-link widget-ft\">
                        <h6 class=\"widget-title text-black-50\">USEFUL LINK</h6>
                        <div class=\"list-wrap clearfix\">
                            <ul class=\"one-of-two\">
                                <li><a href=\"/about.php\">About CWE</a></li>
                                <li><a href=\"/trade_mark.php\">Trade Mark</a></li>
                                <li><a href=\"/teacher.php\">Our Faculty</a></li>
                            </ul>
                            <ul class=\"one-of-two\">
                                <li><a href=\"/id_verification.php\">Admission Verification</a></li>
                                <li><a href=\"/certificate_verification.php\">Certificate Verification</a></li>
                                <li><a href=\"/contact.php\">Contact Us</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer> <!-- #footer -->

    <div class=\"bottom bg-15222e\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"  col-md-6\">
                    <div class=\"copyright flat-text-left\">
                        <p>© Copyright 2019 <a href=\"/\">Computer Warrior Education Pvt. Ltd.</a>. All Rights Reserved.</p>
                    </div>
                </div>
                <div class=\"  col-md-6\">
                    <div class=\"widget flat-text-right no-border\">
                        <ul class=\"list\">
                            <li><a href=\"#\">Terms & Condition</a></li>
                            <li>Designed & Maintained By <a target=\"_blank\" href=\"https://vicky-edf88.web.app/\">Vicky Kumar</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- /.bottom -->

    <a id=\"scroll-top\"></a>
</div>


<script src=\"/assets/web/javascript/jquery.min.js\"></script>
<script src=\"/assets/web/javascript/parallax.js\"></script>
<script src=\"/assets/web/javascript/owl.carousel.min.js\"></script>
<script src=\"/assets/web/javascript/jquery-fancybox.js\"></script>
<script src=\"/assets/web/javascript/imagesloaded.min.js\"></script>
<script src=\"/assets/web/javascript/jquery-isotope.js\"></script>
<script src=\"/assets/web/javascript/waypoints.min.js\"></script>
<script src=\"/assets/web/javascript/jquery.easing.js\"></script>
<script src=\"/assets/web/javascript/jquery.cookie.js\"></script>
<script src=\"/assets/web/javascript/smoothscroll.js\"></script>

<script src=\"/assets/web/javascript/main.js\"></script>

<!-- Revolution Slider -->
<script src=\"/assets/web/revolution/js/jquery.themepunch.tools.min.js\"></script>
<script src=\"/assets/web/revolution/js/jquery.themepunch.revolution.min.js\"></script>
<script src=\"/assets/web/revolution/js/slider.js\"></script>

<!-- SLIDER REVOLUTION 5.0 EXTENSIONS  (Load Extensions only on Local File Systems !  The following part can be removed on Server for On Demand Loading) -->
<script src=\"/assets/web/revolution/js/extensions/revolution.extension.actions.min.js\"></script>
<script src=\"/assets/web/revolution/js/extensions/revolution.extension.carousel.min.js\"></script>
<script src=\"/assets/web/revolution/js/extensions/revolution.extension.kenburn.min.js\"></script>
<script src=\"/assets/web/revolution/js/extensions/revolution.extension.layeranimation.min.js\"></script>
<script src=\"/assets/web/revolution/js/extensions/revolution.extension.migration.min.js\"></script>
<script src=\"/assets/web/revolution/js/extensions/revolution.extension.navigation.min.js\"></script>
<script src=\"/assets/web/revolution/js/extensions/revolution.extension.parallax.min.js\"></script>
<script src=\"/assets/web/revolution/js/extensions/revolution.extension.slideanims.min.js\"></script>
<script src=\"/assets/web/revolution/js/extensions/revolution.extension.video.min.js\"></script>
{% block script %}{% endblock %}
</body>
</html>", "layout.twig", "/home/lue/vicky_work/new_w/website/template/layout.twig");
    }
}
