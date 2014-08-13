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
 * Extend default palette
 */
$GLOBALS['TL_DCA']['tl_member']['palettes']['default'] = '{customer_legend},debitor_id;' . $GLOBALS['TL_DCA']['tl_member']['palettes']['default'];
$GLOBALS['TL_DCA']['tl_member']['palettes']['default'] =
    str_replace(
        ';{groups',
        ';{bank_legend:hide},bank,accountNumber,bankCode,iban,bic;{groups',
        $GLOBALS['TL_DCA']['tl_member']['palettes']['default']
    );
/**
 * Add fields to tl_member
 */
$GLOBALS['TL_DCA']['tl_member']['fields']['debitor_id'] = array
(
    'label'                 => &$GLOBALS['TL_LANG']['tl_member']['debitor_id'],
    'exclude'               => true,
    'inputType'             => 'text',
    'eval'                  => array('maxlength'=>25, 'tl_class'=>'w50','feEditable'=>true, 'feViewable'=>true, 'feGroup'=>'personal'),
#    'sql'                   => "int(10) unsigned NOT NULL default '0'"
);
$GLOBALS['TL_DCA']['tl_member']['fields']['accountNumber'] = array
(
    'label'                 => &$GLOBALS['TL_LANG']['tl_member']['accountNumber'],
    'inputType'             => 'text',
    'exclude'   			=> true,
    'eval'                  => array('maxlength'=>64, 'tl_class'=>'w50', 'rgxp'=>'digit', 'feEditable'=>true, 'feViewable'=>true, 'feGroup'=>'bank'),
#    'sql'                   => "varchar(64) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_member']['fields']['bankCode'] = array
(
    'label'                 => &$GLOBALS['TL_LANG']['tl_member']['bankCode'],
    'inputType'             => 'text',
    'exclude'   			=> true,
    'eval'                  => array('maxlength'=>64, 'rgxp'=>'digit', 'tl_class'=>'w50', 'feEditable'=>true, 'feViewable'=>true, 'feGroup'=>'bank'),
#    'sql'                   => "varchar(64) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_member']['fields']['bank'] = array
(
    'label'                 => &$GLOBALS['TL_LANG']['tl_member']['bank'],
    'inputType'             => 'text',
    'exclude'   			=> true,
    'eval'                  => array('maxlength'=>100, 'feEditable'=>true, 'feViewable'=>true, 'feGroup'=>'bank'),
#    'sql'                   => "varchar(100) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_member']['fields']['iban'] = array
(
    'label'                 => &$GLOBALS['TL_LANG']['tl_member']['iban'],
    'inputType'             => 'text',
    'exclude'   			=> true,
    'eval'                  => array('maxlength'=>64, 'tl_class'=>'w50', 'feEditable'=>true, 'feViewable'=>true, 'feGroup'=>'bank'),
#    'sql'                   => "varchar(64) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_member']['fields']['bic'] = array
(
    'label'                 => &$GLOBALS['TL_LANG']['tl_member']['bic'],
    'inputType'             => 'text',
    'exclude'   			=> true,
    'eval'                  => array('maxlength'=>64, 'tl_class'=>'w50', 'feEditable'=>true, 'feViewable'=>true, 'feGroup'=>'bank'),
#    'sql'                   => "varchar(64) NOT NULL default ''"
);