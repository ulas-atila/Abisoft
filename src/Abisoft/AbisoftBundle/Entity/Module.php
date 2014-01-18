<?php

namespace Abisoft\AbisoftBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Module
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Abisoft\AbisoftBundle\Entity\ModuleRepository")
 */
class Module
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;

    /**
     * @ORM\ManyToOne(targetEntity="Abisoft\AbisoftBundle\Entity\Application")
     * @ORM\JoinColumn(nullable=false)
     */
    private $application;



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
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set name
     *
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * Get application
     *
     * @return Abisoft\AbisoftBundle\Entity\Application 
     */
    public function getApplication()
    {
        return $this->application;
    }


}
