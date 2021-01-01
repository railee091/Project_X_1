<?php namespace App\Controllers;

use App\Models\InflexionModel;
use CodeIgniter\HTTP\RequestInterface;


class UserController extends BaseController{
    public $LoginModel;
    public function __constructor(LoginModel $LoginModel){
        $this->LoginModel = $LoginModel;
    }

    

    public function checkLogin(){
        $loginDetails = [
            'user_username' => $this->request->getVar('username'),
            'user_password' => $this->request->getVar('password')
        ];
        $db = db_connect();
				$model = new InflexionModel($db);
                $use = $model->CheckLogin($loginDetails);
        return $use;
    }

    public function signMeUp(){
        $signUpDetails = [
            'user_lastName' => $this->request->getVar('signUpFirstName'),
            'user_firstName' => $this->request->getVar('signUpLastName'),
            'user_username' => $this->request->getVar('signUpEmail'),
            'user_address' => $this->request->getVar('signUpAddress'),
            'user_bdate' => $this->request->getVar('signUpBday'),
            'user_contact' => $this->request->getVar('signUpContact'),
            'user_password' => password_hash($this->request->getVar('signUpPassword'), PASSWORD_DEFAULT),
            'user_type' => $this->request->getVar('type')
        ];

        $db = db_connect();
				$model = new InflexionModel($db);
                $use = $model->signUser($signUpDetails);
        if($use == 0){
            $session = session();
            $session->setFlashData('fail', 'Email address already exists');
            return redirect('/');
        }else{
            $session = session();
			$session->setFlashData('success', 'Account Created! You may now login');
                return redirect('/');
        }
    }
}