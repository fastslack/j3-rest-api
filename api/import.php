<?php
/**
 * @package     Joomla.Services
 *
 * @copyright   Copyright (C) 2005 - 2013 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

// Make sure that the Joomla Platform has been successfully loaded.
if (!class_exists('JLoader'))
{
	throw new RuntimeException('Joomla Platform not loaded.');
}

// Setup the autoloader for the application classes.
JLoader::registerPrefix('Api', __DIR__);

// Register the framework namespace
JLoader::registerNamespace('Joomla', JPATH_PLATFORM . '/framework');

JLoader::registerAlias('JRegistry',           '\\Joomla\\Registry\\Registry');
JLoader::registerAlias('JRegistryFormat',     '\\Joomla\\Registry\\AbstractRegistryFormat');
JLoader::registerAlias('JRegistryFormatINI',  '\\Joomla\\Registry\\Format\\Ini');
JLoader::registerAlias('JRegistryFormatJSON', '\\Joomla\\Registry\\Format\\Json');
JLoader::registerAlias('JRegistryFormatPHP',  '\\Joomla\\Registry\\Format\\Php');
JLoader::registerAlias('JRegistryFormatXML',  '\\Joomla\\Registry\\Format\\Xml');
