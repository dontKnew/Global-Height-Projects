/* Dealership*/
$route->match( (['post','get']), 'cvv', 'Admin\CVController::index' , ["filter"=>"admin"]);
$route->match(['post','get'],'cvv/add', 'Admin\CVController::add' , ["filter"=>"admin"]);
$route->match(['post','get'],'cvv/(:num)', 'Admin\CVController::update/$1' , ["filter"=>"admin"]);
$route->get('cvv/delete/(:num)', 'Admin\CVController::delete/$1' , ["filter"=>"admin"]);