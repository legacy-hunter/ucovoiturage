<?php

/* covoiturageBundle:Default:listeCovoiturages.html.twig */
class __TwigTemplate_14fd28f74c4960ecf9abaf4fcf1c3fc72244663a91c05ad3cfad547542f40586 extends Twig_Template
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
            'body' => array($this, 'block_body'),
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
    public function block_body($context, array $blocks = array())
    {
        // line 5
        echo "<html>
        <head>
             <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\">
           <link href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ucovoiturage/css/jquery-ui-1.8.12.custom.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"/>  
           
    <style type=\"text/css\">
    .container #map{width:600px;height:300px;}
    .container #panel{width:400px;height:200px;
     border: 0px solid #333333 ;  overflow: auto;  text-align: left; font-size: 9px;}
   
  </style>
        </head>

    <body onload = \"initAutocomplete();\">

        <div class=\"container\">
            
        <div class=\"row\">
            <br>
        </div>
<div class=\"row\">
    <div class=\"col-lg-4\">
         ";
        // line 27
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "rech_msg"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 28
            echo "                <div class=\"alert alert-success\">
                    ";
            // line 29
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "        <form action=\"";
        echo $this->env->getExtension('routing')->getPath("liste_covoiturages");
        echo "\" method=\"POST\">
            <label for=\"origin\">ville de départ :</label><br>
            <input type=\"text\" name=\"origin\" id=\"origin\" class=\"form-control\" style=\" width: 300px;\"><br>
        <label for=\"destination\">ville d'arrive :</label><br>
        <input type=\"text\" name=\"destination\" id=\"destination\" class=\"form-control\" style=\" width: 300px;\"><br>
        <label for=\"dateRech\">Date de depart :</label><br>
        <div class=\"input-group date form_date col-md-1\"  data-date-format=\"yyyy-mm-dd\" data-link-field=\"dtp_input2\" data-link-format=\"yyyy-mm-dd\">
            <input type='text' name='dateRech' id='dateRech' style=\" width: 260px;\" readonly=\"true\" >
            <span class=\"input-group-addon\"><span class=\"glyphicon glyphicon-calendar\"></span></span>
        </div><br>
        <input type=\"submit\" value=\"rechercher\" class=\"btn-success\" />
    </form>
            
    </div>
              
           
                <div id=\"map\">     
                </div>
           
              <img src=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ucovoiturage/images/bird.png"), "html", null, true);
        echo "\"  width=\"100\" height=\"100\">
              <br><br>
</div>
        <div class=\"row\" >        
    <div class=\"panel panel-success\">
        <div class=\"panel-heading\"><CENTER><h4>Liste de covoiturage<h4></CENTER></div>

                        <!--strat of the big table  class=\"table table-striped table-hover table-bordered table-condensed\"-->
                        <table class=\"table table-striped table-hover table-bordered table-condensed\" border=\"0\">   
                            <tbody>

                                ";
        // line 62
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["annoncesPag"]) ? $context["annoncesPag"] : $this->getContext($context, "annoncesPag")));
        foreach ($context['_seq'] as $context["_key"] => $context["annonce"]) {
            // line 63
            echo "                                    
                                        <tr>
                                            <td>
                                                <!--begine of table 1-->
                                                <table class=\"table table-striped table-hover table-condensed\">
                                                    <tbody>
                                                        <tr>
                                                            <td width=\"100px\" align=\"left\" rowspan=\"0\"><!---->
                                                                <div class=\"media\">
                                                                    ";
            // line 72
            if (($this->getAttribute($context["annonce"], "role", array()) == "conducteur")) {
                // line 73
                echo "                                                                        ";
                if (($this->getAttribute($this->getAttribute($context["annonce"], "utilisateur", array()), "sexe", array()) == "0")) {
                    // line 74
                    echo "                                                                    <a class=\"pull-left\" href=\"#\">
                          
                                                                        <img class=\"media-object\" src=\"";
                    // line 76
                    echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ucovoiturage/images/carwoman.png"), "html", null, true);
                    echo "\"alt=\"Media Object\">
                                                                    </a> 
                                                                        ";
                } else {
                    // line 79
                    echo "                                                                        <img class=\"media-object\" src=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ucovoiturage/images/carman.png"), "html", null, true);
                    echo "\"alt=\"Media Object\">
                                                                            ";
                }
                // line 81
                echo "                                                                            ";
            } else {
                // line 82
                echo "                                                                                ";
                if (($this->getAttribute($this->getAttribute($context["annonce"], "utilisateur", array()), "sexe", array()) == "0")) {
                    // line 83
                    echo "                                                                             <img class=\"media-object\" src=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ucovoiturage/images/woman.png"), "html", null, true);
                    echo "\"alt=\"Media Object\">   
                                                                                ";
                } else {
                    // line 85
                    echo "                                                                             <img class=\"media-object\" src=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ucovoiturage/images/man.png"), "html", null, true);
                    echo "\"alt=\"Media Object\">
                                                                             ";
                }
                // line 87
                echo "                                                                    ";
            }
            // line 88
            echo "                                                                </div>    
                                                            </td>
                                                            <td><!--width=\"200px\" height=\"25\"-->
                                                                Nom:
                                                            </td>
                                                            <td>";
            // line 93
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["annonce"], "utilisateur", array()), "nom", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["annonce"], "utilisateur", array()), "prenom", array()), "html", null, true);
            echo "</td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <strong>Nombres de places: </strong>
                                                            </td>

                                                            <td>
                                                                <strong align=\"center\"> ";
            // line 101
            echo twig_escape_filter($this->env, $this->getAttribute($context["annonce"], "nbPlace", array()), "html", null, true);
            echo "</strong>
                                                                place(s)
                                                            </td>


                                                        </tr>
                                                    </tbody>  
                                                </table>    
                                            </td> 
                                            <!--end of table 1-->

                                            <!-- begine of table 2-->

                                            <td>
                                                Lieu de depart : &nbsp;";
            // line 115
            echo twig_escape_filter($this->env, $this->getAttribute($context["annonce"], "lieuDepart", array()), "html", null, true);
            echo "</br>
                                                Lieu d'arrivé : &nbsp;";
            // line 116
            echo twig_escape_filter($this->env, $this->getAttribute($context["annonce"], "lieuArrive", array()), "html", null, true);
            echo "</br>
                                                <p class=\"gros2\">";
            // line 117
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["annonce"], "dateDepart", array()), "Y-m-d H:i:s"), "html", null, true);
            echo "</p>
                                                <a href=\"";
            // line 118
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("details_annonce", array("id" => $this->getAttribute($context["annonce"], "id", array()))), "html", null, true);
            echo "\"> Lire l'annonce</a>
                                            </td>

                                            <td  align=\"center\">
                                                <span class=\"gros\">
                                                    <strong>Prix :&nbsp; ";
            // line 123
            echo twig_escape_filter($this->env, $this->getAttribute($context["annonce"], "prix", array()), "html", null, true);
            echo "dt </strong>
                                                </span>
                                                </br>
                                                par passager
                                            </td>
                                        </tr>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['annonce'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 130
        echo "                                    </tbody>
                                </table>

                                </div>      
                                    ";
        // line 134
        echo $this->env->getExtension('knp_pagination')->render((isset($context["annoncesPag"]) ? $context["annoncesPag"] : $this->getContext($context, "annoncesPag")));
        echo "
                                </div> 
                                </div>

                                
                       
                        <br><br><br><br><br><br><br><br>
                        
                        
    <script type=\"text/javascript\"  src=\"";
        // line 143
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ucovoiturage/plugins/jquery-1.10.2.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\"  src=\"";
        // line 144
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ucovoiturage/js/jquery.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\"  src=\"";
        // line 145
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ucovoiturage/js/jquery-ui-1.8.12.custom.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\"  src=\"http://maps.google.com/maps/api/js?sensor=false&language=fr\"></script>
    <script type=\"text/javascript\"  src=\"https://maps.googleapis.com/maps/api/js?sensor=false&libraries=places\"></script> 
    <script type=\"text/javascript\"  src=\"";
        // line 148
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ucovoiturage/js/functions.js"), "html", null, true);
        echo "\"></script>
    </body>           
</html>
                    ";
    }

    public function getTemplateName()
    {
        return "covoiturageBundle:Default:listeCovoiturages.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  278 => 148,  272 => 145,  268 => 144,  264 => 143,  252 => 134,  246 => 130,  233 => 123,  225 => 118,  221 => 117,  217 => 116,  213 => 115,  196 => 101,  183 => 93,  176 => 88,  173 => 87,  167 => 85,  161 => 83,  158 => 82,  155 => 81,  149 => 79,  143 => 76,  139 => 74,  136 => 73,  134 => 72,  123 => 63,  119 => 62,  105 => 51,  82 => 32,  73 => 29,  70 => 28,  66 => 27,  44 => 8,  39 => 5,  36 => 4,  11 => 3,);
    }
}
