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
 * Register PSR-0 namespace
 */
if (class_exists('NamespaceClassLoader')) {
    NamespaceClassLoader::add('Derhaeuptling\MegaMenu', 'system/modules/mega_menu/src');
}

/**
 * Register the templates
 */
\Contao\TemplateLoader::addFiles(
    [
        'mega_menu_default'     => 'system/modules/mega_menu/templates/menus',
        'nav_mega_menu_inside'  => 'system/modules/mega_menu/templates/navigation',
        'nav_mega_menu_outside' => 'system/modules/mega_menu/templates/navigation',
    ]
);
