<?php


namespace App\Models;

use CodeIgniter\Model;

class M_kegiatan extends Model {
        protected $table = 'tbl_kegiatan';

        public function getKegiatan($where = false){
            if($where === false){
                return $this->findAll();
            }
            else{
                return $this->getWhere($where);
            }
        }

}

?>