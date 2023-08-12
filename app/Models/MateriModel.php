<?php

namespace App\Models;

use CodeIgniter\Model;

class MateriModel extends Model
{
    protected $table = 'materi';
    protected $allowedFields =
    [
        'id_seminar',
        'tema',
        'materi'
    ];

    public function search($keyword)
    {
        return $this->table('materi')->like('tema', $keyword);
    }
}
