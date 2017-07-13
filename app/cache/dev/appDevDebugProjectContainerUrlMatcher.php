<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevDebugProjectContainerUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevDebugProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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

            // _twig_error_test
            if (0 === strpos($pathinfo, '/_error') && preg_match('#^/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_twig_error_test')), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',));
            }

        }

        // admin_admin_index
        if ($pathinfo === '/admin') {
            return array (  '_controller' => 'AdminBundle\\Controller\\AdminController::indexAction',  '_route' => 'admin_admin_index',);
        }

        if (0 === strpos($pathinfo, '/login')) {
            // admin_admin_login
            if ($pathinfo === '/login') {
                return array (  '_controller' => 'AdminBundle\\Controller\\AdminController::loginAction',  '_route' => 'admin_admin_login',);
            }

            // admin_admin_login_check
            if ($pathinfo === '/login_check') {
                return array (  '_controller' => 'AdminBundle\\Controller\\AdminController::login_checkAction',  '_route' => 'admin_admin_login_check',);
            }

        }

        // admin_admin_forgot_password
        if ($pathinfo === '/admin/forget_password') {
            return array (  '_controller' => 'AdminBundle\\Controller\\AdminController::forgot_passwordAction',  '_route' => 'admin_admin_forgot_password',);
        }

        // admin_admin_registration
        if ($pathinfo === '/registration') {
            return array (  '_controller' => 'AdminBundle\\Controller\\AdminController::registrationAction',  '_route' => 'admin_admin_registration',);
        }

        // admin_admin_logout
        if ($pathinfo === '/logout') {
            return array (  '_controller' => 'AdminBundle\\Controller\\AdminController::logoutAction',  '_route' => 'admin_admin_logout',);
        }

        // admin_admin_user
        if ($pathinfo === '/admin/user') {
            return array (  '_controller' => 'AdminBundle\\Controller\\AdminController::userAction',  '_route' => 'admin_admin_user',);
        }

        // admin_admin_edit
        if (0 === strpos($pathinfo, '/edit') && preg_match('#^/edit(?:/(?P<id>[^/]++))?$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_admin_edit')), array (  'id' => '',  '_controller' => 'AdminBundle\\Controller\\AdminController::editAction',));
        }

        if (0 === strpos($pathinfo, '/add')) {
            // admin_admin_addform
            if ($pathinfo === '/addform') {
                return array (  '_controller' => 'AdminBundle\\Controller\\AdminController::addformAction',  '_route' => 'admin_admin_addform',);
            }

            // admin_admin_add
            if ($pathinfo === '/add') {
                return array (  '_controller' => 'AdminBundle\\Controller\\AdminController::addAction',  '_route' => 'admin_admin_add',);
            }

        }

        // admin_admin_update
        if ($pathinfo === '/update') {
            return array (  '_controller' => 'AdminBundle\\Controller\\AdminController::updateAction',  '_route' => 'admin_admin_update',);
        }

        if (0 === strpos($pathinfo, '/ad')) {
            // admin_admin_emailtemplate
            if ($pathinfo === '/admin/template') {
                return array (  '_controller' => 'AdminBundle\\Controller\\AdminController::emailtemplateAction',  '_route' => 'admin_admin_emailtemplate',);
            }

            // admin_admin_addtemplateform
            if ($pathinfo === '/addtemplate') {
                return array (  '_controller' => 'AdminBundle\\Controller\\AdminController::addtemplateformAction',  '_route' => 'admin_admin_addtemplateform',);
            }

        }

        // admin_admin_addtemplate
        if ($pathinfo === '/inserttemplate') {
            return array (  '_controller' => 'AdminBundle\\Controller\\AdminController::addtemplateAction',  '_route' => 'admin_admin_addtemplate',);
        }

        // admin_admin_templatepreview
        if (0 === strpos($pathinfo, '/preview') && preg_match('#^/preview/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_admin_templatepreview')), array (  '_controller' => 'AdminBundle\\Controller\\AdminController::templatepreview',));
        }

        // admin_admin_edittemplate
        if (0 === strpos($pathinfo, '/edittemplate') && preg_match('#^/edittemplate(?:/(?P<id>[^/]++))?$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_admin_edittemplate')), array (  'id' => '',  '_controller' => 'AdminBundle\\Controller\\AdminController::edittemplate',));
        }

        // admin_admin_updatetemplate
        if ($pathinfo === '/updatetemplate') {
            return array (  '_controller' => 'AdminBundle\\Controller\\AdminController::updatetemplate',  '_route' => 'admin_admin_updatetemplate',);
        }

        // blog_show
        if (0 === strpos($pathinfo, '/deletetemplate') && preg_match('#^/deletetemplate(?:/(?P<id>[^/]++))?$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'blog_show')), array (  'id' => '',  '_controller' => 'AdminBundle\\Controller\\AdminController::deletetemplateAction',));
        }

        if (0 === strpos($pathinfo, '/co')) {
            // admin_admin_config
            if ($pathinfo === '/config') {
                return array (  '_controller' => 'AdminBundle\\Controller\\AdminController::configAction',  '_route' => 'admin_admin_config',);
            }

            // admin_admin_country
            if ($pathinfo === '/country') {
                return array (  '_controller' => 'AdminBundle\\Controller\\AdminController::countryAction',  '_route' => 'admin_admin_country',);
            }

        }

        // admin_admin_addcontry
        if ($pathinfo === '/addcountry') {
            return array (  '_controller' => 'AdminBundle\\Controller\\AdminController::addcontryAction',  '_route' => 'admin_admin_addcontry',);
        }

        // admin_admin_state
        if ($pathinfo === '/state') {
            return array (  '_controller' => 'AdminBundle\\Controller\\AdminController::stateAction',  '_route' => 'admin_admin_state',);
        }

        // admin_admin_addstate
        if ($pathinfo === '/addstate') {
            return array (  '_controller' => 'AdminBundle\\Controller\\AdminController::addstateAction',  '_route' => 'admin_admin_addstate',);
        }

        // admin_default_index
        if ($pathinfo === '/default') {
            return array (  '_controller' => 'AdminBundle\\Controller\\DefaultController::indexAction',  '_route' => 'admin_default_index',);
        }

        if (0 === strpos($pathinfo, '/login')) {
            // admin_security_login
            if ($pathinfo === '/login1') {
                return array (  '_controller' => 'AdminBundle\\Controller\\SecurityController::loginAction',  '_route' => 'admin_security_login',);
            }

            // admin_security_login_check
            if ($pathinfo === '/login_check1') {
                return array (  '_controller' => 'AdminBundle\\Controller\\SecurityController::login_checkAction',  '_route' => 'admin_security_login_check',);
            }

        }

        // homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'homepage');
            }

            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
