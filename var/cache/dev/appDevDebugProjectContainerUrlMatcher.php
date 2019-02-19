<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevDebugProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($rawPathinfo)
    {
        $allow = [];
        $pathinfo = rawurldecode($rawPathinfo);
        $trimmedPathinfo = rtrim($pathinfo, '/');
        $context = $this->context;
        $request = $this->request ?: $this->createRequest($pathinfo);
        $requestMethod = $canonicalMethod = $context->getMethod();

        if ('HEAD' === $requestMethod) {
            $canonicalMethod = 'GET';
        }

        // _assetic_8025d47
        if ('/back/css/compiled/app.css' === $pathinfo) {
            return array (  '_controller' => 'assetic.controller:render',  'name' => '8025d47',  'pos' => NULL,  '_format' => 'css',  '_route' => '_assetic_8025d47',);
        }

        if (0 === strpos($pathinfo, '/back/css/compiled/app_')) {
            if (0 === strpos($pathinfo, '/back/css/compiled/app_font')) {
                // _assetic_8025d47_0
                if ('/back/css/compiled/app_font-face_1.css' === $pathinfo) {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '8025d47',  'pos' => 0,  '_format' => 'css',  '_route' => '_assetic_8025d47_0',);
                }

                // _assetic_8025d47_1
                if ('/back/css/compiled/app_font-awesome.min_2.css' === $pathinfo) {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '8025d47',  'pos' => 1,  '_format' => 'css',  '_route' => '_assetic_8025d47_1',);
                }

                // _assetic_8025d47_2
                if ('/back/css/compiled/app_fontawesome-all.min_3.css' === $pathinfo) {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '8025d47',  'pos' => 2,  '_format' => 'css',  '_route' => '_assetic_8025d47_2',);
                }

            }

            // _assetic_8025d47_3
            if ('/back/css/compiled/app_material-design-iconic-font.min_4.css' === $pathinfo) {
                return array (  '_controller' => 'assetic.controller:render',  'name' => '8025d47',  'pos' => 3,  '_format' => 'css',  '_route' => '_assetic_8025d47_3',);
            }

            // _assetic_8025d47_4
            if ('/back/css/compiled/app_bootstrap.min_5.css' === $pathinfo) {
                return array (  '_controller' => 'assetic.controller:render',  'name' => '8025d47',  'pos' => 4,  '_format' => 'css',  '_route' => '_assetic_8025d47_4',);
            }

            // _assetic_8025d47_6
            if ('/back/css/compiled/app_bootstrap-progressbar-3.3.4.min_7.css' === $pathinfo) {
                return array (  '_controller' => 'assetic.controller:render',  'name' => '8025d47',  'pos' => 6,  '_format' => 'css',  '_route' => '_assetic_8025d47_6',);
            }

            // _assetic_8025d47_5
            if ('/back/css/compiled/app_animsition.min_6.css' === $pathinfo) {
                return array (  '_controller' => 'assetic.controller:render',  'name' => '8025d47',  'pos' => 5,  '_format' => 'css',  '_route' => '_assetic_8025d47_5',);
            }

            // _assetic_8025d47_7
            if ('/back/css/compiled/app_animate_8.css' === $pathinfo) {
                return array (  '_controller' => 'assetic.controller:render',  'name' => '8025d47',  'pos' => 7,  '_format' => 'css',  '_route' => '_assetic_8025d47_7',);
            }

            // _assetic_8025d47_8
            if ('/back/css/compiled/app_hamburgers.min_9.css' === $pathinfo) {
                return array (  '_controller' => 'assetic.controller:render',  'name' => '8025d47',  'pos' => 8,  '_format' => 'css',  '_route' => '_assetic_8025d47_8',);
            }

            // _assetic_8025d47_9
            if ('/back/css/compiled/app_slick_10.css' === $pathinfo) {
                return array (  '_controller' => 'assetic.controller:render',  'name' => '8025d47',  'pos' => 9,  '_format' => 'css',  '_route' => '_assetic_8025d47_9',);
            }

            // _assetic_8025d47_10
            if ('/back/css/compiled/app_select2.min_11.css' === $pathinfo) {
                return array (  '_controller' => 'assetic.controller:render',  'name' => '8025d47',  'pos' => 10,  '_format' => 'css',  '_route' => '_assetic_8025d47_10',);
            }

            // _assetic_8025d47_11
            if ('/back/css/compiled/app_perfect-scrollbar_12.css' === $pathinfo) {
                return array (  '_controller' => 'assetic.controller:render',  'name' => '8025d47',  'pos' => 11,  '_format' => 'css',  '_route' => '_assetic_8025d47_11',);
            }

            // _assetic_8025d47_12
            if ('/back/css/compiled/app_theme_13.css' === $pathinfo) {
                return array (  '_controller' => 'assetic.controller:render',  'name' => '8025d47',  'pos' => 12,  '_format' => 'css',  '_route' => '_assetic_8025d47_12',);
            }

        }

        // _assetic_a4e0f74
        if ('/css/compiled/app.css' === $pathinfo) {
            return array (  '_controller' => 'assetic.controller:render',  'name' => 'a4e0f74',  'pos' => NULL,  '_format' => 'css',  '_route' => '_assetic_a4e0f74',);
        }

        if (0 === strpos($pathinfo, '/css/compiled/app_')) {
            // _assetic_a4e0f74_0
            if ('/css/compiled/app_bootstrap_1.css' === $pathinfo) {
                return array (  '_controller' => 'assetic.controller:render',  'name' => 'a4e0f74',  'pos' => 0,  '_format' => 'css',  '_route' => '_assetic_a4e0f74_0',);
            }

            // _assetic_a4e0f74_1
            if ('/css/compiled/app_style_2.css' === $pathinfo) {
                return array (  '_controller' => 'assetic.controller:render',  'name' => 'a4e0f74',  'pos' => 1,  '_format' => 'css',  '_route' => '_assetic_a4e0f74_1',);
            }

            // _assetic_a4e0f74_2
            if ('/css/compiled/app_font-awesome.min_3.css' === $pathinfo) {
                return array (  '_controller' => 'assetic.controller:render',  'name' => 'a4e0f74',  'pos' => 2,  '_format' => 'css',  '_route' => '_assetic_a4e0f74_2',);
            }

            // _assetic_a4e0f74_3
            if ('/css/compiled/app_css?family=Aleo:300,300i,400,400i,700,700i&amp;subset=latin-ext_4.css' === $pathinfo) {
                return array (  '_controller' => 'assetic.controller:render',  'name' => 'a4e0f74',  'pos' => 3,  '_format' => 'css',  '_route' => '_assetic_a4e0f74_3',);
            }

            // _assetic_a4e0f74_4
            if ('/css/compiled/app_css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese_5.css' === $pathinfo) {
                return array (  '_controller' => 'assetic.controller:render',  'name' => 'a4e0f74',  'pos' => 4,  '_format' => 'css',  '_route' => '_assetic_a4e0f74_4',);
            }

        }

        elseif (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => '_wdt']), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if ('/_profiler' === $trimmedPathinfo) {
                    $ret = array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                    if ('/' === substr($pathinfo, -1)) {
                        // no-op
                    } elseif ('GET' !== $canonicalMethod) {
                        goto not__profiler_home;
                    } else {
                        return array_replace($ret, $this->redirect($rawPathinfo.'/', '_profiler_home'));
                    }

                    return $ret;
                }
                not__profiler_home:

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ('/_profiler/search' === $pathinfo) {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ('/_profiler/search_bar' === $pathinfo) {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_phpinfo
                if ('/_profiler/phpinfo' === $pathinfo) {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => '_profiler_search_results']), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler_open_file
                if ('/_profiler/open' === $pathinfo) {
                    return array (  '_controller' => 'web_profiler.controller.profiler:openAction',  '_route' => '_profiler_open_file',);
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => '_profiler']), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => '_profiler_router']), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => '_profiler_exception']), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => '_profiler_exception_css']), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
                }

            }

            // _twig_error_test
            if (0 === strpos($pathinfo, '/_error') && preg_match('#^/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => '_twig_error_test']), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',));
            }

        }

        // user_homepage
        if ('' === $trimmedPathinfo) {
            $ret = array (  '_controller' => 'UserBundle\\Controller\\DefaultController::indexAction',  '_route' => 'user_homepage',);
            if ('/' === substr($pathinfo, -1)) {
                // no-op
            } elseif ('GET' !== $canonicalMethod) {
                goto not_user_homepage;
            } else {
                return array_replace($ret, $this->redirect($rawPathinfo.'/', 'user_homepage'));
            }

            return $ret;
        }
        not_user_homepage:

        // homepage
        if ('' === $trimmedPathinfo) {
            $ret = array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
            if ('/' === substr($pathinfo, -1)) {
                // no-op
            } elseif ('GET' !== $canonicalMethod) {
                goto not_homepage;
            } else {
                return array_replace($ret, $this->redirect($rawPathinfo.'/', 'homepage'));
            }

            return $ret;
        }
        not_homepage:

        if (0 === strpos($pathinfo, '/login')) {
            // fos_user_security_login
            if ('/login' === $pathinfo) {
                $ret = array (  '_controller' => 'fos_user.security.controller:loginAction',  '_route' => 'fos_user_security_login',);
                if (!in_array($canonicalMethod, ['GET', 'POST'])) {
                    $allow = array_merge($allow, ['GET', 'POST']);
                    goto not_fos_user_security_login;
                }

                return $ret;
            }
            not_fos_user_security_login:

            // fos_user_security_check
            if ('/login_check' === $pathinfo) {
                $ret = array (  '_controller' => 'fos_user.security.controller:checkAction',  '_route' => 'fos_user_security_check',);
                if (!in_array($requestMethod, ['POST'])) {
                    $allow = array_merge($allow, ['POST']);
                    goto not_fos_user_security_check;
                }

                return $ret;
            }
            not_fos_user_security_check:

        }

        // fos_user_security_logout
        if ('/logout' === $pathinfo) {
            $ret = array (  '_controller' => 'fos_user.security.controller:logoutAction',  '_route' => 'fos_user_security_logout',);
            if (!in_array($canonicalMethod, ['GET', 'POST'])) {
                $allow = array_merge($allow, ['GET', 'POST']);
                goto not_fos_user_security_logout;
            }

            return $ret;
        }
        not_fos_user_security_logout:

        if (0 === strpos($pathinfo, '/profile')) {
            // fos_user_profile_show
            if ('/profile' === $trimmedPathinfo) {
                $ret = array (  '_controller' => 'fos_user.profile.controller:showAction',  '_route' => 'fos_user_profile_show',);
                if ('/' === substr($pathinfo, -1)) {
                    // no-op
                } elseif ('GET' !== $canonicalMethod) {
                    goto not_fos_user_profile_show;
                } else {
                    return array_replace($ret, $this->redirect($rawPathinfo.'/', 'fos_user_profile_show'));
                }

                if (!in_array($canonicalMethod, ['GET'])) {
                    $allow = array_merge($allow, ['GET']);
                    goto not_fos_user_profile_show;
                }

                return $ret;
            }
            not_fos_user_profile_show:

            // fos_user_profile_edit
            if ('/profile/edit' === $pathinfo) {
                $ret = array (  '_controller' => 'fos_user.profile.controller:editAction',  '_route' => 'fos_user_profile_edit',);
                if (!in_array($canonicalMethod, ['GET', 'POST'])) {
                    $allow = array_merge($allow, ['GET', 'POST']);
                    goto not_fos_user_profile_edit;
                }

                return $ret;
            }
            not_fos_user_profile_edit:

            // fos_user_change_password
            if ('/profile/change-password' === $pathinfo) {
                $ret = array (  '_controller' => 'fos_user.change_password.controller:changePasswordAction',  '_route' => 'fos_user_change_password',);
                if (!in_array($canonicalMethod, ['GET', 'POST'])) {
                    $allow = array_merge($allow, ['GET', 'POST']);
                    goto not_fos_user_change_password;
                }

                return $ret;
            }
            not_fos_user_change_password:

        }

        elseif (0 === strpos($pathinfo, '/register')) {
            // fos_user_registration_register
            if ('/register' === $trimmedPathinfo) {
                $ret = array (  '_controller' => 'fos_user.registration.controller:registerAction',  '_route' => 'fos_user_registration_register',);
                if ('/' === substr($pathinfo, -1)) {
                    // no-op
                } elseif ('GET' !== $canonicalMethod) {
                    goto not_fos_user_registration_register;
                } else {
                    return array_replace($ret, $this->redirect($rawPathinfo.'/', 'fos_user_registration_register'));
                }

                if (!in_array($canonicalMethod, ['GET', 'POST'])) {
                    $allow = array_merge($allow, ['GET', 'POST']);
                    goto not_fos_user_registration_register;
                }

                return $ret;
            }
            not_fos_user_registration_register:

            // fos_user_registration_check_email
            if ('/register/check-email' === $pathinfo) {
                $ret = array (  '_controller' => 'fos_user.registration.controller:checkEmailAction',  '_route' => 'fos_user_registration_check_email',);
                if (!in_array($canonicalMethod, ['GET'])) {
                    $allow = array_merge($allow, ['GET']);
                    goto not_fos_user_registration_check_email;
                }

                return $ret;
            }
            not_fos_user_registration_check_email:

            if (0 === strpos($pathinfo, '/register/confirm')) {
                // fos_user_registration_confirm
                if (preg_match('#^/register/confirm/(?P<token>[^/]++)$#sD', $pathinfo, $matches)) {
                    $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'fos_user_registration_confirm']), array (  '_controller' => 'fos_user.registration.controller:confirmAction',));
                    if (!in_array($canonicalMethod, ['GET'])) {
                        $allow = array_merge($allow, ['GET']);
                        goto not_fos_user_registration_confirm;
                    }

                    return $ret;
                }
                not_fos_user_registration_confirm:

                // fos_user_registration_confirmed
                if ('/register/confirmed' === $pathinfo) {
                    $ret = array (  '_controller' => 'fos_user.registration.controller:confirmedAction',  '_route' => 'fos_user_registration_confirmed',);
                    if (!in_array($canonicalMethod, ['GET'])) {
                        $allow = array_merge($allow, ['GET']);
                        goto not_fos_user_registration_confirmed;
                    }

                    return $ret;
                }
                not_fos_user_registration_confirmed:

            }

        }

        elseif (0 === strpos($pathinfo, '/resetting')) {
            // fos_user_resetting_request
            if ('/resetting/request' === $pathinfo) {
                $ret = array (  '_controller' => 'fos_user.resetting.controller:requestAction',  '_route' => 'fos_user_resetting_request',);
                if (!in_array($canonicalMethod, ['GET'])) {
                    $allow = array_merge($allow, ['GET']);
                    goto not_fos_user_resetting_request;
                }

                return $ret;
            }
            not_fos_user_resetting_request:

            // fos_user_resetting_reset
            if (0 === strpos($pathinfo, '/resetting/reset') && preg_match('#^/resetting/reset/(?P<token>[^/]++)$#sD', $pathinfo, $matches)) {
                $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'fos_user_resetting_reset']), array (  '_controller' => 'fos_user.resetting.controller:resetAction',));
                if (!in_array($canonicalMethod, ['GET', 'POST'])) {
                    $allow = array_merge($allow, ['GET', 'POST']);
                    goto not_fos_user_resetting_reset;
                }

                return $ret;
            }
            not_fos_user_resetting_reset:

            // fos_user_resetting_send_email
            if ('/resetting/send-email' === $pathinfo) {
                $ret = array (  '_controller' => 'fos_user.resetting.controller:sendEmailAction',  '_route' => 'fos_user_resetting_send_email',);
                if (!in_array($requestMethod, ['POST'])) {
                    $allow = array_merge($allow, ['POST']);
                    goto not_fos_user_resetting_send_email;
                }

                return $ret;
            }
            not_fos_user_resetting_send_email:

            // fos_user_resetting_check_email
            if ('/resetting/check-email' === $pathinfo) {
                $ret = array (  '_controller' => 'fos_user.resetting.controller:checkEmailAction',  '_route' => 'fos_user_resetting_check_email',);
                if (!in_array($canonicalMethod, ['GET'])) {
                    $allow = array_merge($allow, ['GET']);
                    goto not_fos_user_resetting_check_email;
                }

                return $ret;
            }
            not_fos_user_resetting_check_email:

        }

        if ('/' === $pathinfo && !$allow) {
            throw new Symfony\Component\Routing\Exception\NoConfigurationException();
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
