<?php
namespace sangroya\ckeditor;
use yii\web\AssetBundle;

class Assets extends AssetBundle
{
    public $sourcePath = '@vendor/sangroya/yii2-ckeditor/assets/';
    public $css = [
    ];

    public $js = [
        'ckeditor.js',
        'config.js',
        'sample.js',
        'ckeditor-collection.js',
        'sangroya-ckeditor.widget.js',
    ];

    public $depends = [
    ];
}