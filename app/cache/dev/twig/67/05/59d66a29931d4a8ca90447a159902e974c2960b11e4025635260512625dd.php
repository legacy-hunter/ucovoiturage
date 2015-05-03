<?php

/* covoiturageBundle:Default:etape.html.twig */
class __TwigTemplate_670559d66a29931d4a8ca90447a159902e974c2960b11e4025635260512625dd extends Twig_Template
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

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "    <html>
        <head>
            <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\">
            <link href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ucovoiturage/css/jquery-ui-1.8.12.custom.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"/>  

            <style type=\"text/css\">
                .container #map{width:400px;height:400px;}
                .container #panel{width:400px;height:200px;
                                  border: 0px solid #333333 ;  overflow: auto;  text-align: left; font-size: 9px;}

            </style>
        </head>
         <body onload = \"initAutocomplete();\">
    <div class=\"container\">
        
      <div class=\"row\">
   <div class=\"col-lg-4\">
<form action=\"";
        // line 21
        echo $this->env->getExtension('routing')->getPath("traitement_etape");
        echo "\" method=\"post\" class=\"form-horizontal\">
    <fieldset>
            <legend>Etape</legend>
            <div class=\"form-group\">  
                <input name=\"id_annonce\" value=\"";
        // line 25
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "\" type=\"hidden\"/>
    <label for='name' class=\"ol-md-2 control-label\" >remplir ville : </label>
    <div class=\"input-group\">
    <input type=\"text\" name=\"origin\" id=\"origin\" class='form-control' style=\" width: 300px;\" required=\"true\">
    </div>
            </div> 
     <div class=\"form-group\">  
    <label for='prix' >remplir le prix : </label>
     <div class=\"input-group\">
    <input type=\"text\" name=\"prix\" id=\"prix\" class='form-control' style=\" width: 300px;\" required=\"true\">
    
     </div>
    </div>
            <button type=\"submit\" class=\"btn btn-info\" >ajouter à l'annonce</button>
      </fieldset>
</form>
    <br>
               
                <a href=\"";
        // line 43
        echo $this->env->getExtension('routing')->getPath("liste_annonce");
        echo "\">Retourner à la liste </a>
                ";
        // line 44
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "msg_etape"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 45
            echo "                <div class=\"alert alert-success\">
                    ";
            // line 46
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 49
        echo "   </div>
    <div class=\"col-lg-4\">
                        <div id=\"map\"></div>
    </div>
   <div class=\"col-lg-4 col-lg-push-1\">
       <img src=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ucovoiturage/images/carLogoMap.png"), "html", null, true);
        echo "\"  width=\"200\" height=\"300\">
   </div>
      </div>
   
    </div>
    </div>
     <script type=\"text/javascript\"  src=\"";
        // line 60
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ucovoiturage/plugins/jquery-1.10.2.js"), "html", null, true);
        echo "\"></script>
            <script type=\"text/javascript\"  src=\"";
        // line 61
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ucovoiturage/js/jquery.min.js"), "html", null, true);
        echo "\"></script>
            <script type=\"text/javascript\"  src=\"";
        // line 62
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ucovoiturage/js/jquery-ui-1.8.12.custom.min.js"), "html", null, true);
        echo "\"></script>
            <script type=\"text/javascript\"  src=\"http://maps.google.com/maps/api/js?sensor=false&language=fr\"></script>
            <script type=\"text/javascript\"  src=\"https://maps.googleapis.com/maps/api/js?sensor=false&libraries=places\"></script> 
            <script type=\"text/javascript\"  src=\"";
        // line 65
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ucovoiturage/js/functions.js"), "html", null, true);
        echo "\"></script>
    </body>
    </html>
  ";
    }

    public function getTemplateName()
    {
        return "covoiturageBundle:Default:etape.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  139 => 65,  133 => 62,  129 => 61,  125 => 60,  116 => 54,  109 => 49,  100 => 46,  97 => 45,  93 => 44,  89 => 43,  68 => 25,  61 => 21,  44 => 7,  39 => 4,  36 => 3,  11 => 2,);
    }
}
