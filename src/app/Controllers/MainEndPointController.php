<?php

namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;
use CodeIgniter\API\ResponseTrait;
// use App\Models\NomeModel;
use Exception;

class MainEndPointController extends ResourceController
{
    use ResponseTrait;
    private $template = 'saotiago/template/main';
    private $message = "saotiago/message";
    private $title = "saotiago/title";
    private $menu = "saotiago/menu";
    private $ModelResponse;
    private $menu_profile;
    private $token;
    private $uri;

    public function __construct()
    {
        // $this->ModelResponse = new NomeModel();
        $this->uri = new \CodeIgniter\HTTP\URI(current_url());
        helper([
            'myPrint',
            'myEndPoint',
            'myDate',
            'myIdUFF',
            'form'
        ]);
        $this->uri = new \CodeIgniter\HTTP\URI(current_url());
        service('request');
        $this->token = get_cookie('token', true);
        return NULL;
    }

    # route POST /www/sigla/rota
    # route GET /www/sigla/rota
    # Informação sobre o controller
    # retorno do controller [view]
    public function index($parameter = NULL)
    {
        $request = service('request');
        $processRequest = (array)$request->getVar();
        $loadView = array(
            'sigla/title',
            'sigla/menu',
            'sigla/message'
        );
        try {
            # URI da API
            $uri = base_url() . '/sigla/rota/' . $parameter;
            # Decisão URI da API
            if ($processRequest !== array()) {
                $uri = base_url() . '/sigla/rota/path/path/' . $processRequest;
            } else {
                $uri = base_url() . '/sigla/rota/path/path/' . $parameter;
            }
            # Carrega a configuração de API
            $APIform = \Config\Services::curlrequest();
            # Recebe a API
            $requestAPIform = $APIform->request('GET', $uri);
            # Recebe o JSON da API
            $requestJSONform = json_decode($requestAPIform->getBody(), true); // true para exibir em array
            $requestJSONform = array();
            $apiRespond = [
                'http' => array(
                    'header'  => 'Content-type: application/x-www-form-urlencoded',
                    'method'  => 'GET/POST',
                ),
                'message' => 'API loading data (dados para carregamento da API)',
                'date' => date('Y-m-d'),
                // 'method' => '__METHOD__',
                // 'function' => '__FUNCTION__',
                // 'getURI' => $this->uri->getSegments(),
                // 'protocol' => strtoupper(myIdUFF()),
                'page_title' => 'Funções',
                'result' => $requestJSONform,
                'loadView' => $loadView
            ];
        } catch (\Exception $e) {
            $apiRespond = array(
                'message' => array('danger' => $e->getMessage()),
                'loadView' => $loadView
            );
        }
        return view('template/main', $apiRespond);
    }

    # Consumo de API
    # route GET /www/saotiago/main/endpoint/home(:any)
    # route POST /www/saotiago/main/endpoint/home(:any)
    # Informação sobre o controller
    # retorno do controller [VIEW]
    public function main($parameter = NULL)
    {
        $request = service('request');
        $processRequest = (array)$request->getVar();
        #
        $loadView = array(
            $this->title,
            $this->menu,
            $this->message,
            'saotiago/main/index'
        );
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
                // 'getURI' => $this->uri->getSegments(),
                // 'protocol' => strtoupper(myIdUFF()),
                'page_title' => 'Funções',
                'result' => array(),
                'loadView' => $loadView
            ];
        } catch (\Exception $e) {
            $apiRespond = array(
                'message' => array('danger' => $e->getMessage()),
                'loadView' => $loadView
            );
        }
        return view($this->template, $apiRespond);
    }
}
