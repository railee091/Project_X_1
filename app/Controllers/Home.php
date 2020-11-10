<?php namespace App\Controllers;

use App\Models\InflexionModel;

class Home extends BaseController
{
	public function index(){
		return view("index");
	}

	public function showMain(){
		return view("main");
	}
	
	public function loginDetails(){
		$data = [
			'loginName' => $this->request->getVar("loginTeacherUsername"),
			'loginPassword' => $this->request->getVar("loginTeacherPassword")
		];
		$db = db_connect();
		$loginFind = new InflexionModel($db);
		
		$info = $loginFind->loginFinder($data);
		return $info;
	}

	public function registryDetails(){
		$data = [
			'email' => $this->request->getVar("signUpEmail"),
			'username' => $this->request->getVar("signUpUsername"),
			'username' => $this->request->getVar("signUpPassword"),
			
		];
	}
}
