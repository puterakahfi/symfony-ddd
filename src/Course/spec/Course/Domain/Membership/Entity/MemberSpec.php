<?php

namespace spec\Course\Domain\Membership\Entity;

use Course\Domain\Membership\Entity\Member;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class MemberSpec extends ObjectBehavior
{
    public function it_is_initializable()
    {
        $username  = 'username';
        $this->beConstructedWith($username);
        $this->shouldHaveType(Member::class);
    }

    public function it_is_has_username()
    {
      $username  = 'username';
      $this->beConstructedWith($username);
      $this->username()->shouldReturn('username');
    }
}
