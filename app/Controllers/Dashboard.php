<?php

namespace App\Controllers;
use App\Models\UsersModel;
use App\Models\SearchModel;

class Dashboard extends BaseController
{
    public function userDashboard(){

        $usersModel = new UsersModel();
        $loggedUserID = session()->get('loggedUser');
        $userInfo = $usersModel->find($loggedUserID);

        $data = array(
            'title' => 'Dashboard',
            'userInfo' => $userInfo
        );

        return view('dashboard/userDashboard', $data);
    }

    public function searchUser(){

        $searchModel = new SearchModel();
        $loggedUserID = session()->get('loggedUser');
        $userInfo = $searchModel->find($loggedUserID);
        $inputName = $this->request->getPost('userName');
        $name = $searchModel->like(['fullname'=>'%'. $inputName . '%'])->findAll();

        if(!empty($inputName)){

            $data = array(
                'title' => 'Searched Result',
                'userInfo' => $userInfo,
                'search' => $name

            );
            
            return view('dashboard/userDashboard', $data);
        }

        return view('dashboard/userDashboard');
    }
}
