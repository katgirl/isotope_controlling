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
 * Backend modules
 */

$GLOBALS['BE_MOD']['isotope']['iso_orders']['tables'][] = 'tl_iso_order_charge';

if (!is_array($GLOBALS['BE_MOD']['accounts']))
{
    array_insert($GLOBALS['BE_MOD'], 1, array('accounts' => array()));
}

array_insert($GLOBALS['BE_MOD']['accounts'], 2, array
(
    'iso_kreditor' => array
    (
        'tables'				=> array('tl_iso_kreditor'),
        'icon'					=> 'system/modules/isotope_controlling/assets/img/kreditor.png',
    ),
));

$GLOBALS['ISO_CHARGE'] = array('setup', 'delivery', 'cups', 'lids', 'else');
$GLOBALS['ISO_COUNTER_ACC'] = array(903100,3100,3425,4601,904601);