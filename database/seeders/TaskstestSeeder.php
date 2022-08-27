<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Task;

class TaskstestSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'name' => 'testtask1',
            'tag_id' => '1',
        ];
        Task::create($param);
        $param = [
            'name' => 'testtask2',
            'tag_id' => '2',
        ];
        Task::create($param);
    }
}
