<?php

namespace AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use AdminBundle\Entity\User;
use AdminBundle\Entity\Emailtemplate;
use AdminBundle\Entity\Country;
use AdminBundle\Entity\State;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoder;
use Symfony\Component\HttpFoundation\Session\Session;

use Symfony\Component\Security\Core\Exception\AccessDeniedException;
use Symfony\Component\Security\Acl\Domain\ObjectIdentity;
use Symfony\Component\Security\Acl\Domain\UserSecurityIdentity;
use Symfony\Component\Security\Acl\Permission\MaskBuilder;

class AdminController extends Controller
{
	public function __construct()
	{
  	  	
    		$this->session = new Session();
    		
			
	}
	/**
     * @Route("/admin")
     */
    public function indexAction()
    {
    	if ($this->session->has("name")) {
   			 	  $myVar = $this->session->get("name");
    			  return $this->render('AdminBundle:Admin/Layout:layout.html.twig');
		  }else{
       		 	return $this->redirect('http://localhost:8000/login');
   		 }
    }

    /**
     * @Route("/login")
     */
    public function loginAction(Request $request)
    {
	     return $this->render('AdminBundle:Admin:login.html.twig', array(
 	         'last_username' => '',
 	         'error'         => 'Invalid username password',
	     ));    
    }

    /**
     * @Route("/login_check")
     */
    public function login_checkAction(Request $request)
    {
   		$em = $this->get('doctrine')->getManager();
		  $username = $request->get('username');		
		  $password=$request->get('password');
		  $password =  $this->passwordencoderAction($password);
		
		  $query = $em->createQuery(
   				 'SELECT u
 				    FROM AdminBundle:User u
				    WHERE u.username = :username And u.password = :password And u.deleted != :deleted'
					)->setParameter('username', $username)
					->setParameter('password', $password)			
                    ->setParameter('deleted', '1');
		  $data = $query->getOneorNullResult(\Doctrine\ORM\Query::HYDRATE_ARRAY);

		  $c = count($data);

		  if(!empty($c)){
			
  			$this->session->set('name', $username);
  			$this->session->set('fullname', $data['fullname']);
  			$this->session->set('id', $data['id']);

  			$q = $em->createQuery('SELECT r FROM AdminBundle:Role r
  				WHERE r.id = :id'
  				)->setParameter('id', $data['isadmin']);
  			$role = $q->getOneorNullResult(\Doctrine\ORM\Query::HYDRATE_ARRAY);
  			$this->session->set('role',$role['name']);
  			$this->session->getFlashBag()->add('message', 'Login successfull');
  			return $this->redirect('http://localhost:8000/admin');  			
			
		  }else{
  			// set flash messages
  			if($username != '' || $password != ''){
  			   	return $this->render('AdminBundle:Admin:login.html.twig', array(
   	            'error'         => 'invalid username password',
  	     		));
  			}else{
  				  return $this->render('AdminBundle:Admin:login.html.twig', array(
   	            'error'         => 'something is wrong',
  	     		));
  			}
		   
		  }
    }

    /**
     * @Route("/admin/forget_password")
     */
    public function forgot_passwordAction($name = 'rahul')
    {     
         $message = \Swift_Message::newInstance()
        ->setFrom('rahul.p@wwindia.com')
        ->setTo('rahulpneo@gmail.com')       
        ->setBody('sample text sample text sample text ');
                    
        $m = $this->get('mailer')->send($message);
  
        if($m){
          echo 'sent';
        }else{
          echo 'fail';
        }

        // $headers = 'From: <rahul.p@wwindia.com>';
        // $to = "rahulpneo@gmail.com";
        // $subject = "HTML email";
        // $message = "sample text sample text sample text ";
        // $m = mail($to,$subject,$message,$headers);
        // if($m){
        //     echo"sent";exit;
        //   }else{
        //     echo"fail";exit;  
        //   }

       // return $this->render('AdminBundle:Admin:login.html.twig', array(
       //          'error'         => 'something is wrong',
       //      ));
        return $this->redirect('http://localhost:8000/login');

    }

