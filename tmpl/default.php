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
// no direct access
defined( '_JEXEC' ) or die( 'Restricted access' );

use Joomla\CMS\Factory;
use Lomart\Module\Bgmax\Site\Helper\BgmaxHelper;

$bgmax_info = BgMaxHelper::getBgMaxInfos($params, $module->title);

$document =Factory::getApplication()->getDocument();
$document->addCustomTag($bgmax_info["head"]);

echo $bgmax_info["body"];

?>