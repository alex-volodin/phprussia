<?php

declare(strict_types=1);

namespace App\Utils\Rector;

use Rector\Config\RectorConfig;
use Rector\Core\ValueObject\PhpVersion;

final class CommonRectorConfig
{
    private const ROOT_DIR = __DIR__.'/../..';

    public static function configure(RectorConfig $rectorConfig): void
    {
        $rectorConfig->paths([
            self::ROOT_DIR.'/src',
            self::ROOT_DIR.'/tests',
        ]);
        $rectorConfig->skip([
            self::ROOT_DIR.'/**/_data/*',
            self::ROOT_DIR.'/**/_output/*',
            self::ROOT_DIR.'/**/_support/_generated/*',
        ]);

        $rectorConfig->phpVersion(PhpVersion::PHP_81);
        $rectorConfig->parallel(seconds: 360);

        $rectorConfig->phpstanConfig(self::ROOT_DIR.'/utils/phpstan/phpstan.neon');

        if (is_file($symfonyContainerXmlPath = self::ROOT_DIR.'/var/cache/dev/App_KernelDevDebugContainer.xml')) {
            $rectorConfig->symfonyContainerXml($symfonyContainerXmlPath);
        }

        $rectorConfig->bootstrapFiles([self::ROOT_DIR.'/tests/bootstrap.php']);

        $rectorConfig->importNames();
        $rectorConfig->importShortClasses(false);
    }
}
