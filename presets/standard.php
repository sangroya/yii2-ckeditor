<?php
/**
 *
 * standard preset returns the basic toolbar configuration set for CKEditor.
 *
 */
return [
    'height' => 300,
    'toolbarCanCollapse'=>true,
    'toolbarStartupExpanded'=>false,
     'autoCapsFirstLetter'=>true,
    'toolbarGroups' => [
        ['name' => 'clipboard', 'groups' => ['mode', 'undo', 'selection', 'clipboard', 'doctools']],
        ['name' => 'editing', 'groups' => ['tools', 'about']],
        '/',
        ['name' => 'paragraph', 'groups' => ['templates', 'list', 'indent', 'align']],
        ['name' => 'insert'],
        '/',
        ['name' => 'basicstyles', 'groups' => ['basicstyles', 'cleanup']],
        ['name' => 'colors'],
        ['name' => 'links'],
        ['name' => 'others'],
    ],
    'removeButtons' => 'Smiley,Iframe'
];
