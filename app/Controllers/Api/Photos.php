<?php namespace App\Controllers\Api;

use CodeIgniter\RESTful\ResourceController;

class Photos extends ResourceController
{
    //protected $modelName = "App\Models\Photos";
    //protected $format = "json";

    public function index()
    {
        $data = ["respone" => "Index Page!"];
        return $this->respond($data, 200);
    }
    public function create()
    {
        $data = ["respone" => "Register Page!"];
        return $this->respond($data, 200);
    }
}