<?php

use Illuminate\Database\Seeder;

class NganhNgheTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('nganh_nghes')->delete();
        
        \DB::table('nganh_nghes')->insert(array (
        	0=>
        	array(
        		'id' => 1,
        		'ten_nganh_nghe' =>'Điện lạnh',

        	),
        	1=>
        	array(
        		'id' => 2,
        		'ten_nganh_nghe' =>'Nhà hàng',

        	),
        	2=>
        	array(
        		'id' => 3,
        		'ten_nganh_nghe' =>'Khách sạn',

        	),

        ));
    }
}
