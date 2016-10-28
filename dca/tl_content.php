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
 * Dynamically add the parent table
 */
if (\Contao\Input::get('do') === 'mega_menu') {
    $GLOBALS['TL_DCA']['tl_content']['config']['ptable']                  = 'tl_mega_menu';
    $GLOBALS['TL_DCA']['tl_content']['list']['sorting']['headerFields'][] = 'name';
}
