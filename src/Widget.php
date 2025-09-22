<?php

declare(strict_types=1);

namespace mattstauffer\happybrad;

use Craft;
use craft\helpers\Html;
use mattstauffer\happybrad\assets\widget\WidgetAsset;

class Widget extends \craft\base\Widget
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
        $bundle = Craft::$app->view->registerAssetBundle(WidgetAsset::class);

        return Html::img("$bundle->baseUrl/happybrad.jpg", [
            'alt' => 'OMG so handsome',
            'style' => ['width' => '100%'],
        ]);
    }
}
