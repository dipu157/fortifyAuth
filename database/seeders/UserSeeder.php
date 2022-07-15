<?php

namespace Database\Seeders;
use App\Models\User;
use DB;

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Admin',
            'email' => 'm.dipu.it@brbhospital.com',
            'password' => bcrypt('11135157')
        ]);
    }
}
