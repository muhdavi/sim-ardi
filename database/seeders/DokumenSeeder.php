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
            ['kode' => 'AKREDPT', 'nama' => 'Akreditasi Program Studi'],
            ['kode' => 'BALANTIK', 'nama' => 'Berita Acara Pelantikan Dalam Jabatan'],
            ['kode' => 'BAPNS', 'nama' => 'Berita Acara Pengangkatan Sumpah/ Janji PNS'],
            ['kode' => 'BASUMPJAB', 'nama' => 'Berita Acara Sumpah/Janji/Pelantikan Jabatan atau SPMT (Surat Perintah Melaksanakan TugaBsA)'],
            ['kode' => 'BUKAH', 'nama' => 'Buku Nikah'],
            ['kode' => 'IJZAKHIR', 'nama' => 'Ijazah dan Transkrip Nilai'],
            ['kode' => 'IJZPEND', 'nama' => 'Surat Tanda Lulus/ Ijazah Pada Saat CPNS'],
            ['kode' => 'KETPT', 'nama' => 'Keterangan Pangkalan Data DIKTI (FORLAPDIKTI) / Surat Keterangan KOPERTAIS'],
            ['kode' => 'KK', 'nama' => 'Kartu Keluarga'],
            ['kode' => 'KLARIFPAK', 'nama' => 'Asli Klarifikasi Penetapan Angka Kredit'],
            ['kode' => 'KPE', 'nama' => 'Kartu Pegawai / Kartu Pegawai Elektronik'],
            ['kode' => 'KTP', 'nama' => 'Kartu Tanda Penduduk'],
            ['kode' => 'NOTAKP', 'nama' => 'Nota Usul Kenaikan Pangkat'],
            ['kode' => 'NPAKTCLTN', 'nama' => 'Nota Persetujuan Pengaktifan Kembali Pasca Cuti Diluar Tanggungan Negara'],
            ['kode' => 'NPCLTN', 'nama' => 'Nota Persetujuan Cuti Diluar Tanggungan Negara'],
            ['kode' => 'NPDPB', 'nama' => 'Nota Persetujuan Perbantuan Pada Daerah Otonom/ Instansi Lain'],
            ['kode' => 'NPKP', 'nama' => 'Nota Persetujuan dan Nota Pertimbangan Teknis Kenaikan Pangkat'],
            ['kode' => 'NPMUT', 'nama' => 'Nota Persetujuan Mutasi Lain - lain'],
            ['kode' => 'NPNIP', 'nama' => 'Nota Persetujuan Penetapan NIP'],
            ['kode' => 'NPPI', 'nama' => 'Nota Persetujuan Pindah Instansi'],
            ['kode' => 'NPPMK', 'nama' => 'Nota Persetujuan Peninjauan Masa Kerja'],
            ['kode' => 'NPWP', 'nama' => 'Nomor Pokok Wajib Pajak'],
            ['kode' => 'PAK', 'nama' => 'Asli Penetapan Angka Kredit Terakhir (pertahun), Asli Penetapan Angka Kredit Terakhir (pertahun)'],
            ['kode' => 'PAK1', 'nama' => 'Penetapan Angkat Kredit (PAK) Dasar Pengangkatan'],
            ['kode' => 'SERDIK', 'nama' => 'Sertifikat Pendidik'],
            ['kode' => 'SERDIKLAT', 'nama' => 'Sertifikat Diklat/Uji Kompetensi Penjenjangan'],
            ['kode' => 'SERLATSAR', 'nama' => 'Sertifikat Diklat Dasar (Sesuai Jenjang)'],
            ['kode' => 'SKCP', 'nama' => 'Surat Keputusan CPNS'],
            ['kode' => 'SKETHILANG', 'nama' => 'Surat Keterangan Kehilangan dari Kepolisian'],
            ['kode' => 'SKHD', 'nama' => 'Surat Keputusan Hukuman Disiplin'],
            ['kode' => 'SKHENTIJF', 'nama' => 'Surat Keputusan Pemberhentian Jabatan Fungsional'],
            ['kode' => 'SKHENTIPPK', 'nama' => 'Surat Keputusan Pemberhentian dari Pejabat Pembina Kepegawaian'],
            ['kode' => 'SKHENTIS', 'nama' => 'Surat Keputusan Pemberhentian Sementara'],
            ['kode' => 'SKHENTISTR', 'nama' => 'Surat Keputusan Pemberhentian dari Jabatan Struktural'],
            ['kode' => 'SKINPASS', 'nama' => 'Surat Keputusan Inpassing Nama Jabatan'],
            ['kode' => 'SKIZNBEL', 'nama' => 'Surat Keputusan Izin Belajar'],
            ['kode' => 'SKJAB', 'nama' => 'Surat Keputusan Pengangkatan, Pemindahan dan Pemberhentian Jabatan'],
            ['kode' => 'SKJF1', 'nama' => 'SK Pengangkatan Pertama Dalam Jabatan Fungsional'],
            ['kode' => 'SKJFKEMBALI', 'nama' => 'Surat Keputusan Pengangkatan Kembali Jabatan Fungsional'],
            ['kode' => 'SKKP', 'nama' => 'Surat Keputusan Kenaikan Pangkat Terakhir'],
            ['kode' => 'SKLANTIK', 'nama' => 'SK Pengangkatan Dalam Jabatan Terakhir dan Surat Pernyataan Pelantikan (2 Dokumen)'],
            ['kode' => 'SKNAIKJAB', 'nama' => 'Surat Keputusan Kenaikan Jabatan'],
            ['kode' => 'SKP2THN', 'nama' => 'SKP, Penilaian Capaian SKP dan Penilaian Prestasi Kerja 2 (Dua) Tahun Terakhir'],
            ['kode' => 'SKPENYJFT', 'nama' => 'Surat Keputusan Penyesuaian Jabatan Fungsional Tertentu'],
            ['kode' => 'SKPI', 'nama' => 'Surat Keputusan Pindah Instansi'],
            ['kode' => 'SKPMK', 'nama' => 'Surat Keputusan Peninjauan Masa Kerja'],
            ['kode' => 'SKPN', 'nama' => 'Surat Keputusan PNS'],
            ['kode' => 'SKTUBEL', 'nama' => 'Surat Keputusan Tugas Belajar'],
            ['kode' => 'SPENGTR', 'nama' => 'Surat Pengantar Usulan Instansi'],
            ['kode' => 'SPMT', 'nama' => 'Surat Perintah Melaksanakan Tugas (SPMT)'],
            ['kode' => 'SPPLT', 'nama' => 'Surat Perintah Pelaksana Tugas (plt) dari Pejabat Pembina Kepegawaian'],
            ['kode' => 'SRTPG', 'nama' => 'Pencantuman Gelar Pendidikan'],
            ['kode' => 'STLUD', 'nama' => 'Surat Tanda Lulus Ujian Dinas'],
            ['kode' => 'STLUPKP', 'nama' => 'Surat Tanda Lulus Ujian Penyesuaian Kenaikan Pangkat'],
            ['kode' => 'STRPIM', 'nama' => 'Sertifikat Diklat Kepemimpinan (DIKLATPIM)'],
            ['kode' => 'STTPL', 'nama' => 'Surat Tanda Tamat Lulus Pendidikan dan Pelatihan (STTPL)'],
            ['kode' => 'TLDIKPENSUS', 'nama' => 'Tanda Lulus Mengikuti Pendidikan dan Pelatihan/Penataran/Kursus'],
            ['kode' => 'URAITGS', 'nama' => 'Uraian Tugas yang Ditetapkan Pejabat Setingkat Eselon II'],
        ]);
    }
}
