<?php namespace App\Controllers\Api;

use CodeIgniter\API\ResponseTrait;
use CodeIgniter\RESTful\ResourceController;
//use App\Controllers\BaseController;
use App\Models\MemberModel;

class Member extends ResourceController
{
    use ResponseTrait;

    public function __construct()
    {
        helper("form");
        //$this->memberModel = new MemberModel($db);
    }

    public function index()
    {
        $data = ["respone" => "Hello World!"];
        return $this->respond($data, 200);
    }

    public function register()
    {
        //$memberModel = new MemberModel($db);

        $memberModel = model("App\Models\MemberModel");
        $member_data = [];

        //$memberModel->setValidationRules($memberModel->validationRules);
        //$memberModel->setValidationMessages($memberModel->validationMessages);
        // $member_id  = (int)$_SERVER['HTTP_MID'];
        // $token = $_SERVER['HTTP_TOKEN'];
        foreach ($memberModel->requiredField as $k) {
            if (isset($_POST[$k])) {
                $member_data[$k] = $_POST[$k];
            } else {
                $member_data[$k] = "";
            }
        }

        try {
            if ($memberModel->insert($member_data) === false) {
                $response["errors"] = $memberModel->errors();
                return $this->setResponseFormat("json")->respond(
                    $response,
                    400
                );
            }
        } catch (\Exception $e) {
            return $this->setResponseFormat("json")->respond($e, 400);
        }

        return $this->setResponseFormat("json")->respond($response, 400);
    }
}