<?php

namespace Database\Seeders;

use App\Models\Craft;
use Illuminate\Database\Seeder;

class CraftSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Craft::factory(10)->create();
    }
}
