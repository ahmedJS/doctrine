<?php

namespace Entities;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="bug")
 */
class Bug{
    
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
    private $description;


    /**
     * @ORM\Column(type="datetime")
     * @var DateTime
     */
    private $created;

    /**
     * @ORM\Column(type="string")
     * @var string
     */
    private $status;

    /**
     * @ORM\ManyToOne(targetEntity="User", inversedBy="assignedBugs")
     */
    private $engineer;

    /**
     * @ORM\ManyToOne(targetEntity="User", inversedBy="reportedBugs")
     */
    private $reporter;


    function addEngineer(User $engineer){
        $engineer->assignedToBug($this);
    }

    function addReporter(User $reporter){
        $reporter->addReportedBug($this);
    }

    /**
     * Get the value of description
     *
     * @return  string
     */ 
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set the value of description
     *
     * @param  string  $description
     *
     * @return  self
     */ 
    public function setDescription(string $description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get the value of status
     *
     * @return  string
     */ 
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set the value of status
     *
     * @param  string  $status
     *
     * @return  self
     */ 
    public function setStatus(string $status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get the value of created
     *
     * @return  DateTime
     */ 
    public function getCreated()
    {
        return $this->created;
    }

    /**
     * Set the value of created
     *
     * @param  DateTime  $created
     *
     * @return  self
     */ 
    public function setCreated(\DateTime $created)
    {
        $this->created = $created;

        return $this;
    }
}