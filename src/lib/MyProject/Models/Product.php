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
    public $id;
    /** 
     * @Column(type="string") 
     * @var string 
     */
    public $name;
    
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
     * Get the product name
     * 
     * @return string The name
     */
    public function getName()
    {
        return $this->name;
    }
}