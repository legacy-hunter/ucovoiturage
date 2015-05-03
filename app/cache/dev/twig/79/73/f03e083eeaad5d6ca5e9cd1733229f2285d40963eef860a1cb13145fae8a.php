<?php

/* covoiturageBundle:Default:reservationsRec.html.twig */
class __TwigTemplate_7973f03e083eeaad5d6ca5e9cd1733229f2285d40963eef860a1cb13145fae8a extends Twig_Template
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

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "    <div class=\"container\">      
        <br>
        <div class=\"row\">

        </div>
        <div class=\"row\">
            <br> 

            ";
        // line 12
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "msg_resRec"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 13
            echo "                <div class=\"alert alert-success\">
                    ";
            // line 14
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        echo "            <div class=\"row\" >        
                <div class=\"panel panel-success\">
                    <div class=\"panel-heading\"><CENTER><h4>Liste de Réservations reçues</h4></CENTER></div>
                    <table class=\"table table-striped table-hover table-bordered table-condensed\" border=\"0\">   
                        <tbody>

                            ";
        // line 23
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["demandes_rec"]) ? $context["demandes_rec"] : $this->getContext($context, "demandes_rec")));
        foreach ($context['_seq'] as $context["_key"] => $context["demandes"]) {
            // line 24
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
            // line 33
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ucovoiturage/images/reservationup.png"), "html", null, true);
            echo "\"alt=\"Media Object\" style=\"width:30px;height: 30px;\">
                                                        </div>    
                                                    </td>
                                                    <td><!--width=\"200px\" height=\"25\"-->
                                              </td>
                                              <td> <span style=\"color: #3b629d;\"><strong >Envoyé par : </strong></span>&nbsp;<span style=\"color: #666;\">";
            // line 38
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["demandes"], "utilisateurSend", array()), "nom", array()), "html", null, true);
            echo " &nbsp; ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["demandes"], "utilisateurSend", array()), "prenom", array()), "html", null, true);
            echo "</span></td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <span style=\"color: #3b629d;\"><strong><span class=\"glyphicons glyphicon glyphicon-time\"></span> Date de l'opération: </strong> </span><span style=\"color: #666;\"> ";
            // line 42
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute($context["demandes"], "annonce", array()), "DateDepart", array()), "Y-m-d"), "html", null, true);
            echo "</span>
                                                    </td>

                                                    <td>
                                                        <strong align=\"center\"> </strong>
                                                        <span style=\"color: #3b629d;\"><strong>message du sender : </strong></span> <span style=\"color: #666;\">";
            // line 47
            echo twig_escape_filter($this->env, $this->getAttribute($context["demandes"], "commentaire", array()), "html", null, true);
            echo "</span>
                                                    </td>


                                                </tr>
                                            </tbody>  
                                        </table>    
                                    </td> 
                                    <!--end of table 1-->

                                    <!-- begine of table 2-->

                                    <td>
                                        <span style=\"color: #3b629d;\"><strong> Lieu de depart : </strong></span>&nbsp <span style=\"color: #666;\">";
            // line 60
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["demandes"], "annonce", array()), "lieuDepart", array()), "html", null, true);
            echo " </span><br><br>
                                        <span style=\"color: #3b629d;\"><strong> Lieu d'arrivé :</strong></span> &nbsp <span style=\"color: #666;\">";
            // line 61
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["demandes"], "annonce", array()), "lieuArrive", array()), "html", null, true);
            echo "</span>
                                        <p class=\"gros2\"></p>

                                    </td>

                                    <td  align=\"center\">
                                        <span class=\"gros\">
                                            <a href='";
            // line 68
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("confirmer_res", array("id" => $this->getAttribute($context["demandes"], "id", array()))), "html", null, true);
            echo "'> <span class=\"glyphicons glyphicon glyphicon-ok\">confirmer</span></a> <br><a href='";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("annuler_res", array("id" => $this->getAttribute($context["demandes"], "id", array()))), "html", null, true);
            echo "'><span class=\"glyphicons glyphicon glyphicon-remove\">annuler</span></a> <br>
                                        </span>
                                        </br>
                                        <span style=\"color: #666;\">etat : </span><span style=\"color: #ef792f;\">";
            // line 71
            echo twig_escape_filter($this->env, $this->getAttribute($context["demandes"], "etat", array()), "html", null, true);
            echo "</span>
                                    </td>
                                </tr>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['demandes'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 75
        echo "                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
                        
                ";
    }

    public function getTemplateName()
    {
        return "covoiturageBundle:Default:reservationsRec.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  161 => 75,  151 => 71,  143 => 68,  133 => 61,  129 => 60,  113 => 47,  105 => 42,  96 => 38,  88 => 33,  77 => 24,  73 => 23,  65 => 17,  56 => 14,  53 => 13,  49 => 12,  39 => 4,  36 => 3,  11 => 1,);
    }
}
