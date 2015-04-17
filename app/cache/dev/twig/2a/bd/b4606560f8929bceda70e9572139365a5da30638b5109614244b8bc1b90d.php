<?php

/* covoiturageBundle:Default:reservations.html.twig */
class __TwigTemplate_2abdb4606560f8929bceda70e9572139365a5da30638b5109614244b8bc1b90d extends Twig_Template
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
        // line 2
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "success"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 3
            echo "                <div class=\"alert alert-success\">
                    ";
            // line 4
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 7
        echo "            <h3>Demandes reçues </h3>
";
        // line 8
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["demandes_rec"]) ? $context["demandes_rec"] : $this->getContext($context, "demandes_rec")));
        foreach ($context['_seq'] as $context["_key"] => $context["demandes"]) {
            // line 9
            echo "     ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["demandes"], "utilisateurSend", array()), "nom", array()), "html", null, true);
            echo " &nbsp; ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["demandes"], "utilisateurSend", array()), "prenom", array()), "html", null, true);
            echo " 
     vous a envoyé une réservation pour votre annonce du : ";
            // line 10
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute($context["demandes"], "annonce", array()), "DateDepart", array()), "Y-m-d"), "html", null, true);
            echo " <a href='";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("confirmer_res", array("id" => $this->getAttribute($context["demandes"], "id", array()))), "html", null, true);
            echo "'>confirmer</a> <a href='";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("annuler_res", array("id" => $this->getAttribute($context["demandes"], "id", array()))), "html", null, true);
            echo "'>annuler</a>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['demandes'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 12
        echo "<h3>Demandes envoyees : </h3>
";
        // line 13
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["demandes_env"]) ? $context["demandes_env"] : $this->getContext($context, "demandes_env")));
        foreach ($context['_seq'] as $context["_key"] => $context["demandes"]) {
            // line 14
            echo "     ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["demandes"], "utilisateurSend", array()), "nom", array()), "html", null, true);
            echo " &nbsp; ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["demandes"], "utilisateurSend", array()), "prenom", array()), "html", null, true);
            echo " 
     vous a envoyé une réservation pour votre annonce du : ";
            // line 15
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute($context["demandes"], "annonce", array()), "DateDepart", array()), "Y-m-d"), "html", null, true);
            echo " <a href='";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("confirmer_res", array("id" => $this->getAttribute($context["demandes"], "id", array()))), "html", null, true);
            echo "'>confirmer</a> <a href='";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("annuler_res", array("id" => $this->getAttribute($context["demandes"], "id", array()))), "html", null, true);
            echo "'>annuler</a>
     
     ";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute($context["demandes"], "etat", array()), "html", null, true);
            echo "
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['demandes'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "covoiturageBundle:Default:reservations.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 17,  75 => 15,  68 => 14,  64 => 13,  61 => 12,  49 => 10,  42 => 9,  38 => 8,  35 => 7,  26 => 4,  23 => 3,  19 => 2,);
    }
}
