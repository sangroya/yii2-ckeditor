yii2-ckeditor5
==============
CKEditor for Yii with static build (https://docs.ckeditor.com/ckeditor4/latest/builds/)

Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
php composer.phar require --prefer-dist sangroya/yii2-ckeditor5 "*"
```

or add

```
"sangroya/yii2-ckeditor": "*"
```

to the require section of your `composer.json` file.


Usage
-----

Once the extension is installed, simply use it in your code by  :

```php
use sangroya\ckeditor\CKEditor;


<?= $form->field($model, 'text')->widget(CKEditor::className(), [
        'options' => ['rows' => 6],
        'preset'=>'full',
    ]) ?>```
    
Upload Url
-----

```php
use sangroya\ckeditor\CKEditor;


<?= $form->field($model, 'text')->widget(CKEditor::className(), [
        'options' => ['rows' => 6],
        'preset'=>'full',
        'clientOptions'=>[
              'filebrowserUploadUrl' =>  '/site/ckeditor-image-upload',//this will be the url where you want to ckeditor send the post request with file data
         ], 
    ]) ?>```

Custom Toolbar
-----
```php
use sangroya\ckeditor\CKEditor;


<?= $form->field($model, 'text')->widget(CKEditor::className(), [
        'options' => ['rows' => 6],
        'preset'=>'full',
        'clientOptions'=>[
              'filebrowserUploadUrl' =>  '/site/ckeditor-image-upload',//this will be the url where you want to ckeditor send the post request with file data
               'toolbarGroups' => [
        
                            ['name' => 'document', 'groups' => ['mode', 'document', 'doctools']],

                            ['name' => 'clipboard', 'groups' => ['clipboard', 'undo']],

                            ['name' => 'forms'],

                            ['name' => 'basicstyles', 'groups' => ['basicstyles', 'colors','cleanup']],
                            '/',

                            ['name' => 'paragraph', 'groups' => [ 'list', 'indent', 'blocks', 'align', 'bidi' , 'paragraph' ]],

                            ['name' => 'links'],

                            ['name' => 'insert'],
                            

                            '/',['name'=>'align'],

                            ['name' => 'styles'],

                            ['name' => 'blocks'],

                            ['name' => 'colors'],

                            ['name' => 'tools'],

                            ['name' => 'others'],
                            ['about' => 'about'],

                    
                    ],
         ], 
    ]) ?>```