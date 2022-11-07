<?php


namespace App\Models;

use CodeIgniter\Model;

class M_login extends Model {
        protected $table = 'tbl_admin';
        protected $primaryKey       = 'id';
        protected $allowedFields    = ['username','password'];

        public function getAdmin($where = false){
            if($where === false){
                return $this->findAll();
            }
            else{
                return $this->getWhere($where);
            }
        }

}

?>