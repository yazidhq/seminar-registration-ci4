<?php

namespace App\Controllers;

use App\Models\SeminarModel;
use App\Models\KontakModel;
use App\Models\AdminModel;

use App\Models\DosenModel;
use App\Models\MahasiswaModel;
use App\Models\UmumModel;

use App\Models\MateriModel;
use App\Models\DokumentasiModel;

class Admin extends BaseController
{
    protected $seminarModel;
    protected $kontakModel;
    protected $adminModel;

    protected $dosenModel;
    protected $mahasiswaModel;
    protected $umumModel;

    protected $materiModel;
    protected $dokumentasiModel;

    public function __construct()
    {
        $this->seminarModel = new SeminarModel();
        $this->kontakModel = new KontakModel();
        $this->adminModel = new AdminModel();

        $this->dosenModel = new DosenModel();
        $this->mahasiswaModel = new MahasiswaModel();
        $this->umumModel = new UmumModel();

        $this->materiModel = new MateriModel();
        $this->dokumentasiModel = new DokumentasiModel();
    }

    // ------------------------------INDEX---------------------------------
    // halaman utama
    public function index()
    {
        $data = [
            'title' => 'Admin',
            'dosens' => $this->dosenModel->orderBy('id_dosen', 'DESC')->findAll(),
            'mahasiswas' => $this->mahasiswaModel->orderBy('id_mahasiswa', 'DESC')->findAll(),
            'umums' => $this->umumModel->orderBy('id_umum', 'DESC')->findAll(),
        ];
        return view('admin/index', $data);
    }
    // ---------------------------------------------------------------------

    // ------------------------------SEMINAR--------------------------------
    // halaman data seminar
    public function tampil_seminar()
    {
        $data = [
            'title' => 'Seminar',
            'seminar' => $this->seminarModel->orderBy('id_seminar', 'DESC')->paginate(4, 'seminar'),
            'pager' => $this->seminarModel->pager
        ];
        return view('admin/tampil_seminar', $data);
    }
    // halaman tambah seminar
    public function tambah_seminar()
    {
        $data = [
            'title' => 'Tambah Seminar',
        ];
        return view('admin/tambah_seminar', $data);
    }
    // proses tambah
    public function proses_tambah_seminar()
    {
        $cover = $this->request->getFile('cover');
        if ($cover->getError() == 4) {
            $namaCover = 'default.png';
        } else {
            $cover->move('self-assets/cover');
            $namaCover = $cover->getName();
        }
        $this->seminarModel->save([
            'tema' => $this->request->getVar('tema'),
            'kategori' => $this->request->getVar('kategori'),
            'tempat' => $this->request->getVar('tempat'),
            'narasumber' => $this->request->getVar('narasumber'),
            'deskripsi' => $this->request->getVar('deskripsi'),
            'kontak' => $this->request->getVar('kontak'),
            'periode' => $this->request->getVar('periode'),
            'kuota' => $this->request->getVar('kuota'),
            'pelaksanaan' => $this->request->getVar('pelaksanaan'),
            'cover' => $namaCover,
            'wag1' => $this->request->getVar('wag1'),
            'wag2' => $this->request->getVar('wag2'),
            'wag3' => $this->request->getVar('wag3'),
        ]);
        return redirect()->to('/Admin/tampil_seminar')->with('tambah_seminar', 'Berhasil tambah seminar');
    }
    // halaman ubah seminar
    public function ubah_seminar($id)
    {
        $data = [
            'title' => 'Seminar',
            'seminar' => $this->seminarModel->where(['id_seminar' => $id])->first(),
        ];
        return view('admin/ubah_seminar', $data);
    }
    // proses ubah
    public function proses_ubah_seminar($id)
    {
        // Cover
        $cover = $this->request->getFile('cover');
        if ($cover->getError() == 4) {
            $namaCover  = $this->request->getVar('oldCover');
        } else {
            $cover->move('self-assets/cover');
            $namaCover = $cover->getName();
        }

        $data = [
            'tema' => $this->request->getVar('tema'),
            'kategori' => $this->request->getVar('kategori'),
            'tempat' => $this->request->getVar('tempat'),
            'narasumber' => $this->request->getVar('narasumber'),
            'deskripsi' => $this->request->getVar('deskripsi'),
            'kontak' => $this->request->getVar('kontak'),
            'periode' => $this->request->getVar('periode'),
            'kuota' => $this->request->getVar('kuota'),
            'pelaksanaan' => $this->request->getVar('pelaksanaan'),
            'cover' => $namaCover,
            'wag1' => $this->request->getVar('wag1'),
            'wag2' => $this->request->getVar('wag2'),
            'wag3' => $this->request->getVar('wag3'),
        ];

        $db = \Config\Database::connect();
        $db->table('seminar')->where('id_seminar', $id)->update($data);
        return redirect()->to('/Admin/tampil_seminar')->with('ubah_seminar', 'Data seminar berhasil diubah');
    }
    // hapus seminar
    public function hapus_seminar($id)
    {
        $data['seminar'] = $this->seminarModel->where('id_seminar', $id)->delete();
        return redirect()->to('/Admin/tampil_seminar')->with('hapus_seminar', 'Data seminar berhasil dihapus');
    }
    // ---------------------------------------------------------------------

