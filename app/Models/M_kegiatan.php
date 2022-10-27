<?php


namespace App\Models;

use CodeIgniter\Model;

class M_kegiatan extends Model {
    
    protected $table            = 'tbl_kegiatan';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['nama_kajian', 'nama_ustad', 'hari', 'judul_kajian'];

    // Dates
    protected $useTimestamps = false;

}

?>