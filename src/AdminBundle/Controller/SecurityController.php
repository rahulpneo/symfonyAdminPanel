<?php

namespace AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\EventDispatcher\EventDispatcher;
use Symfony\Component\Security\Core\Authentication\Token\UsernamePasswordToken;
use Symfony\Component\Security\Http\Event\InteractiveLoginEvent;
use AdminBundle\Entity\User;


class SecurityController extends Controller
{
    /**
     * @Route("login1")
     */
    public function loginAction()
    {
        //exit("here1");
    $user = $this->get('doctrine')->getRepository('AdminBundle:User')->findOneByUsername($username);
        // Here, "public" is the name of the firewall in your security.yml
        $token = new UsernamePasswordToken($user, $user->getPassword(), "public", $user->getRoles());
        $this->get("security.context")->setToken($token);

        // Fire the login event
        // Logging the user in above the way we do it doesn't do this automatically
        $event = new InteractiveLoginEvent($request, $token);
        $this->get("event_dispatcher")->dispatch("security.interactive_login", $event);
        return $this->render('AdminBundle:Security:login.html.twig', array(
            // ...
        ));
    }

    /**
     * @Route("/login_check1")
     */
    public function login_checkAction()
    {exit("here2");
        return $this->render('AdminBundle:Security:login.check.html.twig', array(
            // ...
        ));
    }

}
