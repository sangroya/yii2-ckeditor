<?php
/**
 *
 * full preset returns the full toolbar configuration set for CKEditor.
 *
 */
return [
    'height' => 400,
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
];
