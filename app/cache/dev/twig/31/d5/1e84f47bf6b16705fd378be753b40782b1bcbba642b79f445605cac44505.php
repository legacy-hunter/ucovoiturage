<?php

/* ::base.html.twig */
class __TwigTemplate_31d51e84f47bf6b16705fd378be753b40782b1bcbba642b79f445605cac44505 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'layout_fosuser_body' => array($this, 'block_layout_fosuser_body'),
            'template_annonce' => array($this, 'block_template_annonce'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
   <head>
    <meta charset=\"utf-8\" />
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, maximum-scale=1\" />
    <meta name=\"description\" content=\"\" />
    <meta name=\"author\" content=\"\" />
    <!--[if IE]>
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge,chrome=1\">
        <![endif]-->
    <title>Ucovoiturage</title>
      <link href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ucovoiturage/css/bootstrap-datetimepicker.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" media=\"screen\"/>   
    <link href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ucovoiturage/css/bootstrap.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"/>
    <!-- BOOTSTRAP CORE STYLE CSS -->
    <link href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ucovoiturage/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"/>
    <!-- FONTAWESOME STYLE CSS -->
    <link href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ucovoiturage/css/font-awesome.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
    <!-- CUSTOM STYLE CSS -->
       
    <!-- GOOGLE FONT -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
    <link href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ucovoiturage/css/custom2.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type='text/css' />
    <link href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ucovoiturage/css/footerstayl.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\"/>
 </head>   
     <body>
<!-- novabar /////////////////////////////////-->
<div id=\"container\">
 <nav id=\"custom-bootstrap-menu\" class=\"navbar navbar-default  \" role=\"navigation\" >
     <div class=\"container-fluid\">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class=\"navbar-header\">
      <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#bs-example-navbar-collapse-1\">
        <span class=\"sr-only\">Toggle navigation</span>
        <span class=\"icon-bar\"></span>
        <span class=\"icon-bar\"></span>
        <span class=\"icon-bar\"></span>
      </button>
        <a class=\"navbar-brand\" href=\"#\"> ULT Covoiturage</a>
      </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
      <ul class=\"nav navbar-nav\">
        <li class=\"active\"><a href=\"";
        // line 44
        echo $this->env->getExtension('routing')->getPath("covoiturage_homepage");
        echo "\">Acceuil <span class=\"sr-only\">(current)</span></a></li>
        <li><a href=\"";
        // line 45
        echo $this->env->getExtension('routing')->getPath("fos_user_profile_show");
        echo "\">Profil</a></li>
        <li><a href=\"";
        // line 46
        echo $this->env->getExtension('routing')->getPath("liste_annonce");
        echo "\">Mes annonces</a></li>
        <li><a href=\"";
        // line 47
        echo $this->env->getExtension('routing')->getPath("liste_covoiturages");
        echo "\">Vos covoiturages</a></li>
          <li><a href=\"#\"><span class=\"glyphicons glyphicon glyphicon-envelope\"></span> Message </a></li> 
        <li class=\"dropdown\">
          <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"menu\" aria-expanded=\"false\">Annonce<span class=\"caret\"></span></a>
          <ul class=\"dropdown-menu\" role=\"button\">  
            <li><a href=\"#\">Publication_Annonce</a></li>
            <li><a href=\"#\">Publication Opération</a></li>
            <li class=\"divider\"></li>
            <li><a href=\"#\">crée Annonce</a></li>
            <li class=\"divider\"></li>
            <li><a href=\"#\">crée Opération</a></li>
          </ul>
      </li>
      </ul>
        <ul class=\"nav navbar-nav navbar-right\">
             ";
        // line 62
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 63
            echo "                 <span style=\"color: white;\">Bonjour , ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
            echo " | </span>
                    <a href=\"";
            // line 64
            echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
            echo "\">
                        ";
            // line 65
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.logout", array(), "FOSUserBundle"), "html", null, true);
            echo "
                    </a>
                    &nbsp; <span class=\"glyphicon glyphicon-user \" style=\"color: white;\"></span>
             
                    
                ";
        }
        // line 71
        echo "          <li><a href=\"";
        echo $this->env->getExtension('routing')->getPath("fos_user_registration_register");
        echo "\">Inscription</a></li>
        </ul>
      </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
  </nav>
<!-- novabar END /////////////////////////////////==========================================-->
";
        // line 77
        $this->displayBlock('layout_fosuser_body', $context, $blocks);
        // line 79
        $this->displayBlock('template_annonce', $context, $blocks);
        // line 81
        $this->displayBlock('body', $context, $blocks);
        // line 83
        echo "        
    



