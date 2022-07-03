<?php

namespace Database\Seeders;

use App\Models\Lemari;
use App\Models\Rak;
use App\Models\Rel;
use Illuminate\Database\Seeder;

class RelCSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $rel = new Rel;
        $rel->rel = 'C';
        $rel->keterangan = 'Rel untuk Pegawai Tahun 1970';
        $rel->save();

        $lemari = new Lemari;
        $lemari->lemari = 'C-1';
        $lemari->rel_id = $rel->id;
        $lemari->save();
        $rak = new Rak;
        $rak->rak = 'C-11';
        $rak->lemari_id = $lemari->id;
        $rak->save();
        $rak = new Rak;
        $rak->rak = 'C-12';
        $rak->lemari_id = $lemari->id;
        $rak->save();
        $rak = new Rak;
        $rak->rak = 'C-13';
        $rak->lemari_id = $lemari->id;
        $rak->save();
        $rak = new Rak;
        $rak->rak = 'C-14';
        $rak->lemari_id = $lemari->id;
        $rak->save();
        $rak = new Rak;
        $rak->rak = 'C-15';
        $rak->lemari_id = $lemari->id;
        $rak->save();
        $lemari = new Lemari;

        $lemari->lemari = 'C-2';
        $lemari->rel_id = $rel->id;
        $lemari->save();
        $rak = new Rak;
        $rak->rak = 'C-21';
        $rak->lemari_id = $lemari->id;
        $rak->save();
        $rak = new Rak;
        $rak->rak = 'C-22';
        $rak->lemari_id = $lemari->id;
        $rak->save();
        $rak = new Rak;
        $rak->rak = 'C-23';
        $rak->lemari_id = $lemari->id;
        $rak->save();
        $rak = new Rak;
        $rak->rak = 'C-24';
        $rak->lemari_id = $lemari->id;
        $rak->save();
        $rak = new Rak;
        $rak->rak = 'C-25';
        $rak->lemari_id = $lemari->id;
        $rak->save();

        $lemari = new Lemari;
        $lemari->lemari = 'C-3';
        $lemari->rel_id = $rel->id;
        $lemari->save();
        $rak = new Rak;
        $rak->rak = 'C-31';
        $rak->lemari_id = $lemari->id;
        $rak->save();
        $rak = new Rak;
        $rak->rak = 'C-32';
        $rak->lemari_id = $lemari->id;
        $rak->save();
        $rak = new Rak;
        $rak->rak = 'C-33';
        $rak->lemari_id = $lemari->id;
        $rak->save();
        $rak = new Rak;
        $rak->rak = 'C-34';
        $rak->lemari_id = $lemari->id;
        $rak->save();
        $rak = new Rak;
        $rak->rak = 'C-35';
        $rak->lemari_id = $lemari->id;
        $rak->save();

        $lemari = new Lemari;
        $lemari->lemari = 'C-4';
        $lemari->rel_id = $rel->id;
        $lemari->save();
        $rak = new Rak;
        $rak->rak = 'C-41';
        $rak->lemari_id = $lemari->id;
        $rak->save();
        $rak = new Rak;
        $rak->rak = 'C-42';
        $rak->lemari_id = $lemari->id;
        $rak->save();
        $rak = new Rak;
        $rak->rak = 'C-43';
        $rak->lemari_id = $lemari->id;
        $rak->save();
        $rak = new Rak;
        $rak->rak = 'C-44';
        $rak->lemari_id = $lemari->id;
        $rak->save();
        $rak = new Rak;
        $rak->rak = 'C-45';
        $rak->lemari_id = $lemari->id;
        $rak->save();

        $lemari = new Lemari;
        $lemari->lemari = 'C-5';
        $lemari->rel_id = $rel->id;
        $lemari->save();
        $rak = new Rak;
        $rak->rak = 'C-51';
        $rak->lemari_id = $lemari->id;
        $rak->save();
        $rak = new Rak;
        $rak->rak = 'C-52';
        $rak->lemari_id = $lemari->id;
        $rak->save();
        $rak = new Rak;
        $rak->rak = 'C-53';
        $rak->lemari_id = $lemari->id;
        $rak->save();
        $rak = new Rak;
        $rak->rak = 'C-54';
        $rak->lemari_id = $lemari->id;
        $rak->save();
        $rak = new Rak;
        $rak->rak = 'C-55';
        $rak->lemari_id = $lemari->id;
        $rak->save();

        $lemari = new Lemari;
        $lemari->lemari = 'C-6';
        $lemari->rel_id = $rel->id;
        $lemari->save();
        $rak = new Rak;
        $rak->rak = 'C-61';
        $rak->lemari_id = $lemari->id;
        $rak->save();
        $rak = new Rak;
        $rak->rak = 'C-62';
        $rak->lemari_id = $lemari->id;
        $rak->save();
        $rak = new Rak;
        $rak->rak = 'C-63';
        $rak->lemari_id = $lemari->id;
        $rak->save();
        $rak = new Rak;
        $rak->rak = 'C-64';
        $rak->lemari_id = $lemari->id;
        $rak->save();
        $rak = new Rak;
        $rak->rak = 'C-65';
        $rak->lemari_id = $lemari->id;
        $rak->save();

        $lemari = new Lemari;
        $lemari->lemari = 'C-7';
        $lemari->rel_id = $rel->id;
        $lemari->save();
        $rak = new Rak;
        $rak->rak = 'C-71';
        $rak->lemari_id = $lemari->id;
        $rak->save();
        $rak = new Rak;
        $rak->rak = 'C-72';
        $rak->lemari_id = $lemari->id;
        $rak->save();
        $rak = new Rak;
        $rak->rak = 'C-73';
        $rak->lemari_id = $lemari->id;
        $rak->save();
        $rak = new Rak;
        $rak->rak = 'C-74';
        $rak->lemari_id = $lemari->id;
        $rak->save();
        $rak = new Rak;
        $rak->rak = 'C-75';
        $rak->lemari_id = $lemari->id;
        $rak->save();

        $lemari = new Lemari;
        $lemari->lemari = 'C-8';
        $lemari->rel_id = $rel->id;
        $lemari->save();
        $rak = new Rak;
        $rak->rak = 'C-81';
        $rak->lemari_id = $lemari->id;
        $rak->save();
        $rak = new Rak;
        $rak->rak = 'C-82';
        $rak->lemari_id = $lemari->id;
        $rak->save();
        $rak = new Rak;
        $rak->rak = 'C-83';
        $rak->lemari_id = $lemari->id;
        $rak->save();
        $rak = new Rak;
        $rak->rak = 'C-84';
        $rak->lemari_id = $lemari->id;
        $rak->save();
        $rak = new Rak;
        $rak->rak = 'C-85';
        $rak->lemari_id = $lemari->id;
        $rak->save();
    }
}
