<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PartySeeder extends Seeder
{

    public function run()
    {
        DB::table('parties')->insert(
            [
                ['name' => 'NBA Team'],
                ['game_id' => '1'],
            ],
            [
                ['name' => 'Marvel Studio Team'],
                ['game_id' => '2'],
            ],
            [
                ['name' => 'Crash Team'],
                ['game_id' => '3'],
            ],
            [
                ['name' => 'Call of Dury Team'],
                ['game_id' => '4'],
            ],


        );
    }
}
