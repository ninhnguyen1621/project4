<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tbl_user')->delete();
        DB::table('tbl_user')->insert([
            ['admin_id'=>2,'email'=>'ninh16@gmail.com','password'=>'123456','name'=>'Nguyễn ninh k','phone'=>'0356654487'], ['admin_id'=>1,'email'=>'ninh1226@gmail.com','password'=>'123456','name'=>'Nguyễn quang ninh','phone'=>'0356654487'],

        ]);
    }
}
