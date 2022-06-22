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
        //
        User::updateOrCreate([
            'name' => 'Risa',
            'email' => 'risa@gmail.com',
            'password' => Hash::make('risa'),
            'is_admin' => 1
        ]);
    }
}
