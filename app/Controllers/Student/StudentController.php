<?php namespace App\Controllers\Student;

use App\Models\InflexionModel;
use  App\Controllers\BaseController;

class StudentController extends BaseController
{
	public function index(){
		return view("student/student_dashboard");
	}
}