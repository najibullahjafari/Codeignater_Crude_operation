<?php
use App\Controllers\Student;
use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
// $routes->get('/', 'Home::index');
$routes->get('student', [Student::class, 'index']);
$routes->get('/', function () {
    return view('layout');

});
$routes->get('student/insert_student', 'Student::show_insert_student');
$routes->post('student/insert_student', 'Student::insert_student');
$routes->get('student/edit_student/(:num)', 'Student::edit_student/$1');
$routes->post('student/update_student/(:num)', 'Student::update_student/$1');
$routes->get('student/delete_student/(:num)', 'Student::delete_student/$1');
