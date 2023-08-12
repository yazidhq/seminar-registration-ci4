<?php

namespace App\Models;

use CodeIgniter\Model;

class DokumentasiModel extends Model
{
    protected $table = 'dokumentasi';
    protected $allowedFields =
    [
        'id_seminar',
        'tema',
        'img1',
        'img2',
        'img3',
        'img4',
        'img5',
        'img6',
    ];

    public function search($keyword)
    {
        return $this->table('dokumentasi')->like('tema', $keyword);
    }
}
