<?php


namespace App\Models;

use CodeIgniter\Model;

class M_kegiatan extends Model {
    protected $table            = 'tbl_kegiatan';
    protected $primaryKey       = 'id_kajian';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['nama_kajian', 'nama_ustad', 'hari', 'judul_kajian'];

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