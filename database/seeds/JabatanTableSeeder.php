<?php

use Illuminate\Database\Seeder;

class JabatanTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $test = [
            [
                'id' => 1,
                'nama_jabatan' => 'Ketua',
                'id_jabatan' => 1
            ],
            [
                'id' => 2,
                'nama_jabatan' => 'Wakil Ketua',
                'id_jabatan' => 2
            ],
            [
                'id' => 3,
                'nama_jabatan' => 'Hakim',
                'id_jabatan' => 3
            ],
            [
                'id' => 4,
                'nama_jabatan' => 'Panitera',
                'id_jabatan' => 4
            ],
            [
                'id' => 5,
                'nama_jabatan' => 'Sekretaris',
                'id_jabatan' => 5
            ],
            [
                'id' => 6,
                'nama_jabatan' => 'Panitera Muda Gugatan',
                'id_jabatan' => 6
            ],
            [
                'id' => 7,
                'nama_jabatan' => 'Panitera Muda Permohonan',
                'id_jabatan' => 7
            ],
            [
                'id' => 8,
                'nama_jabatan' => 'Panitera Muda Hukum',
                'id_jabatan' => 8
            ],
            [
                'id' => 9,
                'nama_jabatan' => 'Panitera Pengganti',
                'id_jabatan' => 9
            ],
            [
                'id' => 10,
                'nama_jabatan' => 'Kasubbag',
                'id_jabatan' => 10
            ],
            [
                'id' => 11,
                'nama_jabatan' => 'Juru Sita',
                'id_jabatan' => 11
            ],
            [
                'id' => 12,
                'nama_jabatan' => 'Juru Sita Pengganti',
                'id_jabatan' => 12
            ],
            [
                'id' => 13,
                'nama_jabatan' => 'Staf',
                'id_jabatan' => 13
            ],

        ];

        try {
            DB::table('jabatan')->insert($test);
        } catch(\Exception $exception){
        }
    }
}
