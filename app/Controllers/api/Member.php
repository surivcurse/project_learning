<?php namespace App\Controllers;

class Member extends BaseController
{
    public function register(){
        $memberModel = model('App\Models\Member_Model');
        print_r($memberModel->allowedFields);
       // protected $allowedFields = ['f_name','l_name','avatar','gender','name_title', 'email','tel','password','address','class_no'];
        // $email = $_POST['email'];
        // $email = $_POST['email'];
        // $email = $_POST['email'];
        // $email = $_POST['email'];
        // $email = $_POST['email'];
        // $email = $_POST['email'];
        // $email = $_POST['email'];

        
        
        return view('templates/contact');
    }




}