<?php
namespace MyProject\Models;

/**
 * @Entity @Table(name="bugs")
 */
class Bug
{
    /**
     * @Id @Column(type="integer") @GeneratedValue
     */
    private $id;
    /**
     * @Column(type="string")
     * @var string
     */
    private $description;
    /**
     * @Column(type="datetime")
     */
    private $created;
    /**
     * @Column(type="string")
     */
    private $status;

    /**
     * @ManyToOne(targetEntity="User", inversedBy="assignedBugs")
     */
    private $engineer;

    /**
     * @ManyToOne(targetEntity="User", inversedBy="reportedBugs")
     */
    private $reporter;

    /**
     * @ManyToMany(targetEntity="Product")
     * @var Product[]
     */
    private $products;
    
    /**
     * Set the engineer for this bug
     * 
     * @param User $e
     */
    public function setEngineer(User $e)
    {
        $this->engineer = $e;
    }
    
    /**
     * Get the engineer that works on this bug
     *
     * @return User The user that works on this bug
     */
    public function getEngineer()
    {
        return $this->engineer;
    }
    
    /**
     * Set the reporter for this bug
     * 
     * @param User $r
     */
    public function setReporter(User $r)
    {
        $this->reporter = $r;
    }
    
    /**
     * Retrive the bug reporter
     *
     * @return User The user that reports this bug
     */
    public function getReporter()
    {
        return $this->reporter;
    }
    
    /**
     * Assign this bug to a product
     * 
     * @param Product $p
     */
    public function assignToProduct(Product $p)
    {
        $this->products[] = $p;
    }
    
    /**
     * Retrive products linked to this bug
     * 
     * @return Product[] 
     */
    public function getProducts()
    {
        return $this->products;
    }
    
    /**
     * Set description for this bug
     * 
     * @param string $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }
    
    /**
     * Retrive the bug description
     * 
     * @return string the bug desc
     */
    public function getDescription()
    {
        return $this->description;
    }
    
    public function setId($id)
    {
        $this->id = $id;
    }
    
    /**
     * Get the bug id
     * 
     * @return int The bug id
     */
    public function getId()
    {
        return $this->id;
    }
    
    public function setDateCreated(\DateTime $dateCreated)
    {
        $this->created = $dateCreated;
    }
    
    /**
     * Retrive the creation date
     * 
     * @return DateTime
     */
    public function getDateCreated()
    {
        return $this->created;
    }
    
    public function setStatus($status)
    {
        $this->status = $status;
    }
    
    /**
     * Retrive the bug status
     * 
     * @return string the bug status
     */
    public function getStatus()
    {
        return $this->created;
    }
}