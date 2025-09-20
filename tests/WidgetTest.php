<?php


it('is brad', function () {

    $name = mattstauffer\happybrad\Widget::displayName();

    expect($name)->toBe('Happy Brad');

});


it('renders the img tag', function () {

    $widget = new mattstauffer\happybrad\Widget();
    $html = $widget->getBodyHtml();

    expect($html)->toStartWith('<img');

});
