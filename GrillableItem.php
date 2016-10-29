<?php

interface GrillableItem
{
	public function set_done_temperature($temperature);
	public function get_current_temperature();
	public function inc_current_temperature($temp_inc_amount);
	public function set_current_temperature($currenttemp);
	public function is_done();
}
