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
        <h3>Bienvenue sur votre profil</h3>
        <br><br>
        <div class=\"row\">
            ";
        // line 8
        $this->env->loadTemplate("::menu_profil.html.twig")->display($context);
        // line 9
        echo "            <div class=\" col-lg-8\">   
                <p> <h4>Vos Informations :</h4></p>
                 
                ";
        // line 12
        $this->env->loadTemplate("FOSUserBundle:Profile:show_content.html.twig")->display($context);
        echo " 
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
        return array (  52 => 12,  47 => 9,  45 => 8,  39 => 4,  36 => 3,  11 => 1,);
    }
}
