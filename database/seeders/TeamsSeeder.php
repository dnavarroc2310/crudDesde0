<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Teams;

class TeamsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        /**
        *  php artisan migrate:fresh --seed **Para que se ejecuten los seeders**
        */
        Teams::factory()->count(20)->create();
    }
}
