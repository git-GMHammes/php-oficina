<?php

namespace App\Filters;

use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\Filters\FilterInterface;
use App\Models\VMenuProfileModel;
use Config\Services;

class ProfileMenuFilter implements FilterInterface
{
    private $ModelProfileMenu;

    public function before(RequestInterface $request, $arguments = null)
    {
        try {
            if (session()->get('logSystem')) {
                $profile = session()->get('logSystem');
                $setProfile = (isset($profile['profile'])) ? ($profile['profile']) : ('unknown');
            } else {
                $setProfile = 'unknown';
            }
            $this->ModelProfileMenu = new VMenuProfileModel();
            $dbResponse = $this->ModelProfileMenu->dBread('id_slug_profile', $setProfile)->orderBy('menu_order', 'ASC')->findAll();
            $profileMenu = ($dbResponse !== array()) ? ($dbResponse) : (array());
            session()->set('profileMenu',  $profileMenu);
            session()->markAsTempdata('apiRespond', 32400);
        } catch (\Exception $e) {
            $message['message']['warning'] = [
                $e->getMessage(),
                'Problemas ao Montar o Menu',
                'Erro: src\app\Filters\ProfileMenuFilter.php'
            ];
            session()->set('message',  $message);
            session()->markAsTempdata('message', 5);
        }
    }

    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
    {
        // Do something here
    }
}
