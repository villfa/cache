<?php

/*
 * This file is part of php-cache\apc-adapter package.
 *
 * (c) 2015-2015 Aaron Scherer <aequasi@gmail.com>, Tobias Nyholm <tobias.nyholm@gmail.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Cache\Adapter\Apc\Tests;

use Cache\Adapter\Apc\ApcCachePool;
use Cache\IntegrationTests\TaggableCachePoolTest;

class IntegrationTagTest extends TaggableCachePoolTest
{
    public function createCachePool()
    {
        if (defined('HHVM_VERSION')) {
            $this->markTestSkipped();
        }

        return new ApcCachePool();
    }
}
