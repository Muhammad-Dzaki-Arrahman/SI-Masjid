<?php

namespace App\Controllers;

use App\Models\M_kegiatan;
use App\Models\M_pengumuman;
use App\Models\M_kasmasuk;
use App\Models\M_kaskeluar;
use App\Models\M_zakat;
use App\Models\M_total;

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
    public function storeksm(){
        if(!$this->validate([
            'nama' => 'required',
            'jumlah' => 'required',
            'tanggal' =>'required',
            'keterangan' => 'required'
        ])) {
            return redirect()->to('admin/crud/ckasmasuk');
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
        public function storeksl(){
            if(!$this->validate([
                'nama' => 'required',
                'jumlah' => 'required',
                'tanggal' =>'required',
                'keterangan' => 'required'
            ])) {
                return redirect()->to('admin/crud/ckaskeluar');
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
        public function storezkt(){
            if(!$this->validate([
                'nama' => 'required',
                'tanggal' => 'required',
                'jenis_zakat' =>'required',
                'jumlah' => 'required'
            ])) {
                return redirect()->to('admin/crud/czakat');
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
            }
            public function storettl(){
                if(!$this->validate([
                    'tahun' => 'required',
                    'bulan' => 'required',
                    'jumlah_km' =>'required',
                    'jumlah_kk' =>'required',
                    'total' => 'required'
                ])) {
                    return redirect()->to('admin/crud/ctotal');
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
}
