<?php

/* covoiturageBundle:Default:listeAnnonce.html.twig */
class __TwigTemplate_bdc5980a1e4aec91052a7de7cda69a418ae3e871e46c3716e618ec735a0afba6 extends Twig_Template
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
        echo "<div class=\"col-xs-12 col-sm-10 col-md-6\"> 
<table  table table-bordered table-striped table-hover>
    <thead>
        <tr>
            <th>Départs</th>
            <th>Arrivés</th>
            <th>Date de l'opération</th>
            <th>Prix</th>
            <th>Places disponibles</th>
            <th>Detaïls de l'opération</th>
        </tr>
    </thead>
    <tbody>
  ";
        // line 17
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["annonces"]) ? $context["annonces"] : $this->getContext($context, "annonces")));
        foreach ($context['_seq'] as $context["_key"] => $context["annonce"]) {
            // line 18
            echo "      <tr>
          <td>";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($context["annonce"], "lieuDepart", array()), "html", null, true);
            echo "</td>
          <td>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["annonce"], "lieuArrive", array()), "html", null, true);
            echo "</td>
          <td>";
            // line 21
            if ($this->getAttribute($context["annonce"], "dateDepart", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["annonce"], "dateDepart", array()), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
          <td>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["annonce"], "prix", array()), "html", null, true);
            echo "</td>
          <td>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["annonce"], "nbPlace", array()), "html", null, true);
            echo "</td>
          <td>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["annonce"], "precisions", array()), "html", null, true);
            echo "</td>
          <td><a  href=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("gestion_annonce_edit", array("id" => $this->getAttribute($context["annonce"], "id", array()))), "html", null, true);
            echo "\">modifier</a></td>
          <td><a href=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("supprimer_annonce", array("id" => $this->getAttribute($context["annonce"], "id", array()))), "html", null, true);
            echo "\" onclick=\"return confirm('are u sure?');\">supprimer</a></td>
          <td><a href=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("form_etape", array("id" => $this->getAttribute($context["annonce"], "id", array()))), "html", null, true);
            echo "\">Ajouter une etape</a></td>
        
      </tr>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['annonce'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "    </tbody>
</table>
    </div>
";
    }

    public function getTemplateName()
    {
        return "covoiturageBundle:Default:listeAnnonce.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 31,  95 => 27,  91 => 26,  87 => 25,  83 => 24,  79 => 23,  75 => 22,  69 => 21,  65 => 20,  61 => 19,  58 => 18,  54 => 17,  39 => 4,  36 => 3,  11 => 2,);
    }
}
