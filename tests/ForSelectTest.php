<?php

namespace Ngtfkx\Laradeck\CollectionMacros\Tests;

use Illuminate\Support\Collection;
use Tests\TestCase;

class ForSelectTest extends TestCase
{
    public function testForSelect()
    {
        $this->assertTrue(Collection::hasMacro('forSelect'));

        $this->assertTrue(Collection::hasMacro('forSelectWithPrepend'));

        $testArray = [
            ['id' => '1', 'name' => 'First', ],
            ['id' => '2', 'name' => 'Second', ],
            ['id' => '3', 'name' => 'Third', ],
        ];

        $expectedArray = [
            '1' => 'First',
            '2' => 'Second',
            '3' => 'Third',
        ];

        $collect = new Collection($testArray);

        $this->assertEquals($expectedArray, $collect->forSelect('name'));

        $testArray = [
            ['pid' => '1', 'line' => 'First', ],
            ['pid' => '2', 'line' => 'Second', ],
            ['pid' => '3', 'line' => 'Third', ],
        ];

        $collect = new Collection($testArray);

        $this->assertEquals($expectedArray, $collect->forSelect('line', 'pid'));

        $this->assertEquals(['' => 'Выбрать'] + $expectedArray, $collect->forSelectWithPrepend('line', 'pid', ['' => 'Выбрать']));
    }
}
