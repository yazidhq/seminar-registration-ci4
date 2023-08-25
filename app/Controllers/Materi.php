<?php

namespace App\Controllers;

class Materi extends Admin
{
    // unggah materi
    public function unggah_materi($id)
    {
        $data = [
            'title' => 'Unggah Materi',
            'seminar' => $this->seminarModel->where(['id_seminar' => $id])->first(),
            'materi' => $this->materiModel->where(['id_seminar' => $id])->first()
        ];
        return view('admin/materi/unggah_materi', $data);
    }
    // proses unggah materi
    public function proses_unggah_materi()
    {
        $materi = $this->request->getFile('materi');
        if ($materi->getError() == 4) {
            $namaMateri = 'default.pdf';
        } else {
            $materi->move('self-assets/materi');
            $namaMateri = $materi->getName();
        }
        $this->materiModel->save([
            'id_seminar' => $this->request->getVar('id_seminar'),
            'tema' => $this->request->getVar('tema'),
            'materi' => $namaMateri,
        ]);
        return redirect()->to('/Materi/tampil_materi')->with('unggah_materi', 'Materi berhasil diunggah');
    }

    // tampil materi
    public function tampil_materi()
    {
        $keyword = $this->request->getVar('keyword');
        if ($keyword) {
            $materi = $this->materiModel->search($keyword);
        } else {
            $materi = $this->materiModel;
        }
        $data = [
            'title' => 'Materi',
            'materi' => $materi->orderBy('id_materi', 'DESC')->findAll(),
        ];
        return view('admin/materi/tampil_materi', $data);
    }

    // edit materi
    public function ubah_materi($id)
    {
        $data = [
            'title' => 'Ubah Materi',
            'seminar' => $this->seminarModel->where(['id_seminar' => $id])->first(),
            'materi' => $this->materiModel->where(['id_seminar' => $id])->first()
        ];
        return view('admin/materi/ubah_materi', $data);
    }
    // proses edit materi
    public function proses_ubah_materi($id)
    {
        $materi = $this->request->getFile('materi');
        if ($materi->getError() == 4) {
            $namaMateri  = $this->request->getVar('oldMateri');
        } else {
            $materi->move('self-assets/materi');
            $namaMateri = $materi->getName();
        }
        $data = [
            'id_seminar' => $this->request->getVar('id_seminar'),
            'tema' => $this->request->getVar('tema'),
            'materi' => $namaMateri,
        ];
        $db = \Config\Database::connect();
        $db->table('materi')->where('id_materi', $id)->update($data);
        return redirect()->to('/Materi/tampil_materi')->with('ubah_materi', 'Materi berhasil diubah');
    }

    // hapus materi
    public function hapus_materi($id)
    {
        $data['materi'] = $this->materiModel->where('id_materi', $id)->delete();
        return redirect()->to('/Materi/tampil_materi')->with('hapus_materi', 'Materi berhasil dihapus');
    }
}
