<?php

namespace App\Controllers;

class User extends Admin
{
    // ------------------------------INDEX---------------------------------
    // halaman utama
    public function index()
    {
        $data = [
            'title' => 'Seminar UG',
            'seminar' => $this->seminarModel->orderBy('id_seminar', 'DESC')->paginate(4, 'seminar'),
            'pager' => $this->seminarModel->pager,
            'dokumentasi' => $this->dokumentasiModel->orderBy('id_dok', 'desc')->first()
        ];
        return view('user/index', $data);
    }
    // ---------------------------------------------------------------------

    // ------------------------------SEMINAR--------------------------------
    // halaman seluruh seminar
    public function seminar()
    {
        $keyword = $this->request->getVar('keyword');
        if ($keyword) {
            $seminar = $this->seminarModel->search($keyword);
        } else {
            $seminar = $this->seminarModel;
        }
        $data = [
            'title' => 'Seminar',
            'seminar' => $seminar->orderBy('id_seminar', 'DESC')->findAll(),
        ];
        return view('user/seminar', $data);
    }
    // detail seminar
    public function detail_seminar($id)
    {
        $data = [
            'title' => 'Detail Seminar',
            'seminar' => $this->seminarModel->where(['id_seminar' => $id])->first(),
            'seminars' => $this->seminarModel->orderBy('id_seminar', 'DESC')->paginate(4),
        ];
        return view('user/detail_seminar', $data);
    }
    // form daftar dosen
    public function form_daftar_dosen($id)
    {
        $data = [
            'title' => 'Pendaftaran',
            'seminar' => $this->seminarModel->where(['id_seminar' => $id])->first(),
        ];
        return view('user/form_daftar_dosen', $data);
    }
    // form daftar mahasiswa
    public function form_daftar_mahasiswa($id)
    {
        $data = [
            'title' => 'Pendaftaran',
            'seminar' => $this->seminarModel->where(['id_seminar' => $id])->first(),
        ];
        return view('user/form_daftar_mahasiswa', $data);
    }
    // form daftar umum
    public function form_daftar_umum($id)
    {
        $data = [
            'title' => 'Pendaftaran',
            'seminar' => $this->seminarModel->where(['id_seminar' => $id])->first(),
        ];
        return view('user/form_daftar_umum', $data);
    }
    // setelah daftar
    public function timbal_balik()
    {
        $data = [
            'title' => 'Seminar',
        ];
        return view('user/timbal_balik', $data);
    }
    // ---------------------------------------------------------------------

    // ---------------------------------KONTAK------------------------------
    // halaman form kontak
    public function kontak()
    {
        $data = [
            'title' => 'Kontak',
        ];
        return view('user/kontak', $data);
    }
    // ---------------------------------------------------------------------

    // ---------------------------------MATERI------------------------------
    // halaman materi
    public function materi()
    {
        $keyword = $this->request->getVar('keyword');
        if ($keyword) {
            $materi = $this->materiModel->search($keyword);
        } else {
            $materi = $this->materiModel;
        }
        $data = [
            'title' => 'Materi Seminar',
            'materi' => $materi->orderBy('id_materi', 'DESC')->findAll(),
        ];
        return view('user/materi', $data);
    }
    // tampil materi
    public function detail_materi($id)
    {
        $data = [
            'title' => 'Detail Materi',
            'materi' => $this->materiModel->where(['id_materi' => $id])->first(),
            'seminar' => $this->seminarModel->where(['id_seminar' => $id])->first(),
        ];
        return view('user/detail_materi', $data);
    }
    // -----------------------------------------------------------------------

    //// --------------------------------DOKUMENTASI--------------------------
    // halaman dokumentasi
    public function dokumentasi()
    {
        $keyword = $this->request->getVar('keyword');
        if ($keyword) {
            $dokumentasi = $this->dokumentasiModel->search($keyword);
        } else {
            $dokumentasi = $this->dokumentasiModel;
        }
        $data = [
            'title' => 'Dokumentasi Seminar',
            'dokumentasi' => $dokumentasi->orderBy('id_dok', 'DESC')->findAll(),
        ];
        return view('user/dokumentasi', $data);
    }
    // tampil materi
    public function detail_dokumentasi($id)
    {
        $data = [
            'title' => 'Detail Dokumentasi',
            'dokumentasi' => $this->dokumentasiModel->where(['id_dok' => $id])->first(),
        ];
        return view('user/detail_dokumentasi', $data);
    }
    // -----------------------------------------------------------------------
}
