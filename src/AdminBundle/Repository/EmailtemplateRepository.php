<?php

namespace AdminBundle\Repository;

use Doctrine\ORM\EntityRepository;

/**
 * EmailtemplateRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class EmailtemplateRepository extends EntityRepository
{
	public function selectuser($em){
      $q = $em->createQuery('SELECT r FROM AdminBundle:Emailtemplate r WHERE r.deleted =:deleted')->setParameter('deleted', '0');
      $data = $q->getResult(\Doctrine\ORM\Query::HYDRATE_ARRAY);
     //  print_r($role);exit;
    return $data;

  }
}
