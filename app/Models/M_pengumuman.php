<?php


namespace App\Models;

use CodeIgniter\Model;

class M_pengumuman extends Model {
    
    protected $table            = 'tbl_pengumuman';
    protected $primaryKey       = 'id_pengumuman';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['judul_pengumuman', 'isi_pengumuman','tanggal'];

    // Dates
    protected $useTimestamps = false;

}

?>