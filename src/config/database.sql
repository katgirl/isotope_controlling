-- **********************************************************
-- *                                                        *
-- * IMPORTANT NOTE                                         *
-- *                                                        *
-- * Do not import this file manually but use the Contao    *
-- * install tool to create and maintain database tables!   *
-- *                                                        *
-- **********************************************************


--
-- Table `tl_iso_order_charge`
--

CREATE TABLE `tl_iso_order_charge` (
  `id` int(10) unsigned NOT NULL auto_increment,
  `pid` int(10) unsigned NOT NULL default '0',
  `tstamp` int(10) unsigned NOT NULL default '0',
  `type` varchar(32) NOT NULL default '',
  `invoice_number` varchar(32) NOT NULL default '',
  `counter_account` varchar(32) NOT NULL default '',
  `invoice_date` int(10) unsigned NOT NULL default '0',
  `editor` int(10) unsigned NOT NULL default '0',
  `kreditor` int(10) unsigned NOT NULL default '0',
  `vat` int(10) unsigned NOT NULL default '0',
  `subTotal` decimal(12,2) NOT NULL default '0.00',
  `notes` text NULL,
  PRIMARY KEY  (`id`),
  KEY `pid` (`pid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;


--
-- Table `tl_member`
--

CREATE TABLE `tl_member` (
  `debitor_id` int(10) unsigned NOT NULL default '0',
  `accountNumber` varchar(64) NOT NULL default '',
  `bankCode` varchar(64) NOT NULL default '',
  `bank` varchar(100) NOT NULL default '',
  `iban` varchar(64) NOT NULL default ''
  `bic` varchar(64) NOT NULL default '',
) ENGINE=MyISAM DEFAULT CHARSET=utf8;


--
-- Table `tl_iso_kreditor`
--

CREATE TABLE `tl_iso_kreditor` (
  `id` int(10) unsigned NOT NULL auto_increment,
  `pid` int(10) unsigned NOT NULL default '0',
  `tstamp` int(10) unsigned NOT NULL default '0',
  `kreditor_id` int(10) unsigned NOT NULL default '0',
  `label` varchar(255) NOT NULL default '',
  `salutation` varchar(255) NOT NULL default '',
  `company` varchar(255) NOT NULL default '',
  `vat_no` varchar(255) NOT NULL default '',
  `firstname` varchar(255) NOT NULL default '',
  `lastname` varchar(255) NOT NULL default '',
  `street_1` varchar(255) NOT NULL default '',
  `street_2` varchar(255) NOT NULL default '',
  `street_3` varchar(255) NOT NULL default '',
  `postal` varchar(32) NOT NULL default '',
  `city` varchar(255) NOT NULL default '',
  `country` varchar(32) NOT NULL default '',
  `phone` varchar(64) NOT NULL default '',
  `email` varchar(255) NOT NULL default '',
  `accountNumber` varchar(64) NOT NULL default '',
  `bankCode` varchar(64) NOT NULL default '',
  `bank` varchar(100) NOT NULL default '',
  `iban` varchar(64) NOT NULL default ''
  `bic` varchar(64) NOT NULL default '',
  PRIMARY KEY  (`id`),
  KEY `pid` (`pid`, `kreditor_id`, `label`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

