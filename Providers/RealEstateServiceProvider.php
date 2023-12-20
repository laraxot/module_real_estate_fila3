<?php

declare(strict_types=1);

namespace Modules\RealEstate\Providers;

use Modules\Xot\Providers\XotBaseServiceProvider;

class RealEstateServiceProvider extends XotBaseServiceProvider
{
    public string $module_name = 'realestate';

    protected string $module_dir = __DIR__;

    protected string $module_ns = __NAMESPACE__;
}
