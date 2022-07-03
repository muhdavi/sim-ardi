<?php

namespace Database\Seeders;

use App\Models\Lemari;
use App\Models\Rak;
use App\Models\Rel;
use Illuminate\Database\Seeder;

class RelDSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $rel = new Rel;
        $rel->rel = 'D';
        $rel->keterangan = 'Rel untuk Pegawai Tahun 1980';
        $rel->save();

        $lemari = new Lemari;
        $lemari->lemari = 'D-1';
        $lemari->rel_id = $rel->id;
        $lemari->save();
        $rak = new Rak;
        $rak->rak = 'D-11';
        $rak->lemari_id = $lemari->id;
        $rak->save();
        $rak = new Rak;
        $rak->rak = 'D-12';
        $rak->lemari_id = $lemari->id;
        $rak->save();
        $rak = new Rak;
        $rak->rak = 'D-13';
        $rak->lemari_id = $lemari->id;
        $rak->save();
        $rak = new Rak;
        $rak->rak = 'D-14';
        $rak->lemari_id = $lemari->id;
        $rak->save();
        $rak = new Rak;
        $rak->rak = 'D-15';
        $rak->lemari_id = $lemari->id;
        $rak->save();

        $lemari = new Lemari;
        $lemari->lemari = 'D-2';
        $lemari->rel_id = $rel->id;
        $lemari->save();
        $rak = new Rak;
        $rak->rak = 'D-21';
        $rak->lemari_id = $lemari->id;
        $rak->save();
        $rak = new Rak;
        $rak->rak = 'D-22';
        $rak->lemari_id = $lemari->id;
        $rak->save();
        $rak = new Rak;
        $rak->rak = 'D-23';
        $rak->lemari_id = $lemari->id;
        $rak->save();
        $rak = new Rak;
        $rak->rak = 'D-24';
        $rak->lemari_id = $lemari->id;
        $rak->save();
        $rak = new Rak;
        $rak->rak = 'D-25';
        $rak->lemari_id = $lemari->id;
        $rak->save();

        $lemari = new Lemari;
        $lemari->lemari = 'D-3';
        $lemari->rel_id = $rel->id;
        $lemari->save();
        $rak = new Rak;
        $rak->rak = 'D-31';
        $rak->lemari_id = $lemari->id;
        $rak->save();
        $rak = new Rak;
        $rak->rak = 'D-32';
        $rak->lemari_id = $lemari->id;
        $rak->save();
        $rak = new Rak;
        $rak->rak = 'D-33';
        $rak->lemari_id = $lemari->id;
        $rak->save();
        $rak = new Rak;
        $rak->rak = 'D-34';
        $rak->lemari_id = $lemari->id;
        $rak->save();
        $rak = new Rak;
        $rak->rak = 'D-35';
        $rak->lemari_id = $lemari->id;
        $rak->save();

        $lemari = new Lemari;
        $lemari->lemari = 'D-4';
        $lemari->rel_id = $rel->id;
        $lemari->save();
        $rak = new Rak;
        $rak->rak = 'D-41';
        $rak->lemari_id = $lemari->id;
        $rak->save();
        $rak = new Rak;
        $rak->rak = 'D-42';
        $rak->lemari_id = $lemari->id;
        $rak->save();
        $rak = new Rak;
        $rak->rak = 'D-43';
        $rak->lemari_id = $lemari->id;
        $rak->save();
        $rak = new Rak;
        $rak->rak = 'D-44';
        $rak->lemari_id = $lemari->id;
        $rak->save();
        $rak = new Rak;
        $rak->rak = 'D-45';
        $rak->lemari_id = $lemari->id;
        $rak->save();

        $lemari = new Lemari;
        $lemari->lemari = 'D-5';
        $lemari->rel_id = $rel->id;
        $lemari->save();
        $rak = new Rak;
        $rak->rak = 'D-51';
        $rak->lemari_id = $lemari->id;
        $rak->save();
        $rak = new Rak;
        $rak->rak = 'D-52';
        $rak->lemari_id = $lemari->id;
        $rak->save();
        $rak = new Rak;
        $rak->rak = 'D-53';
        $rak->lemari_id = $lemari->id;
        $rak->save();
        $rak = new Rak;
        $rak->rak = 'D-54';
        $rak->lemari_id = $lemari->id;
        $rak->save();
        $rak = new Rak;
        $rak->rak = 'D-55';
        $rak->lemari_id = $lemari->id;
        $rak->save();

        $lemari = new Lemari;
        $lemari->lemari = 'D-6';
        $lemari->rel_id = $rel->id;
        $lemari->save();
        $rak = new Rak;
        $rak->rak = 'D-61';
        $rak->lemari_id = $lemari->id;
        $rak->save();
        $rak = new Rak;
        $rak->rak = 'D-62';
        $rak->lemari_id = $lemari->id;
        $rak->save();
        $rak = new Rak;
        $rak->rak = 'D-63';
        $rak->lemari_id = $lemari->id;
        $rak->save();
        $rak = new Rak;
        $rak->rak = 'D-64';
        $rak->lemari_id = $lemari->id;
        $rak->save();
        $rak = new Rak;
        $rak->rak = 'D-65';
        $rak->lemari_id = $lemari->id;
        $rak->save();

        $lemari = new Lemari;
        $lemari->lemari = 'D-7';
        $lemari->rel_id = $rel->id;
        $lemari->save();
        $rak = new Rak;
        $rak->rak = 'D-71';
        $rak->lemari_id = $lemari->id;
        $rak->save();
        $rak = new Rak;
        $rak->rak = 'D-72';
        $rak->lemari_id = $lemari->id;
        $rak->save();
        $rak = new Rak;
        $rak->rak = 'D-73';
        $rak->lemari_id = $lemari->id;
        $rak->save();
        $rak = new Rak;
        $rak->rak = 'D-74';
        $rak->lemari_id = $lemari->id;
        $rak->save();
        $rak = new Rak;
        $rak->rak = 'D-75';
        $rak->lemari_id = $lemari->id;
        $rak->save();

        $lemari = new Lemari;
        $lemari->lemari = 'D-8';
        $lemari->rel_id = $rel->id;
        $lemari->save();
        $rak = new Rak;
        $rak->rak = 'D-81';
        $rak->lemari_id = $lemari->id;
        $rak->save();
        $rak = new Rak;
        $rak->rak = 'D-82';
        $rak->lemari_id = $lemari->id;
        $rak->save();
        $rak = new Rak;
        $rak->rak = 'D-83';
        $rak->lemari_id = $lemari->id;
        $rak->save();
        $rak = new Rak;
        $rak->rak = 'D-84';
        $rak->lemari_id = $lemari->id;
        $rak->save();
        $rak = new Rak;
        $rak->rak = 'D-85';
        $rak->lemari_id = $lemari->id;
        $rak->save();
    }
}
