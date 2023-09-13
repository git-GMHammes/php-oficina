<?php

namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;
use CodeIgniter\API\ResponseTrait;
use App\Models\CarModel;
use Exception;

class NomeController extends ResourceController
{
    use ResponseTrait;
    private $ModelCar;
    private $uri;

    public function __construct()
    {
        $this->ModelCar = new CarModel();
        $this->uri = new \CodeIgniter\HTTP\URI(current_url());
        helper([
            'myPrint',
            //'myDate',
            //'myIdUFF',
            'myFake'
        ]);
        return NULL;
    }

    # route POST /www/sigla/rota
    # route GET /www/sigla/rota
    # Informação sobre o controller
    # retorno do controller [JSON]
    public function index($parameter = NULL)
    {
        set_time_limit(1200);
        for ($i = 0; $i < 1; $i++) {
            $data = [
                'odometer' => myFakeNumberAddress(),
                'car_description' => '',
                'license_plate' => myCarPlate(),
                'manufacturer' => '',
                'manufacturing_year' => myFakeYear(),
                'model' => '',
                'model_year' => '',
                'color' => 'Prata',
                'chassis' => myFakeNumberAddress() . myFakeNumberAddress(),
                'city' => myFakeAddressDistrict(),
                'state' => 'Rio de Janeiro',
                'situation' => 'RJ',
                'created_at' => date('Y-m-d'),
                'updated_at' => date('Y-m-d'),
                'deleted_at' => date('Y-m-d'),
            ];
            $this->ModelCar->dbCreate($data);
        }
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
}
