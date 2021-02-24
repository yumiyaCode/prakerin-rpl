<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class KotaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $kotaa = [
			['id_provinsi' => 12, 'kode_kota' => 3201, 'nama_kota' => "KABUPATEN BOGOR", 'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')],
			['id_provinsi' => 12, 'kode_kota' => 3202, 'nama_kota' => "KABUPATEN SUKABUMI", 'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')],
			['id_provinsi' => 12, 'kode_kota' => 3203, 'nama_kota' => "KABUPATEN CIANJUR", 'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')],
			['id_provinsi' => 12, 'kode_kota' => 3204, 'nama_kota' => "KABUPATEN BANDUNG", 'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')],
			['id_provinsi' => 12, 'kode_kota' => 3205, 'nama_kota' => "KABUPATEN GARUT", 'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')],
			['id_provinsi' => 12, 'kode_kota' => 3206, 'nama_kota' => "KABUPATEN TASIKMALAYA", 'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')],
			['id_provinsi' => 12, 'kode_kota' => 3207, 'nama_kota' => "KABUPATEN CIAMIS", 'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')],
			['id_provinsi' => 12, 'kode_kota' => 3208, 'nama_kota' => "KABUPATEN KUNINGAN", 'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')],
			['id_provinsi' => 12, 'kode_kota' => 3209, 'nama_kota' => "KABUPATEN CIREBON", 'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')],
			['id_provinsi' => 12, 'kode_kota' => 3210, 'nama_kota' => "KABUPATEN MAJALENGKA", 'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')],
			['id_provinsi' => 12, 'kode_kota' => 3211, 'nama_kota' => "KABUPATEN SUMEDANG", 'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')],
			['id_provinsi' => 12, 'kode_kota' => 3212, 'nama_kota' => "KABUPATEN INDRAMAYU", 'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')],
			['id_provinsi' => 12, 'kode_kota' => 3213, 'nama_kota' => "KABUPATEN SUBANG", 'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')],
			['id_provinsi' => 12, 'kode_kota' => 3214, 'nama_kota' => "KABUPATEN PURWAKARTA", 'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')],
			['id_provinsi' => 12, 'kode_kota' => 3215, 'nama_kota' => "KABUPATEN KARAWANG", 'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')],
			['id_provinsi' => 12, 'kode_kota' => 3216, 'nama_kota' => "KABUPATEN BEKASI", 'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')],
			['id_provinsi' => 12, 'kode_kota' => 3217, 'nama_kota' => "KABUPATEN BANDUNG BARAT", 'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')],
			['id_provinsi' => 12, 'kode_kota' => 3218, 'nama_kota' => "KABUPATEN PANGANDARAN", 'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')],
			['id_provinsi' => 12, 'kode_kota' => 3271, 'nama_kota' => "KOTA BOGOR", 'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')],
			['id_provinsi' => 12, 'kode_kota' => 3272, 'nama_kota' => "KOTA SUKABUMI", 'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')],
			['id_provinsi' => 12, 'kode_kota' => 3273, 'nama_kota' => "KOTA BANDUNG", 'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')],
			['id_provinsi' => 12, 'kode_kota' => 3274, 'nama_kota' => "KOTA CIREBON", 'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')],
			['id_provinsi' => 12, 'kode_kota' => 3275, 'nama_kota' => "KOTA BEKASI", 'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')],
			['id_provinsi' => 12, 'kode_kota' => 3276, 'nama_kota' => "KOTA DEPOK", 'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')],
			['id_provinsi' => 12, 'kode_kota' => 3277, 'nama_kota' => "KOTA CIMAHI", 'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')],
			['id_provinsi' => 12, 'kode_kota' => 3278, 'nama_kota' => "KOTA TASIKMALAYA", 'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')],
			['id_provinsi' => 12, 'kode_kota' => 3279, 'nama_kota' => "KOTA BANJAR", 'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')]
		];
        DB::table('kotas')->insert($kotaa);
    }
}
