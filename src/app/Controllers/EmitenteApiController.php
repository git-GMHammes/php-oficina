<?php

namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;
use CodeIgniter\API\ResponseTrait;
use App\Models\CustomerModel;
use Exception;

class EmitenteApiController extends ResourceController
{
    use ResponseTrait;
    private $ModelCustomer;
    private $uri;

    public function __construct()
    {
        $this->ModelCustomer = new CustomerModel();
        $this->uri = new \CodeIgniter\HTTP\URI(current_url());
        helper([
            'myPrint',
            'myIdUFF',
            'myFake',
        ]);
        return NULL;
    }

    # route POST /www/saotiago/emitente/api/fake(:any)
    # route GET /www/saotiago/emitente/api/fake(:any)
    # Informação sobre o controller
    # retorno do controller [JSON]
    public function index($parameter = NULL)
    {
        set_time_limit(1200);
        for ($i = 0; $i < 1000; $i++) {
            $name1 = myFakeNameFull();
            $name2 = myFakeNameFull();
            $data = [
                'profile_id_slug' => 'client',
                'classification' => 'empresa',
                'name' => $name1,
                'gender' => '',
                'rg' => time(),
                'cpf' => myFakeCPFrandom(),
                'zip_code' => myFakeAddressZipCode(),
                'street' => myFakeAddress($name1),
                'number' => myFakeNumberAddress(),
                'neighborhood' => myFakeAddressDistrict(),
                'city' => 'Rio de Janeiro',
                'state' => 'RJ',
                'mail' => myFakeMail($name1),
                'password' => strtoupper(md5(password_hash(time(), PASSWORD_DEFAULT))),
                'phone' => myFakePhone(),
                'cellphone' => myFakeCellPhone(),
                'asset' => 'Y',
                'registrationDate' => myFakeDate(),
                'expirationDate' => myFakeDate(),
                'contact' => $name2,
                'created_at' => date('Y-m-d'),
                'updated_at' => date('Y-m-d'),
                'deleted_at' => date('Y-m-d'),
            ];
            $this->ModelCustomer->dbCreate($data);
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

    private function aliasFields($processRequestFields = array())
    {
        $dbCreate = array();

        (isset($processRequestFields['nome'])) ? ($dbCreate['db_name'] = $processRequestFields['nome']) : (NULL);
        (isset($processRequestFields['cnpj'])) ? ($dbCreate['db_name'] = $processRequestFields['cnpj']) : (NULL);
        (isset($processRequestFields['ie'])) ? ($dbCreate['db_name'] = $processRequestFields['ie']) : (NULL);
        (isset($processRequestFields['endereco'])) ? ($dbCreate['db_name'] = $processRequestFields['endereco']) : (NULL);
        (isset($processRequestFields['numero'])) ? ($dbCreate['db_name'] = $processRequestFields['numero']) : (NULL);
        (isset($processRequestFields['bairro'])) ? ($dbCreate['db_name'] = $processRequestFields['bairro']) : (NULL);
        (isset($processRequestFields['cidade'])) ? ($dbCreate['db_name'] = $processRequestFields['cidade']) : (NULL);
        (isset($processRequestFields['uf'])) ? ($dbCreate['db_name'] = $processRequestFields['uf']) : (NULL);
        (isset($processRequestFields['telefone'])) ? ($dbCreate['db_name'] = $processRequestFields['telefone']) : (NULL);
        (isset($processRequestFields['email'])) ? ($dbCreate['db_name'] = $processRequestFields['email']) : (NULL);
        (isset($processRequestFields['cep'])) ? ($dbCreate['db_name'] = $processRequestFields['cep']) : (NULL);
        (isset($processRequestFields['site'])) ? ($dbCreate['db_name'] = $processRequestFields['site']) : (NULL);

        (isset($processRequestFields['created_at'])) ? ($dbCreate['created_at'] = $processRequestFields['created_at']) : (NULL);
        (isset($processRequestFields['updated_at'])) ? ($dbCreate['updated_at'] = $processRequestFields['updated_at']) : (NULL);
        return ($dbCreate);
    }

    # route POST /www/sigla/rota
    # route GET /www/sigla/rota
    # Informação sobre o controller
    # retorno do controller [JSON]
    public function create($parameter = NULL)
    {
        # Parâmentros para receber um POST
        $request = service('request');
        $processRequest = (array)$request->getVar();
        #
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
