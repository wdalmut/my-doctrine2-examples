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
    
    public function assignToProduct(Product $p)
    {
        $this->products[] = $p;
    }
}