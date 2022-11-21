<?php

declare(strict_types=1);

use App\Utils\Rector\CommonRectorConfig;
use Rector\Config\RectorConfig;
use Skyeng\MarketingCmsBundle\Utils\Rector\Set\MarketingCmsSetList;

return static function (RectorConfig $rectorConfig): void {
    CommonRectorConfig::configure($rectorConfig);

    $rectorConfig->sets([
        MarketingCmsSetList::UP_TO_LAST_VER,
    ]);
};
