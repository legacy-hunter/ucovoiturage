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
        echo "    <div class=\"container\"> 
        <div class=\"panel panel-info\">

            <div class=\"panel-heading\">
                <CENTER><h4>Details de l'opération</h4></CENTER>
            </div>\t

            <table class = \"table table-striped table-hover table-bordered table-condensed\">
                <tr>\t
                    <th> </th>

                    <th> </th>


                </tr>

                <tr >
                    <td><p>Article publié par : </p></td>

                    <td><p>";
        // line 25
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "nom", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "prenom", array()), "html", null, true);
        echo "</p> </td>


                </tr>
                <tr>
                    <td> <p>Date de l'opération : </p></td>

                    <td><p>";
        // line 32
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["annonce"]) ? $context["annonce"] : $this->getContext($context, "annonce")), "dateDepart", array()), "Y-m-d"), "html", null, true);
        echo "</p></td>


                </tr>
                <tr>
                    <td><p>Prix de l'opération : </p></td>

                    <td><p> ";
        // line 39
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["annonce"]) ? $context["annonce"] : $this->getContext($context, "annonce")), "prix", array()), "html", null, true);
        echo "</p></td>
                </tr>
                ";
        // line 41
        if ($this->getAttribute((isset($context["annonce"]) ? $context["annonce"] : null), "precisions", array(), "any", true, true)) {
            // line 42
            echo "                <tr>
                    <td>Quelques précisons de l'auteur :</td>

                    <td><p>";
            // line 45
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["annonce"]) ? $context["annonce"] : $this->getContext($context, "annonce")), "precisions", array()), "html", null, true);
            echo "</p></td>

                </tr>
                ";
        }
        // line 49
        echo "                
                ";
        // line 50
        if (array_key_exists("etapes", $context)) {
            // line 51
            echo "                    ";
            $context["i"] = 0;
            // line 52
            echo "                    ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["etapes"]) ? $context["etapes"] : $this->getContext($context, "etapes")));
            foreach ($context['_seq'] as $context["_key"] => $context["etape"]) {
                // line 53
                echo "                        ";
                $context["i"] = ((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")) + 1);
                // line 54
                echo "                    <tr>
                        <td> etape ";
                // line 55
                echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), "html", null, true);
                echo " :</td>
                        <td>";
                // line 56
                echo twig_escape_filter($this->env, $this->getAttribute($context["etape"], "ville", array()), "html", null, true);
                echo "<td>
                    </tr>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['etape'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 59
            echo "                    ";
        }
        // line 60
        echo "            </table>   
        </div>
        <center>
            
                <div class=\"panel panel-primary\">

                    <div class=\"panel-heading\">
                        <CENTER><h4>Details de l'opération</h4></CENTER>
                    </div>  

                    <form action =\"";
        // line 70
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("envoi_res", array("id" => $this->getAttribute((isset($context["annonce"]) ? $context["annonce"] : $this->getContext($context, "annonce")), "id", array()))), "html", null, true);
        echo "\" method=\"POST\">


                        <table class = \"table table-striped table-hover table-bordered table-condensed\">
                            <tr>\t
                                <td><label for=\"comment\">Commentaire : </label></td>

                                <td><textarea id=\"comment\" name=\"comment\"></textarea><br> </td>
                            </tr>
                            <tr>    
                                <td> </td>
                                <td> <input type='submit' class=\"btn btn-primary .btn-lg\" value='Effectuer reservation'/> </td>
                            </tr> 

                        </table>        

                    </form>
                </div> 
                    
        </center> 


        <br>


        ";
        // line 95
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "success"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 96
            echo "            <div class=\"alert alert-success\">
                ";
            // line 97
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 100
        echo "    </div>
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
        return array (  192 => 100,  183 => 97,  180 => 96,  176 => 95,  148 => 70,  136 => 60,  133 => 59,  124 => 56,  120 => 55,  117 => 54,  114 => 53,  109 => 52,  106 => 51,  104 => 50,  101 => 49,  94 => 45,  89 => 42,  87 => 41,  82 => 39,  72 => 32,  60 => 25,  39 => 6,  36 => 5,  11 => 3,);
    }
}
