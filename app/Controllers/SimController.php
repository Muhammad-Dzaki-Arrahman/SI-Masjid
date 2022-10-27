<?php

namespace App\Controllers;

use App\Models\M_Login;
use App\Models\M_kegiatan;
use App\Models\M_pengumuman;
class SimController extends BaseController
{
    public function index()
    {  
        return view('admin/login');
    }
    public function cek_login()
    {
        $modelLogin = new M_Login;

        $username = $this->request->getPost('uname');
        $cekUsername = $modelLogin->getAdmin(['username'=>$username])->getNumRows();
        if($cekUsername == 0){
            return redirect()->to('admin/login');
        }else{
            $dataUser = $modelLogin->getAdmin(['username'=>$username])->getRowArray();
            $password = $this->request->getPost('password');
            $verifyPassword = password_verify($password, $dataUser['password']);
            if (!$verifyPassword) {
                // code...
                return view('admin/login');
            }else{
            return view('admin/dashboard');
        }
        }
    }
    public function dashboard()
    {
        return view('admin/dashboard');
    }
    public function kegiatan()
    {
        $kegiatanModel = new M_kegiatan();
        $kegiatan = $kegiatanModel->findAll();
        $data = [
            'title' => 'Kegiatan',
            'kegiatan' => $kegiatan
        ];

        return view('admin/kegiatan', $data);
    }

    public function pengumuman()
    {
        $pengumumanModel = new M_pengumuman();
        $pengumuman = $pengumumanModel->findAll();
        $data = [
            'title' => 'Pengumuman',
            'pengumuman' => $pengumuman
        ];

        return view('admin/pengumuman', $data);
    }

    public function save_p()
    {
        if (!$this->validate([
            'judul_pengumuman' => 'required',
            'isi_pengumuman' => 'required'
         ])) {
            return redirect()->to('/cpengumuman');
         }
   
         $model = new M_pengumuman();
   
         $data = [
            'judul_pengumuman' => $this->request->getPost('judul_pengumuman'),
            'isi_pengumuman' => $this->request->getPost('isi_pengumuman'),
            'tanggal' => $this->request->getPost('tanggal'),
         ];
   
         $model->save($data);
   
         return redirect()->to('/pengumuman');
    }
    
    public function save_k()
    {
        if (!$this->validate([
            'nama_ustad' => 'required',
            'nama_kajian' => 'required',
            'hari' => 'required',
            'judul_kajian' => 'required'
         ])) {
            return redirect()->to('/ckegiatan');
         }
   
         $model = new M_kegiatan();
   
         $data = [
            'nama_ustad' => $this->request->getPost('nama_ustad'),
            'nama_kajian' => $this->request->getPost('nama_kajian'),
            'hari' => $this->request->getPost('hari'),
            'judul_kajian' => $this->request->getPost('judul_kajian'),
         ];
   
         $model->save($data);
   
         return redirect()->to('/kegiatan');
    }

    public function ckegiatan()
    {  
        return view('admin/crud/ckegiatan');
    }

    public function cpengumuman()
    {  
        return view('admin/crud/cpengumuman');
    }

    public function profile()
    {  
        return view('admin/profile');
    }
}
