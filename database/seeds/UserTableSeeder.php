<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::table('user')->truncate();

        DB::table('user')->insert([
            'adsoyad' => 'Yigit ALTINTAS',
            'email' => 'admin@yigit.com',
            'sifre' => Hash::make('admin'),
        ]);

    }
}
