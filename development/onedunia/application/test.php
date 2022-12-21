
$routes->get('change-password', 'Home::changePassword', ["filter"=>"admin"]);
$routes->post('change-password', 'Home::changePassword', ["filter"=>"admin"]);
$routes->get('profile', 'Home::adminProfile', ["filter"=>"admin"]);

$routes->get('dashboard', 'DashboardController::index', ["as"=>"dashboard", "filter"=>"admin"]);

$routes->get('course-category/add', 'CourseController::addCourseCategory', ["as"=>"add-course-category", "filter"=>"admin"]);
$routes->post('course-category/add', 'CourseController::addCourseCategory', ["as"=>"add-course-category", "filter"=>"admin"]);

$routes->get('course-category/update/(:num)', 'CourseController::updateCourseCategory/$1', ["as"=>"update-course-category", "filter"=>"admin"]);
$routes->post('course-category/update', 'CourseController::updateCourseCategory', ["as"=>"update-course-category", "filter"=>"admin"]);
$routes->get('course-category/delete/(:num)', 'CourseController::deleteCourseCategory/$1', ["as"=>"delete-course-category", "filter"=>"admin"]);