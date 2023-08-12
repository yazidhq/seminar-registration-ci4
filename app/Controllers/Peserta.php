<?php

namespace App\Controllers;

use App\Models\DosenModel;
use App\Models\MahasiswaModel;
use App\Models\UmumModel;

class Peserta extends Admin
{
    // ------------------------------TAMBAH PESERTA-------------------------
    // proses tambah dosen
    public function tambah_dosen($id)
    {
        $data = [
            'title' => 'Dosen',
            'seminar' => $this->seminarModel->where(['id_seminar' => $id])->first(),
        ];
        $this->dosenModel->save([
            'id_seminar' => $this->request->getVar('id_seminar'),
            'nip' => $this->request->getVar('nip'),
            'nama' => $this->request->getVar('nama'),
            'email' => $this->request->getVar('email'),
            'wa' => $this->request->getVar('wa'),
            'instansi' => $this->request->getVar('instansi'),
        ]);
        $this->dosenModel->query("delete from dosen where id_dosen in(select max(id_dosen) from dosen group by id_seminar, nip having count(*) > 1)");
        return view('user/timbal_balik', $data);
    }
    // proses tambah mahasiswa
    public function tambah_mahasiswa($id)
    {
        $data = [
            'title' => 'Dosen',
            'seminar' => $this->seminarModel->where(['id_seminar' => $id])->first(),
        ];
        $this->mahasiswaModel->save([
            'id_seminar' => $this->request->getVar('id_seminar'),
            'npm' => $this->request->getVar('npm'),
            'nama' => $this->request->getVar('nama'),
            'email' => $this->request->getVar('email'),
            'wa' => $this->request->getVar('wa'),
            'instansi' => $this->request->getVar('instansi'),
            'jurusan' => $this->request->getVar('jurusan'),
        ]);
        $this->mahasiswaModel->query("delete from mahasiswa where id_mahasiswa in(select max(id_mahasiswa) from mahasiswa group by id_seminar, npm having count(*) > 1)");
        return view('user/timbal_balik', $data);
    }
    // proses tambah umum
    public function tambah_umum($id)
    {
        $data = [
            'title' => 'Dosen',
            'seminar' => $this->seminarModel->where(['id_seminar' => $id])->first(),
        ];
        $this->umumModel->save([
            'id_seminar' => $this->request->getVar('id_seminar'),
            'nik' => $this->request->getVar('nik'),
            'nama' => $this->request->getVar('nama'),
            'email' => $this->request->getVar('email'),
            'wa' => $this->request->getVar('wa'),
        ]);
        $this->mahasiswaModel->query("delete from umum where id_umum in(select max(id_umum) from umum group by id_seminar, nik having count(*) > 1)");
        return view('user/timbal_balik', $data);
    }
    // ---------------------------------------------------------------------

    // ------------------------------TAMPIL PESERTA-------------------------
    // halaman peserta setiap seminar
    public function tampil_peserta($id)
    {
        $data = [
            'title' => 'Peserta',
            'dosen' => $this->dosenModel->where(['id_seminar' => $id])->orderBy('id_dosen', 'DESC')->findAll(),
            'mahasiswa' => $this->mahasiswaModel->where(['id_seminar' => $id])->orderBy('id_mahasiswa', 'DESC')->findAll(),
            'umum' => $this->umumModel->where(['id_seminar' => $id])->orderBy('id_umum', 'DESC')->findAll(),
            'seminar' => $this->seminarModel->where(['id_seminar' => $id])->first(),
        ];
        return view('admin/peserta/tampil_peserta', $data);
    }
    // ---------------------------------------------------------------------

