<?php

/**
 * ProcessWire Configuration File
 *
 * Site-specific configuration for ProcessWire
 *
 * Please see the file /wire/config.php which contains all configuration options you may
 * specify here. Simply copy any of the configuration options from that file and paste
 * them into this file in order to modify them.
 *
 * ProcessWire 2.x
 * Copyright (C) 2014 by Ryan Cramer
 * Licensed under GNU/GPL v2, see LICENSE.TXT
 *
 * http://processwire.com
 *
 */

if(!defined("PROCESSWIRE")) die();

/*** SITE CONFIG *************************************************************************/

/**
 * Enable debug mode?
 *
 * Debug mode causes additional info to appear for use during dev and debugging.
 * This is almost always recommended for sites in development. However, you should
 * always have this disabled for live/production sites.
 *
 * @var bool
 *
 */

$config->debug = ($_ENV["ENV"] == "development") ? true : false;

/*** INSTALLER CONFIG ********************************************************************/


/**
 * Installer: Database Configuration
 *
 */

include_once('db.inc.php');

$config->dbHost = $dbHost;
$config->dbName = $dbName;
$config->dbUser = $dbUser;
$config->dbPass = $dbPass;
$config->dbPort = $dbPort;

/**
 * Installer: User Authentication Salt
 *
 * Must be retained if you migrate your site from one server to another
 *
 */
$config->userAuthSalt = '2e1b3692701f5c560a3e9776f2258433';

/**
 * Installer: File Permission Configuration
 *
 */
$config->chmodDir = '0755'; // permission for directories created by ProcessWire
$config->chmodFile = '0644'; // permission for files created by ProcessWire

/**
 * Installer: Time zone setting
 *
 */
$config->timezone = 'Europe/Berlin';


/**
 * Installer: HTTP Hosts Whitelist
 *
 */
$config->httpHosts = array('pwr.local', 'processwire-recipes.com');
