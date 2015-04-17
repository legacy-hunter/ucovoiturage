<?php

/* FOSUserBundle:Profile:show_content.html.twig */
class __TwigTemplate_0a56cc5493cb34935a5fc0e4d9b59610491ffa94ef4cb1b3ab8e0f75b65b4a4d extends Twig_Template
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
        echo "
<div class=\"fos_user_user_show\">
    <p>";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("profile.show.username", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "html", null, true);
        echo "</p>
    <p>";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("profile.show.email", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array()), "html", null, true);
        echo "</p>
    ";
        // line 6
        if (($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "role", array()) == 0)) {
            // line 7
            echo "        <p>mon rôle : conducteur</p>
       ";
        } elseif (($this->getAttribute(        // line 8
(isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "role", array()) == 2)) {
            // line 9
            echo "          <p>mon rôle : passager & conducteur</p> 
          ";
        } else {
            // line 11
            echo "           <p>mon rôle : passager </p>
    ";
        }
        // line 13
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 13,  46 => 11,  42 => 9,  40 => 8,  37 => 7,  35 => 6,  29 => 5,  23 => 4,  19 => 2,);
    }
}
