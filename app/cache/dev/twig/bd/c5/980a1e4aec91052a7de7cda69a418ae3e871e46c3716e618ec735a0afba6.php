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

    // line 4
    public function block_body($context, array $blocks = array())
    {
        // line 5
        echo "<html>
        <head>
 <style type=\"text/css\">
.tg {border-collapse:collapse;border-spacing:0;border-color:#aabcfe;}
.tg td{font-family:Arial, sans-serif;font-size:14px;padding:8px 9px;border-style:solid;border-width:0px;overflow:hidden;word-break:normal;border-color:#aabcfe;color:#669;background-color:#e8edff;border-top-width:1px;border-bottom-width:1px;}
.tg th{font-family:Arial, sans-serif;font-size:14px;font-weight:normal;padding:8px 9px;border-style:solid;border-width:0px;overflow:hidden;word-break:normal;border-color:#aabcfe;color:#039;background-color:#b9c9fe;border-top-width:1px;border-bottom-width:1px;}
.tg .tg-733k{font-family:\"Lucida Sans Unicode\", \"Lucida Grande\", sans-serif !important;}
</style>
        </head>
        <body>
    
        <CENTER>
    
            <table  class=\"tg\">
    <thead>
        <tr>
            <th class=\"tg-733k\">Départs</th>
            <th class=\"tg-031e\" >Arrivés</th>
            <th class=\"tg-031e\">Date de l'opération</th>
            <th class=\"tg-031e\" >Prix</th>
            <th class=\"tg-031e\" >Places disponibles</th>
            <th class=\"tg-031e\">Detaïls de l'opération</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
  ";
        // line 31
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["annonces"]) ? $context["annonces"] : $this->getContext($context, "annonces")));
        foreach ($context['_seq'] as $context["_key"] => $context["annonce"]) {
            // line 32
            echo "      <tr>
          <td>";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute($context["annonce"], "lieuDepart", array()), "html", null, true);
            echo "</td>
          <td>";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute($context["annonce"], "lieuArrive", array()), "html", null, true);
            echo "</td>
          <td>";
            // line 35
            if ($this->getAttribute($context["annonce"], "dateDepart", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["annonce"], "dateDepart", array()), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
          <td>";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute($context["annonce"], "prix", array()), "html", null, true);
            echo "</td>
          <td>";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute($context["annonce"], "nbPlace", array()), "html", null, true);
            echo "</td>
          <td>";
            // line 38
            echo twig_escape_filter($this->env, $this->getAttribute($context["annonce"], "precisions", array()), "html", null, true);
            echo "</td>
          <td><a href=\"";
            // line 39
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("form_etape", array("id" => $this->getAttribute($context["annonce"], "id", array()))), "html", null, true);
            echo "\"><span class=\"glyphicons glyphicon glyphicon-plus\"></span></a> <a  href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("gestion_annonce_edit", array("id" => $this->getAttribute($context["annonce"], "id", array()))), "html", null, true);
            echo "\"> <span class=\"glyphicons glyphicon glyphicon-edit\"></span></a>  <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("supprimer_annonce", array("id" => $this->getAttribute($context["annonce"], "id", array()))), "html", null, true);
            echo "\" onclick=\"return confirm('are u sure?');\"><span class=\"glyphicons glyphicon glyphicon-remove\" style=\"\"></span> </a></td>
          <td></td>
          <td></td>
      </tr>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['annonce'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
        echo "    </tbody>
</table>
        </CENTER>
        </body>
    </html>
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
        return array (  115 => 44,  100 => 39,  96 => 38,  92 => 37,  88 => 36,  82 => 35,  78 => 34,  74 => 33,  71 => 32,  67 => 31,  39 => 5,  36 => 4,  11 => 2,);
    }
}
