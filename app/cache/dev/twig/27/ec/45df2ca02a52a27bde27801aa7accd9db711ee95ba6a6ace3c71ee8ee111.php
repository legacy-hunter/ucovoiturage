<?php

/* covoiturageBundle:Default:details_annonce.html.twig */
class __TwigTemplate_27ec45df2ca02a52a27bde27801aa7accd9db711ee95ba6a6ace3c71ee8ee111 extends Twig_Template
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
<h4>Details de l'opération</h4>
<p>Article publié par ";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "nom", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "prenom", array()), "html", null, true);
        echo "</p> <br>
<p>Date de l'opération : ";
        // line 9
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["annonce"]) ? $context["annonce"] : $this->getContext($context, "annonce")), "dateDepart", array()), "Y-m-d"), "html", null, true);
        echo "</p><br>
<p>Prix de l'opération :  ";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["annonce"]) ? $context["annonce"] : $this->getContext($context, "annonce")), "prix", array()), "html", null, true);
        echo "</p><br>
Quelques précisons de l'auteur : <br>
<p>";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["annonce"]) ? $context["annonce"] : $this->getContext($context, "annonce")), "precisions", array()), "html", null, true);
        echo "</p>
<form action =\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("envoi_res", array("id" => $this->getAttribute((isset($context["annonce"]) ? $context["annonce"] : $this->getContext($context, "annonce")), "id", array()))), "html", null, true);
        echo "\" method=\"POST\">
    <label for=\"comment\">Commentaire : </label><br>
    <textarea id=\"comment\" name=\"comment\"></textarea><br>
    <input type='submit' value='Effectuer reservation'/>
</form>
    <br>Envoyer un message ...<br>
<form action='";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("send_message", array("id" => $this->getAttribute((isset($context["annonce"]) ? $context["annonce"] : $this->getContext($context, "annonce")), "id", array()))), "html", null, true);
        echo "' method='POST' class=\"form-group\">
    <label for='sender'>Votre email : </label><br>
        <input type='text' id='sender_mail' name='sender_mail'/><br>
        <label for='objet'>objet : </label><br>
        <input type='text' id='object' name='objet'><br>
        <label for='message'>Votre message : </label><br>
        <textarea id='message' rows='8' cols='45' name=\"message\"></textarea><br>
        <input type='submit' value='Envoyer message'/>
</form>

            ";
        // line 29
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "success"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 30
            echo "                <div class=\"alert alert-success\">
                    ";
            // line 31
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        echo "
";
    }

    public function getTemplateName()
    {
        return "covoiturageBundle:Default:details_annonce.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  100 => 34,  91 => 31,  88 => 30,  84 => 29,  71 => 19,  62 => 13,  58 => 12,  53 => 10,  49 => 9,  43 => 8,  39 => 6,  36 => 5,  11 => 3,);
    }
}
