<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('register', 'Auth::register');
$routes->get('login', 'Auth::login');
$routes->post('register-save', 'Auth::registerSave');

$routes->post('login-check', 'Auth::loginCheck');

$routes->get('logout', 'Auth::logout');
$routes->get('dashboard', 'Dashboard::index');
$routes->post('expense-save', 'Expense::save');
$routes->get('expense-delete/(:num)', 'Expense::delete/$1');
$routes->get('expense-edit/(:num)', 'Expense::edit/$1');

$routes->post('expense-update/(:num)', 'Expense::update/$1');
$routes->get('add-expense', 'Expense::add');
$routes->get('expenses', 'Expense::index');
$routes->get('add-income', 'Income::add');

$routes->post('income-save', 'Income::save');
$routes->get('add-savings', 'Savings::add');

$routes->post('savings-save', 'Savings::save');