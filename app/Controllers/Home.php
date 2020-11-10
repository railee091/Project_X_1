<?php namespace App\Controllers;

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
		
		
		return json_encode($data);

	}
}
