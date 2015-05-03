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
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("profile.show.username", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "html", null, true);
        echo "</p>
    <p>";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("profile.show.email", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array()), "html", null, true);
        echo "</p>
    ";
        // line 7
        if (($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "role", array()) == 0)) {
            // line 8
            echo "        <p>mon rôle : conducteur</p>
        <p>compte : ";
            // line 9
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "compte", array()), "html", null, true);
            echo "</p>
        <p>matricule : ";
            // line 10
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "matricule", array()), "html", null, true);
            echo "</p>
        <p>numero de permis: ";
            // line 11
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "numPermis", array()), "html", null, true);
            echo "</p>
        <p>modele Voiture : ";
            // line 12
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "modeleVoiture", array()), "html", null, true);
            echo "</p>
        <p>matricule Voiture : ";
            // line 13
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "matriculeVoiture", array()), "html", null, true);
            echo "</p>
       ";
        } elseif (($this->getAttribute(        // line 14
(isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "role", array()) == 2)) {
            // line 15
            echo "         <p>mon rôle : passager & conducteur</p>  
        <p>mon rôle : conducteur</p>
        <p>compte : ";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "compte", array()), "html", null, true);
            echo "</p>
        <p>matricule : ";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "matricule", array()), "html", null, true);
            echo "</p>
        <p>numero de permis: ";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "numPermis", array()), "html", null, true);
            echo "</p>
        <p>modele Voiture : ";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "modeleVoiture", array()), "html", null, true);
            echo "</p>
        <p>matricule Voiture : ";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "matriculeVoiture", array()), "html", null, true);
            echo "</p>
          ";
        } else {
            // line 23
            echo "           <p>mon rôle : passager </p>
           <p>matricule : ";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "matricule", array()), "html", null, true);
            echo "</p>
    ";
        }
        // line 26
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
        return array (  96 => 26,  91 => 24,  88 => 23,  83 => 21,  79 => 20,  75 => 19,  71 => 18,  67 => 17,  63 => 15,  61 => 14,  57 => 13,  53 => 12,  49 => 11,  45 => 10,  41 => 9,  38 => 8,  36 => 7,  30 => 6,  24 => 5,  19 => 2,);
    }
}
