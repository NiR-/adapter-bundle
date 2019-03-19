<?php

/*
 * This file is part of php-cache organization.
 *
 * (c) 2015 Aaron Scherer <aequasi@gmail.com>, Tobias Nyholm <tobias.nyholm@gmail.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Cache\AdapterBundle\Factory;

use Cache\Adapter\Doctrine\DoctrineCachePool;
use Doctrine\Common\Cache\WinCacheCache;
use Psr\Log\LoggerInterface;

/**
 * @author Tobias Nyholm <tobias.nyholm@gmail.com>
 */
final class DoctrineWinCacheFactory extends AbstractDoctrineAdapterFactory
{
    /**
     * {@inheritdoc}
     */
    public function getAdapter(array $config, LoggerInterface $logger)
    {
        return new DoctrineCachePool(new WinCacheCache());
    }
}
