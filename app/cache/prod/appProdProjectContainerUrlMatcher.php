<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdProjectContainerUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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
        if ($pathinfo === '/admin/forgot_password') {
            return array (  '_controller' => 'AdminBundle\\Controller\\AdminController::forgot_passwordAction',  '_route' => 'admin_admin_forgot_password',);
        }

        // admin_admin_registration
        if ($pathinfo === '/registration') {
            return array (  '_controller' => 'AdminBundle\\Controller\\AdminController::registrationAction',  '_route' => 'admin_admin_registration',);
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
