<?php

namespace Mrk\Composer;

use Composer\Script\Event;
use Composer\Installer\PackageEvent;

class ComposerPlayground
{
    public static function postInstall(Event $event)
    {
        //$installedPackage = $event->getOperation()->getPackage();
        $event->getIO()->write("Show me after INSTALL/UPDATE command");
    }
}