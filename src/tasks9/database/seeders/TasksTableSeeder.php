<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
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
        for ($i = 0; $i< 20; $i++) {
            Task::create([
                'user_id' => 1,
                'title' => Str::random(10),
                'description' => Str::random(30),
                'registration_date' => date('Y-m-d'),
                'expiration_date' => '2022-02-22',
            ]);
        }
    }
}