    // ------------------------------UBAH PESERTA---------------------------
    // proses ubah dosen
    public function ubah_dosen($id)
    {
        $data = [
            'title' => 'Edit Peserta',
            'dosen' => $this->dosenModel->where(['id_dosen' => $id])->first(),
        ];
        return view('admin/peserta/ubah_dosen', $data);
    }
    public function proses_ubah_dosen()
    {
        $this->dosenModel->save([
            'id_seminar' => $this->request->getVar('id_seminar'),
            'nip' => $this->request->getVar('nip'),
            'nama' => $this->request->getVar('nama'),
            'email' => $this->request->getVar('email'),
            'wa' => $this->request->getVar('wa'),
            'instansi' => $this->request->getVar('instansi'),
        ]);
        $this->dosenModel->query("delete from dosen where id_dosen in(select min(id_dosen) from dosen group by id_seminar, nip having count(*) > 1)");
        $this->dosenModel->query("delete from dosen where id_dosen in(select min(id_dosen) from dosen group by id_seminar, nama having count(*) > 1)");
        return redirect()->to('/Admin/tampil_seminar')->with('', '');
    }
    // proses ubah mahasiswa
    public function ubah_mahasiswa($id)
    {
        $data = [
            'title' => 'Edit Peserta',
            'mahasiswa' => $this->mahasiswaModel->where(['id_mahasiswa' => $id])->first(),
        ];
        return view('admin/peserta/ubah_mahasiswa', $data);
    }
    public function proses_ubah_mahasiswa()
    {
        $this->mahasiswaModel->save([
            'id_seminar' => $this->request->getVar('id_seminar'),
            'npm' => $this->request->getVar('npm'),
            'nama' => $this->request->getVar('nama'),
            'email' => $this->request->getVar('email'),
            'wa' => $this->request->getVar('wa'),
            'instansi' => $this->request->getVar('instansi'),
            'jurusan' => $this->request->getVar('jurusan'),
        ]);
        $this->mahasiswaModel->query("delete from mahasiswa where id_mahasiswa in(select min(id_mahasiswa) from mahasiswa group by id_seminar, npm having count(*) > 1)");
        $this->mahasiswaModel->query("delete from mahasiswa where id_mahasiswa in(select min(id_mahasiswa) from mahasiswa group by id_seminar, nama having count(*) > 1)");
        return redirect()->to('/Admin/tampil_seminar')->with('', '');
    }
    // proses ubah umum
    public function ubah_umum($id)
    {
        $data = [
            'title' => 'Edit Peserta',
            'umum' => $this->umumModel->where(['id_umum' => $id])->first(),
        ];
        return view('admin/peserta/ubah_umum', $data);
    }
    public function proses_ubah_umum()
    {
        $this->umumModel->save([
            'id_seminar' => $this->request->getVar('id_seminar'),
            'nik' => $this->request->getVar('nik'),
            'nama' => $this->request->getVar('nama'),
            'email' => $this->request->getVar('email'),
            'wa' => $this->request->getVar('wa'),
        ]);
        $this->umumModel->query("delete from umum where id_umum in(select min(id_umum) from umum group by id_seminar, nik having count(*) > 1)");
        $this->umumModel->query("delete from umum where id_umum in(select min(id_umum) from umum group by id_seminar, nama having count(*) > 1)");
        return redirect()->to('/Admin/tampil_seminar')->with('', '');
    }
    // ---------------------------------------------------------------------

    // ------------------------------HAPUS PESERTA--------------------------
    // proses hapus dosen
    public function hapus_dosen($id = null)
    {
        $data['dosen'] = $this->dosenModel->where('id_dosen', $id)->delete();
        return redirect()->to('/Admin/tampil_seminar')->with('', '');
    }
    // proses hapus mahasiswa
    public function hapus_mahasiswa($id = null)
    {
        $data['mahasiswa'] = $this->mahasiswaModel->where('id_mahasiswa', $id)->delete();
        return redirect()->to('/Admin/tampil_seminar')->with('', '');
    }
    //proses hapus umum
    public function hapus_umum($id = null)
    {
        $data['umum'] = $this->umumModel->where('id_umum', $id)->delete();
        return redirect()->to('/Admin/tampil_seminar')->with('', '');
    }
    // ---------------------------------------------------------------------

    // ------------------------------EXPORT CSV PESERTA---------------------
    public function export_csv($id)
    {
        // file name 
        $nameSeminar = $this->seminarModel->where(['id_seminar' => $id])->first();
        $name = $nameSeminar['tema'];
        $filename = $name . date('Ymd') . '.csv';
        header("Content-Description: File Transfer");
        header("Content-Disposition: attachment; filename = $filename");
        header("Content-Type: application/csv; ");

        // get data 
        $dosen = new DosenModel();
        $mahasiswa = new MahasiswaModel();
        $umum = new UmumModel();
        $dataDosen = $dosen->select('*')->where(['id_seminar' => $id])->findAll();
        $dataMahasiswa = $mahasiswa->select('*')->where(['id_seminar' => $id])->findAll();
        $dataUmum = $umum->select('*')->where(['id_seminar' => $id])->findAll();

        // file creation 
        $file = fopen('php://output', 'w');
        $header = array("id", "id_seminar", "NIP/ NPM/ NIK", "Nama", "Email", "Nomor Whatsapp", "Asal Instansi", "Jurusan");
        fputcsv($file, $header);
        foreach ($dataDosen as $key => $line) {
            fputcsv($file, $line);
        }
        foreach ($dataMahasiswa as $key => $line) {
            fputcsv($file, $line);
        }
        foreach ($dataUmum as $key => $line) {
            fputcsv($file, $line);
        }
        fclose($file);
        exit;
    }
    // ---------------------------------------------------------------------
}
