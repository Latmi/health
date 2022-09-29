<?php
$arUrlRewrite=array (
    3 =>
        array (
            'CONDITION' => '#^/eksperty/([a-zA-Z0-9_-]+)/?(.*)#',
            'RULE' => 'ELEMENT_CODE=$1',
            'ID' => '',
            'PATH' => '/eksperty/detail.php',
            'SORT' => 100,
        ),
    2 =>
        array (
            'CONDITION' => '#^/voprosy/([a-zA-Z0-9_-]+)/?(.*)#',
            'RULE' => 'SECTION_CODE=$1',
            'ID' => '',
            'PATH' => '/voprosy/detail.php',
            'SORT' => 100,
        ),
    1 =>
        array (
            'CONDITION' => '#^/novosti/([a-zA-Z0-9_-]+)/?(.*)#',
            'RULE' => 'ELEMENT_CODE=$1',
            'ID' => '',
            'PATH' => '/novosti/detail.php',
            'SORT' => 100,
        ),
    0 =>
        array (
            'CONDITION' => '#^/rest/#',
            'RULE' => '',
            'ID' => NULL,
            'PATH' => '/bitrix/services/rest/index.php',
            'SORT' => 100,
        ),
);
