<?php
namespace App\Controllers;
use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class ProfilController extends BaseController
{
    public function index()
    {
        $session = session();

        $data = [
            'username' => session()->get('username'),
            'role'     => session()->get('role'),
            'email'    => '1112315363@mhs.dinus.ac.id',
            'login_time' =>date('y-m-d H:i:s'),
            'status'   => 'Sudah Login',
        ];

        return view('v_profil', $data);
    }
}