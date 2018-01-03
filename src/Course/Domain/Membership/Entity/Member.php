<?php

namespace Course\Domain\Membership\Entity;

class Member
{
    private $username;
    public function __construct($username)
    {
        $this->username = $username;
    }

    public function username()
    {
        return $this->username;
    }
}
