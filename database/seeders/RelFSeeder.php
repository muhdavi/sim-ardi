<?php

namespace Database\Seeders;

use App\Models\Lemari;
use App\Models\Rak;
use App\Models\Rel;
use Illuminate\Database\Seeder;

class RelFSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $rel = new Rel;
        $rel->rel = 'F';
        $rel->keterangan = 'Rel untuk Pegawai Tahun 2000';
        $rel->save();

        $lemari = new Lemari;
        $lemari->lemari = 'F-1';
        $lemari->rel_id = $rel->id;
        $lemari->save();
        $rakf = new Rak;
        $rakf->rak = 'F-11';
        $rakf->lemari_id = $lemari->id;
        $rakf->save();
        $rakf = new Rak;
        $rakf->rak = 'F-12';
        $rakf->lemari_id = $lemari->id;
        $rakf->save();
        $rakf = new Rak;
        $rakf->rak = 'F-13';
        $rakf->lemari_id = $lemari->id;
        $rakf->save();
        $rakf = new Rak;
        $rakf->rak = 'F-14';
        $rakf->lemari_id = $lemari->id;
        $rakf->save();
        $rakf = new Rak;
        $rakf->rak = 'F-15';
        $rakf->lemari_id = $lemari->id;
        $rakf->save();

        $lemari = new Lemari;
        $lemari->lemari = 'F-2';
        $lemari->rel_id = $rel->id;
        $lemari->save();
        $rakf = new Rak;
        $rakf->rak = 'F-21';
        $rakf->lemari_id = $lemari->id;
        $rakf->save();
        $rakf = new Rak;
        $rakf->rak = 'F-22';
        $rakf->lemari_id = $lemari->id;
        $rakf->save();
        $rakf = new Rak;
        $rakf->rak = 'F-23';
        $rakf->lemari_id = $lemari->id;
        $rakf->save();
        $rakf = new Rak;
        $rakf->rak = 'F-24';
        $rakf->lemari_id = $lemari->id;
        $rakf->save();
        $rakf = new Rak;
        $rakf->rak = 'F-25';
        $rakf->lemari_id = $lemari->id;
        $rakf->save();

        $lemari = new Lemari;
        $lemari->lemari = 'F-3';
        $lemari->rel_id = $rel->id;
        $lemari->save();
        $rakf = new Rak;
        $rakf->rak = 'F-31';
        $rakf->lemari_id = $lemari->id;
        $rakf->save();
        $rakf = new Rak;
        $rakf->rak = 'F-32';
        $rakf->lemari_id = $lemari->id;
        $rakf->save();
        $rakf = new Rak;
        $rakf->rak = 'F-33';
        $rakf->lemari_id = $lemari->id;
        $rakf->save();
        $rakf = new Rak;
        $rakf->rak = 'F-34';
        $rakf->lemari_id = $lemari->id;
        $rakf->save();
        $rakf = new Rak;
        $rakf->rak = 'F-35';
        $rakf->lemari_id = $lemari->id;
        $rakf->save();

        $lemari = new Lemari;
        $lemari->lemari = 'F-4';
        $lemari->rel_id = $rel->id;
        $lemari->save();
        $rakf = new Rak;
        $rakf->rak = 'F-41';
        $rakf->lemari_id = $lemari->id;
        $rakf->save();
        $rakf = new Rak;
        $rakf->rak = 'F-42';
        $rakf->lemari_id = $lemari->id;
        $rakf->save();
        $rakf = new Rak;
        $rakf->rak = 'F-43';
        $rakf->lemari_id = $lemari->id;
        $rakf->save();
        $rakf = new Rak;
        $rakf->rak = 'F-44';
        $rakf->lemari_id = $lemari->id;
        $rakf->save();
        $rakf = new Rak;
        $rakf->rak = 'F-45';
        $rakf->lemari_id = $lemari->id;
        $rakf->save();

        $lemari = new Lemari;
        $lemari->lemari = 'F-5';
        $lemari->rel_id = $rel->id;
        $lemari->save();
        $rakf = new Rak;
        $rakf->rak = 'F-51';
        $rakf->lemari_id = $lemari->id;
        $rakf->save();
        $rakf = new Rak;
        $rakf->rak = 'F-52';
        $rakf->lemari_id = $lemari->id;
        $rakf->save();
        $rakf = new Rak;
        $rakf->rak = 'F-53';
        $rakf->lemari_id = $lemari->id;
        $rakf->save();
        $rakf = new Rak;
        $rakf->rak = 'F-54';
        $rakf->lemari_id = $lemari->id;
        $rakf->save();
        $rakf = new Rak;
        $rakf->rak = 'F-55';
        $rakf->lemari_id = $lemari->id;
        $rakf->save();

        $lemari = new Lemari;
        $lemari->lemari = 'F-6';
        $lemari->rel_id = $rel->id;
        $lemari->save();
        $rakf = new Rak;
        $rakf->rak = 'F-61';
        $rakf->lemari_id = $lemari->id;
        $rakf->save();
        $rakf = new Rak;
        $rakf->rak = 'F-62';
        $rakf->lemari_id = $lemari->id;
        $rakf->save();
        $rakf = new Rak;
        $rakf->rak = 'F-63';
        $rakf->lemari_id = $lemari->id;
        $rakf->save();
        $rakf = new Rak;
        $rakf->rak = 'F-64';
        $rakf->lemari_id = $lemari->id;
        $rakf->save();
        $rakf = new Rak;
        $rakf->rak = 'F-65';
        $rakf->lemari_id = $lemari->id;
        $rakf->save();

        $lemari = new Lemari;
        $lemari->lemari = 'F-7';
        $lemari->rel_id = $rel->id;
        $lemari->save();
        $rakf = new Rak;
        $rakf->rak = 'F-71';
        $rakf->lemari_id = $lemari->id;
        $rakf->save();
        $rakf = new Rak;
        $rakf->rak = 'F-72';
        $rakf->lemari_id = $lemari->id;
        $rakf->save();
        $rakf = new Rak;
        $rakf->rak = 'F-73';
        $rakf->lemari_id = $lemari->id;
        $rakf->save();
        $rakf = new Rak;
        $rakf->rak = 'F-74';
        $rakf->lemari_id = $lemari->id;
        $rakf->save();
        $rakf = new Rak;
        $rakf->rak = 'F-75';
        $rakf->lemari_id = $lemari->id;
        $rakf->save();

        $lemari = new Lemari;
        $lemari->lemari = 'F-8';
        $lemari->rel_id = $rel->id;
        $lemari->save();
        $rakf = new Rak;
        $rakf->rak = 'F-81';
        $rakf->lemari_id = $lemari->id;
        $rakf->save();
        $rakf = new Rak;
        $rakf->rak = 'F-82';
        $rakf->lemari_id = $lemari->id;
        $rakf->save();
        $rakf = new Rak;
        $rakf->rak = 'F-83';
        $rakf->lemari_id = $lemari->id;
        $rakf->save();
        $rakf = new Rak;
        $rakf->rak = 'F-84';
        $rakf->lemari_id = $lemari->id;
        $rakf->save();
        $rakf = new Rak;
        $rakf->rak = 'F-85';
        $rakf->lemari_id = $lemari->id;
        $rakf->save();
    }
}
