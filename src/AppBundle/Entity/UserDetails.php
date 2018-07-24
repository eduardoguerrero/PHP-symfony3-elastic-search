<?php

namespace AppBundle\Entity;

/**
 * UserDetails
 */
class UserDetails {

    /**
     * @var string
     */
    private $username;

    /**
     * @var string
     */
    private $firstName;

    /**
     * @var string
     */
    private $lastName;

    /**
     * @var string
     */
    private $gender;

    /**
     * @var string
     */
    private $password;

    /**
     * @var boolean
     */
    private $status;

    /**
     * @ORM\Column(type="integer")
     * @ORM\id
     * @ORM\Column(name="id", type="integer").
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * Set username
     *
     * @param string $username
     *
     * @return UserDetails
     */
    public function setUsername($username) {
        $this->username = $username;

        return $this;
    }

    /**
     * Get username
     *
     * @return string
     */
    public function getUsername() {
        return $this->username;
    }

    /**
     * Set firstName
     *
     * @param string $firstName
     *
     * @return UserDetails
     */
    public function setFirstName($firstName) {
        $this->firstName = $firstName;

        return $this;
    }

    /**
     * Get firstName
     *
     * @return string
     */
    public function getFirstName() {
        return $this->firstName;
    }

    /**
     * Set lastName
     *
     * @param string $lastName
     *
     * @return UserDetails
     */
    public function setLastName($lastName) {
        $this->lastName = $lastName;

        return $this;
    }

    /**
     * Get lastName
     *
     * @return string
     */
    public function getLastName() {
        return $this->lastName;
    }

    /**
     * Set gender
     *
     * @param string $gender
     *
     * @return UserDetails
     */
    public function setGender($gender) {
        $this->gender = $gender;

        return $this;
    }

    /**
     * Get gender
     *
     * @return string
     */
    public function getGender() {
        return $this->gender;
    }

    /**
     * Set password
     *
     * @param string $password
     *
     * @return UserDetails
     */
    public function setPassword($password) {
        $this->password = $password;

        return $this;
    }

    /**
     * Get password
     *
     * @return string
     */
    public function getPassword() {
        return $this->password;
    }

    /**
     * Set status
     *
     * @param boolean $status
     *
     * @return UserDetails
     */
    public function setStatus($status) {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return boolean
     */
    public function getStatus() {
        return $this->status;
    }

    /**
     * Get userId
     *
     * @return integer
     */
    public function getId() 
    {
        return $this->id;
    }

}
