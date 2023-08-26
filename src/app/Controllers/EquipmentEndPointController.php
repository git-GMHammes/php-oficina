<?php

namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;
use CodeIgniter\API\ResponseTrait;
// use App\Models\NomeModel;
use Exception;

class EquipmentEndPointController extends ResourceController
{
    use ResponseTrait;

    private $template = 'saotiago/template/main';
    private $message = "saotiago/message";
    private $title = "saotiago/title";
    private $menu = "saotiago/menu";
    private $menu_profile;
    private $token;
    private $uri;

    public function __construct()
    {
        helper([
            'myPrint',
            'myEndPoint'
        ]);
        if (session()->get('logSystem')) {
            $apiSession = session()->get('logSystem');
            $profile = '/' . $apiSession['profile'];
        } else {
            $profile = '/unknown';
        }
        $endPoint = myEndPoint('saotiago/profile/api/read' . $profile, $this->token);
        $this->menu_profile = (isset($endPoint['result']['menu_profile'])) ? ($endPoint['result']['menu_profile']) : (array());
        $this->uri = new \CodeIgniter\HTTP\URI(current_url());
        service('request');
        $this->token = get_cookie('token', true);
        return (NULL);
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
        return view($this->template, $apiRespond);
    }

    private function tokenForm()
    {
        $tokenForm = md5(password_hash(time(), PASSWORD_DEFAULT));
        session()->set('tokenForm',  $tokenForm);
        session()->markAsTempdata('tokenForm', 1800);
        // myPrint($tokenForm, 'www\oficina\app\Controllers\CustomersEndPointController.php', true);
        return $tokenForm;
    }

    # Consumo de API
    # route GET /www/saotiago/equipment/endpoint/create/(:any)
    # route POST /www/saotiago/equipment/endpoint/create/(:any)
    # Informação sobre o controller
    # retorno do controller [VIEW]
    public function create($parameter = NULL)
    {
                // myPrint($this->tokenForm(), 'www\oficina\app\Controllers\CustomersEndPointController.php', true);
                $this->tokenForm();
                $loadView = array(
                    $this->title,
                    $this->menu,
                    $this->message,
                    'saotiago/equipment/create_form'
                );
        $request = service('request');
        $processRequest = (array)$request->getVar();
        #
        $loadView = array(
            $this->title,
            $this->menu,
            $this->message,
            'saotiago/equipment/create_form'
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
            $requestJSON['menu_profile'] = $this->menu_profile;
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
                'result' => $requestJSON,
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

    # Consumo de API
    # route GET /www/sigla/rota
    # route POST /www/sigla/rota
    # Informação sobre o controller
    # retorno do controller [VIEW]
    public function read($parameter = NULL)
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
        return view($this->template, $apiRespond);
    }

    # Consumo de API
    # route GET /www/sigla/rota
    # route POST /www/sigla/rota
    # Informação sobre o controller
    # retorno do controller [VIEW]
    public function update($parameter = NULL)
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
        return view($this->template, $apiRespond);
    }

    # Consumo de API
    # route GET /www/sigla/rota
    # route POST /www/sigla/rota
    # Informação sobre o controller
    # retorno do controller [VIEW]
    public function delete($parameter = NULL)
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
        return view($this->template, $apiRespond);
    }
}
