<?php

/* covoiturageBundle:Default:index.html.twig */
class __TwigTemplate_0587e098ada49fbfd634a5f3ac90e77ea4468fc5ece3ecfde637f0ac28578082 extends Twig_Template
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
        // line 1
        echo "
<html>
<head>
\t<meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\"/>
\t<meta http-equiv=\"X-UA-Compatible\" content=\"IE=Edge\"/>
\t<title>Untitled</title>
<!--Adobe Edge Runtime-->
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=Edge\">
    <script type=\"text/javascript\" charset=\"utf-8\" src=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ucovoiturage/js/INS_edgePreload.js"), "html", null, true);
        echo "\"></script>
    <style>
        .edgeLoad-EDGE-11035687 { visibility:hidden; }
    </style>
<!--Adobe Edge Runtime End-->

</head>
<body style=\"margin:0;padding:0;\">
\t<div id=\"Stage\" class=\"EDGE-11035687\">
\t</div>
</body>
</html";
    }

    public function getTemplateName()
    {
        return "covoiturageBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 9,  19 => 1,);
    }
}
