<?php 

    namespace App\Models;  
    use CodeIgniter\Model;

    class ControlModel extends Model {

        protected $table = 'users';
        protected $primaryKey = 'id';

        protected $allowedFields = ['perfil_id', 'first_name', 'last_name', 'email', 'password', 'celular', 'site', 'facebook',
                                    'linkedin', 'status', 'created_at', 'updated_at', 'deleted_at'];

        protected $returnType       = 'array';

        protected $useTimestamps = true;
        protected $useSoftDeletes = true;
        
        protected $createdField  = 'created_at';
        protected $updatedField  = 'updated_at';
        protected $deletedField  = 'deleted_at';


        public function getLogin($dados) 
        {
            if (!$dados['email']) 
            {
                return false;
            } 
            else 
            {
                $db = db_connect('default');
                $builder = $db->table('users');
                $builder->select('*');
                $builder->where('email', $dados['email']);
                $query = $builder->get();
                $user = $query->getResultArray();
            }

            if (!$user) 
            {
                return false;
            } 
            else 
            {
                if (md5($dados['senha']) == $user[0]['password']) {
                    $db = db_connect('default');
                    $builder = $db->table('users');
                    $builder->select('*');
                    $builder->where('email =', $dados['email']);
                    $query = $builder->get();
                    return $query->getResultArray();
                } else {
                    return false;
                }
            }
        }

        public function getUser($id) 
        {
            $db = db_connect('default');
            $builder = $db->table('users');
            $builder->select('*');
            $builder->where('id =', $id);
            $query = $builder->get();
            return $query->getRow();
        }

        public function getUsers() 
        {
            $db = db_connect('default');
            $builder = $db->table('users');
            $builder->select('*');
            $builder->where('id !=', 1);
            $query = $builder->get();
            return $query->getResultArray();
        }
    }