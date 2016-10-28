<?php

namespace Derhaeuptling\MegaMenu;

use Contao\ContentModel;
use Contao\Controller;
use Contao\FrontendTemplate;

class Generator
{
    /**
     * Outsiders
     * @var array
     */
    private static $outsiders = [];

    /**
     * Add the outsider buffer
     *
     * @param string $buffer
     */
    public static function addOutsider($buffer)
    {
        static::$outsiders[] = $buffer;
    }

    /**
     * Return true if there are outsiders
     *
     * @return bool
     */
    public static function hasOutsiders()
    {
        return count(static::$outsiders) > 0;
    }

    /**
     * Get the outsiders
     *
     * @return array
     */
    public static function getOutsiders()
    {
        return static::$outsiders;
    }

    /**
     * Generate the menus for the page
     *
     * @param int $pageId
     *
     * @return string
     */
    public static function generate($pageId)
    {
        if (($menu = static::getMenuModel($pageId)) === null) {
            return '';
        }

        $template     = new FrontendTemplate($menu->template);
        $template->id = $pageId;

        $buffer = [];

        // Generate content elements
        if (($contentModels = $menu->getContentElements()) !== null) {
            /** @var ContentModel $contentModel */
            foreach ($contentModels as $contentModel) {
                $buffer[] = Controller::getContentElement($contentModel);
            }
        }

        $template->buffer = implode("\n", $buffer);

        return $template->parse();
    }

    /**
     * Return true if the page has menus
     *
     * @param int $pageId
     *
     * @return bool
     */
    public static function has($pageId)
    {
        return static::getMenuModel($pageId) !== null;
    }

    /**
     * Get the menu model
     *
     * @param int $pageId
     *
     * @return MenuModel|null
     */
    private static function getMenuModel($pageId)
    {
        return MenuModel::findByPage($pageId);
    }
}
