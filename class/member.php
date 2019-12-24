<?php

class Member
{
    private $id;
    private $lastname;
    private $firstname;
    private $email;
    private $pass;
    private $address;
    private $date_signup;

    public function __construct(array $data = null)
    {
        if ($data) {
            $this->hydrate($data);
        }
    }
    public function hydrate(array $data)
    {
        foreach ($data as $index => $value) {
            $method = "set" . ucfirst($index);
            if (method_exists($this, $method)) {
                $this->$method($value);
            }
        }
    }

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getLastname()
    {
        return $this->lastname;
    }

    public function setLastname($lastname)
    {
        $this->lastname = $lastname;
    }

    public function getFirstname()
    {
        return $this->firstname;
    }

    public function setFirstname($firstname)
    {
        $this->firstname = $firstname;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function setEmail($email)
    {
        $this->email = $email;
    }

    public function getPass()
    {
        return $this->pass;
    }

    public function setPass($pass)
    {
        $this->pass = $pass;
    }

    public function getAddress()
    {
        return $this->address;
    }

    public function setAddress($address)
    {
        $this->address = $address;
    }

    public function getDate_signup()
    {
        return $this->date_signup;
    }

    public function setDate_signup($date_signup)
    {
        $this->date_signup = $date_signup;
    }
}
