<?php

namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;
use CodeIgniter\API\ResponseTrait;
// use App\Models\NomeModel;
use Exception;

class NomeController extends ResourceController
{
    use ResponseTrait;
    private $server_protocol;
    private $request_method;
    private $ModelResponse;
    private $browser;
    private $origin;
    private $port;
    private $uri;

    public function __construct()
    {
        // $this->ModelResponse = new NomeModel();
        $this->uri = new \CodeIgniter\HTTP\URI(current_url());
        // helper([
        //'myPrint',
        //'myDate',
        //'myIdUFF',
        //'myFake'
        // ]);
        return NULL;
    }

    # route POST /www/sigla/rota
    # route GET /www/sigla/rota
    # Informação sobre o controller
    # retorno do controller [JSON]
    public function index($parameter = NULL)
    {
        // myPrint('403 Forbidden', 'Directory access is forbidden.');
        try {
            $apiRespond = [
                'HTTP/1.1' => array(
                    'header'  => 'Content-type: application/x-www-form-urlencoded',
                    'method'  => 'GET/POST',
                ),
                'message' => 'API loading data (dados para carregamento da API)',
                'date' => date('Y-m-d'),
                // 'method' => '__METHOD__',
                // 'function' => '__FUNCTION__',
                'page_title' => 'TITLE PAGE',
                'getURI' => $this->uri->getSegments(),
                'result' => $this->getRequest()
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

    private function getRequest()
    {
        $returnAPI = array();
        $returnAPI['port'] =  $_SERVER['SERVER_PORT'];
        $returnAPI['origin'] =  $_SERVER['SERVER_ADDR'];
        $returnAPI['browser'] =  $_SERVER['HTTP_USER_AGENT'];
        $returnAPI['request_method'] =  $_SERVER['REQUEST_METHOD'];
        $returnAPI['server_protocol'] =  $_SERVER['SERVER_PROTOCOL'];
        return $returnAPI;
    }
}
