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
use CodeIgniter\I18n\Time;


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
    public function delete_km($id) {
        $model = new M_kasmasuk();
  
        $model->delete($id);
        return redirect()->to('/kasmasuk');
     }
    public function edit_km($id)
    {
        $model = new M_kasmasuk();
        $kasmasuk = $model->find($id);
  
        $data = [
           'kasmasuk' => $kasmasuk
        ];
  
        return view('admin/crud/edit_km', $data);
    }
    public function update_km($id)
    {
        if (!$this->validate([
            'nama' => 'required',
            'jumlah' => 'required',
            'tanggal' => 'required',
            'keterangan' => 'required'
        ])) {
           return redirect()->to('/ckasmasuk');
    }
    $model = new M_kasmasuk();
  
        $data = [
            'nama' => $this->request->getPost('nama'),
            'jumlah' => $this->request->getPost('jumlah'),
            'tanggal' => $this->request->getPost('tanggal'),
            'keterangan' => $this->request->getPost('keterangan'),
        ];
  
        $model->update($id, $data);
  
        return redirect()->to('/kasmasuk');
     }
     public function delete_kk($id) {
        $model = new M_kaskeluar();
  
        $model->delete($id);
        return redirect()->to('/kaskeluar');
     }
    public function edit_kk($id)
    {
        $model = new M_kaskeluar();
        $kaskeluar = $model->find($id);
  
        $data = [
           'kaskeluar' => $kaskeluar
        ];
  
        return view('admin/crud/edit_kk', $data);
    }
    public function update_kk($id)
    {
        if (!$this->validate([
            'nama' => 'required',
            'jumlah' => 'required',
            'tanggal' => 'required',
            'keterangan' => 'required'
        ])) {
           return redirect()->to('/ckaskeluar');
    }
    $model = new M_kaskeluar();
  
        $data = [
            'nama' => $this->request->getPost('nama'),
            'jumlah' => $this->request->getPost('jumlah'),
            'tanggal' => $this->request->getPost('tanggal'),
            'keterangan' => $this->request->getPost('keterangan'),
        ];
  
        $model->update($id, $data);
  
        return redirect()->to('/kaskeluar');
     }
    public function delete_z($id) {
        $model = new M_zakat();
  
        $model->delete($id);
        return redirect()->to('/zakat');
     }
    public function edit_z($id)
    {
        $model = new M_zakat();
        $zakat = $model->find($id);
  
        $data = [
           'zakat' => $zakat
        ];
  
        return view('admin/crud/edit_z', $data);
    }
    public function update_z($id)
    {
        if (!$this->validate([
            'nama' => 'required',
            'tanggal' => 'required',
            'jenis_zakat' => 'required',
            'jumlah' => 'required'
        ])) {
           return redirect()->to('/czakat');
    }
    $model = new M_zakat();
  
        $data = [
            'nama' => $this->request->getPost('nama'),
            'tanggal' => $this->request->getPost('tanggal'),
            'jenis_zakat' => $this->request->getPost('jenis_zakat'),
            'jumlah' => $this->request->getPost('jumlah'),
        ];
  
        $model->update($id, $data);
  
        return redirect()->to('/zakat');
     }
     public function delete_t($id) {
        $model = new M_total();
  
        $model->delete($id);
        return redirect()->to('/total');
     }
    public function edit_t($id)
    {
        $model = new M_total();
        $total = $model->find($id);
  
        $data = [
           'total' => $total
        ];
  
        return view('admin/crud/edit_t', $data);
    }
    public function update_t($id)
    {
        if (!$this->validate([
            'tahun' => 'required',
            'bulan' => 'required',
            'jumlah_km' => 'required',
            'jumlah_kk' => 'required',
            'total' => 'required'
        ])) {
           return redirect()->to('/ctotal');
    }
    $model = new M_total();
  
        $data = [
            'tahun' => $this->request->getPost('tahun'),
            'bulan' => $this->request->getPost('bulan'),
            'jumlah_km' => $this->request->getPost('jumlah_km'),
            'jumlah_kk' => $this->request->getPost('jumlah_kk'),
            'total' => $this->request->getPost('total'),
        ];
  
        $model->update($id, $data);
  
        return redirect()->to('/total');
     }
}

