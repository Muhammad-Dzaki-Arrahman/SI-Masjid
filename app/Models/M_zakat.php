<?php


namespace App\Models;

use CodeIgniter\Model;

class M_zakat extends Model {
        protected $table = 'tbl_zakat';
        protected $allowedFields    = ['nama', 'tanggal', 'jenis_zakat', 'jumlah'];

        public function getZakat($where = false){
            if($where === false){
                return $this->findAll();
            }
            else{
                return $this->getWhere($where);
            }
        }

}

?>
