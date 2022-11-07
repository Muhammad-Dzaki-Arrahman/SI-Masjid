<?php


namespace App\Models;

use CodeIgniter\Model;

class M_kaskeluar extends Model {
        protected $table = 'tbl_kaskeluar';
        protected $primaryKey = 'id_kaskeluar';
        protected $useAutoIncrement = true;
        protected $returnType       = 'array';
        protected $useSoftDeletes   = false;
        protected $protectFields    = true;
        protected $allowedFields    = ['nama', 'jumlah', 'tanggal', 'keterangan'];

        public function getKaskeluar($where = false){
            if($where === false){
                return $this->findAll();
            }
            else{
                return $this->getWhere($where);
            }
        }

}

?>
