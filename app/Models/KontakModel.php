<?php

namespace App\Models;

use CodeIgniter\Model;

class KontakModel extends Model
{
    protected $table = 'kontak';
    protected $allowedFields =
    [
        'nama',
        'wa',
        'email',
        'pesan'
    ];
}
