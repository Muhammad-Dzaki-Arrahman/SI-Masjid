<?php


namespace App\Controllers;

use App\Models\M_Login;
use App\Models\M_kegiatan;
use App\Models\M_pengumuman;
use App\Models\M_kasmasuk;
use App\Models\M_kaskeluar;
use App\Models\M_berita;
use App\Models\M_total;
use App\Models\M_zakat;

class User extends BaseController
{
    //home
    public function home()
    {
        $kegiatanModel = new M_kegiatan();
        $kegiatan = $kegiatanModel->findAll();
        $pengumumanModel = new M_pengumuman();
        $pengumuman = $pengumumanModel->findAll();
        $beritaModel = new M_berita();
        $berita = $beritaModel->findAll();  
        $data = [
            'title' => 'Kegiatan',
            'kegiatan' => $kegiatan,
            'pengumuman' => $pengumuman,
            'berita' => $berita
    ];
        return view('user/home', $data);
    }

    //kajian
        public function kajian()
    {
        $kegiatanModel = new M_kegiatan();
        $kegiatan = $kegiatanModel->findAll();
        $data = [
            'title' => 'Kegiatan',
            'kegiatan' => $kegiatan
    ];
        return view('user/kajian', $data);
    }
            public function detail_kajian($id)
    {
        $model = new M_kegiatan();
        $kegiatan = $model->find($id);
  
        $data = [
           'kegiatan' => $kegiatan
        ];
        return view('user/detkajian', $data);
    }

        //pengumuman
        public function pengumuman()
    {
        $pengumumanModel = new M_pengumuman();
        $pengumuman = $pengumumanModel->findAll();
        $data = [
            'title' => 'Pengumuman',
            'pengumuman' => $pengumuman
    ];
        return view('user/pengumuman', $data);
    }
}
