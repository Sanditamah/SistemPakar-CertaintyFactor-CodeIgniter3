<?php
defined('BASEPATH') or exit('No direct script access allowed');

//General
$route['artikel'] = 'artikel';
$route['about'] = 'about';
$route['periksa'] = 'periksa';
$route['cetak'] = 'cetak';

//Admin
$route['registrasi'] = 'login/registrasi';
$route['login'] = 'login';
$route['logout'] = 'login/logout';
$route['login/check'] = 'login/chek_login';
$route['dashboard'] = 'dashboard/index';

$route['penyakit'] = 'dashboard/penyakit';
$route['penyakit/insert'] = 'dashboard/penyakit/insert';
$route['penyakit/ubah/(:any)'] = 'dashboard/penyakit/edit/$1';
$route['penyakit/delete/(:any)'] = 'dashboard/penyakit/delete/$1';

$route['gejala'] = 'dashboard/gejala';
$route['gejala/insert'] = 'dashboard/gejala/insert';
$route['gejala/ubah/(:any)'] = 'dashboard/gejala/edit/$1';
$route['gejala/delete/(:any)'] = 'dashboard/gejala/delete/$1';

$route['bobot'] = 'dashboard/bobot';
$route['bobot/insert'] = 'dashboard/bobot/insert';
$route['bobot/ubah/(:any)'] = 'dashboard/bobot/edit/$1';
$route['bobot/delete/(:any)'] = 'dashboard/bobot/delete/$1';

$route['admin'] = 'dashboard/admin';
$route['admin/insert'] = 'dashboard/admin/insert';
$route['admin/ubah/(:any)'] = 'dashboard/admin/edit/$1';
$route['admin/delete/(:any)'] = 'dashboard/admin/delete/$1';

$route['pakar'] = 'dashboard/pakar';
$route['pakar/insert'] = 'dashboard/pakar/insert';
$route['pakar/ubah/(:any)'] = 'dashboard/pakar/edit/$1';
$route['pakar/delete/(:any)'] = 'dashboard/pakar/delete/$1';

$route['pasien'] = 'dashboard/pasien';
$route['pasien/detail/(:any)'] = 'dashboard/pasien/detail/$1';
$route['pasien/delete/(:any)'] = 'dashboard/pasien/delete/$1';

//Pakar
$route['dashboard/pakar'] = 'dashboard_pakar/index';
$route['penyakit/pakar'] = 'dashboard_pakar/penyakit';
$route['gejala/pakar'] = 'dashboard_pakar/gejala';

$route['bobot/pakar'] = 'dashboard_pakar/bobot';
$route['bobot/pakar/insert'] = 'dashboard_pakar/bobot/insert';
$route['bobot/pakar/ubah/(:any)'] = 'dashboard_pakar/bobot/edit/$1';
$route['bobot/pakar/delete/(:any)'] = 'dashboard_pakar/bobot/delete/$1';

$route['pasien/pakar'] = 'dashboard_pakar/pasien';
$route['pasien/pakar/detail/(:any)'] = 'dashboard_pakar/pasien/detail/$1';


//General
$route['default_controller'] = 'welcome';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
