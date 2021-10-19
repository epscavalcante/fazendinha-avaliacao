<?php

namespace Database\Seeders;

use App\Models\Launch;
use Illuminate\Database\Seeder;

class LaunchSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Launch::factory(3)->create();
    }
}
