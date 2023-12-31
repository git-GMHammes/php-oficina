<?php

namespace App\Filters;

use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\Filters\FilterInterface;
use Config\Services;

class JwtCookieFilter implements FilterInterface
{
    public function before(RequestInterface $request, $arguments = null)
    {
        $url_redirect = base_url()."/saotiago/user/endpoint/authenticate";
        // Incluindo os arquivos manualmente
        require_once(APPPATH . 'Libraries/JWT/src/BeforeValidException.php');
        require_once(APPPATH . 'Libraries/JWT/src/ExpiredException.php');
        require_once(APPPATH . 'Libraries/JWT/src/SignatureInvalidException.php');
        require_once(APPPATH . 'Libraries/JWT/src/JWT.php');
        require_once(APPPATH . 'Libraries/JWT/src/Key.php');

        $keys = [
            "key1" => new \Firebase\JWT\Key(D2B5A170764157EB93CFCBF66151A70C, 'HS256')
        ];
        $request = \Config\Services::request();
        $token = $request->getCookie('token');
        // print_r($token);
        if ($token) {
            try {
                $decoded = \Firebase\JWT\JWT::decode($token, $keys['key1']);
            } catch (\Exception $e) {
                if ($request->getServer('REQUEST_METHOD') === 'GET' && strpos($request->getUri(), '/api/') === false) {
                    return redirect()->to($url_redirect);
                } else {
                    return Services::response()->setJSON(['error' => 'Invalid token'])->setStatusCode(ResponseInterface::HTTP_UNAUTHORIZED);
                }
            }
        } else {
            if ($request->getServer('REQUEST_METHOD') === 'GET' && strpos($request->getUri(), '/api/') === false) {
                return redirect()->to($url_redirect);
            } else {
                return Services::response()->setJSON(['error' => 'Token not found'])->setStatusCode(ResponseInterface::HTTP_UNAUTHORIZED);
            }
        }
    }

    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
    {
        // Do something here
    }
}