<?php


namespace App\Models;

use CodeIgniter\Model;

class M_berita extends Model {
    protected $table            = 'tbl_berita';
    protected $primaryKey       = 'id_berita';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['judul_berita', 'slug_berita','tanggal'];

    // Dates
    protected $useTimestamps = false;

}

?>

?>