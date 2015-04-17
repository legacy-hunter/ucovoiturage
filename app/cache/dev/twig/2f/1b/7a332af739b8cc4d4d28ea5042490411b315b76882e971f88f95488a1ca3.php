<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_2f1b7a332af739b8cc4d4d28ea5042490411b315b76882e971f88f95488a1ca3 extends Twig_Template
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

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        // line 6
        echo "<div class=\"row\">
<div class=\"col-lg-4\">
    <div class=\"row\">
        <div class=\"col-lg-4\">      
        
        </div>
    </div>
</div>
     <div class=\"col-lg-8\">
      <h2>Connexion</h2>
      </div>
</div>
<div class=\"row\">
    <div class=\"col-lg-9\">
   
</div>
<div class=\"col-lg-3 col\">
<div class=\"form-group\">
<form action=\"";
        // line 24
        echo $this->env->getExtension('routing')->getPath("fos_user_security_check");
        echo "\" method=\"post\" class=\"form-group-lg\">
     
    <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 26
        echo twig_escape_filter($this->env, (isset($context["csrf_token"]) ? $context["csrf_token"] : $this->getContext($context, "csrf_token")), "html", null, true);
        echo "\" />
    <div class=\"form-group\">
    <label for=\"username\">";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.username", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
    <div class=\"input-group\">
    <input type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 30
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" required=\"required\" placeholder=\"\"class=\"form-control\"/>
    </div>
    </div>
    <br>
   
    <label for=\"password\">";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.password", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
    <div class=\"input-group\">
    <input type=\"password\" id=\"password\" name=\"_password\" required=\"required\" class=\"form-control\" />
    </div>
    <br>
    <div>
    <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\" />
    <label for=\"remember_me\">";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.remember_me", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
    </div> <br> 
    <input class=\"btn btn-primary\" type=\"submit\" value=\"envoyer\"/> <br><br>
    
    ";
        // line 46
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 47
            echo "    <div>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageKey", array()), $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageData", array()), "security"), "html", null, true);
            echo "</div>
    ";
        }
        // line 49
        echo "  
</form>
    <a href=\"";
        // line 51
        echo $this->env->getExtension('routing')->getPath("fos_user_registration_register");
        echo "\">Pas de compte ?</a> <br>
    <a href=\"";
        // line 52
        echo $this->env->getExtension('routing')->getPath("fos_user_resetting_request");
        echo "\">Mot de passe perdu ?</a>
   </div> 
     
</div>
    
</div>
";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  115 => 52,  111 => 51,  107 => 49,  101 => 47,  99 => 46,  92 => 42,  82 => 35,  74 => 30,  69 => 28,  64 => 26,  59 => 24,  39 => 6,  36 => 5,  11 => 1,);
    }
}
