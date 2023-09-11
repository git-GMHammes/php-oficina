<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

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
$routes->get('/', 'Home::index');

$routes->addRedirect('saothiago', 'saotiago/user/endpoint/authenticate');
$routes->addRedirect('saotiago', 'saotiago/user/endpoint/authenticate');
$routes->addRedirect('saotiago/logar', 'saotiago/user/endpoint/authenticate');
$routes->addRedirect('saotiago/login', 'saotiago/user/endpoint/authenticate');
# 
$routes->group('saotiago', function ($routes) {
    $routes->addRedirect('saotiago/main', 'saotiago/main/endpoint/home');
    # www/saotiago/main/segment/(:any)
    $routes->group('main', function ($routes) {
        # www/saotiago/main/api/(:any)
        $routes->group('api', function ($routes) {
            # www/saotiago/main/api/__(:any)
            $routes->get('__', 'Main_Controller::__');
            $routes->get('__/(:segment)', 'Main_Controller::__/$1');
            $routes->get('__/(:any)', 'Main_Controller::__/$1');
            $routes->post('__', 'Main_Controller::__');
        });
        # www/saotiago/main/endpoint/(:any)
        $routes->group('endpoint', function ($routes) {
            # www/saotiago/main/endpoint/home(:any)
            $routes->get('home', 'MainEndPointController::main');
            $routes->get('home/(:segment)', 'MainEndPointController::main/$1');
            $routes->get('home/(:any)', 'MainEndPointController::main/$1');
            $routes->post('home', 'MainEndPointController::main');
        });
    });
    $routes->addRedirect('saotiago/user', 'saotiago/user/api/authenticate');
    $routes->group('user', function ($routes) {
        $routes->group('api', function ($routes) {
            # www/saotiago/user/api/authenticate(:any)
            $routes->get('authenticate', 'UserApiController::authenticate');
            $routes->get('authenticate/(:segment)', 'UserApiController::authenticate/$1');
            $routes->get('authenticate/(:any)', 'UserApiController::authenticate/$1');
            $routes->post('authenticate', 'UserApiController::authenticate');
            # www/saotiago/user/api/create(:any)
            $routes->get('create', 'UserApiController::create');
            $routes->get('create/(:segment)', 'UserApiController::create/$1');
            $routes->get('create/(:any)', 'UserApiController::create/$1');
            $routes->post('create', 'UserApiController::create');
        });
        $routes->group('endpoint', function ($routes) {
            # www/saotiago/user/endpoint/authenticate(:any)
            $routes->get('authenticate', 'UserEndPointController::authenticate');
            $routes->get('authenticate/(:segment)', 'UserEndPointController::authenticate/$1');
            $routes->get('authenticate/(:any)', 'UserEndPointController::authenticate/$1');
            $routes->post('authenticate', 'UserEndPointController::authenticate');
            # www/saotiago/user/endpoint/create(:any)
            $routes->get('create', 'UserEndPointController::create');
            $routes->get('create/(:segment)', 'UserEndPointController::create/$1');
            $routes->get('create/(:any)', 'UserEndPointController::create/$1');
            $routes->post('create', 'UserEndPointController::create');
            # www/saotiago/user/endpoint/access(:any)
            $routes->get('access', 'UserEndPointController::access');
            $routes->get('access/(:segment)', 'UserEndPointController::access/$1');
            $routes->get('access/(:any)', 'UserEndPointController::access/$1');
            $routes->post('access', 'UserEndPointController::access');
        });
    });
    $routes->addRedirect('saotiago/profile', 'saotiago/main/endpoint/home');
    $routes->group('profile', function ($routes) {
        $routes->group('api', function ($routes) {
            # www/saotiago/profile/api/read(:any)
            $routes->get('read', 'ProfileApiController::read');
            $routes->get('read/(:segment)', 'ProfileApiController::read/$1');
            $routes->get('read/(:any)', 'ProfileApiController::read/$1');
            $routes->post('read', 'ProfileApiController::read');
        });
        $routes->group('endpoint', function ($routes) {
            # www/saotiago/workorder/endpoint/*(:any)
            $routes->get('__', 'Controller::Method');
            $routes->get('__/(:segment)', 'Controller::Method/$1');
            $routes->get('__/(:any)', 'Controller::Method/$1');
            $routes->post('__', 'Controller::Method');
        });
    });
    $routes->addRedirect('saotiago/customer', 'saotiago/main/endpoint/home');
    $routes->addRedirect('saotiago/cliente', 'saotiago/main/endpoint/home');
    $routes->group('customer', function ($routes) {
        $routes->group('api', function ($routes) {
            # www/saotiago/customer/api/create(:any)
            $routes->get('create', 'CustomerApiController::create');
            $routes->get('create/(:segment)', 'CustomerApiController::create/$1');
            $routes->get('create/(:any)', 'CustomerApiController::create/$1');
            $routes->post('create', 'CustomerApiController::create');
        });
        $routes->group('endpoint', function ($routes) {
            # www/saotiago/customer/endpoint/create(:any)
            $routes->get('create', 'CustomerEndPointController::create');
            $routes->get('create/(:segment)', 'CustomerEndPointController::create/$1');
            $routes->get('create/(:any)', 'CustomerEndPointController::create/$1');
            $routes->post('create', 'CustomerEndPointController::create');
            # www/saotiago/client/endpoint/*(:any)
        });
    });
    $routes->group('emitente', function ($routes) {
        $routes->group('api', function ($routes) {
            # www/saotiago/emitente/api/*(:any)
            $routes->get('__', 'Controller::Method');
            $routes->get('__/(:segment)', 'Controller::Method/$1');
            $routes->get('__/(:any)', 'Controller::Method/$1');
            $routes->post('__', 'Controller::Method');
            # www/saotiago/emitente/api/create(:any)
            $routes->get('create', 'EmitenteApiController::create');
            $routes->get('create/(:segment)', 'EmitenteApiController::create/$1');
            $routes->get('create/(:any)', 'EmitenteApiController::create/$1');
            $routes->post('create', 'EmitenteApiController::create');
            $routes->post('create/(:segment)', 'EmitenteApiController::create/$1');
        });
        $routes->group('endpoint', function ($routes) {
            # www/saotiago/emitente/endpoint/create(:any)
            $routes->get('create', 'EmitenteEndPointController::create');
            $routes->get('create/(:segment)', 'EmitenteEndPointController::create/$1');
            $routes->get('create/(:any)', 'EmitenteEndPointController::create/$1');
            $routes->post('create', 'EmitenteEndPointController::create');
            $routes->post('create/(:segment)', 'EmitenteEndPointController::create/$1');
        });
    });
    $routes->group('car', function ($routes) {
        $routes->group('api', function ($routes) {
            # www/saotiago/cars/api/*(:any)
            $routes->get('__', 'CarAPIController::Method');
            $routes->get('__/(:segment)', 'CarAPIController::Method/$1');
            $routes->get('__/(:any)', 'CarAPIController::Method/$1');
            $routes->post('__', 'CarAPIController::Method');
        });
        $routes->group('endpoint', function ($routes) {
            # www/saotiago/cars/endpoint/create(:any)
            $routes->get('create', 'CarEndPointController::create');
            $routes->get('create/(:segment)', 'CarEndPointController::create/$1');
            $routes->get('create/(:any)', 'CarEndPointController::create/$1');
            $routes->post('create', 'CarEndPointController::create');
        });
    });
    $routes->group('manufacturer', function ($routes) {
        $routes->group('api', function ($routes) {
            # www/saotiago/manufacturer/api/read/(:any)
            $routes->get('read', 'CarManufacturerApiController::read');
            $routes->get('read/(:segment)', 'CarManufacturerApiController::read/$1');
            $routes->get('read/(:any)', 'CarManufacturerApiController::read/$1');
            $routes->post('read', 'CarManufacturerApiController::read');
        });
        $routes->group('endpoint', function ($routes) {
            # www/saotiago/cars/endpoint/__(:any)
        });
    });
    $routes->group('model', function ($routes) {
        $routes->group('api', function ($routes) {
            # www/saotiago/model/api/read/(:any)
            $routes->get('read', 'CarManufacturerModelApiController::read');
            $routes->get('read/(:segment)', 'CarManufacturerModelApiController::read/$1');
            $routes->get('read/(:any)', 'CarManufacturerModelApiController::read/$1');
            $routes->post('read', 'CarManufacturerModelApiController::read');
        });
        $routes->group('endpoint', function ($routes) {
            # www/saotiago/cars/endpoint/__(:any)
        });
    });
    $routes->group('color', function ($routes) {
        $routes->group('api', function ($routes) {
            # www/saotiago/color/api/read/(:any)
            $routes->get('read', 'ColorApiController::read');
            $routes->get('read/(:segment)', 'ColorApiController::read/$1');
            $routes->get('read/(:any)', 'ColorApiController::read/$1');
            $routes->post('read', 'ColorApiController::read');
        });
        $routes->group('endpoint', function ($routes) {
            # www/saotiago/cars/endpoint/__(:any)
        });
    });
    $routes->group('workorder', function ($routes) {
        $routes->group('api', function ($routes) {
            # www/saotiago/workorder/api/*(:any)
            $routes->get('__', 'Controller::Method');
            $routes->get('__/(:segment)', 'Controller::Method/$1');
            $routes->get('__/(:any)', 'Controller::Method/$1');
            $routes->post('__', 'Controller::Method');
        });
        $routes->group('endpoint', function ($routes) {
            # www/saotiago/workorder/endpoint/create(:any)
            $routes->get('create', 'WorkorderEndPointController::create');
            $routes->get('create/(:segment)', 'WorkorderEndPointController::create/$1');
            $routes->get('create/(:any)', 'WorkorderEndPointController::create/$1');
            $routes->post('create', 'WorkorderEndPointController::create');
        });
    });
    $routes->group('service', function ($routes) {
        $routes->group('api', function ($routes) {
            # www/saotiago/service/api/*(:any)
            $routes->get('__', 'Controller::Method');
            $routes->get('__/(:segment)', 'Controller::Method/$1');
            $routes->get('__/(:any)', 'Controller::Method/$1');
            $routes->post('__', 'Controller::Method');
        });
        $routes->group('endpoint', function ($routes) {
            # www/saotiago/service/endpoint/create(:any)
            $routes->get('create', 'ServiceEndPointController::create');
            $routes->get('create/(:segment)', 'ServiceEndPointController::create/$1');
            $routes->get('create/(:any)', 'ServiceEndPointController::create/$1');
            $routes->post('create', 'ServiceEndPointController::create');
            # www/saotiago/service/endpoint/create_os(:any)
            $routes->get('create_os', 'ServiceEndPointController::create_os');
            $routes->get('create_os/(:segment)', 'ServiceEndPointController::create_os/$1');
            $routes->get('create_os/(:any)', 'ServiceEndPointController::create_os/$1');
            $routes->post('create_os', 'ServiceEndPointController::create_os');
        });
    });
    $routes->group('warrantie', function ($routes) {
        $routes->group('api', function ($routes) {
            # www/saotiago/warrantie/api/*(:any)
            $routes->get('__', 'Controller::Method');
            $routes->get('__/(:segment)', 'Controller::Method/$1');
            $routes->get('__/(:any)', 'Controller::Method/$1');
            $routes->post('__', 'Controller::Method');
        });
        $routes->group('endpoint', function ($routes) {
            # www/saotiago/warrantie/endpoint/create/(:any)
            $routes->get('create', 'WarrantieEndPointController::create');
            $routes->get('create/(:segment)', 'WarrantieEndPointController::create/$1');
            $routes->get('create/(:any)', 'WarrantieEndPointController::create/$1');
            $routes->post('create', 'WarrantieEndPointController::create');
        });
    });
    $routes->group('product', function ($routes) {
        $routes->group('api', function ($routes) {
            # www/saotiago/product/api/*(:any)
            $routes->get('__', 'Controller::Method');
            $routes->get('__/(:segment)', 'Controller::Method/$1');
            $routes->get('__/(:any)', 'Controller::Method/$1');
            $routes->post('__', 'Controller::Method');
        });
        $routes->group('endpoint', function ($routes) {
            # www/saotiago/product/endpoint/create/(:any)
            $routes->get('create', 'ProductEndPointController::create');
            $routes->get('create/(:segment)', 'ProductEndPointController::create/$1');
            $routes->get('create/(:any)', 'ProductEndPointController::create/$1');
            $routes->post('create', 'ProductEndPointController::create');
        });
    });
    $routes->group('equipment', function ($routes) {
        $routes->group('api', function ($routes) {
            # www/saotiago/equipment/api/*(:any)
            $routes->get('__', 'Controller::Method');
            $routes->get('__/(:segment)', 'Controller::Method/$1');
            $routes->get('__/(:any)', 'Controller::Method/$1');
            $routes->post('__', 'Controller::Method');
        });
        $routes->group('endpoint', function ($routes) {
            # www/saotiago/equipment/endpoint/create/(:any)
            $routes->get('create', 'EquipmentEndPointController::create');
            $routes->get('create/(:segment)', 'EquipmentEndPointController::create/$1');
            $routes->get('create/(:any)', 'EquipmentEndPointController::create/$1');
            $routes->post('create', 'EquipmentEndPointController::create');
        });
    });
});
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
