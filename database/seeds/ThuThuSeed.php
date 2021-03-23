<?php

use Illuminate\Database\Seeder;

class ThuThuSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $faker = Faker\Factory::create();
        for ($i=0; $i<10;$i++){
        $thuThu= [
            [
             'tt_hoten'=>$faker->name,
             'tt_gioitinh'=>rand(0,1),
             'tt_diachi'=>$faker->address,
             'tt_sdt'=>$faker->phoneNumber,
             'tt_ngaysinh'=>$faker->date($format = 'Y-m-d', $max = 'now'),
             'username'=>'conghau'.rand(1,999),
             'password'=>Hash::make(123),
             'q_id'=>1
            ]
         ];
         $addThuThu = DB::table('thuthu')->insert($thuThu);
        }
    }
}
