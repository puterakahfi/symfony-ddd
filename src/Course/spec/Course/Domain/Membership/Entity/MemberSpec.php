<?php

namespace spec\Course\Domain\Membership\Entity;

use Course\Domain\Membership\Entity\Member;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class MemberSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType(Member::class);
    }
}
