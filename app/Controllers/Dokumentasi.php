<?php

namespace App\Controllers;

class Dokumentasi extends Admin
{
    // unggah dokumentasi
    public function unggah_dokumentasi($id)
    {
        $data = [
            'title' => 'Unggah Dokumentasi',
            'seminar' => $this->seminarModel->where(['id_seminar' => $id])->first(),
            'dokumentasi' => $this->dokumentasiModel->where(['id_seminar' => $id])->first()
        ];
        return view('admin/dokumentasi/unggah_dokumentasi', $data);
    }
    // proses unggah dokumentasi
    public function proses_unggah_dokumentasi()
    {
        $img1 = $this->request->getFile('img1');
        if ($img1->getError() == 4) {
            $namaimg1 = 'default.jpg';
        } else {
            $img1->move('self-assets/dokumentasi');
            $namaimg1 = $img1->getName();
        }

        $img2 = $this->request->getFile('img2');
        if ($img2->getError() == 4) {
            $namaimg2 = 'default.jpg';
        } else {
            $img2->move('self-assets/dokumentasi');
            $namaimg2 = $img2->getName();
        }

        $img3 = $this->request->getFile('img3');
        if ($img3->getError() == 4) {
            $namaimg3 = 'default.jpg';
        } else {
            $img3->move('self-assets/dokumentasi');
            $namaimg3 = $img3->getName();
        }

        $img4 = $this->request->getFile('img4');
        if ($img4->getError() == 4) {
            $namaimg4 = 'default.jpg';
        } else {
            $img4->move('self-assets/dokumentasi');
            $namaimg4 = $img4->getName();
        }

        $img5 = $this->request->getFile('img5');
        if ($img5->getError() == 4) {
            $namaimg5 = 'default.jpg';
        } else {
            $img5->move('self-assets/dokumentasi');
            $namaimg5 = $img5->getName();
        }

        $img6 = $this->request->getFile('img6');
        if ($img6->getError() == 4) {
            $namaimg6 = 'default.jpg';
        } else {
            $img6->move('self-assets/dokumentasi');
            $namaimg6 = $img6->getName();
        }

        $this->dokumentasiModel->save([
            'id_seminar' => $this->request->getVar('id_seminar'),
            'tema' => $this->request->getVar('tema'),
            'img1' => $namaimg1,
            'img2' => $namaimg2,
            'img3' => $namaimg3,
            'img4' => $namaimg4,
            'img5' => $namaimg5,
            'img6' => $namaimg6
        ]);
        return redirect()->to('/Dokumentasi/tampil_dokumentasi')->with('unggah_dokumentasi', 'Dokumentasi berhasil diunggah');
    }

    // tampil dokumentasi
    public function tampil_dokumentasi()
    {
        $data = [
            'title' => 'Dokumentasi',
            'dokumentasi' => $this->dokumentasiModel->orderBy('id_dok', 'DESC')->findAll(),
        ];
        return view('admin/dokumentasi/tampil_dokumentasi', $data);
    }

    // hapus dokumentasi
    public function hapus_dokumentasi($id)
    {
        $data['dokumentasi'] = $this->dokumentasiModel->where('id_dok', $id)->delete();
        return redirect()->to('/Dokumentasi/tampil_dokumentasi')->with('hapus_dokumentasi', 'Dokumentasi berhasil dihapus');
    }
}
