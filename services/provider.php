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

defined('_JEXEC') or die;

use Joomla\CMS\Extension\Service\Provider\HelperFactory;
use Joomla\CMS\Extension\Service\Provider\Module;
use Joomla\CMS\Extension\Service\Provider\ModuleDispatcherFactory;
use Joomla\DI\Container;
use Joomla\DI\ServiceProviderInterface;

/**
 * The alterte meteo module service provider.
 *
 * @since  4.2.0
 */
return new class () implements ServiceProviderInterface {
    /**
     * Registers the service provider with a DI container.
     *
     * @param   Container  $container  The DI container.
     *
     * @return  void
     *
     * @since   4.2.0
     */
    public function register(Container $container)
    {
        $container->registerServiceProvider(new ModuleDispatcherFactory('\\Lomart\\Module\\Bgmax'));
        $container->registerServiceProvider(new HelperFactory('\\Lomart\\Module\\Bgmax\\Site\\Helper\\BgMaxHelper'));

        $container->registerServiceProvider(new Module());
    }
};
