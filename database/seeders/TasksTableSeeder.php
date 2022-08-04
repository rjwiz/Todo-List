<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Task;

class TasksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'content' => 'testtask1',
        ];
        Task::create($param);
        $param = [
            'content' => 'testtask2'
        ];
        Task::create($param);
    }
}
