<?php

namespace Config;

$routes = Services::routes();

if (is_file(SYSTEMPATH . 'Config/Routes.php')) {
    require SYSTEMPATH . 'Config/Routes.php';
}

$routes->setDefaultNamespace('App\Controllers' );
$routes->setDefaultController('HomeController' );
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
//$routes->set404Override(function(){
//    return view("page_not_found");
//});

$routes->get('/', 'HomeController::index');
$routes->get('admin', 'Admin\LoginController::index');
$routes->group('admin', function ($route) {

    /*Admin Login Routes*/
    $route->get('login', 'Admin\LoginController::index');
    $route->post('login', 'Admin\LoginController::adminLogin');
    $route->get('logout', 'Admin\LoginController::adminLogout');

    $route->match(['post', 'get'],'change-password', 'Admin\LoginController::changePassword' , ["filter"=>"admin"]);
    $route->get('profile', 'Admin\LoginController::adminProfile', ["filter"=>"admin"]);
    $route->post('profile/update', 'Admin\LoginController::updateProfile', ["filter"=>"admin"]);

    /*dashboard*/
    $route->get('dashboard', 'Admin\DashboardController::index', ["filter"=>"admin"]);

    /* Dealership*/
    $route->match( (['post','get']), 'dealership', 'Admin\DealershipController::index' , ["filter"=>"admin"]);
    $route->match(['post','get'],'dealership/add', 'Admin\DealershipController::add' , ["filter"=>"admin"]);
    $route->match(['post','get'],'dealership/(:num)', 'Admin\DealershipController::update/$1' , ["filter"=>"admin"]);
    $route->get('dealership/delete/(:num)', 'Admin\DealershipController::delete/$1' , ["filter"=>"admin"]);

});





if (is_file(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
