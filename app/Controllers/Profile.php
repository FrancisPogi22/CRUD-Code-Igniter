<?php

namespace App\Controllers;
use App\Libraries\Hash;
use App\Models\UsersModel;

class Profile extends BaseController
{
    public function userProfile(){
        
        $usersModel = new UsersModel();
        $loggedUserID = session()->get('loggedUser');
        $userInfo = $usersModel->find($loggedUserID);

        $data = array(
            'userInfo' => $userInfo
        );

        return view('profile/userProfile', $data);
    }

    public function userProfileEdit(){

        $updateUser = new UsersModel();
        $loggedUserID = session()->get('loggedUser');
        
        $data = array(
            'fullname' => $this->request->getPost('fullname'),
            'email' => $this->request->getPost('email'),
            'birthday' => $this->request->getPost('birthday'),
            'password' => Hash::make($this->request->getPost('password')),
        );

        $updateUser->update($loggedUserID, $data);

        return redirect()->to('/profile/userProfile')->with('success', 'User Profile Successfully Changed!');
    }

    public function userDetails(){

        $usersModel = new UsersModel();
        $loggedUserID = session()->get('loggedUser');
        $userInfo = $usersModel->find($loggedUserID);

        $data = array(
            'userInfo' => $userInfo
        );

        return view('profile/profileEdit', $data);
    }
}