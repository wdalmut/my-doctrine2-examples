<?php
namespace Wdm\Model;

/**
 * @Entity @Table(name="pages")
 */

class Page
{
    /**
     * @Id @Column(type="integer") @GeneratedValue
     */
    private $id;

    /**
     * @ManyToOne(targetEntity="Post", inversedBy="pages")
     * @var Post
     */
    private $post;

    /**
     * @Column(type="string")
     */
    private $content;

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getId()
    {
        return $this->id;
    }

    public function getPost()
    {
        return $this->post;
    }

    public function setPost(Post $post)
    {
        $this->post = $post;
    }

    public function setContent($content)
    {
        $this->content = $content;
    }

    public function getContent()
    {
        return $this->content;
    }
}
