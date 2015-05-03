<?php

/* FOSUserBundle::layout.html.twig */
class __TwigTemplate_d1aa3c1bca816d3a0a49b1e5d3ca25d181a5756a1e7572d128d1719d2ac83713 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        try {
            $this->parent = $this->env->loadTemplate("::base.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(1);

            throw $e;
        }

        $this->blocks = array(
            'layout_fosuser_body' => array($this, 'block_layout_fosuser_body'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
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
    public function block_layout_fosuser_body($context, array $blocks = array())
    {
        // line 4
        echo "    <br>
        </div>

       

        <div>
            ";
        // line 10
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 12
        echo "        </div>
   ";
    }

    // line 10
    public function block_fos_user_content($context, array $blocks = array())
    {
        // line 11
        echo "            ";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 11,  55 => 10,  50 => 12,  48 => 10,  40 => 4,  37 => 3,  11 => 1,);
    }
}
