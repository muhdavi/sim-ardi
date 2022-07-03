<?php

namespace Database\Seeders;

use App\Models\Lemari;
use App\Models\Rak;
use App\Models\Rel;
use Illuminate\Database\Seeder;

class RelBSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $rel = new Rel;
        $rel->rel = 'B';
        $rel->keterangan = 'Rel untuk Pegawai Tahun 1960';
        $rel->save();

        $lemari = new Lemari;
        $lemari->lemari = 'B-1';
        $lemari->rel_id = $rel->id;
        $lemari->save();
        $rakb = new Rak;
        $rakb->rak = 'B-11';
        $rakb->lemari_id = $lemari->id;
        $rakb->save();
        $rakb = new Rak;
        $rakb->rak = 'B-12';
        $rakb->lemari_id = $lemari->id;
        $rakb->save();
        $rakb = new Rak;
        $rakb->rak = 'B-13';
        $rakb->lemari_id = $lemari->id;
        $rakb->save();
        $rakb = new Rak;
        $rakb->rak = 'B-14';
        $rakb->lemari_id = $lemari->id;
        $rakb->save();
        $rakb = new Rak;
        $rakb->rak = 'B-15';
        $rakb->lemari_id = $lemari->id;
        $rakb->save();

        $lemari = new Lemari;
        $lemari->lemari = 'B-2';
        $lemari->rel_id = $rel->id;
        $lemari->save();
        $rakb = new Rak;
        $rakb->rak = 'B-21';
        $rakb->lemari_id = $lemari->id;
        $rakb->save();
        $rakb = new Rak;
        $rakb->rak = 'B-22';
        $rakb->lemari_id = $lemari->id;
        $rakb->save();
        $rakb = new Rak;
        $rakb->rak = 'B-23';
        $rakb->lemari_id = $lemari->id;
        $rakb->save();
        $rakb = new Rak;
        $rakb->rak = 'B-24';
        $rakb->lemari_id = $lemari->id;
        $rakb->save();
        $rakb = new Rak;
        $rakb->rak = 'B-25';
        $rakb->lemari_id = $lemari->id;
        $rakb->save();

        $lemari = new Lemari;
        $lemari->lemari = 'B-3';
        $lemari->rel_id = $rel->id;
        $lemari->save();
        $rakb = new Rak;
        $rakb->rak = 'B-31';
        $rakb->lemari_id = $lemari->id;
        $rakb->save();
        $rakb = new Rak;
        $rakb->rak = 'B-32';
        $rakb->lemari_id = $lemari->id;
        $rakb->save();
        $rakb = new Rak;
        $rakb->rak = 'B-33';
        $rakb->lemari_id = $lemari->id;
        $rakb->save();
        $rakb = new Rak;
        $rakb->rak = 'B-34';
        $rakb->lemari_id = $lemari->id;
        $rakb->save();
        $rakb = new Rak;
        $rakb->rak = 'B-35';
        $rakb->lemari_id = $lemari->id;
        $rakb->save();

        $lemari = new Lemari;
        $lemari->lemari = 'B-4';
        $lemari->rel_id = $rel->id;
        $lemari->save();
        $rakb = new Rak;
        $rakb->rak = 'B-41';
        $rakb->lemari_id = $lemari->id;
        $rakb->save();
        $rakb = new Rak;
        $rakb->rak = 'B-42';
        $rakb->lemari_id = $lemari->id;
        $rakb->save();
        $rakb = new Rak;
        $rakb->rak = 'B-43';
        $rakb->lemari_id = $lemari->id;
        $rakb->save();
        $rakb = new Rak;
        $rakb->rak = 'B-44';
        $rakb->lemari_id = $lemari->id;
        $rakb->save();
        $rakb = new Rak;
        $rakb->rak = 'B-45';
        $rakb->lemari_id = $lemari->id;
        $rakb->save();

        $lemari = new Lemari;
        $lemari->lemari = 'B-5';
        $lemari->rel_id = $rel->id;
        $lemari->save();
        $rakb = new Rak;
        $rakb->rak = 'B-51';
        $rakb->lemari_id = $lemari->id;
        $rakb->save();
        $rakb = new Rak;
        $rakb->rak = 'B-52';
        $rakb->lemari_id = $lemari->id;
        $rakb->save();
        $rakb = new Rak;
        $rakb->rak = 'B-53';
        $rakb->lemari_id = $lemari->id;
        $rakb->save();
        $rakb = new Rak;
        $rakb->rak = 'B-54';
        $rakb->lemari_id = $lemari->id;
        $rakb->save();
        $rakb = new Rak;
        $rakb->rak = 'B-55';
        $rakb->lemari_id = $lemari->id;
        $rakb->save();

        $lemari = new Lemari;
        $lemari->lemari = 'B-6';
        $lemari->rel_id = $rel->id;
        $lemari->save();
        $rakb = new Rak;
        $rakb->rak = 'B-61';
        $rakb->lemari_id = $lemari->id;
        $rakb->save();
        $rakb = new Rak;
        $rakb->rak = 'B-62';
        $rakb->lemari_id = $lemari->id;
        $rakb->save();
        $rakb = new Rak;
        $rakb->rak = 'B-63';
        $rakb->lemari_id = $lemari->id;
        $rakb->save();
        $rakb = new Rak;
        $rakb->rak = 'B-64';
        $rakb->lemari_id = $lemari->id;
        $rakb->save();
        $rakb = new Rak;
        $rakb->rak = 'B-65';
        $rakb->lemari_id = $lemari->id;
        $rakb->save();

        $lemari = new Lemari;
        $lemari->lemari = 'B-7';
        $lemari->rel_id = $rel->id;
        $lemari->save();
        $rakb = new Rak;
        $rakb->rak = 'B-71';
        $rakb->lemari_id = $lemari->id;
        $rakb->save();
        $rakb = new Rak;
        $rakb->rak = 'B-72';
        $rakb->lemari_id = $lemari->id;
        $rakb->save();
        $rakb = new Rak;
        $rakb->rak = 'B-73';
        $rakb->lemari_id = $lemari->id;
        $rakb->save();
        $rakb = new Rak;
        $rakb->rak = 'B-74';
        $rakb->lemari_id = $lemari->id;
        $rakb->save();
        $rakb = new Rak;
        $rakb->rak = 'B-75';
        $rakb->lemari_id = $lemari->id;
        $rakb->save();

        $lemari = new Lemari;
        $lemari->lemari = 'B-8';
        $lemari->rel_id = $rel->id;
        $lemari->save();
        $rakb = new Rak;
        $rakb->rak = 'B-81';
        $rakb->lemari_id = $lemari->id;
        $rakb->save();
        $rakb = new Rak;
        $rakb->rak = 'B-82';
        $rakb->lemari_id = $lemari->id;
        $rakb->save();
        $rakb = new Rak;
        $rakb->rak = 'B-83';
        $rakb->lemari_id = $lemari->id;
        $rakb->save();
        $rakb = new Rak;
        $rakb->rak = 'B-84';
        $rakb->lemari_id = $lemari->id;
        $rakb->save();
        $rakb = new Rak;
        $rakb->rak = 'B-85';
        $rakb->lemari_id = $lemari->id;
        $rakb->save();
    }
}
