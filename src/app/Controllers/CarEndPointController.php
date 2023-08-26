<?php

namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;
use CodeIgniter\API\ResponseTrait;
use App\Models\CarsModel;

class CarEndPointController extends ResourceController
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

    public function index()
    {
        try {

            $apiRespond = [
                'message' => 'API loading data (dados para carregamento da API)',
                'date' => date('Y-m-d'),
                'uri' => $this->uri,
                // 'method' => '__METHOD__',
                // 'function' => '__FUNCTION__',
            ];
            // $response = $this->response->setJSON($apiRespond, 201);
        } catch (\Exception $e) {
            $apiRespond = array(
                'message' => array('danger' => $e->getMessage()),
                'page_title' => 'TITLE PAGE',
            );
            // $response = $this->response->setJSON($apiRespond, 404);
        }
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
    # route GET /www/saotiago/car/endpoint/create(:any)
    # route POST /www/ 
    # Informação sobre o controller
    # retorno do controller [VIEW]
    public function create()
    {
        // myPrint($this->tokenForm(), 'www\oficina\app\Controllers\CustomersEndPointController.php', true);
        $this->tokenForm();
        $loadView = array(
            $this->title,
            $this->menu,
            $this->message,
            'saotiago/car/create_form'
        );
        $myEndPoint['color'] = myEndPoint('/saotiago/color/api/read', $this->token);
        $requestJSON['color'] = (isset($myEndPoint['color']['result'])) ? ($myEndPoint['color']['result']) : (array());
        $myEndPoint['manufacturer'] = myEndPoint('/saotiago/manufacturer/api/read', $this->token);
        $requestJSON['manufacturer'] = (isset($myEndPoint['manufacturer']['result'])) ? ($myEndPoint['manufacturer']['result']) : (array());
        $myEndPoint['model'] = myEndPoint('/saotiago/model/api/read', $this->token);
        $requestJSON['model'] = (isset($myEndPoint['model']['result'])) ? ($myEndPoint['model']['result']) : (array());
        try {
            $requestJSON['menu_profile'] = $this->menu_profile;
            $apiRespond = array(
                'result' => $requestJSON,
                'loadView' => $loadView
            );
        } catch (\Exception $e) {
            $apiRespond = array(
                'loadView' => $loadView
            );
            $message['message']['warning'] = array(
                $e->getMessage()
            );
            session()->set('message',  $message);
            session()->markAsTempdata('message', 5);
            // return redirect()->back();
        }
        return view($this->template, $apiRespond);
    }

    public function show($id = null)
    {
        $data = $this->model->find($id);
        if ($data) {
            return $this->respond($data);
        } else {
            return $this->failNotFound('No data found with id ' . $id);
        }
    }

    public function update($id = null)
    {
        $validation =  \Config\Services::validation();

        $rules = [
            // you should set your rules here
            // 'name' => 'required|min_length[3]',
            // ...
        ];

        $inputs = $this->request->getRawInput();

        if (!$validation->setRules($rules)->run($inputs)) {
            return $this->fail($validation->getErrors());
        }

        $update = $this->model->update($id, $inputs);

        if ($this->model->errors()) {
            return $this->fail($this->model->errors());
        }

        return $this->respondUpdated($inputs);
    }

    public function delete($id = null)
    {
        $data = $this->model->find($id);
        if ($data) {
            $this->model->delete($id);
            return $this->respondDeleted($data);
        } else {
            return $this->failNotFound('No data found with id ' . $id);
        }
    }
}
