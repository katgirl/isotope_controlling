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
 * Table tl_iso_order_charge
 */
$GLOBALS['TL_DCA']['tl_iso_order_charge'] = array
(

    // Config
    'config' => array
    (
        'dataContainer'               => 'Table',
        'ptable'					  => 'tl_iso_orders',
        'enableVersioning'            => true,
        'switchToEdit'                => true,
    ),

    // List
    'list' => array
    (
        'sorting' => array
        (
            'mode'                    => 2,
            'fields'                  => array('type'),
            'panelLayout'             => 'filter;sort,search,limit',
        ),
        'label' => array
        (
            'fields'				=> array('type', 'invoice_number', 'invoice_date', 'subTotal'),
            'showColumns'			=> true,
        ),
        'global_operations' => array
        (
            'all' => array
            (
                'label'				=> &$GLOBALS['TL_LANG']['MSC']['all'],
                'href'				=> 'act=select',
                'class'				=> 'header_edit_all',
                'attributes'		=> 'onclick="Backend.getScrollOffset();"'
            )
        ),
        'operations' => array
        (
            'edit' => array
            (
                'label'               => &$GLOBALS['TL_LANG']['tl_iso_order_charge']['edit'],
                'href'                => 'act=edit',
                'icon'                => 'edit.gif'
            ),
            'delete' => array
            (
                'label'               => &$GLOBALS['TL_LANG']['tl_iso_order_charge']['delete'],
                'href'                => 'act=delete',
                'icon'                => 'delete.gif',
                'attributes'          => 'onclick="if (!confirm(\'' . $GLOBALS['TL_LANG']['MSC']['deleteConfirm'] . '\')) return false; Backend.getScrollOffset();"'
            ),
            'show' => array
            (
                'label'               => &$GLOBALS['TL_LANG']['tl_iso_order_charge']['show'],
                'href'                => 'act=show',
                'icon'                => 'show.gif'
            ),
        )
    ),

    // Palettes
    'palettes' => array
    (
        'default'                     => '{controlling_legend},type,kreditor,editor;{charge_legend},counter_account,invoice_date,invoice_number,subTotal,vat,notes;',
    ),

    // Fields
    'fields' => array
    (
        'id' => array
        (
            'eval'				=> array('doNotShow'=>true),
        ),
        'pid' => array
        (
            'eval'				=> array('doNotShow'=>true),
        ),
        'type' => array
        (
            'label'           => &$GLOBALS['TL_LANG']['tl_iso_order_charge']['type'],
            'filter'          => true,
            'sorting'		  => true,
            'inputType'       => 'select',
            'options'         => $GLOBALS['ISO_CHARGE'],
            'reference'       => &$GLOBALS['TL_LANG']['ISO_CHARGE'],
            'eval'			  => array('chosen'=>true, 'tl_class'=>'w50 wizard', 'feEditable'=>true, 'feViewable'=>true, 'feGroup'=>'controlling'),
        ),
        'kreditor' => array
        (
            'label'           => &$GLOBALS['TL_LANG']['tl_iso_order_charge']['kreditor'],
            'exclude'         => true,
            'inputType'       => 'select',
            'foreignKey'      => 'tl_iso_kreditor.label',
            'eval'            => array('doNotCopy'=>true, 'mandatory'=>true, 'chosen'=>true, 'tl_class'=>'w50', 'feEditable'=>true, 'feViewable'=>true, 'feGroup'=>'charge')
        ),
        'editor' => array
        (
            'label'           => &$GLOBALS['TL_LANG']['tl_iso_order_charge']['editor'],
            'exclude'         => true,
            'inputType'       => 'select',
            'options_callback'=> array('tl_iso_order_charge', 'getMemberList'),
            'eval'            => array('doNotCopy'=>true, 'mandatory'=>true, 'chosen'=>true, 'tl_class'=>'w50')
        ),
        'vat' => array
        (
            'label'           => &$GLOBALS['TL_LANG']['tl_iso_order_charge']['vat'],
            'filter'          => true,
            'sorting'		  => true,
            'inputType'       => 'select',
            'foreignKey'      => 'tl_iso_tax_rate.name',
            'eval'			  => array('chosen'=>true, 'tl_class'=>'w50 wizard', 'feEditable'=>true, 'feViewable'=>true, 'feGroup'=>'charge'),
        ),
        'counter_account' => array
        (
            'label'           => &$GLOBALS['TL_LANG']['tl_iso_order_charge']['counter_account'],
            'filter'          => true,
            'sorting'		  => true,
            'inputType'       => 'select',
            'options'         => $GLOBALS['ISO_COUNTER_ACC'],
            'eval'			  => array('chosen'=>true, 'tl_class'=>'w50 wizard', 'feEditable'=>true, 'feViewable'=>true, 'feGroup'=>'charge'),
        ),
        'invoice_number' => array
        (
            'label'           => &$GLOBALS['TL_LANG']['tl_iso_order_charge']['invoice_number'],
            'exclude'		  => true,
            'search'	  	  => true,
            'inputType'	 	  => 'text',
            'eval'			  => array('mandatory'=>true, 'maxlength'=>255, 'tl_class'=>'w50', 'feEditable'=>true, 'feViewable'=>true, 'feGroup'=>'charge')
        ),
        'invoice_date' => array
        (
            'label'			  => &$GLOBALS['TL_LANG']['tl_iso_order_charge']['invoice_date'],
            'default'         => time(),
            'filter'		  => true,
            'sorting'		  => true,
            'inputType'	 	  => 'text',
            'eval'			  => array('mandatory'=>true, 'rgxp'=>'date', 'datepicker'=>true, 'tl_class'=>'clr w50 wizard', 'feEditable'=>true, 'feViewable'=>true, 'feGroup'=>'charge'),
        ),
        'subTotal' => array
        (
            'label'			  => &$GLOBALS['TL_LANG']['tl_iso_order_charge']['subTotal'],
            'filter'		  => true,
            'sorting'		  => true,
            'inputType'	 	  => 'text',
            'eval'			  => array('mandatory'=>true, 'tl_class'=>'w50', 'feEditable'=>true, 'feViewable'=>true, 'feGroup'=>'charge'),
        ),
        'notes' => array
        (
            'label'			    => &$GLOBALS['TL_LANG']['tl_iso_order_charge']['notes'],
            'inputType'			=> 'textarea',
            'eval'			    => array('tl_class'=>'clr', 'feEditable'=>true, 'feViewable'=>true, 'feGroup'=>'charge')
        ),
    )
);


/**
 * Class tl_module_iso_charge
 * Provide miscellaneous methods that are used by the data configuration array.
 */
class tl_iso_order_charge extends Backend
{

    /**
     * Load tl_iso_products data container and language file
     */
    public function __construct()
    {
        parent::__construct();
    }


    /**
     * Return all editable fields of table tl_iso_order_charge
     * @return array
     */
    public function getMemberList()
    {
        $return = array();

        $objMember = $this->Database->query("SELECT id, firstname, lastname FROM tl_member");

        while($objMember->next()) {
            $return[$objMember->id] = $objMember->firstname . ' ' . $objMember->lastname;
        }

        return $return;
    }

}