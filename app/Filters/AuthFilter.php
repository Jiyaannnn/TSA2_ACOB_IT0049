<?php
namespace App\Filters;
use CodeIgniter\Filters\FilterInterface;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
class AuthFilter implements FilterInterface {
    public function before(RequestInterface $request, $arguments = null) {
        if (session()->get('staff_id')) return;
        if ($request->getMethod() === 'GET') {
            $path = '/' . ltrim($request->getUri()->getPath(), '/');
            session()->set('auth_redirect', $path);
            session()->set('auth_notice', str_starts_with($path, '/tasks')
                ? 'Sign in to manage shop tasks.'
                : (str_starts_with($path, '/customers') ? 'Sign in to view customer accounts.' : 'Sign in to view staff accounts.'));
        }
        return redirect()->to(site_url('login'));
    }
    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null) {}
}
