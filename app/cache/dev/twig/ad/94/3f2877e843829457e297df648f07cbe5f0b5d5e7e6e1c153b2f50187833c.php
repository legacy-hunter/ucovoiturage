<?php

/* ::menu_profil.html.twig */
class __TwigTemplate_ad943f2877e843829457e297df648f07cbe5f0b5d5e7e6e1c153b2f50187833c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "


<div class=\"col-lg-4 col-md-push-1\">
    <aside>
                <ul  class=\"nav nav-pills nav-stacked \">
                    
                    <li class=\"active\" role=\"presentation\"><a href=\"";
        // line 8
        echo $this->env->getExtension('routing')->getPath("covoiturage_annonce");
        echo "\">Creer une Annonce</a></li>
                    <li><a href=\"";
        // line 9
        echo $this->env->getExtension('routing')->getPath("liste_annonce");
        echo "\">Gerer Mes Annonces</a></li>
                    <li><a>Effectuer un payement</a></li>
                    <li><a href=\"";
        // line 11
        echo $this->env->getExtension('routing')->getPath("modif_profil");
        echo "\">Modifier le role</a></li>
                    <li><a href=\"";
        // line 12
        echo $this->env->getExtension('routing')->getPath("voir_res");
        echo "\">Mes réservations</a></li>
                    <li><a href=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("fos_user_profile_edit");
        echo "\">Modifier mes informations</a></li>   
                    <li><a>Envoyer un message</a></li>
                    <li><a href=\"";
        // line 15
        echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
        echo "\">Deconnectez vous</a></li>
                </ul>
    </aside>
</div>
";
    }

    public function getTemplateName()
    {
        return "::menu_profil.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 15,  45 => 13,  41 => 12,  37 => 11,  32 => 9,  28 => 8,  19 => 1,);
    }
}
