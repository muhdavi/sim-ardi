<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new User;
        $user->name = 'Admin';
        $user->email = 'admin@ardi';
        $user->password = Hash::make('ardi2019');
        $user->is_admin = true;
        $user->save();

        $user = new User;
        $user->name = 'Muhammad Nur Saifullah, S.Kom.';
        $user->email = 'mnur@ardi';
        $user->password = Hash::make('ardi2022');
        $user->is_admin = false;
        $user->save();
    }
}
