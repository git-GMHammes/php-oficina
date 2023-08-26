<?php

namespace App\Controllers;

class Home extends BaseController
{
    private $menu_profile;
    private $template = 'saotiago/template/main';
    private $message = "saotiago/message";
    private $title = "saotiago/title";
    private $menu = "saotiago/menu";
    private $token;
    private $uri;

    public function __construct()
    {
        helper([
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
        helper([
            'myPrint',
            'myEndPoint'
        ]);
        if (session()->get('logSystem')) {
            $apiSession = session()->get('logSystem');
            // myPrint($apiSession, 'app\Controllers\UserApiController.php, 164', true);
            $endPoint = myEndPoint('saotiago/profile/api/read/' . $apiSession['profile'], $this->token);
            $this->menu_profile = (isset($endPoint['result']['menu_profile'])) ? ($endPoint['result']['menu_profile']) : (array());
        } else {
            $endPoint = myEndPoint('saotiago/profile/api/read', $this->token);
            $this->menu_profile = (isset($endPoint['result']['menu_profile'])) ? ($endPoint['result']['menu_profile']) : (array());
        }
        $loadView = array(
            $this->title,
            $this->menu,
            $this->message,
            'saotiago/construcao'
        );
        $return['menu_profile'] = $this->menu_profile;
        $apiRespond = array(
            'result' => $return,
            'loadView' => $loadView
        );
        return view($this->template, $apiRespond);
    }
}