    /**
     * @Route("registration")
     */
    public function registrationAction(Request $request)
    {//exit("===");
    	// or fetch the em via the container
    	$em = $this->get('doctrine')->getManager();

    	$user = new User();
    	$user->setFullname($request->get('fullname'));
    	$user->setEmail($request->get('email'));
    	$plainPassword = $request->get('password');
		  $encoded = $this->passwordencoderAction($plainPassword);
    	$user->setPassword($encoded);
    	$user->setAddress($request->get('address'));
    	$user->setCity($request->get('city'));
    	$user->setCountry($request->get('country'));
    	$user->setUsername($request->get('username'));
    	$user->setDeleted('0');
    	$user->setCreatedon(); 
    	$user->setIsadmin($request->get('roles')); 

    	$em->persist($user);
    	$em->flush(); 	

        return $this->render('AdminBundle:Admin:login.html.twig',array(
	        'error'         => '',
	    ));
    }
    public function passwordencoderAction($plainPassword){
    	$user = new User();
    	$encoded = md5($plainPassword);
    	//$encoder = $this->container->get('security.password_encoder');
		//$encoded = $encoder->encodePassword($user, $plainPassword);
		return $encoded;

    }

    /**
     * @Route("/logout")
     */
    public function logoutAction()
    {
    	session_destroy();
        return $this->redirect('http://localhost:8000/admin');
    }

    /**
     * @Route("/admin/user")
     */
    public function userAction()
    {
    	  if ($this->session->has("name")) {
      		$em = $this->get('doctrine')->getManager();
      		$records = $em->getRepository('AdminBundle:User')->selectuser($em);
      		return $this->render('AdminBundle:Admin:displayusers.html.twig',array(
  	        	'error'         => '',
  	        	'data'	=> array($records),
  	    	));
        }else{
        	return $this->redirect('http://localhost:8000/login');
        }
    }

    /**
     * @Route("/edit/{id}")
     */
    public function editAction($id = "")
    {    	
    	$em = $this->get('doctrine')->getManager();
    	$record = $em->getRepository('AdminBundle:User')->find($id);
      	return $this->render('AdminBundle:Admin:edituser.html.twig',array(
	        	'error'         => '',
	        	'data'			=> array($record),
	 	    	));
    }

    /**
     * Matches /blog/*
     *
     * @Route("/delete/{id}", name="blog_show")
     */
    public function deleteAction($id = "")
    {
    	
    	$em = $this->get('doctrine')->getManager();
    	$adminentities = $em->getRepository('AdminBundle:User')->find($id);
      $adminentities->setUpdatedon();
      $adminentities->setDeleted('1');
  		
  		 $em->flush();  
         $records = $em->getRepository('AdminBundle:User')->selectuser($em);  	
    	return $this->render('AdminBundle:Admin:displayusers.html.twig',array(
	        	'error'    => 'record deleted successfully',
	        	'data'		=>array($records),
	 	    	));      
    }

    /**
     * @Route("/addform")
     */
    public function addformAction(Request $request)
    {
        return $this->render('AdminBundle:Admin:adduser.html.twig',array(
                'error'         => 'Record inserted successfully',               
            ));
    }
    /**
     * @Route("/add")
     */
    public function addAction(Request $request)
    {
        $em = $this->get('doctrine')->getManager();
        //echo $request->getMethod();exit;
        
            $user = new User();
            $user->setFullname($request->get('fullname'));
            $user->setEmail($request->get('email'));
            $plainPassword = $request->get('password');
            $encoded = $this->passwordencoderAction($plainPassword);
            $user->setPassword($encoded);
            $user->setAddress($request->get('address'));
            $user->setCity($request->get('city'));
            $user->setCountry($request->get('country'));
            $user->setUsername($request->get('username'));
            $user->setDeleted('0');
            $user->setCreatedon(); 
            $user->setIsadmin($request->get('role')); 

            $em->persist($user);
            $em->flush();   
        
    	$records = $em->getRepository('AdminBundle:User')->selectuser($em);
        return $this->render('AdminBundle:Admin:displayusers.html.twig',array(
                'error'         => 'Record inserted successfully',
                'data'  => array($records),
            ));
    }

