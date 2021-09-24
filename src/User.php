<?php
namespace Entities;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * @ORM\Entity
 * @ORM\Table(name="user")
 */
class User{
    function __construct()
    {
        $this->assignedBugs = new ArrayCollection();
        $this->reportedBugs = new ArrayCollection();
    }

    /**
     * @var int
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;


    /**
     * @var string
     * @ORM\Column(type="string")
     */
    private $name;

    /**
     * @ORM\OneToMany(targetEntity="Bug" , mappedBy="engineer")
     */
    private $assignedBugs;

    /**
     * @ORM\OneToMany(targetEntity="Bug" , mappedBy="reporter")
     */
    private $reportedBugs;

    function addReportedBug(Bug $reportedBug){
        $this->reportedBugs[] = $reportedBug;
    }

    function assignedToBug(Bug $assignedBug){
        $this->assignedBugs[] = $assignedBug;
    }

    /**
     * Get the value of name
     *
     * @return  string
     */ 
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set the value of name
     *
     * @param  string  $name
     *
     * @return  self
     */ 
    public function setName(string $name)
    {
        $this->name = $name;

        return $this;
    }
}