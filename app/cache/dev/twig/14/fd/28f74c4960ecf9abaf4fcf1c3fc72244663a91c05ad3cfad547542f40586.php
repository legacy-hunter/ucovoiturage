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

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo "
<h4><h4>
 <table>   
     <tbody>
         
";
        // line 11
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["annonces"]) ? $context["annonces"] : $this->getContext($context, "annonces")));
        foreach ($context['_seq'] as $context["_key"] => $context["annonce"]) {
            // line 12
            echo "    ";
            if (((twig_date_format_filter($this->env, $this->getAttribute($context["annonce"], "dateDepart", array()), "Y-m-d") >= twig_date_format_filter($this->env, "now", "Y-m-d")) && ($this->getAttribute($context["annonce"], "nbPlace", array()) != 0))) {
                // line 13
                echo "    <tr>
        
        <td>Lieu de depart : &nbsp;";
                // line 15
                echo twig_escape_filter($this->env, $this->getAttribute($context["annonce"], "lieuDepart", array()), "html", null, true);
                echo " &nbsp;</td>
        <td> Lieu d'arrivé : &nbsp;";
                // line 16
                echo twig_escape_filter($this->env, $this->getAttribute($context["annonce"], "lieuArrive", array()), "html", null, true);
                echo " &nbsp;</td>
        <td>Nombres de places : &nbsp;";
                // line 17
                echo twig_escape_filter($this->env, $this->getAttribute($context["annonce"], "nbPlace", array()), "html", null, true);
                echo " &nbsp;</td>
        <td>Prix :&nbsp; ";
                // line 18
                echo twig_escape_filter($this->env, $this->getAttribute($context["annonce"], "prix", array()), "html", null, true);
                echo " &nbsp;</td>
        <td>date : &nbsp;";
                // line 19
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["annonce"], "dateDepart", array()), "Y-m-d H:i:s"), "html", null, true);
                echo " &nbsp;<td>
        <td><a href=\"";
                // line 20
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("details_annonce", array("id" => $this->getAttribute($context["annonce"], "id", array()))), "html", null, true);
                echo "\"> > Lire l'annonce</a>
    </tr>
    ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['annonce'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        echo "     </tbody>
   </table>
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
        return array (  87 => 24,  77 => 20,  73 => 19,  69 => 18,  65 => 17,  61 => 16,  57 => 15,  53 => 13,  50 => 12,  46 => 11,  39 => 6,  36 => 5,  11 => 3,);
    }
}
