<?php

namespace Alio\CliFileTree;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Alio\CliFileTree\Skeleton\SkeletonClass
 */
class CliFileTreeFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'cli-file-tree';
    }
}
