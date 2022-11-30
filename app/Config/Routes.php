<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (is_file(SYSTEMPATH . 'Config/Routes.php')) {
    require SYSTEMPATH . 'Config/Routes.php';
}

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
// The Auto Routing (Legacy) is very dangerous. It is easy to create vulnerable apps
// where controller filters or CSRF protection are bypassed.
// If you don't want to define all routes, please use the Auto Routing (Improved).
// Set `$autoRoutesImproved` to true in `app/Config/Feature.php` and set the following to true.
// $routes->setAutoRoute(false);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
// $routes->get('/', 'Home::index');

// AUTH
$routes->get('/login', 'Auth::login');
$routes->get('/', 'Auth::login');
$routes->post('auth/loginProcess', 'Auth::loginProcess');
$routes->get('/auth/logout', 'Auth::logout');

// ADMIN
$routes->get('/admin', 'Admin::index');
$routes->get('/admin/user', 'Admin::dataUser');
$routes->get('/admin/user/tambah', 'Admin::tambahUser');
$routes->delete('/admin/user/hapus/(:num)', 'Admin::deleteUser/$1');
$routes->get('/admin/user/ubah/(:any)', 'Admin::editUser/$1');
$routes->post('/admin/simpanUser', 'Admin::simpanUser');
$routes->post('/admin/updateUser/(:any)', 'Admin::updateaksesUser/$1');

/*
$routes->delete('/admin/user/(:num)', 'Admin::deleteUser/$1');
$routes->get('/admin/sd', 'Admin::dataSekolahDasar');*/

// PETUGAS
$routes->get('/petugas', 'Petugas::index');
$routes->match(['get', 'post'], 'Petugas/ajaxSearch', 'Petugas::ajaxSearch');

$routes->get('/petugas/sekolah/tambah', 'Petugas::tambahSekolah');
// $routes->get('/petugas/sd/(:segment)', 'Petugas::editSD/$1');
$routes->post('/petugas/sekolah/simpan', 'Petugas::simpanSekolah');
$routes->post('/petugas/sekolah/update/(:any)', 'Petugas::updateSekolah/$1');
$routes->delete('/petugas/sekolah/(:num)', 'Petugas::hapusSekolah/$1');


$routes->get('/petugas/tk', 'Petugas::dataSekolah/TK');
$routes->get('/petugas/tk/tambah', 'Petugas::tambahSekolah/TK');
$routes->get('/petugas/tk/(:segment)', 'Petugas::editSekolah/$1');

$routes->get('/petugas/sd', 'Petugas::dataSekolah/SD');
$routes->get('/petugas/sd/tambah', 'Petugas::tambahSekolah/SD');
$routes->get('/petugas/sd/(:segment)', 'Petugas::editSekolah/$1');

$routes->get('/petugas/smp', 'Petugas::dataSekolah/SMP');
$routes->get('/petugas/smp/tambah', 'Petugas::tambahSekolah/SMP');
$routes->get('/petugas/smp/(:segment)', 'Petugas::editSekolah/$1');

$routes->get('/petugas/pegawai/tk', 'Petugas::dataPegawai/TK');
$routes->get('/petugas/pegawai/sd', 'Petugas::dataPegawai/SD');
$routes->get('/petugas/pegawai/smp', 'Petugas::dataPegawai/SMP');

$routes->get('/petugas/pegawai/tk/tambah', 'Petugas::tambahPegawai/TK');
$routes->get('/petugas/pegawai/sd/tambah', 'Petugas::tambahPegawai/SD');
$routes->get('/petugas/pegawai/smp/tambah', 'Petugas::tambahPegawai/SMP');

$routes->post('/petugas/pegawai/simpan', 'Petugas::simpanPegawai');

$routes->post('petugas/sekolah/import', 'Petugas::importCSVSekolah');
$routes->post('petugas/pegawai/import', 'Petugas::importCSVPegawai');

$routes->get('/petugas/pegawai/(:segment)', 'Petugas::editPegawai/$1');
$routes->post('/petugas/pegawai/update/(:num)', 'Petugas::updatePegawai/$1');
$routes->get('/petugas/pegawai/profil/(:segment)', 'Petugas::profilPegawai/$1');
$routes->delete('/petugas/pegawai/(:num)', 'Petugas::hapusPegawai/$1');

$routes->get('/petugas/menulaporan', 'Petugas::menuLaporan');
$routes->get('/petugas/laporan/lihat', 'Petugas::lihatLaporan');
$routes->get('/petugas/laporan/export', 'Petugas::exportPDF');


// $routes->get('/petugas/lihatlaporan', 'Petugas::lihatLaporan');
// $routes->get('/petugas/lihatlaporan2', 'Petugas::lihatLaporan2');

/*
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (is_file(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
