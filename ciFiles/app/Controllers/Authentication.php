<?php

namespace App\Controllers;
use App\Controllers\PageLoader;
use App\Models\AuthModel;

class Authentication extends BaseController
{

    public function login(){
        $session = session();
        $logged_in = $session->get("logged_in");
        if($logged_in) {
            return redirect()->to(site_url("/"));
        }
        $authModel = new AuthModel();
        $pageLoader = new PageLoader();
        $enteredMobileNumber = $this->request->getPost("mobile_number");
        $enteredPassword = $this->request->getPost("password"); 
        if($enteredMobileNumber==""||$enteredPassword==""){
            $pageLoader->login("","Please Enter both Mobile Number and Password");
        }else {
            $userData = $authModel->where("mobile_number",$enteredMobileNumber)->first();
            if(!$userData){
                $pageLoader->login("","The Mobile number entered is incorrect");
            }else {
                if (!password_verify($enteredPassword,$userData["password"])) {
                    $pageLoader->login("","The Password entered is incorrect");
                } else {
                    $sessionData = array(
                        "first_name" => $userData["first_name"],
                        "last_name" => $userData["last_name"],
                        "mobile_number" => $userData["mobile_number"],
                        "logged_in" => TRUE
                    );
                    $session->set($sessionData);
                    return redirect()->to(site_url("/"));
                }
            }
            
            
        }
    }

}