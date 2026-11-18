<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

// Routing halaman utama
$routes->get('/', 'Home::index');
$routes->get('/home', 'Coba::index');
$routes->get('/beranda', 'Home::index');

// Routing Mahasiswa
$routes->get('/mahasiswa/create', 'Mahasiswa::create');
$routes->get('/mahasiswa/edit/(:num)', 'Mahasiswa::edit/$1');
$routes->post('/mahasiswa/store', 'Mahasiswa::store');
$routes->post('/mahasiswa/update/(:num)', 'Mahasiswa::update/$1');
$routes->post('/mahasiswa/delete/(:num)', 'Mahasiswa::delete/$1');
$routes->get('/mahasiswa/(:any)', 'Home::mahasiswa/$1');
$routes->get('/mahasiswa', 'Mahasiswa::index');

// Routing CRUD Dosen
$routes->get('/dosen', 'Dosen::index');
$routes->get('/dosen/create', 'Dosen::create');
$routes->post('/dosen/store', 'Dosen::store');
$routes->get('/dosen/edit/(:num)', 'Dosen::edit/$1');
$routes->post('/dosen/update/(:num)', 'Dosen::update/$1');
$routes->post('/dosen/delete/(:num)', 'Dosen::delete/$1');

// Routing halaman Tentang
$routes->get('/tentang', 'Home::tentang');

// Routing CRUD Mata Kuliah
$routes->get('/matakuliah', 'Matakuliah::index');
$routes->get('/matakuliah/create', 'Matakuliah::create');
$routes->post('/matakuliah/store', 'Matakuliah::store');
$routes->get('/matakuliah/edit/(:num)', 'Matakuliah::edit/$1');
$routes->post('/matakuliah/update/(:num)', 'Matakuliah::update/$1');
$routes->post('/matakuliah/delete/(:num)', 'Matakuliah::delete/$1');
