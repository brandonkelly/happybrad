<?php

declare(strict_types=1);

namespace mattstauffer\happybrad;

use craft\events\RegisterComponentTypesEvent;
use craft\services\Dashboard;
use CraftCms\Cms\Plugin\Plugins;
use yii\base\Event;

class Plugin extends \CraftCms\Cms\Plugin\Plugin
{
    const string IMAGE_PATH = 'widget/happybrad.jpg';
    const string CSS_PATH = 'widget/happybrad.css';

    protected array $publishables = [
        __DIR__ . '/assets/widget/dist/happybrad.jpg' => self::IMAGE_PATH,
    ];

    protected array $styles = [
        __DIR__ . '/assets/widget/dist/happybrad.css' => self::CSS_PATH,
    ];

    protected array $widgets = [
        Widget::class,
    ];
}
