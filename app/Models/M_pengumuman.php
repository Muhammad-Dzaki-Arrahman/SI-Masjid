<?php


namespace App\Models;

use CodeIgniter\Model;

class M_pengumuman extends Model {
    protected $table                = 'tbl_pengumuman';
    protected $primaryKey           = 'Id_Pengumuman';
    protected $useAutoIncrement     = true;
    protected $returnType           = 'array';
    protected $useSoftDeletes       = false;
    protected $protectFields        = true;
    protected $allowedFields        = ['Judul_Pengumuman', 'Slug_Pengumuman', 'Tanggal'];

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