<?php
namespace ProjectBundle\Entity;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity
 */
class Task
{
    /**
     * @ORM\Column(type="string",length=255)
     * @ORM\Id
     * @Assert\NotBlank()
     */    
    private $Id;
    /**
     * @ORM\Column(type="string",length=255)
     * @Assert\NotBlank()
     */    
    private $owner;
    /**
     * @ORM\Column(type="string",length=255)
     * @Assert\NotBlank()
     */    
    private $project; 
    /**
     * @ORM\Column(type="string",length=255)
     */    
    private $sprint;  
    /**
     * @ORM\Column(type="string",length=255)
     * @Assert\NotBlank()
     */    
    private $description;  
    /**
     * @ORM\Column(type="string",length=255)
     * @Assert\NotBlank()
     */    
    private $cost;  

    /**
     * @Assert\NotBlank()
     * @ORM\Column(type="string",length=255)
     */    
    private $achievement_task;

     /**
     * @ORM\Column(type="string",length=255)
     */    
    private $dependencies;
}
