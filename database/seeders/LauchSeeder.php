<?php

namespace Database\Seeders;

use App\Models\Lauch;
use Illuminate\Database\Seeder;

class LauchSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Lauch::factory(3)->create();
    }
}
