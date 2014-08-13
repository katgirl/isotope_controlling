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
 * Table tl_iso_kreditor
 */
$GLOBALS['TL_DCA']['tl_iso_kreditor'] = array
(

    // Config
    'config' => array
    (
        'dataContainer'       => 'Table',
        'enableVersioning'    => true,
    ),

    // List
    'list' => array
    ('sorting' => array
        (
            'mode'            => 2,
            'fields'           => array('label DESC'),
            'flag'             => 1,
            'panelLayout'     => 'filter;sort,search,limit'
        ),
        'label' => array
        (
            'fields'           => array('label'),
            'showColumns'     => true
        ),
        'global_operations' => array
        (
            'all' => array
            (
                'label'       => &$GLOBALS['TL_LANG']['MSC']['all'],
                'href'        => 'act=select',
                'class'       => 'header_edit_all',
                'attributes'  => 'onclick="Backend.getScrollOffset();"'
            )
        ),
        'operations' => array
        (
            'edit' => array
            (
                'label'       => &$GLOBALS['TL_LANG']['tl_iso_kreditor']['edit'],
                'href'        => 'act=edit',
                'icon'        => 'edit.gif'
            ),
            'copy' => array
            (
                'label'       => &$GLOBALS['TL_LANG']['tl_iso_kreditor']['copy'],
                'href'        => 'act=copy',
                'icon'        => 'copy.gif'
            ),
            'delete' => array
            (
                'label'       => &$GLOBALS['TL_LANG']['tl_iso_kreditor']['delete'],
                'href'        => 'act=delete',
                'icon'        => 'delete.gif',
                'attributes'  => 'onclick="if (!confirm(\'' . $GLOBALS['TL_LANG']['MSC']['deleteConfirm'] . '\')) return false; Backend.getScrollOffset();"'
            ),
            'show' => array
            (
                'label'       => &$GLOBALS['TL_LANG']['tl_iso_kreditor']['show'],
                'href'        => 'act=show',
                'icon'        => 'show.gif'
            )
        )
    ),

    // Palettes
    'palettes' => array
    (
        'default' => '{store_legend},label,kreditor_id;{personal_legend},salutation,firstname,lastname,company,vat_no;{address_legend},street_1,street_2,street_3,postal,city,country;{contact_legend},email,phone;{bank_legend:hide},bank,accountNumber,bankCode,iban,bic',
    ),

    // Fields
    'fields' => array
    (
        'label' => array
        (
            'label'          => &$GLOBALS['TL_LANG']['tl_iso_kreditor']['label'],
            'exclude'        => true,
            'search'         => true,
            'inputType'      => 'text',
            'eval'           => array('mandatory'=>true, 'maxlength'=>255, 'tl_class'=>'w50')
        ),
        'kreditor_id' => array
        (
            'label'          => &$GLOBALS['TL_LANG']['tl_iso_kreditor']['kreditor_id'],
            'exclude'        => true,
            'sorting'        => true,
            'inputType'      => 'text',
            'eval'           => array('mandatory'=>true, 'maxlength'=>10, 'rgxp'=>'digit', 'tl_class'=>'w50')
        ),
        'salutation' => array
        (
            'label'          => &$GLOBALS['TL_LANG']['tl_iso_kreditor']['salutation'],
            'exclude'        => true,
            'inputType'      => 'text',
            'eval'           => array('maxlength'=>255, 'tl_class'=>'clr'),
        ),
        'firstname' => array
        (
            'label'          => &$GLOBALS['TL_LANG']['tl_iso_kreditor']['firstname'],
            'exclude'        => true,
            'search'         => true,
            'inputType'      => 'text',
            'eval'           => array('maxlength'=>255, 'tl_class'=>'w50'),
        ),
        'lastname' => array
        (
            'label'          => &$GLOBALS['TL_LANG']['tl_iso_kreditor']['lastname'],
            'exclude'        => true,
            'search'         => true,
            'sorting'        => true,
            'flag'            => 1,
            'inputType'      => 'text',
            'eval'           => array('maxlength'=>255, 'tl_class'=>'w50'),
        ),
        'company' => array
        (
            'label'          => &$GLOBALS['TL_LANG']['tl_iso_kreditor']['company'],
            'exclude'        => true,
            'search'         => true,
            'sorting'        => true,
            'flag'            => 1,
            'inputType'      => 'text',
            'eval'           => array('maxlength'=>255, 'tl_class'=>'w50'),
        ),
        'vat_no' => array
        (
            'label'          => &$GLOBALS['TL_LANG']['tl_iso_kreditor']['vat_no'],
            'exclude'        => true,
            'search'         => true,
            'inputType'      => 'text',
            'eval'           => array('maxlength'=>255, 'tl_class'=>'w50'),
        ),
        'street_1' => array
        (
            'label'          => &$GLOBALS['TL_LANG']['tl_iso_kreditor']['street_1'],
            'exclude'        => true,
            'search'         => true,
            'inputType'      => 'text',
            'eval'           => array('maxlength'=>255, 'tl_class'=>'w50'),
        ),
        'street_2' => array
        (
            'label'          => &$GLOBALS['TL_LANG']['tl_iso_kreditor']['street_2'],
            'exclude'        => true,
            'search'         => true,
            'inputType'      => 'text',
            'eval'           => array('maxlength'=>255, 'tl_class'=>'w50'),
        ),
        'street_3' => array
        (
            'label'          => &$GLOBALS['TL_LANG']['tl_iso_kreditor']['street_3'],
            'exclude'        => true,
            'search'         => true,
            'inputType'      => 'text',
            'eval'           => array('maxlength'=>255, 'tl_class'=>'w50'),
        ),
        'postal' => array
        (
            'label'          => &$GLOBALS['TL_LANG']['tl_iso_kreditor']['postal'],
            'exclude'        => true,
            'search'         => true,
            'inputType'      => 'text',
            'eval'           => array('maxlength'=>32, 'tl_class'=>'clr w50'),
        ),
        'city' => array
        (
            'label'          => &$GLOBALS['TL_LANG']['tl_iso_kreditor']['city'],
            'exclude'        => true,
            'filter'          => true,
            'search'         => true,
            'sorting'        => true,
            'inputType'      => 'text',
            'eval'           => array('maxlength'=>255, 'tl_class'=>'w50'),
        ),
        'country' => array
        (
            'label'          => &$GLOBALS['TL_LANG']['tl_iso_kreditor']['country'],
            'exclude'        => true,
            'filter'          => true,
            'sorting'        => true,
            'inputType'      => 'select',
            'options'        => array_keys($this->getCountries()),
            'reference'      => $this->getCountries(),
            'eval'           => array('tl_class'=>'w50', 'chosen'=>true),
        ),
        'phone' => array
        (
            'label'          => &$GLOBALS['TL_LANG']['tl_iso_kreditor']['phone'],
            'exclude'        => true,
            'search'         => true,
            'inputType'      => 'text',
            'eval'           => array('maxlength'=>64, 'rgxp'=>'phone', 'tl_class'=>'w50'),
        ),
        'email' => array
        (
            'label'          => &$GLOBALS['TL_LANG']['tl_iso_kreditor']['email'],
            'exclude'        => true,
            'search'         => true,
            'inputType'      => 'text',
            'eval'           => array('maxlength'=>64, 'rgxp'=>'email', 'tl_class'=>'w50'),
        ),
        'accountNumber' => array
        (
            'label'          => &$GLOBALS['TL_LANG']['tl_iso_kreditor']['accountNumber'],
            'inputType'      => 'text',
            'exclude'        => true,
            'eval'           => array('maxlength'=>64, 'rgxp'=>'digit','tl_class'=>'w50'),
        #    'sql'            => "varchar(64) NOT NULL default ''"
        ),
        'bankCode' => array
        (
            'label'          => &$GLOBALS['TL_LANG']['tl_iso_kreditor']['bankCode'],
            'inputType'      => 'text',
            'exclude'        => true,
            'eval'           => array('maxlength'=>64, 'rgxp'=>'digit', 'tl_class'=>'w50'),
        #    'sql'            => "varchar(64) NOT NULL default ''"
        ),
        'bank' => array
        (
            'label'          => &$GLOBALS['TL_LANG']['tl_iso_kreditor']['bank'],
            'inputType'      => 'text',
            'exclude'        => true,
            'eval'           => array('maxlength'=>100),
        #    'sql'            => "varchar(100) NOT NULL default ''"
        ),
        'iban' => array
        (
            'label'          => &$GLOBALS['TL_LANG']['tl_iso_kreditor']['iban'],
            'inputType'      => 'text',
            'exclude'        => true,
            'eval'           => array('maxlength'=>64, 'tl_class'=>'w50'),
        #    'sql'            => "varchar(64) NOT NULL default ''"
        ),
        'bic' => array
        (
            'label'          => &$GLOBALS['TL_LANG']['tl_iso_kreditor']['bic'],
            'inputType'      => 'text',
            'exclude'        => true,
            'eval'           => array('maxlength'=>64, 'tl_class'=>'w50'),
        #    'sql'            => "varchar(64) NOT NULL default ''"
        ),
    )
);
