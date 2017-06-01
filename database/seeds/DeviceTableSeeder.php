<?php

use Illuminate\Database\Seeder;

class DeviceTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //自动生成测试数据
        /*DB::table('devices')->insert([
            'device_id'=>random_int(20030000,20990000),
            'device_name'=>('微型计算机'),
            'device_type'=>str_random(16),
            'device_price'=>random_int(100,100000),
            'device_department'=>('教学服务部'),
            'device_location'=>str_contains('思学楼',[0-9]),
            'device_buy'=>date('2013-11-30'),
            'device_owner'=>('陈梅'),

        ]);*/
        factory(App\Device::class,10)->create();
    }
}
