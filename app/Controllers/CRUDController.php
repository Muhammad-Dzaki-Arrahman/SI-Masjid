<?php

namespace App\Controllers;

use App\Models\M_Login;
use App\Models\M_kegiatan;
use App\Models\M_pengumuman;
use App\Models\M_kasmasuk;
use App\Models\M_kaskeluar;
use App\Models\M_berita;
use App\Models\M_profile;
use App\Models\M_total;
use App\Models\M_zakat;

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
        'judul_kajian' => 'required',
        'deskripsi' => 'required'
    ])) {
        return redirect()->to('ckegiatan');
    }
        $kegiatanModel = new M_kegiatan();
        $data = [
            'nama_ustad' => $this->request->getPost('nama_ustad'),
            'nama_kajian' => $this->request->getPost('nama_kajian'),
            'hari' => $this->request->getPost('hari'),
            'judul_kajian' => $this->request->getPost('judul_kajian'),
            'deskripsi' => $this->request->getPost('deskripsi'),
        ];

        $kegiatanModel->save($data);
        return redirect()->to('kegiatan');
    }
        public function storepgn(){
    if(!$this->validate([
        'Judul_Pengumuman' => 'required',
        'Slug_Pengumuman' => 'required',
        'Tanggal' =>'required',
        'deskripsi' => 'required'
    ])) {
        return redirect()->to('/cpengumuman');
    }
        $pengumumanModel = new M_pengumuman();
        $data = [
            'Judul_Pengumuman' => $this->request->getPost('Judul_Pengumuman'),
            'Slug_Pengumuman' => $this->request->getPost('Slug_Pengumuman'),
            'Tanggal' => $this->request->getPost('Tanggal'),
            'deskripsi' => $this->request->getPost('deskripsi'),
        ];

        $pengumumanModel->save($data);
        return redirect()->to('pengumuman');
    }

    // berita
        public function cberita()
    {
        return view('admin/crud/cberita');
    }

    public function save_b()
    {
        if (!$this->validate([
            'judul_berita' => 'required',
            'slug_berita' => 'required',
            'tanggal' => 'required',
            'deskripsi' => 'required'
         ])) {
            return redirect()->to('/cberita');
         }
   
         $model = new M_berita();
   
         $data = [
            'judul_berita' => $this->request->getPost('judul_berita'),
            'slug_berita' => $this->request->getPost('slug_berita'),
            'tanggal' => $this->request->getPost('tanggal'),
            'deskripsi' => $this->request->getPost('deskripsi'),
         ];
   
         $model->save($data);
   
         return redirect()->to('/berita');
    }

        public function edit_b($id){
        $model = new M_berita();
        $berita = $model->find($id);
  
        $data = [
           'berita' => $berita
        ];
  
        return view('admin/crud/edit_b', $data);
     }

     public function update_b($id)
     {
        if (!$this->validate([
            'judul_berita' => 'required',
            'slug_berita' => 'required',
            'tanggal' => 'required',
            'deskripsi' => 'required'
        ])) {
           return redirect()->to('/edit_b');
        }
  
        $model = new M_berita();
  
        $data = [
            'judul_berita' => $this->request->getPost('judul_berita'),
            'slug_berita' => $this->request->getPost('slug_berita'),
            'tanggal' => $this->request->getPost('tanggal'),
            'deskripsi' => $this->request->getPost('deskripsi'),
        ];
  
        $model->update($id, $data);
  
        return redirect()->to('/berita');
     }

          public function delete_b($id) {
        $model = new M_berita();
  
        $model->delete($id);
        return redirect()->to('/berita');
     }

     //kasmasuk
       public function storeksm(){
        if(!$this->validate([
            'nama' => 'required',
            'jumlah' => 'required',
            'tanggal' =>'required',
            'keterangan' => 'required'
        ])) {
            return redirect()->to('/ckasmasuk');
        }
            $kasmasukModel = new M_kasmasuk();
            $data = [
                'nama' => $this->request->getPost('nama'),
                'jumlah' => $this->request->getPost('jumlah'),
                'tanggal' => $this->request->getPost('tanggal'),
                'keterangan' => $this->request->getPost('keterangan')
            ];
    
            $kasmasukModel->save($data);
            return redirect()->to('kasmasuk');
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
        public function storeksl(){
            if(!$this->validate([
                'nama' => 'required',
                'jumlah' => 'required',
                'tanggal' =>'required',
                'keterangan' => 'required'
            ])) {
                return redirect()->to('/ckaskeluar');
            }
                $kaskeluarModel = new M_kaskeluar();
                $data = [
                    'nama' => $this->request->getPost('nama'),
                    'jumlah' => $this->request->getPost('jumlah'),
                    'tanggal' => $this->request->getPost('tanggal'),
                    'keterangan' => $this->request->getPost('keterangan')
                ];
        
                $kaskeluarModel->save($data);
                return redirect()->to('kaskeluar');
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
        public function storezkt(){
            if(!$this->validate([
                'nama' => 'required',
                'tanggal' => 'required',
                'jenis_zakat' =>'required',
                'jumlah' => 'required'
            ])) {
                return redirect()->to('/czakat');
            }
                $zakatModel = new M_zakat();
                $data = [
                    'nama' => $this->request->getPost('nama'),
                    'tanggal' => $this->request->getPost('tanggal'),
                    'jenis_zakat' => $this->request->getPost('jenis_zakat'),
                    'jumlah' => $this->request->getPost('jumlah')
                ];
            
                $zakatModel->save($data);
                return redirect()->to('zakat');
            }    public function delete_z($id) {
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

            public function storettl(){
                if(!$this->validate([
                    'tahun' => 'required',
                    'bulan' => 'required',
                    'jumlah_km' =>'required',
                    'jumlah_kk' =>'required',
                    'total' => 'required'
                ])) {
                    return redirect()->to('/ctotal');
                }
                    $totalModel = new M_total();
                    $data = [
                        'tahun' => $this->request->getPost('tahun'),
                        'bulan' => $this->request->getPost('bulan'),
                        'jumlah_km' => $this->request->getPost('jumlah_km'),
                        'jumlah_kk' => $this->request->getPost('jumlah_kk'),
                        'total' => $this->request->getPost('total')
                    ];
                
                    $totalModel->save($data);
                    return redirect()->to('total');
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
          public function update_profile($id)
     {
        if (!$this->validate([
            'telepon' => 'required',
            'email' => 'required',
            'alamat' => 'required',
            'kota' => 'required',
            'provinsi' => 'required',
            'kode_pos' => 'required'
        ])) {
           return redirect()->to('/profile');
        }
  
        $model = new M_profile();
  
        $data = [
            'telepon' => $this->request->getPost('telepon'),
            'email' => $this->request->getPost('email'),
            'alamat' => $this->request->getPost('alamat'),
            'kota' => $this->request->getPost('kota'),
            'provinsi' => $this->request->getPost('provinsi'),
            'kode_pos' => $this->request->getPost('kode_pos'),
        ];
  
        $model->update($id, $data);
  
        return redirect()->to('/profile');
     }
}
