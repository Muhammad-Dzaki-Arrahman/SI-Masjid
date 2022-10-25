<?php


namespace App\Models;

use CodeIgniter\Model;

class M_kaskeluar extends Model {
        protected $table = 'tbl_kaskeluar';

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