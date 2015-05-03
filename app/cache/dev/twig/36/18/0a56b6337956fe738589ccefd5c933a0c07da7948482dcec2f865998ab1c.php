<?php

/* covoiturageBundle:Default:annonce.html.twig */
class __TwigTemplate_36180a56b6337956fe738589ccefd5c933a0c07da7948482dcec2f865998ab1c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        try {
            $this->parent = $this->env->loadTemplate("::base.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(3);

            throw $e;
        }

        $this->blocks = array(
            'template_annonce' => array($this, 'block_template_annonce'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_template_annonce($context, array $blocks = array())
    {
        echo " 
    <html>
        <head>
            <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\">
            <link href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ucovoiturage/css/jquery-ui-1.8.12.custom.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"/>  

            <style type=\"text/css\">
                .container #map{width:400px;height:400px;}
                .container #panel{width:400px;height:200px;
                                  border: 0px solid #333333 ;  overflow: auto;  text-align: left; font-size: 9px;}

            </style>


            <script type=\"text/javascript\">
                \$(document).ready(function () {
                    \$(\"#nbPlace\").show();
                    \$(\"#prix\").show();
                    \$(\"#label_nbPlace\").show();
                    \$(\"#label_prix\").show();
                    \$(\"#nbPlace\").attr(\"required\", \"required\");
                    \$(\"#prix\").attr(\"required\", \"required\");
                    \$(\"#choix\").change(function () {
                        if (\$(\"#choix\").val() == \"passager\") {
                            \$(\"#label_nbPlace\").hide();
                            \$(\"#label_prix\").hide();
                            \$(\"#prix\").hide();
                            \$(\"#nbPlace\").hide();
                            \$(\"#prix\").attr(\"required\", false);
                            \$(\"#nbPlace\").attr(\"required\", false);
                        } else {
                            \$(\"#nbPlace\").show();
                            \$(\"#prix\").show();
                            \$(\"#label_nbPlace\").show();
                            \$(\"#label_prix\").show();
                            \$(\"#nbPlace\").attr(\"required\", \"required\");
                            \$(\"#prix\").attr(\"required\", \"required\");
                        }
                    });
                });
            </script>
        </head>
        <body onload = \"initAutocomplete();\">
            <div class=\"container\">      
                <br>
                <div class=\"row\">

                </div>
                <div class=\"row\">
                    <br> 
                    ";
        // line 54
        $this->env->loadTemplate("::menu_profil.html.twig")->display($context);
        echo " 
                    <div class=\"col-lg-4\">
                        <div class=\"form-group\">
                            <form  method=\"POST\" class=\"\" action=\"\" name=\"direction\" id=\"form\">
                                <label>Lieu de départ :</label><br>
                                <input type=\"text\" name=\"origin\" id=\"origin\" class='form-control' style=\" width: 300px;\" required=\"true\">
                                <br>
                                <label>Lieu d'arrivé :</label><br>
                                <input type=\"text\" name=\"destination\" id=\"destination\" class='form-control' style=\" width:300px;\" required=\"true\">
                                <br>
                                ";
        // line 64
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "dateDepart", array()), 'label');
        echo "
                                <div class=\"input-group date form_datetime col-md-5\" data-date=\"1979-09-16T05:25:07Z\" data-date-format=\"yyyy-mm-dd hh:ii\" data-link-field=\"dtp_input2\">
                                    ";
        // line 66
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "dateDepart", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                                    <span class=\"input-group-addon\"><span class=\"glyphicon glyphicon-th\"></span></span>
                                </div>
                                <input type=\"hidden\" id=\"dtp_input2\" value=\"\" /><br/>

                                ";
        // line 71
        if (((isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")) == 0)) {
            echo "   
                                    <br>
                                    <label for=\"nbPlace\">Nombre de places</label>
                                    <input id=\"nbPlace\" name=\"nbPlace\" type=\"text\" class=\"form-control\" required=\"required\"/> 
                                    <br>
                                    <label for=\"prix\">prix</label>
                                    <input id=\"prix\" name=\"prix\" type=\"text\" class=\"form-control\" required=\"required\"/> 
                                    <br>
                                ";
        } elseif ((        // line 79
(isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")) == 2)) {
            // line 80
            echo "                                    <select id=\"choix\" name=\"choix\">
                                        <option value=\"conducteur\">conducteur</option>
                                        <option value=\"passager\">passager</option>
                                    </select>
                                    <br><br>
                                    <label for=\"nbPlace\" id='label_nbPlace'>Nombre de places :</label>
                                    <input id=\"nbPlace\" name=\"nbPlace\" type=\"text\" class=\"form-control\" style=\" width: 300px;\"/> 
                                    <br>
                                    <label for=\"prix\" id='label_prix'>prix :</label>
                                    <input id=\"prix\" name=\"prix\" type=\"text\" class=\"form-control\"  style=\" width: 300px;\"/> 
                                    <br> 
                                ";
        }
        // line 92
        echo "                                ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "precisions", array()), 'label');
        echo " <br>
                                ";
        // line 93
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "precisions", array()), 'widget');
        echo "
                                ";
        // line 94
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
                                <br>
                                <input type =\"submit\" value= \"valider\" />
                                 ";
        // line 97
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "msg"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 98
            echo "                                <div class=\"alert alert-success\">
                                ";
            // line 99
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
                                <br><br><br>
                            </div>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 103
        echo "                            </form>
                        </div>
                    </div>
                    <div class=\"col-lg-3\">
                        <div id=\"map\"></div>
                        <input type=\"button\" value=\"Calculer l'itinéraire\" onclick=\"javascript:calculate();\">

                        <div id=\"panel\"></div>
                       
                    </div>
                </div>
            </div>                  



            <script type=\"text/javascript\"  src=\"";
        // line 118
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ucovoiturage/plugins/jquery-1.10.2.js"), "html", null, true);
        echo "\"></script>
            <script type=\"text/javascript\"  src=\"";
        // line 119
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ucovoiturage/js/jquery.min.js"), "html", null, true);
        echo "\"></script>
            <script type=\"text/javascript\"  src=\"";
        // line 120
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ucovoiturage/js/jquery-ui-1.8.12.custom.min.js"), "html", null, true);
        echo "\"></script>
            <script type=\"text/javascript\"  src=\"http://maps.google.com/maps/api/js?sensor=false&language=fr\"></script>
            <script type=\"text/javascript\"  src=\"https://maps.googleapis.com/maps/api/js?sensor=false&libraries=places\"></script> 
            <script type=\"text/javascript\"  src=\"";
        // line 123
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ucovoiturage/js/functions.js"), "html", null, true);
        echo "\"></script>

        </body>
    </html>

";
    }

    public function getTemplateName()
    {
        return "covoiturageBundle:Default:annonce.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  209 => 123,  203 => 120,  199 => 119,  195 => 118,  178 => 103,  168 => 99,  165 => 98,  161 => 97,  155 => 94,  151 => 93,  146 => 92,  132 => 80,  130 => 79,  119 => 71,  111 => 66,  106 => 64,  93 => 54,  44 => 8,  36 => 4,  11 => 3,);
    }
}
