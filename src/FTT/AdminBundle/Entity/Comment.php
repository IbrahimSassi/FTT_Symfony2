<?php
namespace FTT\AdminBundle\Entity;
use Doctrine\ORM\Mapping as ORM; 

use FOS\CommentBundle\Entity\Comment as BaseComment;
use FOS\CommentBundle\Model\SignedCommentInterface;
use Symfony\Component\Security\Core\User\UserInterface;

use FOS\CommentBundle\Model\VotableCommentInterface;

/**
 * @ORM\Entity 
 * @ORM\ChangeTrackingPolicy("DEFERRED_EXPLICIT")
 */
class Comment extends BaseComment implements SignedCommentInterface ,VotableCommentInterface {
    /** 
     *  @ORM\Id 
     *  @ORM\Column(type="integer") 
     *  @ORM\GeneratedValue(strategy="AUTO")
    */
    protected $id;
    /**
     * Thread of this comment 
     *
     * @var Thread 
     * @ORM\ManyToOne(targetEntity="FTT\AdminBundle\Entity\Thread") 
     */
     protected $thread; 
     
     /**
     * Author of the comment
     *
     * @ORM\ManyToOne(targetEntity="FTT\AdminBundle\Entity\User")
     * @var User
     */
    protected $author;

    public function setAuthor(UserInterface $author)
    {
        $this->author = $author;
    }

    public function getAuthor()
    {
        return $this->author;
    }

    public function getAuthorName()
    {
        if (null === $this->getAuthor()) {
            return 'Anonymous';
        }

        return $this->getAuthor()->getUsername();
    }
     /**
     * @ORM\Column(type="integer")
     * @var int
     */
    protected $score = 0;

    /**
     * Sets the score of the comment.
     *
     * @param integer $score
     */
    public function setScore($score)
    {
        $this->score = $score;
    }

    /**
     * Returns the current score of the comment.
     *
     * @return integer
     */
    public function getScore()
    {
        return $this->score;
    }

    /**
     * Increments the comment score by the provided
     * value.
     *
     * @param integer value
     *
     * @return integer The new comment score
     */
    public function incrementScore($by = 1)
    {
        $this->score += $by;
    }

}