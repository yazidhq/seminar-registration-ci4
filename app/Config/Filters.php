<?php

namespace Config;

use CodeIgniter\Config\BaseConfig;
use CodeIgniter\Filters\CSRF;
use CodeIgniter\Filters\DebugToolbar;
use CodeIgniter\Filters\Honeypot;
use CodeIgniter\Filters\InvalidChars;
use CodeIgniter\Filters\SecureHeaders;

use App\Filters\Admin;

class Filters extends BaseConfig
{
    /**
     * Configures aliases for Filter classes to
     * make reading things nicer and simpler.
     */
    public array $aliases = [
        'csrf'          => CSRF::class,
        'toolbar'       => DebugToolbar::class,
        'honeypot'      => Honeypot::class,
        'invalidchars'  => InvalidChars::class,
        'secureheaders' => SecureHeaders::class,
        'admin' => Admin::class,
    ];

    /**
     * List of filter aliases that are always
     * applied before and after every request.
     */
    public array $globals = [
        'before' => [
            // 'honeypot',
            // 'csrf',
            // 'invalidchars',
        ],
        'after' => [
            'toolbar',
            // 'honeypot',
            // 'secureheaders',
        ],
    ];

    /**
     * List of filter aliases that works on a
     * particular HTTP method (GET, POST, etc.).
     *
     * Example:
     * 'post' => ['foo', 'bar']
     *
     * If you use this, you should disable auto-routing because auto-routing
     * permits any HTTP method to access a controller. Accessing the controller
     * with a method you don’t expect could bypass the filter.
     */
    public array $methods = [];

    /**
     * List of filter aliases that should run on any
     * before or after URI patterns.
     *
     * Example:
     * 'isLoggedIn' => ['before' => ['account/*', 'profiles/*']]
     */
    public array $filters = [
        'admin' => [
            'before' =>
            [
                'Admin',
                'Admin/tampil_kontak',
                'Admin/tampil_seminar',
                'Admin/tambah_seminar',
                'Dokumentasi/tampil_dokumentasi',
                'Materi/tampil_materi',
                'Admin/tampil_admin',
                'Admin/ubah_seminar/(:any)',
                'Admin/hapus_seminar/(:any)',
                'Admin/hapus_kontak/(:any)',
                'Peserta/tampil_peserta/(:any)',
                'Peserta/hapus_dosen/(:any)',
                'Peserta/ubah_dosen/(:any)',
                'Peserta/hapus_mahasiswa/(:any)',
                'Peserta/ubah_mahasiswa/(:any)',
                'Peserta/hapus_umum/(:any)',
                'Peserta/ubah_umum/(:any)',
                'Peserta/export_csv/(:any)',
                'Dokumentasi/unggah_dokumentasi/(:any)',
                'Dokumentasi/hapus_dokumentasi/(:any)',
                'Materi/unggah_materi/(:any)',
                'Materi/hapus_materi/(:any)',
                'Materi/ubah_materi/(:any)',
                'Admin/hapus_admin/(:any)',
                'Admin/ubah_admin/(:any)',
            ]
        ]
    ];
}
