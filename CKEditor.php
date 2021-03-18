<?php

namespace sangroya\ckeditor;

use yii\helpers\Html;
use yii\helpers\Json;
use yii\helpers\ArrayHelper;
use yii\web\JsExpression;
use yii\widgets\InputWidget;

/**
 * CKEditor renders a CKEditor4 js plugin for classic editing.
 * @author Parveen Sangroya <parveen0013@gmail.com>
 * @package sangroya\ckeditor
 */
class CKEditor extends InputWidget
{
    public $preset='standard';
    public $clientOptions = [];
    public $toolbar;
    public $uploadUrl;
    /**
     * @inheritdoc
     */
    public function init()
    {
        parent::init();
       // $this->initOptions();
    }

    /**
     * @inheritdoc
     */
    public function run()
    {
        if ($this->hasModel()) {
            echo Html::activeTextarea($this->model, $this->attribute, $this->options);
        } else {
            echo Html::textarea($this->name, $this->value, $this->options);
        }
        $this->registerPresets();
        $this->registerAssets($this->getView());
        $this->registerPlugin();

    }

    /**
     * Registers CKEditor plugin
     */
    protected function registerPlugin()
    {

        $js = [];

        $view = $this->getView();
        $id = $this->options['id'];

        $options = $this->clientOptions !== false && !empty($this->clientOptions)
            ? Json::encode($this->clientOptions)
            : '{}';

        $js[] = "CKEDITOR.replace('$id', $options);";
       $js[] = "sangroya.ckEditorWidget.registerOnChangeHandler('$id');";

        if (isset($this->clientOptions['filebrowserUploadUrl']) || isset($this->clientOptions['filebrowserImageUploadUrl'])) {
            $js[] = "sangroya.ckEditorWidget.registerCsrfImageUploadHandler();";
        }

        $this->view->registerJs(implode("\n", $js));
       
    }

    protected function registerAssets($view)
    {
        Assets::register($view);
    }
    protected function registerPresets(){
        $options = [];
        switch ($this->preset) {
            case 'custom':
                $preset = null;
                break;
            case 'basic':
            case 'full':
            case 'standard':
                $preset = 'presets/' . $this->preset . '.php';
                break;
            default:
                $preset = 'presets/standard.php';
        }
        if ($preset !== null) {
            $options = require($preset);
        }
        $this->clientOptions = ArrayHelper::merge($options, $this->clientOptions);
    }
}
