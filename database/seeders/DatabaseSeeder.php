<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Admin;
use App\Models\Siswa;
use App\Models\Kategori;
use App\Models\Aspirasi;
use App\Models\InputAspirasi;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        // Admin Seeder
        Admin::create([
            'username' => 'admin',
            'password' => Hash::make('admin123')
        ]);

        // Siswa Seeder
        $siswa_data = [
            ['nis' => 1001, 'kelas' => 'X-A'],
            ['nis' => 1002, 'kelas' => 'X-B'],
            ['nis' => 1003, 'kelas' => 'XI-A'],
            ['nis' => 1004, 'kelas' => 'XI-B'],
            ['nis' => 1005, 'kelas' => 'XII-A']
        ];
        foreach ($siswa_data as $siswa) {
            Siswa::create($siswa);
        }

        // Kategori Seeder
        $kategori_data = [
            ['ket_kategori' => 'Fasilitas'],
            ['ket_kategori' => 'Akademik'],
            ['ket_kategori' => 'Kebersihan'],
            ['ket_kategori' => 'Keamanan'],
            ['ket_kategori' => 'Lainnya']
        ];
        foreach ($kategori_data as $kategori) {
            Kategori::create($kategori);
        }

        // Aspirasi Seeder
        $aspirasi_data = [
            [
                'status' => 'Menunggu',
                'id_kategori' => 1,
                'feedback' => null,
                'admin_id' => 1
            ],
            [
                'status' => 'Proses',
                'id_kategori' => 2,
                'feedback' => 'Sedang dalam pengerjaan',
                'admin_id' => 1
            ]
        ];
        foreach ($aspirasi_data as $aspirasi) {
            Aspirasi::create($aspirasi);
        }

        // Input Aspirasi Seeder
        $input_aspirasi_data = [
            [
                'nis' => 1001,
                'pilihan' => 'Siswa',
                'id_kategori' => 1,
                'lokasi' => 'Ruang Kelas X-A',
                'ket' => 'AC tidak dingin'
            ],
            [
                'nis' => 1002,
                'pilihan' => 'Orang Tua',
                'id_kategori' => 2,
                'lokasi' => 'Lab Komputer',
                'ket' => 'Komputer rusak'
            ]
        ];
        foreach ($input_aspirasi_data as $input) {
            InputAspirasi::create($input);
        }
    }
}