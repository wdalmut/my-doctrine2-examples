<?php
namespace MyProject\Models;

/**
 * @Entity @Table(name="products")
 */
class Product
{
    /** 
     * @Id @Column(type="integer") @GeneratedValue
     * @var int 
     */
    private $id;
    /** 
     * @Column(type="string") 
     * @var string 
     */
    private $name;
    
    /**
     * Set the product id
     * 
     * @param int $id
     */
    public  function setId($id)
    {
        $this->id = $id;
    }
    
    /**
     * Retrive the product id
     * 
     * @return int id
     */
    public function getId()
    {
        return $this->id;
    }
    
    /**
     * Set the product name
     * 
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }
    
    /**
     * Get the product name
     * 
     * @return string The name
     */
    public function getName()
    {
        return $this->name;
    }
}