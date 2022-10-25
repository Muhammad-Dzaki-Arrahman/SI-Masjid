<?php

namespace App\Controllers;

use App\Models\M_kegiatan;
use App\Models\M_pengumuman;

class CRUDController extends BaseController
{
    public function index()
    {
        return view('admin/login');
    }
       public function storekgt(){
    if(!$this->validate([
        'nama_ustad' => 'required',
        'nama_kajian' => 'required',
        'hari' =>'required',
        'judul_kajian' => 'required'
    ])) {
        return redirect()->to('admin/crud/ckegiatan');
    }
        $kegiatanModel = new M_kegiatan();
        $data = [
            'nama_ustad' => $this->request->getPost('nama_ustad'),
            'nama_kajian' => $this->request->getPost('nama_kajian'),
            'hari' => $this->request->getPost('hari'),
            'judul_kajian' => $this->request->getPost('judul_kajian')
        ];

        $kegiatanModel->save($data);
        return redirect()->to('kegiatan');
    }
        public function storepgn(){
    if(!$this->validate([
        'Judul_Pengumuman' => 'required',
        'Isi_Pengumuman' => 'required',
        'Tanggal' =>'required',
    ])) {
        return redirect()->to('admin/crud/cpengumuman');
    }
        $pengumumanModel = new M_pengumuman();
        $data = [
            'Judul_Pengumuman' => $this->request->getPost('Judul_Pengumuman'),
            'Isi_Pengumuman' => $this->request->getPost('Isi_Pengumuman'),
            'Tanggal' => $this->request->getPost('Tanggal'),
        ];

        $pengumumanModel->save($data);
        return redirect()->to('pengumuman');
    }
}
