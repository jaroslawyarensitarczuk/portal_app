<?php
namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity
 * @ORM\Table(name="users")
 */

class User {
    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue
     */
    protected $id;

    /**
     * @ORM\Column(type="string", length=35)
     * @Assert\NotBlank(message="Musisz podać login!")
     * @Assert\Length(min=5, max=35,
     * minMessage="Login musi składać się z co najmniej {{ limit }} znaków!",
     * maxMessage="Login może składać się maksymalnie z {{ limit }} znaków!")
     */
    protected $login;

    /**
     * @ORM\Column(type="string", length=32)
     * @Assert\NotBlank(message="Musisz podać hasło!")
     * @Assert\Length(min=8,
     * minMessage="Hasło musi zawierać co najmniej {{ limit }} znaków!")
     */
    protected $password;

    /**
     * @ORM\Column(type="string", length=40)
     */
    protected $passwordHash;

    /**
     * @ORM\Column(type="string")
     * @Assert\Email(checkMX=true,
     * message="Podany adres e-mail jest nieprawidłowy!")
     */
    protected $email;

    /**
     * @ORM\Column(type="date")
     */
    protected $registerDate;

    /**
     * @ORM\Column(type="smallint", options={"default":0});
     */
    protected $accountStatus;

    /**
     * @ORM\Column(type="smallint", options={"default":0})
     */
    protected $usersGroup;

    /**
     * @ORM\Column(type="smallint", options={"default":0})
     */
    protected $isOnline;

    /**
     * @ORM\Column(type="string")
     */
    protected $lastOnline = "Nigdy";

    /**
     * @ORM\Column(type="integer", options={"default":0})
     */
    protected $articles;

    /**
     * @ORM\Column(type="integer", options={"default":0})
     */
    protected $stories;

    /**
     * @ORM\Column(type="integer", options={"default":0})
     */
    protected $reputation;

    /**
     * @ORM\Column(type="string", length=4, options={"default":"png"})
     */
    protected $avatarExt;

    /**
     * @ORM\Column(type="string", nullable=true)
     */
    protected $signature;

    /**
     * @ORM\Column(type="string", length=1, nullable=true)
     */
    protected $sex;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    protected $realName;

    /**
     * @ORM\Column(type="date")
     * @Assert\LessThanOrEqual("-16 years", message="Musisz mieć co najmniej 16 lat żeby korzystać z portalu!")
     */
    protected $birthDate;

    /**
     * @ORM\Column(type="string", length=3)
     */
    protected $age;

    /**
     * @ORM\Column(type="string", length=70, nullable=true)
     */
    protected $city;

    /**
     * @ORM\Column(type="string", nullable=true)
     */
    protected $hobbies;

    /**
     * @ORM\Column(type="string", length=20, nullable=true)
     */
    protected $ggNumber;

    /**
     * @ORM\Column(type="string", nullable=true)
     */
    protected $skypeId;

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
     * Set login
     *
     * @param string $login
     *
     * @return User
     */
    public function setLogin($login)
    {
        $this->login = $login;

        return $this;
    }

    /**
     * Get login
     *
     * @return string
     */
    public function getLogin()
    {
        return $this->login;
    }

    /**
     * Set password
     *
     * @param string $password
     *
     * @return User
     */
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Get password
     *
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set passwordHash
     *
     * @param string $passwordHash
     *
     * @return User
     */
    public function setPasswordHash($passwordHash)
    {
        $this->passwordHash = $passwordHash;

        return $this;
    }

    /**
     * Get passwordHash
     *
     * @return string
     */
    public function getPasswordHash()
    {
        return $this->passwordHash;
    }

    /**
     * Set email
     *
     * @param string $email
     *
     * @return User
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set registerDate
     *
     * @param \DateTime $registerDate
     *
     * @return User
     */
    public function setRegisterDate($registerDate)
    {
        $this->registerDate = $registerDate;

        return $this;
    }

    /**
     * Get registerDate
     *
     * @return \DateTime
     */
    public function getRegisterDate()
    {
        return $this->registerDate;
    }

    /**
     * Set accountStatus
     *
     * @param integer $accountStatus
     *
     * @return User
     */
    public function setAccountStatus($accountStatus)
    {
        $this->accountStatus = $accountStatus;

        return $this;
    }

    /**
     * Get accountStatus
     *
     * @return integer
     */
    public function getAccountStatus()
    {
        return $this->accountStatus;
    }

    /**
     * Set usersGroup
     *
     * @param integer $usersGroup
     *
     * @return User
     */
    public function setUsersGroup($usersGroup)
    {
        $this->usersGroup = $usersGroup;

        return $this;
    }

