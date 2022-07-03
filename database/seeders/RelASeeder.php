<?php

namespace Database\Seeders;

use App\Models\Lemari;
use App\Models\Rak;
use App\Models\Rel;
use Illuminate\Database\Seeder;

class RelASeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $rel = new Rel;
        $rel->rel = 'A';
        $rel->keterangan = 'Rel untuk Pegawai Pensiun';
        $rel->save();

        $lemari = new Lemari;
        $lemari->lemari = 'A-1';
        $lemari->rel_id = $rel->id;
        $lemari->save();
        $raka = new Rak;
        $raka->rak = 'A-11';
        $raka->lemari_id = $lemari->id;
        $raka->save();
        $raka = new Rak;
        $raka->rak = 'A-12';
        $raka->lemari_id = $lemari->id;
        $raka->save();
        $raka = new Rak;
        $raka->rak = 'A-13';
        $raka->lemari_id = $lemari->id;
        $raka->save();
        $raka = new Rak;
        $raka->rak = 'A-14';
        $raka->lemari_id = $lemari->id;
        $raka->save();
        $raka = new Rak;
        $raka->rak = 'A-15';
        $raka->lemari_id = $lemari->id;
        $raka->save();

        $lemari = new Lemari;
        $lemari->lemari = 'A-2';
        $lemari->rel_id = $rel->id;
        $lemari->save();
        $raka = new Rak;
        $raka->rak = 'A-21';
        $raka->lemari_id = $lemari->id;
        $raka->save();
        $raka = new Rak;
        $raka->rak = 'A-22';
        $raka->lemari_id = $lemari->id;
        $raka->save();
        $raka = new Rak;
        $raka->rak = 'A-23';
        $raka->lemari_id = $lemari->id;
        $raka->save();
        $raka = new Rak;
        $raka->rak = 'A-24';
        $raka->lemari_id = $lemari->id;
        $raka->save();
        $raka = new Rak;
        $raka->rak = 'A-25';
        $raka->lemari_id = $lemari->id;
        $raka->save();

        $lemari = new Lemari;
        $lemari->lemari = 'A-3';
        $lemari->rel_id = $rel->id;
        $lemari->save();
        $raka = new Rak;
        $raka->rak = 'A-31';
        $raka->lemari_id = $lemari->id;
        $raka->save();
        $raka = new Rak;
        $raka->rak = 'A-32';
        $raka->lemari_id = $lemari->id;
        $raka->save();
        $raka = new Rak;
        $raka->rak = 'A-33';
        $raka->lemari_id = $lemari->id;
        $raka->save();
        $raka = new Rak;
        $raka->rak = 'A-34';
        $raka->lemari_id = $lemari->id;
        $raka->save();
        $raka = new Rak;
        $raka->rak = 'A-35';
        $raka->lemari_id = $lemari->id;
        $raka->save();

        $lemari = new Lemari;
        $lemari->lemari = 'A-4';
        $lemari->rel_id = $rel->id;
        $lemari->save();
        $raka = new Rak;
        $raka->rak = 'A-41';
        $raka->lemari_id = $lemari->id;
        $raka->save();
        $raka = new Rak;
        $raka->rak = 'A-42';
        $raka->lemari_id = $lemari->id;
        $raka->save();
        $raka = new Rak;
        $raka->rak = 'A-43';
        $raka->lemari_id = $lemari->id;
        $raka->save();
        $raka = new Rak;
        $raka->rak = 'A-44';
        $raka->lemari_id = $lemari->id;
        $raka->save();
        $raka = new Rak;
        $raka->rak = 'A-45';
        $raka->lemari_id = $lemari->id;
        $raka->save();

        $lemari = new Lemari;
        $lemari->lemari = 'A-5';
        $lemari->rel_id = $rel->id;
        $lemari->save();
        $raka = new Rak;
        $raka->rak = 'A-51';
        $raka->lemari_id = $lemari->id;
        $raka->save();
        $raka = new Rak;
        $raka->rak = 'A-52';
        $raka->lemari_id = $lemari->id;
        $raka->save();
        $raka = new Rak;
        $raka->rak = 'A-53';
        $raka->lemari_id = $lemari->id;
        $raka->save();
        $raka = new Rak;
        $raka->rak = 'A-54';
        $raka->lemari_id = $lemari->id;
        $raka->save();
        $raka = new Rak;
        $raka->rak = 'A-55';
        $raka->lemari_id = $lemari->id;
        $raka->save();

        $lemari = new Lemari;
        $lemari->lemari = 'A-6';
        $lemari->rel_id = $rel->id;
        $lemari->save();
        $raka = new Rak;
        $raka->rak = 'A-61';
        $raka->lemari_id = $lemari->id;
        $raka->save();
        $raka = new Rak;
        $raka->rak = 'A-62';
        $raka->lemari_id = $lemari->id;
        $raka->save();
        $raka = new Rak;
        $raka->rak = 'A-63';
        $raka->lemari_id = $lemari->id;
        $raka->save();
        $raka = new Rak;
        $raka->rak = 'A-64';
        $raka->lemari_id = $lemari->id;
        $raka->save();
        $raka = new Rak;
        $raka->rak = 'A-65';
        $raka->lemari_id = $lemari->id;
        $raka->save();

        $lemari = new Lemari;
        $lemari->lemari = 'A-7';
        $lemari->rel_id = $rel->id;
        $lemari->save();
        $raka = new Rak;
        $raka->rak = 'A-71';
        $raka->lemari_id = $lemari->id;
        $raka->save();
        $raka = new Rak;
        $raka->rak = 'A-72';
        $raka->lemari_id = $lemari->id;
        $raka->save();
        $raka = new Rak;
        $raka->rak = 'A-73';
        $raka->lemari_id = $lemari->id;
        $raka->save();
        $raka = new Rak;
        $raka->rak = 'A-74';
        $raka->lemari_id = $lemari->id;
        $raka->save();
        $raka = new Rak;
        $raka->rak = 'A-75';
        $raka->lemari_id = $lemari->id;
        $raka->save();

        $lemari = new Lemari;
        $lemari->lemari = 'A-8';
        $lemari->rel_id = $rel->id;
        $lemari->save();
        $raka = new Rak;
        $raka->rak = 'A-81';
        $raka->lemari_id = $lemari->id;
        $raka->save();
        $raka = new Rak;
        $raka->rak = 'A-82';
        $raka->lemari_id = $lemari->id;
        $raka->save();
        $raka = new Rak;
        $raka->rak = 'A-83';
        $raka->lemari_id = $lemari->id;
        $raka->save();
        $raka = new Rak;
        $raka->rak = 'A-84';
        $raka->lemari_id = $lemari->id;
        $raka->save();
        $raka = new Rak;
        $raka->rak = 'A-85';
        $raka->lemari_id = $lemari->id;
        $raka->save();
    }
}
