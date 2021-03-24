<?php

namespace App\Controllers;

class PageLoader extends BaseController
{

	private function page_loader($view_name,$data){
		echo view("templates/header",$data);
		echo view("pages/".$view_name,$data);
		echo view("templates/footer",$data);
	}

	public function dashboard()
	{
		$session = session();
		$logged_in = $session->logged_in;
		if(!$logged_in){
			return redirect()->to(site_url("login"));
		}
		$data = array(
			"title" => "Dashboard"
		);
		$this->page_loader("dashboard",$data);
	}

	public function login($success="",$error="")
	{
		$session = session();
		$logged_in = $session->logged_in;
		if($logged_in){
			return redirect()->to(site_url("/"));
		}
		$data = array(
			"title" => "Login",
			"success" => $success,
			"error" => $error
		);
		$this->page_loader("login",$data);
	}

}
