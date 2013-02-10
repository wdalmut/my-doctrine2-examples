<?php
namespace Wdm\Model;

/**
 * @Entity @Table(name="posts")
 */
class Post
{
    /**
     * @Id @Column(type="integer") @GeneratedValue
     */
    private $id;

    /**
     * The post title field
     *
     * @Column(type="string")
     */
    private $title;

    /**
     * @OneToMany(targetEntity="Page", mappedBy="post")
     * @var Page[]
     */
    private $pages = null;

    public function getId()
    {
        return $this->id;
    }

    public function setTitle($title)
    {
        $this->title = $title;
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function addPage(Page $page)
    {
        $this->pages[] = $page;
    }

    public function getPages()
    {
        return $this->pages;
    }
}