    /**
     * @Route("/update")
     */
    public function updateAction(Request $request)
    {
    	$id = $request->get('id');
    	//echo $id;exit;
    	$user = new User();
    	$em = $this->getDoctrine()->getManager();
    	$u = $em->getRepository('AdminBundle:User')->find($id);

    			$u->setFullname($request->get('fullname'));
		    	$u->setEmail($request->get('email'));
		    	$plainPassword = $request->get('password');
				$encoded = $this->passwordencoderAction($plainPassword);
		    	$u->setPassword($encoded);
		    	$u->setAddress($request->get('address'));
		    	$u->setCity($request->get('city'));
		    	$u->setCountry($request->get('country'));
		    	$u->setUsername($request->get('username'));
		    	$u->setDeleted('0');
		    	$u->setUpdatedon(); 
		    	$u->setIsadmin($request->get('role')); 
		      	$em->flush();
    	$records = $em->getRepository('AdminBundle:User')->selectuser($em);
    		return $this->render('AdminBundle:Admin:displayusers.html.twig',array(
	        	'error'         => '',
	        	'data'	=> array($records),
	    	));

    		
    }

    /**
     * @Route("/admin/template")
     */
    public function emailtemplateAction(Request $request)
    {

      if ($this->session->has("name")) {
          $em = $this->get('doctrine')->getManager();
          $records = $em->getRepository('AdminBundle:Emailtemplate')->selectuser($em);
          return $this->render('AdminBundle:Admin:email_template.html.twig',array(
              'error'         => '',
              'data'  => array($records),
          ));
        }else{
            return $this->render('AdminBundle:Admin:email_template.html.twig',array(
                  'error'         => '',
                  'data'  => '',
              ));
      }
    }

    /**
     * @Route("/addtemplate")
     */
    public function addtemplateformAction(Request $request)
    {
       
        return $this->render('AdminBundle:Admin:addtemplate.html.twig',array(
                'error'         => 'Record inserted successfully',               
            ));
    }
     /**
     * @Route("/inserttemplate")
     */
    public function addtemplateAction(Request $request)
    {
      $em = $this->get('doctrine')->getManager();
       
            $et = new Emailtemplate();
            $et->setTemplatename($request->get('templatename'));
            $et->setSubject($request->get('subject'));
            $et->setBody($request->get('body'));
            $et->setDeleted('0');
            $et->setCreatedon(); 
      
            $em->persist($et);
            $em->flush();  
             return $this->render('AdminBundle:Admin:addtemplate.html.twig',array(
                'error'         => 'Record inserted successfully',               
            )); 
    }

    /**
     * @Route("/preview/{id}")
     */
    public function templatepreview($id)
    {
      $em = $this->get('doctrine')->getManager();
             
          $repo = $em->getRepository('AdminBundle:Emailtemplate');
          $record = $repo->createQueryBuilder('e')
                      ->select('e.body')
                      ->where('e.id = :id')
                      ->setParameter('id',$id)
                      ->getQuery()
                      ->getResult(\Doctrine\ORM\Query::HYDRATE_ARRAY);

          $body = $record[0]['body'];
          return $this->render('AdminBundle:Admin:previewtemplate.html.twig',array(
              'error'         => '',
              'data'  => $body,
          ));

    }

    /**
     * @Route("/edittemplate/{id}")
     */
    public function edittemplate(Request $request,$id="")
    {
      $em = $this->get('doctrine')->getManager();
      $et = new Emailtemplate();
    
          $em = $this->get('doctrine')->getManager();
          $record = $em->getRepository('AdminBundle:Emailtemplate')->find($id);
            return $this->render('AdminBundle:Admin:edittemplate.html.twig',array(
                'error'         => '',
                'data'      => array($record),
              ));
   
       return $this->render('AdminBundle:Admin:edittemplate.html.twig',array(
                'error'         => '',
                'data'      => array($record),
              ));
    }

