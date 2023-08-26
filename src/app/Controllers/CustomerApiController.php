<?php

namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;
use CodeIgniter\API\ResponseTrait;
use App\Models\CustomerModel;
use Exception;

class CustomerApiController extends ResourceController
{
    use ResponseTrait;
    private $ModelResponse;
    private $ModelCustomer;
    private $uri;
    //private $template = 'template/main.php';

    public function __construct()
    {
        $this->ModelCustomer = new CustomerModel();
        $this->uri = new \CodeIgniter\HTTP\URI(current_url());
        helper([
            'myEndPoint',
            'myIdUFF',
            'myChar',
            'myDate',
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

    private function tokenForm($parameter)
    {
        if (session()->get('tokenForm')) {
            $receiveToken = session()->get('tokenForm');
            // myPrint($receiveToken, 'www\oficina\app\Views\saotiago\customer\create_form.php', true);
        } else {
            $receiveToken = 'ERRO';
        }
        if ($parameter == $receiveToken) {
            return true;
            exit('---------------------');
        } else {
            return false;
        }
    }

    private function formDictionary($parameter)
    {
        $dbDictionary['rg'] = (isset($parameter['rg'])) ? ($parameter['rg']) : (NULL);
        $dbDictionary['name'] = (isset($parameter['nome'])) ? ($parameter['nome']) : (NULL);
        $dbDictionary['mail'] = (isset($parameter['email'])) ? ($parameter['email']) : (NULL);
        $dbDictionary['zip_code'] = (isset($parameter['cep'])) ? ($parameter['cep']) : (NULL);
        $dbDictionary['city'] = (isset($parameter['cidade'])) ? ($parameter['cidade']) : (NULL);
        $dbDictionary['cpf'] = (isset($parameter['cpf'])) ? (myChar($parameter['cpf'])) : (NULL);
        $dbDictionary['asset'] = (isset($parameter['status'])) ? ($parameter['status']) : (NULL);
        $dbDictionary['state'] = (isset($parameter['estado'])) ? ($parameter['estado']) : (NULL);
        $dbDictionary['gender'] = (isset($parameter['genero'])) ? ($parameter['genero']) : (NULL);
        $dbDictionary['number'] = (isset($parameter['numero'])) ? ($parameter['numero']) : (NULL);
        $dbDictionary['contact'] = (isset($parameter['contato'])) ? ($parameter['contato']) : (NULL);
        $dbDictionary['phone'] = (isset($parameter['telefone'])) ? ($parameter['telefone']) : (NULL);
        $dbDictionary['password2'] = (isset($parameter['senha2'])) ? ($parameter['senha2']) : (NULL);
        $dbDictionary['cellphone'] = isset($parameter['celular']) ? ($parameter['celular']) : (NULL);
        $dbDictionary['neighborhood'] = isset($parameter['bairro']) ? ($parameter['bairro']) : (NULL);
        $dbDictionary['street'] = (isset($parameter['endereco'])) ? ($parameter['endereco']) : (NULL);
        $dbDictionary['profile_id_slug'] = (isset($parameter['perfil'])) ? ($parameter['perfil']) : (NULL);
        $dbDictionary['expirationDate'] = (isset($parameter['expira_em'])) ? ($parameter['expira_em']) : (NULL);
        $dbDictionary['classification'] = (isset($parameter['classificacao'])) ? ($parameter['classificacao']) : (NULL);
        $dbDictionary['registrationDate'] = (isset($parameter['data_registro'])) ? ($parameter['data_registro']) : (NULL);
        $dbDictionary['password'] = (isset($parameter['senha']) && isset($parameter['senha2']) && $parameter['senha'] == $dbDictionary['password2']) ? ($parameter['senha']) : (NULL);
        unset($dbDictionary['password2']);
        $dbDictionary = array_filter($dbDictionary);
        // myPrint($dbDictionary, 'www\oficina\app\Controllers\CustomersEndPointController.php, Line: 101', true);
        return ($dbDictionary);
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

    # route POST /www/saotiago/customer/api/create(:any)
    # route GET /www/saotiago/customer/api/create(:any)
    # Informação sobre o controller
    # retorno do controller [JSON]
    public function create($parameter = NULL)
    {
        # Parâmentros para receber um POST
        $request = service('request');
        $processRequest = (array)$request->getVar();
        #
        $tokenForm = $this->request->getGet('tokenForm');
        #
        if (!$this->tokenForm($tokenForm)) {
            $typeMessage = 'warning';
            $message = [
                'O Token passado não confere'
            ];
            return $this->returnFunction($message, $typeMessage, $processRequest, NULL);
        }
        $this->formDictionary($processRequest);
        // myPrint($this->formDictionary($processRequest), 'www\oficina\app\Controllers\CustomerApiController.php', true);
        $this->ModelCustomer->dBcreate($this->formDictionary($processRequest));
        if ($this->ModelCustomer->affectedRows() > 0) {
            // ['success', 'warning', 'danger'];
            $typeMessage = 'success';
            $message = [
                'Cliente Cadastrado com sucesso'
            ];
            return $this->returnFunction($message, $typeMessage, [], NULL);
        } else {
            $typeMessage = 'warning';
            $message = [
                'Não foi possível cadastrar o Cliente'
            ];
            return $this->returnFunction($message, $typeMessage, $processRequest, NULL);
        }
        // myPrint($this->ModelCustomer, 'www\oficina\app\Controllers\CustomerApiController.php');
        try {
            if ($processRequest !== array()) {
                # CRUD da Model
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
        return $response;
    }
}
