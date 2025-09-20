<?php

declare(strict_types=1);

namespace mattstauffer\happybrad;

use craft\events\RegisterComponentTypesEvent;
use craft\services\Dashboard;
use yii\base\Event;

class Plugin extends \CraftCms\Cms\Plugin\Plugin
{
    protected array $widgets = [
        Widget::class,
    ];
}
