<?php


namespace App\Models;

use CodeIgniter\Model;

class M_kasmasuk extends Model {
        protected $table = 'tbl_kasmasuk';

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