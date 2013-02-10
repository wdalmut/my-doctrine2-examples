<?php 
namespace MyProject\Models;
/** @Entity */
class User
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
     * @ManyToMany(targetEntity="Group");
     * @JoinTable(name="User_has_Group",
     *      joinColumns={@JoinColumn(name="User_id", referencedColumnName="id")},
     *      inverseJoinColumns={@JoinColumn(name="Group_id", referencedColumnName="id")}
     * )
     */
    private $groups;
    
    public function setId($id)
    {
        $this->id = $id;
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
    
    public function add(\MyProject\Models\Group $group)
    {
        $this->groups[] = $group;
    }
    
    public function getGroups()
    {
        return $this->groups;
    }
}