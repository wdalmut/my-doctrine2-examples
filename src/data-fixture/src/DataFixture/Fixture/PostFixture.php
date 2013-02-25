<?php
namespace DataFixture\Fixture;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\Persistence\ObjectManager;
class PostFixture
    extends AbstractFixture
{
    protected $post;
    
    public function createPostFixture($em)
    {
        $category = new \DataFixture\Model\Category($em);
        $category = $category->searchById(1);
        $post = new \DataFixture\Entity\Post();
        $post->setDateTimeCreated(new \DateTime());
        $post->setDescription('descrizione di un post');
        $post->setCategory($category);
        $post->setTag('ciao,2,4');
        $post->setContent("esempio di contenuto all'interno di un post");
        $post->setStatus(0);
        $post->setTitle('titolo del post');
        $this->post = $post;
        return $this;
    }
    
    
    public function load(ObjectManager $manager)
    {
        $manager->persist($this->post);
        $manager->flush();
    }
    
    public function getPost()
    {
        return $this->post;
    }
}