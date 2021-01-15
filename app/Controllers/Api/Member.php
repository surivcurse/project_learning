<?php namespace App\Controllers\Api;

use CodeIgniter\API\ResponseTrait;
use App\Controllers\BaseController;

class Member extends BaseController
{

    use ResponseTrait;

    public function register(){
        $memberModel = new \App\Models\MemberModel();

       // protected $allowedFields = ['f_name','l_name','avatar','gender','name_title', 'email','tel','password','address','class_no'];
        // $email = $_POST['email'];
        // $email = $_POST['email'];
        // $email = $_POST['email'];
        // $email = $_POST['email'];
        // $email = $_POST['email'];
        // $email = $_POST['email'];
        // $email = $_POST['email'];
       return $this->respond($memberModel->getFields);
    }




}