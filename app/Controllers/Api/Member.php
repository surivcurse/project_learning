<?php namespace App\Controllers\Api;


use App\Controllers\BaseController;

class Member extends BaseController
{

    public function register(){
        $memberModel = new \App\Models\MemberModel();

        print_r($memberModel->getFields);
       // protected $allowedFields = ['f_name','l_name','avatar','gender','name_title', 'email','tel','password','address','class_no'];
        // $email = $_POST['email'];
        // $email = $_POST['email'];
        // $email = $_POST['email'];
        // $email = $_POST['email'];
        // $email = $_POST['email'];
        // $email = $_POST['email'];
        // $email = $_POST['email'];
        return view('templates/home');
    }




}