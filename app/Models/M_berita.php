<?php


namespace App\Models;

use CodeIgniter\Model;

class M_berita extends Model {
        protected $table = 'tbl_berita';
        protected $allowedFields    = ['judul_berita', 'slug_berita', 'tanggal'];

        public function getBerita($where = false){
            if($where === false){
                return $this->findAll();
            }
            else{
                return $this->getWhere($where);
            }
        }

}

?>