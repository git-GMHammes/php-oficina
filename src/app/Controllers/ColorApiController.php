<?php
namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;
use CodeIgniter\API\ResponseTrait;
use App\Models\ColorModel;
use Exception;

class ColorApiController extends ResourceController
{
    use ResponseTrait;
    private $ModelColor;
    private $uri;
    //private $template = 'template/main.php';

    public function __construct()
    {
        $this->ModelColor = new ColorModel();
        $this->uri = new \CodeIgniter\HTTP\URI(current_url());
       helper([
           'myPrint',
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
                'message' => array('danger'=>$e->getMessage()),
                'page_title' => 'TITLE PAGE',
            );
            $response = $this->response->setJSON($apiRespond, 404);
        }
        return $response;
    }

        # route POST /www/saotiago/color/api/read/(:any)
        # route GET /www/saotiago/color/api/read/(:any)
        # Informação sobre o controller
        # retorno do controller [JSON]
        public function read($parameter = NULL)
        {
            $request = service('request');
            $processRequest = (array)$request->getVar();
            #
            $dbResponse = $this->ModelColor->dbRead()->findAll();
            // myPrint($color, 'www\oficina\app\Controllers\ColorApiController.php');
            try {
                if ($processRequest !== array()) {
                    # CRUD da Model
                    // $dbResponse[] = $this->ModelResponse->dBcreate($processRequest);
                    // $dbResponse[] = $this->ModelResponse->dBread($IdUFF = NULL);
                    // $dbResponse[] = $this->ModelResponse->dBupdate($IdUFF = NULL);
                    // $dbResponse[] = $this->ModelResponse->dBdelete($IdUFF = NULL);
                }else{
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
                    'page_title' => 'API Listar Cores',
                    'result' => $dbResponse,
                ];
                $response = $this->response->setJSON($apiRespond, 201);
            } catch (\Exception $e) {
                $apiRespond = array(
                    'message' => array('danger'=>$e->getMessage()),
                    'page_title' => 'API Listar Cores',
                );
                $response = $this->response->setJSON($apiRespond, 404);
            }
            return $response;
        }
}
