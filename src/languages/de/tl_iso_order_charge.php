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
 * Fields
 */
$GLOBALS['TL_LANG']['tl_iso_order_charge']['type'][0] = 'Leistungsart';
$GLOBALS['TL_LANG']['tl_iso_order_charge']['type'][1] = '';
$GLOBALS['TL_LANG']['tl_iso_order_charge']['counter_account'][0] = 'Gegenkonto';
$GLOBALS['TL_LANG']['tl_iso_order_charge']['counter_account'][1] = '';
$GLOBALS['TL_LANG']['tl_iso_order_charge']['kreditor'][0] = 'Konto';
$GLOBALS['TL_LANG']['tl_iso_order_charge']['kreditor'][1] = '';
$GLOBALS['TL_LANG']['tl_iso_order_charge']['invoice_number'][0] = 'Belegnummer';
$GLOBALS['TL_LANG']['tl_iso_order_charge']['invoice_number'][1] = '';
$GLOBALS['TL_LANG']['tl_iso_order_charge']['invoice_date'][0] = 'Datum';
$GLOBALS['TL_LANG']['tl_iso_order_charge']['invoice_date'][1] = '';
$GLOBALS['TL_LANG']['tl_iso_order_charge']['subTotal'][0] = 'Betrag';
$GLOBALS['TL_LANG']['tl_iso_order_charge']['subTotal'][1] = '';
$GLOBALS['TL_LANG']['tl_iso_order_charge']['notes'][0] = 'Buchungstext';
$GLOBALS['TL_LANG']['tl_iso_order_charge']['notes'][1] = '';
$GLOBALS['TL_LANG']['tl_iso_order_charge']['vat'][0] = 'Umsatzsteuer';
$GLOBALS['TL_LANG']['tl_iso_order_charge']['vat'][1] = '';
$GLOBALS['TL_LANG']['tl_iso_order_charge']['editor'][0] = 'Bearbeiter/in';
$GLOBALS['TL_LANG']['tl_iso_order_charge']['editor'][1] = '';



/**
 * Legends
 */
$GLOBALS['TL_LANG']['tl_iso_order_charge']['charge_legend'] = 'Kreditordaten';
$GLOBALS['TL_LANG']['tl_iso_order_charge']['controlling_legend'] = 'Controllingdaten';

/**
* Buttons
*/
$GLOBALS['TL_LANG']['tl_iso_order_charge']['new']        = array('Neue Rechnung', 'Einen neue Rechnung eingeben');
$GLOBALS['TL_LANG']['tl_iso_order_charge']['show']       = array('Rechnungsdetails', 'Die Details des Rechnungs ID %s anzeigen');
$GLOBALS['TL_LANG']['tl_iso_order_charge']['edit']       = array('Rechnung bearbeiten', 'Rechnung ID %s bearbeiten');
$GLOBALS['TL_LANG']['tl_iso_order_charge']['copy']       = array('Rechnung duplizieren', 'Rechnung ID %s duplizieren');
$GLOBALS['TL_LANG']['tl_iso_order_charge']['cut']        = array('Rechnung verschieben', 'Rechnung ID %s verschieben');
$GLOBALS['TL_LANG']['tl_iso_order_charge']['delete']     = array('Rechnung löschen', 'Rechnung ID %s löschen');
$GLOBALS['TL_LANG']['tl_iso_order_charge']['toggle']     = array('Rechnung veröffentlichen/unveröffentlichen', 'Rechnung ID %s veröffentlichen/unveröffentlichen');
$GLOBALS['TL_LANG']['tl_iso_order_charge']['feature']    = array('Rechnung hervorheben/zurücksetzen', 'Rechnung ID %s hervorheben/zurücksetzen');
$GLOBALS['TL_LANG']['tl_iso_order_charge']['editheader'] = array('Bestellung bearbeiten', 'Die Bestellungs-Einstellungen bearbeiten');
$GLOBALS['TL_LANG']['tl_iso_order_charge']['pasteafter'] = array('In dieses Bestellung einfügen', 'Nach dem Rechnung ID %s einfügen');
