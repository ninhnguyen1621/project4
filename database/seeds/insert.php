<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class insert extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('category')->insert([
            'id' => '1',
            'name' => 'ao nam',
            
        ]);






    }
}
