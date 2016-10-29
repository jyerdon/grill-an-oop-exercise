<?php

require_once 'GrillableItem.php';

class Grill
{
	public $vars;

	function __construct()
	{
		$this->vars['items-on-the-grill'] = null;

		$this->vars['max-grill-space'] = 4;

		//we'll use these in a later iteration
		$this->vars['starting-grill-temp'] = 90;
		$this->vars['max-grill-temp'] = 600;
	}

	public function add($itemname, GrillableItem $grillable)
	{
		$currentitemcount = count($this->vars['items-on-the-grill']['item']);

		if($currentitemcount === $this->vars['max-grill-space']) {
			return false;
		}

		$this->vars['items-on-the-grill']['item'][$itemname] = $grillable;
		$this->vars['items-on-the-grill']['count'] = count($this->vars['items-on-the-grill']['item']);

		return $itemname;
	}

	public function remove($itemname)
	{
		unset($this->vars['items-on-the-grill']['item'][$itemname]);

		$this->vars['items-on-the-grill']['count']--;

		return true;
	}

	public function cook()
	{
		while($this->vars['items-on-the-grill']['count'] > 0) {
			foreach($this->vars['items-on-the-grill']['item'] as $itemname=>$grillitem) {
				if($grillitem->is_done()) {
					$this->remove($itemname);
					echo $itemname.' is done and resting on their plate at the temp of '.$grillitem->get_current_temperature().'!<br>';
				}
				else {
					$grillitem->inc_current_temperature(1);
					echo $itemname.'\'s steak is still cooking and is currently at the temp of '.$grillitem->get_current_temperature().'!<br>';
				}
			}
		}
	}
}
