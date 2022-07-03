<?php

namespace Database\Seeders;

use App\Models\Lemari;
use App\Models\Rak;
use App\Models\Rel;
use Illuminate\Database\Seeder;

class RelESeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $rel = new Rel;
        $rel->rel = 'E';
        $rel->keterangan = 'Rel untuk Pegawai Tahun 1990';
        $rel->save();

        $lemari = new Lemari;
        $lemari->lemari = 'E-1';
        $lemari->rel_id = $rel->id;
        $lemari->save();
        $rak = new Rak;
        $rak->rak = 'E-11';
        $rak->lemari_id = $lemari->id;
        $rak->save();
        $rak = new Rak;
        $rak->rak = 'E-12';
        $rak->lemari_id = $lemari->id;
        $rak->save();
        $rak = new Rak;
        $rak->rak = 'E-13';
        $rak->lemari_id = $lemari->id;
        $rak->save();
        $rak = new Rak;
        $rak->rak = 'E-14';
        $rak->lemari_id = $lemari->id;
        $rak->save();
        $rak = new Rak;
        $rak->rak = 'E-15';
        $rak->lemari_id = $lemari->id;
        $rak->save();

        $lemari = new Lemari;
        $lemari->lemari = 'E-2';
        $lemari->rel_id = $rel->id;
        $lemari->save();
        $rak = new Rak;
        $rak->rak = 'E-21';
        $rak->lemari_id = $lemari->id;
        $rak->save();
        $rak = new Rak;
        $rak->rak = 'E-22';
        $rak->lemari_id = $lemari->id;
        $rak->save();
        $rak = new Rak;
        $rak->rak = 'E-23';
        $rak->lemari_id = $lemari->id;
        $rak->save();
        $rak = new Rak;
        $rak->rak = 'E-24';
        $rak->lemari_id = $lemari->id;
        $rak->save();
        $rak = new Rak;
        $rak->rak = 'E-25';
        $rak->lemari_id = $lemari->id;
        $rak->save();

        $lemari = new Lemari;
        $lemari->lemari = 'E-3';
        $lemari->rel_id = $rel->id;
        $lemari->save();
        $rak = new Rak;
        $rak->rak = 'E-31';
        $rak->lemari_id = $lemari->id;
        $rak->save();
        $rak = new Rak;
        $rak->rak = 'E-32';
        $rak->lemari_id = $lemari->id;
        $rak->save();
        $rak = new Rak;
        $rak->rak = 'E-33';
        $rak->lemari_id = $lemari->id;
        $rak->save();
        $rak = new Rak;
        $rak->rak = 'E-34';
        $rak->lemari_id = $lemari->id;
        $rak->save();
        $rak = new Rak;
        $rak->rak = 'E-35';
        $rak->lemari_id = $lemari->id;
        $rak->save();

        $lemari = new Lemari;
        $lemari->lemari = 'E-4';
        $lemari->rel_id = $rel->id;
        $lemari->save();
        $rak = new Rak;
        $rak->rak = 'E-41';
        $rak->lemari_id = $lemari->id;
        $rak->save();
        $rak = new Rak;
        $rak->rak = 'E-42';
        $rak->lemari_id = $lemari->id;
        $rak->save();
        $rak = new Rak;
        $rak->rak = 'E-43';
        $rak->lemari_id = $lemari->id;
        $rak->save();
        $rak = new Rak;
        $rak->rak = 'E-44';
        $rak->lemari_id = $lemari->id;
        $rak->save();
        $rak = new Rak;
        $rak->rak = 'E-45';
        $rak->lemari_id = $lemari->id;
        $rak->save();

        $lemari = new Lemari;
        $lemari->lemari = 'E-5';
        $lemari->rel_id = $rel->id;
        $lemari->save();
        $rak = new Rak;
        $rak->rak = 'E-51';
        $rak->lemari_id = $lemari->id;
        $rak->save();
        $rak = new Rak;
        $rak->rak = 'E-52';
        $rak->lemari_id = $lemari->id;
        $rak->save();
        $rak = new Rak;
        $rak->rak = 'E-53';
        $rak->lemari_id = $lemari->id;
        $rak->save();
        $rak = new Rak;
        $rak->rak = 'E-54';
        $rak->lemari_id = $lemari->id;
        $rak->save();
        $rak = new Rak;
        $rak->rak = 'E-55';
        $rak->lemari_id = $lemari->id;
        $rak->save();

        $lemari = new Lemari;
        $lemari->lemari = 'E-6';
        $lemari->rel_id = $rel->id;
        $lemari->save();
        $rak = new Rak;
        $rak->rak = 'E-61';
        $rak->lemari_id = $lemari->id;
        $rak->save();
        $rak = new Rak;
        $rak->rak = 'E-62';
        $rak->lemari_id = $lemari->id;
        $rak->save();
        $rak = new Rak;
        $rak->rak = 'E-63';
        $rak->lemari_id = $lemari->id;
        $rak->save();
        $rak = new Rak;
        $rak->rak = 'E-64';
        $rak->lemari_id = $lemari->id;
        $rak->save();
        $rak = new Rak;
        $rak->rak = 'E-65';
        $rak->lemari_id = $lemari->id;
        $rak->save();

        $lemari = new Lemari;
        $lemari->lemari = 'E-7';
        $lemari->rel_id = $rel->id;
        $lemari->save();
        $rak = new Rak;
        $rak->rak = 'E-71';
        $rak->lemari_id = $lemari->id;
        $rak->save();
        $rak = new Rak;
        $rak->rak = 'E-72';
        $rak->lemari_id = $lemari->id;
        $rak->save();
        $rak = new Rak;
        $rak->rak = 'E-73';
        $rak->lemari_id = $lemari->id;
        $rak->save();
        $rak = new Rak;
        $rak->rak = 'E-74';
        $rak->lemari_id = $lemari->id;
        $rak->save();
        $rak = new Rak;
        $rak->rak = 'E-75';
        $rak->lemari_id = $lemari->id;
        $rak->save();

        $lemari = new Lemari;
        $lemari->lemari = 'E-8';
        $lemari->rel_id = $rel->id;
        $lemari->save();
        $rak = new Rak;
        $rak->rak = 'E-81';
        $rak->lemari_id = $lemari->id;
        $rak->save();
        $rak = new Rak;
        $rak->rak = 'E-82';
        $rak->lemari_id = $lemari->id;
        $rak->save();
        $rak = new Rak;
        $rak->rak = 'E-83';
        $rak->lemari_id = $lemari->id;
        $rak->save();
        $rak = new Rak;
        $rak->rak = 'E-84';
        $rak->lemari_id = $lemari->id;
        $rak->save();
        $rak = new Rak;
        $rak->rak = 'E-85';
        $rak->lemari_id = $lemari->id;
        $rak->save();
    }
}
