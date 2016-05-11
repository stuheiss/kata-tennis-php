<?php
namespace My;

/*
0 = Love

1-0 => Fifteen-Love
2-0 => Thirty-Love
3-0 => Forty-Love
4-0 => Winner
4-3 => Advantage Player
4-4 => Deuce

2-2 => Thirty-All
1-1 => Fifteen-All

- Love is 0 points
- Fifteen is 1 points
- Thirty is 2 points
- Forty is 3 points
- Winner if at least 4 points and up 2
- Advantage if at least 4 points and up 1
- Deuce if at least 4 points and tied
*/

class TennisTest extends \PHPUnit_Framework_TestCase
{
    public function testSmoke()
    {
        $this->assertTrue(true);
    }
}
