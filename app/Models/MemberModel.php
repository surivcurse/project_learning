<?php 
namespace App\Models;
use CodeIgniter\Model;

class MemberModel extends Model
{
    protected $db;
    protected $builder;
    protected $table = 'member';
    protected $returnType = '\App\Entities\Member';
    protected $primaryKey = '_id';
    
    protected $allowedFields = ['f_name','l_name','avatar','gender','name_title', 'email','tel','password','address','class_no'];
    protected $validationRules    = [
        'username'     => 'required|alpha_numeric_space|min_length[3]',
        'email'        => 'required|valid_email|is_unique[member.email]',
        'password'     => 'required|min_length[8]',
        'pass_confirm' => 'required_with[password]|matches[password]',
        'tel'          => 'required'
    ];

    protected $validationMessages = [
        'email'        => [
            'is_unique' => 'Sorry. That email has already been taken. Please choose another.'
        ]
    ];

    public function __construct(ConnectionInterface &$db  = null )
    {
        $this->setValidationRules($this->validationRules);
        $this->setValidationMessages($this->validationMessages);   
        if ($db instanceof ConnectionInterface)
        {
            $this->db =& $db;
        }else{
            $this->db = \Config\Database::connect();
        }
        
        $this->builder = $this->db->table($this->table);
    }

    protected $beforeInsert = ['hashPassword'];
    protected $beforeUpdate = ['hashPassword'];
    protected function hashPassword(array $data){
        if (!isset($data['data']['password'])){
            return $data;
        }

        $data['data']['password_hash'] = password_hash($data['data']['password'], PASSWORD_DEFAULT);
        unset($data['data']['password']);

        return $data;
    }

    public function getFields(){
        return $this->allowedFields;
    }

    public function getByEmail($email){
        $query = $this->builder->getWhere(['email' => $email]);   
        return $query->getRowArray();
    }

    public function getUsers(){
        $query = $this->builder->get();
        return $query->getResultArray();
    }
    public function view($id){
        $query = $this->builder->getWhere([$primaryKey => $id]);   
        return $query->getRowArray();    
    }
    public function add($data){
        //$this->builder->set($data);
        try{
            return $this->insert($data);
        }catch(\Exception $e  ){
            return false;
        }
       
    }
    public function edit($data, $id){
        return $this->builder->update($data, [$primaryKey => $id]);    
    }
    public function del($id){
        return $this->builder->delete([$primaryKey => $id]); 
    }


}