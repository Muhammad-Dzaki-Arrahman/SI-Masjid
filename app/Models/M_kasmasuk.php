<?php


namespace App\Models;

use CodeIgniter\Model;

class M_kasmasuk extends Model {
        protected $table = 'tbl_kasmasuk';
        protected $primaryKey = 'id_kasmasuk';
        protected $useAutoIncrement = true;
        protected $returnType       = 'array';
        protected $useSoftDeletes   = false;
        protected $protectFields    = true;
        protected $allowedFields    = ['nama', 'jumlah', 'tanggal', 'keterangan'];

        public function getKasmasuk($where = false){
            if($where === false){
                return $this->findAll();
            }
            else{
                return $this->getWhere($where);
            }
        }

}

?>