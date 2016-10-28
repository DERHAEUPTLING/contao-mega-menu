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
 * Extend palettes
 */
$GLOBALS['TL_DCA']['tl_page']['palettes']['__selector__'][]     = 'megamenu_enable';
$GLOBALS['TL_DCA']['tl_page']['palettes']['regular']            = str_replace(
    'description;',
    'description;{megamenu_legend},megamenu_enable;',
    $GLOBALS['TL_DCA']['tl_page']['palettes']['regular']
);
$GLOBALS['TL_DCA']['tl_page']['subpalettes']['megamenu_enable'] = 'megamenu_hint,megamenu_menu';

/**
 * Add fields
 */
$GLOBALS['TL_DCA']['tl_page']['fields']['megamenu_enable'] = [
    'label'     => &$GLOBALS['TL_LANG']['tl_page']['megamenu_enable'],
    'exclude'   => true,
    'inputType' => 'checkbox',
    'eval'      => ['submitOnChange' => true, 'tl_class' => 'clr'],
    'sql'       => "char(1) NOT NULL default ''",
];

$GLOBALS['TL_DCA']['tl_page']['fields']['megamenu_hint'] = [
    'input_field_callback' => function () {
        \Contao\System::loadLanguageFile('tl_mega_menu');

        return sprintf(
            '<p class="tl_info" style="margin-top:10px;">%s</p>',
            $GLOBALS['TL_LANG']['tl_mega_menu']['hint']
        );
    },
];

$GLOBALS['TL_DCA']['tl_page']['fields']['megamenu_menu'] = [
    'label'      => &$GLOBALS['TL_LANG']['tl_page']['megamenu_menu'],
    'exclude'    => true,
    'inputType'  => 'select',
    'foreignKey' => 'tl_mega_menu.name',
    'eval'       => ['mandatory' => true, 'includeBlankOption' => true, 'tl_class' => 'clr'],
    'sql'        => "int(10) unsigned NOT NULL default '0'",
];