    // ------------------------------KONTAK---------------------------------
    public function tampil_kontak()
    {
        $data = [
            'title' => 'Kontak',
            'kontak' => $this->kontakModel->orderBy('id_kontak', 'DESC')->findAll(),
        ];
        return view('admin/tampil_kontak', $data);
    }
    public function simpan_kontak()
    {
        $this->kontakModel->save([
            'nama' => $this->request->getVar('nama'),
            'wa' => $this->request->getVar('wa'),
            'email' => $this->request->getVar('email'),
            'pesan' => $this->request->getVar('pesan')
        ]);
        return redirect()->to('/User/kontak')->with('simpan_kontak', 'Terimakasih sudah menghubungi kami');
    }
    public function hapus_kontak($id)
    {
        $data['kontak'] = $this->kontakModel->where('id_kontak', $id)->delete();
        return redirect()->to('/Admin/tampil_kontak')->with('hapus_kontak', 'Kontak masuk berhasil dihapus');
    }
    // ---------------------------------------------------------------------

    // ------------------------------ADMIN----------------------------------
    public function tampil_admin()
    {
        $data = [
            'title' => 'Data Admin',
            'admin' => $this->adminModel->orderBy('id_admin', 'DESC')->findAll(),
        ];
        return view('admin/tampil_admin', $data);
    }
    public function tambah_admin()
    {
        $data = [
            'title' => 'Data Admin',
        ];
        return view('admin/tambah_admin', $data);
    }
    public function proses_tambah_admin()
    {
        $this->adminModel->save([
            'nama' => $this->request->getVar('nama'),
            'username' => $this->request->getVar('username'),
            'password' => password_hash($this->request->getVar('password'), PASSWORD_BCRYPT),
        ]);
        return redirect()->to('/Admin/tampil_admin')->with('tambah_admin', 'Data admin berhasil ditambah');
    }
    public function ubah_admin($id)
    {
        $data = [
            'title' => 'Data Admin',
            'admin' => $this->adminModel->where(['id_admin' => $id])->first(),
        ];
        return view('admin/ubah_admin', $data);
    }
    public function proses_ubah_admin($id)
    {
        $data = [
            'nama' => $this->request->getVar('nama'),
            'username' => $this->request->getVar('username'),
            'password' => password_hash($this->request->getVar('password'), PASSWORD_BCRYPT),
        ];
        $db = \Config\Database::connect();
        $db->table('admin')->where('id_admin', $id)->update($data);
        return redirect()->to('/Admin/tampil_admin')->with('ubah_admin', 'Data admin berhasil diubah');
    }
    public function hapus_admin($id)
    {
        $data['admin'] = $this->adminModel->where('id_admin', $id)->delete();
        return redirect()->to('/Admin/tampil_admin')->with('hapus_admin', 'Data admin berhasil dihapus');
    }
    // ---------------------------------------------------------------------
}
