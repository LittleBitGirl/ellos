<?php

namespace Tests\Unit\Product\Helpers;

use UnitTester;
use Webkul\Product\Helpers\AchievementType;

class ProductTypeCest
{
    public function testHasVariants(UnitTester $I)
    {
        $I->assertTrue(AchievementType::hasVariants('configurable'));
        $I->assertFalse(AchievementType::hasVariants('simple'));
    }
}
