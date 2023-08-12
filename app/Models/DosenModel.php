<?php

namespace App\Models;

use CodeIgniter\Model;

class DosenModel extends Model
{
    protected $table = 'dosen';
    protected $allowedFields =
    [
        'id_seminar',
        'nip',
        'nama',
        'email',
        'wa',
        'instansi',
    ];
}
