<?php
namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity
 * @ORM\Table(name="articles")
 */

class Article {
    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue
     */
    protected $id;

    /**
     * @ORM\Column(type="integer")
     */
    protected $categoryId;

    /**
     * @ORM\Column(type="string")
     * @Assert\NotBlank(message="Musisz podać tytuł!")
     * @Assert\Length(min=3, max=70,
     * minMessage="Tytuł artykułu musi składać się z co najmniej {{ limit }} znaków!",
     * maxMessage="Tytuł artykuły może składać się maksymalnie z {{ limit }} znaków!")
     */
    protected $title;

    /**
     * @ORM\Column(type="string")
     * @Assert\NotBlank(message="Musisz zamieścić opis!")
     * @Assert\Length(min=3, max=255,
     * minMessage="Opis musi zawierać co najmniej {{ limit }} znaków!",
     * maxMessage="Opis może zawierać maksymalnie {{ limit }} znaków!")
     */
    protected $description;

    /**
     * @ORM\Column(type="text")
     * @Assert\NotBlank(message="Nie możesz zamieścić pustego artykułu/opowiadania!")
     * @Assert\Length(min=10,
     * minMessage="Artykuł/opowiadanie musi zawierać co najmniej {{ limit }} znaków!")
     */
    protected $content;

    /**
     * @ORM\Column(type="date")
     */
    protected $date;

    /**
     * @ORM\Column(type="integer")
     */
    protected $authorId;

    /**
     * @ORM\Column(type="smallint")
     */
    protected $articleType;

    /**
     * @ORM\Column(type="integer", options={"default":0})
     */
    protected $grade;

    /**
     * @ORM\Column(type="integer", options={"default":0})
     */
    protected $comments;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    protected $lastCommentId;

    /**
     * @ORM\Column(type="date", nullable=true)
     */
    protected $lastCommentDate;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    protected $lastCommentAuthor;

    /**
     * @ORM\Column(type="string", length=4)
     */
    protected $headerImgExt = "png";

    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set categoryId
     *
     * @param integer $categoryId
     *
     * @return Article
     */
    public function setCategoryId($categoryId)
    {
        $this->categoryId = $categoryId;

        return $this;
    }

    /**
     * Get categoryId
     *
     * @return integer
     */
    public function getCategoryId()
    {
        return $this->categoryId;
    }

    /**
     * Set title
     *
     * @param string $title
     *
     * @return Article
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return Article
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set content
     *
     * @param string $content
     *
     * @return Article
     */
    public function setContent($content)
    {
        $this->content = $content;

        return $this;
    }

    /**
     * Get content
     *
     * @return string
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * Set date
     *
     * @param \DateTime $date
     *
     * @return Article
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set authorId
     *
     * @param integer $authorId
     *
     * @return Article
     */
    public function setAuthorId($authorId)
    {
        $this->authorId = $authorId;

        return $this;
    }

    /**
     * Get authorId
     *
     * @return integer
     */
    public function getAuthorId()
    {
        return $this->authorId;
    }

    /**
     * Set articleType
     *
     * @param integer $articleType
     *
     * @return Article
     */
    public function setArticleType($articleType)
    {
        $this->articleType = $articleType;

        return $this;
    }

    /**
     * Get articleType
     *
     * @return integer
     */
    public function getArticleType()
    {
        return $this->articleType;
    }

    /**
     * Set grade
     *
     * @param integer $grade
     *
     * @return Article
     */
    public function setGrade($grade)
    {
        $this->grade = $grade;

        return $this;
    }

    /**
     * Get grade
     *
     * @return integer
     */
    public function getGrade()
    {
        return $this->grade;
    }

    /**
     * Set comments
     *
     * @param integer $comments
     *
     * @return Article
     */
    public function setComments($comments)
    {
        $this->comments = $comments;

        return $this;
    }

    /**
     * Get comments
     *
     * @return integer
     */
    public function getComments()
    {
        return $this->comments;
    }

    /**
     * Set lastCommentId
     *
     * @param integer $lastCommentId
     *
     * @return Article
     */
    public function setLastCommentId($lastCommentId)
    {
        $this->lastCommentId = $lastCommentId;

        return $this;
    }

    /**
     * Get lastCommentId
     *
     * @return integer
     */
    public function getLastCommentId()
    {
        return $this->lastCommentId;
    }

    /**
     * Set lastCommentDate
     *
     * @param \DateTime $lastCommentDate
     *
     * @return Article
     */
    public function setLastCommentDate($lastCommentDate)
    {
        $this->lastCommentDate = $lastCommentDate;

        return $this;
    }

    /**
     * Get lastCommentDate
     *
     * @return \DateTime
     */
    public function getLastCommentDate()
    {
        return $this->lastCommentDate;
    }

    /**
     * Set lastCommentAuthor
     *
     * @param integer $lastCommentAuthor
     *
     * @return Article
     */
    public function setLastCommentAuthor($lastCommentAuthor)
    {
        $this->lastCommentAuthor = $lastCommentAuthor;

        return $this;
    }

    /**
     * Get lastCommentAuthor
     *
     * @return integer
     */
    public function getLastCommentAuthor()
    {
        return $this->lastCommentAuthor;
    }

    /**
     * Set headerImgExt
     *
     * @param string $headerImgExt
     *
     * @return Article
     */
    public function setHeaderImgExt($headerImgExt)
    {
        $this->headerImgExt = $headerImgExt;

        return $this;
    }

    /**
     * Get headerImgExt
     *
     * @return string
     */
    public function getHeaderImgExt()
    {
        return $this->headerImgExt;
    }
}
