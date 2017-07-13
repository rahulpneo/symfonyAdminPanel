<?php

namespace AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Permissions
 *
 * @ORM\Table(name="permissions")
 * @ORM\Entity(repositoryClass="AdminBundle\Repository\PermissionsRepository")
 */
class Permissions
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
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255, nullable=true)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="display_name", type="string", length=255, nullable=true)
     */
    private $displayName;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=255, nullable=true)
     */
    private $description;

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
     * Set name
     *
     * @param string $name
     * @return Permissions
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set displayName
     *
     * @param string $displayName
     * @return Permissions
     */
    public function setDisplayName($displayName)
    {
        $this->displayName = $displayName;

        return $this;
    }

    /**
     * Get displayName
     *
     * @return string 
     */
    public function getDisplayName()
    {
        return $this->displayName;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return Permissions
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set createdon
     *
     * @param datetime $createdon
     * @return Permissions
     */
    public function setCreatedon()
    {
        $this->createdon = new \DateTime("now");

        return $this;
    }

    /**
     * Get createdon
     *
     * @return datetime 
     */
    public function getCreatedon()
    {
        return $this->createdon;
    }

    /**
     * Set updatedon
     *
     * @param datetime $updatedon
     * @return Permissions
     */
    public function setUpdatedon()
    {
        $this->updatedon = new \DateTime("now");

        return $this;
    }

    /**
     * Get updatedon
     *
     * @return datetime 
     */
    public function getUpdatedon()
    {
        return $this->updatedon;
    }
}
