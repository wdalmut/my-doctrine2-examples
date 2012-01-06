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
    
    public function setEngineer($e)
    {
        $this->engineer = $e;
    }
    
    public function setReporter($r)
    {
        $this->reporter = $r;
    }
    
    public function assignToProduct($p)
    {
        $this->products[] = $p;
    }
}