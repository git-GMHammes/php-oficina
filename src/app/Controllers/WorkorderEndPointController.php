<?php

namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;
use CodeIgniter\API\ResponseTrait;
use App\Models\WorkordersModel;

class WorkorderEndPointController extends ResourceController
{
    use ResponseTrait;

    protected $modelName = 'App\Models\WorkordersModel';
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

    # Consumo de API
    # route GET /www/saotiago/workorder/endpoint/create(:any)
    # route POST /www/saotiago/workorder/endpoint/create
    # Informação sobre o controller
    # retorno do controller [VIEW]
    public function create()
    {
        $request = service('request');
        $processRequest = (array) $request->getVar();

        $loadView = array(
            $this->title,
            $this->menu,
            $this->message,
            'saotiago/workorder/create_form'
        );
        try {
            $return['menu_profile'] = $this->menu_profile;
            $apiRespond = array(
                'result' => $return,
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
