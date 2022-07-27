<?php

namespace Database\Seeders;

use App\Models\Faker;
use Illuminate\Database\Seeder;

class FakerTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $start = microtime(true);
        $count = config('faker.count');
        \App\Models\Faker::factory()->count($count)->create();
        $end = microtime(true);
        $sec = ($end - $start);
        print_r('処理時間 = ' . $sec . ' 秒');
    }
}
