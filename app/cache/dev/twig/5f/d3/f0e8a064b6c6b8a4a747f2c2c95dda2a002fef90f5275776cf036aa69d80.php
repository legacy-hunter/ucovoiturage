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
                        <br><br>
                        ";
        // line 41
        $this->env->loadTemplate("::menu_profil.html.twig")->display($context);
        echo " 
                        <div class=\"col-lg-4\">
                            <div class=\"form-group\">
                                <form  method=\"POST\" class=\"\" action=\"";
        // line 44
        echo $this->env->getExtension('routing')->getPath("valider_modif_profil");
        echo "\">
                                    <label for=\"choix\">choisir role :</label><br>
                                    <select id=\"choix\" name=\"type\">
                                        <option value=\"conducteur\">conducteur</option>
                                        <option value=\"passager\">passager</option>
                                        <option value=\"all\">passager & conducteur</option>
                                    </select><br><br>  
                                    <label for=\"numCompte\" id=\"label_numCompte\">numero de compte : </label>
                                    <input id=\"numCompte\" name=\"numCompte\" type=\"text\" class=\"form-control\" style=\"width: 400px;\"/> 
                                    <label for=\"numPermis\" id=\"label_numPermis\">numero du permis :</label>
                                    <input id=\"numPermis\" name=\"numPermis\" type=\"text\" class=\"form-control\" style=\"width: 400px;\"/> 
                                    <br>
                                    <input type =\"submit\" value= \"valider\"/>
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
        return "covoiturageBundle:Default:modif_profil.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  87 => 44,  81 => 41,  43 => 6,  36 => 3,  11 => 2,);
    }
}
