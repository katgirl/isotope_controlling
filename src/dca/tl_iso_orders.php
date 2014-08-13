<?php if (!defined('TL_ROOT')) die('You cannot access this file directly!');

/**
 * PHP version 5
 * @copyright  Copyright (C) 2013 Kirsten Roschanski
 * @author     Kirsten Roschanski <kat@kirsten-roschanski.de>
 * @license    http://opensource.org/licenses/lgpl-3.0.html
 * @package    IsotopeControlling
 * @filesource
 */

/**
 * Table tl_iso_orders
 */

$GLOBALS['TL_DCA']['tl_iso_orders']['list']['operations']['charge'] = array
(
    'label'      => &$GLOBALS['TL_LANG']['tl_iso_orders']['charge'],
    'href'       => 'table=tl_iso_order_charge',
    'icon'       => 'system/modules/isotope_controlling/assets/img/money-coin.png'
);

$GLOBALS['TL_DCA']['tl_iso_orders']['config']['ctable'][] = 'tl_iso_order_charge';