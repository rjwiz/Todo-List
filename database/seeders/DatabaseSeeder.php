<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Task;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this ->call(TaskstestSeeder::class);
    }
}
