<?php

namespace Database\Seeders;

use App\Models\Worker\Worker;
use Illuminate\Database\Seeder;

class WorkerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Worker::factory(100)->create();
    }
}
