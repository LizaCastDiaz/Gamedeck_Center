<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GameSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('games')->insert(
            [

                "title" => "NBA",
                "thumbnail_url" => "xxxx",
                "url" => "xxxx",
                "createdBy" => 'user',
            ],
            [
                "title" => "Marvel Studio",
                "thumbnail_url" => "xxxx",
                "url" => "xxxx",
                "createdBy" => 'user',
            ],
            [
                "title" => "Crash",
                "thumbnail_url" => "xxxx",
                "url" => "xxxx",
                "createdBy" => 'user',
            ],
            [
                "title" => "Call of Duty",
                "thumbnail_url" => "xxxx",
                "url" => "xxxx",
                "createdBy" => 'user_id',
            ],
        );
    }
}
// $table->id();
// $table->String('title');
// $table->String('tumbnail_url');
// $table->String('url');
// $table->timestamps();
// });
