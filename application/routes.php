<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['upload/do_upload'] = 'Upload_gambar/do_upload';
$route['upload'] = 'Upload_gambar';

$route['logout'] = 'log/out';
$route['login'] = 'log/in';

$route['hapus_sub_klasifikasi/(:any)'] = 'sub_klasifikasi/hapus/$1';
$route['edit_sub_klasifikasi/(:any)'] = 'sub_klasifikasi/edit/$1';
$route['tambah_sub_klasifikasi'] = 'sub_klasifikasi/tambah';
$route['sub_klasifikasi'] = 'sub_klasifikasi';

$route['hapus_klasifikasi/(:any)'] = 'klasifikasi/hapus/$1';
$route['edit_klasifikasi/(:any)'] = 'klasifikasi/edit/$1';
$route['tambah_klasifikasi'] = 'klasifikasi/tambah';
$route['klasifikasi'] = 'klasifikasi';

$route['hapus_ruangan/(:any)'] = 'ruangan/hapus/$1';
$route['edit_ruangan/(:any)'] = 'ruangan/edit/$1';
$route['tambah_ruangan'] = 'ruangan/tambah';
$route['ruangan'] = 'ruangan';

$route['hapus_gambar/(:any)'] = 'barang/hapus_gambar/$1';
$route['detail_barang/(:any)'] = 'barang/detail/$1';
$route['hapus_barang/(:any)'] = 'barang/hapus/$1';
$route['barang/do_edit'] = 'barang/do_edit';
$route['edit_barang/(:any)'] = 'barang/edit/$1';
$route['barang/edit'] = 'barang/edit';
$route['barang/do_tambah'] = 'barang/do_tambah';
$route['barang/tambah'] = 'barang/tambah';
$route['tambah_barang'] = 'barang/tambah';
$route['barang/(:any)'] = 'barang/view/$1';
$route['barang'] = 'barang/view';

$route['default_controller'] 	= 'tiles';
$route['404_override'] 		= '';
$route['translate_uri_dashes'] 	= FALSE;
