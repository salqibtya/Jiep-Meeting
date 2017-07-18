<?php

if (!defined('BASEPATH'))
	exit('No direct script access allowed');

function nilai_buku($value, $year)
{
	$min_year = $year;
	$current_year = date('Y');
	$max_year = $min_year + 5;
	$multiplier = $current_year - $min_year;
	if ($multiplier > 5) {
		$multiplier = 5;
	}
	$akumulasi_depresiasi = ($value / 5) * $multiplier;
	$nilai_buku = $value - $akumulasi_depresiasi;
	return $nilai_buku;
}

function depresiasi_pertahun($value, $year)
{
	$min_year = $year;
	$current_year = date('Y');
	$max_year = $min_year + 5;
	$multiplier = $current_year - $min_year;
	$akumulasi_depresiasi = $value / 5;
	return $akumulasi_depresiasi;
}