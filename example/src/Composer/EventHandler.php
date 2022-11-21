<?php

declare(strict_types=1);

namespace App\Composer;

use Composer\Installer\PackageEvent;
use Composer\Util\ProcessExecutor;

class EventHandler
{
    public static function postPackageUpdate(PackageEvent $event): void
    {
        if ($event->getOperation()->getTargetPackage()->getName() !== 'skyeng/marketing-cms-bundle') {
            return;
        }

        /** @var array<string, string> $commands */
        $commands = $event->getComposer()->getPackage()->getExtra()['marketing-cms-bundle']['post-update-cmds'] ?? [];

        foreach ($commands as $name => $command) {
            if ('y' !== $event->getIO()->ask(sprintf('Execute %s script? [y,n]', $name), 'y')) {
                continue;
            }

            (new ProcessExecutor($event->getIO()))->execute($command);
        }
    }
}
