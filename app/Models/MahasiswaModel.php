<?php

namespace App\Models;

use CodeIgniter\Model;

class MahasiswaModel extends Model
{
    protected $table = 'mahasiswa';
    protected $allowedFields =
    [
        'id_seminar',
        'npm',
        'nama',
        'email',
        'wa',
        'instansi',
        'jurusan',
    ];
}
