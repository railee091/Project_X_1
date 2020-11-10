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
			'mem_email' => $this->request->getVar("signUpEmail"),
			'mem_last_name' => $this->request->getVar("signUpLastName"),
			'mem_first_name' => $this->request->getVar("signUpFirstName"),
			'mem_address' => $this->request->getVar("signUpAddress"),
			'mem_bday' => $this->request->getVar("signUpBday"),
			'mem_contact' => $this->request->getVar("signUpContact"),
			'mem_password' => $this->request->getVar("signUpPassword"),
		];

		$db = db_connect();
		$register = new InflexionModel($db);

		$reg = $register->registerAccount($data);

		if($reg == 1){
			return "Successfully registered";
		}
	}
}
