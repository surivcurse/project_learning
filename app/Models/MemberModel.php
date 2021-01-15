<?php 
namespace App\Models;
use CodeIgniter\Model;

class MemberModel extends Model
{
    protected $db;
    protected $table = 'member';

    protected $primaryKey = '_id';
    
    public $allowedFields = ['f_name','l_name','avatar','gender','name_title', 'email','tel','password','address','class_no'];

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
        $this->model->setValidationRules($validationRules);
        $this->model->setValidationMessages($validationMessages);   
        if ($db instanceof ConnectionInterface)
        {
            $this->db =& $db;
        }
        else
        {
            $this->db = Database::connect($this->DBGroup);
        }
        
        $builder = $this->db->table($this->table);
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

    public function getByEmail($email){
        $query = $builder->getWhere(['email' => $email]);   
        return $query->getRowArray();
    }

    public function getUsers(){
        $query = $builder->get();
        return $query->getResultArray();
    }
    public function view($id){
        $query = $builder->getWhere([$primaryKey => $id]);   
        return $query->getRowArray();    
    }
    public function add($data){
        return $builder->insert($data);
    }
    public function edit($data, $id){
        return $builder->update($data, [$primaryKey => $id]);    
    }
    public function del($id){
        return $builder->delete([$primaryKey => $id]); 
    }


}