<?php

namespace App\Controllers;

use App\Models\M_Login;
use App\Models\M_kegiatan;
use App\Models\M_pengumuman;
use App\Models\M_kasmasuk;
use App\Models\M_kaskeluar;

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
        public function kasmasuk()
    {
        $kasmasukModel = new M_kasmasuk();
        $kasmasuk = $kasmasukModel->findAll();
        $data = [
            'title' => 'Kasmasuk',
            'kasmasuk' => $kasmasuk
        ];

        return view('admin/kasmasuk', $data);
    }

    public function kaskeluar()
    {
        $kaskeluarModel = new M_kaskeluar();
        $kaskeluar = $kaskeluarModel->findAll();
        $data = [
            'title' => 'Kaskeluar',
            'kaskeluar' => $kaskeluar
        ];

        return view('admin/kaskeluar', $data);
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
