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
        $once = config('faker.once');
        $count = config('faker.count');
        for ($i = 0; $i < floor($count / $once); $i++) {
            Faker::factory()->count($once)->create();
        };
        Faker::factory()->count(($count % $once))->create();
        $end = microtime(true);
        $sec = ($end - $start);
        print_r('処理時間 = ' . $sec . ' 秒');
    }
}
