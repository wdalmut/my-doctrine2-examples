<?php
namespace TestData\Entity;

/**
 * @author Gianluca Arbezzano <gianarb92@gmail.com>
 * @Entity @Table(name="category")
 */
class Category
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
     * @Column(type="string")
     * @var string
     */
    private $description;
    /**
     * @Column(type="string", nullable=true)
     * @var string
     */
    private $tag;
    
    /**
     * @Column(type="datetime", name="created")
     * @var datetime
     */
    private $dateTimeCreated;
    
    /**
     * @OneToMany(targetEntity="Post", mappedBy="category")
     */
    private $post;

    /**
     * @return int
     */
    function getId()
    {
        return $this->id;
    }
    /**
     * @return string
     */
    function getName()
    {
        return $this->name;
    }

    /**
     * @return string
     */
    function getDescription()
    {
        return $this->description;
    }

    /**
     * @return string
     */
    function getTag()
    {
        return $this->tag;
    }

    /**
     * @return datetime
     */
    function getDateTimeCreated()
    {
        return $this->dateTimeCreated->format('Y-m-d G:m:s');
    }

    /**
     * @param $i
     * @return $this
     */
    function setId($i)
    {
        $this->id = $i;
        return $this;
    }

    /**
     * @param $n
     * @return $this
     */
    function setName($n)
    {
        $this->name = $n;
        return $this;
    }

    /**
     * @param $d
     * @return $this
     */
    function setDescription($d)
    {
        $this->description = $d;
        return $this;
    }

    /**
     * @param $t
     * @return $this
     */
    function setTag($t)
    {
        $this->tag = $t;
        return $this;
    }

    /**
     * @param $dtc
     * @return $this
     */
    function setDateTimeCreated($dtc)
    {
        $this->dateTimeCreated = $dtc;
        return $this;
    }

    /**
     * return array of this object
     * @return array
     */
    function toArray()
    {
        return  array(
                'name' => $this->getName(),
                'created' => $this->getDateTimeCreated(),
                'description' => $this->getDescription(),
                'tag' => $this->getTag(),
                'categoryId' => $this->getId()
            );
    }
}