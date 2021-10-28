<?php

use Illuminate\Database\Seeder;

class StatusLhkpnLhkasnTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $status_seed = [
            [
                'id' => 1,
                'nama_status' => 'LHKPN',
                'code' => '1',
            ],
            [
                'id' => 2,
                'nama_role' => 'LHKASN',
                'code' => '2',
            ],

        ];

        try {
            DB::table('status_lhkpnlhkasn')->insert($status_seed);
        } catch(\Exception $exception){
        }
    }
  
}
