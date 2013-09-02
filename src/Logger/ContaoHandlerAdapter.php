<?php

/**
 * Logger bridge for Contao Open Source CMS
 * Copyright (C) 2013 Tristan Lins
 *
 * PHP version 5
 *
 * @copyright  bit3 UG 2013
 * @author     Tristan Lins <tristan.lins@bit3.de>
 * @package    logger
 * @license    LGPL-3.0+
 * @filesource
 */

namespace Logger;

class ContaoHandlerAdapter
{
	protected $bridge;

	public function __construct()
	{
		if (version_compare(VERSION, '3', '>=')) {
			$this->bridge = new Contao3xBridge();
		}
		else {
			$this->bridge = new Contao2xBridge();
		}
	}

	public function log($strText, $strFunction, $strAction)
	{
		$this->bridge->log($strText, $strFunction, $strAction);
	}
}
