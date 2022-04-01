<?php

use Illuminate\Database\Seeder;

class ShopSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('shops')->insert([
            [
                'id' => 1,
                'shop_name' => 'ほげほげ',
                'area_id' => 1
            ],
            [
                'id' => 2,
                'shop_name' => 'あべし',
                'area_id' => 2
            ],
            [
                'id' => 3,
                'shop_name' => '日デブ',
                'area_id' => 1
            ],
        ]);
    }
}
