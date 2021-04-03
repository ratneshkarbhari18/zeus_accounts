<?php

namespace App\Controllers;
use App\Models\AccountsModel;



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
		$accountsModel = new AccountsModel();
		$allAccounts = $accountsModel->findAll();
		$data = array(
			"title" => "Dashboard",
			"allAccounts" => $allAccounts
		);
		$this->page_loader("dashboard",$data);
	}

	public function login($success="",$error=""){
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

	public function settings($success="",$error=""){
		$session = session();
		$logged_in = $session->logged_in;
		if(!$logged_in){
			return redirect()->to(site_url("login"));
		}
		$data = array(
			"title" => "Settings",
			"success" => $success,
			"error" => $error
		);
		$this->page_loader("settings",$data);
	}

	public function manage_accounts($success="",$error=""){
		$session = session();
		$logged_in = $session->logged_in;
		if(!$logged_in){
			return redirect()->to(site_url("login"));
		}
		$accountsModel = new AccountsModel();
		$allAccounts = $accountsModel->findAll();
		$data = array(
			"title" => "Manage Accounts",
			"accounts" => $allAccounts,
			"success" => $success,
			"error" => $error
		);	
		$this->page_loader("manage_accounts",$data);
	}

	public function add_new_account($success="",$error=""){
		$session = session();
		$logged_in = $session->logged_in;
		if(!$logged_in){
			return redirect()->to(site_url("login"));
		}
		$data = array(
			"title" => "Add New Account",
			"success" => $success,
			"error" => $error
		);	
		$this->page_loader("add_new_account",$data);
	}

	

}
