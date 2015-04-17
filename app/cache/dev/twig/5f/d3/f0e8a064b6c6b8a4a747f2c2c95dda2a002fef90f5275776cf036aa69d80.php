<?php

/* covoiturageBundle:Default:modif_profil.html.twig */
class __TwigTemplate_5fd3f0e8a064b6c6b8a4a747f2c2c95dda2a002fef90f5275776cf036aa69d80 extends Twig_Template
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
        <script src=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ucovoiturage/plugins/jquery-1.10.2.js"), "html", null, true);
        echo "\"></script>
         <script type=\"text/javascript\">  
           \$(document).ready(function(){ 
               \$(\"#numPermis\").show();
               \$(\"#numCompte\").show();
               \$(\"#label_numPermis\").show();
               \$(\"#label_numCompte\").show();
               \$(\"#numPermis\").attr(\"required\",\"required\");
               \$(\"#numCompte\").attr(\"required\",\"required\");
              \$(\"#choix\").change( function(){
               if(\$(\"#choix\").val()==\"passager\"){
                \$(\"#label_numPermis\").hide();
               \$(\"#label_numCompte\").hide();
               \$(\"#numPermis\").hide();
               \$(\"#numCompte\").hide();
               \$(\"#numPermis\").attr(\"required\",false);
               \$(\"#numCompte\").attr(\"required\",false);
               }else{
               \$(\"#numPermis\").show();
               \$(\"#numCompte\").show();
               \$(\"#numPermis\").attr(\"required\",\"required\");
               \$(\"#numCompte\").attr(\"required\",\"required\");
               \$(\"#label_numPermis\").show();
               \$(\"#label_numCompte\").show();
               }
           });
           });
           </script>
        </head>
        <body>
            <div class=\"container\">
                <div class=\"row\">
                    ";
        // line 38
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 39
            echo "                        ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.logged_in_as", array("%username%" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array())), "FOSUserBundle"), "html", null, true);
            echo " |
                        <a href=\"";
            // line 40
            echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
            echo "\">
                            ";
            // line 41
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.logout", array(), "FOSUserBundle"), "html", null, true);
            echo "
                        </a>
                    ";
        } else {
            // line 44
            echo "                        <a href=\"";
            echo $this->env->getExtension('routing')->getPath("fos_user_security_login");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.login", array(), "FOSUserBundle"), "html", null, true);
            echo "</a>
                    ";
        }
        // line 46
        echo "                </div>
                <div class=\"row\">

                    <div class=\"row\">
                        <br> 
                        ";
        // line 51
        $this->env->loadTemplate("::menu_profil.html.twig")->display($context);
        echo " 
                        <div class=\"col-lg-6\">
                            <div class=\"form-group\">
                                <form  method=\"POST\" class=\"\" action=\"";
        // line 54
        echo $this->env->getExtension('routing')->getPath("valider_modif_profil");
        echo "\">
                                    <label for=\"choix\">choisir role :</label><br>
                                    <select id=\"choix\" name=\"type\">
                                        <option value=\"conducteur\">conducteur</option>
                                        <option value=\"passager\">passager</option>
                                        <option value=\"all\">passager & conducteur</option>
                                    </select><br><br>  
                                    <label for=\"numCompte\" id=\"label_numCompte\">numero de compte : </label>
                                    <input id=\"numCompte\" name=\"numCompte\" type=\"text\" class=\"form-control\"/> 
                                    <label for=\"numPermis\" id=\"label_numPermis\">numero du permis :</label>
                                    <input id=\"numPermis\" name=\"numPermis\" type=\"text\" class=\"form-control\"/> 
                                    <br>
                                    <input type =\"submit\" value= \"valider\"/>
                                </form>
                            </div>
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
        return "covoiturageBundle:Default:modif_profil.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  116 => 54,  110 => 51,  103 => 46,  95 => 44,  89 => 41,  85 => 40,  80 => 39,  78 => 38,  43 => 6,  36 => 3,  11 => 2,);
    }
}
