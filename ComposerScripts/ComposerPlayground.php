<?php

namespace ComposerScripts;

use Composer\Script\Event;
//use Composer\Installer\PackageEvent;

class ComposerPlayground
{
    public static function postInstall(Event $event)
    {
        $event->getIO()->write("Show me after INSTALL/UPDATE command");
    }
}