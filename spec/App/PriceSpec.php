<?php

namespace spec\App;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

use App\Price;

class PriceSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('App\Price');
    }
}
