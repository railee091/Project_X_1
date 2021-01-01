<?php namespace App\Filters;

use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\Filters\FilterInterface;

class LoginFilter implements FilterInterface{
    public function before(RequestInterface $request, $arguments = null){
        $isLoggedIn = false;

        if(!$isLoggedIn){
            return redirect()->to('/');
        }
    }

    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null){
        $response->setStatusCode(200);
    }
}