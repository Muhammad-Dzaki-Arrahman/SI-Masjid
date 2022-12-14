<?php

namespace App\Controllers;

use App\Models\M_Login;
use App\Models\M_kegiatan;
use App\Models\M_pengumuman;
use App\Models\M_profile;
use App\Models\M_kasmasuk;
use App\Models\M_kaskeluar;
use App\Models\M_berita;
use App\Models\M_total;
use App\Models\M_zakat;
use CodeIgniter\I18n\Time;

class SimController extends BaseController
{
    public function index()
    {  
        return view('login');
    }
    public function cek_login()
    {
        $modelLogin = new M_Login;

        $username = $this->request->getPost('uname');
        $cekUsername = $modelLogin->getAdmin(['username'=>$username])->getNumRows();
        if($cekUsername == 0){
            return redirect()->to('login');
        }else{
            $dataUser = $modelLogin->getAdmin(['username'=>$username])->getRowArray();
            $password = $this->request->getPost('password');
            $verifyPassword = password_verify($password, $dataUser['password']);
            if (!$verifyPassword) {
                // code...
                return view('login');
            }else{
            return redirect()->to('dashboard');
        }
        }
    }
   
    public function dashboard()
    {
        $url = 'https://api.myquran.com/v1/sholat/jadwal/1014/'.date('Y').'/'.date('m').'/'.date('d');
        $waktu = json_decode(file_get_contents($url), true);

        $data = [
            'waktu' => $waktu,
        ];
        return view('admin/dashboard', $data);
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
        public function zakat()
    {
        $zakatModel = new M_zakat();
        $zakat = $zakatModel->findAll();
        $data = [
            'title' => 'Zakat',
            'zakat' => $zakat
        ];

        return view('admin/zakat', $data);
    }
    public function total()
    {
        $totalModel = new M_total();
        $total = $totalModel->findAll();
        $data = [
            'title' => 'Total',
            'total' => $total
        ];

        return view('admin/total', $data);
    }
    public function ckasmasuk()
    {
        return view('admin/crud/ckasmasuk');
    }
    public function ckaskeluar()
    {
        return view('admin/crud/ckaskeluar');
    }
    public function czakat()
    {
        return view('admin/crud/czakat');
    }
    public function ctotal()
    {
        return view('admin/crud/ctotal');
    }
public function save_p()
    {
        if (!$this->validate([
            'judul_pengumuman' => 'required',
            'slug_pengumuman' => 'required'
         ])) {
            return redirect()->to('/cpengumuman');
         }
   
         $model = new M_pengumuman();
   
         $data = [
            'judul_pengumuman' => $this->request->getPost('Judul_Pengumuman'),
            'isi_pengumuman' => $this->request->getPost('Slug_Pengumuman'),
            'Tanggal' => $this->request->getPost('Tanggal'),
         ];
   
         $model->save($data);
   
         return redirect()->to('/pengumuman');
    }
    
    public function save_k()
    {
        if (!$this->validate([
            'image_url' => 'required',
            'nama_ustad' => 'required',
            'nama_kajian' => 'required',
            'hari' => 'required',
            'judul_kajian' => 'required'
         ])) {
            return redirect()->to('/ckegiatan');
         }
   
         $model = new M_kegiatan();
   
         $data = [
            'image_url' => $this->request->getPost('image_url'),
            'nama_ustad' => $this->request->getPost('nama_ustad'),
            'nama_kajian' => $this->request->getPost('nama_kajian'),
            'hari' => $this->request->getPost('hari'),
            'judul_kajian' => $this->request->getPost('judul_kajian'),
         ];
   
         $model->save($data);
   
         return redirect()->to('/kegiatan');
    }

    public function delete_k($id) {
        $model = new M_kegiatan();
  
        $model->delete($id);
        return redirect()->to('/kegiatan');
     }

    public function delete_p($id) {
        $model = new M_pengumuman();
  
        $model->delete($id);
        return redirect()->to('/pengumuman');
     }

     public function edit_k($id){
        $model = new M_kegiatan();
        $kegiatan = $model->find($id);
  
        $data = [
           'kegiatan' => $kegiatan
        ];
  
        return view('admin/crud/edit_k', $data);
     }
     public function edit_p($id){
        $model = new M_pengumuman();
        $pengumuman = $model->find($id);
  
        $data = [
           'pengumuman' => $pengumuman
        ];
  
        return view('admin/crud/edit_p', $data);
     }
  
     public function update_k($id)
     {
        if (!$this->validate([
            'image_url' => 'required',
            'nama_ustad' => 'required',
            'nama_kajian' => 'required',
            'hari' => 'required',
            'judul_kajian' => 'required'
        ])) {
           return redirect()->to('/ckegiatan');
        }
  
        $model = new M_kegiatan();
  
        $data = [
            'image_url' => $this->request->getPost('image_url'),
            'nama_ustad' => $this->request->getPost('nama_ustad'),
            'nama_kajian' => $this->request->getPost('nama_kajian'),
            'hari' => $this->request->getPost('hari'),
            'judul_kajian' => $this->request->getPost('judul_kajian'),
            'foto_pemateri' => $this->request->getPost('foto_pemateri')
        ];
  
        $model->update($id, $data);
  
        return redirect()->to('/kegiatan');
     }
     
     public function update_p($id)
     {
        if (!$this->validate([
            'Judul_Pengumuman' => 'required',
            'Slug_Pengumuman' => 'required',
            'Tanggal' => 'required'
        ])) {
           return redirect()->to('cpengumuman');
        }
  
        $model = new M_pengumuman();
  
        $data = [
            'Judul_Pengumuman' => $this->request->getPost('Judul_Pengumuman'),
            'Slug_Pengumuman' => $this->request->getPost('Slug_Pengumuman'),
            'Tanggal' => $this->request->getPost('Tanggal')
        ];
  
        $model->update($id, $data);
  
        return redirect()->to('/pengumuman');
     }

        public function ckegiatan()
    {
        return view('admin/crud/ckegiatan');
    }
        public function cpengumuman()
    {
        return view('admin/crud/cpengumuman');
    }
        public function profile($id=1)
    {  
        $model = new M_profile();
        $profile = $model->find($id);
  
        $data = [
           'profile' => $profile
        ];
        return view('admin/profile', $data);
    }
    public function berita()
    {
        $beritaModel = new M_berita();
        $berita = $beritaModel->findAll();
        $data = [
            'title' => 'Berita',
            'berita' => $berita
        ];

        return view('admin/berita', $data);
    }
}
