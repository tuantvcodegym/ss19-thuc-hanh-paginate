<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ParigateTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        [
            DB::table('parigates')->insert([
                'Ten_khach_hang' => 'Tran Van Tuan',
                'Ngay_sinh' => 03-11-1997,
                'Email' => 'tuan@gmail.com',
                'Tinh_Thanh' => 'Thanh Hoa'
            ]),
            DB::table('parigates')->insert([
                'Ten_khach_hang' => 'Tran Van khanh',
                'Ngay_sinh' => 03-11-1997,
                'Email' => 'khanh@gmail.com',
                'Tinh_Thanh' => 'Thanh Hoa'
            ]),
            DB::table('parigates')->insert([
                'Ten_khach_hang' => 'Tran Van Tu',
                'Ngay_sinh' => 03-11-1997,
                'Email' => 'tu@gmail.com',
                'Tinh_Thanh' => 'Thanh Hoa'
            ]),
            DB::table('parigates')->insert([
                'Ten_khach_hang' => 'Tran Van Teo',
                'Ngay_sinh' => 03-11-1997,
                'Email' => 'teo@gmail.com',
                'Tinh_Thanh' => 'Thanh Hoa'
            ])
        ];

    }
}
