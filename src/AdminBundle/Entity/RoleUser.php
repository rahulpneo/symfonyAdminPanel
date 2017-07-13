<?php

namespace AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RoleUser
 *
 * @ORM\Table(name="role_user")
 * @ORM\Entity(repositoryClass="AdminBundle\Repository\RoleUserRepository")
 */
class RoleUser
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
     * @ORM\Column(name="user_id", type="integer", nullable=true)
     */
    private $userId;

    /**
     * @var int
     *
     * @ORM\Column(name="role_id", type="integer", nullable=true)
     */
    private $roleId;

    /**
     * @var string
     *
     * @ORM\Column(name="createdon", type="datetime", length=255, nullable=true)
     */
    private $createdon;

    /**
     * @var string
     *
     * @ORM\Column(name="updatedon", type="datetime", length=255, nullable=true)
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
     * Set userId
     *
     * @param integer $userId
     * @return RoleUser
     */
    public function setUserId($userId)
    {
        $this->userId = $userId;

        return $this;
    }

    /**
     * Get userId
     *
     * @return integer 
     */
    public function getUserId()
    {
        return $this->userId;
    }

    /**
     * Set roleId
     *
     * @param integer $roleId
     * @return RoleUser
     */
    public function setRoleId($roleId)
    {
        $this->roleId = $roleId;

        return $this;
    }

    /**
     * Get roleId
     *
     * @return integer 
     */
    public function getRoleId()
    {
        return $this->roleId;
    }

    /**
     * Set createdon
     *
     * @param string $createdon
     * @return RoleUser
     */
    public function setCreatedon()
    {
        $this->createdon = new \DateTime("now");

        return $this;
    }

    /**
     * Get createdon
     *
     * @return string 
     */
    public function getCreatedon()
    {
        return $this->createdon;
    }

    /**
     * Set updatedon
     *
     * @param string $updatedon
     * @return RoleUser
     */
    public function setUpdatedon()
    {
        $this->updatedon = new \DateTime("now");

        return $this;
    }

    /**
     * Get updatedon
     *
     * @return string 
     */
    public function getUpdatedon()
    {
        return $this->updatedon;
    }
}
