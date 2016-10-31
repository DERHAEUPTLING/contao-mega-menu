<?php

/**
 * mega_menu extension for Contao Open Source CMS
 *
 * Copyright (C) 2016 derhaeuptling
 *
 * @author  derhaeuptling <https://derhaeuptling.com>
 * @author  Codefog <http://codefog.pl>
 * @author  Kamil Kuzminski <kamil.kuzminski@codefog.pl>
 * @license LGPL
 */

/**
 * Backend modules
 */
array_insert(
    $GLOBALS['BE_MOD']['design'],
    2,
    [
        'mega_menu' => [
            'tables' => ['tl_mega_menu', 'tl_content'],
            'icon'   => 'system/modules/mega_menu/assets/icon.png',
        ],
    ]
);

/**
 * Models
 */
$GLOBALS['TL_MODELS']['tl_mega_menu'] = 'Derhaeuptling\MegaMenu\MenuModel';
