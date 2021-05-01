<?php

namespace Database\Seeders;

use App\Models\SaleReturn;
use Illuminate\Database\Seeder;

class SaleReturnSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        SaleReturn::factory(10)->create();
        //
    }
}
