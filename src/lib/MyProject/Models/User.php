<?php
namespace MyProject\Models;

/**
 * @Entity @Table(name="users")
 */
class User
{
    /**
     * @Id @GeneratedValue @Column(type="integer")
     * @var string
     */
    private $id;

    /**
     * @Column(type="string")
     * @var string
     */
    private $name;

    /**
     * @OneToMany(targetEntity="Bug", mappedBy="reporter")
     * @var Bug[]
     */
    private $reportedBugs = null;

    /**
     * @OneToMany(targetEntity="Bug", mappedBy="engineer")
     * @var Bug[]
     */
    private $assignedBugs = null;
    
    /**
     * Retrive user assigned bugs
     * 
     * @return Bug[] List of bugs assigned
     */
    public function getAssignedBugs()
    {
        return $this->assignedBugs;
    }
    
    /**
     * Retrive user reported bugs
     * 
     * @return Bug[] list of bugs reported
     */
    public function getReportedBugs()
    {
        return $this->reportedBugs;
    }
    
    /**
     * Set the user name
     * 
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }
    
    /**
     * Get the user name
     * 
     * @return string The user name
     */
    public function getName()
    {
        return $this->name;
    }
    
    /**
     * Set the user identification number
     * 
     * @param int $id The identification number
     */
    public function setId($id)
    {
        $this->id = $id;
    }
    
    /**
     * Get the user identification number
     * 
     * @return int The identitication number
     */
    public  function getId()
    {
        return $this->id;
    }
}