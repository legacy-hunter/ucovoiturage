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
        echo "    <div class=\"container\">
<div class=\"row\">
<div class=\"col-lg-4\">
   
</div>
    <div class=\"col-lg-8\" style=\"height: 100px; width: 100px;\">
      
      
       ";
        // line 14
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "notif"), "method"));
        foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
            // line 15
            echo "            ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 16
                echo "                <div class=\"flash-";
                echo twig_escape_filter($this->env, $context["type"], "html", null, true);
                echo "\">
                    <strong style=\"color: blue;\"> ";
                // line 17
                echo twig_escape_filter($this->env, $context["message"], "html", null, true);
                echo " </strong>
                </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 20
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "      </div>
</div>
<div class=\"row\">
    <div class=\"col-lg-8 col-md-push-2\" style=\"width: 500px;\">
               
    <img src=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ucovoiturage/images/image_login.jpeg"), "html", null, true);
        echo "\"  width=\"200\" height=\"200\">
           
</div>
<div class=\"col-lg-3 col col-md-push-3\">
<div class=\"form-group\">
<form action=\"";
        // line 31
        echo $this->env->getExtension('routing')->getPath("fos_user_security_check");
        echo "\" method=\"post\" class=\"form-group-lg\">
     
    <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 33
        echo twig_escape_filter($this->env, (isset($context["csrf_token"]) ? $context["csrf_token"] : $this->getContext($context, "csrf_token")), "html", null, true);
        echo "\" />
    <div class=\"form-group\">
    <label for=\"username\">";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.username", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
    <div class=\"input-group\">
    <input type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 37
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" required=\"required\" placeholder=\"\"class=\"form-control\"/>
    </div>
    </div>
    <br>
   
    <label for=\"password\">";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.password", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
    <div class=\"input-group\">
    <input type=\"password\" id=\"password\" name=\"_password\" required=\"required\" class=\"form-control\" />
    </div>
    <br>
    <div>
    <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\" />
    <label for=\"remember_me\">";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.remember_me", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
    </div> <br> 
    <input class=\"btn btn-primary\" type=\"submit\" value=\"envoyer\"/> <br><br>
    
    ";
        // line 53
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 54
            echo "    <div>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageKey", array()), $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageData", array()), "security"), "html", null, true);
            echo "</div>
    ";
        }
        // line 56
        echo "  
</form>
    <a href=\"";
        // line 58
        echo $this->env->getExtension('routing')->getPath("fos_user_registration_register");
        echo "\">Pas de compte ?</a> <br>
    <a href=\"";
        // line 59
        echo $this->env->getExtension('routing')->getPath("fos_user_resetting_request");
        echo "\">Mot de passe perdu ?</a>
   </div> 
     
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
        return array (  149 => 59,  145 => 58,  141 => 56,  135 => 54,  133 => 53,  126 => 49,  116 => 42,  108 => 37,  103 => 35,  98 => 33,  93 => 31,  85 => 26,  78 => 21,  72 => 20,  63 => 17,  58 => 16,  53 => 15,  49 => 14,  39 => 6,  36 => 5,  11 => 1,);
    }
}
