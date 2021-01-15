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

        // $member_id  = (int)$_SERVER['HTTP_MID'];
        // $token = $_SERVER['HTTP_TOKEN'];

        foreach ($this->memberModel->getFields() as $keyfield){
            if(isset($_POST[$keyfield])){
                $member_data[$key]  = $_POST[$keyfield];
            }
        }

        if( $this->memberModel->add($member_data) === false){
            $response['errors'] = $this->memberModel->errors();

            return $this->setResponseFormat('json')->failValidationError($response);  
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