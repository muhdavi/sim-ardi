<?php

namespace Database\Seeders;

use App\Models\Lemari;
use App\Models\Rak;
use App\Models\Rel;
use Illuminate\Database\Seeder;

class RelLemariRakSeeder extends Seeder
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
        $rel->save();

        $lemari = new Lemari;
        $lemari->lemari = 'A-1';
        $lemari->rel_id = $rel->id;
        $lemari->save();
        $rak = new Rak;
        $rak->rak = 'A-11';
        $rak->lemari_id = $lemari->id;
        $rak->save();
        $rak = new Rak;
        $rak->rak = 'A-12';
        $rak->lemari_id = $lemari->id;
        $rak->save();
        $rak = new Rak;
        $rak->rak = 'A-13';
        $rak->lemari_id = $lemari->id;
        $rak->save();
        $rak = new Rak;
        $rak->rak = 'A-14';
        $rak->lemari_id = $lemari->id;
        $rak->save();
        $rak = new Rak;
        $rak->rak = 'A-15';
        $rak->lemari_id = $lemari->id;
        $rak->save();

        $lemari = new Lemari;
        $lemari->lemari = 'A-2';
        $lemari->rel_id = $rel->id;
        $lemari->save();
        $rak = new Rak;
        $rak->rak = 'A-21';
        $rak->lemari_id = $lemari->id;
        $rak->save();
        $rak = new Rak;
        $rak->rak = 'A-22';
        $rak->lemari_id = $lemari->id;
        $rak->save();
        $rak = new Rak;
        $rak->rak = 'A-23';
        $rak->lemari_id = $lemari->id;
        $rak->save();
        $rak = new Rak;
        $rak->rak = 'A-24';
        $rak->lemari_id = $lemari->id;
        $rak->save();
        $rak = new Rak;
        $rak->rak = 'A-25';
        $rak->lemari_id = $lemari->id;
        $rak->save();

        $lemari = new Lemari;
        $lemari->lemari = 'A-3';
        $lemari->rel_id = $rel->id;
        $lemari->save();
        $rak = new Rak;
        $rak->rak = 'A-31';
        $rak->lemari_id = $lemari->id;
        $rak->save();
        $rak = new Rak;
        $rak->rak = 'A-32';
        $rak->lemari_id = $lemari->id;
        $rak->save();
        $rak = new Rak;
        $rak->rak = 'A-33';
        $rak->lemari_id = $lemari->id;
        $rak->save();
        $rak = new Rak;
        $rak->rak = 'A-34';
        $rak->lemari_id = $lemari->id;
        $rak->save();
        $rak = new Rak;
        $rak->rak = 'A-35';
        $rak->lemari_id = $lemari->id;
        $rak->save();

        $lemari = new Lemari;
        $lemari->lemari = 'A-4';
        $lemari->rel_id = $rel->id;
        $lemari->save();
        $rak = new Rak;
        $rak->rak = 'A-41';
        $rak->lemari_id = $lemari->id;
        $rak->save();
        $rak = new Rak;
        $rak->rak = 'A-42';
        $rak->lemari_id = $lemari->id;
        $rak->save();
        $rak = new Rak;
        $rak->rak = 'A-43';
        $rak->lemari_id = $lemari->id;
        $rak->save();
        $rak = new Rak;
        $rak->rak = 'A-44';
        $rak->lemari_id = $lemari->id;
        $rak->save();
        $rak = new Rak;
        $rak->rak = 'A-45';
        $rak->lemari_id = $lemari->id;
        $rak->save();

        $lemari = new Lemari;
        $lemari->lemari = 'A-5';
        $lemari->rel_id = $rel->id;
        $lemari->save();
        $rak = new Rak;
        $rak->rak = 'A-51';
        $rak->lemari_id = $lemari->id;
        $rak->save();
        $rak = new Rak;
        $rak->rak = 'A-52';
        $rak->lemari_id = $lemari->id;
        $rak->save();
        $rak = new Rak;
        $rak->rak = 'A-53';
        $rak->lemari_id = $lemari->id;
        $rak->save();
        $rak = new Rak;
        $rak->rak = 'A-54';
        $rak->lemari_id = $lemari->id;
        $rak->save();
        $rak = new Rak;
        $rak->rak = 'A-55';
        $rak->lemari_id = $lemari->id;
        $rak->save();

        $lemari = new Lemari;
        $lemari->lemari = 'A-6';
        $lemari->rel_id = $rel->id;
        $lemari->save();
        $rak = new Rak;
        $rak->rak = 'A-61';
        $rak->lemari_id = $lemari->id;
        $rak->save();
        $rak = new Rak;
        $rak->rak = 'A-62';
        $rak->lemari_id = $lemari->id;
        $rak->save();
        $rak = new Rak;
        $rak->rak = 'A-63';
        $rak->lemari_id = $lemari->id;
        $rak->save();
        $rak = new Rak;
        $rak->rak = 'A-64';
        $rak->lemari_id = $lemari->id;
        $rak->save();
        $rak = new Rak;
        $rak->rak = 'A-65';
        $rak->lemari_id = $lemari->id;
        $rak->save();

        $lemari = new Lemari;
        $lemari->lemari = 'A-7';
        $lemari->rel_id = $rel->id;
        $lemari->save();
        $rak = new Rak;
        $rak->rak = 'A-71';
        $rak->lemari_id = $lemari->id;
        $rak->save();
        $rak = new Rak;
        $rak->rak = 'A-72';
        $rak->lemari_id = $lemari->id;
        $rak->save();
        $rak = new Rak;
        $rak->rak = 'A-73';
        $rak->lemari_id = $lemari->id;
        $rak->save();
        $rak = new Rak;
        $rak->rak = 'A-74';
        $rak->lemari_id = $lemari->id;
        $rak->save();
        $rak = new Rak;
        $rak->rak = 'A-75';
        $rak->lemari_id = $lemari->id;
        $rak->save();

        $lemari = new Lemari;
        $lemari->lemari = 'A-8';
        $lemari->rel_id = $rel->id;
        $lemari->save();
        $rak = new Rak;
        $rak->rak = 'A-81';
        $rak->lemari_id = $lemari->id;
        $rak->save();
        $rak = new Rak;
        $rak->rak = 'A-82';
        $rak->lemari_id = $lemari->id;
        $rak->save();
        $rak = new Rak;
        $rak->rak = 'A-83';
        $rak->lemari_id = $lemari->id;
        $rak->save();
        $rak = new Rak;
        $rak->rak = 'A-84';
        $rak->lemari_id = $lemari->id;
        $rak->save();
        $rak = new Rak;
        $rak->rak = 'A-85';
        $rak->lemari_id = $lemari->id;
        $rak->save();

    }
}
