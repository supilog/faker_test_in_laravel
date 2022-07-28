<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Faker\Factory;
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
        $once = config('faker.once');
        $count = config('faker.count');
        $this->data($once, $count);
        // $start = microtime(true);
        // for ($i = 0; $i < floor($count / $once); $i++) {
        //     Faker::factory()->count($once)->create();
        // };
        // Faker::factory()->count(($count % $once))->create();
        // $end = microtime(true);
        // $sec = ($end - $start);
        // print_r('処理時間 = ' . $sec . ' 秒');
    }

    public function data($once, $count)
    {
        $times = floor($count / $once);
        $last = $count % $once;
        if ($times != 0) {
            // $once件データを取得してINSERT
            for ($i = 0; $i < $times; $i++) {
                $data_once = $this->make_data($once);
                Faker::insert($data_once);
            }
        }
        // lastのINSERT
        if ($last != 0) {
            $data_last = $this->make_data($last);
            Faker::insert($data_last);
        }
    }

    public function make_data($num)
    {
        $faker = Factory::create('ja_JP');
        $ret = array();
        for ($j = 0; $j < $num; $j++) {
            $tmp = array(
                'name' => $faker->name(),
                'age' => rand(1, 99),
                'email' => $faker->email(),
                'address' => $faker->address(),
                'text' => $faker->realText(),
                'flag1' => $faker->boolean(),
                'flag2' => $faker->boolean(),
                'flag3' => $faker->boolean(),
                'flag4' => $faker->boolean(),
                'flag5' => $faker->boolean(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            );
            array_push($ret, $tmp);
        }
        return $ret;
    }
}
