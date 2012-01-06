<?php 
namespace MyProject\Models;

/** @Entity @Table(name="GGroup") */
class Group
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
     * @ManyToMany(targetEntity="User");
     * @JoinTable(name="User_has_Group",
     *      joinColumns={@JoinColumn(name="Group_id", referencedColumnName="id")},
     *      inverseJoinColumns={@JoinColumn(name="User_id", referencedColumnName="id")}
     * )
     */
    private $users;
    
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