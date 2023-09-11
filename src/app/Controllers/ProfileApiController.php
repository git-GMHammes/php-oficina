<?php

namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;
use CodeIgniter\API\ResponseTrait;
use App\Models\VMenuProfileModel;
use Exception;

class ProfileApiController extends ResourceController
{
    use ResponseTrait;
    private $ModelProfileMenu;
    private $uri;
    //private $template = 'template/main.php';

    public function __construct()
    {
        $this->ModelProfileMenu = new VMenuProfileModel();
        $this->uri = new \CodeIgniter\HTTP\URI(current_url());
        helper([
            'myPrint'
        ]);
        return NULL;
    }

    # route POST /www/sigla/rota
    # route GET /www/sigla/rota
    # Informação sobre o controller
    # retorno do controller [JSON]
    public function index($parameter = NULL)
    {
        try {
            exit('403 Forbidden');
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

    # route POST /www/saotiago/profile/api/read
    # route GET /www/saotiago/profile/api/read(:any)
    # Informação sobre o controller
    # retorno do controller [JSON]
    public function read($parameter = NULL)
    {
        $request = service('request');
        $processRequest = (array)$request->getVar();
        // myPrint($parameter, 'app\Controllers\ProfileApiController.php, 67', true);
        if (isset($processRequest['slug_profile'])) {
            $parameter = $processRequest['slug_profile'];
        } elseif ($parameter !== NULL) {
            $parameter = $parameter;
        } else {
            $parameter = 'unknown';
        };
        // myPrint($parameter, 'src\app\Controllers\ProfileApiController.php, Line 75');
        $dbResponse['menu_profile'] = $this->ModelProfileMenu->dBread('id_slug_profile', $parameter)->orderBy('menu_order', 'ASC')->findAll();
        // myPrint($dbResponse['menu_profile'], 'src\app\Controllers\ProfileApiController.php, Line 77', true);
        $apiRespond = [
            'http' => array(
                'header'  => 'Content-type: application/x-www-form-urlencoded',
                'method'  => 'GET/POST',
            ),
            'message' => 'API loading data (dados para carregamento da API)',
            'date' => date('Y-m-d'),
            // 'method' => '__METHOD__',
            // 'function' => '__FUNCTION__',
            'page_title' => 'Listar Perfis do Sistema',
            // 'result' => DATABASE_CONNECTION_DATA,
            'result' => $dbResponse,
        ];
        try {
            $response = $this->response->setJSON($apiRespond, 201);
        } catch (\Exception $e) {
            $apiRespond = array(
                'message' => array('danger' => $e->getMessage()),
                'page_title' => 'ERRO - Listar Perfis do Sistema',
            );
            $response = $this->response->setJSON($apiRespond, 404);
        }
        return $response;
    }
}
