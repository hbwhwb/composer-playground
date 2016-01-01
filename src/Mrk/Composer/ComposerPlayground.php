<?php

namespace Mrk\Composer;

use Composer\Script\Event;
use Composer\Installer\PackageEvent;

class ComposerPlayground
{
    public static function postPackageInstall(PackageEvent $event)
    {
        $installedPackage = $event->getOperation()->getPackage();
        print_r($installedPackage);
    }
}