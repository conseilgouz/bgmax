<?php
/*------------------------------------------------------------------------
# mod_bgmax - bgMax
# ------------------------------------------------------------------------
# author    lomart
# copyright : Copyright (C) 2011-today lomart.fr All Rights Reserved.
# @license  : https://www.gnu.org/licenses/gpl-3.0.html GNU/GPL
# Website   : https://lomart.fr
# Technical Support:  Forum - https://forum.joomla.fr
-------------------------------------------------------------------------*/

namespace Lomart\Module\Bgmax\Site\Dispatcher;

use Joomla\CMS\Dispatcher\AbstractModuleDispatcher;
use Joomla\CMS\Helper\HelperFactoryAwareInterface;
use Joomla\CMS\Helper\HelperFactoryAwareTrait;

\defined('_JEXEC') or die;

/**
 * Dispatcher class for mod_alerte_meteo
 *
 * @since  4.2.0
 */
class Dispatcher extends AbstractModuleDispatcher implements HelperFactoryAwareInterface
{
    use HelperFactoryAwareTrait;

    /**
     * Returns the layout data.
     *
     * @return  array
     *
     * @since   4.2.0
     */
    protected function getLayoutData()
    {
        $data = parent::getLayoutData();

        return $data;
    }
}
