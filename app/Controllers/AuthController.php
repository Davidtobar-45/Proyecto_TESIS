<?php
namespace App\Controllers;

use App\Models\UsuarioModel;
use Google\Client as GoogleClient;

class AuthController extends BaseController
{
    public function login()
    {
        return view('auth/login_moderno');
    }

    public function auth()
    {
        $model = new UsuarioModel();

        $user = $model->where('usuario', $this->request->getPost('usuario'))->first();

        if ($user && password_verify($this->request->getPost('password'), $user['password'])) {
            session()->set([
                'id' => $user['id'],
                'nombre' => $user['nombre'],
                'logged_in' => true
            ]);
            return redirect()->to('/');
        }

        return redirect()->back()->with('error', 'Credenciales incorrectas');
    }

    public function registro()
    {
        return view('auth/registro_moderno');
    }

    public function guardarRegistro()
    {
        $model = new UsuarioModel();

        $model->insert([
            'nombre'   => $this->request->getPost('nombre'),
            'usuario'  => $this->request->getPost('usuario'),
            'email'    => $this->request->getPost('email'),
            'password' => password_hash($this->request->getPost('password'), PASSWORD_DEFAULT),
            'proveedor'=> 'local'
        ]);

        return redirect()->to('/login')->with('success', 'Usuario registrado correctamente');
    }

    public function google()
    {
        $client = new GoogleClient();
        $client->setClientId('TU_CLIENT_ID');
        $client->setClientSecret('TU_CLIENT_SECRET');
        $client->setRedirectUri(base_url('auth/googleCallback'));
        $client->addScope(['email','profile']);

        return redirect()->to($client->createAuthUrl());
    }

    public function googleCallback()
    {
        $client = new GoogleClient();
        $client->setClientId('TU_CLIENT_ID');
        $client->setClientSecret('TU_CLIENT_SECRET');
        $client->setRedirectUri(base_url('auth/googleCallback'));

        $client->fetchAccessTokenWithAuthCode($this->request->getGet('code'));
        $oauth = new \Google\Service\Oauth2($client);
        $googleUser = $oauth->userinfo->get();

        $model = new UsuarioModel();
        $user = $model->where('email', $googleUser->email)->first();

        if (!$user) {
            $model->insert([
                'nombre' => $googleUser->name,
                'email' => $googleUser->email,
                'usuario' => explode('@', $googleUser->email)[0],
                'google_id' => $googleUser->id,
                'proveedor' => 'google'
            ]);
            $user = $model->where('email', $googleUser->email)->first();
        }

        session()->set([
            'id' => $user['id'],
            'nombre' => $user['nombre'],
            'logged_in' => true
        ]);

        return redirect()->to('/');
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to('/login');
    }
}
