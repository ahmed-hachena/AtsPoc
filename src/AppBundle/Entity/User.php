<?php

namespace AppBundle\Entity;

/**
 * User
 */
class User
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var integer
     */
    private $index;

    /**
     * @var guid
     */
    private $guid;

    /**
     * @var boolean
     */
    private $isActive;

    /**
     * @var string
     */
    private $balance;

    /**
     * @var string
     */
    private $picture;

    /**
     * @var integer
     */
    private $age;

    /**
     * @var string
     */
    private $eyeColor;

    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $company;

    /**
     * @var string
     */
    private $email;

    /**
     * @var string
     */
    private $phone;

    /**
     * @var string
     */
    private $address;

    /**
     * @var string
     */
    private $about;

    /**
     * @var string
     */
    private $registered;

    /**
     * @var float
     */
    private $latitude;

    /**
     * @var float
     */
    private $longitude;

    /**
     * @var array
     */
    private $tags;

    /**
     * @var array
     */
    private $range;

    /**
     * @var array
     */
    private $friends;

    /**
     * @var string
     */
    private $greeting;

    /**
     * @var string
     */
    private $favoriteFruit;


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
     * Set index
     *
     * @param integer $index
     *
     * @return User
     */
    public function setIndex($index)
    {
        $this->index = $index;

        return $this;
    }

    /**
     * Get index
     *
     * @return integer
     */
    public function getIndex()
    {
        return $this->index;
    }

    /**
     * Set guid
     *
     * @param guid $guid
     *
     * @return User
     */
    public function setGuid($guid)
    {
        $this->guid = $guid;

        return $this;
    }

    /**
     * Get guid
     *
     * @return guid
     */
    public function getGuid()
    {
        return $this->guid;
    }

    /**
     * Set isActive
     *
     * @param boolean $isActive
     *
     * @return User
     */
    public function setIsActive($isActive)
    {
        $this->isActive = $isActive;

        return $this;
    }

    /**
     * Get isActive
     *
     * @return boolean
     */
    public function getIsActive()
    {
        return $this->isActive;
    }

    /**
     * Set balance
     *
     * @param string $balance
     *
     * @return User
     */
    public function setBalance($balance)
    {
        $this->balance = $balance;

        return $this;
    }

    /**
     * Get balance
     *
     * @return string
     */
    public function getBalance()
    {
        return $this->balance;
    }

    /**
     * Set picture
     *
     * @param string $picture
     *
     * @return User
     */
    public function setPicture($picture)
    {
        $this->picture = $picture;

        return $this;
    }

    /**
     * Get picture
     *
     * @return string
     */
    public function getPicture()
    {
        return $this->picture;
    }

    /**
     * Set age
     *
     * @param integer $age
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
     * @return integer
     */
    public function getAge()
    {
        return $this->age;
    }

    /**
     * Set eyeColor
     *
     * @param string $eyeColor
     *
     * @return User
     */
    public function setEyeColor($eyeColor)
    {
        $this->eyeColor = $eyeColor;

        return $this;
    }

    /**
     * Get eyeColor
     *
     * @return string
     */
    public function getEyeColor()
    {
        return $this->eyeColor;
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return User
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
     * Set company
     *
     * @param string $company
     *
     * @return User
     */
    public function setCompany($company)
    {
        $this->company = $company;

        return $this;
    }

    /**
     * Get company
     *
     * @return string
     */
    public function getCompany()
    {
        return $this->company;
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
     * Set phone
     *
     * @param string $phone
     *
     * @return User
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;

        return $this;
    }

    /**
     * Get phone
     *
     * @return string
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * Set address
     *
     * @param string $address
     *
     * @return User
     */
    public function setAddress($address)
    {
        $this->address = $address;

        return $this;
    }

    /**
     * Get address
     *
     * @return string
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Set about
     *
     * @param string $about
     *
     * @return User
     */
    public function setAbout($about)
    {
        $this->about = $about;

        return $this;
    }

    /**
     * Get about
     *
     * @return string
     */
    public function getAbout()
    {
        return $this->about;
    }

    /**
     * Set registered
     *
     * @param string $registered
     *
     * @return User
     */
    public function setRegistered($registered)
    {
        $this->registered = $registered;

        return $this;
    }

    /**
     * Get registered
     *
     * @return string
     */
    public function getRegistered()
    {
        return $this->registered;
    }

    /**
     * Set latitude
     *
     * @param float $latitude
     *
     * @return User
     */
    public function setLatitude($latitude)
    {
        $this->latitude = $latitude;

        return $this;
    }

    /**
     * Get latitude
     *
     * @return float
     */
    public function getLatitude()
    {
        return $this->latitude;
    }

    /**
     * Set longitude
     *
     * @param float $longitude
     *
     * @return User
     */
    public function setLongitude($longitude)
    {
        $this->longitude = $longitude;

        return $this;
    }

    /**
     * Get longitude
     *
     * @return float
     */
    public function getLongitude()
    {
        return $this->longitude;
    }

    /**
     * Set tags
     *
     * @param array $tags
     *
     * @return User
     */
    public function setTags($tags)
    {
        $this->tags = $tags;

        return $this;
    }

    /**
     * Get tags
     *
     * @return array
     */
    public function getTags()
    {
        return $this->tags;
    }

    /**
     * Set range
     *
     * @param array $range
     *
     * @return User
     */
    public function setRange($range)
    {
        $this->range = $range;

        return $this;
    }

    /**
     * Get range
     *
     * @return array
     */
    public function getRange()
    {
        return $this->range;
    }

    /**
     * Set friends
     *
     * @param array $friends
     *
     * @return User
     */
    public function setFriends($friends)
    {
        $this->friends = $friends;

        return $this;
    }

    /**
     * Get friends
     *
     * @return array
     */
    public function getFriends()
    {
        return $this->friends;
    }

    /**
     * Set greeting
     *
     * @param string $greeting
     *
     * @return User
     */
    public function setGreeting($greeting)
    {
        $this->greeting = $greeting;

        return $this;
    }

    /**
     * Get greeting
     *
     * @return string
     */
    public function getGreeting()
    {
        return $this->greeting;
    }

    /**
     * Set favoriteFruit
     *
     * @param string $favoriteFruit
     *
     * @return User
     */
    public function setFavoriteFruit($favoriteFruit)
    {
        $this->favoriteFruit = $favoriteFruit;

        return $this;
    }

    /**
     * Get favoriteFruit
     *
     * @return string
     */
    public function getFavoriteFruit()
    {
        return $this->favoriteFruit;
    }
}

