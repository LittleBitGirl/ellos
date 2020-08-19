<?php

namespace Webkul\Product\Providers;

use Konekt\Concord\BaseModuleServiceProvider;

class ModuleServiceProvider extends BaseModuleServiceProvider
{
    protected $models = [
        \Webkul\Product\Models\Product::class,
        \Webkul\Product\Models\AchievementAttributeValue::class,
        \Webkul\Product\Models\AchievementFlat::class,
        \Webkul\Product\Models\AchievementImage::class,
        \Webkul\Product\Models\ProductInventory::class,
        \Webkul\Product\Models\ProductOrderedInventory::class,
        \Webkul\Product\Models\ProductReview::class,
        \Webkul\Product\Models\ProductSalableInventory::class,
        \Webkul\Product\Models\ProductDownloadableSample::class,
        \Webkul\Product\Models\ProductDownloadableLink::class,
        \Webkul\Product\Models\ProductGroupedProduct::class,
        \Webkul\Product\Models\ProductBundleOption::class,
        \Webkul\Product\Models\ProductBundleOptionTranslation::class,
        \Webkul\Product\Models\ProductBundleOptionProduct::class,
    ];
}