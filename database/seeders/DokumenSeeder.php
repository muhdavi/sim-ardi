<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DokumenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('dokumens')->insert([
            ['kode' => 'SKCP', 'nama' => 'Surat Keputusan CPNS'],
            ['kode' => 'SKPN', 'nama' => 'Surat Keputusan PNS'],
            ['kode' => 'KTP', 'nama' => 'Kartu Tanda Penduduk'],
            ['kode' => 'KK', 'nama' => 'Kartu Keluarga'],
            ['kode' => 'IJZAKHIR', 'nama' => 'Ijazah dan Transkrip Nilai'],
            ['kode' => 'KPE', 'nama' => 'Kartu Pegawai/Kartu Pegawai Elektronik'],
            ['kode' => 'BUKAH', 'nama' => 'Buku Nikah'],
            ['kode' => 'NPWP', 'nama' => 'Nomor Pokok Wajib Pajak'],
        ]);
    }
}
