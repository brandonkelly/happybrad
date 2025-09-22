<?php

declare(strict_types=1);

namespace mattstauffer\happybrad;

use Craft;
use craft\helpers\Html;

class Widget extends \CraftCms\Cms\Dashboard\Widgets\Widget
{
    public static function displayName(): string
    {
        return 'Happy Brad';
    }

    public static function icon(): string
    {
        return __DIR__ . '/icon-mask.svg';
    }

    public function getBodyHtml(): ?string
    {
        $imageUrl = Plugin::getInstance()->asset(Plugin::IMAGE_PATH);

        return Html::img($imageUrl, [
            'alt' => 'OMG so handsome',
            'style' => ['width' => '100%'],
        ]);
    }
}
