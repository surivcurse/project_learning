<?php namespace App\Controllers\Api;

use CodeIgniter\API\ResponseTrait;
use App\Controllers\BaseController;

class Member extends BaseController
{

    use ResponseTrait;
    
    public function __construct()
    {
        $this->memberModel = new \App\Models\MemberModel();
    }

    public function register(){
      
        $member_data = [];

        foreach ($this->memberModel->getFields() as $keyfield){
            if(isset($_POST[$keyfield])){
                $member_data[$key]  = $_POST[$keyfield];
            }
        }


        // $email = $_POST['email'];
        // $email = $_POST['email'];
        // $email = $_POST['email'];
        // $email = $_POST['email'];
        // $email = $_POST['email'];
        // $email = $_POST['email'];
        // $email = $_POST['email'];
       return $this->setResponseFormat('json')->respond($this->memberModel->getFields(),200);
    }




}