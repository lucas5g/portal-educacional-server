<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Teachers extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('teachers')->insert([

        ]);
    }
}
