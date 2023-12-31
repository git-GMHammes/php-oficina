<?php

namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;
use CodeIgniter\API\ResponseTrait;
use App\Models\UsersModel;
use App\Models\CustomerModel;

class UserApiController extends ResourceController
{
    use ResponseTrait;

    protected $modelName = 'App\Models\UsersModel';
    protected $format = 'json'; 
    private $ModelCustomers;
    private $ModelUser;
    private $uri;

    public function __construct()
    {
        $this->ModelUser = new UsersModel();
        $this->ModelCustomers = new CustomerModel();
        $this->uri = new \CodeIgniter\HTTP\URI(current_url());
        return (NULL);
    }

    public function index()
    {
        try {
            exit('403 Forbidden');
            $apiRespond = [
                'message' => 'API loading data (dados para carregamento da API)',
                'date' => date('Y-m-d'),
                'uri' => $this->uri,
                // 'method' => '__METHOD__',
                // 'function' => '__FUNCTION__',
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

    private function dbCreateUser($processRequest = array())
    {
        $dbCreate = array();
        if ($processRequest != array()) {
            ($processRequest['data_registro']) ? ($dbCreate['registrationDate'] = $processRequest['data_registro']) : (NULL);
            ($processRequest['expira_em']) ? ($dbCreate['expirationDate'] = $processRequest['expira_em']) : (NULL);
            ($processRequest['perfil']) ? ($dbCreate['profile_id_slug'] = $processRequest['perfil']) : (NULL);
            ($processRequest['status']) ? ($dbCreate['status_active'] = $processRequest['status']) : (NULL);
            ($processRequest['bairro']) ? ($dbCreate['neighborhood'] = $processRequest['bairro']) : (NULL);
            ($processRequest['celular']) ? ($dbCreate['cellphone'] = $processRequest['celular']) : (NULL);
            ($processRequest['endereco']) ? ($dbCreate['street'] = $processRequest['endereco']) : (NULL);
            ($processRequest['telefone']) ? ($dbCreate['phone'] = $processRequest['telefone']) : (NULL);
            ($processRequest['numero']) ? ($dbCreate['number'] = $processRequest['numero']) : (NULL);
            ($processRequest['estado']) ? ($dbCreate['state'] = $processRequest['estado']) : (NULL);
            ($processRequest['cidade']) ? ($dbCreate['city'] = $processRequest['cidade']) : (NULL);
            ($processRequest['email']) ? ($dbCreate['mail'] = $processRequest['email']) : (NULL);
            ($processRequest['cep']) ? ($dbCreate['zip_code'] = $processRequest['cep']) : (NULL);
            ($processRequest['nome']) ? ($dbCreate['name'] = $processRequest['nome']) : (NULL);
            ($processRequest['cpf']) ? ($dbCreate['cpf'] = $processRequest['cpf']) : (NULL);
            ($processRequest['rg']) ? ($dbCreate['rg'] = $processRequest['rg']) : (NULL);
            ($processRequest['uf']) ? ($dbCreate['uf'] = $processRequest['uf']) : (NULL);
        }
        // # myPrint($dbCreate, 'app\Controllers\UserApiController.php, 72', true);
        return $dbCreate;
    }

    private function dbCreateCustomers($processRequest = array())
    {
        $dbCreate = array();
        if ($processRequest != array()) {
            ($processRequest['uf']) ? ($dbCreate['uf'] = $processRequest['uf']) : (NULL);
            ($processRequest['nome']) ? ($dbCreate['name'] = $processRequest['nome']) : (NULL);
            ($processRequest['cep']) ? ($dbCreate['zip_code'] = $processRequest['cep']) : (NULL);
            ($processRequest['email']) ? ($dbCreate['mail'] = $processRequest['email']) : (NULL);
            ($processRequest['cpf']) ? ($dbCreate['document'] = $processRequest['cpf']) : (NULL);
            ($processRequest['cidade']) ? ($dbCreate['city'] = $processRequest['cidade']) : (NULL);
            ($processRequest['estado']) ? ($dbCreate['state'] = $processRequest['estado']) : (NULL);
            ($processRequest['numero']) ? ($dbCreate['number'] = $processRequest['numero']) : (NULL);
            ($processRequest['telefone']) ? ($dbCreate['phone'] = $processRequest['telefone']) : (NULL);
            ($processRequest['endereco']) ? ($dbCreate['street'] = $processRequest['endereco']) : (NULL);
            ($processRequest['celular']) ? ($dbCreate['cellphone'] = $processRequest['celular']) : (NULL);
            ($processRequest['bairro']) ? ($dbCreate['neighborhood'] = $processRequest['bairro']) : (NULL);
            // ($processRequest['status']) ? ($dbCreate['status_active'] = $processRequest['status']) : (NULL);
            // ($processRequest['perfil']) ? ($dbCreate['profile_id_slug'] = $processRequest['perfil']) : (NULL);
            // ($processRequest['expira_em']) ? ($dbCreate['expirationDate'] = $processRequest['expira_em']) : (NULL);
            // ($processRequest['data_registro']) ? ($dbCreate['registrationDate'] = $processRequest['data_registro']) : (NULL);
            ($processRequest['rg']) ? ($dbCreate['document'] = 'RG : ' . $processRequest['rg'] . ' CPF : ' . $processRequest['cpf']) : (NULL);
        }
        // # myPrint($dbCreate, 'app\Controllers\UserApiController.php, 98', true);
        return $dbCreate;
    }

    private function returnFunction($message = array(), $typeMessage, $dataValue = array(), $redirect = NULL)
    {
        // ['success', 'warning', 'danger'];
        if ($message !== array()) {
            $message['message'][$typeMessage] = $message;
            session()->set('message',  $message);
            session()->markAsTempdata('message', 5);
            if ($dataValue !== array()) {
                session()->set('value_form',  $dataValue);
            }
            session()->markAsTempdata('message', 3);
        }
        if ($redirect == NULL) {
            return redirect()->back();
        } else {
            return redirect()->to($redirect);
        }
        return (NULL);
    }

    # route POST /www/saotiago/user/api/criar
    # route GET /www/saotiago/user/api/criar(:any)
    # Informação sobre o controller
    # retorno do controller [JSON]
    public function create($json = NULL)
    {
        # Recebe Token do GET FORM
        $request = service('request');
        $processRequest = (array) $request->getVar();
        #
        $fields = $this->ModelCustomers->dbColumn();
        $pass1 = 1;
        $pass2 = 2;
        try {
            # Parâmentros para receber um POST
            $request = service('request');
            $processRequest = (array)$request->getVar();
            # myPrint($fields['field'], 'app\Controllers\UserApiController.php, 134', true);
            if (isset($processRequest['enviar'])) {
                unset($processRequest['enviar']);
            }
            if (isset($processRequest['cpf'])) {
                $this->ModelUser->dBread('cpf', $processRequest['cpf']);
                if ($this->ModelUser->affectedRows() > 0) {
                    // ['success', 'warning', 'danger'];
                    $this->returnFunction(['CPF já está cadastrado'], 'warning', []);
                }
            }
            if (isset($processRequest['email'])) {
                $this->ModelUser->dBread('mail', $processRequest['email']);
                if ($this->ModelUser->affectedRows() > 0) {
                    // ['success', 'warning', 'danger'];
                    $this->returnFunction(['E-mail já está cadastrado'], 'warning', []);
                }
            }
            if (isset($processRequest['celular'])) {
                $this->ModelUser->dBread('cellphone', $processRequest['celular']);
                if ($this->ModelUser->affectedRows() > 0) {
                    // ['success', 'warning', 'danger'];
                    $this->returnFunction(['Celular já está cadastrado'], 'warning', []);
                }
            }
            ($processRequest['senha']) ? ($pass1 = $processRequest['senha']) : (NULL);
            ($processRequest['senha2']) ? ($pass2 = $processRequest['senha2']) : (NULL);
            if ($pass1 !== $pass2) {
                // ['success', 'warning', 'danger'];
                $this->returnFunction(['Password não são iguais'], 'warning', []);
            } else {
                $dbCreate['password'] = $processRequest['senha'];
            }
            $this->ModelUser->dBcreate($this->dbCreateUser($processRequest));
            # myPrint($this->ModelUser->affectedRows(), 'app\Controllers\UserApiController.php, 172', true);
            $this->ModelCustomers->dBcreate($this->dbCreateCustomers($processRequest));
            # myPrint($this->ModelCustomers->affectedRows(), 'app\Controllers\UserApiController.php, 174', true);
            $apiRespond = [
                'http(s)' => array(
                    'header'  => 'Content-type: application/x-www-form-urlencoded',
                    'method'  => 'GET/POST',
                ),
                'message' => 'API loading data (dados para carregamento da API)',
                'date' => date('Y-m-d'),
                // 'method' => '__METHOD__',
                // 'function' => '__FUNCTION__',
                'page_title' => 'TITLE PAGE',
                // 'result' => $dbResponse,
            ];
            $response = $this->response->setJSON($apiRespond, 201);
        } catch (\Exception $e) {
            $apiRespond = array(
                'message' => array('danger' => $e->getMessage()),
                'page_title' => 'TITLE PAGE',
            );
            $response = $this->response->setJSON($apiRespond, 404);
        }
        if ($json == 'json') {
            return $response;
        } else {
            return redirect()->to('saotiago/user/endpoint/logar');
        }
    }

    # route POST /www/saotiago/user/api/authenticate
    # route GET /www/saotiago/user/api/authenticate(:any)
    # Informação sobre o controller
    # retorno do controller [JSON]
    public function authenticate($parameter = NULL)
    {
        $request = service('request');
        $processRequest = (array)$request->getVar();
        myPrint($processRequest, 'src\app\Controllers\UserApiController.php', true);
        if (isset($processRequest['enviar'])) {
            unset($processRequest['enviar']);
        }
        try {
            jwtCookie();
            $logSystem = [
                'user' => 'gmhammes',
                'profile' => 'su',
                // 'profile' => 'unknown',
                'token' => strtoupper(md5(time())),
            ];
            session()->set('logSystem',  $logSystem);
            session()->markAsTempdata('logSystem', 28800);
            $apiRespond = [
                'http' => array(
                    'header'  => 'Content-type: application/x-www-form-urlencoded',
                    'method'  => 'GET/POST',
                ),
                'message' => 'API loading data (dados para carregamento da API)',
                'date' => date('Y-m-d'),
                // 'method' => '__METHOD__',
                // 'function' => '__FUNCTION__',
                'page_title' => 'Authenticate',
                'result' => NULL,
            ];
            if ($parameter == 'json') {
                $response = $this->response->setJSON($apiRespond, 201);
            } else {
                $response = NULL;
            }
        } catch (\Exception $e) {
            $apiRespond = array(
                'message' => array('danger' => $e->getMessage()),
                'page_title' => 'ERRO - Authenticate',
            );
            if ($parameter == 'json') {
                $response = $this->response->setJSON($apiRespond, 404);
            } else {
                $response = NULL;
            }
        }
        $this->returnFunction(['Login realizado com sucesso'], 'success', []);
        if ($parameter !== 'json') {
            return redirect()->to('saotiago/main/endpoint/home');
        } else {
            return $response;
        }
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
