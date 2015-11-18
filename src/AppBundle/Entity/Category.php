<?php
namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity
 * @ORM\Table(name="categories")
 */

class Category {
    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue
     */
    protected $id;

    /**
     * @ORM\Column(type="string")
     * @Assert\NotBlank(message="Musisz podać nazwę kategorii!")
     */
    protected $name;

    /**
     * @ORM\Column(type="string")
     */
    protected $description;

    /**
     * @ORM\Column(type="integer")
     */
    protected $order;

    /**
     * @ORM\Column(type="string", length=4, options={"default":"png"})
     */
    protected $headerImgExt;

    /**
     * @ORM\Column(type="integer", options={"default":0})
     */
    protected $articles;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    protected $lastArticleId;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    protected $lastArticleAuthor;

    /**
     * @ORM\Column(type="date", nullable=true)
     */
    protected $lastArticleData;

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
     * Set name
     *
     * @param string $name
     *
     * @return Category
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return Category
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
     * Set order
     *
     * @param integer $order
     *
     * @return Category
     */
    public function setOrder($order)
    {
        $this->order = $order;

        return $this;
    }

    /**
     * Get order
     *
     * @return integer
     */
    public function getOrder()
    {
        return $this->order;
    }

    /**
     * Set headerImgExt
     *
     * @param string $headerImgExt
     *
     * @return Category
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

    /**
     * Set articles
     *
     * @param integer $articles
     *
     * @return Category
     */
    public function setArticles($articles)
    {
        $this->articles = $articles;

        return $this;
    }

    /**
     * Get articles
     *
     * @return integer
     */
    public function getArticles()
    {
        return $this->articles;
    }

    /**
     * Set lastArticleId
     *
     * @param integer $lastArticleId
     *
     * @return Category
     */
    public function setLastArticleId($lastArticleId)
    {
        $this->lastArticleId = $lastArticleId;

        return $this;
    }

    /**
     * Get lastArticleId
     *
     * @return integer
     */
    public function getLastArticleId()
    {
        return $this->lastArticleId;
    }

    /**
     * Set lastArticleAuthor
     *
     * @param integer $lastArticleAuthor
     *
     * @return Category
     */
    public function setLastArticleAuthor($lastArticleAuthor)
    {
        $this->lastArticleAuthor = $lastArticleAuthor;

        return $this;
    }

    /**
     * Get lastArticleAuthor
     *
     * @return integer
     */
    public function getLastArticleAuthor()
    {
        return $this->lastArticleAuthor;
    }

    /**
     * Set lastArticleData
     *
     * @param \DateTime $lastArticleData
     *
     * @return Category
     */
    public function setLastArticleData($lastArticleData)
    {
        $this->lastArticleData = $lastArticleData;

        return $this;
    }

    /**
     * Get lastArticleData
     *
     * @return \DateTime
     */
    public function getLastArticleData()
    {
        return $this->lastArticleData;
    }
}
