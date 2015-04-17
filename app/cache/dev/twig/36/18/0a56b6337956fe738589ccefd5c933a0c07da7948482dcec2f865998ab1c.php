<?php

/* covoiturageBundle:Default:annonce.html.twig */
class __TwigTemplate_36180a56b6337956fe738589ccefd5c933a0c07da7948482dcec2f865998ab1c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        try {
            $this->parent = $this->env->loadTemplate("::base.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(2);

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

    // line 3
    public function block_template_annonce($context, array $blocks = array())
    {
        echo " 
    <html>
        <head>
            
             <head>
        <script src=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ucovoiturage/plugins/jquery-1.10.2.js"), "html", null, true);
        echo "\"></script>
         <script type=\"text/javascript\">  
           \$(document).ready(function(){ 
               \$(\"#nbPlace\").show();
               \$(\"#prix\").show();
               \$(\"#label_nbPlace\").show();
               \$(\"#label_prix\").show();
               \$(\"#nbPlace\").attr(\"required\",\"required\");
               \$(\"#prix\").attr(\"required\",\"required\");
              \$(\"#choix\").change( function(){
               if(\$(\"#choix\").val()==\"passager\"){
                \$(\"#label_nbPlace\").hide();
               \$(\"#label_prix\").hide();
               \$(\"#prix\").hide();
               \$(\"#nbPlace\").hide();
               \$(\"#prix\").attr(\"required\",false);
               \$(\"#nbPlace\").attr(\"required\",false);
               }else{
                \$(\"#nbPlace\").show();
               \$(\"#prix\").show();
               \$(\"#label_nbPlace\").show();
               \$(\"#label_prix\").show();
               \$(\"#nbPlace\").attr(\"required\",\"required\");
               \$(\"#prix\").attr(\"required\",\"required\");
               }
           });
           });
           </script>
        </head>
            
            
        </head>
        <body>
            <div class=\"container\">
                <div class=\"row\">
                    ";
        // line 43
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 44
            echo "                        ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.logged_in_as", array("%username%" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array())), "FOSUserBundle"), "html", null, true);
            echo " |
                        <a href=\"";
            // line 45
            echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
            echo "\">
                            ";
            // line 46
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.logout", array(), "FOSUserBundle"), "html", null, true);
            echo "
                        </a>
                    ";
        } else {
            // line 49
            echo "                        <a href=\"";
            echo $this->env->getExtension('routing')->getPath("fos_user_security_login");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.login", array(), "FOSUserBundle"), "html", null, true);
            echo "</a>
                    ";
        }
        // line 51
        echo "                </div>
                <div class=\"row\">
                    <br> 
                    ";
        // line 54
        $this->env->loadTemplate("::menu_profil.html.twig")->display($context);
        echo " 
                    <div class=\"col-lg-6\">
                        <div class=\"form-group\">
                            <form  method=\"POST\" class=\"\" action=\"";
        // line 57
        echo $this->env->getExtension('routing')->getPath("covoiturage_annonce");
        echo " ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo "\">
                                ";
        // line 58
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "lieuDepart", array()), 'label');
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "lieuDepart", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "lieuDepart", array()), 'errors');
        echo "
                                <br>
                                ";
        // line 60
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "lieuArrive", array()), 'label');
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "lieuArrive", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "lieuDepart", array()), 'errors');
        echo "
                                <br>
                                
                                <div class=\"input-group date form_datetime col-md-5\" data-date=\"1979-09-16T05:25:07Z\" data-date-format=\"yyyy-mm-dd hh:ii\" data-link-field=\"dtp_input1\">
                                ";
        // line 64
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "dateDepart", array()), 'label');
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "dateDepart", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                                <span class=\"input-group-addon\"><span class=\"glyphicon glyphicon-th\"></span></span>
                                </div>
                                 <input type=\"hidden\" id=\"dtp_input2\" value=\"\" /><br/>
                              
                                 ";
        // line 69
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
        } elseif ((        // line 78
(isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")) == 2)) {
            // line 79
            echo "                                     <select id=\"choix\" name=\"choix\">
                                        <option value=\"conducteur\">conducteur</option>
                                        <option value=\"passager\">passager</option>
                                    </select>
                                     <br><br>
                                <label for=\"nbPlace\" id='label_nbPlace'>Nombre de places</label>
                                 <input id=\"nbPlace\" name=\"nbPlace\" type=\"text\" class=\"form-control\"/> 
                                <br>
                                 <label for=\"prix\" id='label_prix'>prix</label>
                                 <input id=\"prix\" name=\"prix\" type=\"text\" class=\"form-control\"/> 
                                 <br> 
                                ";
        }
        // line 91
        echo "                                ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "precisions", array()), 'label');
        echo " <br>
                                ";
        // line 92
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "precisions", array()), 'widget');
        echo "
                                ";
        // line 93
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
                                <br>
                                <input type =\"submit\" value= \"valider\"/>
                               ";
        // line 96
        echo twig_escape_filter($this->env, ((array_key_exists("message", $context)) ? (_twig_default_filter((isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")), "")) : ("")), "html", null, true);
        echo "
                            </form>
                        </div>
                    </div>
                </div>
            </div>

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
        return array (  193 => 96,  187 => 93,  183 => 92,  178 => 91,  164 => 79,  162 => 78,  150 => 69,  141 => 64,  132 => 60,  125 => 58,  119 => 57,  113 => 54,  108 => 51,  100 => 49,  94 => 46,  90 => 45,  85 => 44,  83 => 43,  45 => 8,  36 => 3,  11 => 2,);
    }
}
