<?php namespace consulta\Http\Controllers;

use consulta\Http\Requests;
use consulta\Http\Controllers\Controller;

use Illuminate\Http\Request;

class LoginController extends Controller {

	//Formulário de login

	public function form(){
		return view ('form_login');
	}

}
