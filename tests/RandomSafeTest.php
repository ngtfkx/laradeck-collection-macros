<?php

namespace Ngtfkx\Laradeck\CollectionMacros\Tests;

use Illuminate\Support\Collection;
use Tests\TestCase;

class RandomSafeTest extends TestCase
{
    public function testForSelect()
    {
        $this->assertTrue(Collection::hasMacro('randomSafe'));

        $testArray = [
            1, 2, 3, 4, 5,
        ];

        $collect = new Collection($testArray);

        $randoms = $collect->randomSafe(10);

        $this->assertEquals(sizeof($testArray), sizeof($randoms));

        $random = $collect->randomSafe();

        $this->assertInternalType('integer', $random);
    }
}
