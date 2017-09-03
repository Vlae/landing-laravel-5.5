<?php

use Illuminate\Database\Seeder;

class DownloadsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i = 0; $i < 10; $i++) {
            \Illuminate\Support\Facades\DB::table('downloads')->insert([
                'name' => str_random(10),
                'email' => str_random(10).'@gmail.com',
                'date' => time() - rand(1, 10000),
            ]);
        }
    }
}
