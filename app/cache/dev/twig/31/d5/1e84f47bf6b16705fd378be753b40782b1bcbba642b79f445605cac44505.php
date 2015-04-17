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
    <link href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ucovoiturage/css/style.css"), "html", null, true);
        echo "\" />    
    <!-- GOOGLE FONT -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
    <link href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/custom2.css"), "html", null, true);
        echo "\"  rel=\"stylesheet\"/>
 </head>   
     <body>
<!-- novabar /////////////////////////////////-->
 <nav id=\"custom-bootstrap-menu\" class=\"navbar navbar-default\" role=\"navigation\" >
     <div class=\"container-fluid\" >
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
        <li class=\"active\"><a href=\"#\">Acceuil <span class=\"sr-only\">(current)</span></a></li>
        <li><a href=\"";
        // line 45
        echo $this->env->getExtension('routing')->getPath("fos_user_profile_show");
        echo "\">Profil</a></li>
        <li class=\"dropdown\">
          <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-expanded=\"false\">Annonce<span class=\"caret\"></span></a>
          <ul class=\"dropdown-menu\" role=\"menu\">
            <li><a href=\"#\">Publication_Annonce</a></li>
            <li><a href=\"#\">Publication Opération</a></li>
            <li class=\"divider\"></li>
            <li><a href=\"#\">crée Annonce</a></li>
            <li class=\"divider\"></li>
            <li><a href=\"#\">crée Opération</a></li>
          </ul>
        <li><a href=\"";
        // line 56
        echo $this->env->getExtension('routing')->getPath("liste_covoiturages");
        echo "\">Vos covoiturages</a></li>
          <li><a href=\"#\"><span class=\"glyphicons glyphicon glyphicon-envelope\"></span> Message </a></li> 
        </li>
      </ul>
      <form class=\"navbar-form navbar-right\" role=\"search\">
        <div class=\"form-group\">
          <input type=\"text\" class=\"form-control\" placeholder=\"Search\">
        </div>
        <button type=\"submit\" class=\"btn btn-default\">Submit</button>
        </form>
        <ul class=\"nav navbar-nav navbar-right\">
          <li><a href=\"#\">Sing out</a></li>
        </ul>
      </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
  </nav>
<!-- novabar END /////////////////////////////////==========================================-->
";
        // line 73
        $this->displayBlock('layout_fosuser_body', $context, $blocks);
        // line 75
        $this->displayBlock('template_annonce', $context, $blocks);
        // line 77
        $this->displayBlock('body', $context, $blocks);
        // line 79
        echo "        
    

<!-- FOOTER -->
  

<br>
   <footer>
     <div class=\"bottom\" role=\"navigation\"> 
      <div class=\"container2\">
        <!--pull left -->

          <div class=\"navbar-text pull-left\"> 
            <p>&copy; 2014 ULT Company, Inc. &middot; <a href=\"#\">Privacy</a> &middot; <a href=\"#\">Terms</a></p>
          </div>


          <!--pull right  -->
         <div class=\"col-md-4\">
          <div class=\"navbar-text pull-right\">
            <p class=\"pull-right\"><a href=\"#\">Back to top</a></p>
            <a herf=\"#\"><i class=\"fa fa-facebook-official fa-2x\"></i></a>
            <a herf=\"#\"><i class=\"fa fa fa-twitter-square fa-2x\"></i></a>
            <a herf=\"#\"><i class=\"fa fa-google-plus fa-2x\"></i></a>
         </div>
         
            <h3><span class=\"glyphicon glyphicon-heart\"></span> Footer section 1</h3>
            <p>Content for the first footer section.</p>
        </div>
        <div class=\"col-md-4\">
            <h3><span class=\"glyphicon glyphicon-star\"></span> Footer section 2</h3>
            <p>Content for the second footer section.</p>
        </div>
        <div class=\"col-md-4\">
            <h3><span class=\"glyphicon glyphicon-music\"></span> Footer section 3</h3>
        </div>


      </div>
    </div> 
   </footer>  



     <script src=\"";
        // line 123
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ucovoiturage/plugins/jquery-1.10.2.js"), "html", null, true);
        echo "\"> </script>
    <!-- BOOTSTRAP SCRIPTS  -->
    <script src=\"";
        // line 125
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ucovoiturage/plugins/bootstrap.js"), "html", null, true);
        echo "\"> </script>
    <script src=\"";
        // line 126
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ucovoiturage/js/bootstrap.min.js"), "html", null, true);
        echo "\"> </script>
    <script src=\"";
        // line 127
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ucovoiturage/js/bootstrap-datetimepicker.js"), "html", null, true);
        echo "\" charset=\"UTF-8\"></script>
    <script src=\"";
        // line 128
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ucovoiturage/js/bootstrap-datetimepicker.fr.js"), "html", null, true);
        echo "\" charset=\"UTF-8\"></script>
    <script src=\"";
        // line 129
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ucovoiturage/js/custom.js"), "html", null, true);
        echo "\"> </script>
    <script src=\"";
        // line 130
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
        // line 166
        $this->displayBlock('javascripts', $context, $blocks);
        // line 167
        echo "    </body>
    
</html>
";
    }

    // line 73
    public function block_layout_fosuser_body($context, array $blocks = array())
    {
        echo "    
";
    }

    // line 75
    public function block_template_annonce($context, array $blocks = array())
    {
        echo "    
";
    }

    // line 77
    public function block_body($context, array $blocks = array())
    {
    }

    // line 166
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
        return array (  265 => 166,  260 => 77,  253 => 75,  246 => 73,  239 => 167,  237 => 166,  198 => 130,  194 => 129,  190 => 128,  186 => 127,  182 => 126,  178 => 125,  173 => 123,  127 => 79,  125 => 77,  123 => 75,  121 => 73,  101 => 56,  87 => 45,  61 => 22,  55 => 19,  50 => 17,  45 => 15,  40 => 13,  36 => 12,  23 => 1,);
    }
}
