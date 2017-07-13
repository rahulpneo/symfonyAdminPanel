<?php

namespace AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RoleUserPermission
 *
 * @ORM\Table(name="role_user_permission")
 * @ORM\Entity(repositoryClass="AdminBundle\Repository\RoleUserPermissionRepository")
 */
class RoleUserPermission
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var int
     *
     * @ORM\Column(name="userid", type="integer", nullable=true)
     */
    private $userid;

    /**
     * @var int
     *
     * @ORM\Column(name="roleid", type="integer", nullable=true)
     */
    private $roleid;

    /**
     * @var int
     *
     * @ORM\Column(name="permissionid", type="integer", nullable=true)
     */
    private $permissionid;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="createdon", type="datetime", nullable=true)
     */
    private $createdon;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="updatedon", type="datetime", nullable=true)
     */
    private $updatedon;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set userid
     *
     * @param integer $userid
     * @return RoleUserPermission
     */
    public function setUserid($userid)
    {
        $this->userid = $userid;

        return $this;
    }

    /**
     * Get userid
     *
     * @return integer 
     */
    public function getUserid()
    {
        return $this->userid;
    }

    /**
     * Set roleid
     *
     * @param integer $roleid
     * @return RoleUserPermission
     */
    public function setRoleid($roleid)
    {
        $this->roleid = $roleid;

        return $this;
    }

    /**
     * Get roleid
     *
     * @return integer 
     */
    public function getRoleid()
    {
        return $this->roleid;
    }

    /**
     * Set permissionid
     *
     * @param integer $permissionid
     * @return RoleUserPermission
     */
    public function setPermissionid($permissionid)
    {
        $this->permissionid = $permissionid;

        return $this;
    }

    /**
     * Get permissionid
     *
     * @return integer 
     */
    public function getPermissionid()
    {
        return $this->permissionid;
    }

    /**
     * Set createdon
     *
     * @param \DateTime $createdon
     * @return RoleUserPermission
     */
    public function setCreatedon()
    {
        $this->createdon = new \DateTime("now");;

        return $this;
    }

    /**
     * Get createdon
     *
     * @return \DateTime 
     */
    public function getCreatedon()
    {
        return $this->createdon;
    }

    /**
     * Set updatedon
     *
     * @param \DateTime $updatedon
     * @return RoleUserPermission
     */
    public function setUpdatedon()
    {
        $this->updatedon = new \DateTime("now");;

        return $this;
    }

    /**
     * Get updatedon
     *
     * @return \DateTime 
     */
    public function getUpdatedon()
    {
        return $this->updatedon;
    }
}
