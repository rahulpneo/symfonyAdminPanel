<?php

namespace AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Emailtemplate
 *
 * @ORM\Table(name="emailtemplate")
 * @ORM\Entity(repositoryClass="AdminBundle\Repository\EmailtemplateRepository")
 */
class Emailtemplate
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
     * @ORM\Column(name="templatename", type="string", length=255, nullable=true)
     */
    private $templatename;

    /**
     * @var string
     *
     * @ORM\Column(name="subject", type="string", length=255, nullable=true)
     */
    private $subject;

    /**
     * @var string
     *
     * @ORM\Column(name="body", type="text", nullable=true)
     */
    private $body;

    /**
     * @var int
     *
     * @ORM\Column(name="deleted", type="integer", nullable=true)
     */
    private $deleted;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="updatedon", type="datetimetz", nullable=true)
     */
    private $updatedon;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="createdon", type="datetimetz", nullable=true)
     */
    private $createdon;


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
     * Set templatename
     *
     * @param string $templatename
     * @return Emailtemplate
     */
    public function setTemplatename($templatename)
    {
        $this->templatename = $templatename;

        return $this;
    }

    /**
     * Get templatename
     *
     * @return string 
     */
    public function getTemplatename()
    {
        return $this->templatename;
    }

    /**
     * Set subject
     *
     * @param string $subject
     * @return Emailtemplate
     */
    public function setSubject($subject)
    {
        $this->subject = $subject;

        return $this;
    }

    /**
     * Get subject
     *
     * @return string 
     */
    public function getSubject()
    {
        return $this->subject;
    }

    /**
     * Set body
     *
     * @param string $body
     * @return Emailtemplate
     */
    public function setBody($body)
    {
        $this->body = $body;

        return $this;
    }

    /**
     * Get body
     *
     * @return string 
     */
    public function getBody()
    {
        return $this->body;
    }

    /**
     * Set deleted
     *
     * @param integer $deleted
     * @return Emailtemplate
     */
    public function setDeleted($deleted)
    {
        $this->deleted = $deleted;

        return $this;
    }

    /**
     * Get deleted
     *
     * @return integer 
     */
    public function getDeleted()
    {
        return $this->deleted;
    }

    /**
     * Set updatedon
     *
     * @param \DateTime $updatedon
     * @return Emailtemplate
     */
    public function setUpdatedon()
    {
        $this->updatedon = new \DateTime("now");

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

    /**
     * Set createdon
     *
     * @param \DateTime $createdon
     * @return Emailtemplate
     */
    public function setCreatedon()
    {
        $this->createdon = new \DateTime("now");

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
}
