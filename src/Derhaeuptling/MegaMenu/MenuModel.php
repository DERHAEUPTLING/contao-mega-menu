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

namespace Derhaeuptling\MegaMenu;

use Contao\ContentModel;
use Contao\Model;
use Contao\PageModel;

class MenuModel extends Model
{
    /**
     * Table name
     * @var string
     */
    protected static $strTable = 'tl_mega_menu';

    /**
     * Get the content elements
     *
     * @return \ContentModel|\ContentModel[]|\Model\Collection|null
     */
    public function getContentElements()
    {
        return ContentModel::findPublishedByPidAndTable($this->id, static::getTable());
    }

    /**
     * Find the record by page ID
     *
     * @param int $pageId
     *
     * @return MenuModel|null
     */
    public static function findByPage($pageId)
    {
        if (($pageModel = PageModel::findByPk($pageId)) === null
            || !$pageModel->megamenu_enable
        ) {
            return null;
        }

        return static::findByPk($pageModel->megamenu_menu);
    }
}
