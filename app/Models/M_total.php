<?php

namespace App\Models;

use CodeIgniter\Model;

class M_total extends Model {
        protected $table = 'tbl_total';
        protected $primaryKey = 'id_total';
        protected $useAutoIncrement = true;
        protected $returnType       = 'array';
        protected $useSoftDeletes   = false;
        protected $protectFields    = true;
        protected $allowedFields    = ['tahun', 'bulan', 'jumlah_km', 'jumlah_kk', 'total'];

        public function getTotal($where = false){
            if($where === false){
                return $this->findAll();
            }
            else{
                return $this->getWhere($where);
            }
        }

}

?>
