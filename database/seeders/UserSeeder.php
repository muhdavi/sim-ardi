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
        $user->name = 'Operator';
        $user->email = 'operator@ardi';
        $user->password = Hash::make('punyam.nur');
        $user->is_admin = false;
        $user->save();
    }
}
