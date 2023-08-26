<?php

namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;
use CodeIgniter\API\ResponseTrait;
use App\Models\CarManufacturerModel;
use Exception;

class CarManufacturerApiController extends ResourceController
{
    use ResponseTrait;
    private $ModelCarManufacturer;
    private $uri;
    //private $template = 'template/main.php';

    public function __construct()
    {
        $this->ModelCarManufacturer = new CarManufacturerModel();
        $this->uri = new \CodeIgniter\HTTP\URI(current_url());
        helper([
            'myPrint',
        ]);
        return NULL;
    }

    # route POST /www/saotiago/manufacturer/api/index/(:any)
    # route GET /www/saotiago/manufacturer/api/index/(:any)
    # Informação sobre o controller
    # retorno do controller [JSON]
    public function index($parameter = NULL)
    {
        try {
            $apiRespond = [
                'http' => array(
                    'header'  => 'Content-type: application/x-www-form-urlencoded',
                    'method'  => 'GET/POST',
                ),
                'message' => 'API loading data (dados para carregamento da API)',
                'date' => date('Y-m-d'),
                // 'method' => '__METHOD__',
                // 'function' => '__FUNCTION__',
                'page_title' => 'TITLE PAGE',
                'getURI' => $this->uri->getSegments(),
                'result' => array()
            ];
            $response = $this->response->setJSON($apiRespond, 201);
        } catch (\Exception $e) {
            $apiRespond = array(
                'message' => array('danger' => $e->getMessage()),
                'page_title' => 'TITLE PAGE',
            );
            $response = $this->response->setJSON($apiRespond, 404);
        }
        return $response;
    }

    # route POST /www/saotiago/manufacturer/api/read/(:any)
    # route GET /www/saotiago/manufacturer/api/read/(:any)
    # Informação sobre o controller
    # retorno do controller [JSON]
    public function read($parameter = NULL)
    {
        # Recebe Token POR GET no Form
        $request = service('request');
        $processRequest = (array)$request->getVar();
        #
        $dbResponse = $this->ModelCarManufacturer->dbRead()->findAll();
        // myPrint($dbResponse, 'www\oficina\app\Controllers\CarManufacturerApiController.php');
        try {
            if ($processRequest !== array()) {
                # CRUD da Model
                // $dbResponse[] = $this->ModelResponse->dBcreate($processRequest);
                // $dbResponse[] = $this->ModelResponse->dBread($IdUFF = NULL);
                // $dbResponse[] = $this->ModelResponse->dBupdate($IdUFF = NULL);
                // $dbResponse[] = $this->ModelResponse->dBdelete($IdUFF = NULL);
            } else {
                # CRUD da Model
                // $dbResponse[] = $this->ModelResponse->dBcreate($parameter);
                // $dbResponse[] = $this->ModelResponse->dBread($parameter = NULL);
                // $dbResponse[] = $this->ModelResponse->dBupdate($parameter = NULL);
                // $dbResponse[] = $this->ModelResponse->dBdelete($parameter = NULL);
            };
            $apiRespond = [
                'http' => array(
                    'header'  => 'Content-type: application/x-www-form-urlencoded',
                    'method'  => 'GET/POST',
                ),
                'message' => 'API loading data (dados para carregamento da API)',
                'date' => date('Y-m-d'),
                // 'method' => '__METHOD__',
                // 'function' => '__FUNCTION__',
                'page_title' => 'TITLE PAGE',
                'result' => $dbResponse,
            ];
            $response = $this->response->setJSON($apiRespond, 201);
        } catch (\Exception $e) {
            $apiRespond = array(
                'message' => array('danger' => $e->getMessage()),
                'page_title' => 'TITLE PAGE',
            );
            $response = $this->response->setJSON($apiRespond, 404);
        }
        return $response;
    }
}
