<?php namespace App\Controllers\Api;

use CodeIgniter\API\ResponseTrait;
use App\Controllers\BaseController;
use App\Models\MemberModel;

class Member extends BaseController
{

    use ResponseTrait;
    
    public function __construct()
    {
        helper('form');
        //$this->memberModel = new MemberModel($db);
    }

    public function register(){
        $memberModel = new MemberModel($db);
        $member_data = [];
        $this->setValidationRules($memberModel->validationRules);
        $this->setValidationMessages($memberModel->validationMessages);   
        // $member_id  = (int)$_SERVER['HTTP_MID'];
        // $token = $_SERVER['HTTP_TOKEN'];
        foreach ($memberModel->requiredField as $k){
             if(isset($_POST[$k])){
                $member_data[$k] = $_POST[$k];
             }else{
                $member_data[$k] = null;
             }
            
        }

        try{
            if( $memberModel->insert($member_data) === false){
                $response['errors'] = $memberModel->errors();
                return $this->setResponseFormat('json')->failValidationError($response);  
            }
        }catch(\Exception $e ){
            return $this->setResponseFormat('json')->failValidationError($e);  
        }
       
       

        // $email = $_POST['email'];
        // $email = $_POST['email'];
        // $email = $_POST['email'];
        // $email = $_POST['email'];
        // $email = $_POST['email'];
        // $email = $_POST['email'];
        // $email = $_POST['email'];
       return $this->setResponseFormat('json')->respond($memberModel->getFields(),200);
    }




}