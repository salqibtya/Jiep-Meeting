<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

function check_login() {
    if (!isset($_SESSION['iduser']))
        show_404();
}

function convert_date($date)
{
	$result = $date;
	// $selisih = $date-date('d/m/Y');

	// if (date('d/m/Y') == $date) {
	// 	$result = 'Hari ini';
	// } elseif ($selisih == 1) {
	// 	$result = 'Besok';
	// }

	return $result;
}