    /**
     * Get usersGroup
     *
     * @return integer
     */
    public function getUsersGroup()
    {
        return $this->usersGroup;
    }

    /**
     * Set isOnline
     *
     * @param integer $isOnline
     *
     * @return User
     */
    public function setIsOnline($isOnline)
    {
        $this->isOnline = $isOnline;

        return $this;
    }

    /**
     * Get isOnline
     *
     * @return integer
     */
    public function getIsOnline()
    {
        return $this->isOnline;
    }

    /**
     * Set lastOnline
     *
     * @param string $lastOnline
     *
     * @return User
     */
    public function setLastOnline($lastOnline)
    {
        $this->lastOnline = $lastOnline;

        return $this;
    }

    /**
     * Get lastOnline
     *
     * @return string
     */
    public function getLastOnline()
    {
        return $this->lastOnline;
    }

    /**
     * Set articles
     *
     * @param integer $articles
     *
     * @return User
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
     * Set stories
     *
     * @param integer $stories
     *
     * @return User
     */
    public function setStories($stories)
    {
        $this->stories = $stories;

        return $this;
    }

    /**
     * Get stories
     *
     * @return integer
     */
    public function getStories()
    {
        return $this->stories;
    }

    /**
     * Set reputation
     *
     * @param integer $reputation
     *
     * @return User
     */
    public function setReputation($reputation)
    {
        $this->reputation = $reputation;

        return $this;
    }

    /**
     * Get reputation
     *
     * @return integer
     */
    public function getReputation()
    {
        return $this->reputation;
    }

    /**
     * Set avatarExt
     *
     * @param string $avatarExt
     *
     * @return User
     */
    public function setAvatarExt($avatarExt)
    {
        $this->avatarExt = $avatarExt;

        return $this;
    }

    /**
     * Get avatarExt
     *
     * @return string
     */
    public function getAvatarExt()
    {
        return $this->avatarExt;
    }

    /**
     * Set signature
     *
     * @param string $signature
     *
     * @return User
     */
    public function setSignature($signature)
    {
        $this->signature = $signature;

        return $this;
    }

    /**
     * Get signature
     *
     * @return string
     */
    public function getSignature()
    {
        return $this->signature;
    }

    /**
     * Set sex
     *
     * @param string $sex
     *
     * @return User
     */
    public function setSex($sex)
    {
        $this->sex = $sex;

        return $this;
    }

    /**
     * Get sex
     *
     * @return string
     */
    public function getSex()
    {
        return $this->sex;
    }

    /**
     * Set realName
     *
     * @param string $realName
     *
     * @return User
     */
    public function setRealName($realName)
    {
        $this->realName = $realName;

        return $this;
    }

    /**
     * Get realName
     *
     * @return string
     */
    public function getRealName()
    {
        return $this->realName;
    }

    /**
     * Set birthDate
     *
     * @param \DateTime $birthDate
     *
     * @return User
     */
    public function setBirthDate($birthDate)
    {
        $this->birthDate = $birthDate;

        return $this;
    }

    /**
     * Get birthDate
     *
     * @return \DateTime
     */
    public function getBirthDate()
    {
        return $this->birthDate;
    }

    /**
     * Set age
     *
     * @param string $age
     *
     * @return User
     */
    public function setAge($age)
    {
        $this->age = $age;

        return $this;
    }

    /**
     * Get age
     *
     * @return string
     */
    public function getAge()
    {
        return $this->age;
    }

    /**
     * Set city
     *
     * @param string $city
     *
     * @return User
     */
    public function setCity($city)
    {
        $this->city = $city;

        return $this;
    }

    /**
     * Get city
     *
     * @return string
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * Set hobbies
     *
     * @param string $hobbies
     *
     * @return User
     */
    public function setHobbies($hobbies)
    {
        $this->hobbies = $hobbies;

        return $this;
    }

    /**
     * Get hobbies
     *
     * @return string
     */
    public function getHobbies()
    {
        return $this->hobbies;
    }

    /**
     * Set ggNumber
     *
     * @param string $ggNumber
     *
     * @return User
     */
    public function setGgNumber($ggNumber)
    {
        $this->ggNumber = $ggNumber;

        return $this;
    }

    /**
     * Get ggNumber
     *
     * @return string
     */
    public function getGgNumber()
    {
        return $this->ggNumber;
    }

    /**
     * Set skypeId
     *
     * @param string $skypeId
     *
     * @return User
     */
    public function setSkypeId($skypeId)
    {
        $this->skypeId = $skypeId;

        return $this;
    }

    /**
     * Get skypeId
     *
     * @return string
     */
    public function getSkypeId()
    {
        return $this->skypeId;
    }
}
