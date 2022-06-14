<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PerangkatDaerahSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('perangkat_daerahs')->insert([
            ['perangkat_daerah' => 'Sekretariat Daerah'],
            ['perangkat_daerah' => 'Sekretariat Dewan Perwakilan Rakyat Kabupaten'],
            ['perangkat_daerah' => 'Inspektorat Daerah'],
            ['perangkat_daerah' => 'Dinas Pendidikan dan Kebudayaan'],
            ['perangkat_daerah' => 'Dinas Kesehatan'],
            ['perangkat_daerah' => 'Dinas Pekerjaan Umum dan Perumahan Rakyat'],
            ['perangkat_daerah' => 'Satuan Polisi Pamong Praja dan Wilayatul Hisbah'],
            ['perangkat_daerah' => 'Dinas Sosial'],
            ['perangkat_daerah' => 'Dinas Perindustrian, Tenaga Kerja dan Transmigrasi'],
            ['perangkat_daerah' => 'Dinas Pemberdayaan Perempuan, Perlindungan Anak dan Keluarga Berencana'],
            ['perangkat_daerah' => 'Dinas Ketahanan Pangan dan Penyuluhan'],
            ['perangkat_daerah' => 'Dinas Lingkungan Hidup'],
            ['perangkat_daerah' => 'Dinas Kependudukan dan Pencatatan Sipil'],
            ['perangkat_daerah' => 'Dinas Pemberdayaan Masyarakat dan Gampong'],
            ['perangkat_daerah' => 'Dinas Perhubungan'],
            ['perangkat_daerah' => 'Dinas Komunikasi dan Informatika'],
            ['perangkat_daerah' => 'Dinas Perdagangan, Koperasi dan Usaha Kecil Menengah'],
            ['perangkat_daerah' => 'Dinas Penanaman Modal dan Pelayanan Perizinan Terpadu'],
            ['perangkat_daerah' => 'Dinas Pariwisata, Pemuda dan Olahraga'],
            ['perangkat_daerah' => 'Dinas Perpustakaan dan Kearsiapan'],
            ['perangkat_daerah' => 'Dinas Perikanan'],
            ['perangkat_daerah' => 'Dinas Tanaman Pangan dan Hortikultura'],
            ['perangkat_daerah' => 'Dinas Perkebunan dan Peternakan'],
            ['perangkat_daerah' => 'Dinas Syariat Islam'],
            ['perangkat_daerah' => 'Dinas Pertanahan'],
            ['perangkat_daerah' => 'Dinas Pendidikan Dayah'],
            ['perangkat_daerah' => 'Badan Perencanaan Pembangunan Daerah'],
            ['perangkat_daerah' => 'Badan Penanggulangan Bencana Daerah'],
            ['perangkat_daerah' => 'Badan Kesatuan Bangsa dan Politik'],
            ['perangkat_daerah' => 'Badan Pengelolaan Keuangan Daerah'],
            ['perangkat_daerah' => 'Badan Kepegawaian dan Pengembangan Sumber Daya Manusia'],
            ['perangkat_daerah' => 'RSUD dr. Zubir Mahmud Idi'],
            ['perangkat_daerah' => 'RSUD Sultan Abdul Azis Syah Peureulak'],
            ['perangkat_daerah' => 'Sekretariat Baitul Mal'],
            ['perangkat_daerah' => 'Sekretariat Majelis Permusyawaratan Ulama'],
            ['perangkat_daerah' => 'Sekretariat Majelis Pendidikan Aceh'],
            ['perangkat_daerah' => 'Sekretariat Majelis Adat Aceh'],
            ['perangkat_daerah' => 'Kecamatan Birem Bayeun'],
            ['perangkat_daerah' => 'Kecamatan Rantau Selamat'],
            ['perangkat_daerah' => 'Kecamatan Sungai Raya'],
            ['perangkat_daerah' => 'Kecamatan Peureulak Timur'],
            ['perangkat_daerah' => 'Kecamatan Peureulak'],
            ['perangkat_daerah' => 'Kecamatan Peureulak Barat'],
            ['perangkat_daerah' => 'Kecamatan Ranto Peureulak'],
            ['perangkat_daerah' => 'Kecamatan Peunaron'],
            ['perangkat_daerah' => 'Kecamatan Serbajadi'],
            ['perangkat_daerah' => 'Kecamatan Simpang Jernih'],
            ['perangkat_daerah' => 'Kecamatan Peudawa'],
            ['perangkat_daerah' => 'Kecamatan Idi Timur'],
            ['perangkat_daerah' => 'Kecamatan Idi Rayeuk'],
            ['perangkat_daerah' => 'Kecamatan Idi Tunong'],
            ['perangkat_daerah' => 'Kecamatan Darul Aman'],
            ['perangkat_daerah' => 'Kecamatan Darul Falah'],
            ['perangkat_daerah' => 'Kecamatan Darul Ihsan'],
            ['perangkat_daerah' => 'Kecamatan Banda Alam'],
            ['perangkat_daerah' => 'Kecamatan Nurussalam'],
            ['perangkat_daerah' => 'Kecamatan Julok'],
            ['perangkat_daerah' => 'Kecamatan Indra Makmu'],
            ['perangkat_daerah' => 'Kecamatan Simpang Ulim'],
            ['perangkat_daerah' => 'Kecamatan Madat'],
            ['perangkat_daerah' => 'Kecamatan Pantee Bidari']
        ]);
    }
}
