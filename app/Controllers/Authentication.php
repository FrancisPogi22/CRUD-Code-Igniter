<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Libraries\Hash;
use App\Models\UsersModel;
use \Config\Services;

class Authentication extends BaseController
{
    public function index(){
        return view('authenticate/login');
    }
    
    public function login(){
        return view('authenticate/login');
    }

    public function registerUser(){

        $registerUser = new UsersModel();
        $validation = Services::validation();
        $validation->setRuleGroup('signUpRules');
        $validation->withRequest($this->request)->run();
        
        if ($validation->hasError('fullname')){
            $error = $validation->getError('fullname');
            session()->setFlashdata('fail', $error);
            return redirect()->to('/authentication/login');
        }

        else if ($validation->hasError('email')){
            $error = $validation->getError('email');
            session()->setFlashdata('fail', $error);
            return redirect()->to('/authentication/login');
        }

        else if($validation->hasError('birthday')){
            $error = $validation->getError('birthday');
            session()->setFlashdata('fail', $error);
            return redirect()->to('/authentication/login');
        }
        
        else if($validation->hasError('password')){
            $error = $validation->getError('password');
            session()->setFlashdata('fail', $error);
            return redirect()->to('/authentication/login');
        }
        
        else if($validation->hasError('Cpassword')){
            $error = $validation->getError('Cpassword');
            session()->setFlashdata('fail', $error);
            return redirect()->to('/authentication/login');
        }
        
        else{

            $data = array(
                'fullname' => $this->request->getPost('fullname'),
                'email' => $this->request->getPost('email'),
                'birthday' => $this->request->getPost('birthday'),
                'password' => Hash::make($this->request->getPost('password')),
            );

            $registerUser->insert($data);

            if(!$registerUser)
                return redirect()->back()->with('fail', 'Something Went Wrong!');

            else{
                $last_id = $registerUser->insertID();
                session()->set('loggedUser', $last_id);
                return redirect()->to('dashboard/userDashboard');
            }
        }
    }

    function checkUser(){

        $usersModel = new UsersModel();
        $validation = Services::validation();
        $validation->setRuleGroup('signInRules');
        $validation->withRequest($this->request)->run();

        if ($validation->hasError('email')){
            $error = $validation->getError('email');
            session()->setFlashdata('fail', $error);
            return redirect()->to('/authentication/login');
        }
        
        else if($validation->hasError('password')){
            $error = $validation->getError('password');
            session()->setFlashdata('fail', $error);
            return redirect()->to('/authentication/login')->withInput();
        }
        
        else{

            $email = $this->request->getPost('email');
            $password = $this->request->getPost('password');
            $user_info = $usersModel->where('email', $email)->first();

            if(!$user_info){
                session()->setFlashdata('fail', 'Incorrect Email Address, Please Try Again!');
                return redirect()->to('/authentication/login')->withInput();
            }

            $check_password = Hash::check($password, $user_info['password']);

            if(!$check_password){
                session()->setFlashdata('fail', 'Incorrect Password, Please Try Again!');
                return redirect()->to('/authentication/login')->withInput();
            }
            
            else{
                $user_id = $user_info['id'];
                session()->set('loggedUser', $user_id);
                return redirect()->to('dashboard/userDashboard');
            }
        }  
    }

    function logout(){

        if(session()->has('loggedUser')){
            session()->remove('loggedUser');
            redirect()->to('/authentication?access=out')->with('fail', 'Successfully Logged Out!');
            return redirect()->to('authentication/login');
        }
        
    }
}