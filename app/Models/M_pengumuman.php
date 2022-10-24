<?php


namespace App\Models;

use CodeIgniter\Model;

class M_pengumuman extends Model {
        protected $table = 'tbl_pengumuman';

        public function getPengumuman($where = false){
            if($where === false){
                return $this->findAll();
            }
            else{
                return $this->getWhere($where);
            }
        }

}

?>