<?php
namespace AppBundle\Entity;

use Doctrine\Orm\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity
 * @ORM\Table(name="settings")
 */

class Settings {
    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue
     */
    protected $id;

    /**
     * @ORM\Column(type="string")
     * @Assert\NotBlank(message="Musisz podać tytuł portalu!")
     */
    protected $portalTitle;

    /**
     * @ORM\Column(type="string")
     * @Assert\NotBlank(message="Musisz podać opis!")
     */
    protected $portalDescription;

    /**
     * @ORM\Column(type="string")
     */
    protected $keywords;

    /**
     * @ORM\Column(type="integer", options={"default":0})
     */
    protected $usersTotal;

    /**
     * @ORM\Column(type="integer", options={"default":0})
     */
    protected $articlesTotal;

    /**
     * @ORM\Column(type="integer", options={"default":0})
     */
    protected $storiesTotal;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    protected $announce;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    protected $footer;

    /**
     * @ORM\Column(type="integer", options={"default":20})
     */
    protected $maxPm;

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
     * Set portalTitle
     *
     * @param string $portalTitle
     *
     * @return Settings
     */
    public function setPortalTitle($portalTitle)
    {
        $this->portalTitle = $portalTitle;

        return $this;
    }

    /**
     * Get portalTitle
     *
     * @return string
     */
    public function getPortalTitle()
    {
        return $this->portalTitle;
    }

    /**
     * Set portalDescription
     *
     * @param string $portalDescription
     *
     * @return Settings
     */
    public function setPortalDescription($portalDescription)
    {
        $this->portalDescription = $portalDescription;

        return $this;
    }

    /**
     * Get portalDescription
     *
     * @return string
     */
    public function getPortalDescription()
    {
        return $this->portalDescription;
    }

    /**
     * Set keywords
     *
     * @param string $keywords
     *
     * @return Settings
     */
    public function setKeywords($keywords)
    {
        $this->keywords = $keywords;

        return $this;
    }

    /**
     * Get keywords
     *
     * @return string
     */
    public function getKeywords()
    {
        return $this->keywords;
    }

    /**
     * Set usersTotal
     *
     * @param integer $usersTotal
     *
     * @return Settings
     */
    public function setUsersTotal($usersTotal)
    {
        $this->usersTotal = $usersTotal;

        return $this;
    }

    /**
     * Get usersTotal
     *
     * @return integer
     */
    public function getUsersTotal()
    {
        return $this->usersTotal;
    }

    /**
     * Set articlesTotal
     *
     * @param integer $articlesTotal
     *
     * @return Settings
     */
    public function setArticlesTotal($articlesTotal)
    {
        $this->articlesTotal = $articlesTotal;

        return $this;
    }

    /**
     * Get articlesTotal
     *
     * @return integer
     */
    public function getArticlesTotal()
    {
        return $this->articlesTotal;
    }

    /**
     * Set storiesTotal
     *
     * @param integer $storiesTotal
     *
     * @return Settings
     */
    public function setStoriesTotal($storiesTotal)
    {
        $this->storiesTotal = $storiesTotal;

        return $this;
    }

    /**
     * Get storiesTotal
     *
     * @return integer
     */
    public function getStoriesTotal()
    {
        return $this->storiesTotal;
    }

    /**
     * Set announce
     *
     * @param string $announce
     *
     * @return Settings
     */
    public function setAnnounce($announce)
    {
        $this->announce = $announce;

        return $this;
    }

    /**
     * Get announce
     *
     * @return string
     */
    public function getAnnounce()
    {
        return $this->announce;
    }

    /**
     * Set footer
     *
     * @param string $footer
     *
     * @return Settings
     */
    public function setFooter($footer)
    {
        $this->footer = $footer;

        return $this;
    }

    /**
     * Get footer
     *
     * @return string
     */
    public function getFooter()
    {
        return $this->footer;
    }

    /**
     * Set maxPm
     *
     * @param integer $maxPm
     *
     * @return Settings
     */
    public function setMaxPm($maxPm)
    {
        $this->maxPm = $maxPm;

        return $this;
    }

    /**
     * Get maxPm
     *
     * @return integer
     */
    public function getMaxPm()
    {
        return $this->maxPm;
    }
}
