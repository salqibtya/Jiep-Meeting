<?php

if (!defined('BASEPATH'))
	exit('No direct script access allowed');

function persentase($value, $total)
{
	$result = $value/$total * 100;
	return number_format((float)$result, 2, '.', '');
}