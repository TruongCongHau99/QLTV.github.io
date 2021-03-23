<?php

use Illuminate\Database\Seeder;

class QuyenSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $quyen=[
            [
                'q_ten'=> 'thủ thư'
            ]

        ];
        $addquyen = DB::table('quyen')->insert($quyen);
    }
}
