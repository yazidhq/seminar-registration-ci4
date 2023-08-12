<?php

namespace App\Models;

use CodeIgniter\Model;

class UmumModel extends Model
{
    protected $table = 'umum';
    protected $allowedFields =
    [
        'id_seminar',
        'nik',
        'nama',
        'email',
        'wa',
    ];
}
