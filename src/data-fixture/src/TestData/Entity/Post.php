<?php
namespace TestData\Entity;

/**
 * @author Gianluca Arbezzano <gianarb92@gmail.com>
 * @Entity @Table(name="post")
 */
class Post
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
    private $title;

    /**
     * @Column(type="string", nullable=true)
     * @var string
     */
    private $description;
    /**
     * @Column(type="string")
     * @var string
     */
    private $content;
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
     * @Column(type="integer")
     * @var int
     */
    private $status;

    /**
     * @ManyToOne(targetEntity="Category", inversedBy="post")
     */
    private $category;


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
    function getTitle()
    {
        return $this->title;
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
    function getContent()
    {
        return $this->content;
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
     * @return int
     */
    function getStatus()
    {
        return $this->status;
    }

    /**
     * @param $id
     * @return $this
     */
    function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @param $t
     * @return $this
     */
    function setTitle($t)
    {
        $this->title = $t;
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
     * @param $c
     * @return $this
     */
    function setContent($c)
    {
        $this->content = $c;
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
     * @param int $s
     * @return $this
     */
    function setStatus($s = 0)
    {
        $this->status = $s;
        return $this;
    }

    /**
     * return array by object
     * @return array
     */
    function toArray()
    {
        return array(
                'title' => $this->getTitle(),
                'description' => $this->getDescription(),
                'tag' => $this->getTag(),
                'categoryId' => $this->getId(),
                'content' => $this->getContent(),
                'id' => $this->getId(),
                'status' => $this->getStatus()
        );
    }

    /*
     * get category of a post
    * @return Category
    */
    function getCategory()
    {
        return $this->category;
    }

    /**
     * set category for a post
     * @param Category $cat
     * @return \GaBlog\Entity\Post
     */
    function setCategory(Category $cat)
    {
        $this->category = $cat;
        return $this;
    }
}