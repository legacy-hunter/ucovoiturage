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
        echo "    <div class=\"container\">
      <div class=\"row\">
   
<form action=\"";
        // line 7
        echo $this->env->getExtension('routing')->getPath("traitement_etape");
        echo "\" method=\"post\" class=\"form-horizontal\">
    <fieldset>
            <legend>Etape</legend>
            <div class=\"form-group\">  
                <input name=\"id_annonce\" value=\"";
        // line 11
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "\" type=\"hidden\"/>
    <label for='name' class=\"ol-md-2 control-label\" >remplir ville : </label>
    <div class=\"input-group\">
    <input type=\"text\" name=\"ville\" id='name' required class=\"form-control\" />
    </div>
            </div> 
     <div class=\"form-group\">  
    <label for='prix' >remplir le prix : </label>
     <div class=\"input-group\">
    <input type=\"text\"   name=\"prix\"  id=\"prix\" required class=\"form-control\" />
    
     </div>
    </div>
            <button type=\"submit\" class=\"btn btn-info\" >ajouter à l'annonce</button>
      </fieldset>
</form>
    <br>
                <strong>";
        // line 28
        echo twig_escape_filter($this->env, (isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")), "html", null, true);
        echo "</strong> <br>
    <a>Retourner à la liste </a> ou <a>profil</a>
    </div>
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
        return array (  71 => 28,  51 => 11,  44 => 7,  39 => 4,  36 => 3,  11 => 2,);
    }
}
