<?php

/* covoiturageBundle:Default:reservations.html.twig */
class __TwigTemplate_2abdb4606560f8929bceda70e9572139365a5da30638b5109614244b8bc1b90d extends Twig_Template
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
        <br>
        <div class=\"row\">

        </div>
        <div class=\"row\">
            <br> 

            ";
        // line 14
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "msg_res"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 15
            echo "                <div class=\"alert alert-success\">
                    ";
            // line 16
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        echo "            <div class=\"row\" >        
                <div class=\"panel panel-success\">
                    <div class=\"panel-heading\"><CENTER><h4>Liste de covoiturage Reçues</h4></CENTER></div>
                    <table class=\"table table-striped table-hover table-bordered table-condensed\" border==\"0\">   
                        <tbody>

                            ";
        // line 25
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["demandes_rec"]) ? $context["demandes_rec"] : $this->getContext($context, "demandes_rec")));
        foreach ($context['_seq'] as $context["_key"] => $context["demandes"]) {
            // line 26
            echo "
                                <tr>
                                    <td>
                                        <!--begine of table 1-->
                                        <table class=\"table table-striped table-hover table-condensed\">
                                            <tbody>
                                                <tr>
                                                    <td width=\"100px\" align=\"left\" rowspan=\"0\"><!---->
                                                        <div class=\"media\">
                                                            <img class=\"media-object\" src=\"";
            // line 35
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ucovoiturage/images/reservatiodown.png"), "html", null, true);
            echo "\"alt=\"Media Object\" style=\"width: 50px; height: 50px;\">
                                                        </div>    
                                                    </td>
                                                    <td><!--width=\"200px\" height=\"25\"-->

                                                    </td>
                                                    <td> <strong>Nom et prenom: </strong>&nbsp;";
            // line 41
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["demandes"], "utilisateurSend", array()), "nom", array()), "html", null, true);
            echo " &nbsp; ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["demandes"], "utilisateurSend", array()), "prenom", array()), "html", null, true);
            echo "</td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <strong>Date de l'opération: ";
            // line 45
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute($context["demandes"], "annonce", array()), "DateDepart", array()), "Y-m-d"), "html", null, true);
            echo "</strong>
                                                    </td>

                                                    <td>
                                                        <strong align=\"center\"> </strong>
                                                        <strong>message du sender : </strong> ";
            // line 50
            echo twig_escape_filter($this->env, $this->getAttribute($context["demandes"], "commentaire", array()), "html", null, true);
            echo "
                                                    </td>


                                                </tr>
                                            </tbody>  
                                        </table>    
                                    </td> 
                                    <!--end of table 1-->

                                    <!-- begine of table 2-->

                                    <td>
                                        <strong> Lieu de depart : </strong>&nbsp ";
            // line 63
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["demandes"], "annonce", array()), "lieuDepart", array()), "html", null, true);
            echo " <br><br>
                                        <strong> Lieu d'arrivé :</strong> &nbsp ";
            // line 64
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["demandes"], "annonce", array()), "lieuArrive", array()), "html", null, true);
            echo "
                                        <p class=\"gros2\"></p>

                                    </td>

                                    <td  align=\"center\">
                                        <span class=\"gros\">
                                            <a href='";
            // line 71
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("confirmer_res", array("id" => $this->getAttribute($context["demandes"], "id", array()))), "html", null, true);
            echo "'>confirmer</a> <br><a href='";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("annuler_res", array("id" => $this->getAttribute($context["demandes"], "id", array()))), "html", null, true);
            echo "'>annuler</a> <br>
                                        </span>
                                        </br>
                                        etat : ";
            // line 74
            echo twig_escape_filter($this->env, $this->getAttribute($context["demandes"], "etat", array()), "html", null, true);
            echo "
                                    </td>
                                </tr>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['demandes'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 78
        echo "                        </tbody>
                    </table>

                    <br><br>

                    <div class=\"panel panel-success\">
                        <div class=\"panel-heading\"><CENTER><h4>Liste de covoiturage Envoyées</h4></CENTER></div>
                        <table class=\"table table-striped table-hover table-bordered table-condensed\" border==\"0\">   
                            <tbody>

                                ";
        // line 88
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["demandes_env"]) ? $context["demandes_env"] : $this->getContext($context, "demandes_env")));
        foreach ($context['_seq'] as $context["_key"] => $context["demandes"]) {
            // line 89
            echo "
                                    <tr>
                                        <td>
                                            <!--begine of table 1-->
                                            <table class=\"table table-striped table-hover table-condensed\">
                                                <tbody>
                                                    <tr>
                                                        <td width=\"100px\" align=\"left\" rowspan=\"0\"><!---->
                                                            <div class=\"media\">
                  <img class=\"media-object\" src=\"";
            // line 98
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ucovoiturage/images/reservationup.png"), "html", null, true);
            echo "\"alt=\"Media Object\" style=\"width: 50px; height: 50px;\">
                                                            </div>    
                                                        </td>
                                                        <td><!--width=\"200px\" height=\"25\"-->

                                                        </td>
                                                        <td> <strong>Nom et prenom: </strong>&nbsp;";
            // line 104
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["demandes"], "utilisateurSend", array()), "nom", array()), "html", null, true);
            echo " &nbsp; ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["demandes"], "utilisateurSend", array()), "prenom", array()), "html", null, true);
            echo "</td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <strong>Date de l'opération: ";
            // line 108
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute($context["demandes"], "annonce", array()), "DateDepart", array()), "Y-m-d"), "html", null, true);
            echo "</strong>
                                                        </td>

                                                        <td>
                                                            <strong align=\"center\"> </strong>
                                                            <strong>message du sender : </strong>
                                                        </td>


                                                    </tr>
                                                </tbody>  
                                            </table>    
                                        </td> 
                                        <!--end of table 1-->

                                        <!-- begine of table 2-->

                                        <td>
                                            <strong> Lieu de depart : </strong>&nbsp ";
            // line 126
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["demandes"], "annonce", array()), "lieuDepart", array()), "html", null, true);
            echo " <br><br>
                                            <strong> Lieu d'arrivé :</strong> &nbsp ";
            // line 127
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["demandes"], "annonce", array()), "lieuArrive", array()), "html", null, true);
            echo "
                                            <p class=\"gros2\"></p>

                                        </td>

                                        <td  align=\"center\">
                                            <span class=\"gros\">
                                                 <br><a href='";
            // line 134
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("annuler_res", array("id" => $this->getAttribute($context["demandes"], "id", array()))), "html", null, true);
            echo "'>annuler</a> <br>
                                            </span>
                                            </br>
                                            etat : ";
            // line 137
            echo twig_escape_filter($this->env, $this->getAttribute($context["demandes"], "etat", array()), "html", null, true);
            echo "
                                        </td>
                                    </tr>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['demandes'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 141
        echo "                            </tbody>
                        </table>

                    </div>
                </div>
            </div>      
        </div>

    </div> 
</div>
<br>


</div>
";
    }

    public function getTemplateName()
    {
        return "covoiturageBundle:Default:reservations.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  258 => 141,  248 => 137,  242 => 134,  232 => 127,  228 => 126,  207 => 108,  198 => 104,  189 => 98,  178 => 89,  174 => 88,  162 => 78,  152 => 74,  144 => 71,  134 => 64,  130 => 63,  114 => 50,  106 => 45,  97 => 41,  88 => 35,  77 => 26,  73 => 25,  65 => 19,  56 => 16,  53 => 15,  49 => 14,  39 => 6,  36 => 5,  11 => 3,);
    }
}
