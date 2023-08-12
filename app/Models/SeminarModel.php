<?php

namespace App\Models;

use CodeIgniter\Model;

class SeminarModel extends Model
{
    protected $table = 'seminar';
    protected $allowedFields =
    [
        'tema',
        'kategori',
        'tempat',
        'narasumber',
        'deskripsi',
        'kontak',
        'periode',
        'kuota',
        'pelaksanaan',
        'cover',
        'wag1',
        'wag2',
        'wag3',
    ];

    public function search($keyword)
    {
        return $this->table('seminar')->like('tema', $keyword);
    }
}
