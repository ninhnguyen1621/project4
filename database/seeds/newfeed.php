<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class newfeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('newfeed')->delete();
        DB::table('newfeed')->insert([
            ['id'=>1,'title'=>'bài báo','post'=>'hello','time'=>'','img'=>'1.jpg'],  ['id'=>3,'title'=>'hallo','post'=>'123456','time'=>'Nguyễn ninh k','img'=>'2.jpg'],
        ]);
    }
}