<!-- FOOTER -->
  



     
 

<div class=\"navbar navbar-default navbar-fixed-bottom\" style=\"background-color: #BDF4C4;
    min-height: 10px;
    transition:min-height .4s;
    transition:background-color .50s;
    \">
    <p class=\"navbar-text pull-left\" style=\"color: #337AB7;\">ULT COVOITURAGE  groupe  &copy; 2014-2015 mentions légales</p>
    <div class=\"navbar-text pull-right\">
            <p class=\"pull-right\"><a href=\"#\">Back to top</a></p>
            <a herf=\"#\"><i class=\"fa fa-facebook-official fa-2x\"></i></a>
            <a herf=\"#\"><i class=\"fa fa fa-twitter-square fa-2x\"></i></a>
            <a herf=\"#\"><i class=\"fa fa-google-plus fa-2x\"></i></a>
         </div>
    <div class=\"row\">
    <div class=\"col-lg-push-10\">
     <img src=\"";
        // line 110
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ucovoiturage/images/bord.png"), "html", null, true);
        echo "\" width=\"40\" height=\"40\" />
    </div>
    </div>
</div>
</div>
    <script src=\"";
        // line 115
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ucovoiturage/plugins/jquery-1.10.2.js"), "html", null, true);
        echo "\"> </script>
    <!-- BOOTSTRAP SCRIPTS  -->
    <script src=\"http://ajax.googleapis.com/ajax/libs/jquery/2.1.0/jquery.min.js\"></script>
    <script src=\"";
        // line 118
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ucovoiturage/plugins/bootstrap.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 119
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ucovoiturage/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 120
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ucovoiturage/js/bootstrap-datetimepicker.js"), "html", null, true);
        echo "\" charset=\"UTF-8\"></script>
    <script src=\"";
        // line 121
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ucovoiturage/js/bootstrap-datetimepicker.fr.js"), "html", null, true);
        echo "\" charset=\"UTF-8\"></script>
    <script src=\"";
        // line 122
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ucovoiturage/js/custom.js"), "html", null, true);
        echo "\"> </script>
    <script src=\"";
        // line 123
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ucovoiturage/js/bootstrap-datepicker.js"), "html", null, true);
        echo "\"></script>

  
     <script type=\"text/javascript\">
         
    \$('.form_datetime').datetimepicker({
        //language:  'fr',
        weekStart: 1,
        todayBtn:  1,
\t\tautoclose: 1,
\t\ttodayHighlight: 1,
\t\tstartView: 2,
\t\tforceParse: 0,
        showMeridian: 1
    });
\t\$('.form_date').datetimepicker({
        language:  'fr',
        weekStart: 1,
        todayBtn:  1,
\t\tautoclose: 1,
\t\ttodayHighlight: 1,
\t\tstartView: 2,
\t\tminView: 2,
\t\tforceParse: 0
    });
\t\$('.form_time').datetimepicker({
        language:  'fr',
        weekStart: 1,
        todayBtn:  1,
\t\tautoclose: 1,
\t\ttodayHighlight: 1,
\t\tstartView: 1,
\t\tminView: 0,
\t\tmaxView: 1,
\t\tforceParse: 0
    });
</script>
    ";
        // line 160
        $this->displayBlock('javascripts', $context, $blocks);
        // line 161
        echo "    
    </body>
    
</html>
";
    }

    // line 77
    public function block_layout_fosuser_body($context, array $blocks = array())
    {
        echo "    
";
    }

    // line 79
    public function block_template_annonce($context, array $blocks = array())
    {
        echo "    
";
    }

    // line 81
    public function block_body($context, array $blocks = array())
    {
    }

    // line 160
    public function block_javascripts($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  284 => 160,  279 => 81,  272 => 79,  265 => 77,  257 => 161,  255 => 160,  215 => 123,  211 => 122,  207 => 121,  203 => 120,  199 => 119,  195 => 118,  189 => 115,  181 => 110,  152 => 83,  150 => 81,  148 => 79,  146 => 77,  136 => 71,  127 => 65,  123 => 64,  118 => 63,  116 => 62,  98 => 47,  94 => 46,  90 => 45,  86 => 44,  62 => 23,  58 => 22,  50 => 17,  45 => 15,  40 => 13,  36 => 12,  23 => 1,);
    }
}
