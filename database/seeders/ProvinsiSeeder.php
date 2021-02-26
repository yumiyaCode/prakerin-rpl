<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

use Illuminate\Database\Seeder;

class ProvinsiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $provinsi = [
        	['kode_provinsi' => 11, 'nama_provinsi' => "ACEH", 'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
],
			['kode_provinsi' => 12, 'nama_provinsi' => "SUMATERA UTARA", 'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
],
			['kode_provinsi' => 13, 'nama_provinsi' => "SUMATERA BARAT", 'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
],
			['kode_provinsi' => 14, 'nama_provinsi' => "RIAU", 'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
],
			['kode_provinsi' => 15, 'nama_provinsi' => "JAMBI", 'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
],
			['kode_provinsi' => 16, 'nama_provinsi' => "SUMATERA SELATAN", 'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
],
			['kode_provinsi' => 17, 'nama_provinsi' => "BENGKULU", 'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
],
			['kode_provinsi' => 18, 'nama_provinsi' => "LAMPUNG", 'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
],
			['kode_provinsi' => 19, 'nama_provinsi' => "KEPULAUAN BANGKA BELITUNG", 'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
],
			['kode_provinsi' => 21, 'nama_provinsi' => "KEPULAUAN RIAU", 'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
],
			['kode_provinsi' => 31, 'nama_provinsi' => "DKI JAKARTA", 'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
],
			['kode_provinsi' => 32, 'nama_provinsi' => "JAWA BARAT", 'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
],
			['kode_provinsi' => 33, 'nama_provinsi' => "JAWA TENGAH", 'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
],
			['kode_provinsi' => 34, 'nama_provinsi' => "DI YOGYAKARTA", 'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
],
			['kode_provinsi' => 35, 'nama_provinsi' => "JAWA TIMUR", 'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
],
			['kode_provinsi' => 36, 'nama_provinsi' => "BANTEN", 'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
],
			['kode_provinsi' => 51, 'nama_provinsi' => "BALI", 'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
],
			['kode_provinsi' => 52, 'nama_provinsi' => "NUSA TENGGARA BARAT", 'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
],
			['kode_provinsi' => 53, 'nama_provinsi' => "NUSA TENGGARA TIMUR", 'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
],
			['kode_provinsi' => 61, 'nama_provinsi' => "KALIMANTAN BARAT", 'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
],
			['kode_provinsi' => 62, 'nama_provinsi' => "KALIMANTAN TENGAH", 'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
],
			['kode_provinsi' => 63, 'nama_provinsi' => "KALIMANTAN SELATAN", 'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
],
			['kode_provinsi' => 64, 'nama_provinsi' => "KALIMANTAN TIMUR", 'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
],
			['kode_provinsi' => 65, 'nama_provinsi' => "KALIMANTAN UTARA", 'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
],
			['kode_provinsi' => 71, 'nama_provinsi' => "SULAWESI UTARA", 'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
],
			['kode_provinsi' => 72, 'nama_provinsi' => "SULAWESI TENGAH", 'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
],
			['kode_provinsi' => 73, 'nama_provinsi' => "SULAWESI SELATAN", 'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
],
			['kode_provinsi' => 74, 'nama_provinsi' => "SULAWESI TENGGARA", 'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
],
			['kode_provinsi' => 75, 'nama_provinsi' => "GORONTALO", 'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
],
			['kode_provinsi' => 76, 'nama_provinsi' => "SULAWESI BARAT", 'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
],
			['kode_provinsi' => 81, 'nama_provinsi' => "MALUKU", 'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
],
			['kode_provinsi' => 82, 'nama_provinsi' => "MALUKU UTARA", 'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
],
			['kode_provinsi' => 91, 'nama_provinsi' => "PAPUA BARAT", 'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
],
			['kode_provinsi' => 94, 'nama_provinsi' => "PAPUA", 'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
]
        ];

        DB::table('provinsis')->insert($provinsi);

    }
}
    

