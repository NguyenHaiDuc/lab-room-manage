<?php

use Illuminate\Database\Seeder;

class TypeDevicesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Models\TypeDevices::class, 100)->create();
    }
}
