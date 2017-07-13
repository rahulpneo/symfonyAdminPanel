<?php

namespace AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * State
 *
 * @ORM\Table(name="state")
 * @ORM\Entity(repositoryClass="AdminBundle\Repository\StateRepository")
 */
class State
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
     * @ORM\Column(name="state", type="string", length=255, nullable=true)
     */
    private $state;

    /**
     * @var string
     *
     * @ORM\Column(name="statecode", type="string", length=255, nullable=true)
     */
    private $statecode;

    /**
     * @var string
     *
     * @ORM\Column(name="deleted", type="string", length=255, nullable=true)
     */
    private $deleted;

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
     * Set state
     *
     * @param string $state
     * @return State
     */
    public function setState($state)
    {
        $this->state = $state;

        return $this;
    }

    /**
     * Get state
     *
     * @return string 
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * Set statecode
     *
     * @param string $statecode
     * @return State
     */
    public function setStatecode($statecode)
    {
        $this->statecode = $statecode;

        return $this;
    }

    /**
     * Get statecode
     *
     * @return string 
     */
    public function getStatecode()
    {
        return $this->statecode;
    }

    /**
     * Set deleted
     *
     * @param string $deleted
     * @return State
     */
    public function setDeleted($deleted)
    {
        $this->deleted = $deleted;

        return $this;
    }

    /**
     * Get deleted
     *
     * @return string 
     */
    public function getDeleted()
    {
        return $this->deleted;
    }

    /**
     * Set createdon
     *
     * @ORM\Column(type="datetime")
     * @return State
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
     * @ORM\Column(type="datetime")
     * @return State
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
