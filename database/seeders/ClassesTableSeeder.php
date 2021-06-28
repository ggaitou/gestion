<?php


namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ClassesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("classes")->insert([
            ["libele"=>"6ème"],
            ["libele"=>"5ème"],
            ["libele"=>"4ème"],
            ["libele"=>"3ème"],
            ["libele"=>"2nd"],
            ["libele"=>"1ère"],
            ["libele"=>"Tle"],

        ]);
    }
}
