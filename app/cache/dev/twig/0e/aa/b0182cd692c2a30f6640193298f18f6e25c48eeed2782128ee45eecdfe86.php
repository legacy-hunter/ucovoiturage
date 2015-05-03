<?php

/* FOSUserBundle:Profile:show.html.twig */
class __TwigTemplate_0eaab0182cd692c2a30f6640193298f18f6e25c48eeed2782128ee45eecdfe86 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        try {
            $this->parent = $this->env->loadTemplate("FOSUserBundle::layout.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(1);

            throw $e;
        }

        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        // line 4
        echo "    <div id=\"container\">
        <br>
        <div class=\"row\" style=\"width: 1200px;\">
            <div class=\"col-lg-4 col-lg-push-1 \">
            ";
        // line 8
        $this->env->loadTemplate("::menu_profil.html.twig")->display($context);
        // line 9
        echo "            </div>
           
            <div class=\" col-lg-3 col-lg-push-1\">   
                <p> <h4>Vos Informations :</h4></p>
                 
                ";
        // line 14
        $this->env->loadTemplate("FOSUserBundle:Profile:show_content.html.twig")->display($context);
        echo " 
                
            </div>
                
                <div class=\" col-lg-5 col-lg-push-2\" style=\"width:200px;\"> 
                     <img src=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ucovoiturage/images/user.png"), "html", null, true);
        echo "\"  width=\"200\" height=\"200\">
                    </div>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 19,  54 => 14,  47 => 9,  45 => 8,  39 => 4,  36 => 3,  11 => 1,);
    }
}
