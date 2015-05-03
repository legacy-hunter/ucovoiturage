<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $context = $this->context;
        $request = $this->request;

        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if (rtrim($pathinfo, '/') === '/_profiler') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_profiler_home');
                    }

                    return array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                }

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ($pathinfo === '/_profiler/search') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ($pathinfo === '/_profiler/search_bar') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_purge
                if ($pathinfo === '/_profiler/purge') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:purgeAction',  '_route' => '_profiler_purge',);
                }

                // _profiler_info
                if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_info')), array (  '_controller' => 'web_profiler.controller.profiler:infoAction',));
                }

                // _profiler_phpinfo
                if ($pathinfo === '/_profiler/phpinfo') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler')), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_router')), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception')), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception_css')), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
                }

            }

            if (0 === strpos($pathinfo, '/_configurator')) {
                // _configurator_home
                if (rtrim($pathinfo, '/') === '/_configurator') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_configurator_home');
                    }

                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::checkAction',  '_route' => '_configurator_home',);
                }

                // _configurator_step
                if (0 === strpos($pathinfo, '/_configurator/step') && preg_match('#^/_configurator/step/(?P<index>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_configurator_step')), array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::stepAction',));
                }

                // _configurator_final
                if ($pathinfo === '/_configurator/final') {
                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::finalAction',  '_route' => '_configurator_final',);
                }

            }

        }

        // matricule
        if (0 === strpos($pathinfo, '/matricule') && preg_match('#^/matricule/(?P<mat>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'matricule')), array (  '_controller' => 'Utilisateurs\\UtilisateursBundle\\Controller\\DefaultController::matriculeExistAction',));
        }

        if (0 === strpos($pathinfo, '/log')) {
            if (0 === strpos($pathinfo, '/login')) {
                // fos_user_security_login
                if ($pathinfo === '/login') {
                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::loginAction',  '_route' => 'fos_user_security_login',);
                }

                // fos_user_security_check
                if ($pathinfo === '/login_check') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_fos_user_security_check;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::checkAction',  '_route' => 'fos_user_security_check',);
                }
                not_fos_user_security_check:

            }

            // fos_user_security_logout
            if ($pathinfo === '/logout') {
                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::logoutAction',  '_route' => 'fos_user_security_logout',);
            }

        }

        if (0 === strpos($pathinfo, '/re')) {
            if (0 === strpos($pathinfo, '/register')) {
                // fos_user_registration_register
                if (rtrim($pathinfo, '/') === '/register') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'fos_user_registration_register');
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::registerAction',  '_route' => 'fos_user_registration_register',);
                }

                if (0 === strpos($pathinfo, '/register/c')) {
                    // fos_user_registration_check_email
                    if ($pathinfo === '/register/check-email') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_fos_user_registration_check_email;
                        }

                        return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::checkEmailAction',  '_route' => 'fos_user_registration_check_email',);
                    }
                    not_fos_user_registration_check_email:

                    if (0 === strpos($pathinfo, '/register/confirm')) {
                        // fos_user_registration_confirm
                        if (preg_match('#^/register/confirm/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_fos_user_registration_confirm;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_registration_confirm')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmAction',));
                        }
                        not_fos_user_registration_confirm:

                        // fos_user_registration_confirmed
                        if ($pathinfo === '/register/confirmed') {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_fos_user_registration_confirmed;
                            }

                            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmedAction',  '_route' => 'fos_user_registration_confirmed',);
                        }
                        not_fos_user_registration_confirmed:

                    }

                }

            }

            if (0 === strpos($pathinfo, '/resetting')) {
                // fos_user_resetting_request
                if ($pathinfo === '/resetting/request') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_fos_user_resetting_request;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::requestAction',  '_route' => 'fos_user_resetting_request',);
                }
                not_fos_user_resetting_request:

                // fos_user_resetting_send_email
                if ($pathinfo === '/resetting/send-email') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_fos_user_resetting_send_email;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::sendEmailAction',  '_route' => 'fos_user_resetting_send_email',);
                }
                not_fos_user_resetting_send_email:

                // fos_user_resetting_check_email
                if ($pathinfo === '/resetting/check-email') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_fos_user_resetting_check_email;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::checkEmailAction',  '_route' => 'fos_user_resetting_check_email',);
                }
                not_fos_user_resetting_check_email:

                // fos_user_resetting_reset
                if (0 === strpos($pathinfo, '/resetting/reset') && preg_match('#^/resetting/reset/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_fos_user_resetting_reset;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_resetting_reset')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::resetAction',));
                }
                not_fos_user_resetting_reset:

            }

        }

        if (0 === strpos($pathinfo, '/profile')) {
            // fos_user_change_password
            if ($pathinfo === '/profile/change-password') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_fos_user_change_password;
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ChangePasswordController::changePasswordAction',  '_route' => 'fos_user_change_password',);
            }
            not_fos_user_change_password:

            // fos_user_profile_show
            if (rtrim($pathinfo, '/') === '/profile') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_user_profile_show;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'fos_user_profile_show');
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::showAction',  '_route' => 'fos_user_profile_show',);
            }
            not_fos_user_profile_show:

            // fos_user_profile_edit
            if ($pathinfo === '/profile/edit') {
                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::editAction',  '_route' => 'fos_user_profile_edit',);
            }

        }

        if (0 === strpos($pathinfo, '/gestion_')) {
            if (0 === strpos($pathinfo, '/gestion_etape')) {
                // gestion_etape
                if (rtrim($pathinfo, '/') === '/gestion_etape') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'gestion_etape');
                    }

                    return array (  '_controller' => 'covoiturage\\covoiturageBundle\\Controller\\etapeController::indexAction',  '_route' => 'gestion_etape',);
                }

                // gestion_etape_show
                if (preg_match('#^/gestion_etape/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'gestion_etape_show')), array (  '_controller' => 'covoiturage\\covoiturageBundle\\Controller\\etapeController::showAction',));
                }

                // gestion_etape_new
                if (0 === strpos($pathinfo, '/gestion_etape/new') && preg_match('#^/gestion_etape/new/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'gestion_etape_new')), array (  '_controller' => 'covoiturage\\covoiturageBundle\\Controller\\etapeController::newAction',));
                }

                // gestion_etape_create
                if ($pathinfo === '/gestion_etape/create') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_gestion_etape_create;
                    }

                    return array (  '_controller' => 'covoiturage\\covoiturageBundle\\Controller\\etapeController::createAction',  '_route' => 'gestion_etape_create',);
                }
                not_gestion_etape_create:

                // gestion_etape_edit
                if (preg_match('#^/gestion_etape/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'gestion_etape_edit')), array (  '_controller' => 'covoiturage\\covoiturageBundle\\Controller\\etapeController::editAction',));
                }

                // gestion_etape_update
                if (preg_match('#^/gestion_etape/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                        $allow = array_merge($allow, array('POST', 'PUT'));
                        goto not_gestion_etape_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'gestion_etape_update')), array (  '_controller' => 'covoiturage\\covoiturageBundle\\Controller\\etapeController::updateAction',));
                }
                not_gestion_etape_update:

                // gestion_etape_delete
                if (preg_match('#^/gestion_etape/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                        $allow = array_merge($allow, array('POST', 'DELETE'));
                        goto not_gestion_etape_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'gestion_etape_delete')), array (  '_controller' => 'covoiturage\\covoiturageBundle\\Controller\\etapeController::deleteAction',));
                }
                not_gestion_etape_delete:

            }

            if (0 === strpos($pathinfo, '/gestion_annonce')) {
                // gestion_annonce
                if (rtrim($pathinfo, '/') === '/gestion_annonce') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'gestion_annonce');
                    }

                    return array (  '_controller' => 'covoiturage\\covoiturageBundle\\Controller\\annonceController::indexAction',  '_route' => 'gestion_annonce',);
                }

                // gestion_annonce_show
                if (preg_match('#^/gestion_annonce/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'gestion_annonce_show')), array (  '_controller' => 'covoiturage\\covoiturageBundle\\Controller\\annonceController::showAction',));
                }

                // gestion_annonce_new
                if ($pathinfo === '/gestion_annonce/new') {
                    return array (  '_controller' => 'covoiturage\\covoiturageBundle\\Controller\\annonceController::newAction',  '_route' => 'gestion_annonce_new',);
                }

                // gestion_annonce_create
                if ($pathinfo === '/gestion_annonce/create') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_gestion_annonce_create;
                    }

                    return array (  '_controller' => 'covoiturage\\covoiturageBundle\\Controller\\annonceController::createAction',  '_route' => 'gestion_annonce_create',);
                }
                not_gestion_annonce_create:

                // gestion_annonce_edit
                if (preg_match('#^/gestion_annonce/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'gestion_annonce_edit')), array (  '_controller' => 'covoiturage\\covoiturageBundle\\Controller\\annonceController::editAction',));
                }

                // gestion_annonce_update
                if (preg_match('#^/gestion_annonce/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                        $allow = array_merge($allow, array('POST', 'PUT'));
                        goto not_gestion_annonce_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'gestion_annonce_update')), array (  '_controller' => 'covoiturage\\covoiturageBundle\\Controller\\annonceController::updateAction',));
                }
                not_gestion_annonce_update:

                // gestion_annonce_delete
                if (preg_match('#^/gestion_annonce/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                        $allow = array_merge($allow, array('POST', 'DELETE'));
                        goto not_gestion_annonce_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'gestion_annonce_delete')), array (  '_controller' => 'covoiturage\\covoiturageBundle\\Controller\\annonceController::deleteAction',));
                }
                not_gestion_annonce_delete:

            }

        }

        // covoiturage_homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'covoiturage_homepage');
            }

            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::loginAction',  '_route' => 'covoiturage_homepage',);
        }

        if (0 === strpos($pathinfo, '/test')) {
            // covoiturage_test
            if ($pathinfo === '/test') {
                return array (  '_controller' => 'covoiturage\\covoiturageBundle\\Controller\\DefaultController::indexAction',  '_route' => 'covoiturage_test',);
            }

            // covoiturage_fos
            if ($pathinfo === '/testttt') {
                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::editAction',  '_route' => 'covoiturage_fos',);
            }

        }

        // covoiturage_annonce
        if ($pathinfo === '/creerAnnonce') {
            return array (  '_controller' => 'covoiturage\\covoiturageBundle\\Controller\\AnnonceController::annonceFormulaireAction',  '_route' => 'covoiturage_annonce',);
        }

        // traiter_form_annonce
        if ($pathinfo === '/trait_annonce') {
            return array (  '_controller' => 'covoiturage\\covoiturageBundle\\Controller\\AnnonceController::traiter_annonceAction',  '_route' => 'traiter_form_annonce',);
        }

        // liste_annonce
        if ($pathinfo === '/liste_annonce') {
            return array (  '_controller' => 'covoiturage\\covoiturageBundle\\Controller\\AnnonceController::listeAnnonceAction',  '_route' => 'liste_annonce',);
        }

        // supprimer_annonce
        if (0 === strpos($pathinfo, '/del_annonce') && preg_match('#^/del_annonce/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'supprimer_annonce')), array (  '_controller' => 'covoiturage\\covoiturageBundle\\Controller\\AnnonceController::suppAnnonceAction',));
        }

        // form_etape
        if (0 === strpos($pathinfo, '/affich_etape') && preg_match('#^/affich_etape/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'form_etape')), array (  '_controller' => 'covoiturage\\covoiturageBundle\\Controller\\DefaultController::etapeAction',));
        }

        // traitement_etape
        if ($pathinfo === '/trait_etape') {
            return array (  '_controller' => 'covoiturage\\covoiturageBundle\\Controller\\DefaultController::traitEtapeAction',  '_route' => 'traitement_etape',);
        }

        // liste_covoiturages
        if ($pathinfo === '/liste_covoiturages') {
            return array (  '_controller' => 'covoiturage\\covoiturageBundle\\Controller\\AnnonceController::listeCovoituragesAction',  '_route' => 'liste_covoiturages',);
        }

        // modif_profil
        if ($pathinfo === '/modif_profil') {
            return array (  '_controller' => 'covoiturage\\covoiturageBundle\\Controller\\AnnonceController::modifierProfilAction',  '_route' => 'modif_profil',);
        }

        // valider_modif_profil
        if ($pathinfo === '/valider_modif_profil') {
            return array (  '_controller' => 'covoiturage\\covoiturageBundle\\Controller\\AnnonceController::valider_modif_profilAction',  '_route' => 'valider_modif_profil',);
        }

        // details_annonce
        if (0 === strpos($pathinfo, '/details_annonce') && preg_match('#^/details_annonce/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'details_annonce')), array (  '_controller' => 'covoiturage\\covoiturageBundle\\Controller\\AnnonceController::detailsAnnonceAction',));
        }

        // send_message
        if (0 === strpos($pathinfo, '/sending') && preg_match('#^/sending/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'send_message')), array (  '_controller' => 'covoiturage\\covoiturageBundle\\Controller\\AnnonceController::sendMessageAction',));
        }

        // envoi_res
        if (0 === strpos($pathinfo, '/envoi_res') && preg_match('#^/envoi_res/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'envoi_res')), array (  '_controller' => 'covoiturage\\covoiturageBundle\\Controller\\AnnonceController::envoi_resAction',));
        }

        if (0 === strpos($pathinfo, '/voir_reservations')) {
            // voir_res
            if ($pathinfo === '/voir_reservations') {
                return array (  '_controller' => 'covoiturage\\covoiturageBundle\\Controller\\AnnonceController::voir_resAction',  '_route' => 'voir_res',);
            }

            // voir_resRec
            if ($pathinfo === '/voir_reservationsRec') {
                return array (  '_controller' => 'covoiturage\\covoiturageBundle\\Controller\\AnnonceController::voir_resRecAction',  '_route' => 'voir_resRec',);
            }

            // voir_resEnv
            if ($pathinfo === '/voir_reservationsEnv') {
                return array (  '_controller' => 'covoiturage\\covoiturageBundle\\Controller\\AnnonceController::voir_resEnvAction',  '_route' => 'voir_resEnv',);
            }

        }

        // confirmer_res
        if (0 === strpos($pathinfo, '/confirmation') && preg_match('#^/confirmation/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'confirmer_res')), array (  '_controller' => 'covoiturage\\covoiturageBundle\\Controller\\AnnonceController::confirmer_resAction',));
        }

        // annuler_res
        if (0 === strpos($pathinfo, '/annulation') && preg_match('#^/annulation/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'annuler_res')), array (  '_controller' => 'covoiturage\\covoiturageBundle\\Controller\\AnnonceController::annuler_resAction',));
        }

        // recherche_covoiturage
        if ($pathinfo === '/recherche') {
            return array (  '_controller' => 'covoiturage\\covoiturageBundle\\Controller\\AnnonceController::recherche_annonceAction',  '_route' => 'recherche_covoiturage',);
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
