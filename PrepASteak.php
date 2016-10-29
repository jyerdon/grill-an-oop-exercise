<?php

require_once 'FlatIron.php';

/*
 * @filename: PrepASteak.php
 * @description:  'creates' a steak for someone
 * @uses: FlatIron and any other steak types
 * @author: jyerdon
 * @license: https://creativecommons.org/licenses/by-sa/4.0/
 * @version: 1.0.0
*/

class PrepASteak
{
	public $vars;

	function __construct()
	{
		$this->vars['room-temp'] = 72;
	}

	public function prep($steaktype, $steakdoneness)
	{
		switch($steaktype) {
			default:
			case 'flatiron':
				return new FlatIron($this->vars['room-temp'], $steakdoneness);

			//add new steak types as desired
		}
	}
}
