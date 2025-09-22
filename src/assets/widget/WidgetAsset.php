<?php

namespace mattstauffer\happybrad\assets\widget;

use craft\web\AssetBundle;

class WidgetAsset extends AssetBundle
{
    public $sourcePath = __DIR__ . '/dist';

    public $css = [
        'happybrad.css',
    ];
}
