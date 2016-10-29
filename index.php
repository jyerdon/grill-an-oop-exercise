<?php

/*
 * @filename: index.php
 * @description:  a quick and dirty OOP exercise in Factory patterns
 * @author: jyerdon
 * @license: https://creativecommons.org/licenses/by-sa/4.0/
 * @version: 1.0.0
*/

//uncover the grill
require_once 'Grill.php';

//process for prepping the steaks
require_once 'PrepASteak.php';

//turn on the grill
$grill = new Grill;

//get the steaks ready!
$steakmake = new PrepASteak;

$steaks['a'] = $steakmake->prep('flatiron', 'medium');
$steaks['b'] = $steakmake->prep('flatiron', 'medium-rare');
$steaks['c'] = $steakmake->prep('flatiron', 'medium-rare');
$steaks['d'] = $steakmake->prep('flatiron', 'rare');
$steaks['e'] = $steakmake->prep('flatiron', 'well');

echo '<pre>';
//put the steaks on the grill
foreach($steaks as $steakname=>$steak) {
	if($grill->add($steakname, $steak)) {
		echo 'Added '.$steakname.'\'s steak to the grill!<br>';
	}
	else {
		echo 'Was unable to put '.$steakname.'\'s steak on the grill!<br>';
	}
}

echo '<br><br>';

//let's cook the steaks
$grill->cook();