     /**
     * @Route("/updatetemplate")
     */
    public function updatetemplate(Request $request)
    {
      $em = $this->get('doctrine')->getManager();
        $et = new Emailtemplate();
        $templatename = $request->get('templatename');
        $subject = $request->get('subject');
        $body = $request->get('body');
        if( $templatename !="" || $subject !="" || $body != ""){
          $id = $request->get('id');
          $e = $em->getRepository('AdminBundle:Emailtemplate')->find($id);
        // print_r($e);exit;
         $e->setTemplatename($request->get('templatename'));
         $e->setSubject($request->get('subject'));
         $e->setBody($request->get('body'));
         $e->setUpdatedon();
          $em->flush();
          $error = "Record updated successfully...";
        }else{
          $error = "some fields are empty...";
        }
       
        $record = $em->getRepository('AdminBundle:Emailtemplate')->find($id); 
        return $this->render('AdminBundle:Admin:edittemplate.html.twig',array(
                'error'         => $error,
                'data'      => array($record),
              ));

    }
     /**
     * Matches /blog/*
     *
     * @Route("/deletetemplate/{id}", name="blog_show")
     */
    public function deletetemplateAction($id = "")
    {      
      $em = $this->get('doctrine')->getManager();
      $adminentities = $em->getRepository('AdminBundle:Emailtemplate')->find($id);
      $adminentities->setUpdatedon();
      $adminentities->setDeleted('1');
      
       $em->flush();  
         $records = $em->getRepository('AdminBundle:Emailtemplate')->selectuser($em);    
      return $this->render('AdminBundle:Admin:email_template.html.twig',array(
            'error'    => 'record deleted successfully',
            'data'    =>array($records),
          ));      
    }

    /**
     * @Route("/config")
     */
    public function configAction(Request $request)
    {
      return $this->render('AdminBundle:Admin:config_setting.html.twig',array('error'  => '',
        )
      );
    }
    /**
     * @Route("/country")
     */
    public function countryAction(Request $request)
    {
      return $this->render('AdminBundle:Admin:country.html.twig',array('error'  => '',
        )
      );
    }

   /**
    * @Route("/addcountry")
    */
    public function addcontryAction(Request $request){
        $em = $this->get('Doctrine')->getManager();

        $country =$request->get('country');

        $countrycode =$request->get('countrycode');

        if( $country == "" || is_numeric($country)){
          $error = "country name should not be empty...";
        }elseif($countrycode != ""){
          $error = "country code should not be empty...";
        }else{

          $con = new Country();
          $con->setCountry($request->get('country'));
          $con->setCountrycode($request->get('country'));
          $con->setDeleted('0');
          $con->setCreatedat();
          $em->persist($con);
          $em->flush();

          $error = "Country added successfully...";
        }
     
        return $this->redirect('country');

    }

    /**
     * @Route("/state")
     */
    public function stateAction(Request $request)
    {
      return $this->render('AdminBundle:Admin:state.html.twig',array('error'  => '',
        )
      );
    }

    /**
    * @Route("/addstate")
    */
    public function addstateAction(Request $request){
        $em = $this->get('Doctrine')->getManager();

        $state =$request->get('state');

        $statecode =$request->get('statecode');
       
        if( $state == ""){
          $error = "State name should not be empty...";
        }elseif($statecode == ""){
          $error = "state code should not be empty...";
        }else{

          $st = new State();
          $st->setState($request->get('state'));
          $st->setStatecode($request->get('statecode'));
          $st->setDeleted('0');
          $st->setCreatedon();
          $em->persist($st);
          $em->flush();

          $error = "State added successfully...";
        }
      
        return $this->redirect('state');

    }

}
