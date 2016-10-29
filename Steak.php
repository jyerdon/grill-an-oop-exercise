<?php

/*
 * @filename: Steak.php
 * @description:  provides main object definition for a steak
 * @uses: GrillableItem
 * @author: jyerdon
 * @license: https://creativecommons.org/licenses/by-sa/4.0/
 * @version: 1.0.0
*/

require_once 'GrillableItem.php';

class Steak implements GrillableItem
{
	public $vars;

	function __construct()
	{
		$this->vars['temp']['done'] = null;
		$this->vars['temp']['current'] = null;

		$this->vars['temp']['doneness']['rare'] = 126;
		$this->vars['temp']['doneness']['medium-rare'] = 136;
		$this->vars['temp']['doneness']['medium'] = 146;
		$this->vars['temp']['doneness']['medium-well'] = 151;
		$this->vars['temp']['doneness']['well'] = 161;
	}

	public function set_done_temperature($doneness)
	{
		$doneness = strtolower($doneness);
		return $this->vars['temp']['done'] = $this->vars['temp']['doneness'][$doneness];
	}

	public function get_current_temperature()
	{
		return $this->vars['temp']['current'];
	}

	public function inc_current_temperature($temp_inc_amount)
	{
		return $this->vars['temp']['current'] += $temp_inc_amount;
	}

	public function set_current_temperature($currenttemp)
	{
		return $this->inc_current_temperature($currenttemp);
	}

	public function is_done()
	{
		if($this->vars['temp']['current'] === $this->vars['temp']['done']) {
			return true;
		}
		else {
			return false;
		}
	}
}
