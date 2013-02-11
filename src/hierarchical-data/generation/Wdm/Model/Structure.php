<?php
namespace Wdm\Model;

/**
 * @Entity @Table(name="structures")
 */
class Structure
{
    /**
     * @Id @Column(type="integer") @GeneratedValue
     */
    public $id;

    /**
     * @OneToMany(targetEntity="Structure", mappedBy="parent")
     **/
    public $children;

    /**
     * @ManyToOne(targetEntity="Structure", inversedBy="children")
     * @JoinColumn(name="parent_id", referencedColumnName="id")
     **/
    public $parent;

    /**
     * @Column(type="string")
     */
    private $name;

    public function __construct() {
        $this->children = new \Doctrine\Common\Collections\ArrayCollection();
    }

    public function getId()
    {
        return $this->id;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setParent(Structure $structure)
    {
        $this->parent = $structure;
    }

    public function getParent()
    {
        return $this->parent;
    }

    public function addChildren(Structure $structure)
    {
        $this->children->add($structure);
    }

    public function getChildrens()
    {
        return $this->children;
    }
}
