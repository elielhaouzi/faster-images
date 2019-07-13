<?php

namespace Statamic\Addons\FasterImages;

use Statamic\Extend\Listener;
use Statamic\Events\Data\AssetUploaded;

use ImageOptimizer\OptimizerFactory;

class StdoutLogger extends \Psr\Log\AbstractLogger { 
    public function log($level, $message, array $context = array()) { 
        echo $message."\n"; 
    }
}

class FasterImagesListener extends Listener
{
    /**
     * The events to be listened for, and the methods to call.
     *
     * @var array
     */
    public $events = [
        // AssetUploaded::class => 'handleAssetUploaded',
    ];

    /**
     * Optimize the new asset
     *
     * @param Statamic\Events\Data\AssetUploaded $event
     */
    public function handleAssetUploaded(AssetUploaded $event)
    {
        $asset = $event->asset;
        $factory = new OptimizerFactory(['ignore_errors' => false], new StdoutLogger());
        $optimizer = $factory->get();
        $optimizer->optimize($asset->resolvedPath());

        return $asset;
    }
}
