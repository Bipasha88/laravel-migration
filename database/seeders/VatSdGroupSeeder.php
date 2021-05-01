<?php

namespace Database\Seeders;

use App\Models\VatSdGroup;
use Illuminate\Database\Seeder;

class VatSdGroupSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        VatSdGroup::factory(10)->create();
        //
    }
}
