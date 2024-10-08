<?php

namespace App\Filters;

use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\Filters\FilterInterface;

class AuthFilter implements FilterInterface
{
    public function before(RequestInterface $request, $arguments = null)
    {
        if (!session()->get('Logged') || session()->get('Logged') === NULL) {
            return redirect()->to('/login')->with('error', 'You\'re not logged');
        }
    }

    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null) {}
}
