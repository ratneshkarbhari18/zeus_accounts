<?php

namespace App\Controllers;
use App\Controllers\PageLoader;
use App\Models\AccountsModel;

class Accounts extends BaseController
{

    public function add()
    {
        $session = session();
		$logged_in = $session->logged_in;
		if(!$logged_in){
			return redirect()->to(site_url("login"));
		}
        $dataToInsert = array(
            "name" => ''
        );
    }

}