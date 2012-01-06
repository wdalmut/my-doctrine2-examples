<?php
/**
 * @Entity @Table(name="bugs")
 */
class Bug
{
    /**
     * @Id @Column(type="integer") @GeneratedValue
     */
    public $id;
    /**
     * @Column(type="string")
     */
    public $description;
    /**
     * @Column(type="datetime")
     */
    public $created;
    /**
     * @Column(type="string")
     */
    public $status;

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
     * Set the reporter for this bug
     * 
     * @param User $r
     */
    public function setReporter(User $r)
    {
        $this->reporter = $r;
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
     * Retrive the bug reporter
     * 
     * @return User The user that reports this bug
     */
    public function getReporter()
    {
        return $this->reporter;
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
}