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

        foreach ($this->memberModel->getFields() as $k){
             if(isset($_POST[$k])){
                $member_data[$k] = $_POST[$k];
             }else{
                $member_data[$k] = null;
             }
            
        }

        try{
            if( $this->memberModel->add($member_data) === false){
                $response['errors'] = $this->memberModel->errors();
                return $this->setResponseFormat('json')->failValidationError($response);  
            }
        }catch(Exception $e ){
            return $this->setResponseFormat('json')->failValidationError($e);  
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