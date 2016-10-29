<?php

/*
 * @filename: FlatIron.php
 * @description:  a type of steak
 * @uses: GrillableItem
 * @author: jyerdon
 * @license: https://creativecommons.org/licenses/by-sa/4.0/
 * @version: 1.0.0
*/

require_once 'Steak.php';

class FlatIron extends Steak
{
	function __construct($currenttemp, $doneness = 'medium-rare')
	{
		parent::__construct();

		$this->set_current_temperature($currenttemp);
		$this->set_done_temperature($doneness);
	}
}
